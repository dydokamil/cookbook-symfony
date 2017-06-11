<?php

/* ingredientstepjoin/edit.html.twig */
class __TwigTemplate_f914f121b3a6d1d321daf08f172e3266cac4b3fcec116eea2ddd301b60c301b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ingredientstepjoin/edit.html.twig", 1);
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
        $__internal_842b13dcbe2cae92e2d7a2253c44ae2287827f9ac3c1203bda45cec5b5d4db10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_842b13dcbe2cae92e2d7a2253c44ae2287827f9ac3c1203bda45cec5b5d4db10->enter($__internal_842b13dcbe2cae92e2d7a2253c44ae2287827f9ac3c1203bda45cec5b5d4db10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ingredientstepjoin/edit.html.twig"));

        $__internal_1e62e7637e849f505bf1c8dc3451a2a901b0548517ed41178a048fe37e8aeb28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e62e7637e849f505bf1c8dc3451a2a901b0548517ed41178a048fe37e8aeb28->enter($__internal_1e62e7637e849f505bf1c8dc3451a2a901b0548517ed41178a048fe37e8aeb28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ingredientstepjoin/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_842b13dcbe2cae92e2d7a2253c44ae2287827f9ac3c1203bda45cec5b5d4db10->leave($__internal_842b13dcbe2cae92e2d7a2253c44ae2287827f9ac3c1203bda45cec5b5d4db10_prof);

        
        $__internal_1e62e7637e849f505bf1c8dc3451a2a901b0548517ed41178a048fe37e8aeb28->leave($__internal_1e62e7637e849f505bf1c8dc3451a2a901b0548517ed41178a048fe37e8aeb28_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f722e9e48ca5046a84f204247e3bf17c035cd16c470c53eb962c0a9d920e9426 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f722e9e48ca5046a84f204247e3bf17c035cd16c470c53eb962c0a9d920e9426->enter($__internal_f722e9e48ca5046a84f204247e3bf17c035cd16c470c53eb962c0a9d920e9426_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5cf21afe3d5b70edf2a4f62bb7ed1262aebad11640318c333466c87c6fb317ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cf21afe3d5b70edf2a4f62bb7ed1262aebad11640318c333466c87c6fb317ed->enter($__internal_5cf21afe3d5b70edf2a4f62bb7ed1262aebad11640318c333466c87c6fb317ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Ingredientstepjoin edit</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ingredientstepjoin_index");
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
        
        $__internal_5cf21afe3d5b70edf2a4f62bb7ed1262aebad11640318c333466c87c6fb317ed->leave($__internal_5cf21afe3d5b70edf2a4f62bb7ed1262aebad11640318c333466c87c6fb317ed_prof);

        
        $__internal_f722e9e48ca5046a84f204247e3bf17c035cd16c470c53eb962c0a9d920e9426->leave($__internal_f722e9e48ca5046a84f204247e3bf17c035cd16c470c53eb962c0a9d920e9426_prof);

    }

    public function getTemplateName()
    {
        return "ingredientstepjoin/edit.html.twig";
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
    <h1>Ingredientstepjoin edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('ingredientstepjoin_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "ingredientstepjoin/edit.html.twig", "/home/kamil/Dokumenty/studia/cookbook-symfony/app/Resources/views/ingredientstepjoin/edit.html.twig");
    }
}
