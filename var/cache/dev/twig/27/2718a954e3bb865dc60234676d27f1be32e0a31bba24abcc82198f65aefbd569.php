<?php

/* ingredient/show.html.twig */
class __TwigTemplate_97693e959e24b8a62a236e8505c65c921ae72bef996b0d2e739b54f96c0c30b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ingredient/show.html.twig", 1);
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
        $__internal_b93928376c295eabdb245bedd4d453982f38652020c863b6efdf86117be88b1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b93928376c295eabdb245bedd4d453982f38652020c863b6efdf86117be88b1f->enter($__internal_b93928376c295eabdb245bedd4d453982f38652020c863b6efdf86117be88b1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ingredient/show.html.twig"));

        $__internal_fcfa12d246cc3097abdb5b1373ffe1d636f9bb0296f7beee5bb012ea612d4975 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcfa12d246cc3097abdb5b1373ffe1d636f9bb0296f7beee5bb012ea612d4975->enter($__internal_fcfa12d246cc3097abdb5b1373ffe1d636f9bb0296f7beee5bb012ea612d4975_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ingredient/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b93928376c295eabdb245bedd4d453982f38652020c863b6efdf86117be88b1f->leave($__internal_b93928376c295eabdb245bedd4d453982f38652020c863b6efdf86117be88b1f_prof);

        
        $__internal_fcfa12d246cc3097abdb5b1373ffe1d636f9bb0296f7beee5bb012ea612d4975->leave($__internal_fcfa12d246cc3097abdb5b1373ffe1d636f9bb0296f7beee5bb012ea612d4975_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6ad02e3b4cf8bc4529865d666c7f2b2f0832d9dd116cc4292d3275e715a0b360 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ad02e3b4cf8bc4529865d666c7f2b2f0832d9dd116cc4292d3275e715a0b360->enter($__internal_6ad02e3b4cf8bc4529865d666c7f2b2f0832d9dd116cc4292d3275e715a0b360_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b1b22b6e1acaa8126685473375f4d57fb3320c463e8fca0c6c64b58ff5508b96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1b22b6e1acaa8126685473375f4d57fb3320c463e8fca0c6c64b58ff5508b96->enter($__internal_b1b22b6e1acaa8126685473375f4d57fb3320c463e8fca0c6c64b58ff5508b96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Ingredient</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ingredient"] ?? $this->getContext($context, "ingredient")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ingredient"] ?? $this->getContext($context, "ingredient")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ingredient_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ingredient_edit", array("id" => $this->getAttribute(($context["ingredient"] ?? $this->getContext($context, "ingredient")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 29
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_b1b22b6e1acaa8126685473375f4d57fb3320c463e8fca0c6c64b58ff5508b96->leave($__internal_b1b22b6e1acaa8126685473375f4d57fb3320c463e8fca0c6c64b58ff5508b96_prof);

        
        $__internal_6ad02e3b4cf8bc4529865d666c7f2b2f0832d9dd116cc4292d3275e715a0b360->leave($__internal_6ad02e3b4cf8bc4529865d666c7f2b2f0832d9dd116cc4292d3275e715a0b360_prof);

    }

    public function getTemplateName()
    {
        return "ingredient/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 29,  86 => 27,  80 => 24,  74 => 21,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Ingredient</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ ingredient.id }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ ingredient.name }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('ingredient_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('ingredient_edit', { 'id': ingredient.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "ingredient/show.html.twig", "/home/kamil/symfony_projects/cookbook-symfony/app/Resources/views/ingredient/show.html.twig");
    }
}
