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
        $__internal_eb2c3e0c76b4f408f357b12f5595350dff4632e67f310c62a87aced4e7c69ac2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb2c3e0c76b4f408f357b12f5595350dff4632e67f310c62a87aced4e7c69ac2->enter($__internal_eb2c3e0c76b4f408f357b12f5595350dff4632e67f310c62a87aced4e7c69ac2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "recipe/show.html.twig"));

        $__internal_90d6c7eae8acbf27737df5755d752a04dc049b2e258a30d31307084f9027c5a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90d6c7eae8acbf27737df5755d752a04dc049b2e258a30d31307084f9027c5a5->enter($__internal_90d6c7eae8acbf27737df5755d752a04dc049b2e258a30d31307084f9027c5a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "recipe/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb2c3e0c76b4f408f357b12f5595350dff4632e67f310c62a87aced4e7c69ac2->leave($__internal_eb2c3e0c76b4f408f357b12f5595350dff4632e67f310c62a87aced4e7c69ac2_prof);

        
        $__internal_90d6c7eae8acbf27737df5755d752a04dc049b2e258a30d31307084f9027c5a5->leave($__internal_90d6c7eae8acbf27737df5755d752a04dc049b2e258a30d31307084f9027c5a5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_bdea4604a02b632455da6e4b44e22078723cf42e78601ad10eee9ff82cce2cfa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdea4604a02b632455da6e4b44e22078723cf42e78601ad10eee9ff82cce2cfa->enter($__internal_bdea4604a02b632455da6e4b44e22078723cf42e78601ad10eee9ff82cce2cfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8c16828a160a694701a95fea50c17d71fc5145444a7c6cf633321e5ad6718307 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c16828a160a694701a95fea50c17d71fc5145444a7c6cf633321e5ad6718307->enter($__internal_8c16828a160a694701a95fea50c17d71fc5145444a7c6cf633321e5ad6718307_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Przepis</h1>

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
                <th>Nazwa</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["recipe"] ?? $this->getContext($context, "recipe")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Opis</th>
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
        echo "\">Powrót do listy</a>
        </li>
        <li>
            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recipe_edit", array("id" => $this->getAttribute(($context["recipe"] ?? $this->getContext($context, "recipe")), "id", array()))), "html", null, true);
        echo "\">Edytuj</a>
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
            ";
        // line 36
        echo "                <input type=\"submit\" value=\"Usuń\">
            ";
        // line 37
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_8c16828a160a694701a95fea50c17d71fc5145444a7c6cf633321e5ad6718307->leave($__internal_8c16828a160a694701a95fea50c17d71fc5145444a7c6cf633321e5ad6718307_prof);

        
        $__internal_bdea4604a02b632455da6e4b44e22078723cf42e78601ad10eee9ff82cce2cfa->leave($__internal_bdea4604a02b632455da6e4b44e22078723cf42e78601ad10eee9ff82cce2cfa_prof);

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
        return array (  106 => 37,  103 => 36,  99 => 34,  93 => 31,  87 => 28,  81 => 25,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Przepis</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ recipe.id }}</td>
            </tr>
            <tr>
                <th>Nazwa</th>
                <td>{{ recipe.name }}</td>
            </tr>
            <tr>
                <th>Opis</th>
                <td>{{ recipe.description }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('recipe_index') }}\">Powrót do listy</a>
        </li>
        <li>
            <a href=\"{{ path('recipe_edit', { 'id': recipe.id }) }}\">Edytuj</a>
        </li>
        <li>
            <a href=\"{{ path('recipestep_new', { 'recipe': recipe.id }) }}\">Dodaj krok</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
            {# TODO usuwanie wszystkich kroków #}
                <input type=\"submit\" value=\"Usuń\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "recipe/show.html.twig", "/home/kamil/Dokumenty/studia/cookbook/app/Resources/views/recipe/show.html.twig");
    }
}
