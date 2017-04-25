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
        $__internal_9f9b02343268b65361c63dc7e7f0186b6ab26326faae157390a6c325de8fb6ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f9b02343268b65361c63dc7e7f0186b6ab26326faae157390a6c325de8fb6ec->enter($__internal_9f9b02343268b65361c63dc7e7f0186b6ab26326faae157390a6c325de8fb6ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ingredient/index.html.twig"));

        $__internal_a47257b8f4d51f935ff8fb178b9cabc99592961135fc8c312b9c701401efa80f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a47257b8f4d51f935ff8fb178b9cabc99592961135fc8c312b9c701401efa80f->enter($__internal_a47257b8f4d51f935ff8fb178b9cabc99592961135fc8c312b9c701401efa80f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ingredient/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f9b02343268b65361c63dc7e7f0186b6ab26326faae157390a6c325de8fb6ec->leave($__internal_9f9b02343268b65361c63dc7e7f0186b6ab26326faae157390a6c325de8fb6ec_prof);

        
        $__internal_a47257b8f4d51f935ff8fb178b9cabc99592961135fc8c312b9c701401efa80f->leave($__internal_a47257b8f4d51f935ff8fb178b9cabc99592961135fc8c312b9c701401efa80f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0af55fa0389f5298dfaff1d856c59b256fcc28b0d6890b754db35e36560af2f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0af55fa0389f5298dfaff1d856c59b256fcc28b0d6890b754db35e36560af2f3->enter($__internal_0af55fa0389f5298dfaff1d856c59b256fcc28b0d6890b754db35e36560af2f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_39391ec97220e139e024f83b14106987c74cbfc1a95e0ff5285107157507d7f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39391ec97220e139e024f83b14106987c74cbfc1a95e0ff5285107157507d7f7->enter($__internal_39391ec97220e139e024f83b14106987c74cbfc1a95e0ff5285107157507d7f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Ingredients list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ingredients"] ?? $this->getContext($context, "ingredients")));
        foreach ($context['_seq'] as $context["_key"] => $context["ingredient"]) {
            // line 16
            echo "            <tr>
                <td><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ingredient_show", array("id" => $this->getAttribute($context["ingredient"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ingredient"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["ingredient"], "name", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ingredient_show", array("id" => $this->getAttribute($context["ingredient"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 25
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
        // line 31
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ingredient_new");
        echo "\">Create a new ingredient</a>
        </li>
    </ul>
";
        
        $__internal_39391ec97220e139e024f83b14106987c74cbfc1a95e0ff5285107157507d7f7->leave($__internal_39391ec97220e139e024f83b14106987c74cbfc1a95e0ff5285107157507d7f7_prof);

        
        $__internal_0af55fa0389f5298dfaff1d856c59b256fcc28b0d6890b754db35e36560af2f3->leave($__internal_0af55fa0389f5298dfaff1d856c59b256fcc28b0d6890b754db35e36560af2f3_prof);

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
        return array (  107 => 36,  100 => 31,  88 => 25,  82 => 22,  75 => 18,  69 => 17,  66 => 16,  62 => 15,  49 => 4,  40 => 3,  11 => 1,);
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
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for ingredient in ingredients %}
            <tr>
                <td><a href=\"{{ path('ingredient_show', { 'id': ingredient.id }) }}\">{{ ingredient.id }}</a></td>
                <td>{{ ingredient.name }}</td>
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
