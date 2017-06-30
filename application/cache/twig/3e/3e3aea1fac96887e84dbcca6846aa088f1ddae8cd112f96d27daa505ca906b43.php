<?php

/* admin/list_companies.html.twig */
class __TwigTemplate_e35465f82d92c1c18d22d1a74e6ff62c0f726760bd236fc02029fd325e5bbae0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("template/template.html.twig", "admin/list_companies.html.twig", 1);
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
\t\t<div class=\"col-md-3\">
\t\t\t<h3>Business</h3>
\t\t</div>
\t\t<div class=\"col-md-2 col-md-offset-7\">
\t\t\t<a href=\"";
        // line 16
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "add_company\" class=\"btn btn-default\">Add business</a>
\t\t</div>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"col-md-12\">
\t\t\t<ol>
\t\t\t\t";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["companies"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["company"]) {
            // line 23
            echo "\t\t\t\t\t<li><h2>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["company"], "title", array()), "html", null, true);
            echo "</h2></li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['company'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "\t\t\t</ol>
\t\t</div>
\t</div>
\t";
    }

    public function getTemplateName()
    {
        return "admin/list_companies.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 25,  60 => 23,  56 => 22,  47 => 16,  31 => 4,  28 => 3,  11 => 1,);
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
\t\t<div class=\"col-md-3\">
\t\t\t<h3>Business</h3>
\t\t</div>
\t\t<div class=\"col-md-2 col-md-offset-7\">
\t\t\t<a href=\"{{base_url}}add_company\" class=\"btn btn-default\">Add business</a>
\t\t</div>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"col-md-12\">
\t\t\t<ol>
\t\t\t\t{% for company in companies %}
\t\t\t\t\t<li><h2>{{ company.title }}</h2></li>
\t\t\t\t{% endfor %}
\t\t\t</ol>
\t\t</div>
\t</div>
\t{% endblock %}", "admin/list_companies.html.twig", "/var/www/arca_test/application/views/admin/list_companies.html.twig");
    }
}
