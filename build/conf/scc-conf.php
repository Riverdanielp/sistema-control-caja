<?php
// This file generated by Propel 1.6.0 convert-conf target
// from XML runtime conf file C:\xampp\xampp\htdocs\scc-1.0\runtime-conf.xml
$conf = array (
  'datasources' => 
  array (
    'scc' => 
    array (
      'adapter' => 'mysql',
      'connection' => 
      array (
        'dsn' => 'mysql:host=localhost;dbname=scc',
        'user' => 'root',
        'password' => '070107cadj',
        'settings' => 
        array (
          'charset' => 
          array (
            'value' => 'utf8',
          ),
        ),
      ),
    ),
    'default' => 'scc',
  ),
  'generator_version' => '1.6.0',
);
$conf['classmap'] = include(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'classmap-scc-conf.php');
return $conf;