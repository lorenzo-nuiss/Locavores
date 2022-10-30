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

/* email/visiteur_message.html.twig */
class __TwigTemplate_c37f4e5eb96035888926bde050780e658bf0b684b1bc9b4a8c771921355cd25e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "email/visiteur_message.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "email/visiteur_message.html.twig"));

        // line 1
        echo "<!DOCTYPE html>

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
        // line 84
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
                                                                <h1 style=\"margin: 0; color: #555555; font-size: 23px; font-family: Arial, Helvetica Neue, Helvetica, sans-serif; line-height: 120%; text-align: center; direction: ltr; font-weight: normal; letter-spacing: normal; margin-top: 0; margin-bottom: 0;\"><strong>Vous avez reçu un message</strong></h1>
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
                                                                        <p style=\"margin: 0; font-size: 17px; text-align: center; mso-line-height-alt: 25.5px; letter-spacing: normal;\"><span style=\"font-size:17px;\">Un utilisateur vous a envoyé un message en passant par le site Locavor</span></p>
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
                    <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"row row-4 mobile_hide\" role=\"presentation\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt;\" width=\"100%\">
                        <tbody>
                            <tr>
                                <td>
                                    <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"row-content stack\" role=\"presentation\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #ffffff; color: #000000; width: 600px;\" width=\"600\">
                                        <tbody>
                                            <tr>
                                                <td class=\"column\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-left: 60px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;\" width=\"33.333333333333336%\">
                                                    <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"text_block\" role=\"presentation\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;\" width=\"100%\">
                                                        <tr>
                                                            <td style=\"padding-top:28px;padding-right:03px;padding-bottom:03px;padding-left:03px;\">
                                                                <div style=\"font-family: sans-serif\">
                                                                    <div style=\"font-size: 14px; mso-line-height-alt: 16.8px; color: #555555; line-height: 1.2; font-family: Arial, Helvetica Neue, Helvetica, sans-serif;\">
                                                                        <p style=\"margin: 0; font-size: 14px; text-align: center;\"><strong>Nom :<br /></strong></p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                    <table border=\"0\" cellpadding=\"3\" cellspacing=\"0\" class=\"text_block\" role=\"presentation\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;\" width=\"100%\">
                                                        <tr>
                                                            <td>
                                                                <div style=\"font-family: sans-serif\">
                                                                    <div style=\"font-size: 14px; mso-line-height-alt: 16.8px; color: #555555; line-height: 1.2; font-family: Arial, Helvetica Neue, Helvetica, sans-serif;\">
                                                                        <p style=\"margin: 0; font-size: 14px; text-align: center;\"><strong>Email :<br /></strong></p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                    <table border=\"0\" cellpadding=\"3\" cellspacing=\"0\" class=\"text_block\" role=\"presentation\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;\" width=\"100%\">
                                                        <tr>
                                                            <td>
                                                                <div style=\"font-family: sans-serif\">
                                                                    <div style=\"font-size: 14px; mso-line-height-alt: 16.8px; color: #555555; line-height: 1.2; font-family: Arial, Helvetica Neue, Helvetica, sans-serif;\">
                                                                        <p style=\"margin: 0; font-size: 14px; text-align: center;\"><strong>Telephone:<br /></strong></p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                    <table border=\"0\" cellpadding=\"3\" cellspacing=\"0\" class=\"text_block\" role=\"presentation\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;\" width=\"100%\">
                                                        <tr>
                                                            <td>
                                                                <div style=\"font-family: sans-serif\">
                                                                    <div style=\"font-size: 14px; mso-line-height-alt: 16.8px; color: #555555; line-height: 1.2; font-family: Arial, Helvetica Neue, Helvetica, sans-serif;\">
                                                                        <p style=\"margin: 0; font-size: 14px; text-align: center;\"><strong>Statut:<br /></strong></p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                    <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"text_block\" role=\"presentation\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;\" width=\"100%\">
                                                        <tr>
                                                            <td style=\"padding-top:3px;padding-right:3px;padding-bottom:8px;padding-left:3px;\">
                                                                <div style=\"font-family: sans-serif\">
                                                                    <div style=\"font-size: 14px; mso-line-height-alt: 16.8px; color: #555555; line-height: 1.2; font-family: Arial, Helvetica Neue, Helvetica, sans-serif;\">
                                                                        <p style=\"margin: 0; font-size: 14px; text-align: center;\"><strong>Message:<br /></strong></p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                                <td class=\"column\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-right: 45px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;\" width=\"66.66666666666667%\">
                                                    <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"text_block\" role=\"presentation\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;\" width=\"100%\">
                                                        <tr>
                                                            <td style=\"padding-top:28px;padding-right:3px;padding-bottom:3px;padding-left:3px;\">
                                                                <div style=\"font-family: sans-serif\">
                                                                    <div style=\"font-size: 14px; mso-line-height-alt: 16.8px; color: #555555; line-height: 1.2; font-family: Arial, Helvetica Neue, Helvetica, sans-serif;\">
                                                                        <p style=\"margin: 0; font-size: 14px;\">";
        // line 235
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 235, $this->source); })()), "nom", [], "any", false, false, false, 235), "html", null, true);
        echo "</p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                    <table border=\"0\" cellpadding=\"3\" cellspacing=\"0\" class=\"text_block\" role=\"presentation\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;\" width=\"100%\">
                                                        <tr>
                                                            <td>
                                                                <div style=\"font-family: sans-serif\">
                                                                    <div style=\"font-size: 14px; mso-line-height-alt: 16.8px; color: #555555; line-height: 1.2; font-family: Arial, Helvetica Neue, Helvetica, sans-serif;\">
                                                                        <p style=\"margin: 0; font-size: 14px;\">";
        // line 246
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 246, $this->source); })()), "email", [], "any", false, false, false, 246), "html", null, true);
        echo "</p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                    <table border=\"0\" cellpadding=\"3\" cellspacing=\"0\" class=\"text_block\" role=\"presentation\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;\" width=\"100%\">
                                                        <tr>
                                                            <td>
                                                                <div style=\"font-family: sans-serif\">
                                                                    <div style=\"font-size: 14px; mso-line-height-alt: 16.8px; color: #555555; line-height: 1.2; font-family: Arial, Helvetica Neue, Helvetica, sans-serif;\">
                                                                        <p style=\"margin: 0; font-size: 14px;\">";
        // line 257
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 257, $this->source); })()), "telephone", [], "any", false, false, false, 257), "html", null, true);
        echo "</p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                    <table border=\"0\" cellpadding=\"3\" cellspacing=\"0\" class=\"text_block\" role=\"presentation\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;\" width=\"100%\">
                                                        <tr>
                                                            <td>
                                                                <div style=\"font-family: sans-serif\">
                                                                    <div style=\"font-size: 14px; mso-line-height-alt: 16.8px; color: #555555; line-height: 1.2; font-family: Arial, Helvetica Neue, Helvetica, sans-serif;\">
                                                                        <p style=\"margin: 0; font-size: 14px;\">";
        // line 268
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 268, $this->source); })()), "statut", [], "any", false, false, false, 268), "html", null, true);
        echo "</p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                    <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"text_block\" role=\"presentation\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;\" width=\"100%\">
                                                        <tr>
                                                            <td style=\"padding-top:3px;padding-right:3px;padding-bottom:8px;padding-left:3px;\">
                                                                <div style=\"font-family: sans-serif\">
                                                                    <div style=\"font-size: 14px; mso-line-height-alt: 16.8px; color: #555555; line-height: 1.2; font-family: Arial, Helvetica Neue, Helvetica, sans-serif;\">
                                                                        <p style=\"margin: 0; font-size: 14px;\">";
        // line 279
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 279, $this->source); })()), "message", [], "any", false, false, false, 279), "html", null, true);
        echo "</p>
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
                    <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"row row-5\" role=\"presentation\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt;\" width=\"100%\">
                        <tbody>
                            <tr>
                                <td>
                                    <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"row-content stack\" role=\"presentation\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #ffffff; color: #000000; width: 600px;\" width=\"600\">
                                        <tbody>
                                            <tr>
                                                <td class=\"column\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-left: 20px; padding-right: 20px; padding-top: 5px; padding-bottom: 5px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;\" width=\"100%\">
                                                    <table border=\"0\" cellpadding=\"5\" cellspacing=\"0\" class=\"text_block\" role=\"presentation\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;\" width=\"100%\">
                                                        <tr>
                                                            <td>
                                                                <div style=\"font-family: sans-serif\">
                                                                    <div style=\"font-size: 14px; mso-line-height-alt: 16.8px; color: #555555; line-height: 1.2; font-family: Arial, Helvetica Neue, Helvetica, sans-serif;\">
                                                                        <p style=\"margin: 0; font-size: 14px;\">Nom : ";
        // line 306
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 306, $this->source); })()), "nom", [], "any", false, false, false, 306), "html", null, true);
        echo "</p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                    <table border=\"0\" cellpadding=\"5\" cellspacing=\"0\" class=\"text_block\" role=\"presentation\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;\" width=\"100%\">
                                                        <tr>
                                                            <td>
                                                                <div style=\"font-family: sans-serif\">
                                                                    <div style=\"font-size: 14px; mso-line-height-alt: 16.8px; color: #555555; line-height: 1.2; font-family: Arial, Helvetica Neue, Helvetica, sans-serif;\">
                                                                        <p style=\"margin: 0; font-size: 14px;\">Email : ";
        // line 317
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 317, $this->source); })()), "email", [], "any", false, false, false, 317), "html", null, true);
        echo "</p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                    <table border=\"0\" cellpadding=\"5\" cellspacing=\"0\" class=\"text_block\" role=\"presentation\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;\" width=\"100%\">
                                                        <tr>
                                                            <td>
                                                                <div style=\"font-family: sans-serif\">
                                                                    <div style=\"font-size: 14px; mso-line-height-alt: 16.8px; color: #555555; line-height: 1.2; font-family: Arial, Helvetica Neue, Helvetica, sans-serif;\">
                                                                        <p style=\"margin: 0; font-size: 14px;\">Telephone: ";
        // line 328
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 328, $this->source); })()), "telephone", [], "any", false, false, false, 328), "html", null, true);
        echo "</p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                    <table border=\"0\" cellpadding=\"5\" cellspacing=\"0\" class=\"text_block\" role=\"presentation\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;\" width=\"100%\">
                                                        <tr>
                                                            <td>
                                                                <div style=\"font-family: sans-serif\">
                                                                    <div style=\"font-size: 14px; mso-line-height-alt: 16.8px; color: #555555; line-height: 1.2; font-family: Arial, Helvetica Neue, Helvetica, sans-serif;\">
                                                                        <p style=\"margin: 0; font-size: 14px;\">statut: ";
        // line 339
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 339, $this->source); })()), "statut", [], "any", false, false, false, 339), "html", null, true);
        echo "</p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                    <table border=\"0\" cellpadding=\"5\" cellspacing=\"0\" class=\"text_block\" role=\"presentation\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;\" width=\"100%\">
                                                        <tr>
                                                            <td>
                                                                <div style=\"font-family: sans-serif\">
                                                                    <div style=\"font-size: 14px; mso-line-height-alt: 16.8px; color: #555555; line-height: 1.2; font-family: Arial, Helvetica Neue, Helvetica, sans-serif;\">
                                                                        <p style=\"margin: 0; font-size: 14px;\">Message : ";
        // line 350
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 350, $this->source); })()), "message", [], "any", false, false, false, 350), "html", null, true);
        echo "</p>
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
                    <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"row row-6\" role=\"presentation\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt;\" width=\"100%\">
                        <tbody>
                            <tr>
                                <td>
                                    <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"row-content stack\" role=\"presentation\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #ffffff; color: #000000; width: 600px;\" width=\"600\">
                                        <tbody>
                                            <tr>
                                                <td class=\"column\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 35px; padding-bottom: 40px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;\" width=\"100%\">
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
                                                    <table border=\"0\" cellpadding=\"10\" cellspacing=\"0\" class=\"button_block\" role=\"presentation\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt;\" width=\"100%\">
                                                        <tr>
                                                            <td>
                                                                <div align=\"center\">
                                                                    <!--[if mso]><v:roundrect xmlns:v=\"urn:schemas-microsoft-com:vml\" xmlns:w=\"urn:schemas-microsoft-com:office:word\" style=\"height:42px;width:153px;v-text-anchor:middle;\" arcsize=\"10%\" stroke=\"false\" fillcolor=\"#738f3f\"><w:anchorlock/><v:textbox inset=\"0px,0px,0px,0px\"><center style=\"color:#ffffff; font-family:Arial, sans-serif; font-size:16px\"><![endif]-->
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
        // line 400
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
        return "email/visiteur_message.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  475 => 400,  422 => 350,  408 => 339,  394 => 328,  380 => 317,  366 => 306,  336 => 279,  322 => 268,  308 => 257,  294 => 246,  280 => 235,  127 => 84,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>

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
                                                                <h1 style=\"margin: 0; color: #555555; font-size: 23px; font-family: Arial, Helvetica Neue, Helvetica, sans-serif; line-height: 120%; text-align: center; direction: ltr; font-weight: normal; letter-spacing: normal; margin-top: 0; margin-bottom: 0;\"><strong>Vous avez reçu un message</strong></h1>
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
                                                                        <p style=\"margin: 0; font-size: 17px; text-align: center; mso-line-height-alt: 25.5px; letter-spacing: normal;\"><span style=\"font-size:17px;\">Un utilisateur vous a envoyé un message en passant par le site Locavor</span></p>
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
                    <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"row row-4 mobile_hide\" role=\"presentation\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt;\" width=\"100%\">
                        <tbody>
                            <tr>
                                <td>
                                    <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"row-content stack\" role=\"presentation\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #ffffff; color: #000000; width: 600px;\" width=\"600\">
                                        <tbody>
                                            <tr>
                                                <td class=\"column\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-left: 60px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;\" width=\"33.333333333333336%\">
                                                    <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"text_block\" role=\"presentation\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;\" width=\"100%\">
                                                        <tr>
                                                            <td style=\"padding-top:28px;padding-right:03px;padding-bottom:03px;padding-left:03px;\">
                                                                <div style=\"font-family: sans-serif\">
                                                                    <div style=\"font-size: 14px; mso-line-height-alt: 16.8px; color: #555555; line-height: 1.2; font-family: Arial, Helvetica Neue, Helvetica, sans-serif;\">
                                                                        <p style=\"margin: 0; font-size: 14px; text-align: center;\"><strong>Nom :<br /></strong></p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                    <table border=\"0\" cellpadding=\"3\" cellspacing=\"0\" class=\"text_block\" role=\"presentation\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;\" width=\"100%\">
                                                        <tr>
                                                            <td>
                                                                <div style=\"font-family: sans-serif\">
                                                                    <div style=\"font-size: 14px; mso-line-height-alt: 16.8px; color: #555555; line-height: 1.2; font-family: Arial, Helvetica Neue, Helvetica, sans-serif;\">
                                                                        <p style=\"margin: 0; font-size: 14px; text-align: center;\"><strong>Email :<br /></strong></p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                    <table border=\"0\" cellpadding=\"3\" cellspacing=\"0\" class=\"text_block\" role=\"presentation\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;\" width=\"100%\">
                                                        <tr>
                                                            <td>
                                                                <div style=\"font-family: sans-serif\">
                                                                    <div style=\"font-size: 14px; mso-line-height-alt: 16.8px; color: #555555; line-height: 1.2; font-family: Arial, Helvetica Neue, Helvetica, sans-serif;\">
                                                                        <p style=\"margin: 0; font-size: 14px; text-align: center;\"><strong>Telephone:<br /></strong></p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                    <table border=\"0\" cellpadding=\"3\" cellspacing=\"0\" class=\"text_block\" role=\"presentation\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;\" width=\"100%\">
                                                        <tr>
                                                            <td>
                                                                <div style=\"font-family: sans-serif\">
                                                                    <div style=\"font-size: 14px; mso-line-height-alt: 16.8px; color: #555555; line-height: 1.2; font-family: Arial, Helvetica Neue, Helvetica, sans-serif;\">
                                                                        <p style=\"margin: 0; font-size: 14px; text-align: center;\"><strong>Statut:<br /></strong></p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                    <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"text_block\" role=\"presentation\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;\" width=\"100%\">
                                                        <tr>
                                                            <td style=\"padding-top:3px;padding-right:3px;padding-bottom:8px;padding-left:3px;\">
                                                                <div style=\"font-family: sans-serif\">
                                                                    <div style=\"font-size: 14px; mso-line-height-alt: 16.8px; color: #555555; line-height: 1.2; font-family: Arial, Helvetica Neue, Helvetica, sans-serif;\">
                                                                        <p style=\"margin: 0; font-size: 14px; text-align: center;\"><strong>Message:<br /></strong></p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                                <td class=\"column\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-right: 45px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;\" width=\"66.66666666666667%\">
                                                    <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"text_block\" role=\"presentation\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;\" width=\"100%\">
                                                        <tr>
                                                            <td style=\"padding-top:28px;padding-right:3px;padding-bottom:3px;padding-left:3px;\">
                                                                <div style=\"font-family: sans-serif\">
                                                                    <div style=\"font-size: 14px; mso-line-height-alt: 16.8px; color: #555555; line-height: 1.2; font-family: Arial, Helvetica Neue, Helvetica, sans-serif;\">
                                                                        <p style=\"margin: 0; font-size: 14px;\">{{ contact.nom }}</p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                    <table border=\"0\" cellpadding=\"3\" cellspacing=\"0\" class=\"text_block\" role=\"presentation\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;\" width=\"100%\">
                                                        <tr>
                                                            <td>
                                                                <div style=\"font-family: sans-serif\">
                                                                    <div style=\"font-size: 14px; mso-line-height-alt: 16.8px; color: #555555; line-height: 1.2; font-family: Arial, Helvetica Neue, Helvetica, sans-serif;\">
                                                                        <p style=\"margin: 0; font-size: 14px;\">{{ contact.email }}</p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                    <table border=\"0\" cellpadding=\"3\" cellspacing=\"0\" class=\"text_block\" role=\"presentation\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;\" width=\"100%\">
                                                        <tr>
                                                            <td>
                                                                <div style=\"font-family: sans-serif\">
                                                                    <div style=\"font-size: 14px; mso-line-height-alt: 16.8px; color: #555555; line-height: 1.2; font-family: Arial, Helvetica Neue, Helvetica, sans-serif;\">
                                                                        <p style=\"margin: 0; font-size: 14px;\">{{ contact.telephone }}</p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                    <table border=\"0\" cellpadding=\"3\" cellspacing=\"0\" class=\"text_block\" role=\"presentation\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;\" width=\"100%\">
                                                        <tr>
                                                            <td>
                                                                <div style=\"font-family: sans-serif\">
                                                                    <div style=\"font-size: 14px; mso-line-height-alt: 16.8px; color: #555555; line-height: 1.2; font-family: Arial, Helvetica Neue, Helvetica, sans-serif;\">
                                                                        <p style=\"margin: 0; font-size: 14px;\">{{ contact.statut }}</p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                    <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"text_block\" role=\"presentation\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;\" width=\"100%\">
                                                        <tr>
                                                            <td style=\"padding-top:3px;padding-right:3px;padding-bottom:8px;padding-left:3px;\">
                                                                <div style=\"font-family: sans-serif\">
                                                                    <div style=\"font-size: 14px; mso-line-height-alt: 16.8px; color: #555555; line-height: 1.2; font-family: Arial, Helvetica Neue, Helvetica, sans-serif;\">
                                                                        <p style=\"margin: 0; font-size: 14px;\">{{ contact.message }}</p>
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
                    <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"row row-5\" role=\"presentation\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt;\" width=\"100%\">
                        <tbody>
                            <tr>
                                <td>
                                    <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"row-content stack\" role=\"presentation\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #ffffff; color: #000000; width: 600px;\" width=\"600\">
                                        <tbody>
                                            <tr>
                                                <td class=\"column\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-left: 20px; padding-right: 20px; padding-top: 5px; padding-bottom: 5px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;\" width=\"100%\">
                                                    <table border=\"0\" cellpadding=\"5\" cellspacing=\"0\" class=\"text_block\" role=\"presentation\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;\" width=\"100%\">
                                                        <tr>
                                                            <td>
                                                                <div style=\"font-family: sans-serif\">
                                                                    <div style=\"font-size: 14px; mso-line-height-alt: 16.8px; color: #555555; line-height: 1.2; font-family: Arial, Helvetica Neue, Helvetica, sans-serif;\">
                                                                        <p style=\"margin: 0; font-size: 14px;\">Nom : {{ contact.nom }}</p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                    <table border=\"0\" cellpadding=\"5\" cellspacing=\"0\" class=\"text_block\" role=\"presentation\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;\" width=\"100%\">
                                                        <tr>
                                                            <td>
                                                                <div style=\"font-family: sans-serif\">
                                                                    <div style=\"font-size: 14px; mso-line-height-alt: 16.8px; color: #555555; line-height: 1.2; font-family: Arial, Helvetica Neue, Helvetica, sans-serif;\">
                                                                        <p style=\"margin: 0; font-size: 14px;\">Email : {{ contact.email }}</p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                    <table border=\"0\" cellpadding=\"5\" cellspacing=\"0\" class=\"text_block\" role=\"presentation\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;\" width=\"100%\">
                                                        <tr>
                                                            <td>
                                                                <div style=\"font-family: sans-serif\">
                                                                    <div style=\"font-size: 14px; mso-line-height-alt: 16.8px; color: #555555; line-height: 1.2; font-family: Arial, Helvetica Neue, Helvetica, sans-serif;\">
                                                                        <p style=\"margin: 0; font-size: 14px;\">Telephone: {{ contact.telephone }}</p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                    <table border=\"0\" cellpadding=\"5\" cellspacing=\"0\" class=\"text_block\" role=\"presentation\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;\" width=\"100%\">
                                                        <tr>
                                                            <td>
                                                                <div style=\"font-family: sans-serif\">
                                                                    <div style=\"font-size: 14px; mso-line-height-alt: 16.8px; color: #555555; line-height: 1.2; font-family: Arial, Helvetica Neue, Helvetica, sans-serif;\">
                                                                        <p style=\"margin: 0; font-size: 14px;\">statut: {{ contact.statut }}</p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                    <table border=\"0\" cellpadding=\"5\" cellspacing=\"0\" class=\"text_block\" role=\"presentation\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;\" width=\"100%\">
                                                        <tr>
                                                            <td>
                                                                <div style=\"font-family: sans-serif\">
                                                                    <div style=\"font-size: 14px; mso-line-height-alt: 16.8px; color: #555555; line-height: 1.2; font-family: Arial, Helvetica Neue, Helvetica, sans-serif;\">
                                                                        <p style=\"margin: 0; font-size: 14px;\">Message : {{ contact.message }}</p>
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
                    <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"row row-6\" role=\"presentation\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt;\" width=\"100%\">
                        <tbody>
                            <tr>
                                <td>
                                    <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"row-content stack\" role=\"presentation\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #ffffff; color: #000000; width: 600px;\" width=\"600\">
                                        <tbody>
                                            <tr>
                                                <td class=\"column\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 35px; padding-bottom: 40px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;\" width=\"100%\">
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
                                                    <table border=\"0\" cellpadding=\"10\" cellspacing=\"0\" class=\"button_block\" role=\"presentation\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt;\" width=\"100%\">
                                                        <tr>
                                                            <td>
                                                                <div align=\"center\">
                                                                    <!--[if mso]><v:roundrect xmlns:v=\"urn:schemas-microsoft-com:vml\" xmlns:w=\"urn:schemas-microsoft-com:office:word\" style=\"height:42px;width:153px;v-text-anchor:middle;\" arcsize=\"10%\" stroke=\"false\" fillcolor=\"#738f3f\"><w:anchorlock/><v:textbox inset=\"0px,0px,0px,0px\"><center style=\"color:#ffffff; font-family:Arial, sans-serif; font-size:16px\"><![endif]-->
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

</html>", "email/visiteur_message.html.twig", "C:\\code\\xamp\\htdocs\\Locavores\\templates\\email\\visiteur_message.html.twig");
    }
}
