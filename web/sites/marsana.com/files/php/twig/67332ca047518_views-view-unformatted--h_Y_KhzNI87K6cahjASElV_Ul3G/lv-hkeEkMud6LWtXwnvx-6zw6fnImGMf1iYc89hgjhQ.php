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

/* sites/marsana.com/themes/custom/marsana/templates/views/home/views-view-unformatted--home-shop-pop-up-content.html.twig */
class __TwigTemplate_0f9913789762d7e8325679076294cd73 extends Template
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
        $context['_seq'] = CoreExtension::ensureTraversable(($context["listing"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["row"]) {
            // line 21
            yield "    ";
            if (Twig\Extension\CoreExtension::length($this->env->getCharset(), $context["row"])) {
                // line 22
                yield "        <div class=\"modal fade fnbModal\" id=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::lower($this->env->getCharset(), Twig\Extension\CoreExtension::replace(Twig\Extension\CoreExtension::trim($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "amenities", [], "any", false, false, true, 22), 22, $this->source)), [" " => "-", "." => "-", "&#039;" => "-", "&amp;" => "-"])), "html", null, true);
                yield "-modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::lower($this->env->getCharset(), Twig\Extension\CoreExtension::replace(Twig\Extension\CoreExtension::trim($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "amenities", [], "any", false, false, true, 22), 22, $this->source)), [" " => "-", "." => "-", "&#039;" => "-", "&amp;" => "-"])), "html", null, true);
                yield "-modalTitle\" aria-hidden=\"true\">
            <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <img src=\"";
                // line 26
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "bg_image", [], "any", false, false, true, 26), 26, $this->source)), "html", null, true);
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
                // line 35
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["row"], "logo", [], "any", false, false, true, 35) && (CoreExtension::getAttribute($this->env, $this->source, $context["row"], "logo", [], "any", false, false, true, 35) != "/"))) {
                    // line 36
                    yield "                                    <div class=\"modal-logo-wrapper\">
                                        <img src=\"";
                    // line 37
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "logo", [], "any", false, false, true, 37), 37, $this->source)), "html", null, true);
                    yield "\" alt=\"\">
                                    </div>
                                ";
                }
                // line 40
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
                // line 53
                if (((((Twig\Extension\CoreExtension::trim(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "phone_url", [], "any", false, false, true, 53)) || Twig\Extension\CoreExtension::trim(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "menu_pdf", [], "any", false, false, true, 53))) || Twig\Extension\CoreExtension::trim(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "menu_link_url", [], "any", false, false, true, 53))) || Twig\Extension\CoreExtension::trim(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "insta_url", [], "any", false, false, true, 53))) || Twig\Extension\CoreExtension::trim(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "website_link_url", [], "any", false, false, true, 53)))) {
                    // line 54
                    yield "                                    <div class=\"col-md-4\">
                                        <ul class=\"modal-listing-info\">
                                        ";
                    // line 56
                    if (Twig\Extension\CoreExtension::trim(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "phone_url", [], "any", false, false, true, 56))) {
                        // line 57
                        yield "                                            <li>
                                                <img src=\"/images/static/icon-phone-white.svg\" alt=\"\">
                                                <a href=\"";
                        // line 59
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "phone_url", [], "any", false, false, true, 59), 59, $this->source)), "html", null, true);
                        yield "\" target=\"_blank\" class=\"body-text small color-white\">";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "phone_title", [], "any", false, false, true, 59), 59, $this->source)), "html", null, true);
                        yield "</a>
                                            </li>
                                        ";
                    }
                    // line 62
                    yield "                                        ";
                    if (Twig\Extension\CoreExtension::trim(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "menu_pdf", [], "any", false, false, true, 62))) {
                        // line 63
                        yield "                                            <li>
                                                <img src=\"/images/static/icon-menu.svg\" alt=\"\">
                                                <a href=\"";
                        // line 65
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "menu_pdf", [], "any", false, false, true, 65), 65, $this->source)), "html", null, true);
                        yield "\" target=\"_blank\" class=\"body-text small color-white\">";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim($this->sandbox->ensureToStringAllowed(($context["menuTitle"] ?? null), 65, $this->source)), "html", null, true);
                        yield "</a>
                                            </li>
                                        ";
                    } elseif (Twig\Extension\CoreExtension::trim(CoreExtension::getAttribute($this->env, $this->source,                     // line 67
$context["row"], "menu_link_url", [], "any", false, false, true, 67))) {
                        // line 68
                        yield "                                            <li>
                                                <img src=\"/images/static/icon-menu.svg\" alt=\"\">
                                                <a href=\"";
                        // line 70
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "menu_link_url", [], "any", false, false, true, 70), 70, $this->source)), "html", null, true);
                        yield "\" target=\"_blank\" class=\"body-text small color-white\">";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "menu_link_title", [], "any", false, false, true, 70), 70, $this->source)), "html", null, true);
                        yield "</a>
                                            </li>
                                        ";
                    }
                    // line 73
                    yield "                                        ";
                    if (Twig\Extension\CoreExtension::trim(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "insta_url", [], "any", false, false, true, 73))) {
                        // line 74
                        yield "                                            <li>
                                                <img src=\"/images/static/insta-white.svg\" alt=\"\">
                                                <a href=\"";
                        // line 76
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "insta_url", [], "any", false, false, true, 76), 76, $this->source)), "html", null, true);
                        yield "\" target=\"_blank\" class=\"body-text small color-white\">";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "insta_title", [], "any", false, false, true, 76), 76, $this->source)), "html", null, true);
                        yield "</a>
                                            </li>
                                        ";
                    }
                    // line 79
                    yield "                                        ";
                    if (Twig\Extension\CoreExtension::trim(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "website_link_url", [], "any", false, false, true, 79))) {
                        // line 80
                        yield "                                            <li>
                                                <img src=\"/images/static/icon-link.svg\" alt=\"\">
                                                <a href=\"";
                        // line 82
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "website_link_url", [], "any", false, false, true, 82), 82, $this->source)), "html", null, true);
                        yield "\" target=\"_blank\" class=\"body-text small color-white\">";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "website_link_title", [], "any", false, false, true, 82), 82, $this->source)), "html", null, true);
                        yield "</a>
                                            </li>
                                        ";
                    }
                    // line 85
                    yield "                                        </ul>
                                    </div>
                                ";
                }
                // line 88
                yield "                                <div class=\"col-md-8\">
                                    <p class=\"body-text color-white mb-3\">";
                // line 89
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags(Twig\Extension\CoreExtension::titleCase($this->env->getCharset(), $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "title", [], "any", false, false, true, 89), 89, $this->source)))), "html", null, true);
                yield "</p>
                                    <p class=\"body-text small color-white\">";
                // line 90
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "description", [], "any", false, false, true, 90), 90, $this->source))), "html", null, true);
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
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["listing", "menuTitle"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "sites/marsana.com/themes/custom/marsana/templates/views/home/views-view-unformatted--home-shop-pop-up-content.html.twig";
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
        return array (  185 => 90,  181 => 89,  178 => 88,  173 => 85,  165 => 82,  161 => 80,  158 => 79,  150 => 76,  146 => 74,  143 => 73,  135 => 70,  131 => 68,  129 => 67,  122 => 65,  118 => 63,  115 => 62,  107 => 59,  103 => 57,  101 => 56,  97 => 54,  95 => 53,  80 => 40,  74 => 37,  71 => 36,  69 => 35,  57 => 26,  47 => 22,  44 => 21,  40 => 20,);
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
{% for key, row in listing %}
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
                                        <img src=\"{{ row.logo|trim }}\" alt=\"\">
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
{% endfor %}", "sites/marsana.com/themes/custom/marsana/templates/views/home/views-view-unformatted--home-shop-pop-up-content.html.twig", "/var/www/html/Hudayriyat/project/web/sites/marsana.com/themes/custom/marsana/templates/views/home/views-view-unformatted--home-shop-pop-up-content.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 20, "if" => 21);
        static $filters = array("length" => 21, "escape" => 22, "lower" => 22, "replace" => 22, "trim" => 22, "raw" => 65, "striptags" => 89, "title" => 89);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
                ['length', 'escape', 'lower', 'replace', 'trim', 'raw', 'striptags', 'title'],
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
