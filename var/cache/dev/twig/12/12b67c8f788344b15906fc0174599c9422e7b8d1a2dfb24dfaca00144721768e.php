<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_20a34671231c95d3c753144508fb395ea4cc163d7f226dae157989a4858b6089 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c1cc013918b3dd3d7c9c2834f7262f14058de867fe1a600f0724f34b865225f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1cc013918b3dd3d7c9c2834f7262f14058de867fe1a600f0724f34b865225f7->enter($__internal_c1cc013918b3dd3d7c9c2834f7262f14058de867fe1a600f0724f34b865225f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_091aba3b334d7d05a6d3f7ef6a36ede081a32b61b1b52347e30ef58580d4c819 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_091aba3b334d7d05a6d3f7ef6a36ede081a32b61b1b52347e30ef58580d4c819->enter($__internal_091aba3b334d7d05a6d3f7ef6a36ede081a32b61b1b52347e30ef58580d4c819_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c1cc013918b3dd3d7c9c2834f7262f14058de867fe1a600f0724f34b865225f7->leave($__internal_c1cc013918b3dd3d7c9c2834f7262f14058de867fe1a600f0724f34b865225f7_prof);

        
        $__internal_091aba3b334d7d05a6d3f7ef6a36ede081a32b61b1b52347e30ef58580d4c819->leave($__internal_091aba3b334d7d05a6d3f7ef6a36ede081a32b61b1b52347e30ef58580d4c819_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_50eaa0b92b9729b84800e972cd1cd2dda9399a52402948b13d1ed12a5e4a2207 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50eaa0b92b9729b84800e972cd1cd2dda9399a52402948b13d1ed12a5e4a2207->enter($__internal_50eaa0b92b9729b84800e972cd1cd2dda9399a52402948b13d1ed12a5e4a2207_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_042fda4dbac20753da5e9b4180c0a76b72eca45abffa3f90dfcfc49f53cb0e78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_042fda4dbac20753da5e9b4180c0a76b72eca45abffa3f90dfcfc49f53cb0e78->enter($__internal_042fda4dbac20753da5e9b4180c0a76b72eca45abffa3f90dfcfc49f53cb0e78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_042fda4dbac20753da5e9b4180c0a76b72eca45abffa3f90dfcfc49f53cb0e78->leave($__internal_042fda4dbac20753da5e9b4180c0a76b72eca45abffa3f90dfcfc49f53cb0e78_prof);

        
        $__internal_50eaa0b92b9729b84800e972cd1cd2dda9399a52402948b13d1ed12a5e4a2207->leave($__internal_50eaa0b92b9729b84800e972cd1cd2dda9399a52402948b13d1ed12a5e4a2207_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c74eabe70b42c76fcaa7e34370d853f6703faf4cf69765fb263b91b4239f471d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c74eabe70b42c76fcaa7e34370d853f6703faf4cf69765fb263b91b4239f471d->enter($__internal_c74eabe70b42c76fcaa7e34370d853f6703faf4cf69765fb263b91b4239f471d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_40a953b9b22a55c7b5e649362d2b84a1e634fe1ccc81334413f5970921e82db8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40a953b9b22a55c7b5e649362d2b84a1e634fe1ccc81334413f5970921e82db8->enter($__internal_40a953b9b22a55c7b5e649362d2b84a1e634fe1ccc81334413f5970921e82db8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_40a953b9b22a55c7b5e649362d2b84a1e634fe1ccc81334413f5970921e82db8->leave($__internal_40a953b9b22a55c7b5e649362d2b84a1e634fe1ccc81334413f5970921e82db8_prof);

        
        $__internal_c74eabe70b42c76fcaa7e34370d853f6703faf4cf69765fb263b91b4239f471d->leave($__internal_c74eabe70b42c76fcaa7e34370d853f6703faf4cf69765fb263b91b4239f471d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_680192a5fd68e1f62906a41395a9acbec7ef8dadd4741177020939cfad940d12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_680192a5fd68e1f62906a41395a9acbec7ef8dadd4741177020939cfad940d12->enter($__internal_680192a5fd68e1f62906a41395a9acbec7ef8dadd4741177020939cfad940d12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_798a82a43acfa0e0beea14a7021fdc8e8080e266a7747c634f40feced8f40fae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_798a82a43acfa0e0beea14a7021fdc8e8080e266a7747c634f40feced8f40fae->enter($__internal_798a82a43acfa0e0beea14a7021fdc8e8080e266a7747c634f40feced8f40fae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_798a82a43acfa0e0beea14a7021fdc8e8080e266a7747c634f40feced8f40fae->leave($__internal_798a82a43acfa0e0beea14a7021fdc8e8080e266a7747c634f40feced8f40fae_prof);

        
        $__internal_680192a5fd68e1f62906a41395a9acbec7ef8dadd4741177020939cfad940d12->leave($__internal_680192a5fd68e1f62906a41395a9acbec7ef8dadd4741177020939cfad940d12_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/kamil/symfony_projects/cookbook-symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
