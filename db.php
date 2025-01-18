<?php

define ('HOSTNAME','localhost');
define ('USERNAME','root');
define ('PASSWORD','');
define ('DBNAME','testone');
	
$con= mysqli_connect(HOSTNAME,USERNAME,PASSWORD,DBNAME);
if(!$con){
	die('could not connect;'.mysqli_connect_error());
}
