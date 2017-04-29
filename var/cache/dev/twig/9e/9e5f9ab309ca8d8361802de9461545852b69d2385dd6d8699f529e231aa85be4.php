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
        $__internal_61edd0ec82f3edf551459905427c1a72016b5506057187acddb80e1242e899d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61edd0ec82f3edf551459905427c1a72016b5506057187acddb80e1242e899d9->enter($__internal_61edd0ec82f3edf551459905427c1a72016b5506057187acddb80e1242e899d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ingredienttype/edit.html.twig"));

        $__internal_9a4a30fb759400b6574f8b2de6c61cfc3c2c85a487e48279cc858543db7e6884 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a4a30fb759400b6574f8b2de6c61cfc3c2c85a487e48279cc858543db7e6884->enter($__internal_9a4a30fb759400b6574f8b2de6c61cfc3c2c85a487e48279cc858543db7e6884_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ingredienttype/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_61edd0ec82f3edf551459905427c1a72016b5506057187acddb80e1242e899d9->leave($__internal_61edd0ec82f3edf551459905427c1a72016b5506057187acddb80e1242e899d9_prof);

        
        $__internal_9a4a30fb759400b6574f8b2de6c61cfc3c2c85a487e48279cc858543db7e6884->leave($__internal_9a4a30fb759400b6574f8b2de6c61cfc3c2c85a487e48279cc858543db7e6884_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_487393837d87029ea170705903a5d30b0bb59ddd3093a8a20f0fdfe1d452371c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_487393837d87029ea170705903a5d30b0bb59ddd3093a8a20f0fdfe1d452371c->enter($__internal_487393837d87029ea170705903a5d30b0bb59ddd3093a8a20f0fdfe1d452371c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_789bdd909532295420dc8f34268c018d7b3fc1d3cec48030bf82f3c888a88853 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_789bdd909532295420dc8f34268c018d7b3fc1d3cec48030bf82f3c888a88853->enter($__internal_789bdd909532295420dc8f34268c018d7b3fc1d3cec48030bf82f3c888a88853_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_789bdd909532295420dc8f34268c018d7b3fc1d3cec48030bf82f3c888a88853->leave($__internal_789bdd909532295420dc8f34268c018d7b3fc1d3cec48030bf82f3c888a88853_prof);

        
        $__internal_487393837d87029ea170705903a5d30b0bb59ddd3093a8a20f0fdfe1d452371c->leave($__internal_487393837d87029ea170705903a5d30b0bb59ddd3093a8a20f0fdfe1d452371c_prof);

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
", "ingredienttype/edit.html.twig", "/home/kamil/Dokumenty/studia/cookbook/app/Resources/views/ingredienttype/edit.html.twig");
    }
}
