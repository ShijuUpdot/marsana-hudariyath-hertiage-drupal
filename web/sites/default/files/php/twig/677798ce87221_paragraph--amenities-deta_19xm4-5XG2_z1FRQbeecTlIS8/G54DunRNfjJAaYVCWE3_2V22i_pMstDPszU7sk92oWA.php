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

/* themes/custom/hudayriyat/templates/paragraphs/amenities/paragraph--amenities-details--location.html.twig */
class __TwigTemplate_71232ee54bd3e552b2b726056181d82b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'paragraph' => [$this, 'block_paragraph'],
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension(SandboxExtension::class);
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 42
        $context["classes"] = ["paragraph", ("paragraph--type--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source,         // line 44
($context["paragraph"] ?? null), "bundle", [], "any", false, false, true, 44), 44, $this->source))), ((        // line 45
($context["view_mode"] ?? null)) ? (("paragraph--view-mode--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 45, $this->source)))) : ("")), (( !CoreExtension::getAttribute($this->env, $this->source,         // line 46
($context["paragraph"] ?? null), "isPublished", [], "method", false, false, true, 46)) ? ("paragraph--unpublished") : (""))];
        // line 49
        yield from $this->unwrap()->yieldBlock('paragraph', $context, $blocks);
        // line 86
        yield "
<script>
function initialize() {
\t//if(document.getElementById(\"map_canvas\")) { alert(9); return false; }
    var map;
    var bounds = new google.maps.LatLngBounds();
    var mapOptions = {
        mapTypeId: 'roadmap'
    };
                    
    // Display a map on the page
    map = new google.maps.Map(document.getElementById(\"map_canvas\"), mapOptions);
    map.setTilt(45);
        
    // Multiple Markers
    var markers = [
\t\t[\"Fenix escooter location 1\",24.413805,54.348315],
\t\t[\"Fenix escooter location 1\",24.41384,54.347419],
\t\t[\"Fenix escooter location 1\",24.41681,54.33375],
\t\t[\"Fenix escooter location 1\",24.417003,54.331261],
\t\t[\"Fenix escooter location 1\",24.41701,54.33068],
\t\t[\"Fenix escooter location 1\",24.41719,54.33007],
\t\t[\"Fenix escooter location 1\",24.41419,54.34685]
    ];
                        
    // Info Window Content
    var infoWindowContent = [
        ['<div class=\"info_content\">' +
        '<h3>London Eye</h3>' +
        '<p>The London Eye is a giant Ferris wheel situated on the banks of the River Thames. The entire structure is 135 metres (443 ft) tall and the wheel has a diameter of 120 metres (394 ft).</p>' +        '</div>'],
        ['<div class=\"info_content\">' +
        '<h3>Palace of Westminster</h3>' +
        '<p>The Palace of Westminster is the meeting place of the House of Commons and the House of Lords, the two houses of the Parliament of the United Kingdom. Commonly known as the Houses of Parliament after its tenants.</p>' +
        '</div>']
    ];
        
    // Display multiple markers on a map
    var infoWindow = new google.maps.InfoWindow(), marker, i;
    
    // Loop through our array of markers & place each one on the map  
    for( i = 0; i < markers.length; i++ ) {
        var position = new google.maps.LatLng(markers[i][1], markers[i][2]), markerTitle= markers[i][0];
        bounds.extend(position);
        marker = new google.maps.Marker({
            position: position,
            map: map,
            title: markerTitle
        });
        
        // Allow each marker to have an info window    
        google.maps.event.addListener(marker, 'click', (function(marker, i) {
            return function() {
                infoWindow.setContent(markerTitle);
                infoWindow.open(map, marker);
            }
        })(marker, i));

        // Automatically center the map fitting all markers on the screen
        map.fitBounds(bounds);
    }

    // Override our map zoom level once our fitBounds function runs (Make sure it only runs once)
    var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function(event) {
        this.setZoom(16);
        google.maps.event.removeListener(boundsListener);
    });
    
}
initialize();
</script>";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["paragraph", "view_mode", "content", "langcode"]);        return; yield '';
    }

    // line 49
    public function block_paragraph($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 50
        yield "  ";
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        return; yield '';
    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 51
        yield "  ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_location_details", [], "any", false, false, true, 51));
        foreach ($context['_seq'] as $context["key"] => $context["item"]) {
            // line 52
            yield "  ";
            if ((Twig\Extension\CoreExtension::first($this->env->getCharset(), $context["key"]) != "#")) {
                // line 53
                yield "  ";
                if (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_0 = CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_1 = (($__internal_compile_2 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_location_details", [], "any", false, false, true, 53)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[$context["key"]] ?? null) : null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["#paragraph"] ?? null) : null), "field_locat", [], "any", false, false, true, 53)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null), "value", [], "any", false, false, true, 53))) {
                    // line 54
                    yield "  ";
                    if ((($context["langcode"] ?? null) == "en")) {
                        // line 55
                        yield "\t  ";
                        $context["directionsTitle"] = Drupal\twig_tweak\TwigTweakExtension::drupalConfig("hudayriyat_custom_configs.settings", "custom_configs_directions_title_en");
                        // line 56
                        yield "  ";
                    } else {
                        // line 57
                        yield "    ";
                        $context["directionsTitle"] = Drupal\twig_tweak\TwigTweakExtension::drupalConfig("hudayriyat_custom_configs.settings", "custom_configs_directions_title_ar");
                        // line 58
                        yield "  ";
                    }
                    // line 59
                    yield "  ";
                    $context["url"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<current>")));
                    // line 60
                    yield "
<script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyByibP_BbGWDRUn-X3PXD36_jDmsIwlYic&v=3.0&sensor=true&language=ee&dummy=dummy.js\"></script>
    
    <div class=\"row\">
        <div class=\"col\">
          <p class=\"detailed-txt opacity-text bold\">";
                    // line 65
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_3 = CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_4 = (($__internal_compile_5 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_location_details", [], "any", false, false, true, 65)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[$context["key"]] ?? null) : null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["#paragraph"] ?? null) : null), "field_location_at", [], "any", false, false, true, 65)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[0] ?? null) : null), "value", [], "any", false, false, true, 65), 65, $this->source))), "html", null, true);
                    yield "</p>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col\">
\t\t\t";
                    // line 70
                    if (!CoreExtension::inFilter("fenix", ($context["url"] ?? null))) {
                        // line 71
                        yield "\t\t\t\t<div class=\"map-img\" id=\"map_canvas1\">
\t\t\t\t\t<iframe src=\"";
                        // line 72
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_6 = CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_7 = (($__internal_compile_8 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_location_details", [], "any", false, false, true, 72)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[$context["key"]] ?? null) : null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["#paragraph"] ?? null) : null), "field_location_iframe_url", [], "any", false, false, true, 72)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[0] ?? null) : null), "value", [], "any", false, false, true, 72), 72, $this->source), "html", null, true);
                        yield "\" width=\"100%\" height=\"400\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>  
\t\t\t\t</div>
\t\t\t";
                    } else {
                        // line 75
                        yield "\t\t\t\t<div class=\"map-img\" id=\"map_canvas\">
\t\t\t\t</div>
\t\t\t";
                    }
                    // line 78
                    yield "        </div>
    </div>
    <br><br>
  ";
                }
                // line 82
                yield "  ";
            }
            // line 83
            yield "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        yield "  ";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/custom/hudayriyat/templates/paragraphs/amenities/paragraph--amenities-details--location.html.twig";
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
        return array (  212 => 84,  206 => 83,  203 => 82,  197 => 78,  192 => 75,  186 => 72,  183 => 71,  181 => 70,  173 => 65,  166 => 60,  163 => 59,  160 => 58,  157 => 57,  154 => 56,  151 => 55,  148 => 54,  145 => 53,  142 => 52,  137 => 51,  128 => 50,  124 => 49,  49 => 86,  47 => 49,  45 => 46,  44 => 45,  43 => 44,  42 => 42,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/hudayriyat/templates/paragraphs/amenities/paragraph--amenities-details--location.html.twig", "/var/www/html/Hudayriyat/project/web/themes/custom/hudayriyat/templates/paragraphs/amenities/paragraph--amenities-details--location.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 42, "block" => 49, "for" => 51, "if" => 52);
        static $filters = array("clean_class" => 44, "first" => 52, "length" => 53, "render" => 59, "escape" => 65, "trim" => 65, "striptags" => 65, "raw" => 65);
        static $functions = array("drupal_config" => 55, "url" => 59);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'for', 'if'],
                ['clean_class', 'first', 'length', 'render', 'escape', 'trim', 'striptags', 'raw'],
                ['drupal_config', 'url'],
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
