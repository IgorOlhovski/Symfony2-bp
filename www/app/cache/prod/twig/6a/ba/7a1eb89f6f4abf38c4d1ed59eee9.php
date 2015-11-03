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

";
        // line 6
        if ($this->getContext($context, "notfound")) {
            // line 7
            echo "<h2 class=\"left\" style=\"width: 350px;\">
Matches not found
</h2>
<div class=\"clearfix\"></div>

<ul class=\"own_coll\">
\t<li class=\"own active\"><a href=\"#\" title=\"\" class=\"btn btn-grey btn-large\">";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("own.content_title"), "html", null, true);
            echo "</a></li>
\t<li class=\"coll\"><a href=\"\" title=\"#\" class=\"btn btn-grey btn-large\">";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("collective.content_title"), "html", null, true);
            echo "</a></li>
</ul>

<ul class=\"cat clearfix\">
\t<li><a href=\"/\" title=\"\" class=\"btn btn-grey btn-small\">";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("back.buttons"), "html", null, true);
            echo "</a></li>
</ul>
<br>
<br>

</div>
";
        } else {
            // line 25
            echo "<h2 class=\"left\" style=\"width: 350px;\">
";
            // line 26
            echo twig_escape_filter($this->env, $this->getContext($context, "curdate"), "html", null, true);
            echo "
 ";
            // line 27
            if (($this->getContext($context, "favorites") == "yes")) {
                // line 28
                echo " ";
            }
            // line 29
            echo "</h2>
<span class=\"prev_next\">


<a ";
            // line 33
            if (($this->getContext($context, "prev_button") == false)) {
                echo "style=\"opacity: 0.4 !important;\" ";
            } else {
                echo " href=\"javascript: history.go(-1);\"";
            }
            echo " title=\"\" class=\"\">< Prev Day</a>
 - 
<a href=\"javascript: location.reload();\" title=\"\" class=\"\">refresh</a>
 - 
<a ";
            // line 37
            if (($this->getContext($context, "next_button") == false)) {
                echo "style=\"opacity: 0.4 !important;\" ";
            } else {
                echo " href=\"/day/";
                echo twig_escape_filter($this->env, $this->getContext($context, "nextpage"), "html", null, true);
                if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "get", array(0 => "show"), "method") == "favorites")) {
                    echo "?show=favorites";
                }
                echo "\"";
            }
            echo " title=\"\" class=\"\">Next Day ></a>

</span>

<div class=\"clearfix\"></div>

<ul class=\"own_coll\">
\t<li class=\"own active\"><a href=\"#\" title=\"\" class=\"btn btn-grey btn-large\">";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("own.content_title"), "html", null, true);
            echo "</a></li>
\t<li class=\"coll\"><a href=\"\" title=\"#\" class=\"btn btn-grey btn-large\">";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("collective.content_title"), "html", null, true);
            echo "</a></li>
</ul>

<ul class=\"cat clearfix\">

 <select onchange=\"window.location=\$(this).val();\" class=\"selectpicker\">
  <option ";
            // line 51
            if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "get", array(0 => "show"), "method") == false)) {
                echo "selected=\"selected\"";
            }
            echo " value=\"/\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("all.content_buttons"), "html", null, true);
            echo "</option>
  <option ";
            // line 52
            if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "get", array(0 => "show"), "method") == "favorites")) {
                echo "selected=\"selected\"";
            }
            echo " value=\"";
            if ($this->getAttribute($this->getContext($context, "app"), "user")) {
                echo "/?show=favorites";
            } else {
                echo "/login";
            }
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("favourites.content_buttons"), "html", null, true);
            echo "</option>
  <option ";
            // line 53
            if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "get", array(0 => "show"), "method") == "popular")) {
                echo "selected=\"selected\"";
            }
            echo " value=\"/?show=popular\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("popular.content_buttons"), "html", null, true);
            echo "</option>
  
</select>

</ul>

";
            // line 59
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "matches"));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 60
                echo "<table>
<thead>
<tr>
<th scope=\"col\" width=\"70\"><img src=\"/img/england_flag.png\" height=\"35\" width=\"45\" alt=\"England Flag\"></th>
<th scope=\"col\" colspan=\"2\" width=\"560\" align=\"left\">
";
                // line 65
                echo twig_escape_filter($this->env, $this->getContext($context, "key"), "html", null, true);
                echo "
<span class=\"add_to_fav\"><img src=\"/img/star.png\" alt=\"Add To Favourites\">
";
                // line 67
                if ($this->getAttribute($this->getContext($context, "app"), "user")) {
                    // line 68
                    echo "<span class=\"ajax_fav\" title=\"";
                    echo twig_escape_filter($this->env, $this->getContext($context, "key"), "html", null, true);
                    echo "\"></span>
";
                } else {
                    // line 70
                    echo "<span><a href=\"/login\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("add_to_favor.content_title"), "html", null, true);
                    echo "</a></span>
";
                }
                // line 72
                echo "</span>
</th>
<th scope=\"col\" width=\"90\">";
                // line 74
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("comments.content_title"), "html", null, true);
                echo "</th>
<th scope=\"col\" width=\"90\">";
                // line 75
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("betting_choice.content_title"), "html", null, true);
                echo "</th>
<th scope=\"col\" width=\"90\">";
                // line 76
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("stats.content_title"), "html", null, true);
                echo "</th>
</tr>
</thead>
<tr>
";
                // line 80
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "matches"), $this->getContext($context, "key"), array(), "array"));
                foreach ($context['_seq'] as $context["keys"] => $context["value"]) {
                    // line 81
                    echo "<td align=\"center\" class=\"time\">";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "matches"), $this->getContext($context, "key"), array(), "array"), $this->getContext($context, "keys"), array(), "array"), "begins_at", array(), "array"), "h:m"), "html", null, true);
                    echo "</td>
<td width=\"280\" class=\"nopadding\">
<div class=\"meter-wrap\">
<div class=\"meter-value right\" style=\"background-color: #d4e3fe; width: 25%;\">
<div class=\"meter-text\">
<img src=\"/img/arsenal_logo.png\" alt=\"Arsenal\"> <span class=\"name\">";
                    // line 86
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "matches"), $this->getContext($context, "key"), array(), "array"), $this->getContext($context, "keys"), array(), "array"), "team_home_name", array(), "array"), "html", null, true);
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
                    // line 97
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "matches"), $this->getContext($context, "key"), array(), "array"), $this->getContext($context, "keys"), array(), "array"), "team_away_name", array(), "array"), "html", null, true);
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
                // line 106
                echo "</table>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
        }
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
        return array (  253 => 106,  238 => 97,  224 => 86,  215 => 81,  211 => 80,  204 => 76,  200 => 75,  196 => 74,  192 => 72,  186 => 70,  180 => 68,  178 => 67,  173 => 65,  166 => 60,  162 => 59,  149 => 53,  135 => 52,  127 => 51,  118 => 45,  114 => 44,  95 => 37,  84 => 33,  78 => 29,  75 => 28,  73 => 27,  69 => 26,  66 => 25,  56 => 18,  49 => 14,  45 => 13,  37 => 7,  35 => 6,  31 => 4,  28 => 3,);
    }
}
