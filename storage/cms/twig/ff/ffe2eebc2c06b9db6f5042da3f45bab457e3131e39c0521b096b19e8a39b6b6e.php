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

/* C:\xampp\htdocs\vengalisart/themes/hambern-hambern-blank-bootstrap-4/layouts/default.htm */
class __TwigTemplate_d0819ce6240f47b4bc69885f2b2f30c19f1cbd5baf34300bb4db42cc6f75a16e extends \Twig\Template
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
        $tags = array("styles" => 17, "partial" => 22, "page" => 24, "framework" => 40, "scripts" => 41);
        $filters = array("theme" => 16);
        $functions = array();

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

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">

    <link href=\"";
        // line 8
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/vendor/bootstrap/css/bootstrap.min.css", 1 => "assets/vendor/font-awesome/css/font-awesome.min.css", 2 => "assets/vendor/animate.css/animate.min.css", 3 => "assets/vendor/plyr/dist/plyr.css", 4 => "assets/vendor/lightbox/dist/css/lightbox.min.css", 5 => "assets/vendor/slick/slick/slick-theme.css", 6 => "assets/vendor/slick/slick/slick.css"]);
        // line 16
        echo "\" rel=\"stylesheet\">
    ";
        // line 17
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 18
        echo "
  </head>
  <body>

\t";
        // line 22
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("navbar"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 23
        echo "    <div class=\"page\">
      ";
        // line 24
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 25
        echo "    </div>
  
      ";
        // line 27
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 28
        echo "
    <script src=\"";
        // line 29
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/vendor/jquery/dist/jquery.min.js", 1 => "assets/vendor/tether/dist/js/tether.min.js", 2 => "assets/vendor/bootstrap/js/bootstrap.min.js", 3 => "assets/vendor/wow/dist/wow.min.js", 4 => "assets/vendor/holderjs/holder.min.js", 5 => "assets/vendor/plyr/dist/plyr.js", 6 => "assets/vendor/lightbox/dist/js/lightbox.min.js", 7 => "assets/vendor/slick/slick/slick.min.js", 8 => "assets/js/scripts.js"]);
        // line 39
        echo "\"></script>
    ";
        // line 40
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
        // line 41
        echo "    ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 42
        echo "  </body>
</html>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\vengalisart/themes/hambern-hambern-blank-bootstrap-4/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 42,  121 => 41,  110 => 40,  107 => 39,  105 => 29,  102 => 28,  98 => 27,  94 => 25,  92 => 24,  89 => 23,  85 => 22,  79 => 18,  76 => 17,  73 => 16,  71 => 8,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">

    <link href=\"{{ [
      'assets/vendor/bootstrap/css/bootstrap.min.css',
      'assets/vendor/font-awesome/css/font-awesome.min.css',
      'assets/vendor/animate.css/animate.min.css',
      'assets/vendor/plyr/dist/plyr.css',
      'assets/vendor/lightbox/dist/css/lightbox.min.css',
      'assets/vendor/slick/slick/slick-theme.css',
      'assets/vendor/slick/slick/slick.css' 
    ]|theme }}\" rel=\"stylesheet\">
    {% styles %}

  </head>
  <body>

\t{% partial 'navbar' %}
    <div class=\"page\">
      {% page %}
    </div>
  
      {% partial 'footer' %}

    <script src=\"{{ [
      'assets/vendor/jquery/dist/jquery.min.js',
      'assets/vendor/tether/dist/js/tether.min.js',
      'assets/vendor/bootstrap/js/bootstrap.min.js',
      'assets/vendor/wow/dist/wow.min.js',
      'assets/vendor/holderjs/holder.min.js',
      'assets/vendor/plyr/dist/plyr.js',
      'assets/vendor/lightbox/dist/js/lightbox.min.js',
      'assets/vendor/slick/slick/slick.min.js',
      'assets/js/scripts.js'
    ]|theme }}\"></script>
    {% framework extras %}
    {% scripts %}
  </body>
</html>", "C:\\xampp\\htdocs\\vengalisart/themes/hambern-hambern-blank-bootstrap-4/layouts/default.htm", "");
    }
}
