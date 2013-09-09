<?php

/* GestionUserBundle:Admin:index.html.twig */
class __TwigTemplate_7ebe79a6a39e631493c679909ac4f73b extends Twig_Template
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
        // line 4
        echo "<div style=\"width: 80%; margin-left: 10%;margin-top: 50px;\" class=\"panel panel-primary\">
  <div class=\"panel-heading\">
    <h3 class=\"panel-title\">Moteur de recherche</h3>
  </div>
  <div class=\"panel-body\">
    <form  class=\"form-inline\" role=\"form\" action=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("username");
        echo "\" method=\"post\">
        <div class=\"form-group\">
          <input type=\"text\" class=\"form-control\" name=\"username\" placeholder=\"Search\">
          
 </div>
            <div class=\"col-lg-3\"> 
            <select name=\"recherche\" class=\"form-control\">
                <option value=\"username\">Username</option>
                <option value=\"nom\">Nom</option>
                <option value=\"prenom\">Prenom</option>
                <option value=\"email\">Email</option>
                
</select>
</div>
            <button class=\"btn btn-default\" type=\"submit\">Chercher</button>
        </form>
  </div>
</div>



<div class=\"panel panel-info\" style=\"width: 80%; margin-left: 10%;margin-top: 100px;\">
    
    <div class=\"panel-heading \">
        <div style=\"text-align: left; float: left; text-decoration: underline;font-size: larger\">Liste des admin</div>
        <div style=\"text-align: right\">
             <a class=\"btn btn-primary\" href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("admin_registration");
        echo "\">
                Add Admin
            </a>
        </div>
    </div>
    <div class=\"table-responsive\">
    <table class=\"table table-bordered table-striped table-condensed table-hover\">
        <thead>
            <tr>
                 <th>Username</th>
                <th>Email</th>
                <th>Enabled</th>
                <th>Locked</th>
                <th>Expired</th>
                <th>Expiresat</th>
                <th>Nom</th>
                <th>Prenom</th>
                
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
       ";
        // line 57
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 58
            echo "            <tr>
                <td><a href=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "username"), "html", null, true);
            echo "</a></td>
                 <td>";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "email"), "html", null, true);
            echo "</td>
                <td>";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "enabled"), "html", null, true);
            echo "</td>
                <td>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "locked"), "html", null, true);
            echo "</td>
                <td>";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "expired"), "html", null, true);
            echo "</td>
                <td>";
            // line 64
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "expiresAt")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "expiresAt"), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
               <td>";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nom"), "html", null, true);
            echo "</td>
                <td>";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "prenom"), "html", null, true);
            echo "</td>
               
            <td>
                <ul>
                 
                        <a class=\"btn btn-primary\" href=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">show</a>
                    
                        <a class=\"btn btn-success\" href=\"";
            // line 73
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">edit</a>
                  
                </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "            </tbody>
        </table>
        </div>
        
        

    </div>



     




    ";
    }

    public function getTemplateName()
    {
        return "GestionUserBundle:Admin:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 79,  144 => 73,  139 => 71,  131 => 66,  127 => 65,  121 => 64,  117 => 63,  113 => 62,  109 => 61,  105 => 60,  99 => 59,  96 => 58,  92 => 57,  67 => 35,  38 => 9,  31 => 4,  28 => 3,);
    }
}
