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

/* themes/custom/hudayriyat/templates/content/node--single-page.html.twig */
class __TwigTemplate_eea26c13b87911f5db31630fad77b298 extends Template
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
        // line 74
        $context["classes"] = ["node", ("node--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source,         // line 76
($context["node"] ?? null), "bundle", [], "any", false, false, true, 76), 76, $this->source))), ((CoreExtension::getAttribute($this->env, $this->source,         // line 77
($context["node"] ?? null), "isPromoted", [], "method", false, false, true, 77)) ? ("node--promoted") : ("")), ((CoreExtension::getAttribute($this->env, $this->source,         // line 78
($context["node"] ?? null), "isSticky", [], "method", false, false, true, 78)) ? ("node--sticky") : ("")), (( !CoreExtension::getAttribute($this->env, $this->source,         // line 79
($context["node"] ?? null), "isPublished", [], "method", false, false, true, 79)) ? ("node--unpublished") : ("")), ((        // line 80
($context["view_mode"] ?? null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 80, $this->source)))) : (""))];
        // line 83
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_content_for", [], "any", false, false, true, 83), 0, [], "any", false, false, true, 83), "value", [], "any", false, false, true, 83) == "404")) {
            // line 84
            yield " <section class=\"discovery-main missing-page\">
      <div class=\"upper navy-bg\">
        <div class=\"discover-main-wrapper container text-center\">
          <h1>";
            // line 87
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_hero_image_title", [], "any", false, false, true, 87), 0, [], "any", false, false, true, 87), "value", [], "any", false, false, true, 87), 87, $this->source), "html", null, true);
            yield "</h1>
          <h2>";
            // line 88
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_headline", [], "any", false, false, true, 88), 0, [], "any", false, false, true, 88), "value", [], "any", false, false, true, 88), 88, $this->source), "html", null, true);
            yield "</h2>
          <p class=\"detailed-txt\">";
            // line 89
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_intro_title", [], "any", false, false, true, 89), 0, [], "any", false, false, true, 89), "value", [], "any", false, false, true, 89), 89, $this->source), "html", null, true);
            yield " </p>
          <div class=\"overlay-wrapper\">
            <nav role='navigation' class=\"container nav-primary\">
              <ul>
                ";
            // line 93
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["menu_links"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["menu"]) {
                // line 94
                yield "                    ";
                if (((($__internal_compile_0 = $context["menu"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["title"] ?? null) : null) != "Home")) {
                    // line 95
                    yield "                        <li><a href=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_1 = $context["menu"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["url"] ?? null) : null), 95, $this->source), "html", null, true);
                    yield "\">";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_2 = $context["menu"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["title"] ?? null) : null), 95, $this->source), "html", null, true);
                    yield "</a></li>
                    ";
                }
                // line 97
                yield "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['menu'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 98
            yield "              </ul>
            </nav> 
          </div>
        </div>
        <div class=\"discovery-main-illus full-illustration\" data-scroll-speed-x=\"12\">
          <img src=\"../images/dynamic/main/contact.png\" alt=\"Discover Elements\">
        </div>
      </div>
      <div class=\"ground turquoise-bg\">
        <div class=\"lp-footer\">
          <div class=\"container\">
            <div class=\"row align-self-center\">
              <div class=\"col-md-6\">
                <ul class=\"nav-secondary\">
                  ";
            // line 112
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::drupalMenu("footer-top-right"), "html", null, true);
            yield "
                </ul>
              </div>
              <div class=\"col-md-6\">
                <ul class=\"social\">
                  ";
            // line 117
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_social_link", [], "any", false, false, true, 117));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 118
                yield "                  ";
                if ((Twig\Extension\CoreExtension::first($this->env->getCharset(), $context["key"]) != "#")) {
                    // line 119
                    yield "                    <li><a href=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "entity", [], "any", false, false, true, 119), "field_link", [], "any", false, false, true, 119), 0, [], "any", false, false, true, 119), "url", [], "any", false, false, true, 119), 119, $this->source), "html", null, true);
                    yield "\" target=\"_blank\"><img src=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "entity", [], "any", false, false, true, 119), "field_icon", [], "any", false, false, true, 119), "entity", [], "any", false, false, true, 119), "fileuri", [], "any", false, false, true, 119), 119, $this->source)), "html", null, true);
                    yield "\" alt=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "entity", [], "any", false, false, true, 119), "field_icon", [], "any", false, false, true, 119), "alt", [], "any", false, false, true, 119), 119, $this->source), "html", null, true);
                    yield "\"></a></li>
                  ";
                }
                // line 121
                yield "                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 122
            yield "                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 129
($context["node"] ?? null), "field_content_for", [], "any", false, false, true, 129), 0, [], "any", false, false, true, 129), "value", [], "any", false, false, true, 129) == "403")) {
            // line 130
            yield " <section class=\"discovery-main missing-page\">
      <div class=\"upper navy-bg\">
        <div class=\"discover-main-wrapper container text-center\">
          <h1>";
            // line 133
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_hero_image_title", [], "any", false, false, true, 133), 0, [], "any", false, false, true, 133), "value", [], "any", false, false, true, 133), 133, $this->source), "html", null, true);
            yield "</h1>
          <h2>";
            // line 134
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_headline", [], "any", false, false, true, 134), 0, [], "any", false, false, true, 134), "value", [], "any", false, false, true, 134), 134, $this->source), "html", null, true);
            yield "</h2>
          <p class=\"detailed-txt\">";
            // line 135
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_intro_title", [], "any", false, false, true, 135), 0, [], "any", false, false, true, 135), "value", [], "any", false, false, true, 135), 135, $this->source), "html", null, true);
            yield " </p>
          <div class=\"overlay-wrapper\">
            <nav role='navigation' class=\"container nav-primary\">
              <ul>
                ";
            // line 139
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["menu_links"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["menu"]) {
                // line 140
                yield "                    ";
                if (((($__internal_compile_3 = $context["menu"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["title"] ?? null) : null) != "Home")) {
                    // line 141
                    yield "                        <li><a href=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_4 = $context["menu"]) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["url"] ?? null) : null), 141, $this->source), "html", null, true);
                    yield "\">";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_5 = $context["menu"]) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["title"] ?? null) : null), 141, $this->source), "html", null, true);
                    yield "</a></li>
                    ";
                }
                // line 143
                yield "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['menu'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 144
            yield "              </ul>
            </nav> 
          </div>
        </div>
        <div class=\"discovery-main-illus full-illustration\" data-scroll-speed-x=\"12\">
          <img src=\"../images/dynamic/main/contact.png\" alt=\"Discover Elements\">
        </div>
      </div>
      <div class=\"ground turquoise-bg\">
        <div class=\"lp-footer\">
          <div class=\"container\">
            <div class=\"row align-self-center\">
              <div class=\"col-md-6\">
                <ul class=\"nav-secondary\">
                 ";
            // line 158
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::drupalMenu("footer-top-right"), "html", null, true);
            yield "
                </ul>
              </div>
              <div class=\"col-md-6\">
                <ul class=\"social\">
                  ";
            // line 163
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_social_link", [], "any", false, false, true, 163));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 164
                yield "                    ";
                if ((Twig\Extension\CoreExtension::first($this->env->getCharset(), $context["key"]) != "#")) {
                    // line 165
                    yield "                      <li><a href=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "entity", [], "any", false, false, true, 165), "field_link", [], "any", false, false, true, 165), 0, [], "any", false, false, true, 165), "url", [], "any", false, false, true, 165), 165, $this->source), "html", null, true);
                    yield "\" target=\"_blank\"><img src=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "entity", [], "any", false, false, true, 165), "field_icon", [], "any", false, false, true, 165), "entity", [], "any", false, false, true, 165), "fileuri", [], "any", false, false, true, 165), 165, $this->source)), "html", null, true);
                    yield "\" alt=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "entity", [], "any", false, false, true, 165), "field_icon", [], "any", false, false, true, 165), "alt", [], "any", false, false, true, 165), 165, $this->source), "html", null, true);
                    yield "\"></a></li>
                    ";
                }
                // line 167
                yield "                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 168
            yield "                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["node", "view_mode", "menu_links"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/custom/hudayriyat/templates/content/node--single-page.html.twig";
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
        return array (  236 => 168,  230 => 167,  220 => 165,  217 => 164,  213 => 163,  205 => 158,  189 => 144,  183 => 143,  175 => 141,  172 => 140,  168 => 139,  161 => 135,  157 => 134,  153 => 133,  148 => 130,  146 => 129,  137 => 122,  131 => 121,  121 => 119,  118 => 118,  114 => 117,  106 => 112,  90 => 98,  84 => 97,  76 => 95,  73 => 94,  69 => 93,  62 => 89,  58 => 88,  54 => 87,  49 => 84,  47 => 83,  45 => 80,  44 => 79,  43 => 78,  42 => 77,  41 => 76,  40 => 74,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override to display a node.
 *
 * Available variables:
 * - node: The node entity with limited access to object properties and methods.
 *   Only method names starting with \"get\", \"has\", or \"is\" and a few common
 *   methods such as \"id\", \"label\", and \"bundle\" are available. For example:
 *   - node.getCreatedTime() will return the node creation timestamp.
 *   - node.hasField('field_example') returns TRUE if the node bundle includes
 *     field_example. (This does not indicate the presence of a value in this
 *     field.)
 *   - node.isPublished() will return whether the node is published or not.
 *   Calling other methods, such as node.delete(), will result in an exception.
 *   See \\Drupal\\node\\Entity\\Node for a full list of public properties and
 *   methods for the node object.
 * - label: (optional) The title of the node.
 * - content: All node items. Use {{ content }} to print them all,
 *   or print a subset such as {{ content.field_example }}. Use
 *   {{ content|without('field_example') }} to temporarily suppress the printing
 *   of a given child element.
 * - author_picture: The node author user entity, rendered using the \"compact\"
 *   view mode.
 * - metadata: Metadata for this node.
 * - date: (optional) Themed creation date field.
 * - author_name: (optional) Themed author name field.
 * - url: Direct URL of the current node.
 * - display_submitted: Whether submission information should be displayed.
 * - attributes: HTML attributes for the containing element.
 *   The attributes.class element may contain one or more of the following
 *   classes:
 *   - node: The current template type (also known as a \"theming hook\").
 *   - node--type-[type]: The current node type. For example, if the node is an
 *     \"Article\" it would result in \"node--type-article\". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - node--view-mode-[view_mode]: The View Mode of the node; for example, a
 *     teaser would result in: \"node--view-mode-teaser\", and
 *     full: \"node--view-mode-full\".
 *   The following are controlled through the node publishing options.
 *   - node--promoted: Appears on nodes promoted to the front page.
 *   - node--sticky: Appears on nodes ordered above other non-sticky nodes in
 *     teaser listings.
 *   - node--unpublished: Appears on unpublished nodes visible only to site
 *     admins.
 * - title_attributes: Same as attributes, except applied to the main title
 *   tag that appears in the template.
 * - content_attributes: Same as attributes, except applied to the main
 *   content tag that appears in the template.
 * - author_attributes: Same as attributes, except applied to the author of
 *   the node tag that appears in the template.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 * - view_mode: View mode; for example, \"teaser\" or \"full\".
 * - teaser: Flag for the teaser state. Will be true if view_mode is 'teaser'.
 * - page: Flag for the full page state. Will be true if view_mode is 'full'.
 * - readmore: Flag for more state. Will be true if the teaser content of the
 *   node cannot hold the main body content.
 * - logged_in: Flag for authenticated user status. Will be true when the
 *   current user is a logged-in member.
 * - is_admin: Flag for admin user status. Will be true when the current user
 *   is an administrator.
 *
 * @see template_preprocess_node()
 *
 * @todo Remove the id attribute (or make it a class), because if that gets
 *   rendered twice on a page this is invalid CSS for example: two lists
 *   in different view modes.
 */
#}
{%
  set classes = [
    'node',
    'node--type-' ~ node.bundle|clean_class,
    node.isPromoted() ? 'node--promoted',
    node.isSticky() ? 'node--sticky',
    not node.isPublished() ? 'node--unpublished',
    view_mode ? 'node--view-mode-' ~ view_mode|clean_class,
  ]
%}
{% if node.field_content_for.0.value == '404' %}
 <section class=\"discovery-main missing-page\">
      <div class=\"upper navy-bg\">
        <div class=\"discover-main-wrapper container text-center\">
          <h1>{{ node.field_hero_image_title.0.value }}</h1>
          <h2>{{ node.field_headline.0.value }}</h2>
          <p class=\"detailed-txt\">{{ node.field_intro_title.0.value }} </p>
          <div class=\"overlay-wrapper\">
            <nav role='navigation' class=\"container nav-primary\">
              <ul>
                {%  for key, menu in menu_links %}
                    {% if menu['title'] != 'Home' %}
                        <li><a href=\"{{ menu['url'] }}\">{{ menu['title'] }}</a></li>
                    {% endif %}
                {% endfor %}
              </ul>
            </nav> 
          </div>
        </div>
        <div class=\"discovery-main-illus full-illustration\" data-scroll-speed-x=\"12\">
          <img src=\"../images/dynamic/main/contact.png\" alt=\"Discover Elements\">
        </div>
      </div>
      <div class=\"ground turquoise-bg\">
        <div class=\"lp-footer\">
          <div class=\"container\">
            <div class=\"row align-self-center\">
              <div class=\"col-md-6\">
                <ul class=\"nav-secondary\">
                  {{ drupal_menu('footer-top-right') }}
                </ul>
              </div>
              <div class=\"col-md-6\">
                <ul class=\"social\">
                  {% for key, item in node.field_social_link  %}
                  {% if key|first != '#' %}
                    <li><a href=\"{{ item.entity.field_link.0.url }}\" target=\"_blank\"><img src=\"{{ file_url(item.entity.field_icon.entity.fileuri) }}\" alt=\"{{ item.entity.field_icon.alt }}\"></a></li>
                  {% endif %}
                  {% endfor %}
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
{% elseif node.field_content_for.0.value == '403' %}
 <section class=\"discovery-main missing-page\">
      <div class=\"upper navy-bg\">
        <div class=\"discover-main-wrapper container text-center\">
          <h1>{{ node.field_hero_image_title.0.value }}</h1>
          <h2>{{ node.field_headline.0.value }}</h2>
          <p class=\"detailed-txt\">{{ node.field_intro_title.0.value }} </p>
          <div class=\"overlay-wrapper\">
            <nav role='navigation' class=\"container nav-primary\">
              <ul>
                {%  for key, menu in menu_links %}
                    {% if menu['title'] != 'Home' %}
                        <li><a href=\"{{ menu['url'] }}\">{{ menu['title'] }}</a></li>
                    {% endif %}
                {% endfor %}
              </ul>
            </nav> 
          </div>
        </div>
        <div class=\"discovery-main-illus full-illustration\" data-scroll-speed-x=\"12\">
          <img src=\"../images/dynamic/main/contact.png\" alt=\"Discover Elements\">
        </div>
      </div>
      <div class=\"ground turquoise-bg\">
        <div class=\"lp-footer\">
          <div class=\"container\">
            <div class=\"row align-self-center\">
              <div class=\"col-md-6\">
                <ul class=\"nav-secondary\">
                 {{ drupal_menu('footer-top-right') }}
                </ul>
              </div>
              <div class=\"col-md-6\">
                <ul class=\"social\">
                  {% for key, item in node.field_social_link  %}
                    {% if key|first != '#' %}
                      <li><a href=\"{{ item.entity.field_link.0.url }}\" target=\"_blank\"><img src=\"{{ file_url(item.entity.field_icon.entity.fileuri) }}\" alt=\"{{ item.entity.field_icon.alt }}\"></a></li>
                    {% endif %}
                  {% endfor %}
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
{% endif %}", "themes/custom/hudayriyat/templates/content/node--single-page.html.twig", "C:\\xampp\\htdocs\\hudayriyat\\web\\themes\\custom\\hudayriyat\\templates\\content\\node--single-page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 74, "if" => 83, "for" => 93);
        static $filters = array("clean_class" => 76, "escape" => 87, "first" => 118);
        static $functions = array("drupal_menu" => 112, "file_url" => 119);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['clean_class', 'escape', 'first'],
                ['drupal_menu', 'file_url'],
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
