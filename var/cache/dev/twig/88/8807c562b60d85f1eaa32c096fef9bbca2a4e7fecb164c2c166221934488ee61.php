<?php

/* ingredient/index.html.twig */
class __TwigTemplate_e58592c8dde629d0704a0b462a12bebf3f1ac29b872ee1d08c0ccf1c35570aa8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ingredient/index.html.twig", 1);
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
        $__internal_dee68fbdaea598b290f932375062d9a1ab5859f8148f0dad3012ecd568492a24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dee68fbdaea598b290f932375062d9a1ab5859f8148f0dad3012ecd568492a24->enter($__internal_dee68fbdaea598b290f932375062d9a1ab5859f8148f0dad3012ecd568492a24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ingredient/index.html.twig"));

        $__internal_11a93669a4f72d79d30b9a72a4d3bfd69f39613c8a1e375d203ab463fc3d0302 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11a93669a4f72d79d30b9a72a4d3bfd69f39613c8a1e375d203ab463fc3d0302->enter($__internal_11a93669a4f72d79d30b9a72a4d3bfd69f39613c8a1e375d203ab463fc3d0302_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ingredient/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dee68fbdaea598b290f932375062d9a1ab5859f8148f0dad3012ecd568492a24->leave($__internal_dee68fbdaea598b290f932375062d9a1ab5859f8148f0dad3012ecd568492a24_prof);

        
        $__internal_11a93669a4f72d79d30b9a72a4d3bfd69f39613c8a1e375d203ab463fc3d0302->leave($__internal_11a93669a4f72d79d30b9a72a4d3bfd69f39613c8a1e375d203ab463fc3d0302_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c3196b3b327016dacc4734c19bcc6b96fca2560bf92e95fa6e2aceba5d84b933 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3196b3b327016dacc4734c19bcc6b96fca2560bf92e95fa6e2aceba5d84b933->enter($__internal_c3196b3b327016dacc4734c19bcc6b96fca2560bf92e95fa6e2aceba5d84b933_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_082bb073888694ab71322c73a6f5ebc19b9da88e1d4679b7e9110aae4e159256 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_082bb073888694ab71322c73a6f5ebc19b9da88e1d4679b7e9110aae4e159256->enter($__internal_082bb073888694ab71322c73a6f5ebc19b9da88e1d4679b7e9110aae4e159256_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Ingredients list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ingredients"] ?? $this->getContext($context, "ingredients")));
        foreach ($context['_seq'] as $context["_key"] => $context["ingredient"]) {
            // line 16
            echo "            <tr>
                <td><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ingredient_show", array("id" => $this->getAttribute($context["ingredient"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ingredient"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["ingredient"], "name", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ingredient_show", array("id" => $this->getAttribute($context["ingredient"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ingredient_edit", array("id" => $this->getAttribute($context["ingredient"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ingredient'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ingredient_new");
        echo "\">Create a new ingredient</a>
        </li>
    </ul>
";
        
        $__internal_082bb073888694ab71322c73a6f5ebc19b9da88e1d4679b7e9110aae4e159256->leave($__internal_082bb073888694ab71322c73a6f5ebc19b9da88e1d4679b7e9110aae4e159256_prof);

        
        $__internal_c3196b3b327016dacc4734c19bcc6b96fca2560bf92e95fa6e2aceba5d84b933->leave($__internal_c3196b3b327016dacc4734c19bcc6b96fca2560bf92e95fa6e2aceba5d84b933_prof);

    }

    public function getTemplateName()
    {
        return "ingredient/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 36,  100 => 31,  88 => 25,  82 => 22,  75 => 18,  69 => 17,  66 => 16,  62 => 15,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Ingredients list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for ingredient in ingredients %}
            <tr>
                <td><a href=\"{{ path('ingredient_show', { 'id': ingredient.id }) }}\">{{ ingredient.id }}</a></td>
                <td>{{ ingredient.name }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('ingredient_show', { 'id': ingredient.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('ingredient_edit', { 'id': ingredient.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('ingredient_new') }}\">Create a new ingredient</a>
        </li>
    </ul>
{% endblock %}
", "ingredient/index.html.twig", "/home/kamil/symfony_projects/cookbook-symfony/app/Resources/views/ingredient/index.html.twig");
    }
}
