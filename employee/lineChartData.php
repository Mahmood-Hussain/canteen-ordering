<?php
include_once 'action.php';
//setting header to json
header('Content-Type: application/json');
$user = $_SESSION['user'];
$where = array("emp_name"=> $user);
$data = $obj->select("orders", $where);
print json_encode($data);


?>
