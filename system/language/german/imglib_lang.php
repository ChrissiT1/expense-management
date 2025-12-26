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

$lang['imglib_source_image_required'] = 'Sie müssen ein Quellbild in Ihren Einstellungen angeben.';
$lang['imglib_gd_required'] = 'Für diese Funktion ist die GD-Bibliothek erforderlich.';
$lang['imglib_gd_required_for_props'] = 'Ihr Server muss die GD-Bibliothek unterstützen, um die Bildeigenschaften zu ermitteln.';
$lang['imglib_unsupported_imagecreate'] = 'Ihr Server unterstützt die für diesen Bildtyp erforderliche GD-Funktion nicht.';
$lang['imglib_gif_not_supported'] = 'GIF-Bilder werden aufgrund von Lizenzbeschränkungen oft nicht unterstützt. Möglicherweise müssen Sie stattdessen JPG- oder PNG-Bilder verwenden.';
$lang['imglib_jpg_not_supported'] = 'JPG-Bilder werden nicht unterstützt.';
$lang['imglib_png_not_supported'] = 'PNG-Bilder werden nicht unterstützt.';
$lang['imglib_jpg_or_png_required'] = 'Das in Ihren Einstellungen angegebene Bildgrößenänderungsprotokoll funktioniert nur mit JPEG- oder PNG-Bildtypen.';
$lang['imglib_copy_error'] = 'Beim Versuch, die Datei zu ersetzen, ist ein Fehler aufgetreten. Bitte stellen Sie sicher, dass das Dateiverzeichnis beschreibbar ist.';
$lang['imglib_rotate_unsupported'] = 'Die Bildrotation wird von Ihrem Server offenbar nicht unterstützt.';
$lang['imglib_libpath_invalid'] = 'Der Pfad zu Ihrer Bildbibliothek ist nicht korrekt. Bitte setzen Sie den korrekten Pfad in Ihren Bildeinstellungen.';
$lang['imglib_image_process_failed'] = 'Die Bildverarbeitung ist fehlgeschlagen. Bitte überprüfen Sie, ob Ihr Server das gewählte Protokoll unterstützt und ob der Pfad zu Ihrer Bildbibliothek korrekt ist.';
$lang['imglib_rotation_angle_required'] = 'Zum Drehen des Bildes ist ein Drehwinkel erforderlich.';
$lang['imglib_invalid_path'] = 'Der Pfad zum Bild ist nicht korrekt.';
$lang['imglib_copy_failed'] = 'Die Bildkopierroutine ist fehlgeschlagen.';
$lang['imglib_missing_font'] = 'Es konnte keine zu verwendende Schriftart gefunden werden.';
$lang['imglib_save_failed'] = 'Das Bild konnte nicht gespeichert werden. Bitte stellen Sie sicher, dass das Bild- und Dateiverzeichnis beschreibbar sind.';