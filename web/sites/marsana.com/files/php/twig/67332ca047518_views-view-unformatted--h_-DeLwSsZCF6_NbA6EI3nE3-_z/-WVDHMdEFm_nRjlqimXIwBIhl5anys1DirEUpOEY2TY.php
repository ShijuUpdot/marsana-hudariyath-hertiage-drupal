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

/* sites/marsana.com/themes/custom/marsana/templates/views/menu/views-view-unformatted--home-dock-menu.html.twig */
class __TwigTemplate_7279e9e95cd8486b1013165085360341 extends Template
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
        yield " <li data-img=\"images/dynamic/dock.jpg\" data-class=\"main-sky-100\">
   <div class=\"container\">
    <div class=\"row\">
     <div class=\"col\">
        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["home_menu"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["items"]) {
            // line 25
            yield "            <a href=\"/";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::lower($this->env->getCharset(), $this->sandbox->ensureToStringAllowed(($context["langcode"] ?? null), 25, $this->source)), "html", null, true);
            yield "/";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::lower($this->env->getCharset(), $this->sandbox->ensureToStringAllowed($context["key"], 25, $this->source)), "html", null, true);
            yield "\"><h2>";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t(Twig\Extension\CoreExtension::upper($this->env->getCharset(), $this->sandbox->ensureToStringAllowed($context["key"], 25, $this->source))));
            yield "</h2></a>    
            <div class=\"strip-content\">                 
                ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["items"]);
            foreach ($context['_seq'] as $context["ikey"] => $context["frow"]) {
                // line 28
                yield "                    ";
                $context["fkey"] = CoreExtension::getAttribute($this->env, $this->source, $context["frow"], 0, [], "any", false, false, true, 28);
                // line 29
                yield "                    ";
                $context["row"] = CoreExtension::getAttribute($this->env, $this->source, $context["frow"], 1, [], "any", false, false, true, 29);
                // line 30
                yield "                    ";
                $context["title"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed((($__internal_compile_0 = (($__internal_compile_1 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_2 = CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "content", [], "any", false, false, true, 30)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 30), "render_tokens", [], "any", false, false, true, 30)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[($context["fkey"] ?? null)] ?? null) : null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["{{ field_listing_title }}"] ?? null) : null), 30, $this->source)));
                // line 31
                yield "                    ";
                $context["link"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed((($__internal_compile_3 = (($__internal_compile_4 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_5 = CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "content", [], "any", false, false, true, 31)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 31), "render_tokens", [], "any", false, false, true, 31)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[($context["fkey"] ?? null)] ?? null) : null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["{{ view_node }}"] ?? null) : null), 31, $this->source)));
                // line 32
                yield "                    ";
                if ((($context["langcode"] ?? null) == "AR")) {
                    // line 33
                    yield "                        ";
                    $context["url_title"] = t($this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 33, $this->source));
                    // line 34
                    yield "                    ";
                } else {
                    // line 35
                    yield "                        ";
                    $context["url_title"] = ($context["title"] ?? null);
                    // line 36
                    yield "                    ";
                }
                // line 37
                yield "                    <a href=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["link"] ?? null), 37, $this->source), "html", null, true);
                yield "#";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::replace(Twig\Extension\CoreExtension::lower($this->env->getCharset(), $this->sandbox->ensureToStringAllowed(($context["url_title"] ?? null), 37, $this->source)), [" " => "-"]), "html", null, true);
                yield "\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::upper($this->env->getCharset(), $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 37, $this->source)), "html", null, true);
                yield "</a>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['ikey'], $context['frow'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            yield "            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['items'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        yield "    </div>
   </div>
 </div>
</li>";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["home_menu", "langcode"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "sites/marsana.com/themes/custom/marsana/templates/views/menu/views-view-unformatted--home-dock-menu.html.twig";
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
        return array (  111 => 41,  104 => 39,  91 => 37,  88 => 36,  85 => 35,  82 => 34,  79 => 33,  76 => 32,  73 => 31,  70 => 30,  67 => 29,  64 => 28,  60 => 27,  50 => 25,  46 => 24,  40 => 20,);
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
 <li data-img=\"images/dynamic/dock.jpg\" data-class=\"main-sky-100\">
   <div class=\"container\">
    <div class=\"row\">
     <div class=\"col\">
        {% for key, items in home_menu %}
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
                    <a href=\"{{ link }}#{{ url_title|lower|replace({\" \":\"-\"}) }}\">{{ title|raw|upper }}</a>
                {% endfor %}
            </div>
        {% endfor %}
    </div>
   </div>
 </div>
</li>", "sites/marsana.com/themes/custom/marsana/templates/views/menu/views-view-unformatted--home-dock-menu.html.twig", "/var/www/html/Hudayriyat/project/web/sites/marsana.com/themes/custom/marsana/templates/views/menu/views-view-unformatted--home-dock-menu.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 24, "set" => 28, "if" => 32);
        static $filters = array("escape" => 25, "lower" => 25, "t" => 25, "upper" => 25, "trim" => 30, "striptags" => 30, "replace" => 37, "raw" => 37);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set', 'if'],
                ['escape', 'lower', 't', 'upper', 'trim', 'striptags', 'replace', 'raw'],
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
