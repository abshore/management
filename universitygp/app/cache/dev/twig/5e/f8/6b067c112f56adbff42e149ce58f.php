<?php

/* MvBlogBundle:AdminBlog\Secured:index.html.twig */
class __TwigTemplate_5ef86b067c112f56adbff42e149ce58f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("MvBlogBundle::admin-layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content_body' => array($this, 'block_content_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MvBlogBundle::admin-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["page_title"] = $this->env->getExtension('translator')->trans("Blog Administration", array(), "MvBlogBundle");
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

<p>
    ";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("From this section you can manage your posts, categories blog, etc ...", array(), "MvBlogBundle"), "html", null, true);
        echo "
</p>
";
    }

    public function getTemplateName()
    {
        return "MvBlogBundle:AdminBlog\\Secured:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 10,  42 => 7,  39 => 6,  31 => 4,  26 => 2,);
    }
}
