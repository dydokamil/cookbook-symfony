<?php

/* recipe/new.html.twig */
class __TwigTemplate_8163a08655c5ff23ca394f8621e4bfc2df5ba62176edf88eae39a030c18a5691 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "recipe/new.html.twig", 1);
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
        $__internal_fb557aa49846b1928ceeff098d25f0b20052fa43969fc7e9242287317eabc057 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb557aa49846b1928ceeff098d25f0b20052fa43969fc7e9242287317eabc057->enter($__internal_fb557aa49846b1928ceeff098d25f0b20052fa43969fc7e9242287317eabc057_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "recipe/new.html.twig"));

        $__internal_b830610f5a4a0b73d447de972fb2d95e0f35fd083e02e860d5e1df82080a249c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b830610f5a4a0b73d447de972fb2d95e0f35fd083e02e860d5e1df82080a249c->enter($__internal_b830610f5a4a0b73d447de972fb2d95e0f35fd083e02e860d5e1df82080a249c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "recipe/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb557aa49846b1928ceeff098d25f0b20052fa43969fc7e9242287317eabc057->leave($__internal_fb557aa49846b1928ceeff098d25f0b20052fa43969fc7e9242287317eabc057_prof);

        
        $__internal_b830610f5a4a0b73d447de972fb2d95e0f35fd083e02e860d5e1df82080a249c->leave($__internal_b830610f5a4a0b73d447de972fb2d95e0f35fd083e02e860d5e1df82080a249c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a6d626cfdee27a1a8eee2bd56dd1efd54ec3fafd1e6b70ffdcde085309df4b97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6d626cfdee27a1a8eee2bd56dd1efd54ec3fafd1e6b70ffdcde085309df4b97->enter($__internal_a6d626cfdee27a1a8eee2bd56dd1efd54ec3fafd1e6b70ffdcde085309df4b97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_613c8b088c9bc19aa77244fb98116dd5539c142b61d9f774aa1b8948f8872c19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_613c8b088c9bc19aa77244fb98116dd5539c142b61d9f774aa1b8948f8872c19->enter($__internal_613c8b088c9bc19aa77244fb98116dd5539c142b61d9f774aa1b8948f8872c19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Tworzenie przepisu</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recipe_index");
        echo "\">Powrót do listy</a>
        </li>
    </ul>
";
        
        $__internal_613c8b088c9bc19aa77244fb98116dd5539c142b61d9f774aa1b8948f8872c19->leave($__internal_613c8b088c9bc19aa77244fb98116dd5539c142b61d9f774aa1b8948f8872c19_prof);

        
        $__internal_a6d626cfdee27a1a8eee2bd56dd1efd54ec3fafd1e6b70ffdcde085309df4b97->leave($__internal_a6d626cfdee27a1a8eee2bd56dd1efd54ec3fafd1e6b70ffdcde085309df4b97_prof);

    }

    public function getTemplateName()
    {
        return "recipe/new.html.twig";
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
    <h1>Tworzenie przepisu</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Utwórz\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('recipe_index') }}\">Powrót do listy</a>
        </li>
    </ul>
{% endblock %}
", "recipe/new.html.twig", "/home/kamil/symfony_projects/cookbook-symfony/app/Resources/views/recipe/new.html.twig");
    }
}
