<?php

/* recipe/edit.html.twig */
class __TwigTemplate_7d7e3688e07c403a696d489fc042b46fe096d87e05d001c92ddf3d88951f0383 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "recipe/edit.html.twig", 1);
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
        $__internal_fc6aff997ce12bc12983f44eb2d32a6ba1f367d25c0135d4a5123dab8c2416a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc6aff997ce12bc12983f44eb2d32a6ba1f367d25c0135d4a5123dab8c2416a9->enter($__internal_fc6aff997ce12bc12983f44eb2d32a6ba1f367d25c0135d4a5123dab8c2416a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "recipe/edit.html.twig"));

        $__internal_a9e9746a0df052efb90f8db9482f34836b0ffa518b659e988db03ced6c48fcac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9e9746a0df052efb90f8db9482f34836b0ffa518b659e988db03ced6c48fcac->enter($__internal_a9e9746a0df052efb90f8db9482f34836b0ffa518b659e988db03ced6c48fcac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "recipe/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc6aff997ce12bc12983f44eb2d32a6ba1f367d25c0135d4a5123dab8c2416a9->leave($__internal_fc6aff997ce12bc12983f44eb2d32a6ba1f367d25c0135d4a5123dab8c2416a9_prof);

        
        $__internal_a9e9746a0df052efb90f8db9482f34836b0ffa518b659e988db03ced6c48fcac->leave($__internal_a9e9746a0df052efb90f8db9482f34836b0ffa518b659e988db03ced6c48fcac_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ffc199ea619c5e9340524b936b5c66937c854d50d8a0629095f0ed0b057ffa6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffc199ea619c5e9340524b936b5c66937c854d50d8a0629095f0ed0b057ffa6a->enter($__internal_ffc199ea619c5e9340524b936b5c66937c854d50d8a0629095f0ed0b057ffa6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9879e2c7305199499fbaab893e88b4845a95a73e3ad6bfbb630d695329eabb95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9879e2c7305199499fbaab893e88b4845a95a73e3ad6bfbb630d695329eabb95->enter($__internal_9879e2c7305199499fbaab893e88b4845a95a73e3ad6bfbb630d695329eabb95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Edycja przepisu</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edytuj\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recipe_index");
        echo "\">Powrót do listy</a>
        </li>
        <li>
            <a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recipestep_new", array("recipe" => $this->getAttribute(($context["recipe"] ?? $this->getContext($context, "recipe")), "id", array()))), "html", null, true);
        echo "\">Dodaj krok</a>
        </li>
        <li>
            ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Usuń\">
            ";
        // line 21
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_9879e2c7305199499fbaab893e88b4845a95a73e3ad6bfbb630d695329eabb95->leave($__internal_9879e2c7305199499fbaab893e88b4845a95a73e3ad6bfbb630d695329eabb95_prof);

        
        $__internal_ffc199ea619c5e9340524b936b5c66937c854d50d8a0629095f0ed0b057ffa6a->leave($__internal_ffc199ea619c5e9340524b936b5c66937c854d50d8a0629095f0ed0b057ffa6a_prof);

    }

    public function getTemplateName()
    {
        return "recipe/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 21,  81 => 19,  75 => 16,  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Edycja przepisu</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edytuj\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('recipe_index') }}\">Powrót do listy</a>
        </li>
        <li>
            <a href=\"{{ path('recipestep_new', { 'recipe': recipe.id }) }}\">Dodaj krok</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Usuń\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "recipe/edit.html.twig", "/home/kamil/symfony_projects/cookbook-symfony/app/Resources/views/recipe/edit.html.twig");
    }
}
