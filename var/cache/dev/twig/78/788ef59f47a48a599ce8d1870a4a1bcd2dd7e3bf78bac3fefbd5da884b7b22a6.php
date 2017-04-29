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
        $__internal_eea69a8a5cb5bf9e022bda25a16f5983abb981abe8bd79db364ff3d8e3286edb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eea69a8a5cb5bf9e022bda25a16f5983abb981abe8bd79db364ff3d8e3286edb->enter($__internal_eea69a8a5cb5bf9e022bda25a16f5983abb981abe8bd79db364ff3d8e3286edb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "recipe/index.html.twig"));

        $__internal_775fc8e5c76aca494748cbde7f6779bebed226a3b205c93a3d23a216a0fa493c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_775fc8e5c76aca494748cbde7f6779bebed226a3b205c93a3d23a216a0fa493c->enter($__internal_775fc8e5c76aca494748cbde7f6779bebed226a3b205c93a3d23a216a0fa493c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "recipe/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eea69a8a5cb5bf9e022bda25a16f5983abb981abe8bd79db364ff3d8e3286edb->leave($__internal_eea69a8a5cb5bf9e022bda25a16f5983abb981abe8bd79db364ff3d8e3286edb_prof);

        
        $__internal_775fc8e5c76aca494748cbde7f6779bebed226a3b205c93a3d23a216a0fa493c->leave($__internal_775fc8e5c76aca494748cbde7f6779bebed226a3b205c93a3d23a216a0fa493c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a99b6175db8f889609a40b58b104c8c833573b8bf1c3a60bc068e5fbe792d3a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a99b6175db8f889609a40b58b104c8c833573b8bf1c3a60bc068e5fbe792d3a7->enter($__internal_a99b6175db8f889609a40b58b104c8c833573b8bf1c3a60bc068e5fbe792d3a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_035027d1b458c435f54383a8868b4cf4ae8062a5a4fcd0c5dc6c9bba78cc9afd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_035027d1b458c435f54383a8868b4cf4ae8062a5a4fcd0c5dc6c9bba78cc9afd->enter($__internal_035027d1b458c435f54383a8868b4cf4ae8062a5a4fcd0c5dc6c9bba78cc9afd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_035027d1b458c435f54383a8868b4cf4ae8062a5a4fcd0c5dc6c9bba78cc9afd->leave($__internal_035027d1b458c435f54383a8868b4cf4ae8062a5a4fcd0c5dc6c9bba78cc9afd_prof);

        
        $__internal_a99b6175db8f889609a40b58b104c8c833573b8bf1c3a60bc068e5fbe792d3a7->leave($__internal_a99b6175db8f889609a40b58b104c8c833573b8bf1c3a60bc068e5fbe792d3a7_prof);

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
