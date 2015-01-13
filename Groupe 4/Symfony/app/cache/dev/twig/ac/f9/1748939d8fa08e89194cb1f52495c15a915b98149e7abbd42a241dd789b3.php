<?php

/* PR2LSiteBundle:Default:projets.html.twig */
class __TwigTemplate_acf91748939d8fa08e89194cb1f52495c15a915b98149e7abbd42a241dd789b3 extends Twig_Template
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
        echo " - Projets";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
<article id=\"mission\">
\t<h1>Présentation de l'association PR2L</h1>

\t<img src=\"./image/presPR2L.jpg\" id='imagPres'>
\t<p>L’association PR2L est une association d’intérêt général ouverte à tous qui a pour objectifs :
\t\t<ul>
\t\t\t<li>D’appeler et d’aider à <em>la collecte de documents et archives concernant l’histoire ouvrière, des entreprises et des associations d’économie sociale et des syndicats professionnels</em> en partenariat avec les institutions et organismes intéressés ;</li>

\t\t\t<li>De <em>promouvoir un programme de sauvegarde et de valorisation de ces documents et archives</em> (guides, numérisation partagée de corpus documentaires ou des enquêtes) en liaison avec les Ministères, les chercheurs et les archivistes professionnels de la conservation (archivistes, bibliothécaires, documentalistes….) ;</li>

\t\t\t<li>De <em>conduire des projets fédérateurs</em> (colloques, rencontres, séminaires) à l’échelle régionale, nationale et internationale ;</li>

\t\t\t<li>De <em>contribuer et participer à la diffusion documentaire et pédagogique des ressources collectées disponibles</em>, en utilisant les outils informatiques appropriés.</li>
\t\t</ul>
\t</p>
\t<h1>le Projet du pôle (orientations, objectifs, axes d'actions....) </h1>
\t<p>
\t\tLe Projet de l’association PR2L vise à rassembler toute l’information existant en France et au delà sur les archives des mouvements coopératifs et mutualistes.
\t</p>


\t<p>
\t\t<ol>
\t\t\t<li>Le Projet aura comme axes de travail :</li>
\t\t\t<ul>
\t\t\t\t<li>D’établir une cartographie nationale détaillée des fonds à partir d’un catalogue informatisé ;</li>
\t\t\t\t<li>De mettre à la disposition des chercheurs des sources jusque là difficiles à exploiter, à partir de la numérisation et de la mise en ligne d’un nombre croissant d’archives ;</li>
\t\t\t\t<li>De découvrir, de collecter et de mettre en valeur des nouveaux fonds d’archives ;</li>
\t\t\t\t<li>De susciter, de participer à l’organisation de manifestations en direction du public (journées d’étude, conférences, colloques, expositions….) visant à faire connaître et reconnaître le rôle des mouvements coopératifs et mutualistes dans l’histoire extrêmement riche et trop peu connue du mouvement social.</li>
\t\t\t</ul>
\t</p>
\t<p>
\t\tPour réaliser les actions décrites ci-dessus, le Pôle s’est engagé à utiliser les technologies numériques les plus avancées y compris en créant un portail internet (http://www.pr2l.fr); portail actuellement en reconstruction.</p>
\t<p>
\t\t<li>L'action du pôle revêt plusieurs aspects :</li>

\t\t- appeler et aider à la collecte des documents et archives concernant l’histoire ouvrière, des entreprises et des associations d’économie sociale et des syndicats professionnels en partenariat avec les organismes intéressés ; - promouvoir un programme de sauvegarde et de valorisation de ces documents et archives (guides, numérisation partagée de corpus documentaires ou des enquêtes) en liaison avec les ministères, les chercheurs et les professionnels de la conservation (archivistes, bibliothécaires, documentalistes…); - conduire des projets fédérateurs (colloques, rencontres, séminaires) à l’échelle régionale, nationale et internationale ; - contribuer et participer à la diffusion documentaire et pédagogique des ressources exixtantes et celles découvertes…
\t\t</ol>
\t</p>
</article>

";
    }

    public function getTemplateName()
    {
        return "PR2LSiteBundle:Default:projets.html.twig";
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
