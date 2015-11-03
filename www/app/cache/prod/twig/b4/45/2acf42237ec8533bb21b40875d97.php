<?php

/* bpBundle:Default:edit_team.html.twig */
class __TwigTemplate_b4452acf42237ec8533bb21b40875d97 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("bpBundle:Default:layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "bpBundle:Default:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("edit_team.title"), "html", null, true);
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "



";
        // line 10
        if (($this->getContext($context, "new") == 1)) {
            // line 11
            echo "<section>
<h2>Creating new team</h2><br>
<form style=\"width: 190px !important;\" action=\"/bpapi/team/";
            // line 13
            echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
            echo "\" method=\"POST\" class=\"post_ajax\">

<input type=\"hidden\" class=\"slugz\" placeholder=\"Slug of a team\" value=\"\" name=\"slug\">
<input type=\"text\" onkeyup=\"\$('.slugz').val(convertToSlug(\$(this).val()));\" placeholder=\"Public name of a team\" value=\"\" name=\"name\"> <br><br>
  <span class=\"button-ajax\" style=\"margin-left: 10px;\"><img class=\"button-ajax\" src=\"/ajax-loader.gif\"></span>
<input type=\"submit\" style=\"float:left !important;\" href=\"#\" class=\"btn btn-small btn-blue alignright\" value=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("save.buttons"), "html", null, true);
            echo "\">
</form>
";
        } else {
            // line 21
            echo "<a id=\"editbutton\" class=\"btn btn-image btn-grey alignleft\"><img src=\"/img/tottenham_logo.png\" alt=\"Tottenham\"> <span>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("edit_team.title12"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getContext($context, "teamname"), "html", null, true);
            echo "</span></a>

<a id=\"powers\" class=\"btn btn-image btn-green alignleft\" style=\"margin-left:300px;\"><b>0</b>/800</a>

<div class=\"clearfix\"></div>

<br/>
<section>
<form style=\"width: 100% !important;\" action=\"/bpapi/PowerType/";
            // line 29
            echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
            echo "\" method=\"POST\" class=\"post_ajax\">

<span class=\"editname\"><label>";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("edit_team.title13"), "html", null, true);
            echo "</label><input type=\"text\" name=\"name\" value=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "teamname"), "html", null, true);
            echo "\"></span>
<table class=\"sliders\">
\t<thead>
\t<tr>
\t\t<td width=\"150\" align=\"center\" class=\"black\">";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("edit_team.title1"), "html", null, true);
            echo "</td>
\t\t<td width=\"490\" align=\"center\">
  
  <input class=\"ranger\" id=\"range9\" name=\"home_away\" type=\"range\" min=1 max=100 value=";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "values"), 0, array(), "array"), "html", null, true);
            echo ">
      <output for=\"range9\">";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "values"), 0, array(), "array"), "html", null, true);
            echo "</output><p class=\"min\">0</p><p class=\"max\">100</p></td>
\t\t<td width=\"300\">";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("edit_team.title11"), "html", null, true);
            echo "</td>
\t</tr>
\t</thead>
\t<tr>
\t\t<td align=\"center\" class=\"black\">";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("edit_team.title2"), "html", null, true);
            echo "</td>
\t\t<td width=\"490\" align=\"center\"><input class=\"ranger\" id=\"range\" name=\"management\" type=\"range\" min=1 max=100 value=";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "values"), 1, array(), "array"), "html", null, true);
            echo ">
      <output for=\"range\">";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "values"), 1, array(), "array"), "html", null, true);
            echo "</output><p class=\"min\">0</p><p class=\"max\">100</p></td>
      \t<td rowspan=\"10\" class=\"valigntop\">
\t      \t<ul class=\"reminders\">
\t\t      \t<li><img src=\"/img/lightning_bolt.png\" alt=\"\"> <span>";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("edit_team.explain1"), "html", null, true);
            echo "</span></li>
\t\t      \t<li><img src=\"/img/www.png\" alt=\"\"> <span>";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("edit_team.explain2"), "html", null, true);
            echo "</span></li>
\t\t      \t<li><img src=\"/img/ex_mark.png\" alt=\"\"> <span>";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("edit_team.explain3"), "html", null, true);
            echo "</span></li>
\t\t      \t<li><img src=\"/img/qmark_greybg.png\" alt=\"\"> <span>";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("edit_team.explain4"), "html", null, true);
            echo "</span></li>
\t      \t</ul>
      \t</td>
\t</tr>
\t<tr>
\t\t<td align=\"center\" class=\"black\">";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("edit_team.title3"), "html", null, true);
            echo "</td>
\t\t<td width=\"490\" align=\"center\">
\t\t<input class=\"ranger\" id=\"range2\" name=\"goulies\" type=\"range\" min=1 max=100 value=";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "values"), 2, array(), "array"), "html", null, true);
            echo ">
      <output for=\"range2\">";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "values"), 2, array(), "array"), "html", null, true);
            echo "</output><p class=\"min\">0</p><p class=\"max\">100</p></td>
\t</tr>
\t<tr>
\t\t<td align=\"center\" class=\"black\">";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("edit_team.title4"), "html", null, true);
            echo "</td>
\t\t<td width=\"490\" align=\"center\">
\t\t<input class=\"ranger\" id=\"range3\" name=\"defence\" type=\"range\" min=1 max=100 value=";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "values"), 3, array(), "array"), "html", null, true);
            echo ">
      <output for=\"range3\">";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "values"), 3, array(), "array"), "html", null, true);
            echo "</output><p class=\"min\">0</p><p class=\"max\">100</p></td>
\t</tr>
\t<tr>
\t\t<td align=\"center\" class=\"black\">";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("edit_team.title5"), "html", null, true);
            echo "</td>
\t\t<td width=\"490\" align=\"center\">
\t\t<input class=\"ranger\" id=\"range4\" name=\"midfield\" type=\"range\" min=1 max=100 value=";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "values"), 4, array(), "array"), "html", null, true);
            echo ">
      <output for=\"range4\">";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "values"), 4, array(), "array"), "html", null, true);
            echo "</output><p class=\"min\">0</p><p class=\"max\">100</p></td>
\t</tr>
\t<tr>
\t\t<td align=\"center\" class=\"black\">";
            // line 75
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("edit_team.title6"), "html", null, true);
            echo "</td>
\t\t<td width=\"490\" align=\"center\">
\t\t<input class=\"ranger\" id=\"range5\" name=\"attack\" type=\"range\" min=1 max=100 value=";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "values"), 5, array(), "array"), "html", null, true);
            echo ">
      <output for=\"range5\">";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "values"), 5, array(), "array"), "html", null, true);
            echo "</output><p class=\"min\">0</p><p class=\"max\">100</p></td>
\t</tr>
\t<tr>
\t\t<td align=\"center\" class=\"black\">";
            // line 81
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("edit_team.title7"), "html", null, true);
            echo "</td>
\t\t<td width=\"490\" align=\"center\">
\t\t<input class=\"ranger\" id=\"range6\" name=\"bench\" type=\"range\" min=1 max=100 value=";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "values"), 6, array(), "array"), "html", null, true);
            echo ">
      <output for=\"range6\">";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "values"), 6, array(), "array"), "html", null, true);
            echo "</output><p class=\"min\">0</p><p class=\"max\">100</p></td>
\t</tr>
\t<tr>
\t\t<td align=\"center\" class=\"black\">";
            // line 87
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("edit_team.title8"), "html", null, true);
            echo "</td>
\t\t<td width=\"490\" align=\"center\">
\t\t<input class=\"ranger\" id=\"range7\" name=\"set_pieces\" type=\"range\" min=1 max=100 value=";
            // line 89
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "values"), 7, array(), "array"), "html", null, true);
            echo ">
      <output for=\"range7\">";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "values"), 7, array(), "array"), "html", null, true);
            echo "</output><p class=\"min\">0</p><p class=\"max\">100</p></td>
\t</tr>
\t<tr>
\t\t<td align=\"center\" class=\"black\">";
            // line 93
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("edit_team.title9"), "html", null, true);
            echo "</td>
\t\t<td width=\"490\" align=\"center\"><input class=\"ranger\" id=\"range8\" name=\"tactics\" type=\"range\" min=1 max=100 value=";
            // line 94
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "values"), 8, array(), "array"), "html", null, true);
            echo ">
      <output for=\"range8\">";
            // line 95
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "values"), 8, array(), "array"), "html", null, true);
            echo "</output><p class=\"min\">0</p><p class=\"max\">100</p></td>
\t</tr>
\t<tr>
\t\t<td align=\"center\" class=\"black valigntop\">";
            // line 98
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("edit_team.title10"), "html", null, true);
            echo "&nbsp;&nbsp;<img src=\"/img/qmark.png\" alt=\"\"></td>
\t\t<td><textarea name=\"description\">";
            // line 99
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "values"), 9, array(), "array"), "html", null, true);
            echo "</textarea></td>
\t</tr>
\t<tr>
\t\t<td></td>
\t\t<td align=\"right\">
\t\t<a href=\"/profile\" class=\"btn btn-small btn-grey alignright\" style=\"margin-left:10px;\">";
            // line 104
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_done_editing"), "html", null, true);
            echo "</a>
  <span class=\"button-ajax\"><img class=\"button-ajax\" src=\"/ajax-loader.gif\"></span>
  <input type=\"submit\" href=\"#\" class=\"btn btn-small btn-blue alignright\" value=\"";
            // line 106
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("save.buttons"), "html", null, true);
            echo "\">
\t\t</td>
\t</tr>
</table>
</form>
";
        }
        // line 112
        echo "</section>

";
    }

    public function getTemplateName()
    {
        return "bpBundle:Default:edit_team.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  277 => 112,  268 => 106,  263 => 104,  255 => 99,  251 => 98,  245 => 95,  241 => 94,  237 => 93,  231 => 90,  227 => 89,  222 => 87,  216 => 84,  212 => 83,  207 => 81,  201 => 78,  197 => 77,  192 => 75,  186 => 72,  182 => 71,  177 => 69,  171 => 66,  167 => 65,  162 => 63,  156 => 60,  152 => 59,  147 => 57,  139 => 52,  135 => 51,  131 => 50,  127 => 49,  121 => 46,  117 => 45,  113 => 44,  106 => 40,  102 => 39,  98 => 38,  92 => 35,  83 => 31,  78 => 29,  64 => 21,  58 => 18,  50 => 13,  46 => 11,  44 => 10,  38 => 6,  35 => 5,  29 => 3,);
    }
}
