<?php

require "ezSQL/shared/ez_sql_core.php";
require "ezSQL/mysql/ez_sql_mysql.php";

$db = new ezSQL_mysql('root','','world','localhost');

$db->query('DELETE from City WHERE Name="Ptuj"');

$mesta = $db->get_results('SELECT * FROM `City` WHERE `CountryCode` = "SVN"');

foreach($mesta as $mesto) {
	echo $mesto->ID ." ";
	echo $mesto->Name." ";
	echo $mesto->Population."<br>";
}

//$db->debug();