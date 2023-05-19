<?php
include 'hospital_conn.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

  <link rel="stylesheet" type="text/css"
    href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
  <script type="text/javascript" charset="utf8"
    src="https://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
</head>

<body>
  <?php
if($_SESSION["username"]) {
?>
  <body>
  <div class="container">
    <div class="col-lg-12">
      <br><br>
      <h1 class="text-warning text-center"> Emergency Cases </h1> 
      <br>
      <table id="tabledata" class=" table table-striped table-hover table-bordered">

        <tr class="bg-dark text-white text-center">
          <th> Id </th>
          <th> Patient Details </th>
          <th> Emergency / Health Details </th>
          <th> Images </th>
          <th> Status </th>
          <th> Location </th>
        </tr>

        <?php
        $q = "select * from emergencytable order by id DESC";

        $query = mysqli_query($con, $q);

        while ($res = mysqli_fetch_array($query)) {
        ?>
        <tr class="text-center">
          <td>
            <?php echo $res['Id'];  ?>
          </td>
          <td>
            <?php echo $res['NameOrPhone'];  ?>
          </td>
          <td>
            <?php echo $res['details'];  ?>
          </td>
          <td>
           <img src="<?php echo $res['photo']?>" height="250" width="250">
          </td>
          <td class="bg-success text-white">
            <?php if ($res['Request_Status']){
              echo 'Accepted By Hospital' ; 
            }
            else echo 'Pending'; 
            ?>
          </td>
          <td style = "height:250px; width:250px">
          <?php if($res['latitude']=="" && $res['longitude']==""){
              echo "Location not Captured";
          }
          else{
          ?> 
          <iframe src="https://www.google.com/maps?q=<?php echo $res['latitude'] ?> , <?php echo $res['longitude']; ?>&h1=es;z=14&output=embed " frameborder="0" style = "height:100%; width:100%"></iframe>
           <?php 
          }
          ?>
          </td>
          <td> <button class="btn-primary btn"><a href="acceptRequest.php?id=<?php echo $res['Id']; ?>"
              class="text-white"> Accept </a> </button> </td>

        </tr>

        <?php
        }
        ?>

      </table>

    </div>
  </div>

  <script type="text/javascript">
    $(document).ready(function () {
      $('#tabledata').DataTable();
    })
  </script> 
  <!-- <h1>This is Hospital Page</h1> -->
  <div class="container">
  <div class="vertical-center">
    <button onclick="document.location='hospital_logout.php'" style="cen" >Logout</button> 
  </div>
</div>

<?php
}
else echo "<h1>You Are Not Authorised Hospital</h1>";
?>
</body>

<style>
.container1 {
  height: 200px;
  position: relative;
  border: 3px solid green;
}

.vertical-center1 {
  margin: 0;
  position: absolute;
  top: 50%;
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
}
</style>
</html>
