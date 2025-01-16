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

/* sites/heritage_trail.com/themes/custom/heritage/templates/layout/page--user--login.html.twig */
class __TwigTemplate_9fdcd2b016799d7cb0e69579d505a342 extends Template
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
        // line 45
        yield "<div class=\"text-center w-100\">
<a href=\"/\"><img src=\"https://stmodonstagblob.blob.core.windows.net/sthudayriyatblob/2020-12/logo-navy.svg\" alt=\"Logo\"></a>
<h3>HERITAGE TRAIL</h3>
</div>
<div style=\"margin: 5% 0% 10% 30%;\">
";
        // line 50
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 50)) {
            yield " 
    ";
            // line 51
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 51), 51, $this->source), "html", null, true);
            yield "
";
        }
        // line 53
        yield "</div>";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "sites/heritage_trail.com/themes/custom/heritage/templates/layout/page--user--login.html.twig";
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
        return array (  56 => 53,  51 => 51,  47 => 50,  40 => 45,);
    }

    public function getSourceContext()
    {
        return new Source("", "sites/heritage_trail.com/themes/custom/heritage/templates/layout/page--user--login.html.twig", "/var/www/html/Hudayriyat/project/web/sites/heritage_trail.com/themes/custom/heritage/templates/layout/page--user--login.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 50);
        static $filters = array("escape" => 51);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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
