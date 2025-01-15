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

/* D:\OSPanel\home\october\public/plugins/admin/test/components/feedback/default.htm */
class __TwigTemplate_8eda7936740899adaa4c79964f9a0e1f3fd7e35492c3b6a7bea172c31f4b16d2 extends \Twig\Template
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
        echo call_user_func_array($this->env->getFunction('form_open')->getCallable(), ["open", ["class" => "form-contact contact_form", "method" => "POST", "request" => "onSend"]]);
        echo "
";
        // line 2
        echo call_user_func_array($this->env->getFunction('form_model')->getCallable(), ["model", $this->sandbox->ensureToStringAllowed(($context["feedback"] ?? null), 2, $this->source), ["id" => "userForm"]]);
        echo "
          ";
        // line 4
        echo "            <div class=\"row\">
              <div class=\"col-12\">
                <div class=\"form-group\">
                    ";
        // line 7
        echo call_user_func_array($this->env->getFunction('form_textarea')->getCallable(), ["textarea", "text", "", ["class" => "form-control w-100", "id" => "message", "placeholder" => "Введите сообщение...", "required" => "true"]]);
        echo "
                    ";
        // line 9
        echo "                </div>
              </div>
              <div class=\"col-sm-6\">
                <div class=\"form-group\">
                  ";
        // line 13
        echo call_user_func_array($this->env->getFunction('form_text')->getCallable(), ["text", "name", "", ["class" => "form-control", "id" => "name", "placeholder" => "Ваше имя", "required" => "true"]]);
        echo "
                  ";
        // line 15
        echo "                </div>
              </div>
              <div class=\"col-sm-6\">
                <div class=\"form-group\">
                  ";
        // line 19
        echo call_user_func_array($this->env->getFunction('form_email')->getCallable(), ["email", "email", "", ["class" => "form-control", "id" => "email", "placeholder" => "Как с вами связаться", "required" => "true"]]);
        echo "
                  ";
        // line 21
        echo "                </div>
              </div>
            </div>
            <div class=\"form-group mt-3\">
              ";
        // line 25
        echo call_user_func_array($this->env->getFunction('form_submit')->getCallable(), ["submit", "отправить", ["class" => "button button-contactForm btn_4 boxed-btn"]]);
        echo "
              ";
        // line 27
        echo "            </div>
          ";
        // line 29
        echo "          ";
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), ["close"]);
        echo "
";
    }

    public function getTemplateName()
    {
        return "D:\\OSPanel\\home\\october\\public/plugins/admin/test/components/feedback/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 29,  86 => 27,  82 => 25,  76 => 21,  72 => 19,  66 => 15,  62 => 13,  56 => 9,  52 => 7,  47 => 4,  43 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_open({'class': 'form-contact contact_form', 'method': 'POST', 'request': 'onSend'}) }}
{{form_model(feedback, {'id':'userForm'})}}
          {# <form class=\"form-contact contact_form\" action=\"contact_process.php\" method=\"post\" id=\"contactForm\" novalidate=\"novalidate\"> #}
            <div class=\"row\">
              <div class=\"col-12\">
                <div class=\"form-group\">
                    {{ form_textarea('text', '', {'class':'form-control w-100', 'id':\"message\", 'placeholder':'Введите сообщение...', 'required':'true'}) }}
                    {# <textarea class=\"form-control w-100\" name=\"message\" id=\"message\" cols=\"30\" rows=\"9\" onfocus=\"this.placeholder = ''\" onblur=\"this.placeholder = 'Enter Message'\" placeholder = 'Enter Message' required></textarea> #}
                </div>
              </div>
              <div class=\"col-sm-6\">
                <div class=\"form-group\">
                  {{ form_text('name', '', {'class':'form-control', 'id':\"name\", 'placeholder':'Ваше имя', 'required':'true'}) }}
                  {# <input class=\"form-control\" name=\"name\" id=\"name\" type=\"text\" onfocus=\"this.placeholder = ''\" onblur=\"this.placeholder = 'Enter your name'\" placeholder = 'Enter your name' required> #}
                </div>
              </div>
              <div class=\"col-sm-6\">
                <div class=\"form-group\">
                  {{ form_email('email', '', {'class':'form-control', 'id':\"email\", 'placeholder':'Как с вами связаться', 'required':'true'}) }}
                  {# <input class=\"form-control\" name=\"email\" id=\"email\" type=\"email\" onfocus=\"this.placeholder = ''\" onblur=\"this.placeholder = 'Enter email address'\" placeholder = 'Enter email address' required> #}
                </div>
              </div>
            </div>
            <div class=\"form-group mt-3\">
              {{ form_submit('отправить', {'class':\"button button-contactForm btn_4 boxed-btn\"}) }}
              {# <button type=\"submit\" class=\"button button-contactForm btn_4 boxed-btn\">Send Message</button> #}
            </div>
          {# </form> #}
          {{form_close()}}
", "D:\\OSPanel\\home\\october\\public/plugins/admin/test/components/feedback/default.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array();
        static $functions = array("form_open" => 1, "form_model" => 2, "form_textarea" => 7, "form_text" => 13, "form_email" => 19, "form_submit" => 25, "form_close" => 29);

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
                ['form_open', 'form_model', 'form_textarea', 'form_text', 'form_email', 'form_submit', 'form_close']
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
