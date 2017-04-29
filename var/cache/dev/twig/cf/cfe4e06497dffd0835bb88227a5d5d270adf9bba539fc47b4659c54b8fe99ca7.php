<?php

/* ingredientstepjoin/edit.html.twig */
class __TwigTemplate_f914f121b3a6d1d321daf08f172e3266cac4b3fcec116eea2ddd301b60c301b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ingredientstepjoin/edit.html.twig", 1);
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
        $__internal_77c74de1fd3f7d70b1d6d865e1632f8147a0977fa8abe1186b8403d8728bfb5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77c74de1fd3f7d70b1d6d865e1632f8147a0977fa8abe1186b8403d8728bfb5f->enter($__internal_77c74de1fd3f7d70b1d6d865e1632f8147a0977fa8abe1186b8403d8728bfb5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ingredientstepjoin/edit.html.twig"));

        $__internal_6400df1622f004496cb2e4f08939a800cdac213e033aba68d67492bbc1f1857d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6400df1622f004496cb2e4f08939a800cdac213e033aba68d67492bbc1f1857d->enter($__internal_6400df1622f004496cb2e4f08939a800cdac213e033aba68d67492bbc1f1857d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ingredientstepjoin/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_77c74de1fd3f7d70b1d6d865e1632f8147a0977fa8abe1186b8403d8728bfb5f->leave($__internal_77c74de1fd3f7d70b1d6d865e1632f8147a0977fa8abe1186b8403d8728bfb5f_prof);

        
        $__internal_6400df1622f004496cb2e4f08939a800cdac213e033aba68d67492bbc1f1857d->leave($__internal_6400df1622f004496cb2e4f08939a800cdac213e033aba68d67492bbc1f1857d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6bf2cb6f4d6118e9baf19385846050827eb6ef6f7ed3e4c5d0dc5f9fcc662f24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6bf2cb6f4d6118e9baf19385846050827eb6ef6f7ed3e4c5d0dc5f9fcc662f24->enter($__internal_6bf2cb6f4d6118e9baf19385846050827eb6ef6f7ed3e4c5d0dc5f9fcc662f24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ff2f3e6be2afa55c0666c2a81cbfbe8e6dfa5417eb68155f1ea4148704029f7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff2f3e6be2afa55c0666c2a81cbfbe8e6dfa5417eb68155f1ea4148704029f7f->enter($__internal_ff2f3e6be2afa55c0666c2a81cbfbe8e6dfa5417eb68155f1ea4148704029f7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Ingredientstepjoin edit</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ingredientstepjoin_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_ff2f3e6be2afa55c0666c2a81cbfbe8e6dfa5417eb68155f1ea4148704029f7f->leave($__internal_ff2f3e6be2afa55c0666c2a81cbfbe8e6dfa5417eb68155f1ea4148704029f7f_prof);

        
        $__internal_6bf2cb6f4d6118e9baf19385846050827eb6ef6f7ed3e4c5d0dc5f9fcc662f24->leave($__internal_6bf2cb6f4d6118e9baf19385846050827eb6ef6f7ed3e4c5d0dc5f9fcc662f24_prof);

    }

    public function getTemplateName()
    {
        return "ingredientstepjoin/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 18,  75 => 16,  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Ingredientstepjoin edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('ingredientstepjoin_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "ingredientstepjoin/edit.html.twig", "/home/kamil/symfony_projects/cookbook-symfony/app/Resources/views/ingredientstepjoin/edit.html.twig");
    }
}
