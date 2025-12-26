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

$lang['email_must_be_array'] = 'Der E-Mail-Validierungsmethode muss ein Array übergeben werden.';
$lang['email_invalid_address'] = 'Ungültige E-Mail-Adresse: %s';
$lang['email_attachment_missing'] = 'Der folgende E-Mail-Anhang konnte nicht gefunden werden: %s';
$lang['email_attachment_unreadable'] = 'Dieser Anhang konnte nicht geöffnet werden: %s';
$lang['email_no_from'] = 'E-Mail kann ohne "From"-Header nicht gesendet werden.';
$lang['email_no_recipients'] = 'Empfänger müssen angegeben werden: To, Cc oder Bcc';
$lang['email_send_failure_phpmail'] = 'E-Mail konnte mit PHP mail() nicht gesendet werden. Ihr Server ist möglicherweise nicht für diese Versandmethode konfiguriert.';
$lang['email_send_failure_sendmail'] = 'E-Mail konnte mit PHP Sendmail nicht gesendet werden. Ihr Server ist möglicherweise nicht für diese Versandmethode konfiguriert.';
$lang['email_send_failure_smtp'] = 'E-Mail konnte mit PHP SMTP nicht gesendet werden. Ihr Server ist möglicherweise nicht für diese Versandmethode konfiguriert.';
$lang['email_sent'] = 'Ihre Nachricht wurde erfolgreich mit dem folgenden Protokoll gesendet: %s';
$lang['email_no_socket'] = 'Socket für Sendmail konnte nicht geöffnet werden. Bitte Einstellungen überprüfen.';
$lang['email_no_hostname'] = 'Es wurde kein SMTP-Hostname angegeben.';
$lang['email_smtp_error'] = 'Der folgende SMTP-Fehler ist aufgetreten: %s';
$lang['email_no_smtp_unpw'] = 'Fehler: Sie müssen einen SMTP-Benutzernamen und ein Passwort vergeben.';
$lang['email_failed_smtp_login'] = 'Senden des AUTH LOGIN Befehls fehlgeschlagen. Fehler: %s';
$lang['email_smtp_auth_un'] = 'Authentifizierung des Benutzernamens fehlgeschlagen. Fehler: %s';
$lang['email_smtp_auth_pw'] = 'Authentifizierung des Passworts fehlgeschlagen. Fehler: %s';
$lang['email_smtp_data_failure'] = 'Daten konnten nicht gesendet werden: %s';
$lang['email_exit_status'] = 'Exit-Statuscode: %s';