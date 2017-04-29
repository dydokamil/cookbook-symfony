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
        $__internal_061ae56d1c0eda96746e81131443be306a200632c7d2fb0648f68cac90d902f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_061ae56d1c0eda96746e81131443be306a200632c7d2fb0648f68cac90d902f6->enter($__internal_061ae56d1c0eda96746e81131443be306a200632c7d2fb0648f68cac90d902f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_834975877778940783456e20ec24dad8c866d433062d9abab6ea67b84a639717 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_834975877778940783456e20ec24dad8c866d433062d9abab6ea67b84a639717->enter($__internal_834975877778940783456e20ec24dad8c866d433062d9abab6ea67b84a639717_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_061ae56d1c0eda96746e81131443be306a200632c7d2fb0648f68cac90d902f6->leave($__internal_061ae56d1c0eda96746e81131443be306a200632c7d2fb0648f68cac90d902f6_prof);

        
        $__internal_834975877778940783456e20ec24dad8c866d433062d9abab6ea67b84a639717->leave($__internal_834975877778940783456e20ec24dad8c866d433062d9abab6ea67b84a639717_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_fdc5753d8aed43e3fbc7be72710c27b5c2858219f924d9d16d9acce9f1ca57fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdc5753d8aed43e3fbc7be72710c27b5c2858219f924d9d16d9acce9f1ca57fc->enter($__internal_fdc5753d8aed43e3fbc7be72710c27b5c2858219f924d9d16d9acce9f1ca57fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1be550f3b6405855ab90873efee6c9f29d034ba6ca7e8a4e654a5927d34c28d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1be550f3b6405855ab90873efee6c9f29d034ba6ca7e8a4e654a5927d34c28d4->enter($__internal_1be550f3b6405855ab90873efee6c9f29d034ba6ca7e8a4e654a5927d34c28d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_1be550f3b6405855ab90873efee6c9f29d034ba6ca7e8a4e654a5927d34c28d4->leave($__internal_1be550f3b6405855ab90873efee6c9f29d034ba6ca7e8a4e654a5927d34c28d4_prof);

        
        $__internal_fdc5753d8aed43e3fbc7be72710c27b5c2858219f924d9d16d9acce9f1ca57fc->leave($__internal_fdc5753d8aed43e3fbc7be72710c27b5c2858219f924d9d16d9acce9f1ca57fc_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d91d3c1cba6601932748d13aef9982a7fdca341eb7cb62e3190c7c8b41b85f0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d91d3c1cba6601932748d13aef9982a7fdca341eb7cb62e3190c7c8b41b85f0c->enter($__internal_d91d3c1cba6601932748d13aef9982a7fdca341eb7cb62e3190c7c8b41b85f0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_92778b662b6aba229ee904f2ce5d09fedbc5e7190389cab768212f888b8fd508 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92778b662b6aba229ee904f2ce5d09fedbc5e7190389cab768212f888b8fd508->enter($__internal_92778b662b6aba229ee904f2ce5d09fedbc5e7190389cab768212f888b8fd508_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_92778b662b6aba229ee904f2ce5d09fedbc5e7190389cab768212f888b8fd508->leave($__internal_92778b662b6aba229ee904f2ce5d09fedbc5e7190389cab768212f888b8fd508_prof);

        
        $__internal_d91d3c1cba6601932748d13aef9982a7fdca341eb7cb62e3190c7c8b41b85f0c->leave($__internal_d91d3c1cba6601932748d13aef9982a7fdca341eb7cb62e3190c7c8b41b85f0c_prof);

    }

    // line 36
    public function block_body($context, array $blocks = array())
    {
        $__internal_acecb739c6a95e6a58b3fe14bf33f42ce0f0fe71a9f62dd552fa666cbc0f374a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acecb739c6a95e6a58b3fe14bf33f42ce0f0fe71a9f62dd552fa666cbc0f374a->enter($__internal_acecb739c6a95e6a58b3fe14bf33f42ce0f0fe71a9f62dd552fa666cbc0f374a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cdc074ebff9ff76516a932167090a1829501bedf37be47a0900255fb9f42afa2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdc074ebff9ff76516a932167090a1829501bedf37be47a0900255fb9f42afa2->enter($__internal_cdc074ebff9ff76516a932167090a1829501bedf37be47a0900255fb9f42afa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 37
        echo "            ";
        
        $__internal_cdc074ebff9ff76516a932167090a1829501bedf37be47a0900255fb9f42afa2->leave($__internal_cdc074ebff9ff76516a932167090a1829501bedf37be47a0900255fb9f42afa2_prof);

        
        $__internal_acecb739c6a95e6a58b3fe14bf33f42ce0f0fe71a9f62dd552fa666cbc0f374a->leave($__internal_acecb739c6a95e6a58b3fe14bf33f42ce0f0fe71a9f62dd552fa666cbc0f374a_prof);

    }

    // line 39
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5b33901001ee2487cb3a4c9ae603c4c3c71d8d0c3fc70a966170432c647be1c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b33901001ee2487cb3a4c9ae603c4c3c71d8d0c3fc70a966170432c647be1c5->enter($__internal_5b33901001ee2487cb3a4c9ae603c4c3c71d8d0c3fc70a966170432c647be1c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_35a197e46f9e5699186d0c2ed7499b3af3e2d90669eabfe2649e18bf58c28145 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35a197e46f9e5699186d0c2ed7499b3af3e2d90669eabfe2649e18bf58c28145->enter($__internal_35a197e46f9e5699186d0c2ed7499b3af3e2d90669eabfe2649e18bf58c28145_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_35a197e46f9e5699186d0c2ed7499b3af3e2d90669eabfe2649e18bf58c28145->leave($__internal_35a197e46f9e5699186d0c2ed7499b3af3e2d90669eabfe2649e18bf58c28145_prof);

        
        $__internal_5b33901001ee2487cb3a4c9ae603c4c3c71d8d0c3fc70a966170432c647be1c5->leave($__internal_5b33901001ee2487cb3a4c9ae603c4c3c71d8d0c3fc70a966170432c647be1c5_prof);

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
