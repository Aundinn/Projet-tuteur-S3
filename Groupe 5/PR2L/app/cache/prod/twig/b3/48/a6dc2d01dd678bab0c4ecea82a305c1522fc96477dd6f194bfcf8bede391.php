<?php

/* PR2LUserBundle:Profil:formArticle.html.twig */
class __TwigTemplate_b348a6dc2d01dd678bab0c4ecea82a305c1522fc96477dd6f194bfcf8bede391 extends Twig_Template
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
        echo "Ajouter un article - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " 
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "
\t<h3> Ajouter un article.</h3>

\t
\t<div>
\t\t<form method=\"post\" action=\"#\">
\t\t\t<label for='typeArticle'>Type d'article :</label> 
\t\t\t<select ame='typeArticle' id='typeArticle'>
\t\t\t\t<option value='news'>News (privée)</option>
\t\t\t\t<option value='article'>Article</option>
\t\t\t</select>

\t\t\t<label for='ajout_composant'> Ajouter :</label> <select
\t\t\t\tname='ajout_composant' id='ajout_composant'>
\t\t\t\t<option value='titre'>Titre</option>
\t\t\t\t<option value='auteur'>Auteur</option>
\t\t\t\t<option value='paragraphe'>Paragraphe</option>
\t\t\t\t<option value='sousTitre'>Sous-titre</option>
\t\t\t\t<option value='citation'>Citation</option>
\t\t\t\t<option value='lieu'>Lieu</option>
\t\t\t\t<option value='tableau'> Tableau </option>
\t\t\t\t<option value='carousel'> Carousel</option>
\t\t\t</select> <br /> <label for='priorite'>Priorité de l'article :</label>
\t\t\t<select name=priorite ' id='priorite'>
\t\t\t\t<option value='basse'>Basse</option>
\t\t\t\t<option value='moyenne'>Moyenne</option>
\t\t\t\t<option value='haute'>Haute</option>
\t\t\t</select> <br /> <input type='submit' value='Valider' />
\t\t</form>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "PR2LUserBundle:Profil:formArticle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
