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

/* sites/marsana.com/themes/custom/marsana/templates/views/views-view-unformatted--menu-listing.html.twig */
class __TwigTemplate_7e352b3c4d956d8556bc3302af424a33 extends Template
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
        $context['_seq'] = CoreExtension::ensureTraversable(($context["menu"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["items"]) {
            // line 22
            yield "<div class=\"menu-links-groups\">
     <span><a href=\"/";
            // line 23
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::lower($this->env->getCharset(), $this->sandbox->ensureToStringAllowed(($context["langcode"] ?? null), 23, $this->source)), "html", null, true);
            yield "/";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::lower($this->env->getCharset(), $this->sandbox->ensureToStringAllowed($context["key"], 23, $this->source)), "html", null, true);
            yield "\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t($this->sandbox->ensureToStringAllowed($context["key"], 23, $this->source)));
            yield "</a></span>
                           
     ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["items"]);
            foreach ($context['_seq'] as $context["ikey"] => $context["frow"]) {
                // line 26
                yield "    ";
                $context["fkey"] = CoreExtension::getAttribute($this->env, $this->source, $context["frow"], 0, [], "any", false, false, true, 26);
                // line 27
                yield "    ";
                $context["row"] = CoreExtension::getAttribute($this->env, $this->source, $context["frow"], 1, [], "any", false, false, true, 27);
                // line 28
                yield "    ";
                $context["title"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed((($__internal_compile_0 = (($__internal_compile_1 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_2 = CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "content", [], "any", false, false, true, 28)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 28), "render_tokens", [], "any", false, false, true, 28)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[($context["fkey"] ?? null)] ?? null) : null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["{{ field_listing_title }}"] ?? null) : null), 28, $this->source)));
                // line 29
                yield "    ";
                $context["link"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed((($__internal_compile_3 = (($__internal_compile_4 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_5 = CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "content", [], "any", false, false, true, 29)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 29), "render_tokens", [], "any", false, false, true, 29)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[($context["fkey"] ?? null)] ?? null) : null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["{{ view_node }}"] ?? null) : null), 29, $this->source)));
                // line 30
                yield "    ";
                if ((($context["langcode"] ?? null) == "AR")) {
                    // line 31
                    yield "        ";
                    $context["url_title"] = t($this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 31, $this->source));
                    // line 32
                    yield "    ";
                } else {
                    // line 33
                    yield "        ";
                    $context["url_title"] = ($context["title"] ?? null);
                    // line 34
                    yield "    ";
                }
                // line 35
                yield "     <a href=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["link"] ?? null), 35, $this->source), "html", null, true);
                yield "#";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::replace(Twig\Extension\CoreExtension::lower($this->env->getCharset(), $this->sandbox->ensureToStringAllowed(($context["url_title"] ?? null), 35, $this->source)), [" " => "-"]), "html", null, true);
                yield "\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 35, $this->source));
                yield "</a>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['ikey'], $context['frow'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            yield "     </div>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['items'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        yield "
<div class=\"menu-links-groups\">
    ";
        // line 42
        if ((($context["langcode"] ?? null) == "en")) {
            // line 43
            yield "      <a href=\"/en/events\">Events</a>
    ";
        } else {
            // line 45
            yield "      <a href=\"/ar/events\">حدث</a>
    ";
        }
        // line 47
        yield "</div>";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["menu", "langcode"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "sites/marsana.com/themes/custom/marsana/templates/views/views-view-unformatted--menu-listing.html.twig";
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
        return array (  125 => 47,  121 => 45,  117 => 43,  115 => 42,  111 => 40,  103 => 37,  90 => 35,  87 => 34,  84 => 33,  81 => 32,  78 => 31,  75 => 30,  72 => 29,  69 => 28,  66 => 27,  63 => 26,  59 => 25,  50 => 23,  47 => 22,  43 => 21,  40 => 20,);
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

{% for key, items in menu %}
<div class=\"menu-links-groups\">
     <span><a href=\"/{{ langcode | lower }}/{{ key|lower }}\">{{ key|t }}</a></span>
                           
     {% for ikey, frow in items %}
    {% set fkey = frow.0 %}
    {% set row = frow.1 %}
    {% set title   = row.content['#view'].style_plugin.render_tokens[ fkey ]['{{ field_listing_title }}'] | striptags | trim %}
    {% set link   = row.content['#view'].style_plugin.render_tokens[ fkey ]['{{ view_node }}'] | striptags | trim %}
    {% if langcode == 'AR' %}
        {% set url_title = title|t %}
    {% else %}
        {% set url_title = title %}
    {% endif %}
     <a href=\"{{ link }}#{{ url_title|lower|replace({\" \":\"-\"}) }}\">{{ title|raw }}</a>
    {% endfor %}
     </div>

{% endfor %}

<div class=\"menu-links-groups\">
    {% if langcode == 'en' %}
      <a href=\"/en/events\">Events</a>
    {% else %}
      <a href=\"/ar/events\">حدث</a>
    {% endif %}
</div>", "sites/marsana.com/themes/custom/marsana/templates/views/views-view-unformatted--menu-listing.html.twig", "/var/www/html/Hudayriyat/project/web/sites/marsana.com/themes/custom/marsana/templates/views/views-view-unformatted--menu-listing.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 21, "set" => 26, "if" => 30);
        static $filters = array("escape" => 23, "lower" => 23, "t" => 23, "trim" => 28, "striptags" => 28, "replace" => 35, "raw" => 35);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set', 'if'],
                ['escape', 'lower', 't', 'trim', 'striptags', 'replace', 'raw'],
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
