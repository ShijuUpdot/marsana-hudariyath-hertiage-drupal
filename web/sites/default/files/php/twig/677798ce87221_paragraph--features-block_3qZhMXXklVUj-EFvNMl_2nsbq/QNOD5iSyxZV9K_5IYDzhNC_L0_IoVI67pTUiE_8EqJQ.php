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

/* themes/custom/hudayriyat/templates/paragraphs/featured/paragraph--features-block--links-block.html.twig */
class __TwigTemplate_ba4cb413b94e7f15e25bb6477cb6044f extends Template
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
        yield "<div class=\"inside-wrapper\">
  <div class=\"inside\">
";
        // line 51
        yield from $this->unwrap()->yieldBlock('paragraph', $context, $blocks);
        // line 74
        yield "</div>
</div>";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["paragraph", "view_mode", "content"]);        return; yield '';
    }

    // line 51
    public function block_paragraph($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 52
        yield "  ";
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        return; yield '';
    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 53
        yield "    <section>
    <div class=\"container\">
    <div class=\"row\">
        ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_links", [], "any", false, false, true, 56));
        foreach ($context['_seq'] as $context["key"] => $context["item"]) {
            // line 57
            yield "        ";
            if ((Twig\Extension\CoreExtension::first($this->env->getCharset(), $context["key"]) != "#")) {
                // line 58
                yield "            ";
                $context["linkurl"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_0 = (($__internal_compile_1 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_links", [], "any", false, false, true, 58)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[$context["key"]] ?? null) : null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#paragraph"] ?? null) : null), "field_link", [], "any", false, false, true, 58), 0, [], "any", false, false, true, 58), "url", [], "any", false, false, true, 58);
                // line 59
                yield "            ";
                $context["linktitle"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_2 = (($__internal_compile_3 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_links", [], "any", false, false, true, 59)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[$context["key"]] ?? null) : null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["#paragraph"] ?? null) : null), "field_link", [], "any", false, false, true, 59), 0, [], "any", false, false, true, 59), "title", [], "any", false, false, true, 59);
                // line 60
                yield "            ";
                $context["upload"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_4 = CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_5 = (($__internal_compile_6 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_links", [], "any", false, false, true, 60)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[$context["key"]] ?? null) : null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["#paragraph"] ?? null) : null), "field_upload", [], "any", false, false, true, 60)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[0] ?? null) : null), "entity", [], "any", false, false, true, 60), "uri", [], "any", false, false, true, 60), "value", [], "any", false, false, true, 60), 60, $this->source)));
                // line 61
                yield "            ";
                if ( !Twig\Extension\CoreExtension::testEmpty(($context["upload"] ?? null))) {
                    // line 62
                    yield "              <a href=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_7 = CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_8 = (($__internal_compile_9 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_links", [], "any", false, false, true, 62)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[$context["key"]] ?? null) : null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["#paragraph"] ?? null) : null), "field_upload", [], "any", false, false, true, 62)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[0] ?? null) : null), "entity", [], "any", false, false, true, 62), "fileuri", [], "any", false, false, true, 62), 62, $this->source)), "html", null, true);
                    yield "\" class=\"btn external-btn download-btn\" target=\"_blank\">";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_10 = CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_11 = (($__internal_compile_12 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_links", [], "any", false, false, true, 62)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12[$context["key"]] ?? null) : null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["#paragraph"] ?? null) : null), "field_title", [], "any", false, false, true, 62)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10[0] ?? null) : null), "value", [], "any", false, false, true, 62), 62, $this->source)), "html", null, true);
                    yield "</a> &nbsp;&nbsp;
            ";
                }
                // line 64
                yield "            ";
                if (( !Twig\Extension\CoreExtension::testEmpty(($context["linktitle"] ?? null)) &&  !Twig\Extension\CoreExtension::testEmpty(($context["linkurl"] ?? null)))) {
                    // line 65
                    yield "              <div class=\"col\"><a href=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkurl"] ?? null), 65, $this->source), "html", null, true);
                    yield "\" class=\"btn external-btn mt-3\" target=\"_blank\">";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linktitle"] ?? null), 65, $this->source), "html", null, true);
                    yield "</a></div>
            ";
                }
                // line 67
                yield "        ";
            }
            // line 68
            yield "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        yield "    </div>
    </div>
    </section>
  ";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/custom/hudayriyat/templates/paragraphs/featured/paragraph--features-block--links-block.html.twig";
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
        return array (  125 => 69,  119 => 68,  116 => 67,  108 => 65,  105 => 64,  97 => 62,  94 => 61,  91 => 60,  88 => 59,  85 => 58,  82 => 57,  78 => 56,  73 => 53,  64 => 52,  60 => 51,  53 => 74,  51 => 51,  47 => 49,  45 => 46,  44 => 45,  43 => 44,  42 => 42,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/hudayriyat/templates/paragraphs/featured/paragraph--features-block--links-block.html.twig", "/var/www/html/Hudayriyat/project/web/themes/custom/hudayriyat/templates/paragraphs/featured/paragraph--features-block--links-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 42, "block" => 51, "for" => 56, "if" => 57);
        static $filters = array("clean_class" => 44, "first" => 57, "trim" => 60, "striptags" => 60, "escape" => 62, "raw" => 62);
        static $functions = array("file_url" => 62);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'for', 'if'],
                ['clean_class', 'first', 'trim', 'striptags', 'escape', 'raw'],
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
