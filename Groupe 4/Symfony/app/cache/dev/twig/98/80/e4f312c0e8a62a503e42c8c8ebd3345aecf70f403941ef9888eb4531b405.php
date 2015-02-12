<?php

/* PR2LSiteBundle:Default:menu.html.twig */
class __TwigTemplate_9880e4f312c0e8a62a503e42c8c8ebd3345aecf70f403941ef9888eb4531b405 extends Twig_Template
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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listMenu"]) ? $context["listMenu"] : $this->getContext($context, "listMenu")));
        foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
            // line 2
            if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
                // line 3
                echo "    <li><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "getLien", array(), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "getLibelle", array(), "method"), "html", null, true);
                echo "</a>
   \t<ul>
  \t";
                // line 5
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["listMenu2"]) ? $context["listMenu2"] : $this->getContext($context, "listMenu2")));
                foreach ($context['_seq'] as $context["_key"] => $context["menu2"]) {
                    // line 6
                    echo "        ";
                    if (($this->getAttribute($context["menu2"], "getIdMenuParent", array(), "method") == $this->getAttribute($context["menu"], "getId", array(), "method"))) {
                        echo "   
    \t\t  <li><a href=\"";
                        // line 7
                        echo twig_escape_filter($this->env, $this->getAttribute($context["menu2"], "getLien", array(), "method"), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["menu2"], "getLibelle", array(), "method"), "html", null, true);
                        echo "</a></li>
    \t";
                    }
                    // line 9
                    echo "    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu2'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 10
                echo "\t</ul>
    </li>
";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "


";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listMenu"]) ? $context["listMenu"] : $this->getContext($context, "listMenu")));
        foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
            // line 18
            if (( !$this->env->getExtension('security')->isGranted("ROLE_ADMIN") && ($this->getAttribute($context["menu"], "getId", array(), "method") != 22))) {
                // line 19
                echo "    <li><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "getLien", array(), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "getLibelle", array(), "method"), "html", null, true);
                echo "</a>
   \t<ul>
  \t";
                // line 21
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["listMenu2"]) ? $context["listMenu2"] : $this->getContext($context, "listMenu2")));
                foreach ($context['_seq'] as $context["_key"] => $context["menu2"]) {
                    // line 22
                    echo "        ";
                    if (($this->getAttribute($context["menu2"], "getIdMenuParent", array(), "method") == $this->getAttribute($context["menu"], "getId", array(), "method"))) {
                        echo "   
    \t\t  <li><a href=\"";
                        // line 23
                        echo twig_escape_filter($this->env, $this->getAttribute($context["menu2"], "getLien", array(), "method"), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["menu2"], "getLibelle", array(), "method"), "html", null, true);
                        echo "</a></li>
    \t";
                    }
                    // line 25
                    echo "    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu2'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 26
                echo "\t</ul>
    </li>
";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
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
        return array (  105 => 26,  99 => 25,  92 => 23,  87 => 22,  83 => 21,  75 => 19,  73 => 18,  69 => 17,  64 => 14,  55 => 10,  49 => 9,  42 => 7,  37 => 6,  33 => 5,  25 => 3,  23 => 2,  19 => 1,);
    }
}
