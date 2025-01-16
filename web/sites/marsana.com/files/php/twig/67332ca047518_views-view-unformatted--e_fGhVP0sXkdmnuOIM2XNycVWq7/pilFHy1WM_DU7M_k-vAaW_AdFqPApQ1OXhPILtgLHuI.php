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

/* sites/marsana.com/themes/custom/marsana/templates/views/eat/views-view-unformatted--eat-listing.html.twig */
class __TwigTemplate_d088ba0d9ff1ce60b77b93f9b8cd0de8 extends Template
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
        if ((Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["langcode"] ?? null)) == "ar")) {
            // line 21
            yield "    ";
            $context["menuTitle"] = Drupal\twig_tweak\TwigTweakExtension::drupalConfig("marsana_custom_configs.settings", "custom_configs_upload_menu_title_ar");
        } else {
            // line 23
            yield "    ";
            $context["menuTitle"] = Drupal\twig_tweak\TwigTweakExtension::drupalConfig("marsana_custom_configs.settings", "custom_configs_upload_menu_title_en");
        }
        // line 25
        yield "<div class=\"interactive-listing-wrapper\">
    <div class=\"container\">
        <div class=\"filter mb-5\">
            <label for=\"\" class=\"body-text\">";
        // line 28
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Sort by"));
        yield "</label>
            <ul class=\"nav nav-tabs mb-5\" id=\"myTab\" role=\"tablist\"> 
                ";
        // line 30
        $context["isResto"] = "restaurants";
        // line 31
        yield "                ";
        $context["isTruck"] = "food-trucks";
        // line 32
        yield "                ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["amenities"] ?? null));
        foreach ($context['_seq'] as $context["atkey"] => $context["amenityType"]) {
            // line 33
            yield "                ";
            $context["isActive"] = "";
            // line 34
            yield "                ";
            $context["is_aria_selected"] = "false";
            // line 35
            yield "                ";
            if (($context["atkey"] == 0)) {
                // line 36
                yield "                    ";
                $context["isActive"] = "active";
                // line 37
                yield "                    ";
                $context["is_aria_selected"] = "true";
                // line 38
                yield "                    ";
                $context["isResto"] = $context["amenityType"];
                // line 39
                yield "                ";
            } else {
                // line 40
                yield "                    ";
                $context["isTruck"] = $context["amenityType"];
                // line 41
                yield "                ";
            }
            // line 42
            yield "                    <li class=\"nav-item\">
                        <a class=\"nav-link body-text bold text-uppercase ";
            // line 43
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["isActive"] ?? null), 43, $this->source), "html", null, true);
            yield "\" id=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::replace(Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::lower($this->env->getCharset(), $this->sandbox->ensureToStringAllowed($context["amenityType"], 43, $this->source))), [" " => "-"]), "html", null, true);
            yield "-tab\" data-toggle=\"tab\" href=\"#";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::replace(Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::lower($this->env->getCharset(), $this->sandbox->ensureToStringAllowed($context["amenityType"], 43, $this->source))), [" " => "-"]), "html", null, true);
            yield "\" role=\"tab\" aria-controls=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::replace(Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::lower($this->env->getCharset(), $this->sandbox->ensureToStringAllowed($context["amenityType"], 43, $this->source))), [" " => "-"]), "html", null, true);
            yield "\" aria-selected=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["is_aria_selected"] ?? null), 43, $this->source), "html", null, true);
            yield "\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim($this->sandbox->ensureToStringAllowed($context["amenityType"], 43, $this->source)), "html", null, true);
            yield "</a>
                    </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['atkey'], $context['amenityType'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        yield "            </ul>
            <div class=\"tab-content\" id=\"myTabContent\">
                <div class=\"tab-pane fade show active\" id=\"";
        // line 48
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::replace(Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::lower($this->env->getCharset(), $this->sandbox->ensureToStringAllowed(($context["isResto"] ?? null), 48, $this->source))), [" " => "-"]), "html", null, true);
        yield "\" role=\"tabpanel\" aria-labelledby=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::replace(Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::lower($this->env->getCharset(), $this->sandbox->ensureToStringAllowed(($context["isResto"] ?? null), 48, $this->source))), [" " => "-"]), "html", null, true);
        yield "-tab\">
                    <div class=\"interactive-listing-links\">
                        <ul>
                            ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["listing"] ?? null));
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
        foreach ($context['_seq'] as $context["key"] => $context["row"]) {
            // line 52
            yield "                             ";
            if (((CoreExtension::getAttribute($this->env, $this->source, $context["row"], "amenityType", [], "any", false, false, true, 52) == "Restaurants") || (CoreExtension::getAttribute($this->env, $this->source, $context["row"], "amenityType", [], "any", false, false, true, 52) == "مطاعم"))) {
                // line 53
                yield "                                ";
                $context["isActive"] = "";
                // line 54
                yield "                                ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 54) == 0)) {
                    // line 55
                    yield "                                    ";
                    $context["isActive"] = "active";
                    // line 56
                    yield "                                ";
                }
                // line 57
                yield "                                ";
                $context["ftVal"] = (($context["ftVal"] ?? null) + 1);
                // line 58
                yield "                                <li data-img=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "bg_image", [], "any", false, false, true, 58), 58, $this->source), "html", null, true);
                yield "\" id=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ("eat-" . $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 58), 58, $this->source)), "html", null, true);
                yield "\" class=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim($this->sandbox->ensureToStringAllowed(($context["isActive"] ?? null), 58, $this->source)), "html", null, true);
                yield "\">
                                    <a href=\"javascript:;\" >";
                // line 59
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "title", [], "any", false, false, true, 59), 59, $this->source))), "html", null, true);
                yield "</a>
                                    <div class=\"dynamic-content\">
                                        <div class=\"img-rest-mobile \"><div class=\"img-circle\"><img src=\"";
                // line 61
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "bg_image", [], "any", false, false, true, 61), 61, $this->source), "html", null, true);
                yield "\" alt=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "title", [], "any", false, false, true, 61), 61, $this->source))), "html", null, true);
                yield "\"></div></div>
                                        <div class=\"logo-holder\"><a href=\"javascript:;\"><img src=\"";
                // line 62
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "logo", [], "any", false, false, true, 62), 62, $this->source), "html", null, true);
                yield "\" alt=\"\"></a></div>
                                        <a href=\"javascript:;\" class=\"body-text big summary\">";
                // line 63
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "description", [], "any", false, false, true, 63), 63, $this->source))), "html", null, true);
                yield " </a>
                                        <div class=\"dynamic-links mt-4\">
                                            <div class=\"row align-items-center\">
                                                <div class=\"col\">
                                                    ";
                // line 67
                if (Twig\Extension\CoreExtension::trim(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "phone_url", [], "any", false, false, true, 67))) {
                    // line 68
                    yield "                                                        <a href=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "phone_url", [], "any", false, false, true, 68), 68, $this->source)), "html", null, true);
                    yield "\" target=\"_blank\" class=\"body-text small text-uppercase align-middle\"><img src=\"/images/static/icon-phone-white.svg\" class=\"align-middle\" alt=\"\"> ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "phone_title", [], "any", false, false, true, 68), 68, $this->source)), "html", null, true);
                    yield "</a>
                                                    ";
                }
                // line 70
                yield "                                                    ";
                if (Twig\Extension\CoreExtension::trim(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "menu_pdf", [], "any", false, false, true, 70))) {
                    // line 71
                    yield "                                                        <a href=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "menu_pdf", [], "any", false, false, true, 71), 71, $this->source)), "html", null, true);
                    yield "\" target=\"_blank\" class=\"align-middle body-text small text-uppercase\"><img src=\"/images/static/icon-menu.svg\" class=\"align-middle\" alt=\"\"> ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim($this->sandbox->ensureToStringAllowed(($context["menuTitle"] ?? null), 71, $this->source)), "html", null, true);
                    yield "</a>
                                                    ";
                } elseif (Twig\Extension\CoreExtension::trim(CoreExtension::getAttribute($this->env, $this->source,                 // line 72
$context["row"], "menu_link_url", [], "any", false, false, true, 72))) {
                    // line 73
                    yield "                                                        <a href=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "menu_link_url", [], "any", false, false, true, 73), 73, $this->source)), "html", null, true);
                    yield "\" target=\"_blank\" class=\"align-middle body-text small text-uppercase\"><img src=\"/images/static/icon-menu.svg\" class=\"align-middle\" alt=\"\"> ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "menu_link_title", [], "any", false, false, true, 73), 73, $this->source)), "html", null, true);
                    yield "</a>
                                                    ";
                }
                // line 75
                yield "                                                    ";
                if (Twig\Extension\CoreExtension::trim(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "insta_url", [], "any", false, false, true, 75))) {
                    // line 76
                    yield "                                                        <a href=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "insta_url", [], "any", false, false, true, 76), 76, $this->source)), "html", null, true);
                    yield "\" target=\"_blank\" class=\"align-middle body-text small text-uppercase\"><img src=\"/images/static/insta-white.svg\" class=\"align-middle\" alt=\"\"> ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "insta_title", [], "any", false, false, true, 76), 76, $this->source)), "html", null, true);
                    yield " </a>
                                                    ";
                }
                // line 78
                yield "                                                    ";
                if (Twig\Extension\CoreExtension::trim(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "website_link_url", [], "any", false, false, true, 78))) {
                    // line 79
                    yield "                                                        <a href=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "website_link_url", [], "any", false, false, true, 79), 79, $this->source)), "html", null, true);
                    yield "\" target=\"_blank\" class=\"body-text small text-uppercase align-middle web-link\">";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "website_link_title", [], "any", false, false, true, 79), 79, $this->source)), "html", null, true);
                    yield " <img src=\"/images/static/arrow-right.svg\" alt=\"\" class=\"align-middle\"></a>
                                                    ";
                }
                // line 81
                yield "                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                             ";
            }
            // line 87
            yield "                            ";
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
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        yield "                        </ul>
                    </div>
                </div>
                <div class=\"tab-pane fade\" id=\"";
        // line 91
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::replace(Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::lower($this->env->getCharset(), $this->sandbox->ensureToStringAllowed(($context["isTruck"] ?? null), 91, $this->source))), [" " => "-"]), "html", null, true);
        yield "\" role=\"tabpanel\" aria-labelledby=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::replace(Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::lower($this->env->getCharset(), $this->sandbox->ensureToStringAllowed(($context["isTruck"] ?? null), 91, $this->source))), [" " => "-"]), "html", null, true);
        yield "-tab\">
                    <div class=\"interactive-listing-links\">
                        <ul>
                            ";
        // line 94
        $context["ftVal"] = 0;
        // line 95
        yield "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["listing"] ?? null));
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
        foreach ($context['_seq'] as $context["key"] => $context["row"]) {
            // line 96
            yield "                             ";
            if (((CoreExtension::getAttribute($this->env, $this->source, $context["row"], "amenityType", [], "any", false, false, true, 96) == "Food Trucks") || (CoreExtension::getAttribute($this->env, $this->source, $context["row"], "amenityType", [], "any", false, false, true, 96) == "شاحنات الغذاء"))) {
                // line 97
                yield "                                ";
                $context["isActive"] = "";
                // line 98
                yield "                                ";
                if ((($context["ftVal"] ?? null) == 0)) {
                    // line 99
                    yield "                                    ";
                    $context["isActive"] = "active";
                    // line 100
                    yield "                                ";
                }
                // line 101
                yield "                                ";
                $context["ftVal"] = (($context["ftVal"] ?? null) + 1);
                // line 102
                yield "                                <li data-img=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "bg_image", [], "any", false, false, true, 102), 102, $this->source), "html", null, true);
                yield "\" id=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ("eat-" . $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 102), 102, $this->source)), "html", null, true);
                yield "\" class=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["isActive"] ?? null), 102, $this->source), "html", null, true);
                yield "\">
                                    <a href=\"javascript:;\" >";
                // line 103
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "title", [], "any", false, false, true, 103), 103, $this->source))), "html", null, true);
                yield "</a>
                                    <div class=\"dynamic-content\">
                                        <div class=\"img-rest-mobile \"><div class=\"img-circle\"><img src=\"";
                // line 105
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "bg_image", [], "any", false, false, true, 105), 105, $this->source), "html", null, true);
                yield "\" alt=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "title", [], "any", false, false, true, 105), 105, $this->source))), "html", null, true);
                yield "\"></div></div>
                                        <div class=\"logo-holder\"><a href=\"javascript:;\"><img src=\"";
                // line 106
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "logo", [], "any", false, false, true, 106), 106, $this->source), "html", null, true);
                yield "\" alt=\"\"></a></div>
                                        <a href=\"javascript:;\" class=\"body-text big summary\">";
                // line 107
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "description", [], "any", false, false, true, 107), 107, $this->source))), "html", null, true);
                yield " </a>
                                        <div class=\"dynamic-links mt-4\">
                                            <div class=\"row align-items-center\">
                                                <div class=\"col\">
                                                    ";
                // line 111
                if (Twig\Extension\CoreExtension::trim(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "phone_url", [], "any", false, false, true, 111))) {
                    // line 112
                    yield "                                                        <a href=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "phone_url", [], "any", false, false, true, 112), 112, $this->source)), "html", null, true);
                    yield "\" target=\"_blank\" class=\"body-text small text-uppercase align-middle\"><img src=\"/images/static/icon-phone-white.svg\" class=\"align-middle\" alt=\"\"> ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "phone_title", [], "any", false, false, true, 112), 112, $this->source)), "html", null, true);
                    yield "</a>
                                                    ";
                }
                // line 114
                yield "                                                    ";
                if (Twig\Extension\CoreExtension::trim(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "menu_pdf", [], "any", false, false, true, 114))) {
                    // line 115
                    yield "                                                        <a href=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "menu_pdf", [], "any", false, false, true, 115), 115, $this->source)), "html", null, true);
                    yield "\" target=\"_blank\" class=\"align-middle body-text small text-uppercase\"><img src=\"/images/static/icon-menu.svg\" class=\"align-middle\" alt=\"\"> ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim($this->sandbox->ensureToStringAllowed(($context["menuTitle"] ?? null), 115, $this->source)), "html", null, true);
                    yield "</a>
                                                    ";
                } elseif (Twig\Extension\CoreExtension::trim(CoreExtension::getAttribute($this->env, $this->source,                 // line 116
$context["row"], "menu_link_url", [], "any", false, false, true, 116))) {
                    // line 117
                    yield "                                                        <a href=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "menu_link_url", [], "any", false, false, true, 117), 117, $this->source)), "html", null, true);
                    yield "\" target=\"_blank\" class=\"align-middle body-text small text-uppercase\"><img src=\"/images/static/icon-menu.svg\" class=\"align-middle\" alt=\"\"> ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "menu_link_title", [], "any", false, false, true, 117), 117, $this->source)), "html", null, true);
                    yield "</a>
                                                    ";
                }
                // line 119
                yield "                                                    ";
                if (Twig\Extension\CoreExtension::trim(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "insta_url", [], "any", false, false, true, 119))) {
                    // line 120
                    yield "                                                        <a href=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "insta_url", [], "any", false, false, true, 120), 120, $this->source)), "html", null, true);
                    yield "\" target=\"_blank\" class=\"align-middle body-text small text-uppercase\"><img src=\"/images/static/insta-white.svg\" class=\"align-middle\" alt=\"\"> ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "insta_title", [], "any", false, false, true, 120), 120, $this->source)), "html", null, true);
                    yield " </a>
                                                    ";
                }
                // line 122
                yield "                                                    ";
                if (Twig\Extension\CoreExtension::trim(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "website_link_url", [], "any", false, false, true, 122))) {
                    // line 123
                    yield "                                                        <a href=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "website_link_url", [], "any", false, false, true, 123), 123, $this->source)), "html", null, true);
                    yield "\" target=\"_blank\" class=\"body-text small text-uppercase align-middle web-link\">";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "website_link_title", [], "any", false, false, true, 123), 123, $this->source)), "html", null, true);
                    yield " <img src=\"/images/static/arrow-right.svg\" alt=\"\" class=\"align-middle\"></a>
                                                    ";
                }
                // line 125
                yield "                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                             ";
            }
            // line 131
            yield "                            ";
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
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 132
        yield "                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"interactive-image img-circle bg-sunshine-100\">
            <img src=\"/images/dynamic/eat-buttom.jpg\" alt=\"\">
        </div>
    </div>
</div>
";
        // line 142
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
            // line 143
            $context["parallax_image"] = Twig\Extension\CoreExtension::split($this->env->getCharset(), Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed((($__internal_compile_0 = (($__internal_compile_1 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_2 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 143)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 143), "render_tokens", [], "any", false, false, true, 143)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 143)] ?? null) : null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["{{ field_parallax_wrapper_bottom }}"] ?? null) : null), 143, $this->source))), ",");
            // line 144
            if ( !Twig\Extension\CoreExtension::testEmpty((($__internal_compile_3 = ($context["parallax_image"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[0] ?? null) : null))) {
                // line 145
                yield "<div class=\"parallax-wrapper bottom-wrapper\">
    <div class=\"parallax-shapes-bottom-right\" data-scroll-speed=\"3\"><img src=\"";
                // line 146
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_4 = ($context["parallax_image"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[0] ?? null) : null), 146, $this->source), "html", null, true);
                yield "\" alt=\"parallax-wrapper bottom-wrapper\"></div>
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
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["langcode", "amenities", "listing", "loop", "rows"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "sites/marsana.com/themes/custom/marsana/templates/views/eat/views-view-unformatted--eat-listing.html.twig";
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
        return array (  463 => 146,  460 => 145,  458 => 144,  456 => 143,  439 => 142,  427 => 132,  413 => 131,  405 => 125,  397 => 123,  394 => 122,  386 => 120,  383 => 119,  375 => 117,  373 => 116,  366 => 115,  363 => 114,  355 => 112,  353 => 111,  346 => 107,  342 => 106,  336 => 105,  331 => 103,  322 => 102,  319 => 101,  316 => 100,  313 => 99,  310 => 98,  307 => 97,  304 => 96,  286 => 95,  284 => 94,  276 => 91,  271 => 88,  257 => 87,  249 => 81,  241 => 79,  238 => 78,  230 => 76,  227 => 75,  219 => 73,  217 => 72,  210 => 71,  207 => 70,  199 => 68,  197 => 67,  190 => 63,  186 => 62,  180 => 61,  175 => 59,  166 => 58,  163 => 57,  160 => 56,  157 => 55,  154 => 54,  151 => 53,  148 => 52,  131 => 51,  123 => 48,  119 => 46,  100 => 43,  97 => 42,  94 => 41,  91 => 40,  88 => 39,  85 => 38,  82 => 37,  79 => 36,  76 => 35,  73 => 34,  70 => 33,  65 => 32,  62 => 31,  60 => 30,  55 => 28,  50 => 25,  46 => 23,  42 => 21,  40 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation to display a view of unformatted rows.
 *
 * Available variables:
 * - title: The title of this group of rows. May be empty.
 * - rows: A list of the view's row items.
 *   - attributes: The row's HTML attributes.
 *   - content: The row's content.
 * - view: The view object.
 * - default_row_class: A flag indicating whether default classes should be
 *   used on rows.
 *
 * @see template_preprocess_views_view_unformatted()
 *
 * @ingroup themeable
 */
#}
{% if (langcode|lower == 'ar') %}
    {% set menuTitle = drupal_config('marsana_custom_configs.settings', 'custom_configs_upload_menu_title_ar') %}
{% else %}
    {% set menuTitle = drupal_config('marsana_custom_configs.settings', 'custom_configs_upload_menu_title_en') %}
{% endif %}
<div class=\"interactive-listing-wrapper\">
    <div class=\"container\">
        <div class=\"filter mb-5\">
            <label for=\"\" class=\"body-text\">{{ 'Sort by' |t }}</label>
            <ul class=\"nav nav-tabs mb-5\" id=\"myTab\" role=\"tablist\"> 
                {% set isResto = 'restaurants' %}
                {% set isTruck = 'food-trucks' %}
                {% for atkey,amenityType in amenities %}
                {% set isActive = '' %}
                {% set is_aria_selected = 'false' %}
                {% if atkey == 0 %}
                    {% set isActive = 'active' %}
                    {% set is_aria_selected = 'true' %}
                    {% set isResto = amenityType %}
                {% else %}
                    {% set isTruck = amenityType %}
                {% endif %}
                    <li class=\"nav-item\">
                        <a class=\"nav-link body-text bold text-uppercase {{ isActive }}\" id=\"{{ amenityType|lower|trim|replace({' ': '-'}) }}-tab\" data-toggle=\"tab\" href=\"#{{ amenityType|lower|trim|replace({' ': '-'}) }}\" role=\"tab\" aria-controls=\"{{ amenityType|lower|trim|replace({' ': '-'}) }}\" aria-selected=\"{{ is_aria_selected }}\">{{ amenityType | trim }}</a>
                    </li>
                {% endfor %}
            </ul>
            <div class=\"tab-content\" id=\"myTabContent\">
                <div class=\"tab-pane fade show active\" id=\"{{ isResto|lower|trim|replace({' ': '-'}) }}\" role=\"tabpanel\" aria-labelledby=\"{{ isResto|lower|trim|replace({' ': '-'}) }}-tab\">
                    <div class=\"interactive-listing-links\">
                        <ul>
                            {% for key, row in listing %}
                             {% if row.amenityType == 'Restaurants' or row.amenityType == 'مطاعم' %}
                                {% set isActive = '' %}
                                {% if loop.index0 == 0 %}
                                    {% set isActive = 'active' %}
                                {% endif %}
                                {% set ftVal = ftVal+1 %}
                                <li data-img=\"{{ row.bg_image }}\" id=\"{{ 'eat-' ~ loop.index }}\" class=\"{{ isActive|trim }}\">
                                    <a href=\"javascript:;\" >{{ row.title|striptags|trim }}</a>
                                    <div class=\"dynamic-content\">
                                        <div class=\"img-rest-mobile \"><div class=\"img-circle\"><img src=\"{{ row.bg_image }}\" alt=\"{{ row.title|striptags|trim }}\"></div></div>
                                        <div class=\"logo-holder\"><a href=\"javascript:;\"><img src=\"{{ row.logo }}\" alt=\"\"></a></div>
                                        <a href=\"javascript:;\" class=\"body-text big summary\">{{ row.description|striptags|trim }} </a>
                                        <div class=\"dynamic-links mt-4\">
                                            <div class=\"row align-items-center\">
                                                <div class=\"col\">
                                                    {% if row.phone_url|trim %}
                                                        <a href=\"{{ row.phone_url|trim }}\" target=\"_blank\" class=\"body-text small text-uppercase align-middle\"><img src=\"/images/static/icon-phone-white.svg\" class=\"align-middle\" alt=\"\"> {{ row.phone_title | trim }}</a>
                                                    {% endif %}
                                                    {% if row.menu_pdf|trim %}
                                                        <a href=\"{{ row.menu_pdf | trim }}\" target=\"_blank\" class=\"align-middle body-text small text-uppercase\"><img src=\"/images/static/icon-menu.svg\" class=\"align-middle\" alt=\"\"> {{ menuTitle|raw|trim }}</a>
                                                    {% elseif row.menu_link_url|trim %}
                                                        <a href=\"{{ row.menu_link_url|trim }}\" target=\"_blank\" class=\"align-middle body-text small text-uppercase\"><img src=\"/images/static/icon-menu.svg\" class=\"align-middle\" alt=\"\"> {{ row.menu_link_title|trim }}</a>
                                                    {% endif %}
                                                    {% if row.insta_url|trim %}
                                                        <a href=\"{{ row.insta_url|trim }}\" target=\"_blank\" class=\"align-middle body-text small text-uppercase\"><img src=\"/images/static/insta-white.svg\" class=\"align-middle\" alt=\"\"> {{ row.insta_title|trim }} </a>
                                                    {% endif %}
                                                    {% if row.website_link_url|trim %}
                                                        <a href=\"{{ row.website_link_url|trim }}\" target=\"_blank\" class=\"body-text small text-uppercase align-middle web-link\">{{ row.website_link_title|trim }} <img src=\"/images/static/arrow-right.svg\" alt=\"\" class=\"align-middle\"></a>
                                                    {% endif %}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                             {% endif %}
                            {% endfor %}
                        </ul>
                    </div>
                </div>
                <div class=\"tab-pane fade\" id=\"{{ isTruck|lower|trim|replace({' ': '-'}) }}\" role=\"tabpanel\" aria-labelledby=\"{{ isTruck|lower|trim|replace({' ': '-'}) }}-tab\">
                    <div class=\"interactive-listing-links\">
                        <ul>
                            {% set ftVal = 0 %}
                            {% for key, row in listing %}
                             {% if row.amenityType == 'Food Trucks' or row.amenityType == 'شاحنات الغذاء' %}
                                {% set isActive = '' %}
                                {% if ftVal == 0 %}
                                    {% set isActive = 'active' %}
                                {% endif %}
                                {% set ftVal = ftVal+1 %}
                                <li data-img=\"{{ row.bg_image }}\" id=\"{{ 'eat-' ~ loop.index }}\" class=\"{{ isActive }}\">
                                    <a href=\"javascript:;\" >{{ row.title|striptags|trim }}</a>
                                    <div class=\"dynamic-content\">
                                        <div class=\"img-rest-mobile \"><div class=\"img-circle\"><img src=\"{{ row.bg_image }}\" alt=\"{{ row.title|striptags|trim }}\"></div></div>
                                        <div class=\"logo-holder\"><a href=\"javascript:;\"><img src=\"{{ row.logo }}\" alt=\"\"></a></div>
                                        <a href=\"javascript:;\" class=\"body-text big summary\">{{ row.description|striptags|trim }} </a>
                                        <div class=\"dynamic-links mt-4\">
                                            <div class=\"row align-items-center\">
                                                <div class=\"col\">
                                                    {% if row.phone_url|trim %}
                                                        <a href=\"{{ row.phone_url|trim }}\" target=\"_blank\" class=\"body-text small text-uppercase align-middle\"><img src=\"/images/static/icon-phone-white.svg\" class=\"align-middle\" alt=\"\"> {{ row.phone_title | trim }}</a>
                                                    {% endif %}
                                                    {% if row.menu_pdf|trim %}
                                                        <a href=\"{{ row.menu_pdf | trim }}\" target=\"_blank\" class=\"align-middle body-text small text-uppercase\"><img src=\"/images/static/icon-menu.svg\" class=\"align-middle\" alt=\"\"> {{ menuTitle|raw|trim }}</a>
                                                    {% elseif row.menu_link_url|trim %}
                                                        <a href=\"{{ row.menu_link_url|trim }}\" target=\"_blank\" class=\"align-middle body-text small text-uppercase\"><img src=\"/images/static/icon-menu.svg\" class=\"align-middle\" alt=\"\"> {{ row.menu_link_title|trim }}</a>
                                                    {% endif %}
                                                    {% if row.insta_url|trim %}
                                                        <a href=\"{{ row.insta_url|trim }}\" target=\"_blank\" class=\"align-middle body-text small text-uppercase\"><img src=\"/images/static/insta-white.svg\" class=\"align-middle\" alt=\"\"> {{ row.insta_title|trim }} </a>
                                                    {% endif %}
                                                    {% if row.website_link_url|trim %}
                                                        <a href=\"{{ row.website_link_url|trim }}\" target=\"_blank\" class=\"body-text small text-uppercase align-middle web-link\">{{ row.website_link_title|trim }} <img src=\"/images/static/arrow-right.svg\" alt=\"\" class=\"align-middle\"></a>
                                                    {% endif %}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                             {% endif %}
                            {% endfor %}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"interactive-image img-circle bg-sunshine-100\">
            <img src=\"/images/dynamic/eat-buttom.jpg\" alt=\"\">
        </div>
    </div>
</div>
{% for row in rows %}
{% set parallax_image = row.content['#view'].style_plugin.render_tokens[ loop.index0 ]['{{ field_parallax_wrapper_bottom }}'] |striptags|trim|split(',') %}
{% if parallax_image[0] is not empty %}
<div class=\"parallax-wrapper bottom-wrapper\">
    <div class=\"parallax-shapes-bottom-right\" data-scroll-speed=\"3\"><img src=\"{{ parallax_image[0] }}\" alt=\"parallax-wrapper bottom-wrapper\"></div>
</div>
{% endif %}
{% endfor %}", "sites/marsana.com/themes/custom/marsana/templates/views/eat/views-view-unformatted--eat-listing.html.twig", "/var/www/html/Hudayriyat/project/web/sites/marsana.com/themes/custom/marsana/templates/views/eat/views-view-unformatted--eat-listing.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 20, "set" => 21, "for" => 32);
        static $filters = array("lower" => 20, "t" => 28, "escape" => 43, "replace" => 43, "trim" => 43, "striptags" => 59, "raw" => 71, "split" => 143);
        static $functions = array("drupal_config" => 21);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'for'],
                ['lower', 't', 'escape', 'replace', 'trim', 'striptags', 'raw', 'split'],
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
