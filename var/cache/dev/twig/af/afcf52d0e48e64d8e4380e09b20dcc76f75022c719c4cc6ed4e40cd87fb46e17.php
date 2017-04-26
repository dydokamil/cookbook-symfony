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
        $__internal_ba51711088f150413204f55f1d2f4372552674c35dff25d5afad63daa1d3f74a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba51711088f150413204f55f1d2f4372552674c35dff25d5afad63daa1d3f74a->enter($__internal_ba51711088f150413204f55f1d2f4372552674c35dff25d5afad63daa1d3f74a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_ea023da4f8086fdc2c692fcd2649d862eae8502ddea146584610fc3b031ea7c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea023da4f8086fdc2c692fcd2649d862eae8502ddea146584610fc3b031ea7c8->enter($__internal_ea023da4f8086fdc2c692fcd2649d862eae8502ddea146584610fc3b031ea7c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
                        <li><a href=\"/\">Home</a></li>
                        <li><a href=\"/recipe\">Przepisy</a></li>
                        <li><a href=\"/recipestep\">Kroki przepisów</a></li>
                        <li><a href=\"/ingredient\">Składniki</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>
        <div class=\"container\">
            ";
        // line 34
        $this->displayBlock('body', $context, $blocks);
        // line 36
        echo "        </div>
        ";
        // line 37
        $this->displayBlock('javascripts', $context, $blocks);
        // line 38
        echo "    </body>
</html>
";
        
        $__internal_ba51711088f150413204f55f1d2f4372552674c35dff25d5afad63daa1d3f74a->leave($__internal_ba51711088f150413204f55f1d2f4372552674c35dff25d5afad63daa1d3f74a_prof);

        
        $__internal_ea023da4f8086fdc2c692fcd2649d862eae8502ddea146584610fc3b031ea7c8->leave($__internal_ea023da4f8086fdc2c692fcd2649d862eae8502ddea146584610fc3b031ea7c8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_82ac588250ed66d541b242306af264bfa88f471949805038185f6d8896747cd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82ac588250ed66d541b242306af264bfa88f471949805038185f6d8896747cd3->enter($__internal_82ac588250ed66d541b242306af264bfa88f471949805038185f6d8896747cd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_eece09809ee54335ebec09af46f049d2acfb754e02183ffb7123e0a2d187f6a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eece09809ee54335ebec09af46f049d2acfb754e02183ffb7123e0a2d187f6a8->enter($__internal_eece09809ee54335ebec09af46f049d2acfb754e02183ffb7123e0a2d187f6a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_eece09809ee54335ebec09af46f049d2acfb754e02183ffb7123e0a2d187f6a8->leave($__internal_eece09809ee54335ebec09af46f049d2acfb754e02183ffb7123e0a2d187f6a8_prof);

        
        $__internal_82ac588250ed66d541b242306af264bfa88f471949805038185f6d8896747cd3->leave($__internal_82ac588250ed66d541b242306af264bfa88f471949805038185f6d8896747cd3_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7986e880a349991fc93bc49fe7958742896fd205151064a08d3ac9c482c7d763 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7986e880a349991fc93bc49fe7958742896fd205151064a08d3ac9c482c7d763->enter($__internal_7986e880a349991fc93bc49fe7958742896fd205151064a08d3ac9c482c7d763_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_d19fea7d379c053314c2413599abe27219d2263eec183f578fcdaf8e5f03f238 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d19fea7d379c053314c2413599abe27219d2263eec183f578fcdaf8e5f03f238->enter($__internal_d19fea7d379c053314c2413599abe27219d2263eec183f578fcdaf8e5f03f238_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_d19fea7d379c053314c2413599abe27219d2263eec183f578fcdaf8e5f03f238->leave($__internal_d19fea7d379c053314c2413599abe27219d2263eec183f578fcdaf8e5f03f238_prof);

        
        $__internal_7986e880a349991fc93bc49fe7958742896fd205151064a08d3ac9c482c7d763->leave($__internal_7986e880a349991fc93bc49fe7958742896fd205151064a08d3ac9c482c7d763_prof);

    }

    // line 34
    public function block_body($context, array $blocks = array())
    {
        $__internal_2fb969ad7040bdafd2f7afe73581b9efbfe1c14fc567a6fa3cb49d79d263370d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fb969ad7040bdafd2f7afe73581b9efbfe1c14fc567a6fa3cb49d79d263370d->enter($__internal_2fb969ad7040bdafd2f7afe73581b9efbfe1c14fc567a6fa3cb49d79d263370d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_93dac77b2de23ef8d380aedbb7e895e458a38e33fe0452348f4d47841b0f7ace = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93dac77b2de23ef8d380aedbb7e895e458a38e33fe0452348f4d47841b0f7ace->enter($__internal_93dac77b2de23ef8d380aedbb7e895e458a38e33fe0452348f4d47841b0f7ace_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 35
        echo "            ";
        
        $__internal_93dac77b2de23ef8d380aedbb7e895e458a38e33fe0452348f4d47841b0f7ace->leave($__internal_93dac77b2de23ef8d380aedbb7e895e458a38e33fe0452348f4d47841b0f7ace_prof);

        
        $__internal_2fb969ad7040bdafd2f7afe73581b9efbfe1c14fc567a6fa3cb49d79d263370d->leave($__internal_2fb969ad7040bdafd2f7afe73581b9efbfe1c14fc567a6fa3cb49d79d263370d_prof);

    }

    // line 37
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_19d1630c0f21175842744578c66ae23ceeee720e51c8079a564e31b10a341801 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19d1630c0f21175842744578c66ae23ceeee720e51c8079a564e31b10a341801->enter($__internal_19d1630c0f21175842744578c66ae23ceeee720e51c8079a564e31b10a341801_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_363655ba12f62503581a6263e960588ada63fc4b1cddd6197b5640ce92311a3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_363655ba12f62503581a6263e960588ada63fc4b1cddd6197b5640ce92311a3f->enter($__internal_363655ba12f62503581a6263e960588ada63fc4b1cddd6197b5640ce92311a3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_363655ba12f62503581a6263e960588ada63fc4b1cddd6197b5640ce92311a3f->leave($__internal_363655ba12f62503581a6263e960588ada63fc4b1cddd6197b5640ce92311a3f_prof);

        
        $__internal_19d1630c0f21175842744578c66ae23ceeee720e51c8079a564e31b10a341801->leave($__internal_19d1630c0f21175842744578c66ae23ceeee720e51c8079a564e31b10a341801_prof);

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
        return array (  148 => 37,  138 => 35,  129 => 34,  112 => 6,  94 => 5,  82 => 38,  80 => 37,  77 => 36,  75 => 34,  46 => 8,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
                        <li><a href=\"/\">Home</a></li>
                        <li><a href=\"/recipe\">Przepisy</a></li>
                        <li><a href=\"/recipestep\">Kroki przepisów</a></li>
                        <li><a href=\"/ingredient\">Składniki</a></li>
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
