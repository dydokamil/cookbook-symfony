<?php

/* ingredienttype/new.html.twig */
class __TwigTemplate_8401087bbd05054a010bf854b4ddf3dc1e79f8467787edf60e0744344fa79e78 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ingredienttype/new.html.twig", 1);
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
        $__internal_9494e99376e8895c6a11a948258ed4fec0adfbf9610046f0d588b17a1774d0de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9494e99376e8895c6a11a948258ed4fec0adfbf9610046f0d588b17a1774d0de->enter($__internal_9494e99376e8895c6a11a948258ed4fec0adfbf9610046f0d588b17a1774d0de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ingredienttype/new.html.twig"));

        $__internal_525388b762961e62d3e862da82e1d3eb5b35bf3b04e90467d62ac0c6a2f7b039 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_525388b762961e62d3e862da82e1d3eb5b35bf3b04e90467d62ac0c6a2f7b039->enter($__internal_525388b762961e62d3e862da82e1d3eb5b35bf3b04e90467d62ac0c6a2f7b039_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ingredienttype/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9494e99376e8895c6a11a948258ed4fec0adfbf9610046f0d588b17a1774d0de->leave($__internal_9494e99376e8895c6a11a948258ed4fec0adfbf9610046f0d588b17a1774d0de_prof);

        
        $__internal_525388b762961e62d3e862da82e1d3eb5b35bf3b04e90467d62ac0c6a2f7b039->leave($__internal_525388b762961e62d3e862da82e1d3eb5b35bf3b04e90467d62ac0c6a2f7b039_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2c297339ee78bd34ef0d2df5dfc6cf2d4c912ae275967c0b1373240352115eca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c297339ee78bd34ef0d2df5dfc6cf2d4c912ae275967c0b1373240352115eca->enter($__internal_2c297339ee78bd34ef0d2df5dfc6cf2d4c912ae275967c0b1373240352115eca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9dea9ca0e5e6f9d437202245ceb4cc3c5f9daa1f4e3d02e5212c62a433ac4adf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9dea9ca0e5e6f9d437202245ceb4cc3c5f9daa1f4e3d02e5212c62a433ac4adf->enter($__internal_9dea9ca0e5e6f9d437202245ceb4cc3c5f9daa1f4e3d02e5212c62a433ac4adf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Ingredienttype creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ingredienttype_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_9dea9ca0e5e6f9d437202245ceb4cc3c5f9daa1f4e3d02e5212c62a433ac4adf->leave($__internal_9dea9ca0e5e6f9d437202245ceb4cc3c5f9daa1f4e3d02e5212c62a433ac4adf_prof);

        
        $__internal_2c297339ee78bd34ef0d2df5dfc6cf2d4c912ae275967c0b1373240352115eca->leave($__internal_2c297339ee78bd34ef0d2df5dfc6cf2d4c912ae275967c0b1373240352115eca_prof);

    }

    public function getTemplateName()
    {
        return "ingredienttype/new.html.twig";
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
    <h1>Ingredienttype creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('ingredienttype_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "ingredienttype/new.html.twig", "/home/kamil/symfony_projects/cookbook-symfony/app/Resources/views/ingredienttype/new.html.twig");
    }
}
