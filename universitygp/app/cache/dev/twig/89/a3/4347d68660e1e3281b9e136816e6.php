<?php

/* MvBlogBundle:AdminForum\Default:homepage.html.twig */
class __TwigTemplate_89a34347d68660e1e3281b9e136816e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("MvBlogBundle::AdminForum/layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content_body' => array($this, 'block_content_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MvBlogBundle::AdminForum/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["page_title"] = $this->env->getExtension('translator')->trans("menu.welcome", array(), "MvBlogBundle");
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (isset($context["page_title"]) ? $context["page_title"] : $this->getContext($context, "page_title")), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 6
    public function block_content_body($context, array $blocks = array())
    {
        // line 7
        echo "    ";
        $this->env->loadTemplate("MvBlogBundle:AdminForum/Default:_articleList.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "MvBlogBundle:AdminForum\\Default:homepage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 7,  39 => 6,  31 => 4,  26 => 2,);
    }
}
