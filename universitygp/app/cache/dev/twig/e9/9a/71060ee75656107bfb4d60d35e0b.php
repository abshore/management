<?php

/* MvBlogBundle::_logout-link.html.twig */
class __TwigTemplate_e99a71060ee75656107bfb4d60d35e0b extends Twig_Template
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
        // line 4
        echo "<a href=\"";
        echo $this->env->getExtension('routing')->getPath("_badp_logout");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.logout", array(), "MvBlogBundle"), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username"), "html", null, true);
        echo ")</a>
";
    }

    public function getTemplateName()
    {
        return "MvBlogBundle::_logout-link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 4,  24 => 2,  19 => 4,  79 => 21,  76 => 20,  70 => 18,  66 => 17,  62 => 16,  57 => 15,  54 => 14,  43 => 7,  40 => 10,  32 => 6,  99 => 24,  92 => 25,  90 => 24,  83 => 20,  77 => 19,  71 => 18,  65 => 17,  59 => 16,  51 => 12,  48 => 11,  38 => 8,  35 => 7,  29 => 3,  27 => 3,  49 => 10,  42 => 7,  39 => 6,  31 => 4,  26 => 2,);
    }
}
