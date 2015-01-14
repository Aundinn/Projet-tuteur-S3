<?php

/* PR2LUserBundle:Profil:connexion.html.twig */
class __TwigTemplate_c1264163b5baa16da06edc134110550934b617c064a89a86cca5c8540a743550 extends Twig_Template
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
        echo "Se connecter - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " 
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "
";
        // line 9
        $context["nb1"] = (twig_random($this->env, 8) + 1);
        // line 10
        $context["nb2"] = (twig_random($this->env, 8) + 1);
        // line 11
        $context["cheminImage1"] = $this->env->getExtension('assets')->getAssetUrl("images/nb");
        // line 12
        echo "
<form action=\"#\" method=\"post\">
\t<label for=user_login'>Login : </label>
\t\t<input type=\"text\" name=\"user_login\" id=\"user_login\"> <br /> 
\t<label for='user_mdp'>Mot de passe : </label>
\t\t<input type=\"password\" name=\"user_mdp\" id=\"user_mdp\">
\t<br />

\t<p class=\"captcha\">
\t\tMerci de r&eacute;soudre le calcul suivant pour confirmer que vous
\t\tn'&ecirc;tes pas un robot <br />
\t\t<img 
\t\t\tsrc=\"";
        // line 24
        echo twig_escape_filter($this->env, (($this->env->getExtension('assets')->getAssetUrl("images/nb/") . (isset($context["nb1"]) ? $context["nb1"] : $this->getContext($context, "nb1"))) . ".jpg"), "html", null, true);
        echo "\" alt='numero' /> + <img
\t\t\tsrc=\"";
        // line 25
        echo twig_escape_filter($this->env, (($this->env->getExtension('assets')->getAssetUrl("images/nb/") . (isset($context["nb2"]) ? $context["nb2"] : $this->getContext($context, "nb2"))) . ".jpg"), "html", null, true);
        echo "\" alt='numero' /> =
\t</p>

\t<input type=\"hidden\" name=\"nb1\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["nb1"]) ? $context["nb1"] : $this->getContext($context, "nb1")), "html", null, true);
        echo "\" /> 
\t<input type=\"hidden\" name=\"nb2\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["nb2"]) ? $context["nb2"] : $this->getContext($context, "nb2")), "html", null, true);
        echo "\" /> <br /> 
\t
\t<input type=\"text\" name=\"reponse\" required/> <br /> 
\t<input type=\"submit\" value=\"Connexion\" />
</form>
";
    }

    public function getTemplateName()
    {
        return "PR2LUserBundle:Profil:connexion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 29,  75 => 28,  69 => 25,  65 => 24,  51 => 12,  49 => 11,  47 => 10,  45 => 9,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
