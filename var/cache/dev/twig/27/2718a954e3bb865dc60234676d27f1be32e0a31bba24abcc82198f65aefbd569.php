<?php

/* ingredient/show.html.twig */
class __TwigTemplate_97693e959e24b8a62a236e8505c65c921ae72bef996b0d2e739b54f96c0c30b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ingredient/show.html.twig", 1);
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
        $__internal_b784288d49c2046caa5e69e265cb1ac4849d9554bde25b6259932eed16eb6bed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b784288d49c2046caa5e69e265cb1ac4849d9554bde25b6259932eed16eb6bed->enter($__internal_b784288d49c2046caa5e69e265cb1ac4849d9554bde25b6259932eed16eb6bed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ingredient/show.html.twig"));

        $__internal_0ae5e77139950b44fa09ccc70e0dc71c0e6eaba314d0ca611123ff3d01023f55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ae5e77139950b44fa09ccc70e0dc71c0e6eaba314d0ca611123ff3d01023f55->enter($__internal_0ae5e77139950b44fa09ccc70e0dc71c0e6eaba314d0ca611123ff3d01023f55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ingredient/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b784288d49c2046caa5e69e265cb1ac4849d9554bde25b6259932eed16eb6bed->leave($__internal_b784288d49c2046caa5e69e265cb1ac4849d9554bde25b6259932eed16eb6bed_prof);

        
        $__internal_0ae5e77139950b44fa09ccc70e0dc71c0e6eaba314d0ca611123ff3d01023f55->leave($__internal_0ae5e77139950b44fa09ccc70e0dc71c0e6eaba314d0ca611123ff3d01023f55_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ac29da73bc45edff37e4c3b63954099be70337423d9bcfad498d441d35a2ae69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac29da73bc45edff37e4c3b63954099be70337423d9bcfad498d441d35a2ae69->enter($__internal_ac29da73bc45edff37e4c3b63954099be70337423d9bcfad498d441d35a2ae69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_14bab5f442dee617f591907a3cf029e9f7c993cc6218362c8e2ceba3455b1c95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14bab5f442dee617f591907a3cf029e9f7c993cc6218362c8e2ceba3455b1c95->enter($__internal_14bab5f442dee617f591907a3cf029e9f7c993cc6218362c8e2ceba3455b1c95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Ingredient</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ingredient"] ?? $this->getContext($context, "ingredient")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ingredient"] ?? $this->getContext($context, "ingredient")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ingredient_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ingredient_edit", array("id" => $this->getAttribute(($context["ingredient"] ?? $this->getContext($context, "ingredient")), "id", array()))), "html", null, true);
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
        
        $__internal_14bab5f442dee617f591907a3cf029e9f7c993cc6218362c8e2ceba3455b1c95->leave($__internal_14bab5f442dee617f591907a3cf029e9f7c993cc6218362c8e2ceba3455b1c95_prof);

        
        $__internal_ac29da73bc45edff37e4c3b63954099be70337423d9bcfad498d441d35a2ae69->leave($__internal_ac29da73bc45edff37e4c3b63954099be70337423d9bcfad498d441d35a2ae69_prof);

    }

    public function getTemplateName()
    {
        return "ingredient/show.html.twig";
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
    <h1>Ingredient</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ ingredient.id }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ ingredient.name }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('ingredient_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('ingredient_edit', { 'id': ingredient.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "ingredient/show.html.twig", "/home/kamil/Dokumenty/studia/cookbook/app/Resources/views/ingredient/show.html.twig");
    }
}
