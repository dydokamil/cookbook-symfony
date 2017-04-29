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
        $__internal_cdbf5a904f25ef31520ceafb81018d918f71f847dbb18c94e44c077abcad6bb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdbf5a904f25ef31520ceafb81018d918f71f847dbb18c94e44c077abcad6bb9->enter($__internal_cdbf5a904f25ef31520ceafb81018d918f71f847dbb18c94e44c077abcad6bb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_6595927a0fe71de86041f191e3e245e9dbf84bfddc2cf147290e4a0a7f5197b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6595927a0fe71de86041f191e3e245e9dbf84bfddc2cf147290e4a0a7f5197b9->enter($__internal_6595927a0fe71de86041f191e3e245e9dbf84bfddc2cf147290e4a0a7f5197b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cdbf5a904f25ef31520ceafb81018d918f71f847dbb18c94e44c077abcad6bb9->leave($__internal_cdbf5a904f25ef31520ceafb81018d918f71f847dbb18c94e44c077abcad6bb9_prof);

        
        $__internal_6595927a0fe71de86041f191e3e245e9dbf84bfddc2cf147290e4a0a7f5197b9->leave($__internal_6595927a0fe71de86041f191e3e245e9dbf84bfddc2cf147290e4a0a7f5197b9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a7c63fd4fa588c63ad4f6c141e565ee38992385888f78454cca972af50c0b8cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7c63fd4fa588c63ad4f6c141e565ee38992385888f78454cca972af50c0b8cf->enter($__internal_a7c63fd4fa588c63ad4f6c141e565ee38992385888f78454cca972af50c0b8cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c8aab498deff545f058321cfaec29b662ca0f6b2cf90fde710be4beaf931ff88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8aab498deff545f058321cfaec29b662ca0f6b2cf90fde710be4beaf931ff88->enter($__internal_c8aab498deff545f058321cfaec29b662ca0f6b2cf90fde710be4beaf931ff88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Książka kucharska - strona główna</h1>
";
        
        $__internal_c8aab498deff545f058321cfaec29b662ca0f6b2cf90fde710be4beaf931ff88->leave($__internal_c8aab498deff545f058321cfaec29b662ca0f6b2cf90fde710be4beaf931ff88_prof);

        
        $__internal_a7c63fd4fa588c63ad4f6c141e565ee38992385888f78454cca972af50c0b8cf->leave($__internal_a7c63fd4fa588c63ad4f6c141e565ee38992385888f78454cca972af50c0b8cf_prof);

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
