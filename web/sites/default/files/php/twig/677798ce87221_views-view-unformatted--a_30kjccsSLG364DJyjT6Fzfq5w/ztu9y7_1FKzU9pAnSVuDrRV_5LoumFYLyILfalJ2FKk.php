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

/* themes/custom/hudayriyat/templates/views/amenities/views-view-unformatted--amenities-listing.html.twig */
class __TwigTemplate_d16729259e5af98b9507c2e352ab4f9c extends Template
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
        yield "<div class=\"row\">
 <div class=\"col\">
    <div class=\"tabs-listing w-100\">
        <ul class=\"nav nav-pills mb-5 w-100 nav-fill\" id=\"pills-tab\" role=\"tablist\">
            ";
        // line 24
        $context["count"] = 1;
        // line 25
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["amenitiesType"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["item"]) {
            // line 26
            yield "            ";
            $context["isactive"] = "";
            // line 27
            yield "            ";
            if (($context["key"] == 0)) {
                // line 28
                yield "                ";
                $context["isactive"] = "active";
                // line 29
                yield "            ";
            }
            // line 30
            yield "            <li class=\"nav-item\">
                <a class=\"nav-link ";
            // line 31
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["isactive"] ?? null), 31, $this->source), "html", null, true);
            yield "\" id=\"pills-";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["count"] ?? null), 31, $this->source), "html", null, true);
            yield "-tab\" data-toggle=\"pill\" href=\"#pills-";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["count"] ?? null), 31, $this->source), "html", null, true);
            yield "\" role=\"tab\" aria-controls=\"pills-";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["key"] + 1), "html", null, true);
            yield "\" aria-selected=\"false\"><h3>";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("By"));
            yield " ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t($this->sandbox->ensureToStringAllowed($context["item"], 31, $this->source)));
            yield "</h3></a>
            </li>
            ";
            // line 33
            $context["count"] = (($context["count"] ?? null) + 1);
            // line 34
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        yield "        </ul>
        ";
        // line 36
        $context["cnt"] = 1;
        // line 37
        yield "            <div class=\"tab-content\" id=\"pills-tabContent\">                
                ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["aminities_data"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["aminities_items"]) {
            // line 39
            yield "                ";
            $context["active"] = "";
            // line 40
            yield "                ";
            if ((($context["cnt"] ?? null) == 1)) {
                // line 41
                yield "                ";
                $context["active"] = "show active";
                // line 42
                yield "                ";
            }
            // line 43
            yield "                <div class=\"tab-pane fade ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["active"] ?? null), 43, $this->source), "html", null, true);
            yield "\" id=\"pills-";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["cnt"] ?? null), 43, $this->source), "html", null, true);
            yield "\" role=\"tabpanel\" aria-labelledby=\"pills-";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["cnt"] ?? null), 43, $this->source), "html", null, true);
            yield "-tab\">
                <div class=\"row\">
                    ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["aminities_items"]);
            foreach ($context['_seq'] as $context["ikey"] => $context["frow"]) {
                // line 46
                yield "                        ";
                $context["fkey"] = CoreExtension::getAttribute($this->env, $this->source, $context["frow"], 0, [], "any", false, false, true, 46);
                // line 47
                yield "                        ";
                $context["row"] = CoreExtension::getAttribute($this->env, $this->source, $context["frow"], 1, [], "any", false, false, true, 47);
                // line 48
                yield "
                        ";
                // line 49
                $context["image"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed((($__internal_compile_0 = (($__internal_compile_1 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_2 = CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "content", [], "any", false, false, true, 49)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 49), "render_tokens", [], "any", false, false, true, 49)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[($context["fkey"] ?? null)] ?? null) : null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["{{ field_hero_image }}"] ?? null) : null), 49, $this->source)));
                // line 50
                yield "                        ";
                $context["title"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed((($__internal_compile_3 = (($__internal_compile_4 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_5 = CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "content", [], "any", false, false, true, 50)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 50), "render_tokens", [], "any", false, false, true, 50)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[($context["fkey"] ?? null)] ?? null) : null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["{{ field_hero_image_title }}"] ?? null) : null), 50, $this->source)));
                // line 51
                yield "                        ";
                $context["amenityType"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed((($__internal_compile_6 = (($__internal_compile_7 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_8 = CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "content", [], "any", false, false, true, 51)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 51), "render_tokens", [], "any", false, false, true, 51)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[($context["fkey"] ?? null)] ?? null) : null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["{{ field_amenity_type }}"] ?? null) : null), 51, $this->source)));
                // line 52
                yield "                        ";
                $context["headline"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed((($__internal_compile_9 = (($__internal_compile_10 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_11 = CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "content", [], "any", false, false, true, 52)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 52), "render_tokens", [], "any", false, false, true, 52)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10[($context["fkey"] ?? null)] ?? null) : null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["{{ field_headline }}"] ?? null) : null), 52, $this->source)));
                // line 53
                yield "                        ";
                $context["link"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed((($__internal_compile_12 = (($__internal_compile_13 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_14 = CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "content", [], "any", false, false, true, 53)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 53), "render_tokens", [], "any", false, false, true, 53)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13[($context["fkey"] ?? null)] ?? null) : null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["{{ view_node }}"] ?? null) : null), 53, $this->source)));
                // line 54
                yield "                        ";
                $context["icon"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed((($__internal_compile_15 = (($__internal_compile_16 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_17 = CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "content", [], "any", false, false, true, 54)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 54), "render_tokens", [], "any", false, false, true, 54)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16[($context["fkey"] ?? null)] ?? null) : null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["{{ field_amenity_icon }}"] ?? null) : null), 54, $this->source)));
                // line 55
                yield "                        ";
                $context["icon_color"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed((($__internal_compile_18 = (($__internal_compile_19 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_20 = CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "content", [], "any", false, false, true, 55)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 55), "render_tokens", [], "any", false, false, true, 55)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19[($context["fkey"] ?? null)] ?? null) : null)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["{{ field_amenity_icon_color }}"] ?? null) : null), 55, $this->source)));
                // line 56
                yield "\t\t\t\t\t\t";
                if ( !($context["icon_color"] ?? null)) {
                    yield " ";
                    $context["icon_color"] = "red-bg";
                    yield " ";
                }
                // line 57
                yield "
                            <div class=\"col-md-6 col-lg-4 mb-5\">
                                <div class=\"card-basic\">
                                    <div class=\"card-basic-header\">
                                        <div class=\"card-basic-image\">
\t\t\t\t\t\t\t\t\t\t";
                // line 62
                if (($context["image"] ?? null)) {
                    // line 63
                    yield "                                            <img class=\"card-img-top\" src=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["image"] ?? null), 63, $this->source), "html", null, true);
                    yield "\" alt=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 63, $this->source));
                    yield "\">
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 65
                yield "                                        </div>
                                        ";
                // line 66
                if (((($context["amenityType"] ?? null) == "Activities") || (($context["amenityType"] ?? null) == "النشاطات"))) {
                    // line 67
                    yield "                                        <div class=\"card-basic-wrapper ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["icon_color"] ?? null), 67, $this->source), "html", null, true);
                    yield "\">
                                            <img class=\"card-tag-img\" src=\"";
                    // line 68
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["icon"] ?? null), 68, $this->source), "html", null, true);
                    yield "\" alt=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 68, $this->source));
                    yield "\">
                                        </div>
                                        ";
                }
                // line 71
                yield "                                    </div>
                                    <div class=\"card-basic-information\">
                                        <a href=\"";
                // line 73
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["link"] ?? null), 73, $this->source), "html", null, true);
                yield "\"><h3 class=\"card-title\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 73, $this->source));
                yield "</h3></a>
                                        <div class=\"detailed-txt\">";
                // line 74
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["headline"] ?? null), 74, $this->source));
                yield "</div>
                                    </div>
                                </div>
                            </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['ikey'], $context['frow'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            yield "
                ";
            // line 80
            $context["cnt"] = (($context["cnt"] ?? null) + 1);
            // line 81
            yield "                </div>
                </div>
               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['aminities_items'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        yield "            </div>
            </div>
              </div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["amenitiesType", "aminities_data"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/custom/hudayriyat/templates/views/amenities/views-view-unformatted--amenities-listing.html.twig";
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
        return array (  234 => 84,  226 => 81,  224 => 80,  221 => 79,  210 => 74,  204 => 73,  200 => 71,  192 => 68,  187 => 67,  185 => 66,  182 => 65,  174 => 63,  172 => 62,  165 => 57,  158 => 56,  155 => 55,  152 => 54,  149 => 53,  146 => 52,  143 => 51,  140 => 50,  138 => 49,  135 => 48,  132 => 47,  129 => 46,  125 => 45,  115 => 43,  112 => 42,  109 => 41,  106 => 40,  103 => 39,  99 => 38,  96 => 37,  94 => 36,  91 => 35,  85 => 34,  83 => 33,  68 => 31,  65 => 30,  62 => 29,  59 => 28,  56 => 27,  53 => 26,  48 => 25,  46 => 24,  40 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/hudayriyat/templates/views/amenities/views-view-unformatted--amenities-listing.html.twig", "/var/www/html/Hudayriyat/project/web/themes/custom/hudayriyat/templates/views/amenities/views-view-unformatted--amenities-listing.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 24, "for" => 25, "if" => 27);
        static $filters = array("escape" => 31, "t" => 31, "trim" => 49, "striptags" => 49, "raw" => 63);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if'],
                ['escape', 't', 'trim', 'striptags', 'raw'],
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
