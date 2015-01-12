<?php

/* PR2LSiteBundle:Default:gestionAdmin.html.twig */
class __TwigTemplate_7d2cd1af55bfa8c0d28a8581dc4c542ecae992abf70a96d73a67485488fba812 extends Twig_Template
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
        echo " - Gestion des utilisateurs";
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
        if(empty(\$_POST[\"personne\"]) && empty(\$_POST[\"droits\"]))
        {
            \$pdo = new Mypdo();
\t        \$utilisateurManager = new UtilisateurManager(\$pdo);
            \$utilisateurs = \$utilisateurManager->getAllUtilisateur();
?>
                <table  style=\"border : 1px solid black\">
                    <tr><th>Nom</th><th>Prénom</th><th>login</th><th>droits</th></tr>
<?php                
                    foreach(\$utilisateurs as \$utilisateur)
                    {
                        ?>
                            <tr>
                                <td  style=\"border : 1px solid black\"><?php echo \$utilisateur->getNom()?> </td>
                                <td  style=\"border : 1px solid black\"><?php echo \$utilisateur->getPrenom()?></td>
                                <td  style=\"border : 1px solid black\"><?php echo \$utilisateur->getLogin()?></td>
                                <td  style=\"border : 1px solid black\"><?php echo \$utilisateur->getDroits() ?></td>
                            </tr>
                        <?php
                    }
?>
                </table><br/>

                 <form id=\"form\" method=\"post\">
                        Saisir l'identifiant de la personne à modifier : <input type=text name=\"personne\"></textarea>
                        <input type=submit value=\"Valider\" onclick=\"self.location.href='./GestionAdmin.inc.php'\">
                </form>
                
<?php
        }else if(empty(\$_POST[\"droits\"])){
            \$pdo = new Mypdo();
\t        \$utilisateurManager = new UtilisateurManager(\$pdo);
            \$utilisateurs = \$utilisateurManager->getAllUtilisateur();
            
            \$_SESSION['user'] = false;
            foreach(\$utilisateurs as \$utilisateur){
                if(\$_POST[\"personne\"] == \$utilisateur->getLogin())
                {
                    \$_SESSION['user'] = \$utilisateur;
                }
            }
            
            if(\$_SESSION['user'] != false)
            {
?>
                <form name=\"changeDroits\" method=\"post\">
                    <table  style=\"border : 1px solid black\">
                            <tr><th>Nom</th><th>Prénom</th><th>login</th><th>droits</th></tr>
                            <tr><td style=\"border : 1px solid black\"><?php echo \$_SESSION['user']->getNom();?></td>
                                <td style=\"border : 1px solid black\"><?php echo \$_SESSION['user']->getPrenom();?></td>
                                <td style=\"border : 1px solid black\"><?php echo \$_SESSION['user']->getLogin();?></td>
                                <td style=\"border : 1px solid black\">
                                    <select name=\"droits\">
                                        <option value = \"<?php echo \$_SESSION['user']->getDroits() ?>\"><?php echo \$_SESSION['user']->getDroits() ?></option>
                                        <option value = \"aucun\">aucun</option>
                                        <option value = \"lecture\">lecture</option>
                                        <option value = \"lecture/ecriture\">lecture / ecriture</option>
                                        <option value = \"admin\">administrateur</option>
                                    </select>
                                </td>
                            </tr>
                    </table>
                    <input type=submit value=\"Valider\" onclick=\"self.location.href='./GestionAdmin.inc.php'\">
                </form>
<?php
            }
            else
            {
                echo \"Cet utilisateur n'existe pas\";
            }
        }else{
            \$_SESSION['user']->setDroits(\$_POST[\"droits\"]);
            \$pdo = new Mypdo();
            \$utilisateurManager = new UtilisateurManager(\$pdo);
            \$retour = \$utilisateurManager->update(\$_SESSION['user']);
            
            echo \"Les droits de cette personne ont été mis à jour\";
        }
    }
}
?>

";
    }

    public function getTemplateName()
    {
        return "PR2LSiteBundle:Default:gestionAdmin.html.twig";
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
