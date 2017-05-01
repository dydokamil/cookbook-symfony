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
        $__internal_951593ec7a0160d9a30686f7834f57982bf74934fb3a6e2a681d07a270f12487 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_951593ec7a0160d9a30686f7834f57982bf74934fb3a6e2a681d07a270f12487->enter($__internal_951593ec7a0160d9a30686f7834f57982bf74934fb3a6e2a681d07a270f12487_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_d1667b191439277a4a6036a1e1cf45a276cf9e982ed55a94e052d09c5f83a796 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1667b191439277a4a6036a1e1cf45a276cf9e982ed55a94e052d09c5f83a796->enter($__internal_d1667b191439277a4a6036a1e1cf45a276cf9e982ed55a94e052d09c5f83a796_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_951593ec7a0160d9a30686f7834f57982bf74934fb3a6e2a681d07a270f12487->leave($__internal_951593ec7a0160d9a30686f7834f57982bf74934fb3a6e2a681d07a270f12487_prof);

        
        $__internal_d1667b191439277a4a6036a1e1cf45a276cf9e982ed55a94e052d09c5f83a796->leave($__internal_d1667b191439277a4a6036a1e1cf45a276cf9e982ed55a94e052d09c5f83a796_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2f6d2e1fc9bd960305709ecf921069248db4f86246b8ca45de5ccb2519dd1b7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f6d2e1fc9bd960305709ecf921069248db4f86246b8ca45de5ccb2519dd1b7f->enter($__internal_2f6d2e1fc9bd960305709ecf921069248db4f86246b8ca45de5ccb2519dd1b7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_46e73ead3db0683ad6f5bed4efe454fac23f7c176e584cf7635c8021f80b8d3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46e73ead3db0683ad6f5bed4efe454fac23f7c176e584cf7635c8021f80b8d3e->enter($__internal_46e73ead3db0683ad6f5bed4efe454fac23f7c176e584cf7635c8021f80b8d3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_46e73ead3db0683ad6f5bed4efe454fac23f7c176e584cf7635c8021f80b8d3e->leave($__internal_46e73ead3db0683ad6f5bed4efe454fac23f7c176e584cf7635c8021f80b8d3e_prof);

        
        $__internal_2f6d2e1fc9bd960305709ecf921069248db4f86246b8ca45de5ccb2519dd1b7f->leave($__internal_2f6d2e1fc9bd960305709ecf921069248db4f86246b8ca45de5ccb2519dd1b7f_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7fbee8a2b0e97686f1ff06dcfd09fcf4cf6bdafa60a8f65b3ab5d4a39ed861e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fbee8a2b0e97686f1ff06dcfd09fcf4cf6bdafa60a8f65b3ab5d4a39ed861e0->enter($__internal_7fbee8a2b0e97686f1ff06dcfd09fcf4cf6bdafa60a8f65b3ab5d4a39ed861e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4ea1920a65d3297872a3a8c99711b34a60766316ddc6c95cfb8977af2a0b75c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ea1920a65d3297872a3a8c99711b34a60766316ddc6c95cfb8977af2a0b75c4->enter($__internal_4ea1920a65d3297872a3a8c99711b34a60766316ddc6c95cfb8977af2a0b75c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_4ea1920a65d3297872a3a8c99711b34a60766316ddc6c95cfb8977af2a0b75c4->leave($__internal_4ea1920a65d3297872a3a8c99711b34a60766316ddc6c95cfb8977af2a0b75c4_prof);

        
        $__internal_7fbee8a2b0e97686f1ff06dcfd09fcf4cf6bdafa60a8f65b3ab5d4a39ed861e0->leave($__internal_7fbee8a2b0e97686f1ff06dcfd09fcf4cf6bdafa60a8f65b3ab5d4a39ed861e0_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_18177ccacfff8fef2f5895b5781de6b9145388903258cd90c5a738e42814496b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18177ccacfff8fef2f5895b5781de6b9145388903258cd90c5a738e42814496b->enter($__internal_18177ccacfff8fef2f5895b5781de6b9145388903258cd90c5a738e42814496b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b134a184e7d3aca38316141bbd0f0c68d6d0865e3414593aa11d4e0888691b6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b134a184e7d3aca38316141bbd0f0c68d6d0865e3414593aa11d4e0888691b6b->enter($__internal_b134a184e7d3aca38316141bbd0f0c68d6d0865e3414593aa11d4e0888691b6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_b134a184e7d3aca38316141bbd0f0c68d6d0865e3414593aa11d4e0888691b6b->leave($__internal_b134a184e7d3aca38316141bbd0f0c68d6d0865e3414593aa11d4e0888691b6b_prof);

        
        $__internal_18177ccacfff8fef2f5895b5781de6b9145388903258cd90c5a738e42814496b->leave($__internal_18177ccacfff8fef2f5895b5781de6b9145388903258cd90c5a738e42814496b_prof);

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
