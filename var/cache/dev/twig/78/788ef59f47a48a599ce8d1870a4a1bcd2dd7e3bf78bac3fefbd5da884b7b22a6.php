<?php

/* recipe/index.html.twig */
class __TwigTemplate_417633081ad0eced40fce39043ff16a85c45604d6c016d5b5bb276676df497d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "recipe/index.html.twig", 1);
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
        $__internal_83094e63afeae38b070d4f32dab9eb2f8e54ef9d21fcb01d48ebcc8a303e5be8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83094e63afeae38b070d4f32dab9eb2f8e54ef9d21fcb01d48ebcc8a303e5be8->enter($__internal_83094e63afeae38b070d4f32dab9eb2f8e54ef9d21fcb01d48ebcc8a303e5be8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "recipe/index.html.twig"));

        $__internal_8cdb5c6d69b46fb7fe99e83279869f75ccf5051823e72cd1d01bfe781c5b710f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cdb5c6d69b46fb7fe99e83279869f75ccf5051823e72cd1d01bfe781c5b710f->enter($__internal_8cdb5c6d69b46fb7fe99e83279869f75ccf5051823e72cd1d01bfe781c5b710f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "recipe/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_83094e63afeae38b070d4f32dab9eb2f8e54ef9d21fcb01d48ebcc8a303e5be8->leave($__internal_83094e63afeae38b070d4f32dab9eb2f8e54ef9d21fcb01d48ebcc8a303e5be8_prof);

        
        $__internal_8cdb5c6d69b46fb7fe99e83279869f75ccf5051823e72cd1d01bfe781c5b710f->leave($__internal_8cdb5c6d69b46fb7fe99e83279869f75ccf5051823e72cd1d01bfe781c5b710f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fb4a54e676280892ddc68a18378f5970edb9adb0c757bb29d7995ee986def98b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb4a54e676280892ddc68a18378f5970edb9adb0c757bb29d7995ee986def98b->enter($__internal_fb4a54e676280892ddc68a18378f5970edb9adb0c757bb29d7995ee986def98b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d7a86aafd2ae2cbe9e261d8c3abb9a5ad043727ef480c169c8e0b7e68892bdfe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7a86aafd2ae2cbe9e261d8c3abb9a5ad043727ef480c169c8e0b7e68892bdfe->enter($__internal_d7a86aafd2ae2cbe9e261d8c3abb9a5ad043727ef480c169c8e0b7e68892bdfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Lista przepisów</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nazwa</th>
                <th>Opis</th>
                <th>Operacje</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["recipes"] ?? $this->getContext($context, "recipes")));
        foreach ($context['_seq'] as $context["_key"] => $context["recipe"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recipe_show", array("id" => $this->getAttribute($context["recipe"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["recipe"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["recipe"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["recipe"], "description", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recipe_show", array("id" => $this->getAttribute($context["recipe"], "id", array()))), "html", null, true);
            echo "\">Pokaż</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recipe_edit", array("id" => $this->getAttribute($context["recipe"], "id", array()))), "html", null, true);
            echo "\">Edytuj</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recipe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recipe_new");
        echo "\">Dodaj nowy przepis</a>
        </li>
    </ul>
";
        
        $__internal_d7a86aafd2ae2cbe9e261d8c3abb9a5ad043727ef480c169c8e0b7e68892bdfe->leave($__internal_d7a86aafd2ae2cbe9e261d8c3abb9a5ad043727ef480c169c8e0b7e68892bdfe_prof);

        
        $__internal_fb4a54e676280892ddc68a18378f5970edb9adb0c757bb29d7995ee986def98b->leave($__internal_fb4a54e676280892ddc68a18378f5970edb9adb0c757bb29d7995ee986def98b_prof);

    }

    public function getTemplateName()
    {
        return "recipe/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 38,  105 => 33,  93 => 27,  87 => 24,  80 => 20,  76 => 19,  70 => 18,  67 => 17,  63 => 16,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Lista przepisów</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nazwa</th>
                <th>Opis</th>
                <th>Operacje</th>
            </tr>
        </thead>
        <tbody>
        {% for recipe in recipes %}
            <tr>
                <td><a href=\"{{ path('recipe_show', { 'id': recipe.id }) }}\">{{ recipe.id }}</a></td>
                <td>{{ recipe.name }}</td>
                <td>{{ recipe.description }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('recipe_show', { 'id': recipe.id }) }}\">Pokaż</a>
                        </li>
                        <li>
                            <a href=\"{{ path('recipe_edit', { 'id': recipe.id }) }}\">Edytuj</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('recipe_new') }}\">Dodaj nowy przepis</a>
        </li>
    </ul>
{% endblock %}
", "recipe/index.html.twig", "/home/kamil/Dokumenty/studia/cookbook/app/Resources/views/recipe/index.html.twig");
    }
}
