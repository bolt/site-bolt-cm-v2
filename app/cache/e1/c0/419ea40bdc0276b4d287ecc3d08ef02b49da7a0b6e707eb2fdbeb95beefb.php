<?php

/* _sub/_messages.twig */
class __TwigTemplate_e1c0419ea40bdc0276b4d287ecc3d08ef02b49da7a0b6e707eb2fdbeb95beefb extends Twig_Template
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
        echo "
";
        // line 2
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "flashBag"), "keys", array(), "method"))) {
            // line 3
            echo "
    ";
            // line 4
            if ((array_key_exists("wrapper", $context) && (isset($context["wrapper"]) ? $context["wrapper"] : null))) {
                // line 5
                echo "    <div class=\"row\">
        <div class=\"col-md-8\">
    ";
            }
            // line 8
            echo "
    ";
            // line 9
            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "flashBag"), "has", array(0 => "info"), "method")) {
                // line 10
                echo "        <div class=\"alert alert-info\">
            <button class=\"close\" data-dismiss=\"alert\">×</button>
            ";
                // line 12
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "flashBag"), "get", array(0 => "info"), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                    // line 13
                    echo "                ";
                    echo $this->env->getExtension('Bolt')->ymllink((isset($context["msg"]) ? $context["msg"] : null));
                    echo "
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 15
                echo "        </div>
    ";
            }
            // line 17
            echo "
    ";
            // line 18
            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "flashBag"), "has", array(0 => "error"), "method")) {
                // line 19
                echo "        <div class=\"alert alert-danger\">
            <button class=\"close\" data-dismiss=\"alert\">×</button>
            ";
                // line 21
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "flashBag"), "get", array(0 => "error"), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                    // line 22
                    echo "                ";
                    echo $this->env->getExtension('Bolt')->ymllink((isset($context["msg"]) ? $context["msg"] : null));
                    echo "
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 24
                echo "        </div>
    ";
            }
            // line 26
            echo "
    ";
            // line 27
            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "flashBag"), "has", array(0 => "warning"), "method")) {
                // line 28
                echo "        <div class=\"alert alert-warning\">
            <button class=\"close\" data-dismiss=\"alert\">×</button>
            ";
                // line 30
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "flashBag"), "get", array(0 => "warning"), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                    // line 31
                    echo "                ";
                    echo $this->env->getExtension('Bolt')->ymllink((isset($context["msg"]) ? $context["msg"] : null));
                    echo "
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 33
                echo "        </div>
    ";
            }
            // line 35
            echo "
    ";
            // line 36
            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "flashBag"), "has", array(0 => "success"), "method")) {
                // line 37
                echo "        <div class=\"alert alert-success\">
            <button class=\"close\" data-dismiss=\"alert\">×</button>
            ";
                // line 39
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "flashBag"), "get", array(0 => "success"), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                    // line 40
                    echo "                ";
                    echo $this->env->getExtension('Bolt')->ymllink((isset($context["msg"]) ? $context["msg"] : null));
                    echo "
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 42
                echo "        </div>
    ";
            }
            // line 44
            echo "
    ";
            // line 45
            if ((array_key_exists("wrapper", $context) && (isset($context["wrapper"]) ? $context["wrapper"] : null))) {
                // line 46
                echo "        </div>
    </div>
    ";
            }
            // line 49
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "_sub/_messages.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 49,  143 => 46,  141 => 45,  138 => 44,  134 => 42,  125 => 40,  121 => 39,  117 => 37,  115 => 36,  112 => 35,  108 => 33,  99 => 31,  95 => 30,  91 => 28,  89 => 27,  86 => 26,  73 => 22,  65 => 19,  39 => 10,  34 => 8,  27 => 4,  24 => 3,  22 => 2,  19 => 1,  333 => 102,  328 => 82,  322 => 108,  314 => 106,  312 => 105,  309 => 103,  307 => 102,  304 => 101,  300 => 99,  292 => 98,  286 => 97,  282 => 96,  278 => 95,  274 => 94,  270 => 93,  266 => 92,  262 => 91,  258 => 90,  255 => 89,  253 => 88,  249 => 87,  245 => 86,  241 => 85,  237 => 83,  235 => 82,  227 => 81,  216 => 78,  207 => 77,  198 => 76,  189 => 75,  180 => 74,  175 => 72,  168 => 68,  164 => 67,  160 => 66,  154 => 63,  150 => 62,  145 => 60,  140 => 58,  136 => 57,  132 => 56,  127 => 54,  122 => 52,  118 => 51,  113 => 49,  109 => 48,  103 => 46,  98 => 43,  90 => 40,  82 => 24,  80 => 37,  75 => 35,  71 => 34,  63 => 18,  56 => 15,  48 => 25,  45 => 24,  37 => 9,  33 => 17,  31 => 16,  23 => 13,  21 => 12,  93 => 41,  85 => 42,  79 => 40,  72 => 36,  67 => 33,  60 => 17,  53 => 26,  42 => 20,  30 => 15,  28 => 15,  26 => 14,  77 => 39,  69 => 21,  66 => 21,  64 => 20,  58 => 17,  54 => 16,  47 => 13,  43 => 12,  41 => 21,  38 => 18,  35 => 17,  29 => 5,);
    }
}
