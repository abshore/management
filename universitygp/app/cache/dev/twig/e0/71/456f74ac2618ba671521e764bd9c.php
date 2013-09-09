<?php

/* GestionEmploisBundle:AffectationPlan:edit.html.twig */
class __TwigTemplate_e071456f74ac2618ba671521e764bd9c extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("affectationplan_update", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'enctype');
;
        echo ">
        <input type=\"hidden\" name=\"_method\" value=\"PUT\" />
        ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <div class=\"panel-footer\" style=\"text-align: right\">
        <p>
            <input type=\"button\" id=\"btn\" class=\"btn btn-info btn-xs\" value=\"Modifier\"/>
        </p></div>
    </form>


<script type=\"text/javascript\">
    \$(document).ready(function() {

        \$.get(\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("affectation_getgroupemodif", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\",
                function(data) {
                    \$('#gestion_emploisbundle_affectationplantype_groupe').empty();
                    \$('#gestion_emploisbundle_affectationplantype_groupe').append(data.groupes);
                    \$('#gestion_emploisbundle_affectationplantype_groupe').val(data.groupe);
                },
                \"json\");
    });


    \$('#gestion_emploisbundle_affectationplantype_classe').change(function() {
            var classe = \$('#gestion_emploisbundle_affectationplantype_classe').val();
            \$.post(\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("affectationplan_getmatiere");
        echo "\", {
                classe: classe
            }, function(data) {
                \$('#gestion_emploisbundle_affectationplantype_matiere').empty();
                \$('#gestion_emploisbundle_affectationplantype_matiere').append(data.matieres);
                \$('#gestion_emploisbundle_affectationplantype_groupe').empty();
                \$('#gestion_emploisbundle_affectationplantype_groupe').append(data.groupes);
            },
                    \"json\"
                    );
        });

   

        \$('#btn').click(function() {

            var classe = \$('#gestion_emploisbundle_affectationplantype_classe').val();
            var matiere = \$('#gestion_emploisbundle_affectationplantype_matiere').val();
            var groupe = \$('#gestion_emploisbundle_affectationplantype_groupe').val();
            var prof = \$('#gestion_emploisbundle_affectationplantype_prof').val();
            //alert(chapitres);
            \$.post(\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("affectation_modifieraffectation", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\", {
                classe: classe,
                matiere: matiere,
                groupe: groupe,
                prof: prof
            }, function(data) {
                alert(data.msg);
                \$('#Affectation').dialog('close');
                self.location.reload();
            },
                    \"json\"
                    );

        });
    
    </script>";
    }

    public function getTemplateName()
    {
        return "GestionEmploisBundle:AffectationPlan:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 52,  74 => 31,  59 => 19,  45 => 8,  37 => 6,  32 => 4,  28 => 3,  24 => 2,  19 => 1,);
    }
}
