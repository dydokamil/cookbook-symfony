<?php

/* recipestep/new.html.twig */
class __TwigTemplate_0198d6f8423dd9b50cd09c175a05b47fd8078f011d7c2bf19dbe486a87fc92f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "recipestep/new.html.twig", 1);
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
        $__internal_b8c3f2402fe105ca2cd0eba1c596f280e7c7e3d94a285d826062654e7d2f6dbb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8c3f2402fe105ca2cd0eba1c596f280e7c7e3d94a285d826062654e7d2f6dbb->enter($__internal_b8c3f2402fe105ca2cd0eba1c596f280e7c7e3d94a285d826062654e7d2f6dbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "recipestep/new.html.twig"));

        $__internal_40fc49fd39afbb9d6521c821ae3fa1e81df93d580630b63db6f2f9ebba615233 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40fc49fd39afbb9d6521c821ae3fa1e81df93d580630b63db6f2f9ebba615233->enter($__internal_40fc49fd39afbb9d6521c821ae3fa1e81df93d580630b63db6f2f9ebba615233_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "recipestep/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b8c3f2402fe105ca2cd0eba1c596f280e7c7e3d94a285d826062654e7d2f6dbb->leave($__internal_b8c3f2402fe105ca2cd0eba1c596f280e7c7e3d94a285d826062654e7d2f6dbb_prof);

        
        $__internal_40fc49fd39afbb9d6521c821ae3fa1e81df93d580630b63db6f2f9ebba615233->leave($__internal_40fc49fd39afbb9d6521c821ae3fa1e81df93d580630b63db6f2f9ebba615233_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cb1eda1410e7513af274c3a33679734063c832034f9f452231eccd5dcc1bc482 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb1eda1410e7513af274c3a33679734063c832034f9f452231eccd5dcc1bc482->enter($__internal_cb1eda1410e7513af274c3a33679734063c832034f9f452231eccd5dcc1bc482_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_39bcd31d8fa0e46de6d7f059b6a9612d22ae0bd4f4e064eb23aa4699fdf81bef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39bcd31d8fa0e46de6d7f059b6a9612d22ae0bd4f4e064eb23aa4699fdf81bef->enter($__internal_39bcd31d8fa0e46de6d7f059b6a9612d22ae0bd4f4e064eb23aa4699fdf81bef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Recipestep creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recipestep_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_39bcd31d8fa0e46de6d7f059b6a9612d22ae0bd4f4e064eb23aa4699fdf81bef->leave($__internal_39bcd31d8fa0e46de6d7f059b6a9612d22ae0bd4f4e064eb23aa4699fdf81bef_prof);

        
        $__internal_cb1eda1410e7513af274c3a33679734063c832034f9f452231eccd5dcc1bc482->leave($__internal_cb1eda1410e7513af274c3a33679734063c832034f9f452231eccd5dcc1bc482_prof);

    }

    public function getTemplateName()
    {
        return "recipestep/new.html.twig";
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
    <h1>Recipestep creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('recipestep_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "recipestep/new.html.twig", "/home/kamil/symfony_projects/cookbook-symfony/app/Resources/views/recipestep/new.html.twig");
    }
}
