<?php

define('DBSERVER','localhost');
define('DBUSERNAME','root');
define('DBPASSWORD','');
define('DBNAME','queen');

/**connect to my sqldatabase */

$con=mysqli_connect(DBSERVER,DBUSERNAME,DBPASSWORD,DBNAME);

// check db connection


if($db){

//echo "connected";

}
if($con=== false){

    echo "not connected";
    die("Error: connection error. " .mysqli_connect_error());
}
?>