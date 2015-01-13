<?php

/* PR2LUserBundle:Profil:addSuccess.html.twig */
class __TwigTemplate_d2a5e5ae3b9a905b22952d6b543cb3a70c05870605c418174bb89e0ea5c1e018 extends Twig_Template
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
        echo "Ajouter un utilisateur - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " 
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "<h2>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "userPrenom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "userNom", array())), "html", null, true);
        echo " a &eacute;t&eacute; ajout&eacute; !</h2>
<hr>
Voici les d&eacute;tails de ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "userPrenom", array()), "html", null, true);
        echo " : <hr/>

Nom et pr&eacute;nom: ";
        // line 12
        echo twig_escape_filter($this->env, ((twig_upper_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "userNom", array())) . " ") . $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "userPrenom", array())), "html", null, true);
        echo " <br/>  
T&eacute;l&eacute;phone : ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "userTelephone", array()), "html", null, true);
        echo " <br/>
Mail : ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "userEmail", array()), "html", null, true);
        echo " <br/> 
Fonction de l'utilisateur : ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "userFonction", array()), "html", null, true);
        echo " <br/> 
<hr/>
Login : ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "userLogin", array()), "html", null, true);
        echo " <br/>  
Mot de passe : ******** <br/> 
<em>Le mot de passe est crypt&eacute; et ne &ecirctre affich&eacute;. Pensez &agrave le m&eacute;moriser !</em> 
<hr/>
Informations compl&eacute;mentaires : <br/>
";
        // line 22
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "userIsAdmin", array()) != 0)) {
            // line 23
            echo "\t- ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "userPrenom", array()), "html", null, true);
            echo " est administrateur. <br/>
";
        }
        // line 25
        echo "
";
        // line 26
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "userIsModerateur", array()) != 0)) {
            // line 27
            echo "\t- ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "userPrenom", array()), "html", null, true);
            echo " est mod&eacute;rateur. <br/> 
";
        }
        // line 29
        echo "
";
        // line 30
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "userIsContributeur", array()) != 0)) {
            // line 31
            echo "\t- ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "userPrenom", array()), "html", null, true);
            echo " est contributeur. <br/>
";
        }
        // line 33
        echo "
";
        // line 34
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "userIsAdherent", array()) != 0)) {
            // line 35
            echo "\t- ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "userPrenom", array()), "html", null, true);
            echo " est adh&eacute;rent. <br/>
";
        }
        // line 37
        echo "
";
    }

    public function getTemplateName()
    {
        return "PR2LUserBundle:Profil:addSuccess.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 37,  115 => 35,  113 => 34,  110 => 33,  104 => 31,  102 => 30,  99 => 29,  93 => 27,  91 => 26,  88 => 25,  82 => 23,  80 => 22,  72 => 17,  67 => 15,  63 => 14,  59 => 13,  55 => 12,  50 => 10,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
