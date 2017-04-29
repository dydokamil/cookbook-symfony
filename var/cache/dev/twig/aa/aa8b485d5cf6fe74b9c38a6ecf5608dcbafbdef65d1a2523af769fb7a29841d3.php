<?php

/* ingredientstepjoin/new.html.twig */
class __TwigTemplate_91521bd548010bb93d92b275761ea576d268ae33b3213b2c7a98259d7ad96168 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ingredientstepjoin/new.html.twig", 1);
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
        $__internal_bd3c693eb7281be2782f225df54bfc78db6ec0ef075d6a47f951d7c56918d739 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd3c693eb7281be2782f225df54bfc78db6ec0ef075d6a47f951d7c56918d739->enter($__internal_bd3c693eb7281be2782f225df54bfc78db6ec0ef075d6a47f951d7c56918d739_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ingredientstepjoin/new.html.twig"));

        $__internal_6f9b720e167dd4f80e7ec7c6e254b8a842b168baf49a7b0a5c90eb04e8e8b4a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f9b720e167dd4f80e7ec7c6e254b8a842b168baf49a7b0a5c90eb04e8e8b4a5->enter($__internal_6f9b720e167dd4f80e7ec7c6e254b8a842b168baf49a7b0a5c90eb04e8e8b4a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ingredientstepjoin/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bd3c693eb7281be2782f225df54bfc78db6ec0ef075d6a47f951d7c56918d739->leave($__internal_bd3c693eb7281be2782f225df54bfc78db6ec0ef075d6a47f951d7c56918d739_prof);

        
        $__internal_6f9b720e167dd4f80e7ec7c6e254b8a842b168baf49a7b0a5c90eb04e8e8b4a5->leave($__internal_6f9b720e167dd4f80e7ec7c6e254b8a842b168baf49a7b0a5c90eb04e8e8b4a5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_55c6ef9fe78393711ab8cf08135f5fdf3469226c81d27bb71c144ee28ff4be96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55c6ef9fe78393711ab8cf08135f5fdf3469226c81d27bb71c144ee28ff4be96->enter($__internal_55c6ef9fe78393711ab8cf08135f5fdf3469226c81d27bb71c144ee28ff4be96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bff3bcb0330579c92eab4304ca5859313394dede3caf32a6a919b03461bbfed7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bff3bcb0330579c92eab4304ca5859313394dede3caf32a6a919b03461bbfed7->enter($__internal_bff3bcb0330579c92eab4304ca5859313394dede3caf32a6a919b03461bbfed7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Ingredientstepjoin creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Utwórz\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ingredientstepjoin_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_bff3bcb0330579c92eab4304ca5859313394dede3caf32a6a919b03461bbfed7->leave($__internal_bff3bcb0330579c92eab4304ca5859313394dede3caf32a6a919b03461bbfed7_prof);

        
        $__internal_55c6ef9fe78393711ab8cf08135f5fdf3469226c81d27bb71c144ee28ff4be96->leave($__internal_55c6ef9fe78393711ab8cf08135f5fdf3469226c81d27bb71c144ee28ff4be96_prof);

    }

    public function getTemplateName()
    {
        return "ingredientstepjoin/new.html.twig";
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
    <h1>Ingredientstepjoin creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Utwórz\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('ingredientstepjoin_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "ingredientstepjoin/new.html.twig", "/home/kamil/symfony_projects/cookbook-symfony/app/Resources/views/ingredientstepjoin/new.html.twig");
    }
}
