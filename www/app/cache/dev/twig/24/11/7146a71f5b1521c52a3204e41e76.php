<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_24117146a71f5b1521c52a3204e41e76 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TwigBundle::layout.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
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
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo "Web Configurator Bundle";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "</div>
";
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  385 => 160,  382 => 159,  363 => 155,  349 => 149,  317 => 135,  311 => 131,  308 => 130,  292 => 121,  237 => 93,  225 => 87,  204 => 76,  180 => 63,  396 => 179,  378 => 170,  376 => 158,  369 => 165,  348 => 322,  334 => 145,  293 => 118,  219 => 84,  195 => 71,  791 => 473,  788 => 472,  777 => 470,  773 => 469,  769 => 467,  756 => 466,  730 => 461,  727 => 460,  708 => 458,  691 => 457,  687 => 455,  683 => 454,  679 => 453,  671 => 451,  667 => 450,  663 => 449,  660 => 448,  658 => 447,  641 => 446,  615 => 440,  606 => 437,  603 => 436,  601 => 435,  532 => 396,  515 => 395,  510 => 393,  344 => 119,  300 => 105,  148 => 46,  291 => 102,  256 => 122,  251 => 101,  227 => 105,  210 => 97,  194 => 89,  188 => 68,  388 => 177,  346 => 321,  323 => 124,  319 => 123,  315 => 110,  221 => 85,  215 => 99,  212 => 79,  202 => 75,  161 => 63,  153 => 56,  643 => 389,  634 => 383,  630 => 445,  628 => 377,  618 => 374,  597 => 361,  593 => 360,  587 => 434,  567 => 346,  559 => 341,  535 => 326,  504 => 306,  492 => 299,  463 => 284,  458 => 282,  446 => 275,  428 => 265,  420 => 260,  390 => 155,  354 => 151,  297 => 277,  281 => 167,  222 => 138,  217 => 136,  207 => 96,  686 => 206,  680 => 203,  677 => 202,  675 => 452,  669 => 198,  659 => 197,  654 => 195,  642 => 193,  639 => 192,  627 => 185,  624 => 184,  607 => 182,  590 => 181,  585 => 179,  581 => 178,  578 => 177,  562 => 169,  517 => 163,  509 => 161,  506 => 160,  503 => 159,  500 => 389,  498 => 157,  495 => 156,  486 => 151,  477 => 147,  475 => 146,  468 => 286,  462 => 123,  443 => 140,  432 => 136,  421 => 131,  416 => 129,  405 => 127,  386 => 176,  380 => 112,  377 => 148,  371 => 145,  366 => 107,  359 => 153,  356 => 139,  340 => 97,  318 => 111,  274 => 97,  272 => 111,  269 => 75,  263 => 95,  254 => 121,  238 => 64,  233 => 109,  228 => 88,  335 => 94,  331 => 94,  326 => 90,  303 => 128,  286 => 119,  271 => 111,  245 => 66,  243 => 93,  240 => 92,  218 => 83,  211 => 53,  190 => 68,  181 => 115,  172 => 62,  167 => 78,  152 => 64,  613 => 372,  610 => 438,  605 => 199,  592 => 192,  588 => 190,  583 => 356,  577 => 353,  575 => 176,  572 => 175,  566 => 171,  564 => 181,  561 => 180,  555 => 167,  553 => 177,  550 => 399,  544 => 174,  542 => 330,  539 => 172,  536 => 171,  531 => 324,  527 => 320,  521 => 317,  512 => 394,  502 => 122,  494 => 120,  491 => 119,  485 => 292,  481 => 109,  478 => 108,  470 => 105,  464 => 104,  449 => 100,  441 => 97,  436 => 96,  433 => 95,  424 => 93,  417 => 87,  411 => 86,  406 => 252,  403 => 84,  397 => 48,  375 => 231,  367 => 156,  351 => 150,  342 => 134,  339 => 146,  336 => 145,  327 => 140,  320 => 171,  307 => 166,  304 => 165,  302 => 116,  289 => 120,  276 => 113,  253 => 147,  248 => 96,  242 => 96,  234 => 140,  232 => 139,  205 => 95,  198 => 132,  184 => 64,  179 => 63,  155 => 68,  124 => 40,  113 => 38,  12 => 45,  333 => 85,  330 => 141,  325 => 82,  321 => 112,  316 => 170,  313 => 169,  306 => 107,  299 => 278,  296 => 160,  290 => 72,  288 => 116,  282 => 79,  270 => 110,  267 => 99,  261 => 105,  255 => 103,  250 => 67,  244 => 97,  239 => 112,  236 => 63,  231 => 89,  213 => 23,  206 => 77,  175 => 65,  170 => 84,  159 => 53,  118 => 49,  127 => 28,  90 => 37,  34 => 4,  636 => 191,  631 => 203,  625 => 201,  623 => 200,  617 => 196,  608 => 370,  604 => 368,  598 => 195,  595 => 190,  591 => 189,  586 => 189,  579 => 185,  571 => 183,  568 => 182,  565 => 181,  560 => 168,  549 => 334,  545 => 97,  538 => 165,  534 => 92,  529 => 321,  526 => 90,  514 => 79,  511 => 310,  507 => 123,  505 => 391,  501 => 88,  499 => 121,  496 => 301,  493 => 76,  489 => 171,  482 => 149,  472 => 287,  459 => 159,  456 => 121,  450 => 119,  442 => 155,  434 => 153,  431 => 152,  426 => 133,  415 => 147,  410 => 253,  400 => 180,  394 => 242,  391 => 118,  389 => 46,  370 => 229,  361 => 36,  357 => 152,  353 => 138,  347 => 31,  343 => 320,  332 => 116,  329 => 127,  324 => 139,  310 => 184,  301 => 76,  284 => 118,  279 => 115,  277 => 114,  273 => 112,  265 => 107,  262 => 104,  259 => 103,  257 => 74,  249 => 100,  226 => 81,  223 => 86,  200 => 92,  197 => 54,  191 => 69,  185 => 66,  178 => 66,  174 => 59,  146 => 34,  134 => 47,  100 => 24,  97 => 23,  81 => 23,  65 => 17,  23 => 18,  20 => 1,  58 => 13,  110 => 38,  76 => 27,  59 => 22,  192 => 82,  150 => 55,  53 => 11,  137 => 60,  104 => 32,  77 => 25,  63 => 21,  129 => 55,  102 => 33,  480 => 290,  474 => 164,  469 => 162,  461 => 160,  457 => 153,  453 => 120,  444 => 98,  440 => 272,  437 => 138,  435 => 270,  430 => 94,  427 => 143,  423 => 132,  413 => 146,  409 => 183,  407 => 131,  402 => 126,  398 => 243,  393 => 178,  387 => 122,  384 => 237,  381 => 150,  379 => 236,  374 => 157,  368 => 112,  365 => 142,  362 => 161,  360 => 332,  355 => 157,  341 => 147,  337 => 96,  322 => 138,  314 => 99,  312 => 129,  309 => 108,  305 => 129,  298 => 125,  294 => 136,  285 => 115,  283 => 100,  278 => 98,  268 => 78,  264 => 98,  258 => 94,  252 => 59,  247 => 117,  241 => 149,  235 => 89,  229 => 87,  224 => 81,  220 => 63,  214 => 69,  208 => 73,  169 => 43,  143 => 43,  140 => 42,  132 => 59,  128 => 41,  119 => 40,  107 => 37,  38 => 7,  71 => 13,  177 => 64,  165 => 60,  160 => 66,  135 => 62,  126 => 51,  114 => 36,  84 => 27,  70 => 24,  67 => 18,  61 => 23,  28 => 3,  87 => 32,  25 => 35,  21 => 2,  94 => 34,  89 => 30,  85 => 23,  75 => 28,  68 => 12,  56 => 11,  196 => 92,  183 => 84,  171 => 58,  166 => 56,  163 => 82,  158 => 80,  156 => 58,  151 => 47,  142 => 51,  138 => 45,  136 => 71,  121 => 50,  117 => 39,  105 => 34,  91 => 35,  62 => 16,  49 => 12,  31 => 3,  26 => 6,  24 => 3,  19 => 1,  93 => 38,  88 => 30,  78 => 24,  46 => 12,  44 => 11,  27 => 7,  79 => 29,  72 => 21,  69 => 26,  47 => 9,  40 => 8,  37 => 6,  22 => 2,  246 => 70,  157 => 41,  145 => 74,  139 => 49,  131 => 45,  123 => 35,  120 => 20,  115 => 40,  111 => 47,  108 => 47,  101 => 33,  98 => 34,  96 => 30,  83 => 31,  74 => 22,  66 => 25,  55 => 12,  52 => 12,  50 => 10,  43 => 9,  41 => 7,  35 => 5,  32 => 7,  29 => 3,  209 => 78,  203 => 128,  199 => 73,  193 => 69,  189 => 71,  187 => 67,  182 => 87,  176 => 86,  173 => 85,  168 => 57,  164 => 67,  162 => 54,  154 => 60,  149 => 71,  147 => 54,  144 => 62,  141 => 51,  133 => 47,  130 => 39,  125 => 51,  122 => 41,  116 => 31,  112 => 39,  109 => 52,  106 => 51,  103 => 25,  99 => 31,  95 => 39,  92 => 31,  86 => 33,  82 => 26,  80 => 29,  73 => 16,  64 => 11,  60 => 20,  57 => 39,  54 => 19,  51 => 37,  48 => 16,  45 => 11,  42 => 13,  39 => 10,  36 => 8,  33 => 6,  30 => 5,);
    }
}
