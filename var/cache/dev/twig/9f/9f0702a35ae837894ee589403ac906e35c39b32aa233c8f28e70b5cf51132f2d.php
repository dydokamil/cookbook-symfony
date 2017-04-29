<?php

/* ingredienttype/index.html.twig */
class __TwigTemplate_3003eb8b0ad5509954771af1163e18fd6e98ce09560551995e52e7036ec8330e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ingredienttype/index.html.twig", 1);
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
        $__internal_c62fad667920f53ccf0a022186f378bcb1ff590fc271b4fce1aaf508cc2948db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c62fad667920f53ccf0a022186f378bcb1ff590fc271b4fce1aaf508cc2948db->enter($__internal_c62fad667920f53ccf0a022186f378bcb1ff590fc271b4fce1aaf508cc2948db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ingredienttype/index.html.twig"));

        $__internal_f7a03074096d11f674b3f31c25ebd312d1de6cc7c9f1e689d337dbd8472d954f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7a03074096d11f674b3f31c25ebd312d1de6cc7c9f1e689d337dbd8472d954f->enter($__internal_f7a03074096d11f674b3f31c25ebd312d1de6cc7c9f1e689d337dbd8472d954f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ingredienttype/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c62fad667920f53ccf0a022186f378bcb1ff590fc271b4fce1aaf508cc2948db->leave($__internal_c62fad667920f53ccf0a022186f378bcb1ff590fc271b4fce1aaf508cc2948db_prof);

        
        $__internal_f7a03074096d11f674b3f31c25ebd312d1de6cc7c9f1e689d337dbd8472d954f->leave($__internal_f7a03074096d11f674b3f31c25ebd312d1de6cc7c9f1e689d337dbd8472d954f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1302a5c95b1fcafe5b140d0da444fa42292361d3e9cf0f5e756e2361f7a3c943 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1302a5c95b1fcafe5b140d0da444fa42292361d3e9cf0f5e756e2361f7a3c943->enter($__internal_1302a5c95b1fcafe5b140d0da444fa42292361d3e9cf0f5e756e2361f7a3c943_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2111a69c1ae02e8da529d6f07a5793e4fe2db0ed498fbe4721031aa01e4da1e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2111a69c1ae02e8da529d6f07a5793e4fe2db0ed498fbe4721031aa01e4da1e6->enter($__internal_2111a69c1ae02e8da529d6f07a5793e4fe2db0ed498fbe4721031aa01e4da1e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Ingredienttypes list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Type</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ingredientTypes"] ?? $this->getContext($context, "ingredientTypes")));
        foreach ($context['_seq'] as $context["_key"] => $context["ingredientType"]) {
            // line 16
            echo "            <tr>
                <td><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ingredienttype_show", array("id" => $this->getAttribute($context["ingredientType"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ingredientType"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["ingredientType"], "type", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ingredienttype_show", array("id" => $this->getAttribute($context["ingredientType"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ingredienttype_edit", array("id" => $this->getAttribute($context["ingredientType"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ingredientType'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ingredienttype_new");
        echo "\">Create a new ingredientType</a>
        </li>
    </ul>
";
        
        $__internal_2111a69c1ae02e8da529d6f07a5793e4fe2db0ed498fbe4721031aa01e4da1e6->leave($__internal_2111a69c1ae02e8da529d6f07a5793e4fe2db0ed498fbe4721031aa01e4da1e6_prof);

        
        $__internal_1302a5c95b1fcafe5b140d0da444fa42292361d3e9cf0f5e756e2361f7a3c943->leave($__internal_1302a5c95b1fcafe5b140d0da444fa42292361d3e9cf0f5e756e2361f7a3c943_prof);

    }

    public function getTemplateName()
    {
        return "ingredienttype/index.html.twig";
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
    <h1>Ingredienttypes list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Type</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for ingredientType in ingredientTypes %}
            <tr>
                <td><a href=\"{{ path('ingredienttype_show', { 'id': ingredientType.id }) }}\">{{ ingredientType.id }}</a></td>
                <td>{{ ingredientType.type }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('ingredienttype_show', { 'id': ingredientType.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('ingredienttype_edit', { 'id': ingredientType.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('ingredienttype_new') }}\">Create a new ingredientType</a>
        </li>
    </ul>
{% endblock %}
", "ingredienttype/index.html.twig", "/home/kamil/symfony_projects/cookbook-symfony/app/Resources/views/ingredienttype/index.html.twig");
    }
}
