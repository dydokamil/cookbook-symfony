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
        $__internal_664fafade9f774b471cfab360e1469a7a4aa94b06d95cf3f36ff815acc9a2a2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_664fafade9f774b471cfab360e1469a7a4aa94b06d95cf3f36ff815acc9a2a2c->enter($__internal_664fafade9f774b471cfab360e1469a7a4aa94b06d95cf3f36ff815acc9a2a2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_8d1a724a6964dbad023304c1808193b91ed2c04f2a29308a53117f70e470e0bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d1a724a6964dbad023304c1808193b91ed2c04f2a29308a53117f70e470e0bd->enter($__internal_8d1a724a6964dbad023304c1808193b91ed2c04f2a29308a53117f70e470e0bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_664fafade9f774b471cfab360e1469a7a4aa94b06d95cf3f36ff815acc9a2a2c->leave($__internal_664fafade9f774b471cfab360e1469a7a4aa94b06d95cf3f36ff815acc9a2a2c_prof);

        
        $__internal_8d1a724a6964dbad023304c1808193b91ed2c04f2a29308a53117f70e470e0bd->leave($__internal_8d1a724a6964dbad023304c1808193b91ed2c04f2a29308a53117f70e470e0bd_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2adabcb040f1370aec3dc9609cdd53dd7e49b1e83cde292e5900bf0a002177d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2adabcb040f1370aec3dc9609cdd53dd7e49b1e83cde292e5900bf0a002177d9->enter($__internal_2adabcb040f1370aec3dc9609cdd53dd7e49b1e83cde292e5900bf0a002177d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_0bbde9015062ac3b97fee80c66edb064c4ac04556543d0a9d6df4de942a41edc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bbde9015062ac3b97fee80c66edb064c4ac04556543d0a9d6df4de942a41edc->enter($__internal_0bbde9015062ac3b97fee80c66edb064c4ac04556543d0a9d6df4de942a41edc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0bbde9015062ac3b97fee80c66edb064c4ac04556543d0a9d6df4de942a41edc->leave($__internal_0bbde9015062ac3b97fee80c66edb064c4ac04556543d0a9d6df4de942a41edc_prof);

        
        $__internal_2adabcb040f1370aec3dc9609cdd53dd7e49b1e83cde292e5900bf0a002177d9->leave($__internal_2adabcb040f1370aec3dc9609cdd53dd7e49b1e83cde292e5900bf0a002177d9_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b43bbbfe395c8e7a80469fea7c342807d7f9aa8353f072851888c69be1e47898 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b43bbbfe395c8e7a80469fea7c342807d7f9aa8353f072851888c69be1e47898->enter($__internal_b43bbbfe395c8e7a80469fea7c342807d7f9aa8353f072851888c69be1e47898_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_69b94df905790463e993247b96eaeac6c4edae773f28b2a588f5c3214be911b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69b94df905790463e993247b96eaeac6c4edae773f28b2a588f5c3214be911b0->enter($__internal_69b94df905790463e993247b96eaeac6c4edae773f28b2a588f5c3214be911b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_69b94df905790463e993247b96eaeac6c4edae773f28b2a588f5c3214be911b0->leave($__internal_69b94df905790463e993247b96eaeac6c4edae773f28b2a588f5c3214be911b0_prof);

        
        $__internal_b43bbbfe395c8e7a80469fea7c342807d7f9aa8353f072851888c69be1e47898->leave($__internal_b43bbbfe395c8e7a80469fea7c342807d7f9aa8353f072851888c69be1e47898_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_77207f459b196672db64beec9c4366137aba9659a123df63f92d111b858f8b83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77207f459b196672db64beec9c4366137aba9659a123df63f92d111b858f8b83->enter($__internal_77207f459b196672db64beec9c4366137aba9659a123df63f92d111b858f8b83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e33317ec38f911323b3433ef07b73a4992f895698240ea7b810d560e212912c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e33317ec38f911323b3433ef07b73a4992f895698240ea7b810d560e212912c0->enter($__internal_e33317ec38f911323b3433ef07b73a4992f895698240ea7b810d560e212912c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e33317ec38f911323b3433ef07b73a4992f895698240ea7b810d560e212912c0->leave($__internal_e33317ec38f911323b3433ef07b73a4992f895698240ea7b810d560e212912c0_prof);

        
        $__internal_77207f459b196672db64beec9c4366137aba9659a123df63f92d111b858f8b83->leave($__internal_77207f459b196672db64beec9c4366137aba9659a123df63f92d111b858f8b83_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/home/kamil/Dokumenty/studia/cookbook/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
