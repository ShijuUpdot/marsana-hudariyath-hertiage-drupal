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

/* modules/contrib/addtoany/templates/addtoany-standard.html.twig */
class __TwigTemplate_7452c65525e86d086f5c180dd296845d extends Template
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
        // line 19
        $___internal_parse_0_ = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 20
            yield "
  ";
            // line 21
            if ((($context["button_setting"] ?? null) != "none")) {
                // line 22
                yield "    ";
                $context["universal_button"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 23
                    yield "      <a class=\"a2a_dd addtoany_share\" href=\"https://www.addtoany.com/share#url=";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::urlencode($this->sandbox->ensureToStringAllowed(($context["link_url"] ?? null), 23, $this->source)), "html", null, true);
                    yield "&amp;title=";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::urlencode($this->sandbox->ensureToStringAllowed(($context["link_title"] ?? null), 23, $this->source)), "html", null, true);
                    yield "\">
        ";
                    // line 24
                    if (($context["button_image"] ?? null)) {
                        // line 25
                        yield "          <img src=\"";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["button_image"] ?? null), 25, $this->source), "html", null, true);
                        yield "\" alt=\"";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Share"));
                        yield "\">
        ";
                    }
                    // line 27
                    yield "      </a>
    ";
                    return; yield '';
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 29
                yield "  ";
            }
            // line 30
            yield "
  <span class=\"a2a_kit a2a_kit_size_";
            // line 31
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["buttons_size"] ?? null), 31, $this->source), "html", null, true);
            yield " addtoany_list\" data-a2a-url=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["link_url"] ?? null), 31, $this->source), "html", null, true);
            yield "\" data-a2a-title=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["link_title"] ?? null), 31, $this->source), "html", null, true);
            yield "\">
    ";
            // line 32
            if ((($context["universal_button_placement"] ?? null) == "before")) {
                // line 33
                yield "      ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["universal_button"] ?? null), 33, $this->source), "html", null, true);
                yield "
    ";
            }
            // line 35
            yield "
    ";
            // line 36
            if (($context["addtoany_html"] ?? null)) {
                // line 37
                yield "      ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["addtoany_html"] ?? null), 37, $this->source));
                yield "
    ";
            }
            // line 39
            yield "
    ";
            // line 40
            if ((($context["universal_button_placement"] ?? null) == "after")) {
                // line 41
                yield "      ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["universal_button"] ?? null), 41, $this->source), "html", null, true);
                yield "
    ";
            }
            // line 43
            yield "  </span>

";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 19
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::spaceless($___internal_parse_0_));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["button_setting", "link_url", "link_title", "button_image", "buttons_size", "universal_button_placement", "addtoany_html"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "modules/contrib/addtoany/templates/addtoany-standard.html.twig";
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
        return array (  122 => 19,  116 => 43,  110 => 41,  108 => 40,  105 => 39,  99 => 37,  97 => 36,  94 => 35,  88 => 33,  86 => 32,  78 => 31,  75 => 30,  72 => 29,  67 => 27,  59 => 25,  57 => 24,  50 => 23,  47 => 22,  45 => 21,  42 => 20,  40 => 19,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/addtoany/templates/addtoany-standard.html.twig", "/var/www/html/Hudayriyat/project/web/modules/contrib/addtoany/templates/addtoany-standard.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("apply" => 19, "if" => 21, "set" => 22);
        static $filters = array("escape" => 23, "url_encode" => 23, "t" => 25, "raw" => 37, "spaceless" => 19);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['apply', 'if', 'set'],
                ['escape', 'url_encode', 't', 'raw', 'spaceless'],
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
