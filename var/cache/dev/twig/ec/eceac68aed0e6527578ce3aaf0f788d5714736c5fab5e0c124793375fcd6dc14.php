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
        $__internal_723589bc40f21017a86e099d9bb12a115c72d30c32abe8f17f9a9dc4fe1e0152 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_723589bc40f21017a86e099d9bb12a115c72d30c32abe8f17f9a9dc4fe1e0152->enter($__internal_723589bc40f21017a86e099d9bb12a115c72d30c32abe8f17f9a9dc4fe1e0152_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "recipe/edit.html.twig"));

        $__internal_c240bc6a20ba03ad7ebb857d6a6c2ea5b477a820b446a5fc7c17f3833de95c20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c240bc6a20ba03ad7ebb857d6a6c2ea5b477a820b446a5fc7c17f3833de95c20->enter($__internal_c240bc6a20ba03ad7ebb857d6a6c2ea5b477a820b446a5fc7c17f3833de95c20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "recipe/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_723589bc40f21017a86e099d9bb12a115c72d30c32abe8f17f9a9dc4fe1e0152->leave($__internal_723589bc40f21017a86e099d9bb12a115c72d30c32abe8f17f9a9dc4fe1e0152_prof);

        
        $__internal_c240bc6a20ba03ad7ebb857d6a6c2ea5b477a820b446a5fc7c17f3833de95c20->leave($__internal_c240bc6a20ba03ad7ebb857d6a6c2ea5b477a820b446a5fc7c17f3833de95c20_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_58c79dfdc1f2e6f903b0766175066230164b671e90898a83f59e11feac71f298 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58c79dfdc1f2e6f903b0766175066230164b671e90898a83f59e11feac71f298->enter($__internal_58c79dfdc1f2e6f903b0766175066230164b671e90898a83f59e11feac71f298_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0c10873de2d9edcfa4bd2e6bbd7c4b05e0d0ffe917c3e7cb76ffa386feef1a93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c10873de2d9edcfa4bd2e6bbd7c4b05e0d0ffe917c3e7cb76ffa386feef1a93->enter($__internal_0c10873de2d9edcfa4bd2e6bbd7c4b05e0d0ffe917c3e7cb76ffa386feef1a93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        <input class='btn btn-warning' type=\"submit\" value=\"Edytuj\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul class='list-unstyled'>
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
                <input class='btn btn-danger' type=\"submit\" value=\"Usuń\">
            ";
        // line 21
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_0c10873de2d9edcfa4bd2e6bbd7c4b05e0d0ffe917c3e7cb76ffa386feef1a93->leave($__internal_0c10873de2d9edcfa4bd2e6bbd7c4b05e0d0ffe917c3e7cb76ffa386feef1a93_prof);

        
        $__internal_58c79dfdc1f2e6f903b0766175066230164b671e90898a83f59e11feac71f298->leave($__internal_58c79dfdc1f2e6f903b0766175066230164b671e90898a83f59e11feac71f298_prof);

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
        <input class='btn btn-warning' type=\"submit\" value=\"Edytuj\" />
    {{ form_end(edit_form) }}

    <ul class='list-unstyled'>
        <li>
            <a href=\"{{ path('recipe_index') }}\">Powrót do listy</a>
        </li>
        <li>
            <a href=\"{{ path('recipestep_new', { 'recipe': recipe.id }) }}\">Dodaj krok</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input class='btn btn-danger' type=\"submit\" value=\"Usuń\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "recipe/edit.html.twig", "/home/kamil/Dokumenty/studia/cookbook-symfony/app/Resources/views/recipe/edit.html.twig");
    }
}
