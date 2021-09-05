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

/* C:\xampp\htdocs\vengalisart/themes/hambern-hambern-blank-bootstrap-4/pages/fineArtPrintsDetails.htm */
class __TwigTemplate_abf9151b7d75e2336c2302dd6e554d9735be81005c26438d4b9435a400290822 extends \Twig\Template
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
        $tags = array("set" => 1, "if" => 6, "for" => 17);
        $filters = array("escape" => 12, "page" => 59);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['escape', 'page'],
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
        $context["record"] = twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "record", [], "any", false, false, true, 1);
        // line 2
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "displayColumn", [], "any", false, false, true, 2);
        // line 3
        $context["notFoundMessage"] = twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "notFoundMessage", [], "any", false, false, true, 3);
        // line 4
        echo "

";
        // line 6
        if (($context["record"] ?? null)) {
            // line 7
            echo "<section class=\"\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-6 my-4\">
                <div class=\"slider slider-for mb-2\">
                    <a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "image", [], "any", false, false, true, 12), "path", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
            echo "\" data-title=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "name", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
            echo "\" data-lightbox=\"roadtrip\">
                        <img class=\"main-image\" src=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "image", [], "any", false, false, true, 13), "path", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
            echo "\">
                    </a>

                    ";
            // line 16
            if (twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "images", [], "any", false, false, true, 16)) {
                // line 17
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "images", [], "any", false, false, true, 17));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 18
                    echo "                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
                    echo "\" data-title=\"";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "name", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
                    echo "\" data-lightbox=\"roadtrip\">
                        <img src=\"";
                    // line 19
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
                    echo "\" class=\"main-image\">
                    </a>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 22
                echo "                    ";
            }
            // line 23
            echo "                </div>
                ";
            // line 24
            if ((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "images", [], "any", false, false, true, 24)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null)) {
                // line 25
                echo "                <div class=\"slider slider-nav\">
                    
                    <div class=\"mx-2\">
                        <img src=\"";
                // line 28
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "image", [], "any", false, false, true, 28), "path", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
                echo "\" class=\"additional-img-details\">
                    </div>
                    ";
                // line 30
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "images", [], "any", false, false, true, 30));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 31
                    echo "                    <div class=\"mx-2\">
                        <img src=\"";
                    // line 32
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, true, 32), 32, $this->source), "html", null, true);
                    echo "\" class=\"additional-img-details\">
                    </div>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 35
                echo "                    
                </div>
                ";
            }
            // line 38
            echo "            </div>

            <div class=\"col-lg-6 mt-4\">
                <div>
                    <h1 class=\"main-title\">";
            // line 42
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "name", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
            echo "</h1>
                    <p class=\"main-text\">&euro;";
            // line 43
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "price", [], "any", false, false, true, 43), 43, $this->source), "html", null, true);
            echo "</p>
                    <p>";
            // line 44
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "description", [], "any", false, false, true, 44), 44, $this->source), "html", null, true);
            echo "</p> 
                    <p>";
            // line 45
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "size", [], "any", false, false, true, 45), 45, $this->source), "html", null, true);
            echo "</p>
                </div>
            </div>
        </div>

        ";
            // line 50
            if ( !twig_test_empty(($context["similar"] ?? null))) {
                // line 51
                echo "            <h2 class=\"text-center mt-4 main-title\">Jums gali taip pat patikti</h2>
        ";
            }
            // line 53
            echo "
        <div class=\"row my-4\">
            <div class=\"col\">
                    <div class=\"similar-container mb-4\">
                        ";
            // line 57
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["similar"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
                // line 58
                echo "                        <div class=\"similar-img-container mx-2\">
                            <a href=\"";
                // line 59
                echo $this->extensions['Cms\Twig\Extension']->pageFilter("fineArtPrintsDetails", ["id" => twig_get_attribute($this->env, $this->source, $context["entry"], "id", [], "any", false, false, true, 59)]);
                echo "\">
                                <img src=\"";
                // line 60
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entry"], "image", [], "any", false, false, true, 60), "path", [], "any", false, false, true, 60), 60, $this->source), "html", null, true);
                echo "\" class=\"similar-img\">
                            </a>
                        </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "                    </div>
            </div>
        </div>

    </div>
</section>
";
        } else {
            // line 71
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["notFoundMessage"] ?? null), 71, $this->source), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\vengalisart/themes/hambern-hambern-blank-bootstrap-4/pages/fineArtPrintsDetails.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 71,  214 => 64,  204 => 60,  200 => 59,  197 => 58,  193 => 57,  187 => 53,  183 => 51,  181 => 50,  173 => 45,  169 => 44,  165 => 43,  161 => 42,  155 => 38,  150 => 35,  141 => 32,  138 => 31,  134 => 30,  129 => 28,  124 => 25,  122 => 24,  119 => 23,  116 => 22,  107 => 19,  100 => 18,  95 => 17,  93 => 16,  87 => 13,  81 => 12,  74 => 7,  72 => 6,  68 => 4,  66 => 3,  64 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set record = builderDetails.record %}
{% set displayColumn = builderDetails.displayColumn %}
{% set notFoundMessage = builderDetails.notFoundMessage %}


{% if record %}
<section class=\"\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-6 my-4\">
                <div class=\"slider slider-for mb-2\">
                    <a href=\"{{ record.image.path }}\" data-title=\"{{ record.name }}\" data-lightbox=\"roadtrip\">
                        <img class=\"main-image\" src=\"{{ record.image.path }}\">
                    </a>

                    {% if record.images %}
                    {% for image in record.images %}
                    <a href=\"{{ image.path }}\" data-title=\"{{ record.name }}\" data-lightbox=\"roadtrip\">
                        <img src=\"{{ image.path }}\" class=\"main-image\">
                    </a>
                    {% endfor %}
                    {% endif %}
                </div>
                {% if record.images[0] %}
                <div class=\"slider slider-nav\">
                    
                    <div class=\"mx-2\">
                        <img src=\"{{ record.image.path }}\" class=\"additional-img-details\">
                    </div>
                    {% for image in record.images %}
                    <div class=\"mx-2\">
                        <img src=\"{{ image.path }}\" class=\"additional-img-details\">
                    </div>
                    {% endfor %}
                    
                </div>
                {% endif %}
            </div>

            <div class=\"col-lg-6 mt-4\">
                <div>
                    <h1 class=\"main-title\">{{ record.name }}</h1>
                    <p class=\"main-text\">&euro;{{ record.price }}</p>
                    <p>{{ record.description }}</p> 
                    <p>{{ record.size }}</p>
                </div>
            </div>
        </div>

        {% if similar is not empty %}
            <h2 class=\"text-center mt-4 main-title\">Jums gali taip pat patikti</h2>
        {% endif %}

        <div class=\"row my-4\">
            <div class=\"col\">
                    <div class=\"similar-container mb-4\">
                        {% for entry in similar %}
                        <div class=\"similar-img-container mx-2\">
                            <a href=\"{{ 'fineArtPrintsDetails'|page({ id: entry.id }) }}\">
                                <img src=\"{{ entry.image.path }}\" class=\"similar-img\">
                            </a>
                        </div>
                        {% endfor %}
                    </div>
            </div>
        </div>

    </div>
</section>
{% else %}
{{ notFoundMessage }}
{% endif %}", "C:\\xampp\\htdocs\\vengalisart/themes/hambern-hambern-blank-bootstrap-4/pages/fineArtPrintsDetails.htm", "");
    }
}
