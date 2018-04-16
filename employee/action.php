<?php
if(!isset($_SESSION))
    {
      session_start();
    }
include "../db/db.php";  //include the connnection

// extend so that it can can use conn variable for connnections
class dataOperaion extends Database {

  // create a function insert that takes two arguments as parameters
  public function insert($table, $fields){
    // INSERT INTO <table-name>(, ,) VALUES ('col1', 'col2')";
    $query = "";
    $query .= "INSERT INTO " .$table;

    //
    $query .= "(".implode(", ", array_keys($fields)).") VALUES ";

    // used to get an array of values from another array that may conntain key-value pairs or just values
    $query .= "('".implode("', '", array_values($fields))."')";
    //echo $query;
    $result = mysqli_query($this -> conn, $query);
    if($result){
      return true;
    }
  }

  // now function for fetching data from Database
  public function fetch($table){
    $query = "SELECT * FROM ".$table;
    //$array = array();
    $result = mysqli_query($this->conn, $query);
    //echo $query;
    while($row = mysqli_fetch_assoc($result)){
    $array[] = $row;
    }
    return $array;
  }

// code for selecting data using id or other columnname
public function select($table, $where){
  $query = "";
  $candition = "";
  foreach ($where as $key => $value) {
    // id or 'somw other columnname' = '5' and medicine_name = "kuffdryl"
    $candition .= $key . "='" .$value ."' AND ";
  }
   $candition = substr($candition, 0 , -5);
   $query .= "SELECT * FROM ".$table. " WHERE " .$candition;
   //echo $query;
   $result = mysqli_query($this->conn, $query);
   while($row = mysqli_fetch_assoc($result)){
   $array[] = $row;
   }
   return $array;
}

// code for counting data using id or columnname
public function count($column, $table, $where){
  $query = "";
  $candition = "";
  foreach ($where as $key => $value) {
    $candition .= $key . "='" .$value ."' AND ";
  }
   $candition = substr($candition, 0 , -5);
   $query .= "SELECT COUNT"."(".$column.")"." FROM " .$table. " WHERE " .$candition;
   // echo $query;
   $result = mysqli_query($this->conn, $query);
   $row = mysqli_fetch_row($result);
   return $row;
}


// code for selecting sum using variable
public function sum($column, $table, $where){
  $query = "";
  $candition = "";
  foreach ($where as $key => $value) {

    $candition .= $key . "='" .$value ."' AND ";
  }
   $candition = substr($candition, 0 , -5);
   $query = "SELECT SUM("  .$column.  ") FROM ".$table. " WHERE " .$candition;
   // echo $query;
   $result = mysqli_query($this->conn, $query);
   $row = mysqli_fetch_row($result);
   return $row;
}


}

 $obj = new dataOperaion;

 if(isset($_POST['save_order'])){
   $time=mktime(date('h')+5,date('i')+30,date('s'));
    $date = date('d-m-Y H:i', $time);
    $quantity = strip_tags(htmlspecialchars($_POST['quantity']));
    $item = strip_tags(htmlspecialchars($_POST['item']));
    $where = array("title"=>$item);
    $row = $obj->select("items", $where);
    $price = $row["price"];

    $total_price = $price * $quantity;

   $myArray = array(
     "order_date" => strip_tags(htmlspecialchars($_POST['order_date'])),
     "item" => strip_tags(htmlspecialchars($_POST['item'])),
     "quantity" => $quantity,
      "auto_date" => $date,
     "total_price" => $total_price,
     "emp_name" => strip_tags(htmlspecialchars($_POST['emp_name']))
   );

   if($obj -> insert("orders", $myArray)){
     $_SESSION['details'] = $myArray;
     header("location:success.php?message=successfully added");
   }
 }


 // logogut
 if (isset($_POST['logout'])) {
   session_destroy();
   header("location: ../index.php");
 }
 ?>
