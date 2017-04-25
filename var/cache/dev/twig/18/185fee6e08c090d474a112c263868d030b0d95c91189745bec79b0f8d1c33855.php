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
        $__internal_0fa6138c91ebed8ea99e072005d9e0a96e4eef304219bb63e09fc568c5e50480 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fa6138c91ebed8ea99e072005d9e0a96e4eef304219bb63e09fc568c5e50480->enter($__internal_0fa6138c91ebed8ea99e072005d9e0a96e4eef304219bb63e09fc568c5e50480_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "recipestep/show.html.twig"));

        $__internal_53e9dac6e95c1a726b87f9978a335d48fadede14cffd4cdf1b8f8acdf9d01407 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53e9dac6e95c1a726b87f9978a335d48fadede14cffd4cdf1b8f8acdf9d01407->enter($__internal_53e9dac6e95c1a726b87f9978a335d48fadede14cffd4cdf1b8f8acdf9d01407_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "recipestep/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0fa6138c91ebed8ea99e072005d9e0a96e4eef304219bb63e09fc568c5e50480->leave($__internal_0fa6138c91ebed8ea99e072005d9e0a96e4eef304219bb63e09fc568c5e50480_prof);

        
        $__internal_53e9dac6e95c1a726b87f9978a335d48fadede14cffd4cdf1b8f8acdf9d01407->leave($__internal_53e9dac6e95c1a726b87f9978a335d48fadede14cffd4cdf1b8f8acdf9d01407_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2b423a46e38d8a277d2509b2b04dc2e82a67b535ad300dd3cce2d0270493572d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b423a46e38d8a277d2509b2b04dc2e82a67b535ad300dd3cce2d0270493572d->enter($__internal_2b423a46e38d8a277d2509b2b04dc2e82a67b535ad300dd3cce2d0270493572d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fbf92bef4cd8e147a7f3e04fed489701fd60e65223a938287e31c54096a90d9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbf92bef4cd8e147a7f3e04fed489701fd60e65223a938287e31c54096a90d9f->enter($__internal_fbf92bef4cd8e147a7f3e04fed489701fd60e65223a938287e31c54096a90d9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            ";
        // line 39
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 41
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_fbf92bef4cd8e147a7f3e04fed489701fd60e65223a938287e31c54096a90d9f->leave($__internal_fbf92bef4cd8e147a7f3e04fed489701fd60e65223a938287e31c54096a90d9f_prof);

        
        $__internal_2b423a46e38d8a277d2509b2b04dc2e82a67b535ad300dd3cce2d0270493572d->leave($__internal_2b423a46e38d8a277d2509b2b04dc2e82a67b535ad300dd3cce2d0270493572d_prof);

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
        return array (  112 => 41,  107 => 39,  101 => 36,  95 => 33,  85 => 26,  78 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "recipestep/show.html.twig", "/home/kamil/Dokumenty/studia/cookbook/app/Resources/views/recipestep/show.html.twig");
    }
}
