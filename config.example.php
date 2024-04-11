<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'pgsql';
$CFG->dblibrary = 'native';
$CFG->dbhost    = 'db';
$CFG->dbname    = 'moodle';
$CFG->dbuser    = 'moodle';
$CFG->dbpass    = 'supersecure1234';
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
    'dbpersist' => 0,
    'dbport' => 5432,
    'dbsocket' => '',
);

$CFG->wwwroot   = 'http://localhost:8100';
$CFG->dataroot  = '/var/www/moodledata';
$CFG->admin     = 'admin';

$CFG->smtphosts = 'mailpit:1025';
$CFG->noreplyaddress = 'noreply@hellomoodle.com';
$CFG->smtpuser = ''; // Leave blank if authentication is not needed
$CFG->smtppass = ''; // Leave blank if authentication is not needed

$CFG->directorypermissions = 0777;

require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!