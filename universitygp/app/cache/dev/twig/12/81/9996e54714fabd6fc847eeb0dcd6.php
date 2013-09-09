<?php

/* MvBlogBundle::AdminForum/admin-layout.html.twig */
class __TwigTemplate_12819996e54714fabd6fc847eeb0dcd6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("MvBlogBundle::AdminForum/base.admin-layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'blog_body' => array($this, 'block_blog_body'),
            'content_body' => array($this, 'block_content_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MvBlogBundle::AdminForum/base.admin-layout.html.twig";
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
        $this->env->loadTemplate("MvBlogBundle::AdminForum/flashes.html.twig")->display($context);
        echo "    
  <div id=\"mv_blog_page\">
    <div id=\"mv_blog_menu_left\">
    ";
        // line 15
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 16
            echo "        <ul>
      <li class=\"alert alert-warning\"><a href=\"";
            // line 17
            echo $this->env->getExtension('routing')->getPath("forum_homepage");
            echo "\">View my Forum</a></li>
      <li class=\"alert alert-warning\"><a href=\"";
            // line 18
            echo $this->env->getExtension('routing')->getPath("badp_forumcategory");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.categories", array(), "MvBlogBundle"), "html", null, true);
            echo "</a></li>
      <li class=\"alert alert-warning\"><a href=\"";
            // line 19
            echo $this->env->getExtension('routing')->getPath("badp_forumpost");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.posts", array(), "MvBlogBundle"), "html", null, true);
            echo "</a></li>
      <li class=\"alert alert-warning\"><a href=\"";
            // line 20
            echo $this->env->getExtension('routing')->getPath("badp_forumcomment");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.comments", array(), "MvBlogBundle"), "html", null, true);
            echo "</a></li>
      <li class=\"alert alert-warning\">";
            // line 21
            $this->env->loadTemplate("MvBlogBundle::_logout-link.html.twig")->display($context);
            echo "</li>
    </ul>
    
        ";
        } else {
            // line 25
            echo "            <ul >
";
            // line 26
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "categories"));
            foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
                // line 27
                echo "    ";
                if (($this->getAttribute($this->getAttribute((isset($context["cat"]) ? $context["cat"] : $this->getContext($context, "cat")), "children"), "count") == 0)) {
                    // line 28
                    echo "        <li>
        ";
                    // line 29
                    if ($this->getAttribute((isset($context["cat"]) ? $context["cat"] : $this->getContext($context, "cat")), "parent")) {
                        // line 30
                        echo "            <a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("forum_category_list", $this->getAttribute($this->getAttribute((isset($context["cat"]) ? $context["cat"] : $this->getContext($context, "cat")), "parent"), "routingParams")), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["cat"]) ? $context["cat"] : $this->getContext($context, "cat")), "parent"), "title"), "html", null, true);
                        echo "</a> > 
        ";
                    }
                    // line 32
                    echo "        <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("forum_category_list", $this->getAttribute((isset($context["cat"]) ? $context["cat"] : $this->getContext($context, "cat")), "routingParams")), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cat"]) ? $context["cat"] : $this->getContext($context, "cat")), "title"), "html", null, true);
                    echo "</a>
        </li>
         
    ";
                } elseif ((($this->getAttribute($this->getAttribute((isset($context["cat"]) ? $context["cat"] : $this->getContext($context, "cat")), "children"), "count") > 0) && (twig_length_filter($this->env, $this->env->getExtension('mv_extension')->arrayIntersectFilter($this->getAttribute((isset($context["cat"]) ? $context["cat"] : $this->getContext($context, "cat")), "childrenKeys"), $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "categoriesKeys"))) == 0))) {
                    // line 36
                    echo "        <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("forum_category_list", $this->getAttribute((isset($context["cat"]) ? $context["cat"] : $this->getContext($context, "cat")), "routingParams")), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cat"]) ? $context["cat"] : $this->getContext($context, "cat")), "title"), "html", null, true);
                    echo "</a></li>
 <a href=\"";
                    // line 37
                    echo $this->env->getExtension('routing')->getPath("badp_forumpost_new");
                    echo "\">
           <span style=\"color:blue\"> ";
                    // line 38
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.post.create", array(), "MvBlogBundle"), "html", null, true);
                    echo "
             </span></a>  
 ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "            <li class=\"alert alert-warning\">";
            $this->env->loadTemplate("MvBlogBundle::_logout-link.html.twig")->display($context);
            echo "</li>
            
</ul>
        ";
        }
        // line 46
        echo "        </div>
    <div id=\"mv_blog_body\">
        ";
        // line 48
        $this->displayBlock('content_body', $context, $blocks);
        // line 49
        echo "    </div>
    <div class=\"clear\"></div>
  </div>
";
    }

    // line 48
    public function block_content_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "MvBlogBundle::AdminForum/admin-layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 48,  160 => 49,  158 => 48,  154 => 46,  146 => 42,  136 => 38,  132 => 37,  125 => 36,  115 => 32,  107 => 30,  105 => 29,  102 => 28,  99 => 27,  95 => 26,  92 => 25,  85 => 21,  79 => 20,  73 => 19,  67 => 18,  63 => 17,  60 => 16,  58 => 15,  51 => 12,  48 => 11,  38 => 8,  35 => 7,  29 => 4,  27 => 3,  47 => 10,  40 => 7,  37 => 6,  31 => 4,  26 => 2,);
    }
}
