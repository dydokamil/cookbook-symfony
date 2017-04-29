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
        $__internal_0d1149765b87b3be8378dbe44132315039a2994ed715532935f2255e6771eda4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d1149765b87b3be8378dbe44132315039a2994ed715532935f2255e6771eda4->enter($__internal_0d1149765b87b3be8378dbe44132315039a2994ed715532935f2255e6771eda4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ingredient/edit.html.twig"));

        $__internal_06b9e1538e4f3b71529602a40867b082996d729ec7fef94356d9f7823ff1be82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06b9e1538e4f3b71529602a40867b082996d729ec7fef94356d9f7823ff1be82->enter($__internal_06b9e1538e4f3b71529602a40867b082996d729ec7fef94356d9f7823ff1be82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ingredient/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d1149765b87b3be8378dbe44132315039a2994ed715532935f2255e6771eda4->leave($__internal_0d1149765b87b3be8378dbe44132315039a2994ed715532935f2255e6771eda4_prof);

        
        $__internal_06b9e1538e4f3b71529602a40867b082996d729ec7fef94356d9f7823ff1be82->leave($__internal_06b9e1538e4f3b71529602a40867b082996d729ec7fef94356d9f7823ff1be82_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b953e59bf84945b0b8f575d9c86ad1d55bc72cec5935a8f5f9d0ffce9da4cd26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b953e59bf84945b0b8f575d9c86ad1d55bc72cec5935a8f5f9d0ffce9da4cd26->enter($__internal_b953e59bf84945b0b8f575d9c86ad1d55bc72cec5935a8f5f9d0ffce9da4cd26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fa78400c652f6e86cd3a4e464a1a40b30adf124b21859e497338808877541f7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa78400c652f6e86cd3a4e464a1a40b30adf124b21859e497338808877541f7f->enter($__internal_fa78400c652f6e86cd3a4e464a1a40b30adf124b21859e497338808877541f7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Ingredient edit</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ingredient_index");
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
        
        $__internal_fa78400c652f6e86cd3a4e464a1a40b30adf124b21859e497338808877541f7f->leave($__internal_fa78400c652f6e86cd3a4e464a1a40b30adf124b21859e497338808877541f7f_prof);

        
        $__internal_b953e59bf84945b0b8f575d9c86ad1d55bc72cec5935a8f5f9d0ffce9da4cd26->leave($__internal_b953e59bf84945b0b8f575d9c86ad1d55bc72cec5935a8f5f9d0ffce9da4cd26_prof);

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
    <h1>Ingredient edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('ingredient_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "ingredient/edit.html.twig", "/home/kamil/Dokumenty/studia/cookbook/app/Resources/views/ingredient/edit.html.twig");
    }
}
