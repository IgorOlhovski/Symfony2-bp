<?php

/* SonataUserBundle:Profile:edit_authentication.html.twig */
class __TwigTemplate_384d566d0c3a177cc51e43c2f24cff51 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("bpBundle:Default:layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "bpBundle:Default:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("edit_profile2.title"), "html", null, true);
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "
<div class=\"sonata-user-edit-authentication\">
    <ul>
        <li><a class=\"btn btn-grey btn-small\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sonata_user_profile_edit"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_edit_profile"), "html", null, true);
        echo "</a></li>
        <li><a class=\"btn btn-grey btn-small active\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_edit_authentication"), "html", null, true);
        echo "</a></li>
         <li><a class=\"btn btn-grey btn-small\" href=\"/profile/edit_team\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_edit_team"), "html", null, true);
        echo "</a></li>
        <li><a class=\"btn btn-grey btn-small\" href=\"/profile/change-password\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_change_password"), "html", null, true);
        echo "</a></li>
        <li><a class=\"btn btn-grey btn-small\" href=\"/profile\">";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_done_editing"), "html", null, true);
        echo "</a></li>
    </ul><br><br><br><br>
    <h2>";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_user_account", array(), "SonataUserBundle"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_user_edit_authentication"), "html", null, true);
        echo "</h2>

    <form action=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sonata_user_profile_edit_authentication"), "html", null, true);
        echo "\" method=\"POST\">
        ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

        <input type=\"submit\" name=\"submit\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("save.buttons"), "html", null, true);
        echo "\" />
    </form>

</div>
";
    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Profile:edit_authentication.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  291 => 135,  256 => 122,  251 => 120,  227 => 105,  210 => 97,  194 => 89,  188 => 86,  388 => 154,  346 => 136,  323 => 124,  319 => 123,  315 => 122,  221 => 102,  215 => 99,  212 => 75,  202 => 72,  161 => 75,  153 => 67,  643 => 389,  634 => 383,  630 => 381,  628 => 377,  618 => 374,  597 => 361,  593 => 360,  587 => 357,  567 => 346,  559 => 341,  535 => 326,  504 => 306,  492 => 299,  463 => 284,  458 => 282,  446 => 275,  428 => 265,  420 => 260,  390 => 155,  354 => 219,  297 => 137,  281 => 167,  222 => 138,  217 => 136,  207 => 96,  686 => 206,  680 => 203,  677 => 202,  675 => 201,  669 => 198,  659 => 197,  654 => 195,  642 => 193,  639 => 192,  627 => 185,  624 => 184,  607 => 182,  590 => 181,  585 => 179,  581 => 178,  578 => 177,  562 => 169,  517 => 163,  509 => 161,  506 => 160,  503 => 159,  500 => 158,  498 => 157,  495 => 156,  486 => 151,  477 => 147,  475 => 146,  468 => 286,  462 => 123,  443 => 140,  432 => 136,  421 => 131,  416 => 129,  405 => 127,  386 => 115,  380 => 112,  377 => 148,  371 => 145,  366 => 107,  359 => 106,  356 => 139,  340 => 97,  318 => 90,  274 => 77,  272 => 76,  269 => 75,  263 => 71,  254 => 121,  238 => 64,  233 => 109,  228 => 82,  335 => 94,  331 => 94,  326 => 90,  303 => 139,  286 => 80,  271 => 127,  245 => 66,  243 => 87,  240 => 64,  218 => 57,  211 => 53,  190 => 69,  181 => 115,  172 => 76,  167 => 78,  152 => 67,  613 => 372,  610 => 204,  605 => 199,  592 => 192,  588 => 190,  583 => 356,  577 => 353,  575 => 176,  572 => 175,  566 => 171,  564 => 181,  561 => 180,  555 => 167,  553 => 177,  550 => 176,  544 => 174,  542 => 330,  539 => 172,  536 => 171,  531 => 324,  527 => 320,  521 => 317,  512 => 162,  502 => 122,  494 => 120,  491 => 119,  485 => 292,  481 => 109,  478 => 108,  470 => 105,  464 => 104,  449 => 100,  441 => 97,  436 => 96,  433 => 95,  424 => 93,  417 => 87,  411 => 86,  406 => 252,  403 => 84,  397 => 48,  375 => 231,  367 => 39,  351 => 137,  342 => 134,  339 => 133,  336 => 131,  327 => 204,  320 => 171,  307 => 166,  304 => 165,  302 => 116,  289 => 81,  276 => 165,  253 => 147,  248 => 89,  242 => 142,  234 => 140,  232 => 139,  205 => 95,  198 => 132,  184 => 47,  179 => 63,  155 => 68,  124 => 44,  113 => 40,  12 => 45,  333 => 85,  330 => 84,  325 => 82,  321 => 91,  316 => 170,  313 => 169,  306 => 87,  299 => 75,  296 => 160,  290 => 72,  288 => 109,  282 => 79,  270 => 100,  267 => 99,  261 => 96,  255 => 69,  250 => 67,  244 => 56,  239 => 112,  236 => 63,  231 => 83,  213 => 23,  206 => 51,  175 => 43,  170 => 89,  159 => 54,  118 => 52,  127 => 65,  90 => 35,  34 => 16,  636 => 191,  631 => 203,  625 => 201,  623 => 200,  617 => 196,  608 => 370,  604 => 368,  598 => 195,  595 => 190,  591 => 189,  586 => 189,  579 => 185,  571 => 183,  568 => 182,  565 => 181,  560 => 168,  549 => 334,  545 => 97,  538 => 165,  534 => 92,  529 => 321,  526 => 90,  514 => 79,  511 => 310,  507 => 123,  505 => 90,  501 => 88,  499 => 121,  496 => 301,  493 => 76,  489 => 171,  482 => 149,  472 => 287,  459 => 159,  456 => 121,  450 => 119,  442 => 155,  434 => 153,  431 => 152,  426 => 133,  415 => 147,  410 => 253,  400 => 248,  394 => 242,  391 => 118,  389 => 46,  370 => 229,  361 => 36,  357 => 35,  353 => 138,  347 => 31,  343 => 98,  332 => 117,  329 => 127,  324 => 92,  310 => 184,  301 => 76,  284 => 110,  279 => 82,  277 => 129,  273 => 80,  265 => 125,  262 => 157,  259 => 123,  257 => 74,  249 => 71,  226 => 81,  223 => 58,  200 => 92,  197 => 54,  191 => 119,  185 => 67,  178 => 83,  174 => 51,  146 => 34,  134 => 26,  100 => 22,  97 => 37,  81 => 15,  65 => 30,  23 => 18,  20 => 1,  58 => 23,  110 => 51,  76 => 20,  59 => 28,  192 => 82,  150 => 93,  53 => 10,  137 => 88,  104 => 49,  77 => 17,  63 => 27,  129 => 55,  102 => 36,  480 => 290,  474 => 164,  469 => 162,  461 => 160,  457 => 153,  453 => 120,  444 => 98,  440 => 272,  437 => 138,  435 => 270,  430 => 94,  427 => 143,  423 => 132,  413 => 146,  409 => 132,  407 => 131,  402 => 126,  398 => 243,  393 => 156,  387 => 122,  384 => 237,  381 => 150,  379 => 236,  374 => 116,  368 => 112,  365 => 142,  362 => 110,  360 => 140,  355 => 106,  341 => 121,  337 => 96,  322 => 201,  314 => 99,  312 => 88,  309 => 97,  305 => 182,  298 => 84,  294 => 136,  285 => 168,  283 => 131,  278 => 86,  268 => 78,  264 => 98,  258 => 81,  252 => 59,  247 => 117,  241 => 149,  235 => 74,  229 => 138,  224 => 71,  220 => 63,  214 => 69,  208 => 73,  169 => 43,  143 => 71,  140 => 56,  132 => 59,  128 => 58,  119 => 42,  107 => 24,  38 => 5,  71 => 30,  177 => 78,  165 => 64,  160 => 70,  135 => 58,  126 => 83,  114 => 23,  84 => 62,  70 => 33,  67 => 32,  61 => 12,  28 => 14,  87 => 59,  25 => 12,  21 => 12,  94 => 36,  89 => 40,  85 => 32,  75 => 39,  68 => 49,  56 => 40,  196 => 71,  183 => 84,  171 => 61,  166 => 73,  163 => 49,  158 => 67,  156 => 73,  151 => 72,  142 => 51,  138 => 61,  136 => 60,  121 => 43,  117 => 36,  105 => 26,  91 => 32,  62 => 29,  49 => 9,  31 => 15,  26 => 13,  24 => 13,  19 => 11,  93 => 14,  88 => 31,  78 => 40,  46 => 21,  44 => 19,  27 => 14,  79 => 31,  72 => 37,  69 => 30,  47 => 19,  40 => 18,  37 => 17,  22 => 12,  246 => 70,  157 => 41,  145 => 63,  139 => 60,  131 => 25,  123 => 57,  120 => 56,  115 => 75,  111 => 39,  108 => 47,  101 => 38,  98 => 47,  96 => 43,  83 => 58,  74 => 55,  66 => 14,  55 => 22,  52 => 21,  50 => 17,  43 => 8,  41 => 18,  35 => 4,  32 => 16,  29 => 3,  209 => 82,  203 => 128,  199 => 20,  193 => 129,  189 => 71,  187 => 68,  182 => 66,  176 => 82,  173 => 81,  168 => 66,  164 => 59,  162 => 62,  154 => 50,  149 => 71,  147 => 64,  144 => 68,  141 => 67,  133 => 47,  130 => 46,  125 => 55,  122 => 22,  116 => 36,  112 => 52,  109 => 18,  106 => 46,  103 => 45,  99 => 44,  95 => 64,  92 => 45,  86 => 43,  82 => 19,  80 => 41,  73 => 16,  64 => 26,  60 => 25,  57 => 11,  54 => 25,  51 => 24,  48 => 21,  45 => 19,  42 => 18,  39 => 17,  36 => 16,  33 => 15,  30 => 15,);
    }
}
