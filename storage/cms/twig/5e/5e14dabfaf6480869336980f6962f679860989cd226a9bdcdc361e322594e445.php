<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* D:\OSPanel\home\october\public/themes/october/layouts/main.htm */
class __TwigTemplate_b667ce07b5192a7894fc799f8ef4a4160ad0216a95538d6bf96873fb615081e8 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html class=\"no-js\" lang=\"zxx\">

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
    <title>Job Board</title>
    <meta name=\"description\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <!-- <link rel=\"manifest\" href=\"site.webmanifest\"> -->
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/favicon.png");
        echo "\">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/bootstrap.min.css");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/owl.carousel.min.css");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/magnific-popup.css");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/font-awesome.min.css");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/themify-icons.css");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/nice-select.css");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/flaticon.css");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 23
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/gijgo.css");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 24
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/animate.css");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 25
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/slicknav.css");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 26
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/style.css");
        echo "\">
    <!-- <link rel=\"stylesheet\" href=\"css/responsive.css\"> -->

    ";
        // line 29
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 30
        echo "</head>

<body>
    <header>
        ";
        // line 34
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 35
        echo "    </header>

    ";
        // line 37
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 38
        echo "    
    <footer class=\"footer\">
        ";
        // line 40
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 41
        echo "    </footer>
    <!--/ footer end  -->


    <!-- JS here -->
    <script src=\"";
        // line 46
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/vendor/modernizr-3.5.0.min.js");
        echo "\"></script>
    <script src=\"";
        // line 47
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/vendor/jquery-1.12.4.min.js");
        echo "\"></script>
    <script src=\"";
        // line 48
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/popper.min.js");
        echo "\"></script>
    <script src=\"";
        // line 49
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/bootstrap.min.js");
        echo "\"></script>
    <script src=\"";
        // line 50
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/owl.carousel.min.js");
        echo "\"></script>
    <script src=\"";
        // line 51
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/isotope.pkgd.min.js");
        echo "\"></script>
    <script src=\"";
        // line 52
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/ajax-form.js");
        echo "\"></script>
    <script src=\"";
        // line 53
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/waypoints.min.js");
        echo "\"></script>
    <script src=\"";
        // line 54
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.counterup.min.js");
        echo "\"></script>
    <script src=\"";
        // line 55
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/imagesloaded.pkgd.min.js");
        echo "\"></script>
    <script src=\"";
        // line 56
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/scrollIt.js");
        echo "\"></script>
    <script src=\"";
        // line 57
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.scrollUp.min.js");
        echo "\"></script>
    <script src=\"";
        // line 58
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/wow.min.js");
        echo "\"></script>
    <script src=\"";
        // line 59
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/nice-select.min.js");
        echo "\"></script>
    <script src=\"";
        // line 60
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.slicknav.min.js");
        echo "\"></script>
    <script src=\"";
        // line 61
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.magnific-popup.min.js");
        echo "\"></script>
    <script src=\"";
        // line 62
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/plugins.js");
        echo "\"></script>
    <script src=\"";
        // line 63
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/gijgo.min.js");
        echo "\"></script>

    <!--contact js-->
    <script src=\"";
        // line 66
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/contact.js");
        echo "\"></script>
    <script src=\"";
        // line 67
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.ajaxchimp.min.js");
        echo "\"></script>
    <script src=\"";
        // line 68
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.form.js");
        echo "\"></script>
    <script src=\"";
        // line 69
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.validate.min.js");
        echo "\"></script>
    <script src=\"";
        // line 70
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/mail-script.js");
        echo "\"></script>

    <script src=\"";
        // line 72
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/main.js");
        echo "\"></script>
    <script>
        \$('#datepicker').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
             rightIcon: '<span class=\"fa fa-caret-down\"></span>'
         }
        });
        \$('#datepicker2').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
             rightIcon: '<span class=\"fa fa-caret-down\"></span>'
         }

        });
    </script>
    ";
        // line 88
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="' . Request::getBasePath() .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
        // line 89
        echo "    ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 90
        echo "</body>
</html>";
    }

    public function getTemplateName()
    {
        return "D:\\OSPanel\\home\\october\\public/themes/october/layouts/main.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  268 => 90,  264 => 89,  253 => 88,  234 => 72,  229 => 70,  225 => 69,  221 => 68,  217 => 67,  213 => 66,  207 => 63,  203 => 62,  199 => 61,  195 => 60,  191 => 59,  187 => 58,  183 => 57,  179 => 56,  175 => 55,  171 => 54,  167 => 53,  163 => 52,  159 => 51,  155 => 50,  151 => 49,  147 => 48,  143 => 47,  139 => 46,  132 => 41,  128 => 40,  124 => 38,  122 => 37,  118 => 35,  114 => 34,  108 => 30,  105 => 29,  99 => 26,  95 => 25,  91 => 24,  87 => 23,  83 => 22,  79 => 21,  75 => 20,  71 => 19,  67 => 18,  63 => 17,  59 => 16,  52 => 12,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html class=\"no-js\" lang=\"zxx\">

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
    <title>Job Board</title>
    <meta name=\"description\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <!-- <link rel=\"manifest\" href=\"site.webmanifest\"> -->
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"{{'assets/img/favicon.png'|theme}}\">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel=\"stylesheet\" href=\"{{'assets/css/bootstrap.min.css'|theme}}\">
    <link rel=\"stylesheet\" href=\"{{'assets/css/owl.carousel.min.css'|theme}}\">
    <link rel=\"stylesheet\" href=\"{{'assets/css/magnific-popup.css'|theme}}\">
    <link rel=\"stylesheet\" href=\"{{'assets/css/font-awesome.min.css'|theme}}\">
    <link rel=\"stylesheet\" href=\"{{'assets/css/themify-icons.css'|theme}}\">
    <link rel=\"stylesheet\" href=\"{{'assets/css/nice-select.css'|theme}}\">
    <link rel=\"stylesheet\" href=\"{{'assets/css/flaticon.css'|theme}}\">
    <link rel=\"stylesheet\" href=\"{{'assets/css/gijgo.css'|theme}}\">
    <link rel=\"stylesheet\" href=\"{{'assets/css/animate.css'|theme}}\">
    <link rel=\"stylesheet\" href=\"{{'assets/css/slicknav.css'|theme}}\">
    <link rel=\"stylesheet\" href=\"{{'assets/css/style.css'|theme}}\">
    <!-- <link rel=\"stylesheet\" href=\"css/responsive.css\"> -->

    {% styles %}
</head>

<body>
    <header>
        {% partial 'site/header' %}
    </header>

    {% page %}
    
    <footer class=\"footer\">
        {% partial 'site/footer' %}
    </footer>
    <!--/ footer end  -->


    <!-- JS here -->
    <script src=\"{{'assets/js/vendor/modernizr-3.5.0.min.js'|theme}}\"></script>
    <script src=\"{{'assets/js/vendor/jquery-1.12.4.min.js'|theme}}\"></script>
    <script src=\"{{'assets/js/popper.min.js'|theme}}\"></script>
    <script src=\"{{'assets/js/bootstrap.min.js'|theme}}\"></script>
    <script src=\"{{'assets/js/owl.carousel.min.js'|theme}}\"></script>
    <script src=\"{{'assets/js/isotope.pkgd.min.js'|theme}}\"></script>
    <script src=\"{{'assets/js/ajax-form.js'|theme}}\"></script>
    <script src=\"{{'assets/js/waypoints.min.js'|theme}}\"></script>
    <script src=\"{{'assets/js/jquery.counterup.min.js'|theme}}\"></script>
    <script src=\"{{'assets/js/imagesloaded.pkgd.min.js'|theme}}\"></script>
    <script src=\"{{'assets/js/scrollIt.js'|theme}}\"></script>
    <script src=\"{{'assets/js/jquery.scrollUp.min.js'|theme}}\"></script>
    <script src=\"{{'assets/js/wow.min.js'|theme}}\"></script>
    <script src=\"{{'assets/js/nice-select.min.js'|theme}}\"></script>
    <script src=\"{{'assets/js/jquery.slicknav.min.js'|theme}}\"></script>
    <script src=\"{{'assets/js/jquery.magnific-popup.min.js'|theme}}\"></script>
    <script src=\"{{'assets/js/plugins.js'|theme}}\"></script>
    <script src=\"{{'assets/js/gijgo.min.js'|theme}}\"></script>

    <!--contact js-->
    <script src=\"{{'assets/js/contact.js'|theme}}\"></script>
    <script src=\"{{'assets/js/jquery.ajaxchimp.min.js'|theme}}\"></script>
    <script src=\"{{'assets/js/jquery.form.js'|theme}}\"></script>
    <script src=\"{{'assets/js/jquery.validate.min.js'|theme}}\"></script>
    <script src=\"{{'assets/js/mail-script.js'|theme}}\"></script>

    <script src=\"{{'assets/js/main.js'|theme}}\"></script>
    <script>
        \$('#datepicker').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
             rightIcon: '<span class=\"fa fa-caret-down\"></span>'
         }
        });
        \$('#datepicker2').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
             rightIcon: '<span class=\"fa fa-caret-down\"></span>'
         }

        });
    </script>
    {% framework extras %}
    {% scripts %}
</body>
</html>", "D:\\OSPanel\\home\\october\\public/themes/october/layouts/main.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("styles" => 29, "partial" => 34, "page" => 37, "framework" => 88, "scripts" => 89);
        static $filters = array("theme" => 12);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['styles', 'partial', 'page', 'framework', 'scripts'],
                ['theme'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
