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
            'menu' => array($this, 'block_menu'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
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
        // line 28
        $this->displayBlock('menu', $context, $blocks);
        // line 34
        echo "      </div>
      <div id=\"content\" class=\"col-md-9\">
        ";
        // line 36
        $this->displayBlock('body', $context, $blocks);
        // line 38
        echo "      </div>
    </div>

    <hr>

    <footer>
\t  ";
        // line 44
        $this->displayBlock('footer', $context, $blocks);
        // line 47
        echo "    </footer>
  </div>

  ";
        // line 50
        $this->displayBlock('javascripts', $context, $blocks);
        // line 55
        echo "
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

    // line 28
    public function block_menu($context, array $blocks = array())
    {
        // line 29
        echo "        <h3>Menu</h3>
        <ul class=\"nav nav-pills nav-stacked\">
       
        </ul>
        ";
    }

    // line 36
    public function block_body($context, array $blocks = array())
    {
        // line 37
        echo "        ";
    }

    // line 44
    public function block_footer($context, array $blocks = array())
    {
        // line 45
        echo "      <p>The sky's the limit © ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " and beyond.</p>
      ";
    }

    // line 50
    public function block_javascripts($context, array $blocks = array())
    {
        // line 51
        echo "    ";
        // line 52
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
  ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  136 => 52,  134 => 51,  131 => 50,  124 => 45,  121 => 44,  117 => 37,  114 => 36,  106 => 29,  103 => 28,  98 => 13,  96 => 12,  93 => 11,  87 => 9,  81 => 55,  79 => 50,  74 => 47,  72 => 44,  64 => 38,  62 => 36,  58 => 34,  56 => 28,  41 => 15,  39 => 11,  34 => 9,  25 => 2,);
    }
}
