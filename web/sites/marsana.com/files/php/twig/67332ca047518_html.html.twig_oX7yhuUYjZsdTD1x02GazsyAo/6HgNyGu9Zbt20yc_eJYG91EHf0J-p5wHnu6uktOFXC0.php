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

/* sites/marsana.com/themes/custom/marsana/templates/layout/html.html.twig */
class __TwigTemplate_5e7a1cd289d5960abe3b418322337ff6 extends Template
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
        // line 27
        $context["body_classes"] = [((        // line 28
($context["logged_in"] ?? null)) ? ("user-logged-in") : ("")), (( !        // line 29
($context["root_path"] ?? null)) ? ("path-frontpage") : (("path-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["root_path"] ?? null), 29, $this->source))))), ((        // line 30
($context["node_type"] ?? null)) ? (("page-node-type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["node_type"] ?? null), 30, $this->source)))) : ("")), ((        // line 31
($context["db_offline"] ?? null)) ? ("db-offline") : ("")),         // line 32
($context["langclass"] ?? null)];
        // line 35
        yield "<!DOCTYPE html>
<html";
        // line 36
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["html_attributes"] ?? null), 36, $this->source), "html", null, true);
        yield ">
  <head>
\t<!-- Global site tag (gtag.js) - Google Analytics -->
\t<script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-110212161-4\"></script>
\t<script>
\twindow.dataLayer = window.dataLayer || [];
\tfunction gtag(){dataLayer.push(arguments);}
\tgtag('js', new Date());

\tgtag('config', 'UA-110212161-4');
</script>
    <head-placeholder token=\"";
        // line 47
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 47, $this->source), "html", null, true);
        yield "\">
    <title>";
        // line 48
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->safeJoin($this->env, $this->sandbox->ensureToStringAllowed(($context["head_title"] ?? null), 48, $this->source), " | "));
        yield "</title>
    <css-placeholder token=\"";
        // line 49
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 49, $this->source), "html", null, true);
        yield "\">
    <js-placeholder token=\"";
        // line 50
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 50, $this->source), "html", null, true);
        yield "\">
\t<!-- Global site tag (gtag.js) - Google Analytics -->
\t<script async src=\"https://www.googletagmanager.com/gtag/js?id=G-Q5VEYYZ7HT\"></script>
\t<script>
  \twindow.dataLayer = window.dataLayer || [];
  \tfunction gtag(){dataLayer.push(arguments);}
  \tgtag('js', new Date());
  \tgtag('config', 'G-Q5VEYYZ7HT');

    var canvas, stage, exportRoot, anim_container, dom_overlay_container, fnStartAnimation;
      function init() {
          canvas = document.getElementById(\"canvas\");
          anim_container = document.getElementById(\"animation_container\");
          dom_overlay_container = document.getElementById(\"dom_overlay_container\");
          var comp=AdobeAn.getComposition(\"A42E2BB558684518BE188CDFE25F34E0\");
          var lib=comp.getLibrary();
          var loader = new createjs.LoadQueue(false);
          loader.addEventListener(\"fileload\", function(evt){handleFileLoad(evt,comp)});
          loader.addEventListener(\"complete\", function(evt){handleComplete(evt,comp)});
          var lib=comp.getLibrary();
          loader.loadManifest(lib.properties.manifest);
      }
      function handleFileLoad(evt, comp) {
          var images=comp.getImages();\t
          if (evt && (evt.item.type == \"image\")) { images[evt.item.id] = evt.result; }\t
      }
      function handleComplete(evt,comp) {
          //This function is always called, irrespective of the content. You can use the variable \"stage\" after it is created in token create_stage.
          var lib=comp.getLibrary();
          var ss=comp.getSpriteSheet();
          var queue = evt.target;
          var ssMetadata = lib.ssMetadata;
          for(i=0; i<ssMetadata.length; i++) {
              ss[ssMetadata[i].name] = new createjs.SpriteSheet( {\"images\": [queue.getResult(ssMetadata[i].name)], \"frames\": ssMetadata[i].frames} )
          }
          exportRoot = new lib.marsanabganimatedv1();
          stage = new lib.Stage(canvas);\t
          //Registers the \"tick\" event listener.
          fnStartAnimation = function() {
              stage.addChild(exportRoot);
              createjs.Ticker.framerate = lib.properties.fps;
              createjs.Ticker.addEventListener(\"tick\", stage);
          }\t    
          //Code to support hidpi screens and responsive scaling.
          AdobeAn.makeResponsive(false,'both',false,1,[canvas,anim_container,dom_overlay_container]);\t
          AdobeAn.compositionLoaded(lib.properties.id);
          fnStartAnimation();
      }
\t</script>
  <script type=\"application/ld+json\">
{
  \"@context\": \"https://schema.org\",
  \"@type\": \"Corporation\",
  \"name\": \"Marsana\",
  \"alternateName\": \"Marsana\",
  \"url\": \"https://www.marsana.ae/\",
  \"logo\": \"https://stmodonprod.blob.core.windows.net/stmarsanaprodblob/2020-12/logo_1.svg\",
  \"sameAs\": [
    \"https://www.facebook.com/marsana.hudayriyat/\",
    \"https://instagram.com/marsana.hudayriyat\"
  ]
}
</script>
<script type=\"text/javascript\">
(function(w,d,s,r,k,h,m){
    if(w.performance && w.performance.timing && w.performance.navigation) {
        w[r] = w[r] || function(){(w[r].q = w[r].q || []).push(arguments)};
        h=d.createElement('script');h.async=true;h.setAttribute('src',s+k);
        d.getElementsByTagName('head')[0].appendChild(h);
        (m = window.onerror),(window.onerror = function (b, c, d, f, g) {
        m && m(b, c, d, f, g),g || (g = new Error(b)),(w[r].q = w[r].q || []).push([\"captureException\",g]);})
    }
})(window,document,'//static.site24x7rum.com/beacon/site24x7rum-min.js?appKey=','s247r','6fe8d965413a30f7fb9837f28edc56ef');
</script>
  </head>
  <body";
        // line 125
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["body_classes"] ?? null)], "method", false, false, true, 125), 125, $this->source), "html", null, true);
        yield " onload=\"init();\">
    ";
        // line 130
        yield "    <a href=\"#main-content\" class=\"visually-hidden focusable skip-link\">
      ";
        // line 131
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Skip to main content"));
        yield "
    </a>
    ";
        // line 133
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_top"] ?? null), 133, $this->source), "html", null, true);
        yield "
    ";
        // line 134
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page"] ?? null), 134, $this->source), "html", null, true);
        yield "
    ";
        // line 135
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_bottom"] ?? null), 135, $this->source), "html", null, true);
        yield "
    <js-bottom-placeholder token=\"";
        // line 136
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 136, $this->source), "html", null, true);
        yield "\">
  </body>
</html>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["logged_in", "root_path", "node_type", "db_offline", "langclass", "html_attributes", "placeholder_token", "head_title", "attributes", "page_top", "page", "page_bottom"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "sites/marsana.com/themes/custom/marsana/templates/layout/html.html.twig";
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
        return array (  178 => 136,  174 => 135,  170 => 134,  166 => 133,  161 => 131,  158 => 130,  154 => 125,  76 => 50,  72 => 49,  68 => 48,  64 => 47,  50 => 36,  47 => 35,  45 => 32,  44 => 31,  43 => 30,  42 => 29,  41 => 28,  40 => 27,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override for the basic structure of a single Drupal page.
 *
 * Variables:
 * - logged_in: A flag indicating if user is logged in.
 * - root_path: The root path of the current page (e.g., node, admin, user).
 * - node_type: The content type for the current node, if the page is a node.
 * - head_title: List of text elements that make up the head_title variable.
 *   May contain one or more of the following:
 *   - title: The title of the page.
 *   - name: The name of the site.
 *   - slogan: The slogan of the site.
 * - page_top: Initial rendered markup. This should be printed before 'page'.
 * - page: The rendered page markup.
 * - page_bottom: Closing rendered markup. This variable should be printed after
 *   'page'.
 * - db_offline: A flag indicating if the database is offline.
 * - placeholder_token: The token for generating head, css, js and js-bottom
 *   placeholders.
 *
 * @see template_preprocess_html()
 */
#}
{%
  set body_classes = [
    logged_in ? 'user-logged-in',
    not root_path ? 'path-frontpage' : 'path-' ~ root_path|clean_class,
    node_type ? 'page-node-type-' ~ node_type|clean_class,
    db_offline ? 'db-offline',
    langclass
  ]
%}
<!DOCTYPE html>
<html{{ html_attributes }}>
  <head>
\t<!-- Global site tag (gtag.js) - Google Analytics -->
\t<script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-110212161-4\"></script>
\t<script>
\twindow.dataLayer = window.dataLayer || [];
\tfunction gtag(){dataLayer.push(arguments);}
\tgtag('js', new Date());

\tgtag('config', 'UA-110212161-4');
</script>
    <head-placeholder token=\"{{ placeholder_token }}\">
    <title>{{ head_title|safe_join(' | ') }}</title>
    <css-placeholder token=\"{{ placeholder_token }}\">
    <js-placeholder token=\"{{ placeholder_token }}\">
\t<!-- Global site tag (gtag.js) - Google Analytics -->
\t<script async src=\"https://www.googletagmanager.com/gtag/js?id=G-Q5VEYYZ7HT\"></script>
\t<script>
  \twindow.dataLayer = window.dataLayer || [];
  \tfunction gtag(){dataLayer.push(arguments);}
  \tgtag('js', new Date());
  \tgtag('config', 'G-Q5VEYYZ7HT');

    var canvas, stage, exportRoot, anim_container, dom_overlay_container, fnStartAnimation;
      function init() {
          canvas = document.getElementById(\"canvas\");
          anim_container = document.getElementById(\"animation_container\");
          dom_overlay_container = document.getElementById(\"dom_overlay_container\");
          var comp=AdobeAn.getComposition(\"A42E2BB558684518BE188CDFE25F34E0\");
          var lib=comp.getLibrary();
          var loader = new createjs.LoadQueue(false);
          loader.addEventListener(\"fileload\", function(evt){handleFileLoad(evt,comp)});
          loader.addEventListener(\"complete\", function(evt){handleComplete(evt,comp)});
          var lib=comp.getLibrary();
          loader.loadManifest(lib.properties.manifest);
      }
      function handleFileLoad(evt, comp) {
          var images=comp.getImages();\t
          if (evt && (evt.item.type == \"image\")) { images[evt.item.id] = evt.result; }\t
      }
      function handleComplete(evt,comp) {
          //This function is always called, irrespective of the content. You can use the variable \"stage\" after it is created in token create_stage.
          var lib=comp.getLibrary();
          var ss=comp.getSpriteSheet();
          var queue = evt.target;
          var ssMetadata = lib.ssMetadata;
          for(i=0; i<ssMetadata.length; i++) {
              ss[ssMetadata[i].name] = new createjs.SpriteSheet( {\"images\": [queue.getResult(ssMetadata[i].name)], \"frames\": ssMetadata[i].frames} )
          }
          exportRoot = new lib.marsanabganimatedv1();
          stage = new lib.Stage(canvas);\t
          //Registers the \"tick\" event listener.
          fnStartAnimation = function() {
              stage.addChild(exportRoot);
              createjs.Ticker.framerate = lib.properties.fps;
              createjs.Ticker.addEventListener(\"tick\", stage);
          }\t    
          //Code to support hidpi screens and responsive scaling.
          AdobeAn.makeResponsive(false,'both',false,1,[canvas,anim_container,dom_overlay_container]);\t
          AdobeAn.compositionLoaded(lib.properties.id);
          fnStartAnimation();
      }
\t</script>
  <script type=\"application/ld+json\">
{
  \"@context\": \"https://schema.org\",
  \"@type\": \"Corporation\",
  \"name\": \"Marsana\",
  \"alternateName\": \"Marsana\",
  \"url\": \"https://www.marsana.ae/\",
  \"logo\": \"https://stmodonprod.blob.core.windows.net/stmarsanaprodblob/2020-12/logo_1.svg\",
  \"sameAs\": [
    \"https://www.facebook.com/marsana.hudayriyat/\",
    \"https://instagram.com/marsana.hudayriyat\"
  ]
}
</script>
<script type=\"text/javascript\">
(function(w,d,s,r,k,h,m){
    if(w.performance && w.performance.timing && w.performance.navigation) {
        w[r] = w[r] || function(){(w[r].q = w[r].q || []).push(arguments)};
        h=d.createElement('script');h.async=true;h.setAttribute('src',s+k);
        d.getElementsByTagName('head')[0].appendChild(h);
        (m = window.onerror),(window.onerror = function (b, c, d, f, g) {
        m && m(b, c, d, f, g),g || (g = new Error(b)),(w[r].q = w[r].q || []).push([\"captureException\",g]);})
    }
})(window,document,'//static.site24x7rum.com/beacon/site24x7rum-min.js?appKey=','s247r','6fe8d965413a30f7fb9837f28edc56ef');
</script>
  </head>
  <body{{ attributes.addClass(body_classes) }} onload=\"init();\">
    {#
      Keyboard navigation/accessibility link to main content section in
      page.html.twig.
    #}
    <a href=\"#main-content\" class=\"visually-hidden focusable skip-link\">
      {{ 'Skip to main content'|t }}
    </a>
    {{ page_top }}
    {{ page }}
    {{ page_bottom }}
    <js-bottom-placeholder token=\"{{ placeholder_token }}\">
  </body>
</html>
", "sites/marsana.com/themes/custom/marsana/templates/layout/html.html.twig", "/var/www/html/Hudayriyat/project/web/sites/marsana.com/themes/custom/marsana/templates/layout/html.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 27);
        static $filters = array("clean_class" => 29, "escape" => 36, "safe_join" => 48, "t" => 131);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set'],
                ['clean_class', 'escape', 'safe_join', 't'],
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
