<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_4fc3627799083a7d9a42191b45495166c2fdaee177b96a16410ac6f177c84765 extends Twig_Template
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
        $__internal_414e021b4d2cca3ef92f77098a49193b803a1b54732dd34a2493a02723bc2cd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_414e021b4d2cca3ef92f77098a49193b803a1b54732dd34a2493a02723bc2cd5->enter($__internal_414e021b4d2cca3ef92f77098a49193b803a1b54732dd34a2493a02723bc2cd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_2ab9e506910ba47ff99cda5b85b9c2d6f9aa03a90d32d689de78356fa56d0d07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ab9e506910ba47ff99cda5b85b9c2d6f9aa03a90d32d689de78356fa56d0d07->enter($__internal_2ab9e506910ba47ff99cda5b85b9c2d6f9aa03a90d32d689de78356fa56d0d07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_414e021b4d2cca3ef92f77098a49193b803a1b54732dd34a2493a02723bc2cd5->leave($__internal_414e021b4d2cca3ef92f77098a49193b803a1b54732dd34a2493a02723bc2cd5_prof);

        
        $__internal_2ab9e506910ba47ff99cda5b85b9c2d6f9aa03a90d32d689de78356fa56d0d07->leave($__internal_2ab9e506910ba47ff99cda5b85b9c2d6f9aa03a90d32d689de78356fa56d0d07_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "C:\\Users\\stagiaire\\Documents\\web\\SiteFlobal\\dev-master\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces.txt.twig");
    }
}
