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
        $__internal_82e79caef0f5ac2178f98273cbf92d031c672267485ea9e67600fb172cb40261 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82e79caef0f5ac2178f98273cbf92d031c672267485ea9e67600fb172cb40261->enter($__internal_82e79caef0f5ac2178f98273cbf92d031c672267485ea9e67600fb172cb40261_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "recipestep/new.html.twig"));

        $__internal_e919ffdaeb5a70cb052ce19c820bd471e09438024b16c2488f3f0819289a2c85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e919ffdaeb5a70cb052ce19c820bd471e09438024b16c2488f3f0819289a2c85->enter($__internal_e919ffdaeb5a70cb052ce19c820bd471e09438024b16c2488f3f0819289a2c85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "recipestep/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_82e79caef0f5ac2178f98273cbf92d031c672267485ea9e67600fb172cb40261->leave($__internal_82e79caef0f5ac2178f98273cbf92d031c672267485ea9e67600fb172cb40261_prof);

        
        $__internal_e919ffdaeb5a70cb052ce19c820bd471e09438024b16c2488f3f0819289a2c85->leave($__internal_e919ffdaeb5a70cb052ce19c820bd471e09438024b16c2488f3f0819289a2c85_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7e74c1d11a9ba06f9a0453fa6e855401deb1c42049963df7a5fafdf273f888f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e74c1d11a9ba06f9a0453fa6e855401deb1c42049963df7a5fafdf273f888f5->enter($__internal_7e74c1d11a9ba06f9a0453fa6e855401deb1c42049963df7a5fafdf273f888f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5dadc8f3264870a1711f33e81414b958b1253a71a5009ca8e6a7bf38834b950d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dadc8f3264870a1711f33e81414b958b1253a71a5009ca8e6a7bf38834b950d->enter($__internal_5dadc8f3264870a1711f33e81414b958b1253a71a5009ca8e6a7bf38834b950d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5dadc8f3264870a1711f33e81414b958b1253a71a5009ca8e6a7bf38834b950d->leave($__internal_5dadc8f3264870a1711f33e81414b958b1253a71a5009ca8e6a7bf38834b950d_prof);

        
        $__internal_7e74c1d11a9ba06f9a0453fa6e855401deb1c42049963df7a5fafdf273f888f5->leave($__internal_7e74c1d11a9ba06f9a0453fa6e855401deb1c42049963df7a5fafdf273f888f5_prof);

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
