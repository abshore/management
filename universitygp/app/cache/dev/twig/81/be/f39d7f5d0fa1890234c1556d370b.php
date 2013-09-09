<?php

/* MvBlogBundle:AdminForum\Default:menu.html.twig */
class __TwigTemplate_81bef39d7f5d0fa1890234c1556d370b extends Twig_Template
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
        echo "<ul>
    ";
        // line 2
        if ((isset($context["home_link"]) ? $context["home_link"] : $this->getContext($context, "home_link"))) {
            // line 3
            echo "    <li class=\"alert alert-info\"><a href=\"";
            echo $this->env->getExtension('routing')->getPath("forum_homepage");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Home", array(), "MvBlogBundle"), "html", null, true);
            echo "</a></li>
    ";
        }
        // line 5
        echo "        <hr/>
        <B><li>Les categories :</li></B>
    ";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 8
            echo "    <li class=\"alert alert-success\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("forum_category_list", $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "routingParams")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "title"), "html", null, true);
            echo "</a>
        ";
            // line 9
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "children"));
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
            foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                // line 10
                echo "            ";
                if ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "first")) {
                    echo "<ul>";
                }
                // line 11
                echo "                <li class=\"alert alert-warning\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("forum_category_list", $this->getAttribute((isset($context["children"]) ? $context["children"] : $this->getContext($context, "children")), "routingParams")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["children"]) ? $context["children"] : $this->getContext($context, "children")), "title"), "html", null, true);
                echo "</a></li>
            ";
                // line 12
                if ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "last")) {
                    echo "</ul>";
                }
                // line 13
                echo "        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "    </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "MvBlogBundle:AdminForum\\Default:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 16,  94 => 14,  80 => 13,  76 => 12,  69 => 11,  47 => 9,  40 => 8,  36 => 7,  24 => 3,  22 => 2,  19 => 1,  81 => 21,  78 => 20,  72 => 18,  68 => 17,  59 => 15,  56 => 14,  45 => 11,  32 => 5,  73 => 18,  66 => 19,  64 => 10,  60 => 16,  58 => 15,  54 => 13,  51 => 12,  48 => 11,  38 => 8,  35 => 7,  29 => 4,  27 => 3,  42 => 10,  39 => 6,  31 => 4,  26 => 2,);
    }
}
