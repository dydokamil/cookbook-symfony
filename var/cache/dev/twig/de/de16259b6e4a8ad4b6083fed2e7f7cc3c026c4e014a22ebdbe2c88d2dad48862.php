<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_2677f6b3bc100aa81dae6ff86223fb50c328e380e411f257bc01ef0dfee2d3da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d54240d2d27d8c57b0b4f7ceba094a2c6b0f1374ccc63f06cfa42cc54260f615 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d54240d2d27d8c57b0b4f7ceba094a2c6b0f1374ccc63f06cfa42cc54260f615->enter($__internal_d54240d2d27d8c57b0b4f7ceba094a2c6b0f1374ccc63f06cfa42cc54260f615_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_9596b0bd0cfcddb2b8b8685cd04b84d3997ef0b29666fddb4a72b6f51c12e5e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9596b0bd0cfcddb2b8b8685cd04b84d3997ef0b29666fddb4a72b6f51c12e5e4->enter($__internal_9596b0bd0cfcddb2b8b8685cd04b84d3997ef0b29666fddb4a72b6f51c12e5e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_d54240d2d27d8c57b0b4f7ceba094a2c6b0f1374ccc63f06cfa42cc54260f615->leave($__internal_d54240d2d27d8c57b0b4f7ceba094a2c6b0f1374ccc63f06cfa42cc54260f615_prof);

        
        $__internal_9596b0bd0cfcddb2b8b8685cd04b84d3997ef0b29666fddb4a72b6f51c12e5e4->leave($__internal_9596b0bd0cfcddb2b8b8685cd04b84d3997ef0b29666fddb4a72b6f51c12e5e4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "/home/kamil/Dokumenty/studia/cookbook/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
