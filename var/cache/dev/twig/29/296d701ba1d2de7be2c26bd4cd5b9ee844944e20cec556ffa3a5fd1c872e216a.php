<?php

/* recipestep/new.html.twig */
class __TwigTemplate_0198d6f8423dd9b50cd09c175a05b47fd8078f011d7c2bf19dbe486a87fc92f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "recipestep/new.html.twig", 1);
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
        $__internal_dceb5ed6b689af59b93ed2bd1d8c3e6d5063a60d3aa47f42aa7e313cb1cdef29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dceb5ed6b689af59b93ed2bd1d8c3e6d5063a60d3aa47f42aa7e313cb1cdef29->enter($__internal_dceb5ed6b689af59b93ed2bd1d8c3e6d5063a60d3aa47f42aa7e313cb1cdef29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "recipestep/new.html.twig"));

        $__internal_bb9d82f13a96415157be6ba48b36d8f5a61964821a55d5d1132de70bb5a486e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb9d82f13a96415157be6ba48b36d8f5a61964821a55d5d1132de70bb5a486e6->enter($__internal_bb9d82f13a96415157be6ba48b36d8f5a61964821a55d5d1132de70bb5a486e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "recipestep/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dceb5ed6b689af59b93ed2bd1d8c3e6d5063a60d3aa47f42aa7e313cb1cdef29->leave($__internal_dceb5ed6b689af59b93ed2bd1d8c3e6d5063a60d3aa47f42aa7e313cb1cdef29_prof);

        
        $__internal_bb9d82f13a96415157be6ba48b36d8f5a61964821a55d5d1132de70bb5a486e6->leave($__internal_bb9d82f13a96415157be6ba48b36d8f5a61964821a55d5d1132de70bb5a486e6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f781e0983182131abf053353f7c2751e2721b8ff5c8e84c1a97384987f483739 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f781e0983182131abf053353f7c2751e2721b8ff5c8e84c1a97384987f483739->enter($__internal_f781e0983182131abf053353f7c2751e2721b8ff5c8e84c1a97384987f483739_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8203ee093e2cfb75daed6c5642f8a3c53bff9692c26a8ab68e4fa99d60821d4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8203ee093e2cfb75daed6c5642f8a3c53bff9692c26a8ab68e4fa99d60821d4d->enter($__internal_8203ee093e2cfb75daed6c5642f8a3c53bff9692c26a8ab68e4fa99d60821d4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Recipestep creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recipestep_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_8203ee093e2cfb75daed6c5642f8a3c53bff9692c26a8ab68e4fa99d60821d4d->leave($__internal_8203ee093e2cfb75daed6c5642f8a3c53bff9692c26a8ab68e4fa99d60821d4d_prof);

        
        $__internal_f781e0983182131abf053353f7c2751e2721b8ff5c8e84c1a97384987f483739->leave($__internal_f781e0983182131abf053353f7c2751e2721b8ff5c8e84c1a97384987f483739_prof);

    }

    public function getTemplateName()
    {
        return "recipestep/new.html.twig";
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
    <h1>Recipestep creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('recipestep_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "recipestep/new.html.twig", "/home/kamil/symfony_projects/cookbook-symfony/app/Resources/views/recipestep/new.html.twig");
    }
}
