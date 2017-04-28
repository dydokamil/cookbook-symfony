<?php

/* ingredient/new.html.twig */
class __TwigTemplate_0a648eafecf7443c452048503ff10b2ff83b741ab6d243e2de99c53c2f7dec44 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ingredient/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6fc8fc82e23ab99c48e6ed2f31cb9ec62faac8ab5cbde5c85960fadf5404eb55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fc8fc82e23ab99c48e6ed2f31cb9ec62faac8ab5cbde5c85960fadf5404eb55->enter($__internal_6fc8fc82e23ab99c48e6ed2f31cb9ec62faac8ab5cbde5c85960fadf5404eb55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ingredient/new.html.twig"));

        $__internal_8a6cfe5e7ce631ff14e9e92bd46c7afae1838812e4b1a9edc4779948c4674a98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a6cfe5e7ce631ff14e9e92bd46c7afae1838812e4b1a9edc4779948c4674a98->enter($__internal_8a6cfe5e7ce631ff14e9e92bd46c7afae1838812e4b1a9edc4779948c4674a98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ingredient/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6fc8fc82e23ab99c48e6ed2f31cb9ec62faac8ab5cbde5c85960fadf5404eb55->leave($__internal_6fc8fc82e23ab99c48e6ed2f31cb9ec62faac8ab5cbde5c85960fadf5404eb55_prof);

        
        $__internal_8a6cfe5e7ce631ff14e9e92bd46c7afae1838812e4b1a9edc4779948c4674a98->leave($__internal_8a6cfe5e7ce631ff14e9e92bd46c7afae1838812e4b1a9edc4779948c4674a98_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_238cd4d8f37b83a29ccecea35608991e1dc7391d91f71c7fbdcb1f4816fb13c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_238cd4d8f37b83a29ccecea35608991e1dc7391d91f71c7fbdcb1f4816fb13c0->enter($__internal_238cd4d8f37b83a29ccecea35608991e1dc7391d91f71c7fbdcb1f4816fb13c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_051222b4e1823280e5527d878e5f56794e79b647845fd8a3ca2e17190ae7873d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_051222b4e1823280e5527d878e5f56794e79b647845fd8a3ca2e17190ae7873d->enter($__internal_051222b4e1823280e5527d878e5f56794e79b647845fd8a3ca2e17190ae7873d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Ingredient creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ingredient_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_051222b4e1823280e5527d878e5f56794e79b647845fd8a3ca2e17190ae7873d->leave($__internal_051222b4e1823280e5527d878e5f56794e79b647845fd8a3ca2e17190ae7873d_prof);

        
        $__internal_238cd4d8f37b83a29ccecea35608991e1dc7391d91f71c7fbdcb1f4816fb13c0->leave($__internal_238cd4d8f37b83a29ccecea35608991e1dc7391d91f71c7fbdcb1f4816fb13c0_prof);

    }

    public function getTemplateName()
    {
        return "ingredient/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Ingredient creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('ingredient_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "ingredient/new.html.twig", "/home/kamil/symfony_projects/cookbook-symfony/app/Resources/views/ingredient/new.html.twig");
    }
}
