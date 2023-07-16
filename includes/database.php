<?php

	$HOST = '';
	$DB_NAME = '';
	$USER = '';
	$PASS = '';

	try {
		$db	= new PDO("mysql:host=" . $HOST . ";dbname=" . $DB_NAME . ";charset=utf8mb4", $USER, $PASS);
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch (PDOExepception $e) {
		echo $e;
	}
