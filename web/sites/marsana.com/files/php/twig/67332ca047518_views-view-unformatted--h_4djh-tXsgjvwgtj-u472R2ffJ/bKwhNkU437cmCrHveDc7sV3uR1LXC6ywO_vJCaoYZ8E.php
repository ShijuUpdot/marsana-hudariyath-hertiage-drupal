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

/* sites/marsana.com/themes/custom/marsana/templates/views/views-view-unformatted--home-eat-menu.html.twig */
class __TwigTemplate_76e1095a229b695b77ea6fc177a909eb extends Template
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
        yield " <li data-img=\"images/dynamic/restaurant-header.jpg\" data-class=\"main-sunset-75\">

        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["home_menu"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["items"]) {
            // line 23
            yield "          <div class=\"container\">
    <div class=\"row\">
     <div class=\"col\">
            <a href=\"/";
            // line 26
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::lower($this->env->getCharset(), $this->sandbox->ensureToStringAllowed(($context["langcode"] ?? null), 26, $this->source)), "html", null, true);
            yield "/";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::lower($this->env->getCharset(), $this->sandbox->ensureToStringAllowed($context["key"], 26, $this->source)), "html", null, true);
            yield "\"><h2>";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t(Twig\Extension\CoreExtension::upper($this->env->getCharset(), $this->sandbox->ensureToStringAllowed($context["key"], 26, $this->source))));
            yield "</h2></a>    
            <div class=\"strip-content\">                 
                ";
            // line 28
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
                // line 29
                yield "                    ";
                $context["fkey"] = CoreExtension::getAttribute($this->env, $this->source, $context["frow"], 0, [], "any", false, false, true, 29);
                // line 30
                yield "                    ";
                $context["row"] = CoreExtension::getAttribute($this->env, $this->source, $context["frow"], 1, [], "any", false, false, true, 30);
                // line 31
                yield "                    ";
                $context["title"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed((($__internal_compile_0 = (($__internal_compile_1 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_2 = CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "content", [], "any", false, false, true, 31)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 31), "render_tokens", [], "any", false, false, true, 31)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[($context["fkey"] ?? null)] ?? null) : null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["{{ field_listing_title }}"] ?? null) : null), 31, $this->source)));
                // line 32
                yield "                    ";
                $context["link"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed((($__internal_compile_3 = (($__internal_compile_4 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_5 = CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "content", [], "any", false, false, true, 32)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 32), "render_tokens", [], "any", false, false, true, 32)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[($context["fkey"] ?? null)] ?? null) : null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["{{ view_node }}"] ?? null) : null), 32, $this->source)));
                // line 33
                yield "                    ";
                if ((($context["langcode"] ?? null) == "AR")) {
                    // line 34
                    yield "                        ";
                    $context["url_title"] = t($this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 34, $this->source));
                    // line 35
                    yield "                    ";
                } else {
                    // line 36
                    yield "                        ";
                    $context["url_title"] = ($context["title"] ?? null);
                    // line 37
                    yield "                    ";
                }
                // line 38
                yield "                    <a href=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["link"] ?? null), 38, $this->source), "html", null, true);
                yield "#";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ("eat-" . $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 38), 38, $this->source)), "html", null, true);
                yield "\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::upper($this->env->getCharset(), $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 38, $this->source)));
                yield "</a>
                    ";
                // line 40
                yield "                ";
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
            // line 41
            yield "            </div>
                </div>
   </div>
 </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['items'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        yield "</li>";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["home_menu", "langcode", "loop"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "sites/marsana.com/themes/custom/marsana/templates/views/views-view-unformatted--home-eat-menu.html.twig";
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
        return array (  139 => 46,  129 => 41,  115 => 40,  106 => 38,  103 => 37,  100 => 36,  97 => 35,  94 => 34,  91 => 33,  88 => 32,  85 => 31,  82 => 30,  79 => 29,  62 => 28,  53 => 26,  48 => 23,  44 => 22,  40 => 20,);
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
 <li data-img=\"images/dynamic/restaurant-header.jpg\" data-class=\"main-sunset-75\">

        {% for key, items in home_menu %}
          <div class=\"container\">
    <div class=\"row\">
     <div class=\"col\">
            <a href=\"/{{ langcode | lower }}/{{ key|lower }}\"><h2>{{ key|upper|t }}</h2></a>    
            <div class=\"strip-content\">                 
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
                    <a href=\"{{ link }}#{{ 'eat-' ~ loop.index }}\">{{ title|upper|raw }}</a>
                    {# <a href=\"{{ link }}#{{ url_title|lower|replace({\" \":\"-\"}) }}\">{{ title|upper }}</a> #}
                {% endfor %}
            </div>
                </div>
   </div>
 </div>
        {% endfor %}
</li>", "sites/marsana.com/themes/custom/marsana/templates/views/views-view-unformatted--home-eat-menu.html.twig", "/var/www/html/Hudayriyat/project/web/sites/marsana.com/themes/custom/marsana/templates/views/views-view-unformatted--home-eat-menu.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 22, "set" => 29, "if" => 33);
        static $filters = array("escape" => 26, "lower" => 26, "t" => 26, "upper" => 26, "trim" => 31, "striptags" => 31, "raw" => 38);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set', 'if'],
                ['escape', 'lower', 't', 'upper', 'trim', 'striptags', 'raw'],
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
