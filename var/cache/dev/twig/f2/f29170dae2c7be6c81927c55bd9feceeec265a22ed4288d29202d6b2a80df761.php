<?php

/* ingredient/edit.html.twig */
class __TwigTemplate_cab6eb00be670a0a72a796501687318ade750f0409c63e6436cfdcb9e772817e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ingredient/edit.html.twig", 1);
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
        $__internal_50999f2a0592c41eec59e139ec41dbfb7a2dc608f4f10c1c0d6026fd372de54c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50999f2a0592c41eec59e139ec41dbfb7a2dc608f4f10c1c0d6026fd372de54c->enter($__internal_50999f2a0592c41eec59e139ec41dbfb7a2dc608f4f10c1c0d6026fd372de54c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ingredient/edit.html.twig"));

        $__internal_704e5eadc5ea1f8f777c56855d892eed1222fc113d3b82df4103e6cec1bbdec3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_704e5eadc5ea1f8f777c56855d892eed1222fc113d3b82df4103e6cec1bbdec3->enter($__internal_704e5eadc5ea1f8f777c56855d892eed1222fc113d3b82df4103e6cec1bbdec3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ingredient/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_50999f2a0592c41eec59e139ec41dbfb7a2dc608f4f10c1c0d6026fd372de54c->leave($__internal_50999f2a0592c41eec59e139ec41dbfb7a2dc608f4f10c1c0d6026fd372de54c_prof);

        
        $__internal_704e5eadc5ea1f8f777c56855d892eed1222fc113d3b82df4103e6cec1bbdec3->leave($__internal_704e5eadc5ea1f8f777c56855d892eed1222fc113d3b82df4103e6cec1bbdec3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d33161600f7b56925c07f8a704da701a1ee51c803962f5a75054fafaf5973c37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d33161600f7b56925c07f8a704da701a1ee51c803962f5a75054fafaf5973c37->enter($__internal_d33161600f7b56925c07f8a704da701a1ee51c803962f5a75054fafaf5973c37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_72da0820543898628574388e783556ee09288d8987fe7a481079a8acec1ae64a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72da0820543898628574388e783556ee09288d8987fe7a481079a8acec1ae64a->enter($__internal_72da0820543898628574388e783556ee09288d8987fe7a481079a8acec1ae64a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Edycja składnika</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ingredient_index");
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
        
        $__internal_72da0820543898628574388e783556ee09288d8987fe7a481079a8acec1ae64a->leave($__internal_72da0820543898628574388e783556ee09288d8987fe7a481079a8acec1ae64a_prof);

        
        $__internal_d33161600f7b56925c07f8a704da701a1ee51c803962f5a75054fafaf5973c37->leave($__internal_d33161600f7b56925c07f8a704da701a1ee51c803962f5a75054fafaf5973c37_prof);

    }

    public function getTemplateName()
    {
        return "ingredient/edit.html.twig";
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
    <h1>Edycja składnika</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edytuj\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('ingredient_index') }}\">Powrót do listy</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Usuń\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "ingredient/edit.html.twig", "/home/kamil/Dokumenty/studia/cookbook/app/Resources/views/ingredient/edit.html.twig");
    }
}
