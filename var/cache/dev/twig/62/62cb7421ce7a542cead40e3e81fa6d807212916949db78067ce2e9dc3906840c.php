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
        $__internal_d00627bafb08f4c21c473e2ca72472ab7c1968d374f261f36b47142c080fe98e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d00627bafb08f4c21c473e2ca72472ab7c1968d374f261f36b47142c080fe98e->enter($__internal_d00627bafb08f4c21c473e2ca72472ab7c1968d374f261f36b47142c080fe98e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "recipe/new.html.twig"));

        $__internal_502b1e491fa2785a03c3700ba14edeed98e3292ecc322ba7ec1d916bc9d4c617 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_502b1e491fa2785a03c3700ba14edeed98e3292ecc322ba7ec1d916bc9d4c617->enter($__internal_502b1e491fa2785a03c3700ba14edeed98e3292ecc322ba7ec1d916bc9d4c617_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "recipe/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d00627bafb08f4c21c473e2ca72472ab7c1968d374f261f36b47142c080fe98e->leave($__internal_d00627bafb08f4c21c473e2ca72472ab7c1968d374f261f36b47142c080fe98e_prof);

        
        $__internal_502b1e491fa2785a03c3700ba14edeed98e3292ecc322ba7ec1d916bc9d4c617->leave($__internal_502b1e491fa2785a03c3700ba14edeed98e3292ecc322ba7ec1d916bc9d4c617_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f06fc500e98725fa0565de4c257bf31aba0279b211792b6b36b9abb550441a01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f06fc500e98725fa0565de4c257bf31aba0279b211792b6b36b9abb550441a01->enter($__internal_f06fc500e98725fa0565de4c257bf31aba0279b211792b6b36b9abb550441a01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2fa5fefbb7b3e4a86f9cc2485a57c837fec136cfa45d5a823c266ec41a7713b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fa5fefbb7b3e4a86f9cc2485a57c837fec136cfa45d5a823c266ec41a7713b3->enter($__internal_2fa5fefbb7b3e4a86f9cc2485a57c837fec136cfa45d5a823c266ec41a7713b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2fa5fefbb7b3e4a86f9cc2485a57c837fec136cfa45d5a823c266ec41a7713b3->leave($__internal_2fa5fefbb7b3e4a86f9cc2485a57c837fec136cfa45d5a823c266ec41a7713b3_prof);

        
        $__internal_f06fc500e98725fa0565de4c257bf31aba0279b211792b6b36b9abb550441a01->leave($__internal_f06fc500e98725fa0565de4c257bf31aba0279b211792b6b36b9abb550441a01_prof);

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
