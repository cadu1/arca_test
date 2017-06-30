<?php

/* welcome/index.html.twig */
class __TwigTemplate_cad81e40db1f4cb703184af6290a2f477e74ee826831b145a9c22848cae3962d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("template/template.html.twig", "welcome/index.html.twig", 1);
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
\t\t\t<h1 class=\"offset1\">Business Finder</h1>
\t\t\t\t";
        // line 9
        echo form_open("welcome/results");
        echo "
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"key_word\" placeholder=\"What are you looking for?\">
\t\t\t\t</div>
\t\t\t\t<button type=\"submit\" class=\"btn btn-default\">Search</button>
\t\t\t\t";
        // line 14
        echo form_close();
        echo "
\t\t</div>
\t</div>
\t";
    }

    public function getTemplateName()
    {
        return "welcome/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 14,  40 => 9,  31 => 4,  28 => 3,  11 => 1,);
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
\t\t\t<h1 class=\"offset1\">Business Finder</h1>
\t\t\t\t{{ form_open('welcome/results') }}
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"key_word\" placeholder=\"What are you looking for?\">
\t\t\t\t</div>
\t\t\t\t<button type=\"submit\" class=\"btn btn-default\">Search</button>
\t\t\t\t{{ form_close() }}
\t\t</div>
\t</div>
\t{% endblock %}", "welcome/index.html.twig", "/var/www/arca_test/application/views/welcome/index.html.twig");
    }
}
