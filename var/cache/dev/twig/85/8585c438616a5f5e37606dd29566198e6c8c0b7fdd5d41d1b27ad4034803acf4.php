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
        $__internal_7c39226119177333720603608436506080121132aced22c712e8d3b28f2f9635 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c39226119177333720603608436506080121132aced22c712e8d3b28f2f9635->enter($__internal_7c39226119177333720603608436506080121132aced22c712e8d3b28f2f9635_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_8417e0aafcde345ad822c50df62a77d9c9c3dbb9864acfc002a17cd01675313f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8417e0aafcde345ad822c50df62a77d9c9c3dbb9864acfc002a17cd01675313f->enter($__internal_8417e0aafcde345ad822c50df62a77d9c9c3dbb9864acfc002a17cd01675313f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c39226119177333720603608436506080121132aced22c712e8d3b28f2f9635->leave($__internal_7c39226119177333720603608436506080121132aced22c712e8d3b28f2f9635_prof);

        
        $__internal_8417e0aafcde345ad822c50df62a77d9c9c3dbb9864acfc002a17cd01675313f->leave($__internal_8417e0aafcde345ad822c50df62a77d9c9c3dbb9864acfc002a17cd01675313f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_de8d7be9c8b9fb8567dd0b76a030fdee039501c32df27944fc7b4ec985539a4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de8d7be9c8b9fb8567dd0b76a030fdee039501c32df27944fc7b4ec985539a4f->enter($__internal_de8d7be9c8b9fb8567dd0b76a030fdee039501c32df27944fc7b4ec985539a4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_67e30de57d022894d7a0236d74b5d85d8772916f485c795ccc17a7b11058f887 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67e30de57d022894d7a0236d74b5d85d8772916f485c795ccc17a7b11058f887->enter($__internal_67e30de57d022894d7a0236d74b5d85d8772916f485c795ccc17a7b11058f887_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_67e30de57d022894d7a0236d74b5d85d8772916f485c795ccc17a7b11058f887->leave($__internal_67e30de57d022894d7a0236d74b5d85d8772916f485c795ccc17a7b11058f887_prof);

        
        $__internal_de8d7be9c8b9fb8567dd0b76a030fdee039501c32df27944fc7b4ec985539a4f->leave($__internal_de8d7be9c8b9fb8567dd0b76a030fdee039501c32df27944fc7b4ec985539a4f_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_35c4df4b2623616c71ccb0407f0ffd49ea365fdc92b6a12953a6bb215632b0aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35c4df4b2623616c71ccb0407f0ffd49ea365fdc92b6a12953a6bb215632b0aa->enter($__internal_35c4df4b2623616c71ccb0407f0ffd49ea365fdc92b6a12953a6bb215632b0aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fc1b642dce5a9c427f446ca3fba66686d35e3cc14e7176db36bfcd421c562e89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc1b642dce5a9c427f446ca3fba66686d35e3cc14e7176db36bfcd421c562e89->enter($__internal_fc1b642dce5a9c427f446ca3fba66686d35e3cc14e7176db36bfcd421c562e89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_fc1b642dce5a9c427f446ca3fba66686d35e3cc14e7176db36bfcd421c562e89->leave($__internal_fc1b642dce5a9c427f446ca3fba66686d35e3cc14e7176db36bfcd421c562e89_prof);

        
        $__internal_35c4df4b2623616c71ccb0407f0ffd49ea365fdc92b6a12953a6bb215632b0aa->leave($__internal_35c4df4b2623616c71ccb0407f0ffd49ea365fdc92b6a12953a6bb215632b0aa_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_483610ba40ae7043b3fd0c5db29bb8081129738e8a67543877a9752f9322fa95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_483610ba40ae7043b3fd0c5db29bb8081129738e8a67543877a9752f9322fa95->enter($__internal_483610ba40ae7043b3fd0c5db29bb8081129738e8a67543877a9752f9322fa95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b7cdd4322d0fa3e1ab193ec77fddf3e1691e6d83b456d56860c9951c9312440c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7cdd4322d0fa3e1ab193ec77fddf3e1691e6d83b456d56860c9951c9312440c->enter($__internal_b7cdd4322d0fa3e1ab193ec77fddf3e1691e6d83b456d56860c9951c9312440c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_b7cdd4322d0fa3e1ab193ec77fddf3e1691e6d83b456d56860c9951c9312440c->leave($__internal_b7cdd4322d0fa3e1ab193ec77fddf3e1691e6d83b456d56860c9951c9312440c_prof);

        
        $__internal_483610ba40ae7043b3fd0c5db29bb8081129738e8a67543877a9752f9322fa95->leave($__internal_483610ba40ae7043b3fd0c5db29bb8081129738e8a67543877a9752f9322fa95_prof);

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
", "@Twig/Exception/exception_full.html.twig", "/home/kamil/Dokumenty/studia/cookbook/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
