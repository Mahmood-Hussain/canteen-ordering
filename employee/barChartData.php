<?php
include_once 'action.php';
/**
 * filename: data.php
 * description: this will return the score of the teams.
 */

//setting header to json
header('Content-Type: application/json');
$product1 = "tea";
$product2 = "coffee";
$product3 = "samosa";
$product4 = "cake";

$where = array(
  "emp_name"=>$_SESSION['user'],
  "item"=>$product1
);
$where1 = array(
  "emp_name"=>$_SESSION['user'],
  "item"=>$product2
);
$where2 = array(
  "emp_name"=>$_SESSION['user'],
  "item"=>$product3
);
$where3 = array(
  "emp_name"=>$_SESSION['user'],
  "item"=>$product4
);

$data1 = $obj->count("item","orders", $where);
$data2 = $obj->count("item","orders", $where1);
$data3 = $obj->count("item","orders", $where2);
$data4 = $obj->count("item","orders", $where3);
$data = array("tea"=>$data1, "coffee"=>$data2, "samosa"=>$data3, "cake"=>$data4);
print_r (json_encode($data));


?>
