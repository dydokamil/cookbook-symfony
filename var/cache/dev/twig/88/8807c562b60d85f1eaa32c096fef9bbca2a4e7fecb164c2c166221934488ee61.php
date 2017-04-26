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
        $__internal_d30310eb0371ef9e06e4ae3d9e72b938bd77c208e06743d3d170d318e1d632b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d30310eb0371ef9e06e4ae3d9e72b938bd77c208e06743d3d170d318e1d632b2->enter($__internal_d30310eb0371ef9e06e4ae3d9e72b938bd77c208e06743d3d170d318e1d632b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ingredient/index.html.twig"));

        $__internal_0834caa8f20eb33c4dc4a44000ab42f2cd52d45575a6964898a1debfadd15c5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0834caa8f20eb33c4dc4a44000ab42f2cd52d45575a6964898a1debfadd15c5e->enter($__internal_0834caa8f20eb33c4dc4a44000ab42f2cd52d45575a6964898a1debfadd15c5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ingredient/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d30310eb0371ef9e06e4ae3d9e72b938bd77c208e06743d3d170d318e1d632b2->leave($__internal_d30310eb0371ef9e06e4ae3d9e72b938bd77c208e06743d3d170d318e1d632b2_prof);

        
        $__internal_0834caa8f20eb33c4dc4a44000ab42f2cd52d45575a6964898a1debfadd15c5e->leave($__internal_0834caa8f20eb33c4dc4a44000ab42f2cd52d45575a6964898a1debfadd15c5e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_372f4056dcdb6b67ad614c18722444e26c2626ea046ecc37a9c88668f4b9a62e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_372f4056dcdb6b67ad614c18722444e26c2626ea046ecc37a9c88668f4b9a62e->enter($__internal_372f4056dcdb6b67ad614c18722444e26c2626ea046ecc37a9c88668f4b9a62e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_51e88c02f3784ed9e4038206cbf7ed6c15da1a59b4299af887f2d29b05fb56ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51e88c02f3784ed9e4038206cbf7ed6c15da1a59b4299af887f2d29b05fb56ac->enter($__internal_51e88c02f3784ed9e4038206cbf7ed6c15da1a59b4299af887f2d29b05fb56ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Lista składników</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nazwa</th>
                <th>Operacje</th>
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
            echo "\">Pokaż</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ingredient_edit", array("id" => $this->getAttribute($context["ingredient"], "id", array()))), "html", null, true);
            echo "\">Edytuj</a>
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
        echo "\">Utwórz nowy składnik</a>
        </li>
    </ul>
";
        
        $__internal_51e88c02f3784ed9e4038206cbf7ed6c15da1a59b4299af887f2d29b05fb56ac->leave($__internal_51e88c02f3784ed9e4038206cbf7ed6c15da1a59b4299af887f2d29b05fb56ac_prof);

        
        $__internal_372f4056dcdb6b67ad614c18722444e26c2626ea046ecc37a9c88668f4b9a62e->leave($__internal_372f4056dcdb6b67ad614c18722444e26c2626ea046ecc37a9c88668f4b9a62e_prof);

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
    <h1>Lista składników</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nazwa</th>
                <th>Operacje</th>
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
                            <a href=\"{{ path('ingredient_show', { 'id': ingredient.id }) }}\">Pokaż</a>
                        </li>
                        <li>
                            <a href=\"{{ path('ingredient_edit', { 'id': ingredient.id }) }}\">Edytuj</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('ingredient_new') }}\">Utwórz nowy składnik</a>
        </li>
    </ul>
{% endblock %}
", "ingredient/index.html.twig", "/home/kamil/Dokumenty/studia/cookbook/app/Resources/views/ingredient/index.html.twig");
    }
}
