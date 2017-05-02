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
        $__internal_f9961378098ef8f59363d21870390c42d7753d3c83817bc2871b85644702df26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9961378098ef8f59363d21870390c42d7753d3c83817bc2871b85644702df26->enter($__internal_f9961378098ef8f59363d21870390c42d7753d3c83817bc2871b85644702df26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ingredient/new.html.twig"));

        $__internal_71cf1424bfb8d0a8fcb81a58514593f53e8949e7e2cca674a15f521e6f275cbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71cf1424bfb8d0a8fcb81a58514593f53e8949e7e2cca674a15f521e6f275cbb->enter($__internal_71cf1424bfb8d0a8fcb81a58514593f53e8949e7e2cca674a15f521e6f275cbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ingredient/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f9961378098ef8f59363d21870390c42d7753d3c83817bc2871b85644702df26->leave($__internal_f9961378098ef8f59363d21870390c42d7753d3c83817bc2871b85644702df26_prof);

        
        $__internal_71cf1424bfb8d0a8fcb81a58514593f53e8949e7e2cca674a15f521e6f275cbb->leave($__internal_71cf1424bfb8d0a8fcb81a58514593f53e8949e7e2cca674a15f521e6f275cbb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_797e2d7699df9a35e82ed696893ca8753de3d1255f330eb12e78d541893909de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_797e2d7699df9a35e82ed696893ca8753de3d1255f330eb12e78d541893909de->enter($__internal_797e2d7699df9a35e82ed696893ca8753de3d1255f330eb12e78d541893909de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_769a90bd1a684ae84ae559b4fa4758f2aebfc1ee8b10fcc39ece1f9504c3220a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_769a90bd1a684ae84ae559b4fa4758f2aebfc1ee8b10fcc39ece1f9504c3220a->enter($__internal_769a90bd1a684ae84ae559b4fa4758f2aebfc1ee8b10fcc39ece1f9504c3220a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_769a90bd1a684ae84ae559b4fa4758f2aebfc1ee8b10fcc39ece1f9504c3220a->leave($__internal_769a90bd1a684ae84ae559b4fa4758f2aebfc1ee8b10fcc39ece1f9504c3220a_prof);

        
        $__internal_797e2d7699df9a35e82ed696893ca8753de3d1255f330eb12e78d541893909de->leave($__internal_797e2d7699df9a35e82ed696893ca8753de3d1255f330eb12e78d541893909de_prof);

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
