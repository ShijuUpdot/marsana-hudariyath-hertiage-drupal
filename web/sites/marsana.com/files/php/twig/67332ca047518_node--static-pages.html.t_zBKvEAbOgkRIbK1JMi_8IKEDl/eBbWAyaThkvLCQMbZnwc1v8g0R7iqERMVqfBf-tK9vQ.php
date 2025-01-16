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

/* sites/marsana.com/themes/custom/marsana/templates/content/node--static-pages.html.twig */
class __TwigTemplate_f3b6431ca81ddc1cb1597ac712a5eb2f extends Template
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
            yield "    <div class=\"missing-page\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"missing-page-wrapper text-center w-100\">
            <h1>";
            // line 88
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_hero_image_title", [], "any", false, false, true, 88), 0, [], "any", false, false, true, 88), "value", [], "any", false, false, true, 88), 88, $this->source), "html", null, true);
            yield "</h1>
            <h2>";
            // line 89
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_sub_title", [], "any", false, false, true, 89), 0, [], "any", false, false, true, 89), "value", [], "any", false, false, true, 89), 89, $this->source), "html", null, true);
            yield "</h2>
          </div>
        </div>
      </div>
    </div>

    <div class=\"parallax-wrapper top-wrapper\">
      <div class=\"parallax-shapes-top-left\" data-scroll-speed=\"1\"><img src=\"/images/dynamic/skate-shape-top-left.png\" alt=\"\"></div>
      <div class=\"parallax-shapes-top-right\" data-scroll-speed=\"-4\"><img src=\"/images/dynamic/skate-shape-top-right.png\" alt=\"\"></div>
    </div>
";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 99
($context["node"] ?? null), "field_content_for", [], "any", false, false, true, 99), 0, [], "any", false, false, true, 99), "value", [], "any", false, false, true, 99) == "403")) {
            // line 100
            yield "    <div class=\"missing-page\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"missing-page-wrapper text-center w-100\">
            <h1>";
            // line 104
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_hero_image_title", [], "any", false, false, true, 104), 0, [], "any", false, false, true, 104), "value", [], "any", false, false, true, 104), 104, $this->source), "html", null, true);
            yield "</h1>
            <h2>";
            // line 105
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_sub_title", [], "any", false, false, true, 105), 0, [], "any", false, false, true, 105), "value", [], "any", false, false, true, 105), 105, $this->source), "html", null, true);
            yield "</h2>
          </div>
        </div>
      </div>
    </div>

    <div class=\"parallax-wrapper top-wrapper\">
      <div class=\"parallax-shapes-top-left\" data-scroll-speed=\"1\"><img src=\"/images/dynamic/skate-shape-top-left.png\" alt=\"\"></div>
      <div class=\"parallax-shapes-top-right\" data-scroll-speed=\"-4\"><img src=\"/images/dynamic/skate-shape-top-right.png\" alt=\"\"></div>
    </div>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["node", "view_mode"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "sites/marsana.com/themes/custom/marsana/templates/content/node--static-pages.html.twig";
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
        return array (  84 => 105,  80 => 104,  74 => 100,  72 => 99,  59 => 89,  55 => 88,  49 => 84,  47 => 83,  45 => 80,  44 => 79,  43 => 78,  42 => 77,  41 => 76,  40 => 74,);
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
    <div class=\"missing-page\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"missing-page-wrapper text-center w-100\">
            <h1>{{ node.field_hero_image_title.0.value }}</h1>
            <h2>{{ node.field_sub_title.0.value }}</h2>
          </div>
        </div>
      </div>
    </div>

    <div class=\"parallax-wrapper top-wrapper\">
      <div class=\"parallax-shapes-top-left\" data-scroll-speed=\"1\"><img src=\"/images/dynamic/skate-shape-top-left.png\" alt=\"\"></div>
      <div class=\"parallax-shapes-top-right\" data-scroll-speed=\"-4\"><img src=\"/images/dynamic/skate-shape-top-right.png\" alt=\"\"></div>
    </div>
{% elseif node.field_content_for.0.value == '403'  %}
    <div class=\"missing-page\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"missing-page-wrapper text-center w-100\">
            <h1>{{ node.field_hero_image_title.0.value }}</h1>
            <h2>{{ node.field_sub_title.0.value }}</h2>
          </div>
        </div>
      </div>
    </div>

    <div class=\"parallax-wrapper top-wrapper\">
      <div class=\"parallax-shapes-top-left\" data-scroll-speed=\"1\"><img src=\"/images/dynamic/skate-shape-top-left.png\" alt=\"\"></div>
      <div class=\"parallax-shapes-top-right\" data-scroll-speed=\"-4\"><img src=\"/images/dynamic/skate-shape-top-right.png\" alt=\"\"></div>
    </div>
{% endif %}", "sites/marsana.com/themes/custom/marsana/templates/content/node--static-pages.html.twig", "/var/www/html/Hudayriyat/project/web/sites/marsana.com/themes/custom/marsana/templates/content/node--static-pages.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 74, "if" => 83);
        static $filters = array("clean_class" => 76, "escape" => 88);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'escape'],
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
