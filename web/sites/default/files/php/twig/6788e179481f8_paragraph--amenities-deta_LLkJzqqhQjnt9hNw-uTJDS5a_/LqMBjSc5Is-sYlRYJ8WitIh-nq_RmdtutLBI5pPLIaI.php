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

/* themes/custom/hudayriyat/templates/paragraphs/amenities/paragraph--amenities-details--info-block.html.twig */
class __TwigTemplate_ccebe9221f4f39f68c8227285e8892ba extends Template
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
            ->checkDeprecations($context, ["paragraph", "view_mode", "content", "loop"]);        return; yield '';
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
            yield "    ";
            $context["url"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<current>")));
            // line 53
            yield "    ";
            $context["linkurl"] = (($__internal_compile_1 = CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_2 = ($context["content"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["field_link"] ?? null) : null), 0, [], "any", false, false, true, 53)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["#url"] ?? null) : null);
            // line 54
            yield "    ";
            $context["linktitle"] = (($__internal_compile_3 = CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_4 = ($context["content"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["field_link"] ?? null) : null), 0, [], "any", false, false, true, 54)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["#title"] ?? null) : null);
            // line 55
            yield "    ";
            $context["multi_opening_hours"] = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_multi_opening_hours", [], "any", false, false, true, 55);
            // line 56
            yield "    ";
            if ((!CoreExtension::inFilter("eat", ($context["url"] ?? null)) && !CoreExtension::inFilter("interactive", ($context["url"] ?? null)))) {
                // line 57
                yield "\t\t<div class=\"parallax white-bg\" data-scroll-speed=\"4\">
            <section class=\"related-content related-interaction white-bg\">
              <ul class=\"interaction-external\">
                ";
                // line 60
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_information", [], "any", false, false, true, 60));
                foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                    // line 61
                    yield "                ";
                    if ((Twig\Extension\CoreExtension::first($this->env->getCharset(), $context["key"]) != "#")) {
                        // line 62
                        yield "                  ";
                        $context["info_title"] = Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_5 = CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_6 = (($__internal_compile_7 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_information", [], "any", false, false, true, 62)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[$context["key"]] ?? null) : null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["#paragraph"] ?? null) : null), "field_title", [], "any", false, false, true, 62)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[0] ?? null) : null), "value", [], "any", false, false, true, 62), 62, $this->source));
                        // line 63
                        yield "                      ";
                        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((($__internal_compile_8 = ($context["multi_opening_hours"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[0] ?? null) : null))))) && (CoreExtension::inFilter("Opening Hours", ($context["info_title"] ?? null)) || CoreExtension::inFilter("ساعات العمل", ($context["info_title"] ?? null))))) {
                            // line 64
                            yield "                      ";
                        } else {
                            // line 65
                            yield "                      <li>
                        <div class=\"interaction-external-wrapper\">
                            <div class=\"detailed-title\">
                            <img src=\"";
                            // line 68
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_9 = CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_10 = (($__internal_compile_11 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_information", [], "any", false, false, true, 68)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11[$context["key"]] ?? null) : null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["#paragraph"] ?? null) : null), "field_icon", [], "any", false, false, true, 68)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[0] ?? null) : null), "entity", [], "any", false, false, true, 68), "uri", [], "any", false, false, true, 68), "value", [], "any", false, false, true, 68), 68, $this->source)), "html", null, true);
                            yield "\" alt=\"\">
                            <p>";
                            // line 69
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["info_title"] ?? null), 69, $this->source), "html", null, true);
                            yield "</p>
                            </div>
                            ";
                            // line 71
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_12 = CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_13 = (($__internal_compile_14 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_information", [], "any", false, false, true, 71)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14[$context["key"]] ?? null) : null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["#paragraph"] ?? null) : null), "field_intro_description", [], "any", false, false, true, 71)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12[0] ?? null) : null), "value", [], "any", false, false, true, 71), 71, $this->source));
                            yield "
                        </div>
                      </li>
                      ";
                        }
                        // line 75
                        yield "                    ";
                    }
                    // line 76
                    yield "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 77
                yield "                ";
                if (Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((($__internal_compile_15 = ($context["multi_opening_hours"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15[0] ?? null) : null)))))) {
                    yield "  
                    <li>
                      <div class=\"interaction-external-wrapper\">
                        <div class=\"detailed-title\">
                          <button type=\"button\" class=\"btn dropdown-toggle w-100\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <img src=\"/images/static/icon-hour.svg\" alt=\"\">
                            <p> ";
                    // line 83
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Opening Hours"));
                    yield "</p>
                          </button>
                          <div class=\"dropdown-menu\">
                          ";
                    // line 86
                    $context["ocnt"] = 0;
                    // line 87
                    yield "                          ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_multi_opening_hours", [], "any", false, false, true, 87));
                    foreach ($context['_seq'] as $context["okey"] => $context["oitem"]) {
                        // line 88
                        yield "                            ";
                        if ((Twig\Extension\CoreExtension::first($this->env->getCharset(), $context["okey"]) != "#")) {
                            // line 89
                            yield "                            ";
                            $context["ocnt"] = (($context["ocnt"] ?? null) + 1);
                            // line 90
                            yield "                            ";
                        }
                        // line 91
                        yield "                          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['okey'], $context['oitem'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 92
                    yield "                          ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_multi_opening_hours", [], "any", false, false, true, 92));
                    $context['loop'] = [
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    ];
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["okey"] => $context["oitem"]) {
                        // line 93
                        yield "                          ";
                        if ((Twig\Extension\CoreExtension::first($this->env->getCharset(), $context["okey"]) != "#")) {
                            // line 94
                            yield "                            ";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["oitem"], 94, $this->source), "html", null, true);
                            yield "
                            ";
                            // line 95
                            if ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 95) < (($context["ocnt"] ?? null) - 1))) {
                                // line 96
                                yield "                              <div class=\"dropdown-divider\"></div>    
                            ";
                            }
                            // line 98
                            yield "                          ";
                        }
                        // line 99
                        yield "                          ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['okey'], $context['oitem'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 100
                    yield "                        </div>
                      </div>
                    </li>
                ";
                }
                // line 104
                yield "                ";
                if (( !Twig\Extension\CoreExtension::testEmpty(($context["linkurl"] ?? null)) &&  !Twig\Extension\CoreExtension::testEmpty(($context["linktitle"] ?? null)))) {
                    // line 105
                    yield "                  <li class=\"navy-bg ticket\">
                    <div class=\"interaction-external-wrapper\">
                      ";
                    // line 107
                    if (CoreExtension::inFilter("hudayriyat-courts", ($context["linkurl"] ?? null))) {
                        // line 108
                        yield "                        <a href=\"";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkurl"] ?? null), 108, $this->source), "html", null, true);
                        yield "\" class=\"external-link\"></a>
                      ";
                    } else {
                        // line 110
                        yield "                        <a href=\"";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkurl"] ?? null), 110, $this->source), "html", null, true);
                        yield "\" target=\"_blank\" class=\"external-link\"></a>
                      ";
                    }
                    // line 112
                    yield "                      <img src=\"\" alt=\"\">
                      <p>";
                    // line 113
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linktitle"] ?? null), 113, $this->source), "html", null, true);
                    yield "</p>
                      <img src=\"";
                    // line 114
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_16 = (($__internal_compile_17 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_link_icon", [], "any", false, false, true, 114)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["#items"] ?? null) : null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16[0] ?? null) : null), "entity", [], "any", false, false, true, 114), "uri", [], "any", false, false, true, 114), "value", [], "any", false, false, true, 114), 114, $this->source)), "html", null, true);
                    yield "\" alt=\"External\">
                    </div>
                  </li>
                ";
                }
                // line 118
                yield "              </ul>
          </section>
        ";
            } elseif ((CoreExtension::inFilter("eat",             // line 120
($context["url"] ?? null)) || CoreExtension::inFilter("interactive", ($context["url"] ?? null)))) {
                // line 121
                yield "        ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_information", [], "any", false, false, true, 121));
                foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                    // line 122
                    yield "        ";
                    if ((Twig\Extension\CoreExtension::first($this->env->getCharset(), $context["key"]) != "#")) {
                        // line 123
                        yield "            ";
                        $context["background_image"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_18 = CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_19 = (($__internal_compile_20 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_information", [], "any", false, false, true, 123)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20[$context["key"]] ?? null) : null)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19["#paragraph"] ?? null) : null), "field_banner_image", [], "any", false, false, true, 123)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18[0] ?? null) : null), "entity", [], "any", false, false, true, 123), "uri", [], "any", false, false, true, 123), "value", [], "any", false, false, true, 123), 123, $this->source)));
                        // line 124
                        yield "            ";
                        $context["upload"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_21 = CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_22 = (($__internal_compile_23 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_information", [], "any", false, false, true, 124)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23[$context["key"]] ?? null) : null)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22["#paragraph"] ?? null) : null), "field_upload", [], "any", false, false, true, 124)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21[0] ?? null) : null), "entity", [], "any", false, false, true, 124), "fileuri", [], "any", false, false, true, 124), 124, $this->source)));
                        // line 125
                        yield "          <div class=\"col px-0\">
            <div class=\"detailed-group\">
             ";
                        // line 127
                        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_24 = CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_25 = (($__internal_compile_26 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_information", [], "any", false, false, true, 127)) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26[$context["key"]] ?? null) : null)) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25["#paragraph"] ?? null) : null), "field_banner_image", [], "any", false, false, true, 127)) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24[0] ?? null) : null), "entity", [], "any", false, false, true, 127), "uri", [], "any", false, false, true, 127), "value", [], "any", false, false, true, 127)) {
                            // line 128
                            yield "                <img src=\"";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_27 = CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_28 = (($__internal_compile_29 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_information", [], "any", false, false, true, 128)) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29[$context["key"]] ?? null) : null)) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28["#paragraph"] ?? null) : null), "field_banner_image", [], "any", false, false, true, 128)) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27[0] ?? null) : null), "entity", [], "any", false, false, true, 128), "uri", [], "any", false, false, true, 128), "value", [], "any", false, false, true, 128), 128, $this->source)), "html", null, true);
                            yield "\" alt=\"\" class=\"location\">
              ";
                        }
                        // line 130
                        yield "              <div class=\"detailed-title\">
                <img src=\"";
                        // line 131
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_30 = CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_31 = (($__internal_compile_32 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_information", [], "any", false, false, true, 131)) && is_array($__internal_compile_32) || $__internal_compile_32 instanceof ArrayAccess ? ($__internal_compile_32[$context["key"]] ?? null) : null)) && is_array($__internal_compile_31) || $__internal_compile_31 instanceof ArrayAccess ? ($__internal_compile_31["#paragraph"] ?? null) : null), "field_icon", [], "any", false, false, true, 131)) && is_array($__internal_compile_30) || $__internal_compile_30 instanceof ArrayAccess ? ($__internal_compile_30[0] ?? null) : null), "entity", [], "any", false, false, true, 131), "uri", [], "any", false, false, true, 131), "value", [], "any", false, false, true, 131), 131, $this->source)), "html", null, true);
                        yield "\" alt=\"\">
                <p>";
                        // line 132
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_33 = CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_34 = (($__internal_compile_35 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_information", [], "any", false, false, true, 132)) && is_array($__internal_compile_35) || $__internal_compile_35 instanceof ArrayAccess ? ($__internal_compile_35[$context["key"]] ?? null) : null)) && is_array($__internal_compile_34) || $__internal_compile_34 instanceof ArrayAccess ? ($__internal_compile_34["#paragraph"] ?? null) : null), "field_title", [], "any", false, false, true, 132)) && is_array($__internal_compile_33) || $__internal_compile_33 instanceof ArrayAccess ? ($__internal_compile_33[0] ?? null) : null), "value", [], "any", false, false, true, 132), 132, $this->source)), "html", null, true);
                        yield "</p>
              </div>
              ";
                        // line 134
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_36 = CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_37 = (($__internal_compile_38 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_information", [], "any", false, false, true, 134)) && is_array($__internal_compile_38) || $__internal_compile_38 instanceof ArrayAccess ? ($__internal_compile_38[$context["key"]] ?? null) : null)) && is_array($__internal_compile_37) || $__internal_compile_37 instanceof ArrayAccess ? ($__internal_compile_37["#paragraph"] ?? null) : null), "field_intro_description", [], "any", false, false, true, 134)) && is_array($__internal_compile_36) || $__internal_compile_36 instanceof ArrayAccess ? ($__internal_compile_36[0] ?? null) : null), "value", [], "any", false, false, true, 134), 134, $this->source));
                        yield "
              ";
                        // line 135
                        if ( !Twig\Extension\CoreExtension::testEmpty(($context["upload"] ?? null))) {
                            // line 136
                            yield "                <br><br>
                <a href=\"";
                            // line 137
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_39 = CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_40 = (($__internal_compile_41 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_information", [], "any", false, false, true, 137)) && is_array($__internal_compile_41) || $__internal_compile_41 instanceof ArrayAccess ? ($__internal_compile_41[$context["key"]] ?? null) : null)) && is_array($__internal_compile_40) || $__internal_compile_40 instanceof ArrayAccess ? ($__internal_compile_40["#paragraph"] ?? null) : null), "field_upload", [], "any", false, false, true, 137)) && is_array($__internal_compile_39) || $__internal_compile_39 instanceof ArrayAccess ? ($__internal_compile_39[0] ?? null) : null), "entity", [], "any", false, false, true, 137), "fileuri", [], "any", false, false, true, 137), 137, $this->source)), "html", null, true);
                            yield "\" class=\"btn external-btn download-btn\" target=\"_blank\">";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Download Menu"));
                            yield "</a>
              ";
                        }
                        // line 139
                        yield "            </div>
          </div>
        ";
                    }
                    // line 142
                    yield "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 143
                yield "        ";
            }
            // line 144
            yield " ";
        }
        // line 145
        yield "  ";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/custom/hudayriyat/templates/paragraphs/amenities/paragraph--amenities-details--info-block.html.twig";
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
        return array (  339 => 145,  336 => 144,  333 => 143,  327 => 142,  322 => 139,  315 => 137,  312 => 136,  310 => 135,  306 => 134,  301 => 132,  297 => 131,  294 => 130,  288 => 128,  286 => 127,  282 => 125,  279 => 124,  276 => 123,  273 => 122,  268 => 121,  266 => 120,  262 => 118,  255 => 114,  251 => 113,  248 => 112,  242 => 110,  236 => 108,  234 => 107,  230 => 105,  227 => 104,  221 => 100,  207 => 99,  204 => 98,  200 => 96,  198 => 95,  193 => 94,  190 => 93,  172 => 92,  166 => 91,  163 => 90,  160 => 89,  157 => 88,  152 => 87,  150 => 86,  144 => 83,  134 => 77,  128 => 76,  125 => 75,  118 => 71,  113 => 69,  109 => 68,  104 => 65,  101 => 64,  98 => 63,  95 => 62,  92 => 61,  88 => 60,  83 => 57,  80 => 56,  77 => 55,  74 => 54,  71 => 53,  68 => 52,  65 => 51,  56 => 50,  47 => 49,  45 => 46,  44 => 45,  43 => 44,  42 => 42,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/hudayriyat/templates/paragraphs/amenities/paragraph--amenities-details--info-block.html.twig", "C:\\xampp\\htdocs\\modorn\\web\\themes\\custom\\hudayriyat\\templates\\paragraphs\\amenities\\paragraph--amenities-details--info-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 42, "block" => 49, "if" => 51, "for" => 60);
        static $filters = array("clean_class" => 44, "length" => 51, "trim" => 51, "striptags" => 51, "render" => 51, "first" => 61, "raw" => 62, "escape" => 68, "t" => 83);
        static $functions = array("url" => 52, "file_url" => 68);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'if', 'for'],
                ['clean_class', 'length', 'trim', 'striptags', 'render', 'first', 'raw', 'escape', 't'],
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
