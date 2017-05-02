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
        $__internal_e84a93bdf208c167168426f74b354a658394e05e17889531ea709886e112beb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e84a93bdf208c167168426f74b354a658394e05e17889531ea709886e112beb5->enter($__internal_e84a93bdf208c167168426f74b354a658394e05e17889531ea709886e112beb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ingredienttype/new.html.twig"));

        $__internal_1d18e51debba9691a548c05e61546371e26876b0cebc897954d7b6cfb3e56e23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d18e51debba9691a548c05e61546371e26876b0cebc897954d7b6cfb3e56e23->enter($__internal_1d18e51debba9691a548c05e61546371e26876b0cebc897954d7b6cfb3e56e23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ingredienttype/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e84a93bdf208c167168426f74b354a658394e05e17889531ea709886e112beb5->leave($__internal_e84a93bdf208c167168426f74b354a658394e05e17889531ea709886e112beb5_prof);

        
        $__internal_1d18e51debba9691a548c05e61546371e26876b0cebc897954d7b6cfb3e56e23->leave($__internal_1d18e51debba9691a548c05e61546371e26876b0cebc897954d7b6cfb3e56e23_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_66ca7e602c300845499535e6149e1b1ce48886396844c09c11ba2d613af55b2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66ca7e602c300845499535e6149e1b1ce48886396844c09c11ba2d613af55b2e->enter($__internal_66ca7e602c300845499535e6149e1b1ce48886396844c09c11ba2d613af55b2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9a609756df2e99877b9d4aeaf72b142d9e66c93c77a5e76db52871b0aff3b461 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a609756df2e99877b9d4aeaf72b142d9e66c93c77a5e76db52871b0aff3b461->enter($__internal_9a609756df2e99877b9d4aeaf72b142d9e66c93c77a5e76db52871b0aff3b461_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9a609756df2e99877b9d4aeaf72b142d9e66c93c77a5e76db52871b0aff3b461->leave($__internal_9a609756df2e99877b9d4aeaf72b142d9e66c93c77a5e76db52871b0aff3b461_prof);

        
        $__internal_66ca7e602c300845499535e6149e1b1ce48886396844c09c11ba2d613af55b2e->leave($__internal_66ca7e602c300845499535e6149e1b1ce48886396844c09c11ba2d613af55b2e_prof);

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
