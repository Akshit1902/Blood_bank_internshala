<?php
require_once __DIR__.'/../../../include/config.php';
loginCheckHospital();

$obj=(object)$_REQUEST;
$obj->hospital_id=$_SESSION["id"];
$data=stockList($obj);

echo $data;

mysqli_close($con);
?>