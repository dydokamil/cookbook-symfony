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
        $__internal_ce547cadd4b7450eddccce2813db64cafa59eaf817ac92f5a85aba23db784577 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce547cadd4b7450eddccce2813db64cafa59eaf817ac92f5a85aba23db784577->enter($__internal_ce547cadd4b7450eddccce2813db64cafa59eaf817ac92f5a85aba23db784577_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ingredient/show.html.twig"));

        $__internal_fbf24515aa523a89031d478563fb7701aa89c6da9a9c6454e6281a104704424a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbf24515aa523a89031d478563fb7701aa89c6da9a9c6454e6281a104704424a->enter($__internal_fbf24515aa523a89031d478563fb7701aa89c6da9a9c6454e6281a104704424a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ingredient/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce547cadd4b7450eddccce2813db64cafa59eaf817ac92f5a85aba23db784577->leave($__internal_ce547cadd4b7450eddccce2813db64cafa59eaf817ac92f5a85aba23db784577_prof);

        
        $__internal_fbf24515aa523a89031d478563fb7701aa89c6da9a9c6454e6281a104704424a->leave($__internal_fbf24515aa523a89031d478563fb7701aa89c6da9a9c6454e6281a104704424a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ae57d8370943ad9a5a70408f20aa9ea34491745051cd7762b1082481f18d86cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae57d8370943ad9a5a70408f20aa9ea34491745051cd7762b1082481f18d86cd->enter($__internal_ae57d8370943ad9a5a70408f20aa9ea34491745051cd7762b1082481f18d86cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6854d8c958236b323fad14bff649cc1b5bbbed51b897cd15d205b58f42e70e82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6854d8c958236b323fad14bff649cc1b5bbbed51b897cd15d205b58f42e70e82->enter($__internal_6854d8c958236b323fad14bff649cc1b5bbbed51b897cd15d205b58f42e70e82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ingredient_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ingredient_edit", array("id" => $this->getAttribute(($context["ingredient"] ?? $this->getContext($context, "ingredient")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 31
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 33
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_6854d8c958236b323fad14bff649cc1b5bbbed51b897cd15d205b58f42e70e82->leave($__internal_6854d8c958236b323fad14bff649cc1b5bbbed51b897cd15d205b58f42e70e82_prof);

        
        $__internal_ae57d8370943ad9a5a70408f20aa9ea34491745051cd7762b1082481f18d86cd->leave($__internal_ae57d8370943ad9a5a70408f20aa9ea34491745051cd7762b1082481f18d86cd_prof);

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
        return array (  98 => 33,  93 => 31,  87 => 28,  81 => 25,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
