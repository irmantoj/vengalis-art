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

/* C:\xampp\htdocs\vengalisart/themes/hambern-hambern-blank-bootstrap-4/pages/originalArtWorksDetails.htm */
class __TwigTemplate_173fdb6613a3384b8e95d41bb9677cead395b87755a00efa2a91d2ea77bae27d extends \Twig\Template
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
        $tags = array("set" => 1, "if" => 5, "for" => 16);
        $filters = array("escape" => 11, "page" => 58);
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
        // line 5
        if (($context["record"] ?? null)) {
            // line 6
            echo "<section class=\"\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-6 my-4\">
                <div class=\"slider slider-for mb-2\">
                    <a href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "image", [], "any", false, false, true, 11), "path", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
            echo "\" data-title=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "name", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
            echo "\" data-lightbox=\"roadtrip\">
                        <img class=\"main-image\" src=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "image", [], "any", false, false, true, 12), "path", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
            echo "\">
                    </a>

                    ";
            // line 15
            if (twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "images", [], "any", false, false, true, 15)) {
                // line 16
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "images", [], "any", false, false, true, 16));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 17
                    echo "                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
                    echo "\" data-title=\"";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "name", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
                    echo "\" data-lightbox=\"roadtrip\">
                        <img src=\"";
                    // line 18
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
                    echo "\" class=\"main-image\">
                    </a>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 21
                echo "                    ";
            }
            // line 22
            echo "                </div>
                ";
            // line 23
            if ((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "images", [], "any", false, false, true, 23)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null)) {
                // line 24
                echo "                <div class=\"slider slider-nav\">
                    
                    <div class=\"mx-2\">
                        <img src=\"";
                // line 27
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "image", [], "any", false, false, true, 27), "path", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
                echo "\" class=\"additional-img-details\">
                    </div>
                    ";
                // line 29
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "images", [], "any", false, false, true, 29));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 30
                    echo "                    <div class=\"mx-2\">
                        <img src=\"";
                    // line 31
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
                    echo "\" class=\"additional-img-details\">
                    </div>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 34
                echo "                    
                </div>
                ";
            }
            // line 37
            echo "            </div>

            <div class=\"col-lg-6 mt-4\">
                <div>
                    <h1 class=\"main-title\">";
            // line 41
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "name", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
            echo "</h1>
                    <p class=\"main-text\">&euro;";
            // line 42
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "price", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
            echo "</p>
                    <p>";
            // line 43
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "description", [], "any", false, false, true, 43), 43, $this->source), "html", null, true);
            echo "</p> 
                    <p>";
            // line 44
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "size", [], "any", false, false, true, 44), 44, $this->source), "html", null, true);
            echo "</p>
                </div>
            </div>
        </div>

        ";
            // line 49
            if ( !twig_test_empty(($context["similar"] ?? null))) {
                // line 50
                echo "            <h2 class=\"text-center mt-4 main-title\">Jums gali taip pat patikti</h2>
        ";
            }
            // line 52
            echo "
        <div class=\"row my-4\">
            <div class=\"col\">
                    <div class=\"similar-container mb-4\">
                        ";
            // line 56
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["similar"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
                // line 57
                echo "                        <div class=\"similar-img-container mx-2\">
                            <a href=\"";
                // line 58
                echo $this->extensions['Cms\Twig\Extension']->pageFilter("originalArtWorksDetails", ["id" => twig_get_attribute($this->env, $this->source, $context["entry"], "id", [], "any", false, false, true, 58)]);
                echo "\">
                                <img src=\"";
                // line 59
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entry"], "image", [], "any", false, false, true, 59), "path", [], "any", false, false, true, 59), 59, $this->source), "html", null, true);
                echo "\" class=\"similar-img\">
                            </a>
                        </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "                    </div>
            </div>
        </div>

    </div>
</section>
";
        } else {
            // line 70
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["notFoundMessage"] ?? null), 70, $this->source), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\vengalisart/themes/hambern-hambern-blank-bootstrap-4/pages/originalArtWorksDetails.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 70,  213 => 63,  203 => 59,  199 => 58,  196 => 57,  192 => 56,  186 => 52,  182 => 50,  180 => 49,  172 => 44,  168 => 43,  164 => 42,  160 => 41,  154 => 37,  149 => 34,  140 => 31,  137 => 30,  133 => 29,  128 => 27,  123 => 24,  121 => 23,  118 => 22,  115 => 21,  106 => 18,  99 => 17,  94 => 16,  92 => 15,  86 => 12,  80 => 11,  73 => 6,  71 => 5,  68 => 4,  66 => 3,  64 => 2,  62 => 1,);
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
                            <a href=\"{{ 'originalArtWorksDetails'|page({ id: entry.id }) }}\">
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
{% endif %}", "C:\\xampp\\htdocs\\vengalisart/themes/hambern-hambern-blank-bootstrap-4/pages/originalArtWorksDetails.htm", "");
    }
}
