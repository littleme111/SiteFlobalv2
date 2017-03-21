<?php

/* rssBundle:Default:index.html.twig */
class __TwigTemplate_4bb275904ed2d5f7cc8a8672dab295e343f7b0e745775043c88ff2efff187267 extends Twig_Template
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
        $__internal_6dca14949eab515905a3c0fa608cfd7339e3bf9b5f01685d5e004fe428852e02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6dca14949eab515905a3c0fa608cfd7339e3bf9b5f01685d5e004fe428852e02->enter($__internal_6dca14949eab515905a3c0fa608cfd7339e3bf9b5f01685d5e004fe428852e02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "rssBundle:Default:index.html.twig"));

        $__internal_5c10bd0c07aacc439f790ca58d97718e0292e0a6c29563df10bc5e8b7ca8464f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c10bd0c07aacc439f790ca58d97718e0292e0a6c29563df10bc5e8b7ca8464f->enter($__internal_5c10bd0c07aacc439f790ca58d97718e0292e0a6c29563df10bc5e8b7ca8464f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "rssBundle:Default:index.html.twig"));

        // line 1
        echo "<h1>Hello World!</h1>
";
        
        $__internal_6dca14949eab515905a3c0fa608cfd7339e3bf9b5f01685d5e004fe428852e02->leave($__internal_6dca14949eab515905a3c0fa608cfd7339e3bf9b5f01685d5e004fe428852e02_prof);

        
        $__internal_5c10bd0c07aacc439f790ca58d97718e0292e0a6c29563df10bc5e8b7ca8464f->leave($__internal_5c10bd0c07aacc439f790ca58d97718e0292e0a6c29563df10bc5e8b7ca8464f_prof);

    }

    public function getTemplateName()
    {
        return "rssBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
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
