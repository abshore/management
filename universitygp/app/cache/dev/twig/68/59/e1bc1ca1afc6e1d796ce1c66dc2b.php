<?php

/* GestionEmploisBundle::layout.html.twig */
class __TwigTemplate_6859e1bc1ca1afc6e1d796ce1c66dc2b extends Twig_Template
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

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"panel panel-info\">
    <div class=\"panel-heading\">
        <h3 class=\"panel-title\">Gestion emplois du temps</h3>
    </div>
    <div class=\"panel-body\" style=\"margin-left: 15%; margin-right: 15%\">
        <div class=\"tabbable\" style=\"width: auto; height: auto\">
            <ul class=\"nav nav-tabs\">
                <li class=\"active\"><a href=\"#pane1\" data-toggle=\"tab\">Formation</a></li>
                <li><a href=\"#pane2\" data-toggle=\"tab\">Diplôme</a></li>
                <li><a href=\"#pane3\" data-toggle=\"tab\">Matieres</a></li>
                <li><a href=\"#pane4\" data-toggle=\"tab\">Plan d'Etude</a></li>
                <li><a href=\"#pane5\" data-toggle=\"tab\">Classe</a></li>
                <li><a href=\"#pane6\" data-toggle=\"tab\">Gestion des affectations</a></li>
                <li><a href=\"#pane7\" data-toggle=\"tab\">Salles</a></li>
                <li><a href=\"#pane8\" data-toggle=\"tab\">Emplois de temps</a></li>
            </ul>
            <div class=\"tab-content\">
                <div id=\"pane1\" class=\"tab-pane active\">
                    <br>
                    <iframe id=\"iframe\" src=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("formationE");
        echo "\" style=\"width: 100%; height: 500px;\" frameborder=\"no\"></iframe>
                </div>
                <div id=\"pane2\" class=\"tab-pane\">
                    <br>
                    <iframe id=\"iframe\" src=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("diplome");
        echo "\" style=\"width: 100%; height: 500px;\" frameborder=\"no\"></iframe>
                </div>
                <div id=\"pane3\" class=\"tab-pane\">
                    <br>
                    <iframe id=\"iframe\" src=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("matiere");
        echo "\" style=\"width: 100%; height: 500px;\" frameborder=\"no\"></iframe>
                </div>
                <div id=\"pane4\" class=\"tab-pane\">
                    <br>
                    <iframe id=\"iframe4\" src=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("planetude");
        echo "\" style=\"width: 100%; height: 500px;\" frameborder=\"no\"></iframe>
                </div>
                <div id=\"pane5\" class=\"tab-pane\">
                    <br>
                    <iframe id=\"iframe5\" src=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("classe");
        echo "\" style=\"width: 100%; height: 500px;\" frameborder=\"no\"></iframe>
                </div>
                <div id=\"pane6\" class=\"tab-pane\">
                    <br>
                    <iframe id=\"iframe6\" src=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("affectationplan");
        echo "\" style=\"width: 100%; height: 500px;\" frameborder=\"no\"></iframe>
                </div>
                <div id=\"pane7\" class=\"tab-pane\">
                    <br>
                    <iframe id=\"iframe7\" src=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("salle");
        echo "\" style=\"width: 100%; height: 500px;\" frameborder=\"no\"></iframe>
                </div>
                <div id=\"pane8\" class=\"tab-pane\">
                    <br>
                    <iframe id=\"iframe8\" src=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("emploi");
        echo "\" style=\"width: 100%; height: 500px;\" frameborder=\"no\"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>

<script src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.9.1.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-ui.js"), "html", null, true);
        echo "\"></script>
 ";
    }

    public function getTemplateName()
    {
        return "GestionEmploisBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 59,  111 => 58,  101 => 51,  94 => 47,  87 => 43,  80 => 39,  73 => 35,  66 => 31,  59 => 27,  52 => 23,  31 => 4,  28 => 3,);
    }
}
