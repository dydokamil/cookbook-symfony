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
        $__internal_4dd2a92acd026545212d86b43c9614000cdf8b4af7987ec8135472632f8d7fd9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4dd2a92acd026545212d86b43c9614000cdf8b4af7987ec8135472632f8d7fd9->enter($__internal_4dd2a92acd026545212d86b43c9614000cdf8b4af7987ec8135472632f8d7fd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ingredienttype/new.html.twig"));

        $__internal_f78ce3164cb0a008dbac3bbba43c6216d73434a82d204c24c18e66590ea0996a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f78ce3164cb0a008dbac3bbba43c6216d73434a82d204c24c18e66590ea0996a->enter($__internal_f78ce3164cb0a008dbac3bbba43c6216d73434a82d204c24c18e66590ea0996a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ingredienttype/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4dd2a92acd026545212d86b43c9614000cdf8b4af7987ec8135472632f8d7fd9->leave($__internal_4dd2a92acd026545212d86b43c9614000cdf8b4af7987ec8135472632f8d7fd9_prof);

        
        $__internal_f78ce3164cb0a008dbac3bbba43c6216d73434a82d204c24c18e66590ea0996a->leave($__internal_f78ce3164cb0a008dbac3bbba43c6216d73434a82d204c24c18e66590ea0996a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1b6cab362bfdb5847d3ff2979b7b2fffeb03a8c3c1319bd0888d49a803878da9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b6cab362bfdb5847d3ff2979b7b2fffeb03a8c3c1319bd0888d49a803878da9->enter($__internal_1b6cab362bfdb5847d3ff2979b7b2fffeb03a8c3c1319bd0888d49a803878da9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_29547dd96f6f707ab9bbfc25967e5d68e8a5db56e5ad714dd2d0ed649aadfa93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29547dd96f6f707ab9bbfc25967e5d68e8a5db56e5ad714dd2d0ed649aadfa93->enter($__internal_29547dd96f6f707ab9bbfc25967e5d68e8a5db56e5ad714dd2d0ed649aadfa93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_29547dd96f6f707ab9bbfc25967e5d68e8a5db56e5ad714dd2d0ed649aadfa93->leave($__internal_29547dd96f6f707ab9bbfc25967e5d68e8a5db56e5ad714dd2d0ed649aadfa93_prof);

        
        $__internal_1b6cab362bfdb5847d3ff2979b7b2fffeb03a8c3c1319bd0888d49a803878da9->leave($__internal_1b6cab362bfdb5847d3ff2979b7b2fffeb03a8c3c1319bd0888d49a803878da9_prof);

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
", "ingredienttype/new.html.twig", "/home/kamil/Dokumenty/studia/cookbook/app/Resources/views/ingredienttype/new.html.twig");
    }
}
