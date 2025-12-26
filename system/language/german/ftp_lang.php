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

$lang['ftp_no_connection'] = 'Es konnte keine gültige Verbindungs-ID gefunden werden. Bitte stellen Sie sicher, dass Sie verbunden sind, bevor Sie Dateioperationen durchführen.';
$lang['ftp_unable_to_connect'] = 'Es konnte keine Verbindung zum FTP-Server mit dem angegebenen Hostnamen hergestellt werden.';
$lang['ftp_unable_to_login'] = 'Anmeldung am FTP-Server fehlgeschlagen. Bitte Benutzernamen und Passwort überprüfen.';
$lang['ftp_unable_to_mkdir'] = 'Das angegebene Verzeichnis konnte nicht erstellt werden.';
$lang['ftp_unable_to_changedir'] = 'Verzeichniswechsel fehlgeschlagen.';
$lang['ftp_unable_to_chmod'] = 'Dateiberechtigungen konnten nicht gesetzt werden. Bitte überprüfen Sie den Pfad.';
$lang['ftp_unable_to_upload'] = 'Die angegebene Datei konnte nicht hochgeladen werden. Bitte überprüfen Sie den Pfad.';
$lang['ftp_unable_to_download'] = 'Die angegebene Datei konnte nicht heruntergeladen werden. Bitte überprüfen Sie den Pfad.';
$lang['ftp_no_source_file'] = 'Die Quelldatei konnte nicht gefunden werden. Bitte überprüfen Sie den Pfad.';
$lang['ftp_unable_to_rename'] = 'Die Datei konnte nicht umbenannt werden.';
$lang['ftp_unable_to_delete'] = 'Die Datei konnte nicht gelöscht werden.';
$lang['ftp_unable_to_move'] = 'Die Datei konnte nicht verschoben werden. Bitte stellen Sie sicher, dass das Zielverzeichnis existiert.';