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
        $__internal_896f8452dd50d8c48c48fd196a2a9d12360415cffae7e7ac1248e278785e7ffa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_896f8452dd50d8c48c48fd196a2a9d12360415cffae7e7ac1248e278785e7ffa->enter($__internal_896f8452dd50d8c48c48fd196a2a9d12360415cffae7e7ac1248e278785e7ffa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_11e6f6a504718b19df9e5d665b8bd5da1ed07e52747c1ed3468aa2740123c8b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11e6f6a504718b19df9e5d665b8bd5da1ed07e52747c1ed3468aa2740123c8b1->enter($__internal_11e6f6a504718b19df9e5d665b8bd5da1ed07e52747c1ed3468aa2740123c8b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_896f8452dd50d8c48c48fd196a2a9d12360415cffae7e7ac1248e278785e7ffa->leave($__internal_896f8452dd50d8c48c48fd196a2a9d12360415cffae7e7ac1248e278785e7ffa_prof);

        
        $__internal_11e6f6a504718b19df9e5d665b8bd5da1ed07e52747c1ed3468aa2740123c8b1->leave($__internal_11e6f6a504718b19df9e5d665b8bd5da1ed07e52747c1ed3468aa2740123c8b1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6d7972eaff54f5b87d080177b9846ef9ad2099ed8d83761cdb87a1d4f97df507 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d7972eaff54f5b87d080177b9846ef9ad2099ed8d83761cdb87a1d4f97df507->enter($__internal_6d7972eaff54f5b87d080177b9846ef9ad2099ed8d83761cdb87a1d4f97df507_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_60a32ac70005fde341c04190e4d3df2d5ec1b24b1c7907bfe5ea7cf776f51f4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60a32ac70005fde341c04190e4d3df2d5ec1b24b1c7907bfe5ea7cf776f51f4c->enter($__internal_60a32ac70005fde341c04190e4d3df2d5ec1b24b1c7907bfe5ea7cf776f51f4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_60a32ac70005fde341c04190e4d3df2d5ec1b24b1c7907bfe5ea7cf776f51f4c->leave($__internal_60a32ac70005fde341c04190e4d3df2d5ec1b24b1c7907bfe5ea7cf776f51f4c_prof);

        
        $__internal_6d7972eaff54f5b87d080177b9846ef9ad2099ed8d83761cdb87a1d4f97df507->leave($__internal_6d7972eaff54f5b87d080177b9846ef9ad2099ed8d83761cdb87a1d4f97df507_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_435db77935c72ee14b123724997d091c1af645169717d7db60a2fa6b891edb9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_435db77935c72ee14b123724997d091c1af645169717d7db60a2fa6b891edb9d->enter($__internal_435db77935c72ee14b123724997d091c1af645169717d7db60a2fa6b891edb9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_46169c422340749576d1402ef541e351a0f0351eb4ae35b6fe1bb3e89674fd90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46169c422340749576d1402ef541e351a0f0351eb4ae35b6fe1bb3e89674fd90->enter($__internal_46169c422340749576d1402ef541e351a0f0351eb4ae35b6fe1bb3e89674fd90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_46169c422340749576d1402ef541e351a0f0351eb4ae35b6fe1bb3e89674fd90->leave($__internal_46169c422340749576d1402ef541e351a0f0351eb4ae35b6fe1bb3e89674fd90_prof);

        
        $__internal_435db77935c72ee14b123724997d091c1af645169717d7db60a2fa6b891edb9d->leave($__internal_435db77935c72ee14b123724997d091c1af645169717d7db60a2fa6b891edb9d_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9ae974bbb53a1fa2af65a8d3dce12cfa71ab755eea3da08e54480852899dc20c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ae974bbb53a1fa2af65a8d3dce12cfa71ab755eea3da08e54480852899dc20c->enter($__internal_9ae974bbb53a1fa2af65a8d3dce12cfa71ab755eea3da08e54480852899dc20c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e11205da37133fe4c2b00735833c73a723a6242e4f418716bc0d81c3b5d099bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e11205da37133fe4c2b00735833c73a723a6242e4f418716bc0d81c3b5d099bd->enter($__internal_e11205da37133fe4c2b00735833c73a723a6242e4f418716bc0d81c3b5d099bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_e11205da37133fe4c2b00735833c73a723a6242e4f418716bc0d81c3b5d099bd->leave($__internal_e11205da37133fe4c2b00735833c73a723a6242e4f418716bc0d81c3b5d099bd_prof);

        
        $__internal_9ae974bbb53a1fa2af65a8d3dce12cfa71ab755eea3da08e54480852899dc20c->leave($__internal_9ae974bbb53a1fa2af65a8d3dce12cfa71ab755eea3da08e54480852899dc20c_prof);

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
