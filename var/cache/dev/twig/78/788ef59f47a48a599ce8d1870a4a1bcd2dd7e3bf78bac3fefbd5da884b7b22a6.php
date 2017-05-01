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
        $__internal_ef4f69c3e210f86ad10804b4cc38e4c0470054886d1547ae7d44eff61ec5dda6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef4f69c3e210f86ad10804b4cc38e4c0470054886d1547ae7d44eff61ec5dda6->enter($__internal_ef4f69c3e210f86ad10804b4cc38e4c0470054886d1547ae7d44eff61ec5dda6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "recipe/index.html.twig"));

        $__internal_7613a649f3ad61b160077eb1770dae16dc77e3f6ea337c3dfade3e1204027ac0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7613a649f3ad61b160077eb1770dae16dc77e3f6ea337c3dfade3e1204027ac0->enter($__internal_7613a649f3ad61b160077eb1770dae16dc77e3f6ea337c3dfade3e1204027ac0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "recipe/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef4f69c3e210f86ad10804b4cc38e4c0470054886d1547ae7d44eff61ec5dda6->leave($__internal_ef4f69c3e210f86ad10804b4cc38e4c0470054886d1547ae7d44eff61ec5dda6_prof);

        
        $__internal_7613a649f3ad61b160077eb1770dae16dc77e3f6ea337c3dfade3e1204027ac0->leave($__internal_7613a649f3ad61b160077eb1770dae16dc77e3f6ea337c3dfade3e1204027ac0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f95a7f3dbfa2091cf9437a0082685e13aed0319bc9e71f8a3296a46cf5c04d60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f95a7f3dbfa2091cf9437a0082685e13aed0319bc9e71f8a3296a46cf5c04d60->enter($__internal_f95a7f3dbfa2091cf9437a0082685e13aed0319bc9e71f8a3296a46cf5c04d60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5aabfba18e99b55ba4852c0e8c40ca63d2618abfedc53559a7dd9b1526d10ded = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5aabfba18e99b55ba4852c0e8c40ca63d2618abfedc53559a7dd9b1526d10ded->enter($__internal_5aabfba18e99b55ba4852c0e8c40ca63d2618abfedc53559a7dd9b1526d10ded_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Lista przepisów</h1>

    <table class='table'>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nazwa</th>
                <th>Opis</th>
                <th>Ikona</th>
                <th>Operacje</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["recipes"] ?? $this->getContext($context, "recipes")));
        foreach ($context['_seq'] as $context["_key"] => $context["recipe"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recipe_show", array("id" => $this->getAttribute($context["recipe"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["recipe"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["recipe"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["recipe"], "description", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["recipe"], "icon", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recipe_show", array("id" => $this->getAttribute($context["recipe"], "id", array()))), "html", null, true);
            echo "\">Pokaż</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 29
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
        // line 35
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recipe_new");
        echo "\">Dodaj nowy przepis</a>
        </li>
    </ul>
";
        
        $__internal_5aabfba18e99b55ba4852c0e8c40ca63d2618abfedc53559a7dd9b1526d10ded->leave($__internal_5aabfba18e99b55ba4852c0e8c40ca63d2618abfedc53559a7dd9b1526d10ded_prof);

        
        $__internal_f95a7f3dbfa2091cf9437a0082685e13aed0319bc9e71f8a3296a46cf5c04d60->leave($__internal_f95a7f3dbfa2091cf9437a0082685e13aed0319bc9e71f8a3296a46cf5c04d60_prof);

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
        return array (  117 => 40,  110 => 35,  98 => 29,  92 => 26,  85 => 22,  81 => 21,  77 => 20,  71 => 19,  68 => 18,  64 => 17,  49 => 4,  40 => 3,  11 => 1,);
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

    <table class='table'>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nazwa</th>
                <th>Opis</th>
                <th>Ikona</th>
                <th>Operacje</th>
            </tr>
        </thead>
        <tbody>
        {% for recipe in recipes %}
            <tr>
                <td><a href=\"{{ path('recipe_show', { 'id': recipe.id }) }}\">{{ recipe.id }}</a></td>
                <td>{{ recipe.name }}</td>
                <td>{{ recipe.description }}</td>
                <td>{{ recipe.icon }}</td>
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
", "recipe/index.html.twig", "/home/kamil/symfony_projects/cookbook-symfony/app/Resources/views/recipe/index.html.twig");
    }
}
