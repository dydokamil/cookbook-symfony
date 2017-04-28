<?php

/* ingredienttype/index.html.twig */
class __TwigTemplate_3003eb8b0ad5509954771af1163e18fd6e98ce09560551995e52e7036ec8330e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ingredienttype/index.html.twig", 1);
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
        $__internal_9e1fc6d1883710e1b103b55185dbd5e81d90d134577e44459fd539f53279cff8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e1fc6d1883710e1b103b55185dbd5e81d90d134577e44459fd539f53279cff8->enter($__internal_9e1fc6d1883710e1b103b55185dbd5e81d90d134577e44459fd539f53279cff8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ingredienttype/index.html.twig"));

        $__internal_778a2b1cdf8f3bca8842b43ce7c42797c1be04b02f197d630955ddfb84ebc6e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_778a2b1cdf8f3bca8842b43ce7c42797c1be04b02f197d630955ddfb84ebc6e7->enter($__internal_778a2b1cdf8f3bca8842b43ce7c42797c1be04b02f197d630955ddfb84ebc6e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ingredienttype/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e1fc6d1883710e1b103b55185dbd5e81d90d134577e44459fd539f53279cff8->leave($__internal_9e1fc6d1883710e1b103b55185dbd5e81d90d134577e44459fd539f53279cff8_prof);

        
        $__internal_778a2b1cdf8f3bca8842b43ce7c42797c1be04b02f197d630955ddfb84ebc6e7->leave($__internal_778a2b1cdf8f3bca8842b43ce7c42797c1be04b02f197d630955ddfb84ebc6e7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6c7bbc084e604bab4683f7e7d70063b9f283eeed35ff8699a030dce57213ae29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c7bbc084e604bab4683f7e7d70063b9f283eeed35ff8699a030dce57213ae29->enter($__internal_6c7bbc084e604bab4683f7e7d70063b9f283eeed35ff8699a030dce57213ae29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_54c1bbde066010f90a1638006074f7bab85fdc65b0497a1679318ce80bf9eea4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54c1bbde066010f90a1638006074f7bab85fdc65b0497a1679318ce80bf9eea4->enter($__internal_54c1bbde066010f90a1638006074f7bab85fdc65b0497a1679318ce80bf9eea4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Ingredienttypes list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Type</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ingredientTypes"] ?? $this->getContext($context, "ingredientTypes")));
        foreach ($context['_seq'] as $context["_key"] => $context["ingredientType"]) {
            // line 16
            echo "            <tr>
                <td><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ingredienttype_show", array("id" => $this->getAttribute($context["ingredientType"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ingredientType"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["ingredientType"], "type", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ingredienttype_show", array("id" => $this->getAttribute($context["ingredientType"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ingredienttype_edit", array("id" => $this->getAttribute($context["ingredientType"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ingredientType'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ingredienttype_new");
        echo "\">Create a new ingredientType</a>
        </li>
    </ul>
";
        
        $__internal_54c1bbde066010f90a1638006074f7bab85fdc65b0497a1679318ce80bf9eea4->leave($__internal_54c1bbde066010f90a1638006074f7bab85fdc65b0497a1679318ce80bf9eea4_prof);

        
        $__internal_6c7bbc084e604bab4683f7e7d70063b9f283eeed35ff8699a030dce57213ae29->leave($__internal_6c7bbc084e604bab4683f7e7d70063b9f283eeed35ff8699a030dce57213ae29_prof);

    }

    public function getTemplateName()
    {
        return "ingredienttype/index.html.twig";
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
    <h1>Ingredienttypes list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Type</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for ingredientType in ingredientTypes %}
            <tr>
                <td><a href=\"{{ path('ingredienttype_show', { 'id': ingredientType.id }) }}\">{{ ingredientType.id }}</a></td>
                <td>{{ ingredientType.type }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('ingredienttype_show', { 'id': ingredientType.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('ingredienttype_edit', { 'id': ingredientType.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('ingredienttype_new') }}\">Create a new ingredientType</a>
        </li>
    </ul>
{% endblock %}
", "ingredienttype/index.html.twig", "/home/kamil/symfony_projects/cookbook-symfony/app/Resources/views/ingredienttype/index.html.twig");
    }
}
