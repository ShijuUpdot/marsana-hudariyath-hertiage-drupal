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

/* sites/marsana.com/themes/custom/marsana/templates/views/views-view-unformatted--home.html.twig */
class __TwigTemplate_54dfb25f18164d5b642e567271602c02 extends Template
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
            // line 22
            yield "<div class=\"new-animation-main-wrapper\">
";
            // line 23
            $context["text"] = (($__internal_compile_0 = (($__internal_compile_1 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_2 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 23)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 23), "render_tokens", [], "any", false, false, true, 23)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 23)] ?? null) : null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["{{ field_hero_image_title }}"] ?? null) : null);
            // line 24
            yield "    
        <!-- SLIDER SECTION -->
        <div class=\"slider-main\">
            <div class=\"swiper-container\">
                <div class=\"swiper-wrapper\">
                    ";
            // line 29
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_3 = (($__internal_compile_4 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_5 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 29)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 29), "render_tokens", [], "any", false, false, true, 29)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 29)] ?? null) : null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["{{ field_slider_content }}"] ?? null) : null), 29, $this->source), "html", null, true);
            yield "
                </div>
                <!-- Add Pagination -->
                <div class=\"container swiper-pagination\"></div>
                <!-- Add Arrows -->
                <div class=\"swiper-button-next\"></div>
                <div class=\"swiper-button-prev\"></div>
            </div>
        </div>

         <!-- LINKS SECTION -->
        <div class=\"new-strips-links\">
            <!-- STRIPS -->
            <div class=\"new-strips-wrapper\">
                <span class=\"bg-coral-50\"></span>
                <span class=\"bg-coral-100\"></span>
                <span class=\"bg-sunshine-100\"></span>
                <span class=\"bg-sunset-75\"></span>
                <span class=\"bg-sky-100\"></span>
                <span class=\"bg-grass-100\"></span>
            </div>
            <ul>
                ";
            // line 51
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(views_embed_view("home_eat_menu")), "html", null, true);
            yield "
                ";
            // line 52
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(views_embed_view("home_play_menu")), "html", null, true);
            yield "
                ";
            // line 53
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(views_embed_view("home_relax_menu")), "html", null, true);
            yield "
                ";
            // line 54
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(views_embed_view("home_shop_menu")), "html", null, true);
            yield "
                ";
            // line 55
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(views_embed_view("home_dock_menu")), "html", null, true);
            yield "
                <!-- Event Calender Link -->
                <li data-img=\"images/dynamic/restaurant-header.jpg\" data-class=\"main-grass-100\" style=\"z-index: 1;\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col\">
                            <a href=\"/";
            // line 61
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["langcode"] ?? null), 61, $this->source), "html", null, true);
            yield "/events\">
                            ";
            // line 62
            if ((($context["langcode"] ?? null) == "en")) {
                // line 63
                yield "                                <h2 style=\"opacity: 1;\">Events</h2>
                            ";
            } else {
                // line 65
                yield "                                <h2 style=\"opacity: 1;\">حدث</h2>
                            ";
            }
            // line 67
            yield "                            </a>
                        </div>
                    </div>
                </div>
                </li>
                <!-- Event Calender Link -->


            </ul>
        </div>

        <!-- MOBILE LINKS SECTION -->
        <div class=\"new-mobile-strips-links\">
            <ul>
                ";
            // line 81
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, views_embed_view("home_mobile_eat_menu"), "html", null, true);
            yield "
                ";
            // line 82
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, views_embed_view("home_mobile_play_menu"), "html", null, true);
            yield "
                ";
            // line 83
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(views_embed_view("home_mobile_relax_menu")), "html", null, true);
            yield "
                ";
            // line 84
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(views_embed_view("home_mobile_shop_menu")), "html", null, true);
            yield "
                ";
            // line 85
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(views_embed_view("home_mobile_dock_menu")), "html", null, true);
            yield "
                <!-- Event Calender -->
                <li data-img=\"images/dynamic/restaurant-header.jpg\" class=\"bg-grass-100\">
                ";
            // line 88
            if ((($context["langcode"] ?? null) == "en")) {
                // line 89
                yield "                    <h2>Events</h2>
                ";
            } else {
                // line 91
                yield "                    <h2>حدث</h2>
                ";
            }
            // line 93
            yield "                <div class=\"strip-content bg-grass-100\">
                    <a href=\"/";
            // line 94
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["langcode"] ?? null), 94, $this->source), "html", null, true);
            yield "/events\">
                        ";
            // line 95
            if ((($context["langcode"] ?? null) == "en")) {
                // line 96
                yield "                            <h2>Events</h2>
                        ";
            } else {
                // line 98
                yield "                            <h2>حدث</h2>
                        ";
            }
            // line 100
            yield "                    </a>
                </div>
                </li>
                <!-- Event Calender -->
            </ul>
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
            ->checkDeprecations($context, ["rows", "loop", "langcode"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "sites/marsana.com/themes/custom/marsana/templates/views/views-view-unformatted--home.html.twig";
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
        return array (  201 => 100,  197 => 98,  193 => 96,  191 => 95,  187 => 94,  184 => 93,  180 => 91,  176 => 89,  174 => 88,  168 => 85,  164 => 84,  160 => 83,  156 => 82,  152 => 81,  136 => 67,  132 => 65,  128 => 63,  126 => 62,  122 => 61,  113 => 55,  109 => 54,  105 => 53,  101 => 52,  97 => 51,  72 => 29,  65 => 24,  63 => 23,  60 => 22,  43 => 21,  40 => 20,);
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
<div class=\"new-animation-main-wrapper\">
{% set text = row.content['#view'].style_plugin.render_tokens[ loop.index0 ]['{{ field_hero_image_title }}'] %}
    
        <!-- SLIDER SECTION -->
        <div class=\"slider-main\">
            <div class=\"swiper-container\">
                <div class=\"swiper-wrapper\">
                    {{ row.content['#view'].style_plugin.render_tokens[ loop.index0 ]['{{ field_slider_content }}'] }}
                </div>
                <!-- Add Pagination -->
                <div class=\"container swiper-pagination\"></div>
                <!-- Add Arrows -->
                <div class=\"swiper-button-next\"></div>
                <div class=\"swiper-button-prev\"></div>
            </div>
        </div>

         <!-- LINKS SECTION -->
        <div class=\"new-strips-links\">
            <!-- STRIPS -->
            <div class=\"new-strips-wrapper\">
                <span class=\"bg-coral-50\"></span>
                <span class=\"bg-coral-100\"></span>
                <span class=\"bg-sunshine-100\"></span>
                <span class=\"bg-sunset-75\"></span>
                <span class=\"bg-sky-100\"></span>
                <span class=\"bg-grass-100\"></span>
            </div>
            <ul>
                {{ drupal_view('home_eat_menu')|render }}
                {{ drupal_view('home_play_menu')|render }}
                {{ drupal_view('home_relax_menu')|render }}
                {{ drupal_view('home_shop_menu')|render }}
                {{ drupal_view('home_dock_menu')|render }}
                <!-- Event Calender Link -->
                <li data-img=\"images/dynamic/restaurant-header.jpg\" data-class=\"main-grass-100\" style=\"z-index: 1;\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col\">
                            <a href=\"/{{ langcode }}/events\">
                            {% if langcode == 'en' %}
                                <h2 style=\"opacity: 1;\">Events</h2>
                            {% else %}
                                <h2 style=\"opacity: 1;\">حدث</h2>
                            {% endif %}
                            </a>
                        </div>
                    </div>
                </div>
                </li>
                <!-- Event Calender Link -->


            </ul>
        </div>

        <!-- MOBILE LINKS SECTION -->
        <div class=\"new-mobile-strips-links\">
            <ul>
                {{ drupal_view('home_mobile_eat_menu')}}
                {{ drupal_view('home_mobile_play_menu') }}
                {{ drupal_view('home_mobile_relax_menu')|render }}
                {{ drupal_view('home_mobile_shop_menu')|render }}
                {{ drupal_view('home_mobile_dock_menu')|render }}
                <!-- Event Calender -->
                <li data-img=\"images/dynamic/restaurant-header.jpg\" class=\"bg-grass-100\">
                {% if langcode == 'en' %}
                    <h2>Events</h2>
                {% else %}
                    <h2>حدث</h2>
                {% endif %}
                <div class=\"strip-content bg-grass-100\">
                    <a href=\"/{{ langcode }}/events\">
                        {% if langcode == 'en' %}
                            <h2>Events</h2>
                        {% else %}
                            <h2>حدث</h2>
                        {% endif %}
                    </a>
                </div>
                </li>
                <!-- Event Calender -->
            </ul>
        </div>
</div>
{% endfor %}
", "sites/marsana.com/themes/custom/marsana/templates/views/views-view-unformatted--home.html.twig", "/var/www/html/Hudayriyat/project/web/sites/marsana.com/themes/custom/marsana/templates/views/views-view-unformatted--home.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 21, "set" => 23, "if" => 62);
        static $filters = array("escape" => 29, "render" => 51);
        static $functions = array("drupal_view" => 51);

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set', 'if'],
                ['escape', 'render'],
                ['drupal_view'],
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
