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
        $__internal_5f9d300191dbc9a46314a3ec26fb09b0f17844bd1fb847d004ce6011426ca531 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f9d300191dbc9a46314a3ec26fb09b0f17844bd1fb847d004ce6011426ca531->enter($__internal_5f9d300191dbc9a46314a3ec26fb09b0f17844bd1fb847d004ce6011426ca531_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ingredientstepjoin/new.html.twig"));

        $__internal_8adbd1a70cebc4dee3d401eaab64383b66fba21349ba10c996982641964054aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8adbd1a70cebc4dee3d401eaab64383b66fba21349ba10c996982641964054aa->enter($__internal_8adbd1a70cebc4dee3d401eaab64383b66fba21349ba10c996982641964054aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ingredientstepjoin/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5f9d300191dbc9a46314a3ec26fb09b0f17844bd1fb847d004ce6011426ca531->leave($__internal_5f9d300191dbc9a46314a3ec26fb09b0f17844bd1fb847d004ce6011426ca531_prof);

        
        $__internal_8adbd1a70cebc4dee3d401eaab64383b66fba21349ba10c996982641964054aa->leave($__internal_8adbd1a70cebc4dee3d401eaab64383b66fba21349ba10c996982641964054aa_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ae7de0d7b8fd414a7bea35ac42cd284e6377103f1dbe7d4c98ac1b7361b199d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae7de0d7b8fd414a7bea35ac42cd284e6377103f1dbe7d4c98ac1b7361b199d1->enter($__internal_ae7de0d7b8fd414a7bea35ac42cd284e6377103f1dbe7d4c98ac1b7361b199d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c78936294bd7ab9eb63a8c9f19461781094890d4da84f153a5c91026b9100678 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c78936294bd7ab9eb63a8c9f19461781094890d4da84f153a5c91026b9100678->enter($__internal_c78936294bd7ab9eb63a8c9f19461781094890d4da84f153a5c91026b9100678_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c78936294bd7ab9eb63a8c9f19461781094890d4da84f153a5c91026b9100678->leave($__internal_c78936294bd7ab9eb63a8c9f19461781094890d4da84f153a5c91026b9100678_prof);

        
        $__internal_ae7de0d7b8fd414a7bea35ac42cd284e6377103f1dbe7d4c98ac1b7361b199d1->leave($__internal_ae7de0d7b8fd414a7bea35ac42cd284e6377103f1dbe7d4c98ac1b7361b199d1_prof);

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
