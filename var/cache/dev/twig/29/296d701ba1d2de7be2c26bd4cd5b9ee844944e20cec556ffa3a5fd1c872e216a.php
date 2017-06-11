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
        $__internal_d9281e19d88d4e23aa110c36348dcfd8d1a15e7d1ae34258e4020f84779528f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9281e19d88d4e23aa110c36348dcfd8d1a15e7d1ae34258e4020f84779528f8->enter($__internal_d9281e19d88d4e23aa110c36348dcfd8d1a15e7d1ae34258e4020f84779528f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "recipestep/new.html.twig"));

        $__internal_6c7a33c6dd42eda6ffab0088a3047f4babdd4569c7e450c7373cc5a66e72fa68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c7a33c6dd42eda6ffab0088a3047f4babdd4569c7e450c7373cc5a66e72fa68->enter($__internal_6c7a33c6dd42eda6ffab0088a3047f4babdd4569c7e450c7373cc5a66e72fa68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "recipestep/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d9281e19d88d4e23aa110c36348dcfd8d1a15e7d1ae34258e4020f84779528f8->leave($__internal_d9281e19d88d4e23aa110c36348dcfd8d1a15e7d1ae34258e4020f84779528f8_prof);

        
        $__internal_6c7a33c6dd42eda6ffab0088a3047f4babdd4569c7e450c7373cc5a66e72fa68->leave($__internal_6c7a33c6dd42eda6ffab0088a3047f4babdd4569c7e450c7373cc5a66e72fa68_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_bfe905a4b8818d62f9a7262a0c46e881364712e64861f5feed2a9403ffc13a70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfe905a4b8818d62f9a7262a0c46e881364712e64861f5feed2a9403ffc13a70->enter($__internal_bfe905a4b8818d62f9a7262a0c46e881364712e64861f5feed2a9403ffc13a70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_399bdaa1ce2403493174aa552fe7a5b5f1a1bc8eebc43e6c40e636f034b50e38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_399bdaa1ce2403493174aa552fe7a5b5f1a1bc8eebc43e6c40e636f034b50e38->enter($__internal_399bdaa1ce2403493174aa552fe7a5b5f1a1bc8eebc43e6c40e636f034b50e38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        <input class='btn btn-success' type=\"submit\" value=\"Utwórz\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <ul class='list-unstyled'>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recipestep_index");
        echo "\">Powrót do listy</a>
        </li>
    </ul>
";
        
        $__internal_399bdaa1ce2403493174aa552fe7a5b5f1a1bc8eebc43e6c40e636f034b50e38->leave($__internal_399bdaa1ce2403493174aa552fe7a5b5f1a1bc8eebc43e6c40e636f034b50e38_prof);

        
        $__internal_bfe905a4b8818d62f9a7262a0c46e881364712e64861f5feed2a9403ffc13a70->leave($__internal_bfe905a4b8818d62f9a7262a0c46e881364712e64861f5feed2a9403ffc13a70_prof);

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
        <input class='btn btn-success' type=\"submit\" value=\"Utwórz\" />
    {{ form_end(form) }}

    <ul class='list-unstyled'>
        <li>
            <a href=\"{{ path('recipestep_index') }}\">Powrót do listy</a>
        </li>
    </ul>
{% endblock %}
", "recipestep/new.html.twig", "/home/kamil/Dokumenty/studia/cookbook-symfony/app/Resources/views/recipestep/new.html.twig");
    }
}
