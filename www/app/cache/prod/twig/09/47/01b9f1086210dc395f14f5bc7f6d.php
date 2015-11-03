<?php

/* FOSFacebookBundle::initialize.html.twig */
class __TwigTemplate_094701b9f1086210dc395f14f5bc7f6d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div id=\"fb-root\"></div>
";
        // line 2
        if ((!$this->getContext($context, "async"))) {
            // line 3
            echo "<script type=\"text/javascript\" src=\"http://connect.facebook.net/";
            echo twig_escape_filter($this->env, $this->getContext($context, "culture"), "html", null, true);
            echo "/all.js\"></script>
";
        }
        // line 5
        echo "<script type=\"text/javascript\">
";
        // line 7
        if ($this->getContext($context, "async")) {
            // line 8
            echo "window.fbAsyncInit = function() {
";
        }
        // line 10
        echo "  FB.init(";
        echo twig_jsonencode_filter(array("appId" => $this->getContext($context, "appId"), "xfbml" => $this->getContext($context, "xfbml"), "oauth" => $this->getContext($context, "oauth"), "status" => $this->getContext($context, "status"), "cookie" => $this->getContext($context, "cookie"), "logging" => $this->getContext($context, "logging")));
        echo ");
";
        // line 11
        if ($this->getContext($context, "async")) {
            // line 12
            echo "  ";
            echo $this->getContext($context, "fbAsyncInit");
            echo "
};

(function() {
  var e = document.createElement('script');
  e.src = document.location.protocol + ";
            // line 17
            echo twig_jsonencode_filter(sprintf("//connect.facebook.net/%s/all.js", $this->getContext($context, "culture")));
            echo ";
  e.async = true;
  document.getElementById('fb-root').appendChild(e);
}());
";
        }
        // line 23
        echo "</script>
";
    }

    public function getTemplateName()
    {
        return "FOSFacebookBundle::initialize.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 23,  55 => 17,  44 => 11,  39 => 10,  33 => 7,  30 => 5,  24 => 3,  22 => 2,  19 => 1,  171 => 63,  165 => 6,  144 => 75,  131 => 64,  129 => 63,  126 => 62,  120 => 59,  115 => 57,  87 => 37,  73 => 34,  71 => 33,  65 => 32,  59 => 31,  46 => 12,  28 => 6,  21 => 1,  246 => 92,  241 => 90,  233 => 85,  229 => 84,  223 => 81,  219 => 80,  215 => 79,  209 => 76,  205 => 75,  200 => 73,  194 => 70,  190 => 69,  185 => 67,  179 => 64,  175 => 63,  170 => 61,  164 => 58,  160 => 57,  155 => 55,  149 => 52,  145 => 51,  140 => 49,  134 => 46,  130 => 45,  125 => 43,  117 => 58,  113 => 37,  109 => 36,  105 => 35,  99 => 32,  95 => 39,  91 => 30,  84 => 26,  80 => 35,  76 => 24,  70 => 21,  61 => 17,  57 => 16,  43 => 8,  41 => 7,  38 => 6,  35 => 8,  29 => 3,);
    }
}
