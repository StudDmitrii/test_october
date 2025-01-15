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

/* D:\OSPanel\home\october\public/themes/october/pages/contact.htm */
class __TwigTemplate_45723ecd18431e53f207c1681c1621aefea119ea02357aef34457595f6eab969 extends \Twig\Template
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
        echo "<!-- bradcam_area  -->
    <div class=\"bradcam_area bradcam_bg_1\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-xl-12\">
                    <div class=\"bradcam_text\">
                        <h3>Контакты</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ bradcam_area  -->
  <!-- ================ contact section start ================= -->
  <section class=\"contact-section section_padding\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-12\">
          <code>";
        // line 19
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["feedback_result"] ?? null), 19, $this->source), "html", null, true);
        echo "</code>
          <h2 class=\"contact-title\">Форма обратной связи</h2>
        </div>
        <div class=\"col-lg-8\">
          ";
        // line 23
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("feedback"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 24
        echo "        </div>
        <div class=\"col-lg-4\">
          <div class=\"media contact-info\">
            <span class=\"contact-info__icon\"><i class=\"ti-home\"></i></span>
            <div class=\"media-body\">
              <h3>";
        // line 29
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["city"] ?? null), 29, $this->source), "html", null, true);
        echo "</h3>
              <p>";
        // line 30
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["address"] ?? null), 30, $this->source), "html", null, true);
        echo "</p>
            </div>
          </div>
          <div class=\"media contact-info\">
            <span class=\"contact-info__icon\"><i class=\"ti-tablet\"></i></span>
            <div class=\"media-body\">
              <h3>";
        // line 36
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["phone"] ?? null), 36, $this->source), "html", null, true);
        echo "</h3>
            </div>
          </div>
          <div class=\"media contact-info\">
            <span class=\"contact-info__icon\"><i class=\"ti-email\"></i></span>
            <div class=\"media-body\">
              <h3>";
        // line 42
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["mail"] ?? null), 42, $this->source), "html", null, true);
        echo "</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ================ contact section end ================= -->";
    }

    public function getTemplateName()
    {
        return "D:\\OSPanel\\home\\october\\public/themes/october/pages/contact.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 42,  90 => 36,  81 => 30,  77 => 29,  70 => 24,  66 => 23,  59 => 19,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- bradcam_area  -->
    <div class=\"bradcam_area bradcam_bg_1\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-xl-12\">
                    <div class=\"bradcam_text\">
                        <h3>Контакты</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ bradcam_area  -->
  <!-- ================ contact section start ================= -->
  <section class=\"contact-section section_padding\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-12\">
          <code>{{feedback_result}}</code>
          <h2 class=\"contact-title\">Форма обратной связи</h2>
        </div>
        <div class=\"col-lg-8\">
          {% component 'feedback' %}
        </div>
        <div class=\"col-lg-4\">
          <div class=\"media contact-info\">
            <span class=\"contact-info__icon\"><i class=\"ti-home\"></i></span>
            <div class=\"media-body\">
              <h3>{{city}}</h3>
              <p>{{address}}</p>
            </div>
          </div>
          <div class=\"media contact-info\">
            <span class=\"contact-info__icon\"><i class=\"ti-tablet\"></i></span>
            <div class=\"media-body\">
              <h3>{{phone}}</h3>
            </div>
          </div>
          <div class=\"media contact-info\">
            <span class=\"contact-info__icon\"><i class=\"ti-email\"></i></span>
            <div class=\"media-body\">
              <h3>{{mail}}</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ================ contact section end ================= -->", "D:\\OSPanel\\home\\october\\public/themes/october/pages/contact.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("component" => 23);
        static $filters = array("escape" => 19);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['component'],
                ['escape'],
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
