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
        $__internal_03087e1c4dceb4dffd4dc02c80b4c0d62b1d63e7e1878f966902fa6315ebee06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03087e1c4dceb4dffd4dc02c80b4c0d62b1d63e7e1878f966902fa6315ebee06->enter($__internal_03087e1c4dceb4dffd4dc02c80b4c0d62b1d63e7e1878f966902fa6315ebee06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ingredient/show.html.twig"));

        $__internal_651933cc539928b1de3c2d8a0eeb08c61a941084af558b2c7bd42961750e0951 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_651933cc539928b1de3c2d8a0eeb08c61a941084af558b2c7bd42961750e0951->enter($__internal_651933cc539928b1de3c2d8a0eeb08c61a941084af558b2c7bd42961750e0951_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ingredient/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_03087e1c4dceb4dffd4dc02c80b4c0d62b1d63e7e1878f966902fa6315ebee06->leave($__internal_03087e1c4dceb4dffd4dc02c80b4c0d62b1d63e7e1878f966902fa6315ebee06_prof);

        
        $__internal_651933cc539928b1de3c2d8a0eeb08c61a941084af558b2c7bd42961750e0951->leave($__internal_651933cc539928b1de3c2d8a0eeb08c61a941084af558b2c7bd42961750e0951_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4d4725239bccf4c3905f4b4805523a123f2b538f015128358c9a53af00dfcb0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d4725239bccf4c3905f4b4805523a123f2b538f015128358c9a53af00dfcb0d->enter($__internal_4d4725239bccf4c3905f4b4805523a123f2b538f015128358c9a53af00dfcb0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ef81e37c0022af8731fd754bee0b88c66d07d8cceb2fe82e1fe1ae87d89d5b33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef81e37c0022af8731fd754bee0b88c66d07d8cceb2fe82e1fe1ae87d89d5b33->enter($__internal_ef81e37c0022af8731fd754bee0b88c66d07d8cceb2fe82e1fe1ae87d89d5b33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            <tr>
                <th>Icon</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ingredient"] ?? $this->getContext($context, "ingredient")), "icon", array()), "html", null, true);
        echo "</td>
                <img height=32 width=32 src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/img/"), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ingredient"] ?? $this->getContext($context, "ingredient")), "icon", array()), "html", null, true);
        echo "\" class=\"gallery-thumb\">
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ingredient_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ingredient_edit", array("id" => $this->getAttribute(($context["ingredient"] ?? $this->getContext($context, "ingredient")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 32
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 34
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_ef81e37c0022af8731fd754bee0b88c66d07d8cceb2fe82e1fe1ae87d89d5b33->leave($__internal_ef81e37c0022af8731fd754bee0b88c66d07d8cceb2fe82e1fe1ae87d89d5b33_prof);

        
        $__internal_4d4725239bccf4c3905f4b4805523a123f2b538f015128358c9a53af00dfcb0d->leave($__internal_4d4725239bccf4c3905f4b4805523a123f2b538f015128358c9a53af00dfcb0d_prof);

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
        return array (  103 => 34,  98 => 32,  92 => 29,  86 => 26,  75 => 19,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
            <tr>
                <th>Icon</th>
                <td>{{ ingredient.icon }}</td>
                <img height=32 width=32 src=\"{{ asset('uploads/img/') }}{{ingredient.icon}}\" class=\"gallery-thumb\">
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
", "ingredient/show.html.twig", "/home/kamil/Dokumenty/studia/cookbook/app/Resources/views/ingredient/show.html.twig");
    }
}
