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
        $__internal_c38296be4c86e771b19d3aa59aaf5dd5955d41acdc8a652f6a4728f048469f69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c38296be4c86e771b19d3aa59aaf5dd5955d41acdc8a652f6a4728f048469f69->enter($__internal_c38296be4c86e771b19d3aa59aaf5dd5955d41acdc8a652f6a4728f048469f69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_22b07e2ed9338f56f8dd39b3155f15fe20395c23a6cdc89b7c73c021e25b2b9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22b07e2ed9338f56f8dd39b3155f15fe20395c23a6cdc89b7c73c021e25b2b9d->enter($__internal_22b07e2ed9338f56f8dd39b3155f15fe20395c23a6cdc89b7c73c021e25b2b9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_c38296be4c86e771b19d3aa59aaf5dd5955d41acdc8a652f6a4728f048469f69->leave($__internal_c38296be4c86e771b19d3aa59aaf5dd5955d41acdc8a652f6a4728f048469f69_prof);

        
        $__internal_22b07e2ed9338f56f8dd39b3155f15fe20395c23a6cdc89b7c73c021e25b2b9d->leave($__internal_22b07e2ed9338f56f8dd39b3155f15fe20395c23a6cdc89b7c73c021e25b2b9d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e23582f714ddc9e7246449a67af2a62e418646d3b95a7ad2e2ccddd6aae17a2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e23582f714ddc9e7246449a67af2a62e418646d3b95a7ad2e2ccddd6aae17a2b->enter($__internal_e23582f714ddc9e7246449a67af2a62e418646d3b95a7ad2e2ccddd6aae17a2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ec57a1e83c77fdc6af1a097f69613f48370babfc5ea10572071d1f0085cdaa96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec57a1e83c77fdc6af1a097f69613f48370babfc5ea10572071d1f0085cdaa96->enter($__internal_ec57a1e83c77fdc6af1a097f69613f48370babfc5ea10572071d1f0085cdaa96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_ec57a1e83c77fdc6af1a097f69613f48370babfc5ea10572071d1f0085cdaa96->leave($__internal_ec57a1e83c77fdc6af1a097f69613f48370babfc5ea10572071d1f0085cdaa96_prof);

        
        $__internal_e23582f714ddc9e7246449a67af2a62e418646d3b95a7ad2e2ccddd6aae17a2b->leave($__internal_e23582f714ddc9e7246449a67af2a62e418646d3b95a7ad2e2ccddd6aae17a2b_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_07173dbf475fe13fa285201880c2be104e1bbb93cbfc7af4db8f0f4437448e64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07173dbf475fe13fa285201880c2be104e1bbb93cbfc7af4db8f0f4437448e64->enter($__internal_07173dbf475fe13fa285201880c2be104e1bbb93cbfc7af4db8f0f4437448e64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_848e6896fbd5be4b8c7a55ad1c6f083b765a95d62e4e228039777b3be6fb4592 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_848e6896fbd5be4b8c7a55ad1c6f083b765a95d62e4e228039777b3be6fb4592->enter($__internal_848e6896fbd5be4b8c7a55ad1c6f083b765a95d62e4e228039777b3be6fb4592_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_848e6896fbd5be4b8c7a55ad1c6f083b765a95d62e4e228039777b3be6fb4592->leave($__internal_848e6896fbd5be4b8c7a55ad1c6f083b765a95d62e4e228039777b3be6fb4592_prof);

        
        $__internal_07173dbf475fe13fa285201880c2be104e1bbb93cbfc7af4db8f0f4437448e64->leave($__internal_07173dbf475fe13fa285201880c2be104e1bbb93cbfc7af4db8f0f4437448e64_prof);

    }

    // line 36
    public function block_body($context, array $blocks = array())
    {
        $__internal_f7acc5346e462b87b21b386f9c6ff0e64295030139c217e2df8a52024c54afbb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7acc5346e462b87b21b386f9c6ff0e64295030139c217e2df8a52024c54afbb->enter($__internal_f7acc5346e462b87b21b386f9c6ff0e64295030139c217e2df8a52024c54afbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_881ff83fc9a06c1aacb97db9181226fb4eba168450b03ea08ab52c050a41aa21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_881ff83fc9a06c1aacb97db9181226fb4eba168450b03ea08ab52c050a41aa21->enter($__internal_881ff83fc9a06c1aacb97db9181226fb4eba168450b03ea08ab52c050a41aa21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 37
        echo "            ";
        
        $__internal_881ff83fc9a06c1aacb97db9181226fb4eba168450b03ea08ab52c050a41aa21->leave($__internal_881ff83fc9a06c1aacb97db9181226fb4eba168450b03ea08ab52c050a41aa21_prof);

        
        $__internal_f7acc5346e462b87b21b386f9c6ff0e64295030139c217e2df8a52024c54afbb->leave($__internal_f7acc5346e462b87b21b386f9c6ff0e64295030139c217e2df8a52024c54afbb_prof);

    }

    // line 39
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2252dd965144f203a46b2b4d2281bb120a2999133673b99b8f9a58769bb94e61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2252dd965144f203a46b2b4d2281bb120a2999133673b99b8f9a58769bb94e61->enter($__internal_2252dd965144f203a46b2b4d2281bb120a2999133673b99b8f9a58769bb94e61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_5f5e34200c6ec0e8bd8988e0f95e66c4bcd5dd1a3aa6af76a730f60b7f341ee6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f5e34200c6ec0e8bd8988e0f95e66c4bcd5dd1a3aa6af76a730f60b7f341ee6->enter($__internal_5f5e34200c6ec0e8bd8988e0f95e66c4bcd5dd1a3aa6af76a730f60b7f341ee6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_5f5e34200c6ec0e8bd8988e0f95e66c4bcd5dd1a3aa6af76a730f60b7f341ee6->leave($__internal_5f5e34200c6ec0e8bd8988e0f95e66c4bcd5dd1a3aa6af76a730f60b7f341ee6_prof);

        
        $__internal_2252dd965144f203a46b2b4d2281bb120a2999133673b99b8f9a58769bb94e61->leave($__internal_2252dd965144f203a46b2b4d2281bb120a2999133673b99b8f9a58769bb94e61_prof);

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
", "base.html.twig", "/home/kamil/Dokumenty/studia/cookbook/app/Resources/views/base.html.twig");
    }
}
