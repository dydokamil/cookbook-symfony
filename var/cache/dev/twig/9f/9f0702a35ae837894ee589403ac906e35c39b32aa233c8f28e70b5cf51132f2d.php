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
        $__internal_eb88d55b6eecf6983d5926b62b243d2b07b3c62e587db57b047d98e74eecf33f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb88d55b6eecf6983d5926b62b243d2b07b3c62e587db57b047d98e74eecf33f->enter($__internal_eb88d55b6eecf6983d5926b62b243d2b07b3c62e587db57b047d98e74eecf33f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ingredienttype/index.html.twig"));

        $__internal_f29445fbb3f4bd372a2f04c987bf3e34f894949fad4dc2506cf6ff240c6996d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f29445fbb3f4bd372a2f04c987bf3e34f894949fad4dc2506cf6ff240c6996d3->enter($__internal_f29445fbb3f4bd372a2f04c987bf3e34f894949fad4dc2506cf6ff240c6996d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ingredienttype/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb88d55b6eecf6983d5926b62b243d2b07b3c62e587db57b047d98e74eecf33f->leave($__internal_eb88d55b6eecf6983d5926b62b243d2b07b3c62e587db57b047d98e74eecf33f_prof);

        
        $__internal_f29445fbb3f4bd372a2f04c987bf3e34f894949fad4dc2506cf6ff240c6996d3->leave($__internal_f29445fbb3f4bd372a2f04c987bf3e34f894949fad4dc2506cf6ff240c6996d3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9bc62d523160bb8d92fe199b8a57522122f7facd6af60c24a995ed38e0d4d26b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bc62d523160bb8d92fe199b8a57522122f7facd6af60c24a995ed38e0d4d26b->enter($__internal_9bc62d523160bb8d92fe199b8a57522122f7facd6af60c24a995ed38e0d4d26b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0a72805e96c2630fac2fd5fc8b1f5354ded643f9ec3cc7db5d2b23896071e8d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a72805e96c2630fac2fd5fc8b1f5354ded643f9ec3cc7db5d2b23896071e8d9->enter($__internal_0a72805e96c2630fac2fd5fc8b1f5354ded643f9ec3cc7db5d2b23896071e8d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0a72805e96c2630fac2fd5fc8b1f5354ded643f9ec3cc7db5d2b23896071e8d9->leave($__internal_0a72805e96c2630fac2fd5fc8b1f5354ded643f9ec3cc7db5d2b23896071e8d9_prof);

        
        $__internal_9bc62d523160bb8d92fe199b8a57522122f7facd6af60c24a995ed38e0d4d26b->leave($__internal_9bc62d523160bb8d92fe199b8a57522122f7facd6af60c24a995ed38e0d4d26b_prof);

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
", "ingredienttype/index.html.twig", "/home/kamil/Dokumenty/studia/cookbook/app/Resources/views/ingredienttype/index.html.twig");
    }
}
