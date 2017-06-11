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
        $__internal_fa6291d5ebf059cf3032d0ceabd915e61f2557a7409bc2d4dab3a2711d5792ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa6291d5ebf059cf3032d0ceabd915e61f2557a7409bc2d4dab3a2711d5792ce->enter($__internal_fa6291d5ebf059cf3032d0ceabd915e61f2557a7409bc2d4dab3a2711d5792ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_e1d7b59c3c09949a8cb51d04073c7f457c1356265ace22f44d885c63eacd85c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1d7b59c3c09949a8cb51d04073c7f457c1356265ace22f44d885c63eacd85c6->enter($__internal_e1d7b59c3c09949a8cb51d04073c7f457c1356265ace22f44d885c63eacd85c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa6291d5ebf059cf3032d0ceabd915e61f2557a7409bc2d4dab3a2711d5792ce->leave($__internal_fa6291d5ebf059cf3032d0ceabd915e61f2557a7409bc2d4dab3a2711d5792ce_prof);

        
        $__internal_e1d7b59c3c09949a8cb51d04073c7f457c1356265ace22f44d885c63eacd85c6->leave($__internal_e1d7b59c3c09949a8cb51d04073c7f457c1356265ace22f44d885c63eacd85c6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_df2bcb854593a7f4955bdfb3889ccdb94e3fe81c0e75dfccba2e2d2a1bd8285f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df2bcb854593a7f4955bdfb3889ccdb94e3fe81c0e75dfccba2e2d2a1bd8285f->enter($__internal_df2bcb854593a7f4955bdfb3889ccdb94e3fe81c0e75dfccba2e2d2a1bd8285f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f88e0fefd4bc61cbdfc6dbd8b0473e9e48c3b3fc080c3d3a95ce0bf819ebb490 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f88e0fefd4bc61cbdfc6dbd8b0473e9e48c3b3fc080c3d3a95ce0bf819ebb490->enter($__internal_f88e0fefd4bc61cbdfc6dbd8b0473e9e48c3b3fc080c3d3a95ce0bf819ebb490_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_f88e0fefd4bc61cbdfc6dbd8b0473e9e48c3b3fc080c3d3a95ce0bf819ebb490->leave($__internal_f88e0fefd4bc61cbdfc6dbd8b0473e9e48c3b3fc080c3d3a95ce0bf819ebb490_prof);

        
        $__internal_df2bcb854593a7f4955bdfb3889ccdb94e3fe81c0e75dfccba2e2d2a1bd8285f->leave($__internal_df2bcb854593a7f4955bdfb3889ccdb94e3fe81c0e75dfccba2e2d2a1bd8285f_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5d770d6cf9caa79afd07f5b82dbe915d5e883d9de0b644ad8d8c896ca3de7ebf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d770d6cf9caa79afd07f5b82dbe915d5e883d9de0b644ad8d8c896ca3de7ebf->enter($__internal_5d770d6cf9caa79afd07f5b82dbe915d5e883d9de0b644ad8d8c896ca3de7ebf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_1989c7814bb796aae2cecf17c8f66d10228192eb65a2e675aebe8ba82b31d5e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1989c7814bb796aae2cecf17c8f66d10228192eb65a2e675aebe8ba82b31d5e9->enter($__internal_1989c7814bb796aae2cecf17c8f66d10228192eb65a2e675aebe8ba82b31d5e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_1989c7814bb796aae2cecf17c8f66d10228192eb65a2e675aebe8ba82b31d5e9->leave($__internal_1989c7814bb796aae2cecf17c8f66d10228192eb65a2e675aebe8ba82b31d5e9_prof);

        
        $__internal_5d770d6cf9caa79afd07f5b82dbe915d5e883d9de0b644ad8d8c896ca3de7ebf->leave($__internal_5d770d6cf9caa79afd07f5b82dbe915d5e883d9de0b644ad8d8c896ca3de7ebf_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4b8319c0f3a97a8884afdc6a7536b8e4cf23574cff801338c3facdf80be3e9dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b8319c0f3a97a8884afdc6a7536b8e4cf23574cff801338c3facdf80be3e9dd->enter($__internal_4b8319c0f3a97a8884afdc6a7536b8e4cf23574cff801338c3facdf80be3e9dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_fc485e80c945b08d67ea6fc518eb8cc305c1518b06e9eaf74cb5df952c131a08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc485e80c945b08d67ea6fc518eb8cc305c1518b06e9eaf74cb5df952c131a08->enter($__internal_fc485e80c945b08d67ea6fc518eb8cc305c1518b06e9eaf74cb5df952c131a08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_fc485e80c945b08d67ea6fc518eb8cc305c1518b06e9eaf74cb5df952c131a08->leave($__internal_fc485e80c945b08d67ea6fc518eb8cc305c1518b06e9eaf74cb5df952c131a08_prof);

        
        $__internal_4b8319c0f3a97a8884afdc6a7536b8e4cf23574cff801338c3facdf80be3e9dd->leave($__internal_4b8319c0f3a97a8884afdc6a7536b8e4cf23574cff801338c3facdf80be3e9dd_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/home/kamil/Dokumenty/studia/cookbook-symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
