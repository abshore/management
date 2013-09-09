<?php

/* GestionEmploisBundle:AffectationEtudiant:index.html.twig */
class __TwigTemplate_a2f83b43144161d4015cb32d6ddf81ff extends Twig_Template
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
        <div style=\"text-align: left; float: left; text-decoration: underline;font-size: larger\">Liste des Classes</div>
        <div style=\"text-align: right\">
            <a id=\"ajoutAffectation\" class=\"btn btn-primary\" url=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("affectationetudiant_new");
        echo "\" href=\"#\">
                Ajouter affectation
            </a>

        </div>
    </div>
    <div class=\"table-responsive\">
        <table class=\"table table-bordered table-striped table-condensed table-hover\">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Classe</th>
                    <th>Groupe</th>
                    <th>Nbre d'etudiants</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
        ";
        // line 27
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 28
            echo "                    <tr>
                        <td><a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("affectationetudiant_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "</a></td>
                        <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "classe"), "html", null, true);
            echo "</td>
                        <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "groupe"), "html", null, true);
            echo "</td>
                        <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "etudiants"), "count"), "html", null, true);
            echo "</td>
                        <td>
                            <ul>
                                <li>
                                    <a class=\"btn btn-danger btn-xs\" href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("affectationetudiant_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\" onclick=\"return confirm('Vous êtes sûr de vouloir supprimer cette rubrique?');\">Supprimer</a>
                                </li>
                                <li>
                                    <a class=\"modifAffectation btn btn-success btn-xs\" href=\"#\" url=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("affectationetudiant_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">Modifier</a>
                                </li>
                            </ul>
                        </td>
                    </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "                </tbody>
            </table>
            <div class=\"panel-footer\" style=\"text-align: left\">
            <a class=\"\" href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("classe");
        echo "\">
                <i class=\"glyphicon glyphicon-circle-arrow-left\">retour</i>
            </a>
        </div>
        </div>
        
    </div>

    <div id=\"Affectation\" style=\"display: none;\"></div>
    <script src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.9.1.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-ui.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
                                        \$('#ajoutAffectation').click(function() {
                                            var url = \$(this).attr('url');
                                            \$(\"#Affectation\").load(url, function() {
                                                \$(this).dialog({
                                                    height: 'auto',
                                                    width: '300',
                                                    modal: true,
                                                    title: 'Ajouter Affectation',
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

                                        \$('a.modifAffectation').click(function() {
                                            var url = \$(this).attr('url');
                                            \$(\"#Affectation\").load(url, function() {
                                                \$(this).dialog({
                                                    height: 'auto',
                                                    width: '300',
                                                    modal: true,
                                                    title: 'Modifier Affectation',
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



        </script>       ";
    }

    public function getTemplateName()
    {
        return "GestionEmploisBundle:AffectationEtudiant:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 58,  124 => 57,  112 => 48,  107 => 45,  95 => 39,  89 => 36,  82 => 32,  78 => 31,  74 => 30,  68 => 29,  65 => 28,  61 => 27,  40 => 9,  32 => 4,  28 => 3,  24 => 2,  19 => 1,);
    }
}
