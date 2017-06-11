<?php

/* recipestep/show.html.twig */
class __TwigTemplate_c428d09ce633288bd0091e48538528f1991880258a5e8913a03528a9f18b3b2f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "recipestep/show.html.twig", 1);
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
        $__internal_c1ae334daa04b0a44cbd40f3e2dfedbd575172cc151b1d1d7c32d2ab22f4553b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1ae334daa04b0a44cbd40f3e2dfedbd575172cc151b1d1d7c32d2ab22f4553b->enter($__internal_c1ae334daa04b0a44cbd40f3e2dfedbd575172cc151b1d1d7c32d2ab22f4553b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "recipestep/show.html.twig"));

        $__internal_1d519160757f8b720e1a5885f564df8f71a1d43b76dc0e90d9b44b82a4a6f5e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d519160757f8b720e1a5885f564df8f71a1d43b76dc0e90d9b44b82a4a6f5e6->enter($__internal_1d519160757f8b720e1a5885f564df8f71a1d43b76dc0e90d9b44b82a4a6f5e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "recipestep/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c1ae334daa04b0a44cbd40f3e2dfedbd575172cc151b1d1d7c32d2ab22f4553b->leave($__internal_c1ae334daa04b0a44cbd40f3e2dfedbd575172cc151b1d1d7c32d2ab22f4553b_prof);

        
        $__internal_1d519160757f8b720e1a5885f564df8f71a1d43b76dc0e90d9b44b82a4a6f5e6->leave($__internal_1d519160757f8b720e1a5885f564df8f71a1d43b76dc0e90d9b44b82a4a6f5e6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_86245a75bfcf00bab93895dc8445b92deeb3fe0711180acb6237a2dca0bfb207 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86245a75bfcf00bab93895dc8445b92deeb3fe0711180acb6237a2dca0bfb207->enter($__internal_86245a75bfcf00bab93895dc8445b92deeb3fe0711180acb6237a2dca0bfb207_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_446008cd1e755936f9de39c3d58290a2a4299db562adf755c909751d4e005782 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_446008cd1e755936f9de39c3d58290a2a4299db562adf755c909751d4e005782->enter($__internal_446008cd1e755936f9de39c3d58290a2a4299db562adf755c909751d4e005782_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Recipestep</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["recipeStep"] ?? $this->getContext($context, "recipeStep")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Preptime</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["recipeStep"] ?? $this->getContext($context, "recipeStep")), "prepTime", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Number</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["recipeStep"] ?? $this->getContext($context, "recipeStep")), "number", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Instructions</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["recipeStep"] ?? $this->getContext($context, "recipeStep")), "instructions", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Cooktime</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["recipeStep"] ?? $this->getContext($context, "recipeStep")), "cookTime", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul class='list-unstyled'>
        <li>
            <a href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ingredientstepjoin_new", array("step" => $this->getAttribute(($context["recipeStep"] ?? $this->getContext($context, "recipeStep")), "id", array()))), "html", null, true);
        echo "\">Dodaj składnik</a>
        </li>
        <li>
            <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recipe_show", array("id" => $this->getAttribute(($context["recipe"] ?? $this->getContext($context, "recipe")), "id", array()))), "html", null, true);
        echo "\">Powrót do przepisu</a>
        </li>
        <li>
            <a class='btn btn-warning' href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recipestep_edit", array("id" => $this->getAttribute(($context["recipeStep"] ?? $this->getContext($context, "recipeStep")), "id", array()))), "html", null, true);
        echo "\">Edytuj</a>
        </li>
        <li>
            ";
        // line 42
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input class='btn btn-danger' type=\"submit\" value=\"Usuń\">
            ";
        // line 44
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_446008cd1e755936f9de39c3d58290a2a4299db562adf755c909751d4e005782->leave($__internal_446008cd1e755936f9de39c3d58290a2a4299db562adf755c909751d4e005782_prof);

        
        $__internal_86245a75bfcf00bab93895dc8445b92deeb3fe0711180acb6237a2dca0bfb207->leave($__internal_86245a75bfcf00bab93895dc8445b92deeb3fe0711180acb6237a2dca0bfb207_prof);

    }

    public function getTemplateName()
    {
        return "recipestep/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 44,  113 => 42,  107 => 39,  101 => 36,  95 => 33,  85 => 26,  78 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Recipestep</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ recipeStep.id }}</td>
            </tr>
            <tr>
                <th>Preptime</th>
                <td>{{ recipeStep.prepTime }}</td>
            </tr>
            <tr>
                <th>Number</th>
                <td>{{ recipeStep.number }}</td>
            </tr>
            <tr>
                <th>Instructions</th>
                <td>{{ recipeStep.instructions }}</td>
            </tr>
            <tr>
                <th>Cooktime</th>
                <td>{{ recipeStep.cookTime }}</td>
            </tr>
        </tbody>
    </table>

    <ul class='list-unstyled'>
        <li>
            <a href=\"{{ path('ingredientstepjoin_new', { 'step': recipeStep.id }) }}\">Dodaj składnik</a>
        </li>
        <li>
            <a href=\"{{ path('recipe_show', { 'id': recipe.id }) }}\">Powrót do przepisu</a>
        </li>
        <li>
            <a class='btn btn-warning' href=\"{{ path('recipestep_edit', { 'id': recipeStep.id  }) }}\">Edytuj</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input class='btn btn-danger' type=\"submit\" value=\"Usuń\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "recipestep/show.html.twig", "/home/kamil/Dokumenty/studia/cookbook-symfony/app/Resources/views/recipestep/show.html.twig");
    }
}
