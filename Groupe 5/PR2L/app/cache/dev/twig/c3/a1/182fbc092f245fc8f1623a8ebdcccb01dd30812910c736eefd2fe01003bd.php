<?php

/* ::base.html.twig */
class __TwigTemplate_c3a1182fbc092f245fc8f1623a8ebdcccb01dd30812910c736eefd2fe01003bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'menu' => array($this, 'block_menu'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

  <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

  ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "  
  ";
        // line 16
        $this->displayBlock('javascripts', $context, $blocks);
        // line 21
        echo "</head>

<body>
  <div class=\"container\">
    <div id=\"header\" class=\"jumbotron\">
      <h1>PR2L</h1>
      <p>
        Pôle international de Ressources de Limoges et du Limousin pour l'histoire du monde du travail et de l'économie sociale
      </p>      
    </div>

    <div class=\"row\">
      <nav id=\"menu\" class=\"col-md-3\">
        ";
        // line 34
        $this->displayBlock('menu', $context, $blocks);
        // line 57
        echo "      </nav>
      <div id=\"content\" class=\"col-md-9\">
        ";
        // line 59
        $this->displayBlock('body', $context, $blocks);
        // line 61
        echo "      </div>
    </div>

    <hr>

    <footer>
\t  ";
        // line 67
        $this->displayBlock('footer', $context, $blocks);
        // line 70
        echo "    </footer>
  </div>

</body>
</html>";
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        echo "OC Plateforme";
    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 12
        echo "    ";
        // line 13
        echo "    <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
  ";
    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        // line 17
        echo "    ";
        // line 18
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
  ";
    }

    // line 34
    public function block_menu($context, array $blocks = array())
    {
        // line 35
        echo "        <h3>Menu</h3>
        <ul class=\"nav nav-pills nav-stacked\">
       \t\t<li> 
       \t\t<a href=";
        // line 38
        echo $this->env->getExtension('routing')->getPath("pr2l_user_main");
        echo ">Gestion Utilisateurs</a> 
       \t\t<ul>
       \t\t\t<li> <a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("pr2l_user_add");
        echo "\"> Ajouter un utilisateur </a> </li>
\t\t\t\t<li> <a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("pr2l_user_view_all");
        echo "\">Voir tous les utilisateurs </a> </li>
       \t\t</ul>
       \t\t</li>
       \t\t
       \t\t<li> 
       \t\t<a href=\"\" > Gestion Article </a>
       \t\t<ul>
       \t\t
       \t\t</ul> 
       \t\t</li>
        </ul>
        
        ";
        // line 56
        echo "        ";
    }

    // line 59
    public function block_body($context, array $blocks = array())
    {
        // line 60
        echo "        ";
    }

    // line 67
    public function block_footer($context, array $blocks = array())
    {
        // line 68
        echo "      <p> © ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "</p>
      ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  160 => 68,  157 => 67,  153 => 60,  150 => 59,  146 => 56,  131 => 41,  127 => 40,  122 => 38,  117 => 35,  114 => 34,  108 => 18,  106 => 17,  103 => 16,  98 => 13,  96 => 12,  93 => 11,  87 => 9,  79 => 70,  77 => 67,  69 => 61,  67 => 59,  63 => 57,  61 => 34,  46 => 21,  44 => 16,  41 => 15,  39 => 11,  34 => 9,  25 => 2,);
    }
}
