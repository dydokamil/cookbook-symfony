<?php

/* recipestep/index.html.twig */
class __TwigTemplate_e2414af3998cb72d09bf001d49514741be4944c20ea3c01bf8ed1c3a89e92f85 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "recipestep/index.html.twig", 1);
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
        $__internal_1d89325501ba409581d22ac18df535a80a3af8dd9e455f01b7c3c32f2efad46e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d89325501ba409581d22ac18df535a80a3af8dd9e455f01b7c3c32f2efad46e->enter($__internal_1d89325501ba409581d22ac18df535a80a3af8dd9e455f01b7c3c32f2efad46e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "recipestep/index.html.twig"));

        $__internal_0df8c8b30b295553089fcaec4b4479c20c90e2b0180f33cecba59b506aaedd30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0df8c8b30b295553089fcaec4b4479c20c90e2b0180f33cecba59b506aaedd30->enter($__internal_0df8c8b30b295553089fcaec4b4479c20c90e2b0180f33cecba59b506aaedd30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "recipestep/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d89325501ba409581d22ac18df535a80a3af8dd9e455f01b7c3c32f2efad46e->leave($__internal_1d89325501ba409581d22ac18df535a80a3af8dd9e455f01b7c3c32f2efad46e_prof);

        
        $__internal_0df8c8b30b295553089fcaec4b4479c20c90e2b0180f33cecba59b506aaedd30->leave($__internal_0df8c8b30b295553089fcaec4b4479c20c90e2b0180f33cecba59b506aaedd30_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fb349f10d55278836c2c8c685abb5810c4f6f97b3cc009584f3d747aec7024fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb349f10d55278836c2c8c685abb5810c4f6f97b3cc009584f3d747aec7024fb->enter($__internal_fb349f10d55278836c2c8c685abb5810c4f6f97b3cc009584f3d747aec7024fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_70832316d57c408c6113bc9747ca5186c753255fe27276286dcd3976d3983dc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70832316d57c408c6113bc9747ca5186c753255fe27276286dcd3976d3983dc2->enter($__internal_70832316d57c408c6113bc9747ca5186c753255fe27276286dcd3976d3983dc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Lista kroków</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Czas przygotowania</th>
                <th>Kolejność</th>
                <th>Opis</th>
                <th>Czas gotowania</th>
                <th>Operacje</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["recipeSteps"] ?? $this->getContext($context, "recipeSteps")));
        foreach ($context['_seq'] as $context["_key"] => $context["recipeStep"]) {
            // line 19
            echo "            <tr>
                <td><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recipestep_show", array("id" => $this->getAttribute($context["recipeStep"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["recipeStep"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["recipeStep"], "prepTime", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["recipeStep"], "number", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["recipeStep"], "instructions", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["recipeStep"], "cookTime", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recipestep_show", array("id" => $this->getAttribute($context["recipeStep"], "id", array()))), "html", null, true);
            echo "\">Pokaż</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recipestep_edit", array("id" => $this->getAttribute($context["recipeStep"], "id", array()))), "html", null, true);
            echo "\">Edytuj</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recipeStep'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        </tbody>
    </table>
    ";
        
        $__internal_70832316d57c408c6113bc9747ca5186c753255fe27276286dcd3976d3983dc2->leave($__internal_70832316d57c408c6113bc9747ca5186c753255fe27276286dcd3976d3983dc2_prof);

        
        $__internal_fb349f10d55278836c2c8c685abb5810c4f6f97b3cc009584f3d747aec7024fb->leave($__internal_fb349f10d55278836c2c8c685abb5810c4f6f97b3cc009584f3d747aec7024fb_prof);

    }

    public function getTemplateName()
    {
        return "recipestep/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 37,  103 => 31,  97 => 28,  90 => 24,  86 => 23,  82 => 22,  78 => 21,  72 => 20,  69 => 19,  65 => 18,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Lista kroków</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Czas przygotowania</th>
                <th>Kolejność</th>
                <th>Opis</th>
                <th>Czas gotowania</th>
                <th>Operacje</th>
            </tr>
        </thead>
        <tbody>
        {% for recipeStep in recipeSteps %}
            <tr>
                <td><a href=\"{{ path('recipestep_show', { 'id': recipeStep.id }) }}\">{{ recipeStep.id }}</a></td>
                <td>{{ recipeStep.prepTime }}</td>
                <td>{{ recipeStep.number }}</td>
                <td>{{ recipeStep.instructions }}</td>
                <td>{{ recipeStep.cookTime }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('recipestep_show', { 'id': recipeStep.id }) }}\">Pokaż</a>
                        </li>
                        <li>
                            <a href=\"{{ path('recipestep_edit', { 'id': recipeStep.id }) }}\">Edytuj</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
    {# 
    <ul>
        <li>
            <a href=\"{{ path('recipestep_new') }}\">Create a new recipeStep</a>
        </li>
    </ul> 
    #}
{% endblock %}
", "recipestep/index.html.twig", "/home/kamil/Dokumenty/studia/cookbook/app/Resources/views/recipestep/index.html.twig");
    }
}
