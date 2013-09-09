<?php

/* MvBlogBundle:AdminForum\Post:new.html.twig */
class __TwigTemplate_200a45641bcf3765526702867e4f5a41 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("MvBlogBundle::AdminForum/admin-layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content_body' => array($this, 'block_content_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MvBlogBundle::AdminForum/admin-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["page_title"] = $this->env->getExtension('translator')->trans("admin.post.create", array(), "MvBlogBundle");
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
        echo "<h1>";
        echo twig_escape_filter($this->env, (isset($context["page_title"]) ? $context["page_title"] : $this->getContext($context, "page_title")), "html", null, true);
        echo "</h1>

<form action=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("badp_forumpost_create");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
;
        echo ">
    ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "

<ul class=\"record_actions\">
    ";
        // line 13
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 14
            echo "    <li>
        <a href=\"";
            // line 15
            echo $this->env->getExtension('routing')->getPath("badp_forumpost");
            echo "\">
            ";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.back", array(), "MvBlogBundle"), "html", null, true);
            echo "
        </a>
    </li>
    ";
        } else {
            // line 20
            echo "    <li>
        <a href=\"";
            // line 21
            echo $this->env->getExtension('routing')->getPath("forum_homepage");
            echo "\">
           ";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.back", array(), "MvBlogBundle"), "html", null, true);
            echo "
        </a>
    </li>
    ";
        }
        // line 26
        echo "    <li><button type=\"submit\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.register", array(), "MvBlogBundle"), "html", null, true);
        echo "</button></li>
</ul>
</form>
";
    }

    public function getTemplateName()
    {
        return "MvBlogBundle:AdminForum\\Post:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 26,  84 => 22,  80 => 21,  77 => 20,  70 => 16,  66 => 15,  63 => 14,  61 => 13,  55 => 10,  48 => 9,  42 => 7,  39 => 6,  31 => 4,  26 => 2,);
    }
}
