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
        $__internal_3a531b7e3de1a84505a99c2d89bc779648e91fd0a8f2cb6297d5e19907a74aab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a531b7e3de1a84505a99c2d89bc779648e91fd0a8f2cb6297d5e19907a74aab->enter($__internal_3a531b7e3de1a84505a99c2d89bc779648e91fd0a8f2cb6297d5e19907a74aab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_f3eeb63c1626a44639f00b1f58c1c47fed1c62827bafa49f9c407141011af90e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3eeb63c1626a44639f00b1f58c1c47fed1c62827bafa49f9c407141011af90e->enter($__internal_f3eeb63c1626a44639f00b1f58c1c47fed1c62827bafa49f9c407141011af90e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a531b7e3de1a84505a99c2d89bc779648e91fd0a8f2cb6297d5e19907a74aab->leave($__internal_3a531b7e3de1a84505a99c2d89bc779648e91fd0a8f2cb6297d5e19907a74aab_prof);

        
        $__internal_f3eeb63c1626a44639f00b1f58c1c47fed1c62827bafa49f9c407141011af90e->leave($__internal_f3eeb63c1626a44639f00b1f58c1c47fed1c62827bafa49f9c407141011af90e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d3a8fd43506e3dc063107b82cfd8337fdfe8b7feee6b4acb3cc48b744f9e27e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3a8fd43506e3dc063107b82cfd8337fdfe8b7feee6b4acb3cc48b744f9e27e9->enter($__internal_d3a8fd43506e3dc063107b82cfd8337fdfe8b7feee6b4acb3cc48b744f9e27e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_0cab12e6a9e66f874b4e2c2fccd058bbc71d06f6ebe69466e80892e7e29f9d07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cab12e6a9e66f874b4e2c2fccd058bbc71d06f6ebe69466e80892e7e29f9d07->enter($__internal_0cab12e6a9e66f874b4e2c2fccd058bbc71d06f6ebe69466e80892e7e29f9d07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0cab12e6a9e66f874b4e2c2fccd058bbc71d06f6ebe69466e80892e7e29f9d07->leave($__internal_0cab12e6a9e66f874b4e2c2fccd058bbc71d06f6ebe69466e80892e7e29f9d07_prof);

        
        $__internal_d3a8fd43506e3dc063107b82cfd8337fdfe8b7feee6b4acb3cc48b744f9e27e9->leave($__internal_d3a8fd43506e3dc063107b82cfd8337fdfe8b7feee6b4acb3cc48b744f9e27e9_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0c7a953175ea291fb5d4d1e3fe8d38732ecc5bf5f49f88b154dd3b5a50180d09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c7a953175ea291fb5d4d1e3fe8d38732ecc5bf5f49f88b154dd3b5a50180d09->enter($__internal_0c7a953175ea291fb5d4d1e3fe8d38732ecc5bf5f49f88b154dd3b5a50180d09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_928061184450cd012aafb42a0d17cfaee866e9f1ebcebde67de8739533768ee3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_928061184450cd012aafb42a0d17cfaee866e9f1ebcebde67de8739533768ee3->enter($__internal_928061184450cd012aafb42a0d17cfaee866e9f1ebcebde67de8739533768ee3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_928061184450cd012aafb42a0d17cfaee866e9f1ebcebde67de8739533768ee3->leave($__internal_928061184450cd012aafb42a0d17cfaee866e9f1ebcebde67de8739533768ee3_prof);

        
        $__internal_0c7a953175ea291fb5d4d1e3fe8d38732ecc5bf5f49f88b154dd3b5a50180d09->leave($__internal_0c7a953175ea291fb5d4d1e3fe8d38732ecc5bf5f49f88b154dd3b5a50180d09_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_82f2ac964abba1c2040714fd5128425d0dba5f4fa5d510e56eebd65570621aa0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82f2ac964abba1c2040714fd5128425d0dba5f4fa5d510e56eebd65570621aa0->enter($__internal_82f2ac964abba1c2040714fd5128425d0dba5f4fa5d510e56eebd65570621aa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_40c1e90143483da08f965337a7c66720a2c9777688b0f62ddef6c65729ee903e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40c1e90143483da08f965337a7c66720a2c9777688b0f62ddef6c65729ee903e->enter($__internal_40c1e90143483da08f965337a7c66720a2c9777688b0f62ddef6c65729ee903e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_40c1e90143483da08f965337a7c66720a2c9777688b0f62ddef6c65729ee903e->leave($__internal_40c1e90143483da08f965337a7c66720a2c9777688b0f62ddef6c65729ee903e_prof);

        
        $__internal_82f2ac964abba1c2040714fd5128425d0dba5f4fa5d510e56eebd65570621aa0->leave($__internal_82f2ac964abba1c2040714fd5128425d0dba5f4fa5d510e56eebd65570621aa0_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/home/kamil/Dokumenty/studia/cookbook-symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
