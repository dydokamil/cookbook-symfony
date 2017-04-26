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
        $__internal_d2440f9d1b32b8343a5816ab48f1797f0b6a659681216ca52d806826b6c97316 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2440f9d1b32b8343a5816ab48f1797f0b6a659681216ca52d806826b6c97316->enter($__internal_d2440f9d1b32b8343a5816ab48f1797f0b6a659681216ca52d806826b6c97316_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ingredient/new.html.twig"));

        $__internal_14e11454ef35ec91ff359ff2e0ff373cfc978b89c7fbf85bccecd73bbbf99e69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14e11454ef35ec91ff359ff2e0ff373cfc978b89c7fbf85bccecd73bbbf99e69->enter($__internal_14e11454ef35ec91ff359ff2e0ff373cfc978b89c7fbf85bccecd73bbbf99e69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ingredient/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d2440f9d1b32b8343a5816ab48f1797f0b6a659681216ca52d806826b6c97316->leave($__internal_d2440f9d1b32b8343a5816ab48f1797f0b6a659681216ca52d806826b6c97316_prof);

        
        $__internal_14e11454ef35ec91ff359ff2e0ff373cfc978b89c7fbf85bccecd73bbbf99e69->leave($__internal_14e11454ef35ec91ff359ff2e0ff373cfc978b89c7fbf85bccecd73bbbf99e69_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ef96a9962e3408ce382118296ff73f7aabb66a308bf21d582150cc641b8eefb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef96a9962e3408ce382118296ff73f7aabb66a308bf21d582150cc641b8eefb4->enter($__internal_ef96a9962e3408ce382118296ff73f7aabb66a308bf21d582150cc641b8eefb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_530b4363af3258eab69263c4c1aa4537bf9fcec041ff3063d19f4d7ff6c37737 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_530b4363af3258eab69263c4c1aa4537bf9fcec041ff3063d19f4d7ff6c37737->enter($__internal_530b4363af3258eab69263c4c1aa4537bf9fcec041ff3063d19f4d7ff6c37737_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Tworzenie składnika</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Utwórz\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ingredient_index");
        echo "\">Powrót do listy</a>
        </li>
    </ul>
";
        
        $__internal_530b4363af3258eab69263c4c1aa4537bf9fcec041ff3063d19f4d7ff6c37737->leave($__internal_530b4363af3258eab69263c4c1aa4537bf9fcec041ff3063d19f4d7ff6c37737_prof);

        
        $__internal_ef96a9962e3408ce382118296ff73f7aabb66a308bf21d582150cc641b8eefb4->leave($__internal_ef96a9962e3408ce382118296ff73f7aabb66a308bf21d582150cc641b8eefb4_prof);

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
    <h1>Tworzenie składnika</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Utwórz\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('ingredient_index') }}\">Powrót do listy</a>
        </li>
    </ul>
{% endblock %}
", "ingredient/new.html.twig", "/home/kamil/Dokumenty/studia/cookbook/app/Resources/views/ingredient/new.html.twig");
    }
}
