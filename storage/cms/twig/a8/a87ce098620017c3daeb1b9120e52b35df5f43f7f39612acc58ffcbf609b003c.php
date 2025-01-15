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

/* D:\OSPanel\home\october\public/themes/october/partials/site/header.htm */
class __TwigTemplate_e498c44591ee77bebb8ccd579bd86a4b0593b24b26be8cee1c980feff59eb070 extends \Twig\Template
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
        echo "<div class=\"header-area \">
    <div id=\"sticky-header\" class=\"main-header-area\">
        <div class=\"container-fluid \">
            <div class=\"header_bottom_border\">
                <div class=\"row align-items-center\">
                    <div class=\"col-xl-3 col-lg-2\">
                        <div class=\"logo\">
                            <a href=\"";
        // line 8
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("index");
        echo "\">
                                <img src=\"";
        // line 9
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/logo.png");
        echo "\" alt=\"\">
                            </a>
                        </div>
                    </div>
                    <div class=\"col-xl-6 col-lg-7\">
                        <div class=\"main-menu  d-none d-lg-block\">
                            <nav>
                                <ul id=\"navigation\">
                                    <li><a href=\"";
        // line 17
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("index");
        echo "\">home</a></li>
                                    <li><a href=\"";
        // line 18
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("jobs");
        echo "\">Browse Job</a></li>
                                    <li><a href=\"#\">pages <i class=\"ti-angle-down\"></i></a>
                                        <ul class=\"submenu\">
                                            <li><a href=\"";
        // line 21
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("candidate");
        echo "\">Candidates </a></li>
                                            <li><a href=\"";
        // line 22
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("job_details");
        echo "\">job details </a></li>
                                            <li><a href=\"";
        // line 23
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("elements");
        echo "\">elements</a></li>
                                        </ul>
                                    </li>
                                    <li><a href=\"#\">blog <i class=\"ti-angle-down\"></i></a>
                                        <ul class=\"submenu\">
                                            <li><a href=\"";
        // line 28
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("blog");
        echo "\">blog</a></li>
                                            <li><a href=\"";
        // line 29
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("single-blog");
        echo "\">single-blog</a></li>
                                        </ul>
                                    </li>
                                    <li><a href=\"";
        // line 32
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contact");
        echo "\">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class=\"col-xl-3 col-lg-3 d-none d-lg-block\">
                        <div class=\"Appointment\">
                            <div class=\"phone_num d-none d-xl-block\">
                                <a href=\"#\">Log in</a>
                            </div>
                            <div class=\"d-none d-lg-block\">
                                <a class=\"boxed-btn3\" href=\"#\">Post a Job</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-12\">
                        <div class=\"mobile_menu d-block d-lg-none\"></div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "D:\\OSPanel\\home\\october\\public/themes/october/partials/site/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 32,  93 => 29,  89 => 28,  81 => 23,  77 => 22,  73 => 21,  67 => 18,  63 => 17,  52 => 9,  48 => 8,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"header-area \">
    <div id=\"sticky-header\" class=\"main-header-area\">
        <div class=\"container-fluid \">
            <div class=\"header_bottom_border\">
                <div class=\"row align-items-center\">
                    <div class=\"col-xl-3 col-lg-2\">
                        <div class=\"logo\">
                            <a href=\"{{'index'|page}}\">
                                <img src=\"{{'assets/img/logo.png'|theme}}\" alt=\"\">
                            </a>
                        </div>
                    </div>
                    <div class=\"col-xl-6 col-lg-7\">
                        <div class=\"main-menu  d-none d-lg-block\">
                            <nav>
                                <ul id=\"navigation\">
                                    <li><a href=\"{{'index'|page}}\">home</a></li>
                                    <li><a href=\"{{'jobs'|page}}\">Browse Job</a></li>
                                    <li><a href=\"#\">pages <i class=\"ti-angle-down\"></i></a>
                                        <ul class=\"submenu\">
                                            <li><a href=\"{{'candidate'|page}}\">Candidates </a></li>
                                            <li><a href=\"{{'job_details'|page}}\">job details </a></li>
                                            <li><a href=\"{{'elements'|page}}\">elements</a></li>
                                        </ul>
                                    </li>
                                    <li><a href=\"#\">blog <i class=\"ti-angle-down\"></i></a>
                                        <ul class=\"submenu\">
                                            <li><a href=\"{{'blog'|page}}\">blog</a></li>
                                            <li><a href=\"{{'single-blog'|page}}\">single-blog</a></li>
                                        </ul>
                                    </li>
                                    <li><a href=\"{{'contact'|page}}\">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class=\"col-xl-3 col-lg-3 d-none d-lg-block\">
                        <div class=\"Appointment\">
                            <div class=\"phone_num d-none d-xl-block\">
                                <a href=\"#\">Log in</a>
                            </div>
                            <div class=\"d-none d-lg-block\">
                                <a class=\"boxed-btn3\" href=\"#\">Post a Job</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-12\">
                        <div class=\"mobile_menu d-block d-lg-none\"></div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>", "D:\\OSPanel\\home\\october\\public/themes/october/partials/site/header.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("page" => 8, "theme" => 9);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['page', 'theme'],
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
