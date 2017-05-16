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
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_88a80325a8484aa207d83a386c5f28dfefe821002f875ea56755853b6b68ea54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88a80325a8484aa207d83a386c5f28dfefe821002f875ea56755853b6b68ea54->enter($__internal_88a80325a8484aa207d83a386c5f28dfefe821002f875ea56755853b6b68ea54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "recipe/show.html.twig"));

        $__internal_e71e476089d48f63e3393934a927337a544752523baf9194379405da8a9ab05d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e71e476089d48f63e3393934a927337a544752523baf9194379405da8a9ab05d->enter($__internal_e71e476089d48f63e3393934a927337a544752523baf9194379405da8a9ab05d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "recipe/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_88a80325a8484aa207d83a386c5f28dfefe821002f875ea56755853b6b68ea54->leave($__internal_88a80325a8484aa207d83a386c5f28dfefe821002f875ea56755853b6b68ea54_prof);

        
        $__internal_e71e476089d48f63e3393934a927337a544752523baf9194379405da8a9ab05d->leave($__internal_e71e476089d48f63e3393934a927337a544752523baf9194379405da8a9ab05d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ab3853c000e40c3c122fc0d56e87060a70ed43141660e405cb16f0fb9cb793e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab3853c000e40c3c122fc0d56e87060a70ed43141660e405cb16f0fb9cb793e3->enter($__internal_ab3853c000e40c3c122fc0d56e87060a70ed43141660e405cb16f0fb9cb793e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_072d22717a149d19e3a8afd3e73c15996b3ad4da120f17c1fb8685edee1a9ea5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_072d22717a149d19e3a8afd3e73c15996b3ad4da120f17c1fb8685edee1a9ea5->enter($__internal_072d22717a149d19e3a8afd3e73c15996b3ad4da120f17c1fb8685edee1a9ea5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                    ";
        // line 41
        echo "                    <th>Preptime</th>
                    <th>Number</th>
                    <th>Instructions</th>
                    <th>Cooktime</th>
                    ";
        // line 46
        echo "                </tr>
            </thead>
            <tbody>
                ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["recipeSteps"] ?? $this->getContext($context, "recipeSteps")));
        foreach ($context['_seq'] as $context["_key"] => $context["recipeStep"]) {
            // line 50
            echo "                    <tr onmouseover=\"this.bgColor='#eee'\" 
                        onmouseout=\"this.bgColor='#fff'\" 
                        style=\"cursor: pointer;\" 
                        class='clickable-row' 
                        data-href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recipestep_show", array("id" => $this->getAttribute($context["recipeStep"], "id", array()))), "html", null, true);
            echo "\"
                    >

                        ";
            // line 58
            echo "                        <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["recipeStep"], "prepTime", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["recipeStep"], "number", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["recipeStep"], "instructions", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["recipeStep"], "cookTime", array()), "html", null, true);
            echo "</td>
                        ";
            // line 72
            echo "                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recipeStep'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
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
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["joins"] ?? $this->getContext($context, "joins")));
        foreach ($context['_seq'] as $context["_key"] => $context["join"]) {
            // line 86
            echo "                        <tr>
                            <td>";
            // line 87
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
        // line 90
        echo "                </tbody>
        </table>
    </div>
    ";
        // line 93
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_072d22717a149d19e3a8afd3e73c15996b3ad4da120f17c1fb8685edee1a9ea5->leave($__internal_072d22717a149d19e3a8afd3e73c15996b3ad4da120f17c1fb8685edee1a9ea5_prof);

        
        $__internal_ab3853c000e40c3c122fc0d56e87060a70ed43141660e405cb16f0fb9cb793e3->leave($__internal_ab3853c000e40c3c122fc0d56e87060a70ed43141660e405cb16f0fb9cb793e3_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_add1a3a9d1b0d265d87770603fa5f99573a9d561c517f69b8d5eb15a42b89d24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_add1a3a9d1b0d265d87770603fa5f99573a9d561c517f69b8d5eb15a42b89d24->enter($__internal_add1a3a9d1b0d265d87770603fa5f99573a9d561c517f69b8d5eb15a42b89d24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_b7386b124288e26557e33bd3811b7ace2aee1211e8b1ec477fa465bf5b9658e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7386b124288e26557e33bd3811b7ace2aee1211e8b1ec477fa465bf5b9658e6->enter($__internal_b7386b124288e26557e33bd3811b7ace2aee1211e8b1ec477fa465bf5b9658e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 94
        echo "        <script>
        window.onload = function() {
            rows = document.getElementsByClassName('clickable-row');
            for(var i = 0, len = rows.length; i < len; i++) {
                rows[i].onclick = function() { window.location = this.dataset.href };
            }
        };
        function szary(row) {
            row.bgColor = \"#ccc\";
        }
        </script>
    ";
        
        $__internal_b7386b124288e26557e33bd3811b7ace2aee1211e8b1ec477fa465bf5b9658e6->leave($__internal_b7386b124288e26557e33bd3811b7ace2aee1211e8b1ec477fa465bf5b9658e6_prof);

        
        $__internal_add1a3a9d1b0d265d87770603fa5f99573a9d561c517f69b8d5eb15a42b89d24->leave($__internal_add1a3a9d1b0d265d87770603fa5f99573a9d561c517f69b8d5eb15a42b89d24_prof);

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
        return array (  188 => 94,  170 => 93,  165 => 90,  152 => 87,  149 => 86,  145 => 85,  132 => 74,  125 => 72,  121 => 61,  117 => 60,  113 => 59,  108 => 58,  102 => 54,  96 => 50,  92 => 49,  87 => 46,  81 => 41,  73 => 34,  67 => 10,  63 => 9,  54 => 6,  50 => 4,  41 => 3,  11 => 1,);
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
                    {# <th>Id</th> #}
                    <th>Preptime</th>
                    <th>Number</th>
                    <th>Instructions</th>
                    <th>Cooktime</th>
                    {# <th>Actions</th> #}
                </tr>
            </thead>
            <tbody>
                {% for recipeStep in recipeSteps %}
                    <tr onmouseover=\"this.bgColor='#eee'\" 
                        onmouseout=\"this.bgColor='#fff'\" 
                        style=\"cursor: pointer;\" 
                        class='clickable-row' 
                        data-href=\"{{ path('recipestep_show', {'id': recipeStep.id }) }}\"
                    >

                        {# <td><a href=\"{{ path('recipestep_show', { 'id': recipeStep.id }) }}\">{{ recipeStep.id }}</a></td> #}
                        <td>{{ recipeStep.prepTime }}</td>
                        <td>{{ recipeStep.number }}</td>
                        <td>{{ recipeStep.instructions }}</td>
                        <td>{{ recipeStep.cookTime }}</td>
                        {# <td>
                            <ul>
                                <li>
                                    <a href=\"{{ path('recipestep_show', { 'id': recipeStep.id }) }}\">show</a>
                                </li>
                                <li>
                                    <a href=\"{{ path('recipestep_edit', { 'id': recipeStep.id }) }}\">edit</a>
                                </li>
                            </ul>
                        </td> #}
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
    {% block javascripts %}
        <script>
        window.onload = function() {
            rows = document.getElementsByClassName('clickable-row');
            for(var i = 0, len = rows.length; i < len; i++) {
                rows[i].onclick = function() { window.location = this.dataset.href };
            }
        };
        function szary(row) {
            row.bgColor = \"#ccc\";
        }
        </script>
    {% endblock %}
{% endblock %}
", "recipe/show.html.twig", "/home/kamil/symfony_projects/cookbook-symfony/app/Resources/views/recipe/show.html.twig");
    }
}
