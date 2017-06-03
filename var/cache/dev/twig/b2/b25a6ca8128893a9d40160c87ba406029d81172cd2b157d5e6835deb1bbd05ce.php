<?php

/* recipe/show.html.twig */
class __TwigTemplate_b535cdd8be80c26dc80cd264b6d1ef7802bec04b90faa720086a3e510adfac8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "recipe/show.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_97628f6a120794f50f316cce3f5f3dcb2d929decfa18465a5813160a542f7e1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97628f6a120794f50f316cce3f5f3dcb2d929decfa18465a5813160a542f7e1b->enter($__internal_97628f6a120794f50f316cce3f5f3dcb2d929decfa18465a5813160a542f7e1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "recipe/show.html.twig"));

        $__internal_42c9c588abfcb8060d2241801cc824d9680851cd15b8218e21715819f80b9f0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42c9c588abfcb8060d2241801cc824d9680851cd15b8218e21715819f80b9f0c->enter($__internal_42c9c588abfcb8060d2241801cc824d9680851cd15b8218e21715819f80b9f0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "recipe/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_97628f6a120794f50f316cce3f5f3dcb2d929decfa18465a5813160a542f7e1b->leave($__internal_97628f6a120794f50f316cce3f5f3dcb2d929decfa18465a5813160a542f7e1b_prof);

        
        $__internal_42c9c588abfcb8060d2241801cc824d9680851cd15b8218e21715819f80b9f0c->leave($__internal_42c9c588abfcb8060d2241801cc824d9680851cd15b8218e21715819f80b9f0c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_64d528d8ef2885f609af35ca617ce217c8f5953697ecdf599f1861b25123865b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64d528d8ef2885f609af35ca617ce217c8f5953697ecdf599f1861b25123865b->enter($__internal_64d528d8ef2885f609af35ca617ce217c8f5953697ecdf599f1861b25123865b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0627c0ea0f2445391f379917b28a22b7b069be8c53b377ca8c42064f36010d94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0627c0ea0f2445391f379917b28a22b7b069be8c53b377ca8c42064f36010d94->enter($__internal_0627c0ea0f2445391f379917b28a22b7b069be8c53b377ca8c42064f36010d94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class='row'>
    <div class='col-md-3'>
        <a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recipe_edit", array("id" => $this->getAttribute(($context["recipe"] ?? $this->getContext($context, "recipe")), "id", array()))), "html", null, true);
        echo "\"><img width=100% src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/img/"), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute(($context["recipe"] ?? $this->getContext($context, "recipe")), "icon", array()), "html", null, true);
        echo "\" class=\"gallery-thumb\"></a>
    </div>
    <div class='col-md-9'>
        <h1>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["recipe"] ?? $this->getContext($context, "recipe")), "name", array()), "html", null, true);
        echo "</h1>
        <h3>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["recipe"] ?? $this->getContext($context, "recipe")), "description", array()), "html", null, true);
        echo "</h3>
    </div>
    </div>
    ";
        // line 34
        echo "
    <h1>Lista kroków</h1>
    <div class=\"col-md-9\">
        <table class='table'>
            <thead>
                <tr>
                    ";
        // line 41
        echo "                    <th>
                        <img width=30% src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/stopwatch.svg/"), "html", null, true);
        echo "\" class=\"gallery-thumb\">
                        <div>Czas przygotowania</div>
                    </th>
                    <th>Instructions</th>
                    <th>
                        <img width=30% src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/stopwatch.svg/"), "html", null, true);
        echo "\" class=\"gallery-thumb\">
                        <div>Czas gotowania</div>
                    </th>
                    ";
        // line 51
        echo "                </tr>
            </thead>
            <tbody>
                ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["recipeSteps"] ?? $this->getContext($context, "recipeSteps")));
        foreach ($context['_seq'] as $context["_key"] => $context["recipeStep"]) {
            // line 55
            echo "                    <tr onmouseover=\"this.bgColor='#eee'\" 
                        onmouseout=\"this.bgColor='#fff'\" 
                        style=\"cursor: pointer;\" 
                        class='clickable-row' 
                        data-href=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recipestep_show", array("id" => $this->getAttribute($context["recipeStep"], "id", array()))), "html", null, true);
            echo "\"
                    >

                        ";
            // line 63
            echo "                        <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["recipeStep"], "prepTime", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["recipeStep"], "instructions", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($context["recipeStep"], "cookTime", array()), "html", null, true);
            echo "</td>
                        ";
            // line 76
            echo "                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recipeStep'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "            </tbody>
        </table>
    </div>

    <div class=\"col-md-3\">
        <table class=\"table table-bordered\">
            <thead>
                <tr>
                    <th>Produkty</th>
                </tr>
                <tbody>
                    ";
        // line 89
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["joins"] ?? $this->getContext($context, "joins")));
        foreach ($context['_seq'] as $context["_key"] => $context["join"]) {
            // line 90
            echo "                        <tr>
                            <td><img width='10%' src=\"";
            // line 91
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/img/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["join"], "ingredient", array()), "icon", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["join"], "amount", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["join"], "type", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["join"], "ingredient", array()), "html", null, true);
            echo "</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['join'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "                </tbody>
        </table>
    </div>
    ";
        // line 97
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_0627c0ea0f2445391f379917b28a22b7b069be8c53b377ca8c42064f36010d94->leave($__internal_0627c0ea0f2445391f379917b28a22b7b069be8c53b377ca8c42064f36010d94_prof);

        
        $__internal_64d528d8ef2885f609af35ca617ce217c8f5953697ecdf599f1861b25123865b->leave($__internal_64d528d8ef2885f609af35ca617ce217c8f5953697ecdf599f1861b25123865b_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d1c34df291793611767f881696682df79d376a04df08f4e02097f61ac9ba296e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1c34df291793611767f881696682df79d376a04df08f4e02097f61ac9ba296e->enter($__internal_d1c34df291793611767f881696682df79d376a04df08f4e02097f61ac9ba296e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_523b20c089b385156f1ddc2359b2414667dc574ed9cecbf638fb76dd899a49fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_523b20c089b385156f1ddc2359b2414667dc574ed9cecbf638fb76dd899a49fc->enter($__internal_523b20c089b385156f1ddc2359b2414667dc574ed9cecbf638fb76dd899a49fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 98
        echo "        <script>
        window.onload = function() {
            rows = document.getElementsByClassName('clickable-row');
            for(var i = 0, len = rows.length; i < len; i++) {
                rows[i].onclick = function() { window.location = this.dataset.href };
            }
        };
        function szary(row) {
            row.bgColor = \"#ccc\";
        }
        </script>
    ";
        
        $__internal_523b20c089b385156f1ddc2359b2414667dc574ed9cecbf638fb76dd899a49fc->leave($__internal_523b20c089b385156f1ddc2359b2414667dc574ed9cecbf638fb76dd899a49fc_prof);

        
        $__internal_d1c34df291793611767f881696682df79d376a04df08f4e02097f61ac9ba296e->leave($__internal_d1c34df291793611767f881696682df79d376a04df08f4e02097f61ac9ba296e_prof);

    }

    public function getTemplateName()
    {
        return "recipe/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 98,  180 => 97,  175 => 94,  159 => 91,  156 => 90,  152 => 89,  139 => 78,  132 => 76,  128 => 65,  124 => 64,  119 => 63,  113 => 59,  107 => 55,  103 => 54,  98 => 51,  92 => 47,  84 => 42,  81 => 41,  73 => 34,  67 => 10,  63 => 9,  54 => 6,  50 => 4,  41 => 3,  11 => 1,);
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
    <div class='row'>
    <div class='col-md-3'>
        <a href=\"{{ path('recipe_edit', { 'id': recipe.id }) }}\"><img width=100% src=\"{{ asset('uploads/img/') }}{{recipe.icon}}\" class=\"gallery-thumb\"></a>
    </div>
    <div class='col-md-9'>
        <h1>{{ recipe.name }}</h1>
        <h3>{{ recipe.description }}</h3>
    </div>
    </div>
    {# <table>
        <tbody>
             <tr>
                <th>Id</th>
                <td>{{ recipe.id }}</td> 
            </tr> 
            <tr>
                <th>Nazwa</th>
                <td>{{ recipe.name }}</td>
            </tr>
            <tr>
                <th>Opis</th>
                <td>{{ recipe.description }}</td>
            </tr>
            <tr>
                <th>Icon</th>
                <td>{{ recipe.icon }}</td>
                <img height=32 width=32 src=\"{{ asset('uploads/img/') }}{{recipe.icon}}\" class=\"gallery-thumb\">
            </tr> 
        </tbody>
    </table> #}

    <h1>Lista kroków</h1>
    <div class=\"col-md-9\">
        <table class='table'>
            <thead>
                <tr>
                    {# <th>Id</th> #}
                    <th>
                        <img width=30% src=\"{{ asset('assets/stopwatch.svg/') }}\" class=\"gallery-thumb\">
                        <div>Czas przygotowania</div>
                    </th>
                    <th>Instructions</th>
                    <th>
                        <img width=30% src=\"{{ asset('assets/stopwatch.svg/') }}\" class=\"gallery-thumb\">
                        <div>Czas gotowania</div>
                    </th>
                    {# <th>Actions</th> #}
                </tr>
            </thead>
            <tbody>
                {% for recipeStep in recipeSteps %}
                    <tr onmouseover=\"this.bgColor='#eee'\" 
                        onmouseout=\"this.bgColor='#fff'\" 
                        style=\"cursor: pointer;\" 
                        class='clickable-row' 
                        data-href=\"{{ path('recipestep_show', {'id': recipeStep.id }) }}\"
                    >

                        {# <td><a href=\"{{ path('recipestep_show', { 'id': recipeStep.id }) }}\">{{ recipeStep.id }}</a></td> #}
                        <td>{{ recipeStep.prepTime }}</td>
                        <td>{{ recipeStep.instructions }}</td>
                        <td>{{ recipeStep.cookTime }}</td>
                        {# <td>
                            <ul>
                                <li>
                                    <a href=\"{{ path('recipestep_show', { 'id': recipeStep.id }) }}\">show</a>
                                </li>
                                <li>
                                    <a href=\"{{ path('recipestep_edit', { 'id': recipeStep.id }) }}\">edit</a>
                                </li>
                            </ul>
                        </td> #}
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    </div>

    <div class=\"col-md-3\">
        <table class=\"table table-bordered\">
            <thead>
                <tr>
                    <th>Produkty</th>
                </tr>
                <tbody>
                    {% for join in joins %}
                        <tr>
                            <td><img width='10%' src=\"{{asset('uploads/img/')}}{{join.ingredient.icon}}\">{{ join.amount }} {{ join.type }} {{ join.ingredient }}</td>
                        </tr>
                    {% endfor %}
                </tbody>
        </table>
    </div>
    {% block javascripts %}
        <script>
        window.onload = function() {
            rows = document.getElementsByClassName('clickable-row');
            for(var i = 0, len = rows.length; i < len; i++) {
                rows[i].onclick = function() { window.location = this.dataset.href };
            }
        };
        function szary(row) {
            row.bgColor = \"#ccc\";
        }
        </script>
    {% endblock %}
{% endblock %}
", "recipe/show.html.twig", "/home/kamil/symfony_projects/cookbook-symfony/app/Resources/views/recipe/show.html.twig");
    }
}
