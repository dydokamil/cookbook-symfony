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
            'sidebar' => array($this, 'block_sidebar'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8126c1469148794b49228405a67cb51b45bf6776bcab1b3f709050577a290eba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8126c1469148794b49228405a67cb51b45bf6776bcab1b3f709050577a290eba->enter($__internal_8126c1469148794b49228405a67cb51b45bf6776bcab1b3f709050577a290eba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_03a9e85ba3fd582ffaed5be5a982dfb02e125fcda92b3123f6a219b1d6bd54b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03a9e85ba3fd582ffaed5be5a982dfb02e125fcda92b3123f6a219b1d6bd54b1->enter($__internal_03a9e85ba3fd582ffaed5be5a982dfb02e125fcda92b3123f6a219b1d6bd54b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
    </head>
    <body>
        <div id=\"sidebar\">
            ";
        // line 11
        $this->displayBlock('sidebar', $context, $blocks);
        // line 19
        echo "        </div>
        ";
        // line 20
        $this->displayBlock('body', $context, $blocks);
        // line 22
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 23
        echo "    </body>
</html>
";
        
        $__internal_8126c1469148794b49228405a67cb51b45bf6776bcab1b3f709050577a290eba->leave($__internal_8126c1469148794b49228405a67cb51b45bf6776bcab1b3f709050577a290eba_prof);

        
        $__internal_03a9e85ba3fd582ffaed5be5a982dfb02e125fcda92b3123f6a219b1d6bd54b1->leave($__internal_03a9e85ba3fd582ffaed5be5a982dfb02e125fcda92b3123f6a219b1d6bd54b1_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a8f8d751c6728e3b4edd0b752faaf08453e9415af004f0539f6385bded7cf556 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8f8d751c6728e3b4edd0b752faaf08453e9415af004f0539f6385bded7cf556->enter($__internal_a8f8d751c6728e3b4edd0b752faaf08453e9415af004f0539f6385bded7cf556_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_60ef071454b0301c495fdebaf28d8db11a7732aad4e69c92d81e5fd44996e332 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60ef071454b0301c495fdebaf28d8db11a7732aad4e69c92d81e5fd44996e332->enter($__internal_60ef071454b0301c495fdebaf28d8db11a7732aad4e69c92d81e5fd44996e332_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_60ef071454b0301c495fdebaf28d8db11a7732aad4e69c92d81e5fd44996e332->leave($__internal_60ef071454b0301c495fdebaf28d8db11a7732aad4e69c92d81e5fd44996e332_prof);

        
        $__internal_a8f8d751c6728e3b4edd0b752faaf08453e9415af004f0539f6385bded7cf556->leave($__internal_a8f8d751c6728e3b4edd0b752faaf08453e9415af004f0539f6385bded7cf556_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9d0742a1aaac418be9a69d8f3b1b05351389b627be7127efe0f44d36d081d27c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d0742a1aaac418be9a69d8f3b1b05351389b627be7127efe0f44d36d081d27c->enter($__internal_9d0742a1aaac418be9a69d8f3b1b05351389b627be7127efe0f44d36d081d27c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_032e1930e7ef3a45eddaac09d23cbc1b82a59c5842379de4bb6debd54d1abdaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_032e1930e7ef3a45eddaac09d23cbc1b82a59c5842379de4bb6debd54d1abdaa->enter($__internal_032e1930e7ef3a45eddaac09d23cbc1b82a59c5842379de4bb6debd54d1abdaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_032e1930e7ef3a45eddaac09d23cbc1b82a59c5842379de4bb6debd54d1abdaa->leave($__internal_032e1930e7ef3a45eddaac09d23cbc1b82a59c5842379de4bb6debd54d1abdaa_prof);

        
        $__internal_9d0742a1aaac418be9a69d8f3b1b05351389b627be7127efe0f44d36d081d27c->leave($__internal_9d0742a1aaac418be9a69d8f3b1b05351389b627be7127efe0f44d36d081d27c_prof);

    }

    // line 11
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_091bbf594cb30db7871be88dad484e71d79beb1206c12b2aa3d2176de18fc424 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_091bbf594cb30db7871be88dad484e71d79beb1206c12b2aa3d2176de18fc424->enter($__internal_091bbf594cb30db7871be88dad484e71d79beb1206c12b2aa3d2176de18fc424_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_8526b2e02aef359858180ce8dde0e01b8211fd0f23db85f4e23be3f143ccbc73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8526b2e02aef359858180ce8dde0e01b8211fd0f23db85f4e23be3f143ccbc73->enter($__internal_8526b2e02aef359858180ce8dde0e01b8211fd0f23db85f4e23be3f143ccbc73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 12
        echo "                <ul>
                    <li><a href=\"/\">Home</a></li>
                    <li><a href=\"/recipe\">Przepisy</a></li>
                    <li><a href=\"/recipestep\">Kroki przepisów</a></li>
                    <li><a href=\"/ingredient\">Składniki</a></li>
                </ul>
            ";
        
        $__internal_8526b2e02aef359858180ce8dde0e01b8211fd0f23db85f4e23be3f143ccbc73->leave($__internal_8526b2e02aef359858180ce8dde0e01b8211fd0f23db85f4e23be3f143ccbc73_prof);

        
        $__internal_091bbf594cb30db7871be88dad484e71d79beb1206c12b2aa3d2176de18fc424->leave($__internal_091bbf594cb30db7871be88dad484e71d79beb1206c12b2aa3d2176de18fc424_prof);

    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        $__internal_f6a3b5d31f774bb06566c94d6718421d1c03c7a8868a8d02aae7f5cd90f6faa9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6a3b5d31f774bb06566c94d6718421d1c03c7a8868a8d02aae7f5cd90f6faa9->enter($__internal_f6a3b5d31f774bb06566c94d6718421d1c03c7a8868a8d02aae7f5cd90f6faa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_56723c51bd44ac5b20093a15e2c0e1679484b19cbbd76038b4a5292ad0bc0c2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56723c51bd44ac5b20093a15e2c0e1679484b19cbbd76038b4a5292ad0bc0c2a->enter($__internal_56723c51bd44ac5b20093a15e2c0e1679484b19cbbd76038b4a5292ad0bc0c2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 21
        echo "        ";
        
        $__internal_56723c51bd44ac5b20093a15e2c0e1679484b19cbbd76038b4a5292ad0bc0c2a->leave($__internal_56723c51bd44ac5b20093a15e2c0e1679484b19cbbd76038b4a5292ad0bc0c2a_prof);

        
        $__internal_f6a3b5d31f774bb06566c94d6718421d1c03c7a8868a8d02aae7f5cd90f6faa9->leave($__internal_f6a3b5d31f774bb06566c94d6718421d1c03c7a8868a8d02aae7f5cd90f6faa9_prof);

    }

    // line 22
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b22bbadd0f0763137fa807bb48f21b62112bb7b2882601e394cf6b422f9a428d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b22bbadd0f0763137fa807bb48f21b62112bb7b2882601e394cf6b422f9a428d->enter($__internal_b22bbadd0f0763137fa807bb48f21b62112bb7b2882601e394cf6b422f9a428d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_295153bf1f0ab291c7e9bac2ebff4fa0a4a5510e72384235af6b793e07da4eae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_295153bf1f0ab291c7e9bac2ebff4fa0a4a5510e72384235af6b793e07da4eae->enter($__internal_295153bf1f0ab291c7e9bac2ebff4fa0a4a5510e72384235af6b793e07da4eae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_295153bf1f0ab291c7e9bac2ebff4fa0a4a5510e72384235af6b793e07da4eae->leave($__internal_295153bf1f0ab291c7e9bac2ebff4fa0a4a5510e72384235af6b793e07da4eae_prof);

        
        $__internal_b22bbadd0f0763137fa807bb48f21b62112bb7b2882601e394cf6b422f9a428d->leave($__internal_b22bbadd0f0763137fa807bb48f21b62112bb7b2882601e394cf6b422f9a428d_prof);

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
        return array (  151 => 22,  141 => 21,  132 => 20,  116 => 12,  107 => 11,  90 => 6,  72 => 5,  60 => 23,  57 => 22,  55 => 20,  52 => 19,  50 => 11,  42 => 7,  40 => 6,  36 => 5,  30 => 1,);
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
    </head>
    <body>
        <div id=\"sidebar\">
            {% block sidebar %}
                <ul>
                    <li><a href=\"/\">Home</a></li>
                    <li><a href=\"/recipe\">Przepisy</a></li>
                    <li><a href=\"/recipestep\">Kroki przepisów</a></li>
                    <li><a href=\"/ingredient\">Składniki</a></li>
                </ul>
            {% endblock %}
        </div>
        {% block body %}
        {% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/home/kamil/Dokumenty/studia/cookbook/app/Resources/views/base.html.twig");
    }
}
