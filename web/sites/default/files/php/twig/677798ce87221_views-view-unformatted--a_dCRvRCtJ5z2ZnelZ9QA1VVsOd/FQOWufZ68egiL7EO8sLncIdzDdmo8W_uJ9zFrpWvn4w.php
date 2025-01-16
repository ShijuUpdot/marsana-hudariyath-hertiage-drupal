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

/* themes/custom/hudayriyat/templates/views/assets/views-view-unformatted--assets-listing.html.twig */
class __TwigTemplate_94a16ecf9e3b397e0ed15743c3462589 extends Template
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
        // line 20
        yield "<ul class=\"modal-listing-wrapper\">
              <!-- Modal -->
          ";
        // line 22
        $context["item_images"] = [];
        // line 23
        yield "          ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["rows"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 24
            yield "         
              ";
            // line 25
            $context["logo"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed((($__internal_compile_0 = (($__internal_compile_1 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_2 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 25)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 25), "render_tokens", [], "any", false, false, true, 25)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 25)] ?? null) : null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["{{ field_amenity_icon }}"] ?? null) : null), 25, $this->source)));
            // line 26
            yield "              ";
            $context["title"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed((($__internal_compile_3 = (($__internal_compile_4 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_5 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 26)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 26), "render_tokens", [], "any", false, false, true, 26)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 26)] ?? null) : null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["{{ field_hero_image_title }}"] ?? null) : null), 26, $this->source)));
            // line 27
            yield "              ";
            $context["assetSubType"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed((($__internal_compile_6 = (($__internal_compile_7 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_8 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 27)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 27), "render_tokens", [], "any", false, false, true, 27)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 27)] ?? null) : null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["{{ field_amenity_tags }}"] ?? null) : null), 27, $this->source)));
            // line 28
            yield "              ";
            $context["hero_image"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed((($__internal_compile_9 = (($__internal_compile_10 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_11 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 28)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 28), "render_tokens", [], "any", false, false, true, 28)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 28)] ?? null) : null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["{{ field_hero_image }}"] ?? null) : null), 28, $this->source)));
            // line 29
            yield "              ";
            $context["desc"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed((($__internal_compile_12 = (($__internal_compile_13 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_14 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 29)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 29), "render_tokens", [], "any", false, false, true, 29)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 29)] ?? null) : null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["{{ field_intro_description }}"] ?? null) : null), 29, $this->source)));
            // line 30
            yield "              ";
            $context["sub_desc"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed((($__internal_compile_15 = (($__internal_compile_16 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_17 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 30)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 30), "render_tokens", [], "any", false, false, true, 30)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 30)] ?? null) : null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["{{ field_intro_short_description }}"] ?? null) : null), 30, $this->source)));
            // line 31
            yield "              ";
            $context["pdf_url"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed((($__internal_compile_18 = (($__internal_compile_19 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_20 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 31)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 31), "render_tokens", [], "any", false, false, true, 31)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 31)] ?? null) : null)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["{{ field_upload }}"] ?? null) : null), 31, $this->source)));
            // line 32
            yield "              ";
            $context["gallery"] = Twig\Extension\CoreExtension::split($this->env->getCharset(), Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed((($__internal_compile_21 = (($__internal_compile_22 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_23 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 32)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 32), "render_tokens", [], "any", false, false, true, 32)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 32)] ?? null) : null)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21["{{ field_amenity_images }}"] ?? null) : null), 32, $this->source))), ",");
            // line 33
            yield "              ";
            $context["images_title"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed((($__internal_compile_24 = (($__internal_compile_25 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_26 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 33)) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 33), "render_tokens", [], "any", false, false, true, 33)) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 33)] ?? null) : null)) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24["{{ field_amenity_images_title }}"] ?? null) : null), 33, $this->source)));
            // line 34
            yield "
              <li class=\"modal fade\" id=\"";
            // line 35
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::lower($this->env->getCharset(), Twig\Extension\CoreExtension::replace($this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 35, $this->source), [" " => "-", "." => "-", "&#039;" => "-", "&amp;" => "-"])), "html", null, true);
            yield "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"footballLabel\"  aria-hidden=\"true\">
                <div class=\"inside-wrapper modal-wrapper\">
                  <div class=\"container\">
                    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
                      <div class=\"modal-content\">
                        <div class=\"modal-header\">                          
                            <div class=\"modal-header-bg navy-bg\">
                              ";
            // line 42
            if (($context["hero_image"] ?? null)) {
                // line 43
                yield "                              <img src=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["hero_image"] ?? null), 43, $this->source), "html", null, true);
                yield "\" alt=\"\">
                              ";
            }
            // line 45
            yield "                            </div>                          
                          <div class=\"modal-header-wrapper\">                            
                              <div class=\"modal-logo-wrapper\">
                                ";
            // line 48
            if (($context["logo"] ?? null)) {
                // line 49
                yield "                                  <img class=\"modal-logo-top\" src=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["logo"] ?? null), 49, $this->source), "html", null, true);
                yield "\" alt=\"Resto logo\">
                                ";
            }
            // line 51
            yield "                              </div>                            
                            <div class=\"modal-header-content\">
                              <h3 class=\"modal-title\" id=\"footballLabel\">";
            // line 53
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 53, $this->source));
            yield "</h3>
                            </div>
                          </div>
                          <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                            <span aria-hidden=\"true\"><img src=\"/images/static/close.svg\" alt=\"close\"></span>
                          </button>
                        </div>
                        <div class=\"modal-body\">
                          <div class=\"container-fluid\">
                            <div class=\"row\">
                                ";
            // line 63
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_27 = (($__internal_compile_28 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_29 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 63)) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 63), "render_tokens", [], "any", false, false, true, 63)) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 63)] ?? null) : null)) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27["{{ field_info_block }}"] ?? null) : null), 63, $this->source), "html", null, true);
            yield "
                            </div>
                            <div class=\"row py-4\">
                              <div class=\"col-lg-4\">
                                <p class=\"detailed-txt bold detailed-desc\">";
            // line 67
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["sub_desc"] ?? null), 67, $this->source));
            yield "</p>
                              </div>
                              <div class=\"col-lg-8\">
                                <p class=\"detailed-txt detailed-desc\"> ";
            // line 70
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["desc"] ?? null), 70, $this->source));
            yield "</p>
                              </div>
                            </div>
                          </div>
                        </div>
                        ";
            // line 75
            if ((($__internal_compile_30 = ($context["gallery"] ?? null)) && is_array($__internal_compile_30) || $__internal_compile_30 instanceof ArrayAccess ? ($__internal_compile_30[0] ?? null) : null)) {
                // line 76
                yield "                        <div class=\"modal-footer swiper-menu\">
                          <div class=\"modal-footer-title\">";
                // line 77
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["images_title"] ?? null), 77, $this->source), "html", null, true);
                yield "</div>
                          <!-- Swiper -->
                          <div class=\"swiper-container\">
                            <div class=\"swiper-wrapper\">
                            ";
                // line 81
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["gallery"] ?? null));
                foreach ($context['_seq'] as $context["gkey"] => $context["item"]) {
                    // line 82
                    yield "                                <div class=\"swiper-slide\">
                                    <div class=\"card-wrapper\">
                                        <div class=\"card event\">
                                            <div class=\"card-img-wrapper\">
                                                <img class=\"card-img-top\" src=\"";
                    // line 86
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_31 = ($context["gallery"] ?? null)) && is_array($__internal_compile_31) || $__internal_compile_31 instanceof ArrayAccess ? ($__internal_compile_31[$context["gkey"]] ?? null) : null), 86, $this->source), "html", null, true);
                    yield "\" alt=\"Card image cap\">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['gkey'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 91
                yield "                    
                            </div>
                            <div class=\"swiper-arrows\">
                              <div class=\"swiper-button-prev\"></div>
                              <div class=\"swiper-button-next\"></div>
                            </div>
                          </div>
                        </div>
                        ";
            }
            // line 100
            yield "                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"arrow-modal-wrapper\">
                  <a href=\"javascript:;\" class=\"arrowModal prev-modal\"><img src=\"/images/static/arrow-prev-white.svg\" alt=\"Left Arrow icon\"></a>
                  <a href=\"javascript:;\" class=\"arrowModal next-modal\"><p>";
            // line 106
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Next Restaurant"));
            yield "</p><img src=\"/images/static/arrow-next-white.svg\" alt=\"Right arrow icon\"></a>
                </div>
              </li>
              ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        yield "              </ul>";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["rows", "loop"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/custom/hudayriyat/templates/views/assets/views-view-unformatted--assets-listing.html.twig";
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
        return array (  236 => 110,  218 => 106,  210 => 100,  199 => 91,  187 => 86,  181 => 82,  177 => 81,  170 => 77,  167 => 76,  165 => 75,  157 => 70,  151 => 67,  144 => 63,  131 => 53,  127 => 51,  121 => 49,  119 => 48,  114 => 45,  108 => 43,  106 => 42,  96 => 35,  93 => 34,  90 => 33,  87 => 32,  84 => 31,  81 => 30,  78 => 29,  75 => 28,  72 => 27,  69 => 26,  67 => 25,  64 => 24,  46 => 23,  44 => 22,  40 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/hudayriyat/templates/views/assets/views-view-unformatted--assets-listing.html.twig", "/var/www/html/Hudayriyat/project/web/themes/custom/hudayriyat/templates/views/assets/views-view-unformatted--assets-listing.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 22, "for" => 23, "if" => 42);
        static $filters = array("trim" => 25, "striptags" => 25, "split" => 32, "escape" => 35, "lower" => 35, "replace" => 35, "raw" => 53, "t" => 106);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if'],
                ['trim', 'striptags', 'split', 'escape', 'lower', 'replace', 'raw', 't'],
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
