<?php
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASSWORD','');
define('DB_NAME','infosys');
$conn= mysqli_connect(DB_SERVER,DB_USER,DB_PASSWORD,DB_NAME);

if($conn==false){
    die('ERROR: Could not connect!');
}

?>