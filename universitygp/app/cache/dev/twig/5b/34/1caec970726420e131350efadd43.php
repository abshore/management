<?php

/* GestionUserBundle:Prof:index.html.twig */
class __TwigTemplate_5b341caec970726420e131350efadd43 extends Twig_Template
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
        echo "<div style=\"width: 80%; margin-left: 10%;margin-top: 50px;\" class=\"panel panel-primary\">
  <div class=\"panel-heading\">
    <h3 class=\"panel-title\">Moteur de recherche</h3>
  </div>
  <div class=\"panel-body\">
    <form  class=\"form-inline\" role=\"form\" action=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("prof_username");
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

    <table class=\"table table-bordered table-striped table-condensed table-hover\" style=\"width: 80%; margin-left: 10%;margin-top: 100px;\">
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
        // line 45
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 46
            echo "            <tr>
                <td><a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("prof_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "username"), "html", null, true);
            echo "</a></td>
                <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "email"), "html", null, true);
            echo "</td>
                <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "enabled"), "html", null, true);
            echo "</td>
                <td>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "locked"), "html", null, true);
            echo "</td>
                <td>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "expired"), "html", null, true);
            echo "</td>
                <td>";
            // line 52
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "expiresAt")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "expiresAt"), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
               <td>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nom"), "html", null, true);
            echo "</td>
                <td>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "prenom"), "html", null, true);
            echo "</td>
                <td>
                <ul>
                   
                        <a class=\"btn btn-primary\" href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("prof_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">show</a>
                    
                        <a class=\"btn btn-success\"  href=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("prof_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">edit</a>
                     
                        <a id=\"addcv\" class=\"addcv btn btn-success\" url=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cursus_new", array("iduser" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\" href=\"#\">Créer CV</a>
                  
                </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "        </tbody>
    </table>

        <ul>
      
            <a class=\"btn btn-primary\" href=\"";
        // line 73
        echo $this->env->getExtension('routing')->getPath("prof_registration");
        echo "\">
                Add Prof
            </a>
        
    </ul>
<div id=\"Cv\" style=\"display: none;\"></div>

 <script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.9.1.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-ui.js"), "html", null, true);
        echo "\"></script>

<script type=\"text/javascript\">
                                \$('a.addcv').click(function() {
                                    var url = \$(this).attr('url');
                                    \$(\"#Cv\").load(url, function() {
                                        \$(this).dialog({
                                            height: 'auto',
                                            width: 'auto',
                                            modal: true,
                                            title: 'Ajouter Experience',
                                            position: 'center',
                                            overlay: {
                                                backgroundColor: '#000',
                                                opacity: 0.5
                                            },
                                            close: function() {

                                               
                                                \$(this).dialog('close');
                                            }

                                        });
                                    });
                                });

                                \$('a.modifSalle').click(function() {
                                    var url = \$(this).attr('url');
                                    \$(\"#Cv\").load(url, function() {
                                        \$(this).dialog({
                                            height: 'auto',
                                            width: 'auto',
                                            modal: true,
                                            title: 'Modifier Salle',
                                            position: 'center',
                                            overlay: {
                                                backgroundColor: '#000',
                                                opacity: 0.5
                                            },
                                            close: function() {

                                               
                                                \$(this).dialog('close');
                                            }

                                        });
                                    });
                                });



        </script>


    ";
    }

    public function getTemplateName()
    {
        return "GestionUserBundle:Prof:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 81,  160 => 80,  150 => 73,  143 => 68,  131 => 62,  126 => 60,  121 => 58,  114 => 54,  110 => 53,  104 => 52,  100 => 51,  96 => 50,  92 => 49,  88 => 48,  82 => 47,  79 => 46,  75 => 45,  38 => 11,  31 => 6,  28 => 3,);
    }
}
