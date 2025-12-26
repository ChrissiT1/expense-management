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
 * @since	Version 3.0.0
 * @filesource
 */
defined('BASEPATH') OR exit('Kein direkter Skriptzugriff erlaubt');

$lang['migration_none_found'] = 'Es wurden keine Migrationen gefunden.';
$lang['migration_not_found'] = 'Es konnte keine Migration mit der Versionsnummer %s gefunden werden.';
$lang['migration_sequence_gap'] = 'Es gibt eine Lücke in der Migrationssequenz in der Nähe der Versionsnummer: %s.';
$lang['migration_multiple_version'] = 'Es existieren mehrere Migrationen mit derselben Versionsnummer: %s.';
$lang['migration_class_doesnt_exist'] = 'Die Migrations-Klasse "%s" konnte nicht gefunden werden.';
$lang['migration_missing_up_method'] = 'Der Migrations-Klasse "%s" fehlt eine "up"-Methode.';
$lang['migration_missing_down_method'] = 'Der Migrations-Klasse "%s" fehlt eine "down"-Methode.';
$lang['migration_invalid_filename'] = 'Migration "%s" hat einen ungültigen Dateinamen.';