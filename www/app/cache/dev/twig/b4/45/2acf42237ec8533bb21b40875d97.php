<?php

/* bpBundle:Default:edit_team.html.twig */
class __TwigTemplate_b4452acf42237ec8533bb21b40875d97 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("edit_team.title"), "html", null, true);
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
<a href=\"#\" class=\"btn btn-image btn-grey alignleft\"><img src=\"/img/tottenham_logo.png\" alt=\"Tottenham\"> <span>Edit Powers Tottenham</span></a>

<a href=\"#\" class=\"btn btn-image btn-green alignleft\" style=\"margin-left:300px;\">425/800</a>

<div class=\"clearfix\"></div>

<br/>

<table class=\"sliders\">
\t<thead>
\t<tr>
\t\t<td width=\"150\" align=\"center\" class=\"black\">";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("edit_team.title1"), "html", null, true);
        echo "</td>
\t\t<td width=\"490\" align=\"center\"><form><input id=\"range9\" name=\"range9\" type=\"range\" min=1 max=100 value=55>
      <output for=\"range9\">55</output></form><p class=\"min\">0</p><p class=\"max\">100</p></td>
\t\t<td width=\"300\">use notemarks as reminders</td>
\t</tr>
\t</thead>
\t<tr>
\t\t<td align=\"center\" class=\"black\">management</td>
\t\t<td width=\"490\" align=\"center\"><form><input id=\"range\" name=\"range\" type=\"range\" min=1 max=100 value=38>
      <output for=\"range\">38</output></form><p class=\"min\">0</p><p class=\"max\">100</p></td>
      \t<td rowspan=\"10\" class=\"valigntop\">
\t      \t<ul class=\"reminders\">
\t\t      \t<li><img src=\"/img/lightning_bolt.png\" alt=\"\"> <span>Selitys</span></li>
\t\t      \t<li><img src=\"/img/www.png\" alt=\"\"> <span>Selitys</span></li>
\t\t      \t<li><img src=\"/img/ex_mark.png\" alt=\"\"> <span>Selitys</span></li>
\t\t      \t<li><img src=\"/img/qmark_greybg.png\" alt=\"\"> <span>Selitys</span></li>
\t      \t</ul>
      \t</td>
\t</tr>
\t<tr>
\t\t<td align=\"center\" class=\"black\">";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("edit_team.title2"), "html", null, true);
        echo "</td>
\t\t<td width=\"490\" align=\"center\"><form>
\t\t<input id=\"range2\" name=\"range2\" type=\"range\" min=1 max=100 value=70>
      <output for=\"range2\">70</output></form><p class=\"min\">0</p><p class=\"max\">100</p></td>
\t</tr>
\t<tr>
\t\t<td align=\"center\" class=\"black\">";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("edit_team.title3"), "html", null, true);
        echo "</td>
\t\t<td width=\"490\" align=\"center\"><form>
\t\t<input id=\"range3\" name=\"range3\" type=\"range\" min=1 max=100 value=25>
      <output for=\"range3\">25</output></form><p class=\"min\">0</p><p class=\"max\">100</p></td>
\t</tr>
\t<tr>
\t\t<td align=\"center\" class=\"black\">";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("edit_team.title4"), "html", null, true);
        echo "</td>
\t\t<td width=\"490\" align=\"center\"><form>
\t\t<input id=\"range4\" name=\"range4\" type=\"range\" min=1 max=100 value=60>
      <output for=\"range4\">60</output></form><p class=\"min\">0</p><p class=\"max\">100</p></td>
\t</tr>
\t<tr>
\t\t<td align=\"center\" class=\"black\">";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("edit_team.title5"), "html", null, true);
        echo "</td>
\t\t<td width=\"490\" align=\"center\"><form>
\t\t<input id=\"range5\" name=\"range5\" type=\"range\" min=1 max=100 value=50>
      <output for=\"range5\">50</output></form><p class=\"min\">0</p><p class=\"max\">100</p></td>
\t</tr>
\t<tr>
\t\t<td align=\"center\" class=\"black\">";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("edit_team.title6"), "html", null, true);
        echo "</td>
\t\t<td width=\"490\" align=\"center\"><form>
\t\t<input id=\"range6\" name=\"range6\" type=\"range\" min=1 max=100 value=80>
      <output for=\"range6\">80</output></form><p class=\"min\">0</p><p class=\"max\">100</p></td>
\t</tr>
\t<tr>
\t\t<td align=\"center\" class=\"black\">";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("edit_team.title7"), "html", null, true);
        echo "</td>
\t\t<td width=\"490\" align=\"center\"><form>
\t\t<input id=\"range7\" name=\"range7\" type=\"range\" min=1 max=100 value=40>
      <output for=\"range7\">40</output></form><p class=\"min\">0</p><p class=\"max\">100</p></td>
\t</tr>
\t<tr>
\t\t<td align=\"center\" class=\"black\">";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("edit_team.title8"), "html", null, true);
        echo "</td>
\t\t<!-- <td width=\"490\" align=\"center\"><output onforminput=\"value=range.value\" class=\"range\">50</output>
\t\t<input type=\"range\" min=\"0\" max=\"100\" value=\"50\" required name=\"range\" /></td> -->
\t\t<td width=\"490\" align=\"center\"><form><input id=\"range8\" name=\"range8\" type=\"range\" min=1 max=100 value=62>
      <output for=\"range8\">62</output></form><p class=\"min\">0</p><p class=\"max\">100</p></td>
\t</tr>
\t<tr>
\t\t<td align=\"center\" class=\"black valigntop\">notes&nbsp;&nbsp;<img src=\"/img/qmark.png\" alt=\"\"></td>
\t\t<td><textarea></textarea></td>
\t</tr>
\t<tr>
\t\t<td></td>
\t\t<td align=\"right\">
\t\t<a href=\"#\" class=\"btn btn-small btn-grey alignright\" style=\"margin-left:10px;\">";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("back.buttons"), "html", null, true);
        echo "</a><a href=\"#\" class=\"btn btn-small btn-blue alignright\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("save.buttons"), "html", null, true);
        echo "</a>
\t\t</td>
\t</tr>
</table>

";
    }

    public function getTemplateName()
    {
        return "bpBundle:Default:edit_team.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 74,  102 => 56,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  235 => 74,  229 => 73,  224 => 71,  220 => 70,  214 => 69,  208 => 68,  169 => 60,  143 => 56,  140 => 55,  132 => 51,  128 => 49,  119 => 42,  107 => 36,  38 => 6,  71 => 17,  177 => 65,  165 => 64,  160 => 61,  135 => 47,  126 => 45,  114 => 42,  84 => 44,  70 => 20,  67 => 15,  61 => 13,  28 => 3,  87 => 20,  25 => 5,  21 => 2,  94 => 22,  89 => 20,  85 => 25,  75 => 38,  68 => 14,  56 => 9,  196 => 90,  183 => 70,  171 => 61,  166 => 71,  163 => 70,  158 => 67,  156 => 58,  151 => 57,  142 => 59,  138 => 57,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 31,  62 => 23,  49 => 19,  31 => 4,  26 => 6,  24 => 3,  19 => 1,  93 => 50,  88 => 6,  78 => 21,  46 => 7,  44 => 12,  27 => 4,  79 => 18,  72 => 16,  69 => 25,  47 => 9,  40 => 7,  37 => 10,  22 => 2,  246 => 32,  157 => 56,  145 => 87,  139 => 50,  131 => 42,  123 => 47,  120 => 68,  115 => 43,  111 => 62,  108 => 37,  101 => 32,  98 => 31,  96 => 31,  83 => 25,  74 => 14,  66 => 15,  55 => 15,  52 => 18,  50 => 10,  43 => 6,  41 => 5,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 74,  168 => 66,  164 => 59,  162 => 62,  154 => 54,  149 => 51,  147 => 58,  144 => 53,  141 => 51,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 36,  112 => 42,  109 => 41,  106 => 36,  103 => 37,  99 => 30,  95 => 34,  92 => 33,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 14,  60 => 6,  57 => 11,  54 => 10,  51 => 14,  48 => 8,  45 => 17,  42 => 7,  39 => 9,  36 => 5,  33 => 4,  30 => 7,);
    }
}
