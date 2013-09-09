<?php

/* MvBlogBundle::AdminForum/flashes.html.twig */
class __TwigTemplate_4d58a663f34e43639a9d201eb6098d86 extends Twig_Template
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
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "all", array(), "method"));
        foreach ($context['_seq'] as $context["type"] => $context["flashMessages"]) {
            // line 2
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["flashMessages"]) ? $context["flashMessages"] : $this->getContext($context, "flashMessages")));
            foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                // line 3
                echo "            <div class=\"flash-";
                echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
                echo "\">
                ";
                // line 4
                echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
                echo "
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 7
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['flashMessages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "MvBlogBundle::AdminForum/flashes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 4,  24 => 2,  19 => 1,  76 => 20,  70 => 18,  66 => 17,  62 => 16,  57 => 15,  54 => 14,  43 => 7,  32 => 6,  167 => 48,  160 => 49,  158 => 48,  154 => 46,  146 => 42,  136 => 38,  132 => 37,  125 => 36,  115 => 32,  107 => 30,  105 => 29,  102 => 28,  99 => 27,  95 => 26,  92 => 25,  85 => 21,  79 => 21,  73 => 19,  67 => 18,  63 => 17,  60 => 16,  58 => 15,  51 => 12,  48 => 11,  38 => 8,  35 => 7,  29 => 3,  27 => 3,  47 => 10,  40 => 10,  37 => 6,  31 => 4,  26 => 2,);
    }
}
