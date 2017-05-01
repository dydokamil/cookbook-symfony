<?php

/* ingredient/edit.html.twig */
class __TwigTemplate_cab6eb00be670a0a72a796501687318ade750f0409c63e6436cfdcb9e772817e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ingredient/edit.html.twig", 1);
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
        $__internal_a48e66c86b7e0572d27172551cc44ce19452085dd9ebe0fc1a3eb20924964775 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a48e66c86b7e0572d27172551cc44ce19452085dd9ebe0fc1a3eb20924964775->enter($__internal_a48e66c86b7e0572d27172551cc44ce19452085dd9ebe0fc1a3eb20924964775_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ingredient/edit.html.twig"));

        $__internal_bf0f2e550f5416d5c727865fd13bf6558dba52ea3fb349e1b2788137f7e182f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf0f2e550f5416d5c727865fd13bf6558dba52ea3fb349e1b2788137f7e182f4->enter($__internal_bf0f2e550f5416d5c727865fd13bf6558dba52ea3fb349e1b2788137f7e182f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ingredient/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a48e66c86b7e0572d27172551cc44ce19452085dd9ebe0fc1a3eb20924964775->leave($__internal_a48e66c86b7e0572d27172551cc44ce19452085dd9ebe0fc1a3eb20924964775_prof);

        
        $__internal_bf0f2e550f5416d5c727865fd13bf6558dba52ea3fb349e1b2788137f7e182f4->leave($__internal_bf0f2e550f5416d5c727865fd13bf6558dba52ea3fb349e1b2788137f7e182f4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d51aa0a219047309684fe3c83a358d41ae085141a26f7ecedae9450af54bf9e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d51aa0a219047309684fe3c83a358d41ae085141a26f7ecedae9450af54bf9e6->enter($__internal_d51aa0a219047309684fe3c83a358d41ae085141a26f7ecedae9450af54bf9e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bc03742ce50dad3982528979e5f00c4b17a1af1cbf93bf2b05925cb1e64d39bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc03742ce50dad3982528979e5f00c4b17a1af1cbf93bf2b05925cb1e64d39bf->enter($__internal_bc03742ce50dad3982528979e5f00c4b17a1af1cbf93bf2b05925cb1e64d39bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Ingredient edit</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ingredient_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_bc03742ce50dad3982528979e5f00c4b17a1af1cbf93bf2b05925cb1e64d39bf->leave($__internal_bc03742ce50dad3982528979e5f00c4b17a1af1cbf93bf2b05925cb1e64d39bf_prof);

        
        $__internal_d51aa0a219047309684fe3c83a358d41ae085141a26f7ecedae9450af54bf9e6->leave($__internal_d51aa0a219047309684fe3c83a358d41ae085141a26f7ecedae9450af54bf9e6_prof);

    }

    public function getTemplateName()
    {
        return "ingredient/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 18,  75 => 16,  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Ingredient edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('ingredient_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "ingredient/edit.html.twig", "/home/kamil/symfony_projects/cookbook-symfony/app/Resources/views/ingredient/edit.html.twig");
    }
}
