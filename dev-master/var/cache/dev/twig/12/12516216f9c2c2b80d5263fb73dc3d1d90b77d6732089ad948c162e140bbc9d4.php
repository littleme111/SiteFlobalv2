<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_71001b70e3e97040e1807b9f9e7701680cb7a243ecef61cf944e913337471340 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_df69f14b140352ac2b603b63738e61f39f96b567a77538793d364c1a2e5be47e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df69f14b140352ac2b603b63738e61f39f96b567a77538793d364c1a2e5be47e->enter($__internal_df69f14b140352ac2b603b63738e61f39f96b567a77538793d364c1a2e5be47e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_d6c49d3ef8d4d13200f25a6166b47d2b48ac0aa4628671cf7634989b532c4ebe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6c49d3ef8d4d13200f25a6166b47d2b48ac0aa4628671cf7634989b532c4ebe->enter($__internal_d6c49d3ef8d4d13200f25a6166b47d2b48ac0aa4628671cf7634989b532c4ebe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df69f14b140352ac2b603b63738e61f39f96b567a77538793d364c1a2e5be47e->leave($__internal_df69f14b140352ac2b603b63738e61f39f96b567a77538793d364c1a2e5be47e_prof);

        
        $__internal_d6c49d3ef8d4d13200f25a6166b47d2b48ac0aa4628671cf7634989b532c4ebe->leave($__internal_d6c49d3ef8d4d13200f25a6166b47d2b48ac0aa4628671cf7634989b532c4ebe_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_36bfbd0e532b2392d7e2ccd85d5d1b6998f23fdb6d94c55c3f5c6197974382f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36bfbd0e532b2392d7e2ccd85d5d1b6998f23fdb6d94c55c3f5c6197974382f9->enter($__internal_36bfbd0e532b2392d7e2ccd85d5d1b6998f23fdb6d94c55c3f5c6197974382f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_d1f53a726a0b62d102f804964efef148614e98e3eefe1bc1a67b189e8c4c79d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1f53a726a0b62d102f804964efef148614e98e3eefe1bc1a67b189e8c4c79d0->enter($__internal_d1f53a726a0b62d102f804964efef148614e98e3eefe1bc1a67b189e8c4c79d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_d1f53a726a0b62d102f804964efef148614e98e3eefe1bc1a67b189e8c4c79d0->leave($__internal_d1f53a726a0b62d102f804964efef148614e98e3eefe1bc1a67b189e8c4c79d0_prof);

        
        $__internal_36bfbd0e532b2392d7e2ccd85d5d1b6998f23fdb6d94c55c3f5c6197974382f9->leave($__internal_36bfbd0e532b2392d7e2ccd85d5d1b6998f23fdb6d94c55c3f5c6197974382f9_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\Users\\stagiaire\\Documents\\web\\SiteFlobal\\dev-master\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
