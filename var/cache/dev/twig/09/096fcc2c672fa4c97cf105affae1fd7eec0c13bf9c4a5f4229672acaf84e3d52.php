<?php

/* @Twig/Exception/trace.txt.twig */
class __TwigTemplate_6620cdaf4e696856fa56aa0dd900eef613fddb5e5d1255b14fc4f804e40a4e5d extends Twig_Template
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
        $__internal_213ec14419c6f840b6789d63bf8d711ee6ceee017777f9389eb8bf6ade582fc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_213ec14419c6f840b6789d63bf8d711ee6ceee017777f9389eb8bf6ade582fc7->enter($__internal_213ec14419c6f840b6789d63bf8d711ee6ceee017777f9389eb8bf6ade582fc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/trace.txt.twig"));

        $__internal_e360967bf2550ff4df3dafcfadde24e96fee1302fb4ea72b1cf047f8520c8dc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e360967bf2550ff4df3dafcfadde24e96fee1302fb4ea72b1cf047f8520c8dc6->enter($__internal_e360967bf2550ff4df3dafcfadde24e96fee1302fb4ea72b1cf047f8520c8dc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/trace.txt.twig"));

        // line 1
        if ($this->getAttribute(($context["trace"] ?? $this->getContext($context, "trace")), "function", array())) {
            // line 2
            echo "    at ";
            echo (($this->getAttribute(($context["trace"] ?? $this->getContext($context, "trace")), "class", array()) . $this->getAttribute(($context["trace"] ?? $this->getContext($context, "trace")), "type", array())) . $this->getAttribute(($context["trace"] ?? $this->getContext($context, "trace")), "function", array()));
            echo "(";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->formatArgsAsText($this->getAttribute(($context["trace"] ?? $this->getContext($context, "trace")), "args", array()));
            echo ")
";
        } else {
            // line 4
            echo "    at n/a
";
        }
        // line 6
        if (($this->getAttribute(($context["trace"] ?? null), "file", array(), "any", true, true) && $this->getAttribute(($context["trace"] ?? null), "line", array(), "any", true, true))) {
            // line 7
            echo "        in ";
            echo $this->getAttribute(($context["trace"] ?? $this->getContext($context, "trace")), "file", array());
            echo " line ";
            echo $this->getAttribute(($context["trace"] ?? $this->getContext($context, "trace")), "line", array());
            echo "
";
        }
        
        $__internal_213ec14419c6f840b6789d63bf8d711ee6ceee017777f9389eb8bf6ade582fc7->leave($__internal_213ec14419c6f840b6789d63bf8d711ee6ceee017777f9389eb8bf6ade582fc7_prof);

        
        $__internal_e360967bf2550ff4df3dafcfadde24e96fee1302fb4ea72b1cf047f8520c8dc6->leave($__internal_e360967bf2550ff4df3dafcfadde24e96fee1302fb4ea72b1cf047f8520c8dc6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/trace.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 7,  39 => 6,  35 => 4,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if trace.function %}
    at {{ trace.class ~ trace.type ~ trace.function }}({{ trace.args|format_args_as_text }})
{% else %}
    at n/a
{% endif %}
{% if trace.file is defined and trace.line is defined %}
        in {{ trace.file }} line {{ trace.line }}
{% endif %}
", "@Twig/Exception/trace.txt.twig", "/home/kamil/Dokumenty/studia/cookbook/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/trace.txt.twig");
    }
}
