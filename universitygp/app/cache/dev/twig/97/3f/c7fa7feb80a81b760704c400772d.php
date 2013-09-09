<?php

/* GestionEmploisBundle:PlanEtude:new.html.twig */
class __TwigTemplate_973fc7fa7feb80a81b760704c400772d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap-theme.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
<link href=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
<link href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/jquery-ui.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
<script src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

<form class=\"form-horizontal\" action=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("planetude_create");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
;
        echo ">
    <div class=\"panel-body\">
        <div class=\"form-group\">
            ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
            </div>
        </div>
        <div class=\"panel-footer\" style=\"text-align: right\">
            <p>
                <input type=\"button\" id=\"btn\" class=\"btn btn-info btn-xs\" value=\"Ajouter\"/>
            </p></div>
    </form>
    <input type=\"button\" id=\"test\" value=\"test\"/>


    <script type=\"text/javascript\">
        \$('#gestion_emploisbundle_planetudetype_diplome').change(function() {
            var diplome = \$('#gestion_emploisbundle_planetudetype_diplome').val();
            \$.post(\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("planetude_getniveau");
        echo "\", {
                diplome: diplome
            }, function(data) {
                \$('#gestion_emploisbundle_planetudetype_niveau').empty();
                \$('#gestion_emploisbundle_planetudetype_niveau').append(data.niveaux);
            },
                    \"json\"
                    );
        });

        \$('#btn').click(function() {

            var formation = \$('#gestion_emploisbundle_planetudetype_formation').val();
            var diplome = \$('#gestion_emploisbundle_planetudetype_diplome').val();
            var niveau = \$('#gestion_emploisbundle_planetudetype_niveau').val();
            var matiere = \$('#gestion_emploisbundle_planetudetype_matiere').val();
            var nbHeure = \$('#gestion_emploisbundle_planetudetype_nbHeure').val();
            var nbHCours = \$('#gestion_emploisbundle_planetudetype_nbHCours').val();
            var nbHTD = \$('#gestion_emploisbundle_planetudetype_nbHTD').val();
            var nbHTP = \$('#gestion_emploisbundle_planetudetype_nbHTP').val();
            var chapitres = \$('#gestion_emploisbundle_planetudetype_chapitres').val();
            var s = parseInt(nbHCours) + parseInt(nbHTD) + parseInt(nbHTP);
            var r = parseInt(nbHeure);
            if (r < s) {
                alert('Veuillez vérifier le Nombre d\\'heure d\\'enseignement de la matiere');
            }
            else {
                //alert(chapitres);
                \$.post(\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("planetude_ajouterplan");
        echo "\", {
                    formation: formation,
                    diplome: diplome,
                    niveau: niveau,
                    matiere: matiere,
                    nbHeure: nbHeure,
                    nbHCours: nbHCours,
                    nbHTD: nbHTD,
                    nbHTP: nbHTP,
                    chapitres: chapitres
                }, function(data) {
                    alert(data.msg);
                    \$('#Classe').dialog('close');
                    self.location.reload();
                },
                        \"json\"
                        );
            }

        });
        /*\$('#test').click(function (){
         var nbHeure = \$('#gestion_emploisbundle_planetudetype_nbHeure').val();
         var nbHCours = \$('#gestion_emploisbundle_planetudetype_nbHCours').val();
         var nbHTD = \$('#gestion_emploisbundle_planetudetype_nbHTD').val();
         var nbHTP = \$('#gestion_emploisbundle_planetudetype_nbHTP').val();
         
         });*/
        </script>



";
    }

    public function getTemplateName()
    {
        return "GestionEmploisBundle:PlanEtude:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 51,  63 => 23,  46 => 9,  37 => 6,  32 => 4,  28 => 3,  24 => 2,  19 => 1,);
    }
}
