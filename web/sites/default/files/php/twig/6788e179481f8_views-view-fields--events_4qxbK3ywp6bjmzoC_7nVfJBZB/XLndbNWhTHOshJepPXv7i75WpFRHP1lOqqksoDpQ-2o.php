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

/* themes/custom/hudayriyat/templates/views/events/views-view-fields--events-listing.html.twig */
class __TwigTemplate_840839f860a4772093ca6610e49583c4 extends Template
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
        $this->sandbox = $this->env->getExtension(SandboxExtension::class);
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 32
        yield "
";
        // line 33
        $context["grey"] = "";
        // line 34
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "outdated", [], "any", false, false, true, 34) == true)) {
            // line 35
            yield "  ";
            $context["grey"] = "event-outdated";
        }
        // line 37
        yield "
<div class=\"p-2\">
  <div class=\"event-box  mb-3 shadow ";
        // line 39
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["grey"] ?? null), 39, $this->source), "html", null, true);
        yield "\">
    <div id=\"box-header\" class=\"p-2 d-flex justify-content-end\">
      <span class=\"float-right\">";
        // line 41
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "field_event_header_text", [], "any", false, false, true, 41), "content", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
        yield "</span>
    </div>
    <div id=\"box-banner\">
      <img src=\"";
        // line 44
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "field_hero_image", [], "any", false, false, true, 44), "content", [], "any", false, false, true, 44), 44, $this->source), "html", null, true);
        yield "\" class=\"img-fluid\"/>
    </div>
    <div id=\"box-content\" class=\"\">
        <div class=\"py-4\">
          ";
        // line 51
        yield "            <a href=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "node_alias", [], "any", false, false, true, 51), 51, $this->source), "html", null, true);
        yield "\"><h6 class=\"mb-2\">";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "field_hero_image_title", [], "any", false, false, true, 51), "content", [], "any", false, false, true, 51), 51, $this->source), "html", null, true);
        yield "</h6></a>
          ";
        // line 53
        yield "          <p>";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "field_intro_sub_headlines", [], "any", false, false, true, 53), "content", [], "any", false, false, true, 53), 53, $this->source), "html", null, true);
        yield "</p>
        </div>
    </div>
    <div id=\"box-info\" class=\"pb-4\">
      <div class=\"row px-4\">
        <div class=\"col-md-8 col-8 time-loc\">
          <img src=\"/images/static/location.svg\"/> <span class=\"ml-2 pr-2 text-left\">";
        // line 59
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "field_event_place", [], "any", false, false, true, 59), "content", [], "any", false, false, true, 59), 59, $this->source), "html", null, true);
        yield "</span>
        </div>
        <div class=\"col-md-4 col-4 time-loc\">
          <img src=\"/images/static/time.svg\" /> <span class=\"ml-2\">";
        // line 62
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "start_time", [], "any", false, false, true, 62), 62, $this->source), "html", null, true);
        yield "</span>
        </div>
        ";
        // line 67
        yield "          <a href=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "node_alias", [], "any", false, false, true, 67), 67, $this->source), "html", null, true);
        yield "\">Discover Event</a>
        ";
        // line 69
        yield "      </div>
    </div>
  </div>
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["fields"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/custom/hudayriyat/templates/views/events/views-view-fields--events-listing.html.twig";
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
        return array (  106 => 69,  101 => 67,  96 => 62,  90 => 59,  80 => 53,  73 => 51,  66 => 44,  60 => 41,  55 => 39,  51 => 37,  47 => 35,  45 => 34,  43 => 33,  40 => 32,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/hudayriyat/templates/views/events/views-view-fields--events-listing.html.twig", "C:\\xampp\\htdocs\\modorn\\web\\themes\\custom\\hudayriyat\\templates\\views\\events\\views-view-fields--events-listing.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 33, "if" => 34);
        static $filters = array("escape" => 39);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape'],
                [],
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
