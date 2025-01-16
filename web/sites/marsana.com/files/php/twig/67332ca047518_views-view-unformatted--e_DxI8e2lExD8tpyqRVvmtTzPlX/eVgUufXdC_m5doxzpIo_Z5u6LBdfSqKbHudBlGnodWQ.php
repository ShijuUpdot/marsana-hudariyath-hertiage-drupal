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

/* sites/marsana.com/themes/custom/marsana/templates/views/eat/views-view-unformatted--eat-menu-listing.html.twig */
class __TwigTemplate_8ac038b655b1ba31460cdbb5a88f7857 extends Template
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
            yield "<div class=\"menu-links-groups eat-menu-links\">
    <span><a href=\"/";
            // line 22
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::lower($this->env->getCharset(), $this->sandbox->ensureToStringAllowed(($context["langcode"] ?? null), 22, $this->source)), "html", null, true);
            yield "/";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::lower($this->env->getCharset(), $this->sandbox->ensureToStringAllowed($context["key"], 22, $this->source)), "html", null, true);
            yield "\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t($this->sandbox->ensureToStringAllowed($context["key"], 22, $this->source)));
            yield "</a></span>
                           
    ";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["items"]);
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
            foreach ($context['_seq'] as $context["ikey"] => $context["frow"]) {
                // line 25
                yield "    ";
                $context["fkey"] = CoreExtension::getAttribute($this->env, $this->source, $context["frow"], 0, [], "any", false, false, true, 25);
                // line 26
                yield "    ";
                $context["row"] = CoreExtension::getAttribute($this->env, $this->source, $context["frow"], 1, [], "any", false, false, true, 26);
                // line 27
                yield "    ";
                $context["title"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed((($__internal_compile_0 = (($__internal_compile_1 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_2 = CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "content", [], "any", false, false, true, 27)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 27), "render_tokens", [], "any", false, false, true, 27)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[($context["fkey"] ?? null)] ?? null) : null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["{{ field_listing_title }}"] ?? null) : null), 27, $this->source)));
                // line 28
                yield "    ";
                $context["link"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed((($__internal_compile_3 = (($__internal_compile_4 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_5 = CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "content", [], "any", false, false, true, 28)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 28), "render_tokens", [], "any", false, false, true, 28)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[($context["fkey"] ?? null)] ?? null) : null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["{{ view_node }}"] ?? null) : null), 28, $this->source)));
                // line 29
                yield "    ";
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
                yield "     <a href=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["link"] ?? null), 34, $this->source), "html", null, true);
                yield "#";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ("eat-" . $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 34), 34, $this->source)), "html", null, true);
                yield "\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 34, $this->source));
                yield "</a>
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
            unset($context['_seq'], $context['_iterated'], $context['ikey'], $context['frow'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            yield "     </div>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['items'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        yield "
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["menu", "langcode", "loop"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "sites/marsana.com/themes/custom/marsana/templates/views/eat/views-view-unformatted--eat-menu-listing.html.twig";
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
        return array (  129 => 39,  121 => 36,  100 => 34,  97 => 33,  94 => 32,  91 => 31,  88 => 30,  85 => 29,  82 => 28,  79 => 27,  76 => 26,  73 => 25,  56 => 24,  47 => 22,  44 => 21,  40 => 20,);
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
<div class=\"menu-links-groups eat-menu-links\">
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
     <a href=\"{{ link }}#{{ 'eat-' ~ loop.index }}\">{{ title | raw }}</a>
    {% endfor %}
     </div>

{% endfor %}

", "sites/marsana.com/themes/custom/marsana/templates/views/eat/views-view-unformatted--eat-menu-listing.html.twig", "/var/www/html/Hudayriyat/project/web/sites/marsana.com/themes/custom/marsana/templates/views/eat/views-view-unformatted--eat-menu-listing.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 20, "set" => 25, "if" => 29);
        static $filters = array("escape" => 22, "lower" => 22, "t" => 22, "trim" => 27, "striptags" => 27, "raw" => 34);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set', 'if'],
                ['escape', 'lower', 't', 'trim', 'striptags', 'raw'],
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
