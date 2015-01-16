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

<ul id=\"menu-deroulant\">
    ";
        // line 38
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("PR2LSiteBundle:Menu:menu"));
        echo "
</ul>
\t
</nav></div>
<hr/>
  </nav>
  
  <body>

    ";
        // line 47
        $this->displayBlock('body', $context, $blocks);
        // line 50
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

    // line 47
    public function block_body($context, array $blocks = array())
    {
        // line 48
        echo "     
    ";
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
        return array (  132 => 48,  129 => 47,  123 => 12,  92 => 50,  90 => 47,  78 => 38,  53 => 16,  46 => 12,  41 => 10,  37 => 9,  32 => 7,  28 => 6,  21 => 1,);
    }
}
