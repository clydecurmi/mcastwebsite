<?php
    $connect = mysqli_connect("localhost", "root", "", "mcastdatabase");
    $record_per_page = 6;
    $page = '';

    if(isset($_GET["page"])){
        $page = $_GET["page"];
    }
    else{
        $page = 1;
    }

    $start_from = ($page-1)*$record_per_page;

    $query = "SELECT * FROM `courses and fees` order by 'Course Name' DESC LIMIT $start_from, $record_per_page";
    $result = mysqli_query($connect, $query);
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
  
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="shortcut icon" href="images/favicon.png" />


<title>MCAST - The Malta College of Art, Science and Technology</title>
  
<link rel="stylesheet" href="Style.css">

</head>
<body>
    

  

<div id="navbar">
    <div id="container">
      <aside class="nav">
        
        <div class="mcastimage"><img class= "logo" src="Images/logo1.png" alt="Logo"><button class="btnlogo" href="HomePage.html"></button></img></div>

        <div class="topnav">
          <li>

            <div class="subnav">
          <button href="#study" class="subnavbtn">STUDY  <i class="fa fa-angle-down" style="font-size:15px"></i></button>
          <div class="subnav-content">
            <a href="undergraduate.html">Undergradute</a>
            <a href="postgraduate.html">Postgraduate</a>
            <a href="doctorate.html">Doctoral Programme DRes</a>
            <a href="cpd.html">Continuous Professional Development</a>
            <a href="international.html">International Courses</a>
            <a href="fulltime.html">Full-Time</a>
            <a href="#parttime.html">Part-Time</a><br><br>
            <a href="online.html">Online Courses</a>
            <a href="ApplyPage.html">Apply Now</a>
            <a href="signin.php">Sign In</a>
          </div>
        </div> 

          
          <div class="subnav1">
          <button href="#research" class="subnavbtn1">RESEARCH  <i class="fa fa-angle-down" style="font-size:15px"></i></button>
          <div class="subnav-content1">
            <a href="ResearchFramework.html">Research Framework</a>
            <a href="Innovation.html">Innovation</a>
          </div>
        </div> 


        <div class="subnav1">
          <button href="#about" class="subnavbtn1">ABOUT  <i class="fa fa-angle-down" style="font-size:15px"></i></button>
          <div class="subnav-content1">
            <a href="MissionStatement.html">Mission Statement</a>
            <a href="StrategicPlan.html">Strategic Plan</a>
          </div>
        </div> 


        <div class="subnav1">
          <button href="#academicentities" class="subnavbtn1">ACADEMIC ENTITIES  <i class="fa fa-angle-down" style="font-size:15px"></i></button>
          <div class="subnav-content1">
            <a href="Faculties.html">Faculties</a>
            <a href="Institutes.html">Institutes</a>
          </div>
        </div> 


        <div class="subnav1">
          <button href="#services" class="subnavbtn1">SERVICES  <i class="fa fa-angle-down" style="font-size:15px"></i></button>
          <div class="subnav-content1">
            <a href="Apprenticeships.html">Apprenticeships</a>
            <a href="Covid.html">Covid-19</a>
          </div>
        </div> 

         </div>
        
      
      </aside>
      
    </div>
  </div>
  <div class="phpcontainer1">

  <div class="pagination1"> 

  <table class="paginatedtable">
      <tr>
    <td><b>Course Name</b></td>
    <td><b>Course Reference</b></td>
    <td class="courses"><b>Course Fees</b></td>
    </tr>

    <?php

    while($row = mysqli_fetch_array($result))
    {
    ?>
    <tr>
        <td><?php echo $row["Course Name"]; ?></td>
        <td><?php echo $row["Course Reference"]; ?></td>
        <td><?php echo $row["Course Fees"]; ?></td>
    </tr>
    <?php
    }

    ?>

        </table>

    <div class="pagination">
        <?php
            $page_query = "SELECT * FROM `courses and fees` ORDER BY 'Course Name' DESC";
            $page_result = mysqli_query($connect, $page_query);
            $total_records = mysqli_num_rows($page_result);
            $total_pages = ceil($total_records/$record_per_page);
            for($i=1; $i<=$total_pages; $i++)
            {
                echo '<a href="paginatedlist.php?page='.$i.'">'.$i.'</a>';
            }
        ?>

    </div>
</div>
 </div>

 <div id="container1">
        
        <div class="grid-container4">
            <div></div>
        <div class="grid-container3">
          <a onclick="FaceBook()" id="fb" class="fa fa-facebook"></a>
          <a onclick="Twitter()" id="fb" class="fa fa-twitter"></a>
          <a onclick="Instagram()" id="fb" class="fa fa-instagram"></a>
          <a onclick="YouTube()" id="fb" class="fa fa-youtube-play"></a>
          <a onclick="LinkedIn()" id="fb" class="fa fa-linkedin"></a>
        </div>   
    </div>
    
    <div class="grid-container5">
        <div class="grid-item6"><i style="font-size:24px" class="fa">&#xf095;</i>  +365 2398 7100</div>
        <div class="grid-item6"><i style="font-size:24px" class="fa">&#xf0e0;</i>  information@mcast.edu.mt</div>
        <div class="grid-item6"><i style="font-size:24px" class="fa">&#xf041;</i>  Triq Kordin, Paola, Malta</div>
    
          </div>
        </div>
    
        <footer class="footer">
    
          
    
        <div class="grid-container6">
        <div class="grid-item7">LEARN WITH US<br><br><br><a class="buttonfooter" href="ApplyPage.html">Apply Now</a><br><br><a class="buttonfooter" href="PartTime.html">Part-Time Courses</a><br><br><a class="buttonfooter" href="FullTime.html">Full-Time Courses</a><br><br><a class="buttonfooter" href="International.html">International Courses</a></div>
        <div class="grid-item7">ABOUT MCAST<br><br><br><a class="buttonfooter" href="Covid.html">Covid-19</a><br><br><a class="buttonfooter" href="StrategicPlan.html">Strategic Plan</a><br><br><a class="buttonfooter" href="MissionStatement.html">Mission Statement</a><br><br><a class="buttonfooter" onclick="Sitemap()">IPO and Sitemap</a></div>
        <div class="grid-item7">KNOW MORE<br><br><br><a class="buttonfooter" href="Faculties.html">Faculties</a><br><br><a class="buttonfooter" href="Institutes.html">Institutes</a><br><br><a class="buttonfooter" href="Innovation.html">Innovations</a></div>

    </footer>

    <div class="footer2">
    <div class="borderline"></div>
    <div class="footertext">This website contains a wide variety of images relating to the College's activities. Many of those were originally photographed or filmed prior to the Covid-19 pandemic and the restrictions and preventative measures<br> that have been put in place since.</div>
    <div class="copyrighttext">Ⓒ The Malta College of Arts, Science and Technology</div>
    </div>

    <script>

      function FaceBook() {
    window.open("https://www.facebook.com/MCASTmt/");
    }

    function Twitter() {
    window.open("https://twitter.com/mcastmt");
    }

    function Instagram() {
    window.open("https://www.instagram.com/mcastmt/");
    }

    function YouTube() {
    window.open("https://www.youtube.com/channel/UCpf-MitFkBDSsn552PMC6hw");
    }

    function LinkedIn() {
    window.open("https://mt.linkedin.com/school/malta-college-of-arts-science-&-technology-mcast-/");
    }

    function Sitemap() {
    window.open("Images/IPO&Sitemap.pdf");
    }

    
    
          </script>
</body>
</html>
