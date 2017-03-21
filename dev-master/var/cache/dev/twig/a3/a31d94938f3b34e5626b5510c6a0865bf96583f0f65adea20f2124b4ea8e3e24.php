<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_57455bc33aecfac6544ea92ce7609362e910188355485e171a00baa0113b4cdc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8b6cb22dcf13aaac53380722e752b6f2423a80fd3875def1044d8cac2eb029b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b6cb22dcf13aaac53380722e752b6f2423a80fd3875def1044d8cac2eb029b1->enter($__internal_8b6cb22dcf13aaac53380722e752b6f2423a80fd3875def1044d8cac2eb029b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_683361787cb4610bf8c55854a56731ee230fac1114bf8c6899b4f90587852933 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_683361787cb4610bf8c55854a56731ee230fac1114bf8c6899b4f90587852933->enter($__internal_683361787cb4610bf8c55854a56731ee230fac1114bf8c6899b4f90587852933_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b6cb22dcf13aaac53380722e752b6f2423a80fd3875def1044d8cac2eb029b1->leave($__internal_8b6cb22dcf13aaac53380722e752b6f2423a80fd3875def1044d8cac2eb029b1_prof);

        
        $__internal_683361787cb4610bf8c55854a56731ee230fac1114bf8c6899b4f90587852933->leave($__internal_683361787cb4610bf8c55854a56731ee230fac1114bf8c6899b4f90587852933_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_24a985003bcc94420ee7d365438cd44fcf9f1e13dd34013f2b82080a82995165 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24a985003bcc94420ee7d365438cd44fcf9f1e13dd34013f2b82080a82995165->enter($__internal_24a985003bcc94420ee7d365438cd44fcf9f1e13dd34013f2b82080a82995165_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6b2d92e2303432c1db89ed7005307bb95dfab478b2471a9f1a27592cae52a3a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b2d92e2303432c1db89ed7005307bb95dfab478b2471a9f1a27592cae52a3a8->enter($__internal_6b2d92e2303432c1db89ed7005307bb95dfab478b2471a9f1a27592cae52a3a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6b2d92e2303432c1db89ed7005307bb95dfab478b2471a9f1a27592cae52a3a8->leave($__internal_6b2d92e2303432c1db89ed7005307bb95dfab478b2471a9f1a27592cae52a3a8_prof);

        
        $__internal_24a985003bcc94420ee7d365438cd44fcf9f1e13dd34013f2b82080a82995165->leave($__internal_24a985003bcc94420ee7d365438cd44fcf9f1e13dd34013f2b82080a82995165_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e32fa03105547c38ac73686bc5f2934afd0ab1fcb8992a0d0640abe6556cce85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e32fa03105547c38ac73686bc5f2934afd0ab1fcb8992a0d0640abe6556cce85->enter($__internal_e32fa03105547c38ac73686bc5f2934afd0ab1fcb8992a0d0640abe6556cce85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_bd8fdbf10e6d00ce438e3ddef1b677fe1a555781ef486c988d0ff711a86c0ef7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd8fdbf10e6d00ce438e3ddef1b677fe1a555781ef486c988d0ff711a86c0ef7->enter($__internal_bd8fdbf10e6d00ce438e3ddef1b677fe1a555781ef486c988d0ff711a86c0ef7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_bd8fdbf10e6d00ce438e3ddef1b677fe1a555781ef486c988d0ff711a86c0ef7->leave($__internal_bd8fdbf10e6d00ce438e3ddef1b677fe1a555781ef486c988d0ff711a86c0ef7_prof);

        
        $__internal_e32fa03105547c38ac73686bc5f2934afd0ab1fcb8992a0d0640abe6556cce85->leave($__internal_e32fa03105547c38ac73686bc5f2934afd0ab1fcb8992a0d0640abe6556cce85_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_44d8ad551550a4ef0b46382b6b1aea32b9930a004503baa0b1a6f4bc3526b021 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44d8ad551550a4ef0b46382b6b1aea32b9930a004503baa0b1a6f4bc3526b021->enter($__internal_44d8ad551550a4ef0b46382b6b1aea32b9930a004503baa0b1a6f4bc3526b021_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_abbefe0c8792705f045ba96888889b38a3a95a1d4b775cfd640dcdb6f4b056bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abbefe0c8792705f045ba96888889b38a3a95a1d4b775cfd640dcdb6f4b056bb->enter($__internal_abbefe0c8792705f045ba96888889b38a3a95a1d4b775cfd640dcdb6f4b056bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_abbefe0c8792705f045ba96888889b38a3a95a1d4b775cfd640dcdb6f4b056bb->leave($__internal_abbefe0c8792705f045ba96888889b38a3a95a1d4b775cfd640dcdb6f4b056bb_prof);

        
        $__internal_44d8ad551550a4ef0b46382b6b1aea32b9930a004503baa0b1a6f4bc3526b021->leave($__internal_44d8ad551550a4ef0b46382b6b1aea32b9930a004503baa0b1a6f4bc3526b021_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\Users\\stagiaire\\Documents\\web\\SiteFlobal\\dev-master\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
