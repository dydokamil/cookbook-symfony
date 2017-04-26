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
        $__internal_f56d007f886f3de18ea103ced6cba0b79a65e1bca831faa81870c7945f911003 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f56d007f886f3de18ea103ced6cba0b79a65e1bca831faa81870c7945f911003->enter($__internal_f56d007f886f3de18ea103ced6cba0b79a65e1bca831faa81870c7945f911003_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_e68f9acd2e801bbaa6b00efbb497429f46ea816415aff6837f616c25a3c2ddfe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e68f9acd2e801bbaa6b00efbb497429f46ea816415aff6837f616c25a3c2ddfe->enter($__internal_e68f9acd2e801bbaa6b00efbb497429f46ea816415aff6837f616c25a3c2ddfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_f56d007f886f3de18ea103ced6cba0b79a65e1bca831faa81870c7945f911003->leave($__internal_f56d007f886f3de18ea103ced6cba0b79a65e1bca831faa81870c7945f911003_prof);

        
        $__internal_e68f9acd2e801bbaa6b00efbb497429f46ea816415aff6837f616c25a3c2ddfe->leave($__internal_e68f9acd2e801bbaa6b00efbb497429f46ea816415aff6837f616c25a3c2ddfe_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5a3d75d62af382eae8a60f756a456ea450835e41820085abcda90cda343fc471 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a3d75d62af382eae8a60f756a456ea450835e41820085abcda90cda343fc471->enter($__internal_5a3d75d62af382eae8a60f756a456ea450835e41820085abcda90cda343fc471_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c991ee9c23a17c8031f52fce0ae5b6ddf9d9a4b1fc9a7cb7790c68adcb055df9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c991ee9c23a17c8031f52fce0ae5b6ddf9d9a4b1fc9a7cb7790c68adcb055df9->enter($__internal_c991ee9c23a17c8031f52fce0ae5b6ddf9d9a4b1fc9a7cb7790c68adcb055df9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c991ee9c23a17c8031f52fce0ae5b6ddf9d9a4b1fc9a7cb7790c68adcb055df9->leave($__internal_c991ee9c23a17c8031f52fce0ae5b6ddf9d9a4b1fc9a7cb7790c68adcb055df9_prof);

        
        $__internal_5a3d75d62af382eae8a60f756a456ea450835e41820085abcda90cda343fc471->leave($__internal_5a3d75d62af382eae8a60f756a456ea450835e41820085abcda90cda343fc471_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_823852e091f28292e6e20877a5b6c56a012d581387174a0c99afb9921c6dc308 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_823852e091f28292e6e20877a5b6c56a012d581387174a0c99afb9921c6dc308->enter($__internal_823852e091f28292e6e20877a5b6c56a012d581387174a0c99afb9921c6dc308_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_aef8e7c07c79595e2ff85656bcc307b6b35a0cd5a5fba11483e149f2df1b0bb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aef8e7c07c79595e2ff85656bcc307b6b35a0cd5a5fba11483e149f2df1b0bb3->enter($__internal_aef8e7c07c79595e2ff85656bcc307b6b35a0cd5a5fba11483e149f2df1b0bb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_aef8e7c07c79595e2ff85656bcc307b6b35a0cd5a5fba11483e149f2df1b0bb3->leave($__internal_aef8e7c07c79595e2ff85656bcc307b6b35a0cd5a5fba11483e149f2df1b0bb3_prof);

        
        $__internal_823852e091f28292e6e20877a5b6c56a012d581387174a0c99afb9921c6dc308->leave($__internal_823852e091f28292e6e20877a5b6c56a012d581387174a0c99afb9921c6dc308_prof);

    }

    // line 34
    public function block_body($context, array $blocks = array())
    {
        $__internal_251d1148545fbeffdcfdaa0a7c4c23e40df51ef30bcfeb625757815bbabb142b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_251d1148545fbeffdcfdaa0a7c4c23e40df51ef30bcfeb625757815bbabb142b->enter($__internal_251d1148545fbeffdcfdaa0a7c4c23e40df51ef30bcfeb625757815bbabb142b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f01788e02af3a0df2c7b60acadca75d803253d0040dd3bee0cea5476cbc92047 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f01788e02af3a0df2c7b60acadca75d803253d0040dd3bee0cea5476cbc92047->enter($__internal_f01788e02af3a0df2c7b60acadca75d803253d0040dd3bee0cea5476cbc92047_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 35
        echo "            ";
        
        $__internal_f01788e02af3a0df2c7b60acadca75d803253d0040dd3bee0cea5476cbc92047->leave($__internal_f01788e02af3a0df2c7b60acadca75d803253d0040dd3bee0cea5476cbc92047_prof);

        
        $__internal_251d1148545fbeffdcfdaa0a7c4c23e40df51ef30bcfeb625757815bbabb142b->leave($__internal_251d1148545fbeffdcfdaa0a7c4c23e40df51ef30bcfeb625757815bbabb142b_prof);

    }

    // line 37
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_05a64657ad6a205eab87cfff1dafd4851fff39872c35d71a4fa481d8e2bf9469 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05a64657ad6a205eab87cfff1dafd4851fff39872c35d71a4fa481d8e2bf9469->enter($__internal_05a64657ad6a205eab87cfff1dafd4851fff39872c35d71a4fa481d8e2bf9469_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_bd678a92685d3d3b58b10983d4b6cc14090b044df54e720c504297fb54a86afa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd678a92685d3d3b58b10983d4b6cc14090b044df54e720c504297fb54a86afa->enter($__internal_bd678a92685d3d3b58b10983d4b6cc14090b044df54e720c504297fb54a86afa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_bd678a92685d3d3b58b10983d4b6cc14090b044df54e720c504297fb54a86afa->leave($__internal_bd678a92685d3d3b58b10983d4b6cc14090b044df54e720c504297fb54a86afa_prof);

        
        $__internal_05a64657ad6a205eab87cfff1dafd4851fff39872c35d71a4fa481d8e2bf9469->leave($__internal_05a64657ad6a205eab87cfff1dafd4851fff39872c35d71a4fa481d8e2bf9469_prof);

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
", "base.html.twig", "/home/kamil/Dokumenty/studia/cookbook/app/Resources/views/base.html.twig");
    }
}
