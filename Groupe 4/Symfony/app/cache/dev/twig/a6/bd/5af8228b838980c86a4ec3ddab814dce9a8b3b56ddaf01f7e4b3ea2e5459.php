<?php

/* PR2LSiteBundle:Default:deconnexion.html.twig */
class __TwigTemplate_a6bd5af8228b838980c86a4ec3ddab814dce9a8b3b56ddaf01f7e4b3ea2e5459 extends Twig_Template
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
        echo " - Intranet";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
<?php
if (!(is_null(\$_SESSION[\"userCourant\"])))
{
    echo \"Au revoir \".\$_SESSION[\"userCourant\"]->getPrenom().\" \".\$_SESSION[\"userCourant\"]->getNom();
    \$_SESSION[\"userCourant\"] = NULL;
}
else
{
    echo \"Vous n'êtes pas connecté\";   
}
?>

";
    }

    public function getTemplateName()
    {
        return "PR2LSiteBundle:Default:deconnexion.html.twig";
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
