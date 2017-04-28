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
        $__internal_fb0e516ab604cf9290cb0c2d56897ec29f36d86e19c91d0b148b8c36a1c34b7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb0e516ab604cf9290cb0c2d56897ec29f36d86e19c91d0b148b8c36a1c34b7c->enter($__internal_fb0e516ab604cf9290cb0c2d56897ec29f36d86e19c91d0b148b8c36a1c34b7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_348ab32119d94118e4d9ffbf21fb6beef9039fafe8f3f547b7a57919c6ccd5ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_348ab32119d94118e4d9ffbf21fb6beef9039fafe8f3f547b7a57919c6ccd5ed->enter($__internal_348ab32119d94118e4d9ffbf21fb6beef9039fafe8f3f547b7a57919c6ccd5ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_fb0e516ab604cf9290cb0c2d56897ec29f36d86e19c91d0b148b8c36a1c34b7c->leave($__internal_fb0e516ab604cf9290cb0c2d56897ec29f36d86e19c91d0b148b8c36a1c34b7c_prof);

        
        $__internal_348ab32119d94118e4d9ffbf21fb6beef9039fafe8f3f547b7a57919c6ccd5ed->leave($__internal_348ab32119d94118e4d9ffbf21fb6beef9039fafe8f3f547b7a57919c6ccd5ed_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b778061d2d3eaf2580071a41f73adce730d7a4a2b26d137853c4f66620bfd28c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b778061d2d3eaf2580071a41f73adce730d7a4a2b26d137853c4f66620bfd28c->enter($__internal_b778061d2d3eaf2580071a41f73adce730d7a4a2b26d137853c4f66620bfd28c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_86b4908f2281824c43402e5d366c42ea0ca95cdd442c7f3725551cbaa92f0c18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86b4908f2281824c43402e5d366c42ea0ca95cdd442c7f3725551cbaa92f0c18->enter($__internal_86b4908f2281824c43402e5d366c42ea0ca95cdd442c7f3725551cbaa92f0c18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_86b4908f2281824c43402e5d366c42ea0ca95cdd442c7f3725551cbaa92f0c18->leave($__internal_86b4908f2281824c43402e5d366c42ea0ca95cdd442c7f3725551cbaa92f0c18_prof);

        
        $__internal_b778061d2d3eaf2580071a41f73adce730d7a4a2b26d137853c4f66620bfd28c->leave($__internal_b778061d2d3eaf2580071a41f73adce730d7a4a2b26d137853c4f66620bfd28c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c5d01cfdd31a2e245ef8dc8e5db762670a310253d4bb16251b42facb5262756f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5d01cfdd31a2e245ef8dc8e5db762670a310253d4bb16251b42facb5262756f->enter($__internal_c5d01cfdd31a2e245ef8dc8e5db762670a310253d4bb16251b42facb5262756f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_62b01410f919e2ed7e5a070797f1a601a723d073102065588df1b8da0c17cd17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62b01410f919e2ed7e5a070797f1a601a723d073102065588df1b8da0c17cd17->enter($__internal_62b01410f919e2ed7e5a070797f1a601a723d073102065588df1b8da0c17cd17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_62b01410f919e2ed7e5a070797f1a601a723d073102065588df1b8da0c17cd17->leave($__internal_62b01410f919e2ed7e5a070797f1a601a723d073102065588df1b8da0c17cd17_prof);

        
        $__internal_c5d01cfdd31a2e245ef8dc8e5db762670a310253d4bb16251b42facb5262756f->leave($__internal_c5d01cfdd31a2e245ef8dc8e5db762670a310253d4bb16251b42facb5262756f_prof);

    }

    // line 34
    public function block_body($context, array $blocks = array())
    {
        $__internal_edd020392c497089d4846a09095e8639a7ac8c65d1c9f46d2edf7f62889aba5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edd020392c497089d4846a09095e8639a7ac8c65d1c9f46d2edf7f62889aba5a->enter($__internal_edd020392c497089d4846a09095e8639a7ac8c65d1c9f46d2edf7f62889aba5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f4442a34620025b9c8a89321cccdf1fb1aef5a71834db4703c2a9ec199e0d0a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4442a34620025b9c8a89321cccdf1fb1aef5a71834db4703c2a9ec199e0d0a9->enter($__internal_f4442a34620025b9c8a89321cccdf1fb1aef5a71834db4703c2a9ec199e0d0a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 35
        echo "            ";
        
        $__internal_f4442a34620025b9c8a89321cccdf1fb1aef5a71834db4703c2a9ec199e0d0a9->leave($__internal_f4442a34620025b9c8a89321cccdf1fb1aef5a71834db4703c2a9ec199e0d0a9_prof);

        
        $__internal_edd020392c497089d4846a09095e8639a7ac8c65d1c9f46d2edf7f62889aba5a->leave($__internal_edd020392c497089d4846a09095e8639a7ac8c65d1c9f46d2edf7f62889aba5a_prof);

    }

    // line 37
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5b3c7db02411c1b55fd4c9f38ea23bff98fbbe03dbb384dd22d7f542a8fe64ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b3c7db02411c1b55fd4c9f38ea23bff98fbbe03dbb384dd22d7f542a8fe64ff->enter($__internal_5b3c7db02411c1b55fd4c9f38ea23bff98fbbe03dbb384dd22d7f542a8fe64ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_9d2efc608ec6007441df810a7f72208e0ee5991bc9b3de2eebc16a01e233ad28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d2efc608ec6007441df810a7f72208e0ee5991bc9b3de2eebc16a01e233ad28->enter($__internal_9d2efc608ec6007441df810a7f72208e0ee5991bc9b3de2eebc16a01e233ad28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_9d2efc608ec6007441df810a7f72208e0ee5991bc9b3de2eebc16a01e233ad28->leave($__internal_9d2efc608ec6007441df810a7f72208e0ee5991bc9b3de2eebc16a01e233ad28_prof);

        
        $__internal_5b3c7db02411c1b55fd4c9f38ea23bff98fbbe03dbb384dd22d7f542a8fe64ff->leave($__internal_5b3c7db02411c1b55fd4c9f38ea23bff98fbbe03dbb384dd22d7f542a8fe64ff_prof);

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
                        <li><a href=\"/\">Strona główna</a></li>
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
