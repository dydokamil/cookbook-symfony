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
        $__internal_6a4f6cb597bcd388688a70f0909ae696aa41d3e0b5066a4a415afe1688f7192e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a4f6cb597bcd388688a70f0909ae696aa41d3e0b5066a4a415afe1688f7192e->enter($__internal_6a4f6cb597bcd388688a70f0909ae696aa41d3e0b5066a4a415afe1688f7192e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ingredient/new.html.twig"));

        $__internal_8de8715e71b784fb9d628c4b520b1aeaa75fdbce15c8ff544440380168eaaf8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8de8715e71b784fb9d628c4b520b1aeaa75fdbce15c8ff544440380168eaaf8f->enter($__internal_8de8715e71b784fb9d628c4b520b1aeaa75fdbce15c8ff544440380168eaaf8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ingredient/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a4f6cb597bcd388688a70f0909ae696aa41d3e0b5066a4a415afe1688f7192e->leave($__internal_6a4f6cb597bcd388688a70f0909ae696aa41d3e0b5066a4a415afe1688f7192e_prof);

        
        $__internal_8de8715e71b784fb9d628c4b520b1aeaa75fdbce15c8ff544440380168eaaf8f->leave($__internal_8de8715e71b784fb9d628c4b520b1aeaa75fdbce15c8ff544440380168eaaf8f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ae9e0a01a890b0484618cb9112d3da63b56d35b20aba7f69490cad293dd0be86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae9e0a01a890b0484618cb9112d3da63b56d35b20aba7f69490cad293dd0be86->enter($__internal_ae9e0a01a890b0484618cb9112d3da63b56d35b20aba7f69490cad293dd0be86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8198080438c7b447f9991725312bc2bf0f5021672a8feb7941c38c3442c88d29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8198080438c7b447f9991725312bc2bf0f5021672a8feb7941c38c3442c88d29->enter($__internal_8198080438c7b447f9991725312bc2bf0f5021672a8feb7941c38c3442c88d29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_8198080438c7b447f9991725312bc2bf0f5021672a8feb7941c38c3442c88d29->leave($__internal_8198080438c7b447f9991725312bc2bf0f5021672a8feb7941c38c3442c88d29_prof);

        
        $__internal_ae9e0a01a890b0484618cb9112d3da63b56d35b20aba7f69490cad293dd0be86->leave($__internal_ae9e0a01a890b0484618cb9112d3da63b56d35b20aba7f69490cad293dd0be86_prof);

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
", "ingredient/new.html.twig", "/home/kamil/symfony_projects/cookbook-symfony/app/Resources/views/ingredient/new.html.twig");
    }
}
