<?php

/* admin/index.html.twig */
class __TwigTemplate_39885ba24d8333f9be25dcab5735c650d0bf6d0278e18f8a974f2e5fb7c43d53 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("template/template.html.twig", "admin/index.html.twig", 1);
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
\t\t<div class=\"col-md-4 col-md-offset-4\" align=\"center\">
\t\t\t<h1 class=\"offset1\">Administrative Area</h1>
\t\t\t\t";
        // line 9
        echo form_open("admin/login");
        echo "
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"username\" placeholder=\"Enter you e-mail\">
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<input type=\"password\" class=\"form-control\" name=\"password\" placeholder=\"Enter your password\">
\t\t\t\t</div>
\t\t\t\t<button type=\"submit\" class=\"btn btn-default\">Login</button>
\t\t\t\t";
        // line 17
        echo form_close();
        echo "
\t\t</div>
\t</div>
\t";
    }

    public function getTemplateName()
    {
        return "admin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 17,  40 => 9,  31 => 4,  28 => 3,  11 => 1,);
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
\t\t<div class=\"col-md-4 col-md-offset-4\" align=\"center\">
\t\t\t<h1 class=\"offset1\">Administrative Area</h1>
\t\t\t\t{{ form_open('admin/login') }}
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"username\" placeholder=\"Enter you e-mail\">
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<input type=\"password\" class=\"form-control\" name=\"password\" placeholder=\"Enter your password\">
\t\t\t\t</div>
\t\t\t\t<button type=\"submit\" class=\"btn btn-default\">Login</button>
\t\t\t\t{{ form_close() }}
\t\t</div>
\t</div>
\t{% endblock %}", "admin/index.html.twig", "/var/www/arca_test/application/views/admin/index.html.twig");
    }
}
