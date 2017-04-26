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
        $__internal_ceae9372bab5d527873a433b371cfc28852654bc1a5cd6e86b10208f6884355c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ceae9372bab5d527873a433b371cfc28852654bc1a5cd6e86b10208f6884355c->enter($__internal_ceae9372bab5d527873a433b371cfc28852654bc1a5cd6e86b10208f6884355c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "recipe/edit.html.twig"));

        $__internal_df57994d55c77dd93ae90a4d49b11e99850f65be995bd943f12d707bdc7db7b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df57994d55c77dd93ae90a4d49b11e99850f65be995bd943f12d707bdc7db7b4->enter($__internal_df57994d55c77dd93ae90a4d49b11e99850f65be995bd943f12d707bdc7db7b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "recipe/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ceae9372bab5d527873a433b371cfc28852654bc1a5cd6e86b10208f6884355c->leave($__internal_ceae9372bab5d527873a433b371cfc28852654bc1a5cd6e86b10208f6884355c_prof);

        
        $__internal_df57994d55c77dd93ae90a4d49b11e99850f65be995bd943f12d707bdc7db7b4->leave($__internal_df57994d55c77dd93ae90a4d49b11e99850f65be995bd943f12d707bdc7db7b4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8cd869d0cba6427915660b1bc99a70d0e0e4af5b3e352608304bc750fd42348c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cd869d0cba6427915660b1bc99a70d0e0e4af5b3e352608304bc750fd42348c->enter($__internal_8cd869d0cba6427915660b1bc99a70d0e0e4af5b3e352608304bc750fd42348c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_091a44a5be9777eb8c74fd0470448ab8bbe47efd5e11b955ee5d14a54e26b193 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_091a44a5be9777eb8c74fd0470448ab8bbe47efd5e11b955ee5d14a54e26b193->enter($__internal_091a44a5be9777eb8c74fd0470448ab8bbe47efd5e11b955ee5d14a54e26b193_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Usuń\">
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_091a44a5be9777eb8c74fd0470448ab8bbe47efd5e11b955ee5d14a54e26b193->leave($__internal_091a44a5be9777eb8c74fd0470448ab8bbe47efd5e11b955ee5d14a54e26b193_prof);

        
        $__internal_8cd869d0cba6427915660b1bc99a70d0e0e4af5b3e352608304bc750fd42348c->leave($__internal_8cd869d0cba6427915660b1bc99a70d0e0e4af5b3e352608304bc750fd42348c_prof);

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
        return array (  80 => 18,  75 => 16,  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Usuń\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "recipe/edit.html.twig", "/home/kamil/Dokumenty/studia/cookbook/app/Resources/views/recipe/edit.html.twig");
    }
}
