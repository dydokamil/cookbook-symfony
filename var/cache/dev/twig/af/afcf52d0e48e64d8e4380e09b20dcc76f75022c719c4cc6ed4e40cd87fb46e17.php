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
        $__internal_cabfac37ac3edcc4ed8cef28709d7c763ed8ecec6d5e83a3f2d35239032919d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cabfac37ac3edcc4ed8cef28709d7c763ed8ecec6d5e83a3f2d35239032919d8->enter($__internal_cabfac37ac3edcc4ed8cef28709d7c763ed8ecec6d5e83a3f2d35239032919d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_f027a3296d357fbd69045450d21b247d7e81c321c566ae33104da65aca90a850 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f027a3296d357fbd69045450d21b247d7e81c321c566ae33104da65aca90a850->enter($__internal_f027a3296d357fbd69045450d21b247d7e81c321c566ae33104da65aca90a850_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 38
        $this->displayBlock('body', $context, $blocks);
        // line 40
        echo "        </div>
        ";
        // line 41
        $this->displayBlock('javascripts', $context, $blocks);
        // line 42
        echo "    </body>
</html>
";
        
        $__internal_cabfac37ac3edcc4ed8cef28709d7c763ed8ecec6d5e83a3f2d35239032919d8->leave($__internal_cabfac37ac3edcc4ed8cef28709d7c763ed8ecec6d5e83a3f2d35239032919d8_prof);

        
        $__internal_f027a3296d357fbd69045450d21b247d7e81c321c566ae33104da65aca90a850->leave($__internal_f027a3296d357fbd69045450d21b247d7e81c321c566ae33104da65aca90a850_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_44a5556d770165e4b0b4933d51701e31eafe9c69f32044305fabfc0f22182b08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44a5556d770165e4b0b4933d51701e31eafe9c69f32044305fabfc0f22182b08->enter($__internal_44a5556d770165e4b0b4933d51701e31eafe9c69f32044305fabfc0f22182b08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d8352fe44835a9bfed32bfaf5ced46c0e89c8d52f297d48aafb5d81208475bf6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8352fe44835a9bfed32bfaf5ced46c0e89c8d52f297d48aafb5d81208475bf6->enter($__internal_d8352fe44835a9bfed32bfaf5ced46c0e89c8d52f297d48aafb5d81208475bf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_d8352fe44835a9bfed32bfaf5ced46c0e89c8d52f297d48aafb5d81208475bf6->leave($__internal_d8352fe44835a9bfed32bfaf5ced46c0e89c8d52f297d48aafb5d81208475bf6_prof);

        
        $__internal_44a5556d770165e4b0b4933d51701e31eafe9c69f32044305fabfc0f22182b08->leave($__internal_44a5556d770165e4b0b4933d51701e31eafe9c69f32044305fabfc0f22182b08_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d12b4b4443b422f377be5a34c7c58698d13414ae92a4ed942ae26269a39c5c96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d12b4b4443b422f377be5a34c7c58698d13414ae92a4ed942ae26269a39c5c96->enter($__internal_d12b4b4443b422f377be5a34c7c58698d13414ae92a4ed942ae26269a39c5c96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_f693d0f50ed31a7904023ea25758e1748b51d3ebf1f20d3320ad569adab158a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f693d0f50ed31a7904023ea25758e1748b51d3ebf1f20d3320ad569adab158a9->enter($__internal_f693d0f50ed31a7904023ea25758e1748b51d3ebf1f20d3320ad569adab158a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_f693d0f50ed31a7904023ea25758e1748b51d3ebf1f20d3320ad569adab158a9->leave($__internal_f693d0f50ed31a7904023ea25758e1748b51d3ebf1f20d3320ad569adab158a9_prof);

        
        $__internal_d12b4b4443b422f377be5a34c7c58698d13414ae92a4ed942ae26269a39c5c96->leave($__internal_d12b4b4443b422f377be5a34c7c58698d13414ae92a4ed942ae26269a39c5c96_prof);

    }

    // line 38
    public function block_body($context, array $blocks = array())
    {
        $__internal_099ee26e14439ad4467ce54bbea68b673d560ea81e55e84eee5c84bd347c456b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_099ee26e14439ad4467ce54bbea68b673d560ea81e55e84eee5c84bd347c456b->enter($__internal_099ee26e14439ad4467ce54bbea68b673d560ea81e55e84eee5c84bd347c456b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8e6f487c28c066f01cce6878a9b3749d34627b5d270da2a380c77efa17dd7ea8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e6f487c28c066f01cce6878a9b3749d34627b5d270da2a380c77efa17dd7ea8->enter($__internal_8e6f487c28c066f01cce6878a9b3749d34627b5d270da2a380c77efa17dd7ea8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 39
        echo "            ";
        
        $__internal_8e6f487c28c066f01cce6878a9b3749d34627b5d270da2a380c77efa17dd7ea8->leave($__internal_8e6f487c28c066f01cce6878a9b3749d34627b5d270da2a380c77efa17dd7ea8_prof);

        
        $__internal_099ee26e14439ad4467ce54bbea68b673d560ea81e55e84eee5c84bd347c456b->leave($__internal_099ee26e14439ad4467ce54bbea68b673d560ea81e55e84eee5c84bd347c456b_prof);

    }

    // line 41
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4d4f2c5238dc6ccfec57918e7c7aa347cc75422a0084c69f61316b0b961c2f33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d4f2c5238dc6ccfec57918e7c7aa347cc75422a0084c69f61316b0b961c2f33->enter($__internal_4d4f2c5238dc6ccfec57918e7c7aa347cc75422a0084c69f61316b0b961c2f33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_c86647e2c9ae25ea5a33daeaf44a1d5c33b9669ed3d4766dcffdd07d0f1ed7cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c86647e2c9ae25ea5a33daeaf44a1d5c33b9669ed3d4766dcffdd07d0f1ed7cd->enter($__internal_c86647e2c9ae25ea5a33daeaf44a1d5c33b9669ed3d4766dcffdd07d0f1ed7cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c86647e2c9ae25ea5a33daeaf44a1d5c33b9669ed3d4766dcffdd07d0f1ed7cd->leave($__internal_c86647e2c9ae25ea5a33daeaf44a1d5c33b9669ed3d4766dcffdd07d0f1ed7cd_prof);

        
        $__internal_4d4f2c5238dc6ccfec57918e7c7aa347cc75422a0084c69f61316b0b961c2f33->leave($__internal_4d4f2c5238dc6ccfec57918e7c7aa347cc75422a0084c69f61316b0b961c2f33_prof);

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
        return array (  152 => 41,  142 => 39,  133 => 38,  116 => 6,  98 => 5,  86 => 42,  84 => 41,  81 => 40,  79 => 38,  46 => 8,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/home/kamil/symfony_projects/cookbook-symfony/app/Resources/views/base.html.twig");
    }
}
