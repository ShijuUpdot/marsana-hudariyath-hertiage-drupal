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

/* core/themes/claro/templates/content-edit/file-widget-multiple.html.twig */
class __TwigTemplate_341190d399d5015c2068fb8e9554a19f extends Template
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
        // line 15
        yield "<div class=\"file-widget-multiple";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["has_table"] ?? null)) ? (" has-table") : ("")));
        yield "\">
  <div class=\"file-widget-multiple__table-wrapper\">
    ";
        // line 17
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["table"] ?? null), 17, $this->source), "html", null, true);
        yield "
    ";
        // line 18
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["element"] ?? null), 18, $this->source), "html", null, true);
        yield "
  </div>
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["has_table", "table", "element"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "core/themes/claro/templates/content-edit/file-widget-multiple.html.twig";
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
        return array (  50 => 18,  46 => 17,  40 => 15,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override to display a multiple file upload form widget.
 *
 * Available variables:
 * - table: Table of previously uploaded files.
 * - element: The form element for uploading another file.
 * - has_table: True when the table is not empty AND can be accessed.
 *
 * @see template_preprocess_file_widget_multiple()
 * @see claro_preprocess_file_widget_multiple()
 */
#}
<div class=\"file-widget-multiple{{ has_table ? ' has-table' }}\">
  <div class=\"file-widget-multiple__table-wrapper\">
    {{ table }}
    {{ element }}
  </div>
</div>
", "core/themes/claro/templates/content-edit/file-widget-multiple.html.twig", "/var/www/html/Hudayriyat/project/web/core/themes/claro/templates/content-edit/file-widget-multiple.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 17);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
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