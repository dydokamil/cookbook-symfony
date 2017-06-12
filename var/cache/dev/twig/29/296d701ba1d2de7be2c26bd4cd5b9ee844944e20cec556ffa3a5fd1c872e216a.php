<?php

/* recipestep/new.html.twig */
class __TwigTemplate_0198d6f8423dd9b50cd09c175a05b47fd8078f011d7c2bf19dbe486a87fc92f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "recipestep/new.html.twig", 1);
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
        $__internal_e609ce7a8323a93652bd0bac5175cee1fefdebdca22314a2c4b963df63d73f5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e609ce7a8323a93652bd0bac5175cee1fefdebdca22314a2c4b963df63d73f5f->enter($__internal_e609ce7a8323a93652bd0bac5175cee1fefdebdca22314a2c4b963df63d73f5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "recipestep/new.html.twig"));

        $__internal_c7dc9e75bb4e1f66258b870cfb057b5a28059229a250e7082a1acc685cecb875 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7dc9e75bb4e1f66258b870cfb057b5a28059229a250e7082a1acc685cecb875->enter($__internal_c7dc9e75bb4e1f66258b870cfb057b5a28059229a250e7082a1acc685cecb875_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "recipestep/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e609ce7a8323a93652bd0bac5175cee1fefdebdca22314a2c4b963df63d73f5f->leave($__internal_e609ce7a8323a93652bd0bac5175cee1fefdebdca22314a2c4b963df63d73f5f_prof);

        
        $__internal_c7dc9e75bb4e1f66258b870cfb057b5a28059229a250e7082a1acc685cecb875->leave($__internal_c7dc9e75bb4e1f66258b870cfb057b5a28059229a250e7082a1acc685cecb875_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_267e5d1bcc33dfe51e236a14be7603126417d0324613e899a1fdaeeca4b8ad08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_267e5d1bcc33dfe51e236a14be7603126417d0324613e899a1fdaeeca4b8ad08->enter($__internal_267e5d1bcc33dfe51e236a14be7603126417d0324613e899a1fdaeeca4b8ad08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_73317bb11f525241df70acd47497090ef26f0053f00d2136810cf09eb5423d01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73317bb11f525241df70acd47497090ef26f0053f00d2136810cf09eb5423d01->enter($__internal_73317bb11f525241df70acd47497090ef26f0053f00d2136810cf09eb5423d01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Tworzenie kroku przepisu</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input class='btn btn-success' type=\"submit\" value=\"Utwórz\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <ul class='list-unstyled'>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recipestep_index");
        echo "\">Powrót do listy</a>
        </li>
    </ul>
";
        
        $__internal_73317bb11f525241df70acd47497090ef26f0053f00d2136810cf09eb5423d01->leave($__internal_73317bb11f525241df70acd47497090ef26f0053f00d2136810cf09eb5423d01_prof);

        
        $__internal_267e5d1bcc33dfe51e236a14be7603126417d0324613e899a1fdaeeca4b8ad08->leave($__internal_267e5d1bcc33dfe51e236a14be7603126417d0324613e899a1fdaeeca4b8ad08_prof);

    }

    public function getTemplateName()
    {
        return "recipestep/new.html.twig";
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
    <h1>Tworzenie kroku przepisu</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input class='btn btn-success' type=\"submit\" value=\"Utwórz\" />
    {{ form_end(form) }}

    <ul class='list-unstyled'>
        <li>
            <a href=\"{{ path('recipestep_index') }}\">Powrót do listy</a>
        </li>
    </ul>
{% endblock %}
", "recipestep/new.html.twig", "/home/kamil/Dokumenty/studia/cookbook-symfony/app/Resources/views/recipestep/new.html.twig");
    }
}
