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
        $__internal_1341417c0f358d78ef691c9e6deefc7881c638f80079cf25a709f6caebc9521c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1341417c0f358d78ef691c9e6deefc7881c638f80079cf25a709f6caebc9521c->enter($__internal_1341417c0f358d78ef691c9e6deefc7881c638f80079cf25a709f6caebc9521c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ingredienttype/edit.html.twig"));

        $__internal_1c3e5b5c80970a508cf2b09296af74eec392ac430aff9b0b3eb23b55467bc828 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c3e5b5c80970a508cf2b09296af74eec392ac430aff9b0b3eb23b55467bc828->enter($__internal_1c3e5b5c80970a508cf2b09296af74eec392ac430aff9b0b3eb23b55467bc828_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ingredienttype/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1341417c0f358d78ef691c9e6deefc7881c638f80079cf25a709f6caebc9521c->leave($__internal_1341417c0f358d78ef691c9e6deefc7881c638f80079cf25a709f6caebc9521c_prof);

        
        $__internal_1c3e5b5c80970a508cf2b09296af74eec392ac430aff9b0b3eb23b55467bc828->leave($__internal_1c3e5b5c80970a508cf2b09296af74eec392ac430aff9b0b3eb23b55467bc828_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f5e3bcb62888211e069e472a3934050f10ec48682b7dda0de8fc39b6a4c92d26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5e3bcb62888211e069e472a3934050f10ec48682b7dda0de8fc39b6a4c92d26->enter($__internal_f5e3bcb62888211e069e472a3934050f10ec48682b7dda0de8fc39b6a4c92d26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6a563b9c2c3c343b823e582806e1c3227bf0e3c41f363abb2ad4c3e0dac05ea7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a563b9c2c3c343b823e582806e1c3227bf0e3c41f363abb2ad4c3e0dac05ea7->enter($__internal_6a563b9c2c3c343b823e582806e1c3227bf0e3c41f363abb2ad4c3e0dac05ea7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6a563b9c2c3c343b823e582806e1c3227bf0e3c41f363abb2ad4c3e0dac05ea7->leave($__internal_6a563b9c2c3c343b823e582806e1c3227bf0e3c41f363abb2ad4c3e0dac05ea7_prof);

        
        $__internal_f5e3bcb62888211e069e472a3934050f10ec48682b7dda0de8fc39b6a4c92d26->leave($__internal_f5e3bcb62888211e069e472a3934050f10ec48682b7dda0de8fc39b6a4c92d26_prof);

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
", "ingredienttype/edit.html.twig", "/home/kamil/symfony_projects/cookbook-symfony/app/Resources/views/ingredienttype/edit.html.twig");
    }
}
