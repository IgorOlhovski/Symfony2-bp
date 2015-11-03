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
        return array (  686 => 206,  680 => 203,  677 => 202,  675 => 201,  669 => 198,  659 => 197,  654 => 195,  642 => 193,  639 => 192,  627 => 185,  624 => 184,  607 => 182,  590 => 181,  585 => 179,  581 => 178,  578 => 177,  562 => 169,  517 => 163,  509 => 161,  506 => 160,  503 => 159,  500 => 158,  498 => 157,  495 => 156,  486 => 151,  477 => 147,  475 => 146,  468 => 125,  462 => 123,  443 => 140,  432 => 136,  421 => 131,  416 => 129,  405 => 127,  386 => 115,  380 => 112,  377 => 111,  371 => 109,  366 => 107,  359 => 106,  356 => 105,  340 => 97,  318 => 90,  274 => 77,  272 => 76,  269 => 75,  263 => 71,  254 => 68,  238 => 64,  233 => 62,  228 => 59,  335 => 94,  331 => 94,  326 => 90,  303 => 86,  286 => 80,  271 => 79,  245 => 66,  243 => 65,  240 => 64,  218 => 57,  211 => 53,  190 => 50,  181 => 47,  172 => 44,  167 => 42,  152 => 38,  613 => 205,  610 => 204,  605 => 199,  592 => 192,  588 => 190,  583 => 188,  577 => 186,  575 => 176,  572 => 175,  566 => 171,  564 => 181,  561 => 180,  555 => 167,  553 => 177,  550 => 176,  544 => 174,  542 => 173,  539 => 172,  536 => 171,  531 => 159,  527 => 128,  521 => 164,  512 => 162,  502 => 122,  494 => 120,  491 => 119,  485 => 110,  481 => 109,  478 => 108,  470 => 105,  464 => 104,  449 => 100,  441 => 97,  436 => 96,  433 => 95,  424 => 93,  417 => 87,  411 => 86,  406 => 85,  403 => 84,  397 => 48,  375 => 110,  367 => 39,  351 => 32,  342 => 29,  339 => 28,  336 => 27,  327 => 204,  320 => 171,  307 => 166,  304 => 165,  302 => 86,  289 => 81,  276 => 81,  253 => 147,  248 => 144,  242 => 142,  234 => 140,  232 => 139,  205 => 135,  198 => 132,  184 => 47,  179 => 111,  155 => 81,  124 => 47,  113 => 40,  12 => 45,  333 => 85,  330 => 84,  325 => 82,  321 => 91,  316 => 170,  313 => 169,  306 => 87,  299 => 75,  296 => 160,  290 => 72,  288 => 71,  282 => 79,  270 => 65,  267 => 64,  261 => 62,  255 => 69,  250 => 67,  244 => 56,  239 => 51,  236 => 63,  231 => 27,  213 => 23,  206 => 51,  175 => 43,  170 => 89,  159 => 54,  118 => 28,  127 => 65,  90 => 18,  34 => 53,  636 => 191,  631 => 203,  625 => 201,  623 => 200,  617 => 196,  608 => 193,  604 => 192,  598 => 195,  595 => 190,  591 => 189,  586 => 189,  579 => 185,  571 => 183,  568 => 182,  565 => 181,  560 => 168,  549 => 98,  545 => 97,  538 => 165,  534 => 92,  529 => 91,  526 => 90,  514 => 79,  511 => 78,  507 => 123,  505 => 90,  501 => 88,  499 => 121,  496 => 77,  493 => 76,  489 => 171,  482 => 149,  472 => 145,  459 => 159,  456 => 121,  450 => 119,  442 => 155,  434 => 153,  431 => 152,  426 => 133,  415 => 147,  410 => 145,  400 => 119,  394 => 139,  391 => 118,  389 => 46,  370 => 40,  361 => 36,  357 => 35,  353 => 104,  347 => 31,  343 => 98,  332 => 117,  329 => 93,  324 => 92,  310 => 87,  301 => 76,  284 => 110,  279 => 82,  277 => 78,  273 => 80,  265 => 103,  262 => 76,  259 => 70,  257 => 74,  249 => 71,  226 => 137,  223 => 58,  200 => 55,  197 => 54,  191 => 50,  185 => 55,  178 => 45,  174 => 51,  146 => 34,  134 => 26,  100 => 45,  97 => 44,  81 => 15,  65 => 5,  23 => 11,  20 => 11,  58 => 38,  110 => 25,  76 => 13,  59 => 155,  192 => 82,  150 => 48,  53 => 77,  137 => 69,  104 => 23,  77 => 8,  63 => 4,  129 => 55,  102 => 36,  480 => 148,  474 => 164,  469 => 162,  461 => 160,  457 => 153,  453 => 120,  444 => 98,  440 => 148,  437 => 138,  435 => 137,  430 => 94,  427 => 143,  423 => 132,  413 => 146,  409 => 132,  407 => 131,  402 => 126,  398 => 129,  393 => 47,  387 => 122,  384 => 44,  381 => 120,  379 => 42,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 121,  337 => 96,  322 => 201,  314 => 99,  312 => 88,  309 => 97,  305 => 95,  298 => 84,  294 => 159,  285 => 154,  283 => 84,  278 => 86,  268 => 78,  264 => 84,  258 => 81,  252 => 59,  247 => 66,  241 => 67,  235 => 74,  229 => 138,  224 => 71,  220 => 63,  214 => 69,  208 => 57,  169 => 43,  143 => 71,  140 => 56,  132 => 51,  128 => 24,  119 => 49,  107 => 24,  38 => 18,  71 => 30,  177 => 73,  165 => 64,  160 => 61,  135 => 50,  126 => 45,  114 => 46,  84 => 16,  70 => 32,  67 => 175,  61 => 39,  28 => 14,  87 => 17,  25 => 12,  21 => 11,  94 => 40,  89 => 12,  85 => 37,  75 => 32,  68 => 30,  56 => 78,  196 => 90,  183 => 70,  171 => 93,  166 => 90,  163 => 49,  158 => 67,  156 => 53,  151 => 48,  142 => 59,  138 => 57,  136 => 56,  121 => 29,  117 => 36,  105 => 26,  91 => 32,  62 => 156,  49 => 103,  31 => 12,  26 => 14,  24 => 13,  19 => 11,  93 => 14,  88 => 40,  78 => 35,  46 => 15,  44 => 74,  27 => 14,  79 => 14,  72 => 191,  69 => 190,  47 => 75,  40 => 41,  37 => 54,  22 => 12,  246 => 70,  157 => 41,  145 => 62,  139 => 31,  131 => 25,  123 => 30,  120 => 21,  115 => 27,  111 => 48,  108 => 38,  101 => 22,  98 => 21,  96 => 34,  83 => 58,  74 => 55,  66 => 28,  55 => 18,  52 => 104,  50 => 25,  43 => 21,  41 => 17,  35 => 14,  32 => 13,  29 => 11,  209 => 82,  203 => 56,  199 => 20,  193 => 129,  189 => 71,  187 => 49,  182 => 19,  176 => 110,  173 => 42,  168 => 66,  164 => 41,  162 => 62,  154 => 50,  149 => 36,  147 => 33,  144 => 33,  141 => 51,  133 => 67,  130 => 66,  125 => 51,  122 => 22,  116 => 36,  112 => 26,  109 => 18,  106 => 61,  103 => 16,  99 => 35,  95 => 20,  92 => 19,  86 => 59,  82 => 37,  80 => 9,  73 => 7,  64 => 174,  60 => 3,  57 => 27,  54 => 26,  51 => 29,  48 => 64,  45 => 63,  42 => 62,  39 => 61,  36 => 16,  33 => 16,  30 => 15,);
    }
}
