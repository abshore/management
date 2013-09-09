<?php

/* GestionAbsenceNoteBundle:Absence:validerAbsence.html.twig */
class __TwigTemplate_33915a4d486c8709c049321b7bfb6771 extends Twig_Template
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
        echo "<form id=\"form\" action=\"#\" method=\"post\">
    <div class=\"panel panel-default\">
        <div class=\"panel-heading \">
            <table class=\"table\">
                <tr>
                    <td><b>Date:</b></td>
                    <td id=\"date\">";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["date"]) ? $context["date"] : $this->getContext($context, "date")), "html", null, true);
        echo "</td>
                    <td><b>Classe:</b></td>
                    <td id=\"classe\" val=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["seance"]) ? $context["seance"] : $this->getContext($context, "seance")), "classe"), "id"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["seance"]) ? $context["seance"] : $this->getContext($context, "seance")), "classe"), "html", null, true);
        echo "</td>
                    <td><b>Groupe:</b></td>
                    <td id=\"groupe\">";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["seance"]) ? $context["seance"] : $this->getContext($context, "seance")), "groupe"), "html", null, true);
        echo "</td>
                    <td><b>Matiere:</b></td>
                    <td id=\"matiere\" val=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["seance"]) ? $context["seance"] : $this->getContext($context, "seance")), "matiere"), "id"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["seance"]) ? $context["seance"] : $this->getContext($context, "seance")), "matiere"), "html", null, true);
        echo "</td>
                    <td><b>Creneau:</b></td>
                    <td id=\"creneau\">";
        // line 22
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["seance"]) ? $context["seance"] : $this->getContext($context, "seance")), "heureDeb"), "H:i"), "html", null, true);
        echo "-->";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["seance"]) ? $context["seance"] : $this->getContext($context, "seance")), "heureFin"), "H:i"), "html", null, true);
        echo "</td>
                    
                </tr>
            </table>
            ";
        // line 31
        echo "        </div>    

        <div class=\"panel-body\" style=\"margin-left: 20%; margin-right: 20%;\">
            <table class=\"table\">
                ";
        // line 35
        if ((isset($context["etudiants"]) ? $context["etudiants"] : $this->getContext($context, "etudiants"))) {
            // line 36
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
                // line 37
                echo "                    <tr>
                        <td id=\"idEt";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index"), "html", null, true);
                echo "\" style=\"display: none;\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
                echo "</td>
                        <td>";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nom"), "html", null, true);
                echo "</td>
                        <td>";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "prenom"), "html", null, true);
                echo "</td>
                        <td><input type=\"checkbox\" id=\"absent";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index"), "html", null, true);
                echo "\"></td>";
                // line 42
                echo "                        ";
                // line 43
                echo "                        </tr>
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
            echo "                        <a style=\"display: none\" id=\"nb\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["etudiants"]) ? $context["etudiants"] : $this->getContext($context, "etudiants")), "count"), "html", null, true);
            echo "</a>
                    ";
        } else {
            // line 47
            echo "                        aucun etudiant inscrit dans ce groupe
                    ";
        }
        // line 49
        echo "                    </table>
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
        </form>
        <script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.9.1.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-ui.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\">
            \$('#valider').click(function() {
                var nb = \$('#nb').text();
                var n = 0;
                var etudiants = [];
                for (i = 1; i <= nb; i++) {
                    if (\$('#absent' + i).is(':checked')) {
                        n = n + 1;
                        etudiants.push(parseInt(\$('#idEt' + i).text()));
                    }
                }
                var url=\"";
        // line 73
        echo $this->env->getExtension('routing')->getPath("abcense_valider");
        echo "\";
                var classe = \$('#classe').attr('val');
                var groupe=\$('#groupe').text();
                var matiere=\$('#matiere').attr('val');
                var date=\$('#date').text();
                var creneau=\$('#creneau').text();
                \$.post(url,{
                    classe: classe,
                    groupe:groupe,
                    matiere:matiere,
                    date:date,
                    creneau: creneau,
                    etudiants:etudiants
                }, function (data){
                    alert(data.i);
                },\"json\"
                    
                );
            });


            </script>
";
    }

    public function getTemplateName()
    {
        return "GestionAbsenceNoteBundle:Absence:validerAbsence.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 73,  165 => 61,  161 => 60,  150 => 52,  145 => 49,  141 => 47,  135 => 45,  120 => 43,  118 => 42,  115 => 41,  111 => 40,  107 => 39,  101 => 38,  98 => 37,  80 => 36,  78 => 35,  72 => 31,  63 => 22,  56 => 20,  51 => 18,  44 => 16,  39 => 14,  31 => 8,  28 => 7,);
    }
}
