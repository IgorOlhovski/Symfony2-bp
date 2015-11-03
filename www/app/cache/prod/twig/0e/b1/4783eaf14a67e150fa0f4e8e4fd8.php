<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_0eb14783eaf14a67e150fa0f4e8e4fd8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("bpBundle:Default:layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("home.title"), "html", null, true);
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <ul>
        <li><a class=\"btn btn-grey btn-small\" href=\"/profile/edit-profile\">";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_edit_profile"), "html", null, true);
        echo "</a></li>
        <li><a class=\"btn btn-grey btn-small\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sonata_user_profile_edit_authentication"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_edit_authentication"), "html", null, true);
        echo "</a></li>
        <li><a class=\"btn btn-grey btn-small\" href=\"/profile/edit_team\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_edit_team"), "html", null, true);
        echo "</a></li>
        <li><a class=\"btn btn-grey btn-small active\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_change_password"), "html", null, true);
        echo "</a></li>
        <li><a class=\"btn btn-grey btn-small\" href=\"/profile\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_done_editing"), "html", null, true);
        echo "</a></li>
    </ul><br><br><br><br>
    <h2>";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("change_password.title"), "html", null, true);
        echo "</h2>
";
        // line 14
        $this->displayBlock('fos_user_content', $context, $blocks);
    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 15
        $this->env->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 15,  69 => 14,  65 => 13,  60 => 11,  56 => 10,  52 => 9,  46 => 8,  42 => 7,  39 => 6,  36 => 5,  30 => 3,);
    }
}
