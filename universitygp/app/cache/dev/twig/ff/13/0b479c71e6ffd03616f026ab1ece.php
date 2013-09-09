<?php

/* ::base.html.twig */
class __TwigTemplate_ff130b479c71e6ffd03616f026ab1ece extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'meta' => array($this, 'block_meta'),
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
     ";
        // line 4
        $this->displayBlock('meta', $context, $blocks);
        // line 6
        echo "    <title> ";
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "  </head>
  <body>
       <div class=\"container\">
      <nav class=\"navbar navbar-default\" role=\"navigation\">
 
 <div class=\"navbar-header\">
    
    <a class=\"navbar-brand\" href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("tableau_board");
        echo "\">Dashboard</a>
  </div>


  <div class=\"collapse navbar-collapse navbar-ex1-collapse\">
    <ul class=\"nav navbar-nav\">
 ";
        // line 28
        if ($this->env->getExtension('security')->isGranted("ROLE_PROF")) {
            // line 29
            echo " <li><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((("upload/" . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "id")) . "/") . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "image"))), "html", null, true);
            echo "\" alt=\"pas de photo\" height=\"50\" width=\"50\" /></li>
";
        }
        // line 31
        echo " ";
        if ($this->env->getExtension('security')->isGranted("ROLE_ETUDIANT")) {
            // line 32
            echo " <li><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((("upload/" . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "id")) . "/") . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "image"))), "html", null, true);
            echo "\" alt=\"pas de photo\" height=\"50\" width=\"50\" /></li>
";
        }
        // line 34
        echo "<li><a href=\"";
        echo $this->env->getExtension('routing')->getPath("accueil");
        echo "\" >
                    Messagerie <b class=\"glyphicon glyphicon-comment\"></b>
                </a></li>
                ";
        // line 37
        if (($this->env->getExtension('security')->isGranted("ROLE_ETUDIANT") || $this->env->getExtension('security')->isGranted("ROLE_PROF"))) {
            // line 38
            echo "                ";
            if ($this->env->getExtension('security')->isGranted("ROLE_ETUDIANT")) {
                // line 39
                echo "                <li class=\"dropdown\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-delay=\"1000\" data-close-others=\"false\">
                    Questions/Réponses<b class=\"caret\"></b>
                </a>

                <ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"dropdownMenu\">
                        <li><a href=\"";
                // line 45
                echo $this->env->getExtension('routing')->getPath("ajout_question");
                echo "\" >
                         Ajouter Question <span class=\"glyphicon glyphicon-question-sign\"></span>
                     </a></li>
                        <li class=\"divider\"></li>
                        <li><a tabindex=\"-1\" href=\"";
                // line 49
                echo $this->env->getExtension('routing')->getPath("moteur_di_recherche");
                echo "\">recherche <b class=\"glyphicon glyphicon-search\"></b></a></li>
                        
                     
                </ul>
                </li>
                
                     ";
            }
            // line 56
            echo "<li>";
            if ($this->env->getExtension('security')->isGranted("ROLE_PROF")) {
                echo "<a href=\"";
                echo $this->env->getExtension('routing')->getPath("question_reponse_question_reponse_homepage");
                echo "\" >";
            } else {
                echo "<a href=\"";
                echo $this->env->getExtension('routing')->getPath("reponse_homepage");
                echo "\" >";
            }
            // line 57
            echo "                    notifications ";
            if ($this->env->getExtension('security')->isGranted("ROLE_PROF")) {
                if (($this->getAttribute((isset($context["nbrenotif"]) ? $context["nbrenotif"] : $this->getContext($context, "nbrenotif")), "count") != 0)) {
                    echo "<span class=\"badge\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["nbrenotif"]) ? $context["nbrenotif"] : $this->getContext($context, "nbrenotif")), "count"), "html", null, true);
                    echo " </span>";
                } else {
                    echo "<b class=\"glyphicon glyphicon-bell\"></b>";
                }
            } else {
                if (($this->getAttribute((isset($context["nbrereponse"]) ? $context["nbrereponse"] : $this->getContext($context, "nbrereponse")), "count") != 0)) {
                    echo "<span class=\"badge\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["nbrereponse"]) ? $context["nbrereponse"] : $this->getContext($context, "nbrereponse")), "count"), "html", null, true);
                    echo " </span>";
                } else {
                    echo "<b class=\"glyphicon glyphicon-bell\"></b>";
                }
            }
            // line 58
            echo "                </a></li>
                ";
        }
        // line 60
        echo "  ";
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 61
            echo "   <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("cursus");
            echo "\">Gestion CV</a></li>
   
   <li><a href=\"";
            // line 63
            echo $this->env->getExtension('routing')->getPath("nouvelle");
            echo "\">Gestion Nouvelle</a></li>
   <li class=\"dropdown\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-delay=\"1000\" data-close-others=\"false\">
                    Gérer Users<b class=\"caret\"></b>
                </a>

                <ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"dropdownMenu\">
                         <li><a tabindex=\"-1\" href=\"";
            // line 70
            echo $this->env->getExtension('routing')->getPath("etudiant");
            echo "\">Etudiants</a></li>
                        <li class=\"divider\"></li>
                                
                        <li><a tabindex=\"-1\" href=\"";
            // line 73
            echo $this->env->getExtension('routing')->getPath("prof");
            echo "\">Profs</a></li>
                        <li class=\"divider\"></li>

                           <li><a tabindex=\"-1\" href=\"";
            // line 76
            echo $this->env->getExtension('routing')->getPath("admin");
            echo "\">Admins</a></li>
                     
                </ul>
                </li>
 


 ";
        }
        // line 84
        echo "
<li class=\"dropdown\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-delay=\"1000\" data-close-others=\"false\">
                    Gérer Documents<b class=\"caret\"></b>
                </a>

                <ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"dropdownMenu\">
                         <li><a tabindex=\"-1\" href=\"";
        // line 91
        echo $this->env->getExtension('routing')->getPath("document_personnel");
        echo "\">Documents personnels</a></li>
                        <li class=\"divider\"></li> 
                                 
                        <li><a tabindex=\"-1\" href=\"";
        // line 94
        echo $this->env->getExtension('routing')->getPath("document");
        echo "\">Recherche documents</a></li>
                        

                     
                     
                </ul>  
                </li>

                 


";
        // line 105
        if ($this->env->getExtension('security')->isGranted("ROLE_ENTREPRISE")) {
            // line 106
            echo "
 <li class=\"dropdown\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-delay=\"1000\" data-close-others=\"false\">
                    Offres<b class=\"caret\"></b>
                </a>

                <ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"dropdownMenu\">
                         <li><a tabindex=\"-1\" href=\"";
            // line 113
            echo $this->env->getExtension('routing')->getPath("stage");
            echo "\">Stage</a></li>
                        <li class=\"divider\"></li>
                                
                        <li><a tabindex=\"-1\" href=\"";
            // line 116
            echo $this->env->getExtension('routing')->getPath("emploie");
            echo "\">Emploi</a></li>
                       

                     
                </ul>
                </li>
";
        }
        // line 123
        echo "
 
<li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-delay=\"1000\" data-close-others=\"false\">
                                Calendrier<b class=\"caret\"></b>
                            </a>

                            <ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"dropdownMenu\">
                               
                                ";
        // line 132
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 133
            echo "                                <li><a tabindex=\"-1\" href=\"";
            echo $this->env->getExtension('routing')->getPath("gestion_emplois_homepage");
            echo "\">Plan d'etude</a></li>
                                <li class=\"divider\"></li>
                                  ";
            // line 135
            if ($this->env->getExtension('security')->isGranted("ROLE_AGENTVALIDATION")) {
                echo "  
                                <li><a tabindex=\"-1\"  href=\"";
                // line 136
                echo $this->env->getExtension('routing')->getPath("entreprise");
                echo "\">
                                 <span class=\"badge pull-right\">";
                // line 137
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notif"]) ? $context["notif"] : $this->getContext($context, "notif")), "NbrEntreprise"), "html", null, true);
                echo "</span>
                                Entreprise </a>
                             </li>
                  ";
            }
            // line 141
            echo "                                <li><a tabindex=\"-1\" href=\"#\">Emploi du temps</a></li>
                                 ";
        }
        // line 143
        echo "                                  ";
        if ($this->env->getExtension('security')->isGranted("ROLE_PROF")) {
            // line 144
            echo "                              <li><a tabindex=\"-1\"  href=\"";
            echo $this->env->getExtension('routing')->getPath("evenementnotif");
            echo "\">
                                 <span class=\"badge pull-right\">";
            // line 145
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notif"]) ? $context["notif"] : $this->getContext($context, "notif")), "NbrNotif"), "html", null, true);
            echo "</span>
                                Evenement </a>
                             </li>
                           <li class=\"divider\"></li>
                                <li><a tabindex=\"-1\" id=\"addevent\" class=\"addevent\" href=\"#\" url=\"";
            // line 149
            echo $this->env->getExtension('routing')->getPath("evenement_new");
            echo "\">Créer événement</a></li>
                                <li class=\"divider\"></li>
 <li><a tabindex=\"-1\"    href=\"";
            // line 151
            echo $this->env->getExtension('routing')->getPath("evenement");
            echo "\">Mes événement</a></li>
                               
                                  ";
        }
        // line 154
        echo "
                            </ul>
                        </li>

 
                   ";
        // line 160
        echo "   <li class=\"dropdown\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-delay=\"1000\" data-close-others=\"false\">
                    Gérer Blog<b class=\"caret\"></b>
                </a>

                <ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"dropdownMenu\">
                         <li><a tabindex=\"-1\" href=\"";
        // line 166
        echo $this->env->getExtension('routing')->getPath("blog_homepage");
        echo "\">accueil</a></li>
                        <li class=\"divider\"></li>
                                
                        <li><a tabindex=\"-1\" href=\"";
        // line 169
        echo $this->env->getExtension('routing')->getPath("badp_home");
        echo "\">parametres</a></li>
                        
                     
                </ul>
                </li>";
        // line 176
        echo "                ";
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 177
            echo "                  <li class=\"dropdown\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-delay=\"1000\" data-close-others=\"false\">
                    Gérer Forum<b class=\"caret\"></b>
                </a>

                <ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"dropdownMenu\">
                         <li><a tabindex=\"-1\" href=\"";
            // line 183
            echo $this->env->getExtension('routing')->getPath("forum_homepage");
            echo "\">accueil</a></li>
                        <li class=\"divider\"></li>
                                
                        <li><a tabindex=\"-1\" href=\"";
            // line 186
            echo $this->env->getExtension('routing')->getPath("badp_forumhome");
            echo "\">parametres</a></li>
                        
                     
                </ul>
                </li>
                ";
        } else {
            // line 192
            echo "                <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("forum_homepage");
            echo "\" >
                    Forum <b class=\"glyphicon glyphicon-flag\"></b>
                </a></li>
                ";
        }
        // line 196
        echo "                
               
  
              


  
                            ";
        // line 203
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 204
            echo "           
            <li class=\"dropdown\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-delay=\"1000\" data-close-others=\"false\">
                    Bienvenue ";
            // line 207
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username"), "html", null, true);
            echo "<b class=\"caret\"></b>
                </a>

                <ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"dropdownMenu\">
                     ";
            // line 212
            echo "
                        
                        
                       
                          <li><a tabindex=\"-1\" href=\"";
            // line 216
            echo $this->env->getExtension('routing')->getPath("tableau_board");
            echo "\">Tableau de Board</a></li>
                        <li class=\"divider\"></li>
         ";
            // line 218
            if ($this->env->getExtension('security')->isGranted("ROLE_ENTREPRISE")) {
                echo "  
                        <li><a tabindex=\"-1\" href=\"";
                // line 219
                echo $this->env->getExtension('routing')->getPath("entreprise_editperso");
                echo "\">Modifier mon profil</a></li>
                        <li class=\"divider\"></li>
                       
                         ";
            }
            // line 223
            echo "                                 ";
            if ($this->env->getExtension('security')->isGranted("ROLE_ETUDIANT")) {
                echo "  
                        <li><a tabindex=\"-1\" href=\"";
                // line 224
                echo $this->env->getExtension('routing')->getPath("etudiant_editperso");
                echo "\">Modifier mon profil</a></li>
                        <li class=\"divider\"></li>
                        <li><a tabindex=\"-1\" href=\"";
                // line 226
                echo $this->env->getExtension('routing')->getPath("cursususer");
                echo "\">Mes CV</a></li>
                        <li class=\"divider\"></li>
                         ";
            }
            // line 229
            echo "                   ";
            if ($this->env->getExtension('security')->isGranted("ROLE_ETUDIANT")) {
                echo " 
                   <li><a tabindex=\"-1\"  id=\"addcv\" class=\"addcv\" url=\"";
                // line 230
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cursus_newuser", array("iduser" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "id"))), "html", null, true);
                echo "\" href=\"#\">Créer CV</a></li>
                      <li class=\"divider\"></li>                   
                      ";
            }
            // line 233
            echo "                   ";
            if ($this->env->getExtension('security')->isGranted("ROLE_PROF")) {
                echo " 
                   <li><a tabindex=\"-1\"  id=\"addcv\" class=\"addcv\" url=\"";
                // line 234
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cursus_newuser", array("iduser" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "id"))), "html", null, true);
                echo "\" href=\"#\">Créer CV</a></li>
                      <li class=\"divider\"></li>  
                       <li><a tabindex=\"-1\" href=\"";
                // line 236
                echo $this->env->getExtension('routing')->getPath("cursususer");
                echo "\">Mes CV</a></li>
                        <li class=\"divider\"></li>                 
                      ";
            }
            // line 239
            echo "                                  ";
            if ($this->env->getExtension('security')->isGranted("ROLE_PROF")) {
                echo "  
                        <li><a tabindex=\"-1\" href=\"";
                // line 240
                echo $this->env->getExtension('routing')->getPath("prof_editperso");
                echo "\">Modifier mon profil</a></li>
                        <li class=\"divider\"></li>
                         ";
            }
            // line 243
            echo "                                  ";
            if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
                echo "  
                        <li><a tabindex=\"-1\" href=\"";
                // line 244
                echo $this->env->getExtension('routing')->getPath("admin_editperso");
                echo "\">Modifier mon profil</a></li>
                        <li class=\"divider\"></li>
                         ";
            }
            // line 247
            echo "        
 

 <li><a href=\"";
            // line 250
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Déconnexion</a></li>
                    </ul>
                </li>
 ";
            // line 253
            if ($this->env->getExtension('security')->isGranted("ROLE_PROF")) {
                // line 254
                echo "                <li class=\"dropdown\"> <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-delay=\"1000\" data-close-others=\"false\">Taches Prof <b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"dropdownMenu\">
                        <li><a href=\"";
                // line 256
                echo $this->env->getExtension('routing')->getPath("absence");
                echo "\">Gestion des absences</a></li>
                        <li class=\"divider\"></li>
                        <li><a href=\"#\">Gestion des notes</a></li>
                    </ul>
                </li>
                ";
            }
            // line 262
            echo "
             ";
            // line 266
            echo "                            ";
        } else {
            // line 267
            echo "                <li>       
                        ";
            // line 269
            echo "                     ";
            // line 270
            echo "                         ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("FOSUserBundle:Security:Login"));
            echo "
                            ";
        }
        // line 272
        echo "                    </li> 


               


                      </ul>


</div>
</nav>

               
               
         
      
      </div>
      <div id=\"Cv\" style=\"display: none;\"></div>
          ";
        // line 290
        $this->displayBlock('body', $context, $blocks);
        // line 294
        echo "      
  ";
        // line 295
        $this->displayBlock('javascripts', $context, $blocks);
        // line 391
        echo "  </body>
</html>";
    }

    // line 4
    public function block_meta($context, array $blocks = array())
    {
        // line 5
        echo "    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" /> ";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "ABSHORE";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "      <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    
 <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/jquery-ui.css"), "html", null, true);
        echo "\" type=\"text/css\" />
<link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/jquery.ptTimeSelect.css"), "html", null, true);
        echo "\" type=\"text/css\" />

<link rel=\"stylesheet\" href=\"http://jquery.bassistance.de/validate/demo/site-demos.css\">
    ";
    }

    // line 290
    public function block_body($context, array $blocks = array())
    {
        // line 291
        echo "        
      
          ";
    }

    // line 295
    public function block_javascripts($context, array $blocks = array())
    {
        // line 296
        echo "<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/ckeditor.js"), "html", null, true);
        echo "\"></script> 
 <script type=\"text/javascript\" src=\"";
        // line 297
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/autosuggest.js"), "html", null, true);
        echo "\"></script>
 <script type=\"text/javascript\" src=\"";
        // line 298
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/twitter-bootstrap-typeahead.js"), "html", null, true);
        echo "\"></script>
        
<script src=\"http://code.jquery.com/jquery-1.9.1.min.js\"></script>
<script src=\"http://jquery.bassistance.de/validate/jquery.validate.js\"></script>
<script src=\"http://jquery.bassistance.de/validate/additional-methods.js\"></script>

    ";
        // line 306
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 307
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

 <script src=\"";
        // line 309
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.9.1.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 310
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-ui.js"), "html", null, true);
        echo "\"></script>
             
       
            <script type=\"text/javascript\">
                   \$(function() {
   \$( \".form-control.date\" ).datetimepicker();
   });

            </script>



    ";
        // line 324
        echo "   

             
            </script>
            
            <script type=\"text/javascript\" src=\"";
        // line 329
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/ckeditor.js"), "html", null, true);
        echo "\"></script> <script type=\"text/javascript\">

  </script>
<script type=\"text/javascript\">
                                \$('a.addevent').click(function() {
                                    var url = \$(this).attr('url');
                                    \$(\"#Cv\").load(url, function() {
                                        \$(this).dialog({
                                            height: 'auto',
                                            width: 'auto',
                                            modal: true,
                                            title: 'Ajouter un événement',
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
</script>
             
          <script type=\"text/javascript\">
        \$.noConflict();
        </script>
        <script src=\"";
        // line 385
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.9.1.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 386
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-ui.js"), "html", null, true);
        echo "\"></script>
        
       
 
  ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  714 => 386,  710 => 385,  651 => 329,  644 => 324,  629 => 310,  625 => 309,  620 => 307,  617 => 306,  608 => 298,  604 => 297,  599 => 296,  596 => 295,  590 => 291,  587 => 290,  579 => 11,  575 => 10,  569 => 8,  566 => 7,  560 => 6,  556 => 5,  553 => 4,  548 => 391,  546 => 295,  543 => 294,  541 => 290,  521 => 272,  515 => 270,  513 => 269,  510 => 267,  507 => 266,  504 => 262,  495 => 256,  491 => 254,  489 => 253,  483 => 250,  478 => 247,  472 => 244,  467 => 243,  461 => 240,  456 => 239,  450 => 236,  445 => 234,  440 => 233,  434 => 230,  429 => 229,  423 => 226,  418 => 224,  413 => 223,  406 => 219,  402 => 218,  397 => 216,  391 => 212,  384 => 207,  379 => 204,  377 => 203,  368 => 196,  360 => 192,  351 => 186,  345 => 183,  337 => 177,  334 => 176,  327 => 169,  321 => 166,  313 => 160,  306 => 154,  300 => 151,  295 => 149,  288 => 145,  283 => 144,  280 => 143,  276 => 141,  269 => 137,  265 => 136,  261 => 135,  255 => 133,  253 => 132,  242 => 123,  232 => 116,  226 => 113,  217 => 106,  215 => 105,  201 => 94,  195 => 91,  186 => 84,  175 => 76,  169 => 73,  163 => 70,  153 => 63,  147 => 61,  144 => 60,  140 => 58,  121 => 57,  110 => 56,  100 => 49,  93 => 45,  85 => 39,  82 => 38,  80 => 37,  73 => 34,  67 => 32,  64 => 31,  58 => 29,  56 => 28,  47 => 22,  38 => 15,  36 => 7,  31 => 6,  29 => 4,  24 => 1,);
    }
}
