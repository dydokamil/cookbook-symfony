<?php

/* ingredient/new.html.twig */
class __TwigTemplate_0a648eafecf7443c452048503ff10b2ff83b741ab6d243e2de99c53c2f7dec44 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ingredient/new.html.twig", 1);
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
        $__internal_3b563df7c9f2014e1a26e25f0d569bd87097b172aa08a1a256c73da266ebe74c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b563df7c9f2014e1a26e25f0d569bd87097b172aa08a1a256c73da266ebe74c->enter($__internal_3b563df7c9f2014e1a26e25f0d569bd87097b172aa08a1a256c73da266ebe74c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ingredient/new.html.twig"));

        $__internal_4ccd9a1911b5708424c9ddf6a3e89b357da08c9177b6d4ea25cbe58e64d234ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ccd9a1911b5708424c9ddf6a3e89b357da08c9177b6d4ea25cbe58e64d234ab->enter($__internal_4ccd9a1911b5708424c9ddf6a3e89b357da08c9177b6d4ea25cbe58e64d234ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ingredient/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b563df7c9f2014e1a26e25f0d569bd87097b172aa08a1a256c73da266ebe74c->leave($__internal_3b563df7c9f2014e1a26e25f0d569bd87097b172aa08a1a256c73da266ebe74c_prof);

        
        $__internal_4ccd9a1911b5708424c9ddf6a3e89b357da08c9177b6d4ea25cbe58e64d234ab->leave($__internal_4ccd9a1911b5708424c9ddf6a3e89b357da08c9177b6d4ea25cbe58e64d234ab_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_caa5e25df74c841e2d839a8884146d1ea71ae58aa713d7c4c4904c03d6e220c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_caa5e25df74c841e2d839a8884146d1ea71ae58aa713d7c4c4904c03d6e220c2->enter($__internal_caa5e25df74c841e2d839a8884146d1ea71ae58aa713d7c4c4904c03d6e220c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d9bbfac352591e8d8311f71e72cd8daf3e5640a66680897c8aa6ddbbc6b2496b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9bbfac352591e8d8311f71e72cd8daf3e5640a66680897c8aa6ddbbc6b2496b->enter($__internal_d9bbfac352591e8d8311f71e72cd8daf3e5640a66680897c8aa6ddbbc6b2496b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Ingredient creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ingredient_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_d9bbfac352591e8d8311f71e72cd8daf3e5640a66680897c8aa6ddbbc6b2496b->leave($__internal_d9bbfac352591e8d8311f71e72cd8daf3e5640a66680897c8aa6ddbbc6b2496b_prof);

        
        $__internal_caa5e25df74c841e2d839a8884146d1ea71ae58aa713d7c4c4904c03d6e220c2->leave($__internal_caa5e25df74c841e2d839a8884146d1ea71ae58aa713d7c4c4904c03d6e220c2_prof);

    }

    public function getTemplateName()
    {
        return "ingredient/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Ingredient creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('ingredient_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "ingredient/new.html.twig", "/home/kamil/Dokumenty/studia/cookbook/app/Resources/views/ingredient/new.html.twig");
    }
}
