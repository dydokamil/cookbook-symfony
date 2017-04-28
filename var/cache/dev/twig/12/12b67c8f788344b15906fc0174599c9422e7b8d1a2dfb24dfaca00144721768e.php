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
        $__internal_eede1864d1faf20436dc928893fdd16d71b3008121921babe4d16aa3ba2a9164 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eede1864d1faf20436dc928893fdd16d71b3008121921babe4d16aa3ba2a9164->enter($__internal_eede1864d1faf20436dc928893fdd16d71b3008121921babe4d16aa3ba2a9164_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_bcf9d6ac85bed25df7925093c988002f31d6fa3896aa0f387bab79744c2b8468 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcf9d6ac85bed25df7925093c988002f31d6fa3896aa0f387bab79744c2b8468->enter($__internal_bcf9d6ac85bed25df7925093c988002f31d6fa3896aa0f387bab79744c2b8468_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eede1864d1faf20436dc928893fdd16d71b3008121921babe4d16aa3ba2a9164->leave($__internal_eede1864d1faf20436dc928893fdd16d71b3008121921babe4d16aa3ba2a9164_prof);

        
        $__internal_bcf9d6ac85bed25df7925093c988002f31d6fa3896aa0f387bab79744c2b8468->leave($__internal_bcf9d6ac85bed25df7925093c988002f31d6fa3896aa0f387bab79744c2b8468_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ac0037e929684f02b1b536ccc7524bab8259ca9e91d2175ce8114c11edcd4634 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac0037e929684f02b1b536ccc7524bab8259ca9e91d2175ce8114c11edcd4634->enter($__internal_ac0037e929684f02b1b536ccc7524bab8259ca9e91d2175ce8114c11edcd4634_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_1f3e832d173c9c16f711947c41a3c5ced734a54577916ce5553c52a35148e318 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f3e832d173c9c16f711947c41a3c5ced734a54577916ce5553c52a35148e318->enter($__internal_1f3e832d173c9c16f711947c41a3c5ced734a54577916ce5553c52a35148e318_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_1f3e832d173c9c16f711947c41a3c5ced734a54577916ce5553c52a35148e318->leave($__internal_1f3e832d173c9c16f711947c41a3c5ced734a54577916ce5553c52a35148e318_prof);

        
        $__internal_ac0037e929684f02b1b536ccc7524bab8259ca9e91d2175ce8114c11edcd4634->leave($__internal_ac0037e929684f02b1b536ccc7524bab8259ca9e91d2175ce8114c11edcd4634_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_15cdec294d994a153d3e39388c1541fbe7976d1eccd2b0fdef358168ef806e4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15cdec294d994a153d3e39388c1541fbe7976d1eccd2b0fdef358168ef806e4d->enter($__internal_15cdec294d994a153d3e39388c1541fbe7976d1eccd2b0fdef358168ef806e4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_06b92b3cad02cb84f68ae1fc142ce8addad6dedfcbfb195ed28078e1c9a6b265 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06b92b3cad02cb84f68ae1fc142ce8addad6dedfcbfb195ed28078e1c9a6b265->enter($__internal_06b92b3cad02cb84f68ae1fc142ce8addad6dedfcbfb195ed28078e1c9a6b265_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_06b92b3cad02cb84f68ae1fc142ce8addad6dedfcbfb195ed28078e1c9a6b265->leave($__internal_06b92b3cad02cb84f68ae1fc142ce8addad6dedfcbfb195ed28078e1c9a6b265_prof);

        
        $__internal_15cdec294d994a153d3e39388c1541fbe7976d1eccd2b0fdef358168ef806e4d->leave($__internal_15cdec294d994a153d3e39388c1541fbe7976d1eccd2b0fdef358168ef806e4d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c879a8309f6ae2ac0482db836027b83391f40c12b4a5939e575c5e86ebe5587f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c879a8309f6ae2ac0482db836027b83391f40c12b4a5939e575c5e86ebe5587f->enter($__internal_c879a8309f6ae2ac0482db836027b83391f40c12b4a5939e575c5e86ebe5587f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0f677259e04303144c2b9223bd95c9b77536c312db9905e4dc1d1dd1bb548a48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f677259e04303144c2b9223bd95c9b77536c312db9905e4dc1d1dd1bb548a48->enter($__internal_0f677259e04303144c2b9223bd95c9b77536c312db9905e4dc1d1dd1bb548a48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0f677259e04303144c2b9223bd95c9b77536c312db9905e4dc1d1dd1bb548a48->leave($__internal_0f677259e04303144c2b9223bd95c9b77536c312db9905e4dc1d1dd1bb548a48_prof);

        
        $__internal_c879a8309f6ae2ac0482db836027b83391f40c12b4a5939e575c5e86ebe5587f->leave($__internal_c879a8309f6ae2ac0482db836027b83391f40c12b4a5939e575c5e86ebe5587f_prof);

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
