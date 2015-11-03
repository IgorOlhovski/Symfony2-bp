<?php

namespace bp\Bundle\Controller;
use bp\Bundle\Entity\User;
use bp\Bundle\Entity\Team;
use bp\Bundle\Entity\Club;
use bp\Bundle\Entity\League;
use bp\Bundle\Entity\Match;
use \DateTime as NewDT;
use bp\Bundle\Entity\Sport;
use bp\Bundle\Entity\Restapiusers;
use bp\Bundle\Entity\Tournament;
use bp\Bundle\Entity\PowerType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

class DefaultController extends Controller
{

public function connectFacebookWithAccountAction()
{
$fbService = $this->get('fos_facebook.user.login');
$fbService->connectExistingAccount();
return $this->redirect($this->generateUrl('fos_user_profile_edit'));
}
public function loginFbAction()
{
return $this->redirect($this->generateUrl("home"));
}


//function for homepage

public function homeAction($page=1)
{
$next_button = false;
$prev_button = false;
$favorites = false;
$results = $this->getalllistAction("Match", $page, "begins_at", "DESC", "no");
$favorites = $results[2];
$resultscheck = $this->getalllistAction("Match", $results[1]+1, "begins_at", "DESC", "no", "check");
if(isset($results[0]))
{
$results = $results[0];
$curdate = $results[0]['begins_at'];
$curdate2 = $curdate->format('Y-d-m');
$curdate = $curdate->format('l jS \of F Y');
$curdate1 = date("Y-d-m");
}
else
{
return $this->render('bpBundle:Default:home.html.twig', array('notfound' => true));
}
$nextpage = $resultscheck[1];
if($resultscheck[0])
{
$next_button = true;
}
if($page > 1)
{
$prev_button = true;
}
if($results)
{
$newar = 0;
$prevweek = false;
foreach($results as $key => $value)
{
if(isset($results[$key]['tournament_name']))
{
$newar = $results[$key]['tournament_name'];
if(!isset($newarr[$newar][$key]))
{
$newarr[$newar][$key] = $results[$key];
}
}
}
if ($curdate2 == $curdate1)
{
$curdate = "TODAY'S MATCHES";
}
return $this->render('bpBundle:Default:home.html.twig', array('favorites' => $favorites, 'notfound' => false, 'matches' => $newarr, 'prev_button' => $prev_button, 'next_button' => $next_button, 'curpage' => $page, 'nextpage' => $nextpage, 'curdate' => $curdate));
}
else
{
throw new NotFoundHttpException();
}
}

//For route /info

/**
* @Template()
*/
public function infoAction()
{
return array();
}

//For favoriting

public function favorAction($action, $id, $table)
{
$table = $this->cv($table);
if($table)
{
$remove = '<a href="/favorites/unfavor/'.$table.'/'.$id.'">'.$this->get('translator')->trans('remove_from_favor.content_title').'</a>';
$add = '<a href="/favorites/favor/'.$table.'/'.$id.'">'.$this->get('translator')->trans('add_to_favor.content_title').'</a>';
$new_val = false;
$suf = strtolower(substr($table, 0, 1));
$user_favor = $this->get('security.context')->getToken()->getUser()->getUsername();
if(is_numeric($id))
{
$wh = "id";
$id1 = $id;
}
else
{
$wh = "name";
$id = "'".htmlspecialchars($id, ENT_QUOTES)."'";
}
$find_favors = $this->getDoctrine()->getManager()->createQuery("SELECT ".$suf.".favorited_by FROM bpBundle:".$table." ".$suf." WHERE ".$suf.".".$wh." = ".$id);
if($find_favors->getResult())
{
$find_favors = $find_favors->getSingleScalarResult();
if(strpos($find_favors,$user_favor))
{
if($action == "unfavor")
{
$new_val = str_replace(" ".$user_favor." ", "", $find_favors);
$update_favors = $this->getDoctrine()->getManager()->createQuery("UPDATE bpBundle:".$table." ".$suf." SET ".$suf.".favorited_by = '".$new_val."' WHERE ".$suf.".".$wh." = ".$id)->execute();
return new Response($add);
}
else
{
return new Response($remove);
}
}
else
{
if($action == "favor")
{
$new_val = $find_favors." ".$user_favor." ";
$update_favors = $this->getDoctrine()->getManager()->createQuery("UPDATE bpBundle:".$table." ".$suf." SET ".$suf.".favorited_by = '".$new_val."' WHERE ".$suf.".".$wh." = ".$id)->execute();
return new Response($remove);
}
else
{
return new Response($add);
}
}
}
else
{
throw new NotFoundHttpException();
}
}
else
{
throw new NotFoundHttpException();
}
}


//function for editing team


/**
* @Template()
*/
public function edit_teamAction()
{
$curuser = $this->get('security.context')->getToken()->getUser()->getId();
$qa = $this->getDoctrine()->getRepository('bpBundle:Team')->find($curuser);
$qad = $this->getDoctrine()->getRepository('bpBundle:PowerType')->find($curuser);
$curname = $this->get('security.context')->getToken()->getUser();
if(!$qa)
{
$values= array(0 => 0, 1 => 0, 2 => 0, 3 => 0, 4 => 0, 5 => 0, 6 => 0, 7 => 0, 8 => 0, 9 => "");
return array('teamname'=> $curname, 'id'=>$curuser, 'values'=>$values, 'new'=>1);
}
elseif(!$qad)
{
$values= array(0 => 0, 1 => 0, 2 => 0, 3 => 0, 4 => 0, 5 => 0, 6 => 0, 7 => 0, 8 => 0, 9 => "");
return array('teamname'=> $curname, 'id'=>$curuser, 'values'=>$values, 'new'=>0);
}
else
{
$teamid = $qa->getid();
$qa = $this->getDoctrine()->getRepository('bpBundle:PowerType')->find($curuser);
$teamname = $qa->getname();
$val9 = $qa->gettactics();
$val1 = $qa->gethome_away();
$val2 = $qa->getmanagement();
$val3 = $qa->getgoulies();
$val4 = $qa->getdefence();
$val5 = $qa->getmidfield();
$val6 = $qa->getattack();
$val7 = $qa->getbench();
$val8 = $qa->getset_pieces();
$val10 = $qa->getdescription();
$values= array(0 => $val1, 1 => $val2, 2 => $val3, 3 => $val4, 4 => $val5, 5 => $val6, 6 => $val7, 7 => $val8, 8 => $val9, 9 => $val10);

return array('teamname'=>$teamname, 'id'=>$teamid, 'values'=>$values, 'new'=>0);
}
}


//function for showing all either in stardart way (returns array) either in REST API

/**
* @Rest\View
*/
public function getalllistAction($table, $page, $order=null, $by=null, $apis = null)
{
$columns = $this->container->getParameter('exposed_columns');
$table = $this->cv($table);

if($table && $page > 0)
{

$ca = explode(" ", $columns);
if(in_array($order, $ca) && $by == "ASC" || $by == "DESC")
{
$orderby = array($order => $by);
}
else
{
$orderby = array();
}

$page1 = $page-1;

$date = new \DateTime('-'.$page1.' days');
$date = get_object_vars($date);
$date = strtotime($date['date']);
$date = date("Y-m-d", $date);
$suf = strtolower(substr($table, 0, 1));
$curuser = $this->get('security.context')->getToken()->getUser();

if($table == "Match")
{
$favors = false;
if(method_exists($curuser, "getId") && isset($_GET['show']))
{
$favors = true;
}
if($favors)
{

$qa = $this->getDoctrine()->getManager()->createQuery(
"SELECT m, t 
FROM bpBundle:Match m  
LEFT  JOIN bpBundle:Tournament t 
WITH t.name = m.tournament_name 
WHERE t.favorited_by LIKE '% ".$curuser." %' 
AND m.begins_at LIKE '".$date."%'")->getResult();

}
else
{

$qa = $this->getDoctrine()->getManager()->createQuery(
"SELECT ".$suf." FROM bpBundle:".$table." ".$suf." WHERE ".$suf.".begins_at LIKE '".$date."%'")->getResult();

}
if(!$qa)
{
$qb = $this->getDoctrine()->getManager()->createQueryBuilder();
$qb->select('count(match.id)');
$qb->from('bpBundle:Match','match');
$count = $qb->getQuery()->getSingleScalarResult();
$i = $page;
while($count>=$i && !$qa)
{
$date = new \DateTime('-'.$i.' days');
$date = get_object_vars($date);
$date = strtotime($date['date']);
$date = date("Y-m-d", $date);
if($favors)
{
$qa = $this->getDoctrine()->getManager()->createQuery(
"SELECT m, t 
FROM bpBundle:Match m  
LEFT JOIN bpBundle:Tournament t 
WITH t.name = m.tournament_name 
WHERE t.favorited_by LIKE '% ".$curuser." %'
AND m.begins_at LIKE '".$date."%'")->getResult();
}
else
{
$qa = $this->getDoctrine()->getManager()->createQuery(
"SELECT ".$suf." FROM bpBundle:".$table." ".$suf." WHERE ".$suf.".begins_at LIKE '".$date."%'")->getResult();
}
$i++;
}

$foundpage = $i;
}
else
{
$foundpage = $page;
}
}
else
{
$foundpage = $page;
$qa = $this->getDoctrine()->getManager()->createQuery(
"SELECT ".$suf." FROM bpBundle:".$table." ".$suf)->getResult();
}

$iz = 0;

if(isset($qa[0]))
{
while(isset($qa[$iz]))
{
$ca = explode(" ", $columns);
$q = array();

foreach ($ca as $val)
{
$na = "get".$val;
if(method_exists($qa[$iz], $na))
{
$newar[$iz][$val] = $qa[$iz]->$na();
}
}
$iz++;
}
$r = $newar;

if($apis != "no")
{
$r = $this->jsonResponse($r, $table, $columns, null);
return new Response($r);
}
else
{
return array($r, $foundpage, $favors);
}
}
else
{
return false;
}
}
else
{
return false;
}
}

// function for showing or posting or deleting one item by slug or id, normal array returned or json (REST API)

/**
* @Rest\View
*/
public function getallAction($table, $slug)
{
$columns = $this->container->getParameter('exposed_columns');
$ca = explode(" ", $columns);
$table = $this->cv($table);
if($table)
{
$suf = strtolower(substr($table, 0, 1));
if($table == "Club" || $table == "Team" || $table == "Match")
{
$qa = $this->getDoctrine()->getRepository('bpBundle:'.$table)->findBySlug($slug);
if($qa)
{
$qa = $qa[0];
}
}
else
{
$qa = $this->getDoctrine()->getRepository('bpBundle:'.$table)->find($slug);
}

if(method_exists($qa, "getId"))
{

$id = $qa->getId();
$ca = explode(" ", $columns);
$q = array();
foreach ($ca as $val)
{
$na = "get".$val;
if(method_exists($qa, $na))
{
$newar[$val] = $qa->$na();
}
}
$q = $newar;
}
else
{
$q = false;
$id = $slug;
}

//for the request "DELETE"

if($q && $this->get('request')->getMethod() == "DELETE")
{
$response = $this->permission($id, $table, "deleted");
if($response)
{
$em = $this->getDoctrine()->getManager()->createQuery("DELETE FROM bpBundle:".$table." ".$suf." WHERE ".$suf.".id='".$id."'");
$companies = $em->getResult();
}
return new Response($response);
}

//for the request "POST"

elseif($this->get('request')->getMethod() == "POST")
{
$data = json_decode(file_get_contents("php://input"), true);
if(!$data)
{
$data = $_POST;
$bpapi = false;
}
else
{
if(isset($data['key']) && isset($data['api_id']) && isset($data['api_email']) && $data['key'] == $this->container->getParameter('rest_api_key'))
{
$bpapi['key'] = htmlspecialchars($data['key'], ENT_QUOTES);
$bpapi['api_id'] = htmlspecialchars($data['api_id'], ENT_QUOTES);
$bpapi['api_email'] = htmlspecialchars($data['api_email'], ENT_QUOTES);
}
else
{
$bpapi = false;
}
}

$response = $this->permission($id, $table, "updated or added", $bpapi);
if($response)
{
if($table == "Team")
{
$object_new = new Team();
}
elseif($table == "User")
{
$object_new = new User();
}
elseif($table == "Tournament")
{
$object_new = new Tournament();
}
elseif($table == "Club")
{
$object_new = new Club();
}
elseif($table == "Sport")
{
$object_new = new Sport();
}
elseif($table == "League")
{
$object_new = new League();
}
elseif($table == "Match")
{
$object_new = new Match();
}
elseif($table == "PowerType")
{
$object_new = new PowerType();
}
$count = 0;
if($q)
{
foreach ($data as $param_name => $param_val)
{
if (in_array($param_name, $ca))
{
$em = $this->getDoctrine()->getManager()->createQuery("UPDATE bpBundle:".$table." ".$suf." SET ".$suf.".".$param_name."='".$param_val."' WHERE ".$suf.".id = ".$id);
$companies = $em->getResult();
$count++;
}
}
if($count>0)
{
$dq = $this->getDoctrine()->getManager()->createQuery("UPDATE bpBundle:".$table." ".$suf." SET ".$suf.".updated='".date('Y-m-d h:m:s')."' WHERE ".$suf.".id = ".$id);
$dqa = $dq->getResult();
}
}
else
{
foreach ($data as $param_name => $param_val)
{
if (in_array($param_name, $ca))
{
$param_name1 = ucfirst(strtolower($param_name));
$func = "set".$param_name1;
if($func == "setBegins_at")
{
$object_new -> $func(new \DateTime($param_val));
}
else
{
$object_new -> $func($param_val);
}
$count++;
}
}
$object_new -> setId($id);
$object_new -> setCreated(new \DateTime());
$object_new -> setUpdated(new \DateTime());
$em = $this->getDoctrine()->getManager();
$em->persist($object_new);
$metadata = $em->getClassMetaData(get_class($object_new));
$metadata->setIdGeneratorType(\Doctrine\ORM\Mapping\ClassMetadata::GENERATOR_TYPE_NONE);
$em->flush();

}
if($count > 0)
{
$trans2= $this->get('translator')->trans('updated_entries.sysmsg');
return new Response($trans2."\n");
}
else
{
$trans2= $this->get('translator')->trans('not_updated.sysmsg');
return new Response($trans2."\n");
}
}
}

// for GET

else
{

$r = $this->jsonResponse($q, $table, $columns, null);
return new Response($r);
}
}
else
{
throw new NotFoundHttpException();
}
}

// function for checking the permissions

private function permission($id, $table, $text, $bpapi)
{
$users = $this->get('security.context')->getToken()->getUser();
if($users == "anon.")
{
$logged_in_user = -1;
}
else
{
$logged_in_user = $users->getId();
}
$bpapi_ok = false;
if($bpapi)
{
$rest = $this->getDoctrine()->getRepository('bpBundle:Restapiusers')->findBy(array("apiId" => $bpapi['api_id'], "email" => $bpapi['api_email']));
if($rest)
{
$history_old = $rest[0]->getHistory();
$history_new = $history_old.'{"'.$text.' '.$table.'":"'.date("Y-m-d H:i:s").'", "by": "'.$bpapi['api_email'].'", "where_id": "'.$id.'"}';
$dq = $this->getDoctrine()->getManager()->createQuery("UPDATE bpBundle:Restapiusers r SET r.history='".$history_new."' WHERE r.apiId = '".$bpapi['api_id']."'");
$dqa = $dq->getResult();
$bpapi_ok = true;
}
}
if($bpapi_ok || $logged_in_user == $id || $this->get('security.context')->isGranted('ROLE_SUPER_ADMIN') || $this->get('security.context')->isGranted('ROLE_ADMIN'))
{
$response1 = $this->get('translator')->trans('updated_ok.sysmsg');
return $response1."\n";
}
else
{
throw new AccessDeniedException();
}
}
private function cv($column)
{
$column = ucfirst(strtolower($column));
if($column == "FormIcon")
{
$column = "FormIcon";
}
elseif($column == "Powertype")
{
$column = "PowerType";
}
$valtab = $this->container->getParameter('valid_tables');
$valid_tables = explode(" ", $valtab);
if (in_array($column, $valid_tables))
{
return $column;
}
else
{
return false;
}
}

// function for json return 

private function jsonResponse($content, $title, $columns, $post)
{
if($content)
{
$json = json_encode($content);
}
else
{
throw new NotFoundHttpException();
}
return $json;
}
}
