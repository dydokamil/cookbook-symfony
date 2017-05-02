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
        $__internal_44cefa87b1d867b094a4c3b50a8c2f8b8681d5c6d876c335b8ab1934dba842c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44cefa87b1d867b094a4c3b50a8c2f8b8681d5c6d876c335b8ab1934dba842c8->enter($__internal_44cefa87b1d867b094a4c3b50a8c2f8b8681d5c6d876c335b8ab1934dba842c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_7e8fc6930f56ca2844760d8c5803c981ccad054724ce493b031669e1cf9017b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e8fc6930f56ca2844760d8c5803c981ccad054724ce493b031669e1cf9017b6->enter($__internal_7e8fc6930f56ca2844760d8c5803c981ccad054724ce493b031669e1cf9017b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_44cefa87b1d867b094a4c3b50a8c2f8b8681d5c6d876c335b8ab1934dba842c8->leave($__internal_44cefa87b1d867b094a4c3b50a8c2f8b8681d5c6d876c335b8ab1934dba842c8_prof);

        
        $__internal_7e8fc6930f56ca2844760d8c5803c981ccad054724ce493b031669e1cf9017b6->leave($__internal_7e8fc6930f56ca2844760d8c5803c981ccad054724ce493b031669e1cf9017b6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c4d1ff5b571aca38a97e8641e514146dcd5061a5141c90cb20e47f1756838129 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4d1ff5b571aca38a97e8641e514146dcd5061a5141c90cb20e47f1756838129->enter($__internal_c4d1ff5b571aca38a97e8641e514146dcd5061a5141c90cb20e47f1756838129_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7bc45d525f910f2f782d176d4633832afa023885843726b62c0f37905a409bb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bc45d525f910f2f782d176d4633832afa023885843726b62c0f37905a409bb8->enter($__internal_7bc45d525f910f2f782d176d4633832afa023885843726b62c0f37905a409bb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Książka kucharska - strona główna</h1>
";
        
        $__internal_7bc45d525f910f2f782d176d4633832afa023885843726b62c0f37905a409bb8->leave($__internal_7bc45d525f910f2f782d176d4633832afa023885843726b62c0f37905a409bb8_prof);

        
        $__internal_c4d1ff5b571aca38a97e8641e514146dcd5061a5141c90cb20e47f1756838129->leave($__internal_c4d1ff5b571aca38a97e8641e514146dcd5061a5141c90cb20e47f1756838129_prof);

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
", "default/index.html.twig", "/home/kamil/symfony_projects/cookbook-symfony/app/Resources/views/default/index.html.twig");
    }
}
