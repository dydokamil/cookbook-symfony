<?php

/* ingredientstepjoin/new.html.twig */
class __TwigTemplate_91521bd548010bb93d92b275761ea576d268ae33b3213b2c7a98259d7ad96168 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ingredientstepjoin/new.html.twig", 1);
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
        $__internal_ed1fc95e5f4bc04a605cf6fabd8c87da618663aa66b00c43cf8857c301720097 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed1fc95e5f4bc04a605cf6fabd8c87da618663aa66b00c43cf8857c301720097->enter($__internal_ed1fc95e5f4bc04a605cf6fabd8c87da618663aa66b00c43cf8857c301720097_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ingredientstepjoin/new.html.twig"));

        $__internal_d322fc01022c73dd30bd5cff00a20de01f39495dce5a872ab1400d649921bb05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d322fc01022c73dd30bd5cff00a20de01f39495dce5a872ab1400d649921bb05->enter($__internal_d322fc01022c73dd30bd5cff00a20de01f39495dce5a872ab1400d649921bb05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ingredientstepjoin/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed1fc95e5f4bc04a605cf6fabd8c87da618663aa66b00c43cf8857c301720097->leave($__internal_ed1fc95e5f4bc04a605cf6fabd8c87da618663aa66b00c43cf8857c301720097_prof);

        
        $__internal_d322fc01022c73dd30bd5cff00a20de01f39495dce5a872ab1400d649921bb05->leave($__internal_d322fc01022c73dd30bd5cff00a20de01f39495dce5a872ab1400d649921bb05_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_057581ab8cad5eb173b5bfa4298088a729d2b349ac5b16a5cbe1c51e5e16dd20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_057581ab8cad5eb173b5bfa4298088a729d2b349ac5b16a5cbe1c51e5e16dd20->enter($__internal_057581ab8cad5eb173b5bfa4298088a729d2b349ac5b16a5cbe1c51e5e16dd20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0882e8ed7468f4b2ae7c211fb46a33e9bfd628182d43f7eaa74fec1a8470c97f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0882e8ed7468f4b2ae7c211fb46a33e9bfd628182d43f7eaa74fec1a8470c97f->enter($__internal_0882e8ed7468f4b2ae7c211fb46a33e9bfd628182d43f7eaa74fec1a8470c97f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Ingredientstepjoin creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Utwórz\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ingredientstepjoin_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_0882e8ed7468f4b2ae7c211fb46a33e9bfd628182d43f7eaa74fec1a8470c97f->leave($__internal_0882e8ed7468f4b2ae7c211fb46a33e9bfd628182d43f7eaa74fec1a8470c97f_prof);

        
        $__internal_057581ab8cad5eb173b5bfa4298088a729d2b349ac5b16a5cbe1c51e5e16dd20->leave($__internal_057581ab8cad5eb173b5bfa4298088a729d2b349ac5b16a5cbe1c51e5e16dd20_prof);

    }

    public function getTemplateName()
    {
        return "ingredientstepjoin/new.html.twig";
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
    <h1>Ingredientstepjoin creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Utwórz\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('ingredientstepjoin_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "ingredientstepjoin/new.html.twig", "/home/kamil/Dokumenty/studia/cookbook/app/Resources/views/ingredientstepjoin/new.html.twig");
    }
}
