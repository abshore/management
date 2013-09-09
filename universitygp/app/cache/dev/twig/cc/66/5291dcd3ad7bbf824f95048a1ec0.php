<?php

/* GestionEmploisBundle:Matiere:index.html.twig */
class __TwigTemplate_cc665291dcd3ad7bbf824f95048a1ec0 extends Twig_Template
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
        echo "

<link href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap-theme.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
<link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
<link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/jquery-ui.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
<script src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<div class=\"panel panel-info\">

    <div class=\"panel-heading \">
        <div style=\"text-align: left; float: left; text-decoration: underline;font-size: larger\">Liste des Matières</div>
        <div style=\"text-align: right\">
            <a id=\"ajoutMatiere\" class=\"btn btn-primary\" href=\"#\" url=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("matiere_new");
        echo "\">
                Ajouter Matiere
            </a>
        </div>
    </div>
    <div class=\"table-responsive\">
        <table class=\"table table-bordered table-striped table-condensed table-hover\">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Code</th>
                    <th>Libelle</th>

                    <th style=\"text-align: center\">Actions</th>
                </tr>
            </thead>
            <tbody>
        ";
        // line 29
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 30
            echo "                    <tr>
                        <td><a>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "</a></td>
                        <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "code"), "html", null, true);
            echo "</td>
                        <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "libelle"), "html", null, true);
            echo "</td>

                        <td style=\"text-align: right\">
                            <ul>

                                <a class=\"btn btn-danger btn-xs\" href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("matiere_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\" onclick=\"return confirm('Vous êtes sûr de vouloir supprimer cette rubrique?')\">Supprimer</a>

                                <a class=\"modifMatiere btn btn-success btn-xs\" href=\"#\" url=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("matiere_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">Modifier</a>

                            </ul>
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
    <div id=\"Matiere\" style=\"display: none;\"></div>

    <script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.9.1.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-ui.js"), "html", null, true);
        echo "\"></script>

    <script type=\"text/javascript\">
                                \$('#ajoutMatiere').click(function() {
                                    var url = \$(this).attr('url');
                                    \$(\"#Matiere\").load(url, function() {
                                        \$(this).dialog({
                                            height: 'auto',
                                            width: 'auto',
                                            modal: true,
                                            title: 'Ajouter Matiere',
                                            position: 'center',
                                            overlay: {
                                                backgroundColor: '#000',
                                                opacity: 0.5
                                            },
                                            close: function() {
                                                \$(this).dialog('close');
                                                self.location.reload();
                                            }

                                        });
                                    });
                                });

                                \$('a.modifMatiere').click(function() {
                                    var url = \$(this).attr('url');
                                    \$(\"#Matiere\").load(url, function() {
                                        \$(this).dialog({
                                            height: 'auto',
                                            width: 'auto',
                                            modal: true,
                                            title: 'Modifier Matiere',
                                            position: 'center',
                                            overlay: {
                                                backgroundColor: '#000',
                                                opacity: 0.5
                                            },
                                            close: function() {
                                                \$(this).dialog('close');
                                                self.location.reload();

                                            }

                                        });
                                    });
                                });



        </script>



";
    }

    public function getTemplateName()
    {
        return "GestionEmploisBundle:Matiere:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 56,  115 => 55,  104 => 46,  92 => 40,  87 => 38,  79 => 33,  75 => 32,  71 => 31,  68 => 30,  64 => 29,  44 => 12,  35 => 6,  31 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }
}
