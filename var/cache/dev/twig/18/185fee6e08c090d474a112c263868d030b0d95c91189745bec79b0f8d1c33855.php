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
        $__internal_26072b58dbf59b0e5e4083cbf0eff316082aed1e03705833e07de17432d67d74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26072b58dbf59b0e5e4083cbf0eff316082aed1e03705833e07de17432d67d74->enter($__internal_26072b58dbf59b0e5e4083cbf0eff316082aed1e03705833e07de17432d67d74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "recipestep/show.html.twig"));

        $__internal_2d75b0bc9f8d5f68c5b77c2ab9f1fca3aa3e24f5c92932175db0f3d7c5ad370d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d75b0bc9f8d5f68c5b77c2ab9f1fca3aa3e24f5c92932175db0f3d7c5ad370d->enter($__internal_2d75b0bc9f8d5f68c5b77c2ab9f1fca3aa3e24f5c92932175db0f3d7c5ad370d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "recipestep/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_26072b58dbf59b0e5e4083cbf0eff316082aed1e03705833e07de17432d67d74->leave($__internal_26072b58dbf59b0e5e4083cbf0eff316082aed1e03705833e07de17432d67d74_prof);

        
        $__internal_2d75b0bc9f8d5f68c5b77c2ab9f1fca3aa3e24f5c92932175db0f3d7c5ad370d->leave($__internal_2d75b0bc9f8d5f68c5b77c2ab9f1fca3aa3e24f5c92932175db0f3d7c5ad370d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_22173922e43aaf9f820aab518fa17a773d160cd0de98d1037adf4519e9f4e46f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22173922e43aaf9f820aab518fa17a773d160cd0de98d1037adf4519e9f4e46f->enter($__internal_22173922e43aaf9f820aab518fa17a773d160cd0de98d1037adf4519e9f4e46f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f0df6f7e4557f0d20a595c22665bd25291c106a8be11eeaf4bc125b65fe11363 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0df6f7e4557f0d20a595c22665bd25291c106a8be11eeaf4bc125b65fe11363->enter($__internal_f0df6f7e4557f0d20a595c22665bd25291c106a8be11eeaf4bc125b65fe11363_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Krok przepisu</h1>

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
        
        $__internal_f0df6f7e4557f0d20a595c22665bd25291c106a8be11eeaf4bc125b65fe11363->leave($__internal_f0df6f7e4557f0d20a595c22665bd25291c106a8be11eeaf4bc125b65fe11363_prof);

        
        $__internal_22173922e43aaf9f820aab518fa17a773d160cd0de98d1037adf4519e9f4e46f->leave($__internal_22173922e43aaf9f820aab518fa17a773d160cd0de98d1037adf4519e9f4e46f_prof);

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
    <h1>Krok przepisu</h1>

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
