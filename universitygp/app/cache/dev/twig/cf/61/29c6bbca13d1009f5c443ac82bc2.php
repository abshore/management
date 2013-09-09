<?php

/* MvBlogBundle::AdminForum/base.admin-layout.html.twig */
class __TwigTemplate_cf6129c6bbca13d1009f5c443ac82bc2 extends Twig_Template
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
        echo "    Admin Forum
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mvblog/css/admin-blog.css"), "html", null, true);
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
        return "MvBlogBundle::AdminForum/base.admin-layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 20,  70 => 18,  66 => 17,  62 => 16,  57 => 15,  54 => 14,  43 => 11,  32 => 6,  167 => 48,  160 => 49,  158 => 48,  154 => 46,  146 => 42,  136 => 38,  132 => 37,  125 => 36,  115 => 32,  107 => 30,  105 => 29,  102 => 28,  99 => 27,  95 => 26,  92 => 25,  85 => 21,  79 => 21,  73 => 19,  67 => 18,  63 => 17,  60 => 16,  58 => 15,  51 => 12,  48 => 11,  38 => 8,  35 => 7,  29 => 4,  27 => 3,  47 => 10,  40 => 10,  37 => 6,  31 => 4,  26 => 2,);
    }
}
