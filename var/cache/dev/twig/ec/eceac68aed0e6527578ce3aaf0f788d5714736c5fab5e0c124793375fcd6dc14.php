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
        $__internal_77bb712db8f4baad8ca88fc0e422a19067d9d142f0b99a157736babfab1d82cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77bb712db8f4baad8ca88fc0e422a19067d9d142f0b99a157736babfab1d82cf->enter($__internal_77bb712db8f4baad8ca88fc0e422a19067d9d142f0b99a157736babfab1d82cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "recipe/edit.html.twig"));

        $__internal_d9d73f597ea2d7ec4037d5350e0672f42e5afac16c8f924ebf4cec598193369f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9d73f597ea2d7ec4037d5350e0672f42e5afac16c8f924ebf4cec598193369f->enter($__internal_d9d73f597ea2d7ec4037d5350e0672f42e5afac16c8f924ebf4cec598193369f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "recipe/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_77bb712db8f4baad8ca88fc0e422a19067d9d142f0b99a157736babfab1d82cf->leave($__internal_77bb712db8f4baad8ca88fc0e422a19067d9d142f0b99a157736babfab1d82cf_prof);

        
        $__internal_d9d73f597ea2d7ec4037d5350e0672f42e5afac16c8f924ebf4cec598193369f->leave($__internal_d9d73f597ea2d7ec4037d5350e0672f42e5afac16c8f924ebf4cec598193369f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_43ae485fcfe88edbc434bd6a504cd71a22a9d829ffd77752386537f0a671c4fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43ae485fcfe88edbc434bd6a504cd71a22a9d829ffd77752386537f0a671c4fc->enter($__internal_43ae485fcfe88edbc434bd6a504cd71a22a9d829ffd77752386537f0a671c4fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_360677d520ae87f09293eb7c0b2bbae62530257b5b2cc52cbddec37c7814db5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_360677d520ae87f09293eb7c0b2bbae62530257b5b2cc52cbddec37c7814db5b->enter($__internal_360677d520ae87f09293eb7c0b2bbae62530257b5b2cc52cbddec37c7814db5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_360677d520ae87f09293eb7c0b2bbae62530257b5b2cc52cbddec37c7814db5b->leave($__internal_360677d520ae87f09293eb7c0b2bbae62530257b5b2cc52cbddec37c7814db5b_prof);

        
        $__internal_43ae485fcfe88edbc434bd6a504cd71a22a9d829ffd77752386537f0a671c4fc->leave($__internal_43ae485fcfe88edbc434bd6a504cd71a22a9d829ffd77752386537f0a671c4fc_prof);

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
