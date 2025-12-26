<?php

/**
 * CodeIgniter
 *
 * Ein Open-Source-Anwendungsentwicklungs-Framework für PHP
 *
 * Dieser Inhalt wird unter der MIT License (MIT) veröffentlicht
 *
 * Copyright (c) 2014 - 2016, British Columbia Institute of Technology
 *
 * Die Erlaubnis wird hiermit kostenlos erteilt, an jede Person, die eine Kopie erhält
 * dieser Software und der zugehörigen Dokumentationsdateien (die "Software"), zu bearbeiten
 * in der Software ohne Einschränkung, einschließlich, aber nicht beschränkt auf die Rechte
 * zu verwenden, kopieren, ändern, zusammenführen, veröffentlichen, verteilen, unterlizenzieren und/oder zu verkaufen
 * Kopien der Software und Personen, denen die Software bereitgestellt wird, zu gestatten
 * dies zu tun, unter den folgenden Bedingungen:
 *
 * Der obige Urheberrechtshinweis und dieser Erlaubnishinweis müssen in allen enthalten sein
 * Kopien oder wesentlichen Teilen der Software.
 *
 * DIE SOFTWARE WIRD "WIE BESEHEN" BEREITGESTELLT, OHNE JEGLICHE AUSDRÜCKLICHE ODER STILLSCHWEIGENDE GARANTIE,
 * EINSCHLIESSLICH, ABER NICHT BESCHRÄNKT AUF DIE GARANTIEN DER MARKTGÄNGIGKEIT,
 * EIGNUNG FÜR EINEN BESTIMMTEN ZWECK UND NICHTVERLETZUNG. IN KEINEM FALL SIND DIE
 * AUTOREN ODER URHEBERRECHTSINHABER HAFTBAR FÜR JEGLICHE ANSPRÜCHE, SCHÄDEN ODER ANDERE
 * HAFTUNG, OB IN EINER VERTRAGSAKTION, UNERLAUBTER HANDLUNG ODER ANDERWEITIG, ENTSTEHEND AUS,
 * AUS ODER IM ZUSAMMENHANG MIT DER SOFTWARE ODER DER VERWENDUNG ODER ANDEREN GESCHÄFTEN MIT DER
 * SOFTWARE.
 *
 * @package    CodeIgniter
 * @author    EllisLab Dev Team
 * @copyright    Copyright (c) 2008 - 2014, EllisLab, Inc. (https://ellislab.com/)
 * @copyright    Copyright (c) 2014 - 2016, British Columbia Institute of Technology (http://bcit.ca/)
 * @license    http://opensource.org/licenses/MIT	MIT License
 * @link    https://codeigniter.com
 * @since    Version 1.0.0
 * @filesource
 */
defined('BASEPATH') or exit('Kein direkter Skriptzugriff erlaubt');

$lang['form_validation_required'] = 'Das Feld {field} ist ein Pflichtfeld.';
$lang['form_validation_isset'] = 'Das Feld {field} muss einen Wert enthalten.';
$lang['form_validation_valid_email'] = 'Das Feld {field} muss eine gültige E-Mail-Adresse enthalten.';
$lang['form_validation_valid_emails'] = 'Das Feld {field} darf nur gültige E-Mail-Adressen enthalten.';
$lang['form_validation_valid_url'] = 'Das Feld {field} muss eine gültige URL enthalten.';
$lang['form_validation_valid_ip'] = 'Das Feld {field} muss eine gültige IP-Adresse enthalten.';
$lang['form_validation_min_length'] = 'Das Feld {field} muss mindestens {param} Zeichen lang sein.';
$lang['form_validation_max_length'] = 'Das Feld {field} darf maximal {param} Zeichen lang sein.';
$lang['form_validation_exact_length'] = 'Das Feld {field} muss genau {param} Zeichen lang sein.';
$lang['form_validation_alpha'] = 'Das Feld {field} darf nur Buchstaben enthalten.';
$lang['form_validation_alpha_numeric'] = 'Das Feld {field} darf nur alphanumerische Zeichen enthalten.';
$lang['form_validation_alpha_numeric_spaces'] = 'Das Feld {field} darf nur alphanumerische Zeichen und Leerzeichen enthalten.';
$lang['form_validation_alpha_dash'] = 'Das Feld {field} darf nur alphanumerische Zeichen, Unterstriche und Bindestriche enthalten.';
$lang['form_validation_numeric'] = 'Das Feld {field} darf nur Zahlen enthalten.';
$lang['form_validation_is_numeric'] = 'Das Feld {field} darf nur numerische Zeichen enthalten.';
$lang['form_validation_integer'] = 'Das Feld {field} muss eine ganze Zahl enthalten.';
$lang['form_validation_regex_match'] = 'Das Feld {field} hat kein korrektes Format.';
$lang['form_validation_matches'] = 'Das Feld {field} stimmt nicht mit dem Feld {param} überein.';
$lang['form_validation_differs'] = 'Das Feld {field} muss sich vom Feld {param} unterscheiden.';
$lang['form_validation_is_unique'] = 'Das Feld {field} muss einen eindeutigen Wert enthalten.';
$lang['form_validation_is_natural'] = 'Das Feld {field} darf nur Ziffern enthalten.';
$lang['form_validation_is_natural_no_zero'] = 'Das Feld {field} darf nur Ziffern enthalten und muss größer als null sein.';
$lang['form_validation_decimal'] = 'Das Feld {field} muss eine Dezimalzahl enthalten.';
$lang['form_validation_less_than'] = 'Das Feld {field} muss eine Zahl kleiner als {param} enthalten.';
$lang['form_validation_less_than_equal_to'] = 'Das Feld {field} muss eine Zahl kleiner oder gleich {param} enthalten.';
$lang['form_validation_greater_than'] = 'Das Feld {field} muss eine Zahl größer als {param} enthalten.';
$lang['form_validation_greater_than_equal_to'] = 'Das Feld {field} muss eine Zahl größer oder gleich {param} enthalten.';
$lang['form_validation_error_message_not_set'] = 'Es konnte keine Fehlermeldung für das Feld {field} gefunden werden.';
$lang['form_validation_in_list'] = 'Das Feld {field} muss einen der folgenden Werte enthalten: {param}.';