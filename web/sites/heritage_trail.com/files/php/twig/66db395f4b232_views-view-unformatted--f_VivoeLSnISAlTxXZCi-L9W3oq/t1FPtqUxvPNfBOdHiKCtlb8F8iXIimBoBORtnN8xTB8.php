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

/* sites/heritage_trail.com/themes/custom/heritage/templates/views/views-view-unformatted--footer-block.html.twig */
class __TwigTemplate_4e093f1c67ddd575dfde1ca2b3a45cb3 extends Template
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
        yield " <div class=\"footer\">
 ";
        // line 21
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
        foreach ($context['_seq'] as $context["key"] => $context["row"]) {
            // line 22
            yield "    <div class=\"py-5\">
      <div class=\"container\">
        <div class=\"row align-items-center mb-4\">
          <div class=\"col\">
            ";
            // line 27
            yield "            ";
            $context["description"] = (($__internal_compile_0 = (($__internal_compile_1 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_2 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 27)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 27), "render_tokens", [], "any", false, false, true, 27)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 27)] ?? null) : null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["{{ field_description }}"] ?? null) : null);
            // line 28
            yield "            ";
            $context["website_link_text"] = (($__internal_compile_3 = (($__internal_compile_4 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_5 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 28)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 28), "render_tokens", [], "any", false, false, true, 28)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 28)] ?? null) : null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["{{ field_website_link_text }}"] ?? null) : null);
            // line 29
            yield "            ";
            $context["website_link"] = (($__internal_compile_6 = (($__internal_compile_7 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_8 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 29)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 29), "render_tokens", [], "any", false, false, true, 29)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 29)] ?? null) : null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["{{ field_website_link }}"] ?? null) : null);
            // line 30
            yield "            ";
            $context["address_title"] = (($__internal_compile_9 = (($__internal_compile_10 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_11 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 30)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 30), "render_tokens", [], "any", false, false, true, 30)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 30)] ?? null) : null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["{{ field_address_title }}"] ?? null) : null);
            // line 31
            yield "            ";
            $context["address"] = (($__internal_compile_12 = (($__internal_compile_13 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_14 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 31)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 31), "render_tokens", [], "any", false, false, true, 31)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 31)] ?? null) : null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["{{ field_address }}"] ?? null) : null);
            // line 32
            yield "            ";
            $context["email_title"] = (($__internal_compile_15 = (($__internal_compile_16 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_17 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 32)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 32), "render_tokens", [], "any", false, false, true, 32)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 32)] ?? null) : null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["{{ field_email_text }}"] ?? null) : null);
            // line 33
            yield "            ";
            $context["email"] = (($__internal_compile_18 = (($__internal_compile_19 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_20 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 33)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 33), "render_tokens", [], "any", false, false, true, 33)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 33)] ?? null) : null)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["{{ field_email }}"] ?? null) : null);
            // line 34
            yield "            ";
            $context["copyright"] = (($__internal_compile_21 = (($__internal_compile_22 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_23 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 34)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 34), "render_tokens", [], "any", false, false, true, 34)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 34)] ?? null) : null)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21["{{ field_copyright_text }}"] ?? null) : null);
            // line 35
            yield "            ";
            $context["social_block_title"] = (($__internal_compile_24 = (($__internal_compile_25 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_26 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 35)) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 35), "render_tokens", [], "any", false, false, true, 35)) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 35)] ?? null) : null)) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24["{{ field_footer_social_block_title }}"] ?? null) : null);
            // line 36
            yield "            <a href=\"javascript:;\">
              ";
            // line 37
            if ((($context["langcode"] ?? null) == "ar")) {
                // line 38
                yield "              <img src=\"/";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 38, $this->source) . "/logo-white-ar.svg"), "html", null, true);
                yield "\" alt=\"\">
              ";
            } else {
                // line 40
                yield "              <img src=\"/";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 40, $this->source) . "/logo-white.svg"), "html", null, true);
                yield "\" alt=\"\">
              ";
            }
            // line 42
            yield "            </a>
          </div>
        </div>
        <div class=\"row justify-content-between\">
          <div class=\"col-12 col-md-4 mb-5 mb-md-0\">
            <div class=\"body-text mb-5\">";
            // line 47
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["description"] ?? null), 47, $this->source), "html", null, true);
            yield "</div>
            <div class=\"body-text small bold l-spacing-2\">";
            // line 48
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed(($context["website_link_text"] ?? null), 48, $this->source))), "html", null, true);
            yield "</div>
            <a href=\"https://www.hudayriyatisland.ae\" class=\"body-text bold\">";
            // line 49
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed(($context["website_link"] ?? null), 49, $this->source))), "html", null, true);
            yield "</a>
          </div>
          <div class=\"col-12 col-md-7 \">
            <div class=\"row\">
              <div class=\"col-auto body-text bold mb-4\">";
            // line 53
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed(($context["address_title"] ?? null), 53, $this->source))), "html", null, true);
            yield "</div>
              <div class=\"col body-text bold mb-4\">
                ";
            // line 55
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["address"] ?? null), 55, $this->source));
            yield "
              </div>
            </div>

            <div class=\"row\">
              <div class=\"col-auto body-text mb-4\">";
            // line 60
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed(($context["email_title"] ?? null), 60, $this->source))), "html", null, true);
            yield "</div>
              <div class=\"col \">
                <a href=\"mailto:";
            // line 62
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed(($context["email"] ?? null), 62, $this->source))), "html", null, true);
            yield "\" class=\"body-text mb-4\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed(($context["email"] ?? null), 62, $this->source))), "html", null, true);
            yield "</a>
              </div>
            </div>
\t\t";
            // line 65
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["social_links"] ?? null)) > 0)) {
                // line 66
                yield "            <div class=\"row\">
              <div class=\"col-auto body-text mb-4\">&nbsp;</div>
              <div class=\"col-12 col-md-5 body-text bold mb-4\">
                <div class=\"body-text l-spacing-2 mb-2\">";
                // line 69
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed(($context["social_block_title"] ?? null), 69, $this->source))), "html", null, true);
                yield "</div>
                  ";
                // line 70
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["social_links"] ?? null));
                foreach ($context['_seq'] as $context["key"] => $context["row"]) {
                    // line 71
                    yield "                    <a href=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "social_link", [], "any", false, false, true, 71), 71, $this->source)), "html", null, true);
                    yield "\" target=\"_blank\" class=\"ml-3\"><img src=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "icon", [], "any", false, false, true, 71), 71, $this->source)))), "html", null, true);
                    yield "\" alt=\"\"></a>
                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['row'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 73
                yield "                </div>
            </div>
            ";
            }
            // line 76
            yield "            <div class=\"row\">
\t\t\t      ";
            // line 77
            if ((($context["langcode"] ?? null) == "ar")) {
                yield " ";
                $context["copyrightcss"] = "text-left";
                yield " ";
            } else {
                yield " ";
                $context["copyrightcss"] = "text-right";
                yield " ";
            }
            // line 78
            yield "              <div class=\"col body-text ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["copyrightcss"] ?? null), 78, $this->source), "html", null, true);
            yield " opacity-50\">
                © ";
            // line 79
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
            yield " ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed(($context["copyright"] ?? null), 79, $this->source))), "html", null, true);
            yield "
              </div>
            </div>
          </div>
        </div>
        
      </div>
    </div>
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
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        yield "  </div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["rows", "loop", "langcode", "directory", "social_links"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "sites/heritage_trail.com/themes/custom/heritage/templates/views/views-view-unformatted--footer-block.html.twig";
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
        return array (  232 => 88,  207 => 79,  202 => 78,  192 => 77,  189 => 76,  184 => 73,  173 => 71,  169 => 70,  165 => 69,  160 => 66,  158 => 65,  150 => 62,  145 => 60,  137 => 55,  132 => 53,  125 => 49,  121 => 48,  117 => 47,  110 => 42,  104 => 40,  98 => 38,  96 => 37,  93 => 36,  90 => 35,  87 => 34,  84 => 33,  81 => 32,  78 => 31,  75 => 30,  72 => 29,  69 => 28,  66 => 27,  60 => 22,  43 => 21,  40 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "sites/heritage_trail.com/themes/custom/heritage/templates/views/views-view-unformatted--footer-block.html.twig", "/var/www/html/Hudayriyat/project/web/sites/heritage_trail.com/themes/custom/heritage/templates/views/views-view-unformatted--footer-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 21, "set" => 27, "if" => 37);
        static $filters = array("escape" => 38, "trim" => 48, "striptags" => 48, "raw" => 55, "length" => 65, "date" => 79);
        static $functions = array("file_url" => 71);

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set', 'if'],
                ['escape', 'trim', 'striptags', 'raw', 'length', 'date'],
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
