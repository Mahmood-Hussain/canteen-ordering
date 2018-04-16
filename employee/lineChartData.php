<?php
include_once 'action.php';
//setting header to json
header('Content-Type: application/json');
$user = $_SESSION['user'];
$where = array("emp_name"=> $user);
$arr = $obj->select("orders", $where);

// $arr = array
// (
// 	array('quantity' => 99, 'order_date' => 'test@gmail.com'),
// 	array('quantity' => 5.10, 'order_date' => 'test@gmail.com')
// );


$res = array();

foreach ($arr as $data) {
	if (!isset($res[$data['order_date']])) {
		$res[$data['order_date']] = 0;
	}

	$res[$data['order_date']] += $data['quantity'];
}

$arr = array();
foreach ($res as $date => $quantity) {
	$arr[] = array('date' => $date, 'quantity' => $quantity);
}

// print_r ($arr);



// $res = $data;
// print_r($res)
 print json_encode($arr);


?>
