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
        $__internal_0e4923579550fa5c33d06616cf7f31232f5787760095a508653d2fdcaa58f5a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e4923579550fa5c33d06616cf7f31232f5787760095a508653d2fdcaa58f5a0->enter($__internal_0e4923579550fa5c33d06616cf7f31232f5787760095a508653d2fdcaa58f5a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ingredienttype/index.html.twig"));

        $__internal_094924f890db22cc698da0fbdbe0896b6914f9ba806d8200ce2cb16a7f362e99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_094924f890db22cc698da0fbdbe0896b6914f9ba806d8200ce2cb16a7f362e99->enter($__internal_094924f890db22cc698da0fbdbe0896b6914f9ba806d8200ce2cb16a7f362e99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ingredienttype/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e4923579550fa5c33d06616cf7f31232f5787760095a508653d2fdcaa58f5a0->leave($__internal_0e4923579550fa5c33d06616cf7f31232f5787760095a508653d2fdcaa58f5a0_prof);

        
        $__internal_094924f890db22cc698da0fbdbe0896b6914f9ba806d8200ce2cb16a7f362e99->leave($__internal_094924f890db22cc698da0fbdbe0896b6914f9ba806d8200ce2cb16a7f362e99_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_362fc234e263cfecfd47bbebc98e92f5c5265d298502da917c2b67b0ce414b86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_362fc234e263cfecfd47bbebc98e92f5c5265d298502da917c2b67b0ce414b86->enter($__internal_362fc234e263cfecfd47bbebc98e92f5c5265d298502da917c2b67b0ce414b86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e55d48977cd5f6cc02f9f0f4e6e7637379deef4cd313cf29e15d9021b41d0d5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e55d48977cd5f6cc02f9f0f4e6e7637379deef4cd313cf29e15d9021b41d0d5a->enter($__internal_e55d48977cd5f6cc02f9f0f4e6e7637379deef4cd313cf29e15d9021b41d0d5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Ingredienttypes list</h1>

    <table class=\"table\">
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
        
        $__internal_e55d48977cd5f6cc02f9f0f4e6e7637379deef4cd313cf29e15d9021b41d0d5a->leave($__internal_e55d48977cd5f6cc02f9f0f4e6e7637379deef4cd313cf29e15d9021b41d0d5a_prof);

        
        $__internal_362fc234e263cfecfd47bbebc98e92f5c5265d298502da917c2b67b0ce414b86->leave($__internal_362fc234e263cfecfd47bbebc98e92f5c5265d298502da917c2b67b0ce414b86_prof);

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

    <table class=\"table\">
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
", "ingredienttype/index.html.twig", "/home/kamil/Dokumenty/studia/cookbook-symfony/app/Resources/views/ingredienttype/index.html.twig");
    }
}
