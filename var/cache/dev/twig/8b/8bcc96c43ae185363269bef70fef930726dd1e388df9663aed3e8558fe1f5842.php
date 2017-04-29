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
        $__internal_1e922dbca1bcce1d19dc3342b3fdae3ea48cb034d33cbe118497cf78e63ae637 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e922dbca1bcce1d19dc3342b3fdae3ea48cb034d33cbe118497cf78e63ae637->enter($__internal_1e922dbca1bcce1d19dc3342b3fdae3ea48cb034d33cbe118497cf78e63ae637_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "recipestep/edit.html.twig"));

        $__internal_d1807d373147e95a4cfc2b841132bfeae5b83c0aa0ca8840a91577becc28454b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1807d373147e95a4cfc2b841132bfeae5b83c0aa0ca8840a91577becc28454b->enter($__internal_d1807d373147e95a4cfc2b841132bfeae5b83c0aa0ca8840a91577becc28454b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "recipestep/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e922dbca1bcce1d19dc3342b3fdae3ea48cb034d33cbe118497cf78e63ae637->leave($__internal_1e922dbca1bcce1d19dc3342b3fdae3ea48cb034d33cbe118497cf78e63ae637_prof);

        
        $__internal_d1807d373147e95a4cfc2b841132bfeae5b83c0aa0ca8840a91577becc28454b->leave($__internal_d1807d373147e95a4cfc2b841132bfeae5b83c0aa0ca8840a91577becc28454b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1022e74f7441492db9ff375e51bac76b324a98d1f116ca5ffb91650b8cac4d16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1022e74f7441492db9ff375e51bac76b324a98d1f116ca5ffb91650b8cac4d16->enter($__internal_1022e74f7441492db9ff375e51bac76b324a98d1f116ca5ffb91650b8cac4d16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c1ddbebcf63a1ba1b704a039c8b56c0a9f4d1d0e74a06e7fcfb69d099b24a742 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1ddbebcf63a1ba1b704a039c8b56c0a9f4d1d0e74a06e7fcfb69d099b24a742->enter($__internal_c1ddbebcf63a1ba1b704a039c8b56c0a9f4d1d0e74a06e7fcfb69d099b24a742_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Recipestep edit</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recipestep_index");
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
        
        $__internal_c1ddbebcf63a1ba1b704a039c8b56c0a9f4d1d0e74a06e7fcfb69d099b24a742->leave($__internal_c1ddbebcf63a1ba1b704a039c8b56c0a9f4d1d0e74a06e7fcfb69d099b24a742_prof);

        
        $__internal_1022e74f7441492db9ff375e51bac76b324a98d1f116ca5ffb91650b8cac4d16->leave($__internal_1022e74f7441492db9ff375e51bac76b324a98d1f116ca5ffb91650b8cac4d16_prof);

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
    <h1>Recipestep edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('recipestep_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "recipestep/edit.html.twig", "/home/kamil/symfony_projects/cookbook-symfony/app/Resources/views/recipestep/edit.html.twig");
    }
}
