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

/* sites/marsana.com/themes/custom/marsana/templates/views/views-view-unformatted--footer-block.html.twig */
class __TwigTemplate_b69d9b5ad1d7118ddb0310ef75f908b5 extends Template
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
        $context["url"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<current>")));
        // line 21
        if (CoreExtension::inFilter("dock", ($context["url"] ?? null))) {
            // line 22
            yield "  ";
            $context["bg_css"] = "bg-ocean-75";
            // line 23
            yield "  ";
            $context["parallax_image"] = "/images/dynamic/shape-footer-blue.png";
        } elseif (CoreExtension::inFilter("play",         // line 24
($context["url"] ?? null))) {
            // line 25
            yield "  ";
            $context["bg_css"] = "bg-ocean-75";
            // line 26
            yield "  ";
            $context["parallax_image"] = "/images/dynamic/shape-footer-blue.png";
        } elseif (CoreExtension::inFilter("eat",         // line 27
($context["url"] ?? null))) {
            // line 28
            yield "  ";
            $context["bg_css"] = "bg-rooftop-100";
            // line 29
            yield "  ";
            $context["parallax_image"] = "/images/dynamic/shape-footer-red.png";
        } elseif (CoreExtension::inFilter("shop",         // line 30
($context["url"] ?? null))) {
            // line 31
            yield "  ";
            $context["bg_css"] = "bg-coral-75";
            // line 32
            yield "  ";
            $context["parallax_image"] = "/images/dynamic/skate-shape-footer-right.png";
        } elseif (CoreExtension::inFilter("relax",         // line 33
($context["url"] ?? null))) {
            // line 34
            yield "  ";
            $context["bg_css"] = "bg-coral-75";
            // line 35
            yield "  ";
            $context["parallax_image"] = "/images/dynamic/skate-shape-footer-right.png";
        } else {
            // line 37
            yield "  ";
            $context["bg_css"] = "bg-ocean-75";
            // line 38
            yield "  ";
            $context["parallax_image"] = "/images/dynamic/shape-footer-blue.png";
        }
        // line 40
        yield "
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
            // line 43
            $context["description"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed((($__internal_compile_0 = (($__internal_compile_1 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_2 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 43)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 43), "render_tokens", [], "any", false, false, true, 43)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 43)] ?? null) : null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["{{ field_footer_description }}"] ?? null) : null), 43, $this->source)));
            // line 44
            $context["website_link_text"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed((($__internal_compile_3 = (($__internal_compile_4 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_5 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 44)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 44), "render_tokens", [], "any", false, false, true, 44)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 44)] ?? null) : null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["{{ field_website_link_text }}"] ?? null) : null), 44, $this->source)));
            // line 45
            $context["website_link_url"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed((($__internal_compile_6 = (($__internal_compile_7 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_8 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 45)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 45), "render_tokens", [], "any", false, false, true, 45)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 45)] ?? null) : null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["{{ field_website_link }}"] ?? null) : null), 45, $this->source)));
            // line 46
            $context["website_link_title"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed((($__internal_compile_9 = (($__internal_compile_10 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_11 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 46)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 46), "render_tokens", [], "any", false, false, true, 46)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 46)] ?? null) : null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["{{ field_website_link_1 }}"] ?? null) : null), 46, $this->source)));
            // line 47
            $context["address_title"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed((($__internal_compile_12 = (($__internal_compile_13 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_14 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 47)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 47), "render_tokens", [], "any", false, false, true, 47)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 47)] ?? null) : null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["{{ field_address_title }}"] ?? null) : null), 47, $this->source)));
            // line 48
            $context["address"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed((($__internal_compile_15 = (($__internal_compile_16 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_17 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 48)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 48), "render_tokens", [], "any", false, false, true, 48)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 48)] ?? null) : null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["{{ field_address }}"] ?? null) : null), 48, $this->source)));
            // line 49
            $context["email_title"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed((($__internal_compile_18 = (($__internal_compile_19 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_20 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 49)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 49), "render_tokens", [], "any", false, false, true, 49)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 49)] ?? null) : null)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["{{ field_email_text }}"] ?? null) : null), 49, $this->source)));
            // line 50
            $context["email_url"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed((($__internal_compile_21 = (($__internal_compile_22 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_23 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 50)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 50), "render_tokens", [], "any", false, false, true, 50)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 50)] ?? null) : null)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21["{{ field_email }}"] ?? null) : null), 50, $this->source)));
            // line 51
            $context["email_link_title"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed((($__internal_compile_24 = (($__internal_compile_25 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_26 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 51)) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 51), "render_tokens", [], "any", false, false, true, 51)) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 51)] ?? null) : null)) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24["{{ field_email_1 }}"] ?? null) : null), 51, $this->source)));
            // line 52
            $context["copyright"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed((($__internal_compile_27 = (($__internal_compile_28 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_29 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 52)) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 52), "render_tokens", [], "any", false, false, true, 52)) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 52)] ?? null) : null)) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27["{{ field_copyright_text }}"] ?? null) : null), 52, $this->source)));
            // line 53
            $context["social_block_title"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed((($__internal_compile_30 = (($__internal_compile_31 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_32 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 53)) && is_array($__internal_compile_32) || $__internal_compile_32 instanceof ArrayAccess ? ($__internal_compile_32["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 53), "render_tokens", [], "any", false, false, true, 53)) && is_array($__internal_compile_31) || $__internal_compile_31 instanceof ArrayAccess ? ($__internal_compile_31[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 53)] ?? null) : null)) && is_array($__internal_compile_30) || $__internal_compile_30 instanceof ArrayAccess ? ($__internal_compile_30["{{ field_social_links_title }}"] ?? null) : null), 53, $this->source)));
            // line 54
            yield "
<div class=\"parallax-shapes-footer-right\" data-scroll-speed=\"15\"><img src=\"";
            // line 55
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["parallax_image"] ?? null), 55, $this->source), "html", null, true);
            yield "\" alt=\"\"></div>
  <div class=\"footer\">
    <div class=\"";
            // line 57
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bg_css"] ?? null), 57, $this->source), "html", null, true);
            yield " py-5\">
      <div class=\"container\">
        <div class=\"row align-items-center mb-4 justify-content-between\">
          <div class=\"col-12 col-md-5\">
            <a href=\"javascript:;\"><img src=\"/";
            // line 61
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 61, $this->source) . "/island-logo-white.svg"), "html", null, true);
            yield "\"></a>
          </div>
          <div class=\"col-12 col-md-6 text-right\">
            <div class=\"body-text bold small l-spacing-2\">";
            // line 64
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["social_block_title"] ?? null), 64, $this->source), "html", null, true);
            yield "</div>
            ";
            // line 65
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["social_links"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["row"]) {
                // line 66
                yield "                <a href=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "social_link", [], "any", false, false, true, 66), 66, $this->source)), "html", null, true);
                yield "\" class=\"ml-3\" target=\"_blank\"><img src=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "icon", [], "any", false, false, true, 66), 66, $this->source)))), "html", null, true);
                yield "\" alt=\"\"></a>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            yield "          </div>
        </div>
        <div class=\"row justify-content-between\">
          <div class=\"col-12 col-md-5\">
            <div class=\"body-text mb-5\">";
            // line 72
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["description"] ?? null), 72, $this->source), "html", null, true);
            yield "</div>
            <div class=\"body-text small bold l-spacing-2\">";
            // line 73
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["website_link_text"] ?? null), 73, $this->source), "html", null, true);
            yield "</div>
            <a href=\"";
            // line 74
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["website_link_url"] ?? null), 74, $this->source), "html", null, true);
            yield "\" target=\"_blank\" class=\"body-text big bold\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["website_link_title"] ?? null), 74, $this->source), "html", null, true);
            yield "</a>
            
          </div>
          <div class=\"col-12 col-md-6\">
            <div class=\"row\">
              <div class=\"col-auto body-text mb-4\">";
            // line 79
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["address_title"] ?? null), 79, $this->source));
            yield "</div>
              <div class=\"col body-text\">";
            // line 80
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["address"] ?? null), 80, $this->source));
            yield "</div>
            </div>
            <div class=\"row\">
              <div class=\"col-auto body-text mb-4\">";
            // line 83
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed(($context["email_title"] ?? null), 83, $this->source))), "html", null, true);
            yield "</div>
              <div class=\"col \">
                <a href=\"";
            // line 85
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["email_url"] ?? null), 85, $this->source), "html", null, true);
            yield "\" class=\"body-text mb-4\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["email_link_title"] ?? null), 85, $this->source), "html", null, true);
            yield "</a>
              </div>
            </div>
            <div class=\"row\">
              <div class=\"col body-text text-right opacity-50\">
               © ";
            // line 90
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
            yield " ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed(($context["copyright"] ?? null), 90, $this->source))), "html", null, true);
            yield "

              </div>
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </div>
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
            ->checkDeprecations($context, ["rows", "loop", "directory", "social_links"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "sites/marsana.com/themes/custom/marsana/templates/views/views-view-unformatted--footer-block.html.twig";
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
        return array (  221 => 90,  211 => 85,  206 => 83,  200 => 80,  196 => 79,  186 => 74,  182 => 73,  178 => 72,  172 => 68,  161 => 66,  157 => 65,  153 => 64,  147 => 61,  140 => 57,  135 => 55,  132 => 54,  130 => 53,  128 => 52,  126 => 51,  124 => 50,  122 => 49,  120 => 48,  118 => 47,  116 => 46,  114 => 45,  112 => 44,  110 => 43,  93 => 41,  90 => 40,  86 => 38,  83 => 37,  79 => 35,  76 => 34,  74 => 33,  71 => 32,  68 => 31,  66 => 30,  63 => 29,  60 => 28,  58 => 27,  55 => 26,  52 => 25,  50 => 24,  47 => 23,  44 => 22,  42 => 21,  40 => 20,);
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
{% set url = url('<current>') |render|render %}
{% if ('dock' in url) %}
  {% set bg_css = 'bg-ocean-75' %}
  {% set parallax_image = '/images/dynamic/shape-footer-blue.png' %}
{% elseif ('play' in url) %}
  {% set bg_css = 'bg-ocean-75' %}
  {% set parallax_image = '/images/dynamic/shape-footer-blue.png' %}
{% elseif ('eat' in url) %}
  {% set bg_css = 'bg-rooftop-100' %}
  {% set parallax_image = '/images/dynamic/shape-footer-red.png' %}
{% elseif ('shop' in url) %}
  {% set bg_css = 'bg-coral-75' %}
  {% set parallax_image = '/images/dynamic/skate-shape-footer-right.png' %}
{% elseif ('relax' in url) %}
  {% set bg_css = 'bg-coral-75' %}
  {% set parallax_image = '/images/dynamic/skate-shape-footer-right.png' %}
{% else %}
  {% set bg_css = 'bg-ocean-75' %}
  {% set parallax_image = '/images/dynamic/shape-footer-blue.png' %}
{% endif %}

{% for row in rows %}
{# {% set footer_logo  = row.content['#view'].style_plugin.render_tokens[ loop.index0 ]['{{ field_footer_logo }}'] %} #}
{% set description  = row.content['#view'].style_plugin.render_tokens[ loop.index0 ]['{{ field_footer_description }}'] |striptags|trim%}
{% set website_link_text  = row.content['#view'].style_plugin.render_tokens[ loop.index0 ]['{{ field_website_link_text }}'] |striptags|trim%}
{% set website_link_url  = row.content['#view'].style_plugin.render_tokens[ loop.index0 ]['{{ field_website_link }}'] |striptags|trim%}
{% set website_link_title  = row.content['#view'].style_plugin.render_tokens[ loop.index0 ]['{{ field_website_link_1 }}'] |striptags|trim%}
{% set address_title  = row.content['#view'].style_plugin.render_tokens[ loop.index0 ]['{{ field_address_title }}'] |striptags|trim%}
{% set address  = row.content['#view'].style_plugin.render_tokens[ loop.index0 ]['{{ field_address }}'] |striptags|trim%}
{% set email_title  = row.content['#view'].style_plugin.render_tokens[ loop.index0 ]['{{ field_email_text }}'] |striptags|trim%}
{% set email_url  = row.content['#view'].style_plugin.render_tokens[ loop.index0 ]['{{ field_email }}'] |striptags|trim%}
{% set email_link_title  = row.content['#view'].style_plugin.render_tokens[ loop.index0 ]['{{ field_email_1 }}'] |striptags|trim%}
{% set copyright  = row.content['#view'].style_plugin.render_tokens[ loop.index0 ]['{{ field_copyright_text }}'] |striptags|trim%}
{% set social_block_title  = row.content['#view'].style_plugin.render_tokens[ loop.index0 ]['{{ field_social_links_title }}'] |striptags|trim%}

<div class=\"parallax-shapes-footer-right\" data-scroll-speed=\"15\"><img src=\"{{ parallax_image }}\" alt=\"\"></div>
  <div class=\"footer\">
    <div class=\"{{ bg_css }} py-5\">
      <div class=\"container\">
        <div class=\"row align-items-center mb-4 justify-content-between\">
          <div class=\"col-12 col-md-5\">
            <a href=\"javascript:;\"><img src=\"/{{ directory ~ '/island-logo-white.svg' }}\"></a>
          </div>
          <div class=\"col-12 col-md-6 text-right\">
            <div class=\"body-text bold small l-spacing-2\">{{ social_block_title }}</div>
            {%  for key, row in social_links %}
                <a href=\"{{ row.social_link | trim }}\" class=\"ml-3\" target=\"_blank\"><img src=\"{{ file_url(row.icon) | striptags | trim }}\" alt=\"\"></a>
            {% endfor %}
          </div>
        </div>
        <div class=\"row justify-content-between\">
          <div class=\"col-12 col-md-5\">
            <div class=\"body-text mb-5\">{{ description }}</div>
            <div class=\"body-text small bold l-spacing-2\">{{ website_link_text }}</div>
            <a href=\"{{ website_link_url }}\" target=\"_blank\" class=\"body-text big bold\">{{ website_link_title }}</a>
            
          </div>
          <div class=\"col-12 col-md-6\">
            <div class=\"row\">
              <div class=\"col-auto body-text mb-4\">{{ address_title | raw }}</div>
              <div class=\"col body-text\">{{ address | raw }}</div>
            </div>
            <div class=\"row\">
              <div class=\"col-auto body-text mb-4\">{{ email_title | striptags | trim }}</div>
              <div class=\"col \">
                <a href=\"{{ email_url }}\" class=\"body-text mb-4\">{{ email_link_title }}</a>
              </div>
            </div>
            <div class=\"row\">
              <div class=\"col body-text text-right opacity-50\">
               © {{ 'now' | date('Y') }} {{ copyright | striptags | trim }}

              </div>
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </div>
{% endfor %}
", "sites/marsana.com/themes/custom/marsana/templates/views/views-view-unformatted--footer-block.html.twig", "/var/www/html/Hudayriyat/project/web/sites/marsana.com/themes/custom/marsana/templates/views/views-view-unformatted--footer-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 20, "if" => 21, "for" => 41);
        static $filters = array("render" => 20, "trim" => 43, "striptags" => 43, "escape" => 55, "raw" => 79, "date" => 90);
        static $functions = array("url" => 20, "file_url" => 66);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['render', 'trim', 'striptags', 'escape', 'raw', 'date'],
                ['url', 'file_url'],
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
