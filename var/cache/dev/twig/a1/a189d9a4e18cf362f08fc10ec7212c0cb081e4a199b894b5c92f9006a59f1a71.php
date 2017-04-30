<?php

/* ingredientstepjoin/index.html.twig */
class __TwigTemplate_5cbff1c197e7f2173bd12ed2d05769bf81bd34a905401f99fd16bcae6ed8d284 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ingredientstepjoin/index.html.twig", 1);
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
        $__internal_b582ad4dcdda3c9a06e1eef3d3b844709238d3202cfc73710ef094a753f0d390 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b582ad4dcdda3c9a06e1eef3d3b844709238d3202cfc73710ef094a753f0d390->enter($__internal_b582ad4dcdda3c9a06e1eef3d3b844709238d3202cfc73710ef094a753f0d390_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ingredientstepjoin/index.html.twig"));

        $__internal_d789d2415c572614bbdba559c8ea1f7d5e3093b235d9989f186ba3b22a0f72fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d789d2415c572614bbdba559c8ea1f7d5e3093b235d9989f186ba3b22a0f72fe->enter($__internal_d789d2415c572614bbdba559c8ea1f7d5e3093b235d9989f186ba3b22a0f72fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ingredientstepjoin/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b582ad4dcdda3c9a06e1eef3d3b844709238d3202cfc73710ef094a753f0d390->leave($__internal_b582ad4dcdda3c9a06e1eef3d3b844709238d3202cfc73710ef094a753f0d390_prof);

        
        $__internal_d789d2415c572614bbdba559c8ea1f7d5e3093b235d9989f186ba3b22a0f72fe->leave($__internal_d789d2415c572614bbdba559c8ea1f7d5e3093b235d9989f186ba3b22a0f72fe_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b9e6172844319261f3498488a3d1e081c15ee7dd6236a7d73e6710317e24354e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9e6172844319261f3498488a3d1e081c15ee7dd6236a7d73e6710317e24354e->enter($__internal_b9e6172844319261f3498488a3d1e081c15ee7dd6236a7d73e6710317e24354e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ef3a2324aefe5e7bd2d8df2b7aa3c1aec4bbfa97e3d14e74e6420becb92677d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef3a2324aefe5e7bd2d8df2b7aa3c1aec4bbfa97e3d14e74e6420becb92677d6->enter($__internal_ef3a2324aefe5e7bd2d8df2b7aa3c1aec4bbfa97e3d14e74e6420becb92677d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Ingredientstepjoins list</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Amount</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ingredientStepJoins"] ?? $this->getContext($context, "ingredientStepJoins")));
        foreach ($context['_seq'] as $context["_key"] => $context["ingredientStepJoin"]) {
            // line 16
            echo "            <tr>
                <td><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ingredientstepjoin_show", array("id" => $this->getAttribute($context["ingredientStepJoin"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ingredientStepJoin"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["ingredientStepJoin"], "amount", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ingredientstepjoin_show", array("id" => $this->getAttribute($context["ingredientStepJoin"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ingredientstepjoin_edit", array("id" => $this->getAttribute($context["ingredientStepJoin"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ingredientStepJoin'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ingredientstepjoin_new");
        echo "\">Create a new ingredientStepJoin</a>
        </li>
    </ul>
";
        
        $__internal_ef3a2324aefe5e7bd2d8df2b7aa3c1aec4bbfa97e3d14e74e6420becb92677d6->leave($__internal_ef3a2324aefe5e7bd2d8df2b7aa3c1aec4bbfa97e3d14e74e6420becb92677d6_prof);

        
        $__internal_b9e6172844319261f3498488a3d1e081c15ee7dd6236a7d73e6710317e24354e->leave($__internal_b9e6172844319261f3498488a3d1e081c15ee7dd6236a7d73e6710317e24354e_prof);

    }

    public function getTemplateName()
    {
        return "ingredientstepjoin/index.html.twig";
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
    <h1>Ingredientstepjoins list</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Amount</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for ingredientStepJoin in ingredientStepJoins %}
            <tr>
                <td><a href=\"{{ path('ingredientstepjoin_show', { 'id': ingredientStepJoin.id }) }}\">{{ ingredientStepJoin.id }}</a></td>
                <td>{{ ingredientStepJoin.amount }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('ingredientstepjoin_show', { 'id': ingredientStepJoin.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('ingredientstepjoin_edit', { 'id': ingredientStepJoin.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('ingredientstepjoin_new') }}\">Create a new ingredientStepJoin</a>
        </li>
    </ul>
{% endblock %}
", "ingredientstepjoin/index.html.twig", "/home/kamil/Dokumenty/studia/cookbook/app/Resources/views/ingredientstepjoin/index.html.twig");
    }
}
