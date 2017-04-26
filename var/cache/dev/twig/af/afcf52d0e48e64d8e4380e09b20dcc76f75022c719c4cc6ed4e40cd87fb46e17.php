<?php

/* base.html.twig */
class __TwigTemplate_6f05d78eba1f6eca400f9419ad3a555b4e96748c7173ebf17f6bb62d7fa1c24e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'sidebar' => array($this, 'block_sidebar'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f822be9a40600cea6ff76ed66ee2a322f004caafc75553b3bb53451dce67d599 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f822be9a40600cea6ff76ed66ee2a322f004caafc75553b3bb53451dce67d599->enter($__internal_f822be9a40600cea6ff76ed66ee2a322f004caafc75553b3bb53451dce67d599_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_59fa5336f525d0ec0355b3962a694b5676f714bcf5e3e23bbdfd4694f2c916b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59fa5336f525d0ec0355b3962a694b5676f714bcf5e3e23bbdfd4694f2c916b6->enter($__internal_59fa5336f525d0ec0355b3962a694b5676f714bcf5e3e23bbdfd4694f2c916b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "            <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <div id=\"sidebar\">
            ";
        // line 11
        $this->displayBlock('sidebar', $context, $blocks);
        // line 19
        echo "        </div>
        ";
        // line 20
        $this->displayBlock('body', $context, $blocks);
        // line 22
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 23
        echo "    </body>
</html>
";
        
        $__internal_f822be9a40600cea6ff76ed66ee2a322f004caafc75553b3bb53451dce67d599->leave($__internal_f822be9a40600cea6ff76ed66ee2a322f004caafc75553b3bb53451dce67d599_prof);

        
        $__internal_59fa5336f525d0ec0355b3962a694b5676f714bcf5e3e23bbdfd4694f2c916b6->leave($__internal_59fa5336f525d0ec0355b3962a694b5676f714bcf5e3e23bbdfd4694f2c916b6_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_274ec9cc94ad3dcd079081e0073852a5a1de252bf720d74f27fe6b4492b8419d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_274ec9cc94ad3dcd079081e0073852a5a1de252bf720d74f27fe6b4492b8419d->enter($__internal_274ec9cc94ad3dcd079081e0073852a5a1de252bf720d74f27fe6b4492b8419d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e91fd041355554207f62342a929530c6da378f33faf16dc5ae38525b84fe25f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e91fd041355554207f62342a929530c6da378f33faf16dc5ae38525b84fe25f9->enter($__internal_e91fd041355554207f62342a929530c6da378f33faf16dc5ae38525b84fe25f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_e91fd041355554207f62342a929530c6da378f33faf16dc5ae38525b84fe25f9->leave($__internal_e91fd041355554207f62342a929530c6da378f33faf16dc5ae38525b84fe25f9_prof);

        
        $__internal_274ec9cc94ad3dcd079081e0073852a5a1de252bf720d74f27fe6b4492b8419d->leave($__internal_274ec9cc94ad3dcd079081e0073852a5a1de252bf720d74f27fe6b4492b8419d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e319f1669456188ccf7fc529a1ccdc687b2828a3ddbed43b1d423be873ad73f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e319f1669456188ccf7fc529a1ccdc687b2828a3ddbed43b1d423be873ad73f2->enter($__internal_e319f1669456188ccf7fc529a1ccdc687b2828a3ddbed43b1d423be873ad73f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_737d42bdc33c920f658b24245d60521daaf4aa32cf8ff202bad961af9aacfd6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_737d42bdc33c920f658b24245d60521daaf4aa32cf8ff202bad961af9aacfd6c->enter($__internal_737d42bdc33c920f658b24245d60521daaf4aa32cf8ff202bad961af9aacfd6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_737d42bdc33c920f658b24245d60521daaf4aa32cf8ff202bad961af9aacfd6c->leave($__internal_737d42bdc33c920f658b24245d60521daaf4aa32cf8ff202bad961af9aacfd6c_prof);

        
        $__internal_e319f1669456188ccf7fc529a1ccdc687b2828a3ddbed43b1d423be873ad73f2->leave($__internal_e319f1669456188ccf7fc529a1ccdc687b2828a3ddbed43b1d423be873ad73f2_prof);

    }

    // line 11
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_1919f04892dcb6ef65c27936efe2d64e945d8620d93c59603b56615bb0f97720 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1919f04892dcb6ef65c27936efe2d64e945d8620d93c59603b56615bb0f97720->enter($__internal_1919f04892dcb6ef65c27936efe2d64e945d8620d93c59603b56615bb0f97720_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_e0e14fbf2953671a45c11fddd176e4dcf821dc9d85a72083f4584f376fafd186 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0e14fbf2953671a45c11fddd176e4dcf821dc9d85a72083f4584f376fafd186->enter($__internal_e0e14fbf2953671a45c11fddd176e4dcf821dc9d85a72083f4584f376fafd186_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 12
        echo "                <ul>
                    <li><a href=\"/\">Home</a></li>
                    <li><a href=\"/recipe\">Przepisy</a></li>
                    <li><a href=\"/recipestep\">Kroki przepisów</a></li>
                    <li><a href=\"/ingredient\">Składniki</a></li>
                </ul>
            ";
        
        $__internal_e0e14fbf2953671a45c11fddd176e4dcf821dc9d85a72083f4584f376fafd186->leave($__internal_e0e14fbf2953671a45c11fddd176e4dcf821dc9d85a72083f4584f376fafd186_prof);

        
        $__internal_1919f04892dcb6ef65c27936efe2d64e945d8620d93c59603b56615bb0f97720->leave($__internal_1919f04892dcb6ef65c27936efe2d64e945d8620d93c59603b56615bb0f97720_prof);

    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        $__internal_4350f0eaf484bf055f6dda6fd68a77cd5d72bebb76a0f396c067db8d37b82473 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4350f0eaf484bf055f6dda6fd68a77cd5d72bebb76a0f396c067db8d37b82473->enter($__internal_4350f0eaf484bf055f6dda6fd68a77cd5d72bebb76a0f396c067db8d37b82473_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2e6ab30fa662707632c8e1099ce610bac08ba462b86c20d59af6d960d5f64fc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e6ab30fa662707632c8e1099ce610bac08ba462b86c20d59af6d960d5f64fc9->enter($__internal_2e6ab30fa662707632c8e1099ce610bac08ba462b86c20d59af6d960d5f64fc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 21
        echo "        ";
        
        $__internal_2e6ab30fa662707632c8e1099ce610bac08ba462b86c20d59af6d960d5f64fc9->leave($__internal_2e6ab30fa662707632c8e1099ce610bac08ba462b86c20d59af6d960d5f64fc9_prof);

        
        $__internal_4350f0eaf484bf055f6dda6fd68a77cd5d72bebb76a0f396c067db8d37b82473->leave($__internal_4350f0eaf484bf055f6dda6fd68a77cd5d72bebb76a0f396c067db8d37b82473_prof);

    }

    // line 22
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_affa9813a157b62ea82bdfa398775fde96954a343a2063bd8431a1d5eeccf46a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_affa9813a157b62ea82bdfa398775fde96954a343a2063bd8431a1d5eeccf46a->enter($__internal_affa9813a157b62ea82bdfa398775fde96954a343a2063bd8431a1d5eeccf46a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6ad64e6884982d1a24d8bdbc4fe299e3e0e540aa1f4ab28ebeb56d1d7d508a6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ad64e6884982d1a24d8bdbc4fe299e3e0e540aa1f4ab28ebeb56d1d7d508a6b->enter($__internal_6ad64e6884982d1a24d8bdbc4fe299e3e0e540aa1f4ab28ebeb56d1d7d508a6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6ad64e6884982d1a24d8bdbc4fe299e3e0e540aa1f4ab28ebeb56d1d7d508a6b->leave($__internal_6ad64e6884982d1a24d8bdbc4fe299e3e0e540aa1f4ab28ebeb56d1d7d508a6b_prof);

        
        $__internal_affa9813a157b62ea82bdfa398775fde96954a343a2063bd8431a1d5eeccf46a->leave($__internal_affa9813a157b62ea82bdfa398775fde96954a343a2063bd8431a1d5eeccf46a_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 22,  141 => 21,  132 => 20,  116 => 12,  107 => 11,  90 => 6,  72 => 5,  60 => 23,  57 => 22,  55 => 20,  52 => 19,  50 => 11,  42 => 7,  40 => 6,  36 => 5,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
            <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        <div id=\"sidebar\">
            {% block sidebar %}
                <ul>
                    <li><a href=\"/\">Home</a></li>
                    <li><a href=\"/recipe\">Przepisy</a></li>
                    <li><a href=\"/recipestep\">Kroki przepisów</a></li>
                    <li><a href=\"/ingredient\">Składniki</a></li>
                </ul>
            {% endblock %}
        </div>
        {% block body %}
        {% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/home/kamil/symfony_projects/cookbook-symfony/app/Resources/views/base.html.twig");
    }
}
