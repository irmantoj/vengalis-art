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

/* C:\xampp\htdocs\vengalisart/themes/hambern-hambern-blank-bootstrap-4/pages/home.htm */
class __TwigTemplate_30e5eedf1022a1bed5237c2441b764e667a55877ac349b6c6b9f70cdb88c98bf extends \Twig\Template
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
        $tags = array("for" => 4);
        $filters = array("escape" => 5, "page" => 30, "theme" => 35);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for'],
                ['escape', 'page', 'theme'],
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
        echo "<section>
  <div id=\"carousel\" class=\"carousel slide\" data-ride=\"carousel\">
    <ol class=\"carousel-indicators\">
      ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 5
            echo "        <li data-target=\"#carousel\" data-slide-to=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
            echo "\" class=\"";
            echo (((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 5) == 1)) ? ("active") : (null));
            echo "\"></li>
      ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "    </ol>
    <div id=\"carousel-inner\" class=\"carousel-inner\" role=\"listbox\">
      ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 10
            echo "      <div class=\"carousel-item ";
            echo (((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 10) == 1)) ? ("active") : (null));
            echo "\">
        <img class=\"carousel-img\" src=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "image", [], "any", false, false, true, 11), "path", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
            echo "\" alt=\"Slide\">
      </div>
      ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "    <a class=\"carousel-control-prev\" href=\"#carousel\" role=\"button\" data-slide=\"prev\">
      <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
      <span class=\"sr-only\">Previous</span>
    </a>
    <a class=\"carousel-control-next\" href=\"#carousel\" role=\"button\" data-slide=\"next\">
      <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
      <span class=\"sr-only\">Next</span>
    </a>
  </div>
</section>

<section class=\"bg-grey section-borders\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-6\">
        <div class=\"gallery-link p-4\">
          <a href=\"";
        // line 30
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("originalArtWorks");
        echo "\">
            <div class=\"text-center\">
              <h3 class=\"main-title mb-3\">Orginalūs darbai</h3>
            </div>
            <!-- <div>
              <img class=\"gallery-link-img\" src=\"";
        // line 35
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/pic1.jpg");
        echo "\" />
            </div> -->
          </a>
        </div>
      </div>
      <div class=\"col-md-6\">
        <div class=\"gallery-link p-4\">
          <a href=\"";
        // line 42
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("fineArtPrints");
        echo "\">
            <div class=\"text-center\">
              <h3 class=\"main-title mb-3\">Fine art prints</h3>
            </div>
            <!-- <div>
              <img class=\"gallery-link-img\" src=\"";
        // line 47
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/pic2.jpg");
        echo "\" />
            </div> -->
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<section class=\"mb-5\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-6\">
        <div class=\"p-4\">
          <img class=\"gallery-link-img\" src=\"";
        // line 61
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/vengalis.jpg");
        echo "\" />
        </div>
        
      </div>
      <div class=\"d-flex justify-content align-items-center p-4 col-md-6\">
        <div>
          <h3 class=\"w-100 main-title\">Apie Mane</h3>
          <p class=\"w-100\">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
            Ipsam, nisi reiciendis distinctio earum quis suscipit, quisquam 
            alias ea temporibus fugiat veritatis consectetur ullam maxime tenetur 
            dolorum fuga totam excepturi! Voluptas.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\vengalisart/themes/hambern-hambern-blank-bootstrap-4/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 61,  190 => 47,  182 => 42,  172 => 35,  164 => 30,  146 => 14,  129 => 11,  124 => 10,  107 => 9,  103 => 7,  84 => 5,  67 => 4,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section>
  <div id=\"carousel\" class=\"carousel slide\" data-ride=\"carousel\">
    <ol class=\"carousel-indicators\">
      {% for record in records %}
        <li data-target=\"#carousel\" data-slide-to=\"{{ loop.index }}\" class=\"{{ loop.index == 1 ? 'active' : null }}\"></li>
      {% endfor %}
    </ol>
    <div id=\"carousel-inner\" class=\"carousel-inner\" role=\"listbox\">
      {% for record in records %}
      <div class=\"carousel-item {{ loop.index == 1 ? 'active' : null }}\">
        <img class=\"carousel-img\" src=\"{{ record.image.path }}\" alt=\"Slide\">
      </div>
      {% endfor %}
    <a class=\"carousel-control-prev\" href=\"#carousel\" role=\"button\" data-slide=\"prev\">
      <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
      <span class=\"sr-only\">Previous</span>
    </a>
    <a class=\"carousel-control-next\" href=\"#carousel\" role=\"button\" data-slide=\"next\">
      <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
      <span class=\"sr-only\">Next</span>
    </a>
  </div>
</section>

<section class=\"bg-grey section-borders\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-6\">
        <div class=\"gallery-link p-4\">
          <a href=\"{{ 'originalArtWorks'|page }}\">
            <div class=\"text-center\">
              <h3 class=\"main-title mb-3\">Orginalūs darbai</h3>
            </div>
            <!-- <div>
              <img class=\"gallery-link-img\" src=\"{{ 'assets/images/pic1.jpg'|theme }}\" />
            </div> -->
          </a>
        </div>
      </div>
      <div class=\"col-md-6\">
        <div class=\"gallery-link p-4\">
          <a href=\"{{ 'fineArtPrints'|page }}\">
            <div class=\"text-center\">
              <h3 class=\"main-title mb-3\">Fine art prints</h3>
            </div>
            <!-- <div>
              <img class=\"gallery-link-img\" src=\"{{ 'assets/images/pic2.jpg'|theme }}\" />
            </div> -->
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<section class=\"mb-5\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-6\">
        <div class=\"p-4\">
          <img class=\"gallery-link-img\" src=\"{{ 'assets/images/vengalis.jpg'|theme }}\" />
        </div>
        
      </div>
      <div class=\"d-flex justify-content align-items-center p-4 col-md-6\">
        <div>
          <h3 class=\"w-100 main-title\">Apie Mane</h3>
          <p class=\"w-100\">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
            Ipsam, nisi reiciendis distinctio earum quis suscipit, quisquam 
            alias ea temporibus fugiat veritatis consectetur ullam maxime tenetur 
            dolorum fuga totam excepturi! Voluptas.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>", "C:\\xampp\\htdocs\\vengalisart/themes/hambern-hambern-blank-bootstrap-4/pages/home.htm", "");
    }
}
