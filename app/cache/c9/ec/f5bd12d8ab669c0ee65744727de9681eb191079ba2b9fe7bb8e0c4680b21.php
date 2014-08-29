<?php

/* form_bolt_layout.twig */
class __TwigTemplate_c9ecf5bd12d8ab669c0ee65744727de9681eb191079ba2b9fe7bb8e0c4680b21 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_row' => array($this, 'block_form_row'),
            'form_errors' => array($this, 'block_form_errors'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 14
        echo "
";
        // line 15
        $this->displayBlock('form_errors', $context, $blocks);
        // line 26
        echo "
";
        // line 27
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        <div class=\"form-group ";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : null)) > 0)) {
            echo "has-error";
        }
        echo "\">
            ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'label', array("label_attr" => array("class" => "col-sm-2 control-label")));
        echo "
            <div class=\"col-sm-10 col-md-6 col-lg-4\">
                ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget', array("attr" => array("class" => "form-control large")));
        echo "
                ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "
            </div>
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 15
    public function block_form_errors($context, array $blocks = array())
    {
        // line 16
        echo "    ";
        ob_start();
        // line 17
        echo "        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 18
            echo "            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, (((null === $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messagePluralization"))) ? ($this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageTemplate"), $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageParameters"), "validators")) : ($this->env->getExtension('translator')->transchoice($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageTemplate"), $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messagePluralization"), $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageParameters"), "validators"))), "html", null, true);
            // line 22
            echo "</span>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 27
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        // line 28
        echo "    ";
        ob_start();
        // line 29
        echo "        <div>
            ";
        // line 30
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 31
            echo "                <div class=\"checkbox\">
                    <label>
                    ";
            // line 33
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : null), 'widget');
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["child"]) ? $context["child"] : null), "vars"), "label"), "html", null, true);
            // line 34
            echo "</label>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "form_bolt_layout.twig";
    }

    public function getDebugInfo()
    {
        return array (  124 => 37,  116 => 34,  105 => 30,  102 => 29,  96 => 27,  84 => 22,  81 => 18,  76 => 17,  70 => 15,  61 => 9,  57 => 8,  52 => 6,  32 => 26,  25 => 3,  148 => 49,  143 => 46,  141 => 45,  138 => 44,  134 => 42,  125 => 40,  121 => 39,  117 => 37,  115 => 36,  112 => 35,  108 => 33,  99 => 28,  95 => 30,  91 => 24,  89 => 27,  86 => 26,  73 => 16,  65 => 19,  39 => 3,  34 => 8,  27 => 14,  24 => 3,  22 => 2,  19 => 1,  333 => 102,  328 => 82,  322 => 108,  314 => 106,  312 => 105,  309 => 103,  307 => 102,  304 => 101,  300 => 99,  292 => 98,  286 => 97,  282 => 96,  278 => 95,  274 => 94,  270 => 93,  266 => 92,  262 => 91,  258 => 90,  255 => 89,  253 => 88,  249 => 87,  245 => 86,  241 => 85,  237 => 83,  235 => 82,  227 => 81,  216 => 78,  207 => 77,  198 => 76,  189 => 75,  180 => 74,  175 => 72,  168 => 68,  164 => 67,  160 => 66,  154 => 63,  150 => 62,  145 => 60,  140 => 58,  136 => 57,  132 => 56,  127 => 54,  122 => 52,  118 => 51,  113 => 33,  109 => 31,  103 => 46,  98 => 43,  90 => 40,  82 => 24,  80 => 37,  75 => 35,  71 => 34,  63 => 18,  56 => 15,  48 => 25,  45 => 5,  37 => 9,  33 => 17,  31 => 16,  23 => 13,  21 => 12,  93 => 41,  85 => 42,  79 => 40,  72 => 36,  67 => 33,  60 => 17,  53 => 26,  42 => 4,  30 => 15,  28 => 15,  26 => 14,  77 => 39,  69 => 21,  66 => 21,  64 => 20,  58 => 17,  54 => 16,  47 => 13,  43 => 12,  41 => 21,  38 => 18,  35 => 27,  29 => 5,);
    }
}
