<?php

/* bpBundle:Default:layout.html.twig */
class __TwigTemplate_4e245f2d08854b6d70505434e4be58b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo " | betpowers.com</title>
    <meta name=\"description\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width\">
    <link rel=\"stylesheet\" href=\"/style.css\">
    <!--[if lt IE 9]>
\t    <script src=\"http://html5shiv.googlecode.com/svn/trunk/html5.js\"></script>
\t<![endif]-->
\t<script src=\"http://code.jquery.com/jquery-1.9.1.min.js\"></script>
\t
\t<script src=\"/main.js\"></script>
</head>
    
<body>

\t<section id=\"topbar\">
\t\t<div class=\"responsive-container\">
\t\t\t<div class=\"clearfix\">
\t\t\t\t<ul class=\"toplinks\">
\t\t\t\t\t<li><a href=\"/\" title='";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("home.link"), "html", null, true);
        echo "'>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("home.link"), "html", null, true);
        echo "</a></li>
\t\t\t\t\t<li><a href=\"/info\" title='";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("info.link"), "html", null, true);
        echo "'>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("info.link"), "html", null, true);
        echo "</a></li>
\t\t\t\t\t";
        // line 26
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user")) {
            // line 27
            echo "\t\t\t\t\t<li><a href=\"/profile\" title='";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.link"), "html", null, true);
            echo "'>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.link"), "html", null, true);
            echo "</a></li>
\t\t\t\t\t<li><a href=\"/logout\" title='";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("logout.link"), "html", null, true);
            echo "'>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("logout.link"), "html", null, true);
            echo "</a></li>
\t\t\t\t\t";
        } else {
            // line 30
            echo "\t\t\t\t\t<li><a href=\"/login\" title='";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("login.link"), "html", null, true);
            echo "'>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("login.link"), "html", null, true);
            echo "</a></li>
\t\t\t\t\t";
        }
        // line 32
        echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</section>
\t
\t<div class=\"responsive-container\">
\t
\t\t<header class=\"clearfix\">
\t\t\t<div class=\"logo\"><img src=\"/img/logo.png\" height=\"120\" width=\"140\" alt=\"BetPowers\"></div>
\t\t\t<div class=\"description\"><img src=\"/img/description.png\" height=\"120\" width=\"466\" alt=\"\"></div>
\t\t</header>
\t\t
\t\t<section class=\"main_img\">
\t\t\t<img src=\"/img/main_img.png\" width=\"986\" height=\"390\" alt=\"BetPowers\">
\t\t</section>
\t\t
\t\t<section id=\"main\" class=\"data\">
\t\t\t";
        // line 49
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "hasFlash", array(0 => "fos_user_success"), "method")) {
            // line 50
            echo "    <div class=\"alertsuccess\">
        ";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flash", array(0 => "fos_user_success"), "method"), "html", null, true);
            echo "
    </div>
";
        }
        // line 54
        $this->displayBlock('content', $context, $blocks);
        // line 55
        echo "`
\t\t</section>
\t\t
\t\t<footer>
\t\t</footer>
\t
\t</div>

</body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome to BetPowers!";
    }

    // line 54
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "bpBundle:Default:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 54,  104 => 49,  77 => 30,  63 => 27,  129 => 74,  102 => 56,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  235 => 74,  229 => 73,  224 => 71,  220 => 70,  214 => 69,  208 => 68,  169 => 60,  143 => 56,  140 => 55,  132 => 51,  128 => 49,  119 => 42,  107 => 36,  38 => 6,  71 => 17,  177 => 65,  165 => 64,  160 => 61,  135 => 47,  126 => 45,  114 => 42,  84 => 44,  70 => 28,  67 => 15,  61 => 26,  28 => 6,  87 => 20,  25 => 5,  21 => 1,  94 => 22,  89 => 20,  85 => 32,  75 => 38,  68 => 14,  56 => 9,  196 => 90,  183 => 70,  171 => 61,  166 => 71,  163 => 70,  158 => 67,  156 => 58,  151 => 57,  142 => 59,  138 => 57,  136 => 56,  121 => 46,  117 => 55,  105 => 40,  91 => 31,  62 => 23,  49 => 24,  31 => 4,  26 => 6,  24 => 3,  19 => 1,  93 => 50,  88 => 6,  78 => 21,  46 => 7,  44 => 12,  27 => 4,  79 => 18,  72 => 16,  69 => 25,  47 => 9,  40 => 7,  37 => 10,  22 => 2,  246 => 32,  157 => 56,  145 => 87,  139 => 50,  131 => 6,  123 => 47,  120 => 68,  115 => 54,  111 => 62,  108 => 37,  101 => 32,  98 => 31,  96 => 31,  83 => 25,  74 => 14,  66 => 15,  55 => 25,  52 => 18,  50 => 10,  43 => 6,  41 => 5,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 74,  168 => 66,  164 => 59,  162 => 62,  154 => 54,  149 => 51,  147 => 58,  144 => 53,  141 => 51,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 36,  112 => 42,  109 => 51,  106 => 50,  103 => 37,  99 => 30,  95 => 34,  92 => 33,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 14,  60 => 6,  57 => 11,  54 => 10,  51 => 14,  48 => 8,  45 => 17,  42 => 7,  39 => 9,  36 => 5,  33 => 4,  30 => 7,);
    }
}
