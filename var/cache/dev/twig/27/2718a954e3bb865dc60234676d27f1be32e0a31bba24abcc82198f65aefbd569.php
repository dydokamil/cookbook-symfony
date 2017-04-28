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
        $__internal_545690e4d7b26a8b53ac9509976dce9fdc64067622c71131ae11ae60b4a9d0ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_545690e4d7b26a8b53ac9509976dce9fdc64067622c71131ae11ae60b4a9d0ee->enter($__internal_545690e4d7b26a8b53ac9509976dce9fdc64067622c71131ae11ae60b4a9d0ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ingredient/show.html.twig"));

        $__internal_400b04c24563ee618d22a99da666e46e0124be029d95ff44752d12f366541d91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_400b04c24563ee618d22a99da666e46e0124be029d95ff44752d12f366541d91->enter($__internal_400b04c24563ee618d22a99da666e46e0124be029d95ff44752d12f366541d91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ingredient/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_545690e4d7b26a8b53ac9509976dce9fdc64067622c71131ae11ae60b4a9d0ee->leave($__internal_545690e4d7b26a8b53ac9509976dce9fdc64067622c71131ae11ae60b4a9d0ee_prof);

        
        $__internal_400b04c24563ee618d22a99da666e46e0124be029d95ff44752d12f366541d91->leave($__internal_400b04c24563ee618d22a99da666e46e0124be029d95ff44752d12f366541d91_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0e044949faad4317e5d7c89e2a5968f7a7e3213811e7cb6ab4d0f54670968dab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e044949faad4317e5d7c89e2a5968f7a7e3213811e7cb6ab4d0f54670968dab->enter($__internal_0e044949faad4317e5d7c89e2a5968f7a7e3213811e7cb6ab4d0f54670968dab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6072ad5ec30e112944d76029e5a9154c8cd8032cd1ddd68f10811a9b1643547e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6072ad5ec30e112944d76029e5a9154c8cd8032cd1ddd68f10811a9b1643547e->enter($__internal_6072ad5ec30e112944d76029e5a9154c8cd8032cd1ddd68f10811a9b1643547e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6072ad5ec30e112944d76029e5a9154c8cd8032cd1ddd68f10811a9b1643547e->leave($__internal_6072ad5ec30e112944d76029e5a9154c8cd8032cd1ddd68f10811a9b1643547e_prof);

        
        $__internal_0e044949faad4317e5d7c89e2a5968f7a7e3213811e7cb6ab4d0f54670968dab->leave($__internal_0e044949faad4317e5d7c89e2a5968f7a7e3213811e7cb6ab4d0f54670968dab_prof);

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
", "ingredient/show.html.twig", "/home/kamil/symfony_projects/cookbook-symfony/app/Resources/views/ingredient/show.html.twig");
    }
}
