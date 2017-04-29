<?php

/* recipe/new.html.twig */
class __TwigTemplate_8163a08655c5ff23ca394f8621e4bfc2df5ba62176edf88eae39a030c18a5691 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "recipe/new.html.twig", 1);
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
        $__internal_73a16c45529e798d7170b71ba22793c909a07932fce26ec38319731cbf33deeb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73a16c45529e798d7170b71ba22793c909a07932fce26ec38319731cbf33deeb->enter($__internal_73a16c45529e798d7170b71ba22793c909a07932fce26ec38319731cbf33deeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "recipe/new.html.twig"));

        $__internal_24c610af34f3db6da57cd914df478aea3915c183a41ee3694983f17f0034b4a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24c610af34f3db6da57cd914df478aea3915c183a41ee3694983f17f0034b4a8->enter($__internal_24c610af34f3db6da57cd914df478aea3915c183a41ee3694983f17f0034b4a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "recipe/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_73a16c45529e798d7170b71ba22793c909a07932fce26ec38319731cbf33deeb->leave($__internal_73a16c45529e798d7170b71ba22793c909a07932fce26ec38319731cbf33deeb_prof);

        
        $__internal_24c610af34f3db6da57cd914df478aea3915c183a41ee3694983f17f0034b4a8->leave($__internal_24c610af34f3db6da57cd914df478aea3915c183a41ee3694983f17f0034b4a8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_83e6a781ef3268f2a2524085c1b878b00b65662ab880704a1a1a7ec14f023008 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83e6a781ef3268f2a2524085c1b878b00b65662ab880704a1a1a7ec14f023008->enter($__internal_83e6a781ef3268f2a2524085c1b878b00b65662ab880704a1a1a7ec14f023008_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e221ab0be280b5d2ce432b83da5d3b73d9360827f0fbb6fd32246151a2c9e352 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e221ab0be280b5d2ce432b83da5d3b73d9360827f0fbb6fd32246151a2c9e352->enter($__internal_e221ab0be280b5d2ce432b83da5d3b73d9360827f0fbb6fd32246151a2c9e352_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Tworzenie przepisu</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Utwórz\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recipe_index");
        echo "\">Powrót do listy</a>
        </li>
    </ul>
";
        
        $__internal_e221ab0be280b5d2ce432b83da5d3b73d9360827f0fbb6fd32246151a2c9e352->leave($__internal_e221ab0be280b5d2ce432b83da5d3b73d9360827f0fbb6fd32246151a2c9e352_prof);

        
        $__internal_83e6a781ef3268f2a2524085c1b878b00b65662ab880704a1a1a7ec14f023008->leave($__internal_83e6a781ef3268f2a2524085c1b878b00b65662ab880704a1a1a7ec14f023008_prof);

    }

    public function getTemplateName()
    {
        return "recipe/new.html.twig";
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
    <h1>Tworzenie przepisu</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Utwórz\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('recipe_index') }}\">Powrót do listy</a>
        </li>
    </ul>
{% endblock %}
", "recipe/new.html.twig", "/home/kamil/Dokumenty/studia/cookbook/app/Resources/views/recipe/new.html.twig");
    }
}
