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

/* themes/custom/hudayriyat/templates/form/select--locations.html.twig */
class __TwigTemplate_370d002fb2ce3d83eebe8860419e9905 extends Template
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
        // line 13
        $___internal_parse_1_ = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 14
            yield "<div class=\"filter search-dropdown\">
<div class=\"select-wrapper\">
  <select";
            // line 16
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["browser-default custom-select forminpt"], "method", false, false, true, 16), 16, $this->source), "html", null, true);
            yield ">
    ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 18
                yield "      ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, true, 18) >= 0)) {
                    // line 19
                    yield "        <option value=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
                    yield "\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "selected", [], "any", false, false, true, 19)) ? (" selected=\"selected\"") : ("")));
                    yield ">";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["option"], "label", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
                    yield "</option>
      ";
                }
                // line 21
                yield "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            yield "  </select>

  <div class=\"dropdown-container filters filter-button-group\">
    <div class=\"dropdown-select entypo-down-open-big\">
      <img src=\"/images/static/location.svg\">";
            // line 26
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("All Locations"));
            yield "</div>
    <ul class=\"dropdown-select-ul\" data-role=\"edit-locations\">
      <li class=\" selected\" data-value=\"All\" data-filter=\"all\">
        <img src=\"/images/static/location.svg\">";
            // line 29
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("All Locations"));
            yield "</li>
      ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 31
                yield "        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, true, 31) > 0)) {
                    // line 32
                    yield "            <li data-value=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, true, 32), 32, $this->source), "html", null, true);
                    yield "\" data-filter=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, true, 32), 32, $this->source), "html", null, true);
                    yield "\">";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["option"], "label", [], "any", false, false, true, 32), 32, $this->source), "html", null, true);
                    yield "</li>
        ";
                }
                // line 34
                yield "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            yield "    </ul>
  </div>
</div>
</div>
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 13
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::spaceless($___internal_parse_1_));
        // line 40
        yield "
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes", "options"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/custom/hudayriyat/templates/form/select--locations.html.twig";
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
        return array (  122 => 40,  120 => 13,  112 => 35,  106 => 34,  96 => 32,  93 => 31,  89 => 30,  85 => 29,  79 => 26,  73 => 22,  67 => 21,  57 => 19,  54 => 18,  50 => 17,  46 => 16,  42 => 14,  40 => 13,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/hudayriyat/templates/form/select--locations.html.twig", "/var/www/html/Hudayriyat/project/web/themes/custom/hudayriyat/templates/form/select--locations.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("apply" => 13, "for" => 17, "if" => 18);
        static $filters = array("escape" => 16, "t" => 26, "spaceless" => 13);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['apply', 'for', 'if'],
                ['escape', 't', 'spaceless'],
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
