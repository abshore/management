<?php

/* GestionUserBundle:Default:dashboard.html.twig */
class __TwigTemplate_f0057d03ec0c68226d31022a162fb8a6 extends Twig_Template
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

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<div  style=\" height: 1000px;min-height: 100%; margin-left: 10%;margin-right: 10%;margin-top: 8%;\" align=\"center\" >

<div class=\"panel panel-info\" style=\"width: 80%; margin-left: 10%;margin-top: 100px;\">
    

    <div class=\"table-responsive\">
    <table class=\"table table-bordered table-striped table-condensed table-hover\">
        <thead>
            <tr>
                 <th>Titre</th>
                <th>Description</th>
                <th>Débuté le</th>
                <th>Fini le</th> 
              
                <th>Actions</th>
            </tr>
        </thead>
           <tbody>
        ";
        // line 24
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 25
            echo "            <tr>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "libelleNouvelle"), "html", null, true);
            echo "</a></td>
                <td>";
            // line 27
            echo $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "descriptionNouvelle");
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateDebutNouvelle"), "d-m-Y"), "html", null, true);
            echo " </td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateFinNouvelle"), "d-m-Y"), "html", null, true);
            echo "</td>
              
                <td>
                <ul>
             <a class=\"btn btn-primary\" href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("infoNouvelle_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">Visualiser</a>
       
           <a class=\"btn btn-primary\" href=\"http://localhost";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "UrlPieceJointe")), "html", null, true);
            echo "\">Télécharger</a>
                </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "        </tbody>
        </table>
        </div>
        
        

    </div>


 
<div class=\"row\">


  <div class=\"col-sm-6 col-md-4\">
    <div class=\"thumbnail\">
      <img src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/superadmin.png"), "html", null, true);
        echo "\"/>
      <div class=\"caption\">
        <h3>Gestion des étudiants</h3>
       
        <p>
       <a  href=\"";
        // line 60
        echo $this->env->getExtension('routing')->getPath("etudiant");
        echo "\"  class=\"btn btn-primary\">Action</a>
        </p>
      </div>
      
    </div>
  </div>


  


  <div class=\"col-sm-6 col-md-4\">
    <div class=\"thumbnail\">
      <img src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/superadmin.png"), "html", null, true);
        echo "\"/>
      <div class=\"caption\">
        <h3>Gestion des admin</h3>
       
        <p>
       <a  href=\"";
        // line 78
        echo $this->env->getExtension('routing')->getPath("admin");
        echo "\"  class=\"btn btn-primary\">Action</a>
        </p>
      </div>
      
    </div>
  </div>




  <div class=\"col-sm-6 col-md-4\">
    <div class=\"thumbnail\">
      <img src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/superadmin.png"), "html", null, true);
        echo "\"/>
      <div class=\"caption\">
        <h3>Gestion des prof</h3>
       
        <p>
       <a  href=\"";
        // line 95
        echo $this->env->getExtension('routing')->getPath("prof");
        echo "\"  class=\"btn btn-primary\">Action</a>
        </p>
      </div>
      
    </div>
  </div>



 </div>



 
   

</div>


    ";
    }

    public function getTemplateName()
    {
        return "GestionUserBundle:Default:dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 95,  157 => 90,  142 => 78,  134 => 73,  118 => 60,  110 => 55,  93 => 40,  82 => 35,  77 => 33,  70 => 29,  66 => 28,  62 => 27,  58 => 26,  55 => 25,  51 => 24,  31 => 6,  28 => 3,);
    }
}
