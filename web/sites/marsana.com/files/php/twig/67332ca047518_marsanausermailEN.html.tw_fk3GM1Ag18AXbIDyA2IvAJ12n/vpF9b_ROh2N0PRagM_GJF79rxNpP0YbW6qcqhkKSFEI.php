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

/* sites/marsana.com/modules/custom/marsana_ajax_custom_webform/templates/marsanausermailEN.html.twig */
class __TwigTemplate_6ff4c795418b0ef110bfc141cbdd9f44 extends Template
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
                <table cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"width:100%;border-collapse:collapse;background-color:#304697\">

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
        // line 66
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["logo"] ?? null), 66, $this->source), "html", null, true);
        yield "\" width=\"200px\">
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
                                    <span style=\"font-weight: bold;\"> Dear ";
        // line 100
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_0 = ($context["data"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["name"] ?? null) : null), 100, $this->source), "html", null, true);
        yield "</span>
                                   <br> <br>

                                       Thank you for contacting Marsana.
                                        <br> <br>
                                        We will review your inquiry and get back to you as soon as possible.
                                        <br> <br>

                                        Should you have any further questions, please don\\'t hesitate to  <a href=\"http://marsana.ae\">contact us</a>.
                                        <br> <br>

                                        Regards,<br>
                                        <b>Marsana</b>
                                    </p>
                                </td>
                            </tr>
                            <!-- TITLE COMPONENT END -->
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
</html>

</html>";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["logo", "data"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "sites/marsana.com/modules/custom/marsana_ajax_custom_webform/templates/marsanausermailEN.html.twig";
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
        return array (  144 => 100,  107 => 66,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
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
                <table cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"width:100%;border-collapse:collapse;background-color:#304697\">

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
                                                   <img src=\"{{ logo }}\" width=\"200px\">
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
                                    <span style=\"font-weight: bold;\"> Dear {{ data['name'] }}</span>
                                   <br> <br>

                                       Thank you for contacting Marsana.
                                        <br> <br>
                                        We will review your inquiry and get back to you as soon as possible.
                                        <br> <br>

                                        Should you have any further questions, please don\\'t hesitate to  <a href=\"http://marsana.ae\">contact us</a>.
                                        <br> <br>

                                        Regards,<br>
                                        <b>Marsana</b>
                                    </p>
                                </td>
                            </tr>
                            <!-- TITLE COMPONENT END -->
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
</html>

</html>", "sites/marsana.com/modules/custom/marsana_ajax_custom_webform/templates/marsanausermailEN.html.twig", "/var/www/html/Hudayriyat/project/web/sites/marsana.com/modules/custom/marsana_ajax_custom_webform/templates/marsanausermailEN.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 66);
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
