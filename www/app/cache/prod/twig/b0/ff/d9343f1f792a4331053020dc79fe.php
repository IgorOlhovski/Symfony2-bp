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
        return array (  48 => 21,  45 => 20,  33 => 15,  24 => 13,  22 => 12,  19 => 11,  686 => 206,  680 => 203,  677 => 202,  675 => 201,  669 => 198,  659 => 197,  654 => 195,  642 => 193,  639 => 192,  636 => 191,  627 => 185,  624 => 184,  607 => 182,  590 => 181,  585 => 179,  581 => 178,  578 => 177,  575 => 176,  572 => 175,  566 => 171,  562 => 169,  560 => 168,  555 => 167,  538 => 165,  521 => 164,  517 => 163,  512 => 162,  509 => 161,  506 => 160,  503 => 159,  500 => 158,  498 => 157,  495 => 156,  486 => 151,  482 => 149,  480 => 148,  477 => 147,  475 => 146,  472 => 145,  468 => 125,  462 => 123,  456 => 121,  453 => 120,  450 => 119,  443 => 140,  437 => 138,  435 => 137,  432 => 136,  426 => 133,  423 => 132,  421 => 131,  416 => 129,  405 => 127,  402 => 126,  400 => 119,  391 => 118,  386 => 115,  380 => 112,  377 => 111,  375 => 110,  371 => 109,  366 => 107,  359 => 106,  356 => 105,  353 => 104,  343 => 98,  340 => 97,  337 => 96,  331 => 94,  329 => 93,  324 => 92,  318 => 90,  312 => 88,  310 => 87,  302 => 86,  298 => 84,  289 => 81,  286 => 80,  274 => 77,  272 => 76,  269 => 75,  263 => 71,  243 => 65,  238 => 64,  228 => 59,  223 => 58,  208 => 57,  203 => 56,  197 => 54,  191 => 50,  184 => 47,  157 => 41,  152 => 38,  146 => 34,  139 => 31,  115 => 27,  107 => 24,  101 => 22,  95 => 20,  87 => 17,  84 => 16,  81 => 15,  79 => 14,  76 => 13,  57 => 24,  52 => 22,  47 => 75,  44 => 74,  42 => 62,  39 => 18,  34 => 53,  303 => 139,  297 => 137,  294 => 136,  291 => 135,  283 => 131,  277 => 78,  271 => 127,  265 => 125,  259 => 123,  256 => 122,  254 => 68,  251 => 120,  233 => 62,  227 => 105,  221 => 102,  215 => 99,  210 => 97,  207 => 96,  205 => 95,  200 => 55,  194 => 89,  188 => 86,  183 => 84,  176 => 82,  173 => 42,  167 => 78,  161 => 75,  151 => 72,  149 => 36,  144 => 33,  141 => 67,  138 => 61,  136 => 60,  132 => 59,  128 => 58,  123 => 30,  120 => 56,  112 => 26,  110 => 25,  104 => 23,  98 => 21,  92 => 19,  86 => 43,  80 => 36,  78 => 40,  75 => 39,  72 => 191,  70 => 33,  62 => 156,  59 => 155,  54 => 144,  51 => 24,  38 => 17,  333 => 85,  330 => 84,  325 => 82,  321 => 91,  316 => 80,  313 => 79,  306 => 77,  301 => 76,  299 => 75,  296 => 74,  290 => 72,  288 => 71,  282 => 79,  279 => 68,  273 => 66,  270 => 65,  267 => 64,  261 => 62,  255 => 60,  252 => 59,  250 => 67,  247 => 66,  244 => 56,  239 => 112,  236 => 63,  231 => 27,  213 => 23,  206 => 21,  199 => 20,  182 => 19,  178 => 45,  175 => 43,  170 => 89,  166 => 87,  164 => 56,  159 => 54,  156 => 73,  154 => 50,  150 => 48,  133 => 44,  121 => 29,  114 => 39,  111 => 38,  105 => 36,  103 => 35,  90 => 18,  73 => 32,  67 => 175,  64 => 174,  58 => 12,  53 => 10,  40 => 6,  37 => 54,  35 => 16,  32 => 13,  29 => 14,  23 => 1,  127 => 43,  124 => 47,  118 => 28,  113 => 40,  108 => 38,  102 => 36,  99 => 35,  96 => 34,  91 => 32,  85 => 30,  82 => 29,  77 => 27,  71 => 25,  69 => 30,  66 => 23,  63 => 27,  55 => 11,  49 => 103,  46 => 21,  43 => 19,  12 => 45,);
    }
}
