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

/* themes/custom/hudayriyat/templates/form/select--sort.html.twig */
class __TwigTemplate_111905571eb4f8be6c5cd923fc1a565f extends Template
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
            yield "<div class=\"col-md-6 col-xl-12 py-4\">
  <p class=\"filter-tag mx-2\">";
            // line 15
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Sort by"));
            yield "</p>
  <div class=\"dropdown date\">
    <div class=\"filter search-dropdown\">
      <div class=\"select-wrapper\">
          <select";
            // line 19
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["browser-default custom-select forminpt"], "method", false, false, true, 19), 19, $this->source), "html", null, true);
            yield ">
            ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 21
                yield "              ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, true, 21) != "")) {
                    // line 22
                    yield "                  <option value=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
                    yield "\" ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "selected", [], "any", false, false, true, 22)) ? (" selected=\"selected\"") : ("")));
                    yield " class=\"dropdown-item\">";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["option"], "label", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
                    yield "</option>
              ";
                }
                // line 24
                yield "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            yield "          </select>
            <div class=\"sortbyfm dropdown-container filters filter-button-group\">
                <div class=\"dropdown-select entypo-down-open-big\">
                  <p> ";
            // line 28
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Expiry Date"));
            yield " </p>
                </div>
                <ul class=\"dropdown-select-ul\" data-role=\"edit-sort-by\">
                  ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 32
                yield "                    ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, true, 32) != "")) {
                    // line 33
                    yield "                        <li data-value=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
                    yield "\" ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "selected", [], "any", false, false, true, 33)) ? (" class=\"selected\"") : ("")));
                    yield " data-filter=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
                    yield "\">";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["option"], "label", [], "any", false, false, true, 33), 33, $this->source)));
                    yield "</li>
                    ";
                }
                // line 35
                yield "                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            yield "                </ul>
            </div>
      </div>
    </div>
  </div>
</div>
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 13
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::spaceless($___internal_parse_1_));
        // line 43
        yield " ";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes", "options"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/custom/hudayriyat/templates/form/select--sort.html.twig";
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
        return array (  127 => 43,  125 => 13,  115 => 36,  109 => 35,  97 => 33,  94 => 32,  90 => 31,  84 => 28,  79 => 25,  73 => 24,  63 => 22,  60 => 21,  56 => 20,  52 => 19,  45 => 15,  42 => 14,  40 => 13,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/hudayriyat/templates/form/select--sort.html.twig", "/var/www/html/Hudayriyat/project/web/themes/custom/hudayriyat/templates/form/select--sort.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("apply" => 13, "for" => 20, "if" => 21);
        static $filters = array("t" => 15, "escape" => 19, "spaceless" => 13);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['apply', 'for', 'if'],
                ['t', 'escape', 'spaceless'],
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
