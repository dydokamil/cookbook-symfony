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
        $__internal_7edb880077f50f8fa04a68a02f8abbd4b28a44249330061695d221832712e450 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7edb880077f50f8fa04a68a02f8abbd4b28a44249330061695d221832712e450->enter($__internal_7edb880077f50f8fa04a68a02f8abbd4b28a44249330061695d221832712e450_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6443bc929eac99bbbf32da312e9d0e63bff209f7db9711fb3de39c440c41ff14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6443bc929eac99bbbf32da312e9d0e63bff209f7db9711fb3de39c440c41ff14->enter($__internal_6443bc929eac99bbbf32da312e9d0e63bff209f7db9711fb3de39c440c41ff14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
                        <li><a href=\"/recipestep\"><strike>Kroki przepisów</strike></a></li>
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
        
        $__internal_7edb880077f50f8fa04a68a02f8abbd4b28a44249330061695d221832712e450->leave($__internal_7edb880077f50f8fa04a68a02f8abbd4b28a44249330061695d221832712e450_prof);

        
        $__internal_6443bc929eac99bbbf32da312e9d0e63bff209f7db9711fb3de39c440c41ff14->leave($__internal_6443bc929eac99bbbf32da312e9d0e63bff209f7db9711fb3de39c440c41ff14_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3e38cc7bc30487f4b479785f883edec8ba7ad81213fdb734190ac2a9e888399f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e38cc7bc30487f4b479785f883edec8ba7ad81213fdb734190ac2a9e888399f->enter($__internal_3e38cc7bc30487f4b479785f883edec8ba7ad81213fdb734190ac2a9e888399f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4bafce99b6a70ae09110c4a586bdb2918c02df06fac067372754bbd3d72401e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bafce99b6a70ae09110c4a586bdb2918c02df06fac067372754bbd3d72401e7->enter($__internal_4bafce99b6a70ae09110c4a586bdb2918c02df06fac067372754bbd3d72401e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_4bafce99b6a70ae09110c4a586bdb2918c02df06fac067372754bbd3d72401e7->leave($__internal_4bafce99b6a70ae09110c4a586bdb2918c02df06fac067372754bbd3d72401e7_prof);

        
        $__internal_3e38cc7bc30487f4b479785f883edec8ba7ad81213fdb734190ac2a9e888399f->leave($__internal_3e38cc7bc30487f4b479785f883edec8ba7ad81213fdb734190ac2a9e888399f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3264117d0e11cb1cc3f79356099e1563a5674b20589ea7d87e5636de626b1287 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3264117d0e11cb1cc3f79356099e1563a5674b20589ea7d87e5636de626b1287->enter($__internal_3264117d0e11cb1cc3f79356099e1563a5674b20589ea7d87e5636de626b1287_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_a36f2394efc331143a94b125d82fb4c7c2eaa42906d7c23b91e6422fa3ef8fe3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a36f2394efc331143a94b125d82fb4c7c2eaa42906d7c23b91e6422fa3ef8fe3->enter($__internal_a36f2394efc331143a94b125d82fb4c7c2eaa42906d7c23b91e6422fa3ef8fe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a36f2394efc331143a94b125d82fb4c7c2eaa42906d7c23b91e6422fa3ef8fe3->leave($__internal_a36f2394efc331143a94b125d82fb4c7c2eaa42906d7c23b91e6422fa3ef8fe3_prof);

        
        $__internal_3264117d0e11cb1cc3f79356099e1563a5674b20589ea7d87e5636de626b1287->leave($__internal_3264117d0e11cb1cc3f79356099e1563a5674b20589ea7d87e5636de626b1287_prof);

    }

    // line 36
    public function block_body($context, array $blocks = array())
    {
        $__internal_c0dab039afe59dcf88ac2c003c4bce6daac1aa1a3bf85afe5bdb83e92129082c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0dab039afe59dcf88ac2c003c4bce6daac1aa1a3bf85afe5bdb83e92129082c->enter($__internal_c0dab039afe59dcf88ac2c003c4bce6daac1aa1a3bf85afe5bdb83e92129082c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fea01190801c93dce2eed70e059ea2547beb62718b242eb22e205fea86e6dfbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fea01190801c93dce2eed70e059ea2547beb62718b242eb22e205fea86e6dfbd->enter($__internal_fea01190801c93dce2eed70e059ea2547beb62718b242eb22e205fea86e6dfbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 37
        echo "            ";
        
        $__internal_fea01190801c93dce2eed70e059ea2547beb62718b242eb22e205fea86e6dfbd->leave($__internal_fea01190801c93dce2eed70e059ea2547beb62718b242eb22e205fea86e6dfbd_prof);

        
        $__internal_c0dab039afe59dcf88ac2c003c4bce6daac1aa1a3bf85afe5bdb83e92129082c->leave($__internal_c0dab039afe59dcf88ac2c003c4bce6daac1aa1a3bf85afe5bdb83e92129082c_prof);

    }

    // line 39
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b0e9f758dc780ea8b6eb03ce8efd12a8c17a67b9055bda8c257cf083e0810cb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0e9f758dc780ea8b6eb03ce8efd12a8c17a67b9055bda8c257cf083e0810cb1->enter($__internal_b0e9f758dc780ea8b6eb03ce8efd12a8c17a67b9055bda8c257cf083e0810cb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_cfc93f238593725b6205f01c678d399272bcdc4e3794a1f152e8170b906dde77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfc93f238593725b6205f01c678d399272bcdc4e3794a1f152e8170b906dde77->enter($__internal_cfc93f238593725b6205f01c678d399272bcdc4e3794a1f152e8170b906dde77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_cfc93f238593725b6205f01c678d399272bcdc4e3794a1f152e8170b906dde77->leave($__internal_cfc93f238593725b6205f01c678d399272bcdc4e3794a1f152e8170b906dde77_prof);

        
        $__internal_b0e9f758dc780ea8b6eb03ce8efd12a8c17a67b9055bda8c257cf083e0810cb1->leave($__internal_b0e9f758dc780ea8b6eb03ce8efd12a8c17a67b9055bda8c257cf083e0810cb1_prof);

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
                        <li><a href=\"/recipestep\"><strike>Kroki przepisów</strike></a></li>
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
