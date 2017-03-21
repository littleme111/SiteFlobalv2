<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_d69a53e4b74858860d7271b8fa047330c508ff6e71f4164011ebb8ff6714ac3b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_0f8f91b8fb2359e7c57f2752b4c747e91356d685bce7291d014354b7680e8d39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f8f91b8fb2359e7c57f2752b4c747e91356d685bce7291d014354b7680e8d39->enter($__internal_0f8f91b8fb2359e7c57f2752b4c747e91356d685bce7291d014354b7680e8d39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_5c264c043db45a3ccf6e8f5f745c3fda8082220d40e9db1cac2da1aaa0183047 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c264c043db45a3ccf6e8f5f745c3fda8082220d40e9db1cac2da1aaa0183047->enter($__internal_5c264c043db45a3ccf6e8f5f745c3fda8082220d40e9db1cac2da1aaa0183047_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f8f91b8fb2359e7c57f2752b4c747e91356d685bce7291d014354b7680e8d39->leave($__internal_0f8f91b8fb2359e7c57f2752b4c747e91356d685bce7291d014354b7680e8d39_prof);

        
        $__internal_5c264c043db45a3ccf6e8f5f745c3fda8082220d40e9db1cac2da1aaa0183047->leave($__internal_5c264c043db45a3ccf6e8f5f745c3fda8082220d40e9db1cac2da1aaa0183047_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6303a248f594615528cbfa953c7e8ecc5dc2754c057e60c1181e3f9b9d0f9907 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6303a248f594615528cbfa953c7e8ecc5dc2754c057e60c1181e3f9b9d0f9907->enter($__internal_6303a248f594615528cbfa953c7e8ecc5dc2754c057e60c1181e3f9b9d0f9907_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ab3dbaf9225443fe15538dff9de6ce2452e9e42aec7e3038a68b4cb3c0d68cba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab3dbaf9225443fe15538dff9de6ce2452e9e42aec7e3038a68b4cb3c0d68cba->enter($__internal_ab3dbaf9225443fe15538dff9de6ce2452e9e42aec7e3038a68b4cb3c0d68cba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_ab3dbaf9225443fe15538dff9de6ce2452e9e42aec7e3038a68b4cb3c0d68cba->leave($__internal_ab3dbaf9225443fe15538dff9de6ce2452e9e42aec7e3038a68b4cb3c0d68cba_prof);

        
        $__internal_6303a248f594615528cbfa953c7e8ecc5dc2754c057e60c1181e3f9b9d0f9907->leave($__internal_6303a248f594615528cbfa953c7e8ecc5dc2754c057e60c1181e3f9b9d0f9907_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9c60475c9e331a7f512eda9575b0b05467dccc8635d0e7240e2b13397bd93909 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c60475c9e331a7f512eda9575b0b05467dccc8635d0e7240e2b13397bd93909->enter($__internal_9c60475c9e331a7f512eda9575b0b05467dccc8635d0e7240e2b13397bd93909_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5cbbd67d94870cdf37a5ed6266416c5f3ea616b8d6e6a1fd758ac2e9bc3daef3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cbbd67d94870cdf37a5ed6266416c5f3ea616b8d6e6a1fd758ac2e9bc3daef3->enter($__internal_5cbbd67d94870cdf37a5ed6266416c5f3ea616b8d6e6a1fd758ac2e9bc3daef3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_5cbbd67d94870cdf37a5ed6266416c5f3ea616b8d6e6a1fd758ac2e9bc3daef3->leave($__internal_5cbbd67d94870cdf37a5ed6266416c5f3ea616b8d6e6a1fd758ac2e9bc3daef3_prof);

        
        $__internal_9c60475c9e331a7f512eda9575b0b05467dccc8635d0e7240e2b13397bd93909->leave($__internal_9c60475c9e331a7f512eda9575b0b05467dccc8635d0e7240e2b13397bd93909_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_96eadf075e8832108db97c14efe4ed899130e550e25e9bfb4fa38077b01ba5c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96eadf075e8832108db97c14efe4ed899130e550e25e9bfb4fa38077b01ba5c9->enter($__internal_96eadf075e8832108db97c14efe4ed899130e550e25e9bfb4fa38077b01ba5c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_478c3c9709699faac6a7983be19e37b719b5987aa19e26a95294c101f4f51ce8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_478c3c9709699faac6a7983be19e37b719b5987aa19e26a95294c101f4f51ce8->enter($__internal_478c3c9709699faac6a7983be19e37b719b5987aa19e26a95294c101f4f51ce8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_478c3c9709699faac6a7983be19e37b719b5987aa19e26a95294c101f4f51ce8->leave($__internal_478c3c9709699faac6a7983be19e37b719b5987aa19e26a95294c101f4f51ce8_prof);

        
        $__internal_96eadf075e8832108db97c14efe4ed899130e550e25e9bfb4fa38077b01ba5c9->leave($__internal_96eadf075e8832108db97c14efe4ed899130e550e25e9bfb4fa38077b01ba5c9_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\Users\\stagiaire\\Documents\\web\\SiteFlobal\\dev-master\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
