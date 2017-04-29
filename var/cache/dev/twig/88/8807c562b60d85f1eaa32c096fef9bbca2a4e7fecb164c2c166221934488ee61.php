<?php

/* ingredient/index.html.twig */
class __TwigTemplate_e58592c8dde629d0704a0b462a12bebf3f1ac29b872ee1d08c0ccf1c35570aa8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ingredient/index.html.twig", 1);
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
        $__internal_d0285734135454627bdf4ce3739d73d856d02eaaf087c2ae0b42e6b8e20482e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0285734135454627bdf4ce3739d73d856d02eaaf087c2ae0b42e6b8e20482e8->enter($__internal_d0285734135454627bdf4ce3739d73d856d02eaaf087c2ae0b42e6b8e20482e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ingredient/index.html.twig"));

        $__internal_fc7b6cb78322fe67b991247952423d9b82246b0ca266fe00ae3fca27e60068b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc7b6cb78322fe67b991247952423d9b82246b0ca266fe00ae3fca27e60068b0->enter($__internal_fc7b6cb78322fe67b991247952423d9b82246b0ca266fe00ae3fca27e60068b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ingredient/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d0285734135454627bdf4ce3739d73d856d02eaaf087c2ae0b42e6b8e20482e8->leave($__internal_d0285734135454627bdf4ce3739d73d856d02eaaf087c2ae0b42e6b8e20482e8_prof);

        
        $__internal_fc7b6cb78322fe67b991247952423d9b82246b0ca266fe00ae3fca27e60068b0->leave($__internal_fc7b6cb78322fe67b991247952423d9b82246b0ca266fe00ae3fca27e60068b0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1b86f4a3e25d5f5300490d780a2db8a28664c591697f886cc68e57fcdbb89832 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b86f4a3e25d5f5300490d780a2db8a28664c591697f886cc68e57fcdbb89832->enter($__internal_1b86f4a3e25d5f5300490d780a2db8a28664c591697f886cc68e57fcdbb89832_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_aed6fbe0ec9055340213821c67184a841d517089e9b74ccf0bbdeb03cac4832d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aed6fbe0ec9055340213821c67184a841d517089e9b74ccf0bbdeb03cac4832d->enter($__internal_aed6fbe0ec9055340213821c67184a841d517089e9b74ccf0bbdeb03cac4832d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Ingredients list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Icon</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ingredients"] ?? $this->getContext($context, "ingredients")));
        foreach ($context['_seq'] as $context["_key"] => $context["ingredient"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ingredient_show", array("id" => $this->getAttribute($context["ingredient"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ingredient"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["ingredient"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["ingredient"], "icon", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ingredient_show", array("id" => $this->getAttribute($context["ingredient"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ingredient_edit", array("id" => $this->getAttribute($context["ingredient"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ingredient'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ingredient_new");
        echo "\">Create a new ingredient</a>
        </li>
    </ul>
";
        
        $__internal_aed6fbe0ec9055340213821c67184a841d517089e9b74ccf0bbdeb03cac4832d->leave($__internal_aed6fbe0ec9055340213821c67184a841d517089e9b74ccf0bbdeb03cac4832d_prof);

        
        $__internal_1b86f4a3e25d5f5300490d780a2db8a28664c591697f886cc68e57fcdbb89832->leave($__internal_1b86f4a3e25d5f5300490d780a2db8a28664c591697f886cc68e57fcdbb89832_prof);

    }

    public function getTemplateName()
    {
        return "ingredient/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 38,  105 => 33,  93 => 27,  87 => 24,  80 => 20,  76 => 19,  70 => 18,  67 => 17,  63 => 16,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Ingredients list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Icon</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for ingredient in ingredients %}
            <tr>
                <td><a href=\"{{ path('ingredient_show', { 'id': ingredient.id }) }}\">{{ ingredient.id }}</a></td>
                <td>{{ ingredient.name }}</td>
                <td>{{ ingredient.icon }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('ingredient_show', { 'id': ingredient.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('ingredient_edit', { 'id': ingredient.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('ingredient_new') }}\">Create a new ingredient</a>
        </li>
    </ul>
{% endblock %}
", "ingredient/index.html.twig", "/home/kamil/Dokumenty/studia/cookbook/app/Resources/views/ingredient/index.html.twig");
    }
}
