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

/* sites/marsana.com/themes/custom/marsana/templates/views/dock/views-view-unformatted--dock-menu-listing.html.twig */
class __TwigTemplate_385635b85de588a857801c155835d07b extends Template
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
        $context['_seq'] = CoreExtension::ensureTraversable(($context["menu"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["items"]) {
            // line 21
            yield "<div class=\"menu-links-groups\">
    <span><a href=\"/";
            // line 22
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::lower($this->env->getCharset(), $this->sandbox->ensureToStringAllowed(($context["langcode"] ?? null), 22, $this->source)), "html", null, true);
            yield "/";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::lower($this->env->getCharset(), $this->sandbox->ensureToStringAllowed($context["key"], 22, $this->source)), "html", null, true);
            yield "\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t($this->sandbox->ensureToStringAllowed($context["key"], 22, $this->source)));
            yield "</a></span>
    ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["items"]);
            foreach ($context['_seq'] as $context["ikey"] => $context["frow"]) {
                // line 24
                yield "    ";
                $context["fkey"] = CoreExtension::getAttribute($this->env, $this->source, $context["frow"], 0, [], "any", false, false, true, 24);
                // line 25
                yield "    ";
                $context["row"] = CoreExtension::getAttribute($this->env, $this->source, $context["frow"], 1, [], "any", false, false, true, 25);
                // line 26
                yield "    ";
                $context["title"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed((($__internal_compile_0 = (($__internal_compile_1 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_2 = CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "content", [], "any", false, false, true, 26)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 26), "render_tokens", [], "any", false, false, true, 26)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[($context["fkey"] ?? null)] ?? null) : null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["{{ field_listing_title }}"] ?? null) : null), 26, $this->source)));
                // line 27
                yield "    ";
                $context["link"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed((($__internal_compile_3 = (($__internal_compile_4 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_5 = CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "content", [], "any", false, false, true, 27)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 27), "render_tokens", [], "any", false, false, true, 27)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[($context["fkey"] ?? null)] ?? null) : null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["{{ view_node }}"] ?? null) : null), 27, $this->source)));
                // line 28
                yield "    
    ";
                // line 29
                if ((($context["langcode"] ?? null) == "AR")) {
                    // line 30
                    yield "        ";
                    $context["url_title"] = t($this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 30, $this->source));
                    // line 31
                    yield "    ";
                } else {
                    // line 32
                    yield "        ";
                    $context["url_title"] = ($context["title"] ?? null);
                    // line 33
                    yield "    ";
                }
                // line 34
                yield "    
     <a href=\"";
                // line 35
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["link"] ?? null), 35, $this->source), "html", null, true);
                yield "#";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::lower($this->env->getCharset(), Twig\Extension\CoreExtension::replace($this->sandbox->ensureToStringAllowed(($context["url_title"] ?? null), 35, $this->source), [" " => "-"])), "html", null, true);
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
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["menu", "langcode"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "sites/marsana.com/themes/custom/marsana/templates/views/dock/views-view-unformatted--dock-menu-listing.html.twig";
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
        return array (  103 => 37,  91 => 35,  88 => 34,  85 => 33,  82 => 32,  79 => 31,  76 => 30,  74 => 29,  71 => 28,  68 => 27,  65 => 26,  62 => 25,  59 => 24,  55 => 23,  47 => 22,  44 => 21,  40 => 20,);
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
    
     <a href=\"{{ link }}#{{ url_title|replace({\" \":\"-\"})|lower }}\">{{ title | raw }}</a>
    {% endfor %}
     </div>

{% endfor %}", "sites/marsana.com/themes/custom/marsana/templates/views/dock/views-view-unformatted--dock-menu-listing.html.twig", "/var/www/html/Hudayriyat/project/web/sites/marsana.com/themes/custom/marsana/templates/views/dock/views-view-unformatted--dock-menu-listing.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 20, "set" => 24, "if" => 29);
        static $filters = array("escape" => 22, "lower" => 22, "t" => 22, "trim" => 26, "striptags" => 26, "replace" => 35, "raw" => 35);
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
