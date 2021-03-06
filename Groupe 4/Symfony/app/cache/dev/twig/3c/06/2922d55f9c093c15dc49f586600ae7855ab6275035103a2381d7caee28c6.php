<?php

/* PR2LSiteBundle:Default:archives.html.twig */
class __TwigTemplate_3c062922d55f9c093c15dc49f586600ae7855ab6275035103a2381d7caee28c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

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
        echo " - Archives";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "

<div class=\"cmsEntier\" ng-controller=\"TabController as tab\">


\t\t\t<div class=\"nonEdition\" ng-show=\"tab.isSet(1)\">
\t\t\t\t<button class=\"boutonGris\" name=\"passage en mode édition\" href ng-click=\"tab.setTab(2)\">Ajouter un article</button>
\t\t\t</div>
\t\t\t<form name=\"formArticle\" class=\"edition\" ng-show=\"tab.isSet(2)\" ng-controller=\"ArticleController as artCtrl\" ng-submit=\"artCtrl.addArticle(articles)\">
\t\t\t\t<!-- Edition -->
\t\t\t\t<div class=\"contenu\">
\t\t            <div class=\"zoneContenu\">
\t\t\t\t\t    <ul  style=\"list-style-type: none;\">
\t\t\t\t\t      <li ng-repeat=\"element in artCtrl.article.elements\" style=\"margin-bottom:15px;\">
\t\t\t\t\t      \t[<a href ng-click=\"artCtrl.article.elements.splice(\$index, 1)\">X</a>]
\t\t\t\t\t      \t<select ng-model=\"element.type\" ng-options=\"types for types in ['Titre', 'Auteur', 'Date', 'Paragraphe', 'Image', 'Lien']\">
\t\t\t\t\t      \t\t<option></option>
\t\t\t\t\t      \t</select>
\t\t\t\t\t      \t<div ng-switch on=\"element.type\" style=\"display:inline-block;\">
\t\t\t\t\t      \t\t<div ng-switch-when=\"Titre\">
\t\t\t\t\t      \t\t\t<input type=\"text\" ng-model=\"element.contenu\" size=\"50\" required>
\t\t\t\t\t      \t\t</div>
\t\t\t\t\t      \t\t<div ng-switch-when=\"Auteur\">
\t\t\t\t\t      \t\t\t<input type=\"text\" ng-model=\"element.contenu\" placeholder=\"Prénom Nom\" required>
\t\t\t\t\t      \t\t</div>
\t\t\t\t\t      \t\t<div ng-switch-when=\"Date\">
\t\t\t\t\t      \t\t\t<input type=\"text\" ng-model=\"element.contenu\" placeholder=\"jj/mm/aaaa\" pattern=\"\\d{1,2}/\\d{1,2}/\\d{4}\" required>
\t\t\t\t\t      \t\t</div>
\t\t\t\t\t      \t\t<div ng-switch-when=\"Paragraphe\">
\t\t\t\t\t      \t\t\t<textarea ng-model=\"element.contenu\" placeholder=\"Saisissez votre texte\" ... required></textarea>
\t\t\t\t\t      \t\t</div>
\t\t\t\t\t      \t\t<div ng-switch-when=\"Image\">
\t\t\t\t\t      \t\t\t<input type=\"text\" ng-model=\"element.contenu\" required>
\t\t\t\t\t      \t\t</div>
\t\t\t\t\t      \t\t<div ng-switch-when=\"Lien\">
\t\t\t\t\t      \t\t\t<input type=\"text\" ng-model=\"element.contenu\" required>
\t\t\t\t\t      \t\t</div>
\t\t\t\t\t      \t</div>
\t\t\t\t\t        <!--<input ng-model=\"element.contenu\"> -->
\t\t\t\t\t      </li>
\t\t\t\t\t      <br/>
\t\t\t\t\t      <li>
\t\t\t\t\t        [<a href ng-click=\"artCtrl.article.elements.push({})\">Ajouter</a>]
\t\t\t\t\t      </li>
\t\t\t\t\t    </ul>
\t\t\t\t\t\t
\t\t            </div>
\t\t\t\t  
\t\t\t\t    <div class=\"validerAnnulerContenu\">
\t\t\t\t\t\t<button type=\"submit\" name=\"valider\" href ng-click=\"tab.check(formArticle.\$valid)\">Valider</button>
\t\t          \t\t<button name=\"annuler\" href ng-click=\"tab.setTab(1)\">Annuler</button>
\t\t            </div>
\t        \t</div>

\t        \t<!-- Prévisualisation de l'article en cours d'edition -->
\t\t\t\t<div>
\t\t\t\t\t<h1 style=\"text-align:center;\">Prévisualisation</h1>
\t\t\t\t\t<div ng-repeat=\"element in artCtrl.article.elements\">
\t\t\t\t\t\t<div ng-switch on=\"element.type\">
\t\t\t\t\t\t\t<div ng-switch-when=\"Titre\">
\t\t\t\t\t\t\t\t<h3>";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), "contenu", array()), "html", null, true);
        echo "</h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div ng-switch-when=\"Auteur\">
\t\t\t\t\t\t\t\t<font color=\"grey\">Par ";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), "contenu", array()), "html", null, true);
        echo "</font>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div ng-switch-when=\"Date\">
\t\t\t\t\t\t\t\t<i>Le ";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), "contenu", array()), "html", null, true);
        echo "</i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div ng-switch-when=\"Paragraphe\">
\t\t\t\t\t\t\t\t<p>&nbsp&nbsp&nbsp";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), "contenu", array()), "html", null, true);
        echo "</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div ng-switch-when=\"Image\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), "contenu", array()), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div ng-switch-when=\"Lien\">
\t\t\t\t\t\t\t\t<a href=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), "contenu", array()), "html", null, true);
        echo "\" target=\"_blank\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), "contenu", array()), "html", null, true);
        echo "</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</form>

\t\t\t<!-- Autres articles -->
\t\t\t<div class=\"article\" ng-repeat=\"article in articles\">
\t\t\t\t<div ng-repeat=\"element in article.elements\">
\t\t\t\t\t<div ng-switch on=\"element.type\">
\t\t\t\t\t\t<div ng-switch-when=\"Titre\">
\t\t\t\t\t\t\t<h3>";
        // line 93
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), "contenu", array()), "html", null, true);
        echo "</h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div ng-switch-when=\"Auteur\">
\t\t\t\t\t\t\t<font color=\"grey\">Par ";
        // line 96
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), "contenu", array()), "html", null, true);
        echo "</font>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div ng-switch-when=\"Date\">
\t\t\t\t\t\t\t<i>Le ";
        // line 99
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), "contenu", array()), "html", null, true);
        echo "</i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div ng-switch-when=\"Paragraphe\">
\t\t\t\t\t\t\t<p>&nbsp&nbsp&nbsp";
        // line 102
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), "contenu", array()), "html", null, true);
        echo "</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div ng-switch-when=\"Image\">
\t\t\t\t\t\t\t<img src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), "contenu", array()), "html", null, true);
        echo "\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div ng-switch-when=\"Lien\">
\t\t\t\t\t\t\t<a href=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), "contenu", array()), "html", null, true);
        echo "\" target=\"_blank\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), "contenu", array()), "html", null, true);
        echo "</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

";
    }

    public function getTemplateName()
    {
        return "PR2LSiteBundle:Default:archives.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 108,  180 => 105,  174 => 102,  168 => 99,  162 => 96,  156 => 93,  139 => 81,  133 => 78,  127 => 75,  121 => 72,  115 => 69,  109 => 66,  47 => 6,  44 => 5,  37 => 3,  11 => 1,);
    }
}
