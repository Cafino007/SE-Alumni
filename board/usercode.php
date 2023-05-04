<?php
session_start();
$hostName = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "alumni";
$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


if(isset($_POST['Update']))
{
  $id = $_POST['userid'];
  $name= $_POST['name'];
  $role = $_POST["role"];
  $role = str_replace(" ", "", $role);


  $query = "UPDATE users SET name = '$name', role=' $role' WHERE userid = '$id'";
  $query_run = mysqli_query($conn,$query);

  if($query_run)
  {
  
    $_SESSION['message'] = "Image and Caption Updated Succesfully!!";
    header('Location: user.php');
  }
  else
  {
    $_SESSION['message'] = "Update didnt went through!!";
        header('Location: user.php');
  }

}