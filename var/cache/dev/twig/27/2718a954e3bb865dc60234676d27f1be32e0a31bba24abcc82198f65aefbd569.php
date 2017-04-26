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
        $__internal_dbe7c7253146c26f544a71a4dcbbddd66ad55887b4ca0b03a64ac0e78574095d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbe7c7253146c26f544a71a4dcbbddd66ad55887b4ca0b03a64ac0e78574095d->enter($__internal_dbe7c7253146c26f544a71a4dcbbddd66ad55887b4ca0b03a64ac0e78574095d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ingredient/show.html.twig"));

        $__internal_53c3eeccb1f6740781fdd94e194e083d6ebc2fe967c6177bcdcccaffc853b11e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53c3eeccb1f6740781fdd94e194e083d6ebc2fe967c6177bcdcccaffc853b11e->enter($__internal_53c3eeccb1f6740781fdd94e194e083d6ebc2fe967c6177bcdcccaffc853b11e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ingredient/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dbe7c7253146c26f544a71a4dcbbddd66ad55887b4ca0b03a64ac0e78574095d->leave($__internal_dbe7c7253146c26f544a71a4dcbbddd66ad55887b4ca0b03a64ac0e78574095d_prof);

        
        $__internal_53c3eeccb1f6740781fdd94e194e083d6ebc2fe967c6177bcdcccaffc853b11e->leave($__internal_53c3eeccb1f6740781fdd94e194e083d6ebc2fe967c6177bcdcccaffc853b11e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_52dacee6326664a96cd7be49c415a6487e5c6689d3b25ee7067346dc21912b90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52dacee6326664a96cd7be49c415a6487e5c6689d3b25ee7067346dc21912b90->enter($__internal_52dacee6326664a96cd7be49c415a6487e5c6689d3b25ee7067346dc21912b90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8a9b9ca3cf532c45566e95e29ae74676c2d78d845035bcf68905b159df041ee6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a9b9ca3cf532c45566e95e29ae74676c2d78d845035bcf68905b159df041ee6->enter($__internal_8a9b9ca3cf532c45566e95e29ae74676c2d78d845035bcf68905b159df041ee6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Składnik</h1>

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
                <th>Nazwa</th>
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
        echo "\">Powrót do listy</a>
        </li>
        <li>
            <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ingredient_edit", array("id" => $this->getAttribute(($context["ingredient"] ?? $this->getContext($context, "ingredient")), "id", array()))), "html", null, true);
        echo "\">Edytuj</a>
        </li>
        <li>
            ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Usuń\">
            ";
        // line 29
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_8a9b9ca3cf532c45566e95e29ae74676c2d78d845035bcf68905b159df041ee6->leave($__internal_8a9b9ca3cf532c45566e95e29ae74676c2d78d845035bcf68905b159df041ee6_prof);

        
        $__internal_52dacee6326664a96cd7be49c415a6487e5c6689d3b25ee7067346dc21912b90->leave($__internal_52dacee6326664a96cd7be49c415a6487e5c6689d3b25ee7067346dc21912b90_prof);

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
    <h1>Składnik</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ ingredient.id }}</td>
            </tr>
            <tr>
                <th>Nazwa</th>
                <td>{{ ingredient.name }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('ingredient_index') }}\">Powrót do listy</a>
        </li>
        <li>
            <a href=\"{{ path('ingredient_edit', { 'id': ingredient.id }) }}\">Edytuj</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Usuń\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "ingredient/show.html.twig", "/home/kamil/Dokumenty/studia/cookbook/app/Resources/views/ingredient/show.html.twig");
    }
}
