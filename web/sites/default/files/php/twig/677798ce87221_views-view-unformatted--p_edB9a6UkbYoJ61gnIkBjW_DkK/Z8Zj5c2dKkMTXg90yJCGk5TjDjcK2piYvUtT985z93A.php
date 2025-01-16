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

/* themes/custom/hudayriyat/templates/views/play/views-view-unformatted--play-hero-section.html.twig */
class __TwigTemplate_4686c0c8e338388154b7ff8a1c1dd070 extends Template
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
        yield "
";
        // line 21
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
            // line 22
            $context["thumbnail_image"] = (($__internal_compile_0 = (($__internal_compile_1 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_2 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 22)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 22), "render_tokens", [], "any", false, false, true, 22)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 22)] ?? null) : null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["{{ field_hero_image }}"] ?? null) : null);
            // line 23
            $context["hero_video"] = (($__internal_compile_3 = (($__internal_compile_4 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_5 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 23)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 23), "render_tokens", [], "any", false, false, true, 23)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 23)] ?? null) : null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["{{ field_hero_video }}"] ?? null) : null);
            // line 24
            $context["title"] = (($__internal_compile_6 = (($__internal_compile_7 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_8 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 24)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 24), "render_tokens", [], "any", false, false, true, 24)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 24)] ?? null) : null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["{{ field_hero_image_title }}"] ?? null) : null);
            // line 25
            $context["next_image"] = (($__internal_compile_9 = (($__internal_compile_10 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_11 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 25)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 25), "render_tokens", [], "any", false, false, true, 25)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 25)] ?? null) : null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["{{ field_link_image }}"] ?? null) : null);
            // line 26
            $context["previous_image"] = (($__internal_compile_12 = (($__internal_compile_13 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_14 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 26)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 26), "render_tokens", [], "any", false, false, true, 26)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 26)] ?? null) : null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["{{ field_previous_link_image }}"] ?? null) : null);
            // line 27
            $context["next_image1"] = ($context["next_image"] ?? null);
            // line 28
            $context["next_image2"] = ($context["next_image"] ?? null);
            // line 29
            $context["previous_image1"] = ($context["previous_image"] ?? null);
            // line 30
            $context["previous_image2"] = ($context["previous_image"] ?? null);
            // line 31
            $context["next_link_text"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed((($__internal_compile_15 = (($__internal_compile_16 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_17 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 31)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 31), "render_tokens", [], "any", false, false, true, 31)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 31)] ?? null) : null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["{{ field_landing_link_1 }}"] ?? null) : null), 31, $this->source)));
            // line 32
            $context["next_link_url"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed((($__internal_compile_18 = (($__internal_compile_19 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_20 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 32)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 32), "render_tokens", [], "any", false, false, true, 32)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 32)] ?? null) : null)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["{{ field_landing_link }}"] ?? null) : null), 32, $this->source)));
            // line 33
            $context["previous_link_text"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed((($__internal_compile_21 = (($__internal_compile_22 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_23 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 33)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 33), "render_tokens", [], "any", false, false, true, 33)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 33)] ?? null) : null)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21["{{ field_previous_landing_link_1 }}"] ?? null) : null), 33, $this->source)));
            // line 34
            $context["previous_link_url"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed((($__internal_compile_24 = (($__internal_compile_25 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_26 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 34)) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 34), "render_tokens", [], "any", false, false, true, 34)) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 34)] ?? null) : null)) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24["{{ field_previous_landing_link }}"] ?? null) : null), 34, $this->source)));
            // line 35
            $context["primaryColor"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed((($__internal_compile_27 = (($__internal_compile_28 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_29 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 35)) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 35), "render_tokens", [], "any", false, false, true, 35)) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 35)] ?? null) : null)) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27["{{ field_primary_color }}"] ?? null) : null), 35, $this->source)));
            // line 36
            $context["next_landing_color"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed((($__internal_compile_30 = (($__internal_compile_31 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_32 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 36)) && is_array($__internal_compile_32) || $__internal_compile_32 instanceof ArrayAccess ? ($__internal_compile_32["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 36), "render_tokens", [], "any", false, false, true, 36)) && is_array($__internal_compile_31) || $__internal_compile_31 instanceof ArrayAccess ? ($__internal_compile_31[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 36)] ?? null) : null)) && is_array($__internal_compile_30) || $__internal_compile_30 instanceof ArrayAccess ? ($__internal_compile_30["{{ field_next_landing_color }}"] ?? null) : null), 36, $this->source)));
            // line 37
            $context["previous_landing_color"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed((($__internal_compile_33 = (($__internal_compile_34 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_35 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 37)) && is_array($__internal_compile_35) || $__internal_compile_35 instanceof ArrayAccess ? ($__internal_compile_35["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 37), "render_tokens", [], "any", false, false, true, 37)) && is_array($__internal_compile_34) || $__internal_compile_34 instanceof ArrayAccess ? ($__internal_compile_34[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 37)] ?? null) : null)) && is_array($__internal_compile_33) || $__internal_compile_33 instanceof ArrayAccess ? ($__internal_compile_33["{{ field_previous_landing_color }}"] ?? null) : null), 37, $this->source)));
            // line 38
            $context["hero_webm_video"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed((($__internal_compile_36 = (($__internal_compile_37 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_38 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 38)) && is_array($__internal_compile_38) || $__internal_compile_38 instanceof ArrayAccess ? ($__internal_compile_38["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 38), "render_tokens", [], "any", false, false, true, 38)) && is_array($__internal_compile_37) || $__internal_compile_37 instanceof ArrayAccess ? ($__internal_compile_37[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 38)] ?? null) : null)) && is_array($__internal_compile_36) || $__internal_compile_36 instanceof ArrayAccess ? ($__internal_compile_36["{{ field_hero_webm_video }}"] ?? null) : null), 38, $this->source)));
            // line 39
            $context["hero_ogg_video"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed((($__internal_compile_39 = (($__internal_compile_40 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_41 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 39)) && is_array($__internal_compile_41) || $__internal_compile_41 instanceof ArrayAccess ? ($__internal_compile_41["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 39), "render_tokens", [], "any", false, false, true, 39)) && is_array($__internal_compile_40) || $__internal_compile_40 instanceof ArrayAccess ? ($__internal_compile_40[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 39)] ?? null) : null)) && is_array($__internal_compile_39) || $__internal_compile_39 instanceof ArrayAccess ? ($__internal_compile_39["{{ field_hero_ogg_video }}"] ?? null) : null), 39, $this->source)));
            // line 40
            yield "
<section class=\"discovery-main\">
    <div class=\"upper ";
            // line 42
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["primaryColor"] ?? null), 42, $this->source), "html", null, true);
            yield "\">
        <div class=\"discover-main-wrapper container\">
        <h1>";
            // line 44
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 44, $this->source))), "html", null, true);
            yield "</h1>
        <a href=\"";
            // line 45
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["previous_link_url"] ?? null), 45, $this->source), "html", null, true);
            yield "\" class=\"discovery-main-arrows arrow-prev\"><img src=\"/images/static/arrow-prev-white.svg\" alt=\"Previous Discovery\"><p>";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["previous_link_text"] ?? null), 45, $this->source), "html", null, true);
            yield "</p></a>
        <a href=\"";
            // line 46
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["next_link_url"] ?? null), 46, $this->source), "html", null, true);
            yield "\" class=\"discovery-main-arrows arrow-next\"><img src=\"/images/static/arrow-next-white.svg\" alt=\"Previous Discovery\"><p>";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["next_link_text"] ?? null), 46, $this->source), "html", null, true);
            yield "</p></a>
        </div>
        <div class=\"discovery-main-illus\">
        <img src=\"";
            // line 49
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed(($context["thumbnail_image"] ?? null), 49, $this->source))), "html", null, true);
            yield "\" alt=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 49, $this->source))), "html", null, true);
            yield "\" class=\"discovery-img-video\">
        <video autoplay=\"\" muted=\"\" loop=\"\" id=\"mainPageVideo\">
            <source src=\"";
            // line 51
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed(($context["hero_video"] ?? null), 51, $this->source))), "html", null, true);
            yield "\" type=\"video/mp4\">
            ";
            // line 52
            if (($context["hero_webm_video"] ?? null)) {
                // line 53
                yield "              <source src=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["hero_webm_video"] ?? null), 53, $this->source), "html", null, true);
                yield "\" type=\"video/webm\">
            ";
            }
            // line 55
            yield "            ";
            if (($context["hero_ogg_video"] ?? null)) {
                // line 56
                yield "              <source src=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["hero_ogg_video"] ?? null), 56, $this->source), "html", null, true);
                yield "\" type=\"video/ogg\">
            ";
            }
            // line 58
            yield "            Your browser does not support HTML5 video.
        </video>
        </div>
    </div>
    <div class=\"ground\">
        <img src=\"/images/static/scroll.gif\" alt=\"Scroll Gif\" class=\"scroll-down\">
    </div>
</section>
<section class=\"sticky-nav\">
        <ul>
          <li class=\"discovery-nav next-nav img-height img-square ";
            // line 68
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["next_landing_color"] ?? null), 68, $this->source), "html", null, true);
            yield "\">
            <div class=\"img-height-wrapper\">
              <div class=\"img-wrapper\">
                <img src=\"/images/static/arrow-next-white.svg\" alt=\"\" class=\"arrow\">
                <p> ";
            // line 72
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["next_link_text"] ?? null), 72, $this->source), "html", null, true);
            yield "</p>
              </div>
              <a href=\"";
            // line 74
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["next_link_url"] ?? null), 74, $this->source), "html", null, true);
            yield "\"></a>
              <img src=\"";
            // line 75
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed(($context["next_image1"] ?? null), 75, $this->source))), "html", null, true);
            yield "\" alt=\"Stay\" class=\"illustration\">
            </div>
          </li>
          <li class=\"discovery-nav prev-nav img-height img-square ";
            // line 78
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["previous_landing_color"] ?? null), 78, $this->source), "html", null, true);
            yield "\">
            <div class=\"img-height-wrapper\">
              <div class=\"img-wrapper\">
                <img src=\"/images/static/arrow-prev-white.svg\" alt=\"\" class=\"arrow\">
                <p>";
            // line 82
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["previous_link_text"] ?? null), 82, $this->source), "html", null, true);
            yield "</p>
              </div>
              <a href=\"";
            // line 84
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["previous_link_url"] ?? null), 84, $this->source), "html", null, true);
            yield "\"></a>
              <img src=\"";
            // line 85
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed(($context["previous_image1"] ?? null), 85, $this->source))), "html", null, true);
            yield "\" alt=\"play\" class=\"illustration\">
            </div>
          </li>
        </ul>
</section>
";
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
            ->checkDeprecations($context, ["rows", "loop"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/custom/hudayriyat/templates/views/play/views-view-unformatted--play-hero-section.html.twig";
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
        return array (  201 => 85,  197 => 84,  192 => 82,  185 => 78,  179 => 75,  175 => 74,  170 => 72,  163 => 68,  151 => 58,  145 => 56,  142 => 55,  136 => 53,  134 => 52,  130 => 51,  123 => 49,  115 => 46,  109 => 45,  105 => 44,  100 => 42,  96 => 40,  94 => 39,  92 => 38,  90 => 37,  88 => 36,  86 => 35,  84 => 34,  82 => 33,  80 => 32,  78 => 31,  76 => 30,  74 => 29,  72 => 28,  70 => 27,  68 => 26,  66 => 25,  64 => 24,  62 => 23,  60 => 22,  43 => 21,  40 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/hudayriyat/templates/views/play/views-view-unformatted--play-hero-section.html.twig", "C:\\xampp\\htdocs\\modorn\\web\\themes\\custom\\hudayriyat\\templates\\views\\play\\views-view-unformatted--play-hero-section.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 21, "set" => 22, "if" => 52);
        static $filters = array("trim" => 31, "striptags" => 31, "escape" => 42);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set', 'if'],
                ['trim', 'striptags', 'escape'],
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
