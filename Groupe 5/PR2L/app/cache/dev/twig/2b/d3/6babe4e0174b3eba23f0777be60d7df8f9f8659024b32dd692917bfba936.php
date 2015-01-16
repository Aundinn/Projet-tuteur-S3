<?php

/* PR2LMenuBundle:Menu:lister.html.twig  */
class __TwigTemplate_2bd36babe4e0174b3eba23f0777be60d7df8f9f8659024b32dd692917bfba936 extends Twig_Template
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
        // line 1
        echo "<ul>
\t";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["menusPere"]) ? $context["menusPere"] : $this->getContext($context, "menusPere")));
        foreach ($context['_seq'] as $context["_key"] => $context["menuPere"]) {
            // line 3
            echo "\t<li>
\t\t<?php echo \"<a href='index.php?page=2&id=\".\$menuP->getIdMenu().\"'>\".\$menuP->getTitreMenu().\"</a>\"?>
\t\t<?php \$menusF = \$menuManager->getAllMenusFils(\$menuP->getIdMenu());
\t\t";
            // line 6
            if (((isset($context["menusFils"]) ? $context["menusFils"] : $this->getContext($context, "menusFils")) != null)) {
                // line 7
                echo "\t\t\t<ul>
\t\t\t";
                // line 8
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["menusFils"]) ? $context["menusFils"] : $this->getContext($context, "menusFils")));
                foreach ($context['_seq'] as $context["_key"] => $context["menuFils"]) {
                    // line 9
                    echo "\t\t\t\t<li><?php echo \"<a href='index.php?page=2&id=\".\$menuF->getIdMenu().\"'>\".\$menuF->getTitreMenu().\"</a>\"?>
\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menuFils'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 11
                echo "\t\t\t</ul>
\t\t";
            }
            // line 13
            echo "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menuPere'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "\t
</ul>";
    }

    public function getTemplateName()
    {
        return "PR2LMenuBundle:Menu:lister.html.twig ";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 13,  47 => 11,  40 => 9,  36 => 8,  33 => 7,  31 => 6,  26 => 3,  22 => 2,  19 => 1,);
    }
}
