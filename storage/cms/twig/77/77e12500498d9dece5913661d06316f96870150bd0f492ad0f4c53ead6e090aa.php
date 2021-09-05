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

/* C:\xampp\htdocs\vengalisart/themes/hambern-hambern-blank-bootstrap-4/pages/contacts.htm */
class __TwigTemplate_7e3cd189ff6e713b4f2924f0cc995aaa2365bd37ca0dea78b72b20fcae529c4c extends \Twig\Template
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
        $filters = array();
        $functions = array();

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

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<section>
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col\">
        <h1 class=\"mt-4 main-title\">Kontaktai</h1>
        <div class=\"contacts-container mb-5\">

          <div class=\"contact-text w-100\">
            <p class=\"text-center\">
              <strong>Susisiekite</strong><br>
              Vengalis Art<br>
            </p>
            <hr>

            <div class=\"contacts-container\">
              <div class=\"contacts-item mb-3\">
                <div class=\"contacts-icon-container\">
                  <i class=\"contacts-icon fa fa-envelope\"></i>
                </div>
                vengalisart@gmail.com
              </div>
              <div class=\"contacts-item mb-3\">
                <div class=\"contacts-icon-container\">
                  <i class=\"contacts-icon fa fa-phone\"></i>
                </div>
                +370 690 33238
              </div>

              <div class=\"contacts-item mb-3\">
                <a target=\"_blank\" href=\"https://www.facebook.com/VengalisArt-108545703986501\"><i
                    class=\"social-icon-dark fa fa-facebook-f mr-3\"></i></a>
                <a target=\"_blank\" href=\"https://www.instagram.com/vengalisart/\"><i
                    class=\"social-icon-dark fa fa-instagram\"></i></a>
              </div>
            </div>

          </div>
        </div>

      </div>
    </div>
  </div>
  <div class=\"container-fluid bg-light\">
    <div class=\"row\">
      <div class=\"col p-0\">
        <iframe id=\"map\" src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2248.238574645593!2d21.133052651854282!3d55.70222470326326!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46e4dbf413b89b4d%3A0x1d0e0f6a0ef47a7d!2sPilies%20g.%2014%2C%20Klaip%C4%97da%2091234!5e0!3m2!1slt!2slt!4v1629369404034!5m2!1slt!2slt\" width=\"100%\" height=\"400\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>
      </div>
      
    </div>
  </div>
  </div>
</section>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\vengalisart/themes/hambern-hambern-blank-bootstrap-4/pages/contacts.htm";
    }

    public function getDebugInfo()
    {
        return array (  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section>
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col\">
        <h1 class=\"mt-4 main-title\">Kontaktai</h1>
        <div class=\"contacts-container mb-5\">

          <div class=\"contact-text w-100\">
            <p class=\"text-center\">
              <strong>Susisiekite</strong><br>
              Vengalis Art<br>
            </p>
            <hr>

            <div class=\"contacts-container\">
              <div class=\"contacts-item mb-3\">
                <div class=\"contacts-icon-container\">
                  <i class=\"contacts-icon fa fa-envelope\"></i>
                </div>
                vengalisart@gmail.com
              </div>
              <div class=\"contacts-item mb-3\">
                <div class=\"contacts-icon-container\">
                  <i class=\"contacts-icon fa fa-phone\"></i>
                </div>
                +370 690 33238
              </div>

              <div class=\"contacts-item mb-3\">
                <a target=\"_blank\" href=\"https://www.facebook.com/VengalisArt-108545703986501\"><i
                    class=\"social-icon-dark fa fa-facebook-f mr-3\"></i></a>
                <a target=\"_blank\" href=\"https://www.instagram.com/vengalisart/\"><i
                    class=\"social-icon-dark fa fa-instagram\"></i></a>
              </div>
            </div>

          </div>
        </div>

      </div>
    </div>
  </div>
  <div class=\"container-fluid bg-light\">
    <div class=\"row\">
      <div class=\"col p-0\">
        <iframe id=\"map\" src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2248.238574645593!2d21.133052651854282!3d55.70222470326326!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46e4dbf413b89b4d%3A0x1d0e0f6a0ef47a7d!2sPilies%20g.%2014%2C%20Klaip%C4%97da%2091234!5e0!3m2!1slt!2slt!4v1629369404034!5m2!1slt!2slt\" width=\"100%\" height=\"400\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>
      </div>
      
    </div>
  </div>
  </div>
</section>", "C:\\xampp\\htdocs\\vengalisart/themes/hambern-hambern-blank-bootstrap-4/pages/contacts.htm", "");
    }
}
