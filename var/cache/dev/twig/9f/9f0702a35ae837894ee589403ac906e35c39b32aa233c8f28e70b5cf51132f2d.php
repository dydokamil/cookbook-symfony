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
        $__internal_4d5db99fa05e8f2162462088ba296652a6319a816e58d7e1f8bb94fec50370ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d5db99fa05e8f2162462088ba296652a6319a816e58d7e1f8bb94fec50370ee->enter($__internal_4d5db99fa05e8f2162462088ba296652a6319a816e58d7e1f8bb94fec50370ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ingredienttype/index.html.twig"));

        $__internal_ed604db9652cc87992fde1a353cfcb602e09325dc8899992036491cfafd59547 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed604db9652cc87992fde1a353cfcb602e09325dc8899992036491cfafd59547->enter($__internal_ed604db9652cc87992fde1a353cfcb602e09325dc8899992036491cfafd59547_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ingredienttype/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d5db99fa05e8f2162462088ba296652a6319a816e58d7e1f8bb94fec50370ee->leave($__internal_4d5db99fa05e8f2162462088ba296652a6319a816e58d7e1f8bb94fec50370ee_prof);

        
        $__internal_ed604db9652cc87992fde1a353cfcb602e09325dc8899992036491cfafd59547->leave($__internal_ed604db9652cc87992fde1a353cfcb602e09325dc8899992036491cfafd59547_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_35c4edc2106eaf0b7c15cd5d48e3e6e9bf0d02a675c10e882a214d8428f0a15f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35c4edc2106eaf0b7c15cd5d48e3e6e9bf0d02a675c10e882a214d8428f0a15f->enter($__internal_35c4edc2106eaf0b7c15cd5d48e3e6e9bf0d02a675c10e882a214d8428f0a15f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_38359aa88598d89f79987def37f6cc4b5f8082702845fb70b1e262b6028e9c73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38359aa88598d89f79987def37f6cc4b5f8082702845fb70b1e262b6028e9c73->enter($__internal_38359aa88598d89f79987def37f6cc4b5f8082702845fb70b1e262b6028e9c73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_38359aa88598d89f79987def37f6cc4b5f8082702845fb70b1e262b6028e9c73->leave($__internal_38359aa88598d89f79987def37f6cc4b5f8082702845fb70b1e262b6028e9c73_prof);

        
        $__internal_35c4edc2106eaf0b7c15cd5d48e3e6e9bf0d02a675c10e882a214d8428f0a15f->leave($__internal_35c4edc2106eaf0b7c15cd5d48e3e6e9bf0d02a675c10e882a214d8428f0a15f_prof);

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
", "ingredienttype/index.html.twig", "/home/kamil/Dokumenty/studia/cookbook/app/Resources/views/ingredienttype/index.html.twig");
    }
}
