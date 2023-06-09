<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Evonyee - Responsive HTML5 Template</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- site icons -->
      <link rel="icon" href="img/fevicon.png" type="image/png" />
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css" />
      <!-- site css -->
      <link rel="stylesheet" href="css/style.css" />
      <!-- responsive css -->
      <link rel="stylesheet" href="css/responsive.css" />
      <!-- colors css -->
      <link rel="stylesheet" href="css/colors.css" />
      <!-- custom css -->
      <link rel="stylesheet" href="css/custom.css" />
      <!-- wow animation css -->
      <link rel="stylesheet" href="css/animate.css" />
      <!-- Revolution Loaling Fonts and Icons  -->
      <link rel="stylesheet" href="js/revolution/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
      <!-- Revolution style Sheets  -->
      <link rel="stylesheet" href="js/revolution/css/settings.css">
      <link rel="stylesheet" href="js/revolution/css/layers.css">
      <link rel="stylesheet" href="js/revolution/css/navigation.css">
      <!-- owl stylesheets -->
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/owl.theme.default.css">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <body>
      <!-- Header  -->
   <header class="header-area">
            <div class="right">
               <a href="signin.html"><i class="fa fa-user" aria-hidden="true"></i></a>
            </div>
            <div class="container">
               <div class="row d_flex">
                  <div class="col-sm-3 logo_sm">
                     <div class="logo">
                        <a href="index.html"></a>
                     </div>
                  </div>
                  <div class="col-lg-10 offset-lg-1 col-md-12 col-sm-9">
                     <div class="navbar-area">
                        <nav class="site-navbar">
                           <ul>
                           <li><a href="index.html">Home</a></li> 
                           <li><a class="active" href="info panel.php">INFO PANEL</a></li>       
                             <li><a href="contact.html">Contact </a></li>  
                           </ul>
                           <button class="nav-toggler">
                           <span></span>
                           </button>
                        </nav>
                     </div>
                  </div>
               </div>
            </div>
         </header>
         <!-- End of Header  -->
      <section class="layout_padding about_section">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="row">
                     <div class="row">
                        <div class="col-md-7 p-relative r-left">
                           <div class="full back_blog text_align_center padding_right_left_15">
                              <br>
                              <br>
                              <img src="images/broken road.jfif" alt="#" />
                           </div>
                        </div>
                        <div class="col-md-5">
                           <div class="full heading_s1">
                              <br>
                              <br>
                              <h3>Headline</h3>
                              <?php 
                          $servername = "localhost";
                          $username = "root";
                          $password = "";
                          $database = "login";

                          $conn = mysqli_connect($servername, $username, $password, $database);
                        
                          if (!$conn){
                           die("Sorry we failed to connect: ". mysqli_connect_error());
                           }
                           // else{
                           //    echo "Connection was successful<br>";
                           // }
                           $sql = "SELECT * FROM `IncidentTable`";
                           $result = mysqli_query($conn, $sql);

                           $num = mysqli_num_rows($result);

                           if($num> 0){
                              echo "<br>";
                              while($row = mysqli_fetch_assoc($result)){
                                 echo $row['Incident1']; 
                             }
                             echo "<br>";
                             echo "<br>";
                             echo "<br>";
                           }
                           
                        ?>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
   </body>
   </html>
