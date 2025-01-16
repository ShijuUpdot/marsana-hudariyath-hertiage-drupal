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

/* themes/custom/hudayriyat/templates/paragraphs/offers-details/paragraph--offers-details--info-block.html.twig */
class __TwigTemplate_9e21840853b75218411631093ff84f73 extends Template
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
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["paragraph", "view_mode", "content"]);        return; yield '';
    }

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
        yield "  ";
        if (Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((($__internal_compile_0 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_information", [], "any", false, false, true, 51)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null)))))) {
            // line 52
            yield "  ";
            $context["url"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<current>")));
            // line 53
            yield "    ";
            $context["linkurl"] = (($__internal_compile_1 = CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_2 = ($context["content"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["field_link"] ?? null) : null), 0, [], "any", false, false, true, 53)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["#url"] ?? null) : null);
            // line 54
            yield "    ";
            $context["linktitle"] = (($__internal_compile_3 = CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_4 = ($context["content"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["field_link"] ?? null) : null), 0, [], "any", false, false, true, 54)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["#title"] ?? null) : null);
            // line 55
            yield "        <section class=\"related-content related-interaction white-bg\" data-scroll-speed=\"4\">
              <ul class=\"interaction-external\">
                ";
            // line 57
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_information", [], "any", false, false, true, 57));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 58
                yield "                ";
                if ((Twig\Extension\CoreExtension::first($this->env->getCharset(), $context["key"]) != "#")) {
                    // line 59
                    yield "\t\t\t\t\t";
                    $context["imgicon"] = $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_5 = CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_6 = (($__internal_compile_7 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_information", [], "any", false, false, true, 59)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[$context["key"]] ?? null) : null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["#paragraph"] ?? null) : null), "field_icon", [], "any", false, false, true, 59)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[0] ?? null) : null), "entity", [], "any", false, false, true, 59), "uri", [], "any", false, false, true, 59), "value", [], "any", false, false, true, 59), 59, $this->source));
                    // line 60
                    yield "                    <li>
                      <div class=\"interaction-external-wrapper w-100\">
                          <div class=\"detailed-title\">
\t\t\t\t\t\t  ";
                    // line 63
                    if ((($context["imgicon"] ?? null) && (($context["imgicon"] ?? null) != "/"))) {
                        // line 64
                        yield "\t\t\t\t\t\t\t<img src=\"";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["imgicon"] ?? null), 64, $this->source), "html", null, true);
                        yield "\" alt=\"\">
\t\t\t\t\t\t  ";
                    }
                    // line 66
                    yield "                          <p>";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_8 = CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_9 = (($__internal_compile_10 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_information", [], "any", false, false, true, 66)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10[$context["key"]] ?? null) : null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["#paragraph"] ?? null) : null), "field_title", [], "any", false, false, true, 66)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[0] ?? null) : null), "value", [], "any", false, false, true, 66), 66, $this->source)), "html", null, true);
                    yield "</p>
                          </div>
                          ";
                    // line 68
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_11 = CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_12 = (($__internal_compile_13 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_information", [], "any", false, false, true, 68)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13[$context["key"]] ?? null) : null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["#paragraph"] ?? null) : null), "field_intro_description", [], "any", false, false, true, 68)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11[0] ?? null) : null), "value", [], "any", false, false, true, 68), 68, $this->source));
                    yield "
                      </div>
                    </li>
                ";
                }
                // line 72
                yield "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 73
            yield "                ";
            if (( !Twig\Extension\CoreExtension::testEmpty(($context["linkurl"] ?? null)) &&  !Twig\Extension\CoreExtension::testEmpty(($context["linktitle"] ?? null)))) {
                // line 74
                yield "\t\t\t\t\t";
                $context["exticon"] = $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_14 = (($__internal_compile_15 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_link_icon", [], "any", false, false, true, 74)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["#items"] ?? null) : null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14[0] ?? null) : null), "entity", [], "any", false, false, true, 74), "uri", [], "any", false, false, true, 74), "value", [], "any", false, false, true, 74), 74, $this->source));
                // line 75
                yield "                  <li class=\"navy-bg ticket\">
                    <div class=\"interaction-external-wrapper\">
                      <a href=\"";
                // line 77
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkurl"] ?? null), 77, $this->source), "html", null, true);
                yield "\" target=\"_blank\" class=\"external-link\"></a>
                      <p>";
                // line 78
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linktitle"] ?? null), 78, $this->source), "html", null, true);
                yield "</p>
\t\t\t\t\t  ";
                // line 79
                if ((($context["exticon"] ?? null) && (($context["exticon"] ?? null) != "/"))) {
                    // line 80
                    yield "\t\t\t\t\t\t<img src=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["exticon"] ?? null), 80, $this->source), "html", null, true);
                    yield "\" alt=\"External\">
\t\t\t\t\t  ";
                }
                // line 82
                yield "                    </div>
                  </li>
                ";
            }
            // line 85
            yield "              </ul>
          </section>
 ";
        }
        // line 88
        yield "  ";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/custom/hudayriyat/templates/paragraphs/offers-details/paragraph--offers-details--info-block.html.twig";
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
        return array (  159 => 88,  154 => 85,  149 => 82,  143 => 80,  141 => 79,  137 => 78,  133 => 77,  129 => 75,  126 => 74,  123 => 73,  117 => 72,  110 => 68,  104 => 66,  98 => 64,  96 => 63,  91 => 60,  88 => 59,  85 => 58,  81 => 57,  77 => 55,  74 => 54,  71 => 53,  68 => 52,  65 => 51,  56 => 50,  47 => 49,  45 => 46,  44 => 45,  43 => 44,  42 => 42,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/hudayriyat/templates/paragraphs/offers-details/paragraph--offers-details--info-block.html.twig", "/var/www/html/Hudayriyat/project/web/themes/custom/hudayriyat/templates/paragraphs/offers-details/paragraph--offers-details--info-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 42, "block" => 49, "if" => 51, "for" => 57);
        static $filters = array("clean_class" => 44, "length" => 51, "trim" => 51, "striptags" => 51, "render" => 51, "first" => 58, "escape" => 64, "raw" => 66);
        static $functions = array("url" => 52, "file_url" => 59);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'if', 'for'],
                ['clean_class', 'length', 'trim', 'striptags', 'render', 'first', 'escape', 'raw'],
                ['url', 'file_url'],
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
