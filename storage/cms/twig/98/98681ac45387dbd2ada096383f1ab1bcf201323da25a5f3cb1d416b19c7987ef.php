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

/* C:\xampp\htdocs\vengalisart/themes/hambern-hambern-blank-bootstrap-4/pages/fineArtPrints.htm */
class __TwigTemplate_5bdf129c9e7eec852507d07cf027b47178d6c8aa9e96de78977bb935d68234f5 extends \Twig\Template
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
        $tags = array("set" => 1, "for" => 15, "if" => 35);
        $filters = array("page" => 18, "escape" => 21);
        $functions = array("range" => 38);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if'],
                ['page', 'escape'],
                ['range']
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
        $context["records"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "records", [], "any", false, false, true, 1);
        // line 2
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "displayColumn", [], "any", false, false, true, 2);
        // line 3
        $context["noRecordsMessage"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "noRecordsMessage", [], "any", false, false, true, 3);
        // line 4
        $context["detailsPage"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsPage", [], "any", false, false, true, 4);
        // line 5
        $context["detailsKeyColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsKeyColumn", [], "any", false, false, true, 5);
        // line 6
        $context["detailsUrlParameter"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsUrlParameter", [], "any", false, false, true, 6);
        // line 7
        echo "
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col\">
            <h1 class=\"mt-4 main-title\">Reprodukcija</h1>
        </div>
    </div>
    <div class=\"row\">
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 16
            echo "
        <div class=\"col-md-4\">
            <a href=\"";
            // line 18
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("fineArtPrintsDetails", ["id" => twig_get_attribute($this->env, $this->source, $context["record"], "id", [], "any", false, false, true, 18)]);
            echo "\">
                <div class=\"gallery-card\">
                    <div class=\"gallery-img-container\">
                        <img src=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "image", [], "any", false, false, true, 21), "path", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
            echo "\" class=\"gallery-img img-fluid \">
                    </div>
                    <div class=\"gallery-info-container mt-2\">
                        <h5 class=\"sub-title\">";
            // line 24
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "name", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
            echo "</h5>
                        <p class=\"sub-text\">&euro;";
            // line 25
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "price", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
            echo "</p>
                    </div>
                </div>
            </a>
        </div>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "    </div>
    <div class=\"row mt-2\">
        <div class=\"col\">
            ";
        // line 35
        if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", [], "any", false, false, true, 35) > 1)) {
            // line 36
            echo "            <nav aria-label=\"Page navigation\">
                <ul class=\"pagination pagination-sm\">
                    ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", [], "any", false, false, true, 38)));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 39
                echo "                    <li class=\"page-item ";
                echo (((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, true, 39) == $context["page"])) ? ("active") : (null));
                echo "\">
                        <a class=\"";
                // line 40
                echo (((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, true, 40) == $context["page"])) ? ("text-white bg-dark border-dark") : ("text-dark"));
                echo " page-link color-dark\" href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 40), "baseFileName", [], "any", false, false, true, 40), 40, $this->source), [($context["pageParam"] ?? null) => $context["page"]]);
                echo "\">
                            ";
                // line 41
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["page"], 41, $this->source), "html", null, true);
                echo "
                        </a>
                    </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "                </ul>
            </nav>
            ";
        }
        // line 48
        echo "        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\vengalisart/themes/hambern-hambern-blank-bootstrap-4/pages/fineArtPrints.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 48,  157 => 45,  147 => 41,  141 => 40,  136 => 39,  132 => 38,  128 => 36,  126 => 35,  121 => 32,  108 => 25,  104 => 24,  98 => 21,  92 => 18,  88 => 16,  84 => 15,  74 => 7,  72 => 6,  70 => 5,  68 => 4,  66 => 3,  64 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set records = builderList.records %}
{% set displayColumn = builderList.displayColumn %}
{% set noRecordsMessage = builderList.noRecordsMessage %}
{% set detailsPage = builderList.detailsPage %}
{% set detailsKeyColumn = builderList.detailsKeyColumn %}
{% set detailsUrlParameter = builderList.detailsUrlParameter %}

<div class=\"container\">
    <div class=\"row\">
        <div class=\"col\">
            <h1 class=\"mt-4 main-title\">Reprodukcija</h1>
        </div>
    </div>
    <div class=\"row\">
        {% for record in records %}

        <div class=\"col-md-4\">
            <a href=\"{{ 'fineArtPrintsDetails'|page({ id: record.id }) }}\">
                <div class=\"gallery-card\">
                    <div class=\"gallery-img-container\">
                        <img src=\"{{ record.image.path }}\" class=\"gallery-img img-fluid \">
                    </div>
                    <div class=\"gallery-info-container mt-2\">
                        <h5 class=\"sub-title\">{{ record.name }}</h5>
                        <p class=\"sub-text\">&euro;{{ record.price }}</p>
                    </div>
                </div>
            </a>
        </div>

        {% endfor %}
    </div>
    <div class=\"row mt-2\">
        <div class=\"col\">
            {% if records.lastPage > 1 %}
            <nav aria-label=\"Page navigation\">
                <ul class=\"pagination pagination-sm\">
                    {% for page in 1..records.lastPage %}
                    <li class=\"page-item {{ records.currentPage == page ? 'active' : null }}\">
                        <a class=\"{{ records.currentPage == page ? 'text-white bg-dark border-dark' : 'text-dark' }} page-link color-dark\" href=\"{{ this.page.baseFileName|page({ (pageParam): page }) }}\">
                            {{ page }}
                        </a>
                    </li>
                    {% endfor %}
                </ul>
            </nav>
            {% endif %}
        </div>
    </div>
</div>", "C:\\xampp\\htdocs\\vengalisart/themes/hambern-hambern-blank-bootstrap-4/pages/fineArtPrints.htm", "");
    }
}
