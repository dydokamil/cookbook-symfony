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
        $__internal_6a3ec4358ed263477e0a113f958bcab3f8f74a044878a6395664091750db6a2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a3ec4358ed263477e0a113f958bcab3f8f74a044878a6395664091750db6a2c->enter($__internal_6a3ec4358ed263477e0a113f958bcab3f8f74a044878a6395664091750db6a2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_f22e3ff8bcf2c089c0c0d61b4ddc7b4188e182925b4d34a03efdf29e22b174be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f22e3ff8bcf2c089c0c0d61b4ddc7b4188e182925b4d34a03efdf29e22b174be->enter($__internal_f22e3ff8bcf2c089c0c0d61b4ddc7b4188e182925b4d34a03efdf29e22b174be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a3ec4358ed263477e0a113f958bcab3f8f74a044878a6395664091750db6a2c->leave($__internal_6a3ec4358ed263477e0a113f958bcab3f8f74a044878a6395664091750db6a2c_prof);

        
        $__internal_f22e3ff8bcf2c089c0c0d61b4ddc7b4188e182925b4d34a03efdf29e22b174be->leave($__internal_f22e3ff8bcf2c089c0c0d61b4ddc7b4188e182925b4d34a03efdf29e22b174be_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4a08679307d54d7cf600997561462f03c4358c8913e466bd6bc7f412fc407a8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a08679307d54d7cf600997561462f03c4358c8913e466bd6bc7f412fc407a8f->enter($__internal_4a08679307d54d7cf600997561462f03c4358c8913e466bd6bc7f412fc407a8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0de46685e6cc0a28a02408264e8bc741fe536a8dd1eeab4f40773e26c427d481 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0de46685e6cc0a28a02408264e8bc741fe536a8dd1eeab4f40773e26c427d481->enter($__internal_0de46685e6cc0a28a02408264e8bc741fe536a8dd1eeab4f40773e26c427d481_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_0de46685e6cc0a28a02408264e8bc741fe536a8dd1eeab4f40773e26c427d481->leave($__internal_0de46685e6cc0a28a02408264e8bc741fe536a8dd1eeab4f40773e26c427d481_prof);

        
        $__internal_4a08679307d54d7cf600997561462f03c4358c8913e466bd6bc7f412fc407a8f->leave($__internal_4a08679307d54d7cf600997561462f03c4358c8913e466bd6bc7f412fc407a8f_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_44062bd14c368678f501d3cf16e1ea2dd243628e0eb9645b52d22acb7f0341c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44062bd14c368678f501d3cf16e1ea2dd243628e0eb9645b52d22acb7f0341c5->enter($__internal_44062bd14c368678f501d3cf16e1ea2dd243628e0eb9645b52d22acb7f0341c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ec320a2423bafd7ec7a099f63abc3fa1abd087756a10f0b20a5db14f82645910 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec320a2423bafd7ec7a099f63abc3fa1abd087756a10f0b20a5db14f82645910->enter($__internal_ec320a2423bafd7ec7a099f63abc3fa1abd087756a10f0b20a5db14f82645910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_ec320a2423bafd7ec7a099f63abc3fa1abd087756a10f0b20a5db14f82645910->leave($__internal_ec320a2423bafd7ec7a099f63abc3fa1abd087756a10f0b20a5db14f82645910_prof);

        
        $__internal_44062bd14c368678f501d3cf16e1ea2dd243628e0eb9645b52d22acb7f0341c5->leave($__internal_44062bd14c368678f501d3cf16e1ea2dd243628e0eb9645b52d22acb7f0341c5_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_02dbad292885f34e81e442f58ee6f4c4dd59079f823d58aa9034148286f24da7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02dbad292885f34e81e442f58ee6f4c4dd59079f823d58aa9034148286f24da7->enter($__internal_02dbad292885f34e81e442f58ee6f4c4dd59079f823d58aa9034148286f24da7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ecf309e2462cd7dd3cf2aac60fa6085bf9583de3479caea01d566c504e4bda63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecf309e2462cd7dd3cf2aac60fa6085bf9583de3479caea01d566c504e4bda63->enter($__internal_ecf309e2462cd7dd3cf2aac60fa6085bf9583de3479caea01d566c504e4bda63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_ecf309e2462cd7dd3cf2aac60fa6085bf9583de3479caea01d566c504e4bda63->leave($__internal_ecf309e2462cd7dd3cf2aac60fa6085bf9583de3479caea01d566c504e4bda63_prof);

        
        $__internal_02dbad292885f34e81e442f58ee6f4c4dd59079f823d58aa9034148286f24da7->leave($__internal_02dbad292885f34e81e442f58ee6f4c4dd59079f823d58aa9034148286f24da7_prof);

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
