<?php

/* recipestep/index.html.twig */
class __TwigTemplate_e2414af3998cb72d09bf001d49514741be4944c20ea3c01bf8ed1c3a89e92f85 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "recipestep/index.html.twig", 1);
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
        $__internal_aefd3008c25fe3878c9b3363e152f22ccebacb5e1b8944179118855dd2c02444 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aefd3008c25fe3878c9b3363e152f22ccebacb5e1b8944179118855dd2c02444->enter($__internal_aefd3008c25fe3878c9b3363e152f22ccebacb5e1b8944179118855dd2c02444_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "recipestep/index.html.twig"));

        $__internal_43e11cf9b2e3e6993aaf5ad2fdffc08c08d0fac8f4dca265536a2c1f77861b28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43e11cf9b2e3e6993aaf5ad2fdffc08c08d0fac8f4dca265536a2c1f77861b28->enter($__internal_43e11cf9b2e3e6993aaf5ad2fdffc08c08d0fac8f4dca265536a2c1f77861b28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "recipestep/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aefd3008c25fe3878c9b3363e152f22ccebacb5e1b8944179118855dd2c02444->leave($__internal_aefd3008c25fe3878c9b3363e152f22ccebacb5e1b8944179118855dd2c02444_prof);

        
        $__internal_43e11cf9b2e3e6993aaf5ad2fdffc08c08d0fac8f4dca265536a2c1f77861b28->leave($__internal_43e11cf9b2e3e6993aaf5ad2fdffc08c08d0fac8f4dca265536a2c1f77861b28_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b3ea822cb9246d8dc0ecedaae43b0a9ead273466362230ac2a4fce67c4db72e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3ea822cb9246d8dc0ecedaae43b0a9ead273466362230ac2a4fce67c4db72e4->enter($__internal_b3ea822cb9246d8dc0ecedaae43b0a9ead273466362230ac2a4fce67c4db72e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c0a7da10783d8c21ab7a494cf6d83cdfde7c83a4aa4e3c8b609f703b747e987a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0a7da10783d8c21ab7a494cf6d83cdfde7c83a4aa4e3c8b609f703b747e987a->enter($__internal_c0a7da10783d8c21ab7a494cf6d83cdfde7c83a4aa4e3c8b609f703b747e987a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Recipesteps list</h1>

    <table>
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
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["recipeSteps"] ?? $this->getContext($context, "recipeSteps")));
        foreach ($context['_seq'] as $context["_key"] => $context["recipeStep"]) {
            // line 19
            echo "            <tr>
                <td><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recipestep_show", array("id" => $this->getAttribute($context["recipeStep"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["recipeStep"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["recipeStep"], "prepTime", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["recipeStep"], "number", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["recipeStep"], "instructions", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["recipeStep"], "cookTime", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recipestep_show", array("id" => $this->getAttribute($context["recipeStep"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 31
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
        // line 37
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recipestep_new");
        echo "\">Create a new recipeStep</a>
        </li>
    </ul>
";
        
        $__internal_c0a7da10783d8c21ab7a494cf6d83cdfde7c83a4aa4e3c8b609f703b747e987a->leave($__internal_c0a7da10783d8c21ab7a494cf6d83cdfde7c83a4aa4e3c8b609f703b747e987a_prof);

        
        $__internal_b3ea822cb9246d8dc0ecedaae43b0a9ead273466362230ac2a4fce67c4db72e4->leave($__internal_b3ea822cb9246d8dc0ecedaae43b0a9ead273466362230ac2a4fce67c4db72e4_prof);

    }

    public function getTemplateName()
    {
        return "recipestep/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 42,  115 => 37,  103 => 31,  97 => 28,  90 => 24,  86 => 23,  82 => 22,  78 => 21,  72 => 20,  69 => 19,  65 => 18,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Recipesteps list</h1>

    <table>
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
            <a href=\"{{ path('recipestep_new') }}\">Create a new recipeStep</a>
        </li>
    </ul>
{% endblock %}
", "recipestep/index.html.twig", "/home/kamil/symfony_projects/cookbook-symfony/app/Resources/views/recipestep/index.html.twig");
    }
}
