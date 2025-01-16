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

/* themes/custom/hudayriyat/templates/views/about/views-view-unformatted--about-content-details.html.twig */
class __TwigTemplate_3fd93e84bac50ecf60a506791c549eb4 extends Template
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
        // line 20
        yield "<section class=\"related-content no-border white-bg \">
  <ul class=\"nav nav-tabs nav-fill w-100\" id=\"myTab\" role=\"tablist\">
";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["about_content_title"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["item"]) {
            // line 23
            yield "   ";
            if (($context["key"] == 0)) {
                // line 24
                yield "      <li class=\"nav-item\">
      ";
                // line 25
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["about_content_title"] ?? null)) == 1)) {
                    // line 26
                    yield "        <p class=\"nav-link active\" id=\"first-tab\" data-toggle=\"tab\" href=\"#first\" role=\"tab\" aria-controls=\"first\" aria-selected=\"true\">";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["item"], 26, $this->source), "html", null, true);
                    yield "</p>
      ";
                } else {
                    // line 28
                    yield "        <a class=\"nav-link active\" id=\"first-tab\" data-toggle=\"tab\" href=\"#first\" role=\"tab\" aria-controls=\"first\" aria-selected=\"true\">";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["item"], 28, $this->source), "html", null, true);
                    yield "</a>
      ";
                }
                // line 30
                yield "      </li>
   ";
            }
            // line 32
            yield "   ";
            if (($context["key"] == 1)) {
                // line 33
                yield "      <li class=\"nav-item\">
        <a class=\"nav-link\" id=\"second-tab\" data-toggle=\"tab\" href=\"#second\" role=\"tab\" aria-controls=\"second\" aria-selected=\"false\">";
                // line 34
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["item"], 34, $this->source), "html", null, true);
                yield "</a>
      </li>
   ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        yield " </ul>
</section>
<section class=\"tab-content\" id=\"myTabContent\">
";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["rows"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 42
            $context["description"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed((($__internal_compile_0 = (($__internal_compile_1 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_2 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 42)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 42), "render_tokens", [], "any", false, false, true, 42)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 42)] ?? null) : null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["{{ field_intro_description }}"] ?? null) : null), 42, $this->source)));
            // line 43
            $context["news_listing_no"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed((($__internal_compile_3 = (($__internal_compile_4 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_5 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 43)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 43), "render_tokens", [], "any", false, false, true, 43)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 43)] ?? null) : null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["{{ field_news_listing_no }}"] ?? null) : null), 43, $this->source)));
            // line 44
            $context["news_listing_title"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed((($__internal_compile_6 = (($__internal_compile_7 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_8 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 44)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 44), "render_tokens", [], "any", false, false, true, 44)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 44)] ?? null) : null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["{{ field_news_listing_title }}"] ?? null) : null), 44, $this->source)));
            // line 45
            yield "  ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 45) == 0)) {
                // line 46
                yield "  <div class=\"tab-pane fade show active\" id=\"first\" role=\"tabpanel\" aria-labelledby=\"first-tab\">
      <section class=\"p-section \">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-12\"><p class=\"detailed-txt\">";
                // line 50
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["description"] ?? null), 50, $this->source), "html", null, true);
                yield "</p></div>
          </div>
        </div>
      </section>
      ";
                // line 54
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_9 = (($__internal_compile_10 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_11 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 54)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 54), "render_tokens", [], "any", false, false, true, 54)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 54)] ?? null) : null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["{{ field_about_intro_section }}"] ?? null) : null), 54, $this->source), "html", null, true);
                yield "
      ";
                // line 55
                $context["view"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), views_get_view_result("about_content", "about_content"));
                // line 56
                yield "      ";
                if (($context["view"] ?? null)) {
                    // line 57
                    yield "      <section class=\"p-section\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <div class=\"listing-number\">";
                    // line 61
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["news_listing_no"] ?? null), 61, $this->source), "html", null, true);
                    yield "</div>
                        <h2>";
                    // line 62
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["news_listing_title"] ?? null), 62, $this->source), "html", null, true);
                    yield "</h2>
                    </div>
                </div>
                <div class=\"row\">
                  <div class=\"col-12\">
                    <div class=\"swiper-listing\">
                      <!-- Swiper -->
                      <div class=\"swiper-container\">
                        <div class=\"swiper-wrapper\">
                          
                          ";
                    // line 72
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, views_embed_view("about_content"), "html", null, true);
                    yield "

                        </div>
                        <div class=\"swiper-arrows\">
                          <div class=\"swiper-button-prev\"></div>
                          <div class=\"swiper-button-next\"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
               </div>
            </section>
            ";
                }
                // line 86
                yield "      ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_12 = (($__internal_compile_13 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_14 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 86)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 86), "render_tokens", [], "any", false, false, true, 86)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 86)] ?? null) : null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["{{ field_contact_information }}"] ?? null) : null), 86, $this->source), "html", null, true);
                yield "
  </div>
  ";
            }
            // line 89
            yield " ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 89) == 1)) {
                // line 90
                yield "  <div class=\"tab-pane fade\" id=\"second\" role=\"tabpanel\" aria-labelledby=\"second-tab\">
    <section class=\"p-section \">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-12\"><p class=\"detailed-txt\">";
                // line 94
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["description"] ?? null), 94, $this->source), "html", null, true);
                yield "</p></div>
          </div>
        </div>
      </section>
    ";
                // line 98
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_15 = (($__internal_compile_16 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_17 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 98)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 98), "render_tokens", [], "any", false, false, true, 98)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 98)] ?? null) : null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["{{ field_about_intro_section }}"] ?? null) : null), 98, $this->source), "html", null, true);
                yield "
      <section class=\"p-section\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <div class=\"listing-number\">";
                // line 103
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["news_listing_no"] ?? null), 103, $this->source), "html", null, true);
                yield "</div>
                        <h2>";
                // line 104
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["news_listing_title"] ?? null), 104, $this->source), "html", null, true);
                yield "</h2>
                    </div>
                </div>
                <div class=\"row\">
                  <div class=\"col-12\">
                    <div class=\"swiper-listing\">
                      <!-- Swiper -->
                      <div class=\"swiper-container\">
                        <div class=\"swiper-wrapper\">

                          ";
                // line 114
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, views_embed_view("about_content"), "html", null, true);
                yield "

                        </div>
                        <div class=\"swiper-arrows\">
                          <div class=\"swiper-button-prev\"></div>
                          <div class=\"swiper-button-next\"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
               </div>
            </section>
    ";
                // line 127
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_18 = (($__internal_compile_19 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_20 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 127)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 127), "render_tokens", [], "any", false, false, true, 127)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 127)] ?? null) : null)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["{{ field_contact_information }}"] ?? null) : null), 127, $this->source), "html", null, true);
                yield "
  </div>
  ";
            }
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 131
        yield "</section>";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["about_content_title", "rows", "loop"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/custom/hudayriyat/templates/views/about/views-view-unformatted--about-content-details.html.twig";
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
        return array (  263 => 131,  245 => 127,  229 => 114,  216 => 104,  212 => 103,  204 => 98,  197 => 94,  191 => 90,  188 => 89,  181 => 86,  164 => 72,  151 => 62,  147 => 61,  141 => 57,  138 => 56,  136 => 55,  132 => 54,  125 => 50,  119 => 46,  116 => 45,  114 => 44,  112 => 43,  110 => 42,  93 => 41,  88 => 38,  78 => 34,  75 => 33,  72 => 32,  68 => 30,  62 => 28,  56 => 26,  54 => 25,  51 => 24,  48 => 23,  44 => 22,  40 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/hudayriyat/templates/views/about/views-view-unformatted--about-content-details.html.twig", "C:\\xampp\\htdocs\\modorn\\web\\themes\\custom\\hudayriyat\\templates\\views\\about\\views-view-unformatted--about-content-details.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 22, "if" => 23, "set" => 42);
        static $filters = array("length" => 25, "escape" => 26, "trim" => 42, "striptags" => 42);
        static $functions = array("drupal_view_result" => 55, "drupal_view" => 72);

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if', 'set'],
                ['length', 'escape', 'trim', 'striptags'],
                ['drupal_view_result', 'drupal_view'],
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
