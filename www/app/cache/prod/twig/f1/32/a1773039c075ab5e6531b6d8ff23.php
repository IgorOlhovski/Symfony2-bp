<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_f132a1773039c075ab5e6531b6d8ff23 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("login.title"), "html", null, true);
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
";
        // line 7
        $this->displayBlock('fos_user_content', $context, $blocks);
    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 8
        echo "
";
        // line 9
        if ($this->getContext($context, "error")) {
            // line 10
            echo "<p class=\"alerterror\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "error"), array(), "FOSUserBundle"), "html", null, true);
            echo "</p>
";
        }
        // line 12
        echo "<ul class=\"login_links\">
<li><a class=\"active btn btn-grey btn-small\">";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("login.link2"), "html", null, true);
        echo "</a></li>
<li><a class=\"btn btn-grey btn-small\" href=\"/register\">";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("register.link2"), "html", null, true);
        echo "</a></li>
<li><a class=\"btn btn-grey btn-small\" href=\"/resetting/request\">";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("forgot_password.link2"), "html", null, true);
        echo "</a></li>
</ul>
<br><br><br><br>
<h2>";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("login.title"), "html", null, true);
        echo "</h2><br>
";
        // line 19
        echo $this->env->getExtension('facebook')->renderLoginButton();
        echo "<br>
<form action=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_security_check"), "html", null, true);
        echo "\" method=\"post\">
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getContext($context, "csrf_token"), "html", null, true);
        echo "\" />

    <label for=\"username\">";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getContext($context, "last_username"), "html", null, true);
        echo "\" required=\"required\" />

    <label for=\"password\">";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />

    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
    <label for=\"remember_me\">";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>

    <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
</form>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 32,  109 => 30,  102 => 26,  97 => 24,  93 => 23,  88 => 21,  84 => 20,  80 => 19,  76 => 18,  70 => 15,  66 => 14,  62 => 13,  59 => 12,  53 => 10,  51 => 9,  48 => 8,  42 => 7,  39 => 6,  36 => 5,  30 => 3,);
    }
}
