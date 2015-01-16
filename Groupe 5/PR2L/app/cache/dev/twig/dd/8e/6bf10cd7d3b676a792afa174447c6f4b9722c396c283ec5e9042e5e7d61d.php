<?php

/* PR2LUserBundle:Profil:indexAction.html.twig */
class __TwigTemplate_dd8e6bf10cd7d3b676a792afa174447c6f4b9722c396c283ec5e9042e5e7d61d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "Module Utilisateur - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " 
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "
";
    }

    public function getTemplateName()
    {
        return "PR2LUserBundle:Profil:indexAction.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
