<?php

/* ingredient/new.html.twig */
class __TwigTemplate_0a648eafecf7443c452048503ff10b2ff83b741ab6d243e2de99c53c2f7dec44 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ingredient/new.html.twig", 1);
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
        $__internal_074d90882d34cf21639c9894f9fa585f542457ef393d016912418d20a2e3f2b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_074d90882d34cf21639c9894f9fa585f542457ef393d016912418d20a2e3f2b1->enter($__internal_074d90882d34cf21639c9894f9fa585f542457ef393d016912418d20a2e3f2b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ingredient/new.html.twig"));

        $__internal_0721e78b3701dab930b0a9e818332262fabb8febaa7c759649a4b963b2e5abeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0721e78b3701dab930b0a9e818332262fabb8febaa7c759649a4b963b2e5abeb->enter($__internal_0721e78b3701dab930b0a9e818332262fabb8febaa7c759649a4b963b2e5abeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ingredient/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_074d90882d34cf21639c9894f9fa585f542457ef393d016912418d20a2e3f2b1->leave($__internal_074d90882d34cf21639c9894f9fa585f542457ef393d016912418d20a2e3f2b1_prof);

        
        $__internal_0721e78b3701dab930b0a9e818332262fabb8febaa7c759649a4b963b2e5abeb->leave($__internal_0721e78b3701dab930b0a9e818332262fabb8febaa7c759649a4b963b2e5abeb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2fba28ce241ccf39c51e6e2d6b0ae9c2d54bd0db6b9d1dfc032ffeb3e6864649 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fba28ce241ccf39c51e6e2d6b0ae9c2d54bd0db6b9d1dfc032ffeb3e6864649->enter($__internal_2fba28ce241ccf39c51e6e2d6b0ae9c2d54bd0db6b9d1dfc032ffeb3e6864649_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_67474ed9bee123164c9da23daa5cde75b39a69655eef174ba9cb1435d5b7f484 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67474ed9bee123164c9da23daa5cde75b39a69655eef174ba9cb1435d5b7f484->enter($__internal_67474ed9bee123164c9da23daa5cde75b39a69655eef174ba9cb1435d5b7f484_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Ingredient creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ingredient_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_67474ed9bee123164c9da23daa5cde75b39a69655eef174ba9cb1435d5b7f484->leave($__internal_67474ed9bee123164c9da23daa5cde75b39a69655eef174ba9cb1435d5b7f484_prof);

        
        $__internal_2fba28ce241ccf39c51e6e2d6b0ae9c2d54bd0db6b9d1dfc032ffeb3e6864649->leave($__internal_2fba28ce241ccf39c51e6e2d6b0ae9c2d54bd0db6b9d1dfc032ffeb3e6864649_prof);

    }

    public function getTemplateName()
    {
        return "ingredient/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Ingredient creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('ingredient_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "ingredient/new.html.twig", "/home/kamil/symfony_projects/cookbook-symfony/app/Resources/views/ingredient/new.html.twig");
    }
}
