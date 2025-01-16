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

/* sites/marsana.com/themes/custom/marsana/templates/views/experience_details/views-view-unformatted--experience-details-first-fold.html.twig */
class __TwigTemplate_9189edaadf1d19137f89834619c489fd extends Template
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
            // line 21
            $context["hero_image"] = (($__internal_compile_0 = (($__internal_compile_1 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_2 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 21)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 21), "render_tokens", [], "any", false, false, true, 21)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 21)] ?? null) : null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["{{ field_hero_image }}"] ?? null) : null);
            // line 22
            $context["hero_title"] = (($__internal_compile_3 = (($__internal_compile_4 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_5 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 22)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 22), "render_tokens", [], "any", false, false, true, 22)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 22)] ?? null) : null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["{{ field_hero_image_title }}"] ?? null) : null);
            // line 23
            $context["sub_title"] = (($__internal_compile_6 = (($__internal_compile_7 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_8 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 23)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 23), "render_tokens", [], "any", false, false, true, 23)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 23)] ?? null) : null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["{{ field_sub_title }}"] ?? null) : null);
            // line 24
            $context["description"] = (($__internal_compile_9 = (($__internal_compile_10 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_11 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 24)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 24), "render_tokens", [], "any", false, false, true, 24)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 24)] ?? null) : null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["{{ field_intro_description }}"] ?? null) : null);
            // line 25
            $context["parallax_image"] = Twig\Extension\CoreExtension::split($this->env->getCharset(), Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed((($__internal_compile_12 = (($__internal_compile_13 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_14 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 25)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 25), "render_tokens", [], "any", false, false, true, 25)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 25)] ?? null) : null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["{{ field_parallax_wrapper }}"] ?? null) : null), 25, $this->source))), ",");
            // line 26
            $context["hero_image_class"] = (($__internal_compile_15 = (($__internal_compile_16 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_17 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 26)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 26), "render_tokens", [], "any", false, false, true, 26)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 26)] ?? null) : null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["{{ field_hero_image_class }}"] ?? null) : null);
            // line 27
            yield "
<div class=\"first-fold\">
    <div class=\"shape-wrapper\">
      <div class=\"";
            // line 30
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed(($context["hero_image_class"] ?? null), 30, $this->source))), "html", null, true);
            yield "\" style=\"background-image: url(";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed(($context["hero_image"] ?? null), 30, $this->source))), "html", null, true);
            yield ");\"></div>
    </div>
    <div class=\"first-fold-info\">
      <div class=\"container\">
        <h1 data-scroll-speed=\"6\">";
            // line 34
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed(($context["hero_title"] ?? null), 34, $this->source))));
            yield "</h1>
      </div>
      <div class=\"info-bottom\" data-scroll-speed=\"2\">
        <div class=\"container\">
          <h3 >";
            // line 38
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed(($context["sub_title"] ?? null), 38, $this->source))));
            yield "</h3>
          <p class=\"body-text fade-in-elements\">";
            // line 39
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed(($context["description"] ?? null), 39, $this->source))));
            yield " </p>
          <div class=\"scroll-more fade-out-elements\"  data-scroll-speed=\"-5\">scroll for more</div>
        </div>
      </div>
    </div>
</div>
<div class=\"parallax-wrapper top-wrapper\">
  ";
            // line 46
            if ((($__internal_compile_18 = ($context["parallax_image"] ?? null)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18[0] ?? null) : null)) {
                // line 47
                yield "    <div class=\"parallax-shapes-top-left\" data-scroll-speed=\"1\"><img src=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_19 = ($context["parallax_image"] ?? null)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19[0] ?? null) : null), 47, $this->source), "html", null, true);
                yield "\" alt=\"\"></div>
  ";
            }
            // line 49
            yield "  ";
            if ((($__internal_compile_20 = ($context["parallax_image"] ?? null)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20[1] ?? null) : null)) {
                // line 50
                yield "    <div class=\"parallax-shapes-top-second-left\" data-scroll-speed=\"2\"><img src=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_21 = ($context["parallax_image"] ?? null)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21[1] ?? null) : null), 50, $this->source), "html", null, true);
                yield "\" alt=\"\"></div>
  ";
            }
            // line 52
            yield "  ";
            if ((($__internal_compile_22 = ($context["parallax_image"] ?? null)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22[2] ?? null) : null)) {
                yield " 
    <div class=\"parallax-shapes-top-right\" data-scroll-speed=\"-4\"><img src=\"";
                // line 53
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_23 = ($context["parallax_image"] ?? null)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23[2] ?? null) : null), 53, $this->source), "html", null, true);
                yield "\" alt=\"\"></div>
  ";
            }
            // line 55
            yield "</div>
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
        return "sites/marsana.com/themes/custom/marsana/templates/views/experience_details/views-view-unformatted--experience-details-first-fold.html.twig";
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
        return array (  131 => 55,  126 => 53,  121 => 52,  115 => 50,  112 => 49,  106 => 47,  104 => 46,  94 => 39,  90 => 38,  83 => 34,  74 => 30,  69 => 27,  67 => 26,  65 => 25,  63 => 24,  61 => 23,  59 => 22,  57 => 21,  40 => 20,);
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
{% for row in rows %}
{% set hero_image = row.content['#view'].style_plugin.render_tokens[ loop.index0 ]['{{ field_hero_image }}'] %}
{% set hero_title = row.content['#view'].style_plugin.render_tokens[ loop.index0 ]['{{ field_hero_image_title }}'] %}
{% set sub_title = row.content['#view'].style_plugin.render_tokens[ loop.index0 ]['{{ field_sub_title }}'] %}
{% set description = row.content['#view'].style_plugin.render_tokens[ loop.index0 ]['{{ field_intro_description }}'] %}
{% set parallax_image = row.content['#view'].style_plugin.render_tokens[ loop.index0 ]['{{ field_parallax_wrapper }}'] |striptags|trim|split(',') %}
{% set hero_image_class = row.content['#view'].style_plugin.render_tokens[ loop.index0 ]['{{ field_hero_image_class }}'] %}

<div class=\"first-fold\">
    <div class=\"shape-wrapper\">
      <div class=\"{{ hero_image_class | striptags | trim }}\" style=\"background-image: url({{ hero_image | striptags | trim }});\"></div>
    </div>
    <div class=\"first-fold-info\">
      <div class=\"container\">
        <h1 data-scroll-speed=\"6\">{{ hero_title | striptags | trim | raw }}</h1>
      </div>
      <div class=\"info-bottom\" data-scroll-speed=\"2\">
        <div class=\"container\">
          <h3 >{{ sub_title | striptags | trim | raw }}</h3>
          <p class=\"body-text fade-in-elements\">{{ description | striptags | trim | raw }} </p>
          <div class=\"scroll-more fade-out-elements\"  data-scroll-speed=\"-5\">scroll for more</div>
        </div>
      </div>
    </div>
</div>
<div class=\"parallax-wrapper top-wrapper\">
  {% if parallax_image[0] %}
    <div class=\"parallax-shapes-top-left\" data-scroll-speed=\"1\"><img src=\"{{ parallax_image[0] }}\" alt=\"\"></div>
  {% endif %}
  {% if parallax_image[1] %}
    <div class=\"parallax-shapes-top-second-left\" data-scroll-speed=\"2\"><img src=\"{{ parallax_image[1] }}\" alt=\"\"></div>
  {% endif %}
  {% if parallax_image[2] %} 
    <div class=\"parallax-shapes-top-right\" data-scroll-speed=\"-4\"><img src=\"{{ parallax_image[2] }}\" alt=\"\"></div>
  {% endif %}
</div>
{% endfor %}", "sites/marsana.com/themes/custom/marsana/templates/views/experience_details/views-view-unformatted--experience-details-first-fold.html.twig", "/var/www/html/Hudayriyat/project/web/sites/marsana.com/themes/custom/marsana/templates/views/experience_details/views-view-unformatted--experience-details-first-fold.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 20, "set" => 21, "if" => 46);
        static $filters = array("split" => 25, "trim" => 25, "striptags" => 25, "escape" => 30, "raw" => 34);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set', 'if'],
                ['split', 'trim', 'striptags', 'escape', 'raw'],
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
