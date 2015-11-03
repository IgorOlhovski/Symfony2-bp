<?php

/* AcmeDemoBundle::layout.html.twig */
class __TwigTemplate_d1d93f11c0c078631a40c12e1eae6750 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TwigBundle::layout.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content_header' => array($this, 'block_content_header'),
            'content_header_more' => array($this, 'block_content_header_more'),
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
        echo "    <link rel=\"icon\" sizes=\"16x16\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/css/demo.css"), "html", null, true);
        echo "\" />
";
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        echo "Demo Bundle";
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        // line 11
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 12
            echo "        <div class=\"flash-message\">
            <em>Notice</em>: ";
            // line 13
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 16
        echo "
    ";
        // line 17
        $this->displayBlock('content_header', $context, $blocks);
        // line 26
        echo "
    <div class=\"block\">
        ";
        // line 28
        $this->displayBlock('content', $context, $blocks);
        // line 29
        echo "    </div>

    ";
        // line 31
        if (array_key_exists("code", $context)) {
            // line 32
            echo "        <h2>Code behind this page</h2>
        <div class=\"block\">
            <div class=\"symfony-content\">";
            // line 34
            echo (isset($context["code"]) ? $context["code"] : $this->getContext($context, "code"));
            echo "</div>
        </div>
    ";
        }
    }

    // line 17
    public function block_content_header($context, array $blocks = array())
    {
        // line 18
        echo "        <ul id=\"menu\">
            ";
        // line 19
        $this->displayBlock('content_header_more', $context, $blocks);
        // line 22
        echo "        </ul>

        <div style=\"clear: both\"></div>
    ";
    }

    // line 19
    public function block_content_header_more($context, array $blocks = array())
    {
        // line 20
        echo "                <li><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_demo"), "html", null, true);
        echo "\">Demo Home</a></li>
            ";
    }

    // line 28
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 63,  291 => 135,  256 => 122,  251 => 120,  227 => 105,  210 => 97,  194 => 89,  188 => 65,  388 => 154,  346 => 136,  323 => 124,  319 => 123,  315 => 122,  221 => 102,  215 => 99,  212 => 75,  202 => 24,  161 => 75,  153 => 67,  643 => 389,  634 => 383,  630 => 381,  628 => 377,  618 => 374,  597 => 361,  593 => 360,  587 => 357,  567 => 346,  559 => 341,  535 => 326,  504 => 306,  492 => 299,  463 => 284,  458 => 282,  446 => 275,  428 => 265,  420 => 260,  390 => 155,  354 => 219,  297 => 137,  281 => 167,  222 => 138,  217 => 136,  207 => 96,  686 => 206,  680 => 203,  677 => 202,  675 => 201,  669 => 198,  659 => 197,  654 => 195,  642 => 193,  639 => 192,  627 => 185,  624 => 184,  607 => 182,  590 => 181,  585 => 179,  581 => 178,  578 => 177,  562 => 169,  517 => 163,  509 => 161,  506 => 160,  503 => 159,  500 => 158,  498 => 157,  495 => 156,  486 => 151,  477 => 147,  475 => 146,  468 => 286,  462 => 123,  443 => 140,  432 => 136,  421 => 131,  416 => 129,  405 => 127,  386 => 115,  380 => 112,  377 => 148,  371 => 145,  366 => 107,  359 => 106,  356 => 139,  340 => 97,  318 => 90,  274 => 77,  272 => 76,  269 => 75,  263 => 71,  254 => 121,  238 => 64,  233 => 109,  228 => 82,  335 => 94,  331 => 94,  326 => 90,  303 => 139,  286 => 80,  271 => 127,  245 => 66,  243 => 87,  240 => 64,  218 => 57,  211 => 53,  190 => 69,  181 => 115,  172 => 76,  167 => 78,  152 => 64,  613 => 372,  610 => 204,  605 => 199,  592 => 192,  588 => 190,  583 => 356,  577 => 353,  575 => 176,  572 => 175,  566 => 171,  564 => 181,  561 => 180,  555 => 167,  553 => 177,  550 => 176,  544 => 174,  542 => 330,  539 => 172,  536 => 171,  531 => 324,  527 => 320,  521 => 317,  512 => 162,  502 => 122,  494 => 120,  491 => 119,  485 => 292,  481 => 109,  478 => 108,  470 => 105,  464 => 104,  449 => 100,  441 => 97,  436 => 96,  433 => 95,  424 => 93,  417 => 87,  411 => 86,  406 => 252,  403 => 84,  397 => 48,  375 => 231,  367 => 39,  351 => 137,  342 => 134,  339 => 133,  336 => 131,  327 => 204,  320 => 171,  307 => 166,  304 => 165,  302 => 116,  289 => 81,  276 => 165,  253 => 147,  248 => 89,  242 => 142,  234 => 140,  232 => 139,  205 => 95,  198 => 132,  184 => 64,  179 => 63,  155 => 68,  124 => 40,  113 => 40,  12 => 45,  333 => 85,  330 => 84,  325 => 82,  321 => 91,  316 => 170,  313 => 169,  306 => 87,  299 => 75,  296 => 160,  290 => 72,  288 => 109,  282 => 79,  270 => 100,  267 => 99,  261 => 96,  255 => 69,  250 => 67,  244 => 56,  239 => 112,  236 => 63,  231 => 83,  213 => 23,  206 => 51,  175 => 43,  170 => 89,  159 => 54,  118 => 37,  127 => 28,  90 => 32,  34 => 4,  636 => 191,  631 => 203,  625 => 201,  623 => 200,  617 => 196,  608 => 370,  604 => 368,  598 => 195,  595 => 190,  591 => 189,  586 => 189,  579 => 185,  571 => 183,  568 => 182,  565 => 181,  560 => 168,  549 => 334,  545 => 97,  538 => 165,  534 => 92,  529 => 321,  526 => 90,  514 => 79,  511 => 310,  507 => 123,  505 => 90,  501 => 88,  499 => 121,  496 => 301,  493 => 76,  489 => 171,  482 => 149,  472 => 287,  459 => 159,  456 => 121,  450 => 119,  442 => 155,  434 => 153,  431 => 152,  426 => 133,  415 => 147,  410 => 253,  400 => 248,  394 => 242,  391 => 118,  389 => 46,  370 => 229,  361 => 36,  357 => 35,  353 => 138,  347 => 31,  343 => 98,  332 => 117,  329 => 127,  324 => 92,  310 => 184,  301 => 76,  284 => 110,  279 => 82,  277 => 129,  273 => 80,  265 => 125,  262 => 157,  259 => 123,  257 => 74,  249 => 71,  226 => 81,  223 => 58,  200 => 92,  197 => 54,  191 => 119,  185 => 67,  178 => 61,  174 => 60,  146 => 34,  134 => 44,  100 => 40,  97 => 41,  81 => 20,  65 => 39,  23 => 18,  20 => 1,  58 => 17,  110 => 22,  76 => 17,  59 => 28,  192 => 82,  150 => 93,  53 => 10,  137 => 60,  104 => 32,  77 => 28,  63 => 19,  129 => 55,  102 => 17,  480 => 290,  474 => 164,  469 => 162,  461 => 160,  457 => 153,  453 => 120,  444 => 98,  440 => 272,  437 => 138,  435 => 270,  430 => 94,  427 => 143,  423 => 132,  413 => 146,  409 => 132,  407 => 131,  402 => 126,  398 => 243,  393 => 156,  387 => 122,  384 => 237,  381 => 150,  379 => 236,  374 => 116,  368 => 112,  365 => 142,  362 => 110,  360 => 140,  355 => 106,  341 => 121,  337 => 96,  322 => 201,  314 => 99,  312 => 88,  309 => 97,  305 => 182,  298 => 84,  294 => 136,  285 => 168,  283 => 131,  278 => 86,  268 => 78,  264 => 98,  258 => 81,  252 => 59,  247 => 117,  241 => 149,  235 => 74,  229 => 138,  224 => 71,  220 => 63,  214 => 69,  208 => 73,  169 => 43,  143 => 71,  140 => 56,  132 => 59,  128 => 41,  119 => 42,  107 => 24,  38 => 6,  71 => 30,  177 => 78,  165 => 64,  160 => 66,  135 => 62,  126 => 51,  114 => 36,  84 => 29,  70 => 33,  67 => 25,  61 => 12,  28 => 14,  87 => 59,  25 => 12,  21 => 12,  94 => 34,  89 => 26,  85 => 32,  75 => 39,  68 => 22,  56 => 11,  196 => 21,  183 => 84,  171 => 61,  166 => 73,  163 => 49,  158 => 79,  156 => 65,  151 => 72,  142 => 51,  138 => 45,  136 => 60,  121 => 43,  117 => 19,  105 => 18,  91 => 32,  62 => 13,  49 => 20,  31 => 3,  26 => 13,  24 => 14,  19 => 11,  93 => 14,  88 => 31,  78 => 26,  46 => 9,  44 => 19,  27 => 14,  79 => 19,  72 => 37,  69 => 30,  47 => 8,  40 => 19,  37 => 18,  22 => 12,  246 => 70,  157 => 41,  145 => 63,  139 => 63,  131 => 61,  123 => 59,  120 => 20,  115 => 75,  111 => 45,  108 => 19,  101 => 43,  98 => 29,  96 => 43,  83 => 58,  74 => 27,  66 => 14,  55 => 15,  52 => 20,  50 => 22,  43 => 8,  41 => 5,  35 => 5,  32 => 16,  29 => 14,  209 => 82,  203 => 128,  199 => 22,  193 => 129,  189 => 71,  187 => 68,  182 => 66,  176 => 82,  173 => 70,  168 => 57,  164 => 67,  162 => 62,  154 => 52,  149 => 71,  147 => 64,  144 => 62,  141 => 61,  133 => 47,  130 => 46,  125 => 55,  122 => 22,  116 => 36,  112 => 52,  109 => 44,  106 => 45,  103 => 45,  99 => 44,  95 => 64,  92 => 45,  86 => 33,  82 => 28,  80 => 30,  73 => 16,  64 => 13,  60 => 23,  57 => 34,  54 => 14,  51 => 24,  48 => 9,  45 => 8,  42 => 7,  39 => 8,  36 => 4,  33 => 3,  30 => 3,);
    }
}