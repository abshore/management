<?php

/* MvBlogBundle::admin-layout.html.twig */
class __TwigTemplate_a125a048d0b6de5b31a477ee1647165a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("MvBlogBundle::base.admin-layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'blog_body' => array($this, 'block_blog_body'),
            'content_body' => array($this, 'block_content_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MvBlogBundle::base.admin-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        if (array_key_exists("form", $context)) {
            // line 4
            $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "MvBlogBundle::form_div_layout.html.twig"));
        }
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "page"), "method") > 1)) {
            echo " (page ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "page"), "method"), "html", null, true);
            echo ")";
        }
    }

    // line 11
    public function block_blog_body($context, array $blocks = array())
    {
        // line 12
        echo "    ";
        $this->env->loadTemplate("MvBlogBundle::flashes.html.twig")->display($context);
        echo "    
  <div id=\"mv_blog_page\">
    <div id=\"mv_blog_menu_left\">
    <ul>
      <li><a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("blog_homepage");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.view", array(), "MvBlogBundle"), "html", null, true);
        echo "</a></li>
      <li><a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("badp_category");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.categories", array(), "MvBlogBundle"), "html", null, true);
        echo "</a></li>
      <li><a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("badp_post");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.posts", array(), "MvBlogBundle"), "html", null, true);
        echo "</a></li>
      <li><a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("badp_comment");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.comments", array(), "MvBlogBundle"), "html", null, true);
        echo "</a></li>
      <li>";
        // line 20
        $this->env->loadTemplate("MvBlogBundle::_logout-link.html.twig")->display($context);
        echo "</li>
    </ul>
    </div>
    <div id=\"mv_blog_body\">
        ";
        // line 24
        $this->displayBlock('content_body', $context, $blocks);
        // line 25
        echo "    </div>
    <div class=\"clear\"></div>
  </div>
";
    }

    // line 24
    public function block_content_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "MvBlogBundle::admin-layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 24,  92 => 25,  90 => 24,  83 => 20,  77 => 19,  71 => 18,  65 => 17,  59 => 16,  51 => 12,  48 => 11,  38 => 8,  35 => 7,  29 => 4,  27 => 3,  49 => 10,  42 => 7,  39 => 6,  31 => 4,  26 => 2,);
    }
}
