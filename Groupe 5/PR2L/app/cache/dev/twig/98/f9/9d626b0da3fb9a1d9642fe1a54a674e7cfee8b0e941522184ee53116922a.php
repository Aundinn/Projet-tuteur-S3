<?php

/* PR2LsiteBundle:Default:index.html.twig */
class __TwigTemplate_98f99d626b0da3fb9a1d9642fe1a54a674e7cfee8b0e941522184ee53116922a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'menu' => array($this, 'block_menu'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
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

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Accueil";
    }

    // line 7
    public function block_menu($context, array $blocks = array())
    {
        echo " 
<hr/>
<div><nav>
\t<ul id=\"menu-deroulant\">
\t\t<li><a href=\"index.php?page=1\">PR2L</a> 
\t\t\t<ul>
\t\t\t\t<li><a href=\"index.php?page=101\">Le projet</a>
\t\t\t\t</li>
\t\t\t\t<li><a href=\"index.php?page=102\">Fondateurs</a>
\t\t\t\t</li>
\t\t\t\t<li><a href=\"index.php?page=103\">Revue de presse</a>
\t\t\t\t</li>
\t\t\t\t<li><a href=\"index.php?page=104\">Adhérer à l'association</a>
\t\t\t\t</li>
\t\t\t\t<li><a href=\"index.php?page=105\">Vie de l'association</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</li>
\t\t<li>
\t\t\t<a href=\"index.php?page=2\">ACTUALITES</a> 
\t\t\t<ul>
\t\t\t\t<li><a href=\"index.php?page=201\">Action / Evènements</a>
\t\t\t\t</li>
\t\t\t\t<li><a href=\"index.php?page=202\">Quoi de neuf?</a>
\t\t\t\t</li>
\t\t\t\t<li><a href=\"index.php?page=203\">Autour de nous?</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</li>
\t\t<li><a href=\"index.php?page=3\">PARTENAIRES</a> 
\t\t\t<ul>
\t\t\t\t<li><a href=\"index.php?page=301\">Gérer les partenaires</a>
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
";
    }

    // line 79
    public function block_body($context, array $blocks = array())
    {
        // line 80
        echo "  
";
    }

    // line 84
    public function block_footer($context, array $blocks = array())
    {
        // line 85
        echo "    
\tPôle international des<br>
\tRessources de <br>
\tLimoges et du <br>
\tLimousin
";
    }

    public function getTemplateName()
    {
        return "PR2LsiteBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 85,  121 => 84,  116 => 80,  113 => 79,  38 => 7,  31 => 5,);
    }
}
