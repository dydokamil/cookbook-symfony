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
        $__internal_2812f15424678268dc743dbec92f084975d5ee52cc1217a1b2dde3930e3d7c91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2812f15424678268dc743dbec92f084975d5ee52cc1217a1b2dde3930e3d7c91->enter($__internal_2812f15424678268dc743dbec92f084975d5ee52cc1217a1b2dde3930e3d7c91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ingredient/show.html.twig"));

        $__internal_f24238f5877a0a2f2ddd457b5b683a5643e4c1741b2e24f86300d7cfe42a252b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f24238f5877a0a2f2ddd457b5b683a5643e4c1741b2e24f86300d7cfe42a252b->enter($__internal_f24238f5877a0a2f2ddd457b5b683a5643e4c1741b2e24f86300d7cfe42a252b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ingredient/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2812f15424678268dc743dbec92f084975d5ee52cc1217a1b2dde3930e3d7c91->leave($__internal_2812f15424678268dc743dbec92f084975d5ee52cc1217a1b2dde3930e3d7c91_prof);

        
        $__internal_f24238f5877a0a2f2ddd457b5b683a5643e4c1741b2e24f86300d7cfe42a252b->leave($__internal_f24238f5877a0a2f2ddd457b5b683a5643e4c1741b2e24f86300d7cfe42a252b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b9a9e03e272cc4df25b326d76ebcbda3b4b78e1fecbb78d96fdf14a7278ee12f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9a9e03e272cc4df25b326d76ebcbda3b4b78e1fecbb78d96fdf14a7278ee12f->enter($__internal_b9a9e03e272cc4df25b326d76ebcbda3b4b78e1fecbb78d96fdf14a7278ee12f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fae318c568ead8841cf7c64c806e9a1bed11f629900c40824f490169e7c6b3d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fae318c568ead8841cf7c64c806e9a1bed11f629900c40824f490169e7c6b3d9->enter($__internal_fae318c568ead8841cf7c64c806e9a1bed11f629900c40824f490169e7c6b3d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_fae318c568ead8841cf7c64c806e9a1bed11f629900c40824f490169e7c6b3d9->leave($__internal_fae318c568ead8841cf7c64c806e9a1bed11f629900c40824f490169e7c6b3d9_prof);

        
        $__internal_b9a9e03e272cc4df25b326d76ebcbda3b4b78e1fecbb78d96fdf14a7278ee12f->leave($__internal_b9a9e03e272cc4df25b326d76ebcbda3b4b78e1fecbb78d96fdf14a7278ee12f_prof);

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
", "ingredient/show.html.twig", "/home/kamil/Dokumenty/studia/cookbook-symfony/app/Resources/views/ingredient/show.html.twig");
    }
}
