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
        $__internal_f49a77b9871ad6bcb0f43853e70d5517ce4533d485eca9f89f894c485ac6d79a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f49a77b9871ad6bcb0f43853e70d5517ce4533d485eca9f89f894c485ac6d79a->enter($__internal_f49a77b9871ad6bcb0f43853e70d5517ce4533d485eca9f89f894c485ac6d79a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ingredientstepjoin/index.html.twig"));

        $__internal_b300ddd9fa2747b7f68a192ec109d5a88688daf557540204ca66b6c0dde7f28f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b300ddd9fa2747b7f68a192ec109d5a88688daf557540204ca66b6c0dde7f28f->enter($__internal_b300ddd9fa2747b7f68a192ec109d5a88688daf557540204ca66b6c0dde7f28f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ingredientstepjoin/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f49a77b9871ad6bcb0f43853e70d5517ce4533d485eca9f89f894c485ac6d79a->leave($__internal_f49a77b9871ad6bcb0f43853e70d5517ce4533d485eca9f89f894c485ac6d79a_prof);

        
        $__internal_b300ddd9fa2747b7f68a192ec109d5a88688daf557540204ca66b6c0dde7f28f->leave($__internal_b300ddd9fa2747b7f68a192ec109d5a88688daf557540204ca66b6c0dde7f28f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_889d6a5efba70799583a568366a95a3020ecaf017b51fb4e3329dfe9ecbdbfd2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_889d6a5efba70799583a568366a95a3020ecaf017b51fb4e3329dfe9ecbdbfd2->enter($__internal_889d6a5efba70799583a568366a95a3020ecaf017b51fb4e3329dfe9ecbdbfd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5aefd32cf5c945626cb914c2da41be22d65e309e582e55d9f9cecc3b07f303cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5aefd32cf5c945626cb914c2da41be22d65e309e582e55d9f9cecc3b07f303cf->enter($__internal_5aefd32cf5c945626cb914c2da41be22d65e309e582e55d9f9cecc3b07f303cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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

";
        
        $__internal_5aefd32cf5c945626cb914c2da41be22d65e309e582e55d9f9cecc3b07f303cf->leave($__internal_5aefd32cf5c945626cb914c2da41be22d65e309e582e55d9f9cecc3b07f303cf_prof);

        
        $__internal_889d6a5efba70799583a568366a95a3020ecaf017b51fb4e3329dfe9ecbdbfd2->leave($__internal_889d6a5efba70799583a568366a95a3020ecaf017b51fb4e3329dfe9ecbdbfd2_prof);

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
        return array (  100 => 31,  88 => 25,  82 => 22,  75 => 18,  69 => 17,  66 => 16,  62 => 15,  49 => 4,  40 => 3,  11 => 1,);
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

{% endblock %}
", "ingredientstepjoin/index.html.twig", "/home/kamil/symfony_projects/cookbook-symfony/app/Resources/views/ingredientstepjoin/index.html.twig");
    }
}
