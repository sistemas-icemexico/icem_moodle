<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'mariadb';
$CFG->dblibrary = 'native';
$CFG->dbhost    = 'localhost';
$CFG->dbname    = 'icem_university_moodle';
$CFG->dbuser    = 'icem_moodle';
$CFG->dbpass    = '7T2Zy]eL2s>3';
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => '',
  'dbsocket' => '',
  'dbcollation' => 'utf8mb4_general_ci',
);

$CFG->wwwroot   = 'https://192.168.100.169/icemexico.moodle';
$CFG->dirroot  = '/home/icemexico/web/moodle';
$CFG->dataroot  = '/home/icemexico/web/moodledata';
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0777;

// 
$CFG->cachejs = true;
$CFG->cacherecords = true;
$CFG->cachetext = true;
$CFG->dboptions = array(
    'dbpersist' => true,
    'dbcollation' => 'utf8mb4_unicode_ci'
);

require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
