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

/* themes/custom/hudayriyat/templates/form/select--aexperience.html.twig */
class __TwigTemplate_585d7e8268f644333f1a431f2d69e204 extends Template
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
        $___internal_parse_0_ = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 14
            yield "<div class=\"col-md-6 col-xl-12 py-4\">
  <div class=\"dropdown amenities experiencefm\">
    <div class=\"filter search-dropdown\">
      <div class=\"select-wrapper\">
          <select";
            // line 18
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["browser-default custom-select forminpt"], "method", false, false, true, 18), 18, $this->source), "html", null, true);
            yield ">
            ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 20
                yield "              ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, true, 20) >= 0)) {
                    // line 21
                    yield "                ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, true, 21) == "All")) {
                        // line 22
                        yield "                  <option value=\"";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
                        yield "\"";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "selected", [], "any", false, false, true, 22)) ? (" selected=\"selected\"") : ("")));
                        yield " class=\"dropdown-item\">";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("All Amenities"));
                        yield "</option>
                ";
                    } else {
                        // line 24
                        yield "                  <option value=\"";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
                        yield "\"";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "selected", [], "any", false, false, true, 24)) ? (" selected=\"selected\"") : ("")));
                        yield " class=\"dropdown-item\">";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["option"], "label", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
                        yield "</option>
                ";
                    }
                    // line 26
                    yield "              ";
                }
                // line 27
                yield "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            yield "          </select>
              <div class=\"dropdown-container filters filter-button-group\">
                <div class=\"aexperience dropdown-select entypo-down-open-big\">
                  <img src=\"/images/static/amenities.svg\">";
            // line 31
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("All Amenities"));
            yield "
                </div>
                  <ul class=\"aexperience dropdown-select-ul\" data-role=\"edit-aexperience\">
                    ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 35
                yield "                        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, true, 35) == "All")) {
                    // line 36
                    yield "                          <li data-value=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, true, 36), 36, $this->source), "html", null, true);
                    yield "\" data-filter=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, true, 36), 36, $this->source), "html", null, true);
                    yield "\"><img src=\"/images/static/amenities.svg\">";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("All Amenities"));
                    yield "</li>
                        ";
                } else {
                    // line 38
                    yield "                          <li data-value=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, true, 38), 38, $this->source), "html", null, true);
                    yield "\" data-filter=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, true, 38), 38, $this->source), "html", null, true);
                    yield "\"><img src=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_0 = ($context["exp_icons"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, true, 38)] ?? null) : null), 38, $this->source), "html", null, true);
                    yield "\">";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["option"], "label", [], "any", false, false, true, 38), 38, $this->source), "html", null, true);
                    yield "</li>
                        ";
                }
                // line 40
                yield "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            yield "                  </ul>
              </div>   
      </div>
    </div>
  </div>
</div>
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 13
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::spaceless($___internal_parse_0_));
        // line 48
        yield "<style>
body .ajax-progress-fullscreen {
\tdisplay:none;
}
</style>
<script>
\tjQuery(function(i) {
\t\ti(document).ready(function () {
\t\t\tvar e = i(\".dropdown-select\"),
\t\t\t\tt = (i(\".dropdown-select-ul\"), i(\".dropdown-select-ul li\"));
\t\t\ti(\".dropdown-select\").on(\"click\", function () {
\t\t\t\ti(this).parent(\".dropdown-container\").toggleClass(\"active\");
\t\t\t}),
\t\t\tt.on(\"click\", function () {
\t\t\ti('.dark-overlay').addClass(\"d-block\");
\t\t\t\tvar e = jQuery(this);
\t\t\t\tif (!e.hasClass(\"optgroup\")) {
\t\t\t\t\tvar t = e.parent(\"ul\"),
\t\t\t\t\t\to = t.siblings(\".dropdown-select\"),
\t\t\t\t\t\ts = e.html(),
\t\t\t\t\t\tn = e.attr(\"data-value\"),
\t\t\t\t\t\ta = \"select[id^='\"+t.attr(\"data-role\")+\"']\"; //\"#\" + t.attr(\"data-role\");
\t\t\t\t\t\tif(t.attr(\"data-role\")=='edit-aexperience' || t.attr(\"data-role\")=='edit-sort-by') {
\t\t\t\t\t\t  jQuery(a).val(n);
\t\t\t\t\t\t  jQuery(a).change();
\t\t\t\t\t\t}
\t\t\t\t\te.siblings(\"li\").removeClass(\"selected\"), e.siblings(\"li\").children().attr(\"checked\", !1), e.addClass(\"selected\"), e.children().attr(\"checked\", !0), jQuery(a).val(n), o.html(s);
\t\t\t\t}
\t\t\t\te.parent(\"ul\").parent().toggleClass(\"active\");
\t\t\t});
\t\t});
\t\t
\t\tjQuery(\"label[for^='edit-sort-by']\").hide();
\t\t
\t\tif(jQuery(\"select[id^='edit-aexperience'] option:selected\").val()>0) {
\t\t\tvar selval = jQuery(\"select[id^='edit-aexperience'] option:selected\").val();
\t\t\tjQuery(\".experiencefm .dropdown-select-ul li\").each(function() {
\t\t\t\tif(jQuery(this).attr(\"data-value\")==selval) {
\t\t\t\t\tjQuery(\".experiencefm .dropdown-select\").html(jQuery(this).html());
\t\t\t\t}\t\t\t\t
\t\t\t});
\t\t}
\t\tif(jQuery(\"select[id^='edit-sort-by'] option:selected\").val() != '') {
\t\t\tvar selval = jQuery(\"select[id^='edit-sort-by'] option:selected\").val();
\t\t\tjQuery(\".sortbyfm .dropdown-select-ul li\").each(function() {
\t\t\t\tif(jQuery(this).attr(\"data-value\")==selval) {
\t\t\t\t\tjQuery(\".sortbyfm .dropdown-select\").html(jQuery(this).html());
\t\t\t\t}\t\t\t\t
\t\t\t});
\t\t}
\t\t
\t\tjQuery('.offers .button').click(function() {
\t\t\tjQuery('.dark-overlay').addClass(\"d-block\");
\t\t});
\t});
</script>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes", "options", "exp_icons"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/custom/hudayriyat/templates/form/select--aexperience.html.twig";
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
        return array (  149 => 48,  147 => 13,  137 => 41,  131 => 40,  119 => 38,  109 => 36,  106 => 35,  102 => 34,  96 => 31,  91 => 28,  85 => 27,  82 => 26,  72 => 24,  62 => 22,  59 => 21,  56 => 20,  52 => 19,  48 => 18,  42 => 14,  40 => 13,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/hudayriyat/templates/form/select--aexperience.html.twig", "/var/www/html/Hudayriyat/project/web/themes/custom/hudayriyat/templates/form/select--aexperience.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("apply" => 13, "for" => 19, "if" => 20);
        static $filters = array("escape" => 18, "t" => 22, "spaceless" => 13);
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
