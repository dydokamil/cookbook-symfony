<?php

/* ingredientstepjoin/edit.html.twig */
class __TwigTemplate_f914f121b3a6d1d321daf08f172e3266cac4b3fcec116eea2ddd301b60c301b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ingredientstepjoin/edit.html.twig", 1);
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
        $__internal_13284aa5e318cd4524659bf4c0beff491d0700899ed61d9f24a97d18ac96a697 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13284aa5e318cd4524659bf4c0beff491d0700899ed61d9f24a97d18ac96a697->enter($__internal_13284aa5e318cd4524659bf4c0beff491d0700899ed61d9f24a97d18ac96a697_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ingredientstepjoin/edit.html.twig"));

        $__internal_c31f276efc586335298fb17a7842181b69159b8775b7c38c8fb6ed401096699f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c31f276efc586335298fb17a7842181b69159b8775b7c38c8fb6ed401096699f->enter($__internal_c31f276efc586335298fb17a7842181b69159b8775b7c38c8fb6ed401096699f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ingredientstepjoin/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_13284aa5e318cd4524659bf4c0beff491d0700899ed61d9f24a97d18ac96a697->leave($__internal_13284aa5e318cd4524659bf4c0beff491d0700899ed61d9f24a97d18ac96a697_prof);

        
        $__internal_c31f276efc586335298fb17a7842181b69159b8775b7c38c8fb6ed401096699f->leave($__internal_c31f276efc586335298fb17a7842181b69159b8775b7c38c8fb6ed401096699f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4558a89fe55938bcb1a5fcc643b54173e2ff593d961e434ea49a37f6003eaaae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4558a89fe55938bcb1a5fcc643b54173e2ff593d961e434ea49a37f6003eaaae->enter($__internal_4558a89fe55938bcb1a5fcc643b54173e2ff593d961e434ea49a37f6003eaaae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1de045747c6a2c092c732d459724e8db8f95991678cfe46110993858a3c3c24c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1de045747c6a2c092c732d459724e8db8f95991678cfe46110993858a3c3c24c->enter($__internal_1de045747c6a2c092c732d459724e8db8f95991678cfe46110993858a3c3c24c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Ingredientstepjoin edit</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ingredientstepjoin_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_1de045747c6a2c092c732d459724e8db8f95991678cfe46110993858a3c3c24c->leave($__internal_1de045747c6a2c092c732d459724e8db8f95991678cfe46110993858a3c3c24c_prof);

        
        $__internal_4558a89fe55938bcb1a5fcc643b54173e2ff593d961e434ea49a37f6003eaaae->leave($__internal_4558a89fe55938bcb1a5fcc643b54173e2ff593d961e434ea49a37f6003eaaae_prof);

    }

    public function getTemplateName()
    {
        return "ingredientstepjoin/edit.html.twig";
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
    <h1>Ingredientstepjoin edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('ingredientstepjoin_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "ingredientstepjoin/edit.html.twig", "/home/kamil/symfony_projects/cookbook-symfony/app/Resources/views/ingredientstepjoin/edit.html.twig");
    }
}
