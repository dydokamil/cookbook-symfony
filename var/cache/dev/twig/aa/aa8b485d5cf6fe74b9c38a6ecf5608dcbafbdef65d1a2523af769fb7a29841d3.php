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
        $__internal_05e7ef1106243e40167e112ba3873c967a1348564d96bb75a9b5ba9f054b3f74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05e7ef1106243e40167e112ba3873c967a1348564d96bb75a9b5ba9f054b3f74->enter($__internal_05e7ef1106243e40167e112ba3873c967a1348564d96bb75a9b5ba9f054b3f74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ingredientstepjoin/new.html.twig"));

        $__internal_f11aeb6afc6b55272613814076f7f12a06c562f391b4b32a2d67da0c192af58d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f11aeb6afc6b55272613814076f7f12a06c562f391b4b32a2d67da0c192af58d->enter($__internal_f11aeb6afc6b55272613814076f7f12a06c562f391b4b32a2d67da0c192af58d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ingredientstepjoin/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_05e7ef1106243e40167e112ba3873c967a1348564d96bb75a9b5ba9f054b3f74->leave($__internal_05e7ef1106243e40167e112ba3873c967a1348564d96bb75a9b5ba9f054b3f74_prof);

        
        $__internal_f11aeb6afc6b55272613814076f7f12a06c562f391b4b32a2d67da0c192af58d->leave($__internal_f11aeb6afc6b55272613814076f7f12a06c562f391b4b32a2d67da0c192af58d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7da24a6936fe3cf48ffdfd7aa165bb9b6f52d7aeb14d3b4b7fdedf577ef8d6de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7da24a6936fe3cf48ffdfd7aa165bb9b6f52d7aeb14d3b4b7fdedf577ef8d6de->enter($__internal_7da24a6936fe3cf48ffdfd7aa165bb9b6f52d7aeb14d3b4b7fdedf577ef8d6de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ac58ae46ce7d2fd9455eebd907c0783a61f67f0b8fe444f7892f00d03d36419e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac58ae46ce7d2fd9455eebd907c0783a61f67f0b8fe444f7892f00d03d36419e->enter($__internal_ac58ae46ce7d2fd9455eebd907c0783a61f67f0b8fe444f7892f00d03d36419e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Tworzenie składnika dla kroku</h1>

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

    <ul class='list-unstyled'>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ingredientstepjoin_index");
        echo "\">Powrót do listy</a>
        </li>
    </ul>
";
        
        $__internal_ac58ae46ce7d2fd9455eebd907c0783a61f67f0b8fe444f7892f00d03d36419e->leave($__internal_ac58ae46ce7d2fd9455eebd907c0783a61f67f0b8fe444f7892f00d03d36419e_prof);

        
        $__internal_7da24a6936fe3cf48ffdfd7aa165bb9b6f52d7aeb14d3b4b7fdedf577ef8d6de->leave($__internal_7da24a6936fe3cf48ffdfd7aa165bb9b6f52d7aeb14d3b4b7fdedf577ef8d6de_prof);

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
    <h1>Tworzenie składnika dla kroku</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Utwórz\" />
    {{ form_end(form) }}

    <ul class='list-unstyled'>
        <li>
            <a href=\"{{ path('ingredientstepjoin_index') }}\">Powrót do listy</a>
        </li>
    </ul>
{% endblock %}
", "ingredientstepjoin/new.html.twig", "/home/kamil/Dokumenty/studia/cookbook-symfony/app/Resources/views/ingredientstepjoin/new.html.twig");
    }
}
