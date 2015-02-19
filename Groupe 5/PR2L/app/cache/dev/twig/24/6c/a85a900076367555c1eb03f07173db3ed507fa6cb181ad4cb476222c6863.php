<?php

/* PR2LUserBundle:Profil:edit.html.twig */
class __TwigTemplate_246ca85a900076367555c1eb03f07173db3ed507fa6cb181ad4cb476222c6863 extends Twig_Template
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
        echo "Modifier un utilisateur - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " 
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "<h1>Modifier un utilisateur</h1>
<hr>
<div id='user'>
\t<form name='modifier_user' id='modifier_user' action='#' method='post'>
\t\t<fieldset>
\t\t\t<legend>Informations g&eacute;n&eacute;rale :</legend>
\t\t\t\t<label for='nom'>Nom : </label> 
\t\t\t\t\t<input type='text' value='test1' name='nom' required> <br/> 
\t\t\t\t<label for='prenom'>Pr&eacute;nom : </label>
\t\t\t\t\t<input type='text' value=";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "userPrenom", array()), "html", null, true);
        echo " name='prenom'  required> <br /> 
\t\t\t\t<label for='tel'>T&eacute;l&eacute;phone : </label>
\t\t\t\t\t<input type='text' value=";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "userTelephone", array()), "html", null, true);
        echo " name='tel' pattern='[0][0-9]{9}' required> <br/>
\t\t\t\t<label for='mail'>Mail :</label> 
\t\t\t\t\t<input type='mail' value=";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "userEmail", array()), "html", null, true);
        echo " name='mail' required /> <br />
\t\t\t\t<label for='fonction'> Fonction de l'utilisateur :</label> 
\t\t\t\t<select name='fonction' id='fonction'>
";
        // line 27
        echo "\t\t\t\t\t<option>Secr&eacute;taire</option>
\t\t\t\t\t<option>Directeur</option>
\t\t\t\t</select> \t 
\t\t</fieldset>
\t\t<br/>
\t\t<fieldset>
\t\t\t<legend>Informations de connexion :</legend>
\t\t\t\t<label for='login'>Login :</label> 
\t\t\t\t\t<input type='text'  value=";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "userLogin", array()), "html", null, true);
        echo " name='login' required> <br/> 
\t\t\t\t<label for='mdp'>Mot de passe :</label> 
\t\t\t\t\t<input type='password' value=";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "userPwd", array()), "html", null, true);
        echo " name='mdp' required /> <br />
\t\t</fieldset> 
\t\t<br/>
\t\t<fieldset>
\t\t\t<legend> Type de compte :</legend>
\t\t\t\t<input type='checkbox' name='isAdherent' value='1'/>
\t\t\t\t<label for='isAdherent' title=\"L'utilisateur est adh&eacute;rent de l'association\"> Adh&eacute;rent </label>
\t\t\t\t<br/>
\t\t\t\t
\t\t\t\t<input type='checkbox' name='isContributeur' value='1'/>
\t\t\t\t<label for='isContributeur' title=\"L'utilisateur pourra participer &agrave la r&eacute;daction d'article\" > Contributeur </label>
\t\t\t\t<br/>
\t\t\t\t
\t\t\t\t<input type='checkbox' name='isModerateur' value='1'/>
\t\t\t\t<label for='isModerateur' title=\"L'utilisateur pourra mod&eacute;rer les articles avant leur parution sur le site\" > Mod&eacute;rateur </label>
\t\t\t\t<br/>
\t\t\t\t
\t\t\t\t<input type='checkbox' name='isAdmin' value='1'/>
\t\t\t\t<label for='isAdmin' title=\"L'utilisateur sera administrateur et pourra donc avoir acc&egrave;s &agrave; des parties r&eacute;serv&eacute;es &agrave; la gestion des utilisateurs et du site\" > Administrateur </label>
\t\t\t\t<br/>\t\t
\t\t</fieldset>
\t\t<input type='submit' value='Valider'>
\t</form>
</div>
";
    }

    public function getTemplateName()
    {
        return "PR2LUserBundle:Profil:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 37,  79 => 35,  69 => 27,  63 => 21,  58 => 19,  53 => 17,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
