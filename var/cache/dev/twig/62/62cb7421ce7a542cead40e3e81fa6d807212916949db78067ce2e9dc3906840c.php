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
        $__internal_29278feb59e7f8274138c609e2346597b039c404394efb79783c534f2133a206 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29278feb59e7f8274138c609e2346597b039c404394efb79783c534f2133a206->enter($__internal_29278feb59e7f8274138c609e2346597b039c404394efb79783c534f2133a206_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "recipe/new.html.twig"));

        $__internal_74d82d4dcf46be0d4c6bdac2954fd31e2dabcad6e5268bfde952afff0a54e1f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74d82d4dcf46be0d4c6bdac2954fd31e2dabcad6e5268bfde952afff0a54e1f8->enter($__internal_74d82d4dcf46be0d4c6bdac2954fd31e2dabcad6e5268bfde952afff0a54e1f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "recipe/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_29278feb59e7f8274138c609e2346597b039c404394efb79783c534f2133a206->leave($__internal_29278feb59e7f8274138c609e2346597b039c404394efb79783c534f2133a206_prof);

        
        $__internal_74d82d4dcf46be0d4c6bdac2954fd31e2dabcad6e5268bfde952afff0a54e1f8->leave($__internal_74d82d4dcf46be0d4c6bdac2954fd31e2dabcad6e5268bfde952afff0a54e1f8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_392c92addf04ebf8b687bad35c755b57fb777cd7cd940a0e0eabcec03972606e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_392c92addf04ebf8b687bad35c755b57fb777cd7cd940a0e0eabcec03972606e->enter($__internal_392c92addf04ebf8b687bad35c755b57fb777cd7cd940a0e0eabcec03972606e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cce3454d015b157b7e19f73806e8eec9cd0bdd0ebd206929ee291fabc1e6f595 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cce3454d015b157b7e19f73806e8eec9cd0bdd0ebd206929ee291fabc1e6f595->enter($__internal_cce3454d015b157b7e19f73806e8eec9cd0bdd0ebd206929ee291fabc1e6f595_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_cce3454d015b157b7e19f73806e8eec9cd0bdd0ebd206929ee291fabc1e6f595->leave($__internal_cce3454d015b157b7e19f73806e8eec9cd0bdd0ebd206929ee291fabc1e6f595_prof);

        
        $__internal_392c92addf04ebf8b687bad35c755b57fb777cd7cd940a0e0eabcec03972606e->leave($__internal_392c92addf04ebf8b687bad35c755b57fb777cd7cd940a0e0eabcec03972606e_prof);

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
", "recipe/new.html.twig", "/home/kamil/symfony_projects/cookbook-symfony/app/Resources/views/recipe/new.html.twig");
    }
}
