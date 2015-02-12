<?php

/* PR2LSiteBundle:Default:gestionAdmin.html.twig */
class __TwigTemplate_3b4d90468e2648768a52a1939912e14e2e4380d7e490e34a0ce0e1b5d0b17e35 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

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
    <table>
        <tr><th>Nom</th><th>Prénom</th><th>Identifiant</th><th>Droits</th></tr>
        ";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listAdverts"]) ? $context["listAdverts"] : $this->getContext($context, "listAdverts")));
        foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
            // line 10
            echo "        <tr>
            <td>";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "getNom", array(), "method"), "html", null, true);
            echo "</td>
            <td>";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "getPrenom", array(), "method"), "html", null, true);
            echo "</td>
            <td>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "getUsername", array(), "method"), "html", null, true);
            echo "</td>
            ";
            // line 14
            if (($this->getAttribute($context["advert"], "getRoles", array(), "method") == "ROLE_USER")) {
                // line 15
                echo "                <td>Utilisateur</td>
            ";
            } elseif (($this->getAttribute(            // line 16
$context["advert"], "getRoles", array(), "method") == "ROLE_ADMIN")) {
                // line 17
                echo "                <td>Administrateur</td>
            ";
            } elseif (($this->getAttribute(            // line 18
$context["advert"], "getRoles", array(), "method") == "ROLE_R")) {
                // line 19
                echo "                <td>Lecteur</td>
            ";
            } elseif (($this->getAttribute(            // line 20
$context["advert"], "getRoles", array(), "method") == "ROLE_R/W")) {
                // line 21
                echo "                <td>Contributeur</td>
            ";
            } else {
                // line 23
                echo "                <td>Anonyme</td>
            ";
            }
            // line 25
            echo "        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "    </table>

    <div class=\"formulaire\">
        <form method=\"post\" action=\"#\" ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
            ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
            <input type=\"submit\" value=\"Valider\" id=\"boutonform\">
        </form>
    </div>

 ";
        // line 36
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "phrase"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 37
            echo "    <div>
        <br>
        ";
            // line 39
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
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
        return array (  128 => 39,  124 => 37,  120 => 36,  112 => 31,  108 => 30,  103 => 27,  96 => 25,  92 => 23,  88 => 21,  86 => 20,  83 => 19,  81 => 18,  78 => 17,  76 => 16,  73 => 15,  71 => 14,  67 => 13,  63 => 12,  59 => 11,  56 => 10,  52 => 9,  47 => 6,  44 => 5,  37 => 3,  11 => 1,);
    }
}
