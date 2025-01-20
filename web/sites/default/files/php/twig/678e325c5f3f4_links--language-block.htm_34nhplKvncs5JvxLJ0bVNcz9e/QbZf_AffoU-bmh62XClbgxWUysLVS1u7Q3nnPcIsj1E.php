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

/* themes/custom/hudayriyat/templates/block/links--language-block.html.twig */
class __TwigTemplate_3469881968629d61eca429cb90535bdd extends Template
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
        // line 34
        $context["aritem"] = "";
        // line 35
        $context["engitem"] = "";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 37
            yield "    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "text", [], "any", false, false, true, 37) == "English")) {
                // line 38
                yield "        ";
                $context["engitem"] = $context["item"];
                // line 39
                yield "    ";
            } else {
                // line 40
                yield "        ";
                $context["aritem"] = $context["item"];
                // line 41
                yield "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        if ((($context["langclass"] ?? null) == "ar")) {
            // line 44
            yield "    <span style=\"display:none;\" class=\"nav-link pl-0 pr-4\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["engitem"] ?? null), "link", [], "any", false, false, true, 44), 44, $this->source), "html", null, true);
            yield "</span>
";
        } else {
            // line 46
            yield "    <span style=\"display:none;\" class=\"nav-link pl-0 pr-4\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["aritem"] ?? null), "link", [], "any", false, false, true, 46), 46, $this->source), "html", null, true);
            yield "</span>
";
        }
        // line 47
        yield "    
";
        // line 48
        if ((($context["langclass"] ?? null) == "ar")) {
            // line 49
            yield "    <a class=\"lang white\" href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_0 = CoreExtension::getAttribute($this->env, $this->source, ($context["engitem"] ?? null), "link", [], "any", false, false, true, 49)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#url"] ?? null) : null), 49, $this->source), "html", null, true);
            yield "\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_1 = CoreExtension::getAttribute($this->env, $this->source, ($context["engitem"] ?? null), "link", [], "any", false, false, true, 49)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["#title"] ?? null) : null), 49, $this->source), "html", null, true);
            yield "</a>
";
        } else {
            // line 51
            yield "    <a class=\"lang white\" href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_2 = CoreExtension::getAttribute($this->env, $this->source, ($context["aritem"] ?? null), "link", [], "any", false, false, true, 51)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["#url"] ?? null) : null), 51, $this->source), "html", null, true);
            yield "\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_3 = CoreExtension::getAttribute($this->env, $this->source, ($context["aritem"] ?? null), "link", [], "any", false, false, true, 51)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["#title"] ?? null) : null), 51, $this->source), "html", null, true);
            yield "</a>
";
        }
        // line 52
        yield "  

    ";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["links", "langclass"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/custom/hudayriyat/templates/block/links--language-block.html.twig";
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
        return array (  102 => 52,  94 => 51,  86 => 49,  84 => 48,  81 => 47,  75 => 46,  69 => 44,  67 => 43,  60 => 41,  57 => 40,  54 => 39,  51 => 38,  48 => 37,  44 => 36,  42 => 35,  40 => 34,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override for a menu block.
 *
 * Available variables:
 * - plugin_id: The ID of the block implementation.
 * - label: The configured label of the block if visible.
 * - configuration: A list of the block's configuration values.
 *   - label: The configured label for the block.
 *   - label_display: The display settings for the label.
 *   - provider: The module or other provider that provided this block plugin.
 *   - Block plugin specific settings will also be stored here.
 * - content: The content of this block.
 * - attributes: HTML attributes for the containing element.
 *   - id: A valid HTML ID and guaranteed unique.
 * - title_attributes: HTML attributes for the title element.
 * - content_attributes: HTML attributes for the content element.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 *
 * Headings should be used on navigation menus that consistently appear on
 * multiple pages. When this menu block's label is configured to not be
 * displayed, it is automatically made invisible using the 'visually-hidden' CSS
 * class, which still keeps it visible for screen-readers and assistive
 * technology. Headings allow screen-reader and keyboard only users to navigate
 * to or skip the links.
 * See http://juicystudio.com/article/screen-readers-display-none.php and
 * http://www.w3.org/TR/WCAG-TECHS/H42.html for more information.
 */
#}
{% set aritem = '' %}
{% set engitem = '' %}
{% for item in links %}
    {% if item.text == 'English' %}
        {% set engitem = item %}
    {% else %}
        {% set aritem = item %}
    {% endif %}
{% endfor %}
{% if langclass == 'ar' %}
    <span style=\"display:none;\" class=\"nav-link pl-0 pr-4\">{{ engitem.link }}</span>
{% else %}
    <span style=\"display:none;\" class=\"nav-link pl-0 pr-4\">{{ aritem.link }}</span>
{% endif %}    
{% if langclass == 'ar' %}
    <a class=\"lang white\" href=\"{{ engitem.link['#url'] }}\">{{ engitem.link['#title'] }}</a>
{% else %}
    <a class=\"lang white\" href=\"{{ aritem.link['#url'] }}\">{{ aritem.link['#title'] }}</a>
{% endif %}  

    ", "themes/custom/hudayriyat/templates/block/links--language-block.html.twig", "C:\\xampp\\htdocs\\hudayriyat\\web\\themes\\custom\\hudayriyat\\templates\\block\\links--language-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 34, "for" => 36, "if" => 37);
        static $filters = array("escape" => 44);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if'],
                ['escape'],
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
