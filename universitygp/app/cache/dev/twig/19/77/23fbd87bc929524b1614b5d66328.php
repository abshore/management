<?php

/* MvBlogBundle::AdminForum/layout.html.twig */
class __TwigTemplate_197723fbd87bc929524b1614b5d66328 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("MvBlogBundle::AdminForum/base.layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'blog_body' => array($this, 'block_blog_body'),
            'content_body' => array($this, 'block_content_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MvBlogBundle::AdminForum/base.layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        if (array_key_exists("form", $context)) {
            // line 4
            $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "MvBlogBundle::AdminForum/form_div_layout.html.twig"));
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
        $this->env->loadTemplate("MvBlogBundle::AdminForum/flashes.html.twig")->display($context);
        // line 13
        echo "  <div id=\"mv_blog_page\">
    <div id=\"mv_blog_menu_left\">
      ";
        // line 15
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("MvBlogBundle:AdminForum/Default:menu"), array());
        // line 16
        echo "    </div>
    <div id=\"mv_blog_body\">
        ";
        // line 18
        $this->displayBlock('content_body', $context, $blocks);
        // line 19
        echo "    </div>
    <div class=\"clear\"></div>
  </div>
";
    }

    // line 18
    public function block_content_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "MvBlogBundle::AdminForum/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 18,  66 => 19,  64 => 18,  60 => 16,  58 => 15,  54 => 13,  51 => 12,  48 => 11,  38 => 8,  35 => 7,  29 => 4,  27 => 3,  42 => 7,  39 => 6,  31 => 4,  26 => 2,);
    }
}
