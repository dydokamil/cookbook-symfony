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
        $__internal_8d898506736d49b7006c84364ab5a302340d5df3fc6cdfc6fd5958e168fa77f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d898506736d49b7006c84364ab5a302340d5df3fc6cdfc6fd5958e168fa77f3->enter($__internal_8d898506736d49b7006c84364ab5a302340d5df3fc6cdfc6fd5958e168fa77f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ingredient/index.html.twig"));

        $__internal_c75eb6a187a2dc32b6ad5c9cfaf9e181cc162b467e5497dcec1135a10a696eb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c75eb6a187a2dc32b6ad5c9cfaf9e181cc162b467e5497dcec1135a10a696eb1->enter($__internal_c75eb6a187a2dc32b6ad5c9cfaf9e181cc162b467e5497dcec1135a10a696eb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ingredient/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d898506736d49b7006c84364ab5a302340d5df3fc6cdfc6fd5958e168fa77f3->leave($__internal_8d898506736d49b7006c84364ab5a302340d5df3fc6cdfc6fd5958e168fa77f3_prof);

        
        $__internal_c75eb6a187a2dc32b6ad5c9cfaf9e181cc162b467e5497dcec1135a10a696eb1->leave($__internal_c75eb6a187a2dc32b6ad5c9cfaf9e181cc162b467e5497dcec1135a10a696eb1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_98d3bdfd44758173e2970917857a7fdb22a9f8809305f656098cd5a5e8c49bc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98d3bdfd44758173e2970917857a7fdb22a9f8809305f656098cd5a5e8c49bc4->enter($__internal_98d3bdfd44758173e2970917857a7fdb22a9f8809305f656098cd5a5e8c49bc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cf945ef80695ef7fe5d8302dcaab91fad6bfb1d916e8b7b0bf15d5379b8b358b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf945ef80695ef7fe5d8302dcaab91fad6bfb1d916e8b7b0bf15d5379b8b358b->enter($__internal_cf945ef80695ef7fe5d8302dcaab91fad6bfb1d916e8b7b0bf15d5379b8b358b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_cf945ef80695ef7fe5d8302dcaab91fad6bfb1d916e8b7b0bf15d5379b8b358b->leave($__internal_cf945ef80695ef7fe5d8302dcaab91fad6bfb1d916e8b7b0bf15d5379b8b358b_prof);

        
        $__internal_98d3bdfd44758173e2970917857a7fdb22a9f8809305f656098cd5a5e8c49bc4->leave($__internal_98d3bdfd44758173e2970917857a7fdb22a9f8809305f656098cd5a5e8c49bc4_prof);

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
