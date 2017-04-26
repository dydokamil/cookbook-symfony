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
        $__internal_59c4a3c2fdbd165e69f5c0b11a0ffecec8a74d6c2d233fd1e4cef7ac50d5ce39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59c4a3c2fdbd165e69f5c0b11a0ffecec8a74d6c2d233fd1e4cef7ac50d5ce39->enter($__internal_59c4a3c2fdbd165e69f5c0b11a0ffecec8a74d6c2d233fd1e4cef7ac50d5ce39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "recipestep/new.html.twig"));

        $__internal_2a4a2cea0485663af9c6dc752524601563311bb84254eef6164679723957c5d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a4a2cea0485663af9c6dc752524601563311bb84254eef6164679723957c5d5->enter($__internal_2a4a2cea0485663af9c6dc752524601563311bb84254eef6164679723957c5d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "recipestep/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_59c4a3c2fdbd165e69f5c0b11a0ffecec8a74d6c2d233fd1e4cef7ac50d5ce39->leave($__internal_59c4a3c2fdbd165e69f5c0b11a0ffecec8a74d6c2d233fd1e4cef7ac50d5ce39_prof);

        
        $__internal_2a4a2cea0485663af9c6dc752524601563311bb84254eef6164679723957c5d5->leave($__internal_2a4a2cea0485663af9c6dc752524601563311bb84254eef6164679723957c5d5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2b442a9e2282e6a99c0f3ea5de9e3160ffbbb9f7fa14c4eb9412ea92c11e25ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b442a9e2282e6a99c0f3ea5de9e3160ffbbb9f7fa14c4eb9412ea92c11e25ec->enter($__internal_2b442a9e2282e6a99c0f3ea5de9e3160ffbbb9f7fa14c4eb9412ea92c11e25ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f723f77938a6d59d46902e42f3861df285a6fa870cfef0d9b2a68b1f0616d26e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f723f77938a6d59d46902e42f3861df285a6fa870cfef0d9b2a68b1f0616d26e->enter($__internal_f723f77938a6d59d46902e42f3861df285a6fa870cfef0d9b2a68b1f0616d26e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f723f77938a6d59d46902e42f3861df285a6fa870cfef0d9b2a68b1f0616d26e->leave($__internal_f723f77938a6d59d46902e42f3861df285a6fa870cfef0d9b2a68b1f0616d26e_prof);

        
        $__internal_2b442a9e2282e6a99c0f3ea5de9e3160ffbbb9f7fa14c4eb9412ea92c11e25ec->leave($__internal_2b442a9e2282e6a99c0f3ea5de9e3160ffbbb9f7fa14c4eb9412ea92c11e25ec_prof);

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
", "recipestep/new.html.twig", "/home/kamil/Dokumenty/studia/cookbook/app/Resources/views/recipestep/new.html.twig");
    }
}
