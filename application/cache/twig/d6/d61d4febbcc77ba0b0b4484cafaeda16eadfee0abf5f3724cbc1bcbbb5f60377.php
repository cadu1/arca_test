<?php

/* template/template.html.twig */
class __TwigTemplate_e061f84bfd3fa93ce7a62a5d413ef9357097845c7d7b5b1b9b6cbca50c5097e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
\t<meta charset=\"utf-8\">
\t<title>Business Finder</title>

\t<!-- Latest compiled and minified CSS -->
\t<link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/css/bootstrap.min.css\">

\t<!-- Optional theme -->
\t<link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/css/bootstrap-theme.min.css\">

\t<!-- Latest compiled and minified CSS -->
\t<link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/js/bootstrap-select/css/bootstrap-select.min.css\">
</head>

<body>
\t<div class=\"container\">
\t\t";
        // line 19
        $this->displayBlock('content', $context, $blocks);
        // line 22
        echo "\t</div>
</body>

<script src=\"";
        // line 25
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/js/jquery-3.2.1.min.js\"></script>

<!-- Latest compiled and minified JavaScript -->
<script src=\"";
        // line 28
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/js/bootstrap.min.js\"></script>

<!-- Latest compiled and minified JavaScript -->
<script src=\"";
        // line 31
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/js/bootstrap-select/js/bootstrap-select.min.js\"></script>

</html>";
    }

    // line 19
    public function block_content($context, array $blocks = array())
    {
        // line 20
        echo "\t\t\tconteúdo a ser inserido
\t\t";
    }

    public function getTemplateName()
    {
        return "template/template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 20,  75 => 19,  68 => 31,  62 => 28,  56 => 25,  51 => 22,  49 => 19,  41 => 14,  35 => 11,  29 => 8,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
\t<meta charset=\"utf-8\">
\t<title>Business Finder</title>

\t<!-- Latest compiled and minified CSS -->
\t<link rel=\"stylesheet\" href=\"{{base_url()}}assets/css/bootstrap.min.css\">

\t<!-- Optional theme -->
\t<link rel=\"stylesheet\" href=\"{{base_url()}}assets/css/bootstrap-theme.min.css\">

\t<!-- Latest compiled and minified CSS -->
\t<link rel=\"stylesheet\" href=\"{{base_url()}}assets/js/bootstrap-select/css/bootstrap-select.min.css\">
</head>

<body>
\t<div class=\"container\">
\t\t{% block content %}
\t\t\tconteúdo a ser inserido
\t\t{% endblock %}
\t</div>
</body>

<script src=\"{{base_url()}}assets/js/jquery-3.2.1.min.js\"></script>

<!-- Latest compiled and minified JavaScript -->
<script src=\"{{base_url()}}assets/js/bootstrap.min.js\"></script>

<!-- Latest compiled and minified JavaScript -->
<script src=\"{{base_url()}}assets/js/bootstrap-select/js/bootstrap-select.min.js\"></script>

</html>", "template/template.html.twig", "/var/www/arca_test/application/views/template/template.html.twig");
    }
}
