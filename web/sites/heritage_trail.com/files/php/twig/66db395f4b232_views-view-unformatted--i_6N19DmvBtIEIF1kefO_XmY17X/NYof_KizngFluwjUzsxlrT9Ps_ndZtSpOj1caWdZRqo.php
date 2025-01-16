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

/* sites/heritage_trail.com/themes/custom/heritage/templates/views/views-view-unformatted--indicators.html.twig */
class __TwigTemplate_bb20b4c957fd63a1817cacc40459da63 extends Template
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
        yield "

<div id=\"trigger-map\"></div>
  <div class=\"interactive-map-wrapper\">
    <!-- MAP & TRAIL -->
    <div class=\"inner-map\">
      <div class=\"img-wrap\">
      ";
        // line 27
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
            // line 28
            yield "
        ";
            // line 29
            $context["image1"] = (($__internal_compile_0 = (($__internal_compile_1 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_2 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 29)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 29), "render_tokens", [], "any", false, false, true, 29)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 29)] ?? null) : null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["{{ field_image }}"] ?? null) : null);
            // line 30
            yield "        ";
            $context["image2"] = (($__internal_compile_3 = (($__internal_compile_4 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_5 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 30)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 30), "render_tokens", [], "any", false, false, true, 30)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 30)] ?? null) : null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["{{ field_background_image2 }}"] ?? null) : null);
            // line 31
            yield "
        <img src=\"";
            // line 32
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed(($context["image1"] ?? null), 32, $this->source))), "html", null, true);
            yield "\" alt=\"\">
        <img class=\"trail-img\" src=\"";
            // line 33
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed(($context["image2"] ?? null), 33, $this->source))), "html", null, true);
            yield "\" alt=\"\">
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
        // line 35
        yield "      </div>
    </div>
    <!-- SECTIONS -->
    <div class=\"section right section-one\">
      <div class=\"img-rounded\"><img src=\"";
        // line 39
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed((($__internal_compile_6 = (($__internal_compile_7 = ($context["indicators"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[0] ?? null) : null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["bg_image"] ?? null) : null), 39, $this->source)), "html", null, true);
        yield "\" alt=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags(Twig\Extension\CoreExtension::upper($this->env->getCharset(), $this->sandbox->ensureToStringAllowed((($__internal_compile_8 = (($__internal_compile_9 = ($context["indicators"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[0] ?? null) : null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["banner_title"] ?? null) : null), 39, $this->source)))), "html", null, true);
        yield "\"></div>
      <h3>";
        // line 40
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags(Twig\Extension\CoreExtension::upper($this->env->getCharset(), $this->sandbox->ensureToStringAllowed((($__internal_compile_10 = (($__internal_compile_11 = ($context["indicators"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11[0] ?? null) : null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["banner_title"] ?? null) : null), 40, $this->source)))), "html", null, true);
        yield "</h3>
      <p >";
        // line 41
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed((($__internal_compile_12 = (($__internal_compile_13 = ($context["indicators"] ?? null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13[0] ?? null) : null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["field_description"] ?? null) : null), 41, $this->source))), "html", null, true);
        yield "</p>
    </div>
    <div class=\"section right section-two\">
      <div class=\"img-rounded\"><img src=\"";
        // line 44
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed((($__internal_compile_14 = (($__internal_compile_15 = ($context["indicators"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15[1] ?? null) : null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["bg_image"] ?? null) : null), 44, $this->source)), "html", null, true);
        yield "\" alt=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags(Twig\Extension\CoreExtension::upper($this->env->getCharset(), $this->sandbox->ensureToStringAllowed((($__internal_compile_16 = (($__internal_compile_17 = ($context["indicators"] ?? null)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17[1] ?? null) : null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["banner_title"] ?? null) : null), 44, $this->source)))), "html", null, true);
        yield "\"></div>
      <h3>";
        // line 45
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags(Twig\Extension\CoreExtension::upper($this->env->getCharset(), $this->sandbox->ensureToStringAllowed((($__internal_compile_18 = (($__internal_compile_19 = ($context["indicators"] ?? null)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19[1] ?? null) : null)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["banner_title"] ?? null) : null), 45, $this->source)))), "html", null, true);
        yield "</h3>
      <p>";
        // line 46
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed((($__internal_compile_20 = (($__internal_compile_21 = ($context["indicators"] ?? null)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21[1] ?? null) : null)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["field_description"] ?? null) : null), 46, $this->source))), "html", null, true);
        yield "</p>
    </div>
    <div class=\"section left section-three\">
      <div class=\"img-rounded\"><img src=\"";
        // line 49
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed((($__internal_compile_22 = (($__internal_compile_23 = ($context["indicators"] ?? null)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23[2] ?? null) : null)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22["bg_image"] ?? null) : null), 49, $this->source)), "html", null, true);
        yield "\" alt=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags(Twig\Extension\CoreExtension::upper($this->env->getCharset(), $this->sandbox->ensureToStringAllowed((($__internal_compile_24 = (($__internal_compile_25 = ($context["indicators"] ?? null)) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25[2] ?? null) : null)) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24["banner_title"] ?? null) : null), 49, $this->source)))), "html", null, true);
        yield "\"></div>
      <h3>";
        // line 50
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags(Twig\Extension\CoreExtension::upper($this->env->getCharset(), $this->sandbox->ensureToStringAllowed((($__internal_compile_26 = (($__internal_compile_27 = ($context["indicators"] ?? null)) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27[2] ?? null) : null)) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26["banner_title"] ?? null) : null), 50, $this->source)))), "html", null, true);
        yield "</h3>
      <p>";
        // line 51
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed((($__internal_compile_28 = (($__internal_compile_29 = ($context["indicators"] ?? null)) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29[2] ?? null) : null)) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28["field_description"] ?? null) : null), 51, $this->source))), "html", null, true);
        yield "</p>
    </div>
    <div class=\"section left section-four\">
      <div class=\"img-rounded\"><img src=\"";
        // line 54
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed((($__internal_compile_30 = (($__internal_compile_31 = ($context["indicators"] ?? null)) && is_array($__internal_compile_31) || $__internal_compile_31 instanceof ArrayAccess ? ($__internal_compile_31[3] ?? null) : null)) && is_array($__internal_compile_30) || $__internal_compile_30 instanceof ArrayAccess ? ($__internal_compile_30["bg_image"] ?? null) : null), 54, $this->source)), "html", null, true);
        yield "\" alt=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags(Twig\Extension\CoreExtension::upper($this->env->getCharset(), $this->sandbox->ensureToStringAllowed((($__internal_compile_32 = (($__internal_compile_33 = ($context["indicators"] ?? null)) && is_array($__internal_compile_33) || $__internal_compile_33 instanceof ArrayAccess ? ($__internal_compile_33[3] ?? null) : null)) && is_array($__internal_compile_32) || $__internal_compile_32 instanceof ArrayAccess ? ($__internal_compile_32["banner_title"] ?? null) : null), 54, $this->source)))), "html", null, true);
        yield "\"></div>
      <h3>";
        // line 55
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags(Twig\Extension\CoreExtension::upper($this->env->getCharset(), $this->sandbox->ensureToStringAllowed((($__internal_compile_34 = (($__internal_compile_35 = ($context["indicators"] ?? null)) && is_array($__internal_compile_35) || $__internal_compile_35 instanceof ArrayAccess ? ($__internal_compile_35[3] ?? null) : null)) && is_array($__internal_compile_34) || $__internal_compile_34 instanceof ArrayAccess ? ($__internal_compile_34["banner_title"] ?? null) : null), 55, $this->source)))), "html", null, true);
        yield "</h3>
      <p>";
        // line 56
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed((($__internal_compile_36 = (($__internal_compile_37 = ($context["indicators"] ?? null)) && is_array($__internal_compile_37) || $__internal_compile_37 instanceof ArrayAccess ? ($__internal_compile_37[3] ?? null) : null)) && is_array($__internal_compile_36) || $__internal_compile_36 instanceof ArrayAccess ? ($__internal_compile_36["field_description"] ?? null) : null), 56, $this->source))), "html", null, true);
        yield "</p>
    </div>
    <!-- INDICATORS -->
    <div class=\"indicative-sections\">
      <ul>
      ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["indicators"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["row"]) {
            // line 62
            yield "        ";
            $context["field_title"] = Twig\Extension\CoreExtension::upper($this->env->getCharset(), $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "banner_title", [], "any", false, false, true, 62), 62, $this->source));
            // line 63
            yield "        <li>";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_title"] ?? null), 63, $this->source), "html", null, true);
            yield "</li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        yield "      </ul>
    </div>
    ";
        // line 67
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
            // line 68
            yield "      ";
            $context["map"] = (($__internal_compile_38 = (($__internal_compile_39 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_40 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 68)) && is_array($__internal_compile_40) || $__internal_compile_40 instanceof ArrayAccess ? ($__internal_compile_40["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 68), "render_tokens", [], "any", false, false, true, 68)) && is_array($__internal_compile_39) || $__internal_compile_39 instanceof ArrayAccess ? ($__internal_compile_39[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 68)] ?? null) : null)) && is_array($__internal_compile_38) || $__internal_compile_38 instanceof ArrayAccess ? ($__internal_compile_38["{{ field_upload_map }}"] ?? null) : null);
            // line 69
            yield "      <a href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed(($context["map"] ?? null), 69, $this->source))), "html", null, true);
            yield "\" target=\"_blank\" class=\"download-map\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Download Map"));
            yield "</a>
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
        // line 71
        yield "   
  </div>

    
    
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["rows", "loop", "indicators"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "sites/heritage_trail.com/themes/custom/heritage/templates/views/views-view-unformatted--indicators.html.twig";
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
        return array (  228 => 71,  209 => 69,  206 => 68,  189 => 67,  185 => 65,  176 => 63,  173 => 62,  169 => 61,  161 => 56,  157 => 55,  151 => 54,  145 => 51,  141 => 50,  135 => 49,  129 => 46,  125 => 45,  119 => 44,  113 => 41,  109 => 40,  103 => 39,  97 => 35,  81 => 33,  77 => 32,  74 => 31,  71 => 30,  69 => 29,  66 => 28,  49 => 27,  40 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "sites/heritage_trail.com/themes/custom/heritage/templates/views/views-view-unformatted--indicators.html.twig", "/var/www/html/Hudayriyat/project/web/sites/heritage_trail.com/themes/custom/heritage/templates/views/views-view-unformatted--indicators.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 27, "set" => 29);
        static $filters = array("escape" => 32, "trim" => 32, "striptags" => 32, "upper" => 39, "t" => 69);
        static $functions = array("file_url" => 39);

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set'],
                ['escape', 'trim', 'striptags', 'upper', 't'],
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
