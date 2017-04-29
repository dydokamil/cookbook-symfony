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
        $__internal_6f53f88ec936f4782d238139ed95aee46b35f76186954bc06f87115fc9461a6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f53f88ec936f4782d238139ed95aee46b35f76186954bc06f87115fc9461a6c->enter($__internal_6f53f88ec936f4782d238139ed95aee46b35f76186954bc06f87115fc9461a6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "recipestep/index.html.twig"));

        $__internal_e326841b766691e5da149a6a473b9b7b11dccd749fb4b346502d36f27b8b478d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e326841b766691e5da149a6a473b9b7b11dccd749fb4b346502d36f27b8b478d->enter($__internal_e326841b766691e5da149a6a473b9b7b11dccd749fb4b346502d36f27b8b478d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "recipestep/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f53f88ec936f4782d238139ed95aee46b35f76186954bc06f87115fc9461a6c->leave($__internal_6f53f88ec936f4782d238139ed95aee46b35f76186954bc06f87115fc9461a6c_prof);

        
        $__internal_e326841b766691e5da149a6a473b9b7b11dccd749fb4b346502d36f27b8b478d->leave($__internal_e326841b766691e5da149a6a473b9b7b11dccd749fb4b346502d36f27b8b478d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_10f3ea6fb8326c7ca9a7ac7e0eb89c865fd09b0fbf380827e32e3b0182d0b234 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10f3ea6fb8326c7ca9a7ac7e0eb89c865fd09b0fbf380827e32e3b0182d0b234->enter($__internal_10f3ea6fb8326c7ca9a7ac7e0eb89c865fd09b0fbf380827e32e3b0182d0b234_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ebbddfca6bbeec46abb3c682b849afc01c95407562b582cdc7bebf65920738cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebbddfca6bbeec46abb3c682b849afc01c95407562b582cdc7bebf65920738cc->enter($__internal_ebbddfca6bbeec46abb3c682b849afc01c95407562b582cdc7bebf65920738cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Recipesteps list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Preptime</th>
                <th>Number</th>
                <th>Instructions</th>
                <th>Cooktime</th>
                <th>Actions</th>
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
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recipestep_edit", array("id" => $this->getAttribute($context["recipeStep"], "id", array()))), "html", null, true);
            echo "\">edit</a>
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

    <ul>
        <li>
            <a href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recipestep_new");
        echo "\">Create a new recipeStep</a>
        </li>
    </ul>
";
        
        $__internal_ebbddfca6bbeec46abb3c682b849afc01c95407562b582cdc7bebf65920738cc->leave($__internal_ebbddfca6bbeec46abb3c682b849afc01c95407562b582cdc7bebf65920738cc_prof);

        
        $__internal_10f3ea6fb8326c7ca9a7ac7e0eb89c865fd09b0fbf380827e32e3b0182d0b234->leave($__internal_10f3ea6fb8326c7ca9a7ac7e0eb89c865fd09b0fbf380827e32e3b0182d0b234_prof);

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
        return array (  122 => 42,  115 => 37,  103 => 31,  97 => 28,  90 => 24,  86 => 23,  82 => 22,  78 => 21,  72 => 20,  69 => 19,  65 => 18,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Recipesteps list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Preptime</th>
                <th>Number</th>
                <th>Instructions</th>
                <th>Cooktime</th>
                <th>Actions</th>
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
                            <a href=\"{{ path('recipestep_show', { 'id': recipeStep.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('recipestep_edit', { 'id': recipeStep.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('recipestep_new') }}\">Create a new recipeStep</a>
        </li>
    </ul>
{% endblock %}
", "recipestep/index.html.twig", "/home/kamil/Dokumenty/studia/cookbook/app/Resources/views/recipestep/index.html.twig");
    }
}
