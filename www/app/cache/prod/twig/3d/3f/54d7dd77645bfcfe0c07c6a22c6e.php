<?php

/* SonataAdminBundle:CRUD:list_datetime.html.twig */
class __TwigTemplate_3d3f54d7dd77645bfcfe0c07c6a22c6e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        // line 15
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "html", null, true);
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_datetime.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 18,  69 => 34,  67 => 33,  64 => 31,  62 => 30,  54 => 26,  52 => 25,  47 => 23,  43 => 21,  41 => 20,  36 => 18,  33 => 17,  31 => 16,  114 => 23,  100 => 22,  94 => 21,  76 => 20,  73 => 19,  59 => 29,  50 => 17,  32 => 16,  29 => 15,  26 => 14,);
    }
}
