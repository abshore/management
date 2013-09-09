<?php

/* GestionAbsenceNoteBundle:Absence:accueilAbsence.html.twig */
class __TwigTemplate_ab393a8a9d50d8eac36649812b6dc91e extends Twig_Template
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
        echo "<form id=\"form\" class=\"form-inline\" style=\"text-align: center\">
    <div class=\"form-group\">
        <input id=\"date\" type=\"date\" class=\"form-control\" placeholder=\"selectionner la date\"/>
    </div>
    <div class=\"form-group\">
        <input type=\"button\" value=\"valider\" id=\"valider\" url=\"\" class=\"form-control\"/>
    </div>
</form>
<br>
<div id=\"gestionAbsence\" style=\"text-align: center\"></div>

<script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.9.1.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-ui.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">
    \$(function() {
        \$(\"#date\").datepicker({dateFormat: 'dd-mm-yy', showWeek: true, firstDay: 1});
    });
    \$('#valider').click(function() {
        var dat = \$('#date').val();
        var url = \"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("absence_gestion");
        echo "\";
        \$('#gestionAbsence').load(url, 'date=' + dat);

    });
    </script>

";
    }

    public function getTemplateName()
    {
        return "GestionAbsenceNoteBundle:Absence:accueilAbsence.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 23,  48 => 16,  44 => 15,  31 => 4,  28 => 3,);
    }
}
