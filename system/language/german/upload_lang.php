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
 * @package	CodeIgniter
 * @author	EllisLab Dev Team
 * @copyright	Copyright (c) 2008 - 2014, EllisLab, Inc. (https://ellislab.com/)
 * @copyright	Copyright (c) 2014 - 2016, British Columbia Institute of Technology (http://bcit.ca/)
 * @license	http://opensource.org/licenses/MIT	MIT License
 * @link	https://codeigniter.com
 * @since	Version 1.0.0
 * @filesource
 */
defined('BASEPATH') OR exit('Kein direkter Skriptzugriff erlaubt');

$lang['upload_userfile_not_set'] = 'Es konnte keine POST-Variable mit dem Namen "userfile" gefunden werden.';
$lang['upload_file_exceeds_limit'] = 'Die hochgeladene Datei überschreitet die in der PHP-Konfiguration erlaubte Maximalkapazität.';
$lang['upload_file_exceeds_form_limit'] = 'Die hochgeladene Datei überschreitet die im Formular erlaubte Maximalkapazität.';
$lang['upload_file_partial'] = 'Die Datei wurde nur teilweise hochgeladen.';
$lang['upload_no_temp_directory'] = 'Der temporäre Ordner fehlt.';
$lang['upload_unable_to_write_file'] = 'Die Datei konnte nicht auf die Festplatte geschrieben werden.';
$lang['upload_stopped_by_extension'] = 'Der Datei-Upload wurde durch eine Erweiterung gestoppt.';
$lang['upload_no_file_selected'] = 'Sie haben keine Datei zum Hochladen ausgewählt.';
$lang['upload_invalid_filetype'] = 'Der Dateityp, den Sie hochladen möchten, ist nicht erlaubt.';
$lang['upload_invalid_filesize'] = 'Die Datei, die Sie hochladen möchten, ist größer als die erlaubte Größe.';
$lang['upload_invalid_dimensions'] = 'Das Bild, das Sie hochladen möchten, entspricht nicht den erlaubten Abmessungen.';
$lang['upload_destination_error'] = 'Beim Versuch, die hochgeladene Datei in das Zielverzeichnis zu verschieben, ist ein Problem aufgetreten.';
$lang['upload_no_filepath'] = 'Der Upload-Pfad scheint nicht gültig zu sein.';
$lang['upload_no_file_types'] = 'Sie haben keine erlaubten Dateitypen angegeben.';
$lang['upload_bad_filename'] = 'Der von Ihnen übermittelte Dateiname existiert bereits auf dem Server.';
$lang['upload_not_writable'] = 'Das Upload-Zielverzeichnis scheint nicht beschreibbar zu sein.';