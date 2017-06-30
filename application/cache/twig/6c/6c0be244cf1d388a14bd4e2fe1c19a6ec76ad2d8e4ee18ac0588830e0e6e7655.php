<?php

/* welcome/results.html.twig */
class __TwigTemplate_d9fa56fa6435335e0573232b3f1f88acb72188ea1c37751ef79d98dac3da57ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("template/template.html.twig", "welcome/results.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "template/template.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "\t<div id=\"infoMessage\">";
        echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
        echo "</div>

\t<div class=\"row\">
\t\t<div class=\"col-md-4 col-md-offset-4\" align=\"center\">
\t\t\t<h1 class=\"offset1\">Business Finder</h1>
\t\t</div>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"col-md-12\">
\t\t\t<h1 class=\"offset1\">Results for \"";
        // line 13
        echo twig_escape_filter($this->env, ($context["key_word"] ?? null), "html", null, true);
        echo "\"</h1>
\t\t\t<ol>
\t\t\t\t";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["companies"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["company"]) {
            // line 16
            echo "\t\t\t\t\t";
            $context["categories"] = array();
            // line 17
            echo "\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["company"], "category", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 18
                echo "\t\t\t\t\t\t";
                $context["categories"] = twig_array_merge(($context["categories"] ?? null), array(0 => $this->getAttribute($context["category"], "name", array())));
                // line 19
                echo "\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "\t\t\t\t\t<li><a href=\"";
            echo twig_escape_filter($this->env, base_url(), "html", null, true);
            echo "welcome/company/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["company"], "id", array()), "html", null, true);
            echo "\"><h2>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["company"], "title", array()), "html", null, true);
            echo "</h2><h5>in ";
            echo twig_escape_filter($this->env, twig_join_filter(($context["categories"] ?? null), ", "), "html", null, true);
            echo "</h5></a></li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['company'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "\t\t\t</ol>
\t\t</div>
\t</div>
\t";
    }

    public function getTemplateName()
    {
        return "welcome/results.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 22,  70 => 20,  64 => 19,  61 => 18,  56 => 17,  53 => 16,  49 => 15,  44 => 13,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'template/template.html.twig' %}

{% block content %}
\t<div id=\"infoMessage\">{{ message }}</div>

\t<div class=\"row\">
\t\t<div class=\"col-md-4 col-md-offset-4\" align=\"center\">
\t\t\t<h1 class=\"offset1\">Business Finder</h1>
\t\t</div>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"col-md-12\">
\t\t\t<h1 class=\"offset1\">Results for \"{{ key_word }}\"</h1>
\t\t\t<ol>
\t\t\t\t{% for company in companies %}
\t\t\t\t\t{% set categories = [] %}
\t\t\t\t\t{% for category in company.category %}
\t\t\t\t\t\t{% set categories = categories|merge([category.name]) %}
\t\t\t\t\t{% endfor %}
\t\t\t\t\t<li><a href=\"{{base_url()}}welcome/company/{{ company.id }}\"><h2>{{ company.title }}</h2><h5>in {{ categories|join(', ') }}</h5></a></li>
\t\t\t\t{% endfor %}
\t\t\t</ol>
\t\t</div>
\t</div>
\t{% endblock %}", "welcome/results.html.twig", "/var/www/arca_test/application/views/welcome/results.html.twig");
    }
}
