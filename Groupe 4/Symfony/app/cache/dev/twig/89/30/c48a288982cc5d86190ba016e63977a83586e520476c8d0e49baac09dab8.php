<?php

/* ::layout.html.twig */
class __TwigTemplate_8930c48a288982cc5d86190ba016e63977a83586e520476c8d0e49baac09dab8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE HTML>
<html xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"fr\" lang=\"fr\" ng-app=\"CMS\">
  <head>
    <meta http-equiv=\"content-type\" content=\"text/html; charset=UTF-8\" />

    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/pr2lsite/css/styleSite.css"), "html", null, true);
        echo "\" />
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/pr2lsite/css/styleCMS.css"), "html", null, true);
        echo "\" />
\t
\t<script type=\"text/javascript\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/pr2lsite/js/angular.min.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/pr2lsite/js/app.js"), "html", null, true);
        echo "\"></script>
    
    <title>";
        // line 12
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
  </head>
  
  <header>
  \t<div class=\"eltEntete\"><a href=\"\">\t<img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/pr2lsite/images/logo.png"), "html", null, true);
        echo "\" alt=\"Logo PR2L\" title=\"Logo association PR2L\" />\t</a></div>
\t<div class=\"eltEntete\">
\t\t<strong></bold><em>P</em>ôle international de <br />
\t\t<em>R</em>essources de <br />
\t\t<em>L</em>imoges et du<br />
\t\t<em>L</em>imousin<br />
\t\t<br />
\t\tAssociation pour le recensement <br />
\t\tet la valorisation des fonds d'archives<br />
\t\tdu monde ouvrier</strong>
\t</div>
  </header>
  
  <aside>
  </aside>
  
  <nav>\t
<hr/>
<div><nav>
\t<ul id=\"menu-deroulant\">
\t\t<li><a href=\"";
        // line 36
        echo "accueil";
        echo "\">PR2L</a> 
\t\t\t<ul>
\t\t\t\t<li><a href=\"";
        // line 38
        echo "projet";
        echo "\">Le projet</a>
\t\t\t\t</li>
\t\t\t\t<li><a href=\"";
        // line 40
        echo "fondateurs";
        echo "\">Fondateurs</a>
\t\t\t\t</li>
\t\t\t\t<li><a href=\"";
        // line 42
        echo "revuePresse";
        echo "\">Revue de presse</a>
\t\t\t\t</li>
\t\t\t\t<li><a href=\"";
        // line 44
        echo "adherer";
        echo "\">Adhérer à l'association</a>
\t\t\t\t</li>
\t\t\t\t<li><a
                       .3href=\"";
        // line 47
        echo "vieAssociation";
        echo "\">Vie de l'association</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</li>
\t\t<li>
\t\t\t<a href=\"";
        // line 52
        echo "actualites";
        echo "\">ACTUALITES</a> 
\t\t\t<ul>
\t\t\t\t<li><a href=\"";
        // line 54
        echo "actionsEvenements";
        echo "\">Action / Evènements</a>
\t\t\t\t</li>
\t\t\t\t<li><a href=\"";
        // line 56
        echo "quoiDeNeuf";
        echo "\">Quoi de neuf ?</a>
\t\t\t\t</li>
\t\t\t\t<li><a href=\"";
        // line 58
        echo "autourDeNous";
        echo "\">Autour de nous</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</li>
\t\t<li><a href=\"";
        // line 62
        echo "partenaires";
        echo "\">PARTENAIRES</a> 
\t\t\t<ul>
\t\t\t\t<li><a href=\"";
        // line 64
        echo "gererPartenaires";
        echo "\">Gérer les partenaires</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</li>
\t\t<li><a href=\"";
        // line 68
        echo "ressources";
        echo "\">RESSOURCES</a> 
\t\t\t<ul>
\t\t\t\t<li><a href=\"";
        // line 70
        echo "archives";
        echo "\">Catalogue d'archives</a>
\t\t\t\t</li>
\t\t\t\t<li><a href=\"";
        // line 72
        echo "bibliotheque";
        echo "\">Bibliothèque</a>
\t\t\t\t</li>
\t\t\t\t<li><a href=\"";
        // line 74
        echo "travauxRecherche";
        echo "\">Travaux de recherche</a>
\t\t\t\t</li>
\t\t\t\t<li><a href=\"";
        // line 76
        echo "publications";
        echo "\">Nos publications</a>
\t\t\t\t</li>
\t\t\t\t<li><a href=\"";
        // line 78
        echo "liensUtiles";
        echo "\">Liens utiles</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</li>
\t\t<li><a href=\"";
        // line 82
        echo "chantiers";
        echo "\">CHANTIERS</a> 
\t\t\t<ul>
\t\t\t\t<li><a href=\"";
        // line 84
        echo "recensementMutualite";
        echo "\">Recencement pour la mutualité</a>
\t\t\t\t</li>
\t\t\t\t<li><a href=\"";
        // line 86
        echo "inventaireCooperation";
        echo "\">Inventaire de la coopération en Limousin</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</li>
\t\t<li><a href=\"";
        // line 90
        echo "intranet";
        echo "\">INTRANET</a>
\t\t\t<ul>
\t\t\t<li><a href=\"";
        // line 92
        echo "connexion";
        echo "\">Connexion</a></li>
\t\t\t<li><a href=\"";
        // line 93
        echo "creation";
        echo "\">Creation</a></li>
            <li><a href=\"";
        // line 94
        echo "gestionAdmin";
        echo "\">Gestion des utilisateurs</a></li>
            <li><a href=\"";
        // line 95
        echo "modification";
        echo "\">Modification d'informations</a></li>
            <li><a href=\"";
        // line 96
        echo "deconnexion";
        echo "\">Déconnexion</a></li>
\t\t</ul>
\t\t</li>
\t</ul>
</nav></div>
<hr/>
  </nav>
  <body>

    ";
        // line 105
        $this->displayBlock('body', $context, $blocks);
        // line 107
        echo "
  </body>
  
  <footer>
\tPôle international des<br>
\tRessources de <br>
\tLimoges et du <br>
\tLimousin
  </footer>
</html>
";
    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        echo "PR2L";
    }

    // line 105
    public function block_body($context, array $blocks = array())
    {
        // line 106
        echo "    ";
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  251 => 106,  248 => 105,  242 => 12,  228 => 107,  226 => 105,  214 => 96,  210 => 95,  206 => 94,  202 => 93,  198 => 92,  193 => 90,  186 => 86,  181 => 84,  176 => 82,  169 => 78,  164 => 76,  159 => 74,  154 => 72,  149 => 70,  144 => 68,  137 => 64,  132 => 62,  125 => 58,  120 => 56,  115 => 54,  110 => 52,  102 => 47,  96 => 44,  91 => 42,  86 => 40,  81 => 38,  76 => 36,  53 => 16,  46 => 12,  41 => 10,  37 => 9,  32 => 7,  28 => 6,  21 => 1,);
    }
}
