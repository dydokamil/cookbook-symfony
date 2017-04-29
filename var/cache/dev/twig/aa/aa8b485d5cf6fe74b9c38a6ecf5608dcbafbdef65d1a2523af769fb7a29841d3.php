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
        $__internal_a951568770c0d6f9a9f98d494b6d5e1d8229fbdcb765cff2f7500a4ec486ac9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a951568770c0d6f9a9f98d494b6d5e1d8229fbdcb765cff2f7500a4ec486ac9f->enter($__internal_a951568770c0d6f9a9f98d494b6d5e1d8229fbdcb765cff2f7500a4ec486ac9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ingredientstepjoin/new.html.twig"));

        $__internal_5c32ef407cc81bc7e91ff25212f84204bd49c7d06168d8cd01a8640ec28165c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c32ef407cc81bc7e91ff25212f84204bd49c7d06168d8cd01a8640ec28165c9->enter($__internal_5c32ef407cc81bc7e91ff25212f84204bd49c7d06168d8cd01a8640ec28165c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ingredientstepjoin/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a951568770c0d6f9a9f98d494b6d5e1d8229fbdcb765cff2f7500a4ec486ac9f->leave($__internal_a951568770c0d6f9a9f98d494b6d5e1d8229fbdcb765cff2f7500a4ec486ac9f_prof);

        
        $__internal_5c32ef407cc81bc7e91ff25212f84204bd49c7d06168d8cd01a8640ec28165c9->leave($__internal_5c32ef407cc81bc7e91ff25212f84204bd49c7d06168d8cd01a8640ec28165c9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_04965f1bf0172c78dfdcc618d97bd0e0fa67555e73b1a038d4d18e7c95a742e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04965f1bf0172c78dfdcc618d97bd0e0fa67555e73b1a038d4d18e7c95a742e4->enter($__internal_04965f1bf0172c78dfdcc618d97bd0e0fa67555e73b1a038d4d18e7c95a742e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_aee775dea5f579bfc15c8c324ae80e825c5bf7276d1fbb4fd32294c16b4c8785 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aee775dea5f579bfc15c8c324ae80e825c5bf7276d1fbb4fd32294c16b4c8785->enter($__internal_aee775dea5f579bfc15c8c324ae80e825c5bf7276d1fbb4fd32294c16b4c8785_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        <input type=\"submit\" value=\"Create\" />
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
        
        $__internal_aee775dea5f579bfc15c8c324ae80e825c5bf7276d1fbb4fd32294c16b4c8785->leave($__internal_aee775dea5f579bfc15c8c324ae80e825c5bf7276d1fbb4fd32294c16b4c8785_prof);

        
        $__internal_04965f1bf0172c78dfdcc618d97bd0e0fa67555e73b1a038d4d18e7c95a742e4->leave($__internal_04965f1bf0172c78dfdcc618d97bd0e0fa67555e73b1a038d4d18e7c95a742e4_prof);

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
        <input type=\"submit\" value=\"Create\" />
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
