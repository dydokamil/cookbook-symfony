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
        $__internal_6327455da0194610e60a92c7df4e3da38e9c87399b20737475f3ac4946d4f6aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6327455da0194610e60a92c7df4e3da38e9c87399b20737475f3ac4946d4f6aa->enter($__internal_6327455da0194610e60a92c7df4e3da38e9c87399b20737475f3ac4946d4f6aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "recipestep/edit.html.twig"));

        $__internal_bcd51e4cbf625d1bfa179389c502f45deeacd81df3938a142ea95165d8b6c220 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcd51e4cbf625d1bfa179389c502f45deeacd81df3938a142ea95165d8b6c220->enter($__internal_bcd51e4cbf625d1bfa179389c502f45deeacd81df3938a142ea95165d8b6c220_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "recipestep/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6327455da0194610e60a92c7df4e3da38e9c87399b20737475f3ac4946d4f6aa->leave($__internal_6327455da0194610e60a92c7df4e3da38e9c87399b20737475f3ac4946d4f6aa_prof);

        
        $__internal_bcd51e4cbf625d1bfa179389c502f45deeacd81df3938a142ea95165d8b6c220->leave($__internal_bcd51e4cbf625d1bfa179389c502f45deeacd81df3938a142ea95165d8b6c220_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_306b44c3ac154d9105ec354ce7e2cb841cacdf38bf4689af5b03b09d6e7e45fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_306b44c3ac154d9105ec354ce7e2cb841cacdf38bf4689af5b03b09d6e7e45fd->enter($__internal_306b44c3ac154d9105ec354ce7e2cb841cacdf38bf4689af5b03b09d6e7e45fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2a76178467a81dbdb904e566144430d277494a4927b1c0827cfbcf361ded04fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a76178467a81dbdb904e566144430d277494a4927b1c0827cfbcf361ded04fb->enter($__internal_2a76178467a81dbdb904e566144430d277494a4927b1c0827cfbcf361ded04fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Edycja kroku</h1>

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

    <ul class='list-unstyled'>
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
                <input class='btn btn-danger' type=\"submit\" value=\"Usuń\">
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_2a76178467a81dbdb904e566144430d277494a4927b1c0827cfbcf361ded04fb->leave($__internal_2a76178467a81dbdb904e566144430d277494a4927b1c0827cfbcf361ded04fb_prof);

        
        $__internal_306b44c3ac154d9105ec354ce7e2cb841cacdf38bf4689af5b03b09d6e7e45fd->leave($__internal_306b44c3ac154d9105ec354ce7e2cb841cacdf38bf4689af5b03b09d6e7e45fd_prof);

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
    <h1>Edycja kroku</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul class='list-unstyled'>
        <li>
            <a href=\"{{ path('recipestep_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input class='btn btn-danger' type=\"submit\" value=\"Usuń\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "recipestep/edit.html.twig", "/home/kamil/Dokumenty/studia/cookbook-symfony/app/Resources/views/recipestep/edit.html.twig");
    }
}
