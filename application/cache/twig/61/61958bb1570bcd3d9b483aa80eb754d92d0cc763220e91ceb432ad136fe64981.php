<?php

/* welcome/form_company.html.twig */
class __TwigTemplate_b5ebcbd69d25c113880ba8b9ba01f55d28c614c0f4be5d74c593baeb2bb3c0ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("template/template.html.twig", "welcome/form_company.html.twig", 1);
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
        echo "
\t<div class=\"row\">
\t\t<div class=\"col-md-4\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"title\">Title</label>
\t\t\t\t\t<input type=\"text\" class=\"form-control\" disabled id=\"title\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["company"] ?? null), "title", array()), "html", null, true);
        echo "\">
\t\t\t\t</div>

\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"phone\">Phone</label>
\t\t\t\t\t<input type=\"text\" class=\"form-control\" disabled id=\"phone\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["company"] ?? null), "phonenumber", array()), "html", null, true);
        echo "\">
\t\t\t\t</div>

\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"address\">Address</label>
\t\t\t\t\t<input type=\"text\" class=\"form-control\" disabled id=\"address\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute(($context["company"] ?? null), "address", array()), "html", null, true);
        echo "\">
\t\t\t\t</div>

\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"zipcode\">Zip Code</label>
\t\t\t\t\t<input type=\"text\" class=\"form-control\" disabled id=\"zipcode\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute(($context["company"] ?? null), "zipcode", array()), "html", null, true);
        echo "\">
\t\t\t\t</div>

\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"state\">State</label>
\t\t\t\t\t<select class=\"form-control selectpicker\" disabled id=\"state\">
\t\t\t\t\t\t";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["states"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["state"]) {
            // line 31
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
        // line 33
        echo "\t\t\t\t\t</select>
\t\t\t\t</div>

\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"city\">City</label>
\t\t\t\t\t<select class=\"form-control selectpicker\" disabled id=\"city\">
\t\t\t\t\t\t";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cities"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["city"]) {
            // line 40
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
        // line 42
        echo "\t\t\t\t\t</select>
\t\t\t\t</div>

\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"description\">Description</label>
\t\t\t\t\t<textarea class=\"form-control\" disabled id=\"description\" rows=\"3\">";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute(($context["company"] ?? null), "description", array()), "html", null, true);
        echo "</textarea>
\t\t\t\t</div>

\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"category\">Category</label>
\t\t\t\t\t<select class=\"form-control selectpicker\" disabled name=\"category[]\" id=\"category\" multiple>
\t\t\t\t\t\t";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 54
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
        // line 56
        echo "\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t</div>
\t</div>

\t";
    }

    public function getTemplateName()
    {
        return "welcome/form_company.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 56,  129 => 54,  125 => 53,  116 => 47,  109 => 42,  98 => 40,  94 => 39,  86 => 33,  75 => 31,  71 => 30,  62 => 24,  54 => 19,  46 => 14,  38 => 9,  31 => 4,  28 => 3,  11 => 1,);
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

\t<div class=\"row\">
\t\t<div class=\"col-md-4\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"title\">Title</label>
\t\t\t\t\t<input type=\"text\" class=\"form-control\" disabled id=\"title\" value=\"{{company.title}}\">
\t\t\t\t</div>

\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"phone\">Phone</label>
\t\t\t\t\t<input type=\"text\" class=\"form-control\" disabled id=\"phone\" value=\"{{company.phonenumber}}\">
\t\t\t\t</div>

\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"address\">Address</label>
\t\t\t\t\t<input type=\"text\" class=\"form-control\" disabled id=\"address\" value=\"{{company.address}}\">
\t\t\t\t</div>

\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"zipcode\">Zip Code</label>
\t\t\t\t\t<input type=\"text\" class=\"form-control\" disabled id=\"zipcode\" value=\"{{company.zipcode}}\">
\t\t\t\t</div>

\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"state\">State</label>
\t\t\t\t\t<select class=\"form-control selectpicker\" disabled id=\"state\">
\t\t\t\t\t\t{% for state in states %}
\t\t\t\t\t\t\t<option value=\"{{state.state}}\">{{state.state}}</option>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</select>
\t\t\t\t</div>

\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"city\">City</label>
\t\t\t\t\t<select class=\"form-control selectpicker\" disabled id=\"city\">
\t\t\t\t\t\t{% for city in cities %}
\t\t\t\t\t\t\t<option value=\"{{city.id}}\">{{city.name}}</option>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</select>
\t\t\t\t</div>

\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"description\">Description</label>
\t\t\t\t\t<textarea class=\"form-control\" disabled id=\"description\" rows=\"3\">{{company.description}}</textarea>
\t\t\t\t</div>

\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"category\">Category</label>
\t\t\t\t\t<select class=\"form-control selectpicker\" disabled name=\"category[]\" id=\"category\" multiple>
\t\t\t\t\t\t{% for category in categories %}
\t\t\t\t\t\t\t<option value=\"{{category.id}}\">{{category.name}}</option>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t</div>
\t</div>

\t{% endblock %}", "welcome/form_company.html.twig", "/var/www/arca_test/application/views/welcome/form_company.html.twig");
    }
}
