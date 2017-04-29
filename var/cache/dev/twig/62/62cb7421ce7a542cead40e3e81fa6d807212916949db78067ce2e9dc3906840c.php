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
        $__internal_4b98c74f302eb52a37c5d4e4b37569276980ad2aac47642e5f0f3595503af3b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b98c74f302eb52a37c5d4e4b37569276980ad2aac47642e5f0f3595503af3b4->enter($__internal_4b98c74f302eb52a37c5d4e4b37569276980ad2aac47642e5f0f3595503af3b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "recipe/new.html.twig"));

        $__internal_26baa0aacee96941deeb05a04629fd998acc466f4074b513f4beebe2d65d20b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26baa0aacee96941deeb05a04629fd998acc466f4074b513f4beebe2d65d20b1->enter($__internal_26baa0aacee96941deeb05a04629fd998acc466f4074b513f4beebe2d65d20b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "recipe/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b98c74f302eb52a37c5d4e4b37569276980ad2aac47642e5f0f3595503af3b4->leave($__internal_4b98c74f302eb52a37c5d4e4b37569276980ad2aac47642e5f0f3595503af3b4_prof);

        
        $__internal_26baa0aacee96941deeb05a04629fd998acc466f4074b513f4beebe2d65d20b1->leave($__internal_26baa0aacee96941deeb05a04629fd998acc466f4074b513f4beebe2d65d20b1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c55fe29e1016fe2616cdc63fc5a4bfbc2bf99ee641754b3d022ca1cef9a2979d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c55fe29e1016fe2616cdc63fc5a4bfbc2bf99ee641754b3d022ca1cef9a2979d->enter($__internal_c55fe29e1016fe2616cdc63fc5a4bfbc2bf99ee641754b3d022ca1cef9a2979d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_013eaa0a24e11d8d3ef42bd2d981b72b6678a8c73089e44809f1a3ce819d51aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_013eaa0a24e11d8d3ef42bd2d981b72b6678a8c73089e44809f1a3ce819d51aa->enter($__internal_013eaa0a24e11d8d3ef42bd2d981b72b6678a8c73089e44809f1a3ce819d51aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Tworzenie przepisu</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recipe_index");
        echo "\">Powrót do listy</a>
        </li>
    </ul>
";
        
        $__internal_013eaa0a24e11d8d3ef42bd2d981b72b6678a8c73089e44809f1a3ce819d51aa->leave($__internal_013eaa0a24e11d8d3ef42bd2d981b72b6678a8c73089e44809f1a3ce819d51aa_prof);

        
        $__internal_c55fe29e1016fe2616cdc63fc5a4bfbc2bf99ee641754b3d022ca1cef9a2979d->leave($__internal_c55fe29e1016fe2616cdc63fc5a4bfbc2bf99ee641754b3d022ca1cef9a2979d_prof);

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
    <h1>Tworzenie przepisu</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Utwórz\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('recipe_index') }}\">Powrót do listy</a>
        </li>
    </ul>
{% endblock %}
", "recipe/new.html.twig", "/home/kamil/symfony_projects/cookbook-symfony/app/Resources/views/recipe/new.html.twig");
    }
}
