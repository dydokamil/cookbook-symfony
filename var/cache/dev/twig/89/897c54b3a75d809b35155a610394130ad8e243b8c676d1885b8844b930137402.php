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
        $__internal_0a32a9310a87b44ff66859786952c8d3b399dba201e0a2c5fb79e7d8d08e9d5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a32a9310a87b44ff66859786952c8d3b399dba201e0a2c5fb79e7d8d08e9d5f->enter($__internal_0a32a9310a87b44ff66859786952c8d3b399dba201e0a2c5fb79e7d8d08e9d5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ingredient/new.html.twig"));

        $__internal_c91e3cc758762b4b6cacf302cfa062bbd5e6c112b2b7aeaac30687f21d1dc196 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c91e3cc758762b4b6cacf302cfa062bbd5e6c112b2b7aeaac30687f21d1dc196->enter($__internal_c91e3cc758762b4b6cacf302cfa062bbd5e6c112b2b7aeaac30687f21d1dc196_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ingredient/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a32a9310a87b44ff66859786952c8d3b399dba201e0a2c5fb79e7d8d08e9d5f->leave($__internal_0a32a9310a87b44ff66859786952c8d3b399dba201e0a2c5fb79e7d8d08e9d5f_prof);

        
        $__internal_c91e3cc758762b4b6cacf302cfa062bbd5e6c112b2b7aeaac30687f21d1dc196->leave($__internal_c91e3cc758762b4b6cacf302cfa062bbd5e6c112b2b7aeaac30687f21d1dc196_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_750dc0586cef82e686cf83f55cf2bb43052441a7e6e547b58cb717cfa09a7911 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_750dc0586cef82e686cf83f55cf2bb43052441a7e6e547b58cb717cfa09a7911->enter($__internal_750dc0586cef82e686cf83f55cf2bb43052441a7e6e547b58cb717cfa09a7911_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_74f095c4c22a58811e1f0ab55a5b7431e29f6248bff2bdba0133d5ef954910d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74f095c4c22a58811e1f0ab55a5b7431e29f6248bff2bdba0133d5ef954910d4->enter($__internal_74f095c4c22a58811e1f0ab55a5b7431e29f6248bff2bdba0133d5ef954910d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_74f095c4c22a58811e1f0ab55a5b7431e29f6248bff2bdba0133d5ef954910d4->leave($__internal_74f095c4c22a58811e1f0ab55a5b7431e29f6248bff2bdba0133d5ef954910d4_prof);

        
        $__internal_750dc0586cef82e686cf83f55cf2bb43052441a7e6e547b58cb717cfa09a7911->leave($__internal_750dc0586cef82e686cf83f55cf2bb43052441a7e6e547b58cb717cfa09a7911_prof);

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
