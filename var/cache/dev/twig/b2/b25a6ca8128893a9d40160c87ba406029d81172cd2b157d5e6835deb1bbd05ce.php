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
        $__internal_b5f5a9d03552c3d514ee9115a854b2805b8e1ac7d6a0b3a5d649111fec9be4ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5f5a9d03552c3d514ee9115a854b2805b8e1ac7d6a0b3a5d649111fec9be4ed->enter($__internal_b5f5a9d03552c3d514ee9115a854b2805b8e1ac7d6a0b3a5d649111fec9be4ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "recipe/show.html.twig"));

        $__internal_9d12d54c9064ef0163de9e8eca33f077db886eb46108aac903a8cb40c7465dfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d12d54c9064ef0163de9e8eca33f077db886eb46108aac903a8cb40c7465dfb->enter($__internal_9d12d54c9064ef0163de9e8eca33f077db886eb46108aac903a8cb40c7465dfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "recipe/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b5f5a9d03552c3d514ee9115a854b2805b8e1ac7d6a0b3a5d649111fec9be4ed->leave($__internal_b5f5a9d03552c3d514ee9115a854b2805b8e1ac7d6a0b3a5d649111fec9be4ed_prof);

        
        $__internal_9d12d54c9064ef0163de9e8eca33f077db886eb46108aac903a8cb40c7465dfb->leave($__internal_9d12d54c9064ef0163de9e8eca33f077db886eb46108aac903a8cb40c7465dfb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_baaa6dc18e8ddb7148f8059606f0ca1f49a17f306545c006c28f4a483703c57f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_baaa6dc18e8ddb7148f8059606f0ca1f49a17f306545c006c28f4a483703c57f->enter($__internal_baaa6dc18e8ddb7148f8059606f0ca1f49a17f306545c006c28f4a483703c57f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_556c5a9d5fc3c78db71689dc9905bb9547deea212f9f0bcf7947aa764ce7a5ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_556c5a9d5fc3c78db71689dc9905bb9547deea212f9f0bcf7947aa764ce7a5ad->enter($__internal_556c5a9d5fc3c78db71689dc9905bb9547deea212f9f0bcf7947aa764ce7a5ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            <tr>
                <th>Icon</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["recipe"] ?? $this->getContext($context, "recipe")), "icon", array()), "html", null, true);
        echo "</td>
                <img height=32 width=32 src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/img/"), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute(($context["recipe"] ?? $this->getContext($context, "recipe")), "icon", array()), "html", null, true);
        echo "\" class=\"gallery-thumb\">
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recipe_index");
        echo "\">Powrót do listy</a>
        </li>
        <li>
            <a href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recipe_edit", array("id" => $this->getAttribute(($context["recipe"] ?? $this->getContext($context, "recipe")), "id", array()))), "html", null, true);
        echo "\">Edytuj</a>
        </li>
        <li>
            <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recipestep_new", array("recipe" => $this->getAttribute(($context["recipe"] ?? $this->getContext($context, "recipe")), "id", array()))), "html", null, true);
        echo "\">Dodaj krok</a>
        </li>
        <li>
            ";
        // line 39
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
            ";
        // line 41
        echo "                <input type=\"submit\" value=\"Usuń\">
            ";
        // line 42
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_556c5a9d5fc3c78db71689dc9905bb9547deea212f9f0bcf7947aa764ce7a5ad->leave($__internal_556c5a9d5fc3c78db71689dc9905bb9547deea212f9f0bcf7947aa764ce7a5ad_prof);

        
        $__internal_baaa6dc18e8ddb7148f8059606f0ca1f49a17f306545c006c28f4a483703c57f->leave($__internal_baaa6dc18e8ddb7148f8059606f0ca1f49a17f306545c006c28f4a483703c57f_prof);

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
        return array (  118 => 42,  115 => 41,  111 => 39,  105 => 36,  99 => 33,  93 => 30,  82 => 23,  78 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
            <tr>
                <th>Icon</th>
                <td>{{ recipe.icon }}</td>
                <img height=32 width=32 src=\"{{ asset('uploads/img/') }}{{recipe.icon}}\" class=\"gallery-thumb\">
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
", "recipe/show.html.twig", "/home/kamil/symfony_projects/cookbook-symfony/app/Resources/views/recipe/show.html.twig");
    }
}
