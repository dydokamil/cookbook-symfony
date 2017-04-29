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
        $__internal_f238996f6675b64899a36a721c8d273a41227b6666f4b3ab218af0a11bd74758 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f238996f6675b64899a36a721c8d273a41227b6666f4b3ab218af0a11bd74758->enter($__internal_f238996f6675b64899a36a721c8d273a41227b6666f4b3ab218af0a11bd74758_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "recipestep/show.html.twig"));

        $__internal_83538faf90999b078a6c0a1aefd328b3ec4c5aacc6012396a219ea3ea798c147 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83538faf90999b078a6c0a1aefd328b3ec4c5aacc6012396a219ea3ea798c147->enter($__internal_83538faf90999b078a6c0a1aefd328b3ec4c5aacc6012396a219ea3ea798c147_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "recipestep/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f238996f6675b64899a36a721c8d273a41227b6666f4b3ab218af0a11bd74758->leave($__internal_f238996f6675b64899a36a721c8d273a41227b6666f4b3ab218af0a11bd74758_prof);

        
        $__internal_83538faf90999b078a6c0a1aefd328b3ec4c5aacc6012396a219ea3ea798c147->leave($__internal_83538faf90999b078a6c0a1aefd328b3ec4c5aacc6012396a219ea3ea798c147_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3173e1a15ca2864bc95161f744f4a1aaed1a2ef2b11c08386cc4b540bb4e6ab7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3173e1a15ca2864bc95161f744f4a1aaed1a2ef2b11c08386cc4b540bb4e6ab7->enter($__internal_3173e1a15ca2864bc95161f744f4a1aaed1a2ef2b11c08386cc4b540bb4e6ab7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_eb0a8ebf884d4aa316df7f0b0b7ccaa32bae03f7a36b8c3eae1261b7257ed597 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb0a8ebf884d4aa316df7f0b0b7ccaa32bae03f7a36b8c3eae1261b7257ed597->enter($__internal_eb0a8ebf884d4aa316df7f0b0b7ccaa32bae03f7a36b8c3eae1261b7257ed597_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_eb0a8ebf884d4aa316df7f0b0b7ccaa32bae03f7a36b8c3eae1261b7257ed597->leave($__internal_eb0a8ebf884d4aa316df7f0b0b7ccaa32bae03f7a36b8c3eae1261b7257ed597_prof);

        
        $__internal_3173e1a15ca2864bc95161f744f4a1aaed1a2ef2b11c08386cc4b540bb4e6ab7->leave($__internal_3173e1a15ca2864bc95161f744f4a1aaed1a2ef2b11c08386cc4b540bb4e6ab7_prof);

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
", "recipestep/show.html.twig", "/home/kamil/symfony_projects/cookbook-symfony/app/Resources/views/recipestep/show.html.twig");
    }
}
