<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_480e38016fd026d2ec6707f4ec2c252e8e78f923c3be8381de07c74124c926ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4c63a467797a8116a7c4dca68ff024505ea611c492d76ccf65355597c017ec1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c63a467797a8116a7c4dca68ff024505ea611c492d76ccf65355597c017ec1f->enter($__internal_4c63a467797a8116a7c4dca68ff024505ea611c492d76ccf65355597c017ec1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_ad6453ec13d5dcbf88039f2dcda82ed66ef45025837ec9c7718cc79397647735 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad6453ec13d5dcbf88039f2dcda82ed66ef45025837ec9c7718cc79397647735->enter($__internal_ad6453ec13d5dcbf88039f2dcda82ed66ef45025837ec9c7718cc79397647735_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c63a467797a8116a7c4dca68ff024505ea611c492d76ccf65355597c017ec1f->leave($__internal_4c63a467797a8116a7c4dca68ff024505ea611c492d76ccf65355597c017ec1f_prof);

        
        $__internal_ad6453ec13d5dcbf88039f2dcda82ed66ef45025837ec9c7718cc79397647735->leave($__internal_ad6453ec13d5dcbf88039f2dcda82ed66ef45025837ec9c7718cc79397647735_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c8511553944ca69ba8ccca65c54e59408391edcda2e02d7fcff581f851061034 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8511553944ca69ba8ccca65c54e59408391edcda2e02d7fcff581f851061034->enter($__internal_c8511553944ca69ba8ccca65c54e59408391edcda2e02d7fcff581f851061034_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ad3fcd855287d477b1fa154051fdf3cd8b83253604d5611e92fa91850c6f7420 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad3fcd855287d477b1fa154051fdf3cd8b83253604d5611e92fa91850c6f7420->enter($__internal_ad3fcd855287d477b1fa154051fdf3cd8b83253604d5611e92fa91850c6f7420_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_ad3fcd855287d477b1fa154051fdf3cd8b83253604d5611e92fa91850c6f7420->leave($__internal_ad3fcd855287d477b1fa154051fdf3cd8b83253604d5611e92fa91850c6f7420_prof);

        
        $__internal_c8511553944ca69ba8ccca65c54e59408391edcda2e02d7fcff581f851061034->leave($__internal_c8511553944ca69ba8ccca65c54e59408391edcda2e02d7fcff581f851061034_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_0fba1ee0de58fb5370ee8d933d5b5b7b8d7910023da249257fd34b40947b6730 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fba1ee0de58fb5370ee8d933d5b5b7b8d7910023da249257fd34b40947b6730->enter($__internal_0fba1ee0de58fb5370ee8d933d5b5b7b8d7910023da249257fd34b40947b6730_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8800be411837ed52b07db47b4c262fbab96b6e44f21c46eb06f9c21b86534f36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8800be411837ed52b07db47b4c262fbab96b6e44f21c46eb06f9c21b86534f36->enter($__internal_8800be411837ed52b07db47b4c262fbab96b6e44f21c46eb06f9c21b86534f36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_8800be411837ed52b07db47b4c262fbab96b6e44f21c46eb06f9c21b86534f36->leave($__internal_8800be411837ed52b07db47b4c262fbab96b6e44f21c46eb06f9c21b86534f36_prof);

        
        $__internal_0fba1ee0de58fb5370ee8d933d5b5b7b8d7910023da249257fd34b40947b6730->leave($__internal_0fba1ee0de58fb5370ee8d933d5b5b7b8d7910023da249257fd34b40947b6730_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_916d25c819d112d810e46586c7c724cd4973dded0a2b35c72f333840db17897e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_916d25c819d112d810e46586c7c724cd4973dded0a2b35c72f333840db17897e->enter($__internal_916d25c819d112d810e46586c7c724cd4973dded0a2b35c72f333840db17897e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_35c1646864d80a1d2f1e91b4d739f1d740b65559f6006262ecb3e4d198f654cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35c1646864d80a1d2f1e91b4d739f1d740b65559f6006262ecb3e4d198f654cd->enter($__internal_35c1646864d80a1d2f1e91b4d739f1d740b65559f6006262ecb3e4d198f654cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_35c1646864d80a1d2f1e91b4d739f1d740b65559f6006262ecb3e4d198f654cd->leave($__internal_35c1646864d80a1d2f1e91b4d739f1d740b65559f6006262ecb3e4d198f654cd_prof);

        
        $__internal_916d25c819d112d810e46586c7c724cd4973dded0a2b35c72f333840db17897e->leave($__internal_916d25c819d112d810e46586c7c724cd4973dded0a2b35c72f333840db17897e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\Users\\stagiaire\\Documents\\web\\SiteFlobal\\dev-master\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
