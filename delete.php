<?php
require_once('db/config.php');
$sql = "DELETE FROM student where id=".$_GET['id'];
mysqli_query($conn,$sql);
header('location:index.php');
?>