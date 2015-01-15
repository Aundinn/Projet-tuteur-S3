<?php

/* ::layout.html.twig */
class __TwigTemplate_1d1eb5c40806219f92b4a32d94d0ff8fba5b4161fe0bd7f7d4daa5cf193e1d46 extends Twig_Template
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

<ul>
  ";
        // line 38
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listMenu"]) ? $context["listMenu"] : $this->getContext($context, "listMenu")));
        foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
            // line 39
            echo "    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "getLien7", array(), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "getLibelle", array(), "method"), "html", null, true);
            echo "</a></li>
    <ul>
    \t";
            // line 41
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listMenu2"]) ? $context["listMenu2"] : $this->getContext($context, "listMenu2")));
            foreach ($context['_seq'] as $context["_key"] => $context["menu2"]) {
                // line 42
                echo "    \t<li><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["menu2"], "getLien7", array(), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["menu2"], "getLibelle", array(), "method"), "html", null, true);
                echo "</a></li>
  \t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu2'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "    </ul>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "</ul>
\t
</nav></div>
<hr/>
  </nav>
  
  <body>

    ";
        // line 54
        $this->displayBlock('body', $context, $blocks);
        // line 57
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

    // line 54
    public function block_body($context, array $blocks = array())
    {
        // line 55
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
        return array (  147 => 55,  144 => 54,  138 => 12,  124 => 57,  122 => 54,  112 => 46,  105 => 44,  94 => 42,  90 => 41,  82 => 39,  78 => 38,  53 => 16,  46 => 12,  41 => 10,  37 => 9,  32 => 7,  28 => 6,  21 => 1,);
    }
}
