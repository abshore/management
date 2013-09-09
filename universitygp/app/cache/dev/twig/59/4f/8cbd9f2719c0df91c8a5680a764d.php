<?php

/* MvBlogBundle:AdminForum/Default:_articleCategories.html.twig */
class __TwigTemplate_594f8cbd9f2719c0df91c8a5680a764d extends Twig_Template
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
        echo "<ul class=\"article_categories\">
";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "categories"));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 3
            echo "    ";
            if (($this->getAttribute($this->getAttribute((isset($context["cat"]) ? $context["cat"] : $this->getContext($context, "cat")), "children"), "count") == 0)) {
                // line 4
                echo "        <li>
        ";
                // line 5
                if ($this->getAttribute((isset($context["cat"]) ? $context["cat"] : $this->getContext($context, "cat")), "parent")) {
                    // line 6
                    echo "            <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("forum_category_list", $this->getAttribute($this->getAttribute((isset($context["cat"]) ? $context["cat"] : $this->getContext($context, "cat")), "parent"), "routingParams")), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["cat"]) ? $context["cat"] : $this->getContext($context, "cat")), "parent"), "title"), "html", null, true);
                    echo "</a> > 
        ";
                }
                // line 8
                echo "        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("forum_category_list", $this->getAttribute((isset($context["cat"]) ? $context["cat"] : $this->getContext($context, "cat")), "routingParams")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cat"]) ? $context["cat"] : $this->getContext($context, "cat")), "title"), "html", null, true);
                echo "</a>
        </li>
         <a href=\"";
                // line 10
                echo $this->env->getExtension('routing')->getPath("badp_forumpost_new");
                echo "\">
             <span style=\"color:blue\"> ";
                // line 11
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.post.create", array(), "MvBlogBundle"), "html", null, true);
                echo "</span>
                    </a>
    ";
            } elseif ((($this->getAttribute($this->getAttribute((isset($context["cat"]) ? $context["cat"] : $this->getContext($context, "cat")), "children"), "count") > 0) && (twig_length_filter($this->env, $this->env->getExtension('mv_extension')->arrayIntersectFilter($this->getAttribute((isset($context["cat"]) ? $context["cat"] : $this->getContext($context, "cat")), "childrenKeys"), $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "categoriesKeys"))) == 0))) {
                // line 14
                echo "        <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("forum_category_list", $this->getAttribute((isset($context["cat"]) ? $context["cat"] : $this->getContext($context, "cat")), "routingParams")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cat"]) ? $context["cat"] : $this->getContext($context, "cat")), "title"), "html", null, true);
                echo "</a></li>
 <a href=\"";
                // line 15
                echo $this->env->getExtension('routing')->getPath("badp_forumpost_new");
                echo "\">
           <span style=\"color:blue\"> ";
                // line 16
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.post.create", array(), "MvBlogBundle"), "html", null, true);
                echo "
             </span></a>  
 ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "MvBlogBundle:AdminForum/Default:_articleCategories.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 15,  50 => 10,  34 => 6,  136 => 34,  133 => 33,  127 => 30,  123 => 29,  118 => 28,  97 => 23,  93 => 21,  91 => 20,  88 => 19,  85 => 18,  82 => 17,  79 => 16,  71 => 16,  55 => 6,  21 => 2,  101 => 16,  94 => 14,  80 => 13,  76 => 15,  69 => 11,  47 => 9,  40 => 8,  36 => 7,  24 => 3,  22 => 2,  19 => 1,  81 => 20,  78 => 20,  72 => 18,  68 => 17,  59 => 15,  56 => 14,  45 => 11,  32 => 5,  73 => 14,  66 => 19,  64 => 9,  60 => 14,  58 => 15,  54 => 11,  51 => 12,  48 => 4,  38 => 8,  35 => 7,  29 => 4,  27 => 3,  42 => 8,  39 => 3,  31 => 4,  26 => 3,);
    }
}
