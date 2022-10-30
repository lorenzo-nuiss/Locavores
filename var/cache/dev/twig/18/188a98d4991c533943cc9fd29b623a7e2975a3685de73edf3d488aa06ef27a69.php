<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* email/confirmation_email.html.twig */
class __TwigTemplate_86e3889951d54f13cf60ebc643706faf564dda90b49562632a646eef08a808c0 extends Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "email/confirmation_email.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "email/confirmation_email.html.twig"));

        // line 1
        echo "
<!DOCTYPE html>

<html lang=\"fr\" xmlns:o=\"urn:schemas-microsoft-com:office:office\" xmlns:v=\"urn:schemas-microsoft-com:vml\">

<head>
    <title></title>
    <meta charset=\"utf-8\" />
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\" />
    <!--[if mso]><xml><o:OfficeDocumentSettings><o:PixelsPerInch>96</o:PixelsPerInch><o:AllowPNG/></o:OfficeDocumentSettings></xml><![endif]-->
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 0;
        }

        a[x-apple-data-detectors] {
            color: inherit !important;
            text-decoration: inherit !important;
        }

        #MessageViewBody a {
            color: inherit;
            text-decoration: none;
        }

        p {
            line-height: inherit
        }

        @media (max-width:620px) {
            .icons-inner {
                text-align: center;
            }

            .icons-inner td {
                margin: 0 auto;
            }

            .row-content {
                width: 100% !important;
            }

            .mobile_hide {
                display: none;
            }

            .stack .column {
                width: 100%;
                display: block;
            }

            .mobile_hide {
                min-height: 0;
                max-height: 0;
                max-width: 0;
                overflow: hidden;
                font-size: 0px;
            }
        }
    </style>
</head>

<body style=\"background-color: #e7ebe1; margin: 0; padding: 0; -webkit-text-size-adjust: none; text-size-adjust: none;\">
    <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"nl-container\" role=\"presentation\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #e7ebe1;\" width=\"100%\">
        <tbody>
            <tr>
                <td>
                    <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"row row-1\" role=\"presentation\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt;\" width=\"100%\">
                        <tbody>
                            <tr>
                                <td>
                                    <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"row-content stack\" role=\"presentation\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt; color: #000000; width: 600px;\" width=\"600\">
                                        <tbody>
                                            <tr>
                                                <td class=\"column\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-left: 45px; padding-right: 45px; padding-top: 10px; padding-bottom: 35px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;\" width=\"100%\">
                                                    <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"image_block\" role=\"presentation\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt;\" width=\"100%\">
                                                        <tr>
                                                            <td style=\"width:100%;padding-right:0px;padding-left:0px;\">
                                                                ";
        // line 85
        echo "                                                            </td>
                                                        </tr>
                                                    </table>
                                                    <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"heading_block\" role=\"presentation\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt;\" width=\"100%\">
                                                        <tr>
                                                            <td style=\"width:100%;text-align:center;\">
                                                                <h1 style=\"margin: 0; color: #555555; font-size: 23px; font-family: Arial, Helvetica Neue, Helvetica, sans-serif; line-height: 120%; text-align: center; direction: ltr; font-weight: normal; letter-spacing: normal; margin-top: 0; margin-bottom: 0;\"><strong>Locavor</strong></h1>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"row row-2\" role=\"presentation\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt;\" width=\"100%\">
                        <tbody>
                            <tr>
                                <td>
                                    <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"row-content stack\" role=\"presentation\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #ffffff; color: #000000; width: 600px;\" width=\"600\">
                                        <tbody>
                                            <tr>
                                                <td class=\"column\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; border-bottom: 1px solid transparent; border-left: 1px solid transparent; border-right: 1px solid transparent; border-top: 1px solid transparent; padding-top: 60px; padding-bottom: 0px;\" width=\"100%\">
                                                    <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"heading_block\" role=\"presentation\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt;\" width=\"100%\">
                                                        <tr>
                                                            <td style=\"width:100%;text-align:center;\">
                                                                <h1 style=\"margin: 0; color: #555555; font-size: 23px; font-family: Arial, Helvetica Neue, Helvetica, sans-serif; line-height: 120%; text-align: center; direction: ltr; font-weight: normal; letter-spacing: normal; margin-top: 0; margin-bottom: 0;\"><strong>Activation de votre compte</strong></h1>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"row row-3\" role=\"presentation\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt;\" width=\"100%\">
                        <tbody>
                            <tr>
                                <td>
                                    <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"row-content stack\" role=\"presentation\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #ffffff; color: #000000; width: 600px;\" width=\"600\">
                                        <tbody>
                                            <tr>
                                                <td class=\"column\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; border-bottom: 1px solid transparent; border-left: 1px solid transparent; border-right: 1px solid transparent; border-top: 1px solid transparent; padding-top: 10px; padding-bottom: 40px;\" width=\"100%\">
                                                    <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"text_block\" role=\"presentation\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;\" width=\"100%\">
                                                        <tr>
                                                            <td style=\"padding-top:10px;padding-right:45px;padding-bottom:10px;padding-left:45px;\">
                                                                <div style=\"font-family: sans-serif\">
                                                                    <div style=\"font-size: 14px; mso-line-height-alt: 21px; color: #555555; line-height: 1.5; font-family: Arial, Helvetica Neue, Helvetica, sans-serif;\">
                                                                        <p style=\"margin: 0; font-size: 17px; text-align: center; mso-line-height-alt: 25.5px; letter-spacing: normal;\"><span style=\"font-size:17px;\">Vous avez créé un compte sur notre site, veuillez cliquer sur le lien ci-dessous pour l'activer</span></p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                    <table border=\"0\" cellpadding=\"15\" cellspacing=\"0\" class=\"divider_block\" role=\"presentation\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt;\" width=\"100%\">
                                                        <tr>
                                                            <td>
                                                                <div align=\"center\">
                                                                    <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt;\" width=\"85%\">
                                                                        <tr>
                                                                            <td class=\"divider_inner\" style=\"font-size: 1px; line-height: 1px; border-top: 1px solid #BBBBBB;\"><span> </span></td>
                                                                        </tr>
                                                                    </table>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"row row-6\" role=\"presentation\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt;\" width=\"100%\">
                        <tbody>
                            <tr>
                                <td>
                                    <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"row-content stack\" role=\"presentation\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #ffffff; color: #000000; width: 600px;\" width=\"600\">
                                        <tbody>
                                            <tr>
                                                <td class=\"column\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 35px; padding-bottom: 40px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;\" width=\"100%\">
                                                    <table border=\"0\" cellpadding=\"10\" cellspacing=\"0\" class=\"button_block\" role=\"presentation\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt;\" width=\"100%\">
                                                        <tr>
                                                            <td>
                                                                <div align=\"center\">
                                                                 <!--[if mso]><v:roundrect xmlns:v=\"urn:schemas-microsoft-com:vml\" xmlns:w=\"urn:schemas-microsoft-com:office:word\" href=\"google\" style=\"height:42px;width:153px;v-text-anchor:middle;\" arcsize=\"10%\" stroke=\"false\" fillcolor=\"#738f3f\"><w:anchorlock/><v:textbox inset=\"0px,0px,0px,0px\"><center style=\"color:#ffffff; font-family:Arial, sans-serif; font-size:16px\"><![endif]-->
                                                                 \t<a href=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("activation", ["token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new RuntimeError('Variable "token" does not exist.', 179, $this->source); })())])), "html", null, true);
        echo "\" style=\"text-decoration:none;display:inline-block;color:#ffffff;background-color:#738f3f;border-radius:4px;width:auto;border-top:1px solid #738f3f;border-right:1px solid #738f3f;border-bottom:1px solid #738f3f;border-left:1px solid #738f3f;padding-top:5px;padding-bottom:5px;font-family:Arial, Helvetica Neue, Helvetica, sans-serif;text-align:center;mso-border-alt:none;word-break:keep-all;\" target=\"_blank\"><span style=\"padding-left:40px;padding-right:40px;font-size:16px;display:inline-block;letter-spacing:normal;\">
                                                                     <span style=\"font-size: 16px; line-height: 2; word-break: break-word; mso-line-height-alt: 32px;\">Cliquez-içi</span></span></a>
                                                                 <!--[if mso]></center></v:textbox></v:roundrect><![endif]-->

                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                    <table border=\"0\" cellpadding=\"10\" cellspacing=\"0\" class=\"text_block\" role=\"presentation\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;\" width=\"100%\">
                                                        <tr>
                                                            <td>
                                                                <div style=\"font-family: sans-serif\">
                                                                    <div style=\"font-size: 14px; mso-line-height-alt: 16.8px; color: #555555; line-height: 1.2; font-family: Arial, Helvetica Neue, Helvetica, sans-serif;\">
                                                                        <p style=\"margin: 0; font-size: 14px; text-align: center;\"><a href=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home")), "html", null, true);
        echo "\" style=\"color: #738f3f;\" target=\"_blank\">Cliquez içi</a> pour vous rendre sur le site Locavor</p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"row row-7\" role=\"presentation\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt;\" width=\"100%\">
                        <tbody>
                            <tr>
                                <td>
                                    <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"row-content stack\" role=\"presentation\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt; color: #000000; width: 600px;\" width=\"600\">
                                        <tbody>
                                            <tr>
                                                <td class=\"column\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 5px; padding-bottom: 5px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;\" width=\"100%\">
                                                    <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"icons_block\" role=\"presentation\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt;\" width=\"100%\">
                                                        <tr>
                                                            <td style=\"color:#9d9d9d;font-family:inherit;font-size:15px;padding-bottom:5px;padding-top:5px;text-align:center;\">
                                                                <table cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt;\" width=\"100%\">
                                                                    <tr>
                                                                        <td style=\"text-align:center;\">
                                                                            <!--[if vml]><table align=\"left\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"display:inline-block;padding-left:0px;padding-right:0px;mso-table-lspace: 0pt;mso-table-rspace: 0pt;\"><![endif]-->
                                                                            <!--[if !vml]><!-->
                                                                            <table cellpadding=\"0\" cellspacing=\"0\" class=\"icons-inner\" role=\"presentation\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt; display: inline-block; margin-right: -4px; padding-left: 0px; padding-right: 0px;\">
                                                                                <!--<![endif]-->
                                                                                <tr>
                                                                                    <td style=\"font-family:Arial, Helvetica Neue, Helvetica, sans-serif;font-size:15px;color:#9d9d9d;vertical-align:middle;letter-spacing:undefined;text-align:center;\"><a href=\"https://www.designedwithbee.com/\" style=\"color:#9d9d9d;text-decoration:none;\">Designed with BEE</a></td>
                                                                                </tr>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        </tbody>
    </table><!-- End -->
</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "email/confirmation_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 192,  224 => 179,  128 => 85,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<!DOCTYPE html>

<html lang=\"fr\" xmlns:o=\"urn:schemas-microsoft-com:office:office\" xmlns:v=\"urn:schemas-microsoft-com:vml\">

<head>
    <title></title>
    <meta charset=\"utf-8\" />
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\" />
    <!--[if mso]><xml><o:OfficeDocumentSettings><o:PixelsPerInch>96</o:PixelsPerInch><o:AllowPNG/></o:OfficeDocumentSettings></xml><![endif]-->
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 0;
        }

        a[x-apple-data-detectors] {
            color: inherit !important;
            text-decoration: inherit !important;
        }

        #MessageViewBody a {
            color: inherit;
            text-decoration: none;
        }

        p {
            line-height: inherit
        }

        @media (max-width:620px) {
            .icons-inner {
                text-align: center;
            }

            .icons-inner td {
                margin: 0 auto;
            }

            .row-content {
                width: 100% !important;
            }

            .mobile_hide {
                display: none;
            }

            .stack .column {
                width: 100%;
                display: block;
            }

            .mobile_hide {
                min-height: 0;
                max-height: 0;
                max-width: 0;
                overflow: hidden;
                font-size: 0px;
            }
        }
    </style>
</head>

<body style=\"background-color: #e7ebe1; margin: 0; padding: 0; -webkit-text-size-adjust: none; text-size-adjust: none;\">
    <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"nl-container\" role=\"presentation\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #e7ebe1;\" width=\"100%\">
        <tbody>
            <tr>
                <td>
                    <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"row row-1\" role=\"presentation\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt;\" width=\"100%\">
                        <tbody>
                            <tr>
                                <td>
                                    <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"row-content stack\" role=\"presentation\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt; color: #000000; width: 600px;\" width=\"600\">
                                        <tbody>
                                            <tr>
                                                <td class=\"column\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-left: 45px; padding-right: 45px; padding-top: 10px; padding-bottom: 35px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;\" width=\"100%\">
                                                    <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"image_block\" role=\"presentation\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt;\" width=\"100%\">
                                                        <tr>
                                                            <td style=\"width:100%;padding-right:0px;padding-left:0px;\">
                                                                {# <div align=\"center\" style=\"line-height:10px\"><img src=\"{{ asset('/images/logo-locavor.jpg') }}\" style=\"display: block; height: auto; border: 0; width: 100px; max-width: 100%;\" width=\"100\" /></div> #}
                                                            </td>
                                                        </tr>
                                                    </table>
                                                    <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"heading_block\" role=\"presentation\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt;\" width=\"100%\">
                                                        <tr>
                                                            <td style=\"width:100%;text-align:center;\">
                                                                <h1 style=\"margin: 0; color: #555555; font-size: 23px; font-family: Arial, Helvetica Neue, Helvetica, sans-serif; line-height: 120%; text-align: center; direction: ltr; font-weight: normal; letter-spacing: normal; margin-top: 0; margin-bottom: 0;\"><strong>Locavor</strong></h1>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"row row-2\" role=\"presentation\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt;\" width=\"100%\">
                        <tbody>
                            <tr>
                                <td>
                                    <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"row-content stack\" role=\"presentation\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #ffffff; color: #000000; width: 600px;\" width=\"600\">
                                        <tbody>
                                            <tr>
                                                <td class=\"column\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; border-bottom: 1px solid transparent; border-left: 1px solid transparent; border-right: 1px solid transparent; border-top: 1px solid transparent; padding-top: 60px; padding-bottom: 0px;\" width=\"100%\">
                                                    <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"heading_block\" role=\"presentation\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt;\" width=\"100%\">
                                                        <tr>
                                                            <td style=\"width:100%;text-align:center;\">
                                                                <h1 style=\"margin: 0; color: #555555; font-size: 23px; font-family: Arial, Helvetica Neue, Helvetica, sans-serif; line-height: 120%; text-align: center; direction: ltr; font-weight: normal; letter-spacing: normal; margin-top: 0; margin-bottom: 0;\"><strong>Activation de votre compte</strong></h1>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"row row-3\" role=\"presentation\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt;\" width=\"100%\">
                        <tbody>
                            <tr>
                                <td>
                                    <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"row-content stack\" role=\"presentation\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #ffffff; color: #000000; width: 600px;\" width=\"600\">
                                        <tbody>
                                            <tr>
                                                <td class=\"column\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; border-bottom: 1px solid transparent; border-left: 1px solid transparent; border-right: 1px solid transparent; border-top: 1px solid transparent; padding-top: 10px; padding-bottom: 40px;\" width=\"100%\">
                                                    <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"text_block\" role=\"presentation\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;\" width=\"100%\">
                                                        <tr>
                                                            <td style=\"padding-top:10px;padding-right:45px;padding-bottom:10px;padding-left:45px;\">
                                                                <div style=\"font-family: sans-serif\">
                                                                    <div style=\"font-size: 14px; mso-line-height-alt: 21px; color: #555555; line-height: 1.5; font-family: Arial, Helvetica Neue, Helvetica, sans-serif;\">
                                                                        <p style=\"margin: 0; font-size: 17px; text-align: center; mso-line-height-alt: 25.5px; letter-spacing: normal;\"><span style=\"font-size:17px;\">Vous avez créé un compte sur notre site, veuillez cliquer sur le lien ci-dessous pour l'activer</span></p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                    <table border=\"0\" cellpadding=\"15\" cellspacing=\"0\" class=\"divider_block\" role=\"presentation\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt;\" width=\"100%\">
                                                        <tr>
                                                            <td>
                                                                <div align=\"center\">
                                                                    <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt;\" width=\"85%\">
                                                                        <tr>
                                                                            <td class=\"divider_inner\" style=\"font-size: 1px; line-height: 1px; border-top: 1px solid #BBBBBB;\"><span> </span></td>
                                                                        </tr>
                                                                    </table>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"row row-6\" role=\"presentation\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt;\" width=\"100%\">
                        <tbody>
                            <tr>
                                <td>
                                    <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"row-content stack\" role=\"presentation\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #ffffff; color: #000000; width: 600px;\" width=\"600\">
                                        <tbody>
                                            <tr>
                                                <td class=\"column\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 35px; padding-bottom: 40px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;\" width=\"100%\">
                                                    <table border=\"0\" cellpadding=\"10\" cellspacing=\"0\" class=\"button_block\" role=\"presentation\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt;\" width=\"100%\">
                                                        <tr>
                                                            <td>
                                                                <div align=\"center\">
                                                                 <!--[if mso]><v:roundrect xmlns:v=\"urn:schemas-microsoft-com:vml\" xmlns:w=\"urn:schemas-microsoft-com:office:word\" href=\"google\" style=\"height:42px;width:153px;v-text-anchor:middle;\" arcsize=\"10%\" stroke=\"false\" fillcolor=\"#738f3f\"><w:anchorlock/><v:textbox inset=\"0px,0px,0px,0px\"><center style=\"color:#ffffff; font-family:Arial, sans-serif; font-size:16px\"><![endif]-->
                                                                 \t<a href=\"{{ absolute_url(path('activation', {'token': token})) }}\" style=\"text-decoration:none;display:inline-block;color:#ffffff;background-color:#738f3f;border-radius:4px;width:auto;border-top:1px solid #738f3f;border-right:1px solid #738f3f;border-bottom:1px solid #738f3f;border-left:1px solid #738f3f;padding-top:5px;padding-bottom:5px;font-family:Arial, Helvetica Neue, Helvetica, sans-serif;text-align:center;mso-border-alt:none;word-break:keep-all;\" target=\"_blank\"><span style=\"padding-left:40px;padding-right:40px;font-size:16px;display:inline-block;letter-spacing:normal;\">
                                                                     <span style=\"font-size: 16px; line-height: 2; word-break: break-word; mso-line-height-alt: 32px;\">Cliquez-içi</span></span></a>
                                                                 <!--[if mso]></center></v:textbox></v:roundrect><![endif]-->

                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                    <table border=\"0\" cellpadding=\"10\" cellspacing=\"0\" class=\"text_block\" role=\"presentation\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;\" width=\"100%\">
                                                        <tr>
                                                            <td>
                                                                <div style=\"font-family: sans-serif\">
                                                                    <div style=\"font-size: 14px; mso-line-height-alt: 16.8px; color: #555555; line-height: 1.2; font-family: Arial, Helvetica Neue, Helvetica, sans-serif;\">
                                                                        <p style=\"margin: 0; font-size: 14px; text-align: center;\"><a href=\"{{ absolute_url(path('home')) }}\" style=\"color: #738f3f;\" target=\"_blank\">Cliquez içi</a> pour vous rendre sur le site Locavor</p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"row row-7\" role=\"presentation\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt;\" width=\"100%\">
                        <tbody>
                            <tr>
                                <td>
                                    <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"row-content stack\" role=\"presentation\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt; color: #000000; width: 600px;\" width=\"600\">
                                        <tbody>
                                            <tr>
                                                <td class=\"column\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 5px; padding-bottom: 5px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;\" width=\"100%\">
                                                    <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"icons_block\" role=\"presentation\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt;\" width=\"100%\">
                                                        <tr>
                                                            <td style=\"color:#9d9d9d;font-family:inherit;font-size:15px;padding-bottom:5px;padding-top:5px;text-align:center;\">
                                                                <table cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt;\" width=\"100%\">
                                                                    <tr>
                                                                        <td style=\"text-align:center;\">
                                                                            <!--[if vml]><table align=\"left\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"display:inline-block;padding-left:0px;padding-right:0px;mso-table-lspace: 0pt;mso-table-rspace: 0pt;\"><![endif]-->
                                                                            <!--[if !vml]><!-->
                                                                            <table cellpadding=\"0\" cellspacing=\"0\" class=\"icons-inner\" role=\"presentation\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt; display: inline-block; margin-right: -4px; padding-left: 0px; padding-right: 0px;\">
                                                                                <!--<![endif]-->
                                                                                <tr>
                                                                                    <td style=\"font-family:Arial, Helvetica Neue, Helvetica, sans-serif;font-size:15px;color:#9d9d9d;vertical-align:middle;letter-spacing:undefined;text-align:center;\"><a href=\"https://www.designedwithbee.com/\" style=\"color:#9d9d9d;text-decoration:none;\">Designed with BEE</a></td>
                                                                                </tr>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        </tbody>
    </table><!-- End -->
</body>

</html>", "email/confirmation_email.html.twig", "C:\\code\\xamp\\htdocs\\Locavores\\templates\\email\\confirmation_email.html.twig");
    }
}
