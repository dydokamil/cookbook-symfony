<?php

/* ingredienttype/new.html.twig */
class __TwigTemplate_8401087bbd05054a010bf854b4ddf3dc1e79f8467787edf60e0744344fa79e78 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ingredienttype/new.html.twig", 1);
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
        $__internal_178d3feed72592500da24319a3b10c52a1ef9146478448e170402d6a8ef4b2ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_178d3feed72592500da24319a3b10c52a1ef9146478448e170402d6a8ef4b2ec->enter($__internal_178d3feed72592500da24319a3b10c52a1ef9146478448e170402d6a8ef4b2ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ingredienttype/new.html.twig"));

        $__internal_1f2d952b0ba64f503f757bd9271fb96a687f8c29434664874233321a7daca2d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f2d952b0ba64f503f757bd9271fb96a687f8c29434664874233321a7daca2d9->enter($__internal_1f2d952b0ba64f503f757bd9271fb96a687f8c29434664874233321a7daca2d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ingredienttype/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_178d3feed72592500da24319a3b10c52a1ef9146478448e170402d6a8ef4b2ec->leave($__internal_178d3feed72592500da24319a3b10c52a1ef9146478448e170402d6a8ef4b2ec_prof);

        
        $__internal_1f2d952b0ba64f503f757bd9271fb96a687f8c29434664874233321a7daca2d9->leave($__internal_1f2d952b0ba64f503f757bd9271fb96a687f8c29434664874233321a7daca2d9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b92376a3b0ced158bf7e0ff91bba1c088fb97e579be26bfaf2850128bbee9191 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b92376a3b0ced158bf7e0ff91bba1c088fb97e579be26bfaf2850128bbee9191->enter($__internal_b92376a3b0ced158bf7e0ff91bba1c088fb97e579be26bfaf2850128bbee9191_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bda864de83c0016b6ce5b3884a7313b81d7ea9526a0a0a4643889ba99715e168 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bda864de83c0016b6ce5b3884a7313b81d7ea9526a0a0a4643889ba99715e168->enter($__internal_bda864de83c0016b6ce5b3884a7313b81d7ea9526a0a0a4643889ba99715e168_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Ingredienttype creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ingredienttype_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_bda864de83c0016b6ce5b3884a7313b81d7ea9526a0a0a4643889ba99715e168->leave($__internal_bda864de83c0016b6ce5b3884a7313b81d7ea9526a0a0a4643889ba99715e168_prof);

        
        $__internal_b92376a3b0ced158bf7e0ff91bba1c088fb97e579be26bfaf2850128bbee9191->leave($__internal_b92376a3b0ced158bf7e0ff91bba1c088fb97e579be26bfaf2850128bbee9191_prof);

    }

    public function getTemplateName()
    {
        return "ingredienttype/new.html.twig";
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
    <h1>Ingredienttype creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('ingredienttype_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "ingredienttype/new.html.twig", "/home/kamil/symfony_projects/cookbook-symfony/app/Resources/views/ingredienttype/new.html.twig");
    }
}
