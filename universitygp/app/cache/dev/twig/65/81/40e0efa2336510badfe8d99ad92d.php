<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_658140e0efa2336510badfe8d99ad92d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <title> ";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
   
      <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" />

<link rel=\"stylesheet\" href=\"http://jquery.bassistance.de/validate/demo/site-demos.css\">
   
  </head>
  <body>
       <div class=\"container\">
      <nav class=\"navbar navbar-default\" role=\"navigation\">
 
 <div class=\"navbar-header\">
    
    <a class=\"navbar-brand\" href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("tableau_board");
        echo "\">Dashboard</a>
  </div>


  <div class=\"collapse navbar-collapse navbar-ex1-collapse\">
    <ul class=\"nav navbar-nav\">

  ";
        // line 25
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 26
            echo "
   <li class=\"dropdown\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-delay=\"1000\" data-close-others=\"false\">
                    Gérer Users<b class=\"caret\"></b>
                </a>

                <ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"dropdownMenu\">
                         <li><a tabindex=\"-1\" href=\"";
            // line 33
            echo $this->env->getExtension('routing')->getPath("etudiant");
            echo "\">Etudiants</a></li>
                        <li class=\"divider\"></li>
                                
                        <li><a tabindex=\"-1\" href=\"";
            // line 36
            echo $this->env->getExtension('routing')->getPath("prof");
            echo "\">Profs</a></li>
                        <li class=\"divider\"></li>

                           <li><a tabindex=\"-1\" href=\"";
            // line 39
            echo $this->env->getExtension('routing')->getPath("admin");
            echo "\">Admins</a></li>
                     
                </ul>
                </li>


 ";
        }
        // line 46
        echo "  
                            ";
        // line 47
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 48
            echo "           
            <li class=\"dropdown\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-delay=\"1000\" data-close-others=\"false\">
                    Bienvenue ";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username"), "html", null, true);
            echo "<b class=\"caret\"></b>
                </a>

                <ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"dropdownMenu\">
                     ";
            // line 56
            echo "
                        
                        
                       
                          <li><a tabindex=\"-1\" href=\"";
            // line 60
            echo $this->env->getExtension('routing')->getPath("tableau_board");
            echo "\">Tableau de Board</a></li>
                        <li class=\"divider\"></li>
                                 ";
            // line 62
            if ($this->env->getExtension('security')->isGranted("ROLE_ETUDIANT")) {
                echo "  
                        <li><a tabindex=\"-1\" href=\"";
                // line 63
                echo $this->env->getExtension('routing')->getPath("etudiant_editperso");
                echo "\">Modifier mon profil</a></li>
                        <li class=\"divider\"></li>
                         ";
            }
            // line 66
            echo "                                  ";
            if ($this->env->getExtension('security')->isGranted("ROLE_PROF")) {
                echo "  
                        <li><a tabindex=\"-1\" href=\"";
                // line 67
                echo $this->env->getExtension('routing')->getPath("prof_editperso");
                echo "\">Modifier mon profil</a></li>
                        <li class=\"divider\"></li>
                         ";
            }
            // line 70
            echo "                                  ";
            if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
                echo "  
                        <li><a tabindex=\"-1\" href=\"";
                // line 71
                echo $this->env->getExtension('routing')->getPath("admin_editperso");
                echo "\">Modifier mon profil</a></li>
                        <li class=\"divider\"></li>
                         ";
            }
            // line 74
            echo "        
 

 <li><a href=\"";
            // line 77
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Déconnexion</a></li>
                    </ul>
                </li>

             ";
            // line 84
            echo "                            ";
        } else {
            // line 85
            echo "                <li>       
                        ";
            // line 87
            echo "                     ";
            // line 88
            echo "                         <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
                            ";
        }
        // line 90
        echo "                    </li> 


                


                      </ul>

</div>
</nav>

               
               
         
      
      </div>
      
          ";
        // line 107
        $this->displayBlock('body', $context, $blocks);
        // line 111
        echo "      
 

<script src=\"http://code.jquery.com/jquery-1.9.1.min.js\"></script>
<script src=\"http://jquery.bassistance.de/validate/jquery.validate.js\"></script>
<script src=\"http://jquery.bassistance.de/validate/additional-methods.js\"></script>
<script>

\$( \"#myform\" ).validate({
rules: {
password: \"test\",

gestion_userbundle_etudiantedittype_plainPassword: {
equalTo: \"#password\"
}
}
});
</script>
    ";
        // line 131
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
  
 <div>
            ";
        // line 135
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 137
        echo "        </div>
  </body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "ABSHORE";
    }

    // line 107
    public function block_body($context, array $blocks = array())
    {
        // line 108
        echo "        
      
          ";
    }

    // line 135
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 136
        echo "            ";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  254 => 136,  251 => 135,  245 => 108,  242 => 107,  236 => 5,  230 => 137,  228 => 135,  222 => 132,  219 => 131,  199 => 111,  197 => 107,  178 => 90,  170 => 88,  168 => 87,  165 => 85,  162 => 84,  155 => 77,  150 => 74,  144 => 71,  139 => 70,  133 => 67,  128 => 66,  122 => 63,  118 => 62,  113 => 60,  107 => 56,  100 => 51,  95 => 48,  93 => 47,  90 => 46,  80 => 39,  74 => 36,  68 => 33,  59 => 26,  57 => 25,  47 => 18,  22 => 1,  85 => 35,  78 => 31,  64 => 20,  56 => 15,  51 => 13,  46 => 11,  42 => 10,  39 => 9,  33 => 7,  31 => 6,  28 => 5,);
    }
}
