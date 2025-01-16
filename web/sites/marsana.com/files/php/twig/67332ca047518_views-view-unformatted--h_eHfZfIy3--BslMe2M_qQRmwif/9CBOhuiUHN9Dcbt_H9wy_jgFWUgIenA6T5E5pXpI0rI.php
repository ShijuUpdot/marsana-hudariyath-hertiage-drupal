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

/* sites/marsana.com/themes/custom/marsana/templates/views/views-view-unformatted--header-block.html.twig */
class __TwigTemplate_99fe67a421093326f4d15d29af112da3 extends Template
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
        // line 1
        yield "  ";
        // line 20
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
            // line 21
            $context["logo"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed((($__internal_compile_0 = (($__internal_compile_1 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_2 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 21)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 21), "render_tokens", [], "any", false, false, true, 21)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 21)] ?? null) : null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["{{ field_header_logo }}"] ?? null) : null), 21, $this->source)));
            // line 22
            $context["contact_icon"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed((($__internal_compile_3 = (($__internal_compile_4 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_5 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 22)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 22), "render_tokens", [], "any", false, false, true, 22)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 22)] ?? null) : null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["{{ field_contact_us_icon }}"] ?? null) : null), 22, $this->source)));
            // line 23
            $context["contact_text"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed((($__internal_compile_6 = (($__internal_compile_7 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_8 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 23)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 23), "render_tokens", [], "any", false, false, true, 23)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 23)] ?? null) : null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["{{ field_contact_us_text }}"] ?? null) : null), 23, $this->source)));
            // line 24
            $context["email_title"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed((($__internal_compile_9 = (($__internal_compile_10 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_11 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 24)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 24), "render_tokens", [], "any", false, false, true, 24)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 24)] ?? null) : null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["{{ field_email_text }}"] ?? null) : null), 24, $this->source)));
            // line 25
            $context["email_link"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed((($__internal_compile_12 = (($__internal_compile_13 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_14 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 25)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 25), "render_tokens", [], "any", false, false, true, 25)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 25)] ?? null) : null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["{{ field_email }}"] ?? null) : null), 25, $this->source)));
            // line 26
            $context["email_link_title"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed((($__internal_compile_15 = (($__internal_compile_16 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_17 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 26)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 26), "render_tokens", [], "any", false, false, true, 26)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 26)] ?? null) : null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["{{ field_email_1 }}"] ?? null) : null), 26, $this->source)));
            // line 27
            $context["website_link_text"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed((($__internal_compile_18 = (($__internal_compile_19 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_20 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 27)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 27), "render_tokens", [], "any", false, false, true, 27)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 27)] ?? null) : null)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["{{ field_website_link_text }}"] ?? null) : null), 27, $this->source)));
            // line 28
            $context["website_link"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed((($__internal_compile_21 = (($__internal_compile_22 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_23 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 28)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 28), "render_tokens", [], "any", false, false, true, 28)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 28)] ?? null) : null)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21["{{ field_website_link }}"] ?? null) : null), 28, $this->source)));
            // line 29
            $context["website_link_title"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed((($__internal_compile_24 = (($__internal_compile_25 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_26 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 29)) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 29), "render_tokens", [], "any", false, false, true, 29)) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 29)] ?? null) : null)) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24["{{ field_website_link_1 }}"] ?? null) : null), 29, $this->source)));
            // line 30
            $context["address_title"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed((($__internal_compile_27 = (($__internal_compile_28 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_29 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 30)) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 30), "render_tokens", [], "any", false, false, true, 30)) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 30)] ?? null) : null)) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27["{{ field_address_title }}"] ?? null) : null), 30, $this->source)));
            // line 31
            $context["address"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed((($__internal_compile_30 = (($__internal_compile_31 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_32 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 31)) && is_array($__internal_compile_32) || $__internal_compile_32 instanceof ArrayAccess ? ($__internal_compile_32["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 31), "render_tokens", [], "any", false, false, true, 31)) && is_array($__internal_compile_31) || $__internal_compile_31 instanceof ArrayAccess ? ($__internal_compile_31[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 31)] ?? null) : null)) && is_array($__internal_compile_30) || $__internal_compile_30 instanceof ArrayAccess ? ($__internal_compile_30["{{ field_address }}"] ?? null) : null), 31, $this->source)));
            // line 32
            $context["description"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed((($__internal_compile_33 = (($__internal_compile_34 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_35 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 32)) && is_array($__internal_compile_35) || $__internal_compile_35 instanceof ArrayAccess ? ($__internal_compile_35["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 32), "render_tokens", [], "any", false, false, true, 32)) && is_array($__internal_compile_34) || $__internal_compile_34 instanceof ArrayAccess ? ($__internal_compile_34[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 32)] ?? null) : null)) && is_array($__internal_compile_33) || $__internal_compile_33 instanceof ArrayAccess ? ($__internal_compile_33["{{ field_description }}"] ?? null) : null), 32, $this->source)));
            // line 33
            $context["contact_form_title"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed((($__internal_compile_36 = (($__internal_compile_37 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_38 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 33)) && is_array($__internal_compile_38) || $__internal_compile_38 instanceof ArrayAccess ? ($__internal_compile_38["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 33), "render_tokens", [], "any", false, false, true, 33)) && is_array($__internal_compile_37) || $__internal_compile_37 instanceof ArrayAccess ? ($__internal_compile_37[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 33)] ?? null) : null)) && is_array($__internal_compile_36) || $__internal_compile_36 instanceof ArrayAccess ? ($__internal_compile_36["{{ field_contact_form_title }}"] ?? null) : null), 33, $this->source)));
            // line 34
            $context["social_title"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed((($__internal_compile_39 = (($__internal_compile_40 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_41 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 34)) && is_array($__internal_compile_41) || $__internal_compile_41 instanceof ArrayAccess ? ($__internal_compile_41["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 34), "render_tokens", [], "any", false, false, true, 34)) && is_array($__internal_compile_40) || $__internal_compile_40 instanceof ArrayAccess ? ($__internal_compile_40[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 34)] ?? null) : null)) && is_array($__internal_compile_39) || $__internal_compile_39 instanceof ArrayAccess ? ($__internal_compile_39["{{ field_social_links_title }}"] ?? null) : null), 34, $this->source)));
            // line 35
            yield "
  <div class=\"header\">
    <div class=\"container\">
      <div class=\"row justify-content-between align-items-center\">
        <div class=\"col\">
          <div class=\"logo\"><a href=\"";
            // line 40
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<front>"));
            yield "\"><img src=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["logo"] ?? null), 40, $this->source), "html", null, true);
            yield "\" alt=\"marsana\"></a></div>
        </div>
        <div class=\"col text-right\">
          <ul class=\"header-right\">
            <li id=\"lng-selector\">";
            // line 44
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::drupalEntity("block", "languageswitcher"), "html", null, true);
            yield "</li>
            <li id=\"contact-icon\"><img src=\"";
            // line 45
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["contact_icon"] ?? null), 45, $this->source), "html", null, true);
            yield "\" alt=\"contact\"><span class=\"tooltip\"><span>";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["contact_text"] ?? null), 45, $this->source));
            yield "</span></span></li>
            <li id=\"map-icon\"><img src=\"/images/static/icon-map.svg\" alt=\"\"><span class=\"tooltip\"><span>";
            // line 46
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("interactive map"));
            yield "</span></span></li>
            <li id=\"burger-icon\"><span></span><span></span><span></span><span></span></li>
            <li id=\"scroll-burger-icon\" class=\"open d-none\"><span></span><span></span><span></span><span></span></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class=\"menu-wrapper vertical-center\">
    <div class=\"container\">
      <div class=\"row justify-content-between\">
          <div class=\"col-12 col-md-4\">
              <div class=\"about-menu\">
                  <div class=\"body-text mb-4\">";
            // line 59
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["description"] ?? null), 59, $this->source), "html", null, true);
            yield "</div>
              </div>
          </div>
          <div class=\"col-12 col-md-7\">
              <div class=\"menu-links\">
                  <div class=\"row\">
                      <div class=\"col-12 col-md-6\">
                        ";
            // line 66
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(views_embed_view("eat_menu_listing")), "html", null, true);
            yield "
                        ";
            // line 67
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(views_embed_view("shop_menu_listing")), "html", null, true);
            yield "
                        ";
            // line 68
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(views_embed_view("dock_menu_listing")), "html", null, true);
            yield "
                      </div>
                      <div class=\"col-12 col-md-6\">
                          ";
            // line 71
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(views_embed_view("menu_listing")), "html", null, true);
            yield "
                      </div>
                  </div>
              </div>
          </div>
      </div>
        <hr class=\"my-4\">
        <div class=\"row footer-menu-infos justify-content-between\">
            <div class=\"col-12 col-md-auto\">
                <div class=\"row\">
                    <div class=\"col-auto body-text small bold\">";
            // line 81
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["address_title"] ?? null), 81, $this->source), "html", null, true);
            yield "</div>
                    <div class=\"col body-text small\"><a style=\"color:#ffffff;\" href=\"mailto:leasing@marsana.ae\">";
            // line 82
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["address"] ?? null), 82, $this->source), "html", null, true);
            yield "</a></div>
                </div>
            </div>

            <div class=\"col-12 col-md-auto\">
              <div class=\"row\">
                  <div class=\"col-auto body-text small bold\">";
            // line 88
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["email_title"] ?? null), 88, $this->source), "html", null, true);
            yield "</div>
                  <div class=\"col body-text small\"><a href=\"";
            // line 89
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["email_link"] ?? null), 89, $this->source), "html", null, true);
            yield "\" class=\" body-text small mb-4\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["email_link_title"] ?? null), 89, $this->source), "html", null, true);
            yield "</a></div>
              </div>
            </div>
            <div class=\"col-12 col-md-auto\">
                <div class=\"row\">
                    <div class=\"col-auto body-text small bold\">";
            // line 94
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["website_link_text"] ?? null), 94, $this->source), "html", null, true);
            yield "</div>
                    <div class=\"col body-text small\"><a href=\"";
            // line 95
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["website_link"] ?? null), 95, $this->source), "html", null, true);
            yield "\" target=\"_blank\" class=\" body-text small mb-4\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["website_link_title"] ?? null), 95, $this->source), "html", null, true);
            yield "</a></div>
                </div>
            </div>
        </div>
    </div>
  </div>
  <!-- ************************* CONTACT POPUP ************************* -->
  <div class=\"contact-wrapper\">
    <div class=\"popup-logo\">";
            // line 103
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["contact_form_title"] ?? null), 103, $this->source), "html", null, true);
            yield "</div>
    <a class=\"close-btn\" href=\"javascript:;\"><span></span><span></span><span></span></a>
    <div class=\"container\">
      <div class=\"row justify-content-center align-items-center\">
        <div class=\"col-md-7 col-12\">
          ";
            // line 108
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::drupalEntity("webform", "contact"), "html", null, true);
            yield "
          <br><br>
\t\t      <div class=\"alert text-capitalize alert-dismissible fade show form-alert contact-success\" role=\"alert\">
            <span class=\"form-alert-msg\"></span>
            <button type=\"button\" class=\"contact-close close\" data-dismiss=\"alert-1\" aria-label=\"Close-1\"></button>
          </div>
          <div class=\"contact-footer mt-2 mt-md-5\">
            <div class=\"body-text l-spacing-2 mb-1\">";
            // line 115
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["social_title"] ?? null), 115, $this->source), "html", null, true);
            yield "</div>
            ";
            // line 116
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["social_links"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["row"]) {
                // line 117
                yield "                <a href=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "social_link", [], "any", false, false, true, 117), 117, $this->source)), "html", null, true);
                yield "\" class=\"mx-2\" target=\"_blank\"><img src=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "icon", [], "any", false, false, true, 117), 117, $this->source))), "html", null, true);
                yield "\" alt=\"icon\"></a>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 119
            yield "          </div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 125
        yield "
<!-- ************************* MAP PLACEHOLDER ************************* -->
  <div class=\"zoom-wrapper\">
   <div class=\"map-wrapper selectedZoomTarget zoomNotClickable\">
      <div class=\"map-points zoomContainer selectedZoomTarget zoomNotClickable\">
          <div id=\"animation_container\" class=\"map-canvas\">
              <canvas id=\"canvas\"></canvas>
              <img src=\"/images/dynamic/map/map-static-bg.png\" alt=\"\" class=\"map-static-bg\">
              <img src=\"/images/dynamic/map/map-static-bg-marsana-en.png\" alt=\"\" class=\"map-lang-marina lang-en\">
              <img src=\"/images/dynamic/map/map-static-bg-marsana-ar.png\" alt=\"\" class=\"map-lang-marina lang-ar\">
              <div id=\"dom_overlay_container\" style=\"pointer-events:none; overflow:hidden; width:100%; height:100%; position: absolute; left: 0px; top: 0px; display: block;\"></div>
              <img src=\"/images/dynamic/map/mapA2.png\" alt=\"\" class=\"map-elements-img\">
              <div class=\"map-points-container\">
                  <div class=\"numbered-points\">
                    ";
        // line 139
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["numbered_points"] ?? null));
        foreach ($context['_seq'] as $context["nkey"] => $context["nitem"]) {
            // line 140
            yield "                        <div class=\"zoomTarget\" data-targetsize=\"0.1\" style=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_42 = $context["nitem"]) && is_array($__internal_compile_42) || $__internal_compile_42 instanceof ArrayAccess ? ($__internal_compile_42["position"] ?? null) : null), 140, $this->source), "html", null, true);
            yield "\" data-target=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::lower($this->env->getCharset(), Twig\Extension\CoreExtension::replace($this->sandbox->ensureToStringAllowed((($__internal_compile_43 = $context["nitem"]) && is_array($__internal_compile_43) || $__internal_compile_43 instanceof ArrayAccess ? ($__internal_compile_43["positionTitle"] ?? null) : null), 140, $this->source), [" " => "-", "." => "-", "&#039;" => "-", "&amp;" => "-"])), "html", null, true);
            yield "\"><span class=\"tooltip\"><a href=\"javascript:;\" class=\"anchorInside\" data-toggle=\"modal\" data-target=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::lower($this->env->getCharset(), Twig\Extension\CoreExtension::replace($this->sandbox->ensureToStringAllowed((($__internal_compile_44 = $context["nitem"]) && is_array($__internal_compile_44) || $__internal_compile_44 instanceof ArrayAccess ? ($__internal_compile_44["modalTitle"] ?? null) : null), 140, $this->source), [" " => "-", "." => "-", "&#039;" => "-", "&amp;" => "-"])), "html", null, true);
            yield "-modal\"><span>";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim($this->sandbox->ensureToStringAllowed((($__internal_compile_45 = $context["nitem"]) && is_array($__internal_compile_45) || $__internal_compile_45 instanceof ArrayAccess ? ($__internal_compile_45["positionTitle"] ?? null) : null), 140, $this->source)), "html", null, true);
            yield "</span></a></span><p>";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["nkey"] + 1), "html", null, true);
            yield "</p></div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['nkey'], $context['nitem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 142
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["activities"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["item"]) {
            // line 143
            yield "                        <!-- <div class=\"zoomTarget activities-points\" data-targetsize=\"0.1\" style=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_46 = $context["item"]) && is_array($__internal_compile_46) || $__internal_compile_46 instanceof ArrayAccess ? ($__internal_compile_46["activitiesPosition"] ?? null) : null), 143, $this->source), "html", null, true);
            yield "\" data-target=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::lower($this->env->getCharset(), Twig\Extension\CoreExtension::replace($this->sandbox->ensureToStringAllowed((($__internal_compile_47 = $context["item"]) && is_array($__internal_compile_47) || $__internal_compile_47 instanceof ArrayAccess ? ($__internal_compile_47["activitiesPositionTitle"] ?? null) : null), 143, $this->source), [" " => "-", "." => "-", "&#039;" => "-", "&amp;" => "-"])), "html", null, true);
            yield "\"><p>";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim($this->sandbox->ensureToStringAllowed((($__internal_compile_48 = $context["item"]) && is_array($__internal_compile_48) || $__internal_compile_48 instanceof ArrayAccess ? ($__internal_compile_48["activitiesPositionTitle"] ?? null) : null), 143, $this->source)), "html", null, true);
            yield "</p></div> -->
                        <div class=\"zoomTarget activities-points\" data-targetsize=\"0.1\" style=\"";
            // line 144
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_49 = $context["item"]) && is_array($__internal_compile_49) || $__internal_compile_49 instanceof ArrayAccess ? ($__internal_compile_49["activitiesPosition"] ?? null) : null), 144, $this->source), "html", null, true);
            yield "\" data-target=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::lower($this->env->getCharset(), Twig\Extension\CoreExtension::replace($this->sandbox->ensureToStringAllowed((($__internal_compile_50 = $context["item"]) && is_array($__internal_compile_50) || $__internal_compile_50 instanceof ArrayAccess ? ($__internal_compile_50["activitiesPositionTitle"] ?? null) : null), 144, $this->source), [" " => "-", "." => "-", "&#039;" => "-", "&amp;" => "-"])), "html", null, true);
            yield "\"><span class=\"tooltip\"><a href=\"javascript:;\" class=\"anchorInside\" data-toggle=\"modal\" data-target=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::lower($this->env->getCharset(), Twig\Extension\CoreExtension::replace($this->sandbox->ensureToStringAllowed((($__internal_compile_51 = $context["item"]) && is_array($__internal_compile_51) || $__internal_compile_51 instanceof ArrayAccess ? ($__internal_compile_51["modalTitle"] ?? null) : null), 144, $this->source), [" " => "-", "." => "-", "&#039;" => "-", "&amp;" => "-"])), "html", null, true);
            yield "-modal\"><span>";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim($this->sandbox->ensureToStringAllowed((($__internal_compile_52 = $context["item"]) && is_array($__internal_compile_52) || $__internal_compile_52 instanceof ArrayAccess ? ($__internal_compile_52["activitiesPositionTitle"] ?? null) : null), 144, $this->source)), "html", null, true);
            yield "</span></a></span></div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 146
        yield "                  </div>
              </div>
          </div>
      </div> 
      <a class=\"map-legend\" href=\"javascript:;\">
          <img src=\"/images/static/icon-map-legend.svg\" alt=\"map icon legend\">
          <p class=\"body-text bold text-uppercase color-white\">";
        // line 152
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Legend"));
        yield "</p>
      </a>
      <a class=\"zoom-reset\" href=\"javascript:;\">
          <p class=\"body-text bold text-uppercase color-white\">";
        // line 155
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Reset"));
        yield "</p>
      </a>
      <div class=\"map-links\">
          <div class=\"upper-part\">
              <img src=\"/images/dynamic/legend-bg-upper.png\" alt=\"\" class=\"legend-bg\">
              <div class=\"container pt-4 pb-2\">
                  <div class=\"row\">
                      <div class=\"col\">
                          <h3>";
        // line 163
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["activities_label"] ?? null), 163, $this->source), "html", null, true);
        yield "</h3>
                      </div>
                  </div>
                  <div class=\"row\">
                      <div class=\"col-6\">
                          ";
        // line 168
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["activities_data1"] ?? null));
        foreach ($context['_seq'] as $context["akey1"] => $context["aitem1"]) {
            // line 169
            yield "                            <a href=\"javascript:;\" class=\"body-text small bold text-uppercase\" data-target=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::lower($this->env->getCharset(), Twig\Extension\CoreExtension::replace($this->sandbox->ensureToStringAllowed((($__internal_compile_53 = $context["aitem1"]) && is_array($__internal_compile_53) || $__internal_compile_53 instanceof ArrayAccess ? ($__internal_compile_53["activitiesPositionTitle"] ?? null) : null), 169, $this->source), [" " => "-", "." => "-", "&#039;" => "-", "&amp;" => "-"])), "html", null, true);
            yield "\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim($this->sandbox->ensureToStringAllowed((($__internal_compile_54 = $context["aitem1"]) && is_array($__internal_compile_54) || $__internal_compile_54 instanceof ArrayAccess ? ($__internal_compile_54["activitiesPositionTitle"] ?? null) : null), 169, $this->source)), "html", null, true);
            yield "</a>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['akey1'], $context['aitem1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 171
        yield "                      </div>
                      <div class=\"col-6\">
                          ";
        // line 173
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["activities_data2"] ?? null));
        foreach ($context['_seq'] as $context["akey2"] => $context["aitem2"]) {
            // line 174
            yield "                            <a href=\"javascript:;\" class=\"body-text small bold text-uppercase\" data-target=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::lower($this->env->getCharset(), Twig\Extension\CoreExtension::replace($this->sandbox->ensureToStringAllowed((($__internal_compile_55 = $context["aitem2"]) && is_array($__internal_compile_55) || $__internal_compile_55 instanceof ArrayAccess ? ($__internal_compile_55["activitiesPositionTitle"] ?? null) : null), 174, $this->source), [" " => "-", "." => "-", "&#039;" => "-", "&amp;" => "-"])), "html", null, true);
            yield "\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim($this->sandbox->ensureToStringAllowed((($__internal_compile_56 = $context["aitem2"]) && is_array($__internal_compile_56) || $__internal_compile_56 instanceof ArrayAccess ? ($__internal_compile_56["activitiesPositionTitle"] ?? null) : null), 174, $this->source)), "html", null, true);
            yield "</a>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['akey2'], $context['aitem2'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 176
        yield "                      </div>
                  </div>
                  <div class=\"row\">
                      <div class=\"col\">
                          <h3>";
        // line 180
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["f_b_outlets_label"] ?? null), 180, $this->source), "html", null, true);
        yield "</h3>
                      </div>
                  </div>
                  <div class=\"row\">
                      <div class=\"col-6\">
                         ";
        // line 185
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["f_b_outlets_chunk1"] ?? null));
        foreach ($context['_seq'] as $context["bkey1"] => $context["fbItem1"]) {
            // line 186
            yield "                            <a href=\"javascript:;\" class=\"body-text small bold text-uppercase\" data-target=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::lower($this->env->getCharset(), Twig\Extension\CoreExtension::replace($this->sandbox->ensureToStringAllowed((($__internal_compile_57 = $context["fbItem1"]) && is_array($__internal_compile_57) || $__internal_compile_57 instanceof ArrayAccess ? ($__internal_compile_57["positionTitle"] ?? null) : null), 186, $this->source), [" " => "-", "." => "-", "&#039;" => "-", "&amp;" => "-"])), "html", null, true);
            yield "\"><p class=\"number\"><span>";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["bkey1"] + 1), "html", null, true);
            yield "</span></p><p class=\"w-80\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim($this->sandbox->ensureToStringAllowed((($__internal_compile_58 = $context["fbItem1"]) && is_array($__internal_compile_58) || $__internal_compile_58 instanceof ArrayAccess ? ($__internal_compile_58["positionTitle"] ?? null) : null), 186, $this->source)), "html", null, true);
            yield "</p></a>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['bkey1'], $context['fbItem1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 188
        yield "                      </div>
                      <div class=\"col-6\">
\t\t\t                   ";
        // line 190
        $context["fVal"] = Twig\Extension\CoreExtension::trim($this->sandbox->ensureToStringAllowed(($context["f_b_outlets_chunk1_count"] ?? null), 190, $this->source));
        // line 191
        yield "                         ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["f_b_outlets_chunk2"] ?? null));
        foreach ($context['_seq'] as $context["bkey2"] => $context["fbItem2"]) {
            // line 192
            yield "\t\t\t                      ";
            $context["fVal"] = (($context["fVal"] ?? null) + 1);
            // line 193
            yield "                            <a href=\"javascript:;\" class=\"body-text small bold text-uppercase\" data-target=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::lower($this->env->getCharset(), Twig\Extension\CoreExtension::replace($this->sandbox->ensureToStringAllowed((($__internal_compile_59 = $context["fbItem2"]) && is_array($__internal_compile_59) || $__internal_compile_59 instanceof ArrayAccess ? ($__internal_compile_59["positionTitle"] ?? null) : null), 193, $this->source), [" " => "-", "." => "-", "&#039;" => "-", "&amp;" => "-"])), "html", null, true);
            yield "\"><p class=\"number\"><span>";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim($this->sandbox->ensureToStringAllowed(($context["fVal"] ?? null), 193, $this->source)), "html", null, true);
            yield "</span></p><p class=\"w-80\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim($this->sandbox->ensureToStringAllowed((($__internal_compile_60 = $context["fbItem2"]) && is_array($__internal_compile_60) || $__internal_compile_60 instanceof ArrayAccess ? ($__internal_compile_60["positionTitle"] ?? null) : null), 193, $this->source)), "html", null, true);
            yield "</p></a>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['bkey2'], $context['fbItem2'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 195
        yield "                      </div>
                  </div>
                  <div class=\"row\">
                      <div class=\"col\">
                          <h3>";
        // line 199
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["food_trucks_label"] ?? null), 199, $this->source), "html", null, true);
        yield "</h3>
                      </div>
                  </div>
                  <div class=\"row\">
                      <div class=\"col-6\">
\t\t\t                    ";
        // line 204
        $context["cVal"] = Twig\Extension\CoreExtension::trim($this->sandbox->ensureToStringAllowed(($context["f_b_outlets_chunk2_count_total"] ?? null), 204, $this->source));
        // line 205
        yield "                          ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["food_trucks_chunk1"] ?? null));
        foreach ($context['_seq'] as $context["ckey1"] => $context["ftItem1"]) {
            // line 206
            yield "\t\t\t                      ";
            $context["cVal"] = (($context["cVal"] ?? null) + 1);
            // line 207
            yield "                            <a href=\"javascript:;\" class=\"body-text small bold text-uppercase\" data-target=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::lower($this->env->getCharset(), Twig\Extension\CoreExtension::replace($this->sandbox->ensureToStringAllowed((($__internal_compile_61 = $context["ftItem1"]) && is_array($__internal_compile_61) || $__internal_compile_61 instanceof ArrayAccess ? ($__internal_compile_61["positionTitle"] ?? null) : null), 207, $this->source), [" " => "-", "." => "-", "&#039;" => "-", "&amp;" => "-"])), "html", null, true);
            yield "\"><p class=\"number\"><span>";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim($this->sandbox->ensureToStringAllowed(($context["cVal"] ?? null), 207, $this->source)), "html", null, true);
            yield "</span></p><p class=\"w-80\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim($this->sandbox->ensureToStringAllowed((($__internal_compile_62 = $context["ftItem1"]) && is_array($__internal_compile_62) || $__internal_compile_62 instanceof ArrayAccess ? ($__internal_compile_62["positionTitle"] ?? null) : null), 207, $this->source)), "html", null, true);
            yield "</p></a>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['ckey1'], $context['ftItem1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 209
        yield "                      </div>
                      <div class=\"col-6\">
\t\t\t                    ";
        // line 211
        $context["dVal"] = Twig\Extension\CoreExtension::trim($this->sandbox->ensureToStringAllowed(($context["food_trucks_count_total"] ?? null), 211, $this->source));
        // line 212
        yield "                          ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["food_trucks_chunk2"] ?? null));
        foreach ($context['_seq'] as $context["ckey2"] => $context["ftItem2"]) {
            // line 213
            yield "\t\t\t                      ";
            $context["dVal"] = (($context["dVal"] ?? null) + 1);
            // line 214
            yield "                            <a href=\"javascript:;\" class=\"body-text small bold text-uppercase\" data-target=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::lower($this->env->getCharset(), Twig\Extension\CoreExtension::replace($this->sandbox->ensureToStringAllowed((($__internal_compile_63 = $context["ftItem2"]) && is_array($__internal_compile_63) || $__internal_compile_63 instanceof ArrayAccess ? ($__internal_compile_63["positionTitle"] ?? null) : null), 214, $this->source), [" " => "-", "." => "-", "&#039;" => "-", "&amp;" => "-"])), "html", null, true);
            yield "\"><p class=\"number\"><span>";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim($this->sandbox->ensureToStringAllowed(($context["dVal"] ?? null), 214, $this->source)), "html", null, true);
            yield "</span></p><p class=\"w-80\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim($this->sandbox->ensureToStringAllowed((($__internal_compile_64 = $context["ftItem2"]) && is_array($__internal_compile_64) || $__internal_compile_64 instanceof ArrayAccess ? ($__internal_compile_64["positionTitle"] ?? null) : null), 214, $this->source)), "html", null, true);
            yield "</p></a>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['ckey2'], $context['ftItem2'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 216
        yield "                      </div>
                  </div>
              </div>
          </div>
          <div class=\"lower-part\">
              <img src=\"/images/dynamic/legend-bg-lower.png\" alt=\"\" class=\"legend-bg\">
              <div class=\"container py-2\">
                  <div class=\"row justify-content-between\">
                      <div class=\"col\">
                          <img src=\"/images/dynamic/legend-trail-1.png\" alt=\"\"><p class=\"body-text small bold text-uppercase color-white\">";
        // line 225
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("WALKWAY"));
        yield "</p>
                      </div>
                      <div class=\"col\">
                          <img src=\"/images/dynamic/legend-trail-2.png\" alt=\"\"><p class=\"body-text small bold text-uppercase color-white\">";
        // line 228
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("DRIVEWAY"));
        yield "</p>
                      </div>
                      <div class=\"col\">
                          <img src=\"/images/dynamic/legend-trail-3.png\" alt=\"\"><p class=\"body-text small bold text-uppercase color-white\">";
        // line 231
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("SHADED SOUK WALKWAY"));
        yield "</p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
   </div>
  </div>

    ";
        // line 240
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, views_embed_view("home_eat_pop_up_content"), "html", null, true);
        yield "
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["rows", "loop", "social_links", "numbered_points", "activities", "activities_label", "activities_data1", "activities_data2", "f_b_outlets_label", "f_b_outlets_chunk1", "f_b_outlets_chunk1_count", "f_b_outlets_chunk2", "food_trucks_label", "f_b_outlets_chunk2_count_total", "food_trucks_chunk1", "food_trucks_count_total", "food_trucks_chunk2"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "sites/marsana.com/themes/custom/marsana/templates/views/views-view-unformatted--header-block.html.twig";
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
        return array (  555 => 240,  543 => 231,  537 => 228,  531 => 225,  520 => 216,  507 => 214,  504 => 213,  499 => 212,  497 => 211,  493 => 209,  480 => 207,  477 => 206,  472 => 205,  470 => 204,  462 => 199,  456 => 195,  443 => 193,  440 => 192,  435 => 191,  433 => 190,  429 => 188,  416 => 186,  412 => 185,  404 => 180,  398 => 176,  387 => 174,  383 => 173,  379 => 171,  368 => 169,  364 => 168,  356 => 163,  345 => 155,  339 => 152,  331 => 146,  317 => 144,  308 => 143,  303 => 142,  286 => 140,  282 => 139,  266 => 125,  247 => 119,  236 => 117,  232 => 116,  228 => 115,  218 => 108,  210 => 103,  197 => 95,  193 => 94,  183 => 89,  179 => 88,  170 => 82,  166 => 81,  153 => 71,  147 => 68,  143 => 67,  139 => 66,  129 => 59,  113 => 46,  107 => 45,  103 => 44,  94 => 40,  87 => 35,  85 => 34,  83 => 33,  81 => 32,  79 => 31,  77 => 30,  75 => 29,  73 => 28,  71 => 27,  69 => 26,  67 => 25,  65 => 24,  63 => 23,  61 => 22,  59 => 21,  42 => 20,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("  {#
/**
 * @file
 * Default theme implementation to display a view of unformatted rows.
 *
 * Available variables:
 * - title: The title of this group of rows. May be empty.
 * - rows: A list of the view's row items.
 *   - attributes: The row's HTML attributes.
 *   - content: The row's content.
 * - view: The view object.
 * - default_row_class: A flag indicating whether default classes should be
 *   used on rows.
 *
 * @see template_preprocess_views_view_unformatted()
 *
 * @ingroup themeable
 */
#}
{% for row in rows %}
{% set logo = row.content['#view'].style_plugin.render_tokens[ loop.index0 ]['{{ field_header_logo }}'] | striptags | trim %}
{% set contact_icon = row.content['#view'].style_plugin.render_tokens[ loop.index0 ]['{{ field_contact_us_icon }}'] | striptags | trim %}
{% set contact_text = row.content['#view'].style_plugin.render_tokens[ loop.index0 ]['{{ field_contact_us_text }}'] | striptags | trim %}
{% set email_title = row.content['#view'].style_plugin.render_tokens[ loop.index0 ]['{{ field_email_text }}'] | striptags | trim %}
{% set email_link = row.content['#view'].style_plugin.render_tokens[ loop.index0 ]['{{ field_email }}'] | striptags | trim %}
{% set email_link_title = row.content['#view'].style_plugin.render_tokens[ loop.index0 ]['{{ field_email_1 }}'] | striptags | trim %}
{% set website_link_text = row.content['#view'].style_plugin.render_tokens[ loop.index0 ]['{{ field_website_link_text }}'] | striptags | trim %}
{% set website_link = row.content['#view'].style_plugin.render_tokens[ loop.index0 ]['{{ field_website_link }}'] | striptags | trim %}
{% set website_link_title = row.content['#view'].style_plugin.render_tokens[ loop.index0 ]['{{ field_website_link_1 }}'] | striptags | trim %}
{% set address_title = row.content['#view'].style_plugin.render_tokens[ loop.index0 ]['{{ field_address_title }}'] | striptags | trim %}
{% set address = row.content['#view'].style_plugin.render_tokens[ loop.index0 ]['{{ field_address }}'] | striptags | trim %}
{% set description = row.content['#view'].style_plugin.render_tokens[ loop.index0 ]['{{ field_description }}'] | striptags | trim %}
{% set contact_form_title = row.content['#view'].style_plugin.render_tokens[ loop.index0 ]['{{ field_contact_form_title }}'] | striptags | trim %}
{% set social_title = row.content['#view'].style_plugin.render_tokens[ loop.index0 ]['{{ field_social_links_title }}'] | striptags | trim %}

  <div class=\"header\">
    <div class=\"container\">
      <div class=\"row justify-content-between align-items-center\">
        <div class=\"col\">
          <div class=\"logo\"><a href=\"{{ url('<front>') }}\"><img src=\"{{ logo }}\" alt=\"marsana\"></a></div>
        </div>
        <div class=\"col text-right\">
          <ul class=\"header-right\">
            <li id=\"lng-selector\">{{ drupal_entity('block', 'languageswitcher') }}</li>
            <li id=\"contact-icon\"><img src=\"{{ contact_icon }}\" alt=\"contact\"><span class=\"tooltip\"><span>{{ contact_text | raw }}</span></span></li>
            <li id=\"map-icon\"><img src=\"/images/static/icon-map.svg\" alt=\"\"><span class=\"tooltip\"><span>{{ 'interactive map'| t }}</span></span></li>
            <li id=\"burger-icon\"><span></span><span></span><span></span><span></span></li>
            <li id=\"scroll-burger-icon\" class=\"open d-none\"><span></span><span></span><span></span><span></span></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class=\"menu-wrapper vertical-center\">
    <div class=\"container\">
      <div class=\"row justify-content-between\">
          <div class=\"col-12 col-md-4\">
              <div class=\"about-menu\">
                  <div class=\"body-text mb-4\">{{ description }}</div>
              </div>
          </div>
          <div class=\"col-12 col-md-7\">
              <div class=\"menu-links\">
                  <div class=\"row\">
                      <div class=\"col-12 col-md-6\">
                        {{ drupal_view('eat_menu_listing')|render }}
                        {{ drupal_view('shop_menu_listing')|render }}
                        {{ drupal_view('dock_menu_listing')|render }}
                      </div>
                      <div class=\"col-12 col-md-6\">
                          {{ drupal_view('menu_listing')|render }}
                      </div>
                  </div>
              </div>
          </div>
      </div>
        <hr class=\"my-4\">
        <div class=\"row footer-menu-infos justify-content-between\">
            <div class=\"col-12 col-md-auto\">
                <div class=\"row\">
                    <div class=\"col-auto body-text small bold\">{{ address_title }}</div>
                    <div class=\"col body-text small\"><a style=\"color:#ffffff;\" href=\"mailto:leasing@marsana.ae\">{{ address }}</a></div>
                </div>
            </div>

            <div class=\"col-12 col-md-auto\">
              <div class=\"row\">
                  <div class=\"col-auto body-text small bold\">{{ email_title }}</div>
                  <div class=\"col body-text small\"><a href=\"{{ email_link }}\" class=\" body-text small mb-4\">{{ email_link_title }}</a></div>
              </div>
            </div>
            <div class=\"col-12 col-md-auto\">
                <div class=\"row\">
                    <div class=\"col-auto body-text small bold\">{{ website_link_text }}</div>
                    <div class=\"col body-text small\"><a href=\"{{ website_link }}\" target=\"_blank\" class=\" body-text small mb-4\">{{ website_link_title }}</a></div>
                </div>
            </div>
        </div>
    </div>
  </div>
  <!-- ************************* CONTACT POPUP ************************* -->
  <div class=\"contact-wrapper\">
    <div class=\"popup-logo\">{{ contact_form_title }}</div>
    <a class=\"close-btn\" href=\"javascript:;\"><span></span><span></span><span></span></a>
    <div class=\"container\">
      <div class=\"row justify-content-center align-items-center\">
        <div class=\"col-md-7 col-12\">
          {{ drupal_entity('webform', 'contact') }}
          <br><br>
\t\t      <div class=\"alert text-capitalize alert-dismissible fade show form-alert contact-success\" role=\"alert\">
            <span class=\"form-alert-msg\"></span>
            <button type=\"button\" class=\"contact-close close\" data-dismiss=\"alert-1\" aria-label=\"Close-1\"></button>
          </div>
          <div class=\"contact-footer mt-2 mt-md-5\">
            <div class=\"body-text l-spacing-2 mb-1\">{{ social_title }}</div>
            {%  for key, row in social_links %}
                <a href=\"{{ row.social_link | trim }}\" class=\"mx-2\" target=\"_blank\"><img src=\"{{ row.icon | striptags | trim }}\" alt=\"icon\"></a>
            {% endfor %}
          </div>
        </div>
      </div>
    </div>
  </div>
  {% endfor %}

<!-- ************************* MAP PLACEHOLDER ************************* -->
  <div class=\"zoom-wrapper\">
   <div class=\"map-wrapper selectedZoomTarget zoomNotClickable\">
      <div class=\"map-points zoomContainer selectedZoomTarget zoomNotClickable\">
          <div id=\"animation_container\" class=\"map-canvas\">
              <canvas id=\"canvas\"></canvas>
              <img src=\"/images/dynamic/map/map-static-bg.png\" alt=\"\" class=\"map-static-bg\">
              <img src=\"/images/dynamic/map/map-static-bg-marsana-en.png\" alt=\"\" class=\"map-lang-marina lang-en\">
              <img src=\"/images/dynamic/map/map-static-bg-marsana-ar.png\" alt=\"\" class=\"map-lang-marina lang-ar\">
              <div id=\"dom_overlay_container\" style=\"pointer-events:none; overflow:hidden; width:100%; height:100%; position: absolute; left: 0px; top: 0px; display: block;\"></div>
              <img src=\"/images/dynamic/map/mapA2.png\" alt=\"\" class=\"map-elements-img\">
              <div class=\"map-points-container\">
                  <div class=\"numbered-points\">
                    {% for nkey,nitem in numbered_points %}
                        <div class=\"zoomTarget\" data-targetsize=\"0.1\" style=\"{{ nitem['position'] }}\" data-target=\"{{ nitem['positionTitle']|raw|replace({\" \":\"-\",\".\":\"-\", '&#039;':\"-\", '&amp;' : '-'})|lower }}\"><span class=\"tooltip\"><a href=\"javascript:;\" class=\"anchorInside\" data-toggle=\"modal\" data-target=\"{{ nitem['modalTitle']|raw|replace({\" \":\"-\",\".\":\"-\", '&#039;':\"-\", '&amp;' : '-'})|lower }}-modal\"><span>{{ nitem['positionTitle'] | trim }}</span></a></span><p>{{ nkey+1 }}</p></div>
                    {% endfor %}
                    {% for key,item in activities %}
                        <!-- <div class=\"zoomTarget activities-points\" data-targetsize=\"0.1\" style=\"{{ item['activitiesPosition'] }}\" data-target=\"{{ item['activitiesPositionTitle']|raw|replace({\" \":\"-\",\".\":\"-\", '&#039;':\"-\", '&amp;' : '-'})|lower }}\"><p>{{ item['activitiesPositionTitle']|trim }}</p></div> -->
                        <div class=\"zoomTarget activities-points\" data-targetsize=\"0.1\" style=\"{{ item['activitiesPosition'] }}\" data-target=\"{{ item['activitiesPositionTitle']|raw|replace({\" \":\"-\",\".\":\"-\", '&#039;':\"-\", '&amp;' : '-'})|lower }}\"><span class=\"tooltip\"><a href=\"javascript:;\" class=\"anchorInside\" data-toggle=\"modal\" data-target=\"{{ item['modalTitle']|raw|replace({\" \":\"-\",\".\":\"-\", '&#039;':\"-\", '&amp;' : '-'})|lower }}-modal\"><span>{{ item['activitiesPositionTitle'] | trim }}</span></a></span></div>
                    {% endfor %}
                  </div>
              </div>
          </div>
      </div> 
      <a class=\"map-legend\" href=\"javascript:;\">
          <img src=\"/images/static/icon-map-legend.svg\" alt=\"map icon legend\">
          <p class=\"body-text bold text-uppercase color-white\">{{ 'Legend'|t }}</p>
      </a>
      <a class=\"zoom-reset\" href=\"javascript:;\">
          <p class=\"body-text bold text-uppercase color-white\">{{ 'Reset'|t }}</p>
      </a>
      <div class=\"map-links\">
          <div class=\"upper-part\">
              <img src=\"/images/dynamic/legend-bg-upper.png\" alt=\"\" class=\"legend-bg\">
              <div class=\"container pt-4 pb-2\">
                  <div class=\"row\">
                      <div class=\"col\">
                          <h3>{{ activities_label }}</h3>
                      </div>
                  </div>
                  <div class=\"row\">
                      <div class=\"col-6\">
                          {% for akey1,aitem1 in activities_data1%}
                            <a href=\"javascript:;\" class=\"body-text small bold text-uppercase\" data-target=\"{{ aitem1['activitiesPositionTitle']|raw|replace({\" \":\"-\",\".\":\"-\", '&#039;':\"-\", '&amp;' : '-'})|lower }}\">{{ aitem1['activitiesPositionTitle']|raw|trim }}</a>
                          {% endfor %}
                      </div>
                      <div class=\"col-6\">
                          {% for akey2,aitem2 in activities_data2%}
                            <a href=\"javascript:;\" class=\"body-text small bold text-uppercase\" data-target=\"{{ aitem2['activitiesPositionTitle']|raw|replace({\" \":\"-\",\".\":\"-\", '&#039;':\"-\", '&amp;' : '-'})|lower }}\">{{ aitem2['activitiesPositionTitle']|raw|trim }}</a>
                          {% endfor %}
                      </div>
                  </div>
                  <div class=\"row\">
                      <div class=\"col\">
                          <h3>{{ f_b_outlets_label }}</h3>
                      </div>
                  </div>
                  <div class=\"row\">
                      <div class=\"col-6\">
                         {% for bkey1,fbItem1 in f_b_outlets_chunk1%}
                            <a href=\"javascript:;\" class=\"body-text small bold text-uppercase\" data-target=\"{{ fbItem1['positionTitle']|raw|replace({\" \":\"-\",\".\":\"-\", '&#039;':\"-\", '&amp;' : '-'})|lower }}\"><p class=\"number\"><span>{{ bkey1+1 }}</span></p><p class=\"w-80\">{{ fbItem1['positionTitle']|raw|trim }}</p></a>
                          {% endfor %}
                      </div>
                      <div class=\"col-6\">
\t\t\t                   {% set fVal = f_b_outlets_chunk1_count|trim %}
                         {% for bkey2,fbItem2 in f_b_outlets_chunk2%}
\t\t\t                      {% set fVal = fVal + 1 %}
                            <a href=\"javascript:;\" class=\"body-text small bold text-uppercase\" data-target=\"{{ fbItem2['positionTitle']|raw|replace({\" \":\"-\",\".\":\"-\", '&#039;':\"-\", '&amp;' : '-'})|lower }}\"><p class=\"number\"><span>{{ fVal|trim }}</span></p><p class=\"w-80\">{{ fbItem2['positionTitle']|raw|trim }}</p></a>
                          {% endfor %}
                      </div>
                  </div>
                  <div class=\"row\">
                      <div class=\"col\">
                          <h3>{{ food_trucks_label }}</h3>
                      </div>
                  </div>
                  <div class=\"row\">
                      <div class=\"col-6\">
\t\t\t                    {% set cVal = f_b_outlets_chunk2_count_total|trim %}
                          {% for ckey1,ftItem1 in food_trucks_chunk1%}
\t\t\t                      {% set cVal = cVal + 1 %}
                            <a href=\"javascript:;\" class=\"body-text small bold text-uppercase\" data-target=\"{{ ftItem1['positionTitle']|raw|replace({\" \":\"-\",\".\":\"-\", '&#039;':\"-\", '&amp;' : '-'})|lower }}\"><p class=\"number\"><span>{{ cVal|trim }}</span></p><p class=\"w-80\">{{ ftItem1['positionTitle']|raw|trim }}</p></a>
                          {% endfor %}
                      </div>
                      <div class=\"col-6\">
\t\t\t                    {% set dVal = food_trucks_count_total|trim %}
                          {% for ckey2,ftItem2 in food_trucks_chunk2%}
\t\t\t                      {% set dVal = dVal + 1 %}
                            <a href=\"javascript:;\" class=\"body-text small bold text-uppercase\" data-target=\"{{ ftItem2['positionTitle']|raw|replace({\" \":\"-\",\".\":\"-\", '&#039;':\"-\", '&amp;' : '-'})|lower }}\"><p class=\"number\"><span>{{ dVal|trim }}</span></p><p class=\"w-80\">{{ ftItem2['positionTitle']|raw|trim }}</p></a>
                          {% endfor %}
                      </div>
                  </div>
              </div>
          </div>
          <div class=\"lower-part\">
              <img src=\"/images/dynamic/legend-bg-lower.png\" alt=\"\" class=\"legend-bg\">
              <div class=\"container py-2\">
                  <div class=\"row justify-content-between\">
                      <div class=\"col\">
                          <img src=\"/images/dynamic/legend-trail-1.png\" alt=\"\"><p class=\"body-text small bold text-uppercase color-white\">{{ 'WALKWAY' | t }}</p>
                      </div>
                      <div class=\"col\">
                          <img src=\"/images/dynamic/legend-trail-2.png\" alt=\"\"><p class=\"body-text small bold text-uppercase color-white\">{{ 'DRIVEWAY' | t }}</p>
                      </div>
                      <div class=\"col\">
                          <img src=\"/images/dynamic/legend-trail-3.png\" alt=\"\"><p class=\"body-text small bold text-uppercase color-white\">{{ 'SHADED SOUK WALKWAY' | t }}</p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
   </div>
  </div>

    {{ drupal_view('home_eat_pop_up_content') }}
", "sites/marsana.com/themes/custom/marsana/templates/views/views-view-unformatted--header-block.html.twig", "/var/www/html/Hudayriyat/project/web/sites/marsana.com/themes/custom/marsana/templates/views/views-view-unformatted--header-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 20, "set" => 21);
        static $filters = array("trim" => 21, "striptags" => 21, "escape" => 40, "raw" => 45, "t" => 46, "render" => 66, "lower" => 140, "replace" => 140);
        static $functions = array("url" => 40, "drupal_entity" => 44, "drupal_view" => 66);

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set'],
                ['trim', 'striptags', 'escape', 'raw', 't', 'render', 'lower', 'replace'],
                ['url', 'drupal_entity', 'drupal_view'],
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
