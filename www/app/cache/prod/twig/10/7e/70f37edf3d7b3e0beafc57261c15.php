<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_107e70f37edf3d7b3e0beafc57261c15 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TwigBundle::layout.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/css/exception.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "exception"), "message"), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, $this->getContext($context, "status_code"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getContext($context, "status_text"), "html", null, true);
        echo ")
";
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "    ";
        $this->env->loadTemplate("TwigBundle:Exception:exception.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 11,  40 => 7,  63 => 23,  55 => 17,  44 => 11,  39 => 10,  33 => 4,  30 => 3,  24 => 3,  22 => 2,  19 => 1,  171 => 63,  165 => 6,  144 => 75,  131 => 64,  129 => 63,  126 => 62,  120 => 59,  115 => 57,  87 => 37,  73 => 34,  71 => 33,  65 => 32,  59 => 31,  46 => 12,  28 => 6,  21 => 1,  246 => 92,  241 => 90,  233 => 85,  229 => 84,  223 => 81,  219 => 80,  215 => 79,  209 => 76,  205 => 75,  200 => 73,  194 => 70,  190 => 69,  185 => 67,  179 => 64,  175 => 63,  170 => 61,  164 => 58,  160 => 57,  155 => 55,  149 => 52,  145 => 51,  140 => 49,  134 => 46,  130 => 45,  125 => 43,  117 => 58,  113 => 37,  109 => 36,  105 => 35,  99 => 32,  95 => 39,  91 => 30,  84 => 26,  80 => 35,  76 => 24,  70 => 21,  61 => 17,  57 => 12,  43 => 8,  41 => 7,  38 => 6,  35 => 8,  29 => 3,);
    }
}
