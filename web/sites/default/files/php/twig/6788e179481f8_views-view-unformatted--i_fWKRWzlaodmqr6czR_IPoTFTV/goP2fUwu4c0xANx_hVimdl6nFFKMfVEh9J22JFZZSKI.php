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

/* themes/custom/hudayriyat/templates/views/views-view-unformatted--interactivemap-list.html.twig */
class __TwigTemplate_363b61ff0cb0ef78451553bdcb8ae285 extends Template
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
        if ((($context["langcode"] ?? null) == "en")) {
            // line 21
            yield "    ";
            $context["recommendation"] = Drupal\twig_tweak\TwigTweakExtension::drupalConfig("hudayriyat_custom_configs.settings", "custom_configs_recommendation_en");
            // line 22
            yield "  ";
        } else {
            // line 23
            yield "    ";
            $context["recommendation"] = Drupal\twig_tweak\TwigTweakExtension::drupalConfig("hudayriyat_custom_configs.settings", "custom_configs_recommendation_ar");
            // line 24
            yield "  ";
        }
        // line 25
        yield "<div class=\"interactive-map\">
<div class=\"map\">
    <div class=\"maps-container unselectable maps-container-mob\" style=\"overflow: auto;\">

    <div class=\"map-mobile\" style=\"transform: scale(1); transform-origin: 0 0;\">
            <div class=\"map-image\" id=\"map-all\">
              <div id=\"animation_container\">
                    ";
        // line 32
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(views_embed_view("interactivemap_map_section")), "html", null, true);
        yield "
                    <div class=\"trails-group\">
                    ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["trails"] ?? null));
        foreach ($context['_seq'] as $context["tkey"] => $context["trailItem"]) {
            // line 35
            yield "                        <img src=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_0 = $context["trailItem"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["image_url"] ?? null) : null), 35, $this->source), "html", null, true);
            yield "\" alt=\"\" data-tag=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::lower($this->env->getCharset(), Twig\Extension\CoreExtension::replace($this->sandbox->ensureToStringAllowed((($__internal_compile_1 = $context["trailItem"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["trailsName"] ?? null) : null), 35, $this->source), [" " => "-", "." => "-", "&#039;" => "-", "&amp;" => "-"])), "html", null, true);
            yield "\" class=\"active\">
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['tkey'], $context['trailItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        yield "                    </div>
                    <div id=\"dom_overlay_container\" style=\"pointer-events:none; overflow:hidden; width:100%; height:auto; position: absolute; left: 0px; top: 0px; display: block;\">
                </div>
              </div>
            </div>
            
            <div class=\"marker-group\">
              
              ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["landmarks"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["item"]) {
            // line 46
            yield "               ";
            if (((($__internal_compile_2 = $context["item"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["landmarkType"] ?? null) : null) && ((($__internal_compile_3 = $context["item"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["landmarkType"] ?? null) : null) == "Landmarks"))) {
                // line 47
                yield "                ";
                if (((($__internal_compile_4 = $context["item"]) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["landmarkImage"] ?? null) : null) && (($__internal_compile_5 = $context["item"]) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["landmarkUrl"] ?? null) : null))) {
                    // line 48
                    yield "                    <div class=\"redirection marker-all ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_6 = $context["item"]) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["cssClass"] ?? null) : null), 48, $this->source), "html", null, true);
                    yield "\" style=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_7 = $context["item"]) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["landmarkPosition"] ?? null) : null), 48, $this->source), "html", null, true);
                    yield " transform: scale(1);\" data-tag=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), $this->sandbox->ensureToStringAllowed((($__internal_compile_8 = $context["item"]) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["landmarkName"] ?? null) : null), 48, $this->source)), "html", null, true);
                    yield "\">
\t\t\t\t\t\t<div class=\"pulse\"></div>
                        <a href=\"javascript:;\" class=\"pin-redirection\"></a>
                        <a href=\"javascript:;\">
                            <p class=\"marker-details tooltip-txt\">";
                    // line 52
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_9 = $context["item"]) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["landmarkName"] ?? null) : null), 52, $this->source), "html", null, true);
                    yield "</p>
                        </a>
                        <span>";
                    // line 54
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_10 = $context["item"]) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["landmarkNo"] ?? null) : null), 54, $this->source), "html", null, true);
                    yield "</span>                    
                        <div class=\"marker-details redirection-details\">
                            <img src=\"";
                    // line 56
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_11 = $context["item"]) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["landmarkImage"] ?? null) : null), 56, $this->source), "html", null, true);
                    yield "\" alt=\"\" class=\"w-100\">
                            <a href=\"javascript:;\" class=\"redirection-details-close\"><img src=\"/images/static/close.svg\" alt=\"\"></a>
                            <a target=\"_blank\" href=\"";
                    // line 58
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_12 = $context["item"]) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["landmarkUrl"] ?? null) : null), 58, $this->source), "html", null, true);
                    yield "\"><p>";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_13 = $context["item"]) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["landmarkName"] ?? null) : null), 58, $this->source), "html", null, true);
                    yield "</p>
                            <img src=\"/images/static/arrow-right-navy.svg\" alt=\"\"></a>
                        </div>
                    </div>
                ";
                } else {
                    // line 63
                    yield "                    <a class=\"marker-all ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_14 = $context["item"]) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["cssClass"] ?? null) : null), 63, $this->source), "html", null, true);
                    yield "\" style=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_15 = $context["item"]) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["landmarkPosition"] ?? null) : null), 63, $this->source), "html", null, true);
                    yield "\" href=\"javascript:;\" data-tag=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), $this->sandbox->ensureToStringAllowed((($__internal_compile_16 = $context["item"]) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["landmarkName"] ?? null) : null), 63, $this->source)), "html", null, true);
                    yield "\">
\t\t\t\t\t\t<div class=\"pulse\"></div>
                        <span class=\"number\">";
                    // line 65
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_17 = $context["item"]) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["landmarkNo"] ?? null) : null), 65, $this->source), "html", null, true);
                    yield "</span>
                        <p class=\"marker-details tooltip-txt\">";
                    // line 66
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_18 = $context["item"]) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["landmarkName"] ?? null) : null), 66, $this->source), "html", null, true);
                    yield "</p>
                    </a>
                ";
                }
                // line 69
                yield "               ";
            }
            // line 70
            yield "
                ";
            // line 71
            if (((($__internal_compile_19 = $context["item"]) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19["landmarkType"] ?? null) : null) && ((($__internal_compile_20 = $context["item"]) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["landmarkType"] ?? null) : null) != "Landmarks"))) {
                // line 72
                yield "                    ";
                if (((($__internal_compile_21 = $context["item"]) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21["landmarkImage"] ?? null) : null) && (($__internal_compile_22 = $context["item"]) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22["landmarkUrl"] ?? null) : null))) {
                    // line 73
                    yield "                        <div class=\"redirection marker-all map-pin ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_23 = $context["item"]) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23["cssClass"] ?? null) : null), 73, $this->source), "html", null, true);
                    yield " active\" style=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_24 = $context["item"]) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24["landmarkPosition"] ?? null) : null), 73, $this->source), "html", null, true);
                    yield " transform: scale(1);\" data-tag=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), Twig\Extension\CoreExtension::replace($this->sandbox->ensureToStringAllowed((($__internal_compile_25 = $context["item"]) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25["landmarkName"] ?? null) : null), 73, $this->source), ["&#039;" => "-", "&amp;" => "&"])), "html", null, true);
                    yield "\">
                            <div class=\"pulse\"></div>
                            <a class=\"pin-redirection\" href=\"javascript:;\"></a>
                            <a class=\"\" href=\"javascript:;\">
                                <p class=\"marker-details tooltip-txt\">";
                    // line 77
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed((($__internal_compile_26 = $context["item"]) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26["landmarkName"] ?? null) : null), 77, $this->source));
                    yield "</p>
                            </a>
                            <div class=\"marker-details redirection-details\">
                                <img src=\"";
                    // line 80
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_27 = $context["item"]) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27["landmarkImage"] ?? null) : null), 80, $this->source), "html", null, true);
                    yield "\" alt=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed((($__internal_compile_28 = $context["item"]) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28["landmarkName"] ?? null) : null), 80, $this->source));
                    yield "\">
                                <a class=\"redirection-details-close\" href=\"javascript:;\">
                                    <img src=\"/images/static/close.svg\" alt=\"\" />
                                </a>
                                <a target=\"_blank\" href=\"";
                    // line 84
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_29 = $context["item"]) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29["landmarkUrl"] ?? null) : null), 84, $this->source), "html", null, true);
                    yield "\"><p>";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed((($__internal_compile_30 = $context["item"]) && is_array($__internal_compile_30) || $__internal_compile_30 instanceof ArrayAccess ? ($__internal_compile_30["landmarkName"] ?? null) : null), 84, $this->source));
                    yield "</p>
                                <img src=\"/images/static/arrow-right-navy.svg\" alt=\"\"></a>
                            </div>
                        </div>
                    ";
                } else {
                    // line 89
                    yield "                        <a class=\"marker-all map-pin ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim($this->sandbox->ensureToStringAllowed((($__internal_compile_31 = $context["item"]) && is_array($__internal_compile_31) || $__internal_compile_31 instanceof ArrayAccess ? ($__internal_compile_31["cssClass"] ?? null) : null), 89, $this->source)), "html", null, true);
                    yield " active\" style=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_32 = $context["item"]) && is_array($__internal_compile_32) || $__internal_compile_32 instanceof ArrayAccess ? ($__internal_compile_32["landmarkPosition"] ?? null) : null), 89, $this->source), "html", null, true);
                    yield "\"  data-tag=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), Twig\Extension\CoreExtension::replace($this->sandbox->ensureToStringAllowed((($__internal_compile_33 = $context["item"]) && is_array($__internal_compile_33) || $__internal_compile_33 instanceof ArrayAccess ? ($__internal_compile_33["landmarkName"] ?? null) : null), 89, $this->source), ["&#039;" => "-", "&amp;" => "&"])), "html", null, true);
                    yield "\">
\t\t\t\t\t\t\t<div class=\"pulse\"></div>
                            <p class=\"marker-details tooltip-txt\">";
                    // line 91
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_34 = $context["item"]) && is_array($__internal_compile_34) || $__internal_compile_34 instanceof ArrayAccess ? ($__internal_compile_34["landmarkName"] ?? null) : null), 91, $this->source), "html", null, true);
                    yield "</p>
                        </a>
                    ";
                }
                // line 94
                yield "                ";
            }
            // line 95
            yield "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        yield "
              ";
        // line 97
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
            // line 98
            yield "                ";
            $context["title"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed((($__internal_compile_35 = (($__internal_compile_36 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_37 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 98)) && is_array($__internal_compile_37) || $__internal_compile_37 instanceof ArrayAccess ? ($__internal_compile_37["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 98), "render_tokens", [], "any", false, false, true, 98)) && is_array($__internal_compile_36) || $__internal_compile_36 instanceof ArrayAccess ? ($__internal_compile_36[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 98)] ?? null) : null)) && is_array($__internal_compile_35) || $__internal_compile_35 instanceof ArrayAccess ? ($__internal_compile_35["{{ field_hero_image_title }}"] ?? null) : null), 98, $this->source)));
            // line 99
            yield "                ";
            $context["aminitesType"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed((($__internal_compile_38 = (($__internal_compile_39 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_40 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 99)) && is_array($__internal_compile_40) || $__internal_compile_40 instanceof ArrayAccess ? ($__internal_compile_40["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 99), "render_tokens", [], "any", false, false, true, 99)) && is_array($__internal_compile_39) || $__internal_compile_39 instanceof ArrayAccess ? ($__internal_compile_39[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 99)] ?? null) : null)) && is_array($__internal_compile_38) || $__internal_compile_38 instanceof ArrayAccess ? ($__internal_compile_38["{{ field_amenity_type }}"] ?? null) : null), 99, $this->source)));
            // line 100
            yield "                ";
            $context["hero_image"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed((($__internal_compile_41 = (($__internal_compile_42 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_43 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 100)) && is_array($__internal_compile_43) || $__internal_compile_43 instanceof ArrayAccess ? ($__internal_compile_43["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 100), "render_tokens", [], "any", false, false, true, 100)) && is_array($__internal_compile_42) || $__internal_compile_42 instanceof ArrayAccess ? ($__internal_compile_42[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 100)] ?? null) : null)) && is_array($__internal_compile_41) || $__internal_compile_41 instanceof ArrayAccess ? ($__internal_compile_41["{{ field_hero_image }}"] ?? null) : null), 100, $this->source)));
            // line 101
            yield "                ";
            $context["link"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed((($__internal_compile_44 = (($__internal_compile_45 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_46 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 101)) && is_array($__internal_compile_46) || $__internal_compile_46 instanceof ArrayAccess ? ($__internal_compile_46["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 101), "render_tokens", [], "any", false, false, true, 101)) && is_array($__internal_compile_45) || $__internal_compile_45 instanceof ArrayAccess ? ($__internal_compile_45[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 101)] ?? null) : null)) && is_array($__internal_compile_44) || $__internal_compile_44 instanceof ArrayAccess ? ($__internal_compile_44["{{ view_node }}"] ?? null) : null), 101, $this->source)));
            // line 102
            yield "                ";
            $context["position"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed((($__internal_compile_47 = (($__internal_compile_48 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_49 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 102)) && is_array($__internal_compile_49) || $__internal_compile_49 instanceof ArrayAccess ? ($__internal_compile_49["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 102), "render_tokens", [], "any", false, false, true, 102)) && is_array($__internal_compile_48) || $__internal_compile_48 instanceof ArrayAccess ? ($__internal_compile_48[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 102)] ?? null) : null)) && is_array($__internal_compile_47) || $__internal_compile_47 instanceof ArrayAccess ? ($__internal_compile_47["{{ field_position }}"] ?? null) : null), 102, $this->source)));
            // line 103
            yield "                ";
            $context["aminityTag"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed((($__internal_compile_50 = (($__internal_compile_51 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_52 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 103)) && is_array($__internal_compile_52) || $__internal_compile_52 instanceof ArrayAccess ? ($__internal_compile_52["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 103), "render_tokens", [], "any", false, false, true, 103)) && is_array($__internal_compile_51) || $__internal_compile_51 instanceof ArrayAccess ? ($__internal_compile_51[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 103)] ?? null) : null)) && is_array($__internal_compile_50) || $__internal_compile_50 instanceof ArrayAccess ? ($__internal_compile_50["{{ field_amenity_tags }}"] ?? null) : null), 103, $this->source)));
            // line 104
            yield "                ";
            $context["suggestions"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed((($__internal_compile_53 = (($__internal_compile_54 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_55 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 104)) && is_array($__internal_compile_55) || $__internal_compile_55 instanceof ArrayAccess ? ($__internal_compile_55["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 104), "render_tokens", [], "any", false, false, true, 104)) && is_array($__internal_compile_54) || $__internal_compile_54 instanceof ArrayAccess ? ($__internal_compile_54[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 104)] ?? null) : null)) && is_array($__internal_compile_53) || $__internal_compile_53 instanceof ArrayAccess ? ($__internal_compile_53["{{ field_autosuggestion_keywords }}"] ?? null) : null), 104, $this->source)));
            // line 105
            yield "\t            ";
            $context["isRecommended"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed((($__internal_compile_56 = (($__internal_compile_57 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_58 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 105)) && is_array($__internal_compile_58) || $__internal_compile_58 instanceof ArrayAccess ? ($__internal_compile_58["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 105), "render_tokens", [], "any", false, false, true, 105)) && is_array($__internal_compile_57) || $__internal_compile_57 instanceof ArrayAccess ? ($__internal_compile_57[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 105)] ?? null) : null)) && is_array($__internal_compile_56) || $__internal_compile_56 instanceof ArrayAccess ? ($__internal_compile_56["{{ field_is_recommended }}"] ?? null) : null), 105, $this->source)));
            // line 106
            yield "                ";
            $context["suggestionTag"] = "";
            // line 107
            yield "                ";
            $context["isRecommend"] = "";
            // line 108
            yield "
\t\t        ";
            // line 109
            $context["allSuggs"] = Twig\Extension\CoreExtension::split($this->env->getCharset(), Twig\Extension\CoreExtension::replace(Twig\Extension\CoreExtension::trim($this->sandbox->ensureToStringAllowed(($context["suggestions"] ?? null), 109, $this->source)), [", " => ",", " ," => ",", "&#039;" => "-", "&amp;" => "&"]), ",");
            // line 110
            yield "                ";
            $context["allCapSuggs"] = [];
            // line 111
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["allSuggs"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["sugg"]) {
                // line 112
                yield "                    ";
                $context["allCapSuggs"] = Twig\Extension\CoreExtension::merge($this->sandbox->ensureToStringAllowed(($context["allCapSuggs"] ?? null), 112, $this->source), [Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), $this->sandbox->ensureToStringAllowed($context["sugg"], 112, $this->source))]);
                // line 113
                yield "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sugg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 114
            yield "                ";
            $context["suggestionTag"] = Twig\Extension\CoreExtension::join($this->sandbox->ensureToStringAllowed(($context["allCapSuggs"] ?? null), 114, $this->source), ",");
            yield "   

                ";
            // line 116
            if ((($context["isRecommended"] ?? null) == "Yes")) {
                // line 117
                yield "                    ";
                $context["isRecommend"] = ",recommend";
                // line 118
                yield "                ";
            }
            // line 119
            yield "
                ";
            // line 120
            if (($context["position"] ?? null)) {
                // line 121
                yield "                    ";
                if (((((($context["aminitesType"] ?? null) == "Restaurants") || (($context["aminitesType"] ?? null) == "Food Trucks")) || (($context["aminitesType"] ?? null) == "مطاعم")) || (($context["aminitesType"] ?? null) == "شاحنات الغذاء"))) {
                    // line 122
                    yield "                        <a class=\"marker-all map-pin green-pin active\" style=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["position"] ?? null), 122, $this->source), "html", null, true);
                    yield " transform: scale(1);\" href=\"javascript:;\" data-toggle=\"modal\" data-target=\"#";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::lower($this->env->getCharset(), Twig\Extension\CoreExtension::replace($this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 122, $this->source), [" " => "-", "." => "-", "&#039;" => "-", "&amp;" => "-"])), "html", null, true);
                    yield "\" data-tag=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), Twig\Extension\CoreExtension::replace($this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 122, $this->source), ["&#039;" => "-", "&amp;" => "&"])), "html", null, true);
                    yield ",";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::lower($this->env->getCharset(), Twig\Extension\CoreExtension::replace($this->sandbox->ensureToStringAllowed(($context["aminitesType"] ?? null), 122, $this->source), [" " => "-", "." => "-", "&#039;" => "-", "&amp;" => "-"])), "html", null, true);
                    yield ",";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::lower($this->env->getCharset(), Twig\Extension\CoreExtension::replace($this->sandbox->ensureToStringAllowed(($context["aminityTag"] ?? null), 122, $this->source), [" " => "-", "." => "-", "&#039;" => "-", "&amp;" => "-"])), "html", null, true);
                    yield ",";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim($this->sandbox->ensureToStringAllowed(($context["suggestionTag"] ?? null), 122, $this->source)), "html", null, true);
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["isRecommend"] ?? null), 122, $this->source), "html", null, true);
                    yield "\">
                            <div class=\"pulse\"></div>
                            <p class=\"marker-details tooltip-txt\">";
                    // line 124
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 124, $this->source));
                    yield "</p>
                        </a>
                    ";
                } elseif (((((                // line 126
($context["aminitesType"] ?? null) == "Facilities") || (($context["aminitesType"] ?? null) == "Activities")) || (($context["aminitesType"] ?? null) == "النشاطات")) || (($context["aminitesType"] ?? null) == "المنشآت"))) {
                    // line 127
                    yield "                        <div class=\"redirection marker-all map-pin navy-pin active\" style=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["position"] ?? null), 127, $this->source), "html", null, true);
                    yield " transform: scale(1);\" data-tag=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), Twig\Extension\CoreExtension::replace($this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 127, $this->source), ["&#039;" => "-", "&amp;" => "&"])), "html", null, true);
                    yield ",";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::lower($this->env->getCharset(), Twig\Extension\CoreExtension::replace($this->sandbox->ensureToStringAllowed(($context["aminitesType"] ?? null), 127, $this->source), [" " => "-", "&#039;" => "-", "&amp;" => "-"])), "html", null, true);
                    yield ",";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim($this->sandbox->ensureToStringAllowed(($context["suggestionTag"] ?? null), 127, $this->source)), "html", null, true);
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["isRecommend"] ?? null), 127, $this->source), "html", null, true);
                    yield ",";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::lower($this->env->getCharset(), Twig\Extension\CoreExtension::replace(Twig\Extension\CoreExtension::trim($this->sandbox->ensureToStringAllowed(($context["aminityTag"] ?? null), 127, $this->source)), [" ," => ",", ", " => ",", " " => "-", "." => "-", "&#039;" => "-", "&amp;" => "-"])), "html", null, true);
                    yield "\">
                            <div class=\"pulse\"></div>
                            <a class=\"pin-redirection\" href=\"javascript:;\"></a>
                            <a class=\"\" href=\"javascript:;\">
                                <p class=\"marker-details tooltip-txt\">";
                    // line 131
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 131, $this->source));
                    yield "</p>
                            </a>
                            <div class=\"marker-details redirection-details\">
                                <img src=\"";
                    // line 134
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["hero_image"] ?? null), 134, $this->source), "html", null, true);
                    yield "\" alt=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 134, $this->source));
                    yield "\">
                                <a class=\"redirection-details-close\" href=\"javascript:;\">
                                    <img src=\"/images/static/close.svg\" alt=\"\" />
                                </a>
                                <a target=\"_blank\" href=\"";
                    // line 138
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["link"] ?? null), 138, $this->source), "html", null, true);
                    yield "\"><p>";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 138, $this->source));
                    yield "</p>
                                <img src=\"/images/static/arrow-right-navy.svg\" alt=\"\"></a>
                            </div>
                        </div>
                ";
                }
                // line 143
                yield "               ";
            }
            // line 144
            yield "            ";
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
        // line 145
        yield "            </div>
        </div>
        

    <!-- maps-container-inner -->
    <div class=\"maps-container-inner zoomedElement zoomedElement414\">
        <!-- maps-zoomed-container -->
        <div class=\"maps-zoomed-container\">

        <div class=\"map-image\" id=\"map-all\">
            <div id=\"animation_container\">
            <canvas id=\"canvas\" width=\"100%\" height=\"auto\" class=\"desktop-map-canvas\"></canvas>
            ";
        // line 157
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(views_embed_view("interactivemap_map_section")), "html", null, true);
        yield "
            <div class=\"trails-group\">
            ";
        // line 159
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["trails"] ?? null));
        foreach ($context['_seq'] as $context["tkey"] => $context["trailItem"]) {
            // line 160
            yield "                <img src=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_59 = $context["trailItem"]) && is_array($__internal_compile_59) || $__internal_compile_59 instanceof ArrayAccess ? ($__internal_compile_59["image_url"] ?? null) : null), 160, $this->source), "html", null, true);
            yield "\" alt=\"\" data-tag=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::lower($this->env->getCharset(), Twig\Extension\CoreExtension::replace($this->sandbox->ensureToStringAllowed((($__internal_compile_60 = $context["trailItem"]) && is_array($__internal_compile_60) || $__internal_compile_60 instanceof ArrayAccess ? ($__internal_compile_60["trailsName"] ?? null) : null), 160, $this->source), [" " => "-", "." => "-", "&#039;" => "-", "&amp;" => "-"])), "html", null, true);
            yield "\" class=\"active\">
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['tkey'], $context['trailItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 162
        yield "            </div>
            <div id=\"dom_overlay_container\" style=\"pointer-events:none; overflow:hidden; width:100%; height:auto; position: absolute; left: 0px; top: 0px; display: block;\">
            </div>
            </div>
        </div>
        
        <div class=\"marker-group\">
            ";
        // line 169
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["landmarks"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["item"]) {
            // line 170
            yield "             ";
            if (((($__internal_compile_61 = $context["item"]) && is_array($__internal_compile_61) || $__internal_compile_61 instanceof ArrayAccess ? ($__internal_compile_61["landmarkType"] ?? null) : null) && ((($__internal_compile_62 = $context["item"]) && is_array($__internal_compile_62) || $__internal_compile_62 instanceof ArrayAccess ? ($__internal_compile_62["landmarkType"] ?? null) : null) == "Landmarks"))) {
                // line 171
                yield "                ";
                if (((($__internal_compile_63 = $context["item"]) && is_array($__internal_compile_63) || $__internal_compile_63 instanceof ArrayAccess ? ($__internal_compile_63["landmarkImage"] ?? null) : null) && (($__internal_compile_64 = $context["item"]) && is_array($__internal_compile_64) || $__internal_compile_64 instanceof ArrayAccess ? ($__internal_compile_64["landmarkUrl"] ?? null) : null))) {
                    // line 172
                    yield "                    <div class=\"redirection marker-all ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim($this->sandbox->ensureToStringAllowed((($__internal_compile_65 = $context["item"]) && is_array($__internal_compile_65) || $__internal_compile_65 instanceof ArrayAccess ? ($__internal_compile_65["cssClass"] ?? null) : null), 172, $this->source)), "html", null, true);
                    yield "\" style=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_66 = $context["item"]) && is_array($__internal_compile_66) || $__internal_compile_66 instanceof ArrayAccess ? ($__internal_compile_66["landmarkPosition"] ?? null) : null), 172, $this->source), "html", null, true);
                    yield " transform: scale(1);\" data-tag=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), $this->sandbox->ensureToStringAllowed((($__internal_compile_67 = $context["item"]) && is_array($__internal_compile_67) || $__internal_compile_67 instanceof ArrayAccess ? ($__internal_compile_67["landmarkName"] ?? null) : null), 172, $this->source)), "html", null, true);
                    yield "\">
\t\t\t\t\t\t<div class=\"pulse\"></div>
                        <a href=\"javascript:;\" class=\"pin-redirection\"></a>
                        <a href=\"javascript:;\">
                            <p class=\"marker-details tooltip-txt\">";
                    // line 176
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_68 = $context["item"]) && is_array($__internal_compile_68) || $__internal_compile_68 instanceof ArrayAccess ? ($__internal_compile_68["landmarkName"] ?? null) : null), 176, $this->source), "html", null, true);
                    yield "</p>
                        </a>
                        <span>";
                    // line 178
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_69 = $context["item"]) && is_array($__internal_compile_69) || $__internal_compile_69 instanceof ArrayAccess ? ($__internal_compile_69["landmarkNo"] ?? null) : null), 178, $this->source), "html", null, true);
                    yield "</span>                    
                        <div class=\"marker-details redirection-details\">
                            <img src=\"";
                    // line 180
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_70 = $context["item"]) && is_array($__internal_compile_70) || $__internal_compile_70 instanceof ArrayAccess ? ($__internal_compile_70["landmarkImage"] ?? null) : null), 180, $this->source), "html", null, true);
                    yield "\" alt=\"\" class=\"w-100\">
                            <a href=\"javascript:;\" class=\"redirection-details-close\"><img src=\"/images/static/close.svg\" alt=\"\"></a>
                            <a target=\"_blank\" href=\"";
                    // line 182
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_71 = $context["item"]) && is_array($__internal_compile_71) || $__internal_compile_71 instanceof ArrayAccess ? ($__internal_compile_71["landmarkUrl"] ?? null) : null), 182, $this->source), "html", null, true);
                    yield "\"><p>";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_72 = $context["item"]) && is_array($__internal_compile_72) || $__internal_compile_72 instanceof ArrayAccess ? ($__internal_compile_72["landmarkName"] ?? null) : null), 182, $this->source), "html", null, true);
                    yield "</p>
                            <img src=\"/images/static/arrow-right-navy.svg\" alt=\"\"></a>
                        </div>
                    </div>
                ";
                } else {
                    // line 187
                    yield "                    <a class=\"marker-all ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim($this->sandbox->ensureToStringAllowed((($__internal_compile_73 = $context["item"]) && is_array($__internal_compile_73) || $__internal_compile_73 instanceof ArrayAccess ? ($__internal_compile_73["cssClass"] ?? null) : null), 187, $this->source)), "html", null, true);
                    yield "\" style=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_74 = $context["item"]) && is_array($__internal_compile_74) || $__internal_compile_74 instanceof ArrayAccess ? ($__internal_compile_74["landmarkPosition"] ?? null) : null), 187, $this->source), "html", null, true);
                    yield "\" href=\"javascript:;\" data-tag=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), $this->sandbox->ensureToStringAllowed((($__internal_compile_75 = $context["item"]) && is_array($__internal_compile_75) || $__internal_compile_75 instanceof ArrayAccess ? ($__internal_compile_75["landmarkName"] ?? null) : null), 187, $this->source)), "html", null, true);
                    yield "\">
\t\t\t\t\t\t<div class=\"pulse\"></div>
                        <span class=\"number\">";
                    // line 189
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_76 = $context["item"]) && is_array($__internal_compile_76) || $__internal_compile_76 instanceof ArrayAccess ? ($__internal_compile_76["landmarkNo"] ?? null) : null), 189, $this->source), "html", null, true);
                    yield "</span>
                        <p class=\"marker-details tooltip-txt\">";
                    // line 190
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_77 = $context["item"]) && is_array($__internal_compile_77) || $__internal_compile_77 instanceof ArrayAccess ? ($__internal_compile_77["landmarkName"] ?? null) : null), 190, $this->source), "html", null, true);
                    yield "</p>
                    </a>
                ";
                }
                // line 193
                yield "             ";
            }
            // line 194
            yield "
                ";
            // line 195
            if (((($__internal_compile_78 = $context["item"]) && is_array($__internal_compile_78) || $__internal_compile_78 instanceof ArrayAccess ? ($__internal_compile_78["landmarkType"] ?? null) : null) && ((($__internal_compile_79 = $context["item"]) && is_array($__internal_compile_79) || $__internal_compile_79 instanceof ArrayAccess ? ($__internal_compile_79["landmarkType"] ?? null) : null) != "Landmarks"))) {
                // line 196
                yield "                    ";
                if (((($__internal_compile_80 = $context["item"]) && is_array($__internal_compile_80) || $__internal_compile_80 instanceof ArrayAccess ? ($__internal_compile_80["landmarkImage"] ?? null) : null) && (($__internal_compile_81 = $context["item"]) && is_array($__internal_compile_81) || $__internal_compile_81 instanceof ArrayAccess ? ($__internal_compile_81["landmarkUrl"] ?? null) : null))) {
                    // line 197
                    yield "                        <div class=\"redirection marker-all map-pin ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_82 = $context["item"]) && is_array($__internal_compile_82) || $__internal_compile_82 instanceof ArrayAccess ? ($__internal_compile_82["cssClass"] ?? null) : null), 197, $this->source), "html", null, true);
                    yield " active\" style=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_83 = $context["item"]) && is_array($__internal_compile_83) || $__internal_compile_83 instanceof ArrayAccess ? ($__internal_compile_83["landmarkPosition"] ?? null) : null), 197, $this->source), "html", null, true);
                    yield " transform: scale(1);\" data-tag=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), Twig\Extension\CoreExtension::replace($this->sandbox->ensureToStringAllowed((($__internal_compile_84 = $context["item"]) && is_array($__internal_compile_84) || $__internal_compile_84 instanceof ArrayAccess ? ($__internal_compile_84["landmarkName"] ?? null) : null), 197, $this->source), ["&#039;" => "-", "&amp;" => "&"])), "html", null, true);
                    yield "\">
                            <div class=\"pulse\"></div>
                            <a class=\"pin-redirection\" href=\"javascript:;\"></a>
                            <a class=\"\" href=\"javascript:;\">
                                <p class=\"marker-details tooltip-txt\">";
                    // line 201
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed((($__internal_compile_85 = $context["item"]) && is_array($__internal_compile_85) || $__internal_compile_85 instanceof ArrayAccess ? ($__internal_compile_85["landmarkName"] ?? null) : null), 201, $this->source));
                    yield "</p>
                            </a>
                            <div class=\"marker-details redirection-details\">
                                <img src=\"";
                    // line 204
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_86 = $context["item"]) && is_array($__internal_compile_86) || $__internal_compile_86 instanceof ArrayAccess ? ($__internal_compile_86["landmarkImage"] ?? null) : null), 204, $this->source), "html", null, true);
                    yield "\" alt=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed((($__internal_compile_87 = $context["item"]) && is_array($__internal_compile_87) || $__internal_compile_87 instanceof ArrayAccess ? ($__internal_compile_87["landmarkName"] ?? null) : null), 204, $this->source));
                    yield "\">
                                <a class=\"redirection-details-close\" href=\"javascript:;\">
                                    <img src=\"/images/static/close.svg\" alt=\"\" />
                                </a>
                                <a target=\"_blank\" href=\"";
                    // line 208
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_88 = $context["item"]) && is_array($__internal_compile_88) || $__internal_compile_88 instanceof ArrayAccess ? ($__internal_compile_88["landmarkUrl"] ?? null) : null), 208, $this->source), "html", null, true);
                    yield "\"><p>";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed((($__internal_compile_89 = $context["item"]) && is_array($__internal_compile_89) || $__internal_compile_89 instanceof ArrayAccess ? ($__internal_compile_89["landmarkName"] ?? null) : null), 208, $this->source));
                    yield "</p>
                                <img src=\"/images/static/arrow-right-navy.svg\" alt=\"\"></a>
                            </div>
                        </div>
                    ";
                } else {
                    // line 213
                    yield "                        <a class=\"marker-all map-pin ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim($this->sandbox->ensureToStringAllowed((($__internal_compile_90 = $context["item"]) && is_array($__internal_compile_90) || $__internal_compile_90 instanceof ArrayAccess ? ($__internal_compile_90["cssClass"] ?? null) : null), 213, $this->source)), "html", null, true);
                    yield " active\" style=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_91 = $context["item"]) && is_array($__internal_compile_91) || $__internal_compile_91 instanceof ArrayAccess ? ($__internal_compile_91["landmarkPosition"] ?? null) : null), 213, $this->source), "html", null, true);
                    yield "\" data-tag=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), Twig\Extension\CoreExtension::replace($this->sandbox->ensureToStringAllowed((($__internal_compile_92 = $context["item"]) && is_array($__internal_compile_92) || $__internal_compile_92 instanceof ArrayAccess ? ($__internal_compile_92["landmarkName"] ?? null) : null), 213, $this->source), ["&#039;" => "-", "&amp;" => "&"])), "html", null, true);
                    yield "\">
\t\t\t\t\t\t\t<div class=\"pulse\"></div>
                            <p class=\"marker-details tooltip-txt\">";
                    // line 215
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_93 = $context["item"]) && is_array($__internal_compile_93) || $__internal_compile_93 instanceof ArrayAccess ? ($__internal_compile_93["landmarkName"] ?? null) : null), 215, $this->source), "html", null, true);
                    yield "</p>
                        </a>
                    ";
                }
                // line 218
                yield "                ";
            }
            // line 219
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 220
        yield "            ";
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
            // line 221
            yield "                ";
            $context["title"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed((($__internal_compile_94 = (($__internal_compile_95 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_96 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 221)) && is_array($__internal_compile_96) || $__internal_compile_96 instanceof ArrayAccess ? ($__internal_compile_96["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 221), "render_tokens", [], "any", false, false, true, 221)) && is_array($__internal_compile_95) || $__internal_compile_95 instanceof ArrayAccess ? ($__internal_compile_95[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 221)] ?? null) : null)) && is_array($__internal_compile_94) || $__internal_compile_94 instanceof ArrayAccess ? ($__internal_compile_94["{{ field_hero_image_title }}"] ?? null) : null), 221, $this->source)));
            // line 222
            yield "                ";
            $context["aminitesType"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed((($__internal_compile_97 = (($__internal_compile_98 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_99 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 222)) && is_array($__internal_compile_99) || $__internal_compile_99 instanceof ArrayAccess ? ($__internal_compile_99["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 222), "render_tokens", [], "any", false, false, true, 222)) && is_array($__internal_compile_98) || $__internal_compile_98 instanceof ArrayAccess ? ($__internal_compile_98[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 222)] ?? null) : null)) && is_array($__internal_compile_97) || $__internal_compile_97 instanceof ArrayAccess ? ($__internal_compile_97["{{ field_amenity_type }}"] ?? null) : null), 222, $this->source)));
            // line 223
            yield "                ";
            $context["hero_image"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed((($__internal_compile_100 = (($__internal_compile_101 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_102 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 223)) && is_array($__internal_compile_102) || $__internal_compile_102 instanceof ArrayAccess ? ($__internal_compile_102["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 223), "render_tokens", [], "any", false, false, true, 223)) && is_array($__internal_compile_101) || $__internal_compile_101 instanceof ArrayAccess ? ($__internal_compile_101[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 223)] ?? null) : null)) && is_array($__internal_compile_100) || $__internal_compile_100 instanceof ArrayAccess ? ($__internal_compile_100["{{ field_hero_image }}"] ?? null) : null), 223, $this->source)));
            // line 224
            yield "                ";
            $context["link"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed((($__internal_compile_103 = (($__internal_compile_104 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_105 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 224)) && is_array($__internal_compile_105) || $__internal_compile_105 instanceof ArrayAccess ? ($__internal_compile_105["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 224), "render_tokens", [], "any", false, false, true, 224)) && is_array($__internal_compile_104) || $__internal_compile_104 instanceof ArrayAccess ? ($__internal_compile_104[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 224)] ?? null) : null)) && is_array($__internal_compile_103) || $__internal_compile_103 instanceof ArrayAccess ? ($__internal_compile_103["{{ view_node }}"] ?? null) : null), 224, $this->source)));
            // line 225
            yield "                ";
            $context["position"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed((($__internal_compile_106 = (($__internal_compile_107 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_108 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 225)) && is_array($__internal_compile_108) || $__internal_compile_108 instanceof ArrayAccess ? ($__internal_compile_108["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 225), "render_tokens", [], "any", false, false, true, 225)) && is_array($__internal_compile_107) || $__internal_compile_107 instanceof ArrayAccess ? ($__internal_compile_107[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 225)] ?? null) : null)) && is_array($__internal_compile_106) || $__internal_compile_106 instanceof ArrayAccess ? ($__internal_compile_106["{{ field_position }}"] ?? null) : null), 225, $this->source)));
            // line 226
            yield "                ";
            $context["aminityTag"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed((($__internal_compile_109 = (($__internal_compile_110 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_111 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 226)) && is_array($__internal_compile_111) || $__internal_compile_111 instanceof ArrayAccess ? ($__internal_compile_111["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 226), "render_tokens", [], "any", false, false, true, 226)) && is_array($__internal_compile_110) || $__internal_compile_110 instanceof ArrayAccess ? ($__internal_compile_110[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 226)] ?? null) : null)) && is_array($__internal_compile_109) || $__internal_compile_109 instanceof ArrayAccess ? ($__internal_compile_109["{{ field_amenity_tags }}"] ?? null) : null), 226, $this->source)));
            // line 227
            yield "                ";
            $context["suggestions"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed((($__internal_compile_112 = (($__internal_compile_113 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_114 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 227)) && is_array($__internal_compile_114) || $__internal_compile_114 instanceof ArrayAccess ? ($__internal_compile_114["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 227), "render_tokens", [], "any", false, false, true, 227)) && is_array($__internal_compile_113) || $__internal_compile_113 instanceof ArrayAccess ? ($__internal_compile_113[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 227)] ?? null) : null)) && is_array($__internal_compile_112) || $__internal_compile_112 instanceof ArrayAccess ? ($__internal_compile_112["{{ field_autosuggestion_keywords }}"] ?? null) : null), 227, $this->source)));
            // line 228
            yield "\t            ";
            $context["isRecommended"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed((($__internal_compile_115 = (($__internal_compile_116 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_117 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 228)) && is_array($__internal_compile_117) || $__internal_compile_117 instanceof ArrayAccess ? ($__internal_compile_117["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 228), "render_tokens", [], "any", false, false, true, 228)) && is_array($__internal_compile_116) || $__internal_compile_116 instanceof ArrayAccess ? ($__internal_compile_116[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 228)] ?? null) : null)) && is_array($__internal_compile_115) || $__internal_compile_115 instanceof ArrayAccess ? ($__internal_compile_115["{{ field_is_recommended }}"] ?? null) : null), 228, $this->source)));
            // line 229
            yield "                ";
            $context["suggestionTag"] = "";
            // line 230
            yield "                ";
            $context["isRecommend"] = "";
            // line 231
            yield "
\t\t";
            // line 232
            $context["allSuggs"] = Twig\Extension\CoreExtension::split($this->env->getCharset(), Twig\Extension\CoreExtension::replace(Twig\Extension\CoreExtension::trim($this->sandbox->ensureToStringAllowed(($context["suggestions"] ?? null), 232, $this->source)), [", " => ",", " ," => ",", "&#039;" => "-", "&amp;" => "&"]), ",");
            // line 233
            yield "                ";
            $context["allCapSuggs"] = [];
            // line 234
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["allSuggs"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["sugg"]) {
                // line 235
                yield "                    ";
                $context["allCapSuggs"] = Twig\Extension\CoreExtension::merge($this->sandbox->ensureToStringAllowed(($context["allCapSuggs"] ?? null), 235, $this->source), [Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), $this->sandbox->ensureToStringAllowed($context["sugg"], 235, $this->source))]);
                // line 236
                yield "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sugg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 237
            yield "                ";
            $context["suggestionTag"] = Twig\Extension\CoreExtension::join($this->sandbox->ensureToStringAllowed(($context["allCapSuggs"] ?? null), 237, $this->source), ",");
            yield "   

                ";
            // line 239
            if ((($context["isRecommended"] ?? null) == "Yes")) {
                // line 240
                yield "                    ";
                $context["isRecommend"] = ",recommend";
                // line 241
                yield "                ";
            }
            // line 242
            yield "
                ";
            // line 243
            if (($context["position"] ?? null)) {
                // line 244
                yield "\t\t\t";
                if (((((($context["aminitesType"] ?? null) == "Restaurants") || (($context["aminitesType"] ?? null) == "Food Trucks")) || (($context["aminitesType"] ?? null) == "مطاعم")) || (($context["aminitesType"] ?? null) == "شاحنات الغذاء"))) {
                    // line 245
                    yield "                        <a class=\"marker-all map-pin green-pin active\" style=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["position"] ?? null), 245, $this->source), "html", null, true);
                    yield "\" href=\"javascript:;\" data-toggle=\"modal\" data-target=\"#";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::lower($this->env->getCharset(), Twig\Extension\CoreExtension::replace($this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 245, $this->source), [" " => "-", "." => "-", "&#039;" => "-", "&amp;" => "-"])), "html", null, true);
                    yield "\" data-tag=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), Twig\Extension\CoreExtension::replace($this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 245, $this->source), ["&#039;" => "-", "&amp;" => "&"])), "html", null, true);
                    yield ",";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::lower($this->env->getCharset(), Twig\Extension\CoreExtension::replace($this->sandbox->ensureToStringAllowed(($context["aminitesType"] ?? null), 245, $this->source), [" " => "-", "." => "-", "&#039;" => "-", "&amp;" => "-"])), "html", null, true);
                    yield ",";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::lower($this->env->getCharset(), Twig\Extension\CoreExtension::replace($this->sandbox->ensureToStringAllowed(($context["aminityTag"] ?? null), 245, $this->source), [" " => "-", "." => "-", "&#039;" => "-", "&amp;" => "-"])), "html", null, true);
                    yield ",";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim($this->sandbox->ensureToStringAllowed(($context["suggestionTag"] ?? null), 245, $this->source)), "html", null, true);
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["isRecommend"] ?? null), 245, $this->source), "html", null, true);
                    yield "\">
                            <div class=\"pulse\"></div>
                            <p class=\"marker-details tooltip-txt\">";
                    // line 247
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 247, $this->source));
                    yield "</p>
                        </a>
\t\t    ";
                } elseif (((((                // line 249
($context["aminitesType"] ?? null) == "Facilities") || (($context["aminitesType"] ?? null) == "Activities")) || (($context["aminitesType"] ?? null) == "رياضات")) || (($context["aminitesType"] ?? null) == "المنشآت"))) {
                    // line 250
                    yield "                        <div class=\"redirection marker-all map-pin navy-pin active\" style=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["position"] ?? null), 250, $this->source), "html", null, true);
                    yield "\" data-tag=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), Twig\Extension\CoreExtension::replace($this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 250, $this->source), ["&#039;" => "-", "&amp;" => "&"])), "html", null, true);
                    yield ",";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::lower($this->env->getCharset(), Twig\Extension\CoreExtension::replace($this->sandbox->ensureToStringAllowed(($context["aminitesType"] ?? null), 250, $this->source), [" " => "-", "&#039;" => "-", "&amp;" => "-"])), "html", null, true);
                    yield ",";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim($this->sandbox->ensureToStringAllowed(($context["suggestionTag"] ?? null), 250, $this->source)), "html", null, true);
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["isRecommend"] ?? null), 250, $this->source), "html", null, true);
                    yield ",";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::lower($this->env->getCharset(), Twig\Extension\CoreExtension::replace(Twig\Extension\CoreExtension::trim($this->sandbox->ensureToStringAllowed(($context["aminityTag"] ?? null), 250, $this->source)), [" ," => ",", ", " => ",", " " => "-", "." => "-", "&#039;" => "-", "&amp;" => "-"])), "html", null, true);
                    yield "\">
                            <div class=\"pulse\"></div>
                            <a class=\"pin-redirection\" href=\"javascript:;\"></a>
                            <a class=\"\" href=\"javascript:;\">
                                <p class=\"marker-details tooltip-txt\">";
                    // line 254
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 254, $this->source));
                    yield "</p>
                            </a>
                            <div class=\"marker-details redirection-details\">
                                <img src=\"";
                    // line 257
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["hero_image"] ?? null), 257, $this->source), "html", null, true);
                    yield "\" alt=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 257, $this->source));
                    yield "\">
                                <a class=\"redirection-details-close\" href=\"javascript:;\">
                                    <img src=\"/images/static/close.svg\" alt=\"\" />
                                </a>
                                <a target=\"_blank\" href=\"";
                    // line 261
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["link"] ?? null), 261, $this->source), "html", null, true);
                    yield "\"><p>";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 261, $this->source));
                    yield "</p>
                                <img src=\"/images/static/arrow-right-navy.svg\" alt=\"\"></a>
                            </div>
                    </div>
                ";
                }
                // line 266
                yield "               ";
            }
            // line 267
            yield "            ";
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
        // line 268
        yield "        </div>
        
        </div>
        <!-- //maps-zoomed-container -->
    </div>
    <!-- //maps-container-inner -->
    </div>
</div>
<div class=\"recommendation\" style='display:none;'>
    <img src=\"/images/static/search-navy.svg\" alt=\"Search Icon\" class=\"search-img\">
    <p class=\"w-80\">";
        // line 278
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["recommendation"] ?? null), 278, $this->source), "html", null, true);
        yield "</p>
    <a href=\"javascript:;\" class=\"re-close\"><img src=\"/images/static/close-navy.svg\" alt=\"Search Icon\" class=\"w-100\"></a>
</div>
<div class=\"inside-wrapper\">
    <div class=\"inside \">
    <div class=\"search\">
        <div class=\"related-content related-interaction white-bg\">
        <div class=\"container-fluid\">
            <div class=\"panel-group\" id=\"accordion\" role=\"tablist\" aria-multiselectable=\"true\">
            <div class=\"panel panel-default\">
                <div class=\"row justify-content-end\">
                <div class=\"col-lg-8 py-4 order-2 order-md-1\">
                    <div class=\"input-group\">
                        <input type=\"text\" class=\"form-control\" placeholder=\"";
        // line 291
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("What are you looking for?"));
        yield "\" aria-label=\"Search field\" aria-describedby=\"\" id=\"search-text\">
                    </div>
                    <ul class=\"input-suggestions interactive-tags py-4\" style=\"display: none;\">
                        ";
        // line 294
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["autosuggest"] ?? null));
        foreach ($context['_seq'] as $context["skey"] => $context["sitem"]) {
            // line 295
            yield "                            ";
            if (($context["sitem"] != "")) {
                // line 296
                yield "                                <li><a href=\"javascript:;\" class=\"\" data-tag=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), Twig\Extension\CoreExtension::trim($this->sandbox->ensureToStringAllowed($context["sitem"], 296, $this->source))), "html", null, true);
                yield "\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim($this->sandbox->ensureToStringAllowed($context["sitem"], 296, $this->source)), "html", null, true);
                yield "</a></li>
                            ";
            }
            // line 298
            yield "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['skey'], $context['sitem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 299
        yield "                    </ul>                  
                    <ul class=\"interactive-rec-tags py-4\" style=\"display: none;\">
                    ";
        // line 301
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
            // line 302
            yield "                        ";
            $context["isRecommended"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed((($__internal_compile_118 = (($__internal_compile_119 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_120 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 302)) && is_array($__internal_compile_120) || $__internal_compile_120 instanceof ArrayAccess ? ($__internal_compile_120["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 302), "render_tokens", [], "any", false, false, true, 302)) && is_array($__internal_compile_119) || $__internal_compile_119 instanceof ArrayAccess ? ($__internal_compile_119[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 302)] ?? null) : null)) && is_array($__internal_compile_118) || $__internal_compile_118 instanceof ArrayAccess ? ($__internal_compile_118["{{ field_is_recommended }}"] ?? null) : null), 302, $this->source)));
            // line 303
            yield "                        ";
            if ((($context["isRecommended"] ?? null) == "Yes")) {
                // line 304
                yield "                            <li><a href=\"javascript:;\" class=\"\" data-tag=\"recommend\"></a>Recommended</li>
                        ";
            }
            // line 306
            yield "                    ";
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
        // line 307
        yield "                    </ul>
                </div>
                <div class=\"col-lg-3 order-1 order-md-2 panel-heading navy-bg\" role=\"tab\" id=\"headingOne\">
                    <a role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseOne\" aria-expanded=\"false\" aria-controls=\"collapseOne\">
                        ";
        // line 311
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Legend"));
        yield " 
                    </a>
                </div>
                </div>
                <div id=\"collapseOne\" class=\"panel-collapse collapse in\" role=\"tabpanel\" aria-labelledby=\"headingOne\">
                <div class=\"row justify-content-end\">
                    <div class=\"col-11 overflow-auto\">
                    <ul class=\"tags-listing trails-listing\">
                    ";
        // line 319
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["trails"] ?? null));
        foreach ($context['_seq'] as $context["trkey"] => $context["trailsItem"]) {
            // line 320
            yield "                        <li>
                        <div class=\"form-check ";
            // line 321
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_121 = $context["trailsItem"]) && is_array($__internal_compile_121) || $__internal_compile_121 instanceof ArrayAccess ? ($__internal_compile_121["color"] ?? null) : null), 321, $this->source), "html", null, true);
            yield " form-check-inline\" data-tag=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::lower($this->env->getCharset(), Twig\Extension\CoreExtension::replace($this->sandbox->ensureToStringAllowed((($__internal_compile_122 = $context["trailsItem"]) && is_array($__internal_compile_122) || $__internal_compile_122 instanceof ArrayAccess ? ($__internal_compile_122["trailsName"] ?? null) : null), 321, $this->source), [" " => "-", "." => "-", "&#039;" => "-", "&amp;" => "-"])), "html", null, true);
            yield "\">
                            <input class=\"form-check-input\" type=\"checkbox\" name=\"flexRadioDefault\" id=\"inlineCheckbox";
            // line 322
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["trkey"], 322, $this->source), "html", null, true);
            yield "\" value=\"option";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["trkey"], 322, $this->source), "html", null, true);
            yield "\">
                            <label class=\"form-check-label\" for=\"inlineCheckbox";
            // line 323
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["trkey"], 323, $this->source), "html", null, true);
            yield "\">
                            ";
            // line 324
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_123 = $context["trailsItem"]) && is_array($__internal_compile_123) || $__internal_compile_123 instanceof ArrayAccess ? ($__internal_compile_123["trailsTitle"] ?? null) : null), 324, $this->source), "html", null, true);
            yield "
                            </label>
                        </div>
                        </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['trkey'], $context['trailsItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 329
        yield "                    </ul>
                    </div>
                </div>
                <div class=\"row justify-content-center no-border\">
                    <div class=\"col-10\">
\t\t\t";
        // line 334
        $context["newAmty"] = [];
        // line 335
        yield "                        <ul class=\"tags-listing interactive-tags\">
                            ";
        // line 336
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
            // line 337
            yield "                                ";
            $context["aminitesType"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed((($__internal_compile_124 = (($__internal_compile_125 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_126 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 337)) && is_array($__internal_compile_126) || $__internal_compile_126 instanceof ArrayAccess ? ($__internal_compile_126["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 337), "render_tokens", [], "any", false, false, true, 337)) && is_array($__internal_compile_125) || $__internal_compile_125 instanceof ArrayAccess ? ($__internal_compile_125[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 337)] ?? null) : null)) && is_array($__internal_compile_124) || $__internal_compile_124 instanceof ArrayAccess ? ($__internal_compile_124["{{ field_amenity_type }}"] ?? null) : null), 337, $this->source)));
            // line 338
            yield "                                ";
            $context["position"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed((($__internal_compile_127 = (($__internal_compile_128 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_129 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 338)) && is_array($__internal_compile_129) || $__internal_compile_129 instanceof ArrayAccess ? ($__internal_compile_129["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 338), "render_tokens", [], "any", false, false, true, 338)) && is_array($__internal_compile_128) || $__internal_compile_128 instanceof ArrayAccess ? ($__internal_compile_128[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 338)] ?? null) : null)) && is_array($__internal_compile_127) || $__internal_compile_127 instanceof ArrayAccess ? ($__internal_compile_127["{{ field_position }}"] ?? null) : null), 338, $this->source)));
            // line 339
            yield "                                ";
            $context["aminityTag"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed((($__internal_compile_130 = (($__internal_compile_131 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_132 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 339)) && is_array($__internal_compile_132) || $__internal_compile_132 instanceof ArrayAccess ? ($__internal_compile_132["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 339), "render_tokens", [], "any", false, false, true, 339)) && is_array($__internal_compile_131) || $__internal_compile_131 instanceof ArrayAccess ? ($__internal_compile_131[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 339)] ?? null) : null)) && is_array($__internal_compile_130) || $__internal_compile_130 instanceof ArrayAccess ? ($__internal_compile_130["{{ field_amenity_tags }}"] ?? null) : null), 339, $this->source)));
            // line 340
            yield "
                                ";
            // line 341
            if ((($context["position"] ?? null) != "")) {
                // line 342
                yield "                                ";
                $context["amtag"] = (($this->sandbox->ensureToStringAllowed(($context["aminityTag"] ?? null), 342, $this->source) . ",") . $this->sandbox->ensureToStringAllowed(($context["aminitesType"] ?? null), 342, $this->source));
                // line 343
                yield "                                ";
                $context["attags"] = Twig\Extension\CoreExtension::split($this->env->getCharset(), $this->sandbox->ensureToStringAllowed(($context["amtag"] ?? null), 343, $this->source), ",");
                // line 344
                yield "                               ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["attags"] ?? null));
                foreach ($context['_seq'] as $context["attagkey"] => $context["tag"]) {
                    // line 345
                    yield "                                    ";
                    if (!CoreExtension::inFilter(Twig\Extension\CoreExtension::trim($context["tag"]), ($context["newAmty"] ?? null))) {
                        // line 346
                        yield "                                    ";
                        $context["newAmty"] = Twig\Extension\CoreExtension::merge($this->sandbox->ensureToStringAllowed(($context["newAmty"] ?? null), 346, $this->source), [Twig\Extension\CoreExtension::trim($this->sandbox->ensureToStringAllowed($context["tag"], 346, $this->source))]);
                        // line 347
                        yield "                                    ";
                    }
                    // line 348
                    yield "                               ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['attagkey'], $context['tag'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 349
                yield "                            ";
            }
            // line 350
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 351
        yield "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["newAmty"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["newTag"]) {
            // line 352
            yield "                            ";
            if (($context["newTag"] != "")) {
                // line 353
                yield "                    \t\t<li><a href=\"javascript:;\" class=\"white-btn ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["newTag"], 353, $this->source), "html", null, true);
                yield "\" data-tag=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::lower($this->env->getCharset(), Twig\Extension\CoreExtension::replace(Twig\Extension\CoreExtension::trim($this->sandbox->ensureToStringAllowed($context["newTag"], 353, $this->source)), [" " => "-", "." => "-", "&#039;" => "-", "&amp;" => "-"])), "html", null, true);
                yield "\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim($this->sandbox->ensureToStringAllowed($context["newTag"], 353, $this->source)), "html", null, true);
                yield "</a></li>
                    \t    ";
            }
            // line 355
            yield "                \t ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['newTag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 356
        yield "                        </ul>
                    </div>
                </div>
                <div class=\"mb-2 col-12 col-md-11 interactive-submit\">
                    <a href=\"javascript:;\" class=\"btn border-btn border-yellow-btn\">";
        // line 360
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Submit"));
        yield "</a>
                </div>
                <div class=\"row\">
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
<!------------------------------------  END INSIDE SECTIONS ------------------------------>

</div>
    <div class=\"zooming-wrapper\">
        <div class=\"map-control map-control-reset\"></div>
        <div class=\"map-control map-control-zoomout\"></div>
        <div class=\"map-control map-control-zoomin\"></div>
    </div>
</div>

<!------------------------------------  RESTAURANTS MODALS START HERE ------------------------------>

<ul class=\"modal-listing-wrapper interactive-modal-listing\">
    ";
        // line 384
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
            // line 385
            yield "        ";
            $context["logo"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed((($__internal_compile_133 = (($__internal_compile_134 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_135 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 385)) && is_array($__internal_compile_135) || $__internal_compile_135 instanceof ArrayAccess ? ($__internal_compile_135["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 385), "render_tokens", [], "any", false, false, true, 385)) && is_array($__internal_compile_134) || $__internal_compile_134 instanceof ArrayAccess ? ($__internal_compile_134[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 385)] ?? null) : null)) && is_array($__internal_compile_133) || $__internal_compile_133 instanceof ArrayAccess ? ($__internal_compile_133["{{ field_amenity_icon }}"] ?? null) : null), 385, $this->source)));
            // line 386
            yield "        ";
            $context["title"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed((($__internal_compile_136 = (($__internal_compile_137 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_138 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 386)) && is_array($__internal_compile_138) || $__internal_compile_138 instanceof ArrayAccess ? ($__internal_compile_138["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 386), "render_tokens", [], "any", false, false, true, 386)) && is_array($__internal_compile_137) || $__internal_compile_137 instanceof ArrayAccess ? ($__internal_compile_137[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 386)] ?? null) : null)) && is_array($__internal_compile_136) || $__internal_compile_136 instanceof ArrayAccess ? ($__internal_compile_136["{{ field_hero_image_title }}"] ?? null) : null), 386, $this->source)));
            // line 387
            yield "        ";
            $context["assetSubType"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed((($__internal_compile_139 = (($__internal_compile_140 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_141 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 387)) && is_array($__internal_compile_141) || $__internal_compile_141 instanceof ArrayAccess ? ($__internal_compile_141["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 387), "render_tokens", [], "any", false, false, true, 387)) && is_array($__internal_compile_140) || $__internal_compile_140 instanceof ArrayAccess ? ($__internal_compile_140[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 387)] ?? null) : null)) && is_array($__internal_compile_139) || $__internal_compile_139 instanceof ArrayAccess ? ($__internal_compile_139["{{ field_amenity_tags }}"] ?? null) : null), 387, $this->source)));
            // line 388
            yield "        ";
            $context["hero_image"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed((($__internal_compile_142 = (($__internal_compile_143 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_144 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 388)) && is_array($__internal_compile_144) || $__internal_compile_144 instanceof ArrayAccess ? ($__internal_compile_144["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 388), "render_tokens", [], "any", false, false, true, 388)) && is_array($__internal_compile_143) || $__internal_compile_143 instanceof ArrayAccess ? ($__internal_compile_143[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 388)] ?? null) : null)) && is_array($__internal_compile_142) || $__internal_compile_142 instanceof ArrayAccess ? ($__internal_compile_142["{{ field_hero_image }}"] ?? null) : null), 388, $this->source)));
            // line 389
            yield "        ";
            $context["desc"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed((($__internal_compile_145 = (($__internal_compile_146 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_147 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 389)) && is_array($__internal_compile_147) || $__internal_compile_147 instanceof ArrayAccess ? ($__internal_compile_147["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 389), "render_tokens", [], "any", false, false, true, 389)) && is_array($__internal_compile_146) || $__internal_compile_146 instanceof ArrayAccess ? ($__internal_compile_146[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 389)] ?? null) : null)) && is_array($__internal_compile_145) || $__internal_compile_145 instanceof ArrayAccess ? ($__internal_compile_145["{{ field_intro_description }}"] ?? null) : null), 389, $this->source)));
            // line 390
            yield "        ";
            $context["position"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed((($__internal_compile_148 = (($__internal_compile_149 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_150 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 390)) && is_array($__internal_compile_150) || $__internal_compile_150 instanceof ArrayAccess ? ($__internal_compile_150["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 390), "render_tokens", [], "any", false, false, true, 390)) && is_array($__internal_compile_149) || $__internal_compile_149 instanceof ArrayAccess ? ($__internal_compile_149[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 390)] ?? null) : null)) && is_array($__internal_compile_148) || $__internal_compile_148 instanceof ArrayAccess ? ($__internal_compile_148["{{ field_position }}"] ?? null) : null), 390, $this->source)));
            // line 391
            yield "        ";
            $context["sub_desc"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed((($__internal_compile_151 = (($__internal_compile_152 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_153 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 391)) && is_array($__internal_compile_153) || $__internal_compile_153 instanceof ArrayAccess ? ($__internal_compile_153["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 391), "render_tokens", [], "any", false, false, true, 391)) && is_array($__internal_compile_152) || $__internal_compile_152 instanceof ArrayAccess ? ($__internal_compile_152[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 391)] ?? null) : null)) && is_array($__internal_compile_151) || $__internal_compile_151 instanceof ArrayAccess ? ($__internal_compile_151["{{ field_intro_short_description }}"] ?? null) : null), 391, $this->source)));
            // line 392
            yield "        ";
            $context["pdf_url"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed((($__internal_compile_154 = (($__internal_compile_155 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_156 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 392)) && is_array($__internal_compile_156) || $__internal_compile_156 instanceof ArrayAccess ? ($__internal_compile_156["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 392), "render_tokens", [], "any", false, false, true, 392)) && is_array($__internal_compile_155) || $__internal_compile_155 instanceof ArrayAccess ? ($__internal_compile_155[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 392)] ?? null) : null)) && is_array($__internal_compile_154) || $__internal_compile_154 instanceof ArrayAccess ? ($__internal_compile_154["{{ field_upload }}"] ?? null) : null), 392, $this->source)));
            // line 393
            yield "        ";
            $context["gallery"] = Twig\Extension\CoreExtension::split($this->env->getCharset(), Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed((($__internal_compile_157 = (($__internal_compile_158 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_159 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 393)) && is_array($__internal_compile_159) || $__internal_compile_159 instanceof ArrayAccess ? ($__internal_compile_159["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 393), "render_tokens", [], "any", false, false, true, 393)) && is_array($__internal_compile_158) || $__internal_compile_158 instanceof ArrayAccess ? ($__internal_compile_158[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 393)] ?? null) : null)) && is_array($__internal_compile_157) || $__internal_compile_157 instanceof ArrayAccess ? ($__internal_compile_157["{{ field_amenity_images }}"] ?? null) : null), 393, $this->source))), ",");
            // line 394
            yield "        ";
            $context["images_title"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed((($__internal_compile_160 = (($__internal_compile_161 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_162 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 394)) && is_array($__internal_compile_162) || $__internal_compile_162 instanceof ArrayAccess ? ($__internal_compile_162["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 394), "render_tokens", [], "any", false, false, true, 394)) && is_array($__internal_compile_161) || $__internal_compile_161 instanceof ArrayAccess ? ($__internal_compile_161[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 394)] ?? null) : null)) && is_array($__internal_compile_160) || $__internal_compile_160 instanceof ArrayAccess ? ($__internal_compile_160["{{ field_amenity_images_title }}"] ?? null) : null), 394, $this->source)));
            // line 395
            yield "        ";
            $context["aminitesType"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed((($__internal_compile_163 = (($__internal_compile_164 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_165 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 395)) && is_array($__internal_compile_165) || $__internal_compile_165 instanceof ArrayAccess ? ($__internal_compile_165["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 395), "render_tokens", [], "any", false, false, true, 395)) && is_array($__internal_compile_164) || $__internal_compile_164 instanceof ArrayAccess ? ($__internal_compile_164[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 395)] ?? null) : null)) && is_array($__internal_compile_163) || $__internal_compile_163 instanceof ArrayAccess ? ($__internal_compile_163["{{ field_amenity_type }}"] ?? null) : null), 395, $this->source)));
            // line 396
            yield "        ";
            if (($context["position"] ?? null)) {
                // line 397
                yield "\t    ";
                if (((((($context["aminitesType"] ?? null) == "Restaurants") || (($context["aminitesType"] ?? null) == "Food Trucks")) || (($context["aminitesType"] ?? null) == "مطاعم")) || (($context["aminitesType"] ?? null) == "شاحنات الغذاء"))) {
                    // line 398
                    yield "        <li class=\"modal fade\" id=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::lower($this->env->getCharset(), Twig\Extension\CoreExtension::replace($this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 398, $this->source), [" " => "-", "." => "-", "&#039;" => "-", "&amp;" => "-"])), "html", null, true);
                    yield "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"footballLabel\"  aria-hidden=\"true\">
        <div class=\"inside-wrapper modal-wrapper\">
            <div class=\"container\">
            <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
                <div class=\"modal-content\">
                <div class=\"modal-header\">                          
                    <div class=\"modal-header-bg navy-bg\">
                        ";
                    // line 405
                    if (($context["hero_image"] ?? null)) {
                        // line 406
                        yield "                        <img src=\"";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["hero_image"] ?? null), 406, $this->source), "html", null, true);
                        yield "\" alt=\"\">
                        ";
                    }
                    // line 408
                    yield "                    </div>                          
                    <div class=\"modal-header-wrapper\">                            
                        <div class=\"modal-logo-wrapper\">
                        ";
                    // line 411
                    if (($context["logo"] ?? null)) {
                        // line 412
                        yield "                            <img class=\"modal-logo-top\" src=\"";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["logo"] ?? null), 412, $this->source), "html", null, true);
                        yield "\" alt=\"Resto logo\">
                        ";
                    }
                    // line 414
                    yield "                        </div>                            
                    <div class=\"modal-header-content\">
                        <h3 class=\"modal-title\" id=\"footballLabel\">";
                    // line 416
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 416, $this->source));
                    yield "</h3>
                    </div>
                    </div>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\"><img src=\"/images/static/close.svg\" alt=\"close\"></span>
                    </button>
                </div>
                <div class=\"modal-body\">
                    <div class=\"container-fluid\">
                    <div class=\"row\">
                        ";
                    // line 426
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_166 = (($__internal_compile_167 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_168 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 426)) && is_array($__internal_compile_168) || $__internal_compile_168 instanceof ArrayAccess ? ($__internal_compile_168["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 426), "render_tokens", [], "any", false, false, true, 426)) && is_array($__internal_compile_167) || $__internal_compile_167 instanceof ArrayAccess ? ($__internal_compile_167[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 426)] ?? null) : null)) && is_array($__internal_compile_166) || $__internal_compile_166 instanceof ArrayAccess ? ($__internal_compile_166["{{ field_info_block }}"] ?? null) : null), 426, $this->source), "html", null, true);
                    yield "
                    </div>
                    <div class=\"row py-4\">
                        <div class=\"col-lg-4\">
                        <p class=\"detailed-txt bold detailed-desc\">";
                    // line 430
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["sub_desc"] ?? null), 430, $this->source));
                    yield "</p>
                        </div>
                        <div class=\"col-lg-8\">
                        <p class=\"detailed-txt detailed-desc\"> ";
                    // line 433
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["desc"] ?? null), 433, $this->source));
                    yield "</p>
                        </div>
                    </div>
                    </div>
                </div>
                ";
                    // line 438
                    if ((($__internal_compile_169 = ($context["gallery"] ?? null)) && is_array($__internal_compile_169) || $__internal_compile_169 instanceof ArrayAccess ? ($__internal_compile_169[0] ?? null) : null)) {
                        // line 439
                        yield "                <div class=\"modal-footer swiper-menu\">
                    <div class=\"modal-footer-title\">";
                        // line 440
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["images_title"] ?? null), 440, $this->source), "html", null, true);
                        yield "</div>
                    <!-- Swiper -->
                    <div class=\"swiper-container\">
                    <div class=\"swiper-wrapper\">
                    ";
                        // line 444
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(($context["gallery"] ?? null));
                        foreach ($context['_seq'] as $context["gkey"] => $context["item"]) {
                            // line 445
                            yield "                        <div class=\"swiper-slide\">
                            <div class=\"card-wrapper\">
                                <div class=\"card event\">
                                    <div class=\"card-img-wrapper\">
                                        <img class=\"card-img-top\" src=\"";
                            // line 449
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_170 = ($context["gallery"] ?? null)) && is_array($__internal_compile_170) || $__internal_compile_170 instanceof ArrayAccess ? ($__internal_compile_170[$context["gkey"]] ?? null) : null), 449, $this->source), "html", null, true);
                            yield "\" alt=\"Card image cap\">
                                    </div>
                                </div>
                            </div>
                        </div>
                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['gkey'], $context['item'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 454
                        yield "                    
                    </div>
                    <div class=\"swiper-arrows\">
                        <div class=\"swiper-button-prev\"></div>
                        <div class=\"swiper-button-next\"></div>
                    </div>
                    </div>
                </div>
                ";
                    }
                    // line 463
                    yield "                </div>
            </div>
            </div>
        </div>
    </li>
    ";
                }
                // line 469
                yield "    ";
            }
            // line 470
            yield "    ";
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
        // line 471
        yield "  </ul>

  <!------------------------------------  RESTAURANTS MODALS END HERE ------------------------------>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["langcode", "trails", "landmarks", "rows", "loop", "autosuggest"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/custom/hudayriyat/templates/views/views-view-unformatted--interactivemap-list.html.twig";
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
        return array (  1258 => 471,  1244 => 470,  1241 => 469,  1233 => 463,  1222 => 454,  1210 => 449,  1204 => 445,  1200 => 444,  1193 => 440,  1190 => 439,  1188 => 438,  1180 => 433,  1174 => 430,  1167 => 426,  1154 => 416,  1150 => 414,  1144 => 412,  1142 => 411,  1137 => 408,  1131 => 406,  1129 => 405,  1118 => 398,  1115 => 397,  1112 => 396,  1109 => 395,  1106 => 394,  1103 => 393,  1100 => 392,  1097 => 391,  1094 => 390,  1091 => 389,  1088 => 388,  1085 => 387,  1082 => 386,  1079 => 385,  1062 => 384,  1035 => 360,  1029 => 356,  1023 => 355,  1013 => 353,  1010 => 352,  1005 => 351,  991 => 350,  988 => 349,  982 => 348,  979 => 347,  976 => 346,  973 => 345,  968 => 344,  965 => 343,  962 => 342,  960 => 341,  957 => 340,  954 => 339,  951 => 338,  948 => 337,  931 => 336,  928 => 335,  926 => 334,  919 => 329,  908 => 324,  904 => 323,  898 => 322,  892 => 321,  889 => 320,  885 => 319,  874 => 311,  868 => 307,  854 => 306,  850 => 304,  847 => 303,  844 => 302,  827 => 301,  823 => 299,  817 => 298,  809 => 296,  806 => 295,  802 => 294,  796 => 291,  780 => 278,  768 => 268,  754 => 267,  751 => 266,  741 => 261,  732 => 257,  726 => 254,  709 => 250,  707 => 249,  702 => 247,  685 => 245,  682 => 244,  680 => 243,  677 => 242,  674 => 241,  671 => 240,  669 => 239,  663 => 237,  657 => 236,  654 => 235,  649 => 234,  646 => 233,  644 => 232,  641 => 231,  638 => 230,  635 => 229,  632 => 228,  629 => 227,  626 => 226,  623 => 225,  620 => 224,  617 => 223,  614 => 222,  611 => 221,  593 => 220,  587 => 219,  584 => 218,  578 => 215,  568 => 213,  558 => 208,  549 => 204,  543 => 201,  531 => 197,  528 => 196,  526 => 195,  523 => 194,  520 => 193,  514 => 190,  510 => 189,  500 => 187,  490 => 182,  485 => 180,  480 => 178,  475 => 176,  463 => 172,  460 => 171,  457 => 170,  453 => 169,  444 => 162,  433 => 160,  429 => 159,  424 => 157,  410 => 145,  396 => 144,  393 => 143,  383 => 138,  374 => 134,  368 => 131,  351 => 127,  349 => 126,  344 => 124,  327 => 122,  324 => 121,  322 => 120,  319 => 119,  316 => 118,  313 => 117,  311 => 116,  305 => 114,  299 => 113,  296 => 112,  291 => 111,  288 => 110,  286 => 109,  283 => 108,  280 => 107,  277 => 106,  274 => 105,  271 => 104,  268 => 103,  265 => 102,  262 => 101,  259 => 100,  256 => 99,  253 => 98,  236 => 97,  233 => 96,  227 => 95,  224 => 94,  218 => 91,  208 => 89,  198 => 84,  189 => 80,  183 => 77,  171 => 73,  168 => 72,  166 => 71,  163 => 70,  160 => 69,  154 => 66,  150 => 65,  140 => 63,  130 => 58,  125 => 56,  120 => 54,  115 => 52,  103 => 48,  100 => 47,  97 => 46,  93 => 45,  83 => 37,  72 => 35,  68 => 34,  63 => 32,  54 => 25,  51 => 24,  48 => 23,  45 => 22,  42 => 21,  40 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/hudayriyat/templates/views/views-view-unformatted--interactivemap-list.html.twig", "C:\\xampp\\htdocs\\modorn\\web\\themes\\custom\\hudayriyat\\templates\\views\\views-view-unformatted--interactivemap-list.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 20, "set" => 21, "for" => 34);
        static $filters = array("escape" => 32, "render" => 32, "lower" => 35, "replace" => 35, "capitalize" => 48, "raw" => 77, "trim" => 89, "striptags" => 98, "split" => 109, "merge" => 112, "join" => 114, "t" => 291);
        static $functions = array("drupal_config" => 21, "drupal_view" => 32);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'for'],
                ['escape', 'render', 'lower', 'replace', 'capitalize', 'raw', 'trim', 'striptags', 'split', 'merge', 'join', 't'],
                ['drupal_config', 'drupal_view'],
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
