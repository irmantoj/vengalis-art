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

/* C:\xampp\htdocs\vengalisart/themes/hambern-hambern-blank-bootstrap-4/partials/footer.htm */
class __TwigTemplate_c1b4723e69f113f18b112f2f0c518bbfdb7011bfdc2fac790cd49287fd11d9e3 extends \Twig\Template
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
        $filters = array("page" => 10);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['page'],
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
        echo "<footer class=\"bg-black pt-3\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col d-flex justify-content-between\">

                <div class=\"\">
                    <h4 class=\"text-white\">Vengalis Art</h4>
                    <ul>
                        <li class=\"footer-link\">
                            <a class=\"footer-link\" href=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">Pagrindinis</a>
                        </li>
                        <li class=\"footer-link\">
                            <a class=\"footer-link\" href=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("originalArtWorks");
        echo "\">Originalūs darbai</a>
                        </li>
                        <li class=\"footer-link\">
                            <a class=\"footer-link\" href=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("fineArtPrints");
        echo "\">Reprodukcija</a>
                        </li>
                        <!-- <li class=\"footer-link\">
                            <a class=\"footer-link\" href=\"";
        // line 19
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("about");
        echo "\">Apie</a>
                        </li> -->
                        <li class=\"footer-link\">
                            <a class=\"footer-link\" href=\"";
        // line 22
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contacts");
        echo "\">Kontaktai</a>
                        </li>
                    </ul>
                </div>

                <div class=\"\">
                    <h4 class=\"text-white mb-2\">Socialiniai tinklai</h4>
                    <a target=\"_blank\" href=\"https://www.facebook.com/VengalisArt-108545703986501\"><i class=\"social-icon fa fa-facebook-f mr-3\"></i></a>
                    <a target=\"_blank\" href=\"https://www.instagram.com/vengalisart/\"><i class=\"social-icon fa fa-instagram\"></i></a>
                </div>
                
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col d-flex justify-content-center\">
                <p class=\"text-white\">
                    <small>© 2021, Vengalis Art.</small>
                </p>
            </div>
        </div>
    </div>
</footer>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\vengalisart/themes/hambern-hambern-blank-bootstrap-4/partials/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 22,  91 => 19,  85 => 16,  79 => 13,  73 => 10,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer class=\"bg-black pt-3\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col d-flex justify-content-between\">

                <div class=\"\">
                    <h4 class=\"text-white\">Vengalis Art</h4>
                    <ul>
                        <li class=\"footer-link\">
                            <a class=\"footer-link\" href=\"{{ 'home'|page }}\">Pagrindinis</a>
                        </li>
                        <li class=\"footer-link\">
                            <a class=\"footer-link\" href=\"{{ 'originalArtWorks'|page }}\">Originalūs darbai</a>
                        </li>
                        <li class=\"footer-link\">
                            <a class=\"footer-link\" href=\"{{ 'fineArtPrints'|page }}\">Reprodukcija</a>
                        </li>
                        <!-- <li class=\"footer-link\">
                            <a class=\"footer-link\" href=\"{{ 'about'|page }}\">Apie</a>
                        </li> -->
                        <li class=\"footer-link\">
                            <a class=\"footer-link\" href=\"{{ 'contacts'|page }}\">Kontaktai</a>
                        </li>
                    </ul>
                </div>

                <div class=\"\">
                    <h4 class=\"text-white mb-2\">Socialiniai tinklai</h4>
                    <a target=\"_blank\" href=\"https://www.facebook.com/VengalisArt-108545703986501\"><i class=\"social-icon fa fa-facebook-f mr-3\"></i></a>
                    <a target=\"_blank\" href=\"https://www.instagram.com/vengalisart/\"><i class=\"social-icon fa fa-instagram\"></i></a>
                </div>
                
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col d-flex justify-content-center\">
                <p class=\"text-white\">
                    <small>© 2021, Vengalis Art.</small>
                </p>
            </div>
        </div>
    </div>
</footer>", "C:\\xampp\\htdocs\\vengalisart/themes/hambern-hambern-blank-bootstrap-4/partials/footer.htm", "");
    }
}
