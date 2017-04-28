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
        $__internal_9f22de3f92233050f5f74cdcfab20d18934cf47313096e1220b7f1dcb6a767ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f22de3f92233050f5f74cdcfab20d18934cf47313096e1220b7f1dcb6a767ee->enter($__internal_9f22de3f92233050f5f74cdcfab20d18934cf47313096e1220b7f1dcb6a767ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_dad4be9ca51b048701e6e254582a06450c0ecbbc0dd829d1222ef821e974f64d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dad4be9ca51b048701e6e254582a06450c0ecbbc0dd829d1222ef821e974f64d->enter($__internal_dad4be9ca51b048701e6e254582a06450c0ecbbc0dd829d1222ef821e974f64d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f22de3f92233050f5f74cdcfab20d18934cf47313096e1220b7f1dcb6a767ee->leave($__internal_9f22de3f92233050f5f74cdcfab20d18934cf47313096e1220b7f1dcb6a767ee_prof);

        
        $__internal_dad4be9ca51b048701e6e254582a06450c0ecbbc0dd829d1222ef821e974f64d->leave($__internal_dad4be9ca51b048701e6e254582a06450c0ecbbc0dd829d1222ef821e974f64d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e3d2d2a3517996959582f1b03827e728bf1c722f57c46ae04a79536de61158c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3d2d2a3517996959582f1b03827e728bf1c722f57c46ae04a79536de61158c3->enter($__internal_e3d2d2a3517996959582f1b03827e728bf1c722f57c46ae04a79536de61158c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_dfa8b5a2c90f73c9f14a57075c9f79c29c0eea9ef398c284468f73d95adb8ab0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfa8b5a2c90f73c9f14a57075c9f79c29c0eea9ef398c284468f73d95adb8ab0->enter($__internal_dfa8b5a2c90f73c9f14a57075c9f79c29c0eea9ef398c284468f73d95adb8ab0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_dfa8b5a2c90f73c9f14a57075c9f79c29c0eea9ef398c284468f73d95adb8ab0->leave($__internal_dfa8b5a2c90f73c9f14a57075c9f79c29c0eea9ef398c284468f73d95adb8ab0_prof);

        
        $__internal_e3d2d2a3517996959582f1b03827e728bf1c722f57c46ae04a79536de61158c3->leave($__internal_e3d2d2a3517996959582f1b03827e728bf1c722f57c46ae04a79536de61158c3_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_f2da02f883b73c31abc203ead815fd0e93874c426945400d336eea8464d7bdb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2da02f883b73c31abc203ead815fd0e93874c426945400d336eea8464d7bdb0->enter($__internal_f2da02f883b73c31abc203ead815fd0e93874c426945400d336eea8464d7bdb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_aad7d8a673bbf0274bb9f89ba93239ad25ad7ba2c27d1da7e37d258b0df49a6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aad7d8a673bbf0274bb9f89ba93239ad25ad7ba2c27d1da7e37d258b0df49a6e->enter($__internal_aad7d8a673bbf0274bb9f89ba93239ad25ad7ba2c27d1da7e37d258b0df49a6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_aad7d8a673bbf0274bb9f89ba93239ad25ad7ba2c27d1da7e37d258b0df49a6e->leave($__internal_aad7d8a673bbf0274bb9f89ba93239ad25ad7ba2c27d1da7e37d258b0df49a6e_prof);

        
        $__internal_f2da02f883b73c31abc203ead815fd0e93874c426945400d336eea8464d7bdb0->leave($__internal_f2da02f883b73c31abc203ead815fd0e93874c426945400d336eea8464d7bdb0_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_fc535e7d1aae01461dba99ce17fa4b87b4c8a6e7c3657e793b4912e4c1a56bfb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc535e7d1aae01461dba99ce17fa4b87b4c8a6e7c3657e793b4912e4c1a56bfb->enter($__internal_fc535e7d1aae01461dba99ce17fa4b87b4c8a6e7c3657e793b4912e4c1a56bfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3adba2dfaa4e3b61114f3d490e9f9c2c76dbd05f32a833797338121907719d9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3adba2dfaa4e3b61114f3d490e9f9c2c76dbd05f32a833797338121907719d9f->enter($__internal_3adba2dfaa4e3b61114f3d490e9f9c2c76dbd05f32a833797338121907719d9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_3adba2dfaa4e3b61114f3d490e9f9c2c76dbd05f32a833797338121907719d9f->leave($__internal_3adba2dfaa4e3b61114f3d490e9f9c2c76dbd05f32a833797338121907719d9f_prof);

        
        $__internal_fc535e7d1aae01461dba99ce17fa4b87b4c8a6e7c3657e793b4912e4c1a56bfb->leave($__internal_fc535e7d1aae01461dba99ce17fa4b87b4c8a6e7c3657e793b4912e4c1a56bfb_prof);

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
