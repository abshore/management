<?php

/* MvBlogBundle::form_div_layout.html.twig */
class __TwigTemplate_03c309d0bb9e2624ba1e033ac75a3059 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_errors' => array($this, 'block_form_errors'),
            'form_row' => array($this, 'block_form_row'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('form_errors', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('form_row', $context, $blocks);
    }

    // line 1
    public function block_form_errors($context, array $blocks = array())
    {
        // line 2
        ob_start();
        // line 3
        echo "    ";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 4
            echo "    <ul class=\"mv_blog_error\">
        ";
            // line 5
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 6
                echo "            <li>";
                echo twig_escape_filter($this->env, (((null === $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messagePluralization"))) ? ($this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageTemplate"), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageParameters"), "validators")) : ($this->env->getExtension('translator')->transchoice($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageTemplate"), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messagePluralization"), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageParameters"), "validators"))), "html", null, true);
                // line 10
                echo "</li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "    </ul>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 17
    public function block_form_row($context, array $blocks = array())
    {
        // line 18
        ob_start();
        // line 19
        echo "    <div>
        ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        echo "
        ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "MvBlogBundle::form_div_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  78 => 22,  74 => 21,  67 => 19,  65 => 18,  62 => 17,  45 => 6,  41 => 5,  38 => 4,  35 => 3,  33 => 2,  30 => 1,  23 => 16,  21 => 1,  91 => 26,  84 => 22,  80 => 21,  77 => 20,  70 => 20,  66 => 15,  63 => 14,  61 => 13,  55 => 12,  48 => 10,  42 => 7,  39 => 6,  31 => 4,  26 => 17,);
    }
}
