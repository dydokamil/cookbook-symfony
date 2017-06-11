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
        $__internal_ed8e3ca30e400fa74fe933675e08b698686e2ca4ff3db37ba1b0d3f701026809 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed8e3ca30e400fa74fe933675e08b698686e2ca4ff3db37ba1b0d3f701026809->enter($__internal_ed8e3ca30e400fa74fe933675e08b698686e2ca4ff3db37ba1b0d3f701026809_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "recipe/index.html.twig"));

        $__internal_ec5703dab24cef779171b8eaa3173a819951815e929d80fc36ccaf6ac6abca29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec5703dab24cef779171b8eaa3173a819951815e929d80fc36ccaf6ac6abca29->enter($__internal_ec5703dab24cef779171b8eaa3173a819951815e929d80fc36ccaf6ac6abca29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "recipe/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed8e3ca30e400fa74fe933675e08b698686e2ca4ff3db37ba1b0d3f701026809->leave($__internal_ed8e3ca30e400fa74fe933675e08b698686e2ca4ff3db37ba1b0d3f701026809_prof);

        
        $__internal_ec5703dab24cef779171b8eaa3173a819951815e929d80fc36ccaf6ac6abca29->leave($__internal_ec5703dab24cef779171b8eaa3173a819951815e929d80fc36ccaf6ac6abca29_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3f139a86465b0cb5aa01453b315455b9d0d3c08314446d67d3d42713d69bd1ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f139a86465b0cb5aa01453b315455b9d0d3c08314446d67d3d42713d69bd1ed->enter($__internal_3f139a86465b0cb5aa01453b315455b9d0d3c08314446d67d3d42713d69bd1ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7d4d75efe29d807a3b855db380711cd04ce7704d6ef50ca31fe6b49f1be62803 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d4d75efe29d807a3b855db380711cd04ce7704d6ef50ca31fe6b49f1be62803->enter($__internal_7d4d75efe29d807a3b855db380711cd04ce7704d6ef50ca31fe6b49f1be62803_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Lista przepisów</h1>

    <table class='table'>
        <thead>
            <tr>
                <th>Zdjęcie</th>
                <th>Nazwa</th>
                <th>Opis</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["recipes"] ?? $this->getContext($context, "recipes")));
        foreach ($context['_seq'] as $context["_key"] => $context["recipe"]) {
            // line 16
            echo "            <tr>
                <td><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recipe_show", array("id" => $this->getAttribute($context["recipe"], "id", array()))), "html", null, true);
            echo "\"><img height='20%' src='";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/img/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["recipe"], "icon", array()), "html", null, true);
            echo "' /></a></td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["recipe"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["recipe"], "description", array()), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recipe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "        </tbody>
    </table>

    <ul class='list-unstyled'>
        <li>
            <a href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recipe_new");
        echo "\" class='btn btn-info'>Dodaj nowy przepis</a>
        </li>
    </ul>
";
        
        $__internal_7d4d75efe29d807a3b855db380711cd04ce7704d6ef50ca31fe6b49f1be62803->leave($__internal_7d4d75efe29d807a3b855db380711cd04ce7704d6ef50ca31fe6b49f1be62803_prof);

        
        $__internal_3f139a86465b0cb5aa01453b315455b9d0d3c08314446d67d3d42713d69bd1ed->leave($__internal_3f139a86465b0cb5aa01453b315455b9d0d3c08314446d67d3d42713d69bd1ed_prof);

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
        return array (  96 => 27,  89 => 22,  80 => 19,  76 => 18,  69 => 17,  66 => 16,  62 => 15,  49 => 4,  40 => 3,  11 => 1,);
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
                <th>Zdjęcie</th>
                <th>Nazwa</th>
                <th>Opis</th>
            </tr>
        </thead>
        <tbody>
        {% for recipe in recipes %}
            <tr>
                <td><a href=\"{{ path('recipe_show', { 'id': recipe.id }) }}\"><img height='20%' src='{{ asset(\"uploads/img/\") }}{{ recipe.icon }}' /></a></td>
                <td>{{ recipe.name }}</td>
                <td>{{ recipe.description }}</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul class='list-unstyled'>
        <li>
            <a href=\"{{ path('recipe_new') }}\" class='btn btn-info'>Dodaj nowy przepis</a>
        </li>
    </ul>
{% endblock %}
", "recipe/index.html.twig", "/home/kamil/Dokumenty/studia/cookbook-symfony/app/Resources/views/recipe/index.html.twig");
    }
}
