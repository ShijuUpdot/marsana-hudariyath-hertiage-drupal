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

/* themes/custom/hudayriyat/templates/block/offers-details/block--views-block--offers-info-section-block-1.html.twig */
class __TwigTemplate_a601235b49196951b999c228ad89b997 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension(SandboxExtension::class);
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        yield "<div class=\"inside-wrapper\">
  <div class=\"inside\">
    ";
        // line 32
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["content"]);        return; yield '';
    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        yield "      ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 33, $this->source), "html", null, true);
        yield "
    ";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/custom/hudayriyat/templates/block/offers-details/block--views-block--offers-info-section-block-1.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  54 => 33,  45 => 32,  41 => 30,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/hudayriyat/templates/block/offers-details/block--views-block--offers-info-section-block-1.html.twig", "/var/www/html/Hudayriyat/project/web/themes/custom/hudayriyat/templates/block/offers-details/block--views-block--offers-info-section-block-1.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 32);
        static $filters = array("escape" => 33);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['block'],
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