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
        $__internal_5e9a3d9c9428d4f8d10f8882af46a550088434b42bfcb866d9e195a7798c5bdc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e9a3d9c9428d4f8d10f8882af46a550088434b42bfcb866d9e195a7798c5bdc->enter($__internal_5e9a3d9c9428d4f8d10f8882af46a550088434b42bfcb866d9e195a7798c5bdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_b19de9d822782c2b40f17fc0579a3d4d3a06d92255ff1a4b3426c4fb4688ac0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b19de9d822782c2b40f17fc0579a3d4d3a06d92255ff1a4b3426c4fb4688ac0f->enter($__internal_b19de9d822782c2b40f17fc0579a3d4d3a06d92255ff1a4b3426c4fb4688ac0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e9a3d9c9428d4f8d10f8882af46a550088434b42bfcb866d9e195a7798c5bdc->leave($__internal_5e9a3d9c9428d4f8d10f8882af46a550088434b42bfcb866d9e195a7798c5bdc_prof);

        
        $__internal_b19de9d822782c2b40f17fc0579a3d4d3a06d92255ff1a4b3426c4fb4688ac0f->leave($__internal_b19de9d822782c2b40f17fc0579a3d4d3a06d92255ff1a4b3426c4fb4688ac0f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0e6a9bc1a292e469282c9dea53d5762f90adef39a9d5c65090116e395edd7e83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e6a9bc1a292e469282c9dea53d5762f90adef39a9d5c65090116e395edd7e83->enter($__internal_0e6a9bc1a292e469282c9dea53d5762f90adef39a9d5c65090116e395edd7e83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_243bd16e490d7df413b5f76ed78bd25b8bda4de82008cfbb6e824764963c8d42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_243bd16e490d7df413b5f76ed78bd25b8bda4de82008cfbb6e824764963c8d42->enter($__internal_243bd16e490d7df413b5f76ed78bd25b8bda4de82008cfbb6e824764963c8d42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_243bd16e490d7df413b5f76ed78bd25b8bda4de82008cfbb6e824764963c8d42->leave($__internal_243bd16e490d7df413b5f76ed78bd25b8bda4de82008cfbb6e824764963c8d42_prof);

        
        $__internal_0e6a9bc1a292e469282c9dea53d5762f90adef39a9d5c65090116e395edd7e83->leave($__internal_0e6a9bc1a292e469282c9dea53d5762f90adef39a9d5c65090116e395edd7e83_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_011d25d2c580f07125f1083f25f3c1d960ec202bf742d5397e4cdb6d4bb95747 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_011d25d2c580f07125f1083f25f3c1d960ec202bf742d5397e4cdb6d4bb95747->enter($__internal_011d25d2c580f07125f1083f25f3c1d960ec202bf742d5397e4cdb6d4bb95747_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f6497d104f3d7f0659868c57a68950caee3b5816f3b5548cb995e439609de4d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6497d104f3d7f0659868c57a68950caee3b5816f3b5548cb995e439609de4d9->enter($__internal_f6497d104f3d7f0659868c57a68950caee3b5816f3b5548cb995e439609de4d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f6497d104f3d7f0659868c57a68950caee3b5816f3b5548cb995e439609de4d9->leave($__internal_f6497d104f3d7f0659868c57a68950caee3b5816f3b5548cb995e439609de4d9_prof);

        
        $__internal_011d25d2c580f07125f1083f25f3c1d960ec202bf742d5397e4cdb6d4bb95747->leave($__internal_011d25d2c580f07125f1083f25f3c1d960ec202bf742d5397e4cdb6d4bb95747_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_c9186948dbd71c9bc9f26a84afca4a04d850c063e485b4a05e5caaedb54c9342 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9186948dbd71c9bc9f26a84afca4a04d850c063e485b4a05e5caaedb54c9342->enter($__internal_c9186948dbd71c9bc9f26a84afca4a04d850c063e485b4a05e5caaedb54c9342_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_eea0ae9f898eb403d84ec427a2ae21b936723cbeafb9b56a3533080b5587ef3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eea0ae9f898eb403d84ec427a2ae21b936723cbeafb9b56a3533080b5587ef3f->enter($__internal_eea0ae9f898eb403d84ec427a2ae21b936723cbeafb9b56a3533080b5587ef3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_eea0ae9f898eb403d84ec427a2ae21b936723cbeafb9b56a3533080b5587ef3f->leave($__internal_eea0ae9f898eb403d84ec427a2ae21b936723cbeafb9b56a3533080b5587ef3f_prof);

        
        $__internal_c9186948dbd71c9bc9f26a84afca4a04d850c063e485b4a05e5caaedb54c9342->leave($__internal_c9186948dbd71c9bc9f26a84afca4a04d850c063e485b4a05e5caaedb54c9342_prof);

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
