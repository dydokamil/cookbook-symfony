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
        $__internal_040fd932c7f369761ffb2354d872d1c848e7b56763c9325a000107bbf29eadc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_040fd932c7f369761ffb2354d872d1c848e7b56763c9325a000107bbf29eadc7->enter($__internal_040fd932c7f369761ffb2354d872d1c848e7b56763c9325a000107bbf29eadc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "recipe/show.html.twig"));

        $__internal_349a873ef5566f587d5e0de2e66957f928334770dfb17529113aec663c8f3428 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_349a873ef5566f587d5e0de2e66957f928334770dfb17529113aec663c8f3428->enter($__internal_349a873ef5566f587d5e0de2e66957f928334770dfb17529113aec663c8f3428_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "recipe/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_040fd932c7f369761ffb2354d872d1c848e7b56763c9325a000107bbf29eadc7->leave($__internal_040fd932c7f369761ffb2354d872d1c848e7b56763c9325a000107bbf29eadc7_prof);

        
        $__internal_349a873ef5566f587d5e0de2e66957f928334770dfb17529113aec663c8f3428->leave($__internal_349a873ef5566f587d5e0de2e66957f928334770dfb17529113aec663c8f3428_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_88184be19659998b09075f83046b04adc8e4edc8384066ab9a4e769cf89b9e0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88184be19659998b09075f83046b04adc8e4edc8384066ab9a4e769cf89b9e0a->enter($__internal_88184be19659998b09075f83046b04adc8e4edc8384066ab9a4e769cf89b9e0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_96aab93c05fb4b00587a7d6aa2dc63d04ece28af37bfa755960ddf3c7ed8dc56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96aab93c05fb4b00587a7d6aa2dc63d04ece28af37bfa755960ddf3c7ed8dc56->enter($__internal_96aab93c05fb4b00587a7d6aa2dc63d04ece28af37bfa755960ddf3c7ed8dc56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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


    <h1>Lista kroków</h1>

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
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["recipeSteps"] ?? $this->getContext($context, "recipeSteps")));
        foreach ($context['_seq'] as $context["_key"] => $context["recipeStep"]) {
            // line 44
            echo "            <tr>
                <td><a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recipestep_show", array("id" => $this->getAttribute($context["recipeStep"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["recipeStep"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["recipeStep"], "prepTime", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["recipeStep"], "number", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["recipeStep"], "instructions", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["recipeStep"], "cookTime", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recipestep_show", array("id" => $this->getAttribute($context["recipeStep"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 56
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
        // line 62
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 67
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recipe_index");
        echo "\">Powrót do listy</a>
        </li>
        <li>
            <a href=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recipe_edit", array("id" => $this->getAttribute(($context["recipe"] ?? $this->getContext($context, "recipe")), "id", array()))), "html", null, true);
        echo "\">Edytuj</a>
        </li>
        <li>
            <a href=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recipestep_new", array("recipe" => $this->getAttribute(($context["recipe"] ?? $this->getContext($context, "recipe")), "id", array()))), "html", null, true);
        echo "\">Dodaj krok</a>
        </li>
        <li>
            ";
        // line 76
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
            ";
        // line 78
        echo "                <input type=\"submit\" value=\"Usuń\">
            ";
        // line 79
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_96aab93c05fb4b00587a7d6aa2dc63d04ece28af37bfa755960ddf3c7ed8dc56->leave($__internal_96aab93c05fb4b00587a7d6aa2dc63d04ece28af37bfa755960ddf3c7ed8dc56_prof);

        
        $__internal_88184be19659998b09075f83046b04adc8e4edc8384066ab9a4e769cf89b9e0a->leave($__internal_88184be19659998b09075f83046b04adc8e4edc8384066ab9a4e769cf89b9e0a_prof);

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
        return array (  188 => 79,  185 => 78,  181 => 76,  175 => 73,  169 => 70,  163 => 67,  156 => 62,  144 => 56,  138 => 53,  131 => 49,  127 => 48,  123 => 47,  119 => 46,  113 => 45,  110 => 44,  106 => 43,  82 => 23,  78 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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


    <h1>Lista kroków</h1>

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
