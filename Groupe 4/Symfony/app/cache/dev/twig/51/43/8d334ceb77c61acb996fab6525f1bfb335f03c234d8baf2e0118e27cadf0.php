<?php

/* PR2LSiteBundle:Default:archives.html.twig */
class __TwigTemplate_51438d334ceb77c61acb996fab6525f1bfb335f03c234d8baf2e0118e27cadf0 extends Twig_Template
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
        echo " - Archives";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "

";
    }

    public function getTemplateName()
    {
        return "PR2LSiteBundle:Default:archives.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 6,  36 => 5,  29 => 3,);
    }
}
