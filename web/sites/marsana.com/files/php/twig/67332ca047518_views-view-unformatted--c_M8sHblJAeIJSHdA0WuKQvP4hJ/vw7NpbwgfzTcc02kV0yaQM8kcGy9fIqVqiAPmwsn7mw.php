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

/* sites/marsana.com/themes/custom/marsana/templates/views/views-view-unformatted--covid-guidelines.html.twig */
class __TwigTemplate_653886ffd145fc7f7a3efe87a30bded2 extends Template
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
            $context["description"] = (($__internal_compile_0 = (($__internal_compile_1 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_2 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 21)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 21), "render_tokens", [], "any", false, false, true, 21)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 21)] ?? null) : null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["{{ field_description }}"] ?? null) : null);
            // line 22
            $context["title"] = (($__internal_compile_3 = (($__internal_compile_4 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_5 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 22)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 22), "render_tokens", [], "any", false, false, true, 22)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 22)] ?? null) : null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["{{ field_title }}"] ?? null) : null);
            // line 23
            $context["short_description"] = (($__internal_compile_6 = (($__internal_compile_7 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_8 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 23)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 23), "render_tokens", [], "any", false, false, true, 23)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 23)] ?? null) : null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["{{ field_short_description }}"] ?? null) : null);
            // line 24
            $context["covid_title"] = Twig\Extension\CoreExtension::split($this->env->getCharset(), Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 24, $this->source))), " ");
            // line 25
            yield "<div class=\"modal fade\" id=\"covidModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"covidModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-dialog-centered modal-xl\" role=\"document\">
  <div class=\"modal-content\">
      <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">";
            // line 28
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Close"));
            yield "</button>
      <div class=\"third-fold bg-orange p-fold\" id=\"covid-section\">
      <div class=\"container\">
                <h2 class=\"mb-md-5 mb-3\">
                ";
            // line 32
            if (((($__internal_compile_9 = ($context["covid_title"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[0] ?? null) : null) && (($__internal_compile_10 = ($context["covid_title"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10[1] ?? null) : null))) {
                // line 33
                yield "                    ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed((($__internal_compile_11 = ($context["covid_title"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11[0] ?? null) : null), 33, $this->source));
                yield " <br> ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed((($__internal_compile_12 = ($context["covid_title"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12[1] ?? null) : null), 33, $this->source));
                yield "
                ";
            }
            // line 35
            yield "                </h2>
                <div class=\"row justify-content-between\">
                <div class=\"col-12 col-md-6 mb-3 mb-md-0\">
                    <div class=\"body-text big bold mb-3\">";
            // line 38
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["short_description"] ?? null), 38, $this->source));
            yield "</div>
                    <div class=\"body-text bold\">
                        ";
            // line 40
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["description"] ?? null), 40, $this->source));
            yield "
                    </div>
                </div>
                <div class=\"col-12 col-md-5\">
                    <ul class=\"icon-listing\">
                    ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["guidelines"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["row"]) {
                // line 46
                yield "                        <li>
                            <img src=\"";
                // line 47
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "icon", [], "any", false, false, true, 47), 47, $this->source)))), "html", null, true);
                yield "\" alt=\"\">
                            <div class=\"body-text bold\">";
                // line 48
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "guidelines_text", [], "any", false, false, true, 48), 48, $this->source)), "html", null, true);
                yield "</div>
                            ";
                // line 49
                if (CoreExtension::getAttribute($this->env, $this->source, $context["row"], "sub_headline", [], "any", false, false, true, 49)) {
                    // line 50
                    yield "                                <div class=\"body-text\">";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "sub_headline", [], "any", false, false, true, 50), 50, $this->source)), "html", null, true);
                    yield "</div>
                            ";
                }
                // line 52
                yield "                        </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            yield "                    </ul>
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
            ->checkDeprecations($context, ["rows", "loop", "guidelines"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "sites/marsana.com/themes/custom/marsana/templates/views/views-view-unformatted--covid-guidelines.html.twig";
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
        return array (  135 => 54,  128 => 52,  122 => 50,  120 => 49,  116 => 48,  112 => 47,  109 => 46,  105 => 45,  97 => 40,  92 => 38,  87 => 35,  79 => 33,  77 => 32,  70 => 28,  65 => 25,  63 => 24,  61 => 23,  59 => 22,  57 => 21,  40 => 20,);
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
{% set description  = row.content['#view'].style_plugin.render_tokens[ loop.index0 ]['{{ field_description }}'] %}
{% set title  = row.content['#view'].style_plugin.render_tokens[ loop.index0 ]['{{ field_title }}']  %}
{% set short_description  = row.content['#view'].style_plugin.render_tokens[ loop.index0 ]['{{ field_short_description }}'] %}
{% set covid_title = title|striptags|trim|split(' ') %}
<div class=\"modal fade\" id=\"covidModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"covidModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-dialog-centered modal-xl\" role=\"document\">
  <div class=\"modal-content\">
      <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">{{ 'Close' | t }}</button>
      <div class=\"third-fold bg-orange p-fold\" id=\"covid-section\">
      <div class=\"container\">
                <h2 class=\"mb-md-5 mb-3\">
                {% if covid_title[0] and covid_title[1] %}
                    {{ covid_title[0] | raw }} <br> {{ covid_title[1] | raw }}
                {% endif %}
                </h2>
                <div class=\"row justify-content-between\">
                <div class=\"col-12 col-md-6 mb-3 mb-md-0\">
                    <div class=\"body-text big bold mb-3\">{{ short_description | raw }}</div>
                    <div class=\"body-text bold\">
                        {{ description | raw }}
                    </div>
                </div>
                <div class=\"col-12 col-md-5\">
                    <ul class=\"icon-listing\">
                    {%  for key, row in guidelines %}
                        <li>
                            <img src=\"{{ file_url(row.icon) | striptags | trim }}\" alt=\"\">
                            <div class=\"body-text bold\">{{ row.guidelines_text | trim }}</div>
                            {% if row.sub_headline %}
                                <div class=\"body-text\">{{ row.sub_headline | trim }}</div>
                            {% endif %}
                        </li>
                    {% endfor %}
                    </ul>
                </div>
                </div>
            </div>
      </div>
  </div>
  </div>
</div>
{% endfor %}", "sites/marsana.com/themes/custom/marsana/templates/views/views-view-unformatted--covid-guidelines.html.twig", "/var/www/html/Hudayriyat/project/web/sites/marsana.com/themes/custom/marsana/templates/views/views-view-unformatted--covid-guidelines.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 20, "set" => 21, "if" => 32);
        static $filters = array("split" => 24, "trim" => 24, "striptags" => 24, "t" => 28, "raw" => 33, "escape" => 47);
        static $functions = array("file_url" => 47);

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set', 'if'],
                ['split', 'trim', 'striptags', 't', 'raw', 'escape'],
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
