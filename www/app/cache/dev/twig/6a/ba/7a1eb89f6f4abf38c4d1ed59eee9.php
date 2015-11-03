<?php

/* bpBundle:Default:home.html.twig */
class __TwigTemplate_6aba7a1eb89f6f4abf38c4d1ed59eee9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("bpBundle:Default:layout.html.twig");

        $this->blocks = array(
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
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "


<h2 class=\"left\" style=\"width: 350px;\">
";
        // line 8
        if (((isset($context["curpage"]) ? $context["curpage"] : $this->getContext($context, "curpage")) == 1)) {
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("today_matches.h2"), "html", null, true);
            echo "
";
        } else {
            // line 11
            echo twig_escape_filter($this->env, (isset($context["curdate"]) ? $context["curdate"] : $this->getContext($context, "curdate")), "html", null, true);
            echo "
";
        }
        // line 13
        echo "</h2>
<span class=\"prev_next\">
<a ";
        // line 15
        if (((isset($context["prev_button"]) ? $context["prev_button"] : $this->getContext($context, "prev_button")) == false)) {
            echo "style=\"opacity: 0.4 !important;\" ";
        } else {
            echo " href=\"javascript: history.go(-1);\"";
        }
        echo " title=\"\" class=\"\">< Prev Day</a>
 - 
<a href=\"javascript: location.reload();\" title=\"\" class=\"\">refresh</a>
 - 
<a ";
        // line 19
        if (((isset($context["next_button"]) ? $context["next_button"] : $this->getContext($context, "next_button")) == false)) {
            echo "style=\"opacity: 0.4 !important;\" ";
        } else {
            echo " href=\"/day/";
            echo twig_escape_filter($this->env, (isset($context["nextpage"]) ? $context["nextpage"] : $this->getContext($context, "nextpage")), "html", null, true);
            echo "\"";
        }
        echo " title=\"\" class=\"\">Next Day ></a>

</span>

<div class=\"clearfix\"></div>

<ul class=\"own_coll\">
\t<li class=\"own active\"><a href=\"#\" title=\"\" class=\"btn btn-grey btn-large\">";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("own.content_title"), "html", null, true);
        echo "</a></li>
\t<li class=\"coll\"><a href=\"\" title=\"#\" class=\"btn btn-grey btn-large\">";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("collective.content_title"), "html", null, true);
        echo "</a></li>
</ul>

<ul class=\"cat clearfix\">
\t<li><a href=\"\" title=\"\" class=\"btn btn-grey btn-small\">";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("popular.content_buttons"), "html", null, true);
        echo "</a></li>
\t<li><a href=\"\" title=\"\" class=\"btn btn-grey btn-small\">";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("favourites.content_buttons"), "html", null, true);
        echo "</a></li>
</ul>

";
        // line 35
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["matches"]) ? $context["matches"] : $this->getContext($context, "matches")));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 36
            echo "<table>
<thead>
<tr>
<th scope=\"col\" width=\"70\"><img src=\"/img/england_flag.png\" height=\"35\" width=\"45\" alt=\"England Flag\"></th>
<th scope=\"col\" colspan=\"2\" width=\"560\" align=\"left\">
";
            // line 41
            echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
            echo "
<span class=\"add_to_fav\"><img src=\"/img/star.png\" alt=\"Add To Favourites\">
";
            // line 43
            if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user")) {
                // line 44
                echo "<span class=\"ajax_fav\" title=\"";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                echo "\"></span>
";
            } else {
                // line 46
                echo "<span><a href=\"/login\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("add_to_favor.content_title"), "html", null, true);
                echo "</a></span>
";
            }
            // line 48
            echo "</span>
</th>
<th scope=\"col\" width=\"90\">";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("comments.content_title"), "html", null, true);
            echo "</th>
<th scope=\"col\" width=\"90\">";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("betting_choice.content_title"), "html", null, true);
            echo "</th>
<th scope=\"col\" width=\"90\">";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("stats.content_title"), "html", null, true);
            echo "</th>
</tr>
</thead>
<tr>
";
            // line 56
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["matches"]) ? $context["matches"] : $this->getContext($context, "matches")), (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), array(), "array"));
            foreach ($context['_seq'] as $context["keys"] => $context["value"]) {
                // line 57
                echo "<td align=\"center\" class=\"time\">";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["matches"]) ? $context["matches"] : $this->getContext($context, "matches")), (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), array(), "array"), (isset($context["keys"]) ? $context["keys"] : $this->getContext($context, "keys")), array(), "array"), "begins_at", array(), "array"), "h:m"), "html", null, true);
                echo "</td>
<td width=\"280\" class=\"nopadding\">
<div class=\"meter-wrap\">
<div class=\"meter-value right\" style=\"background-color: #d4e3fe; width: 25%;\">
<div class=\"meter-text\">
<img src=\"/img/arsenal_logo.png\" alt=\"Arsenal\"> <span class=\"name\">";
                // line 62
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["matches"]) ? $context["matches"] : $this->getContext($context, "matches")), (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), array(), "array"), (isset($context["keys"]) ? $context["keys"] : $this->getContext($context, "keys")), array(), "array"), "team_home_name", array(), "array"), "html", null, true);
                echo "</span>
</div>
</div>
</div>
<img src=\"/img/qmark.png\" class=\"qmark\">
</td>
<td width=\"280\" class=\"nopadding\">
<div class=\"meter-wrap\">
<div class=\"meter-value left\" style=\"background-color: #d2e2c2; width: 75%;\">
</div>
<div class=\"meter-text\">
<img src=\"/img/tottenham_logo.png\" alt=\"Tottenham\"> <span class=\"name\">";
                // line 73
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["matches"]) ? $context["matches"] : $this->getContext($context, "matches")), (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), array(), "array"), (isset($context["keys"]) ? $context["keys"] : $this->getContext($context, "keys")), array(), "array"), "team_away_name", array(), "array"), "html", null, true);
                echo "</span>
</div>
</div> 
</td>
<td align=\"center\"><img src=\"/img/comments_icon.png\" alt=\"Comments\" class=\"comments_icon\"><span class=\"comments_value\">12</span></td>
<td align=\"center\">102,0</td>
<td align=\"center\"><img src=\"/img/stats_icon.png\" alt=\"\"></td>
</tr>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['keys'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 82
            echo "</table>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 84
        echo "
";
    }

    public function getTemplateName()
    {
        return "bpBundle:Default:home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 82,  150 => 56,  53 => 15,  137 => 54,  104 => 49,  77 => 30,  63 => 27,  129 => 74,  102 => 56,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  235 => 74,  229 => 73,  224 => 71,  220 => 70,  214 => 69,  208 => 68,  169 => 60,  143 => 52,  140 => 55,  132 => 51,  128 => 49,  119 => 44,  107 => 36,  38 => 6,  71 => 17,  177 => 73,  165 => 64,  160 => 61,  135 => 50,  126 => 45,  114 => 42,  84 => 27,  70 => 28,  67 => 15,  61 => 26,  28 => 3,  87 => 20,  25 => 5,  21 => 1,  94 => 22,  89 => 20,  85 => 32,  75 => 38,  68 => 14,  56 => 9,  196 => 90,  183 => 70,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 58,  151 => 57,  142 => 59,  138 => 57,  136 => 56,  121 => 46,  117 => 43,  105 => 36,  91 => 31,  62 => 23,  49 => 13,  31 => 4,  26 => 6,  24 => 3,  19 => 1,  93 => 50,  88 => 6,  78 => 21,  46 => 7,  44 => 11,  27 => 4,  79 => 18,  72 => 16,  69 => 25,  47 => 9,  40 => 7,  37 => 8,  22 => 2,  246 => 32,  157 => 56,  145 => 87,  139 => 51,  131 => 48,  123 => 47,  120 => 68,  115 => 54,  111 => 62,  108 => 37,  101 => 35,  98 => 31,  96 => 31,  83 => 25,  74 => 14,  66 => 15,  55 => 25,  52 => 18,  50 => 10,  43 => 6,  41 => 5,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 84,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 74,  168 => 66,  164 => 59,  162 => 62,  154 => 57,  149 => 51,  147 => 58,  144 => 53,  141 => 51,  133 => 55,  130 => 41,  125 => 46,  122 => 43,  116 => 36,  112 => 41,  109 => 51,  106 => 50,  103 => 37,  99 => 30,  95 => 32,  92 => 33,  86 => 28,  82 => 22,  80 => 26,  73 => 19,  64 => 19,  60 => 6,  57 => 11,  54 => 10,  51 => 14,  48 => 8,  45 => 17,  42 => 7,  39 => 9,  36 => 5,  33 => 4,  30 => 7,);
    }
}
