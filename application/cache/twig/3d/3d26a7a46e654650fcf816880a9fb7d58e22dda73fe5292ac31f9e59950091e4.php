<?php

/* admin/form_company.html.twig */
class __TwigTemplate_2a50f0b01d105c9596211bc6036ed4b141fcdbc311dccd325faa9ea5e2df290e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("template/template.html.twig", "admin/form_company.html.twig", 1);
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
        echo validation_errors();
        echo "</div>

\t<div class=\"row\">
\t\t<div class=\"col-md-4\">
\t\t\t<h1 class=\"offset1\">Administrative Area</h1>
\t\t\t\t";
        // line 9
        echo form_open("admin/save_company");
        echo "

\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"title\">Title</label>
\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"title\" placeholder=\"Title\" name=\"title\">
\t\t\t\t</div>

\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"phone\">Phone</label>
\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"phone\" placeholder=\"Phone number\" name=\"phonenumber\">
\t\t\t\t</div>

\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"address\">Address</label>
\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"address\" placeholder=\"Address\" name=\"address\">
\t\t\t\t</div>

\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"zipcode\">Zip Code</label>
\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"zipcode\" placeholder=\"Zip code\" name=\"zipcode\">
\t\t\t\t</div>

\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"state\">State</label>
\t\t\t\t\t<select class=\"form-control selectpicker\" name=\"state\" id=\"state\" data-live-search=\"true\">
\t\t\t\t\t\t";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["states"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["state"]) {
            // line 35
            echo "\t\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["state"], "state", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["state"], "state", array()), "html", null, true);
            echo "</option>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['state'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "\t\t\t\t\t</select>
\t\t\t\t</div>

\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"city\">City</label>
\t\t\t\t\t<select class=\"form-control selectpicker\" name=\"city\" id=\"city\" data-live-search=\"true\">
\t\t\t\t\t\t";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cities"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["city"]) {
            // line 44
            echo "\t\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["city"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["city"], "name", array()), "html", null, true);
            echo "</option>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['city'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "\t\t\t\t\t</select>
\t\t\t\t</div>

\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"description\">Description</label>
\t\t\t\t\t<textarea class=\"form-control\" id=\"description\" name=\"description\" rows=\"3\"></textarea>
\t\t\t\t</div>

\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"category\">Category</label>
\t\t\t\t\t<select class=\"form-control selectpicker\" name=\"category[]\" id=\"category\" multiple>
\t\t\t\t\t\t";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 58
            echo "\t\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "</option>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "\t\t\t\t\t</select>
\t\t\t\t</div>

\t\t\t\t<button type=\"submit\" class=\"btn btn-default\">Save</button>
\t\t\t\t";
        // line 64
        echo form_close();
        echo "
\t\t</div>
\t</div>

\t";
    }

    public function getTemplateName()
    {
        return "admin/form_company.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 64,  134 => 60,  123 => 58,  119 => 57,  106 => 46,  95 => 44,  91 => 43,  83 => 37,  72 => 35,  68 => 34,  40 => 9,  31 => 4,  28 => 3,  11 => 1,);
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
\t<div id=\"infoMessage\">{{ validation_errors() }}</div>

\t<div class=\"row\">
\t\t<div class=\"col-md-4\">
\t\t\t<h1 class=\"offset1\">Administrative Area</h1>
\t\t\t\t{{ form_open('admin/save_company') }}

\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"title\">Title</label>
\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"title\" placeholder=\"Title\" name=\"title\">
\t\t\t\t</div>

\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"phone\">Phone</label>
\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"phone\" placeholder=\"Phone number\" name=\"phonenumber\">
\t\t\t\t</div>

\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"address\">Address</label>
\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"address\" placeholder=\"Address\" name=\"address\">
\t\t\t\t</div>

\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"zipcode\">Zip Code</label>
\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"zipcode\" placeholder=\"Zip code\" name=\"zipcode\">
\t\t\t\t</div>

\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"state\">State</label>
\t\t\t\t\t<select class=\"form-control selectpicker\" name=\"state\" id=\"state\" data-live-search=\"true\">
\t\t\t\t\t\t{% for state in states %}
\t\t\t\t\t\t\t<option value=\"{{state.state}}\">{{state.state}}</option>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</select>
\t\t\t\t</div>

\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"city\">City</label>
\t\t\t\t\t<select class=\"form-control selectpicker\" name=\"city\" id=\"city\" data-live-search=\"true\">
\t\t\t\t\t\t{% for city in cities %}
\t\t\t\t\t\t\t<option value=\"{{city.id}}\">{{city.name}}</option>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</select>
\t\t\t\t</div>

\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"description\">Description</label>
\t\t\t\t\t<textarea class=\"form-control\" id=\"description\" name=\"description\" rows=\"3\"></textarea>
\t\t\t\t</div>

\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"category\">Category</label>
\t\t\t\t\t<select class=\"form-control selectpicker\" name=\"category[]\" id=\"category\" multiple>
\t\t\t\t\t\t{% for category in categories %}
\t\t\t\t\t\t\t<option value=\"{{category.id}}\">{{category.name}}</option>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</select>
\t\t\t\t</div>

\t\t\t\t<button type=\"submit\" class=\"btn btn-default\">Save</button>
\t\t\t\t{{ form_close() }}
\t\t</div>
\t</div>

\t{% endblock %}", "admin/form_company.html.twig", "/var/www/arca_test/application/views/admin/form_company.html.twig");
    }
}
