<?php

/* default/index.html.twig */
class __TwigTemplate_5d04d389cc45e7dcb96571085e7073eef0c0fa0ae64c81e0136e791ac5735c58 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
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
        $__internal_b732fd439a492e1fed258d7acbb14ee3371e8bdd2fa5fd5aa98a778888f0994d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b732fd439a492e1fed258d7acbb14ee3371e8bdd2fa5fd5aa98a778888f0994d->enter($__internal_b732fd439a492e1fed258d7acbb14ee3371e8bdd2fa5fd5aa98a778888f0994d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_a6000f82171b16c1776ecd4f1b2631e34246b2f58290fd0cc7c267b16ce6ce42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6000f82171b16c1776ecd4f1b2631e34246b2f58290fd0cc7c267b16ce6ce42->enter($__internal_a6000f82171b16c1776ecd4f1b2631e34246b2f58290fd0cc7c267b16ce6ce42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b732fd439a492e1fed258d7acbb14ee3371e8bdd2fa5fd5aa98a778888f0994d->leave($__internal_b732fd439a492e1fed258d7acbb14ee3371e8bdd2fa5fd5aa98a778888f0994d_prof);

        
        $__internal_a6000f82171b16c1776ecd4f1b2631e34246b2f58290fd0cc7c267b16ce6ce42->leave($__internal_a6000f82171b16c1776ecd4f1b2631e34246b2f58290fd0cc7c267b16ce6ce42_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_38bae19612e46a17602d8132a9ced8cc31ba54be64b3ac464787c6a25142932c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38bae19612e46a17602d8132a9ced8cc31ba54be64b3ac464787c6a25142932c->enter($__internal_38bae19612e46a17602d8132a9ced8cc31ba54be64b3ac464787c6a25142932c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2b0af09886eb87e4f7fb95a511bffcfde792eadd49da45c9fbe5ad30b76239dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b0af09886eb87e4f7fb95a511bffcfde792eadd49da45c9fbe5ad30b76239dd->enter($__internal_2b0af09886eb87e4f7fb95a511bffcfde792eadd49da45c9fbe5ad30b76239dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Książka kucharska - strona główna</h1>
";
        
        $__internal_2b0af09886eb87e4f7fb95a511bffcfde792eadd49da45c9fbe5ad30b76239dd->leave($__internal_2b0af09886eb87e4f7fb95a511bffcfde792eadd49da45c9fbe5ad30b76239dd_prof);

        
        $__internal_38bae19612e46a17602d8132a9ced8cc31ba54be64b3ac464787c6a25142932c->leave($__internal_38bae19612e46a17602d8132a9ced8cc31ba54be64b3ac464787c6a25142932c_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Książka kucharska - strona główna</h1>
{% endblock %}
", "default/index.html.twig", "/home/kamil/Dokumenty/studia/cookbook-symfony/app/Resources/views/default/index.html.twig");
    }
}
