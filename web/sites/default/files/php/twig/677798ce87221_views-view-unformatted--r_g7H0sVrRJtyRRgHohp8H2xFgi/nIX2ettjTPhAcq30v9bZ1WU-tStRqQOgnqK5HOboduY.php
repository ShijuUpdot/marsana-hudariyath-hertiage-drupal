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

/* themes/custom/hudayriyat/templates/views/eat/views-view-unformatted--restaurant-listing.html.twig */
class __TwigTemplate_f510dd6f7b724eb0a30d7561580ec7f8 extends Template
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
        yield "<div class=\"container inside-wrapper\">
<div class=\"row mb-4\">
  <div class=\"col\">
    <div class=\"tabs-listing\">
      <ul class=\"nav nav-pill mb-5 w-100 nav-fill\" id=\"pill-tab\" role=\"tablist\">
        ";
        // line 25
        $context["j"] = 1;
        // line 26
        yield "        <li class=\"nav-item\">
          <a class=\"nav-link active\" id=\"pill-1-tab\" data-toggle=\"pill\" href=\"#pill-1\" role=\"tab\" aria-controls=\"pill-1\" aria-selected=\"true\"><h3>";
        // line 27
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("All"));
        yield "</h3></a>
        </li>
        ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["assetsTyp"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["item"]) {
            // line 30
            yield "            <li class=\"nav-item\">
              <a class=\"nav-link\" id=\"pill-";
            // line 31
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($context["j"] ?? null) + 1), "html", null, true);
            yield "-tab\" data-toggle=\"pill\" href=\"#pill-";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($context["j"] ?? null) + 1), "html", null, true);
            yield "\" role=\"tab\" aria-controls=\"pill-";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($context["j"] ?? null) + 1), "html", null, true);
            yield "\" aria-selected=\"true\"><h3>";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["item"], 31, $this->source), "html", null, true);
            yield "</h3></a>
            </li>
          ";
            // line 33
            $context["j"] = (($context["j"] ?? null) + 1);
            // line 34
            yield "       ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        yield "      </ul>
      ";
        // line 36
        $context["cnt"] = 1;
        // line 37
        yield "        <div class=\"tab-content\" id=\"pill-tabContent\">
            ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["assets_data"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["assets_items"]) {
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
            yield "                <div class=\"tab-pane fade show ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["active"] ?? null), 43, $this->source), "html", null, true);
            yield "\" id=\"pill-";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["cnt"] ?? null), 43, $this->source), "html", null, true);
            yield "\" role=\"tabpanel\" aria-labelledby=\"pill-";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["cnt"] ?? null), 43, $this->source), "html", null, true);
            yield "-tab\">
                  <div class=\"row\">
                      ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["assets_items"]);
            foreach ($context['_seq'] as $context["ikey"] => $context["frow"]) {
                // line 46
                yield "                        ";
                $context["fkey"] = CoreExtension::getAttribute($this->env, $this->source, $context["frow"], 0, [], "any", false, false, true, 46);
                // line 47
                yield "                        ";
                $context["row"] = CoreExtension::getAttribute($this->env, $this->source, $context["frow"], 1, [], "any", false, false, true, 47);
                // line 48
                yield "                        ";
                $context["logo"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed((($__internal_compile_0 = (($__internal_compile_1 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_2 = CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "content", [], "any", false, false, true, 48)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 48), "render_tokens", [], "any", false, false, true, 48)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[($context["fkey"] ?? null)] ?? null) : null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["{{ field_amenity_icon }}"] ?? null) : null), 48, $this->source)));
                // line 49
                yield "                        ";
                $context["title"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed((($__internal_compile_3 = (($__internal_compile_4 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_5 = CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "content", [], "any", false, false, true, 49)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 49), "render_tokens", [], "any", false, false, true, 49)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[($context["fkey"] ?? null)] ?? null) : null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["{{ field_hero_image_title }}"] ?? null) : null), 49, $this->source)));
                // line 50
                yield "                        ";
                $context["assetType"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed((($__internal_compile_6 = (($__internal_compile_7 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_8 = CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "content", [], "any", false, false, true, 50)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 50), "render_tokens", [], "any", false, false, true, 50)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[($context["fkey"] ?? null)] ?? null) : null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["{{ field_amenity_type }}"] ?? null) : null), 50, $this->source)));
                // line 51
                yield "                        ";
                $context["assetSubType"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed((($__internal_compile_9 = (($__internal_compile_10 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_11 = CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "content", [], "any", false, false, true, 51)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 51), "render_tokens", [], "any", false, false, true, 51)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10[($context["fkey"] ?? null)] ?? null) : null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["{{ field_amenity_tags }}"] ?? null) : null), 51, $this->source)));
                // line 52
                yield "
                        <div class=\"col-6 col-lg-4 card-holder\" data-tag=\"";
                // line 53
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::replace(Twig\Extension\CoreExtension::lower($this->env->getCharset(), $this->sandbox->ensureToStringAllowed(($context["assetSubType"] ?? null), 53, $this->source)), [" " => ""]), "html", null, true);
                yield "\">
                            <div class=\"card-wrapper\">
                              <div class=\"card resto\">
                                <div class=\"card-logo-wrapper\">
                                  <img class=\"card-logo-top\" src=\"";
                // line 57
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["logo"] ?? null), 57, $this->source), "html", null, true);
                yield "\" alt=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 57, $this->source), "html", null, true);
                yield "\">
                                </div>
                                <div class=\"card-body\">
                                  <a href=\"javascript:;\" data-toggle=\"modal\" data-target=\"#";
                // line 60
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::lower($this->env->getCharset(), Twig\Extension\CoreExtension::replace($this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 60, $this->source), [" " => "-", "." => "-", "&#039;" => "-", "&amp;" => "-"])), "html", null, true);
                yield "\">
                                    <h3 class=\"card-title\">";
                // line 61
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 61, $this->source));
                yield " </h3>
                                    <img src=\"/images/static/arrow-right-navy.svg\" alt=\"\">
                                  </a>
                                </div>
                              </div>
                            </div>
                       </div>
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['ikey'], $context['frow'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            yield "                      <div class=\"row\">
                        <div class=\"col\">
                        <h3 class=\"msg d-none\">";
            // line 71
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("No available elements matching your filter"));
            yield "</h3>
                        </div>
                      </div>
                  </div>
                </div>

                ";
            // line 77
            $context["cnt"] = (($context["cnt"] ?? null) + 1);
            // line 78
            yield "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['assets_items'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        yield "        </div>
    </div>
    <div class=\"filter\">
      <div class=\"select-wrapper\">
        <select name=\"characters\" class=\"custom-select\" tabindex=\"-1\" id=\"select-name\">
          <option value=\"All\" selected=\"\">";
        // line 85
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("All"));
        yield "</option>
          ";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["amenityTags"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["tags"]) {
            // line 87
            yield "            <option value=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::replace(Twig\Extension\CoreExtension::lower($this->env->getCharset(), $this->sandbox->ensureToStringAllowed($context["tags"], 87, $this->source)), [" " => ""]), "html", null, true);
            yield "\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["tags"], 87, $this->source), "html", null, true);
            yield "</option>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['tags'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        yield "        </select>
        <div class=\"dropdown-container filters filter-button-group\">
          <div class=\"dropdown-select entypo-down-open-big\"></div>
          <ul class=\"dropdown-select-ul\" data-role=\"select-name\">
            <li class=\" selected\" data-value=\"All\" data-filter=\"all\"><input type=\"radio\" class=\"\" checked=\"\">";
        // line 93
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("All"));
        yield "</li>
            ";
        // line 94
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["amenityTags"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["tags"]) {
            // line 95
            yield "              ";
            if ($context["tags"]) {
                // line 96
                yield "                <li data-value=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::replace(Twig\Extension\CoreExtension::lower($this->env->getCharset(), $this->sandbox->ensureToStringAllowed($context["tags"], 96, $this->source)), [" " => ""]), "html", null, true);
                yield "\" data-filter=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::replace(Twig\Extension\CoreExtension::lower($this->env->getCharset(), $this->sandbox->ensureToStringAllowed($context["tags"], 96, $this->source)), [" " => ""]), "html", null, true);
                yield "\"><input type=\"radio\" class=\" \">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["tags"], 96, $this->source), "html", null, true);
                yield "</li>
              ";
            }
            // line 98
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['tags'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        yield "          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["assetsTyp", "assets_data", "amenityTags"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/custom/hudayriyat/templates/views/eat/views-view-unformatted--restaurant-listing.html.twig";
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
        return array (  256 => 99,  250 => 98,  240 => 96,  237 => 95,  233 => 94,  229 => 93,  223 => 89,  212 => 87,  208 => 86,  204 => 85,  197 => 80,  190 => 78,  188 => 77,  179 => 71,  175 => 69,  161 => 61,  157 => 60,  149 => 57,  142 => 53,  139 => 52,  136 => 51,  133 => 50,  130 => 49,  127 => 48,  124 => 47,  121 => 46,  117 => 45,  107 => 43,  104 => 42,  101 => 41,  98 => 40,  95 => 39,  91 => 38,  88 => 37,  86 => 36,  83 => 35,  77 => 34,  75 => 33,  64 => 31,  61 => 30,  57 => 29,  52 => 27,  49 => 26,  47 => 25,  40 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/hudayriyat/templates/views/eat/views-view-unformatted--restaurant-listing.html.twig", "/var/www/html/Hudayriyat/project/web/themes/custom/hudayriyat/templates/views/eat/views-view-unformatted--restaurant-listing.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 25, "for" => 29, "if" => 40);
        static $filters = array("t" => 27, "escape" => 31, "trim" => 48, "striptags" => 48, "replace" => 53, "lower" => 53, "raw" => 60);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if'],
                ['t', 'escape', 'trim', 'striptags', 'replace', 'lower', 'raw'],
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
