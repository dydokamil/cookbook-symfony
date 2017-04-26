<?php

/* recipe/index.html.twig */
class __TwigTemplate_417633081ad0eced40fce39043ff16a85c45604d6c016d5b5bb276676df497d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "recipe/index.html.twig", 1);
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
        $__internal_1ea25e33adc2e9f8b201e1c5cccc2166acc727f99db33dac56d61cbe0959af01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ea25e33adc2e9f8b201e1c5cccc2166acc727f99db33dac56d61cbe0959af01->enter($__internal_1ea25e33adc2e9f8b201e1c5cccc2166acc727f99db33dac56d61cbe0959af01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "recipe/index.html.twig"));

        $__internal_eff4c5d4abf65dc395662c20fcfab208e05293a2964b6c48d29e5c422e8b0ae1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eff4c5d4abf65dc395662c20fcfab208e05293a2964b6c48d29e5c422e8b0ae1->enter($__internal_eff4c5d4abf65dc395662c20fcfab208e05293a2964b6c48d29e5c422e8b0ae1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "recipe/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ea25e33adc2e9f8b201e1c5cccc2166acc727f99db33dac56d61cbe0959af01->leave($__internal_1ea25e33adc2e9f8b201e1c5cccc2166acc727f99db33dac56d61cbe0959af01_prof);

        
        $__internal_eff4c5d4abf65dc395662c20fcfab208e05293a2964b6c48d29e5c422e8b0ae1->leave($__internal_eff4c5d4abf65dc395662c20fcfab208e05293a2964b6c48d29e5c422e8b0ae1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d07528498dd67b2b18889fa9528d5a67c77c57f5e1142ef2f6e0ea00084d2fcf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d07528498dd67b2b18889fa9528d5a67c77c57f5e1142ef2f6e0ea00084d2fcf->enter($__internal_d07528498dd67b2b18889fa9528d5a67c77c57f5e1142ef2f6e0ea00084d2fcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c8b2ac2354f91b10e943173c8850978c89c0340e1c6e76b1e926be2e6e6eddbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8b2ac2354f91b10e943173c8850978c89c0340e1c6e76b1e926be2e6e6eddbe->enter($__internal_c8b2ac2354f91b10e943173c8850978c89c0340e1c6e76b1e926be2e6e6eddbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Recipes list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["recipes"] ?? $this->getContext($context, "recipes")));
        foreach ($context['_seq'] as $context["_key"] => $context["recipe"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recipe_show", array("id" => $this->getAttribute($context["recipe"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["recipe"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["recipe"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["recipe"], "description", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recipe_show", array("id" => $this->getAttribute($context["recipe"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recipe_edit", array("id" => $this->getAttribute($context["recipe"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recipe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recipe_new");
        echo "\">Create a new recipe</a>
        </li>
    </ul>
";
        
        $__internal_c8b2ac2354f91b10e943173c8850978c89c0340e1c6e76b1e926be2e6e6eddbe->leave($__internal_c8b2ac2354f91b10e943173c8850978c89c0340e1c6e76b1e926be2e6e6eddbe_prof);

        
        $__internal_d07528498dd67b2b18889fa9528d5a67c77c57f5e1142ef2f6e0ea00084d2fcf->leave($__internal_d07528498dd67b2b18889fa9528d5a67c77c57f5e1142ef2f6e0ea00084d2fcf_prof);

    }

    public function getTemplateName()
    {
        return "recipe/index.html.twig";
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
    <h1>Recipes list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for recipe in recipes %}
            <tr>
                <td><a href=\"{{ path('recipe_show', { 'id': recipe.id }) }}\">{{ recipe.id }}</a></td>
                <td>{{ recipe.name }}</td>
                <td>{{ recipe.description }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('recipe_show', { 'id': recipe.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('recipe_edit', { 'id': recipe.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('recipe_new') }}\">Create a new recipe</a>
        </li>
    </ul>
{% endblock %}
", "recipe/index.html.twig", "/home/kamil/symfony_projects/cookbook-symfony/app/Resources/views/recipe/index.html.twig");
    }
}
