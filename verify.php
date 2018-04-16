<?php
	session_start();
	if (isset($_POST['login'])) {
    // db connection
    function dbCon() {
		  $hostname = "localhost"; /* Host name */
		  $username = "root"; /* User */
		  $password = ""; /* Password */
		  $dbname = "restaurant"; /* Database name */
		  if($mysqli = new mysqli($hostname, $username, $password, $dbname )) return $mysqli; else return false;
		}

		if(!dbCon())
		exit("<script language='javascript'>alert('Unable to connect to database')</script>");
		else $conn=dbCon();

    if($_SERVER["REQUEST_METHOD"] == "POST"  AND isset($_POST['login'])) {
      // username and password sent from form

      $username = mysqli_real_escape_string($conn,$_POST['username']);
      $password = mysqli_real_escape_string($conn,$_POST['password']);

      $sql = "SELECT id FROM employee WHERE username = '$username' and password = '$password'";
      $result = mysqli_query($conn, $sql);
      $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);

      // If result matched $username and $password, table row must be 1 row

      if($count == 1) {
         $_SESSION['user'] = $username;
         echo $_SESSION['user'];
         header("location: employee/index.php");
      }else {
         $error = "Your Login Username or Password is invalid";
          $_SESSION['invalid-user'] = "Invalid username or password";
         header("location: index.php");
      }
   }
  }
 ?>
