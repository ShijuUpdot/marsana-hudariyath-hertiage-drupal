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

/* sites/marsana.com/themes/custom/marsana/templates/views/experience_details/views-view-unformatted--experience-listing.html.twig */
class __TwigTemplate_821d33268b91977f46612e95757d27c6 extends Template
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
        yield "<div class=\"listing-fold mb-5 pb-5\">
    <div class=\"container\">
";
        // line 22
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
            // line 23
            $context["align"] = Twig\Extension\CoreExtension::cycle(["odd", "even"], $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 23), 23, $this->source));
            // line 24
            if (((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["listing"] ?? null)) == 1) && (($context["experienceType"] ?? null) == "Dock"))) {
                // line 25
                yield "  ";
                $context["align"] = "even";
            }
            // line 27
            yield "    ";
            if ((($context["align"] ?? null) == "even")) {
                // line 28
                yield "    <div class=\"row align-items-center justify-content-md-center list-margin\" id=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::lower($this->env->getCharset(), Twig\Extension\CoreExtension::replace($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "title", [], "any", false, false, true, 28), 28, $this->source), [" " => "-"])), "html", null, true);
                yield "\">
        <div class=\"col-12 col-md-4\" >
          <h3 class=\"mb-4\">";
                // line 30
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "title", [], "any", false, false, true, 30), 30, $this->source))));
                yield "</h3>
          <div class=\"body-text\">";
                // line 31
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "description", [], "any", false, false, true, 31), 31, $this->source))));
                yield " </div>
        </div>
        <div class=\"col-md-1\"></div>
        <div class=\"col-12 col-md-7 img-resp-top\">
          <div class=\"img-rounded\"><img src=\"";
                // line 35
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "bg_image", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
                yield "\" alt=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "title", [], "any", false, false, true, 35), 35, $this->source))), "html", null, true);
                yield "\"></div>
        </div>
    </div>
    ";
            } elseif ((            // line 38
($context["align"] ?? null) == "odd")) {
                // line 39
                yield "      <div class=\"row align-items-center justify-content-md-center list-margin\" id=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::lower($this->env->getCharset(), Twig\Extension\CoreExtension::replace($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "title", [], "any", false, false, true, 39), 39, $this->source), [" " => "-"])), "html", null, true);
                yield "\">
        <div class=\"col-12 col-md-7 img-resp-top\">
          <div class=\"img-rounded\"><img src=\"";
                // line 41
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "bg_image", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
                yield "\" alt=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "title", [], "any", false, false, true, 41), 41, $this->source))), "html", null, true);
                yield "\"></div>
        </div>
        <div class=\"col-md-1\"></div>
        <div class=\"col-12 col-md-4\" >
          <h3 class=\"mb-4\">";
                // line 45
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "title", [], "any", false, false, true, 45), 45, $this->source))), "html", null, true);
                yield "</h3>
          <div class=\"body-text\">";
                // line 46
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "description", [], "any", false, false, true, 46), 46, $this->source))), "html", null, true);
                yield " </div>
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
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        yield "    </div>
</div>
";
        // line 53
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
            // line 54
            yield "
";
            // line 55
            $context["parallax_image"] = Twig\Extension\CoreExtension::split($this->env->getCharset(), Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed((($__internal_compile_0 = (($__internal_compile_1 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_2 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 55)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 55), "render_tokens", [], "any", false, false, true, 55)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 55)] ?? null) : null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["{{ field_parallax_wrapper_bottom }}"] ?? null) : null), 55, $this->source))), ",");
            // line 56
            yield "     ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_3 = (($__internal_compile_4 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_5 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 56)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 56), "render_tokens", [], "any", false, false, true, 56)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 56)] ?? null) : null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["{{ field_listing_details }}"] ?? null) : null), 56, $this->source), "html", null, true);
            yield " 
";
            // line 57
            if ( !Twig\Extension\CoreExtension::testEmpty((($__internal_compile_6 = ($context["parallax_image"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[0] ?? null) : null))) {
                // line 58
                yield "<div class=\"parallax-wrapper bottom-wrapper\">
    <div class=\"parallax-shapes-bottom-right\" data-scroll-speed=\"3\"><img src=\"";
                // line 59
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_7 = ($context["parallax_image"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[0] ?? null) : null), 59, $this->source), "html", null, true);
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
            ->checkDeprecations($context, ["listing", "loop", "experienceType", "rows"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "sites/marsana.com/themes/custom/marsana/templates/views/experience_details/views-view-unformatted--experience-listing.html.twig";
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
        return array (  173 => 59,  170 => 58,  168 => 57,  163 => 56,  161 => 55,  158 => 54,  141 => 53,  137 => 51,  118 => 46,  114 => 45,  105 => 41,  99 => 39,  97 => 38,  89 => 35,  82 => 31,  78 => 30,  72 => 28,  69 => 27,  65 => 25,  63 => 24,  61 => 23,  44 => 22,  40 => 20,);
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
<div class=\"listing-fold mb-5 pb-5\">
    <div class=\"container\">
{% for key, row in listing %}
{% set align = cycle(['odd', 'even'], loop.index0) %}
{% if listing|length == 1 and experienceType == 'Dock' %}
  {% set align = 'even' %}
{% endif %}
    {% if align == 'even' %}
    <div class=\"row align-items-center justify-content-md-center list-margin\" id=\"{{ row.title|replace({\" \":\"-\"})|lower }}\">
        <div class=\"col-12 col-md-4\" >
          <h3 class=\"mb-4\">{{ row.title|striptags|trim|raw }}</h3>
          <div class=\"body-text\">{{ row.description|striptags|trim|raw }} </div>
        </div>
        <div class=\"col-md-1\"></div>
        <div class=\"col-12 col-md-7 img-resp-top\">
          <div class=\"img-rounded\"><img src=\"{{ row.bg_image }}\" alt=\"{{ row.title|striptags|trim }}\"></div>
        </div>
    </div>
    {% elseif align == 'odd' %}
      <div class=\"row align-items-center justify-content-md-center list-margin\" id=\"{{ row.title|replace({\" \":\"-\"})|lower }}\">
        <div class=\"col-12 col-md-7 img-resp-top\">
          <div class=\"img-rounded\"><img src=\"{{ row.bg_image }}\" alt=\"{{ row.title|striptags|trim }}\"></div>
        </div>
        <div class=\"col-md-1\"></div>
        <div class=\"col-12 col-md-4\" >
          <h3 class=\"mb-4\">{{ row.title|striptags|trim }}</h3>
          <div class=\"body-text\">{{ row.description|striptags|trim }} </div>
        </div>
      </div>
    {% endif %}
{% endfor %}
    </div>
</div>
{% for row in rows %}

{% set parallax_image = row.content['#view'].style_plugin.render_tokens[ loop.index0 ]['{{ field_parallax_wrapper_bottom }}'] |striptags|trim|split(',') %}
     {{ row.content['#view'].style_plugin.render_tokens[ loop.index0 ]['{{ field_listing_details }}'] }} 
{% if parallax_image[0] is not empty %}
<div class=\"parallax-wrapper bottom-wrapper\">
    <div class=\"parallax-shapes-bottom-right\" data-scroll-speed=\"3\"><img src=\"{{ parallax_image[0] }}\" alt=\"parallax-wrapper bottom-wrapper\"></div>
</div>
{% endif %}
{% endfor %}", "sites/marsana.com/themes/custom/marsana/templates/views/experience_details/views-view-unformatted--experience-listing.html.twig", "/var/www/html/Hudayriyat/project/web/sites/marsana.com/themes/custom/marsana/templates/views/experience_details/views-view-unformatted--experience-listing.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 22, "set" => 23, "if" => 24);
        static $filters = array("length" => 24, "escape" => 28, "lower" => 28, "replace" => 28, "raw" => 30, "trim" => 30, "striptags" => 30, "split" => 55);
        static $functions = array("cycle" => 23);

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set', 'if'],
                ['length', 'escape', 'lower', 'replace', 'raw', 'trim', 'striptags', 'split'],
                ['cycle'],
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
