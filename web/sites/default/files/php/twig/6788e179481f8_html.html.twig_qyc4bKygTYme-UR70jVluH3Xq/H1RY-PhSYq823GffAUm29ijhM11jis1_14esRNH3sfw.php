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

/* themes/custom/hudayriyat/templates/layout/html.html.twig */
class __TwigTemplate_2e7cd799a616df9fc4e065a4bb6e4a82 extends Template
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
        $context["url"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<current>")));
        // line 36
        $context["onload"] = "";
        // line 37
        if (CoreExtension::inFilter("interactive", ($context["url"] ?? null))) {
            // line 38
            yield "  ";
            $context["onload"] = ("onload=" . "init();");
        }
        // line 40
        yield "<!DOCTYPE html>
<html";
        // line 41
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["html_attributes"] ?? null), 41, $this->source), "html", null, true);
        yield ">
  <head>
    <head-placeholder token=\"";
        // line 43
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 43, $this->source), "html", null, true);
        yield "\">
    <title>";
        // line 44
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->safeJoin($this->env, $this->sandbox->ensureToStringAllowed(($context["head_title"] ?? null), 44, $this->source), " | "));
        yield "</title>
    <css-placeholder token=\"";
        // line 45
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 45, $this->source), "html", null, true);
        yield "\">
    <js-placeholder token=\"";
        // line 46
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 46, $this->source), "html", null, true);
        yield "\">
    <script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-110212161-3\"></script>
    <script>
     window.dataLayer = window.dataLayer || [];
     function gtag(){dataLayer.push(arguments);}
     gtag('js', new Date());
     gtag('config', 'UA-110212161-3');
     gtag('config', 'G-F5N7NL1TXT');
    </script>

<!-- TikTok Pixel Code Start -->

<script>

!function (w, d, t) {

w.TiktokAnalyticsObject=t;var ttq=w[t]=w[t]||[];ttq.methods=[\"page\",\"track\",\"identify\",\"instances\",\"debug\",\"on\",\"off\",\"once\",\"ready\",\"alias\",\"group\",\"enableCookie\",\"disableCookie\",\"holdConsent\",\"revokeConsent\",\"grantConsent\"],ttq.setAndDefer=function(t,e){t[e]=function(){t.push([e].concat(Array.prototype.slice.call(arguments,0)))}};for(var i=0;i<ttq.methods.length;i++)ttq.setAndDefer(ttq,ttq.methods[i]);ttq.instance=function(t){for(

var e=ttq._i[t]||[],n=0;n<ttq.methods.length;n++)ttq.setAndDefer(e,ttq.methods[n]);return e},ttq.load=function(e,n){var r=\"https://analytics.tiktok.com/i18n/pixel/­events.js\",o=n&&n.partner;ttq._i=ttq._i||{},ttq._i[e]=[],ttq._i[e]._u=r,ttq._t=ttq._t||{},ttq._t[e]=+new Date,ttq._o=ttq._o||{},ttq._o[e]=n||{};n=document.createElement(\"script\")

;n.type=\"text/javascript\",n.async=!0,n.src=r+\"?sdkid=\"+e+\"&lib=\"+t;e=document.getElementsByTagName(\"script\")[0];e.parentNode.insertBefore(n,e)};

ttq.load('CSTITVBC77U84I7KSB10');

ttq.page();

}(window, document, 'ttq');

</script>

<!-- TikTok Pixel Code End -->

<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':

new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],

j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=

'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);

})(window,document,'script','dataLayer','GTM-MZ6869KK');</script>



  </head>
  <body";
        // line 91
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["body_classes"] ?? null)], "method", false, false, true, 91), 91, $this->source), "html", null, true);
        yield " ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["onload"] ?? null), 91, $this->source), "html", null, true);
        yield ">

<noscript><iframe src=https://www.googletagmanager.com/ns.html?id=GTM-MZ6869KK

height=\"0\" width=\"0\" style=\"display:none;visibility:hidden\"></iframe></noscript>

    ";
        // line 101
        yield "    <a href=\"#main-content\" class=\"visually-hidden focusable skip-link\">
      ";
        // line 102
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Skip to main content"));
        yield "
    </a>
    ";
        // line 104
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_top"] ?? null), 104, $this->source), "html", null, true);
        yield "
    ";
        // line 105
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page"] ?? null), 105, $this->source), "html", null, true);
        yield "
    ";
        // line 106
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_bottom"] ?? null), 106, $this->source), "html", null, true);
        yield "
    <js-bottom-placeholder token=\"";
        // line 107
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 107, $this->source), "html", null, true);
        yield "\">

    ";
        // line 109
        if (CoreExtension::inFilter("interactive", ($context["url"] ?? null))) {
            // line 110
            yield "
    <script>
    
    jQuery(window).on('load', function() {
      jQuery('.dark-map-overly').addClass('d-none');
    });
    jQuery(document).ready(function() {  
      jQuery('.dark-map-overly').removeClass('d-none');
    });
         /////////////// INTERACTIVE MAP JS /////////////////
     jQuery(function(\$){
      function activateMaps() {
  
          \$('.maps-container-inner').ZoomArea({
              zoomLevel: 1,
              minZoomLevel: 1,
              maxZoomLevel: 10,
              parentOverflow: 'auto',
              exceptionsZoom: ['marker-all'],
              hideWhileAnimate: ['map-area', 'marker-all'],
              externalIncrease: '.map-control-zoomin',
              externalDecrease: '.map-control-zoomout',
              virtualScrollbars: false,
              usedAnimateMethod: 'jquery'
          });
  
          resizeFilterPanel();
      }
  
      function activateMapsMob() {
  
          \$('.maps-container-inner').ZoomArea({
              zoomLevel: 4,
              minZoomLevel: 4,
              maxZoomLevel: 15,
              parentOverflow: 'auto',
              exceptionsZoom: ['marker-all'],
              hideWhileAnimate: ['map-area', 'marker-all'],
              externalIncrease: '.map-control-zoomin',
              externalDecrease: '.map-control-zoomout',
              virtualScrollbars: false,
              usedAnimateMethod: 'jquery',
              parent_top: 100,
              top: 100,
          });
  
          resizeFilterPanel();
      }
      function activateMapsIpad() {
  
          \$('.maps-container-inner').ZoomArea({
              zoomLevel: 2.8,
              minZoomLevel: 2.8,
              maxZoomLevel: 15,
              parentOverflow: 'auto',
              exceptionsZoom: ['marker-all'],
              hideWhileAnimate: ['map-area', 'marker-all'],
              externalIncrease: '.map-control-zoomin',
              externalDecrease: '.map-control-zoomout',
              virtualScrollbars: false,
              usedAnimateMethod: 'jquery'
          });
  
          resizeFilterPanel();
      }
  
      function resizeFilterPanel() {
          \$('.map-filter').removeAttr('style');
          if (parseInt(\$('.measurement').css('max-width'), 10) > 768) {
              \$('.map-filter').css('height', \$('.maps-container').outerHeight() + 'px');
          }
      }

      \$(window).on('load', function() {
        
        if (\$('.interactive-map').length > 0) {
            //do your thing
            \$('.dark-map-overly').addClass('d-none');
            \$('header').addClass(\"p-absolute\");
            
            var isMobile = /Android|iPhone|iPad|iPod/i.test(navigator.userAgent);
            var zoomCounter = 0;
            var scaleRateContainer = .5;
            var scaleRatePoints = .2;
            if (isMobile){
                var divTransform, pointTransform, values1, a1, b1, values2, a2, b2, scaleContainer, scalePoints;
                \$(\".zooming-wrapper .map-control-zoomin\").click(function(){
                    if(zoomCounter >= 0 && zoomCounter < 3){
                        \$(\".map-control-zoomout\").removeClass(\"disable\");
                        divTransform = \$(\".map-mobile\").css('transform');
                        values1 = divTransform.split('(')[1];
                        values1 = values1.split(')')[0];
                        values1 = values1.split(',');
                        a1 = values1[0];
                        b1 = values1[1];
                        scaleContainer = Math.sqrt(a1*a1 + b1*b1) + scaleRateContainer;

                        pointTransform = \$(\".interactive-map .map .maps-container .marker-all\").css('transform');
                        values2 = pointTransform.split('(')[1];
                        values2 = values2.split(')')[0];
                        values2 = values2.split(',');
                        a2 = values2[0];
                        b2 = values2[1];
                        scalePoints = Math.sqrt(a2*a2 + b2*b2) - scaleRatePoints;

                        \$('.map-mobile').css(\"transform\", \"scale(\" + scaleContainer + \")\");
                        \$('.interactive-map .map .maps-container .marker-all').css(\"transform\", \"scale(\" + scalePoints + \")\");
                        zoomCounter ++;
                        if(zoomCounter == 3){
                            \$(this).addClass(\"disable\");
                        }
                    }
                    console.log(zoomCounter);
                });
                \$(\".zooming-wrapper .map-control-zoomout\").click(function(){
                    if(zoomCounter > 0 && zoomCounter <= 3){

                        \$(\".map-control-zoomin\").removeClass(\"disable\");
                        divTransform = \$(\".map-mobile\").css('transform');
                        values1 = divTransform.split('(')[1];
                        values1 = values1.split(')')[0];
                        values1 = values1.split(',');
                        a1 = values1[0];
                        b1 = values1[1];
                        scaleContainer = Math.sqrt(a1*a1 + b1*b1) - scaleRateContainer;

                        pointTransform = \$(\".interactive-map .map .maps-container .marker-all\").css('transform');
                        values2 = pointTransform.split('(')[1];
                        values2 = values2.split(')')[0];
                        values2 = values2.split(',');
                        a2 = values2[0];
                        b2 = values2[1];
                        scalePoints = Math.sqrt(a2*a2 + b2*b2) + scaleRatePoints;

                        \$('.map-mobile').css(\"transform\", \"scale(\" + scaleContainer + \")\");
                        \$('.interactive-map .map .maps-container .marker-all').css(\"transform\", \"scale(\" + scalePoints + \")\");
                        zoomCounter --;
                        if(zoomCounter == 0){
                            \$(this).addClass(\"disable\");
                        }
                    }
                    console.log(zoomCounter);
                });
                \$(\".zooming-wrapper .map-control-reset\").click(function(){
                    if(zoomCounter > 0 && zoomCounter <= 3){
                        \$('.map-mobile').css(\"transform\", \"scale(\" + 1 + \")\");
                        \$('.interactive-map .map .maps-container .marker-all').css(\"transform\", \"scale(\" + 1 + \")\");
                        \$(\".map-control-zoomin\").removeClass(\"disable\");
                        zoomCounter = 0;
                    }
                })

            }
            else{
                activateMaps();
            }
    
        }
    });
    
  
      \$(window).on(\"resize\", function () {
        if (\$('.interactive-map').length > 0){
          resizeFilterPanel();
        }
      });
      \$(document).ready(function() { 
        if (\$('.interactive-map').length > 0) {
            \$('.dark-map-overly').addClass('d-none');
        } 
    });
  
  
  
      /////////////////// INTERAACTIVE MAP CANVAS JS ///////////////////
      var trail = '';
      var trailImg = '';
      var clickCount = 0;
      var inputForm;
      \$('.form-check').click(function(){
          if(clickCount == 0){
              \$('.trails-group img').removeClass(\"active\");
              clickCount ++;
          }
          inputForm = \$(this).find('.form-check-input');
          if(inputForm.is(':checked')){
              \$(this).addClass('checked');
              trail = \$(this).attr('data-tag');
              \$('.trails-group img').each(function(){
                  trailImg = \$(this).attr('data-tag');
                  if (trailImg == trail){
                      \$(this).addClass('active');
                  }
              });
          }
          else{
              \$(this).removeClass('checked');trail = \$(this).attr('data-tag');
              \$('.trails-group img').each(function(){
                  trailImg = \$(this).attr('data-tag');
                  if (trailImg == trail){
                      \$(this).removeClass('active');
                  }
              });
          }
      });
  
      \$('.interactive-map .panel-heading a').click(function(){
          \$(this).parent().toggleClass('active');
          \$('.interactive-map').toggleClass('active');
          \$('html, body').animate({
            scrollTop: \$(\".inside-wrapper\").offset().top - 200
          }, 600);
      });
  

      \$('.redirection .pin-redirection').click(function(){
        \$('.redirection-details').removeClass('active');
        \$(this).parent().find('.redirection-details').toggleClass('active');
\t      \$(this).parent().find('.marker-details.tooltip-txt').addClass('d-none');
        \$(this).parent().addClass('z-1');
      });

      \$('.redirection .redirection-details-close').click(function(){
        \$(this).parent().toggleClass('active');
\t      \$(this).parent().parent().find('.marker-details.tooltip-txt').removeClass('d-none');
        \$(this).parent().parent().removeClass(\"z-1\");
      });

      var interTags=\"\";
      
      \$('.interactive-tags li a').click(function(){
          \$(this).toggleClass(\"active\");
      });
      \$(\".pulse\").addClass(\"d-none\");
      var autoSuggs = [];
      \$('.input-suggestions li a').each(function(){
          autoSuggs.push(\$(this).attr('data-tag'));
      });
      \$('.interactive-submit a').click(function(){       
        \$(\".pulse\").addClass(\"d-none\");
        \$(\".dark-map-overly\").addClass('d-block');
        //\$(\".dark-map-overly\").removeClass('d-none');
        setTimeout(function() { \$(\".dark-map-overly\").removeClass('d-block'); }, 2000);

        var thisTag = [];
\t\t  
\t\t    var searchText = \$('#search-text').val();// .toLowerCase();
        searchText = searchText.charAt(0).toUpperCase() + searchText.substr(1).toLowerCase();

\t\t\t  \$('.recommendation').hide();
       /*
\t if(searchText){
          if(autoSuggs.indexOf(searchText) > -1) {
              thisTag.push(searchText);
          } else {
              \$('.interactive-rec-tags li a').each(function(){
                  thisTag.push(\$(this).attr('data-tag'));
              });
              var suggestRec = \$('.recommendation p').html();
               //suggestRec = suggestRec.replace('%%%',\"'\"+searchText+\"'\");
               suggestRec = suggestRec.replace(/'([^\"]+)'/g, \"'\"+searchText+\"'\" );

               \$('.recommendation p').html(suggestRec);
              \$('.recommendation').show();
          }
        }
\t*/
    if(searchText){
    \$('.marker-all').each(function(){
        var pinTags = \$(this).attr(\"data-tag\");
        var Addition = [];
        if(pinTags && pinTags.toLowerCase().indexOf(searchText.toLowerCase()) >= 0)
        {
\t    if(pinTags.indexOf(',') >= 0)
\t    {
\t\tAddition = pinTags.split(',');
\t    }
\t    else
\t    {
\t\tAddition = [pinTags];
\t    }            
            thisTag.push(Addition[0]);
        }
    });
    if(thisTag.length === 0)
    {
        if(autoSuggs.indexOf(searchText) > -1) {
            thisTag.push(searchText); 
        } 
        else {
            \$('.interactive-rec-tags li a').each(function(){
                thisTag.push(\$(this).attr('data-tag'));
            });
            var suggestRec = \$('.recommendation p').html();
            //suggestRec = suggestRec.replace('%%%',\"'\"+searchText+\"'\");
            suggestRec = suggestRec.replace(/'([^\"]+)'/g, \"'\"+searchText+\"'\" );
            \$('.recommendation p').html(suggestRec);
            \$('.recommendation').show();
        }
    }
}\t  
        // if(thisTag.length <= 0) {
            \$('.interactive-tags li a.active').each(function(){
              thisTag.push(\$(this).attr('data-tag'));
            });
        // }
  
        if(thisTag.length > 0)
        {
          \$('.marker-all').each(function(){
            \$(this).removeClass(\"active\");
            interTags = \$(this).attr('data-tag');
            var arrayInterTags = [];
            if(interTags && interTags.indexOf(',') >= 0)
            {
              arrayInterTags = interTags.split(\",\");
            }
            else
            {
              arrayInterTags = interTags;
            }
            
            var intersectingColors = getArraysIntersection(thisTag, arrayInterTags);
            if (intersectingColors && intersectingColors.length !== 0){
              \$(this).addClass(\"active\");
            }
          });
        } else {
          \$('.marker-all').each(function(){
            \$(this).removeClass(\"active\");
            \$(this).addClass(\"active\");
          });
        }

          \$('.panel-heading a').click();
          \$(\".marker-all.active\").each(function(){
            \$(this).find(\".pulse\").removeClass(\"d-none\");
        });
      });
  
      function getArraysIntersection(a1,a2){
          if(a1 && a2)
          {
            return  a1.filter(function(n) { return a2.indexOf(n) !== -1;});
          }
          
      }
      \$('.interactive-map .search .input-group .form-control').click(function(){
          var legend = \$('.interactive-map .inside-wrapper .search .panel-heading a');
          if (legend.attr('aria-expanded') == \"false\"){
              legend.click();
          }
      });
      \$('.re-close').click(function(){
        \$(this).parent().css(\"display\",\"none\");
      })
      \$( \"#search-text\" ).autocomplete({
          source: autoSuggs,
          minLength: 3,
          position: { my : \"left top\", at: \"left bottom\" }
        });
  });
  
  
  var canvas, stage, exportRoot, anim_container, dom_overlay_container, fnStartAnimation;
  function init() {
    canvas = document.getElementById(\"canvas\");
    anim_container = document.getElementById(\"animation_container\");
    dom_overlay_container = document.getElementById(\"dom_overlay_container\");
    var comp=AdobeAn.getComposition(\"AE47AE7358FA4270B836247AEC0809F2\");
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
    exportRoot = new lib.hudayriatmapanimated();
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
  
  
  var swiperFull = new Swiper('.breaking-img .swiper-container', {
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      //effect: 'fade',
    });
    jQuery('.swiper-menu .swiper-container').each(function (index) {
      var mySwiper = new Swiper(jQuery(this)[0],{
        navigation: {
          nextEl: '.swiper-menu .swiper-button-next',
          prevEl: '.swiper-menu .swiper-button-prev',
        },
        observer: true,
        observeParents: true,
        touchRatio: 0,
        preventClicks: false,
        preventClicksPropagation: false,
        breakpoints: {
          640: {
            slidesPerView: 2,
            spaceBetween: 15,
          },
          768: {
            slidesPerView: 4,
            spaceBetween: 30,
          }
        }
      });
    });
  
    </script>

    ";
        }
        // line 549
        yield "
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
        return "themes/custom/hudayriyat/templates/layout/html.html.twig";
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
        return array (  604 => 549,  163 => 110,  161 => 109,  156 => 107,  152 => 106,  148 => 105,  144 => 104,  139 => 102,  136 => 101,  125 => 91,  77 => 46,  73 => 45,  69 => 44,  65 => 43,  60 => 41,  57 => 40,  53 => 38,  51 => 37,  49 => 36,  47 => 35,  45 => 32,  44 => 31,  43 => 30,  42 => 29,  41 => 28,  40 => 27,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/hudayriyat/templates/layout/html.html.twig", "C:\\xampp\\htdocs\\modorn\\web\\themes\\custom\\hudayriyat\\templates\\layout\\html.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 27, "if" => 37);
        static $filters = array("clean_class" => 29, "render" => 35, "escape" => 41, "safe_join" => 44, "t" => 102);
        static $functions = array("url" => 35);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'render', 'escape', 'safe_join', 't'],
                ['url'],
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
