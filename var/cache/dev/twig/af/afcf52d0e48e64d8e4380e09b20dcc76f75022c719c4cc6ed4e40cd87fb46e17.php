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
        $__internal_e8136b1b3e58bf8c0aea4efec157971a90dd10ad0046cb745747429ff58db7ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8136b1b3e58bf8c0aea4efec157971a90dd10ad0046cb745747429ff58db7ad->enter($__internal_e8136b1b3e58bf8c0aea4efec157971a90dd10ad0046cb745747429ff58db7ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_ef750998588df0fa50d2c05dc39705bd5325c8326fabd0ce42930d956a6cebec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef750998588df0fa50d2c05dc39705bd5325c8326fabd0ce42930d956a6cebec->enter($__internal_ef750998588df0fa50d2c05dc39705bd5325c8326fabd0ce42930d956a6cebec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        echo "
            <link rel=\"stylesheet\"
                  href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendor/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\">
            <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendor/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendor/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    </head>

    <body>
        <nav class=\"navbar navbar-default navbar-static-top\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\".navbar-collapse\" aria-expanded=\"false\" aria-controls=\"navbar\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"#\">Książka kucharska</a>
                </div>
                <div id=\"navbar\" class=\"navbar-collapse collapse\">
                    <ul class=\"nav navbar-nav\">
                        <li><a href=\"/\">Strona główna</a></li>
                        <li><a href=\"/recipe\">Przepisy</a></li>
                    </ul>
                    <ul class='nav navbar-nav navbar-right'>
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
        // line 43
        $this->displayBlock('body', $context, $blocks);
        // line 45
        echo "        </div>
        ";
        // line 46
        $this->displayBlock('javascripts', $context, $blocks);
        // line 47
        echo "    </body>
</html>
";
        
        $__internal_e8136b1b3e58bf8c0aea4efec157971a90dd10ad0046cb745747429ff58db7ad->leave($__internal_e8136b1b3e58bf8c0aea4efec157971a90dd10ad0046cb745747429ff58db7ad_prof);

        
        $__internal_ef750998588df0fa50d2c05dc39705bd5325c8326fabd0ce42930d956a6cebec->leave($__internal_ef750998588df0fa50d2c05dc39705bd5325c8326fabd0ce42930d956a6cebec_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6445abd4a9dabd2656ae0cf3974136dd32f1a01e8ae1b93b0a9bc9534bd8b012 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6445abd4a9dabd2656ae0cf3974136dd32f1a01e8ae1b93b0a9bc9534bd8b012->enter($__internal_6445abd4a9dabd2656ae0cf3974136dd32f1a01e8ae1b93b0a9bc9534bd8b012_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c6848eef19eae8ba3835cd9776f898340559a86b1fb1854422f6a3af8170db31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6848eef19eae8ba3835cd9776f898340559a86b1fb1854422f6a3af8170db31->enter($__internal_c6848eef19eae8ba3835cd9776f898340559a86b1fb1854422f6a3af8170db31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c6848eef19eae8ba3835cd9776f898340559a86b1fb1854422f6a3af8170db31->leave($__internal_c6848eef19eae8ba3835cd9776f898340559a86b1fb1854422f6a3af8170db31_prof);

        
        $__internal_6445abd4a9dabd2656ae0cf3974136dd32f1a01e8ae1b93b0a9bc9534bd8b012->leave($__internal_6445abd4a9dabd2656ae0cf3974136dd32f1a01e8ae1b93b0a9bc9534bd8b012_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_eedf29024fac7a444e198e76ebac6e51bff5dabd47f9808b33d3f6667eaff7a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eedf29024fac7a444e198e76ebac6e51bff5dabd47f9808b33d3f6667eaff7a7->enter($__internal_eedf29024fac7a444e198e76ebac6e51bff5dabd47f9808b33d3f6667eaff7a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_f6d3da32b5c34d7b9ec3fd6f38c3e621af8d1621cb58bd3a7c5b7366564c0217 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6d3da32b5c34d7b9ec3fd6f38c3e621af8d1621cb58bd3a7c5b7366564c0217->enter($__internal_f6d3da32b5c34d7b9ec3fd6f38c3e621af8d1621cb58bd3a7c5b7366564c0217_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_f6d3da32b5c34d7b9ec3fd6f38c3e621af8d1621cb58bd3a7c5b7366564c0217->leave($__internal_f6d3da32b5c34d7b9ec3fd6f38c3e621af8d1621cb58bd3a7c5b7366564c0217_prof);

        
        $__internal_eedf29024fac7a444e198e76ebac6e51bff5dabd47f9808b33d3f6667eaff7a7->leave($__internal_eedf29024fac7a444e198e76ebac6e51bff5dabd47f9808b33d3f6667eaff7a7_prof);

    }

    // line 43
    public function block_body($context, array $blocks = array())
    {
        $__internal_f646cb732471c48f92c47567e2cc4574cf59bab8e9ea2681182ac07fc3f1e3d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f646cb732471c48f92c47567e2cc4574cf59bab8e9ea2681182ac07fc3f1e3d2->enter($__internal_f646cb732471c48f92c47567e2cc4574cf59bab8e9ea2681182ac07fc3f1e3d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_918d66b6a37f82555bf2ae54496571cd6a86d2e6e0799b521e038b56e381a8d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_918d66b6a37f82555bf2ae54496571cd6a86d2e6e0799b521e038b56e381a8d4->enter($__internal_918d66b6a37f82555bf2ae54496571cd6a86d2e6e0799b521e038b56e381a8d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 44
        echo "            ";
        
        $__internal_918d66b6a37f82555bf2ae54496571cd6a86d2e6e0799b521e038b56e381a8d4->leave($__internal_918d66b6a37f82555bf2ae54496571cd6a86d2e6e0799b521e038b56e381a8d4_prof);

        
        $__internal_f646cb732471c48f92c47567e2cc4574cf59bab8e9ea2681182ac07fc3f1e3d2->leave($__internal_f646cb732471c48f92c47567e2cc4574cf59bab8e9ea2681182ac07fc3f1e3d2_prof);

    }

    // line 46
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8b93d4572cc22c5a1941889506d24d6ad91be05c1fa67ecd3a67416834535858 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b93d4572cc22c5a1941889506d24d6ad91be05c1fa67ecd3a67416834535858->enter($__internal_8b93d4572cc22c5a1941889506d24d6ad91be05c1fa67ecd3a67416834535858_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_579819e9551da1143f86f9b84cb10feef0b06964850f3df833e633ae67e88ea0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_579819e9551da1143f86f9b84cb10feef0b06964850f3df833e633ae67e88ea0->enter($__internal_579819e9551da1143f86f9b84cb10feef0b06964850f3df833e633ae67e88ea0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        echo " ";
        
        $__internal_579819e9551da1143f86f9b84cb10feef0b06964850f3df833e633ae67e88ea0->leave($__internal_579819e9551da1143f86f9b84cb10feef0b06964850f3df833e633ae67e88ea0_prof);

        
        $__internal_8b93d4572cc22c5a1941889506d24d6ad91be05c1fa67ecd3a67416834535858->leave($__internal_8b93d4572cc22c5a1941889506d24d6ad91be05c1fa67ecd3a67416834535858_prof);

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
        return array (  161 => 46,  151 => 44,  142 => 43,  125 => 6,  107 => 5,  95 => 47,  93 => 46,  90 => 45,  88 => 43,  53 => 11,  49 => 10,  45 => 9,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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

            <link rel=\"stylesheet\"
                  href=\"{{ asset('assets/vendor/bootstrap/dist/css/bootstrap.min.css') }}\">
            <script src=\"{{ asset('assets/vendor/jquery/dist/jquery.min.js')  }}\"></script>
            <script src=\"{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.min.js') }}\"></script>

            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    </head>

    <body>
        <nav class=\"navbar navbar-default navbar-static-top\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\".navbar-collapse\" aria-expanded=\"false\" aria-controls=\"navbar\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"#\">Książka kucharska</a>
                </div>
                <div id=\"navbar\" class=\"navbar-collapse collapse\">
                    <ul class=\"nav navbar-nav\">
                        <li><a href=\"/\">Strona główna</a></li>
                        <li><a href=\"/recipe\">Przepisy</a></li>
                    </ul>
                    <ul class='nav navbar-nav navbar-right'>
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
        {% block javascripts %} {% endblock %}
    </body>
</html>
", "base.html.twig", "/home/kamil/Dokumenty/studia/cookbook-symfony/app/Resources/views/base.html.twig");
    }
}
