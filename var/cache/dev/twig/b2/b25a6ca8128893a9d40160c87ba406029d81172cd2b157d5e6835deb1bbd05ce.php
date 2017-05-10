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
        $__internal_a55e2c66340e6414211fb56ebb33950b3795e817b323ac1b1505862afc45a3dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a55e2c66340e6414211fb56ebb33950b3795e817b323ac1b1505862afc45a3dd->enter($__internal_a55e2c66340e6414211fb56ebb33950b3795e817b323ac1b1505862afc45a3dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "recipe/show.html.twig"));

        $__internal_9f0b2e15d1b72e06a43e258013f243134934f5926cc25dfa916380e67ec20040 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f0b2e15d1b72e06a43e258013f243134934f5926cc25dfa916380e67ec20040->enter($__internal_9f0b2e15d1b72e06a43e258013f243134934f5926cc25dfa916380e67ec20040_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "recipe/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a55e2c66340e6414211fb56ebb33950b3795e817b323ac1b1505862afc45a3dd->leave($__internal_a55e2c66340e6414211fb56ebb33950b3795e817b323ac1b1505862afc45a3dd_prof);

        
        $__internal_9f0b2e15d1b72e06a43e258013f243134934f5926cc25dfa916380e67ec20040->leave($__internal_9f0b2e15d1b72e06a43e258013f243134934f5926cc25dfa916380e67ec20040_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a9592fc948763b23dc505c2cfccc84ed0265ae0679316512b755b87628e721d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9592fc948763b23dc505c2cfccc84ed0265ae0679316512b755b87628e721d3->enter($__internal_a9592fc948763b23dc505c2cfccc84ed0265ae0679316512b755b87628e721d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9fbbddfd48d2a13ff848bbfa5e99338dc20eeaaff25bda32bb238c3162425d59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fbbddfd48d2a13ff848bbfa5e99338dc20eeaaff25bda32bb238c3162425d59->enter($__internal_9fbbddfd48d2a13ff848bbfa5e99338dc20eeaaff25bda32bb238c3162425d59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo "            <input type=\"submit\" value=\"Usuń\">
            ";
        // line 42
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>

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
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["recipeSteps"] ?? $this->getContext($context, "recipeSteps")));
        foreach ($context['_seq'] as $context["_key"] => $context["recipeStep"]) {
            // line 61
            echo "                    <tr>
                        <td><a href=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recipestep_show", array("id" => $this->getAttribute($context["recipeStep"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["recipeStep"], "id", array()), "html", null, true);
            echo "</a></td>
                        <td>";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["recipeStep"], "prepTime", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["recipeStep"], "number", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($context["recipeStep"], "instructions", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($context["recipeStep"], "cookTime", array()), "html", null, true);
            echo "</td>
                        <td>
                            <ul>
                                <li>
                                    <a href=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recipestep_show", array("id" => $this->getAttribute($context["recipeStep"], "id", array()))), "html", null, true);
            echo "\">show</a>
                                </li>
                                <li>
                                    <a href=\"";
            // line 73
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
        // line 79
        echo "            </tbody>
        </table>
    </div>

    <div class=\"col-md-3\">
        <table class=\"table\">
            <thead>
                <tr>
                    <th>Produkty</th>
                </tr>
                <tbody>
                    ";
        // line 90
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["joins"] ?? $this->getContext($context, "joins")));
        foreach ($context['_seq'] as $context["_key"] => $context["join"]) {
            // line 91
            echo "                        <tr>
                            <td>";
            // line 92
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
        // line 95
        echo "                </tbody>
        </table>
    </div>

";
        
        $__internal_9fbbddfd48d2a13ff848bbfa5e99338dc20eeaaff25bda32bb238c3162425d59->leave($__internal_9fbbddfd48d2a13ff848bbfa5e99338dc20eeaaff25bda32bb238c3162425d59_prof);

        
        $__internal_a9592fc948763b23dc505c2cfccc84ed0265ae0679316512b755b87628e721d3->leave($__internal_a9592fc948763b23dc505c2cfccc84ed0265ae0679316512b755b87628e721d3_prof);

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
        return array (  222 => 95,  209 => 92,  206 => 91,  202 => 90,  189 => 79,  177 => 73,  171 => 70,  164 => 66,  160 => 65,  156 => 64,  152 => 63,  146 => 62,  143 => 61,  139 => 60,  118 => 42,  115 => 41,  111 => 39,  105 => 36,  99 => 33,  93 => 30,  82 => 23,  78 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
        <table class=\"table\">
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
