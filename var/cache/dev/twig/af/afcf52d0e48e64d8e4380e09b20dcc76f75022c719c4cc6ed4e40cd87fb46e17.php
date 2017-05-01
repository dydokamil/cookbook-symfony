<?php

/* base.html.twig */
class __TwigTemplate_6f05d78eba1f6eca400f9419ad3a555b4e96748c7173ebf17f6bb62d7fa1c24e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e80377c3bfb04bb7e9798568122632488b7aa8867a0b002a77b4ef3a32492594 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e80377c3bfb04bb7e9798568122632488b7aa8867a0b002a77b4ef3a32492594->enter($__internal_e80377c3bfb04bb7e9798568122632488b7aa8867a0b002a77b4ef3a32492594_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_56ede751d3a51ff5510f3e771860fb14ed20dc7e8e33e3d2fa88daed0f94954d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56ede751d3a51ff5510f3e771860fb14ed20dc7e8e33e3d2fa88daed0f94954d->enter($__internal_56ede751d3a51ff5510f3e771860fb14ed20dc7e8e33e3d2fa88daed0f94954d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "            <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendor/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    </head>

    <body>
        <nav class=\"navbar navbar-default\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"#\">Ksiązka kucharska</a>
                </div>
                <div id=\"navbar\" class=\"navbar-collapse collapse\">
                    <ul class=\"nav navbar-nav\">
                        <li><a href=\"/\">Strona główna</a></li>
                        <li><a href=\"/recipe\">Przepisy</a></li>
                        <li><a href=\"/recipestep\">Kroki przepisów</a></li>
                        <li><a href=\"/ingredient\">Składniki</a></li>
                        <li><a href=\"/ingredienttype\">Typy składników</a></li>
                        <li><a href=\"/ingredientstepjoin\">Join</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>
        <div class=\"container\">
            ";
        // line 36
        $this->displayBlock('body', $context, $blocks);
        // line 38
        echo "        </div>
        ";
        // line 39
        $this->displayBlock('javascripts', $context, $blocks);
        // line 40
        echo "    </body>
</html>
";
        
        $__internal_e80377c3bfb04bb7e9798568122632488b7aa8867a0b002a77b4ef3a32492594->leave($__internal_e80377c3bfb04bb7e9798568122632488b7aa8867a0b002a77b4ef3a32492594_prof);

        
        $__internal_56ede751d3a51ff5510f3e771860fb14ed20dc7e8e33e3d2fa88daed0f94954d->leave($__internal_56ede751d3a51ff5510f3e771860fb14ed20dc7e8e33e3d2fa88daed0f94954d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e55ad4bd388db575fc994b72d3fc930b25844f2517266cee95b52ca5e3ef4714 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e55ad4bd388db575fc994b72d3fc930b25844f2517266cee95b52ca5e3ef4714->enter($__internal_e55ad4bd388db575fc994b72d3fc930b25844f2517266cee95b52ca5e3ef4714_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7abe6843599bc32c8451fb2481de4bfeafd495da802f96f91554b5d01795a369 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7abe6843599bc32c8451fb2481de4bfeafd495da802f96f91554b5d01795a369->enter($__internal_7abe6843599bc32c8451fb2481de4bfeafd495da802f96f91554b5d01795a369_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_7abe6843599bc32c8451fb2481de4bfeafd495da802f96f91554b5d01795a369->leave($__internal_7abe6843599bc32c8451fb2481de4bfeafd495da802f96f91554b5d01795a369_prof);

        
        $__internal_e55ad4bd388db575fc994b72d3fc930b25844f2517266cee95b52ca5e3ef4714->leave($__internal_e55ad4bd388db575fc994b72d3fc930b25844f2517266cee95b52ca5e3ef4714_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_28f25f4bd782200cbddf720e4edf7924b207a18f1afe3baa5b29216c55aef57e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28f25f4bd782200cbddf720e4edf7924b207a18f1afe3baa5b29216c55aef57e->enter($__internal_28f25f4bd782200cbddf720e4edf7924b207a18f1afe3baa5b29216c55aef57e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_7823ad0fecf2422d6d1182af96b9047c35f17f37f20671132b1bf897e5104faf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7823ad0fecf2422d6d1182af96b9047c35f17f37f20671132b1bf897e5104faf->enter($__internal_7823ad0fecf2422d6d1182af96b9047c35f17f37f20671132b1bf897e5104faf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_7823ad0fecf2422d6d1182af96b9047c35f17f37f20671132b1bf897e5104faf->leave($__internal_7823ad0fecf2422d6d1182af96b9047c35f17f37f20671132b1bf897e5104faf_prof);

        
        $__internal_28f25f4bd782200cbddf720e4edf7924b207a18f1afe3baa5b29216c55aef57e->leave($__internal_28f25f4bd782200cbddf720e4edf7924b207a18f1afe3baa5b29216c55aef57e_prof);

    }

    // line 36
    public function block_body($context, array $blocks = array())
    {
        $__internal_63b76c78fa46f5dc8a573300e642d97703b09836bba53d57fd216f4bb5656020 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63b76c78fa46f5dc8a573300e642d97703b09836bba53d57fd216f4bb5656020->enter($__internal_63b76c78fa46f5dc8a573300e642d97703b09836bba53d57fd216f4bb5656020_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_639e8e59786921f8e116e729e2f2a87a16716912f12860ff95aa5e107840b3ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_639e8e59786921f8e116e729e2f2a87a16716912f12860ff95aa5e107840b3ec->enter($__internal_639e8e59786921f8e116e729e2f2a87a16716912f12860ff95aa5e107840b3ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 37
        echo "            ";
        
        $__internal_639e8e59786921f8e116e729e2f2a87a16716912f12860ff95aa5e107840b3ec->leave($__internal_639e8e59786921f8e116e729e2f2a87a16716912f12860ff95aa5e107840b3ec_prof);

        
        $__internal_63b76c78fa46f5dc8a573300e642d97703b09836bba53d57fd216f4bb5656020->leave($__internal_63b76c78fa46f5dc8a573300e642d97703b09836bba53d57fd216f4bb5656020_prof);

    }

    // line 39
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_94a05a96ab528f4fd45b98e5a248ef1e469a076f08538ff85c4f500c3f7c1dfa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94a05a96ab528f4fd45b98e5a248ef1e469a076f08538ff85c4f500c3f7c1dfa->enter($__internal_94a05a96ab528f4fd45b98e5a248ef1e469a076f08538ff85c4f500c3f7c1dfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_a8d222181fed8f04a9c8dcaf05cf0246d6a0715b937d981dad6aa8bb76efc2ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8d222181fed8f04a9c8dcaf05cf0246d6a0715b937d981dad6aa8bb76efc2ec->enter($__internal_a8d222181fed8f04a9c8dcaf05cf0246d6a0715b937d981dad6aa8bb76efc2ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_a8d222181fed8f04a9c8dcaf05cf0246d6a0715b937d981dad6aa8bb76efc2ec->leave($__internal_a8d222181fed8f04a9c8dcaf05cf0246d6a0715b937d981dad6aa8bb76efc2ec_prof);

        
        $__internal_94a05a96ab528f4fd45b98e5a248ef1e469a076f08538ff85c4f500c3f7c1dfa->leave($__internal_94a05a96ab528f4fd45b98e5a248ef1e469a076f08538ff85c4f500c3f7c1dfa_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 39,  140 => 37,  131 => 36,  114 => 6,  96 => 5,  84 => 40,  82 => 39,  79 => 38,  77 => 36,  46 => 8,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
            <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
            <link rel=\"stylesheet\" href=\"{{ asset('assets/vendor/bootstrap/dist/css/bootstrap.min.css') }}\">
    </head>

    <body>
        <nav class=\"navbar navbar-default\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"#\">Ksiązka kucharska</a>
                </div>
                <div id=\"navbar\" class=\"navbar-collapse collapse\">
                    <ul class=\"nav navbar-nav\">
                        <li><a href=\"/\">Strona główna</a></li>
                        <li><a href=\"/recipe\">Przepisy</a></li>
                        <li><a href=\"/recipestep\">Kroki przepisów</a></li>
                        <li><a href=\"/ingredient\">Składniki</a></li>
                        <li><a href=\"/ingredienttype\">Typy składników</a></li>
                        <li><a href=\"/ingredientstepjoin\">Join</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>
        <div class=\"container\">
            {% block body %}
            {% endblock %}
        </div>
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/home/kamil/symfony_projects/cookbook-symfony/app/Resources/views/base.html.twig");
    }
}
