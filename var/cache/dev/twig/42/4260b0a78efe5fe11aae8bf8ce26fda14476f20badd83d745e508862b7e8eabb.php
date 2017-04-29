<?php

/* ingredienttype/show.html.twig */
class __TwigTemplate_e56cddb28a76ffc7b36c7abf23cd9584d7d857c09a00413bbc10aaef4a7d08a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ingredienttype/show.html.twig", 1);
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
        $__internal_d44b8dacc5d0feb8e4166382cca8f30f314bc99d421139edae735c3a7c719513 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d44b8dacc5d0feb8e4166382cca8f30f314bc99d421139edae735c3a7c719513->enter($__internal_d44b8dacc5d0feb8e4166382cca8f30f314bc99d421139edae735c3a7c719513_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ingredienttype/show.html.twig"));

        $__internal_faa3f992cd5b6321e0a8762d446cc8c1043aa2a78d385fee604831c0d22cfb81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_faa3f992cd5b6321e0a8762d446cc8c1043aa2a78d385fee604831c0d22cfb81->enter($__internal_faa3f992cd5b6321e0a8762d446cc8c1043aa2a78d385fee604831c0d22cfb81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ingredienttype/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d44b8dacc5d0feb8e4166382cca8f30f314bc99d421139edae735c3a7c719513->leave($__internal_d44b8dacc5d0feb8e4166382cca8f30f314bc99d421139edae735c3a7c719513_prof);

        
        $__internal_faa3f992cd5b6321e0a8762d446cc8c1043aa2a78d385fee604831c0d22cfb81->leave($__internal_faa3f992cd5b6321e0a8762d446cc8c1043aa2a78d385fee604831c0d22cfb81_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0fd0a599a51350d21f7fd24a9c8693f09cfe22ec98001663413478175b691d5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fd0a599a51350d21f7fd24a9c8693f09cfe22ec98001663413478175b691d5a->enter($__internal_0fd0a599a51350d21f7fd24a9c8693f09cfe22ec98001663413478175b691d5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0c1d73f644e6671ea202799df488a78407830bcb74f3e910cafb789c69eb2c1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c1d73f644e6671ea202799df488a78407830bcb74f3e910cafb789c69eb2c1a->enter($__internal_0c1d73f644e6671ea202799df488a78407830bcb74f3e910cafb789c69eb2c1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Ingredienttype</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ingredientType"] ?? $this->getContext($context, "ingredientType")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Type</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ingredientType"] ?? $this->getContext($context, "ingredientType")), "type", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ingredienttype_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ingredienttype_edit", array("id" => $this->getAttribute(($context["ingredientType"] ?? $this->getContext($context, "ingredientType")), "id", array()))), "html", null, true);
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
        
        $__internal_0c1d73f644e6671ea202799df488a78407830bcb74f3e910cafb789c69eb2c1a->leave($__internal_0c1d73f644e6671ea202799df488a78407830bcb74f3e910cafb789c69eb2c1a_prof);

        
        $__internal_0fd0a599a51350d21f7fd24a9c8693f09cfe22ec98001663413478175b691d5a->leave($__internal_0fd0a599a51350d21f7fd24a9c8693f09cfe22ec98001663413478175b691d5a_prof);

    }

    public function getTemplateName()
    {
        return "ingredienttype/show.html.twig";
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
    <h1>Ingredienttype</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ ingredientType.id }}</td>
            </tr>
            <tr>
                <th>Type</th>
                <td>{{ ingredientType.type }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('ingredienttype_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('ingredienttype_edit', { 'id': ingredientType.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "ingredienttype/show.html.twig", "/home/kamil/Dokumenty/studia/cookbook/app/Resources/views/ingredienttype/show.html.twig");
    }
}
