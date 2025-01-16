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

/* sites/marsana.com/themes/custom/marsana/templates/views/home/views-view-unformatted--home-eat-pop-up-content.html.twig */
class __TwigTemplate_9945cce26ee3dcaf67b8bd0eba26aac1 extends Template
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
        if ((Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["langcode"] ?? null)) == "ar")) {
            // line 21
            yield "    ";
            $context["menuTitle"] = Drupal\twig_tweak\TwigTweakExtension::drupalConfig("marsana_custom_configs.settings", "custom_configs_upload_menu_title_ar");
        } else {
            // line 23
            yield "    ";
            $context["menuTitle"] = Drupal\twig_tweak\TwigTweakExtension::drupalConfig("marsana_custom_configs.settings", "custom_configs_upload_menu_title_en");
        }
        // line 25
        yield "<!-- F&B Modals Here -->
";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["eatListing"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["row"]) {
            // line 27
            yield "    ";
            if (Twig\Extension\CoreExtension::length($this->env->getCharset(), $context["row"])) {
                // line 28
                yield "        <div class=\"modal fade fnbModal\" id=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::lower($this->env->getCharset(), Twig\Extension\CoreExtension::replace(Twig\Extension\CoreExtension::trim($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "amenities", [], "any", false, false, true, 28), 28, $this->source)), [" " => "-", "." => "-", "&#039;" => "-", "&amp;" => "-"])), "html", null, true);
                yield "-modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::lower($this->env->getCharset(), Twig\Extension\CoreExtension::replace(Twig\Extension\CoreExtension::trim($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "amenities", [], "any", false, false, true, 28), 28, $this->source)), [" " => "-", "." => "-", "&#039;" => "-", "&amp;" => "-"])), "html", null, true);
                yield "-modalTitle\" aria-hidden=\"true\">
            <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <img src=\"";
                // line 32
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "bg_image", [], "any", false, false, true, 32), 32, $this->source)), "html", null, true);
                yield "\" alt=\"\" class=\"modal-header-image\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                    </div>
                    <div class=\"modal-body\">
                        <div class=\"container\">
                            <div class=\"row\">
                                <div class=\"col-4\">
                                ";
                // line 41
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["row"], "logo", [], "any", false, false, true, 41) && (CoreExtension::getAttribute($this->env, $this->source, $context["row"], "logo", [], "any", false, false, true, 41) != "/"))) {
                    // line 42
                    yield "                                    <div class=\"modal-logo-wrapper\">
                                        <img src=\"";
                    // line 43
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "logo", [], "any", false, false, true, 43), 43, $this->source)), "html", null, true);
                    yield "\" alt=\"logo\">
                                    </div>
                                ";
                }
                // line 46
                yield "                                </div>
                                <div class=\"col-8\">
                                    <div class=\"modal-opening\">
                                        <!-- <img src=\"/images/static/hour.svg\" alt=\"\">
                                        <p class=\"body-text small\">Open every day from 7:00 am till 11:00 pm </p> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"modal-footer p-4\">
                        <div class=\"container\">
                            <div class=\"row py-5\">
                                ";
                // line 59
                if (((((Twig\Extension\CoreExtension::trim(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "phone_url", [], "any", false, false, true, 59)) || Twig\Extension\CoreExtension::trim(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "menu_pdf", [], "any", false, false, true, 59))) || Twig\Extension\CoreExtension::trim(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "menu_link_url", [], "any", false, false, true, 59))) || Twig\Extension\CoreExtension::trim(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "insta_url", [], "any", false, false, true, 59))) || Twig\Extension\CoreExtension::trim(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "website_link_url", [], "any", false, false, true, 59)))) {
                    // line 60
                    yield "                                    <div class=\"col-md-4\">
                                        <ul class=\"modal-listing-info\">
                                        ";
                    // line 62
                    if (Twig\Extension\CoreExtension::trim(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "phone_url", [], "any", false, false, true, 62))) {
                        // line 63
                        yield "                                            <li>
                                                <img src=\"/images/static/icon-phone-white.svg\" alt=\"\">
                                                <a href=\"";
                        // line 65
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "phone_url", [], "any", false, false, true, 65), 65, $this->source)), "html", null, true);
                        yield "\" target=\"_blank\" class=\"body-text small color-white\">";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "phone_title", [], "any", false, false, true, 65), 65, $this->source)), "html", null, true);
                        yield "</a>
                                            </li>
                                        ";
                    }
                    // line 68
                    yield "                                        ";
                    if (Twig\Extension\CoreExtension::trim(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "menu_pdf", [], "any", false, false, true, 68))) {
                        // line 69
                        yield "                                            <li>
                                                <img src=\"/images/static/icon-menu.svg\" alt=\"\">
                                                <a href=\"";
                        // line 71
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "menu_pdf", [], "any", false, false, true, 71), 71, $this->source)), "html", null, true);
                        yield "\" target=\"_blank\" class=\"body-text small color-white\">";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim($this->sandbox->ensureToStringAllowed(($context["menuTitle"] ?? null), 71, $this->source)), "html", null, true);
                        yield "</a>
                                            </li>
                                        ";
                    } elseif (Twig\Extension\CoreExtension::trim(CoreExtension::getAttribute($this->env, $this->source,                     // line 73
$context["row"], "menu_link_url", [], "any", false, false, true, 73))) {
                        // line 74
                        yield "                                            <li>
                                                <img src=\"/images/static/icon-menu.svg\" alt=\"\">
                                                <a href=\"";
                        // line 76
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "menu_link_url", [], "any", false, false, true, 76), 76, $this->source)), "html", null, true);
                        yield "\" target=\"_blank\" class=\"body-text small color-white\">";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "menu_link_title", [], "any", false, false, true, 76), 76, $this->source)), "html", null, true);
                        yield "</a>
                                            </li>
                                        ";
                    }
                    // line 79
                    yield "                                        ";
                    if (Twig\Extension\CoreExtension::trim(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "insta_url", [], "any", false, false, true, 79))) {
                        // line 80
                        yield "                                            <li>
                                                <img src=\"/images/static/insta-white.svg\" alt=\"\">
                                                <a href=\"";
                        // line 82
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "insta_url", [], "any", false, false, true, 82), 82, $this->source)), "html", null, true);
                        yield "\" target=\"_blank\" class=\"body-text small color-white\">";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "insta_title", [], "any", false, false, true, 82), 82, $this->source)), "html", null, true);
                        yield "</a>
                                            </li>
                                        ";
                    }
                    // line 85
                    yield "                                        ";
                    if (Twig\Extension\CoreExtension::trim(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "website_link_url", [], "any", false, false, true, 85))) {
                        // line 86
                        yield "                                            <li>
                                                <img src=\"/images/static/icon-link.svg\" alt=\"\">
                                                <a href=\"";
                        // line 88
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "website_link_url", [], "any", false, false, true, 88), 88, $this->source)), "html", null, true);
                        yield "\" target=\"_blank\" class=\"body-text small color-white\">";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "website_link_title", [], "any", false, false, true, 88), 88, $this->source)), "html", null, true);
                        yield "</a>
                                            </li>
                                        ";
                    }
                    // line 91
                    yield "                                        </ul>
                                    </div>
                                ";
                }
                // line 94
                yield "                                <div class=\"col-md-8\">
                                    <p class=\"body-text color-white mb-3\">";
                // line 95
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags(Twig\Extension\CoreExtension::titleCase($this->env->getCharset(), $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "title", [], "any", false, false, true, 95), 95, $this->source)))), "html", null, true);
                yield "</p>
                                    <p class=\"body-text small color-white\">";
                // line 96
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "description", [], "any", false, false, true, 96), 96, $this->source))), "html", null, true);
                yield "</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, views_embed_view("home_play_pop_up_content"), "html", null, true);
        yield "
";
        // line 107
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, views_embed_view("home_shop_pop_up_content"), "html", null, true);
        yield "
";
        // line 108
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, views_embed_view("home_dock_pop_up_content"), "html", null, true);
        yield "
";
        // line 109
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, views_embed_view("home_relax_pop_up_content"), "html", null, true);
        yield "

<!-- End F&B Modals Here -->
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["langcode", "eatListing"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "sites/marsana.com/themes/custom/marsana/templates/views/home/views-view-unformatted--home-eat-pop-up-content.html.twig";
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
        return array (  226 => 109,  222 => 108,  218 => 107,  214 => 106,  198 => 96,  194 => 95,  191 => 94,  186 => 91,  178 => 88,  174 => 86,  171 => 85,  163 => 82,  159 => 80,  156 => 79,  148 => 76,  144 => 74,  142 => 73,  135 => 71,  131 => 69,  128 => 68,  120 => 65,  116 => 63,  114 => 62,  110 => 60,  108 => 59,  93 => 46,  87 => 43,  84 => 42,  82 => 41,  70 => 32,  60 => 28,  57 => 27,  53 => 26,  50 => 25,  46 => 23,  42 => 21,  40 => 20,);
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
{% if (langcode|lower == 'ar') %}
    {% set menuTitle = drupal_config('marsana_custom_configs.settings', 'custom_configs_upload_menu_title_ar') %}
{% else %}
    {% set menuTitle = drupal_config('marsana_custom_configs.settings', 'custom_configs_upload_menu_title_en') %}
{% endif %}
<!-- F&B Modals Here -->
{% for key, row in eatListing %}
    {% if row|length %}
        <div class=\"modal fade fnbModal\" id=\"{{ row.amenities|trim|replace({\" \":\"-\", \".\":\"-\", '&#039;':\"-\", '&amp;' : '-'})|lower }}-modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"{{ row.amenities|trim|replace({\" \":\"-\", \".\":\"-\", '&#039;':\"-\", '&amp;' : '-'})|lower }}-modalTitle\" aria-hidden=\"true\">
            <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <img src=\"{{ row.bg_image|trim }}\" alt=\"\" class=\"modal-header-image\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                    </div>
                    <div class=\"modal-body\">
                        <div class=\"container\">
                            <div class=\"row\">
                                <div class=\"col-4\">
                                {% if row.logo and row.logo != '/' %}
                                    <div class=\"modal-logo-wrapper\">
                                        <img src=\"{{ row.logo|trim }}\" alt=\"logo\">
                                    </div>
                                {% endif %}
                                </div>
                                <div class=\"col-8\">
                                    <div class=\"modal-opening\">
                                        <!-- <img src=\"/images/static/hour.svg\" alt=\"\">
                                        <p class=\"body-text small\">Open every day from 7:00 am till 11:00 pm </p> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"modal-footer p-4\">
                        <div class=\"container\">
                            <div class=\"row py-5\">
                                {% if row.phone_url|trim or row.menu_pdf | trim or row.menu_link_url|trim or row.insta_url|trim or row.website_link_url|trim %}
                                    <div class=\"col-md-4\">
                                        <ul class=\"modal-listing-info\">
                                        {% if row.phone_url|trim %}
                                            <li>
                                                <img src=\"/images/static/icon-phone-white.svg\" alt=\"\">
                                                <a href=\"{{ row.phone_url|trim }}\" target=\"_blank\" class=\"body-text small color-white\">{{ row.phone_title | trim }}</a>
                                            </li>
                                        {% endif %}
                                        {% if row.menu_pdf|trim %}
                                            <li>
                                                <img src=\"/images/static/icon-menu.svg\" alt=\"\">
                                                <a href=\"{{ row.menu_pdf | trim }}\" target=\"_blank\" class=\"body-text small color-white\">{{ menuTitle|raw|trim }}</a>
                                            </li>
                                        {% elseif row.menu_link_url|trim %}
                                            <li>
                                                <img src=\"/images/static/icon-menu.svg\" alt=\"\">
                                                <a href=\"{{ row.menu_link_url|trim }}\" target=\"_blank\" class=\"body-text small color-white\">{{ row.menu_link_title|trim }}</a>
                                            </li>
                                        {% endif %}
                                        {% if row.insta_url|trim %}
                                            <li>
                                                <img src=\"/images/static/insta-white.svg\" alt=\"\">
                                                <a href=\"{{ row.insta_url|trim }}\" target=\"_blank\" class=\"body-text small color-white\">{{ row.insta_title|trim }}</a>
                                            </li>
                                        {% endif %}
                                        {% if row.website_link_url|trim %}
                                            <li>
                                                <img src=\"/images/static/icon-link.svg\" alt=\"\">
                                                <a href=\"{{ row.website_link_url|trim }}\" target=\"_blank\" class=\"body-text small color-white\">{{ row.website_link_title|trim }}</a>
                                            </li>
                                        {% endif %}
                                        </ul>
                                    </div>
                                {% endif %}
                                <div class=\"col-md-8\">
                                    <p class=\"body-text color-white mb-3\">{{ row.title|title|raw|striptags|trim }}</p>
                                    <p class=\"body-text small color-white\">{{ row.description|striptags|trim }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    {% endif %}
{% endfor %}
{{ drupal_view('home_play_pop_up_content') }}
{{ drupal_view('home_shop_pop_up_content') }}
{{ drupal_view('home_dock_pop_up_content') }}
{{ drupal_view('home_relax_pop_up_content') }}

<!-- End F&B Modals Here -->
", "sites/marsana.com/themes/custom/marsana/templates/views/home/views-view-unformatted--home-eat-pop-up-content.html.twig", "/var/www/html/Hudayriyat/project/web/sites/marsana.com/themes/custom/marsana/templates/views/home/views-view-unformatted--home-eat-pop-up-content.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 20, "set" => 21, "for" => 26);
        static $filters = array("lower" => 20, "length" => 27, "escape" => 28, "replace" => 28, "trim" => 28, "raw" => 71, "striptags" => 95, "title" => 95);
        static $functions = array("drupal_config" => 21, "drupal_view" => 106);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'for'],
                ['lower', 'length', 'escape', 'replace', 'trim', 'raw', 'striptags', 'title'],
                ['drupal_config', 'drupal_view'],
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
