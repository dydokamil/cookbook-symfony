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
        $__internal_ac40c8fe25c6492d9ff6f865589cd0bdad3cc13c5c2796830ad298d444299861 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac40c8fe25c6492d9ff6f865589cd0bdad3cc13c5c2796830ad298d444299861->enter($__internal_ac40c8fe25c6492d9ff6f865589cd0bdad3cc13c5c2796830ad298d444299861_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ingredientstepjoin/index.html.twig"));

        $__internal_8db58e4d258e2d0e956af4473d2c392f04a4df75135d658e982fd5f1ae2b1045 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8db58e4d258e2d0e956af4473d2c392f04a4df75135d658e982fd5f1ae2b1045->enter($__internal_8db58e4d258e2d0e956af4473d2c392f04a4df75135d658e982fd5f1ae2b1045_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ingredientstepjoin/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ac40c8fe25c6492d9ff6f865589cd0bdad3cc13c5c2796830ad298d444299861->leave($__internal_ac40c8fe25c6492d9ff6f865589cd0bdad3cc13c5c2796830ad298d444299861_prof);

        
        $__internal_8db58e4d258e2d0e956af4473d2c392f04a4df75135d658e982fd5f1ae2b1045->leave($__internal_8db58e4d258e2d0e956af4473d2c392f04a4df75135d658e982fd5f1ae2b1045_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0137fd17d3e7ab11435c97f9a1d36ea8476e20c567fef463a2b8e4a543fa1d2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0137fd17d3e7ab11435c97f9a1d36ea8476e20c567fef463a2b8e4a543fa1d2e->enter($__internal_0137fd17d3e7ab11435c97f9a1d36ea8476e20c567fef463a2b8e4a543fa1d2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_21b261a2c427c5cbb647d2fa1ed645d252954ad0ab4e2a248e8618abe649c97a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21b261a2c427c5cbb647d2fa1ed645d252954ad0ab4e2a248e8618abe649c97a->enter($__internal_21b261a2c427c5cbb647d2fa1ed645d252954ad0ab4e2a248e8618abe649c97a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Ingredientstepjoins list</h1>

    <table>
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
        
        $__internal_21b261a2c427c5cbb647d2fa1ed645d252954ad0ab4e2a248e8618abe649c97a->leave($__internal_21b261a2c427c5cbb647d2fa1ed645d252954ad0ab4e2a248e8618abe649c97a_prof);

        
        $__internal_0137fd17d3e7ab11435c97f9a1d36ea8476e20c567fef463a2b8e4a543fa1d2e->leave($__internal_0137fd17d3e7ab11435c97f9a1d36ea8476e20c567fef463a2b8e4a543fa1d2e_prof);

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

    <table>
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
", "ingredientstepjoin/index.html.twig", "/home/kamil/symfony_projects/cookbook-symfony/app/Resources/views/ingredientstepjoin/index.html.twig");
    }
}
