<?php

/* recipe/show.html.twig */
class __TwigTemplate_b535cdd8be80c26dc80cd264b6d1ef7802bec04b90faa720086a3e510adfac8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "recipe/show.html.twig", 1);
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
        $__internal_6a02fc454913306676bccb305bcb73444ab1cd7aecaef09043ef5cf3e79686e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a02fc454913306676bccb305bcb73444ab1cd7aecaef09043ef5cf3e79686e9->enter($__internal_6a02fc454913306676bccb305bcb73444ab1cd7aecaef09043ef5cf3e79686e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "recipe/show.html.twig"));

        $__internal_5fe162e3fa668416368ec5de837e5b5dc4416a2e2c14eab33c3202becdd83be3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fe162e3fa668416368ec5de837e5b5dc4416a2e2c14eab33c3202becdd83be3->enter($__internal_5fe162e3fa668416368ec5de837e5b5dc4416a2e2c14eab33c3202becdd83be3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "recipe/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a02fc454913306676bccb305bcb73444ab1cd7aecaef09043ef5cf3e79686e9->leave($__internal_6a02fc454913306676bccb305bcb73444ab1cd7aecaef09043ef5cf3e79686e9_prof);

        
        $__internal_5fe162e3fa668416368ec5de837e5b5dc4416a2e2c14eab33c3202becdd83be3->leave($__internal_5fe162e3fa668416368ec5de837e5b5dc4416a2e2c14eab33c3202becdd83be3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4e35976c831669cc2470ba8ccade8cdcadf2afe62ea2cce921dc299ae0be5d9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e35976c831669cc2470ba8ccade8cdcadf2afe62ea2cce921dc299ae0be5d9e->enter($__internal_4e35976c831669cc2470ba8ccade8cdcadf2afe62ea2cce921dc299ae0be5d9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9f2f3b6ceb84f502e88ff5e3ab77b20bd5f73657adaba8b0ed0041124e853ffd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f2f3b6ceb84f502e88ff5e3ab77b20bd5f73657adaba8b0ed0041124e853ffd->enter($__internal_9f2f3b6ceb84f502e88ff5e3ab77b20bd5f73657adaba8b0ed0041124e853ffd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Przepis</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["recipe"] ?? $this->getContext($context, "recipe")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nazwa</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["recipe"] ?? $this->getContext($context, "recipe")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Opis</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["recipe"] ?? $this->getContext($context, "recipe")), "description", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recipe_index");
        echo "\">Powrót do listy</a>
        </li>
        <li>
            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recipe_edit", array("id" => $this->getAttribute(($context["recipe"] ?? $this->getContext($context, "recipe")), "id", array()))), "html", null, true);
        echo "\">Edytuj</a>
        </li>
        <li>
            <a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recipestep_new", array("recipe" => $this->getAttribute(($context["recipe"] ?? $this->getContext($context, "recipe")), "id", array()))), "html", null, true);
        echo "\">Dodaj krok</a>
        </li>
        <li>
            ";
        // line 34
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
            ";
        // line 36
        echo "                <input type=\"submit\" value=\"Usuń\">
            ";
        // line 37
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_9f2f3b6ceb84f502e88ff5e3ab77b20bd5f73657adaba8b0ed0041124e853ffd->leave($__internal_9f2f3b6ceb84f502e88ff5e3ab77b20bd5f73657adaba8b0ed0041124e853ffd_prof);

        
        $__internal_4e35976c831669cc2470ba8ccade8cdcadf2afe62ea2cce921dc299ae0be5d9e->leave($__internal_4e35976c831669cc2470ba8ccade8cdcadf2afe62ea2cce921dc299ae0be5d9e_prof);

    }

    public function getTemplateName()
    {
        return "recipe/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 37,  103 => 36,  99 => 34,  93 => 31,  87 => 28,  81 => 25,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Przepis</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ recipe.id }}</td>
            </tr>
            <tr>
                <th>Nazwa</th>
                <td>{{ recipe.name }}</td>
            </tr>
            <tr>
                <th>Opis</th>
                <td>{{ recipe.description }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('recipe_index') }}\">Powrót do listy</a>
        </li>
        <li>
            <a href=\"{{ path('recipe_edit', { 'id': recipe.id }) }}\">Edytuj</a>
        </li>
        <li>
            <a href=\"{{ path('recipestep_new', { 'recipe': recipe.id }) }}\">Dodaj krok</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
            {# TODO usuwanie wszystkich kroków #}
                <input type=\"submit\" value=\"Usuń\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "recipe/show.html.twig", "/home/kamil/Dokumenty/studia/cookbook/app/Resources/views/recipe/show.html.twig");
    }
}
