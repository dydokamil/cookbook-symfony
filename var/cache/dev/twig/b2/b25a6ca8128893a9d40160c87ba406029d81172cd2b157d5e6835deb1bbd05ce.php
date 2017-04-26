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
        $__internal_b6f56efe2d0c47734e31f8d514e7284e8967696f46febb845d6c37f5017492b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6f56efe2d0c47734e31f8d514e7284e8967696f46febb845d6c37f5017492b2->enter($__internal_b6f56efe2d0c47734e31f8d514e7284e8967696f46febb845d6c37f5017492b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "recipe/show.html.twig"));

        $__internal_dad9b71c6eaa1d079d0f259642c41bc16018bbabfb7de3cf4ce6797a013f1528 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dad9b71c6eaa1d079d0f259642c41bc16018bbabfb7de3cf4ce6797a013f1528->enter($__internal_dad9b71c6eaa1d079d0f259642c41bc16018bbabfb7de3cf4ce6797a013f1528_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "recipe/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b6f56efe2d0c47734e31f8d514e7284e8967696f46febb845d6c37f5017492b2->leave($__internal_b6f56efe2d0c47734e31f8d514e7284e8967696f46febb845d6c37f5017492b2_prof);

        
        $__internal_dad9b71c6eaa1d079d0f259642c41bc16018bbabfb7de3cf4ce6797a013f1528->leave($__internal_dad9b71c6eaa1d079d0f259642c41bc16018bbabfb7de3cf4ce6797a013f1528_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1400622e5ab985dc4f5bd7022a1b03153f50eb62e93d433751daaa7f137eec63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1400622e5ab985dc4f5bd7022a1b03153f50eb62e93d433751daaa7f137eec63->enter($__internal_1400622e5ab985dc4f5bd7022a1b03153f50eb62e93d433751daaa7f137eec63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d9dbce7264b83c0da981de16a5094a98be0697892c98ab2c288a0ea398cf7e8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9dbce7264b83c0da981de16a5094a98be0697892c98ab2c288a0ea398cf7e8c->enter($__internal_d9dbce7264b83c0da981de16a5094a98be0697892c98ab2c288a0ea398cf7e8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Recipe</h1>

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
                <th>Name</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["recipe"] ?? $this->getContext($context, "recipe")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
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
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recipe_edit", array("id" => $this->getAttribute(($context["recipe"] ?? $this->getContext($context, "recipe")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
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
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 36
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_d9dbce7264b83c0da981de16a5094a98be0697892c98ab2c288a0ea398cf7e8c->leave($__internal_d9dbce7264b83c0da981de16a5094a98be0697892c98ab2c288a0ea398cf7e8c_prof);

        
        $__internal_1400622e5ab985dc4f5bd7022a1b03153f50eb62e93d433751daaa7f137eec63->leave($__internal_1400622e5ab985dc4f5bd7022a1b03153f50eb62e93d433751daaa7f137eec63_prof);

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
        return array (  104 => 36,  99 => 34,  93 => 31,  87 => 28,  81 => 25,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Recipe</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ recipe.id }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ recipe.name }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ recipe.description }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('recipe_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('recipe_edit', { 'id': recipe.id }) }}\">Edit</a>
        </li>
        <li>
            <a href=\"{{ path('recipestep_new', { 'recipe': recipe.id }) }}\">Dodaj krok</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "recipe/show.html.twig", "/home/kamil/symfony_projects/cookbook-symfony/app/Resources/views/recipe/show.html.twig");
    }
}
