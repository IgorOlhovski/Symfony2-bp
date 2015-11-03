<?php

/* SonataUserBundle:Profile:show.html.twig */
class __TwigTemplate_01c30f59096dbf07827c6df52b65ec04 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("edit_profile3.title"), "html", null, true);
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "

<div class=\"sonata-user-show\">

    <h2>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "firstname"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "lastname"), "html", null, true);
        echo "
    ";
        // line 11
        if ((($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "firstname") == false) && ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "firstname") == false))) {
            // line 12
            echo "    ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "app"), "user"), "html", null, true);
            echo "
    ";
        }
        // line 14
        echo "    </h2><br><br>

    <ul>
        <li><a class=\"btn btn-grey btn-small\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sonata_user_profile_edit"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_edit_profile"), "html", null, true);
        echo "</a></li>
        <li><a class=\"btn btn-grey btn-small\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sonata_user_profile_edit_authentication"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_edit_authentication"), "html", null, true);
        echo "</a></li>
                 <li><a class=\"btn btn-grey btn-small\" href=\"/profile/edit_team\">";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_edit_team"), "html", null, true);
        echo "</a></li>
        <li><a class=\"btn btn-grey btn-small\" href=\"/profile/change-password\">";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_change_password"), "html", null, true);
        echo "</a></li>
        <li><a class=\"btn btn-grey btn-small active\" href=\"/\">";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_done_editing"), "html", null, true);
        echo "</a></li>
    </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Profile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 21,  79 => 20,  75 => 19,  69 => 18,  63 => 17,  58 => 14,  52 => 12,  50 => 11,  44 => 10,  38 => 6,  35 => 5,  29 => 3,);
    }
}
