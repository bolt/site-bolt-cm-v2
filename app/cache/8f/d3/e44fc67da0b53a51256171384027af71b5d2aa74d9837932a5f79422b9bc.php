<?php

/* _base/_page.twig */
class __TwigTemplate_8fd3e44fc67da0b53a51256171384027af71b5d2aa74d9837932a5f79422b9bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'page_plain' => array($this, 'block_page_plain'),
            'page_script' => array($this, 'block_page_script'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 12
        ob_start();
        // line 13
        echo "
";
        // line 14
        $context["page_locale"] = (($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "locale", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "locale"), "en")) : ("en"));
        // line 15
        echo "
";
        // line 16
        if (twig_test_empty($this->renderBlock("page_subtitle", $context, $blocks))) {
            // line 17
            echo "    ";
            $context["page_title"] = $this->renderBlock("page_title", $context, $blocks);
        } else {
            // line 19
            echo "    ";
            $context["page_title"] = (($this->renderBlock("page_title", $context, $blocks) . " » ") . $this->renderBlock("page_subtitle", $context, $blocks));
        }
        // line 21
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 24
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["page_locale"]) ? $context["page_locale"] : null), "html", null, true);
        echo "\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0\">

    <title>";
        // line 30
        echo twig_escape_filter($this->env, trim(strip_tags((isset($context["page_title"]) ? $context["page_title"] : null))), "html", null, true);
        echo " – ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config"), "get", array(0 => "general/branding/name"), "method"), "html", null, true);
        echo "</title>

    <script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app"), "html", null, true);
        echo "view/js/jquery-1.11.1.min.js\"></script>
    <script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app"), "html", null, true);
        echo "view/js/underscore-min.js\"></script>
    <script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app"), "html", null, true);
        echo "view/js/backbone-min.js\"></script>
    <script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app"), "html", null, true);
        echo "view/js/jquery-ui-1.10.3.custom.min.js\"></script>

    ";
        // line 37
        if ((((isset($context["page_locale"]) ? $context["page_locale"] : null) != "en") && $this->env->getExtension('Bolt')->fileExists(((($this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "apppath") . "/view/js/i18n/datepicker-") . (isset($context["page_locale"]) ? $context["page_locale"] : null)) . ".js")))) {
            // line 38
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app"), "html", null, true);
            echo "view/js/i18n/datepicker-";
            echo twig_escape_filter($this->env, (isset($context["page_locale"]) ? $context["page_locale"] : null), "html", null, true);
            echo ".js\"></script>
    ";
        }
        // line 40
        echo "
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app"), "html", null, true);
        echo "view/css/smoothness/jquery-ui-1.10.3.custom.min.css\">

    <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app"), "html", null, true);
        echo "view/js/jquery.plugins.js\"></script>

    ";
        // line 46
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app"), "html", null, true);
        echo "view/js/bootstrap.js\"></script>

    <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app"), "html", null, true);
        echo "view/js/jquery.magnific-popup.min.js\"></script>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app"), "html", null, true);
        echo "view/css/magnific-popup.css\">

    <link rel=\"stylesheet\" href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app"), "html", null, true);
        echo "view/lib/select2/select2.css\">
    <script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app"), "html", null, true);
        echo "view/lib/select2/select2.min.js\"></script>

    <script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app"), "html", null, true);
        echo "view/lib/ckeditor/ckeditor.js\"></script>

    <script src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app"), "html", null, true);
        echo "view/lib/upload/jquery.iframe-transport.js\"></script>
    <script src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app"), "html", null, true);
        echo "view/lib/upload/jquery.fileupload.js\"></script>
    <link rel=\"stylesheet\" href=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app"), "html", null, true);
        echo "view/lib/upload/jquery.fileupload-ui.css\">

    <script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app"), "html", null, true);
        echo "view/js/moment.min.js\"></script>
    <script>
        moment.lang('";
        // line 62
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "locale", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "locale"), "en")) : ("en")), "html", null, true);
        echo "');
        var ckeditor_lang=\"";
        // line 63
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "locale", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "locale"), "en")) : ("en")), "html", null, true);
        echo "\";
    </script>

    <script src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app"), "html", null, true);
        echo "view/js/bootbox.min.js\"></script>
    <script src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app"), "html", null, true);
        echo "view/js/modernizr.custom.2.8.2.js\"></script>
    <script src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app"), "html", null, true);
        echo "view/js/bolt.js\"></script>

    <link href=\"//fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,400italic&amp;subset=latin,latin-ext\" rel=\"stylesheet\" type=\"text/css\">

    <link rel=\"stylesheet\" href=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app"), "html", null, true);
        echo "view/css/bolt.css\" media=\"screen, projection\" type=\"text/css\">

    <link rel=\"shortcut icon\" href=\"";
        // line 74
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config"), "get", array(0 => "general/branding/favicon"), "method")) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config"), "get", array(0 => "general/branding/favicon"), "method"), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app"), "html", null, true);
            echo "view/img/favicon-bolt.ico";
        }
        echo "\">
    <link rel=\"apple-touch-icon\" sizes=\"57x57\" href=\"";
        // line 75
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config"), "get", array(0 => "general/branding/apple-touch-icon"), "method")) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config"), "get", array(0 => "general/branding/apple-touch-icon"), "method"), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app"), "html", null, true);
            echo "view/img/apple-touch-icon.png";
        }
        echo "\">
    <link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"";
        // line 76
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config"), "get", array(0 => "general/branding/apple-touch-icon-72x72"), "method")) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config"), "get", array(0 => "general/branding/apple-touch-icon-72x72"), "method"), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app"), "html", null, true);
            echo "view/img/apple-touch-icon-72x72.png";
        }
        echo "\">
    <link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"";
        // line 77
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config"), "get", array(0 => "general/branding/apple-touch-icon-114x114"), "method")) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config"), "get", array(0 => "general/branding/apple-touch-icon-114x114"), "method"), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app"), "html", null, true);
            echo "view/img/apple-touch-icon-114x114.png";
        }
        echo "\">
    <link rel=\"apple-touch-icon\" sizes=\"144x144\" href=\"";
        // line 78
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config"), "get", array(0 => "general/branding/apple-touch-icon-144x144"), "method")) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config"), "get", array(0 => "general/branding/apple-touch-icon-144x144"), "method"), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app"), "html", null, true);
            echo "view/img/apple-touch-icon-144x144.png";
        }
        echo "\">
</head>

<body";
        // line 81
        if ((isset($context["page_bodyclass"]) ? $context["page_bodyclass"] : null)) {
            echo " class=\"";
            echo twig_escape_filter($this->env, (isset($context["page_bodyclass"]) ? $context["page_bodyclass"] : null), "html", null, true);
            echo "\"";
        }
        echo ">
    ";
        // line 82
        $this->displayBlock('page_plain', $context, $blocks);
        // line 83
        echo "
<script>
    var path = \"";
        // line 85
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "bolt"), "html", null, true);
        echo "\";
    var asyncpath = \"";
        // line 86
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "async"), "html", null, true);
        echo "\";
    var apppath = \"";
        // line 87
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app"), "html", null, true);
        echo "\";
    ";
        // line 88
        if ((isset($context["page_hasnav"]) ? $context["page_hasnav"] : null)) {
            // line 89
            echo "        var wysiwyg = {
           images: ";
            // line 90
            echo twig_escape_filter($this->env, (0 + $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "get", array(0 => "general/wysiwyg/images"), "method")), "html", null, true);
            echo ",
           tables: ";
            // line 91
            echo twig_escape_filter($this->env, (0 + $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "get", array(0 => "general/wysiwyg/tables"), "method")), "html", null, true);
            echo ",
           anchor: ";
            // line 92
            echo twig_escape_filter($this->env, (0 + $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "get", array(0 => "general/wysiwyg/anchor"), "method")), "html", null, true);
            echo ",
           fontcolor: ";
            // line 93
            echo twig_escape_filter($this->env, (0 + $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "get", array(0 => "general/wysiwyg/fontcolor"), "method")), "html", null, true);
            echo ",
           align: ";
            // line 94
            echo twig_escape_filter($this->env, (0 + $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "get", array(0 => "general/wysiwyg/align"), "method")), "html", null, true);
            echo ",
           subsuper: ";
            // line 95
            echo twig_escape_filter($this->env, (0 + $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "get", array(0 => "general/wysiwyg/subsuper"), "method")), "html", null, true);
            echo ",
           embed: ";
            // line 96
            echo twig_escape_filter($this->env, (0 + $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "get", array(0 => "general/wysiwyg/embed"), "method")), "html", null, true);
            echo ",
           ";
            // line 97
            if (twig_test_iterable($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "get", array(0 => "general/wysiwyg/ck"), "method"))) {
                echo "ck: ";
                echo twig_jsonencode_filter($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "get", array(0 => "general/wysiwyg/ck"), "method"));
                echo ",";
            }
            // line 98
            echo "           ";
            if (twig_test_iterable($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "get", array(0 => "general/wysiwyg/filebrowser"), "method"))) {
                echo "filebrowser: ";
                echo twig_jsonencode_filter($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "get", array(0 => "general/wysiwyg/filebrowser"), "method"));
            } else {
                echo "filebrowser: false";
            }
            // line 99
            echo "           };
    ";
        }
        // line 101
        echo "</script>
";
        // line 102
        $this->displayBlock('page_script', $context, $blocks);
        // line 103
        echo "
";
        // line 105
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config"), "get", array(0 => "general/grunt/livereload"), "method")) {
            // line 106
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "hosturl"), "html", null, true);
            echo ":";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config"), "get", array(0 => "general/grunt/livereloadport"), "method"), "html", null, true);
            echo "/livereload.js\"></script>
";
        }
        // line 108
        echo "
</body>
</html>";
    }

    // line 82
    public function block_page_plain($context, array $blocks = array())
    {
    }

    // line 102
    public function block_page_script($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "_base/_page.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  333 => 102,  328 => 82,  322 => 108,  314 => 106,  312 => 105,  309 => 103,  307 => 102,  304 => 101,  300 => 99,  292 => 98,  286 => 97,  282 => 96,  278 => 95,  274 => 94,  270 => 93,  266 => 92,  262 => 91,  258 => 90,  255 => 89,  253 => 88,  249 => 87,  245 => 86,  241 => 85,  237 => 83,  235 => 82,  227 => 81,  216 => 78,  207 => 77,  198 => 76,  189 => 75,  180 => 74,  175 => 72,  168 => 68,  164 => 67,  160 => 66,  154 => 63,  150 => 62,  145 => 60,  140 => 58,  136 => 57,  132 => 56,  127 => 54,  122 => 52,  118 => 51,  113 => 49,  109 => 48,  103 => 46,  98 => 43,  90 => 40,  82 => 38,  80 => 37,  75 => 35,  71 => 34,  63 => 32,  56 => 30,  48 => 25,  45 => 24,  37 => 19,  33 => 17,  31 => 16,  23 => 13,  21 => 12,  93 => 41,  85 => 42,  79 => 40,  72 => 36,  67 => 33,  60 => 30,  53 => 26,  42 => 20,  30 => 15,  28 => 15,  26 => 14,  77 => 39,  69 => 35,  66 => 21,  64 => 20,  58 => 17,  54 => 16,  47 => 12,  43 => 10,  41 => 21,  38 => 18,  35 => 17,  29 => 5,);
    }
}
