<?php

/* ingredienttype/edit.html.twig */
class __TwigTemplate_48236ba5dcb4c29b6cdd0a5d0117a31f7d08b154e964fb86c00921ac56ef9cf6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ingredienttype/edit.html.twig", 1);
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
        $__internal_4a5fb7145823df88bd180bc2a848c8fff87115daa050bca10711ba21d27037f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a5fb7145823df88bd180bc2a848c8fff87115daa050bca10711ba21d27037f8->enter($__internal_4a5fb7145823df88bd180bc2a848c8fff87115daa050bca10711ba21d27037f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ingredienttype/edit.html.twig"));

        $__internal_b3692353aef3144b2f6714569ad1b7a6ccff5416b4bc4c711bee0fbb8f1a60cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3692353aef3144b2f6714569ad1b7a6ccff5416b4bc4c711bee0fbb8f1a60cc->enter($__internal_b3692353aef3144b2f6714569ad1b7a6ccff5416b4bc4c711bee0fbb8f1a60cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ingredienttype/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4a5fb7145823df88bd180bc2a848c8fff87115daa050bca10711ba21d27037f8->leave($__internal_4a5fb7145823df88bd180bc2a848c8fff87115daa050bca10711ba21d27037f8_prof);

        
        $__internal_b3692353aef3144b2f6714569ad1b7a6ccff5416b4bc4c711bee0fbb8f1a60cc->leave($__internal_b3692353aef3144b2f6714569ad1b7a6ccff5416b4bc4c711bee0fbb8f1a60cc_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c555edbba13c9812f510c8ed348ef114f011239eedca203a674b34cfe7979f2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c555edbba13c9812f510c8ed348ef114f011239eedca203a674b34cfe7979f2f->enter($__internal_c555edbba13c9812f510c8ed348ef114f011239eedca203a674b34cfe7979f2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_48b828f6ee9a74c4a354515fa92303c3439b33483d502df861999586651afc1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48b828f6ee9a74c4a354515fa92303c3439b33483d502df861999586651afc1a->enter($__internal_48b828f6ee9a74c4a354515fa92303c3439b33483d502df861999586651afc1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Ingredienttype edit</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ingredienttype_index");
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
        
        $__internal_48b828f6ee9a74c4a354515fa92303c3439b33483d502df861999586651afc1a->leave($__internal_48b828f6ee9a74c4a354515fa92303c3439b33483d502df861999586651afc1a_prof);

        
        $__internal_c555edbba13c9812f510c8ed348ef114f011239eedca203a674b34cfe7979f2f->leave($__internal_c555edbba13c9812f510c8ed348ef114f011239eedca203a674b34cfe7979f2f_prof);

    }

    public function getTemplateName()
    {
        return "ingredienttype/edit.html.twig";
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
    <h1>Ingredienttype edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('ingredienttype_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "ingredienttype/edit.html.twig", "/home/kamil/Dokumenty/studia/cookbook-symfony/app/Resources/views/ingredienttype/edit.html.twig");
    }
}
