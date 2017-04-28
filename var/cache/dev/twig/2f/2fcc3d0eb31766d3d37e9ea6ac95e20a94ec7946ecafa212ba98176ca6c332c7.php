<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_2cc28d58ef84c4c83861f0e21e9b4c34537cdbec75764d8868a4deb595045ea0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_24aea2853944bd25bd84e37e0007b523da587b3635d2d2476697a338a7036496 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24aea2853944bd25bd84e37e0007b523da587b3635d2d2476697a338a7036496->enter($__internal_24aea2853944bd25bd84e37e0007b523da587b3635d2d2476697a338a7036496_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_a5718fbce8f43590b3bb644f295f5f87f884dc08bc2054c99ea761ea72c3b8e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5718fbce8f43590b3bb644f295f5f87f884dc08bc2054c99ea761ea72c3b8e7->enter($__internal_a5718fbce8f43590b3bb644f295f5f87f884dc08bc2054c99ea761ea72c3b8e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_24aea2853944bd25bd84e37e0007b523da587b3635d2d2476697a338a7036496->leave($__internal_24aea2853944bd25bd84e37e0007b523da587b3635d2d2476697a338a7036496_prof);

        
        $__internal_a5718fbce8f43590b3bb644f295f5f87f884dc08bc2054c99ea761ea72c3b8e7->leave($__internal_a5718fbce8f43590b3bb644f295f5f87f884dc08bc2054c99ea761ea72c3b8e7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_bc883b01bad298b706330cc0b7235b1f8441ff3ff0d5e2bdd240bfd7a0b234ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc883b01bad298b706330cc0b7235b1f8441ff3ff0d5e2bdd240bfd7a0b234ca->enter($__internal_bc883b01bad298b706330cc0b7235b1f8441ff3ff0d5e2bdd240bfd7a0b234ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_f61a820991459aa192f3c002152a1718985155c9f3f4bc086577732833a8f8c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f61a820991459aa192f3c002152a1718985155c9f3f4bc086577732833a8f8c3->enter($__internal_f61a820991459aa192f3c002152a1718985155c9f3f4bc086577732833a8f8c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_f61a820991459aa192f3c002152a1718985155c9f3f4bc086577732833a8f8c3->leave($__internal_f61a820991459aa192f3c002152a1718985155c9f3f4bc086577732833a8f8c3_prof);

        
        $__internal_bc883b01bad298b706330cc0b7235b1f8441ff3ff0d5e2bdd240bfd7a0b234ca->leave($__internal_bc883b01bad298b706330cc0b7235b1f8441ff3ff0d5e2bdd240bfd7a0b234ca_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/home/kamil/symfony_projects/cookbook-symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
