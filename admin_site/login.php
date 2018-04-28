<?php
  $error = '';
  if(isset($_POST['user'])){
    if(empty($_POST['user']) || empty($_POST['pass'])) {
     $error = "Username or Password is invalid.";
     header("Location: login_home.php");
    }
    else{
      $user = $_POST['user'];
      $pass = $_POST['pass'];

      include "../connect_to_database.php";

      $stmt = "SELECT * from users WHERE pass='$pass' AND user='$user'";

      if($result = $conn->query($stmt)){

      $rows = $result->num_rows;
      if($rows == 1){
      header("Location: index.php"); // Redirecting to other page
      }
      else
      {
        header("Location: login_home.php");
        $error = "Username of Password is Invalid";
      }
      mysqli_close($conn); // Closing connection
      }
      }
    }

?>
