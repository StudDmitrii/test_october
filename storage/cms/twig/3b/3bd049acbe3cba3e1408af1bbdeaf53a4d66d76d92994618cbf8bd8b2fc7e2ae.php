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

/* D:\OSPanel\home\october\public/themes/october/partials/site/footer.htm */
class __TwigTemplate_356c3bcd748f958ceb92d7a14d152f3b3b04cd3e94530d0676beab5f527f470f extends \Twig\Template
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
        echo "<div class=\"footer_top\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xl-3 col-md-6 col-lg-3\">
                <div class=\"footer_widget wow fadeInUp\" data-wow-duration=\"1s\" data-wow-delay=\".3s\">
                    <div class=\"footer_logo\">
                        <a href=\"#\">
                            <img src=\"img/logo.png\" alt=\"\">
                        </a>
                    </div>
                    <p>
                        finloan@support.com <br>
                        +10 873 672 6782 <br>
                        600/D, Green road, NewYork
                    </p>
                    <div class=\"socail_links\">
                        <ul>
                            <li>
                                <a href=\"#\">
                                    <i class=\"ti-facebook\"></i>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <i class=\"fa fa-google-plus\"></i>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <i class=\"fa fa-twitter\"></i>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <i class=\"fa fa-instagram\"></i>
                                </a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
            <div class=\"col-xl-2 col-md-6 col-lg-2\">
                <div class=\"footer_widget wow fadeInUp\" data-wow-duration=\"1.1s\" data-wow-delay=\".4s\">
                    <h3 class=\"footer_title\">
                        Company
                    </h3>
                    <ul>
                        <li><a href=\"#\">About </a></li>
                        <li><a href=\"#\"> Pricing</a></li>
                        <li><a href=\"#\">Carrier Tips</a></li>
                        <li><a href=\"#\">FAQ</a></li>
                    </ul>

                </div>
            </div>
            <div class=\"col-xl-3 col-md-6 col-lg-3\">
                <div class=\"footer_widget wow fadeInUp\" data-wow-duration=\"1.2s\" data-wow-delay=\".5s\">
                    <h3 class=\"footer_title\">
                        Category
                    </h3>
                    <ul>
                        <li><a href=\"#\">Design & Art</a></li>
                        <li><a href=\"#\">Engineering</a></li>
                        <li><a href=\"#\">Sales & Marketing</a></li>
                        <li><a href=\"#\">Finance</a></li>
                    </ul>
                </div>
            </div>
            <div class=\"col-xl-4 col-md-6 col-lg-4\">
                <div class=\"footer_widget wow fadeInUp\" data-wow-duration=\"1.3s\" data-wow-delay=\".6s\">
                    <h3 class=\"footer_title\">
                        Subscribe
                    </h3>
                    <form action=\"#\" class=\"newsletter_form\">
                        <input type=\"text\" placeholder=\"Enter your mail\">
                        <button type=\"submit\">Subscribe</button>
                    </form>
                    <p class=\"newsletter_text\">Esteem spirit temper too say adieus who direct esteem esteems
                        luckily.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"copy-right_text wow fadeInUp\" data-wow-duration=\"1.4s\" data-wow-delay=\".3s\">
    <div class=\"container\">
        <div class=\"footer_border\"></div>
        <div class=\"row\">
            <div class=\"col-xl-12\">
                <p class=\"copy_right text-center\">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class=\"fa fa-heart-o\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "D:\\OSPanel\\home\\october\\public/themes/october/partials/site/footer.htm";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"footer_top\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xl-3 col-md-6 col-lg-3\">
                <div class=\"footer_widget wow fadeInUp\" data-wow-duration=\"1s\" data-wow-delay=\".3s\">
                    <div class=\"footer_logo\">
                        <a href=\"#\">
                            <img src=\"img/logo.png\" alt=\"\">
                        </a>
                    </div>
                    <p>
                        finloan@support.com <br>
                        +10 873 672 6782 <br>
                        600/D, Green road, NewYork
                    </p>
                    <div class=\"socail_links\">
                        <ul>
                            <li>
                                <a href=\"#\">
                                    <i class=\"ti-facebook\"></i>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <i class=\"fa fa-google-plus\"></i>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <i class=\"fa fa-twitter\"></i>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <i class=\"fa fa-instagram\"></i>
                                </a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
            <div class=\"col-xl-2 col-md-6 col-lg-2\">
                <div class=\"footer_widget wow fadeInUp\" data-wow-duration=\"1.1s\" data-wow-delay=\".4s\">
                    <h3 class=\"footer_title\">
                        Company
                    </h3>
                    <ul>
                        <li><a href=\"#\">About </a></li>
                        <li><a href=\"#\"> Pricing</a></li>
                        <li><a href=\"#\">Carrier Tips</a></li>
                        <li><a href=\"#\">FAQ</a></li>
                    </ul>

                </div>
            </div>
            <div class=\"col-xl-3 col-md-6 col-lg-3\">
                <div class=\"footer_widget wow fadeInUp\" data-wow-duration=\"1.2s\" data-wow-delay=\".5s\">
                    <h3 class=\"footer_title\">
                        Category
                    </h3>
                    <ul>
                        <li><a href=\"#\">Design & Art</a></li>
                        <li><a href=\"#\">Engineering</a></li>
                        <li><a href=\"#\">Sales & Marketing</a></li>
                        <li><a href=\"#\">Finance</a></li>
                    </ul>
                </div>
            </div>
            <div class=\"col-xl-4 col-md-6 col-lg-4\">
                <div class=\"footer_widget wow fadeInUp\" data-wow-duration=\"1.3s\" data-wow-delay=\".6s\">
                    <h3 class=\"footer_title\">
                        Subscribe
                    </h3>
                    <form action=\"#\" class=\"newsletter_form\">
                        <input type=\"text\" placeholder=\"Enter your mail\">
                        <button type=\"submit\">Subscribe</button>
                    </form>
                    <p class=\"newsletter_text\">Esteem spirit temper too say adieus who direct esteem esteems
                        luckily.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"copy-right_text wow fadeInUp\" data-wow-duration=\"1.4s\" data-wow-delay=\".3s\">
    <div class=\"container\">
        <div class=\"footer_border\"></div>
        <div class=\"row\">
            <div class=\"col-xl-12\">
                <p class=\"copy_right text-center\">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class=\"fa fa-heart-o\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
            </div>
        </div>
    </div>
</div>", "D:\\OSPanel\\home\\october\\public/themes/october/partials/site/footer.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
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
