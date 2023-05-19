<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="css/admin.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>
<?php
if($_SESSION["username"]) {
?>
<div class="divheading1">
    <div><h2>ADMIN PANEL</h2></div>
    </div>
<div class="btndiv1">
    <button onclick="document.location='adminEdit.html'">Update News</button>
  <!-- <br><button onclick="document.location='adminVerify.php'">Verify Hospitals</button>-->
   <br><button onclick="document.location='admin_logout.php'">Logout</button><br>
    <button onclick="document.location='UserQueries.php'">User Queries</button>
    <button onclick="document.location='RecentIncident.php'">Recent Incident</button>
    </div>
<?php
}else echo "<h1>Please login first .</h1>";
?>

</body>
</html>