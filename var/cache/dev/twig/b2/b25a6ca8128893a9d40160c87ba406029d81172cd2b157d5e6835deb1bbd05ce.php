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
        $__internal_6b1e1f0b53c03bbf01347b9cc3165cdbd171f1ecebe4f49ae1524283db35e49f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b1e1f0b53c03bbf01347b9cc3165cdbd171f1ecebe4f49ae1524283db35e49f->enter($__internal_6b1e1f0b53c03bbf01347b9cc3165cdbd171f1ecebe4f49ae1524283db35e49f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "recipe/show.html.twig"));

        $__internal_458cffcc186ee605aa0583404e2c4334b9f54a7ce6d0e952dc06e61e8d9541e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_458cffcc186ee605aa0583404e2c4334b9f54a7ce6d0e952dc06e61e8d9541e2->enter($__internal_458cffcc186ee605aa0583404e2c4334b9f54a7ce6d0e952dc06e61e8d9541e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "recipe/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6b1e1f0b53c03bbf01347b9cc3165cdbd171f1ecebe4f49ae1524283db35e49f->leave($__internal_6b1e1f0b53c03bbf01347b9cc3165cdbd171f1ecebe4f49ae1524283db35e49f_prof);

        
        $__internal_458cffcc186ee605aa0583404e2c4334b9f54a7ce6d0e952dc06e61e8d9541e2->leave($__internal_458cffcc186ee605aa0583404e2c4334b9f54a7ce6d0e952dc06e61e8d9541e2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6ba56a270298c62cddfddd2338f9446c0ebd91d014d55ecec64e480fcfe24f42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ba56a270298c62cddfddd2338f9446c0ebd91d014d55ecec64e480fcfe24f42->enter($__internal_6ba56a270298c62cddfddd2338f9446c0ebd91d014d55ecec64e480fcfe24f42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7ceb1eac0ee26568dbd09a66bc06072090d96c457a43b2c2b6cf75448a819284 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ceb1eac0ee26568dbd09a66bc06072090d96c457a43b2c2b6cf75448a819284->enter($__internal_7ceb1eac0ee26568dbd09a66bc06072090d96c457a43b2c2b6cf75448a819284_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo "                    <th>
                        <img width=30% src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/stopwatch.svg/"), "html", null, true);
        echo "\" class=\"gallery-thumb\">
                        <div>Czas przygotowania</div>
                    </th>
                    <th>Instructions</th>
                    <th>
                        <img width=30% src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/stopwatch.svg/"), "html", null, true);
        echo "\" class=\"gallery-thumb\">
                        <div>Czas gotowania</div>
                    </th>
                    ";
        // line 51
        echo "                </tr>
            </thead>
            <tbody>
                ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["recipeSteps"] ?? $this->getContext($context, "recipeSteps")));
        foreach ($context['_seq'] as $context["_key"] => $context["recipeStep"]) {
            // line 55
            echo "                    <tr onmouseover=\"this.bgColor='#eee'\" 
                        onmouseout=\"this.bgColor='#fff'\" 
                        style=\"cursor: pointer;\" 
                        class='clickable-row' 
                        data-href=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recipestep_show", array("id" => $this->getAttribute($context["recipeStep"], "id", array()))), "html", null, true);
            echo "\"
                    >

                        ";
            // line 63
            echo "                        <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["recipeStep"], "prepTime", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["recipeStep"], "instructions", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($context["recipeStep"], "cookTime", array()), "html", null, true);
            echo "</td>
                        ";
            // line 76
            echo "                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recipeStep'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
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
        // line 89
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["joins"] ?? $this->getContext($context, "joins")));
        foreach ($context['_seq'] as $context["_key"] => $context["join"]) {
            // line 90
            echo "                        <tr>
                            <td><img width='10%' src=\"";
            // line 91
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/img/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["join"], "ingredient", array()), "icon", array()), "html", null, true);
            echo "\">";
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
        // line 94
        echo "                </tbody>
        </table>
    </div>
    ";
        // line 97
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_7ceb1eac0ee26568dbd09a66bc06072090d96c457a43b2c2b6cf75448a819284->leave($__internal_7ceb1eac0ee26568dbd09a66bc06072090d96c457a43b2c2b6cf75448a819284_prof);

        
        $__internal_6ba56a270298c62cddfddd2338f9446c0ebd91d014d55ecec64e480fcfe24f42->leave($__internal_6ba56a270298c62cddfddd2338f9446c0ebd91d014d55ecec64e480fcfe24f42_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ec7f04921a3021aca1448e90d0f9ad49df126b69fce12283e972d7cae9938b10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec7f04921a3021aca1448e90d0f9ad49df126b69fce12283e972d7cae9938b10->enter($__internal_ec7f04921a3021aca1448e90d0f9ad49df126b69fce12283e972d7cae9938b10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_82c55cf3af9ea81fbaa4a05283b148f313d27958f276bbafe7acb3e15b54ce31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82c55cf3af9ea81fbaa4a05283b148f313d27958f276bbafe7acb3e15b54ce31->enter($__internal_82c55cf3af9ea81fbaa4a05283b148f313d27958f276bbafe7acb3e15b54ce31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 98
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
        
        $__internal_82c55cf3af9ea81fbaa4a05283b148f313d27958f276bbafe7acb3e15b54ce31->leave($__internal_82c55cf3af9ea81fbaa4a05283b148f313d27958f276bbafe7acb3e15b54ce31_prof);

        
        $__internal_ec7f04921a3021aca1448e90d0f9ad49df126b69fce12283e972d7cae9938b10->leave($__internal_ec7f04921a3021aca1448e90d0f9ad49df126b69fce12283e972d7cae9938b10_prof);

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
        return array (  198 => 98,  180 => 97,  175 => 94,  159 => 91,  156 => 90,  152 => 89,  139 => 78,  132 => 76,  128 => 65,  124 => 64,  119 => 63,  113 => 59,  107 => 55,  103 => 54,  98 => 51,  92 => 47,  84 => 42,  81 => 41,  73 => 34,  67 => 10,  63 => 9,  54 => 6,  50 => 4,  41 => 3,  11 => 1,);
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
                    <th>
                        <img width=30% src=\"{{ asset('assets/stopwatch.svg/') }}\" class=\"gallery-thumb\">
                        <div>Czas przygotowania</div>
                    </th>
                    <th>Instructions</th>
                    <th>
                        <img width=30% src=\"{{ asset('assets/stopwatch.svg/') }}\" class=\"gallery-thumb\">
                        <div>Czas gotowania</div>
                    </th>
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
                            <td><img width='10%' src=\"{{asset('uploads/img/')}}{{join.ingredient.icon}}\">{{ join.amount }} {{ join.type }} {{ join.ingredient }}</td>
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
", "recipe/show.html.twig", "/home/kamil/Dokumenty/studia/cookbook-symfony/app/Resources/views/recipe/show.html.twig");
    }
}
