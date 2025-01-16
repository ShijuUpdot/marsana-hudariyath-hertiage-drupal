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

/* modules/custom/ajax_custom_webform/templates/hudayriyatadminmail.html.twig */
class __TwigTemplate_6fef883f141e45b5a89adbe269399185 extends Template
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
        yield "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"en\">
  <head>
    <meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"x-ua-compatible\" content=\"IE=edge\">
    <meta name=\"format-detection\" content=\"telephone=no\">
    <meta name=\"format-detection\" content=\"date=no\">
    <meta name=\"format-detection\" content=\"address=no\">
    <meta name=\"format-detection\" content=\"email=no\">
    <title>Hudayriyat</TITLE>
    <!-- <style> -->
         <style type=\"text/css\">
        img {max-width:100% !important; }
        body,html {margin:0;padding:0;}
        @media only screen and (max-width: 600px) {
            .fontSize{font-size: 10px!important;
           }
          .removeResp {display:none !important;}
          .w3 {width:3% !important;}
          .w5 {width:5% !important;}
          .w10 {width:10% !important;}
          .w20 {width:20% !important;}
          .w30 {width:30% !important;}
          .w40 {width:40% !important;}
          .w50 {width:50% !important;}
          .w60 {width:60% !important;}
          .w70 {width:70% !important;}
          .w80 {width:80% !important;}
          .w90 {width:90% !important;}
          .w100 {width:100% !important;}
          .h10 {height:15px !important;}
          .h20 {height:30px !important;}
          .displayBlock {display:block !important;}
          .paddingclass{padding-left:16%}
         .tablee{
            table-layout:fixed!important;
            word-wrap: break-word;
         }
        }
      </style>
    <meta name=\"GENERATOR\" content=\"MSHTML 11.00.9600.18036\">
</head>
<body>
    <table align=\"center\" cellpadding=\"0\" cellspacing=\"0\" width=\"600\" style=\"width:600px;border-collapse:collapse;background-color:#fff;border:#978F76 1px solid\" class=\"w100\">
        <tbody>
        <!------------------------ HERO COMPONENT START ------------------------>
        <tr>
            <td width=\"100%\">
                <table cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"width:100%;border-collapse:collapse;background-color:#EAECEE\">
                    <tr>
                        <td width=\"150\" class=\"w100\">
                            <table cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"width:100%;border-collapse:collapse;\">
                                <tr>
                                    <td width=\"100%\" height=\"40\"> </td>
                                </tr>
                                <tr>
                                    <th width=\"150\" class=\"w100 displayBlock\">
                                        <table cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"width:100%;border-collapse:collapse;\">
                                            <tr>
                                                <td align=\"center\">
                                                   <img src=\"";
        // line 62
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["logo"] ?? null), 62, $this->source), "html", null, true);
        yield "\">
                                                </td>
                                            </tr>
                                        </table>
                                    </th>
                                </tr>
                                <tr>
                                    <td width=\"100%\" height=\"40\"> </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <!------------------------ HERO COMPONENT END ------------------------>
        <!------------------------ SPACER 30 START ------------------------>
        <!------------------------ TOP COMPONENT START ------------------------>
        <tr>
            <td width=\"100%\" height=\"45\"> </td>
        </tr>
        <tr>
            <td width=\"100%\">
                <table cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"width:100%;border-collapse:collapse;\">
                    <tr>
                        <td width=\"30\" class=\"w3\"></td>
                        <td width=\"540\" class=\"w100\">
                        <table cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"width:100%;border-collapse:collapse;\">
                            <!-- TITLE COMPONENT START -->
                            <tr>
                                <td style=\"font-family:Helvetica, sans-serif; color:#464646; text-align:left;line-height:30px\" align=\"left\">
                                    <p style=\"font-size: 14px!important; margin-top:6px;padding:0;margin-bottom:0;font-weight: lighter;\">
                                    <span style=\"font-weight: bold;\"> The contact form has been filled as follows: </span>
                                    </p>
                                </td>
                                </br>
                            </tr>
                            <!-- TITLE COMPONENT END -->
                            <tr>
                                <td width=\"140\">Enquiry </td> <td>";
        // line 101
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_0 = ($context["data"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["enquiry"] ?? null) : null), 101, $this->source), "html", null, true);
        yield "</td>
                            </tr>
                            <tr>
                                <td>First Name </td> <td> ";
        // line 104
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_1 = ($context["data"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["first_name"] ?? null) : null), 104, $this->source), "html", null, true);
        yield " </td>
                            </tr>
                            <tr>
                                <td>Last Name </td> <td> ";
        // line 107
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_2 = ($context["data"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["last_name"] ?? null) : null), 107, $this->source), "html", null, true);
        yield " </td>
                            </tr>
                            <tr>
                                <td>Email </td> <td> ";
        // line 110
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_3 = ($context["data"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["email"] ?? null) : null), 110, $this->source), "html", null, true);
        yield " </td>
                            </tr>
                            <tr>
                                <td>Country </td> <td>  ";
        // line 113
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_4 = ($context["data"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["country"] ?? null) : null), 113, $this->source), "html", null, true);
        yield " </td>
                            </tr>
                            <tr>
                                <td>Contact Number  </td> <td> ";
        // line 116
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_5 = ($context["data"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["contact_number"] ?? null) : null), 116, $this->source), "html", null, true);
        yield " </td>
                            </tr>
                            <tr>
                                <td>Message </td> <td> ";
        // line 119
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_6 = ($context["data"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["message"] ?? null) : null), 119, $this->source), "html", null, true);
        yield " </td>
                            </tr>
                        </table>
                        </td>
                        <td width=\"30\" class=\"removeResp\">&nbsp;</td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td width=\"100%\" height=\"40\"> </td>
        </tr>
        </tbody>
    </table>
</body>
</html>";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["logo", "data"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "modules/custom/ajax_custom_webform/templates/hudayriyatadminmail.html.twig";
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
        return array (  181 => 119,  175 => 116,  169 => 113,  163 => 110,  157 => 107,  151 => 104,  145 => 101,  103 => 62,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/custom/ajax_custom_webform/templates/hudayriyatadminmail.html.twig", "/var/www/html/Hudayriyat/project/web/modules/custom/ajax_custom_webform/templates/hudayriyatadminmail.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 62);
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
