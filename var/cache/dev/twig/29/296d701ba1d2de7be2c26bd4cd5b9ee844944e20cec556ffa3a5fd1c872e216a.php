<?php

/* recipestep/new.html.twig */
class __TwigTemplate_0198d6f8423dd9b50cd09c175a05b47fd8078f011d7c2bf19dbe486a87fc92f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "recipestep/new.html.twig", 1);
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
        $__internal_e60fe5b99bd4ec55b5db7d6f66e032fbeb1600406f4114813c0b3f58e661cbfb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e60fe5b99bd4ec55b5db7d6f66e032fbeb1600406f4114813c0b3f58e661cbfb->enter($__internal_e60fe5b99bd4ec55b5db7d6f66e032fbeb1600406f4114813c0b3f58e661cbfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "recipestep/new.html.twig"));

        $__internal_307b3abc36bc655a9469351e7f601f5b11ab6c7ec29d228b33aecf804943b1ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_307b3abc36bc655a9469351e7f601f5b11ab6c7ec29d228b33aecf804943b1ce->enter($__internal_307b3abc36bc655a9469351e7f601f5b11ab6c7ec29d228b33aecf804943b1ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "recipestep/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e60fe5b99bd4ec55b5db7d6f66e032fbeb1600406f4114813c0b3f58e661cbfb->leave($__internal_e60fe5b99bd4ec55b5db7d6f66e032fbeb1600406f4114813c0b3f58e661cbfb_prof);

        
        $__internal_307b3abc36bc655a9469351e7f601f5b11ab6c7ec29d228b33aecf804943b1ce->leave($__internal_307b3abc36bc655a9469351e7f601f5b11ab6c7ec29d228b33aecf804943b1ce_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_92fd34e65d7841bb5d1f692164f8989ee18532a2fe60eb19f745cbed5d9538fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92fd34e65d7841bb5d1f692164f8989ee18532a2fe60eb19f745cbed5d9538fc->enter($__internal_92fd34e65d7841bb5d1f692164f8989ee18532a2fe60eb19f745cbed5d9538fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f6619aaa96b51ec0cc0d80de246b75fb54d3ddba398110a33052d6a81fe71343 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6619aaa96b51ec0cc0d80de246b75fb54d3ddba398110a33052d6a81fe71343->enter($__internal_f6619aaa96b51ec0cc0d80de246b75fb54d3ddba398110a33052d6a81fe71343_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Recipestep creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recipestep_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_f6619aaa96b51ec0cc0d80de246b75fb54d3ddba398110a33052d6a81fe71343->leave($__internal_f6619aaa96b51ec0cc0d80de246b75fb54d3ddba398110a33052d6a81fe71343_prof);

        
        $__internal_92fd34e65d7841bb5d1f692164f8989ee18532a2fe60eb19f745cbed5d9538fc->leave($__internal_92fd34e65d7841bb5d1f692164f8989ee18532a2fe60eb19f745cbed5d9538fc_prof);

    }

    public function getTemplateName()
    {
        return "recipestep/new.html.twig";
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
    <h1>Recipestep creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('recipestep_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "recipestep/new.html.twig", "/home/kamil/symfony_projects/cookbook-symfony/app/Resources/views/recipestep/new.html.twig");
    }
}
