<?php  
 $connect = mysqli_connect("localhost", "root", "", "classroom");  
 $query = "SELECT choice, count(*) as number FROM mcq GROUP BY choice";  
 $result = mysqli_query($connect, $query);  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
            <meta charset="utf-8">
            <meta http-equiv="x-ua-compatible" content="ie=edge">
            <title>Here's the Question!</title>
            <meta name="description" content="">
            <meta name="viewport" content="width=device-width, initial-scale=1">

            <!-- <link rel="manifest" href="site.webmanifest"> -->
            <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
            <!-- Place favicon.ico in the root directory -->

            <!-- CSS here -->
            <link rel="stylesheet" href="css/bootstrap.min.css">
            <link rel="stylesheet" href="css/owl.carousel.min.css">
            <link rel="stylesheet" href="css/magnific-popup.css">
            <link rel="stylesheet" href="css/font-awesome.min.css">
            <link rel="stylesheet" href="css/themify-icons.css">
            <link rel="stylesheet" href="css/nice-select.css">
            <link rel="stylesheet" href="css/flaticon.css">
            <link rel="stylesheet" href="css/gijgo.css">
            <link rel="stylesheet" href="css/animate.css">
            <link rel="stylesheet" href="css/slicknav.css">
            <link rel="stylesheet" href="css/style.css">
            <!-- <link rel="stylesheet" href="css/responsive.css"> -->

           <title>Piechart</title>  
           <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
           <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['Choice', 'Number'],  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo "['".$row["choice"]."', ".$row["number"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'Percentage of Options you selected',  
                      //is3D:true,  
                      pieHole: 0.4  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart'));  
                chart.draw(data, options);  
           }  
           </script>  
      </head>  
      <body>  
          <header>
                <div class="header-area ">
                    <div class="header-top_area">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="header_top_wrap d-flex justify-content-between align-items-center">
                                        <div class="text_wrap">
                                            <p><span>+880166 253 232</span> <span>info@domain.com</span></p>
                                        </div>
                                        <div class="text_wrap">
                                            <p><a href="teacher.html"> Professor </a> 
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="sticky-header" class="main-header-area">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="header_wrap d-flex justify-content-between align-items-center">
                                        <div class="header_left">
                                            <div class="logo">
                                                <a href="teacher.html">
                                                    <img src="img/logo.png" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="header_right d-flex align-items-center">
                                            <div class="main-menu  d-none d-lg-block">
                                                <nav>
                                                    <ul id="navigation">
                                                        <li><a  href="teacher.html">home</a></li>
                                                        <li><a href="#">Profile <i class="ti-angle-down"></i></a>
                                                            <ul class="submenu">
                                                                <li><a href="#">View Profile</a></li>
                                                                <li><a href="#">Logout</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </nav>
                                            </div>
                                            <div class="Appointment">
                                                <div class="book_btn d-none d-lg-block">
                                                    <a data-scroll-nav='1' href="#">Create new subject</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mobile_menu d-block d-lg-none"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- header-end -->
           <br /><br />  
           <div style="width:900px;">  
                <h3 align="center">Analyse your Performance!</h3>  
                <br />  
                <div id="piechart" style="width: 900px; height: 500px;"></div>  
           </div>  

      </body> 
      <?php

        include_once 'dbh.inc.php';

        $sql = "SELECT rightans from questions;";
        $result = $conn -> query($sql);
        
        if ($result->num_rows > 0){
            while ($row = $result -> fetch_assoc()) {
                        echo "The right answer is:" .  $row["rightans"] ;

            }
        }
    ?> 
 </html>  