<?php

/* GestionEmploisBundle:Formation:index.html.twig */
class __TwigTemplate_de28a3b0a9928ea8d610b33e385ff522 extends Twig_Template
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
        <div style=\"text-align: left; float: left; text-decoration: underline;font-size: larger\">Liste des Formations</div>
        <div style=\"text-align: right\">
            <a id=\"ajoutFormation\" class=\"btn btn-primary\" href=\"#\" url=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("formationE_new");
        echo "\">
                Ajouter Formation
            </a>
        </div>
    </div>
    <div class=\"table-responsive\">
        <table class=\"table table-bordered table-striped table-condensed table-hover\">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nom</th>
                    <th style=\"text-align: center\">Actions</th>
                </tr>
            </thead>
            <tbody>
        ";
        // line 24
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 25
            echo "                    <tr>
                        <td><a>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "</a></td>
                        <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nom"), "html", null, true);
            echo "</td>
                        <td style=\"text-align: right\">
                            
                                    <a class=\"btn btn-danger btn-xs\" href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("formationE_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\" onclick=\"return confirm('Vous êtes sûr de vouloir supprimer cette rubrique?')\">Supprimer</a>
                                
                                    <a class=\"modifFormation btn btn-success btn-xs\" href=\"#\" url=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("formationE_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">Modifier</a>
                                
                           
                        </td>
                    </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "                </tbody>
            </table>
        </div>
    </div>
<div id=\"Formation\" style=\"display: none;\"></div>

    <script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.9.1.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-ui.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
                                \$('#ajoutFormation').click(function() {
                                    var url = \$(this).attr('url');
                                    \$(\"#Formation\").load(url, function() {
                                        \$(this).dialog({
                                            height: 'auto',
                                            width: 'auto',
                                            modal: true,
                                            title: 'Ajouter Formation',
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

                                \$('a.modifFormation').click(function() {
                                    var url = \$(this).attr('url');
                                    \$(\"#Formation\").load(url, function() {
                                        \$(this).dialog({
                                            height: 'auto',
                                            width: 'auto',
                                            modal: true,
                                            title: 'Modifier Formation',
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



        </script>

";
    }

    public function getTemplateName()
    {
        return "GestionEmploisBundle:Formation:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 45,  100 => 44,  92 => 38,  80 => 32,  75 => 30,  69 => 27,  65 => 26,  62 => 25,  58 => 24,  40 => 9,  32 => 4,  28 => 3,  24 => 2,  19 => 1,);
    }
}
