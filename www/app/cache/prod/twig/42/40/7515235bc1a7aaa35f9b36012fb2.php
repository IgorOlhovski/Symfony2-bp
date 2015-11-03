<?php

/* TwigBundle:Exception:logs.html.twig */
class __TwigTemplate_42407515235bc1a7aaa35f9b36012fb2 extends Twig_Template
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
        echo "<ol class=\"traces logs\">
    ";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "logs"));
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 3
            echo "        <li";
            if (($this->getAttribute($this->getContext($context, "log"), "priority") >= 400)) {
                echo " class=\"error\"";
            } elseif (($this->getAttribute($this->getContext($context, "log"), "priority") >= 300)) {
                echo " class=\"warning\"";
            }
            echo ">
            ";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "log"), "priorityName"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "log"), "message"), "html", null, true);
            echo "
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 7
        echo "</ol>
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:logs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  31 => 5,  25 => 4,  94 => 22,  92 => 21,  89 => 20,  85 => 19,  79 => 18,  75 => 17,  72 => 16,  68 => 14,  64 => 12,  56 => 9,  50 => 8,  196 => 90,  187 => 84,  183 => 82,  173 => 74,  168 => 72,  166 => 71,  163 => 70,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 57,  136 => 56,  133 => 55,  123 => 47,  121 => 46,  112 => 42,  101 => 24,  86 => 28,  69 => 25,  66 => 15,  62 => 23,  51 => 12,  49 => 19,  98 => 40,  93 => 9,  88 => 6,  78 => 40,  36 => 7,  32 => 12,  27 => 4,  54 => 21,  40 => 8,  63 => 23,  55 => 13,  44 => 10,  39 => 6,  33 => 5,  30 => 3,  24 => 3,  22 => 2,  19 => 1,  171 => 73,  165 => 6,  144 => 75,  131 => 64,  129 => 63,  126 => 62,  120 => 59,  115 => 43,  87 => 20,  73 => 34,  71 => 33,  65 => 32,  59 => 31,  46 => 7,  28 => 6,  21 => 2,  246 => 92,  241 => 90,  233 => 85,  229 => 84,  223 => 81,  219 => 80,  215 => 79,  209 => 76,  205 => 75,  200 => 73,  194 => 70,  190 => 69,  185 => 67,  179 => 64,  175 => 63,  170 => 61,  164 => 58,  160 => 57,  155 => 55,  149 => 52,  145 => 51,  140 => 49,  134 => 46,  130 => 45,  125 => 43,  117 => 44,  113 => 37,  109 => 36,  105 => 40,  99 => 32,  95 => 39,  91 => 31,  84 => 26,  80 => 19,  76 => 24,  70 => 21,  61 => 17,  57 => 14,  43 => 8,  41 => 9,  38 => 6,  35 => 4,  29 => 3,);
    }
}
