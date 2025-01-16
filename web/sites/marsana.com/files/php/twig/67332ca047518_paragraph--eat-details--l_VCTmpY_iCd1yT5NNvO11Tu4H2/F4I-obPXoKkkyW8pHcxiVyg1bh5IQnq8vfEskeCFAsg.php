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

/* sites/marsana.com/themes/custom/marsana/templates/paragraphs/eat/paragraph--eat-details--listing-details.html.twig */
class __TwigTemplate_57f40197bf2aff3a773caf7024829a32 extends Template
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
            ->checkDeprecations($context, ["content"]);        return; yield '';
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
        yield "      <div class=\"third-fold bg-orange p-fold\" id=\"covid-section\">
    <div class=\"container\">
      <h2 class=\"mb-md-5 col-4 mb-3 p-0\">";
        // line 46
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed((($__internal_compile_0 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_title", [], "any", false, false, true, 46)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null), 46, $this->source));
        yield "</h2>
      <div class=\"row justify-content-between\">
        <div class=\"col-12 col-md-6 mb-3 mb-md-0\" >
          <div class=\"body-text big bold mb-3\">";
        // line 49
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed((($__internal_compile_1 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_short_description", [], "any", false, false, true, 49)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[0] ?? null) : null), 49, $this->source));
        yield "</div>
          <div class=\"body-text bold\">";
        // line 50
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed((($__internal_compile_2 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_description", [], "any", false, false, true, 50)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[0] ?? null) : null), 50, $this->source));
        yield "</div>
        </div>
        <div class=\"col-12 col-md-5\">
          <ul class=\"icon-listing\">
          ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_guidelines_listing", [], "any", false, false, true, 54));
        foreach ($context['_seq'] as $context["key"] => $context["item"]) {
            // line 55
            yield "          ";
            if ((Twig\Extension\CoreExtension::first($this->env->getCharset(), $context["key"]) != "#")) {
                // line 56
                yield "          ";
                $context["icon"] = $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_3 = CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_4 = (($__internal_compile_5 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_guidelines_listing", [], "any", false, false, true, 56)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[$context["key"]] ?? null) : null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["#paragraph"] ?? null) : null), "field_icon", [], "any", false, false, true, 56)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[0] ?? null) : null), "value", [], "any", false, false, true, 56), 56, $this->source);
                // line 57
                yield "            <li>
              <img src=\"";
                // line 58
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_6 = CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_7 = (($__internal_compile_8 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_guidelines_listing", [], "any", false, false, true, 58)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[$context["key"]] ?? null) : null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["#paragraph"] ?? null) : null), "field_icon", [], "any", false, false, true, 58)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[0] ?? null) : null), "entity", [], "any", false, false, true, 58), "uri", [], "any", false, false, true, 58), "value", [], "any", false, false, true, 58), 58, $this->source)), "html", null, true);
                yield "\" alt=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_9 = CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_10 = (($__internal_compile_11 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_guidelines_listing", [], "any", false, false, true, 58)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11[$context["key"]] ?? null) : null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["#paragraph"] ?? null) : null), "field_icon", [], "any", false, false, true, 58)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[0] ?? null) : null), "alt", [], "any", false, false, true, 58), 58, $this->source), "html", null, true);
                yield "\">
              <div class=\"body-text bold\">";
                // line 59
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_12 = CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_13 = (($__internal_compile_14 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_guidelines_listing", [], "any", false, false, true, 59)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14[$context["key"]] ?? null) : null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["#paragraph"] ?? null) : null), "field_short_description", [], "any", false, false, true, 59)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12[0] ?? null) : null), "value", [], "any", false, false, true, 59), 59, $this->source));
                yield "</div>
              <div class=\"body-text\">";
                // line 60
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_15 = CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_16 = (($__internal_compile_17 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_guidelines_listing", [], "any", false, false, true, 60)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17[$context["key"]] ?? null) : null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["#paragraph"] ?? null) : null), "field_guidelines_comment", [], "any", false, false, true, 60)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15[0] ?? null) : null), "value", [], "any", false, false, true, 60), 60, $this->source));
                yield "</div>
            </li>
          ";
            }
            // line 63
            yield "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        yield "
          </ul>
        </div>
      </div>
    </div>
  </div>
  ";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "sites/marsana.com/themes/custom/marsana/templates/paragraphs/eat/paragraph--eat-details--listing-details.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  119 => 64,  113 => 63,  107 => 60,  103 => 59,  97 => 58,  94 => 57,  91 => 56,  88 => 55,  84 => 54,  77 => 50,  73 => 49,  67 => 46,  63 => 44,  54 => 43,  45 => 42,  42 => 41,);
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
      <div class=\"third-fold bg-orange p-fold\" id=\"covid-section\">
    <div class=\"container\">
      <h2 class=\"mb-md-5 col-4 mb-3 p-0\">{{  content.field_title[0] | raw }}</h2>
      <div class=\"row justify-content-between\">
        <div class=\"col-12 col-md-6 mb-3 mb-md-0\" >
          <div class=\"body-text big bold mb-3\">{{ content.field_short_description[0]|raw }}</div>
          <div class=\"body-text bold\">{{ content.field_description[0] | raw }}</div>
        </div>
        <div class=\"col-12 col-md-5\">
          <ul class=\"icon-listing\">
          {% for key, item in content.field_guidelines_listing  %}
          {% if key|first != '#' %}
          {% set icon = content.field_guidelines_listing[key]['#paragraph'].field_icon[0].value|raw %}
            <li>
              <img src=\"{{ file_url(content.field_guidelines_listing[key]['#paragraph'].field_icon[0].entity.uri.value) }}\" alt=\"{{content.field_guidelines_listing[key]['#paragraph'].field_icon[0].alt}}\">
              <div class=\"body-text bold\">{{ content.field_guidelines_listing[key]['#paragraph'].field_short_description[0].value|raw }}</div>
              <div class=\"body-text\">{{ content.field_guidelines_listing[key]['#paragraph'].field_guidelines_comment[0].value|raw }}</div>
            </li>
          {% endif %}
          {% endfor %}

          </ul>
        </div>
      </div>
    </div>
  </div>
  {% endblock %}
{% endblock paragraph %}
", "sites/marsana.com/themes/custom/marsana/templates/paragraphs/eat/paragraph--eat-details--listing-details.html.twig", "/var/www/html/Hudayriyat/project/web/sites/marsana.com/themes/custom/marsana/templates/paragraphs/eat/paragraph--eat-details--listing-details.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 42, "for" => 54, "if" => 55, "set" => 56);
        static $filters = array("raw" => 46, "first" => 55, "escape" => 58);
        static $functions = array("file_url" => 58);

        try {
            $this->sandbox->checkSecurity(
                ['block', 'for', 'if', 'set'],
                ['raw', 'first', 'escape'],
                ['file_url'],
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
