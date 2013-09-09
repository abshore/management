<?php

/* GestionEmploisBundle:Emploi:index.html.twig */
class __TwigTemplate_867f51fc4bf65700fcec252ab1375513 extends Twig_Template
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

<div class=\"panel panel-info\">
    <div class=\"panel-heading \">
        <div style=\"text-align: left; float: left; text-decoration: underline;font-size: larger\">Liste des Seances</div>
        <div style=\"text-align: right\">
            <a id=\"ajoutSeance\" class=\"btn btn-primary\" url=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("emploi_new");
        echo "\" href=\"#\">
                Ajouter Seance
            </a>
            <a id=\"voirEmplois\" class=\"btn btn-default\" href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("emploi_voirEmplois");
        echo "\">
                Visualisez Emplois
            </a>
        </div>
    </div>
    <div class=\"table-responsive\">
        <table class=\"table table-bordered table-striped table-condensed table-hover\">
            <thead>
                <tr>

                    <th>Classe</th>
                    <th>Groupe</th>
                    <th>Matiere</th>
                    <th>Prof</th>
                    <th>Jour</th>
                    <th>Heuredeb</th>
                    <th>Heurefin</th>
                    <th>Salle</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
        ";
        // line 35
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 36
            echo "                    <tr>

                        <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "classe"), "html", null, true);
            echo "</td>
                        <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "groupe"), "html", null, true);
            echo "</td>
                        <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "matiere"), "html", null, true);
            echo "</td>
                        <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "prof"), "html", null, true);
            echo "</td>
                        <td>";
            // line 42
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "jour")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "jour"), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                        <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "heureDeb"), "H:i"), "html", null, true);
            echo "</td>
                        <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "heureFin"), "H:i"), "html", null, true);
            echo "</td>
                        <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "salle"), "html", null, true);
            echo "</td>
                        <td style=\"text-align: right\">
                            <a class=\"btn btn-danger btn-xs\" href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("emploi_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\" onclick=\"return confirm('Vous êtes sûr de vouloir supprimer cette rubrique?');\">Supprimer</a>
                            <a class=\"modifSeance btn btn-success btn-xs\" href=\"#\" url=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("emploi_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">Modifier</a>
                        </td>
                    </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "                </tbody>
            </table>
        </div>
    </div>


    <div id=\"Seance\" style=\"display: none;\"></div>
    <script src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.9.1.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-ui.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
                        \$('#ajoutSeance').click(function() {
                            var url = \$(this).attr('url');
                            \$(\"#Seance\").load(url, function() {
                                \$(this).dialog({
                                    height: 'auto',
                                    width: 'auto',
                                    modal: true,
                                    title: 'Ajouter Seance',
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

                        \$('a.modifSeance').click(function() {
                            var url = \$(this).attr('url');
                            \$(\"#Seance\").load(url, function() {
                                \$(this).dialog({
                                    height: 'auto',
                                    width: 'auto',
                                    modal: true,
                                    title: 'Modifier Seance',
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



        </script>";
    }

    public function getTemplateName()
    {
        return "GestionEmploisBundle:Emploi:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 60,  138 => 59,  129 => 52,  119 => 48,  115 => 47,  110 => 45,  106 => 44,  102 => 43,  96 => 42,  92 => 41,  88 => 40,  84 => 39,  80 => 38,  76 => 36,  72 => 35,  47 => 13,  41 => 10,  32 => 4,  28 => 3,  24 => 2,  19 => 1,);
    }
}
