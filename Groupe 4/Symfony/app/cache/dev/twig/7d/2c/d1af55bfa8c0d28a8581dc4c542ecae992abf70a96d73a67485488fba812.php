<?php

/* PR2LSiteBundle:Default:gestionAdmin.html.twig */
class __TwigTemplate_7d2cd1af55bfa8c0d28a8581dc4c542ecae992abf70a96d73a67485488fba812 extends Twig_Template
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
        echo " - Gestion des utilisateurs";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "

<table>
    <tr><th>Nom</th><th>Prénom</th><th>Login</th><th>Droits</th></tr>
    ";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listAdverts"]) ? $context["listAdverts"] : $this->getContext($context, "listAdverts")));
        foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
            // line 11
            echo "        <tr><td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "getNom", array(), "method"), "html", null, true);
            echo "</td><td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "getPrenom", array(), "method"), "html", null, true);
            echo "</td><td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "getIdentifiant", array(), "method"), "html", null, true);
            echo "</td><td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "getDroits", array(), "method"), "html", null, true);
            echo "</td></tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "</table>

<div class=\"formulaire\">
    <form method=\"post\" action=\"#\" ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
        ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Valider\" id=\"boutonform\">
    </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "PR2LSiteBundle:Default:gestionAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 17,  69 => 16,  64 => 13,  49 => 11,  45 => 10,  39 => 6,  36 => 5,  29 => 3,);
    }
}
