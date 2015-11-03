<?php

/* SonataAdminBundle:Core:create_button.html.twig */
class __TwigTemplate_95d62a2711e799dddc223682c4e0db4b extends Twig_Template
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
        // line 11
        echo "
";
        // line 12
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "create"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "CREATE"), "method"))) {
            // line 13
            echo "    ";
            if (twig_test_empty($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "subClasses"))) {
                // line 14
                echo "        <a class=\"btn sonata-action-element\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "create"), "method"), "html", null, true);
                echo "\">
            <i class=\"icon-plus\"></i>
            ";
                // line 16
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_action_create", array(), "SonataAdminBundle"), "html", null, true);
                echo "</a>
    ";
            } else {
                // line 18
                echo "        <span class=\"btn-group sonata-action-element\">
            <a class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                <i class=\"icon-plus\"></i>
                ";
                // line 21
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_action_create", array(), "SonataAdminBundle"), "html", null, true);
                echo "
                <span class=\"caret\"></span>
            </a>
            <ul class=\"dropdown-menu\">
                ";
                // line 25
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "subclasses")));
                foreach ($context['_seq'] as $context["_key"] => $context["subclass"]) {
                    // line 26
                    echo "                    <li>
                        <a href=\"";
                    // line 27
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "create", 1 => array("subclass" => (isset($context["subclass"]) ? $context["subclass"] : $this->getContext($context, "subclass")))), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["subclass"]) ? $context["subclass"] : $this->getContext($context, "subclass")), array(), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationdomain")), "html", null, true);
                    echo "</a>
                    </li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subclass'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 30
                echo "            </ul>
        </span>
    ";
            }
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:create_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 16,  335 => 94,  331 => 92,  326 => 90,  312 => 89,  306 => 87,  303 => 86,  286 => 85,  283 => 84,  276 => 81,  271 => 79,  255 => 69,  250 => 67,  245 => 66,  243 => 65,  240 => 64,  218 => 57,  211 => 53,  206 => 51,  190 => 50,  187 => 49,  184 => 48,  181 => 47,  175 => 45,  172 => 44,  167 => 42,  164 => 41,  152 => 35,  147 => 33,  144 => 32,  120 => 21,  115 => 20,  112 => 19,  109 => 18,  103 => 16,  101 => 15,  93 => 14,  80 => 9,  77 => 8,  73 => 7,  68 => 30,  65 => 5,  56 => 78,  53 => 77,  50 => 25,  45 => 63,  42 => 61,  40 => 41,  32 => 32,  27 => 14,  24 => 13,  52 => 20,  47 => 25,  37 => 40,  23 => 12,  20 => 11,  34 => 38,  31 => 19,  29 => 31,  26 => 14,  22 => 12,  19 => 11,  636 => 205,  631 => 203,  625 => 201,  623 => 200,  617 => 196,  608 => 193,  604 => 192,  598 => 191,  595 => 190,  591 => 189,  586 => 187,  579 => 185,  571 => 183,  568 => 182,  565 => 181,  560 => 100,  549 => 98,  545 => 97,  538 => 93,  534 => 92,  529 => 91,  526 => 90,  514 => 79,  511 => 78,  507 => 102,  505 => 90,  501 => 88,  499 => 78,  496 => 77,  493 => 76,  489 => 171,  482 => 166,  474 => 164,  472 => 163,  469 => 162,  461 => 160,  459 => 159,  456 => 158,  450 => 157,  442 => 155,  434 => 153,  431 => 152,  426 => 151,  423 => 149,  415 => 147,  413 => 146,  410 => 145,  402 => 143,  400 => 142,  394 => 139,  391 => 138,  389 => 137,  384 => 134,  379 => 131,  370 => 128,  361 => 127,  357 => 126,  353 => 125,  347 => 124,  343 => 122,  341 => 121,  332 => 117,  329 => 91,  324 => 113,  310 => 112,  301 => 111,  284 => 110,  279 => 82,  277 => 108,  273 => 80,  268 => 78,  265 => 103,  262 => 76,  259 => 70,  257 => 74,  252 => 72,  249 => 71,  246 => 70,  241 => 67,  226 => 65,  223 => 64,  220 => 63,  203 => 62,  200 => 61,  197 => 60,  191 => 56,  185 => 55,  182 => 54,  178 => 46,  174 => 51,  169 => 43,  163 => 49,  151 => 48,  149 => 34,  146 => 46,  143 => 45,  140 => 44,  137 => 43,  134 => 26,  131 => 25,  128 => 24,  125 => 39,  122 => 22,  119 => 37,  117 => 36,  111 => 32,  108 => 31,  104 => 30,  100 => 28,  97 => 27,  89 => 12,  86 => 175,  81 => 172,  79 => 70,  76 => 69,  74 => 60,  71 => 59,  69 => 27,  63 => 4,  60 => 3,  57 => 27,  54 => 26,  48 => 64,  43 => 21,  41 => 23,  38 => 18,  35 => 20,);
    }
}
