<?php

/* PR2LSiteBundle:Default:adherer.html.twig */
class __TwigTemplate_07d1204dbb65e40de93f68f52cc79343491b0bdfeaa93f50c2a83a7a1b2a14f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Adhérer à l'association";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "PR2LSiteBundle:Default:adherer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 5,  29 => 3,);
    }
}
