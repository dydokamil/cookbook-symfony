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
        $__internal_b06954d4c312ea589fa72298f9942c09120fc39ea9bae615eeffa0ce11f03a88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b06954d4c312ea589fa72298f9942c09120fc39ea9bae615eeffa0ce11f03a88->enter($__internal_b06954d4c312ea589fa72298f9942c09120fc39ea9bae615eeffa0ce11f03a88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "recipe/show.html.twig"));

        $__internal_f7ad36fbedfbbc5147e23afa1040d518cc11c8f6d25565f8600d9a9eea9a5e63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7ad36fbedfbbc5147e23afa1040d518cc11c8f6d25565f8600d9a9eea9a5e63->enter($__internal_f7ad36fbedfbbc5147e23afa1040d518cc11c8f6d25565f8600d9a9eea9a5e63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "recipe/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b06954d4c312ea589fa72298f9942c09120fc39ea9bae615eeffa0ce11f03a88->leave($__internal_b06954d4c312ea589fa72298f9942c09120fc39ea9bae615eeffa0ce11f03a88_prof);

        
        $__internal_f7ad36fbedfbbc5147e23afa1040d518cc11c8f6d25565f8600d9a9eea9a5e63->leave($__internal_f7ad36fbedfbbc5147e23afa1040d518cc11c8f6d25565f8600d9a9eea9a5e63_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cdec41c3f42a3ccf171e06347f65cd4f79018071cdd7eeb5672b07afbab6dfd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdec41c3f42a3ccf171e06347f65cd4f79018071cdd7eeb5672b07afbab6dfd0->enter($__internal_cdec41c3f42a3ccf171e06347f65cd4f79018071cdd7eeb5672b07afbab6dfd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a42196ae6b68037517d870c3935d5b9729746be6ce57c00cbad4c8b1204abdd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a42196ae6b68037517d870c3935d5b9729746be6ce57c00cbad4c8b1204abdd3->enter($__internal_a42196ae6b68037517d870c3935d5b9729746be6ce57c00cbad4c8b1204abdd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class='row'>
    <div class='col-md-3'>
        <a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recipe_edit", array("id" => $this->getAttribute(($context["recipe"] ?? $this->getContext($context, "recipe")), "id", array()))), "html", null, true);
        echo "\"><img width=100% src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/img/"), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute(($context["recipe"] ?? $this->getContext($context, "recipe")), "icon", array()), "html", null, true);
        echo "\" class=\"gallery-thumb\"></a>
    </div>
    <div class='col-md-9'>
        <h1>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["recipe"] ?? $this->getContext($context, "recipe")), "name", array()), "html", null, true);
        echo "</h1>
        <h3>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["recipe"] ?? $this->getContext($context, "recipe")), "description", array()), "html", null, true);
        echo "</h3>
    </div>
    </div>
    ";
        // line 34
        echo "
    <h1>Lista kroków</h1>
    <div class=\"col-md-9\">
        <table class='table'>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Preptime</th>
                    <th>Number</th>
                    <th>Instructions</th>
                    <th>Cooktime</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["recipeSteps"] ?? $this->getContext($context, "recipeSteps")));
        foreach ($context['_seq'] as $context["_key"] => $context["recipeStep"]) {
            // line 50
            echo "                    <tr>
                        <td><a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recipestep_show", array("id" => $this->getAttribute($context["recipeStep"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["recipeStep"], "id", array()), "html", null, true);
            echo "</a></td>
                        <td>";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["recipeStep"], "prepTime", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["recipeStep"], "number", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["recipeStep"], "instructions", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["recipeStep"], "cookTime", array()), "html", null, true);
            echo "</td>
                        <td>
                            <ul>
                                <li>
                                    <a href=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recipestep_show", array("id" => $this->getAttribute($context["recipeStep"], "id", array()))), "html", null, true);
            echo "\">show</a>
                                </li>
                                <li>
                                    <a href=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recipestep_edit", array("id" => $this->getAttribute($context["recipeStep"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                                </li>
                            </ul>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recipeStep'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "            </tbody>
        </table>
    </div>

    <div class=\"col-md-3\">
        <table class=\"table table-bordered\">
            <thead>
                <tr>
                    <th>Produkty</th>
                </tr>
                <tbody>
                    ";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["joins"] ?? $this->getContext($context, "joins")));
        foreach ($context['_seq'] as $context["_key"] => $context["join"]) {
            // line 80
            echo "                        <tr>
                            <td>";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute($context["join"], "amount", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["join"], "type", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["join"], "ingredient", array()), "html", null, true);
            echo "</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['join'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "                </tbody>
        </table>
    </div>

";
        
        $__internal_a42196ae6b68037517d870c3935d5b9729746be6ce57c00cbad4c8b1204abdd3->leave($__internal_a42196ae6b68037517d870c3935d5b9729746be6ce57c00cbad4c8b1204abdd3_prof);

        
        $__internal_cdec41c3f42a3ccf171e06347f65cd4f79018071cdd7eeb5672b07afbab6dfd0->leave($__internal_cdec41c3f42a3ccf171e06347f65cd4f79018071cdd7eeb5672b07afbab6dfd0_prof);

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
        return array (  172 => 84,  159 => 81,  156 => 80,  152 => 79,  139 => 68,  127 => 62,  121 => 59,  114 => 55,  110 => 54,  106 => 53,  102 => 52,  96 => 51,  93 => 50,  89 => 49,  72 => 34,  66 => 10,  62 => 9,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <div class='row'>
    <div class='col-md-3'>
        <a href=\"{{ path('recipe_edit', { 'id': recipe.id }) }}\"><img width=100% src=\"{{ asset('uploads/img/') }}{{recipe.icon}}\" class=\"gallery-thumb\"></a>
    </div>
    <div class='col-md-9'>
        <h1>{{ recipe.name }}</h1>
        <h3>{{ recipe.description }}</h3>
    </div>
    </div>
    {# <table>
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
    </table> #}

    <h1>Lista kroków</h1>
    <div class=\"col-md-9\">
        <table class='table'>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Preptime</th>
                    <th>Number</th>
                    <th>Instructions</th>
                    <th>Cooktime</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                {% for recipeStep in recipeSteps %}
                    <tr>
                        <td><a href=\"{{ path('recipestep_show', { 'id': recipeStep.id }) }}\">{{ recipeStep.id }}</a></td>
                        <td>{{ recipeStep.prepTime }}</td>
                        <td>{{ recipeStep.number }}</td>
                        <td>{{ recipeStep.instructions }}</td>
                        <td>{{ recipeStep.cookTime }}</td>
                        <td>
                            <ul>
                                <li>
                                    <a href=\"{{ path('recipestep_show', { 'id': recipeStep.id }) }}\">show</a>
                                </li>
                                <li>
                                    <a href=\"{{ path('recipestep_edit', { 'id': recipeStep.id }) }}\">edit</a>
                                </li>
                            </ul>
                        </td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    </div>

    <div class=\"col-md-3\">
        <table class=\"table table-bordered\">
            <thead>
                <tr>
                    <th>Produkty</th>
                </tr>
                <tbody>
                    {% for join in joins %}
                        <tr>
                            <td>{{ join.amount }} {{ join.type }} {{ join.ingredient }}</td>
                        </tr>
                    {% endfor %}
                </tbody>
        </table>
    </div>

{% endblock %}
", "recipe/show.html.twig", "/home/kamil/symfony_projects/cookbook-symfony/app/Resources/views/recipe/show.html.twig");
    }
}
