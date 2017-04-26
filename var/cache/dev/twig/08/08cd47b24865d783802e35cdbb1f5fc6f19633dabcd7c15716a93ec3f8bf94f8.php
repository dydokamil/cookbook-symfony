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
        $__internal_06fd747ac442582f3a58d04ebef010cabd1373b63a63defb3f89b2bec8fd43aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06fd747ac442582f3a58d04ebef010cabd1373b63a63defb3f89b2bec8fd43aa->enter($__internal_06fd747ac442582f3a58d04ebef010cabd1373b63a63defb3f89b2bec8fd43aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_ffc9e06b20931d89cc4115262a3926b96df455f4c6862ef6c1dd3b9f02444f1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffc9e06b20931d89cc4115262a3926b96df455f4c6862ef6c1dd3b9f02444f1b->enter($__internal_ffc9e06b20931d89cc4115262a3926b96df455f4c6862ef6c1dd3b9f02444f1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_06fd747ac442582f3a58d04ebef010cabd1373b63a63defb3f89b2bec8fd43aa->leave($__internal_06fd747ac442582f3a58d04ebef010cabd1373b63a63defb3f89b2bec8fd43aa_prof);

        
        $__internal_ffc9e06b20931d89cc4115262a3926b96df455f4c6862ef6c1dd3b9f02444f1b->leave($__internal_ffc9e06b20931d89cc4115262a3926b96df455f4c6862ef6c1dd3b9f02444f1b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5b20797c87f047b773deff34c72ff9e1ef49e1951d7a3b157ec5b454817115a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b20797c87f047b773deff34c72ff9e1ef49e1951d7a3b157ec5b454817115a4->enter($__internal_5b20797c87f047b773deff34c72ff9e1ef49e1951d7a3b157ec5b454817115a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_45d9d1c5af53deea25e799322fe28ae9d62cb004dbb23da84fd2bd056e3917f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45d9d1c5af53deea25e799322fe28ae9d62cb004dbb23da84fd2bd056e3917f4->enter($__internal_45d9d1c5af53deea25e799322fe28ae9d62cb004dbb23da84fd2bd056e3917f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_45d9d1c5af53deea25e799322fe28ae9d62cb004dbb23da84fd2bd056e3917f4->leave($__internal_45d9d1c5af53deea25e799322fe28ae9d62cb004dbb23da84fd2bd056e3917f4_prof);

        
        $__internal_5b20797c87f047b773deff34c72ff9e1ef49e1951d7a3b157ec5b454817115a4->leave($__internal_5b20797c87f047b773deff34c72ff9e1ef49e1951d7a3b157ec5b454817115a4_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_968576aa9e4b3aa162a07b624a9016c6c286446765981324dbc7734571c36fa1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_968576aa9e4b3aa162a07b624a9016c6c286446765981324dbc7734571c36fa1->enter($__internal_968576aa9e4b3aa162a07b624a9016c6c286446765981324dbc7734571c36fa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_3ff09a727bb0260f51bc1c0bc6f4c9e826c81c9768fa831faee75f94b9c14664 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ff09a727bb0260f51bc1c0bc6f4c9e826c81c9768fa831faee75f94b9c14664->enter($__internal_3ff09a727bb0260f51bc1c0bc6f4c9e826c81c9768fa831faee75f94b9c14664_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_3ff09a727bb0260f51bc1c0bc6f4c9e826c81c9768fa831faee75f94b9c14664->leave($__internal_3ff09a727bb0260f51bc1c0bc6f4c9e826c81c9768fa831faee75f94b9c14664_prof);

        
        $__internal_968576aa9e4b3aa162a07b624a9016c6c286446765981324dbc7734571c36fa1->leave($__internal_968576aa9e4b3aa162a07b624a9016c6c286446765981324dbc7734571c36fa1_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5740c9b4fe3e9dfd8f1598a4c94be4241eee2562cfb329ff9a8bb54a599438a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5740c9b4fe3e9dfd8f1598a4c94be4241eee2562cfb329ff9a8bb54a599438a1->enter($__internal_5740c9b4fe3e9dfd8f1598a4c94be4241eee2562cfb329ff9a8bb54a599438a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_dbd1c4a18ed224f1ca38c067a583cd7c2d9a0ff6cdbbb2b5c90725796b356fce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbd1c4a18ed224f1ca38c067a583cd7c2d9a0ff6cdbbb2b5c90725796b356fce->enter($__internal_dbd1c4a18ed224f1ca38c067a583cd7c2d9a0ff6cdbbb2b5c90725796b356fce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_dbd1c4a18ed224f1ca38c067a583cd7c2d9a0ff6cdbbb2b5c90725796b356fce->leave($__internal_dbd1c4a18ed224f1ca38c067a583cd7c2d9a0ff6cdbbb2b5c90725796b356fce_prof);

        
        $__internal_5740c9b4fe3e9dfd8f1598a4c94be4241eee2562cfb329ff9a8bb54a599438a1->leave($__internal_5740c9b4fe3e9dfd8f1598a4c94be4241eee2562cfb329ff9a8bb54a599438a1_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/home/kamil/symfony_projects/cookbook-symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
