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

/* themes/custom/hudayriyat/templates/views/search/views-view-unformatted--search-list.html.twig */
class __TwigTemplate_81e6b9511646f742cf80bc8e0c0e91cc extends Template
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
        yield "<div class=\"search\">
    <div class=\"dark-overlay d-none\">
        <img src=\"/images/static/loader-new.gif\" />
    </div>
    <div class=\"related-content related-interaction white-bg\">
    <div class=\"container\">
           ";
        // line 26
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::drupalEntity("webform", "search"), "html", null, true);
        yield "
    </div>
    </div>
    <section class=\"p-section light-navy-bg\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <h2 class=\"search-result-message\"></h2>
                </div>
            </div>
            <div class=\"row search-results\"></div>
            <div class=\"go-search-results\"></div>
            <div class=\"row load-more d-none\">
                <div class=\"text-center w-100 mb-3\">
                    <a href=\"javascript:;\" class=\"btn border-btn border-yellow-btn\">";
        // line 40
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Load More"));
        yield "</a>
                </div>
            </div>
        </div>
    </section>      
</div>";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/custom/hudayriyat/templates/views/search/views-view-unformatted--search-list.html.twig";
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
        return array (  65 => 40,  48 => 26,  40 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/hudayriyat/templates/views/search/views-view-unformatted--search-list.html.twig", "C:\\xampp\\htdocs\\modorn\\web\\themes\\custom\\hudayriyat\\templates\\views\\search\\views-view-unformatted--search-list.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 26, "t" => 40);
        static $functions = array("drupal_entity" => 26);

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape', 't'],
                ['drupal_entity'],
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
