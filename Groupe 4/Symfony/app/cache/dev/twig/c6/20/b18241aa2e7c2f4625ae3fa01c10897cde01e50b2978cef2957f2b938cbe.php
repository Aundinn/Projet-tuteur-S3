<?php

/* PR2LSiteBundle:Default:fondateurs.html.twig */
class __TwigTemplate_c620b18241aa2e7c2f4625ae3fa01c10897cde01e50b2978cef2957f2b938cbe extends Twig_Template
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
        echo " - Fondateurs";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
<<<<<<< HEAD
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('')->testEcho(), "html", null, true);
        echo "
";
=======
>>>>>>> 8fcfdeeb252dd53c476b4684aa9832185163c398
    }

    public function getTemplateName()
    {
        return "PR2LSiteBundle:Default:fondateurs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
<<<<<<< HEAD
        return array (  39 => 6,  36 => 5,  29 => 3,);
=======
        return array (  36 => 5,  29 => 3,);
>>>>>>> 8fcfdeeb252dd53c476b4684aa9832185163c398
    }
}
