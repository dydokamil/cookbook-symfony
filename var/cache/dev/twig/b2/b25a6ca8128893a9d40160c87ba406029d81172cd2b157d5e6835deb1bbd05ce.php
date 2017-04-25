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
        $__internal_408f15d17b65b5940b777b3b4a6d6c5d73751d915e716c57f44692aa185435b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_408f15d17b65b5940b777b3b4a6d6c5d73751d915e716c57f44692aa185435b7->enter($__internal_408f15d17b65b5940b777b3b4a6d6c5d73751d915e716c57f44692aa185435b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "recipe/show.html.twig"));

        $__internal_e5b7866511840c9dc6a84e04effb5180740de84da0dc83e2a29c478a8f62e128 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5b7866511840c9dc6a84e04effb5180740de84da0dc83e2a29c478a8f62e128->enter($__internal_e5b7866511840c9dc6a84e04effb5180740de84da0dc83e2a29c478a8f62e128_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "recipe/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_408f15d17b65b5940b777b3b4a6d6c5d73751d915e716c57f44692aa185435b7->leave($__internal_408f15d17b65b5940b777b3b4a6d6c5d73751d915e716c57f44692aa185435b7_prof);

        
        $__internal_e5b7866511840c9dc6a84e04effb5180740de84da0dc83e2a29c478a8f62e128->leave($__internal_e5b7866511840c9dc6a84e04effb5180740de84da0dc83e2a29c478a8f62e128_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8bff59c3a9d8c92d0526ca1bcfc4ad7a316dd70f5990ad4ad8466071b59df897 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bff59c3a9d8c92d0526ca1bcfc4ad7a316dd70f5990ad4ad8466071b59df897->enter($__internal_8bff59c3a9d8c92d0526ca1bcfc4ad7a316dd70f5990ad4ad8466071b59df897_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8fe3088daf8976ff8e42dcfc1c23c4d0ae034ccdfef5f28922a5fa1258e53085 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fe3088daf8976ff8e42dcfc1c23c4d0ae034ccdfef5f28922a5fa1258e53085->enter($__internal_8fe3088daf8976ff8e42dcfc1c23c4d0ae034ccdfef5f28922a5fa1258e53085_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            ";
        // line 31
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 33
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_8fe3088daf8976ff8e42dcfc1c23c4d0ae034ccdfef5f28922a5fa1258e53085->leave($__internal_8fe3088daf8976ff8e42dcfc1c23c4d0ae034ccdfef5f28922a5fa1258e53085_prof);

        
        $__internal_8bff59c3a9d8c92d0526ca1bcfc4ad7a316dd70f5990ad4ad8466071b59df897->leave($__internal_8bff59c3a9d8c92d0526ca1bcfc4ad7a316dd70f5990ad4ad8466071b59df897_prof);

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
        return array (  98 => 33,  93 => 31,  87 => 28,  81 => 25,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "recipe/show.html.twig", "/home/kamil/Dokumenty/studia/cookbook/app/Resources/views/recipe/show.html.twig");
    }
}
