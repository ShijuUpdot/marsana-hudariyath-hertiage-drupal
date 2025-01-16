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

/* themes/custom/hudayriyat/templates/content/node--contact.html.twig */
class __TwigTemplate_77ce4c9d4de0611c992b56d5394d3d17 extends Template
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
        // line 74
        $context["classes"] = ["node", ("node--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source,         // line 76
($context["node"] ?? null), "bundle", [], "any", false, false, true, 76), 76, $this->source))), ((CoreExtension::getAttribute($this->env, $this->source,         // line 77
($context["node"] ?? null), "isPromoted", [], "method", false, false, true, 77)) ? ("node--promoted") : ("")), ((CoreExtension::getAttribute($this->env, $this->source,         // line 78
($context["node"] ?? null), "isSticky", [], "method", false, false, true, 78)) ? ("node--sticky") : ("")), (( !CoreExtension::getAttribute($this->env, $this->source,         // line 79
($context["node"] ?? null), "isPublished", [], "method", false, false, true, 79)) ? ("node--unpublished") : ("")), ((        // line 80
($context["view_mode"] ?? null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 80, $this->source)))) : (""))];
        // line 83
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(views_embed_view("contact_hero_section")), "html", null, true);
        yield "
<div class=\"inside-wrapper\">
  <div class=\"inside\">
    ";
        // line 86
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(views_embed_view("contact_intro")), "html", null, true);
        yield "
    <section class=\"p-section light-navy-bg contact\">
      <div class=\"container\">
        ";
        // line 89
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::drupalEntity("webform", "contact"), "html", null, true);
        yield "
        <div class=\"alert alert-dismissible fade show form-alert contact-success\" role=\"alert\">
          <span class=\"form-alert-msg\"></span>
          <button type=\"button\" class=\"contact-close close\" data-dismiss=\"alert-1\" aria-label=\"Close-1\"></button>
        </div>
      </div>
    </section>
    <section class=\"\">
      <!--div id=\"map\" class=\"w-100 contact-map\"></div-->
\t  <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d116296.2048055208!2d54.32152229951278!3d24.372382378116555!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5e6f35f2ff0d6f%3A0x4c12341b13da96f7!2sAl%20Hudayriat%20Island!5e0!3m2!1sen!2sin!4v1610524774473!5m2!1sen!2sin\" width=\"100%\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>
    </section>
  </div>
</div>";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["node", "view_mode"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/custom/hudayriyat/templates/content/node--contact.html.twig";
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
        return array (  59 => 89,  53 => 86,  47 => 83,  45 => 80,  44 => 79,  43 => 78,  42 => 77,  41 => 76,  40 => 74,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/hudayriyat/templates/content/node--contact.html.twig", "/var/www/html/Hudayriyat/project/web/themes/custom/hudayriyat/templates/content/node--contact.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 74);
        static $filters = array("clean_class" => 76, "escape" => 83, "render" => 83);
        static $functions = array("drupal_view" => 83, "drupal_entity" => 89);

        try {
            $this->sandbox->checkSecurity(
                ['set'],
                ['clean_class', 'escape', 'render'],
                ['drupal_view', 'drupal_entity'],
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
