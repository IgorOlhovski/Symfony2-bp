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
     <link rel=\"stylesheet\" href=\"/bootstrap.min.css\">
    
    <link rel=\"stylesheet\" href=\"/bootstrap-select.min.css\">
    <!--[if lt IE 9]>
\t    <script src=\"http://html5shiv.googlecode.com/svn/trunk/html5.js\"></script>
\t<![endif]-->
 
\t<script src=\"http://code.jquery.com/jquery-1.9.1.min.js\"></script>
 <script src=\"http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/js/bootstrap.min.js\"></script>
\t<script src=\"/bootstrap-select.min.js\"></script>
\t<script src=\"/main.js\"></script>
";
        // line 21
        echo $this->env->getExtension('facebook')->renderInitialize(array("xfbml" => true, "fbAsyncInit" => "onFbInit();"));
        echo "

</head>
    
<body>

\t<section id=\"topbar\">
\t\t<div class=\"responsive-container\">
\t\t\t<div class=\"clearfix\">
\t\t\t\t<ul class=\"toplinks\">
\t\t\t\t\t<li><a href=\"/\" title='";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("home.link"), "html", null, true);
        echo "'>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("home.link"), "html", null, true);
        echo "</a></li>
\t\t\t\t\t<li><a href=\"/info\" title='";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("info.link"), "html", null, true);
        echo "'>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("info.link"), "html", null, true);
        echo "</a></li>
\t\t\t\t\t";
        // line 33
        if ($this->getAttribute($this->getContext($context, "app"), "user")) {
            // line 34
            echo "\t\t\t\t\t<li><a href=\"/profile\" title='";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.link"), "html", null, true);
            echo "'>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.link"), "html", null, true);
            echo "</a></li>
\t\t\t\t\t<li><a href=\"/logout\" title='";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("logout.link"), "html", null, true);
            echo "'>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("logout.link"), "html", null, true);
            echo "</a></li>
\t\t\t\t\t";
        } else {
            // line 37
            echo "\t\t\t\t\t<li><a href=\"/login\" title='";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("login.link"), "html", null, true);
            echo "'>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("login.link"), "html", null, true);
            echo "</a></li>
\t\t\t\t\t";
        }
        // line 39
        echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</section>
\t
\t<div class=\"responsive-container\">
\t
\t\t<header class=\"clearfix\">
\t\t\t<div class=\"logo\"><a href=\"/\"><img src=\"/img/logo.png\" height=\"120\" width=\"140\" alt=\"BetPowers\"></a></div>
\t\t\t<div class=\"description\"><img src=\"/img/description.png\" height=\"120\" width=\"466\" alt=\"\"></div>
\t\t</header>
\t\t
\t\t<section class=\"main_img\">
\t\t\t<img src=\"/img/main_img.png\" width=\"986\" height=\"390\" alt=\"BetPowers\">
\t\t</section>
\t\t
\t\t<section id=\"main\" class=\"data\">
     
\t\t\t";
        // line 57
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "hasFlash", array(0 => "fos_user_success"), "method")) {
            // line 58
            echo "  <div class=\"alertsuccess\">
        ";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flash", array(0 => "fos_user_success"), "method"), "html", null, true);
            echo "
 </div>
";
        }
        // line 62
        echo "   
";
        // line 63
        $this->displayBlock('content', $context, $blocks);
        // line 64
        echo "`
\t\t</section>
\t\t
\t\t<footer>
\t\t</footer>
\t
\t</div>

</body>
<script type=\"text/javascript\">

        var authurl = '";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_security_check_facebook"), "html", null, true);
        echo "';

        function goLogIn(){
            window.location = authurl;
        }

        function onFbInit() {
            if (typeof(FB) != 'undefined' && FB != null ) {
                FB.Event.subscribe('auth.statusChange', function(response) {
                    setTimeout(goLogIn, 500);
                });
            }
        }

</script>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome to BetPowers!";
    }

    // line 63
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
        return array (  171 => 63,  165 => 6,  144 => 75,  131 => 64,  129 => 63,  126 => 62,  120 => 59,  115 => 57,  87 => 37,  73 => 34,  71 => 33,  65 => 32,  59 => 31,  46 => 21,  28 => 6,  21 => 1,  246 => 92,  241 => 90,  233 => 85,  229 => 84,  223 => 81,  219 => 80,  215 => 79,  209 => 76,  205 => 75,  200 => 73,  194 => 70,  190 => 69,  185 => 67,  179 => 64,  175 => 63,  170 => 61,  164 => 58,  160 => 57,  155 => 55,  149 => 52,  145 => 51,  140 => 49,  134 => 46,  130 => 45,  125 => 43,  117 => 58,  113 => 37,  109 => 36,  105 => 35,  99 => 32,  95 => 39,  91 => 30,  84 => 26,  80 => 35,  76 => 24,  70 => 21,  61 => 17,  57 => 16,  43 => 8,  41 => 7,  38 => 6,  35 => 5,  29 => 3,);
    }
}
