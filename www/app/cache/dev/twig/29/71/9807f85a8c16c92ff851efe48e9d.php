<?php

/* FOSUserBundle:Resetting:request_content.html.twig */
class __TwigTemplate_29719807f85a8c16c92ff851efe48e9d extends Twig_Template
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
        // line 1
        echo "<form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_resetting_send_email"), "html", null, true);
        echo "\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div>
        ";
        // line 3
        if (array_key_exists("invalid_username", $context)) {
            // line 4
            echo "            <p>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.invalid_username", array("%username%" => (isset($context["invalid_username"]) ? $context["invalid_username"] : $this->getContext($context, "invalid_username"))), "FOSUserBundle"), "html", null, true);
            echo "</p>
        ";
        }
        // line 6
        echo "        <label for=\"username\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
    </div>
    <div>
        <input type=\"submit\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  20 => 1,  58 => 18,  110 => 31,  76 => 23,  59 => 12,  192 => 82,  150 => 56,  53 => 10,  137 => 54,  104 => 49,  77 => 30,  63 => 17,  129 => 74,  102 => 56,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  235 => 74,  229 => 73,  224 => 71,  220 => 70,  214 => 69,  208 => 68,  169 => 60,  143 => 52,  140 => 55,  132 => 51,  128 => 49,  119 => 44,  107 => 36,  38 => 6,  71 => 17,  177 => 73,  165 => 64,  160 => 61,  135 => 50,  126 => 45,  114 => 42,  84 => 20,  70 => 15,  67 => 20,  61 => 26,  28 => 3,  87 => 20,  25 => 3,  21 => 1,  94 => 22,  89 => 25,  85 => 32,  75 => 19,  68 => 14,  56 => 9,  196 => 90,  183 => 70,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 58,  151 => 57,  142 => 59,  138 => 57,  136 => 56,  121 => 46,  117 => 43,  105 => 29,  91 => 31,  62 => 19,  49 => 13,  31 => 9,  26 => 2,  24 => 3,  19 => 1,  93 => 23,  88 => 6,  78 => 21,  46 => 14,  44 => 10,  27 => 4,  79 => 20,  72 => 16,  69 => 18,  47 => 9,  40 => 11,  37 => 8,  22 => 2,  246 => 32,  157 => 56,  145 => 87,  139 => 51,  131 => 48,  123 => 47,  120 => 68,  115 => 54,  111 => 62,  108 => 37,  101 => 35,  98 => 25,  96 => 31,  83 => 21,  74 => 14,  66 => 14,  55 => 25,  52 => 12,  50 => 11,  43 => 6,  41 => 10,  35 => 5,  32 => 4,  29 => 8,  209 => 82,  203 => 78,  199 => 84,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 74,  168 => 66,  164 => 59,  162 => 62,  154 => 57,  149 => 51,  147 => 58,  144 => 53,  141 => 51,  133 => 55,  130 => 41,  125 => 46,  122 => 43,  116 => 36,  112 => 41,  109 => 51,  106 => 50,  103 => 37,  99 => 30,  95 => 32,  92 => 26,  86 => 28,  82 => 27,  80 => 25,  73 => 19,  64 => 19,  60 => 6,  57 => 11,  54 => 16,  51 => 9,  48 => 8,  45 => 17,  42 => 7,  39 => 6,  36 => 5,  33 => 6,  30 => 3,);
    }
}
