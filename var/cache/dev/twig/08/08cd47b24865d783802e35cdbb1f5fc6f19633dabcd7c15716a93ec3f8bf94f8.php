<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_a7a4bdf347ac436c2b4fccc97c9805c4c6294646549851e17f96e6b69e938f43 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_b585acd13ea46a305aa377fa9791aea1ff576b3bc96cb2e1a1bcf53513019fa2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b585acd13ea46a305aa377fa9791aea1ff576b3bc96cb2e1a1bcf53513019fa2->enter($__internal_b585acd13ea46a305aa377fa9791aea1ff576b3bc96cb2e1a1bcf53513019fa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_ff377089e6406473f258c92173c6bc7c629db6e8645d0f6354892abff26bc417 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff377089e6406473f258c92173c6bc7c629db6e8645d0f6354892abff26bc417->enter($__internal_ff377089e6406473f258c92173c6bc7c629db6e8645d0f6354892abff26bc417_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b585acd13ea46a305aa377fa9791aea1ff576b3bc96cb2e1a1bcf53513019fa2->leave($__internal_b585acd13ea46a305aa377fa9791aea1ff576b3bc96cb2e1a1bcf53513019fa2_prof);

        
        $__internal_ff377089e6406473f258c92173c6bc7c629db6e8645d0f6354892abff26bc417->leave($__internal_ff377089e6406473f258c92173c6bc7c629db6e8645d0f6354892abff26bc417_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c31d942b2ce7aeba2f3a1084668db1a4a17f3458c815e74f9e7e8c3a3721640a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c31d942b2ce7aeba2f3a1084668db1a4a17f3458c815e74f9e7e8c3a3721640a->enter($__internal_c31d942b2ce7aeba2f3a1084668db1a4a17f3458c815e74f9e7e8c3a3721640a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_922f49878d50909380b996c09144c388043dd81aeff7bb67468109e4da6da3d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_922f49878d50909380b996c09144c388043dd81aeff7bb67468109e4da6da3d2->enter($__internal_922f49878d50909380b996c09144c388043dd81aeff7bb67468109e4da6da3d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_922f49878d50909380b996c09144c388043dd81aeff7bb67468109e4da6da3d2->leave($__internal_922f49878d50909380b996c09144c388043dd81aeff7bb67468109e4da6da3d2_prof);

        
        $__internal_c31d942b2ce7aeba2f3a1084668db1a4a17f3458c815e74f9e7e8c3a3721640a->leave($__internal_c31d942b2ce7aeba2f3a1084668db1a4a17f3458c815e74f9e7e8c3a3721640a_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_426612aa655aea334fd7a4280bc6a0196ecfdb635fff26af0dde37893f75fc64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_426612aa655aea334fd7a4280bc6a0196ecfdb635fff26af0dde37893f75fc64->enter($__internal_426612aa655aea334fd7a4280bc6a0196ecfdb635fff26af0dde37893f75fc64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_1ce5f602e91adaa1e3218d96c6ea7bb5b586d0b5c554a526d35b4c2bfa5e2088 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ce5f602e91adaa1e3218d96c6ea7bb5b586d0b5c554a526d35b4c2bfa5e2088->enter($__internal_1ce5f602e91adaa1e3218d96c6ea7bb5b586d0b5c554a526d35b4c2bfa5e2088_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_1ce5f602e91adaa1e3218d96c6ea7bb5b586d0b5c554a526d35b4c2bfa5e2088->leave($__internal_1ce5f602e91adaa1e3218d96c6ea7bb5b586d0b5c554a526d35b4c2bfa5e2088_prof);

        
        $__internal_426612aa655aea334fd7a4280bc6a0196ecfdb635fff26af0dde37893f75fc64->leave($__internal_426612aa655aea334fd7a4280bc6a0196ecfdb635fff26af0dde37893f75fc64_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ab845f2a31864baa34da3d023d37b07760d6ac5f1422fbfded2ee6e4474eddac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab845f2a31864baa34da3d023d37b07760d6ac5f1422fbfded2ee6e4474eddac->enter($__internal_ab845f2a31864baa34da3d023d37b07760d6ac5f1422fbfded2ee6e4474eddac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e0fa2ca80ea505f5eeb39e9361da55a2737b06036758067c72a433d21bb98bb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0fa2ca80ea505f5eeb39e9361da55a2737b06036758067c72a433d21bb98bb6->enter($__internal_e0fa2ca80ea505f5eeb39e9361da55a2737b06036758067c72a433d21bb98bb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_e0fa2ca80ea505f5eeb39e9361da55a2737b06036758067c72a433d21bb98bb6->leave($__internal_e0fa2ca80ea505f5eeb39e9361da55a2737b06036758067c72a433d21bb98bb6_prof);

        
        $__internal_ab845f2a31864baa34da3d023d37b07760d6ac5f1422fbfded2ee6e4474eddac->leave($__internal_ab845f2a31864baa34da3d023d37b07760d6ac5f1422fbfded2ee6e4474eddac_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/kamil/Dokumenty/studia/cookbook/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
