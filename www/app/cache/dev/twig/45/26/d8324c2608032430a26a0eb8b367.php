<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_4526d8324c2608032430a26a0eb8b367 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        // line 3
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username"), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        // line 8
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username"), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  65 => 13,  23 => 3,  20 => 1,  58 => 18,  110 => 31,  76 => 23,  59 => 12,  192 => 82,  150 => 56,  53 => 10,  137 => 54,  104 => 49,  77 => 30,  63 => 17,  129 => 74,  102 => 56,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  235 => 74,  229 => 73,  224 => 71,  220 => 70,  214 => 69,  208 => 68,  169 => 60,  143 => 52,  140 => 55,  132 => 51,  128 => 49,  119 => 44,  107 => 36,  38 => 6,  71 => 17,  177 => 73,  165 => 64,  160 => 61,  135 => 50,  126 => 45,  114 => 42,  84 => 20,  70 => 15,  67 => 20,  61 => 26,  28 => 3,  87 => 20,  25 => 3,  21 => 1,  94 => 22,  89 => 25,  85 => 32,  75 => 15,  68 => 14,  56 => 12,  196 => 90,  183 => 70,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 58,  151 => 57,  142 => 59,  138 => 57,  136 => 56,  121 => 46,  117 => 43,  105 => 29,  91 => 31,  62 => 19,  49 => 13,  31 => 4,  26 => 11,  24 => 6,  19 => 1,  93 => 23,  88 => 6,  78 => 21,  46 => 8,  44 => 10,  27 => 4,  79 => 20,  72 => 16,  69 => 14,  47 => 9,  40 => 11,  37 => 8,  22 => 1,  246 => 32,  157 => 56,  145 => 87,  139 => 51,  131 => 48,  123 => 47,  120 => 68,  115 => 54,  111 => 62,  108 => 37,  101 => 35,  98 => 25,  96 => 31,  83 => 21,  74 => 14,  66 => 14,  55 => 25,  52 => 9,  50 => 9,  43 => 6,  41 => 10,  35 => 5,  32 => 4,  29 => 8,  209 => 82,  203 => 78,  199 => 84,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 74,  168 => 66,  164 => 59,  162 => 62,  154 => 57,  149 => 51,  147 => 58,  144 => 53,  141 => 51,  133 => 55,  130 => 41,  125 => 46,  122 => 43,  116 => 36,  112 => 41,  109 => 51,  106 => 50,  103 => 37,  99 => 30,  95 => 32,  92 => 26,  86 => 28,  82 => 27,  80 => 25,  73 => 19,  64 => 19,  60 => 13,  57 => 11,  54 => 16,  51 => 9,  48 => 11,  45 => 17,  42 => 8,  39 => 6,  36 => 5,  33 => 3,  30 => 1,);
    }
}
