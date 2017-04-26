<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_20a34671231c95d3c753144508fb395ea4cc163d7f226dae157989a4858b6089 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_511c40354aa037d4526c1a2d5d148d725d17b564e197f16bcf90a7f5131453d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_511c40354aa037d4526c1a2d5d148d725d17b564e197f16bcf90a7f5131453d9->enter($__internal_511c40354aa037d4526c1a2d5d148d725d17b564e197f16bcf90a7f5131453d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_26f2dba445828a21d58f0876693e3fc7af49d8f258bfe6e04274ea12050b2b2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26f2dba445828a21d58f0876693e3fc7af49d8f258bfe6e04274ea12050b2b2d->enter($__internal_26f2dba445828a21d58f0876693e3fc7af49d8f258bfe6e04274ea12050b2b2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_511c40354aa037d4526c1a2d5d148d725d17b564e197f16bcf90a7f5131453d9->leave($__internal_511c40354aa037d4526c1a2d5d148d725d17b564e197f16bcf90a7f5131453d9_prof);

        
        $__internal_26f2dba445828a21d58f0876693e3fc7af49d8f258bfe6e04274ea12050b2b2d->leave($__internal_26f2dba445828a21d58f0876693e3fc7af49d8f258bfe6e04274ea12050b2b2d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6d3f41d4dcfa13e4bd8bfce12fc4e5c2124c80c33a1fd1aa09ea1a62f913dd1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d3f41d4dcfa13e4bd8bfce12fc4e5c2124c80c33a1fd1aa09ea1a62f913dd1a->enter($__internal_6d3f41d4dcfa13e4bd8bfce12fc4e5c2124c80c33a1fd1aa09ea1a62f913dd1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c07f946e27ea7d3a7ddcd77325fb19b592a7eaf58080d5b57f5b5c59bdc01faf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c07f946e27ea7d3a7ddcd77325fb19b592a7eaf58080d5b57f5b5c59bdc01faf->enter($__internal_c07f946e27ea7d3a7ddcd77325fb19b592a7eaf58080d5b57f5b5c59bdc01faf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c07f946e27ea7d3a7ddcd77325fb19b592a7eaf58080d5b57f5b5c59bdc01faf->leave($__internal_c07f946e27ea7d3a7ddcd77325fb19b592a7eaf58080d5b57f5b5c59bdc01faf_prof);

        
        $__internal_6d3f41d4dcfa13e4bd8bfce12fc4e5c2124c80c33a1fd1aa09ea1a62f913dd1a->leave($__internal_6d3f41d4dcfa13e4bd8bfce12fc4e5c2124c80c33a1fd1aa09ea1a62f913dd1a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_69f17a3d753f459e2f686df86f5d4f03fb792987d5786fdb3c6c5f1575552ee4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69f17a3d753f459e2f686df86f5d4f03fb792987d5786fdb3c6c5f1575552ee4->enter($__internal_69f17a3d753f459e2f686df86f5d4f03fb792987d5786fdb3c6c5f1575552ee4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f0ed45c40045cb75d715261cab0b0c4df695778a91fd2df18f75fac394a9e11f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0ed45c40045cb75d715261cab0b0c4df695778a91fd2df18f75fac394a9e11f->enter($__internal_f0ed45c40045cb75d715261cab0b0c4df695778a91fd2df18f75fac394a9e11f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f0ed45c40045cb75d715261cab0b0c4df695778a91fd2df18f75fac394a9e11f->leave($__internal_f0ed45c40045cb75d715261cab0b0c4df695778a91fd2df18f75fac394a9e11f_prof);

        
        $__internal_69f17a3d753f459e2f686df86f5d4f03fb792987d5786fdb3c6c5f1575552ee4->leave($__internal_69f17a3d753f459e2f686df86f5d4f03fb792987d5786fdb3c6c5f1575552ee4_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e3b6e486e5741dbc2c829071c74e97c4d970d75a8dde01572bd20c3b4c394775 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3b6e486e5741dbc2c829071c74e97c4d970d75a8dde01572bd20c3b4c394775->enter($__internal_e3b6e486e5741dbc2c829071c74e97c4d970d75a8dde01572bd20c3b4c394775_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_433f93e72b9592d284ce8fb7e578d941ab809d8f8ee4e175490c5fb916442232 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_433f93e72b9592d284ce8fb7e578d941ab809d8f8ee4e175490c5fb916442232->enter($__internal_433f93e72b9592d284ce8fb7e578d941ab809d8f8ee4e175490c5fb916442232_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_433f93e72b9592d284ce8fb7e578d941ab809d8f8ee4e175490c5fb916442232->leave($__internal_433f93e72b9592d284ce8fb7e578d941ab809d8f8ee4e175490c5fb916442232_prof);

        
        $__internal_e3b6e486e5741dbc2c829071c74e97c4d970d75a8dde01572bd20c3b4c394775->leave($__internal_e3b6e486e5741dbc2c829071c74e97c4d970d75a8dde01572bd20c3b4c394775_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/kamil/symfony_projects/cookbook-symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
