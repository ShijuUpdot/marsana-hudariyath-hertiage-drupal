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
class __TwigTemplate_65b96333d6c7d4f64e0e9e63dd7e813e extends Template
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
        return new Source("", "themes/custom/hudayriyat/templates/content/node--single-page.html.twig", "C:\\xampp\\htdocs\\modorn\\web\\themes\\custom\\hudayriyat\\templates\\content\\node--single-page.html.twig");
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
