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
        $__internal_d6d2d98e47bfa0278c6aa4c594857e820220898837948c9e8f7ea0e0fe5913e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6d2d98e47bfa0278c6aa4c594857e820220898837948c9e8f7ea0e0fe5913e7->enter($__internal_d6d2d98e47bfa0278c6aa4c594857e820220898837948c9e8f7ea0e0fe5913e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "recipe/show.html.twig"));

        $__internal_081276bb3d41b742ac9772f84849652273842c36a648e4c7e8b64b993fecf641 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_081276bb3d41b742ac9772f84849652273842c36a648e4c7e8b64b993fecf641->enter($__internal_081276bb3d41b742ac9772f84849652273842c36a648e4c7e8b64b993fecf641_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "recipe/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d6d2d98e47bfa0278c6aa4c594857e820220898837948c9e8f7ea0e0fe5913e7->leave($__internal_d6d2d98e47bfa0278c6aa4c594857e820220898837948c9e8f7ea0e0fe5913e7_prof);

        
        $__internal_081276bb3d41b742ac9772f84849652273842c36a648e4c7e8b64b993fecf641->leave($__internal_081276bb3d41b742ac9772f84849652273842c36a648e4c7e8b64b993fecf641_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9c1aae861ac3ecc0268352f5b21dddbfe9e29e0cdfd9388a44c052ef159cdac1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c1aae861ac3ecc0268352f5b21dddbfe9e29e0cdfd9388a44c052ef159cdac1->enter($__internal_9c1aae861ac3ecc0268352f5b21dddbfe9e29e0cdfd9388a44c052ef159cdac1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_13b91fa60247c76a1d0fb7bc6693c87abd4ac1dd2f91454576fe918af3b7244c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13b91fa60247c76a1d0fb7bc6693c87abd4ac1dd2f91454576fe918af3b7244c->enter($__internal_13b91fa60247c76a1d0fb7bc6693c87abd4ac1dd2f91454576fe918af3b7244c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_13b91fa60247c76a1d0fb7bc6693c87abd4ac1dd2f91454576fe918af3b7244c->leave($__internal_13b91fa60247c76a1d0fb7bc6693c87abd4ac1dd2f91454576fe918af3b7244c_prof);

        
        $__internal_9c1aae861ac3ecc0268352f5b21dddbfe9e29e0cdfd9388a44c052ef159cdac1->leave($__internal_9c1aae861ac3ecc0268352f5b21dddbfe9e29e0cdfd9388a44c052ef159cdac1_prof);

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
