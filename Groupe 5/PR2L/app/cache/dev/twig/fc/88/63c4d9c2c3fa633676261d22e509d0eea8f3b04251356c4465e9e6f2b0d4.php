<?php

/* PR2LMenuBundle:Menu:lister.html.twig */
class __TwigTemplate_fc8863c4d9c2c3fa633676261d22e509d0eea8f3b04251356c4465e9e6f2b0d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
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
    public function block_menu($context, array $blocks = array())
    {
        // line 4
        echo "<ul>
\t";
        // line 5
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["menus"]) ? $context["menus"] : $this->getContext($context, "menus")));
        foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
            // line 6
            echo "\t<li>
\t\t<?php echo \"<a href='index.php?page=2&id=\".\$menuP->getIdMenu().\"'>\".\$menuP->getTitreMenu().\"</a>\"?>
\t\t<?php \$menusF = \$menuManager->getAllMenusFils(\$menuP->getIdMenu());
\t\tif (\$menusF != null){
\t\t\t?> \t<ul>
\t\t\t<?php 
\t\t\tforeach(\$menusF as \$menuF){?>
\t\t\t\t<li><?php echo \"<a href='index.php?page=2&id=\".\$menuF->getIdMenu().\"'>\".\$menuF->getTitreMenu().\"</a>\"?>
\t\t\t
\t\t\t<?php }?></ul><?php 
\t\t}?>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "\t
</ul>
";
    }

    public function getTemplateName()
    {
        return "PR2LMenuBundle:Menu:lister.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 17,  38 => 6,  34 => 5,  31 => 4,  28 => 3,);
    }
}
