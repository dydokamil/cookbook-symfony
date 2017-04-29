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
        $__internal_382c5dd55695385de7e454f89d7a1b1c861a680c52ee50a1155047e3a3484405 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_382c5dd55695385de7e454f89d7a1b1c861a680c52ee50a1155047e3a3484405->enter($__internal_382c5dd55695385de7e454f89d7a1b1c861a680c52ee50a1155047e3a3484405_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "recipestep/show.html.twig"));

        $__internal_1ec6e5c891e6bca3204670ddad5c3b6c76fdbd3074b36ea2cc0e8dff9ecc1ee8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ec6e5c891e6bca3204670ddad5c3b6c76fdbd3074b36ea2cc0e8dff9ecc1ee8->enter($__internal_1ec6e5c891e6bca3204670ddad5c3b6c76fdbd3074b36ea2cc0e8dff9ecc1ee8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "recipestep/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_382c5dd55695385de7e454f89d7a1b1c861a680c52ee50a1155047e3a3484405->leave($__internal_382c5dd55695385de7e454f89d7a1b1c861a680c52ee50a1155047e3a3484405_prof);

        
        $__internal_1ec6e5c891e6bca3204670ddad5c3b6c76fdbd3074b36ea2cc0e8dff9ecc1ee8->leave($__internal_1ec6e5c891e6bca3204670ddad5c3b6c76fdbd3074b36ea2cc0e8dff9ecc1ee8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_bd9abb2afc86cf0c1f6709d56ef0361ad742db19c0d480a01e8c4b1c3059dafc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd9abb2afc86cf0c1f6709d56ef0361ad742db19c0d480a01e8c4b1c3059dafc->enter($__internal_bd9abb2afc86cf0c1f6709d56ef0361ad742db19c0d480a01e8c4b1c3059dafc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7b833cd28be8b5f013d52bc4caa6ea1bee5dc96dad7fc1be9c708d70e0913733 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b833cd28be8b5f013d52bc4caa6ea1bee5dc96dad7fc1be9c708d70e0913733->enter($__internal_7b833cd28be8b5f013d52bc4caa6ea1bee5dc96dad7fc1be9c708d70e0913733_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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

    <ul>
        <li>
            <a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recipestep_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recipestep_edit", array("id" => $this->getAttribute(($context["recipeStep"] ?? $this->getContext($context, "recipeStep")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            <a href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ingredientstepjoin_new", array("step" => $this->getAttribute(($context["recipeStep"] ?? $this->getContext($context, "recipeStep")), "id", array()))), "html", null, true);
        echo "\">Dodaj składnik</a>
        </li>
        <li>
            ";
        // line 42
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 44
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_7b833cd28be8b5f013d52bc4caa6ea1bee5dc96dad7fc1be9c708d70e0913733->leave($__internal_7b833cd28be8b5f013d52bc4caa6ea1bee5dc96dad7fc1be9c708d70e0913733_prof);

        
        $__internal_bd9abb2afc86cf0c1f6709d56ef0361ad742db19c0d480a01e8c4b1c3059dafc->leave($__internal_bd9abb2afc86cf0c1f6709d56ef0361ad742db19c0d480a01e8c4b1c3059dafc_prof);

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

    <ul>
        <li>
            <a href=\"{{ path('recipestep_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('recipestep_edit', { 'id': recipeStep.id }) }}\">Edit</a>
        </li>
        <li>
            <a href=\"{{ path('ingredientstepjoin_new', { 'step': recipeStep.id }) }}\">Dodaj składnik</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "recipestep/show.html.twig", "/home/kamil/Dokumenty/studia/cookbook/app/Resources/views/recipestep/show.html.twig");
    }
}
