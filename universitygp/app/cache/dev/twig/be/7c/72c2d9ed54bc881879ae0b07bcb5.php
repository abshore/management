<?php

/* GestionEmploisBundle:Emploi:new.html.twig */
class __TwigTemplate_be7c72c2d9ed54bc881879ae0b07bcb5 extends Twig_Template
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
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

<form class=\"form-horizontal\" action=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("emploi_create");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
;
        echo ">
    <div class=\"panel-body\">
        <div class=\"form-group\">
";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
            </div>
        </div>
         <div class=\"panel-footer\" style=\"text-align: right\">
        <p>
            <button id=\"btn\" class=\"btn btn-primary\" type=\"button\">Ajouter</button>
        </p>
         </div>
    </form>

    
    ";
        // line 23
        echo "
    
    <script type=\"text/javascript\">
        \$(document).ready(function() {
            \$('#gestion_emploisbundle_emploitype_heureDeb').timepicker({
                ampm: true,
                hour: 13,
                minute: 15,
                hourMin: 8,
                hourMax: 18
            });

            \$('#gestion_emploisbundle_emploitype_heureFin').timepicker({
                ampm: true,
                hour: 13,
                minute: 15,
                hourMin: 8,
                hourMax: 18
            });



        });

        </script>
        <script type=\"text/javascript\">
            \$(function() {
                \$(\"#gestion_emploisbundle_emploitype_jour\").datepicker({dateFormat: 'dd-mm-yy', showWeek: true, firstDay: 1})
                        ;
            });
            </script>
            <script type=\"text/javascript\">
        \$('#gestion_emploisbundle_emploitype_classe').change(function() {
            var classe = \$('#gestion_emploisbundle_emploitype_classe').val();
            \$.post(\"";
        // line 57
        echo $this->env->getExtension('routing')->getPath("emploi_getmatiere");
        echo "\", {
                classe: classe
            }, function(data) {
                \$('#gestion_emploisbundle_emploitype_matiere').empty();
                \$('#gestion_emploisbundle_emploitype_matiere').append(data.matieres);
                \$('#gestion_emploisbundle_emploitype_groupe').empty();
                \$('#gestion_emploisbundle_emploitype_groupe').append(data.groupes);
                
            },
                    \"json\"
                    );
        });

        \$('#btn').click(function() {

            var classe = \$('#gestion_emploisbundle_emploitype_classe').val();
            var groupe=\$('#gestion_emploisbundle_emploitype_groupe').val();
            var matiere = \$('#gestion_emploisbundle_emploitype_matiere').val();
            var jour = \$('#gestion_emploisbundle_emploitype_jour').val();
            var heureDeb = \$('#gestion_emploisbundle_emploitype_heureDeb').val();
            var heureFin = \$('#gestion_emploisbundle_emploitype_heureFin').val();
            var salle = \$('#gestion_emploisbundle_emploitype_salle').val();
            
            //alert(chapitres);
            \$.post(\"";
        // line 81
        echo $this->env->getExtension('routing')->getPath("emploi_ajouterSeance");
        echo "\", {
                classe: classe,
                groupe: groupe,
                matiere: matiere,
                jour: jour,
                heureDeb: heureDeb,
                heureFin: heureFin,
                salle: salle
            }, function(data) {
                alert(data.msg);
                \$('#Seance').dialog('close');
                self.location.reload();
            },
                    \"json\"
                    );

        });
        </script>







";
    }

    public function getTemplateName()
    {
        return "GestionEmploisBundle:Emploi:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 81,  97 => 57,  61 => 23,  47 => 10,  38 => 7,  33 => 5,  28 => 3,  24 => 2,  19 => 1,);
    }
}
