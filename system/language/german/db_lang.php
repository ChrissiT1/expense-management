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

$lang['db_invalid_connection_str'] = 'Die Datenbankeinstellungen konnten anhand der übergebenen Verbindungszeichenkette nicht ermittelt werden.';
$lang['db_unable_to_connect'] = 'Es konnte keine Verbindung zum Datenbankserver mit den angegebenen Einstellungen hergestellt werden.';
$lang['db_unable_to_select'] = 'Die angegebene Datenbank konnte nicht ausgewählt werden: %s';
$lang['db_unable_to_create'] = 'Die angegebene Datenbank konnte nicht erstellt werden: %s';
$lang['db_invalid_query'] = 'Die übergebene Abfrage ist ungültig.';
$lang['db_must_set_table'] = 'Sie müssen die Datenbanktabelle für Ihre Abfrage festlegen.';
$lang['db_must_use_set'] = 'Sie müssen die "set"-Methode verwenden, um einen Eintrag zu aktualisieren.';
$lang['db_must_use_index'] = 'Sie müssen einen Index für Batch-Updates angeben, auf den abgeglichen werden soll.';
$lang['db_batch_missing_index'] = 'Eine oder mehrere Zeilen für das Batch-Update enthalten den angegebenen Index nicht.';
$lang['db_must_use_where'] = 'Updates sind nur erlaubt, wenn sie eine "where"-Klausel enthalten.';
$lang['db_del_must_use_where'] = 'Löschvorgänge sind nur erlaubt, wenn sie eine "where"- oder "like"-Klausel enthalten.';
$lang['db_field_param_missing'] = 'Zum Abrufen von Feldern wird der Tabellenname als Parameter benötigt.';
$lang['db_unsupported_function'] = 'Diese Funktion ist für die verwendete Datenbank nicht verfügbar.';
$lang['db_transaction_failure'] = 'Transaktionsfehler: Rollback durchgeführt.';
$lang['db_unable_to_drop'] = 'Die angegebene Datenbank konnte nicht gelöscht werden.';
$lang['db_unsupported_feature'] = 'Nicht unterstützte Funktion der verwendeten Datenbankplattform.';
$lang['db_unsupported_compression'] = 'Das ausgewählte Dateikomprimierungsformat wird vom Server nicht unterstützt.';
$lang['db_filepath_error'] = 'Daten konnten nicht in den angegebenen Dateipfad geschrieben werden.';
$lang['db_invalid_cache_path'] = 'Der angegebene Cache-Pfad ist ungültig oder nicht beschreibbar.';
$lang['db_table_name_required'] = 'Für diesen Vorgang wird ein Tabellenname benötigt.';
$lang['db_column_name_required'] = 'Für diesen Vorgang wird ein Spaltenname benötigt.';
$lang['db_column_definition_required'] = 'Für diesen Vorgang wird eine Spaltendefinition benötigt.';
$lang['db_unable_to_set_charset'] = 'Der Client-Verbindungszeichensatz konnte nicht gesetzt werden: %s';
$lang['db_error_heading'] = 'Ein Datenbankfehler ist aufgetreten';