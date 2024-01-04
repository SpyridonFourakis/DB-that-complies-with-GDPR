<?php

// This is the database connection configuration.
return array(
	// uncomment the following lines to use a MySQL database
    'class'=>'system.db.CDbConnection',
	'connectionString' => 'mysql:host=localhost;dbname=net_security_db',
	'emulatePrepare' => true,
	'username' => 'root',
	'password' => '',
	'charset' => 'utf8',

);