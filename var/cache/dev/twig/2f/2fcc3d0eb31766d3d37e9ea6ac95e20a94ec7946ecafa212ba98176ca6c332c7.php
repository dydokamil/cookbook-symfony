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
        $__internal_ed50867414c30cfaf1b2b8011b75df67e5b90c1e2107f5c2704f35ba7710f7c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed50867414c30cfaf1b2b8011b75df67e5b90c1e2107f5c2704f35ba7710f7c2->enter($__internal_ed50867414c30cfaf1b2b8011b75df67e5b90c1e2107f5c2704f35ba7710f7c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_c419bf4e3ff29513f6c0950d8d7c2802367c072c4f91386ad0a51a75a89021d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c419bf4e3ff29513f6c0950d8d7c2802367c072c4f91386ad0a51a75a89021d7->enter($__internal_c419bf4e3ff29513f6c0950d8d7c2802367c072c4f91386ad0a51a75a89021d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed50867414c30cfaf1b2b8011b75df67e5b90c1e2107f5c2704f35ba7710f7c2->leave($__internal_ed50867414c30cfaf1b2b8011b75df67e5b90c1e2107f5c2704f35ba7710f7c2_prof);

        
        $__internal_c419bf4e3ff29513f6c0950d8d7c2802367c072c4f91386ad0a51a75a89021d7->leave($__internal_c419bf4e3ff29513f6c0950d8d7c2802367c072c4f91386ad0a51a75a89021d7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ba0e125a12c6a9bbb1c4639b04a82abbaf07cce5fa9eedbb4c69db85e754425c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba0e125a12c6a9bbb1c4639b04a82abbaf07cce5fa9eedbb4c69db85e754425c->enter($__internal_ba0e125a12c6a9bbb1c4639b04a82abbaf07cce5fa9eedbb4c69db85e754425c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_594c5f6c39fcc61bdc8704fd0e6cc34fedd5c4f49d03bc3785b5710451d07e6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_594c5f6c39fcc61bdc8704fd0e6cc34fedd5c4f49d03bc3785b5710451d07e6c->enter($__internal_594c5f6c39fcc61bdc8704fd0e6cc34fedd5c4f49d03bc3785b5710451d07e6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_594c5f6c39fcc61bdc8704fd0e6cc34fedd5c4f49d03bc3785b5710451d07e6c->leave($__internal_594c5f6c39fcc61bdc8704fd0e6cc34fedd5c4f49d03bc3785b5710451d07e6c_prof);

        
        $__internal_ba0e125a12c6a9bbb1c4639b04a82abbaf07cce5fa9eedbb4c69db85e754425c->leave($__internal_ba0e125a12c6a9bbb1c4639b04a82abbaf07cce5fa9eedbb4c69db85e754425c_prof);

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
", "@WebProfiler/Collector/ajax.html.twig", "/home/kamil/Dokumenty/studia/cookbook/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
