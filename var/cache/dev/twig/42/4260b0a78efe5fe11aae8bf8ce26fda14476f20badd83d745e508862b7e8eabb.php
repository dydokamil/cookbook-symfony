<?php

/* ingredienttype/show.html.twig */
class __TwigTemplate_e56cddb28a76ffc7b36c7abf23cd9584d7d857c09a00413bbc10aaef4a7d08a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ingredienttype/show.html.twig", 1);
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
        $__internal_6727d7763f38f58158f9b47191b819d47c51d16e2ede85a95540dd6f1a10d385 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6727d7763f38f58158f9b47191b819d47c51d16e2ede85a95540dd6f1a10d385->enter($__internal_6727d7763f38f58158f9b47191b819d47c51d16e2ede85a95540dd6f1a10d385_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ingredienttype/show.html.twig"));

        $__internal_817862ff96f4605bad55cf01a81db6bd1a2f69c079d96fedfa66e8ddc9285ba5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_817862ff96f4605bad55cf01a81db6bd1a2f69c079d96fedfa66e8ddc9285ba5->enter($__internal_817862ff96f4605bad55cf01a81db6bd1a2f69c079d96fedfa66e8ddc9285ba5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ingredienttype/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6727d7763f38f58158f9b47191b819d47c51d16e2ede85a95540dd6f1a10d385->leave($__internal_6727d7763f38f58158f9b47191b819d47c51d16e2ede85a95540dd6f1a10d385_prof);

        
        $__internal_817862ff96f4605bad55cf01a81db6bd1a2f69c079d96fedfa66e8ddc9285ba5->leave($__internal_817862ff96f4605bad55cf01a81db6bd1a2f69c079d96fedfa66e8ddc9285ba5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c9cbba91f9eb33d9163ef1f63696cf0f3b0832d3cc76b8eebb5a819cc7a7df01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9cbba91f9eb33d9163ef1f63696cf0f3b0832d3cc76b8eebb5a819cc7a7df01->enter($__internal_c9cbba91f9eb33d9163ef1f63696cf0f3b0832d3cc76b8eebb5a819cc7a7df01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_75f57621dc1a12dffe34949a4cc832ed00e321f4a214130b0af31d43ed06b0ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75f57621dc1a12dffe34949a4cc832ed00e321f4a214130b0af31d43ed06b0ef->enter($__internal_75f57621dc1a12dffe34949a4cc832ed00e321f4a214130b0af31d43ed06b0ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Ingredienttype</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ingredientType"] ?? $this->getContext($context, "ingredientType")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Type</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ingredientType"] ?? $this->getContext($context, "ingredientType")), "type", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ingredienttype_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ingredienttype_edit", array("id" => $this->getAttribute(($context["ingredientType"] ?? $this->getContext($context, "ingredientType")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 29
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_75f57621dc1a12dffe34949a4cc832ed00e321f4a214130b0af31d43ed06b0ef->leave($__internal_75f57621dc1a12dffe34949a4cc832ed00e321f4a214130b0af31d43ed06b0ef_prof);

        
        $__internal_c9cbba91f9eb33d9163ef1f63696cf0f3b0832d3cc76b8eebb5a819cc7a7df01->leave($__internal_c9cbba91f9eb33d9163ef1f63696cf0f3b0832d3cc76b8eebb5a819cc7a7df01_prof);

    }

    public function getTemplateName()
    {
        return "ingredienttype/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 29,  86 => 27,  80 => 24,  74 => 21,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Ingredienttype</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ ingredientType.id }}</td>
            </tr>
            <tr>
                <th>Type</th>
                <td>{{ ingredientType.type }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('ingredienttype_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('ingredienttype_edit', { 'id': ingredientType.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "ingredienttype/show.html.twig", "/home/kamil/symfony_projects/cookbook-symfony/app/Resources/views/ingredienttype/show.html.twig");
    }
}
