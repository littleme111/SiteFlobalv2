<?php

/* rssBundle:Default:index.html.twig */
class __TwigTemplate_16da69f2fe4d9bece33995143b6cbcf7feb7756bef8f95b66d291a8673c57dae extends Twig_Template
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
        $__internal_041a22838e3c9c37278d35f68d383a17a5a0f228865b7816aa815c9cec7334ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_041a22838e3c9c37278d35f68d383a17a5a0f228865b7816aa815c9cec7334ac->enter($__internal_041a22838e3c9c37278d35f68d383a17a5a0f228865b7816aa815c9cec7334ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "rssBundle:Default:index.html.twig"));

        // line 1
        echo "<h1>Hello World!</h1>
";
        
        $__internal_041a22838e3c9c37278d35f68d383a17a5a0f228865b7816aa815c9cec7334ac->leave($__internal_041a22838e3c9c37278d35f68d383a17a5a0f228865b7816aa815c9cec7334ac_prof);

    }

    public function getTemplateName()
    {
        return "rssBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h1>Hello World!</h1>
", "rssBundle:Default:index.html.twig", "C:\\Users\\stagiaire\\Documents\\web\\SiteFlobal\\dev-master\\src\\rssBundle/Resources/views/Default/index.html.twig");
    }
}
