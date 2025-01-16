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

/* sites/heritage_trail.com/themes/custom/heritage/templates/paragraphs/paragraph--home--about-section.html.twig */
class __TwigTemplate_f0e0d444086554d28849062b9596f3e2 extends Template
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
        // line 41
        yield "<div class=\"forth-fold p-fold\">
    <div class=\"container\">
      <h2 class=\"mb-md-5 mb-3\">";
        // line 43
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed((($__internal_compile_0 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_title", [], "any", false, false, true, 43)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null), 43, $this->source));
        yield "</h2>
      <div class=\"row\">
      ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_about", [], "any", false, false, true, 45));
        foreach ($context['_seq'] as $context["key"] => $context["item"]) {
            // line 46
            yield "      ";
            if ((Twig\Extension\CoreExtension::first($this->env->getCharset(), $context["key"]) != "#")) {
                // line 47
                yield "        <div class=\"col-12 mb-3 mb-md-0 col-md-6\" >
          <ul class=\"logo-listing\">
            <li class=\"pl-0\">
              <a href=\"";
                // line 50
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_1 = CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_2 = (($__internal_compile_3 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_about", [], "any", false, false, true, 50)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[$context["key"]] ?? null) : null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["#paragraph"] ?? null) : null), "field_link_url", [], "any", false, false, true, 50)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[0] ?? null) : null), "value", [], "any", false, false, true, 50), 50, $this->source)), "html", null, true);
                yield "\" target=\"_blank\"><img src=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_4 = CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_5 = (($__internal_compile_6 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_about", [], "any", false, false, true, 50)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[$context["key"]] ?? null) : null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["#paragraph"] ?? null) : null), "field_logo", [], "any", false, false, true, 50)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[0] ?? null) : null), "entity", [], "any", false, false, true, 50), "uri", [], "any", false, false, true, 50), "value", [], "any", false, false, true, 50), 50, $this->source)), "html", null, true);
                yield "\" alt=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_7 = CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_8 = (($__internal_compile_9 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_about", [], "any", false, false, true, 50)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[$context["key"]] ?? null) : null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["#paragraph"] ?? null) : null), "field_logo", [], "any", false, false, true, 50)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[0] ?? null) : null), "alt", [], "any", false, false, true, 50), 50, $this->source), "html", null, true);
                yield "\"></a>
              <div class=\"body-text big bold mb-3\">";
                // line 51
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_10 = CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_11 = (($__internal_compile_12 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_about", [], "any", false, false, true, 51)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12[$context["key"]] ?? null) : null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["#paragraph"] ?? null) : null), "field_headline_title", [], "any", false, false, true, 51)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10[0] ?? null) : null), "value", [], "any", false, false, true, 51), 51, $this->source));
                yield "</div>
              <div class=\"body-text\">";
                // line 52
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_13 = CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_14 = (($__internal_compile_15 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_about", [], "any", false, false, true, 52)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15[$context["key"]] ?? null) : null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["#paragraph"] ?? null) : null), "field_headline_description", [], "any", false, false, true, 52)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13[0] ?? null) : null), "value", [], "any", false, false, true, 52), 52, $this->source));
                yield "</div>
            </li>
          </ul>
        </div>
      ";
            }
            // line 57
            yield "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        yield "      </div>
    </div>
  </div>";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["content"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "sites/heritage_trail.com/themes/custom/heritage/templates/paragraphs/paragraph--home--about-section.html.twig";
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
        return array (  87 => 58,  81 => 57,  73 => 52,  69 => 51,  61 => 50,  56 => 47,  53 => 46,  49 => 45,  44 => 43,  40 => 41,);
    }

    public function getSourceContext()
    {
        return new Source("", "sites/heritage_trail.com/themes/custom/heritage/templates/paragraphs/paragraph--home--about-section.html.twig", "/var/www/html/Hudayriyat/project/web/sites/heritage_trail.com/themes/custom/heritage/templates/paragraphs/paragraph--home--about-section.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 45, "if" => 46);
        static $filters = array("raw" => 43, "first" => 46, "escape" => 50, "striptags" => 50);
        static $functions = array("file_url" => 50);

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
                ['raw', 'first', 'escape', 'striptags'],
                ['file_url'],
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
