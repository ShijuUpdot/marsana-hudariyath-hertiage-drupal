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

/* sites/marsana.com/themes/custom/marsana/templates/paragraphs/play/paragraph--experience-details--listing-details.html.twig */
class __TwigTemplate_eab6a3237b58431d21e58a42045f5932 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'paragraph' => [$this, 'block_paragraph'],
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension(SandboxExtension::class);
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 41
        yield "
";
        // line 42
        yield from $this->unwrap()->yieldBlock('paragraph', $context, $blocks);
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["content", "loop"]);        return; yield '';
    }

    public function block_paragraph($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 43
        yield "  ";
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        return; yield '';
    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 44
        yield "    <div class=\"listing-fold mb-5 pb-5\">
    <div class=\"container\">
    ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_listing_block", [], "any", false, false, true, 46));
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
        foreach ($context['_seq'] as $context["key"] => $context["item"]) {
            // line 47
            yield "    ";
            if ((Twig\Extension\CoreExtension::first($this->env->getCharset(), $context["key"]) != "#")) {
                // line 48
                yield "    ";
                $context["align"] = Twig\Extension\CoreExtension::cycle(["odd", "even"], $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 48), 48, $this->source));
                // line 49
                yield "    ";
                if ((($context["align"] ?? null) == "odd")) {
                    // line 50
                    yield "      <div class=\"row align-items-center justify-content-md-center list-margin\" id=\"splash-park\">
        <div class=\"col-12 col-md-7 img-resp-top\">
          <div class=\"img-rounded\"><img src=\"";
                    // line 52
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_0 = CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_1 = (($__internal_compile_2 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_listing_block", [], "any", false, false, true, 52)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[$context["key"]] ?? null) : null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["#paragraph"] ?? null) : null), "field_listing_image", [], "any", false, false, true, 52)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null), "entity", [], "any", false, false, true, 52), "uri", [], "any", false, false, true, 52), "value", [], "any", false, false, true, 52), 52, $this->source)), "html", null, true);
                    yield "\" alt=\"\"></div>
        </div>
        <div class=\"col-md-1\"></div>
        <div class=\"col-12 col-md-4\" >
          <h3 class=\"mb-4\">";
                    // line 56
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_3 = CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_4 = (($__internal_compile_5 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_listing_block", [], "any", false, false, true, 56)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[$context["key"]] ?? null) : null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["#paragraph"] ?? null) : null), "field_listing_title", [], "any", false, false, true, 56)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[0] ?? null) : null), "value", [], "any", false, false, true, 56), 56, $this->source)), "html", null, true);
                    yield "</h3>
          <div class=\"body-text\">";
                    // line 57
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_6 = CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_7 = (($__internal_compile_8 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_listing_block", [], "any", false, false, true, 57)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[$context["key"]] ?? null) : null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["#paragraph"] ?? null) : null), "field_listing_description", [], "any", false, false, true, 57)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[0] ?? null) : null), "value", [], "any", false, false, true, 57), 57, $this->source)), "html", null, true);
                    yield "</div>
        </div>
      </div>
    ";
                } elseif ((                // line 60
($context["align"] ?? null) == "even")) {
                    // line 61
                    yield "    <div class=\"row align-items-center justify-content-md-center list-margin\" id=\"outdoor-gym\">
        <div class=\"col-12 col-md-4\" >
          <h3 class=\"mb-4\">";
                    // line 63
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_9 = CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_10 = (($__internal_compile_11 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_listing_block", [], "any", false, false, true, 63)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11[$context["key"]] ?? null) : null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["#paragraph"] ?? null) : null), "field_listing_title", [], "any", false, false, true, 63)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[0] ?? null) : null), "value", [], "any", false, false, true, 63), 63, $this->source)), "html", null, true);
                    yield "</h3>
          <div class=\"body-text\">";
                    // line 64
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_12 = CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_13 = (($__internal_compile_14 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_listing_block", [], "any", false, false, true, 64)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14[$context["key"]] ?? null) : null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["#paragraph"] ?? null) : null), "field_listing_description", [], "any", false, false, true, 64)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12[0] ?? null) : null), "value", [], "any", false, false, true, 64), 64, $this->source)), "html", null, true);
                    yield "</div>
        </div>
        <div class=\"col-md-1\"></div>
        <div class=\"col-12 col-md-7 img-resp-top\">
          <div class=\"img-rounded\"><img src=\"";
                    // line 68
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_15 = CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_16 = (($__internal_compile_17 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_listing_block", [], "any", false, false, true, 68)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17[$context["key"]] ?? null) : null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["#paragraph"] ?? null) : null), "field_listing_image", [], "any", false, false, true, 68)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15[0] ?? null) : null), "entity", [], "any", false, false, true, 68), "uri", [], "any", false, false, true, 68), "value", [], "any", false, false, true, 68), 68, $this->source)), "html", null, true);
                    yield "\" alt=\"\"></div>
        </div>
      </div>
    ";
                }
                // line 72
                yield "    ";
            }
            // line 73
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
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        yield "    </div>
  </div>
  ";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "sites/marsana.com/themes/custom/marsana/templates/paragraphs/play/paragraph--experience-details--listing-details.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  155 => 74,  141 => 73,  138 => 72,  131 => 68,  124 => 64,  120 => 63,  116 => 61,  114 => 60,  108 => 57,  104 => 56,  97 => 52,  93 => 50,  90 => 49,  87 => 48,  84 => 47,  67 => 46,  63 => 44,  54 => 43,  45 => 42,  42 => 41,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation to display a paragraph.
 *
 * Available variables:
 * - paragraph: Full paragraph entity.
 *   Only method names starting with \"get\", \"has\", or \"is\" and a few common
 *   methods such as \"id\", \"label\", and \"bundle\" are available. For example:
 *   - paragraph.getCreatedTime() will return the paragraph creation timestamp.
 *   - paragraph.id(): The paragraph ID.
 *   - paragraph.bundle(): The type of the paragraph, for example, \"image\" or \"text\".
 *   - paragraph.getOwnerId(): The user ID of the paragraph author.
 *   See Drupal\\paragraphs\\Entity\\Paragraph for a full list of public properties
 *   and methods for the paragraph object.
 * - content: All paragraph items. Use {{ content }} to print them all,
 *   or print a subset such as {{ content.field_example }}. Use
 *   {{ content|without('field_example') }} to temporarily suppress the printing
 *   of a given child element.
 * - attributes: HTML attributes for the containing element.
 *   The attributes.class element may contain one or more of the following
 *   classes:
 *   - paragraphs: The current template type (also known as a \"theming hook\").
 *   - paragraphs--type-[type]: The current paragraphs type. For example, if the paragraph is an
 *     \"Image\" it would result in \"paragraphs--type--image\". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - paragraphs--view-mode--[view_mode]: The View Mode of the paragraph; for example, a
 *     preview would result in: \"paragraphs--view-mode--preview\", and
 *     default: \"paragraphs--view-mode--default\".
 * - view_mode: View mode; for example, \"preview\" or \"full\".
 * - logged_in: Flag for authenticated user status. Will be true when the
 *   current user is a logged-in member.
 * - is_admin: Flag for admin user status. Will be true when the current user
 *   is an administrator.
 *
 * @see template_preprocess_paragraph()
 *
 * @ingroup themeable
 */
#}

{% block paragraph %}
  {% block content %}
    <div class=\"listing-fold mb-5 pb-5\">
    <div class=\"container\">
    {% for key, item in content.field_listing_block %}
    {% if key|first != '#' %}
    {% set align = cycle(['odd', 'even'], loop.index0) %}
    {% if align == 'odd' %}
      <div class=\"row align-items-center justify-content-md-center list-margin\" id=\"splash-park\">
        <div class=\"col-12 col-md-7 img-resp-top\">
          <div class=\"img-rounded\"><img src=\"{{ file_url(content.field_listing_block[key]['#paragraph'].field_listing_image[0].entity.uri.value) }}\" alt=\"\"></div>
        </div>
        <div class=\"col-md-1\"></div>
        <div class=\"col-12 col-md-4\" >
          <h3 class=\"mb-4\">{{ content.field_listing_block[key]['#paragraph'].field_listing_title[0].value|raw|striptags }}</h3>
          <div class=\"body-text\">{{ content.field_listing_block[key]['#paragraph'].field_listing_description[0].value|raw|striptags }}</div>
        </div>
      </div>
    {% elseif align == 'even'%}
    <div class=\"row align-items-center justify-content-md-center list-margin\" id=\"outdoor-gym\">
        <div class=\"col-12 col-md-4\" >
          <h3 class=\"mb-4\">{{ content.field_listing_block[key]['#paragraph'].field_listing_title[0].value|raw|striptags }}</h3>
          <div class=\"body-text\">{{ content.field_listing_block[key]['#paragraph'].field_listing_description[0].value|raw|striptags }}</div>
        </div>
        <div class=\"col-md-1\"></div>
        <div class=\"col-12 col-md-7 img-resp-top\">
          <div class=\"img-rounded\"><img src=\"{{ file_url(content.field_listing_block[key]['#paragraph'].field_listing_image[0].entity.uri.value) }}\" alt=\"\"></div>
        </div>
      </div>
    {% endif %}
    {% endif %}
    {% endfor %}
    </div>
  </div>
  {% endblock %}
{% endblock paragraph %}", "sites/marsana.com/themes/custom/marsana/templates/paragraphs/play/paragraph--experience-details--listing-details.html.twig", "/var/www/html/Hudayriyat/project/web/sites/marsana.com/themes/custom/marsana/templates/paragraphs/play/paragraph--experience-details--listing-details.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 42, "for" => 46, "if" => 47, "set" => 48);
        static $filters = array("first" => 47, "escape" => 52, "striptags" => 56, "raw" => 56);
        static $functions = array("cycle" => 48, "file_url" => 52);

        try {
            $this->sandbox->checkSecurity(
                ['block', 'for', 'if', 'set'],
                ['first', 'escape', 'striptags', 'raw'],
                ['cycle', 'file_url'],
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
