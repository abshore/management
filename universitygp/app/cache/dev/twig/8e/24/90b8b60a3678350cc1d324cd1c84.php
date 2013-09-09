<?php

/* GestionEmploisBundle:Emploi:Emploi.html.twig */
class __TwigTemplate_8e2490b8b60a3678350cc1d324cd1c84 extends Twig_Template
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

<form class=\"form-inline\" id=\"form\" method=\"POST\" action=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("emploi_emploiClasse");
        echo "\">
    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <table style=\"width: 100%\">
                <tr>
                    <td>
                        <div class=\"form-group\">
                            <select id=\"classes\" name=\"classe\" url=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("emploi_emploiClasse");
        echo "\" class=\"form-control\">
                                <option id=\"\"></option>
                                ";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")));
        foreach ($context['_seq'] as $context["_key"] => $context["classe"]) {
            // line 16
            echo "                                <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classe"]) ? $context["classe"] : $this->getContext($context, "classe")), "id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classe"]) ? $context["classe"] : $this->getContext($context, "classe")), "code"), "html", null, true);
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['classe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "                            </select>
                        </div>
                        <div class=\"form-group\">
                            <select id=\"groupe\" class=\"form-control\">
                                <option value=\"\"></option>
                            </select>
                        </div>
                    </td>
                    <td style=\"text-align: right\">
                        <div class=\"form-group\">
                            <a class=\"\" href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("emploi");
        echo "\">
                                <i class=\"glyphicon glyphicon-circle-arrow-left\">retour</i>
                            </a>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    ";
        // line 38
        echo "</form>

";
        // line 41
        echo "<div id=\"emploi\" style=\"display: none\"></div>

<script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.9.1.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-ui.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">

    \$('#classes').change(function() {
        var classe = \$(this).val();
        \$.post(\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("emploi_getmatiere");
        echo "\",
                {classe: classe
                }, function(data) {
            \$('#groupe').empty();
            \$('#groupe').append(data.groupes);
        },
                \"json\");

    });

    \$('#groupe').change(function() {
        var classe = \$('#classes').val();
        var groupe = \$(this).val();
        \$.post(\"";
        // line 62
        echo $this->env->getExtension('routing')->getPath("emploi_emploiClasse");
        echo "\", {
            classe: classe,
            groupe: groupe
        }, function(data) {
            \$('#emploi').empty();
            \$('#emploi').show();
            \$('#emploi').append(data.groupe);
        }, \"json\");
    });




    </script>";
    }

    public function getTemplateName()
    {
        return "GestionEmploisBundle:Emploi:Emploi.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 62,  111 => 49,  103 => 44,  99 => 43,  95 => 41,  91 => 38,  79 => 28,  67 => 18,  56 => 16,  52 => 15,  47 => 13,  37 => 6,  32 => 4,  28 => 3,  24 => 2,  19 => 1,);
    }
}
