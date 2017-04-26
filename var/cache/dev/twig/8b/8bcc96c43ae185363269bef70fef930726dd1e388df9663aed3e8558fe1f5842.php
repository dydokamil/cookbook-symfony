<?php

/* recipestep/edit.html.twig */
class __TwigTemplate_4df799743257c8f89691f796406a7f17070806673bc6c37745bca1c70bef89be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "recipestep/edit.html.twig", 1);
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
        $__internal_0ec767864b1d0ae35393f9101c2d7a770203d41eec2cc7ac99dc5a4bdb90bbd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ec767864b1d0ae35393f9101c2d7a770203d41eec2cc7ac99dc5a4bdb90bbd3->enter($__internal_0ec767864b1d0ae35393f9101c2d7a770203d41eec2cc7ac99dc5a4bdb90bbd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "recipestep/edit.html.twig"));

        $__internal_93eb6c2a0c9eae00c453843bef20617e0a005eef26481352b8f57e88bd614380 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93eb6c2a0c9eae00c453843bef20617e0a005eef26481352b8f57e88bd614380->enter($__internal_93eb6c2a0c9eae00c453843bef20617e0a005eef26481352b8f57e88bd614380_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "recipestep/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0ec767864b1d0ae35393f9101c2d7a770203d41eec2cc7ac99dc5a4bdb90bbd3->leave($__internal_0ec767864b1d0ae35393f9101c2d7a770203d41eec2cc7ac99dc5a4bdb90bbd3_prof);

        
        $__internal_93eb6c2a0c9eae00c453843bef20617e0a005eef26481352b8f57e88bd614380->leave($__internal_93eb6c2a0c9eae00c453843bef20617e0a005eef26481352b8f57e88bd614380_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1504b49310c282c4362b99ff3395602670bc425e3f42414e496906b723d24edf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1504b49310c282c4362b99ff3395602670bc425e3f42414e496906b723d24edf->enter($__internal_1504b49310c282c4362b99ff3395602670bc425e3f42414e496906b723d24edf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1762b95f56dacfad2cc24cbc7e2b70263038150eae4e1cda5ab5b31258699d96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1762b95f56dacfad2cc24cbc7e2b70263038150eae4e1cda5ab5b31258699d96->enter($__internal_1762b95f56dacfad2cc24cbc7e2b70263038150eae4e1cda5ab5b31258699d96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Edycja kroku</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recipestep_index");
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
        
        $__internal_1762b95f56dacfad2cc24cbc7e2b70263038150eae4e1cda5ab5b31258699d96->leave($__internal_1762b95f56dacfad2cc24cbc7e2b70263038150eae4e1cda5ab5b31258699d96_prof);

        
        $__internal_1504b49310c282c4362b99ff3395602670bc425e3f42414e496906b723d24edf->leave($__internal_1504b49310c282c4362b99ff3395602670bc425e3f42414e496906b723d24edf_prof);

    }

    public function getTemplateName()
    {
        return "recipestep/edit.html.twig";
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
    <h1>Edycja kroku</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edytuj\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('recipestep_index') }}\">Powrót do listy</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Usuń\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "recipestep/edit.html.twig", "/home/kamil/Dokumenty/studia/cookbook/app/Resources/views/recipestep/edit.html.twig");
    }
}
