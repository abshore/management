<?php

/* GestionEmploisBundle:Classe:index.html.twig */
class __TwigTemplate_9665197b11b38b016070b4582f4ef44d extends Twig_Template
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
            <a id=\"ajoutClasse\" class=\"btn btn-primary\" url=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("classe_new");
        echo "\" href=\"#\">
                Ajouter Classe
            </a>
            <a id=\"affectation\" class=\"btn btn-default\" href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("affectationetudiant");
        echo "\">
                Affectation des étudiants
            </a>
        </div>
    </div>
    <div class=\"table-responsive\">
        <table class=\"table table-bordered table-striped table-condensed table-hover\">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Code</th>
                    <th>Nbgroupe</th>
                    <th>Formation</th>
                    <th>Diplôme</th>
                    <th>Niveau</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
        ";
        // line 31
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 32
            echo "                    <tr>
                        <td><a>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "</a></td>
                        <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "code"), "html", null, true);
            echo "</td>
                        <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nbGroupe"), "html", null, true);
            echo "</td>
                        <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "formation"), "html", null, true);
            echo "</td>
                        <td id=\"diplome\">";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "diplome"), "html", null, true);
            echo "</td>
                        <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "niveau"), "html", null, true);
            echo "</td>
                        <td style=\"text-align: right\">
                            <a class=\"btn btn-danger btn-xs\" href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classe_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\" onclick=\"return confirm('Vous êtes sûr de vouloir supprimer cette rubrique?');\">Supprimer</a>
                            <a class=\"modifClasse btn btn-success btn-xs\" href=\"#\" url=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classe_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">Modifier</a>
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
        </div>
    </div>


    <div id=\"Classe\" style=\"display: none;\"></div>
    <script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.9.1.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-ui.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
        
                        \$('#ajoutClasse').click(function() {
                            var url = \$(this).attr('url');
                            \$(\"#Classe\").load(url, function() {
                                \$(this).dialog({
                                    height: 'auto',
                                    width: 'auto',
                                    modal: true,
                                    title: 'Ajouter Classe',
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

                        \$('a.modifClasse').click(function() {
                            var url = \$(this).attr('url');
                            \$(\"#Classe\").load(url, function() {
                                \$(this).dialog({
                                    height: 'auto',
                                    width: 'auto',
                                    modal: true,
                                    title: 'Modifier Classe',
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
        return "GestionEmploisBundle:Classe:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 53,  123 => 52,  114 => 45,  104 => 41,  100 => 40,  95 => 38,  91 => 37,  87 => 36,  83 => 35,  79 => 34,  75 => 33,  72 => 32,  68 => 31,  46 => 12,  40 => 9,  32 => 4,  28 => 3,  24 => 2,  19 => 1,);
    }
}
