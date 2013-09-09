<?php

/* GestionEmploisBundle:PlanEtude:index.html.twig */
class __TwigTemplate_2fd38e90029afc4e869f5e690954aaf7 extends Twig_Template
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
        <div style=\"text-align: left; float: left; text-decoration: underline;font-size: larger\">Plans d'Etudes</div>
        <div style=\"text-align: right\">
            <a id=\"ajoutPlan\" class=\"btn btn-primary\" url=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("planetude_new");
        echo "\" href=\"#\">
                Ajouter Plan d'Etude
            </a>
        </div>
    </div>
    <div class=\"table-responsive\">
        <table class=\"table table-bordered table-striped table-condensed table-hover\">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Formation</th>
                    <th>Diplôme</th>
                    <th>Niveau</th>
                    <th>Matiere</th>
                    <th>Chapitres</th>
                    <th>Nbheure</th>
                    <th style=\"text-align: center\">Actions</th>
                </tr>
            </thead>
            <tbody>
        ";
        // line 30
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 31
            echo "                    <tr>
                        <td><a>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "</a></td>
                        <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "formation"), "html", null, true);
            echo "</td>
                        <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "diplome"), "html", null, true);
            echo "</td>
                        <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "niveau"), "html", null, true);
            echo "</td>
                        <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "matiere"), "html", null, true);
            echo "</td>
                        <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "chapitres"), "html", null, true);
            echo "</td>
                        <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nbHeure"), "html", null, true);
            echo "</td>
                        <td style=\"text-align: right\">

                            <a class=\"btn btn-danger btn-xs\" href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("planetude_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\" onclick=\"return confirm('Vous êtes sûr de vouloir supprimer cette rubrique?')\">Supprimer</a>
                            <a class=\"modifPlan btn btn-success btn-xs\" href=\"#\" url=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("planetude_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">Modifier</a>
                        </td>
                    </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "                </tbody>
            </table>


        </div>
    </div>
    <div id=\"PlanEtude\" style=\"display: none;\"></div>
    <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.9.1.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-ui.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
                                \$('#ajoutPlan').click(function() {
                                    var url = \$(this).attr('url');
                                    \$(\"#PlanEtude\").load(url, function() {
                                        \$(this).dialog({
                                            height: 'auto',
                                            width: 'auto',
                                            modal: true,
                                            title: 'Ajouter Plan d\\'Etude',
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

                                \$('a.modifPlan').click(function() {
                                    var url = \$(this).attr('url');
                                    \$(\"#PlanEtude\").load(url, function() {
                                        \$(this).dialog({
                                            height: 'auto',
                                            width: 'auto',
                                            modal: true,
                                            title: 'Modifier Plan d\\'Etude',
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
        return "GestionEmploisBundle:PlanEtude:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 54,  124 => 53,  115 => 46,  105 => 42,  101 => 41,  95 => 38,  91 => 37,  87 => 36,  83 => 35,  79 => 34,  75 => 33,  71 => 32,  68 => 31,  64 => 30,  41 => 10,  32 => 4,  28 => 3,  24 => 2,  19 => 1,);
    }
}
