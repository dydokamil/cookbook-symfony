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
        $__internal_1f16771965058a5ddc814d7dbf2aa2f99674ea50f66e2ad3872786fa32c6436d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f16771965058a5ddc814d7dbf2aa2f99674ea50f66e2ad3872786fa32c6436d->enter($__internal_1f16771965058a5ddc814d7dbf2aa2f99674ea50f66e2ad3872786fa32c6436d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "recipe/new.html.twig"));

        $__internal_e4f0934845843076e7e8e98f200a032280dda17d7c725a963603b0483b0bc2c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4f0934845843076e7e8e98f200a032280dda17d7c725a963603b0483b0bc2c3->enter($__internal_e4f0934845843076e7e8e98f200a032280dda17d7c725a963603b0483b0bc2c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "recipe/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1f16771965058a5ddc814d7dbf2aa2f99674ea50f66e2ad3872786fa32c6436d->leave($__internal_1f16771965058a5ddc814d7dbf2aa2f99674ea50f66e2ad3872786fa32c6436d_prof);

        
        $__internal_e4f0934845843076e7e8e98f200a032280dda17d7c725a963603b0483b0bc2c3->leave($__internal_e4f0934845843076e7e8e98f200a032280dda17d7c725a963603b0483b0bc2c3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_bf7b5d6e0b560116e016bffe358733876b9e61f01d1e2886e50d91fdf7bbbff2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf7b5d6e0b560116e016bffe358733876b9e61f01d1e2886e50d91fdf7bbbff2->enter($__internal_bf7b5d6e0b560116e016bffe358733876b9e61f01d1e2886e50d91fdf7bbbff2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_32b82b4dd885fbbdfd48ecbc64fb404f77820e655e8f7ceeed6292729c512431 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32b82b4dd885fbbdfd48ecbc64fb404f77820e655e8f7ceeed6292729c512431->enter($__internal_32b82b4dd885fbbdfd48ecbc64fb404f77820e655e8f7ceeed6292729c512431_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        <input class='btn btn-success' type=\"submit\" value=\"Utwórz\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <ul class='list-unstyled'>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recipe_index");
        echo "\">Powrót do listy</a>
        </li>
    </ul>
";
        
        $__internal_32b82b4dd885fbbdfd48ecbc64fb404f77820e655e8f7ceeed6292729c512431->leave($__internal_32b82b4dd885fbbdfd48ecbc64fb404f77820e655e8f7ceeed6292729c512431_prof);

        
        $__internal_bf7b5d6e0b560116e016bffe358733876b9e61f01d1e2886e50d91fdf7bbbff2->leave($__internal_bf7b5d6e0b560116e016bffe358733876b9e61f01d1e2886e50d91fdf7bbbff2_prof);

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
        <input class='btn btn-success' type=\"submit\" value=\"Utwórz\" />
    {{ form_end(form) }}

    <ul class='list-unstyled'>
        <li>
            <a href=\"{{ path('recipe_index') }}\">Powrót do listy</a>
        </li>
    </ul>
{% endblock %}
", "recipe/new.html.twig", "/home/kamil/Dokumenty/studia/cookbook-symfony/app/Resources/views/recipe/new.html.twig");
    }
}
