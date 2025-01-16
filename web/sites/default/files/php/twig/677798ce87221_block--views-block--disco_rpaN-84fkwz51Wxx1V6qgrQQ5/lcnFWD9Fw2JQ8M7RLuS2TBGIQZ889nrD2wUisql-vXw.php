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

/* themes/custom/hudayriyat/templates/block/discover/block--views-block--discover-feature-section-discover-feature-section.html.twig */
class __TwigTemplate_9fb497d97ddf7403a23b28b052b4e1e6 extends Template
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
    <section class=\"p-section white-bg related-content\" data-scroll-speed=\"4\">
    ";
        // line 33
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 38
        yield "    </section>
\t</div>
\t</div>
  
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["content"]);        return; yield '';
    }

    // line 33
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 34
        yield "      <div class=\"container\">
        ";
        // line 35
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 35, $this->source), "html", null, true);
        yield "
      </div>
    ";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/custom/hudayriyat/templates/block/discover/block--views-block--discover-feature-section-discover-feature-section.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  65 => 35,  62 => 34,  58 => 33,  48 => 38,  46 => 33,  41 => 30,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/hudayriyat/templates/block/discover/block--views-block--discover-feature-section-discover-feature-section.html.twig", "/var/www/html/Hudayriyat/project/web/themes/custom/hudayriyat/templates/block/discover/block--views-block--discover-feature-section-discover-feature-section.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 33);
        static $filters = array("escape" => 35);
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
