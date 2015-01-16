<?php

/* PR2LSiteBundle:Default:actionsEvenements.html.twig */
class __TwigTemplate_2cc68c6d4823b7b798bbd3449905204c35d31722dd9df89748fb25261526f296 extends Twig_Template
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
        echo " - Actions";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<h1>Manifestations et actions prévues en 2014 et 2015 </h1>
<h2>ACTIONS PROGRAMMEES EN 2014-2015</h2>
<img src=\"http://pr2l.fr/sites/default/files/styles/large/public/field/image/DSCN2937.JPG?itok=8wxgQc9T\">
<ul>
\t<li><em>Soirée d'étude \"utopies sociales au XIXème siècle en Haute Vienne: les saints-simonien\" Salle des assemblées du Conseil Général de la Haute Vienne, le mercredi 5 novembre à partir de 18h00, 11 rue François Chénieux à Limoges.</em></li>
\t<li><em>Colloque : \" Deux siècles d'économie sociale et solidaire avec les Corréziens\" -Les grandes figures corréziènnes de l'économie sociale de Firmin Marbeau à René Teulade-. Lieu : Hôtel du Département de la Corrèze à Tulle dans l'amphithéâtre le jeudi 20 novembre 2014 à 14 heures. Intervenants : Anne-Valérie Etendard, Gilbert Beaubatie, Michel Dreyfus...</em></li>
\t<li>Mise en place à St Junien d'un évènement sur l'USO (Union Syndicale Ouvrière) \"L'Union Syndicale Ouvrière: une expérimentation efficiente de l'économie sociale à St Junien.\"</li>
\t<li>Table ronde : \"Aux racines de l'économie sociale\". Lieu : Creuse. Date : mardi 13 janvier 2015 au Pôle Domotique de Guéret. Intervenants : Christian Laurance, Michel Manville, Michel Lulek, coopérateurs du monde agricole.</li>
\t<li>Exposition à la BFM de Limoges avec comme thèmes, l'économie sociale, l'inventaire des archives et bâtiments, la présentation de PR2L. Commissaire de l'exposition prévue en 2016 : Dominique DANTHIEUX.</li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "PR2LSiteBundle:Default:actionsEvenements.html.twig";
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
