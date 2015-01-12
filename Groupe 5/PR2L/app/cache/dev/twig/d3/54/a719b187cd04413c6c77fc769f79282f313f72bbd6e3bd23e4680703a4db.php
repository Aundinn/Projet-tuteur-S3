<?php

/* base.html.twig */
class __TwigTemplate_d354a719b187cd04413c6c77fc769f79282f313f72bbd6e3bd23e4680703a4db extends Twig_Template
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
      <div id=\"menu\" class=\"col-md-3\">
        ";
        // line 34
        $this->displayBlock('menu', $context, $blocks);
        // line 40
        echo "      </div>
      <div id=\"content\" class=\"col-md-9\">
        ";
        // line 42
        $this->displayBlock('body', $context, $blocks);
        // line 44
        echo "      </div>
    </div>

    <hr>

    <footer>
\t  ";
        // line 50
        $this->displayBlock('footer', $context, $blocks);
        // line 53
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
       
        </ul>
        ";
    }

    // line 42
    public function block_body($context, array $blocks = array())
    {
        // line 43
        echo "        ";
    }

    // line 50
    public function block_footer($context, array $blocks = array())
    {
        // line 51
        echo "      <p> © ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "</p>
      ";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  135 => 51,  132 => 50,  128 => 43,  125 => 42,  117 => 35,  114 => 34,  108 => 18,  106 => 17,  103 => 16,  98 => 13,  96 => 12,  93 => 11,  87 => 9,  79 => 53,  77 => 50,  69 => 44,  67 => 42,  63 => 40,  61 => 34,  46 => 21,  44 => 16,  41 => 15,  39 => 11,  34 => 9,  25 => 2,);
    }
}
