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
        $__internal_1b353e562a36d9e7743eaf91ac7eaed2fef90e8b889f3cb24d6199380bba1c13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b353e562a36d9e7743eaf91ac7eaed2fef90e8b889f3cb24d6199380bba1c13->enter($__internal_1b353e562a36d9e7743eaf91ac7eaed2fef90e8b889f3cb24d6199380bba1c13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_d43441c9553545b4f0a9bb85117ff19ffc074fa8a7aa5c9a417f4f6c1f900206 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d43441c9553545b4f0a9bb85117ff19ffc074fa8a7aa5c9a417f4f6c1f900206->enter($__internal_d43441c9553545b4f0a9bb85117ff19ffc074fa8a7aa5c9a417f4f6c1f900206_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b353e562a36d9e7743eaf91ac7eaed2fef90e8b889f3cb24d6199380bba1c13->leave($__internal_1b353e562a36d9e7743eaf91ac7eaed2fef90e8b889f3cb24d6199380bba1c13_prof);

        
        $__internal_d43441c9553545b4f0a9bb85117ff19ffc074fa8a7aa5c9a417f4f6c1f900206->leave($__internal_d43441c9553545b4f0a9bb85117ff19ffc074fa8a7aa5c9a417f4f6c1f900206_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0dffb2fb752bb1969e0b8cac26cc5037d427c5c984685755c9ea348e221c1c7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0dffb2fb752bb1969e0b8cac26cc5037d427c5c984685755c9ea348e221c1c7f->enter($__internal_0dffb2fb752bb1969e0b8cac26cc5037d427c5c984685755c9ea348e221c1c7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_dccf5d7735dc5380846e6e1d88f72460e780535608a4d7c1c4cac5f256f0561a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dccf5d7735dc5380846e6e1d88f72460e780535608a4d7c1c4cac5f256f0561a->enter($__internal_dccf5d7735dc5380846e6e1d88f72460e780535608a4d7c1c4cac5f256f0561a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_dccf5d7735dc5380846e6e1d88f72460e780535608a4d7c1c4cac5f256f0561a->leave($__internal_dccf5d7735dc5380846e6e1d88f72460e780535608a4d7c1c4cac5f256f0561a_prof);

        
        $__internal_0dffb2fb752bb1969e0b8cac26cc5037d427c5c984685755c9ea348e221c1c7f->leave($__internal_0dffb2fb752bb1969e0b8cac26cc5037d427c5c984685755c9ea348e221c1c7f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4661182efedc84cb8ece94d5c4facaf937cbde1cd16e82daf6585a3ff7ebbdca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4661182efedc84cb8ece94d5c4facaf937cbde1cd16e82daf6585a3ff7ebbdca->enter($__internal_4661182efedc84cb8ece94d5c4facaf937cbde1cd16e82daf6585a3ff7ebbdca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_7f1e14f419a9bad376bb69d6cdfb7500618bcdc3e2cbc71ba27884998a2cd78c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f1e14f419a9bad376bb69d6cdfb7500618bcdc3e2cbc71ba27884998a2cd78c->enter($__internal_7f1e14f419a9bad376bb69d6cdfb7500618bcdc3e2cbc71ba27884998a2cd78c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7f1e14f419a9bad376bb69d6cdfb7500618bcdc3e2cbc71ba27884998a2cd78c->leave($__internal_7f1e14f419a9bad376bb69d6cdfb7500618bcdc3e2cbc71ba27884998a2cd78c_prof);

        
        $__internal_4661182efedc84cb8ece94d5c4facaf937cbde1cd16e82daf6585a3ff7ebbdca->leave($__internal_4661182efedc84cb8ece94d5c4facaf937cbde1cd16e82daf6585a3ff7ebbdca_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_87f61eeb59c44ad0e62f350de0c9c83fb3092be76b8924e946026da088d7f4e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87f61eeb59c44ad0e62f350de0c9c83fb3092be76b8924e946026da088d7f4e1->enter($__internal_87f61eeb59c44ad0e62f350de0c9c83fb3092be76b8924e946026da088d7f4e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_68f2307adc62d2bee3e4629a45fef75b5d4d601e4df5445b4db0f6ab9e52a287 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68f2307adc62d2bee3e4629a45fef75b5d4d601e4df5445b4db0f6ab9e52a287->enter($__internal_68f2307adc62d2bee3e4629a45fef75b5d4d601e4df5445b4db0f6ab9e52a287_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_68f2307adc62d2bee3e4629a45fef75b5d4d601e4df5445b4db0f6ab9e52a287->leave($__internal_68f2307adc62d2bee3e4629a45fef75b5d4d601e4df5445b4db0f6ab9e52a287_prof);

        
        $__internal_87f61eeb59c44ad0e62f350de0c9c83fb3092be76b8924e946026da088d7f4e1->leave($__internal_87f61eeb59c44ad0e62f350de0c9c83fb3092be76b8924e946026da088d7f4e1_prof);

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
