<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_fa3f3e7b0dea8da648885b15fc3832503e4d347825baad2fba538506c62a877d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7600283c05a08c33930d9f418b99938d6effb6f5191bb7c1601ef8a453797dd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7600283c05a08c33930d9f418b99938d6effb6f5191bb7c1601ef8a453797dd3->enter($__internal_7600283c05a08c33930d9f418b99938d6effb6f5191bb7c1601ef8a453797dd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_be2be1ddd2a2bcfe7784f7c874222d5ca1562b51caad282db72047fe8eb8581a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be2be1ddd2a2bcfe7784f7c874222d5ca1562b51caad282db72047fe8eb8581a->enter($__internal_be2be1ddd2a2bcfe7784f7c874222d5ca1562b51caad282db72047fe8eb8581a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_7600283c05a08c33930d9f418b99938d6effb6f5191bb7c1601ef8a453797dd3->leave($__internal_7600283c05a08c33930d9f418b99938d6effb6f5191bb7c1601ef8a453797dd3_prof);

        
        $__internal_be2be1ddd2a2bcfe7784f7c874222d5ca1562b51caad282db72047fe8eb8581a->leave($__internal_be2be1ddd2a2bcfe7784f7c874222d5ca1562b51caad282db72047fe8eb8581a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "/home/kamil/symfony_projects/cookbook-symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
