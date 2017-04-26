<?php

/* recipestep/show.html.twig */
class __TwigTemplate_c428d09ce633288bd0091e48538528f1991880258a5e8913a03528a9f18b3b2f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "recipestep/show.html.twig", 1);
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
        $__internal_fbdaedc3dd31b93bec43a27c6cb1385ded6562f1389ac37b17e774c40c1327d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbdaedc3dd31b93bec43a27c6cb1385ded6562f1389ac37b17e774c40c1327d9->enter($__internal_fbdaedc3dd31b93bec43a27c6cb1385ded6562f1389ac37b17e774c40c1327d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "recipestep/show.html.twig"));

        $__internal_fe7f7fd209f0a702f901d82555bc8774ef4642ccbcb8e5766c4114c08224b3f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe7f7fd209f0a702f901d82555bc8774ef4642ccbcb8e5766c4114c08224b3f9->enter($__internal_fe7f7fd209f0a702f901d82555bc8774ef4642ccbcb8e5766c4114c08224b3f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "recipestep/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fbdaedc3dd31b93bec43a27c6cb1385ded6562f1389ac37b17e774c40c1327d9->leave($__internal_fbdaedc3dd31b93bec43a27c6cb1385ded6562f1389ac37b17e774c40c1327d9_prof);

        
        $__internal_fe7f7fd209f0a702f901d82555bc8774ef4642ccbcb8e5766c4114c08224b3f9->leave($__internal_fe7f7fd209f0a702f901d82555bc8774ef4642ccbcb8e5766c4114c08224b3f9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_05c89a1667828c6ae564ce571800d60f5f00d540d96e8350dc1e25f999f20898 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05c89a1667828c6ae564ce571800d60f5f00d540d96e8350dc1e25f999f20898->enter($__internal_05c89a1667828c6ae564ce571800d60f5f00d540d96e8350dc1e25f999f20898_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_45d55868f47889fd3e392e01ef785158dad20b8dac5eb1c5b11dd034b0259130 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45d55868f47889fd3e392e01ef785158dad20b8dac5eb1c5b11dd034b0259130->enter($__internal_45d55868f47889fd3e392e01ef785158dad20b8dac5eb1c5b11dd034b0259130_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Krok</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["recipeStep"] ?? $this->getContext($context, "recipeStep")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Czas przygotowania</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["recipeStep"] ?? $this->getContext($context, "recipeStep")), "prepTime", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Kolejność</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["recipeStep"] ?? $this->getContext($context, "recipeStep")), "number", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Opis</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["recipeStep"] ?? $this->getContext($context, "recipeStep")), "instructions", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Czas gotowania</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["recipeStep"] ?? $this->getContext($context, "recipeStep")), "cookTime", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recipestep_index");
        echo "\">Powrót do listy</a>
        </li>
        <li>
            <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recipestep_edit", array("id" => $this->getAttribute(($context["recipeStep"] ?? $this->getContext($context, "recipeStep")), "id", array()))), "html", null, true);
        echo "\">Edytuj</a>
        </li>
        <li>
            ";
        // line 39
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Usuń\">
            ";
        // line 41
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_45d55868f47889fd3e392e01ef785158dad20b8dac5eb1c5b11dd034b0259130->leave($__internal_45d55868f47889fd3e392e01ef785158dad20b8dac5eb1c5b11dd034b0259130_prof);

        
        $__internal_05c89a1667828c6ae564ce571800d60f5f00d540d96e8350dc1e25f999f20898->leave($__internal_05c89a1667828c6ae564ce571800d60f5f00d540d96e8350dc1e25f999f20898_prof);

    }

    public function getTemplateName()
    {
        return "recipestep/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 41,  107 => 39,  101 => 36,  95 => 33,  85 => 26,  78 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Krok</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ recipeStep.id }}</td>
            </tr>
            <tr>
                <th>Czas przygotowania</th>
                <td>{{ recipeStep.prepTime }}</td>
            </tr>
            <tr>
                <th>Kolejność</th>
                <td>{{ recipeStep.number }}</td>
            </tr>
            <tr>
                <th>Opis</th>
                <td>{{ recipeStep.instructions }}</td>
            </tr>
            <tr>
                <th>Czas gotowania</th>
                <td>{{ recipeStep.cookTime }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('recipestep_index') }}\">Powrót do listy</a>
        </li>
        <li>
            <a href=\"{{ path('recipestep_edit', { 'id': recipeStep.id }) }}\">Edytuj</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Usuń\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "recipestep/show.html.twig", "/home/kamil/Dokumenty/studia/cookbook/app/Resources/views/recipestep/show.html.twig");
    }
}
