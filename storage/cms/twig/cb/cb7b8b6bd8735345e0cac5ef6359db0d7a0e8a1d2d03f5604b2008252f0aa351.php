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

/* C:\xampp\htdocs\vengalisart/themes/hambern-hambern-blank-bootstrap-4/partials/navbar.htm */
class __TwigTemplate_8e6d2871f2ac2d3b6aab169de3987af03bd0cdd18ce2229f04c4553cdaf31ddb extends \Twig\Template
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
        $tags = array();
        $filters = array("page" => 6, "theme" => 7);
        $functions = array();

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

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"container-fluid bg-black\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col\">
\t\t\t\t<nav class=\"navbar navbar-expand-md navbar-dark bg-black\">
\t\t\t\t\t<a class=\"navbar-brand\" href=\"";
        // line 6
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">
\t\t\t\t\t\t<img id=\"logo\" src=\"";
        // line 7
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo.jpg");
        echo "\" />
\t\t\t\t\t</a>
\t\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarText\"
\t\t\t\t\t\taria-controls=\"navbarText\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t\t</button>
\t\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarText\">

\t\t\t\t\t\t<ul class=\"navbar-nav mr-auto\">
\t\t\t\t\t\t\t<li class=\"nav-item-container nav-item";
        // line 16
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 16), "baseFileName", [], "any", false, false, true, 16) == "home")) ? (" active") : (""));
        echo "\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 17
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">Pagrindinis</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li class=\"nav-item-container nav-item";
        // line 20
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 20), "baseFileName", [], "any", false, false, true, 20) == "originalArtWorks")) ? (" active") : (""));
        echo "\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 21
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("originalArtWorks");
        echo "\">Originalūs darbai</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li class=\"nav-item-container nav-item";
        // line 24
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 24), "baseFileName", [], "any", false, false, true, 24) == "fineArtPrints")) ? (" active") : (""));
        echo "\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 25
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("fineArtPrints");
        echo "\">Reprodukcija</a>
\t\t\t\t\t\t\t</li>

<!--                             <li class=\"nav-item-container nav-item";
        // line 28
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 28), "baseFileName", [], "any", false, false, true, 28) == "about")) ? (" active") : (""));
        echo "\">
    <a class=\"nav-link\" href=\"";
        // line 29
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("about");
        echo "\">Apie</a>
</li> -->

\t\t\t\t\t\t\t<li class=\"nav-item-container nav-item";
        // line 32
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 32), "baseFileName", [], "any", false, false, true, 32) == "contacts")) ? (" active") : (""));
        echo "\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 33
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contacts");
        echo "\">Kontaktai</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>

\t\t\t\t\t</div>
\t\t\t\t</nav>
\t\t\t</div>
\t\t</div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\vengalisart/themes/hambern-hambern-blank-bootstrap-4/partials/navbar.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 33,  125 => 32,  119 => 29,  115 => 28,  109 => 25,  105 => 24,  99 => 21,  95 => 20,  89 => 17,  85 => 16,  73 => 7,  69 => 6,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container-fluid bg-black\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col\">
\t\t\t\t<nav class=\"navbar navbar-expand-md navbar-dark bg-black\">
\t\t\t\t\t<a class=\"navbar-brand\" href=\"{{ 'home'|page }}\">
\t\t\t\t\t\t<img id=\"logo\" src=\"{{ 'assets/images/logo.jpg'|theme }}\" />
\t\t\t\t\t</a>
\t\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarText\"
\t\t\t\t\t\taria-controls=\"navbarText\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t\t</button>
\t\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarText\">

\t\t\t\t\t\t<ul class=\"navbar-nav mr-auto\">
\t\t\t\t\t\t\t<li class=\"nav-item-container nav-item{{ this.page.baseFileName == 'home' ? ' active' }}\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{ 'home'|page }}\">Pagrindinis</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li class=\"nav-item-container nav-item{{ this.page.baseFileName == 'originalArtWorks' ? ' active' }}\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{ 'originalArtWorks'|page }}\">Originalūs darbai</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li class=\"nav-item-container nav-item{{ this.page.baseFileName == 'fineArtPrints' ? ' active' }}\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{ 'fineArtPrints'|page }}\">Reprodukcija</a>
\t\t\t\t\t\t\t</li>

<!--                             <li class=\"nav-item-container nav-item{{ this.page.baseFileName == 'about' ? ' active' }}\">
    <a class=\"nav-link\" href=\"{{ 'about'|page }}\">Apie</a>
</li> -->

\t\t\t\t\t\t\t<li class=\"nav-item-container nav-item{{ this.page.baseFileName == 'contacts' ? ' active' }}\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{ 'contacts'|page }}\">Kontaktai</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>

\t\t\t\t\t</div>
\t\t\t\t</nav>
\t\t\t</div>
\t\t</div>
\t</div>
</div>", "C:\\xampp\\htdocs\\vengalisart/themes/hambern-hambern-blank-bootstrap-4/partials/navbar.htm", "");
    }
}
