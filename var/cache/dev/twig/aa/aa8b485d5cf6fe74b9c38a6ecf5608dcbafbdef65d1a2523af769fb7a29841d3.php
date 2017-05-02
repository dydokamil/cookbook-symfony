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
        $__internal_60b77740880c88615eb2cd7f2ed0059b62dd513b1965c5fbadb0709409c79d5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60b77740880c88615eb2cd7f2ed0059b62dd513b1965c5fbadb0709409c79d5b->enter($__internal_60b77740880c88615eb2cd7f2ed0059b62dd513b1965c5fbadb0709409c79d5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ingredientstepjoin/new.html.twig"));

        $__internal_334153996bc3e29d2b70ff275e17d41aa614c10c6e96bad48de9e479043ff684 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_334153996bc3e29d2b70ff275e17d41aa614c10c6e96bad48de9e479043ff684->enter($__internal_334153996bc3e29d2b70ff275e17d41aa614c10c6e96bad48de9e479043ff684_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ingredientstepjoin/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_60b77740880c88615eb2cd7f2ed0059b62dd513b1965c5fbadb0709409c79d5b->leave($__internal_60b77740880c88615eb2cd7f2ed0059b62dd513b1965c5fbadb0709409c79d5b_prof);

        
        $__internal_334153996bc3e29d2b70ff275e17d41aa614c10c6e96bad48de9e479043ff684->leave($__internal_334153996bc3e29d2b70ff275e17d41aa614c10c6e96bad48de9e479043ff684_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f8ca98387a1efc1c798e6143b8a3490d274151be1c2cc57f30ff2a3569feaa18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8ca98387a1efc1c798e6143b8a3490d274151be1c2cc57f30ff2a3569feaa18->enter($__internal_f8ca98387a1efc1c798e6143b8a3490d274151be1c2cc57f30ff2a3569feaa18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_03f71e29bf420402b476cfd86142df84d4b24586c9c66a9d2e010cda4099ed60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03f71e29bf420402b476cfd86142df84d4b24586c9c66a9d2e010cda4099ed60->enter($__internal_03f71e29bf420402b476cfd86142df84d4b24586c9c66a9d2e010cda4099ed60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_03f71e29bf420402b476cfd86142df84d4b24586c9c66a9d2e010cda4099ed60->leave($__internal_03f71e29bf420402b476cfd86142df84d4b24586c9c66a9d2e010cda4099ed60_prof);

        
        $__internal_f8ca98387a1efc1c798e6143b8a3490d274151be1c2cc57f30ff2a3569feaa18->leave($__internal_f8ca98387a1efc1c798e6143b8a3490d274151be1c2cc57f30ff2a3569feaa18_prof);

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
", "ingredientstepjoin/new.html.twig", "/home/kamil/symfony_projects/cookbook-symfony/app/Resources/views/ingredientstepjoin/new.html.twig");
    }
}
