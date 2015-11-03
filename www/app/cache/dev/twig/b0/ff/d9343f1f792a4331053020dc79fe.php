<?php

/* SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_to_many.html.twig */
class __TwigTemplate_b0ffd9343f1f792a4331053020dc79fe extends Twig_Template
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
        if ($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "associationadmin")) {
            // line 13
            echo "    <div id=\"field_container_";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\" class=\"field-container\">
        <span id=\"field_widget_";
            // line 14
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\" >
            ";
            // line 15
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
            echo "
        </span>

        <span id=\"field_actions_";
            // line 18
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\" class=\"field-actions\">
            ";
            // line 19
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "associationadmin"), "hasRoute", array(0 => "create"), "method") && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "associationadmin"), "isGranted", array(0 => "CREATE"), "method"))) {
                // line 20
                echo "                <a
                    href=\"";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "associationadmin"), "generateUrl", array(0 => "create"), "method"), "html", null, true);
                echo "\"
                    onclick=\"return start_field_dialog_form_add_";
                // line 22
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
                echo "(this);\"
                    class=\"btn sonata-ba-action\"
                    title=\"";
                // line 24
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_add", array(), "SonataAdminBundle"), "html", null, true);
                echo "\"
                    >
                    <i class=\"icon-plus\"></i>
                    ";
                // line 27
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_add", array(), "SonataAdminBundle"), "html", null, true);
                echo "
                </a>
            ";
            }
            // line 30
            echo "        </span>

        <div style=\"display: none\" id=\"field_dialog_";
            // line 32
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\">
        </div>
    </div>

    ";
            // line 36
            $this->env->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_association_script.html.twig")->display($context);
        }
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_to_many.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 70,  153 => 67,  643 => 389,  634 => 383,  630 => 381,  628 => 377,  618 => 374,  597 => 361,  593 => 360,  587 => 357,  567 => 346,  559 => 341,  535 => 326,  504 => 306,  492 => 299,  463 => 284,  458 => 282,  446 => 275,  428 => 265,  420 => 260,  390 => 240,  354 => 219,  297 => 177,  281 => 167,  222 => 138,  217 => 136,  207 => 129,  686 => 206,  680 => 203,  677 => 202,  675 => 201,  669 => 198,  659 => 197,  654 => 195,  642 => 193,  639 => 192,  627 => 185,  624 => 184,  607 => 182,  590 => 181,  585 => 179,  581 => 178,  578 => 177,  562 => 169,  517 => 163,  509 => 161,  506 => 160,  503 => 159,  500 => 158,  498 => 157,  495 => 156,  486 => 151,  477 => 147,  475 => 146,  468 => 286,  462 => 123,  443 => 140,  432 => 136,  421 => 131,  416 => 129,  405 => 127,  386 => 115,  380 => 112,  377 => 232,  371 => 109,  366 => 107,  359 => 106,  356 => 105,  340 => 97,  318 => 90,  274 => 77,  272 => 76,  269 => 75,  263 => 71,  254 => 154,  238 => 64,  233 => 146,  228 => 59,  335 => 94,  331 => 94,  326 => 90,  303 => 86,  286 => 80,  271 => 163,  245 => 66,  243 => 65,  240 => 64,  218 => 57,  211 => 53,  190 => 50,  181 => 115,  172 => 76,  167 => 73,  152 => 67,  613 => 372,  610 => 204,  605 => 199,  592 => 192,  588 => 190,  583 => 356,  577 => 353,  575 => 176,  572 => 175,  566 => 171,  564 => 181,  561 => 180,  555 => 167,  553 => 177,  550 => 176,  544 => 174,  542 => 330,  539 => 172,  536 => 171,  531 => 324,  527 => 320,  521 => 317,  512 => 162,  502 => 122,  494 => 120,  491 => 119,  485 => 292,  481 => 109,  478 => 108,  470 => 105,  464 => 104,  449 => 100,  441 => 97,  436 => 96,  433 => 95,  424 => 93,  417 => 87,  411 => 86,  406 => 252,  403 => 84,  397 => 48,  375 => 231,  367 => 39,  351 => 32,  342 => 210,  339 => 28,  336 => 27,  327 => 204,  320 => 171,  307 => 166,  304 => 165,  302 => 86,  289 => 81,  276 => 165,  253 => 147,  248 => 153,  242 => 142,  234 => 140,  232 => 139,  205 => 135,  198 => 132,  184 => 47,  179 => 111,  155 => 68,  124 => 47,  113 => 40,  12 => 45,  333 => 85,  330 => 84,  325 => 82,  321 => 91,  316 => 170,  313 => 169,  306 => 87,  299 => 75,  296 => 160,  290 => 72,  288 => 71,  282 => 79,  270 => 65,  267 => 64,  261 => 62,  255 => 69,  250 => 67,  244 => 56,  239 => 51,  236 => 63,  231 => 27,  213 => 23,  206 => 51,  175 => 43,  170 => 89,  159 => 54,  118 => 52,  127 => 65,  90 => 18,  34 => 26,  636 => 191,  631 => 203,  625 => 201,  623 => 200,  617 => 196,  608 => 370,  604 => 368,  598 => 195,  595 => 190,  591 => 189,  586 => 189,  579 => 185,  571 => 183,  568 => 182,  565 => 181,  560 => 168,  549 => 334,  545 => 97,  538 => 165,  534 => 92,  529 => 321,  526 => 90,  514 => 79,  511 => 310,  507 => 123,  505 => 90,  501 => 88,  499 => 121,  496 => 301,  493 => 76,  489 => 171,  482 => 149,  472 => 287,  459 => 159,  456 => 121,  450 => 119,  442 => 155,  434 => 153,  431 => 152,  426 => 133,  415 => 147,  410 => 253,  400 => 248,  394 => 242,  391 => 118,  389 => 46,  370 => 229,  361 => 36,  357 => 35,  353 => 104,  347 => 31,  343 => 98,  332 => 117,  329 => 200,  324 => 92,  310 => 184,  301 => 76,  284 => 110,  279 => 82,  277 => 78,  273 => 80,  265 => 103,  262 => 157,  259 => 70,  257 => 74,  249 => 71,  226 => 137,  223 => 58,  200 => 55,  197 => 54,  191 => 119,  185 => 83,  178 => 45,  174 => 51,  146 => 34,  134 => 26,  100 => 22,  97 => 44,  81 => 15,  65 => 30,  23 => 18,  20 => 1,  58 => 23,  110 => 25,  76 => 20,  59 => 18,  192 => 82,  150 => 93,  53 => 21,  137 => 88,  104 => 23,  77 => 58,  63 => 27,  129 => 55,  102 => 36,  480 => 290,  474 => 164,  469 => 162,  461 => 160,  457 => 153,  453 => 120,  444 => 98,  440 => 272,  437 => 138,  435 => 270,  430 => 94,  427 => 143,  423 => 132,  413 => 146,  409 => 132,  407 => 131,  402 => 126,  398 => 243,  393 => 47,  387 => 122,  384 => 237,  381 => 120,  379 => 236,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 222,  355 => 106,  341 => 121,  337 => 96,  322 => 201,  314 => 99,  312 => 88,  309 => 97,  305 => 182,  298 => 84,  294 => 159,  285 => 168,  283 => 84,  278 => 86,  268 => 78,  264 => 84,  258 => 81,  252 => 59,  247 => 66,  241 => 149,  235 => 74,  229 => 138,  224 => 71,  220 => 63,  214 => 69,  208 => 57,  169 => 43,  143 => 71,  140 => 56,  132 => 86,  128 => 55,  119 => 49,  107 => 24,  38 => 32,  71 => 30,  177 => 78,  165 => 64,  160 => 70,  135 => 58,  126 => 83,  114 => 23,  84 => 62,  70 => 32,  67 => 51,  61 => 39,  28 => 14,  87 => 59,  25 => 12,  21 => 11,  94 => 21,  89 => 40,  85 => 37,  75 => 35,  68 => 49,  56 => 40,  196 => 90,  183 => 70,  171 => 93,  166 => 73,  163 => 49,  158 => 67,  156 => 68,  151 => 66,  142 => 59,  138 => 57,  136 => 56,  121 => 53,  117 => 36,  105 => 26,  91 => 32,  62 => 29,  49 => 103,  31 => 15,  26 => 14,  24 => 13,  19 => 11,  93 => 14,  88 => 31,  78 => 56,  46 => 35,  44 => 19,  27 => 14,  79 => 14,  72 => 25,  69 => 30,  47 => 75,  40 => 18,  37 => 54,  22 => 12,  246 => 70,  157 => 41,  145 => 63,  139 => 60,  131 => 25,  123 => 54,  120 => 53,  115 => 75,  111 => 48,  108 => 47,  101 => 71,  98 => 21,  96 => 43,  83 => 58,  74 => 55,  66 => 25,  55 => 45,  52 => 22,  50 => 17,  43 => 19,  41 => 18,  35 => 16,  32 => 16,  29 => 14,  209 => 82,  203 => 128,  199 => 20,  193 => 129,  189 => 71,  187 => 118,  182 => 19,  176 => 110,  173 => 76,  168 => 66,  164 => 104,  162 => 62,  154 => 50,  149 => 36,  147 => 64,  144 => 92,  141 => 61,  133 => 57,  130 => 56,  125 => 55,  122 => 22,  116 => 36,  112 => 49,  109 => 18,  106 => 46,  103 => 45,  99 => 44,  95 => 64,  92 => 67,  86 => 39,  82 => 57,  80 => 36,  73 => 32,  64 => 174,  60 => 22,  57 => 24,  54 => 26,  51 => 38,  48 => 21,  45 => 20,  42 => 18,  39 => 18,  36 => 17,  33 => 15,  30 => 15,);
    }
}
