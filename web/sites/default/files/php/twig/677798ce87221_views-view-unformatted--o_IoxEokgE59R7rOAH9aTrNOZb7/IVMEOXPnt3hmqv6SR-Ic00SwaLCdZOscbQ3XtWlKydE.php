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

/* themes/custom/hudayriyat/templates/views/amenities/views-view-unformatted--other-amenity-items.html.twig */
class __TwigTemplate_3717b0a1dda13632f5d0098a330a305a extends Template
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
        if (((($context["type"] ?? null) == "Activities") || (($context["type"] ?? null) == "النشاطات"))) {
            // line 21
            yield "  ";
            if ((($context["langcode"] ?? null) == "en")) {
                // line 22
                yield "    ";
                $context["title"] = Drupal\twig_tweak\TwigTweakExtension::drupalConfig("hudayriyat_custom_configs.settings", "custom_configs_other_sports_en");
                // line 23
                yield "  ";
            } else {
                // line 24
                yield "    ";
                $context["title"] = Drupal\twig_tweak\TwigTweakExtension::drupalConfig("hudayriyat_custom_configs.settings", "custom_configs_other_sports_ar");
                // line 25
                yield "  ";
            }
        } elseif (((        // line 26
($context["type"] ?? null) == "Facilities") || (($context["type"] ?? null) == "المنشآت"))) {
            // line 27
            yield "  ";
            if ((($context["langcode"] ?? null) == "en")) {
                // line 28
                yield "    ";
                $context["title"] = Drupal\twig_tweak\TwigTweakExtension::drupalConfig("hudayriyat_custom_configs.settings", "custom_configs_other_facilities_en");
                // line 29
                yield "  ";
            } else {
                // line 30
                yield "    ";
                $context["title"] = Drupal\twig_tweak\TwigTweakExtension::drupalConfig("hudayriyat_custom_configs.settings", "custom_configs_other_facilities_ar");
                // line 31
                yield "  ";
            }
            // line 32
            yield "  </div> ";
        }
        // line 34
        yield "<section class=\"p-section related-content no-border\">
<div class=\"container square\">
    <div class=\"row\">
        <div class=\"col-md-6\">
        <h2>";
        // line 38
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 38, $this->source), "html", null, true);
        yield "</h2>
        </div>
    </div>
    <div class=\"row\">
";
        // line 42
        $context["cols"] = (((Twig\Extension\CoreExtension::length($this->env->getCharset(), $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 42, $this->source)) < 3)) ? ("col-lg-6") : ("col-lg-4"));
        // line 43
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
            // line 44
            yield "    ";
            $context["title"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed((($__internal_compile_0 = (($__internal_compile_1 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_2 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 44)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 44), "render_tokens", [], "any", false, false, true, 44)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 44)] ?? null) : null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["{{ field_hero_image_title }}"] ?? null) : null), 44, $this->source)));
            // line 45
            yield "    ";
            $context["image"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed((($__internal_compile_3 = (($__internal_compile_4 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_5 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 45)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 45), "render_tokens", [], "any", false, false, true, 45)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 45)] ?? null) : null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["{{ field_hero_image }}"] ?? null) : null), 45, $this->source)));
            // line 46
            yield "    ";
            $context["link"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed((($__internal_compile_6 = (($__internal_compile_7 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_8 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 46)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 46), "render_tokens", [], "any", false, false, true, 46)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 46)] ?? null) : null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["{{ view_node }}"] ?? null) : null), 46, $this->source)));
            // line 47
            yield "    ";
            $context["icon"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed((($__internal_compile_9 = (($__internal_compile_10 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_11 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 47)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 47), "render_tokens", [], "any", false, false, true, 47)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 47)] ?? null) : null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["{{ field_amenity_icon }}"] ?? null) : null), 47, $this->source)));
            // line 48
            yield "\t";
            $context["icon_color"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed((($__internal_compile_12 = (($__internal_compile_13 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_14 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 48)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 48), "render_tokens", [], "any", false, false, true, 48)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 48)] ?? null) : null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["{{ field_amenity_icon_color }}"] ?? null) : null), 48, $this->source)));
            // line 49
            yield "    ";
            $context["type"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed((($__internal_compile_15 = (($__internal_compile_16 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_17 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 49)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 49), "render_tokens", [], "any", false, false, true, 49)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 49)] ?? null) : null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["{{ field_amenity_type }}"] ?? null) : null), 49, $this->source)));
            // line 50
            yield "\t";
            if ( !($context["icon_color"] ?? null)) {
                yield " ";
                $context["icon_color"] = "red-bg";
                yield " ";
            }
            // line 51
            yield "    ";
            if (((($context["type"] ?? null) == "Activities") || (($context["type"] ?? null) == "النشاطات"))) {
                // line 52
                yield "        <div class=\"col-md-6 ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["cols"] ?? null), 52, $this->source), "html", null, true);
                yield "\">
            <div class=\"card-wrapper\">
                <div class=\"card sports\">
                <div class=\"card-img-wrapper\">
                    <a href=\"";
                // line 56
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["link"] ?? null), 56, $this->source), "html", null, true);
                yield "\"></a>
                    <img class=\"card-img-top\" src=\"";
                // line 57
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["image"] ?? null), 57, $this->source), "html", null, true);
                yield "\" alt=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 57, $this->source), "html", null, true);
                yield "\">

                </div>
                <div class=\"card-tag-wrapper ";
                // line 60
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["icon_color"] ?? null), 60, $this->source), "html", null, true);
                yield "\">
                    <img class=\"card-tag-img\" src=\"";
                // line 61
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["icon"] ?? null), 61, $this->source), "html", null, true);
                yield "\" alt=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 61, $this->source), "html", null, true);
                yield "\">
                </div>
                <div class=\"card-body\">
                    <a href=\"";
                // line 64
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["link"] ?? null), 64, $this->source), "html", null, true);
                yield "\">
                    <h3 class=\"card-title\">";
                // line 65
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 65, $this->source), "html", null, true);
                yield "</h3>
                    </a>
                </div>
                </div>
            </div>
        </div>
    ";
            } else {
                // line 72
                yield "        <div class=\"col-md-6 ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["cols"] ?? null), 72, $this->source), "html", null, true);
                yield "\">
            <div class=\"card-wrapper\">
                <div class=\"card sports percent-40\">
                <div class=\"card-img-wrapper\">
                    <a href=\"";
                // line 76
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["link"] ?? null), 76, $this->source), "html", null, true);
                yield "\"></a>
                    <img class=\"card-img-top\" src=\"";
                // line 77
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["image"] ?? null), 77, $this->source), "html", null, true);
                yield "\" alt=\"Card image cap\">
                </div>
                <div class=\"card-body\">
                    <a href=\"";
                // line 80
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["link"] ?? null), 80, $this->source), "html", null, true);
                yield "\">
                    <h3 class=\"card-title\">";
                // line 81
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 81, $this->source), "html", null, true);
                yield "</h3>
                    </a>
                </div>
                </div>
            </div>
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
        // line 89
        yield "    </div>
    </div>
    </section>
    </div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["type", "langcode", "rows", "loop"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/custom/hudayriyat/templates/views/amenities/views-view-unformatted--other-amenity-items.html.twig";
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
        return array (  227 => 89,  205 => 81,  201 => 80,  195 => 77,  191 => 76,  183 => 72,  173 => 65,  169 => 64,  161 => 61,  157 => 60,  149 => 57,  145 => 56,  137 => 52,  134 => 51,  127 => 50,  124 => 49,  121 => 48,  118 => 47,  115 => 46,  112 => 45,  109 => 44,  92 => 43,  90 => 42,  83 => 38,  77 => 34,  74 => 32,  71 => 31,  68 => 30,  65 => 29,  62 => 28,  59 => 27,  57 => 26,  54 => 25,  51 => 24,  48 => 23,  45 => 22,  42 => 21,  40 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/hudayriyat/templates/views/amenities/views-view-unformatted--other-amenity-items.html.twig", "/var/www/html/Hudayriyat/project/web/themes/custom/hudayriyat/templates/views/amenities/views-view-unformatted--other-amenity-items.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 20, "set" => 22, "for" => 43);
        static $filters = array("escape" => 38, "length" => 42, "trim" => 44, "striptags" => 44);
        static $functions = array("drupal_config" => 22);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'for'],
                ['escape', 'length', 'trim', 'striptags'],
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
