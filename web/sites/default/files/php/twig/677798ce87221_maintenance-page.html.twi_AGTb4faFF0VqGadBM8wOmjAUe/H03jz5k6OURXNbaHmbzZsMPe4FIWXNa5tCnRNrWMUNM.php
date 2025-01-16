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

/* core/modules/system/templates/maintenance-page.html.twig */
class __TwigTemplate_7c9cc742d08d86beda7ee59b623f02ce extends Template
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
        // line 14
        yield "<header role=\"banner\">
  ";
        // line 15
        if (($context["logo"] ?? null)) {
            // line 16
            yield "    <a href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["front_page"] ?? null), 16, $this->source), "html", null, true);
            yield "\" title=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
            yield "\" rel=\"home\">
      <img src=\"";
            // line 17
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["logo"] ?? null), 17, $this->source), "html", null, true);
            yield "\" alt=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
            yield "\"/>
    </a>
  ";
        }
        // line 20
        yield "
  ";
        // line 21
        if ((($context["site_name"] ?? null) || ($context["site_slogan"] ?? null))) {
            // line 22
            yield "    ";
            if (($context["site_name"] ?? null)) {
                // line 23
                yield "      <h1>
        <a href=\"";
                // line 24
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["front_page"] ?? null), 24, $this->source), "html", null, true);
                yield "\" title=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
                yield "\" rel=\"home\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null), 24, $this->source), "html", null, true);
                yield "</a>
      </h1>
    ";
            }
            // line 27
            yield "
    ";
            // line 28
            if (($context["site_slogan"] ?? null)) {
                // line 29
                yield "      <div>";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_slogan"] ?? null), 29, $this->source), "html", null, true);
                yield "</div>
    ";
            }
            // line 31
            yield "  ";
        }
        // line 32
        yield "</header>

<main role=\"main\">
  ";
        // line 35
        if (($context["title"] ?? null)) {
            // line 36
            yield "    <h1>";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 36, $this->source), "html", null, true);
            yield "</h1>
  ";
        }
        // line 38
        yield "
  ";
        // line 39
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
        yield "

  ";
        // line 41
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
        yield "
</main>

";
        // line 44
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 44)) {
            // line 45
            yield "  <aside role=\"complementary\">
    ";
            // line 46
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 46), 46, $this->source), "html", null, true);
            yield "
  </aside>
";
        }
        // line 49
        yield "
";
        // line 50
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 50)) {
            // line 51
            yield "  <aside role=\"complementary\">
    ";
            // line 52
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 52), 52, $this->source), "html", null, true);
            yield "
  </aside>
";
        }
        // line 55
        yield "
";
        // line 56
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 56)) {
            // line 57
            yield "  <footer role=\"contentinfo\">
    ";
            // line 58
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 58), 58, $this->source), "html", null, true);
            yield "
  </footer>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["logo", "front_page", "site_name", "site_slogan", "title", "page"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "core/modules/system/templates/maintenance-page.html.twig";
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
        return array (  155 => 58,  152 => 57,  150 => 56,  147 => 55,  141 => 52,  138 => 51,  136 => 50,  133 => 49,  127 => 46,  124 => 45,  122 => 44,  116 => 41,  111 => 39,  108 => 38,  102 => 36,  100 => 35,  95 => 32,  92 => 31,  86 => 29,  84 => 28,  81 => 27,  71 => 24,  68 => 23,  65 => 22,  63 => 21,  60 => 20,  52 => 17,  45 => 16,  43 => 15,  40 => 14,);
    }

    public function getSourceContext()
    {
        return new Source("", "core/modules/system/templates/maintenance-page.html.twig", "/var/www/html/Hudayriyat/project/web/core/modules/system/templates/maintenance-page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 15);
        static $filters = array("escape" => 16, "t" => 16);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 't'],
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
