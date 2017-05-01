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
        $__internal_3ee37b0c098489b6fb5272058b3baf5ba96098ce5455466beef316a6700f697e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ee37b0c098489b6fb5272058b3baf5ba96098ce5455466beef316a6700f697e->enter($__internal_3ee37b0c098489b6fb5272058b3baf5ba96098ce5455466beef316a6700f697e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "recipe/edit.html.twig"));

        $__internal_57a340bf5570c3df69318d695718c006befcb3da802eade420b039fb9406fd18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57a340bf5570c3df69318d695718c006befcb3da802eade420b039fb9406fd18->enter($__internal_57a340bf5570c3df69318d695718c006befcb3da802eade420b039fb9406fd18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "recipe/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ee37b0c098489b6fb5272058b3baf5ba96098ce5455466beef316a6700f697e->leave($__internal_3ee37b0c098489b6fb5272058b3baf5ba96098ce5455466beef316a6700f697e_prof);

        
        $__internal_57a340bf5570c3df69318d695718c006befcb3da802eade420b039fb9406fd18->leave($__internal_57a340bf5570c3df69318d695718c006befcb3da802eade420b039fb9406fd18_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_df175db0b3a155d74b1563e36d44601b258a90b01827e7639c060d3ba2f07ffe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df175db0b3a155d74b1563e36d44601b258a90b01827e7639c060d3ba2f07ffe->enter($__internal_df175db0b3a155d74b1563e36d44601b258a90b01827e7639c060d3ba2f07ffe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5634de35b30687838dcbb5bcb198e6da687ba82cf5c6ec246e53c4a8a7597cdd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5634de35b30687838dcbb5bcb198e6da687ba82cf5c6ec246e53c4a8a7597cdd->enter($__internal_5634de35b30687838dcbb5bcb198e6da687ba82cf5c6ec246e53c4a8a7597cdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5634de35b30687838dcbb5bcb198e6da687ba82cf5c6ec246e53c4a8a7597cdd->leave($__internal_5634de35b30687838dcbb5bcb198e6da687ba82cf5c6ec246e53c4a8a7597cdd_prof);

        
        $__internal_df175db0b3a155d74b1563e36d44601b258a90b01827e7639c060d3ba2f07ffe->leave($__internal_df175db0b3a155d74b1563e36d44601b258a90b01827e7639c060d3ba2f07ffe_prof);

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
", "recipe/edit.html.twig", "/home/kamil/symfony_projects/cookbook-symfony/app/Resources/views/recipe/edit.html.twig");
    }
}
