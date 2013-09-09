<?php

/* GestionEmploisBundle:Diplome:index.html.twig */
class __TwigTemplate_d15237490ecead1ca275e03114c58d16 extends Twig_Template
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
        <div style=\"text-align: left; float: left; text-decoration: underline;font-size: larger\">Liste des Diplômes</div>
        <div style=\"text-align: right\">
            <a id=\"ajoutDiplome\" class=\"btn btn-primary\" href=\"#\" url=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("diplome_new");
        echo "\">
                Ajouter Diplôme
            </a>
        </div>
    </div>
    <div class=\"table-responsive\">

        <table class=\"table table-bordered table-striped table-condensed table-hover\">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Titre</th>
                    <th>Periode</th>
                    <th>Niveau</th>
                    <th style=\"text-align: center\">Actions</th>
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
                        <td><a>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "</a></td>
                        <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "titre"), "html", null, true);
            echo "</td>
                        <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "periode"), "html", null, true);
            echo "</td>
                        <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "niveau"), "html", null, true);
            echo "</td>
                        <td style=\"text-align: right\">

                            <a class=\"btn btn-danger btn-xs\" href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("diplome_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\" onclick=\"return confirm('Vous êtes sûr de vouloir supprimer cette rubrique?')\">Supprimer</a>

                            <a class=\"modifDiplome btn btn-success btn-xs\" href=\"#\" url=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("diplome_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">Modifier</a>

                        </td>
                    </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "                </tbody>
            </table>
        </div>
    </div>

    <div id=\"Diplome\" style=\"display: none;\"></div>

    <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.9.1.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-ui.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
                            \$('#ajoutDiplome').click(function() {
                                var url = \$(this).attr('url');
                                \$(\"#Diplome\").load(url, function() {
                                    \$(this).dialog({
                                        height: 'auto',
                                        width: 'auto',
                                        modal: true,
                                        title: 'Ajouter Diplôme',
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

                            \$('a.modifDiplome').click(function() {
                                var url = \$(this).attr('url');
                                \$(\"#Diplome\").load(url, function() {
                                    \$(this).dialog({
                                        height: 'auto',
                                        width: 'auto',
                                        modal: true,
                                        title: 'Modifier Diplôme',
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
        return "GestionEmploisBundle:Diplome:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 50,  111 => 49,  102 => 42,  91 => 37,  86 => 35,  80 => 32,  76 => 31,  72 => 30,  68 => 29,  65 => 28,  61 => 27,  40 => 9,  32 => 4,  28 => 3,  24 => 2,  19 => 1,);
    }
}
