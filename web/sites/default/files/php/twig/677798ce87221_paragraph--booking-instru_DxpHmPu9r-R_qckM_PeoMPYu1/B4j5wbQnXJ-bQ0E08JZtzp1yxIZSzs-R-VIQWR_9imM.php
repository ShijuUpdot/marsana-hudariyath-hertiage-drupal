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

/* themes/custom/hudayriyat/templates/paragraphs/paragraph--booking-instructions--booking-type.html.twig */
class __TwigTemplate_d161d0527a75b18d8a651be144926423 extends Template
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
        yield "
      ";
        // line 52
        $context["count"] = 0;
        // line 53
        yield "      ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_listing", [], "any", false, false, true, 53));
        foreach ($context['_seq'] as $context["key"] => $context["item"]) {
            // line 54
            yield "        ";
            if ((Twig\Extension\CoreExtension::first($this->env->getCharset(), $context["key"]) != "#")) {
                // line 55
                yield "          ";
                $context["count"] = (($context["count"] ?? null) + 1);
                // line 56
                yield "        ";
            }
            // line 57
            yield "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        yield "     <li>
        <div class=\"numberModal\"><p>";
        // line 59
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed((($__internal_compile_0 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_section_no", [], "any", false, false, true, 59)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null), 59, $this->source)), "html", null, true);
        yield "</p></div>
        <div class=\"contentModal\">
            <div class=\"body-text big titleModal\">";
        // line 61
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed((($__internal_compile_1 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_headline", [], "any", false, false, true, 61)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[0] ?? null) : null), 61, $this->source)), "html", null, true);
        yield "</div>
            ";
        // line 62
        if (Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((($__internal_compile_2 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_listing", [], "any", false, false, true, 62)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[0] ?? null) : null)))))) {
            // line 63
            yield "              ";
            if ((($context["count"] ?? null) > 1)) {
                // line 64
                yield "                <ul class=\"contentModalListing\">
              ";
            }
            // line 66
            yield "              ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_listing", [], "any", false, false, true, 66));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 67
                yield "              ";
                if ((Twig\Extension\CoreExtension::first($this->env->getCharset(), $context["key"]) != "#")) {
                    // line 68
                    yield "                ";
                    $context["linkurl"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_3 = (($__internal_compile_4 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_listing", [], "any", false, false, true, 68)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[$context["key"]] ?? null) : null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["#paragraph"] ?? null) : null), "field_link", [], "any", false, false, true, 68), 0, [], "any", false, false, true, 68), "url", [], "any", false, false, true, 68);
                    // line 69
                    yield "                ";
                    $context["linktitle"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_5 = (($__internal_compile_6 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_listing", [], "any", false, false, true, 69)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[$context["key"]] ?? null) : null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["#paragraph"] ?? null) : null), "field_link", [], "any", false, false, true, 69), 0, [], "any", false, false, true, 69), "title", [], "any", false, false, true, 69);
                    // line 70
                    yield "                ";
                    if ((($context["count"] ?? null) > 1)) {
                        // line 71
                        yield "                  <li class=\"body-text big\">
                    <span class=\"bold\">";
                        // line 72
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_7 = CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_8 = (($__internal_compile_9 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_listing", [], "any", false, false, true, 72)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[$context["key"]] ?? null) : null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["#paragraph"] ?? null) : null), "field_headline", [], "any", false, false, true, 72)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[0] ?? null) : null), "value", [], "any", false, false, true, 72), 72, $this->source)), "html", null, true);
                        yield "</span>
                    ";
                        // line 73
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_10 = CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_11 = (($__internal_compile_12 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_listing", [], "any", false, false, true, 73)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12[$context["key"]] ?? null) : null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["#paragraph"] ?? null) : null), "field_sub_headline", [], "any", false, false, true, 73)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10[0] ?? null) : null), "value", [], "any", false, false, true, 73), 73, $this->source)), "html", null, true);
                        yield "
                    <a href=\"";
                        // line 74
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkurl"] ?? null), 74, $this->source), "html", null, true);
                        yield "\" target=\"_blank\">";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linktitle"] ?? null), 74, $this->source), "html", null, true);
                        yield "</a>
                  </li>
                ";
                    } else {
                        // line 77
                        yield "                  <div class=\"body-text big titleModal\">
                    <span>";
                        // line 78
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_13 = CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_14 = (($__internal_compile_15 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_listing", [], "any", false, false, true, 78)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15[$context["key"]] ?? null) : null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["#paragraph"] ?? null) : null), "field_headline", [], "any", false, false, true, 78)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13[0] ?? null) : null), "value", [], "any", false, false, true, 78), 78, $this->source)), "html", null, true);
                        yield "</span>
                    ";
                        // line 79
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_16 = CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_17 = (($__internal_compile_18 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_listing", [], "any", false, false, true, 79)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18[$context["key"]] ?? null) : null)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["#paragraph"] ?? null) : null), "field_sub_headline", [], "any", false, false, true, 79)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16[0] ?? null) : null), "value", [], "any", false, false, true, 79), 79, $this->source)), "html", null, true);
                        yield "
                    <a href=\"";
                        // line 80
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkurl"] ?? null), 80, $this->source), "html", null, true);
                        yield "\" target=\"_blank\">";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linktitle"] ?? null), 80, $this->source), "html", null, true);
                        yield "</a>
                  </div>
                ";
                    }
                    // line 83
                    yield "                ";
                }
                // line 84
                yield "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 85
            yield "              ";
            if ((($context["count"] ?? null) > 1)) {
                // line 86
                yield "                </ul>
              ";
            }
            // line 88
            yield "            ";
        }
        // line 89
        yield "        </div>
        </li>


  ";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/custom/hudayriyat/templates/paragraphs/paragraph--booking-instructions--booking-type.html.twig";
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
        return array (  185 => 89,  182 => 88,  178 => 86,  175 => 85,  169 => 84,  166 => 83,  158 => 80,  154 => 79,  150 => 78,  147 => 77,  139 => 74,  135 => 73,  131 => 72,  128 => 71,  125 => 70,  122 => 69,  119 => 68,  116 => 67,  111 => 66,  107 => 64,  104 => 63,  102 => 62,  98 => 61,  93 => 59,  90 => 58,  84 => 57,  81 => 56,  78 => 55,  75 => 54,  70 => 53,  68 => 52,  65 => 51,  56 => 50,  47 => 49,  45 => 46,  44 => 45,  43 => 44,  42 => 42,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/hudayriyat/templates/paragraphs/paragraph--booking-instructions--booking-type.html.twig", "/var/www/html/Hudayriyat/project/web/themes/custom/hudayriyat/templates/paragraphs/paragraph--booking-instructions--booking-type.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 42, "block" => 49, "for" => 53, "if" => 54);
        static $filters = array("clean_class" => 44, "first" => 54, "escape" => 59, "render" => 59, "length" => 62, "trim" => 62, "striptags" => 62);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'for', 'if'],
                ['clean_class', 'first', 'escape', 'render', 'length', 'trim', 'striptags'],
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
