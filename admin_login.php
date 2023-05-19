<?php
    include('admin_conn.php');
    session_start();
    $message = "";
    if(isset($_POST['login'])){
        $username=$_POST['username'];
        $password=$_POST['password'];
     
        $query=mysqli_query($conn,"select * from admin where user_name='" . $username . "'AND user_password='" . $password . "' limit 1");
        $row  = mysqli_fetch_array($result);
        if (is_array($row)) {
            $_SESSION["name"] = $row['name'];
            $_SESSION["password"] = $row['password'];
        } else {
            $message = "Invalid Username or Password!";
        }
        }
        if (isset($_SESSION["name"])) {
        header("Location:Admin/index.php");
}
        
?>

<?php
include 'conn.php';
session_start();
$message = "";
if (isset($_POST['username'])) {
  $uname = $_POST['username'];
  $password = $_POST['password'];
  $result = mysqli_query($con, "select * from admin where name='" . $uname . "'AND password='" . $password . "' limit 1");
  $row  = mysqli_fetch_array($result);
  if (is_array($row)) {
    $_SESSION["name"] = $row['name'];
    $_SESSION["password"] = $row['password'];
  } else {
    $message = "Invalid Username or Password!";
  }
}
if (isset($_SESSION["name"])) {
  header("Location:Admin/index.php");
}
?>