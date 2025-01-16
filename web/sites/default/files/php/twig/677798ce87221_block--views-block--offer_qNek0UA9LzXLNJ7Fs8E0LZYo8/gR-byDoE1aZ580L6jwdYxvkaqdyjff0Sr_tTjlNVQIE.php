<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/custom/hudayriyat/templates/block/offers-listing/block--views-block--offers-listing-block-1.html.twig */
class __TwigTemplate_854a6290cbf25da1e307f886afae4795 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension(SandboxExtension::class);
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        if ((($context["langcode"] ?? null) == "en")) {
            // line 31
            yield "    ";
            $context["listingTitle"] = Drupal\twig_tweak\TwigTweakExtension::drupalConfig("hudayriyat_custom_configs.settings", "custom_configs_offers_listing_title_en");
            // line 32
            yield "  ";
        } else {
            // line 33
            yield "    ";
            $context["listingTitle"] = Drupal\twig_tweak\TwigTweakExtension::drupalConfig("hudayriyat_custom_configs.settings", "custom_configs_offers_listing_title_ar");
            // line 34
            yield "  ";
        }
        // line 35
        yield "<div class=\"inside-wrapper offers-page\">
  <div class=\"inside \">
    <div class=\"search offers\">
      <div class=\"dark-overlay d-none\">
          <img src=\"/images/static/loader-new.gif\" />
      </div>
      <div class=\"p-section related-content related-interaction white-bg\">
        <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-6\">
            <h2>";
        // line 45
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["listingTitle"] ?? null), 45, $this->source), "html", null, true);
        yield "</h2>
          </div>
        </div>
        ";
        // line 48
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 51
        yield "         </div>
      </div>
    </div>
  </div>
</div>";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["langcode", "content"]);        return; yield '';
    }

    // line 48
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 49
        yield "          ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 49, $this->source), "html", null, true);
        yield "
        ";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/custom/hudayriyat/templates/block/offers-listing/block--views-block--offers-listing-block-1.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  89 => 49,  85 => 48,  75 => 51,  73 => 48,  67 => 45,  55 => 35,  52 => 34,  49 => 33,  46 => 32,  43 => 31,  41 => 30,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/hudayriyat/templates/block/offers-listing/block--views-block--offers-listing-block-1.html.twig", "/var/www/html/Hudayriyat/project/web/themes/custom/hudayriyat/templates/block/offers-listing/block--views-block--offers-listing-block-1.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 30, "set" => 31, "block" => 48);
        static $filters = array("escape" => 45);
        static $functions = array("drupal_config" => 31);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'block'],
                ['escape'],
                ['drupal_config'],
                $this->source
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
