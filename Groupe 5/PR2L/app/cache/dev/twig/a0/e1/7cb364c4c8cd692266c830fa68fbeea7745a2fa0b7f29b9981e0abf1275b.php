<?php

/* PR2LUserBundle:Profil:view.html.twig */
class __TwigTemplate_a0e17cb364c4c8cd692266c830fa68fbeea7745a2fa0b7f29b9981e0abf1275b extends Twig_Template
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
        echo "<h2>D&eacute;tails de ";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "userPrenom", array()) . " ") . twig_upper_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "userNom", array()))), "html", null, true);
        echo "</h2>
<hr/>

Nom et pr&eacute;nom: ";
        // line 11
        echo twig_escape_filter($this->env, ((twig_upper_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "userNom", array())) . " ") . $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "userPrenom", array())), "html", null, true);
        echo " <br/>  
T&eacute;l&eacute;phone : ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "userTelephone", array()), "html", null, true);
        echo " <br/>
Mail : ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "userEmail", array()), "html", null, true);
        echo " <br/> 
Fonction de l'utilisateur : ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "userFonction", array()), "html", null, true);
        echo " <br/> 
<hr/>
Login : ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "userLogin", array()), "html", null, true);
        echo " <br/>  
Mot de passe : ******** <br/> 
<em>Le mot de passe est crypt&eacute; et ne &ecirctre affich&eacute;. Pensez &agrave le m&eacute;moriser !</em> 
<hr/>
Informations compl&eacute;mentaires : <br/>
";
        // line 21
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "userIsAdmin", array()) != 0)) {
            // line 22
            echo "\t- ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "userPrenom", array()), "html", null, true);
            echo " est administrateur. <br/>
";
        }
        // line 24
        echo "
";
        // line 25
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "userIsModerateur", array()) != 0)) {
            // line 26
            echo "\t- ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "userPrenom", array()), "html", null, true);
            echo " est mod&eacute;rateur. <br/> 
";
        }
        // line 28
        echo "
";
        // line 29
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "userIsContributeur", array()) != 0)) {
            // line 30
            echo "\t- ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "userPrenom", array()), "html", null, true);
            echo " est contributeur. <br/>
";
        }
        // line 32
        echo "
";
        // line 33
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "userIsAdherent", array()) != 0)) {
            // line 34
            echo "\t- ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "userPrenom", array()), "html", null, true);
            echo " est adh&eacute;rent. <br/>
";
        }
        // line 36
        echo "
";
    }

    public function getTemplateName()
    {
        return "PR2LUserBundle:Profil:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 36,  109 => 34,  107 => 33,  104 => 32,  98 => 30,  96 => 29,  93 => 28,  87 => 26,  85 => 25,  82 => 24,  76 => 22,  74 => 21,  66 => 16,  61 => 14,  57 => 13,  53 => 12,  49 => 11,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
