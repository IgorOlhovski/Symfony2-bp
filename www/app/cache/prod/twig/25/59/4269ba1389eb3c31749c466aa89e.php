<?php

/* FOSFacebookBundle::loginButton.html.twig */
class __TwigTemplate_25594269ba1389eb3c31749c466aa89e extends Twig_Template
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
        echo "<fb:login-button show-faces=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "showFaces"), "html", null, true);
        echo "\" width=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "width"), "html", null, true);
        echo "\" max-rows=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "maxRows"), "html", null, true);
        echo "\" scope=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "scope"), "html", null, true);
        echo "\" registration-url=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "registrationUrl"), "html", null, true);
        echo "\" size=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "size"), "html", null, true);
        echo "\" autologoutlink=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "autologoutlink"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getContext($context, "label"), "html", null, true);
        echo "</fb:login-button>
";
    }

    public function getTemplateName()
    {
        return "FOSFacebookBundle::loginButton.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,  114 => 32,  109 => 30,  102 => 26,  97 => 24,  93 => 23,  88 => 21,  84 => 20,  80 => 19,  76 => 18,  70 => 15,  66 => 14,  62 => 13,  59 => 12,  53 => 10,  51 => 9,  48 => 8,  42 => 7,  39 => 6,  36 => 5,  30 => 3,);
    }
}
