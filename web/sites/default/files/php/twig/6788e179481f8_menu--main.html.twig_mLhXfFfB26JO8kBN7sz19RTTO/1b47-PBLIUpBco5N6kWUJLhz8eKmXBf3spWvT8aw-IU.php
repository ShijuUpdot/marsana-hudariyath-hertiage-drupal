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

/* themes/custom/hudayriyat/templates/navigation/menu--main.html.twig */
class __TwigTemplate_063ec008b3b448469eda4eef212e392f extends Template
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
        // line 22
        $context["menu_classes"] = ["rollover mabt", "rollover mproj", "", "rollover mmedia", "rollover mcareers", "d-lg-none", "d-lg-none"];
        // line 26
        $context["url"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<current>")));
        // line 27
        if (CoreExtension::inFilter("interactive", ($context["url"] ?? null))) {
            // line 28
            yield "<div class=\"\">
    <div class=\"dark-map-overly\">
        <img src=\"/images/static/loader-new.gif\">
    </div>
";
        }
        // line 33
        yield "<header>
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-3 col-lg-5 my-auto\">
            <div id=\"menu-burger\">
              <span class=\"menu-icon\"></span>
            </div>
            ";
        // line 40
        if (!CoreExtension::inFilter("interactive", ($context["url"] ?? null))) {
            // line 41
            yield "            <a class=\"interactive-map-redirection white-btn\" target=\"_blank\" href=\"/";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["langclass"] ?? null), 41, $this->source), "html", null, true);
            yield "/interactive-map\">
              <img src=\"/images/static/interactive-map.svg\" alt=\"\">
              <p class=\"detailed-txt\">";
            // line 43
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Interactive Map"));
            yield "</p>
            </a>
            ";
        } else {
            // line 46
            yield "            <a class=\"back-to-web\" href=\"/";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["langclass"] ?? null), 46, $this->source), "html", null, true);
            yield "/play\">
               <img src=\"/images/static/arrow-left-white-filled-circle.svg\" alt=\"\">
               <p class=\"detailed-txt\">";
            // line 48
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go back to Website"));
            yield "</p>
            </a>
            ";
        }
        // line 51
        yield "            <div id=\"overlay-menu\">
              <div class=\"overlay-wrapper\">
                <nav role='navigation' class=\"container nav-primary\">
                ";
        // line 54
        if (($context["items"] ?? null)) {
            // line 55
            yield "                  <ul>
                  ";
            // line 56
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 57
                yield "                    <li><a href=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 57), 57, $this->source), "html", null, true);
                yield "\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 57), 57, $this->source), "html", null, true);
                yield "</a></li>                   
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            yield "                  </ul>
                ";
        }
        // line 61
        yield "                </nav>
                
                ";
        // line 63
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(views_embed_view("menu_content")), "html", null, true);
        yield "
                    
              </div>
            </div>
          </div>
          <div class=\"col-6 col-lg-2 text-center my-auto z-100\">
            ";
        // line 69
        $context["logo"] = "/themes/custom/hudayriyat/logo.svg";
        // line 70
        yield "            ";
        if ((($context["langclass"] ?? null) == "ar")) {
            // line 71
            yield "               ";
            $context["logo"] = "/themes/custom/hudayriyat/logo-white-ar.svg";
            // line 72
            yield "            ";
        }
        // line 73
        yield "            <a href=\"/";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["langclass"] ?? null), 73, $this->source), "html", null, true);
        yield "/play\"><img src=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["logo"] ?? null), 73, $this->source), "html", null, true);
        yield "\" alt=\"Logo\" class=\"logo\"></a>
          </div>
          <div class=\"col-3 col-lg-5 my-auto z-100 p-abs-resp\">
          ";
        // line 76
        $context["url"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<current>")));
        // line 77
        yield "            <ul class=\"header-right\">
              <li>";
        // line 78
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::drupalEntity("block", "languageswitcher"), "html", null, true);
        yield "</li>
\t\t\t <li><a href=\"/";
        // line 79
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["langclass"] ?? null), 79, $this->source), "html", null, true);
        yield "/search-amenities\" class=\"search-icon\"><img src=\"/images/static/search.svg\" alt=\"Search Icon\"></a></li>
              ";
        // line 80
        if ((CoreExtension::inFilter("play", ($context["url"] ?? null)) || CoreExtension::inFilter("stay", ($context["url"] ?? null)))) {
            // line 81
            yield "                <li><a href=\"javascript:;\" class=\"book-now-btn\" data-toggle=\"modal\" data-target=\"#bookingModal\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Book Now"));
            yield "</a></li>
              ";
        }
        // line 83
        yield "              <li><a href=\"https://www.hudayriyatisland.ae/en/enjoy\" class=\"book-now-btn\">";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Events"));
        yield "</a></li>
              ";
        // line 84
        if (((((CoreExtension::inFilter("play", ($context["url"] ?? null)) || CoreExtension::inFilter("stay", ($context["url"] ?? null))) || CoreExtension::inFilter("eat", ($context["url"] ?? null))) || CoreExtension::inFilter("enjoy", ($context["url"] ?? null))) || CoreExtension::inFilter("discover", ($context["url"] ?? null)))) {
            // line 85
            yield "                <li><a href=\"javascript:;\" class=\"hour-btn\" data-toggle=\"modal\" data-target=\"#hourModal\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Opening Hours"));
            yield "</a></li>
              ";
        }
        // line 87
        yield "            </ul>
          </div>
        </div>
      </div>
    </header>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["langclass", "items"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/custom/hudayriyat/templates/navigation/menu--main.html.twig";
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
        return array (  184 => 87,  178 => 85,  176 => 84,  171 => 83,  165 => 81,  163 => 80,  159 => 79,  155 => 78,  152 => 77,  150 => 76,  141 => 73,  138 => 72,  135 => 71,  132 => 70,  130 => 69,  121 => 63,  117 => 61,  113 => 59,  102 => 57,  98 => 56,  95 => 55,  93 => 54,  88 => 51,  82 => 48,  76 => 46,  70 => 43,  64 => 41,  62 => 40,  53 => 33,  46 => 28,  44 => 27,  42 => 26,  40 => 22,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/hudayriyat/templates/navigation/menu--main.html.twig", "C:\\xampp\\htdocs\\modorn\\web\\themes\\custom\\hudayriyat\\templates\\navigation\\menu--main.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 22, "if" => 27, "for" => 56);
        static $filters = array("render" => 26, "escape" => 41, "t" => 43);
        static $functions = array("url" => 26, "drupal_view" => 63, "drupal_entity" => 78);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['render', 'escape', 't'],
                ['url', 'drupal_view', 'drupal_entity'],
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
