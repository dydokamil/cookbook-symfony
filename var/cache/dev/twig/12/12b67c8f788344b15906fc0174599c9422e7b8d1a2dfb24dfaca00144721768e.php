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
        $__internal_cb310bcc3b60ae5e6e2e9c42352eb42a6aea5484b618678a1dec039774e8625c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb310bcc3b60ae5e6e2e9c42352eb42a6aea5484b618678a1dec039774e8625c->enter($__internal_cb310bcc3b60ae5e6e2e9c42352eb42a6aea5484b618678a1dec039774e8625c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_8855b29cb83f271e796df2eb1fb2254d2a2829b0f263c972e1cd898d4a64d3e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8855b29cb83f271e796df2eb1fb2254d2a2829b0f263c972e1cd898d4a64d3e2->enter($__internal_8855b29cb83f271e796df2eb1fb2254d2a2829b0f263c972e1cd898d4a64d3e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb310bcc3b60ae5e6e2e9c42352eb42a6aea5484b618678a1dec039774e8625c->leave($__internal_cb310bcc3b60ae5e6e2e9c42352eb42a6aea5484b618678a1dec039774e8625c_prof);

        
        $__internal_8855b29cb83f271e796df2eb1fb2254d2a2829b0f263c972e1cd898d4a64d3e2->leave($__internal_8855b29cb83f271e796df2eb1fb2254d2a2829b0f263c972e1cd898d4a64d3e2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4ab85241de15b65d3450c130d2a3ac97af546189d1aa34721c4d741a92668f34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ab85241de15b65d3450c130d2a3ac97af546189d1aa34721c4d741a92668f34->enter($__internal_4ab85241de15b65d3450c130d2a3ac97af546189d1aa34721c4d741a92668f34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_a204f5422296a465789c70cd39df28760c9c444bdba259a7901cb14a63d540d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a204f5422296a465789c70cd39df28760c9c444bdba259a7901cb14a63d540d8->enter($__internal_a204f5422296a465789c70cd39df28760c9c444bdba259a7901cb14a63d540d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a204f5422296a465789c70cd39df28760c9c444bdba259a7901cb14a63d540d8->leave($__internal_a204f5422296a465789c70cd39df28760c9c444bdba259a7901cb14a63d540d8_prof);

        
        $__internal_4ab85241de15b65d3450c130d2a3ac97af546189d1aa34721c4d741a92668f34->leave($__internal_4ab85241de15b65d3450c130d2a3ac97af546189d1aa34721c4d741a92668f34_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_37e199785bc740f50c65a006877b6341c17d9cc5d0f40d2162dbd24a85f77435 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37e199785bc740f50c65a006877b6341c17d9cc5d0f40d2162dbd24a85f77435->enter($__internal_37e199785bc740f50c65a006877b6341c17d9cc5d0f40d2162dbd24a85f77435_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b3b553ccd9a8869a94f6f3029ca8bc0a716752e89ac06e9e15b622901939dfe3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3b553ccd9a8869a94f6f3029ca8bc0a716752e89ac06e9e15b622901939dfe3->enter($__internal_b3b553ccd9a8869a94f6f3029ca8bc0a716752e89ac06e9e15b622901939dfe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b3b553ccd9a8869a94f6f3029ca8bc0a716752e89ac06e9e15b622901939dfe3->leave($__internal_b3b553ccd9a8869a94f6f3029ca8bc0a716752e89ac06e9e15b622901939dfe3_prof);

        
        $__internal_37e199785bc740f50c65a006877b6341c17d9cc5d0f40d2162dbd24a85f77435->leave($__internal_37e199785bc740f50c65a006877b6341c17d9cc5d0f40d2162dbd24a85f77435_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8521638178bdda367d5ad1e795b6c86eea96656265a1a2a51ecdd1e9f7351aab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8521638178bdda367d5ad1e795b6c86eea96656265a1a2a51ecdd1e9f7351aab->enter($__internal_8521638178bdda367d5ad1e795b6c86eea96656265a1a2a51ecdd1e9f7351aab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_bad391159f3a8ca22967831566cdb55f9778142ef67457ada200bfb565d2b033 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bad391159f3a8ca22967831566cdb55f9778142ef67457ada200bfb565d2b033->enter($__internal_bad391159f3a8ca22967831566cdb55f9778142ef67457ada200bfb565d2b033_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_bad391159f3a8ca22967831566cdb55f9778142ef67457ada200bfb565d2b033->leave($__internal_bad391159f3a8ca22967831566cdb55f9778142ef67457ada200bfb565d2b033_prof);

        
        $__internal_8521638178bdda367d5ad1e795b6c86eea96656265a1a2a51ecdd1e9f7351aab->leave($__internal_8521638178bdda367d5ad1e795b6c86eea96656265a1a2a51ecdd1e9f7351aab_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/home/kamil/Dokumenty/studia/cookbook/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
