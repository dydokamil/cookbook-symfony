<?php

/* ingredientstepjoin/show.html.twig */
class __TwigTemplate_c1ef38fa64f47e7b5e16bd0a00b7691975046906a5e3cee567de195953d55106 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ingredientstepjoin/show.html.twig", 1);
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
        $__internal_5062d9ad35653466b5bda6c9efe8e3af0fe25fd9ad825342d0a95f68da69c5fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5062d9ad35653466b5bda6c9efe8e3af0fe25fd9ad825342d0a95f68da69c5fc->enter($__internal_5062d9ad35653466b5bda6c9efe8e3af0fe25fd9ad825342d0a95f68da69c5fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ingredientstepjoin/show.html.twig"));

        $__internal_0048735dc1161b8f33dc2f3fc789ae67520f584e8e6bc5855d43569d1b3d4b87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0048735dc1161b8f33dc2f3fc789ae67520f584e8e6bc5855d43569d1b3d4b87->enter($__internal_0048735dc1161b8f33dc2f3fc789ae67520f584e8e6bc5855d43569d1b3d4b87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ingredientstepjoin/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5062d9ad35653466b5bda6c9efe8e3af0fe25fd9ad825342d0a95f68da69c5fc->leave($__internal_5062d9ad35653466b5bda6c9efe8e3af0fe25fd9ad825342d0a95f68da69c5fc_prof);

        
        $__internal_0048735dc1161b8f33dc2f3fc789ae67520f584e8e6bc5855d43569d1b3d4b87->leave($__internal_0048735dc1161b8f33dc2f3fc789ae67520f584e8e6bc5855d43569d1b3d4b87_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2a2a20e668ec477538ebb4208a401d85d42e33c8298b672dcdecbd66ad3db54e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a2a20e668ec477538ebb4208a401d85d42e33c8298b672dcdecbd66ad3db54e->enter($__internal_2a2a20e668ec477538ebb4208a401d85d42e33c8298b672dcdecbd66ad3db54e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a0e90c724e41f8aa369248ccc34d91d11d6e56a7628e2fb9787a6a54b290a3be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0e90c724e41f8aa369248ccc34d91d11d6e56a7628e2fb9787a6a54b290a3be->enter($__internal_a0e90c724e41f8aa369248ccc34d91d11d6e56a7628e2fb9787a6a54b290a3be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Ingredientstepjoin</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ingredientStepJoin"] ?? $this->getContext($context, "ingredientStepJoin")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Amount</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ingredientStepJoin"] ?? $this->getContext($context, "ingredientStepJoin")), "amount", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ingredientstepjoin_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ingredientstepjoin_edit", array("id" => $this->getAttribute(($context["ingredientStepJoin"] ?? $this->getContext($context, "ingredientStepJoin")), "id", array()))), "html", null, true);
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
        
        $__internal_a0e90c724e41f8aa369248ccc34d91d11d6e56a7628e2fb9787a6a54b290a3be->leave($__internal_a0e90c724e41f8aa369248ccc34d91d11d6e56a7628e2fb9787a6a54b290a3be_prof);

        
        $__internal_2a2a20e668ec477538ebb4208a401d85d42e33c8298b672dcdecbd66ad3db54e->leave($__internal_2a2a20e668ec477538ebb4208a401d85d42e33c8298b672dcdecbd66ad3db54e_prof);

    }

    public function getTemplateName()
    {
        return "ingredientstepjoin/show.html.twig";
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
    <h1>Ingredientstepjoin</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ ingredientStepJoin.id }}</td>
            </tr>
            <tr>
                <th>Amount</th>
                <td>{{ ingredientStepJoin.amount }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('ingredientstepjoin_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('ingredientstepjoin_edit', { 'id': ingredientStepJoin.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "ingredientstepjoin/show.html.twig", "/home/kamil/Dokumenty/studia/cookbook/app/Resources/views/ingredientstepjoin/show.html.twig");
    }
}
