<?php

/* PR2LSiteBundle:Default:connexion.html.twig */
class __TwigTemplate_33bfcfb31bca456601ebb2d29ebd5ed10ab2f949723d960b9f97d6c6828d2bdd extends Twig_Template
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
        echo " - Connexion";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
\t\t\t\t\t\t<?php

\t\t\t\t\t\tif (is_null(\$_SESSION[\"userCourant\"]))
\t\t\t\t\t\t{
\t\t\t\t\t\t\t\$_SESSION[\"userCourant\"] = NULL;

\t\t\t\t\t\t\t//Récupération de la liste des utilisateurs
\t\t\t\t\t\t\t\$pdo = new Mypdo();
\t\t\t\t\t\t\t\$utilisateurManager = new UtilisateurManager(\$pdo);
\t\t\t\t\t\t\t\$utilisateurs = \$utilisateurManager->getAllUtilisateur();

\t\t\t\t\t\t\t//Première itération dans la page, les champs login et password sont vides
\t\t\t\t\t\t\tif(empty(\$_POST[\"login\"]) && empty(\$_POST[\"password\"]))
\t\t\t\t\t\t\t{

\t\t\t\t\t\t\t?>

<form id=\"form\" method=\"post\">
\tidentifiant : <input type=text name=\"login\"><br>
\tmot de passe : <input type=password name=\"password\"><br>
\t<input type=submit value=\"Valider\" onclick=\"self.location.href='index.php?page=501'\">
</form><br>

\t\t\t\t\t\t\t<?php

\t\t\t\t\t\t\t}
\t\t\t\t\t\t\telse
\t\t\t\t\t\t\t{

\t\t\t\t\t\t\t\t//Deuxième itération dans la base de données
\t\t\t\t\t\t\t\t\$login = \$_POST[\"login\"];
\t\t\t\t\t\t\t\t\$password = \$_POST[\"password\"];

\t\t\t\t\t\t\t\t\$user = false;

\t\t\t\t\t\t\t\t//Récupération de l'utilisateur correspondant au login
\t\t\t\t\t\t\t\tforeach(\$utilisateurs as \$utilisateur){
\t\t\t\t\t\t\t\t\tif(\$login == \$utilisateur->getLogin())
\t\t\t\t\t\t\t\t\t{
\t\t\t\t\t\t\t\t\t\t\$user = \$utilisateur;
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t//Le login existe bien?
\t\t\t\t\t\t\t\tif(\$user != false)
\t\t\t\t\t\t\t\t{
\t\t\t\t\t\t\t\t\t\$mdp = \$user->getPassword();

\t\t\t\t\t\t\t\t\t//Le mot de passe correspond-il?
\t\t\t\t\t\t\t\t\tif(\$password == \$mdp)
\t\t\t\t\t\t\t\t\t{
\t\t\t\t\t\t\t\t\t\techo \"Bonjour \".\$user->getPrenom().\" \".\$user->getNom();
\t\t\t\t\t\t\t\t\t\t\$_SESSION['userCourant'] = \$user;
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\telse
\t\t\t\t\t\t\t\t\t{
\t\t\t\t\t\t\t\t\t\t//le mot de passe est invalide
\t\t\t\t\t\t\t\t\t\techo \"Mauvais mot de passe\";
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\telse
\t\t\t\t\t\t\t\t{
\t\t\t\t\t\t\t\t\t//L'identifiant est incorrecte
\t\t\t\t\t\t\t\t\techo \"Identifiant incorrect\";
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t\telse
\t\t\t\t\t\t{
\t\t\t\t\t\t\techo \"Vous êtes connecté\";
\t\t\t\t\t\t}

\t\t\t\t\t\t?>

";
    }

    public function getTemplateName()
    {
        return "PR2LSiteBundle:Default:connexion.html.twig";
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
