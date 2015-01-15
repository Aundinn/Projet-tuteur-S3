<?php

/* PR2LSiteBundle:Default:fondateurs.html.twig */
class __TwigTemplate_2261c0c7b4c1d601751e0ffa911f0a595521beb0dd8166c2654f35db7ce5e6e9 extends Twig_Template
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
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('')->testEcho(), "html", null, true);
        echo "

<ul>
  ";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listAdverts"]) ? $context["listAdverts"] : $this->getContext($context, "listAdverts")));
        foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
            // line 10
            echo "    <li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "getNom", array(), "method"), "html", null, true);
            echo "</li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "</ul>

";
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
        return array (  58 => 12,  49 => 10,  45 => 9,  39 => 6,  36 => 5,  29 => 3,);
    }
}
