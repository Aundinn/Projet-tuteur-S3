<?php

/* PR2LSiteBundle:Default:archives.html.twig */
class __TwigTemplate_51438d334ceb77c61acb996fab6525f1bfb335f03c234d8baf2e0118e27cadf0 extends Twig_Template
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
        echo " - Archives";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
<div ng-controller=\"TabController as tab\">


\t\t\t<div class=\"nonEdition\" ng-show=\"tab.isSet(1)\">
\t\t\t\t<button class=\"boutonGris\" name=\"passage en mode édition\" href ng-click=\"tab.setTab(2)\">Ajouter un article</button>
\t\t\t</div>
\t\t\t<form name=\"formArticle\" class=\"edition\" ng-show=\"tab.isSet(2)\" ng-controller=\"ArticleController as artCtrl\" ng-submit=\"artCtrl.addArticle(articles)\">
\t\t\t\t<!-- Edition -->
                <div class=\"zoneContenu\">
                    <ul  style=\"list-style-type: none;\">
                      <li ng-repeat=\"element in artCtrl.article.elements\" style=\"margin-bottom:15px;\">
                        <a class=\"boutonEdition\" href ng-click=\"artCtrl.article.elements.splice(\$index, 1)\">X</a>
                        <div class=\"selectType\">
                            <select ng-model=\"element.type\" ng-options=\"types for types in ['Titre', 'Auteur', 'Date', 'Paragraphe', 'Image', 'Lien']\">
                                <option></option>
                            </select>
                        </div>
                        <div ng-switch on=\"element.type\" style=\"display:inline-block;\">
                            <div ng-switch-when=\"Titre\">
                                <input type=\"text\" ng-model=\"element.contenu\" size=\"50\" required>
                            </div>
                            <div ng-switch-when=\"Auteur\">
                                <input type=\"text\" ng-model=\"element.contenu\" placeholder=\"Prénom Nom\" required>
                            </div>
                            <div ng-switch-when=\"Date\">
                                <input type=\"text\" ng-model=\"element.contenu\" placeholder=\"jj/mm/aaaa\" pattern=\"\\d{1,2}/\\d{1,2}/\\d{4}\" required>
                            </div>
                            <div ng-switch-when=\"Paragraphe\">
                                <textarea ng-model=\"element.contenu\" placeholder=\"Saisissez votre texte ...\" required></textarea>
                            </div>
                            <div ng-switch-when=\"Image\">
                                <input type=\"text\" ng-model=\"element.contenu\" required>
                            </div>
                            <div ng-switch-when=\"Lien\">
                                <input type=\"text\" ng-model=\"element.contenu\" required>
                            </div>
                        </div>
                        <!--<input ng-model=\"element.contenu\"> -->
                      </li>
                      <br/>
                      <li>
                        <a class=\"boutonEdition\" href ng-click=\"artCtrl.article.elements.push({})\">Ajouter</a>
                      </li>
                    </ul>

                </div>

                <div class=\"validerAnnulerContenu\">
                    <button class=\"boutonEdition\" type=\"submit\" name=\"valider\" href ng-click=\"tab.setTab(1)\">Valider</button>
                    <button class=\"boutonEdition\" type=\"reset\" name=\"annuler\" href ng-click=\"tab.setTab(1)\">Annuler</button>
                </div>

\t        \t<!-- Prévisualisation de l'article en cours d'edition -->
\t\t\t\t<div>
\t\t\t\t\t<h1 style=\"text-align:center;\">Prévisualisation</h1>
\t\t\t\t\t<div ng-repeat=\"element in artCtrl.article.elements\">
\t\t\t\t\t\t<div ng-switch on=\"element.type\">
\t\t\t\t\t\t\t<div ng-switch-when=\"Titre\">
\t\t\t\t\t\t\t\t<h3>{[{element.contenu}]}</h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div ng-switch-when=\"Auteur\">
\t\t\t\t\t\t\t\t<font color=\"grey\">Par {[{element.contenu}]}</font>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div ng-switch-when=\"Date\">
\t\t\t\t\t\t\t\t<i>Le {[{element.contenu}]}</i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div ng-switch-when=\"Paragraphe\">
\t\t\t\t\t\t\t\t<p>&nbsp&nbsp&nbsp{[{element.contenu}]}</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div ng-switch-when=\"Image\">
\t\t\t\t\t\t\t\t<img src=\"{[{element.contenu}]}\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div ng-switch-when=\"Lien\">
\t\t\t\t\t\t\t\t<a href=\"{[{element.contenu}]}\" target=\"_blank\">{[{element.contenu}]}</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</form>

\t\t\t<!-- Autres articles -->
            <hr>
\t\t\t<div class=\"article\" ng-repeat=\"article in articles\">
\t\t\t\t<div ng-repeat=\"element in article.elements\">
\t\t\t\t\t<div ng-switch on=\"element.type\">
\t\t\t\t\t\t<div ng-switch-when=\"Titre\">
\t\t\t\t\t\t\t<h3>{[{element.contenu}]}</h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div ng-switch-when=\"Auteur\">
\t\t\t\t\t\t\t<font color=\"grey\">Par {[{element.contenu}]}</font>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div ng-switch-when=\"Date\">
\t\t\t\t\t\t\t<i>Le {[{element.contenu}]}</i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div ng-switch-when=\"Paragraphe\">
\t\t\t\t\t\t\t<p>&nbsp&nbsp&nbsp{[{element.contenu}]}</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div ng-switch-when=\"Image\">
\t\t\t\t\t\t\t<img src=\"{[{element.contenu}]}\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div ng-switch-when=\"Lien\">
\t\t\t\t\t\t\t<a href=\"{[{element.contenu}]}\" target=\"_blank\">{[{element.contenu}]}</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
                <hr>
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
        return array (  39 => 6,  36 => 5,  29 => 3,);
    }
}
