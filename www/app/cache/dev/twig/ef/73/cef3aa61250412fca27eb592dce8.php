<?php

/* SonataAdminBundle:CRUD:base_list_flat_inner_row.html.twig */
class __TwigTemplate_ef73cef3aa61250412fca27eb592dce8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'row' => array($this, 'block_row'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
";
        // line 12
        if (($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "list"), "has", array(0 => "batch"), "method") && (!$this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "isXmlHttpRequest")))) {
            // line 13
            echo "    <td class=\"sonata-ba-list-field sonata-ba-list-field-batch\">
        ";
            // line 14
            echo $this->env->getExtension('sonata_admin')->renderListElement((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "list"), "batch", array(), "array"));
            echo "
    </td>
";
        }
        // line 17
        echo "
<td class=\"sonata-ba-list-field sonata-ba-list-field-inline-fields\" colspan=\"";
        // line 18
        echo twig_escape_filter($this->env, (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "list"), "elements")) - ($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "list"), "has", array(0 => "_action"), "method") + $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "list"), "has", array(0 => "batch"), "method"))), "html", null, true);
        echo "\">
    ";
        // line 19
        $this->displayBlock('row', $context, $blocks);
        // line 20
        echo "</td>

";
        // line 22
        if (($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "list"), "has", array(0 => "_action"), "method") && (!$this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "isXmlHttpRequest")))) {
            // line 23
            echo "    <td class=\"sonata-ba-list-field sonata-ba-list-field-_action\">
        ";
            // line 24
            echo $this->env->getExtension('sonata_admin')->renderListElement((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "list"), "_action", array(), "array"));
            echo "
    </td>
";
        }
    }

    // line 19
    public function block_row($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_list_flat_inner_row.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 49,  127 => 52,  90 => 39,  34 => 17,  636 => 205,  631 => 203,  625 => 201,  623 => 200,  617 => 196,  608 => 193,  604 => 192,  598 => 191,  595 => 190,  591 => 189,  586 => 187,  579 => 185,  571 => 183,  568 => 182,  565 => 181,  560 => 100,  549 => 98,  545 => 97,  538 => 93,  534 => 92,  529 => 91,  526 => 90,  514 => 79,  511 => 78,  507 => 102,  505 => 90,  501 => 88,  499 => 78,  496 => 77,  493 => 76,  489 => 171,  482 => 166,  472 => 163,  459 => 159,  456 => 158,  450 => 157,  442 => 155,  434 => 153,  431 => 152,  426 => 151,  415 => 147,  410 => 145,  400 => 142,  394 => 139,  391 => 138,  389 => 137,  370 => 128,  361 => 127,  357 => 126,  353 => 125,  347 => 124,  343 => 122,  332 => 117,  329 => 116,  324 => 113,  310 => 112,  301 => 111,  284 => 110,  279 => 109,  277 => 108,  273 => 106,  265 => 103,  262 => 76,  259 => 75,  257 => 74,  249 => 71,  226 => 65,  223 => 64,  200 => 61,  197 => 60,  191 => 56,  185 => 55,  178 => 52,  174 => 51,  146 => 46,  134 => 42,  100 => 28,  97 => 40,  81 => 172,  65 => 13,  23 => 12,  20 => 11,  58 => 11,  110 => 31,  76 => 69,  59 => 24,  192 => 82,  150 => 56,  53 => 9,  137 => 43,  104 => 42,  77 => 32,  63 => 17,  129 => 74,  102 => 41,  480 => 162,  474 => 164,  469 => 162,  461 => 160,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 149,  413 => 146,  409 => 132,  407 => 131,  402 => 143,  398 => 129,  393 => 126,  387 => 122,  384 => 134,  381 => 120,  379 => 131,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 121,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 104,  264 => 84,  258 => 81,  252 => 72,  247 => 78,  241 => 67,  235 => 74,  229 => 73,  224 => 71,  220 => 63,  214 => 69,  208 => 68,  169 => 50,  143 => 45,  140 => 56,  132 => 51,  128 => 40,  119 => 50,  107 => 36,  38 => 15,  71 => 59,  177 => 73,  165 => 64,  160 => 61,  135 => 50,  126 => 45,  114 => 49,  84 => 36,  70 => 15,  67 => 28,  61 => 26,  28 => 14,  87 => 20,  25 => 13,  21 => 11,  94 => 39,  89 => 37,  85 => 36,  75 => 21,  68 => 14,  56 => 24,  196 => 90,  183 => 70,  171 => 61,  166 => 71,  163 => 49,  158 => 67,  156 => 58,  151 => 48,  142 => 59,  138 => 57,  136 => 56,  121 => 46,  117 => 36,  105 => 29,  91 => 38,  62 => 19,  49 => 23,  31 => 19,  26 => 14,  24 => 12,  19 => 11,  93 => 41,  88 => 6,  78 => 32,  46 => 21,  44 => 16,  27 => 14,  79 => 34,  72 => 31,  69 => 19,  47 => 22,  40 => 13,  37 => 18,  22 => 11,  246 => 70,  157 => 56,  145 => 87,  139 => 51,  131 => 55,  123 => 52,  120 => 68,  115 => 48,  111 => 32,  108 => 44,  101 => 42,  98 => 25,  96 => 42,  83 => 35,  74 => 31,  66 => 29,  55 => 21,  52 => 24,  50 => 22,  43 => 20,  41 => 19,  35 => 20,  32 => 14,  29 => 13,  209 => 82,  203 => 62,  199 => 84,  193 => 73,  189 => 71,  187 => 84,  182 => 54,  176 => 64,  173 => 74,  168 => 66,  164 => 59,  162 => 62,  154 => 57,  149 => 47,  147 => 58,  144 => 53,  141 => 51,  133 => 54,  130 => 41,  125 => 51,  122 => 50,  116 => 36,  112 => 47,  109 => 47,  106 => 44,  103 => 45,  99 => 40,  95 => 39,  92 => 38,  86 => 175,  82 => 35,  80 => 25,  73 => 30,  64 => 27,  60 => 19,  57 => 15,  54 => 22,  51 => 14,  48 => 20,  45 => 17,  42 => 19,  39 => 17,  36 => 17,  33 => 16,  30 => 15,);
    }
}
