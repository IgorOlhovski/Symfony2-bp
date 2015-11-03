<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_933f2441c9f34f9b8f9ea57676ff441b extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("request_password.title"), "html", null, true);
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<ul class=\"login_links\">
<li><a class=\"btn btn-grey btn-small\" href=\"/login\">";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("login.link2"), "html", null, true);
        echo "</a></li>
<li><a class=\"btn btn-grey btn-small\" href=\"/register\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("register.link2"), "html", null, true);
        echo "</a></li>
<li><a class=\"btn btn-grey btn-small active\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("forgot_password.link2"), "html", null, true);
        echo "</a></li>
</ul>
<br><br><br><br>
<h2>";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("request_password.title"), "html", null, true);
        echo "</h2>
";
        // line 13
        $this->displayBlock('fos_user_content', $context, $blocks);
    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 14
        $this->env->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 14,  60 => 13,  56 => 12,  50 => 9,  46 => 8,  42 => 7,  39 => 6,  36 => 5,  30 => 3,);
    }
}
