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

/* themes/custom/hudayriyat/templates/block/events/block--views-block--promotions-listing-promotion-listing-block.html.twig */
class __TwigTemplate_85e4a93c173b2e7516f779f931e765c8 extends Template
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
        yield "<div class=\"inside-wrapper\">
  <div class=\"inside\">
    ";
        // line 32
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["langcode", "content"]);        return; yield '';
    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        yield "
  ";
        // line 34
        if ((($context["langcode"] ?? null) == "en")) {
            // line 35
            yield "    ";
            $context["listingTitle"] = Drupal\twig_tweak\TwigTweakExtension::drupalConfig("hudayriyat_custom_configs.settings", "custom_configs_promotions_listing_title_en");
            // line 36
            yield "  ";
        } else {
            // line 37
            yield "    ";
            $context["listingTitle"] = Drupal\twig_tweak\TwigTweakExtension::drupalConfig("hudayriyat_custom_configs.settings", "custom_configs_promotions_listing_title_ar");
            // line 38
            yield "  ";
        }
        // line 39
        yield "
  <section class=\"p-section white-bg\" data-scroll-speed=\"4\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-6\">
          <div class=\"listing-number\">01</div>
          <h2>";
        // line 45
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["listingTitle"] ?? null), 45, $this->source), "html", null, true);
        yield "</h2>
        </div>
      </div>

      ";
        // line 49
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 49, $this->source), "html", null, true);
        yield "

    </div>
  </section>

    ";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/custom/hudayriyat/templates/block/events/block--views-block--promotions-listing-promotion-listing-block.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  86 => 49,  79 => 45,  71 => 39,  68 => 38,  65 => 37,  62 => 36,  59 => 35,  57 => 34,  54 => 33,  45 => 32,  41 => 30,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/hudayriyat/templates/block/events/block--views-block--promotions-listing-promotion-listing-block.html.twig", "C:\\xampp\\htdocs\\modorn\\web\\themes\\custom\\hudayriyat\\templates\\block\\events\\block--views-block--promotions-listing-promotion-listing-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 32, "if" => 34, "set" => 35);
        static $filters = array("escape" => 45);
        static $functions = array("drupal_config" => 35);

        try {
            $this->sandbox->checkSecurity(
                ['block', 'if', 'set'],
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
