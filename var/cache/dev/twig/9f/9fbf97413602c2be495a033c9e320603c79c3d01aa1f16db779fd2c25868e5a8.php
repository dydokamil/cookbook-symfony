<?php

/* default/index.html.twig */
class __TwigTemplate_5d04d389cc45e7dcb96571085e7073eef0c0fa0ae64c81e0136e791ac5735c58 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_786870259bcf87fb847ceabc828f7e75acd2e6c3551eab0bdf8cb37372453d85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_786870259bcf87fb847ceabc828f7e75acd2e6c3551eab0bdf8cb37372453d85->enter($__internal_786870259bcf87fb847ceabc828f7e75acd2e6c3551eab0bdf8cb37372453d85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_e975196776062c42337a231d9c30190a0e19f6ce9b076196ce5c929c80c71e7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e975196776062c42337a231d9c30190a0e19f6ce9b076196ce5c929c80c71e7f->enter($__internal_e975196776062c42337a231d9c30190a0e19f6ce9b076196ce5c929c80c71e7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_786870259bcf87fb847ceabc828f7e75acd2e6c3551eab0bdf8cb37372453d85->leave($__internal_786870259bcf87fb847ceabc828f7e75acd2e6c3551eab0bdf8cb37372453d85_prof);

        
        $__internal_e975196776062c42337a231d9c30190a0e19f6ce9b076196ce5c929c80c71e7f->leave($__internal_e975196776062c42337a231d9c30190a0e19f6ce9b076196ce5c929c80c71e7f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_483e12065384d8dd3c6c9297975330326d5e6accd15b98b354af7b52e217a43e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_483e12065384d8dd3c6c9297975330326d5e6accd15b98b354af7b52e217a43e->enter($__internal_483e12065384d8dd3c6c9297975330326d5e6accd15b98b354af7b52e217a43e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_942af08bea57d7dba6206994bccf4a8b88dc9d30ce61288d8a879d6990c4c4b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_942af08bea57d7dba6206994bccf4a8b88dc9d30ce61288d8a879d6990c4c4b1->enter($__internal_942af08bea57d7dba6206994bccf4a8b88dc9d30ce61288d8a879d6990c4c4b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Książka kucharska - strona główna</h1>
";
        
        $__internal_942af08bea57d7dba6206994bccf4a8b88dc9d30ce61288d8a879d6990c4c4b1->leave($__internal_942af08bea57d7dba6206994bccf4a8b88dc9d30ce61288d8a879d6990c4c4b1_prof);

        
        $__internal_483e12065384d8dd3c6c9297975330326d5e6accd15b98b354af7b52e217a43e->leave($__internal_483e12065384d8dd3c6c9297975330326d5e6accd15b98b354af7b52e217a43e_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Książka kucharska - strona główna</h1>
{% endblock %}
", "default/index.html.twig", "/home/kamil/Dokumenty/studia/cookbook/app/Resources/views/default/index.html.twig");
    }
}
