<?php

/* PR2LSiteBundle:Default:connexion.html.twig */
class __TwigTemplate_ad185a286b806180dfd30b8cc19709fe73172b1a993d013c5a1879cfa0340ecd extends Twig_Template
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
        echo " - Connexion";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
";
        // line 7
        if (array_key_exists("getLogin", $context)) {
            // line 8
            echo "    coucou
";
        } else {
            // line 10
            echo "    <h3>Formulaire de connexion</h3>
    
    <div class=\"formulaire\">
        <form method=\"post\" action=\"#\" ";
            // line 13
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
            echo ">
        ";
            // line 14
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
            echo "
            <input type=\"submit\"/>
        </form>
    </div>
";
        }
        // line 19
        echo "
";
    }

    public function getTemplateName()
    {
        return "PR2LSiteBundle:Default:connexion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 19,  57 => 14,  53 => 13,  48 => 10,  44 => 8,  42 => 7,  39 => 6,  36 => 5,  29 => 3,);
    }
}
