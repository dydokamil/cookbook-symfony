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
        $__internal_6068ac19fdd02377fd4991a635cad35e0b5c3d7c1730c834b2c0fdbf0a741604 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6068ac19fdd02377fd4991a635cad35e0b5c3d7c1730c834b2c0fdbf0a741604->enter($__internal_6068ac19fdd02377fd4991a635cad35e0b5c3d7c1730c834b2c0fdbf0a741604_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ingredient/new.html.twig"));

        $__internal_6cff6cb80a22a8b4727358107046c20631951abe6ba75d7ffd3885f02c7b7f27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cff6cb80a22a8b4727358107046c20631951abe6ba75d7ffd3885f02c7b7f27->enter($__internal_6cff6cb80a22a8b4727358107046c20631951abe6ba75d7ffd3885f02c7b7f27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ingredient/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6068ac19fdd02377fd4991a635cad35e0b5c3d7c1730c834b2c0fdbf0a741604->leave($__internal_6068ac19fdd02377fd4991a635cad35e0b5c3d7c1730c834b2c0fdbf0a741604_prof);

        
        $__internal_6cff6cb80a22a8b4727358107046c20631951abe6ba75d7ffd3885f02c7b7f27->leave($__internal_6cff6cb80a22a8b4727358107046c20631951abe6ba75d7ffd3885f02c7b7f27_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b22a27bac66a7fc54b68aef641cd969e45e7c005e9ef165650002f3723eadb4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b22a27bac66a7fc54b68aef641cd969e45e7c005e9ef165650002f3723eadb4d->enter($__internal_b22a27bac66a7fc54b68aef641cd969e45e7c005e9ef165650002f3723eadb4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6ab11f9874670a6f9f57c8369d5943771cb1cdf1fa5df00c97df56c958ce3dfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ab11f9874670a6f9f57c8369d5943771cb1cdf1fa5df00c97df56c958ce3dfa->enter($__internal_6ab11f9874670a6f9f57c8369d5943771cb1cdf1fa5df00c97df56c958ce3dfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6ab11f9874670a6f9f57c8369d5943771cb1cdf1fa5df00c97df56c958ce3dfa->leave($__internal_6ab11f9874670a6f9f57c8369d5943771cb1cdf1fa5df00c97df56c958ce3dfa_prof);

        
        $__internal_b22a27bac66a7fc54b68aef641cd969e45e7c005e9ef165650002f3723eadb4d->leave($__internal_b22a27bac66a7fc54b68aef641cd969e45e7c005e9ef165650002f3723eadb4d_prof);

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
", "ingredient/new.html.twig", "/home/kamil/Dokumenty/studia/cookbook-symfony/app/Resources/views/ingredient/new.html.twig");
    }
}
