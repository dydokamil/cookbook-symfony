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
        $__internal_12feca444bce51b2ce2f6d7fc959322d6a23db157c07cbcfcd91557f13b600ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12feca444bce51b2ce2f6d7fc959322d6a23db157c07cbcfcd91557f13b600ec->enter($__internal_12feca444bce51b2ce2f6d7fc959322d6a23db157c07cbcfcd91557f13b600ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_b3e1de12fe6a8873c82fe1a2546e248dc51acd58cf8c34914830750a7d8778b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3e1de12fe6a8873c82fe1a2546e248dc51acd58cf8c34914830750a7d8778b0->enter($__internal_b3e1de12fe6a8873c82fe1a2546e248dc51acd58cf8c34914830750a7d8778b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_12feca444bce51b2ce2f6d7fc959322d6a23db157c07cbcfcd91557f13b600ec->leave($__internal_12feca444bce51b2ce2f6d7fc959322d6a23db157c07cbcfcd91557f13b600ec_prof);

        
        $__internal_b3e1de12fe6a8873c82fe1a2546e248dc51acd58cf8c34914830750a7d8778b0->leave($__internal_b3e1de12fe6a8873c82fe1a2546e248dc51acd58cf8c34914830750a7d8778b0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9ec5e71c237f457e2079bcab54ef662a7fc6afafe1f45bd7d82f83629f8059b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ec5e71c237f457e2079bcab54ef662a7fc6afafe1f45bd7d82f83629f8059b7->enter($__internal_9ec5e71c237f457e2079bcab54ef662a7fc6afafe1f45bd7d82f83629f8059b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_fe1087c50835ae36c323e4652f018965eaa9b05d5b98fa90273d677bea002d8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe1087c50835ae36c323e4652f018965eaa9b05d5b98fa90273d677bea002d8d->enter($__internal_fe1087c50835ae36c323e4652f018965eaa9b05d5b98fa90273d677bea002d8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_fe1087c50835ae36c323e4652f018965eaa9b05d5b98fa90273d677bea002d8d->leave($__internal_fe1087c50835ae36c323e4652f018965eaa9b05d5b98fa90273d677bea002d8d_prof);

        
        $__internal_9ec5e71c237f457e2079bcab54ef662a7fc6afafe1f45bd7d82f83629f8059b7->leave($__internal_9ec5e71c237f457e2079bcab54ef662a7fc6afafe1f45bd7d82f83629f8059b7_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_cadc5dd58abae207e3ae295f5858d3fe71adab9610c50f521a5bbd5c127bec78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cadc5dd58abae207e3ae295f5858d3fe71adab9610c50f521a5bbd5c127bec78->enter($__internal_cadc5dd58abae207e3ae295f5858d3fe71adab9610c50f521a5bbd5c127bec78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_17088035f344e894bfb469e0b23783606f2214e982b5bce6e26ad3b8bae977fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17088035f344e894bfb469e0b23783606f2214e982b5bce6e26ad3b8bae977fd->enter($__internal_17088035f344e894bfb469e0b23783606f2214e982b5bce6e26ad3b8bae977fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_17088035f344e894bfb469e0b23783606f2214e982b5bce6e26ad3b8bae977fd->leave($__internal_17088035f344e894bfb469e0b23783606f2214e982b5bce6e26ad3b8bae977fd_prof);

        
        $__internal_cadc5dd58abae207e3ae295f5858d3fe71adab9610c50f521a5bbd5c127bec78->leave($__internal_cadc5dd58abae207e3ae295f5858d3fe71adab9610c50f521a5bbd5c127bec78_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_a8f2b76807abf42a4bf2c75ad1f9357438baf6a148d63cf35e3d54aff920e543 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8f2b76807abf42a4bf2c75ad1f9357438baf6a148d63cf35e3d54aff920e543->enter($__internal_a8f2b76807abf42a4bf2c75ad1f9357438baf6a148d63cf35e3d54aff920e543_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_27a56a16f0d9d0f1d9df93d42be95e3d6fdca15630f3642064bcfc5bdd58d062 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27a56a16f0d9d0f1d9df93d42be95e3d6fdca15630f3642064bcfc5bdd58d062->enter($__internal_27a56a16f0d9d0f1d9df93d42be95e3d6fdca15630f3642064bcfc5bdd58d062_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_27a56a16f0d9d0f1d9df93d42be95e3d6fdca15630f3642064bcfc5bdd58d062->leave($__internal_27a56a16f0d9d0f1d9df93d42be95e3d6fdca15630f3642064bcfc5bdd58d062_prof);

        
        $__internal_a8f2b76807abf42a4bf2c75ad1f9357438baf6a148d63cf35e3d54aff920e543->leave($__internal_a8f2b76807abf42a4bf2c75ad1f9357438baf6a148d63cf35e3d54aff920e543_prof);

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
", "@Twig/Exception/exception_full.html.twig", "/home/kamil/Dokumenty/studia/cookbook-symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
