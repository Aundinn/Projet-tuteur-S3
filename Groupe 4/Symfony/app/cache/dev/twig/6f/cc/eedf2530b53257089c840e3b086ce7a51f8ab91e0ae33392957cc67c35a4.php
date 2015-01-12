<?php

/* PR2LSiteBundle:Default:creation.html.twig */
class __TwigTemplate_6fcceedf2530b53257089c840e3b086ce7a51f8ab91e0ae33392957cc67c35a4 extends Twig_Template
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
        echo " - Création";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
<?php
if (!(is_null(\$_SESSION[\"userCourant\"])))
{
    if (\$_SESSION[\"userCourant\"]->getDroits() == \"admin\")
    {
        // le login, le mot de passe, le nom, le prenom ne sont pas saisies
        if(empty(\$_POST[\"login\"]) || empty(\$_POST[\"password1\"]) || empty(\$_POST[\"nom\"]) || empty(\$_POST[\"prenom\"]))
        {
        ?>
            <!--formulaire de saisie --> 
            <form id=\"form\" method=\"post\">
                nom : <input type=text name=\"nom\"></textarea><br/>
                prenom : <input type=text name=\"prenom\"></textarea><br/>
                login : <input type=text name=\"login\"></textarea><br/>
                mot de passe : <input type=password name=\"password1\"></textarea><br/>
                <!-- ressaisir le mot de passe : <textarea name=\"password2\"></textarea><br/>-->
                droits : <select name=\"droits\">
                            <option value = \"aucun\">Aucun</option>
                            <option value = \"lecture\">Lecture</option>
                            <option value = \"lecture/ecriture\">Lecture / Ecriture</option>
                            <option value = \"admin\">Administrateur</option>
                         </select><br/>
            <input type=submit value=\"Valider\" onclick=\"self.location.href='Creation.inc.php'\"><br/>
        <?php
        }
        else
        {
            // deuxième itération, tous les champs sont saisis

            // Connexion à la base
            \$pdo = new Mypdo();
            \$utilisateur = new Utilisateur(array(
               'login'=>\$_POST[\"login\"],
               'password'=>\$_POST[\"password1\"],
               'nom'=>\$_POST[\"nom\"],
               'prenom'=>\$_POST[\"prenom\"],
               'droits'=>\$_POST[\"droits\"]    
            ));

            //Création d'une nouvelle instance de classe
            \$utilisateurManager = new UtilisateurManager(\$pdo);
            \$retour = \$utilisateurManager->add(\$utilisateur);
            if(\$retour != 0){
                echo \"Utilisateur ajouté\";
            }else{
                echo \"Erreur\";
            }
        }
    }
    else
    {
        echo \"Vous n'avez pas accès à cette page\";
    }
}
else
{
    echo \"Vous n'avez pas accès à cette page\";
}
?>

";
    }

    public function getTemplateName()
    {
        return "PR2LSiteBundle:Default:creation.html.twig";
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
