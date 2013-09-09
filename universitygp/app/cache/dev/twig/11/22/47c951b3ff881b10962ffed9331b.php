<?php

/* GestionAbsenceNoteBundle:Absence:modifierAbsence.html.twig */
class __TwigTemplate_112247c951b3ff881b10962ffed9331b extends Twig_Template
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

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo twig_escape_filter($this->env, (isset($context["bien"]) ? $context["bien"] : $this->getContext($context, "bien")), "html", null, true);
        echo "
<form id=\"form\" action=\"#\" method=\"post\">
    <div class=\"panel panel-default\">
        <div class=\"panel-heading \">
            <table class=\"table\">
                <tr>
                    <td><b>Date:</b></td>
                    <td id=\"date\">";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["date"]) ? $context["date"] : $this->getContext($context, "date")), "html", null, true);
        echo "</td>
                    <td><b>Classe:</b></td>
                    <td id=\"classe\" val=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["seance"]) ? $context["seance"] : $this->getContext($context, "seance")), "classe"), "id"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["seance"]) ? $context["seance"] : $this->getContext($context, "seance")), "classe"), "html", null, true);
        echo "</td>
                    <td><b>Groupe:</b></td>
                    <td id=\"groupe\">";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["seance"]) ? $context["seance"] : $this->getContext($context, "seance")), "groupe"), "html", null, true);
        echo "</td>
                    <td><b>Matiere:</b></td>
                    <td id=\"matiere\" val=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["seance"]) ? $context["seance"] : $this->getContext($context, "seance")), "matiere"), "id"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["seance"]) ? $context["seance"] : $this->getContext($context, "seance")), "matiere"), "html", null, true);
        echo "</td>
                    <td><b>Creneau:</b></td>
                    <td id=\"creneau\">";
        // line 23
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["seance"]) ? $context["seance"] : $this->getContext($context, "seance")), "heureDeb"), "H:i"), "html", null, true);
        echo "-->";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["seance"]) ? $context["seance"] : $this->getContext($context, "seance")), "heureFin"), "H:i"), "html", null, true);
        echo "</td>

                </tr>
            </table>
            ";
        // line 32
        echo "        </div>    

        <div class=\"panel-body\" style=\"margin-left: 20%; margin-right: 20%;\">
            <table class=\"table\">
                ";
        // line 36
        if ((isset($context["etudiants"]) ? $context["etudiants"] : $this->getContext($context, "etudiants"))) {
            // line 37
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["etudiants"]) ? $context["etudiants"] : $this->getContext($context, "etudiants")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 38
                echo "                    <tr>
                        <td id=\"idEt";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index"), "html", null, true);
                echo "\" style=\"display: none;\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
                echo "</td>
                        <td>";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nom"), "html", null, true);
                echo "</td>
                        <td>";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "prenom"), "html", null, true);
                echo "</td>
                        <td><input type=\"checkbox\" id=\"absent";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index"), "html", null, true);
                echo "\"></td>
                    </tr>
        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "                    <a style=\"display: none\" id=\"nb\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["etudiants"]) ? $context["etudiants"] : $this->getContext($context, "etudiants")), "count"), "html", null, true);
            echo "</a>
                    ";
        } else {
            // line 47
            echo "                    aucun etudiant inscrit dans ce groupe
                    ";
        }
        // line 49
        echo "                </table>
            </div>
            <div class=\"panel-footer\">
                <div style=\"float: left;\"><a href=\"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("absence");
        echo "\"><i class=\"glyphicon glyphicon-circle-arrow-left\">retour</i></a></div>
                <div style=\"text-align: right\"><input id=\"valider\" class=\"btn btn-info\" type=\"button\" value=\"valider\"></div>

            </div>

        </div>
        <div id=\"modif\"></div>
        <table class=\"table\" style=\"display: none\">
                ";
        // line 60
        if ((isset($context["etudiantsAb"]) ? $context["etudiantsAb"] : $this->getContext($context, "etudiantsAb"))) {
            // line 61
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["etudiantsAb"]) ? $context["etudiantsAb"] : $this->getContext($context, "etudiantsAb")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 62
                echo "                <tr>
                    <td id=\"idEtAb";
                // line 63
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index"), "html", null, true);
                echo "\" style=\"display: none;\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
                echo "</td>
                    <td>";
                // line 64
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nom"), "html", null, true);
                echo "</td>
                    <td>";
                // line 65
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "prenom"), "html", null, true);
                echo "</td>
                        ";
                // line 67
                echo "                </tr>
        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "                <a style=\"display: none\" id=\"nbAb\">";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["etudiantsAb"]) ? $context["etudiantsAb"] : $this->getContext($context, "etudiantsAb"))), "html", null, true);
            echo "</a>
                    ";
        } else {
            // line 71
            echo "                aucun etudiant inscrit dans ce groupe
                    ";
        }
        // line 73
        echo "            </table>
        </form>
        <script src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.9.1.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-ui.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\">
            \$(document).ready(function() {
                var nb = \$('#nb').text();
                var nbAb = \$('#nbAb').text();
                //alert(nbAb);
                for (i = 1; i <= nb; i++) {
                    var id = \$('#idEt' + i).text();
                    for (j = 1; j <= nbAb; j++) {
                        var idAb = \$('#idEtAb' + j).text();

                        if (idAb == id)
                        {
                            \$('#absent' + i).attr('checked', nb);
                        }
                    }
                }
            });
            \$('#valider').click(function() {
                var nb = \$('#nb').text();
                var n = 0;
                var etudiantsAbsent = [];
                var etudiantsPresent = [];
                for (i = 1; i <= nb; i++) {
                    if (\$('#absent' + i).is(':checked')) {
                        n = n + 1;
                        etudiantsAbsent.push(parseInt(\$('#idEt' + i).text()));
                    }
                    else {
                        etudiantsPresent.push(parseInt(\$('#idEt' + i).text()));
                    }
                }
                var url = \"";
        // line 108
        echo $this->env->getExtension('routing')->getPath("abcense_modifierAbsence");
        echo "\";
                var classe = \$('#classe').attr('val');
                var groupe = \$('#groupe').text();
                var matiere = \$('#matiere').attr('val');
                var date = \$('#date').text();
                var creneau = \$('#creneau').text();
                \$.post(url, {
                    classe: classe,
                    groupe: groupe,
                    matiere: matiere,
                    date: date,
                    creneau: creneau,
                    etudiantsAbsent: etudiantsAbsent,
                    etudiantsPresent: etudiantsPresent
                }, function(data) {
                    alert(data.i);
                }, \"json\"

                        );
            });


            </script>
";
    }

    public function getTemplateName()
    {
        return "GestionAbsenceNoteBundle:Absence:modifierAbsence.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  265 => 108,  230 => 76,  226 => 75,  222 => 73,  218 => 71,  212 => 69,  197 => 67,  193 => 65,  189 => 64,  183 => 63,  180 => 62,  162 => 61,  160 => 60,  149 => 52,  144 => 49,  140 => 47,  134 => 45,  117 => 42,  113 => 41,  109 => 40,  103 => 39,  100 => 38,  82 => 37,  80 => 36,  74 => 32,  65 => 23,  58 => 21,  53 => 19,  46 => 17,  41 => 15,  31 => 8,  28 => 7,);
    }
}
