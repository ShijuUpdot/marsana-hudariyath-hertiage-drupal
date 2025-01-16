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

/* themes/custom/hudayriyat/templates/paragraphs/banner/paragraph--banner-block--intro-block.html.twig */
class __TwigTemplate_cb33e9fbe4250fc9c67fcb8195e58f05 extends Template
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
        // line 42
        $context["classes"] = ["paragraph", ("paragraph--type--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source,         // line 44
($context["paragraph"] ?? null), "bundle", [], "any", false, false, true, 44), 44, $this->source))), ((        // line 45
($context["view_mode"] ?? null)) ? (("paragraph--view-mode--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 45, $this->source)))) : ("")), (( !CoreExtension::getAttribute($this->env, $this->source,         // line 46
($context["paragraph"] ?? null), "isPublished", [], "method", false, false, true, 46)) ? ("paragraph--unpublished") : (""))];
        // line 49
        yield from $this->unwrap()->yieldBlock('paragraph', $context, $blocks);
        // line 77
        yield "    ";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["paragraph", "view_mode", "content"]);        return; yield '';
    }

    // line 49
    public function block_paragraph($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 50
        yield "  ";
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        return; yield '';
    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 51
        yield "      <div class=\"row\">
        <div class=\"col-md-6\">
          <div class=\"listing-number\">";
        // line 53
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed((($__internal_compile_0 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_section_no", [], "any", false, false, true, 53)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null), 53, $this->source)), "html", null, true);
        yield "</div>
          <h2>";
        // line 54
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed((($__internal_compile_1 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_title", [], "any", false, false, true, 54)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[0] ?? null) : null), 54, $this->source)), "html", null, true);
        yield " </h2>
        </div>
      </div>
      <div class=\"row\">
        ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_intro_descriptions", [], "any", false, false, true, 58));
        foreach ($context['_seq'] as $context["key"] => $context["item"]) {
            // line 59
            yield "        ";
            if ((Twig\Extension\CoreExtension::first($this->env->getCharset(), $context["key"]) != "#")) {
                // line 60
                yield "        ";
                $context["sub_description"] = Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_2 = CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_3 = (($__internal_compile_4 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_intro_descriptions", [], "any", false, false, true, 60)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[$context["key"]] ?? null) : null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["#paragraph"] ?? null) : null), "field_intro_short_description", [], "any", false, false, true, 60)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[0] ?? null) : null), "value", [], "any", false, false, true, 60), 60, $this->source));
                // line 61
                yield "        ";
                $context["description"] = Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_5 = CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_6 = (($__internal_compile_7 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_intro_descriptions", [], "any", false, false, true, 61)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[$context["key"]] ?? null) : null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["#paragraph"] ?? null) : null), "field_intro_description", [], "any", false, false, true, 61)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[0] ?? null) : null), "value", [], "any", false, false, true, 61), 61, $this->source));
                // line 62
                yield "          <div class=\"col-md-6\">
          ";
                // line 63
                if ( !(null === ($context["sub_description"] ?? null))) {
                    // line 64
                    yield "            <p class=\"detailed-txt\">";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sub_description"] ?? null), 64, $this->source), "html", null, true);
                    yield "</p>
          ";
                }
                // line 66
                yield "          </div>
          <div class=\"col-md-6\">
          ";
                // line 68
                if ( !(null === ($context["description"] ?? null))) {
                    // line 69
                    yield "            <p class=\"detailed-txt\">";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["description"] ?? null), 69, $this->source), "html", null, true);
                    yield " </p>
          ";
                }
                // line 71
                yield "          </div>
        ";
            }
            // line 73
            yield "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        yield "      </div>
          
  ";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/custom/hudayriyat/templates/paragraphs/banner/paragraph--banner-block--intro-block.html.twig";
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
        return array (  129 => 74,  123 => 73,  119 => 71,  113 => 69,  111 => 68,  107 => 66,  101 => 64,  99 => 63,  96 => 62,  93 => 61,  90 => 60,  87 => 59,  83 => 58,  76 => 54,  72 => 53,  68 => 51,  59 => 50,  55 => 49,  49 => 77,  47 => 49,  45 => 46,  44 => 45,  43 => 44,  42 => 42,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/hudayriyat/templates/paragraphs/banner/paragraph--banner-block--intro-block.html.twig", "/var/www/html/Hudayriyat/project/web/themes/custom/hudayriyat/templates/paragraphs/banner/paragraph--banner-block--intro-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 42, "block" => 49, "for" => 58, "if" => 59);
        static $filters = array("clean_class" => 44, "escape" => 53, "render" => 53, "first" => 59, "striptags" => 60, "raw" => 60);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'for', 'if'],
                ['clean_class', 'escape', 'render', 'first', 'striptags', 'raw'],
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
