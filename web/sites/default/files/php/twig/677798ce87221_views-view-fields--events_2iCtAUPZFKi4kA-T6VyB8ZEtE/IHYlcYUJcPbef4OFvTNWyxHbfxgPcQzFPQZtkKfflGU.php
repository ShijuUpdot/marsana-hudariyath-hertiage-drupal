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

/* themes/custom/hudayriyat/templates/views/events/views-view-fields--events-intro.html.twig */
class __TwigTemplate_47ee4eaf8bdcb4edfa228a7a96ea0512 extends Template
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
        if ((($context["langcode"] ?? null) == "en")) {
            // line 34
            yield "  ";
            $context["float"] = "float-left";
            // line 35
            yield "  ";
            $context["margin"] = "ml-30";
            // line 36
            yield "    ";
            $context["text_align"] = "";
        } elseif ((        // line 37
($context["langcode"] ?? null) == "ar")) {
            // line 38
            yield "  ";
            $context["float"] = "float-right";
            // line 39
            yield "  ";
            $context["margin"] = "mr-30";
            // line 40
            yield "  ";
            $context["text_align"] = "text-right";
        }
        // line 42
        yield "<div class=\"row\">
    <div class=\"col-md-6 mb-5\">
      <div>
        <img class=\"";
        // line 45
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["float"] ?? null), 45, $this->source), "html", null, true);
        yield " top-icons\" src=\"/images/static/location.svg\"/>
        <div class=\"b-bordered-box ";
        // line 46
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["margin"] ?? null), 46, $this->source), "html", null, true);
        yield "\">
          <p>Location</p>
          <p class=\"detailed-box-info\">";
        // line 48
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "field_event_place", [], "any", false, false, true, 48), "content", [], "any", false, false, true, 48), 48, $this->source), "html", null, true);
        yield "</p>
        </div>
      </div>
    </div>
    <div class=\"col-md-6 mb-5\">
      <div>
        <img class=\"";
        // line 54
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["float"] ?? null), 54, $this->source), "html", null, true);
        yield " top-icons\" src=\"/images/static/range-date.svg\"/>
        <div class=\"b-bordered-box ";
        // line 55
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["margin"] ?? null), 55, $this->source), "html", null, true);
        yield "\">
          <p>";
        // line 56
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "field_opening_hours_title", [], "any", false, false, true, 56), "content", [], "any", false, false, true, 56), 56, $this->source), "html", null, true);
        yield "</p>
          <p class=\"detailed-box-info\">";
        // line 57
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "field_schedule_headline", [], "any", false, false, true, 57), "content", [], "any", false, false, true, 57), 57, $this->source), "html", null, true);
        yield "</p>
        </div>
      </div>
    </div>
  </div>

  <div class=\"row mb-5 event-content-info\">
    <div class=\"col-md-12\">
      <h2 >";
        // line 65
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "field_hero_image_title", [], "any", false, false, true, 65), "content", [], "any", false, false, true, 65), 65, $this->source), "html", null, true);
        yield "</h2>
      <p class=\"event-detailed-text\">";
        // line 66
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "field_intro_sub_headlines", [], "any", false, false, true, 66), "content", [], "any", false, false, true, 66), 66, $this->source), "html", null, true);
        yield "</p>
    </div>
  </div>

  ";
        // line 70
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "event_images", [], "any", false, false, true, 70)) {
            // line 71
            yield "  <div class=\"row slider-arrow-fix\">
    <div class=\"col-md-12\">
      <p class=\"detailed-txt opacity-text bold ";
            // line 73
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["text_align"] ?? null), 73, $this->source), "html", null, true);
            yield "\">Gallery</p>
        <div class=\"slideshow-container pb-4\">
          ";
            // line 75
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "event_images", [], "any", false, false, true, 75));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 76
                yield "          <div class=\"mySlides \">
            <img src=\"";
                // line 77
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["image"], 77, $this->source), "html", null, true);
                yield "\" style=\"width:100%;max-height:427px;\">
          </div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 80
            yield "          <a class=\"prev\" onclick=\"plusSlides(-1)\">&#10094;</a>
          <a class=\"next\" onclick=\"plusSlides(1)\">&#10095;</a>
        </div>
        <br>
        ";
            // line 89
            yield "    </div>
  </div>
  ";
        }
        // line 92
        yield "
  <div class=\"row content-info-blocks mt-3\">
    <div class=\"col-md-4 mb-3\">
      <div>
        <div class=\"detailed-box ";
        // line 96
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["margin"] ?? null), 96, $this->source), "html", null, true);
        yield "\">
          <p class=\"heading\" >Time</p>
          <p class=\"detailed-txt opacity-text bold\" >";
        // line 98
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "map_time", [], "any", false, false, true, 98), 98, $this->source), "html", null, true);
        yield "</p>
        </div>
      </div>
    </div>
    <div class=\"col-md-4 mb-3\">
      <div>
        <div class=\"detailed-box ";
        // line 104
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["margin"] ?? null), 104, $this->source), "html", null, true);
        yield "\">
          <p class=\"heading\">Location</p>
          <p class=\"detailed-txt opacity-text bold\">";
        // line 106
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "map_place", [], "any", false, false, true, 106), 106, $this->source), "html", null, true);
        yield "</p>
        </div>
      </div>
    </div>
    <div class=\"col-md-4 mb-3\">
      <div>
        <div class=\"detailed-box ";
        // line 112
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["margin"] ?? null), 112, $this->source), "html", null, true);
        yield "\">
          <p class=\"heading\">Learn More</p>
          <p class=\"detailed-txt opacity-text bold\"><a style=\"color:rgba(36, 38, 85, 0.5);\" target=\"_blank\" href=\"";
        // line 114
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "learn_more", [], "any", false, false, true, 114), 114, $this->source), "html", null, true);
        yield "\">";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "learn_more_text", [], "any", false, false, true, 114), 114, $this->source), "html", null, true);
        yield "</a></p>
        </div>
      </div>
    </div>
  </div>

  ";
        // line 120
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "iframe_url", [], "any", false, false, true, 120)) {
            // line 121
            yield "    <div class=\"row\">
      <div class=\"col-md-12\">
        <div class=\"map-img\">
          <iframe src=\"";
            // line 124
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "iframe_url", [], "any", false, false, true, 124), 124, $this->source), "html", null, true);
            yield "\" width=\"100%\" height=\"400\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>            
        </div>
      </div>
    </div>
  ";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["langcode", "fields"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/custom/hudayriyat/templates/views/events/views-view-fields--events-intro.html.twig";
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
        return array (  218 => 124,  213 => 121,  211 => 120,  200 => 114,  195 => 112,  186 => 106,  181 => 104,  172 => 98,  167 => 96,  161 => 92,  156 => 89,  150 => 80,  141 => 77,  138 => 76,  134 => 75,  129 => 73,  125 => 71,  123 => 70,  116 => 66,  112 => 65,  101 => 57,  97 => 56,  93 => 55,  89 => 54,  80 => 48,  75 => 46,  71 => 45,  66 => 42,  62 => 40,  59 => 39,  56 => 38,  54 => 37,  51 => 36,  48 => 35,  45 => 34,  43 => 33,  40 => 32,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/hudayriyat/templates/views/events/views-view-fields--events-intro.html.twig", "/var/www/html/Hudayriyat/project/web/themes/custom/hudayriyat/templates/views/events/views-view-fields--events-intro.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 33, "set" => 34, "for" => 75);
        static $filters = array("escape" => 45);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'for'],
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
