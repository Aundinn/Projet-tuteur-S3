<?php

/* PR2LSiteBundle:Default:menu.html.twig */
class __TwigTemplate_5cd9a9949e23ac8504a3e0b021b02b15e6aedc0c9509c0e54ef709838568ac1e extends Twig_Template
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
        echo "

";
        // line 3
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listMenu"]) ? $context["listMenu"] : $this->getContext($context, "listMenu")));
        foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
            // line 4
            echo "    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "getLien", array(), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "getLibelle", array(), "method"), "html", null, true);
            echo "</a>
   \t<ul>
  \t";
            // line 6
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listMenu2"]) ? $context["listMenu2"] : $this->getContext($context, "listMenu2")));
            foreach ($context['_seq'] as $context["_key"] => $context["menu2"]) {
                // line 7
                echo "        ";
                if (($this->getAttribute($context["menu2"], "getIdMenuParent", array(), "method") == $this->getAttribute($context["menu"], "getId", array(), "method"))) {
                    // line 8
                    echo "    \t\t<li><a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["menu2"], "getLien", array(), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["menu2"], "getLibelle", array(), "method"), "html", null, true);
                    echo "</a></li>
    \t";
                }
                // line 10
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu2'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "\t</ul>
    </li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "

";
    }

    public function getTemplateName()
    {
        return "PR2LSiteBundle:Default:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 14,  56 => 11,  50 => 10,  42 => 8,  39 => 7,  35 => 6,  27 => 4,  23 => 3,  19 => 1,);
    }
}
