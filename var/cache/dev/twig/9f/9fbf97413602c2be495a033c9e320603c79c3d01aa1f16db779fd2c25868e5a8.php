<?php

/* default/index.html.twig */
class __TwigTemplate_5d04d389cc45e7dcb96571085e7073eef0c0fa0ae64c81e0136e791ac5735c58 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
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
        $__internal_31d3674f22925e07e7139de27c70452b227338f31a88ea15ff140326879d9dc3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31d3674f22925e07e7139de27c70452b227338f31a88ea15ff140326879d9dc3->enter($__internal_31d3674f22925e07e7139de27c70452b227338f31a88ea15ff140326879d9dc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_b4f928f01dfe079b21daf68b659d5b87195a5af1d5666d40a50a74988ac1a34e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4f928f01dfe079b21daf68b659d5b87195a5af1d5666d40a50a74988ac1a34e->enter($__internal_b4f928f01dfe079b21daf68b659d5b87195a5af1d5666d40a50a74988ac1a34e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31d3674f22925e07e7139de27c70452b227338f31a88ea15ff140326879d9dc3->leave($__internal_31d3674f22925e07e7139de27c70452b227338f31a88ea15ff140326879d9dc3_prof);

        
        $__internal_b4f928f01dfe079b21daf68b659d5b87195a5af1d5666d40a50a74988ac1a34e->leave($__internal_b4f928f01dfe079b21daf68b659d5b87195a5af1d5666d40a50a74988ac1a34e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9292e41732f2dbdea6d2d4a34f172a4587c1030a0fa36566d1492e1ec9196a99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9292e41732f2dbdea6d2d4a34f172a4587c1030a0fa36566d1492e1ec9196a99->enter($__internal_9292e41732f2dbdea6d2d4a34f172a4587c1030a0fa36566d1492e1ec9196a99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cf4fa9e6638189aa321e5cccfd35996bbb906d08d95385161cd1177d181caae1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf4fa9e6638189aa321e5cccfd35996bbb906d08d95385161cd1177d181caae1->enter($__internal_cf4fa9e6638189aa321e5cccfd35996bbb906d08d95385161cd1177d181caae1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Książka kucharska - strona główna</h1>
";
        
        $__internal_cf4fa9e6638189aa321e5cccfd35996bbb906d08d95385161cd1177d181caae1->leave($__internal_cf4fa9e6638189aa321e5cccfd35996bbb906d08d95385161cd1177d181caae1_prof);

        
        $__internal_9292e41732f2dbdea6d2d4a34f172a4587c1030a0fa36566d1492e1ec9196a99->leave($__internal_9292e41732f2dbdea6d2d4a34f172a4587c1030a0fa36566d1492e1ec9196a99_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Książka kucharska - strona główna</h1>
{% endblock %}
", "default/index.html.twig", "/home/kamil/symfony_projects/cookbook-symfony/app/Resources/views/default/index.html.twig");
    }
}
