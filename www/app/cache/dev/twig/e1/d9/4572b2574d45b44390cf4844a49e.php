<?php

/* SonataAdminBundle:CRUD:base_inline_edit_field.html.twig */
class __TwigTemplate_e1d94572b2574d45b44390cf4844a49e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'label' => array($this, 'block_label'),
            'field' => array($this, 'block_field'),
            'errors' => array($this, 'block_errors'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
<div id=\"sonata-ba-field-container-";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), "vars"), "id"), "html", null, true);
        echo "\" class=\"sonata-ba-field sonata-ba-field-";
        echo twig_escape_filter($this->env, (isset($context["edit"]) ? $context["edit"] : $this->getContext($context, "edit")), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["inline"]) ? $context["inline"] : $this->getContext($context, "inline")), "html", null, true);
        echo " ";
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), "vars"), "errors"))) {
            echo "sonata-ba-field-error";
        }
        echo "\">

    ";
        // line 14
        $this->displayBlock('label', $context, $blocks);
        // line 24
        echo "
    ";
        // line 25
        $this->displayBlock('field', $context, $blocks);
        // line 26
        echo "
    <div class=\"sonata-ba-field-error-messages\">
        ";
        // line 28
        $this->displayBlock('errors', $context, $blocks);
        // line 29
        echo "    </div>
</div>
";
    }

    // line 14
    public function block_label($context, array $blocks = array())
    {
        // line 15
        echo "        ";
        if (((isset($context["inline"]) ? $context["inline"] : $this->getContext($context, "inline")) == "natural")) {
            // line 16
            echo "            ";
            if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
                // line 17
                echo "                ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'label', (twig_test_empty($_label_ = $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "name")) ? array() : array("label" => $_label_)));
                echo "
            ";
            } else {
                // line 19
                echo "                ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'label');
                echo "
            ";
            }
            // line 21
            echo "            <br />
        ";
        }
        // line 23
        echo "    ";
    }

    // line 25
    public function block_field($context, array $blocks = array())
    {
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget');
    }

    // line 28
    public function block_errors($context, array $blocks = array())
    {
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'errors');
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_inline_edit_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  333 => 85,  330 => 84,  325 => 82,  321 => 81,  316 => 80,  313 => 79,  306 => 77,  299 => 75,  296 => 74,  290 => 72,  288 => 71,  282 => 69,  270 => 65,  267 => 64,  261 => 62,  255 => 60,  250 => 58,  244 => 56,  239 => 51,  236 => 50,  231 => 27,  213 => 23,  206 => 21,  175 => 16,  170 => 89,  159 => 54,  118 => 40,  127 => 43,  90 => 32,  34 => 13,  636 => 205,  631 => 203,  625 => 201,  623 => 200,  617 => 196,  608 => 193,  604 => 192,  598 => 191,  595 => 190,  591 => 189,  586 => 187,  579 => 185,  571 => 183,  568 => 182,  565 => 181,  560 => 100,  549 => 98,  545 => 97,  538 => 93,  534 => 92,  529 => 91,  526 => 90,  514 => 79,  511 => 78,  507 => 102,  505 => 90,  501 => 88,  499 => 78,  496 => 77,  493 => 76,  489 => 171,  482 => 166,  472 => 163,  459 => 159,  456 => 158,  450 => 157,  442 => 155,  434 => 153,  431 => 152,  426 => 151,  415 => 147,  410 => 145,  400 => 142,  394 => 139,  391 => 138,  389 => 137,  370 => 128,  361 => 127,  357 => 126,  353 => 125,  347 => 124,  343 => 122,  332 => 117,  329 => 116,  324 => 113,  310 => 112,  301 => 76,  284 => 110,  279 => 68,  277 => 108,  273 => 66,  265 => 103,  262 => 76,  259 => 75,  257 => 74,  249 => 71,  226 => 65,  223 => 64,  200 => 61,  197 => 60,  191 => 56,  185 => 55,  178 => 17,  174 => 51,  146 => 46,  134 => 42,  100 => 28,  97 => 40,  81 => 172,  65 => 13,  23 => 11,  20 => 11,  58 => 12,  110 => 31,  76 => 69,  59 => 24,  192 => 82,  150 => 48,  53 => 10,  137 => 43,  104 => 42,  77 => 13,  63 => 16,  129 => 74,  102 => 41,  480 => 162,  474 => 164,  469 => 162,  461 => 160,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 149,  413 => 146,  409 => 132,  407 => 131,  402 => 143,  398 => 129,  393 => 126,  387 => 122,  384 => 134,  381 => 120,  379 => 131,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 121,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 104,  264 => 84,  258 => 81,  252 => 59,  247 => 57,  241 => 67,  235 => 74,  229 => 73,  224 => 71,  220 => 63,  214 => 69,  208 => 68,  169 => 50,  143 => 45,  140 => 56,  132 => 51,  128 => 40,  119 => 50,  107 => 36,  38 => 14,  71 => 59,  177 => 73,  165 => 64,  160 => 61,  135 => 50,  126 => 45,  114 => 39,  84 => 36,  70 => 15,  67 => 30,  61 => 26,  28 => 14,  87 => 20,  25 => 12,  21 => 11,  94 => 39,  89 => 17,  85 => 36,  75 => 21,  68 => 24,  56 => 24,  196 => 90,  183 => 70,  171 => 61,  166 => 87,  163 => 49,  158 => 67,  156 => 53,  151 => 48,  142 => 59,  138 => 57,  136 => 56,  121 => 41,  117 => 36,  105 => 26,  91 => 38,  62 => 19,  49 => 28,  31 => 15,  26 => 14,  24 => 12,  19 => 11,  93 => 41,  88 => 6,  78 => 21,  46 => 9,  44 => 16,  27 => 14,  79 => 34,  72 => 19,  69 => 31,  47 => 22,  40 => 24,  37 => 24,  22 => 11,  246 => 70,  157 => 56,  145 => 87,  139 => 51,  131 => 55,  123 => 52,  120 => 68,  115 => 48,  111 => 30,  108 => 44,  101 => 42,  98 => 25,  96 => 42,  83 => 15,  74 => 31,  66 => 17,  55 => 25,  52 => 24,  50 => 23,  43 => 25,  41 => 19,  35 => 4,  32 => 16,  29 => 15,  209 => 82,  203 => 62,  199 => 20,  193 => 73,  189 => 71,  187 => 84,  182 => 19,  176 => 64,  173 => 74,  168 => 66,  164 => 56,  162 => 62,  154 => 50,  149 => 47,  147 => 58,  144 => 53,  141 => 51,  133 => 44,  130 => 41,  125 => 51,  122 => 50,  116 => 36,  112 => 47,  109 => 47,  106 => 44,  103 => 35,  99 => 23,  95 => 19,  92 => 28,  86 => 25,  82 => 23,  80 => 14,  73 => 31,  64 => 15,  60 => 15,  57 => 14,  54 => 22,  51 => 29,  48 => 15,  45 => 26,  42 => 19,  39 => 21,  36 => 18,  33 => 16,  30 => 15,);
    }
}
