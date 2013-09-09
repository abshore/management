<?php

/* GestionAbsenceNoteBundle:Absence:gestionAbsence.html.twig */
class __TwigTemplate_9d1010ee36021c1f0728994bfca67a39 extends Twig_Template
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
        <b>";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["dat"]) ? $context["dat"] : $this->getContext($context, "dat")), "html", null, true);
        echo "</b>
    </div>
<div class=\"table-responsive\" style=\"margin-right: 20%; margin-left: 20%\">
    <table class=\"table table-striped table-condensed table-hover\" style=\"text-align: left\">
        <thead>
            <tr>
                <th>Creneau</th>
                <th>Classe</th>
                <th>Groupe</th>
                <th>Matiere</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["seances"]) ? $context["seances"] : $this->getContext($context, "seances")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 22
            echo "            <tr>
                
                <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "heureDeb"), "H:i"), "html", null, true);
            echo "-->";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "heureFin"), "H:i"), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "classe"), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "groupe"), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "matiere"), "html", null, true);
            echo "</td>
                
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("absence_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">imprimer</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("absence_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "dat" => (isset($context["dat"]) ? $context["dat"] : $this->getContext($context, "dat")))), "html", null, true);
            echo "\">edit</a>
                    </li>
                </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "        </tbody>
    </table>

    </div> 
  
    </div>";
    }

    public function getTemplateName()
    {
        return "GestionAbsenceNoteBundle:Absence:gestionAbsence.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 41,  91 => 35,  85 => 32,  77 => 27,  73 => 26,  69 => 25,  63 => 24,  59 => 22,  55 => 21,  38 => 7,  32 => 4,  28 => 3,  24 => 2,  19 => 1,);
    }
}
