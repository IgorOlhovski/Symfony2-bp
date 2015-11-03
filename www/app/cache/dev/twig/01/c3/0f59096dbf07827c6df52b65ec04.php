<?php

/* FOSUserBundle:Profile:show.html.twig */
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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "firstname"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "lastname"), "html", null, true);
        echo "
    ";
        // line 11
        if ((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "firstname") == false) && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "firstname") == false))) {
            // line 12
            echo "    ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "html", null, true);
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
        return "FOSUserBundle:Profile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 14,  110 => 31,  76 => 18,  59 => 12,  192 => 82,  150 => 56,  53 => 10,  137 => 54,  104 => 49,  77 => 30,  63 => 17,  129 => 74,  102 => 56,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  235 => 74,  229 => 73,  224 => 71,  220 => 70,  214 => 69,  208 => 68,  169 => 60,  143 => 52,  140 => 55,  132 => 51,  128 => 49,  119 => 44,  107 => 36,  38 => 6,  71 => 17,  177 => 73,  165 => 64,  160 => 61,  135 => 50,  126 => 45,  114 => 42,  84 => 20,  70 => 15,  67 => 15,  61 => 26,  28 => 3,  87 => 20,  25 => 5,  21 => 1,  94 => 22,  89 => 22,  85 => 32,  75 => 19,  68 => 14,  56 => 9,  196 => 90,  183 => 70,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 58,  151 => 57,  142 => 59,  138 => 57,  136 => 56,  121 => 46,  117 => 43,  105 => 29,  91 => 31,  62 => 13,  49 => 13,  31 => 4,  26 => 6,  24 => 3,  19 => 1,  93 => 23,  88 => 6,  78 => 21,  46 => 7,  44 => 10,  27 => 4,  79 => 20,  72 => 16,  69 => 18,  47 => 9,  40 => 7,  37 => 8,  22 => 2,  246 => 32,  157 => 56,  145 => 87,  139 => 51,  131 => 48,  123 => 47,  120 => 68,  115 => 54,  111 => 62,  108 => 37,  101 => 35,  98 => 25,  96 => 31,  83 => 21,  74 => 14,  66 => 14,  55 => 25,  52 => 12,  50 => 11,  43 => 6,  41 => 5,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 84,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 74,  168 => 66,  164 => 59,  162 => 62,  154 => 57,  149 => 51,  147 => 58,  144 => 53,  141 => 51,  133 => 55,  130 => 41,  125 => 46,  122 => 43,  116 => 36,  112 => 41,  109 => 51,  106 => 50,  103 => 37,  99 => 30,  95 => 32,  92 => 33,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 19,  60 => 6,  57 => 11,  54 => 10,  51 => 9,  48 => 8,  45 => 17,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
