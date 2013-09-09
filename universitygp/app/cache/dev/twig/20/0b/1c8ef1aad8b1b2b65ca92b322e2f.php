<?php

/* GestionEmploisBundle:Emploi:edit.html.twig */
class __TwigTemplate_200b1c8ef1aad8b1b2b65ca92b322e2f extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("emploi_update", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'enctype');
;
        echo ">
    <input type=\"hidden\" name=\"_method\" value=\"PUT\" />
    <div class=\"panel-body\">
        <div class=\"form-group\">
";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
            </div>
        </div>
        <div class=\"panel-footer\" style=\"text-align: right\">
            <p>
                <button id=\"btn\" class=\"btn btn-success\" type=\"button\">Modifier</button>
            </p>
        </div>
    </form>


    <script type=\"text/javascript\">
        \$(document).ready(function() {
            \$('#gestion_emploisbundle_emploimodiftype_heureDeb').timepicker({
                ampm: true,
                hour: 13,
                minute: 15,
                hourMin: 8,
                hourMax: 18
            });

            \$('#gestion_emploisbundle_emploimodiftype_heureFin').timepicker({
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
                \$(\"#gestion_emploisbundle_emploimodiftype_jour\").datepicker({dateFormat: 'dd-mm-yy', showWeek: true, firstDay: 1})
                        ;
            });
            </script>
            <script type=\"text/javascript\">
                \$(document).ready(function() {

                    \$.get(\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("emploi_getgroupemodif", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\",
                            function(data) {
                                \$('#gestion_emploisbundle_emploimodiftype_groupe').empty();
                                \$('#gestion_emploisbundle_emploimodiftype_groupe').append(data.groupes);
                                \$('#gestion_emploisbundle_emploimodiftype_groupe').val(data.groupe);
                            },
                            \"json\");
                });

                \$('#gestion_emploisbundle_emploimodiftype_classe').change(function() {
                    var classe = \$('#gestion_emploisbundle_emploimodiftype_classe').val();
                    \$.post(\"";
        // line 65
        echo $this->env->getExtension('routing')->getPath("emploi_getmatiere");
        echo "\", {
                        classe: classe
                    }, function(data) {
                        \$('#gestion_emploisbundle_emploimodiftype_matiere').empty();
                        \$('#gestion_emploisbundle_emploimodiftype_matiere').append(data.matieres);


                    },
                            \"json\"
                            );
                });

                \$('#btn').click(function() {

                    var classe = \$('#gestion_emploisbundle_emploimodiftype_classe').val();
                    var groupe = \$('#gestion_emploisbundle_emploimodiftype_groupe').val();
                    var matiere = \$('#gestion_emploisbundle_emploimodiftype_matiere').val();
                    var jour = \$('#gestion_emploisbundle_emploimodiftype_jour').val();
                    var heureDeb = \$('#gestion_emploisbundle_emploimodiftype_heureDeb').val();
                    var heureFin = \$('#gestion_emploisbundle_emploimodiftype_heureFin').val();
                    var salle = \$('#gestion_emploisbundle_emploimodiftype_salle').val();

                    //alert(chapitres);
                    \$.post(\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("emploi_modifierSeance", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
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
        return "GestionEmploisBundle:Emploi:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 88,  108 => 65,  94 => 54,  48 => 11,  38 => 7,  33 => 5,  28 => 3,  24 => 2,  19 => 1,);
    }
}
