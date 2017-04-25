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
        $__internal_bf09e48a415904c3a35af2e49b960be22617ee04912aa6939bebcb6494676808 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf09e48a415904c3a35af2e49b960be22617ee04912aa6939bebcb6494676808->enter($__internal_bf09e48a415904c3a35af2e49b960be22617ee04912aa6939bebcb6494676808_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "recipe/index.html.twig"));

        $__internal_14f9e704637ba2e3820750e54cf38620a077be3837aae4cf053951222fcbacce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14f9e704637ba2e3820750e54cf38620a077be3837aae4cf053951222fcbacce->enter($__internal_14f9e704637ba2e3820750e54cf38620a077be3837aae4cf053951222fcbacce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "recipe/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bf09e48a415904c3a35af2e49b960be22617ee04912aa6939bebcb6494676808->leave($__internal_bf09e48a415904c3a35af2e49b960be22617ee04912aa6939bebcb6494676808_prof);

        
        $__internal_14f9e704637ba2e3820750e54cf38620a077be3837aae4cf053951222fcbacce->leave($__internal_14f9e704637ba2e3820750e54cf38620a077be3837aae4cf053951222fcbacce_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_38b3e6a758b5e90c41b7e23047e1e68acda23960bf6881b779338f42e78ca6bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38b3e6a758b5e90c41b7e23047e1e68acda23960bf6881b779338f42e78ca6bf->enter($__internal_38b3e6a758b5e90c41b7e23047e1e68acda23960bf6881b779338f42e78ca6bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fa373488a7629c8c236cfff2eb67bfbda74c8436cc507349830c4c5f97540daf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa373488a7629c8c236cfff2eb67bfbda74c8436cc507349830c4c5f97540daf->enter($__internal_fa373488a7629c8c236cfff2eb67bfbda74c8436cc507349830c4c5f97540daf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Recipes list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Description</th>
                <th>Actions</th>
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
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recipe_edit", array("id" => $this->getAttribute($context["recipe"], "id", array()))), "html", null, true);
            echo "\">edit</a>
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
        echo "\">Create a new recipe</a>
        </li>
    </ul>
";
        
        $__internal_fa373488a7629c8c236cfff2eb67bfbda74c8436cc507349830c4c5f97540daf->leave($__internal_fa373488a7629c8c236cfff2eb67bfbda74c8436cc507349830c4c5f97540daf_prof);

        
        $__internal_38b3e6a758b5e90c41b7e23047e1e68acda23960bf6881b779338f42e78ca6bf->leave($__internal_38b3e6a758b5e90c41b7e23047e1e68acda23960bf6881b779338f42e78ca6bf_prof);

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
    <h1>Recipes list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Description</th>
                <th>Actions</th>
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
                            <a href=\"{{ path('recipe_show', { 'id': recipe.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('recipe_edit', { 'id': recipe.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('recipe_new') }}\">Create a new recipe</a>
        </li>
    </ul>
{% endblock %}
", "recipe/index.html.twig", "/home/kamil/Dokumenty/studia/cookbook/app/Resources/views/recipe/index.html.twig");
    }
}
