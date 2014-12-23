<?php

/* ::layout.html.twig */
class __TwigTemplate_4453dc18ce41f34f747edbf090a59fb79b379b951a871e45bedf99f09afcf0b1 extends Twig_Template
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
\t\t\t\t<li><a href=\"";
        // line 46
        echo "vieAssociation";
        echo "\">Vie de l'association</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</li>
\t\t<li>
\t\t\t<a href=\"";
        // line 51
        echo "actualites";
        echo "\">ACTUALITES</a> 
\t\t\t<ul>
\t\t\t\t<li><a href=\"";
        // line 53
        echo "actionsEvenements";
        echo "\">Action / Evènements</a>
\t\t\t\t</li>
\t\t\t\t<li><a href=\"";
        // line 55
        echo "quoiDeNeuf";
        echo "\">Quoi de neuf ?</a>
\t\t\t\t</li>
\t\t\t\t<li><a href=\"";
        // line 57
        echo "autourDeNous";
        echo "\">Autour de nous</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</li>
\t\t<li><a href=\"";
        // line 61
        echo "partenaires";
        echo "\">PARTENAIRES</a> 
\t\t\t<ul>
\t\t\t\t<li><a href=\"";
        // line 63
        echo "gererPartenaires";
        echo "\">Gérer les partenaires</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</li>
\t\t<li><a href=\"index.php?page=4\">RESSOURCES</a> 
\t\t\t<ul>
\t\t\t\t<li><a href=\"index.php?page=401\">Catalogue d'archives</a>
\t\t\t\t</li>
\t\t\t\t<li><a href=\"index.php?page=402\">Bibliothèque</a>
\t\t\t\t</li>
\t\t\t\t<li><a href=\"index.php?page=403\">Travaux de recherche</a>
\t\t\t\t</li>
\t\t\t\t<li><a href=\"index.php?page=404\">Nos publications</a>
\t\t\t\t</li>
\t\t\t\t<li><a href=\"index.php?page=405\">Liens utiles</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</li>
\t\t<li><a href=\"index.php?page=5\">CHANTIERS</a> 
\t\t\t<ul>
\t\t\t\t<li><a href=\"index.php?page=501\">Recencement pour la mutualité</a>
\t\t\t\t</li>
\t\t\t\t<li><a href=\"index.php?page=502\">Inventaire de la coopération en Limousin</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</li>
\t\t<li><a href=\"index.php?page=6\">INTRANET</a>
\t\t\t<ul>
\t\t\t<li><a href=\"index.php?page=601\">Connexion</a></li>
\t\t\t<li><a href=\"index.php?page=602\">Creation</a></li>
            <li><a href=\"index.php?page=603\">Gestion des utilisateurs</a></li>
            <li><a href=\"index.php?page=604\">Modification d'informations</a></li>
            <li><a href=\"index.php?page=605\">Déconnexion</a></li>
\t\t</ul>
\t\t</li>
\t</ul>
</nav></div>
<hr/>
  </nav>
  <body>

    ";
        // line 104
        $this->displayBlock('body', $context, $blocks);
        // line 106
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

    // line 104
    public function block_body($context, array $blocks = array())
    {
        // line 105
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
        return array (  205 => 105,  202 => 104,  196 => 12,  182 => 106,  180 => 104,  136 => 63,  131 => 61,  124 => 57,  119 => 55,  114 => 53,  109 => 51,  101 => 46,  96 => 44,  91 => 42,  86 => 40,  81 => 38,  76 => 36,  53 => 16,  46 => 12,  41 => 10,  37 => 9,  32 => 7,  28 => 6,  21 => 1,);
    }
}
