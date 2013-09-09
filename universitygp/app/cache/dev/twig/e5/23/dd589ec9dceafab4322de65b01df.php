<?php

/* MvBlogBundle::AdminForum/base.layout.html.twig */
class __TwigTemplate_e523dd589ec9dceafab4322de65b01df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'blog_body' => array($this, 'block_blog_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
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

    // line 6
    public function block_title($context, array $blocks = array())
    {
        // line 7
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username"), "html", null, true);
        echo "
";
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        // line 11
        echo "    ";
        $this->displayBlock('blog_body', $context, $blocks);
        echo " 
";
    }

    public function block_blog_body($context, array $blocks = array())
    {
    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 15
        echo "  ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
  <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mvblog/css/default.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
  <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mvblog/css/blog.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
  <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mvblog/css/colours.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
    }

    // line 20
    public function block_javascripts($context, array $blocks = array())
    {
        // line 21
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "MvBlogBundle::AdminForum/base.layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 21,  78 => 20,  72 => 18,  68 => 17,  59 => 15,  56 => 14,  45 => 11,  32 => 6,  73 => 18,  66 => 19,  64 => 16,  60 => 16,  58 => 15,  54 => 13,  51 => 12,  48 => 11,  38 => 8,  35 => 7,  29 => 4,  27 => 3,  42 => 10,  39 => 6,  31 => 4,  26 => 2,);
    }
}
