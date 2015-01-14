<?php

/* PR2LUserBundle:Profil:viewAll.html.twig */
class __TwigTemplate_1dbeb19f0a81345be85b5fe9577d137c63a78010348dde80e59690e0da152866 extends Twig_Template
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
        echo "Lister les utilisateurs - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " 
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "<table border='solid'>
\t<tr>
\t\t<th>Num&eacute;ro</th>
\t\t<th>Nom</th>
\t\t<th>Pr&eacute;nom</th>
\t\t<th>Num&eacute;ro de t&eacute;l&eacute;phone</th>
\t\t<th>Adresse email</th>
\t\t<th>Fonction</th>
\t\t<th>Login</th>
\t\t<th>Mot de passe</th>
\t</tr>
\t";
        // line 19
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["profils"]) ? $context["profils"] : $this->getContext($context, "profils")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 20
            echo "\t\t<tr>
\t\t\t<td> <a href='";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pr2l_user_view_single", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "'> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo " </a> </td>
\t\t\t<td> <a href='";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pr2l_user_view_single", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "'> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "userNom", array()), "html", null, true);
            echo " </a> </td>
\t\t\t<td> <a href='";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pr2l_user_view_single", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "'> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "userPrenom", array()), "html", null, true);
            echo " </a> </td>
\t\t\t<td> <a href='";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pr2l_user_view_single", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "'> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "userTelephone", array()), "html", null, true);
            echo " </a> </td>
\t\t\t<td> <a href='";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pr2l_user_view_single", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "'> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "userEmail", array()), "html", null, true);
            echo " </a> </td>
\t\t\t<td> <a href='";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pr2l_user_view_single", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "'> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "userFonction", array()), "html", null, true);
            echo " </a> </td>
\t\t\t<td> <a href='";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pr2l_user_view_single", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "'> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "userLogin", array()), "html", null, true);
            echo " </a> </td>
\t\t\t<td> <a href='";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pr2l_user_view_single", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "'> ********* </a> </td>
\t\t</tr>
\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 31
            echo "\t\t<tr>
\t\t\t<td>---</td>
\t\t\t<td>---</td>
\t\t\t<td>---</td>
\t\t\t<td>---</td>
\t\t\t<td>---</td>
\t\t\t<td>---</td>
\t\t\t<td>---</td>
\t\t\t<td>---</td>
\t\t</tr>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "\t\t
</table>
";
    }

    public function getTemplateName()
    {
        return "PR2LUserBundle:Profil:viewAll.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 42,  113 => 31,  105 => 28,  99 => 27,  93 => 26,  87 => 25,  81 => 24,  75 => 23,  69 => 22,  63 => 21,  60 => 20,  55 => 19,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}