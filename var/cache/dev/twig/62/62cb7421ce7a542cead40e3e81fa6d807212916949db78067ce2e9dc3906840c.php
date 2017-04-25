<?php

/* recipe/new.html.twig */
class __TwigTemplate_8163a08655c5ff23ca394f8621e4bfc2df5ba62176edf88eae39a030c18a5691 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "recipe/new.html.twig", 1);
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
        $__internal_4b8cb571d799b3328402dd965db66e429e72a9e80a3db4fa6a00cbad4e8f325f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b8cb571d799b3328402dd965db66e429e72a9e80a3db4fa6a00cbad4e8f325f->enter($__internal_4b8cb571d799b3328402dd965db66e429e72a9e80a3db4fa6a00cbad4e8f325f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "recipe/new.html.twig"));

        $__internal_613f85d26d8e7370a9533a3c24c15a10e716ad2f9d9a67ca3e8824d724d06910 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_613f85d26d8e7370a9533a3c24c15a10e716ad2f9d9a67ca3e8824d724d06910->enter($__internal_613f85d26d8e7370a9533a3c24c15a10e716ad2f9d9a67ca3e8824d724d06910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "recipe/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b8cb571d799b3328402dd965db66e429e72a9e80a3db4fa6a00cbad4e8f325f->leave($__internal_4b8cb571d799b3328402dd965db66e429e72a9e80a3db4fa6a00cbad4e8f325f_prof);

        
        $__internal_613f85d26d8e7370a9533a3c24c15a10e716ad2f9d9a67ca3e8824d724d06910->leave($__internal_613f85d26d8e7370a9533a3c24c15a10e716ad2f9d9a67ca3e8824d724d06910_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a09e4d2b4f58d52493d58354f50d15450d3b6554f60cd7c6f4328e0259814aa9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a09e4d2b4f58d52493d58354f50d15450d3b6554f60cd7c6f4328e0259814aa9->enter($__internal_a09e4d2b4f58d52493d58354f50d15450d3b6554f60cd7c6f4328e0259814aa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_27e783d4c95522136b97167ca95b62461a09704ab548f29a7ab6a952415748b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27e783d4c95522136b97167ca95b62461a09704ab548f29a7ab6a952415748b1->enter($__internal_27e783d4c95522136b97167ca95b62461a09704ab548f29a7ab6a952415748b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Recipe creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recipe_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_27e783d4c95522136b97167ca95b62461a09704ab548f29a7ab6a952415748b1->leave($__internal_27e783d4c95522136b97167ca95b62461a09704ab548f29a7ab6a952415748b1_prof);

        
        $__internal_a09e4d2b4f58d52493d58354f50d15450d3b6554f60cd7c6f4328e0259814aa9->leave($__internal_a09e4d2b4f58d52493d58354f50d15450d3b6554f60cd7c6f4328e0259814aa9_prof);

    }

    public function getTemplateName()
    {
        return "recipe/new.html.twig";
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
    <h1>Recipe creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('recipe_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "recipe/new.html.twig", "/home/kamil/Dokumenty/studia/cookbook/app/Resources/views/recipe/new.html.twig");
    }
}
