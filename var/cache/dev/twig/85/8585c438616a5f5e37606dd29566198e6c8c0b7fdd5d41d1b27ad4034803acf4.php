<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_eaffccbf12f0807b0fcd6befc6240299a3eae36aa7a6618a61fa7f8ea911be84 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8a3ca42862e2b4e6ce3a9ad30a2ec490158a3ddaf17ad91b126020d304532c6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a3ca42862e2b4e6ce3a9ad30a2ec490158a3ddaf17ad91b126020d304532c6f->enter($__internal_8a3ca42862e2b4e6ce3a9ad30a2ec490158a3ddaf17ad91b126020d304532c6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_219b0e89363db03a197285a9afddc0b16a4e6c2b46e99417c0d6b045739ddeb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_219b0e89363db03a197285a9afddc0b16a4e6c2b46e99417c0d6b045739ddeb6->enter($__internal_219b0e89363db03a197285a9afddc0b16a4e6c2b46e99417c0d6b045739ddeb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8a3ca42862e2b4e6ce3a9ad30a2ec490158a3ddaf17ad91b126020d304532c6f->leave($__internal_8a3ca42862e2b4e6ce3a9ad30a2ec490158a3ddaf17ad91b126020d304532c6f_prof);

        
        $__internal_219b0e89363db03a197285a9afddc0b16a4e6c2b46e99417c0d6b045739ddeb6->leave($__internal_219b0e89363db03a197285a9afddc0b16a4e6c2b46e99417c0d6b045739ddeb6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7ca5dfaab4d3d8901789307e218f938ae7137572457ea914e76fa424ebe8754e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ca5dfaab4d3d8901789307e218f938ae7137572457ea914e76fa424ebe8754e->enter($__internal_7ca5dfaab4d3d8901789307e218f938ae7137572457ea914e76fa424ebe8754e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4454441a3a82a94bc8b3b60f36987c7c91c4ef990985c574bc220c4a92d92f38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4454441a3a82a94bc8b3b60f36987c7c91c4ef990985c574bc220c4a92d92f38->enter($__internal_4454441a3a82a94bc8b3b60f36987c7c91c4ef990985c574bc220c4a92d92f38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_4454441a3a82a94bc8b3b60f36987c7c91c4ef990985c574bc220c4a92d92f38->leave($__internal_4454441a3a82a94bc8b3b60f36987c7c91c4ef990985c574bc220c4a92d92f38_prof);

        
        $__internal_7ca5dfaab4d3d8901789307e218f938ae7137572457ea914e76fa424ebe8754e->leave($__internal_7ca5dfaab4d3d8901789307e218f938ae7137572457ea914e76fa424ebe8754e_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_b97868e7d6ddc98b7aa79e8b6ac1fb7722f13e9cf82ed7558737479d07b94d69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b97868e7d6ddc98b7aa79e8b6ac1fb7722f13e9cf82ed7558737479d07b94d69->enter($__internal_b97868e7d6ddc98b7aa79e8b6ac1fb7722f13e9cf82ed7558737479d07b94d69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9485ea84106ff9b0f037f9e24c73edfc198a0c4bbb3e75a24327edd5dfe45b3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9485ea84106ff9b0f037f9e24c73edfc198a0c4bbb3e75a24327edd5dfe45b3d->enter($__internal_9485ea84106ff9b0f037f9e24c73edfc198a0c4bbb3e75a24327edd5dfe45b3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9485ea84106ff9b0f037f9e24c73edfc198a0c4bbb3e75a24327edd5dfe45b3d->leave($__internal_9485ea84106ff9b0f037f9e24c73edfc198a0c4bbb3e75a24327edd5dfe45b3d_prof);

        
        $__internal_b97868e7d6ddc98b7aa79e8b6ac1fb7722f13e9cf82ed7558737479d07b94d69->leave($__internal_b97868e7d6ddc98b7aa79e8b6ac1fb7722f13e9cf82ed7558737479d07b94d69_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_159781e3d632e703fe797f3706a1c3d98c7b9d0d586aea235e309e4d52b33810 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_159781e3d632e703fe797f3706a1c3d98c7b9d0d586aea235e309e4d52b33810->enter($__internal_159781e3d632e703fe797f3706a1c3d98c7b9d0d586aea235e309e4d52b33810_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7c4189fdfc51cdf3437eb2c1a3165e5bb4f0f2815eda47032ae78ce7c2e67824 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c4189fdfc51cdf3437eb2c1a3165e5bb4f0f2815eda47032ae78ce7c2e67824->enter($__internal_7c4189fdfc51cdf3437eb2c1a3165e5bb4f0f2815eda47032ae78ce7c2e67824_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_7c4189fdfc51cdf3437eb2c1a3165e5bb4f0f2815eda47032ae78ce7c2e67824->leave($__internal_7c4189fdfc51cdf3437eb2c1a3165e5bb4f0f2815eda47032ae78ce7c2e67824_prof);

        
        $__internal_159781e3d632e703fe797f3706a1c3d98c7b9d0d586aea235e309e4d52b33810->leave($__internal_159781e3d632e703fe797f3706a1c3d98c7b9d0d586aea235e309e4d52b33810_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/kamil/symfony_projects/cookbook-symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
