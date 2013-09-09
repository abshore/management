<?php

/* MvBlogBundle:AdminForum/Default:_articleList.html.twig */
class __TwigTemplate_f97e6e421486d0f66500aa526f191f15 extends Twig_Template
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
        if (twig_length_filter($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")))) {
            // line 2
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 3
                echo "    <div class=\"mv_blog_article_list ";
                if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") % 2 == 1)) {
                    echo "odd";
                } else {
                    echo "even";
                }
                echo "\">
      <h2><a href=\"";
                // line 4
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("forum_post_show", $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "routingParams")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "title"), "html", null, true);
                echo "</a></h2>
      <div class=\"mv_blog_accroche\">
      ";
                // line 6
                echo $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "accroche");
                echo "
        <p class=\"mv_blog_article_suite\">
            <a href=\"";
                // line 8
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("forum_post_show", $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "routingParams")), "html", null, true);
                echo "\">
                ";
                // line 9
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("default.readmore", array(), "MvBlogBundle"), "html", null, true);
                echo "...
            </a>
        </p>
      </div>
      ";
                // line 13
                if ((twig_length_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "commentsPublied")) == 0)) {
                    // line 14
                    echo "        ";
                    $context["link_comment"] = $this->env->getExtension('translator')->trans("default.no_comments", array(), "MvBlogBundle");
                    // line 15
                    echo "      ";
                } else {
                    // line 16
                    echo "        ";
                    $context["word_comment"] = $this->env->getExtension('translator')->transchoice("default.comments", twig_length_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "commentsPublied")), array("%count%" => twig_length_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "commentsPublied"))), "MvBlogBundle");
                    // line 17
                    echo "        ";
                    $context["link_comment"] = (((("<a href=\"" . $this->env->getExtension('routing')->getPath("forum_post_show", $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "routingParams"))) . "#blog_comments\">") . (isset($context["word_comment"]) ? $context["word_comment"] : $this->getContext($context, "word_comment"))) . "</a>");
                    // line 18
                    echo "      ";
                }
                // line 19
                echo "      
      ";
                // line 20
                $this->env->loadTemplate("MvBlogBundle:AdminForum/Default:_articleCategories.html.twig")->display(array_merge($context, array("entity" => (isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")))));
                // line 21
                echo "      
      <p class=\"mv_blog_mention clear\">
          ";
                // line 23
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("default.lastupdated_on", array("%date%" => twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "updated"), "d/m/Y"), "%time%" => twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "updated"), "H:i")), "MvBlogBundle"), "html", null, true);
                echo " - ";
                echo (isset($context["link_comment"]) ? $context["link_comment"] : $this->getContext($context, "link_comment"));
                echo "
      </p>
    </div>
    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 28
            echo "    <div class=\"mv_blog_article_list odd\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("default.no_article", array(), "MvBlogBundle"), "html", null, true);
            echo "</div>
  <div class=\"mv_blog_article_list odd\">  <a href=\"";
            // line 29
            echo $this->env->getExtension('routing')->getPath("badp_forumpost_new");
            echo "\">
             <span style=\"color:blue\"> ";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.post.create", array(), "MvBlogBundle"), "html", null, true);
            echo "</span>
                    </a></div>
";
        }
        // line 33
        echo "<div class=\"mv_blog_navigation\">
    ";
        // line 34
        echo $this->env->getExtension('knp_pagination')->render((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "MvBlogBundle:AdminForum/Default:_articleList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 34,  133 => 33,  127 => 30,  123 => 29,  118 => 28,  97 => 23,  93 => 21,  91 => 20,  88 => 19,  85 => 18,  82 => 17,  79 => 16,  71 => 13,  55 => 6,  21 => 2,  101 => 16,  94 => 14,  80 => 13,  76 => 15,  69 => 11,  47 => 9,  40 => 8,  36 => 7,  24 => 3,  22 => 2,  19 => 1,  81 => 21,  78 => 20,  72 => 18,  68 => 17,  59 => 15,  56 => 14,  45 => 11,  32 => 5,  73 => 14,  66 => 19,  64 => 9,  60 => 8,  58 => 15,  54 => 13,  51 => 12,  48 => 4,  38 => 8,  35 => 7,  29 => 4,  27 => 3,  42 => 10,  39 => 3,  31 => 4,  26 => 2,);
    }
}
