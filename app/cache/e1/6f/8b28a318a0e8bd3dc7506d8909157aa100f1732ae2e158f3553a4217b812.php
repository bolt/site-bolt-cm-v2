<?php

/* _base/_page-no_nav.twig */
class __TwigTemplate_e16f8b28a318a0e8bd3dc7506d8909157aa100f1732ae2e158f3553a4217b812 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("_base/_page.twig");

        $this->blocks = array(
            'page_plain' => array($this, 'block_page_plain'),
            'page_main' => array($this, 'block_page_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_base/_page.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        $context["page_bodyclass"] = "login";
        // line 13
        $context["page_hasnav"] = false;
        // line 15
        $context["page_nav"] = "";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 17
    public function block_page_plain($context, array $blocks = array())
    {
        // line 18
        echo "
    <div class=\"view-site\">
        <a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "root"), "html", null, true);
        echo "\" target=\"_blank\"><i class=\"fa fa-fw fa-external-link-square\"></i> ";
        echo $this->env->getExtension('Bolt')->trans("View site");
        echo "</a>
    </div>

    <div class=\"row\">
        <div class=\"col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2\">

            <img src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "paths"), "app"), "html", null, true);
        echo "view/img/bolt-logo.png\" width=\"150\" height=\"62\" alt=\"Bolt\" class=\"logo\">

            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    <h3 class=\"panel-title\">";
        // line 30
        $this->displayBlock("page_title", $context, $blocks);
        echo "</h3>
                </div>

                <div class=\"panel-body\">
                    ";
        // line 34
        $this->env->loadTemplate("_sub/_messages.twig")->display($context);
        // line 35
        echo "                    ";
        $this->displayBlock('page_main', $context, $blocks);
        // line 36
        echo "                </div>
            </div>

            ";
        // line 39
        if ((($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "randomquote", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "randomquote"), false)) : (false))) {
            // line 40
            echo "                <blockquote class=\"quote\">";
            echo $this->env->getExtension('Bolt')->randomQuote();
            echo "</blockquote>
            ";
        }
        // line 42
        echo "
        </div>
    </div>

";
    }

    // line 35
    public function block_page_main($context, array $blocks = array())
    {
        echo "[PAGE_MAIN]";
    }

    public function getTemplateName()
    {
        return "_base/_page-no_nav.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 35,  85 => 42,  79 => 40,  72 => 36,  67 => 34,  60 => 30,  53 => 26,  42 => 20,  30 => 15,  28 => 13,  26 => 11,  77 => 39,  69 => 35,  66 => 21,  64 => 20,  58 => 17,  54 => 16,  47 => 12,  43 => 10,  41 => 9,  38 => 18,  35 => 17,  29 => 5,);
    }
}
