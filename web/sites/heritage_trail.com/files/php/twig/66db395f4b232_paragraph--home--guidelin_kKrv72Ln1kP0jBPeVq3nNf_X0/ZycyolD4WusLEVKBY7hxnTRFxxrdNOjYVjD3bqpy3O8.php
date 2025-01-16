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

/* sites/heritage_trail.com/themes/custom/heritage/templates/paragraphs/paragraph--home--guidelines-type.html.twig */
class __TwigTemplate_6cdb1d196e28ebcefc928392b928c5f0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'paragraph' => [$this, 'block_paragraph'],
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension(SandboxExtension::class);
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 41
        yield "
";
        // line 42
        yield from $this->unwrap()->yieldBlock('paragraph', $context, $blocks);
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["content"]);        return; yield '';
    }

    public function block_paragraph($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 43
        yield "  ";
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        return; yield '';
    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 44
        yield "      <div class=\"third-fold bg-orange p-fold\" id=\"covid-section\">
    <div class=\"container\">      
      <h2 class=\"mb-md-5 col-4 mb-3 p-0\">";
        // line 46
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed((($__internal_compile_0 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_title", [], "any", false, false, true, 46)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null), 46, $this->source));
        yield "</h2>
      <div class=\"row justify-content-between\">
        <div class=\"col-12 col-md-6 mb-3 mb-md-0\" >
          <div class=\"body-text big bold mb-3\">";
        // line 49
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed((($__internal_compile_1 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_short_description", [], "any", false, false, true, 49)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[0] ?? null) : null), 49, $this->source));
        yield "</div>
          <div class=\"body-text bold\">";
        // line 50
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed((($__internal_compile_2 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_description", [], "any", false, false, true, 50)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[0] ?? null) : null), 50, $this->source));
        yield "</div>
        </div>
        <div class=\"col-12 col-md-5\">
          <ul class=\"icon-listing\">
          ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_guidelines_listing", [], "any", false, false, true, 54));
        foreach ($context['_seq'] as $context["key"] => $context["item"]) {
            // line 55
            yield "          ";
            if ((Twig\Extension\CoreExtension::first($this->env->getCharset(), $context["key"]) != "#")) {
                // line 56
                yield "            <li>
              <img src=\"";
                // line 57
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_3 = CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_4 = (($__internal_compile_5 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_guidelines_listing", [], "any", false, false, true, 57)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[$context["key"]] ?? null) : null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["#paragraph"] ?? null) : null), "field_icon", [], "any", false, false, true, 57)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[0] ?? null) : null), "entity", [], "any", false, false, true, 57), "uri", [], "any", false, false, true, 57), "value", [], "any", false, false, true, 57), 57, $this->source)), "html", null, true);
                yield "\" alt=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_6 = CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_7 = (($__internal_compile_8 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_guidelines_listing", [], "any", false, false, true, 57)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[$context["key"]] ?? null) : null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["#paragraph"] ?? null) : null), "field_icon", [], "any", false, false, true, 57)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[0] ?? null) : null), "alt", [], "any", false, false, true, 57), 57, $this->source), "html", null, true);
                yield "\">
              <div class=\"body-text bold\">";
                // line 58
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_9 = CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_10 = (($__internal_compile_11 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_guidelines_listing", [], "any", false, false, true, 58)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11[$context["key"]] ?? null) : null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["#paragraph"] ?? null) : null), "field_short_description", [], "any", false, false, true, 58)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[0] ?? null) : null), "value", [], "any", false, false, true, 58), 58, $this->source));
                yield "</div>
              <div class=\"body-text\">";
                // line 59
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_12 = CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_13 = (($__internal_compile_14 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_guidelines_listing", [], "any", false, false, true, 59)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14[$context["key"]] ?? null) : null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["#paragraph"] ?? null) : null), "field_guidelines_comment", [], "any", false, false, true, 59)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12[0] ?? null) : null), "value", [], "any", false, false, true, 59), 59, $this->source));
                yield "</div>
            </li>
          ";
            }
            // line 62
            yield "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        yield "            
          </ul>
        </div>
      </div>
    </div>
  </div>
  ";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "sites/heritage_trail.com/themes/custom/heritage/templates/paragraphs/paragraph--home--guidelines-type.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  116 => 63,  110 => 62,  104 => 59,  100 => 58,  94 => 57,  91 => 56,  88 => 55,  84 => 54,  77 => 50,  73 => 49,  67 => 46,  63 => 44,  54 => 43,  45 => 42,  42 => 41,);
    }

    public function getSourceContext()
    {
        return new Source("", "sites/heritage_trail.com/themes/custom/heritage/templates/paragraphs/paragraph--home--guidelines-type.html.twig", "/var/www/html/Hudayriyat/project/web/sites/heritage_trail.com/themes/custom/heritage/templates/paragraphs/paragraph--home--guidelines-type.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 42, "for" => 54, "if" => 55);
        static $filters = array("raw" => 46, "first" => 55, "escape" => 57);
        static $functions = array("file_url" => 57);

        try {
            $this->sandbox->checkSecurity(
                ['block', 'for', 'if'],
                ['raw', 'first', 'escape'],
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
