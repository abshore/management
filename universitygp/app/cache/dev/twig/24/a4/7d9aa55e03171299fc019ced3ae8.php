<?php

/* UserNewsBundle:Nouvelle:affichListeNouvelle.html.twig */
class __TwigTemplate_24a47d9aa55e03171299fc019ced3ae8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"panel panel-info\" style=\"width: 80%; margin-left: 10%;margin-top: 100px;\">
    
    <div class=\"panel-heading \">

        <div style=\"text-align: right\">
             <a class=\"btn btn-primary\" href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("nouvelle_add");
        echo "\">
                Ajouter une nouvelle
            </a>
        </div>
    </div>
    <div class=\"table-responsive\">
    <table class=\"table table-bordered table-striped table-condensed table-hover\">
        <thead>
            <tr>
                 <th>Titre</th>
                <th>Description</th>
                <th>Débuté le</th>
                <th>Fini le</th> 
                <th>Validté</th> 
                <th>Actions</th>
            </tr>
        </thead>
           <tbody>
        ";
        // line 27
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 28
            echo "            <tr>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "libelleNouvelle"), "html", null, true);
            echo "</a></td>
                <td>";
            // line 30
            echo $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "descriptionNouvelle");
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateDebutNouvelle"), "d-m-Y"), "html", null, true);
            echo " </td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateFinNouvelle"), "d-m-Y"), "html", null, true);
            echo "</td>
            <td>";
            // line 33
            if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "isValide") == false)) {
                echo "Non valide";
            } else {
                echo "Valide";
            }
            echo "</td>
              
                <td>
                <ul>
                   
                        <a class=\"btn btn-primary\" href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nouvelle_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">Visualiser</a>
                   
                        <a class=\"btn btn-success\" href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nouvelle_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">Modifier</a>
                        
                        <a class=\"btn btn-warning\" href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nouvelle_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">Supprimer</a>
                   
                </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "        </tbody>
        </table>
        </div>
        
        

    </div>


    ";
    }

    public function getTemplateName()
    {
        return "UserNewsBundle:Nouvelle:affichListeNouvelle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 48,  104 => 42,  99 => 40,  94 => 38,  82 => 33,  78 => 32,  74 => 31,  70 => 30,  66 => 29,  63 => 28,  59 => 27,  38 => 9,  31 => 4,  28 => 2,);
    }
}
