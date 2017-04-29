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
        $__internal_1fb5c85767d72620adba00c4d3750b15c0b72de0335758fbb059f1a102c371fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fb5c85767d72620adba00c4d3750b15c0b72de0335758fbb059f1a102c371fc->enter($__internal_1fb5c85767d72620adba00c4d3750b15c0b72de0335758fbb059f1a102c371fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_1d63fe76861c26ca03eb09a78608d161ba2701d54b9bd0e7e9000e9e9dc3fee1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d63fe76861c26ca03eb09a78608d161ba2701d54b9bd0e7e9000e9e9dc3fee1->enter($__internal_1d63fe76861c26ca03eb09a78608d161ba2701d54b9bd0e7e9000e9e9dc3fee1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1fb5c85767d72620adba00c4d3750b15c0b72de0335758fbb059f1a102c371fc->leave($__internal_1fb5c85767d72620adba00c4d3750b15c0b72de0335758fbb059f1a102c371fc_prof);

        
        $__internal_1d63fe76861c26ca03eb09a78608d161ba2701d54b9bd0e7e9000e9e9dc3fee1->leave($__internal_1d63fe76861c26ca03eb09a78608d161ba2701d54b9bd0e7e9000e9e9dc3fee1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1171f5d510db7425658ab1b865eba698618e70676586b41811a330c2636ed387 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1171f5d510db7425658ab1b865eba698618e70676586b41811a330c2636ed387->enter($__internal_1171f5d510db7425658ab1b865eba698618e70676586b41811a330c2636ed387_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0a1cf37806fab54ae29ef732edfdde28c2ae1d5679b61c36009406cd4d0ad6fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a1cf37806fab54ae29ef732edfdde28c2ae1d5679b61c36009406cd4d0ad6fc->enter($__internal_0a1cf37806fab54ae29ef732edfdde28c2ae1d5679b61c36009406cd4d0ad6fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_0a1cf37806fab54ae29ef732edfdde28c2ae1d5679b61c36009406cd4d0ad6fc->leave($__internal_0a1cf37806fab54ae29ef732edfdde28c2ae1d5679b61c36009406cd4d0ad6fc_prof);

        
        $__internal_1171f5d510db7425658ab1b865eba698618e70676586b41811a330c2636ed387->leave($__internal_1171f5d510db7425658ab1b865eba698618e70676586b41811a330c2636ed387_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fd28458ffc8833ad7730b6b00c9bfb9f54bb65740630505240f3622b22d93d4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd28458ffc8833ad7730b6b00c9bfb9f54bb65740630505240f3622b22d93d4c->enter($__internal_fd28458ffc8833ad7730b6b00c9bfb9f54bb65740630505240f3622b22d93d4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_307d490ce98ea01c638b9ba1db85678f2d6f03e62e421c020486ae54a9fe3790 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_307d490ce98ea01c638b9ba1db85678f2d6f03e62e421c020486ae54a9fe3790->enter($__internal_307d490ce98ea01c638b9ba1db85678f2d6f03e62e421c020486ae54a9fe3790_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_307d490ce98ea01c638b9ba1db85678f2d6f03e62e421c020486ae54a9fe3790->leave($__internal_307d490ce98ea01c638b9ba1db85678f2d6f03e62e421c020486ae54a9fe3790_prof);

        
        $__internal_fd28458ffc8833ad7730b6b00c9bfb9f54bb65740630505240f3622b22d93d4c->leave($__internal_fd28458ffc8833ad7730b6b00c9bfb9f54bb65740630505240f3622b22d93d4c_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_549e3f11fd3134414cec8bbdc17c4e2658e4e440a642f3a34dea67a758979cbf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_549e3f11fd3134414cec8bbdc17c4e2658e4e440a642f3a34dea67a758979cbf->enter($__internal_549e3f11fd3134414cec8bbdc17c4e2658e4e440a642f3a34dea67a758979cbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8983fd63e1a68c27f3a5b8ce4223fb54288329316571a804000c6cd32fcae5f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8983fd63e1a68c27f3a5b8ce4223fb54288329316571a804000c6cd32fcae5f1->enter($__internal_8983fd63e1a68c27f3a5b8ce4223fb54288329316571a804000c6cd32fcae5f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_8983fd63e1a68c27f3a5b8ce4223fb54288329316571a804000c6cd32fcae5f1->leave($__internal_8983fd63e1a68c27f3a5b8ce4223fb54288329316571a804000c6cd32fcae5f1_prof);

        
        $__internal_549e3f11fd3134414cec8bbdc17c4e2658e4e440a642f3a34dea67a758979cbf->leave($__internal_549e3f11fd3134414cec8bbdc17c4e2658e4e440a642f3a34dea67a758979cbf_prof);

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
