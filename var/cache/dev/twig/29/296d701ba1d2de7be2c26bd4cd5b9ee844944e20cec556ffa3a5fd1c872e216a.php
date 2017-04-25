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
        $__internal_9a15c6b9490e8ea9cd0c50568529aa83ebdb9e33bcdb4aa623f00e0d7b1f6bd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a15c6b9490e8ea9cd0c50568529aa83ebdb9e33bcdb4aa623f00e0d7b1f6bd3->enter($__internal_9a15c6b9490e8ea9cd0c50568529aa83ebdb9e33bcdb4aa623f00e0d7b1f6bd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "recipestep/new.html.twig"));

        $__internal_a34c3a1954f6b2b49fcdbd61209fa3d2c3c629b6e4ba105e324ac9484f29ff6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a34c3a1954f6b2b49fcdbd61209fa3d2c3c629b6e4ba105e324ac9484f29ff6e->enter($__internal_a34c3a1954f6b2b49fcdbd61209fa3d2c3c629b6e4ba105e324ac9484f29ff6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "recipestep/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a15c6b9490e8ea9cd0c50568529aa83ebdb9e33bcdb4aa623f00e0d7b1f6bd3->leave($__internal_9a15c6b9490e8ea9cd0c50568529aa83ebdb9e33bcdb4aa623f00e0d7b1f6bd3_prof);

        
        $__internal_a34c3a1954f6b2b49fcdbd61209fa3d2c3c629b6e4ba105e324ac9484f29ff6e->leave($__internal_a34c3a1954f6b2b49fcdbd61209fa3d2c3c629b6e4ba105e324ac9484f29ff6e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8866063b25355378828cea93f1ffcc1fdf1babd121b1f76c3c039846a2cc9fea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8866063b25355378828cea93f1ffcc1fdf1babd121b1f76c3c039846a2cc9fea->enter($__internal_8866063b25355378828cea93f1ffcc1fdf1babd121b1f76c3c039846a2cc9fea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2dae517a246dcb4f528dcb312cf49126c1cfa5e387f596924e731c5167190c79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dae517a246dcb4f528dcb312cf49126c1cfa5e387f596924e731c5167190c79->enter($__internal_2dae517a246dcb4f528dcb312cf49126c1cfa5e387f596924e731c5167190c79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2dae517a246dcb4f528dcb312cf49126c1cfa5e387f596924e731c5167190c79->leave($__internal_2dae517a246dcb4f528dcb312cf49126c1cfa5e387f596924e731c5167190c79_prof);

        
        $__internal_8866063b25355378828cea93f1ffcc1fdf1babd121b1f76c3c039846a2cc9fea->leave($__internal_8866063b25355378828cea93f1ffcc1fdf1babd121b1f76c3c039846a2cc9fea_prof);

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
", "recipestep/new.html.twig", "/home/kamil/Dokumenty/studia/cookbook/app/Resources/views/recipestep/new.html.twig");
    }
}
