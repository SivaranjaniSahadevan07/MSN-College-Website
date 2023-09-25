<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MSN Pioneer Meenakshi Women's College</title>
    <link rel="icon" href="MSN-College_icon.png">

    <link rel="stylesheet" type="text/css" href="style.css">

    <script src="https://use.fontawesome.com/ed11246972.js"></script>

    <script src="https://kit.fontawesome.com/b7139889bf.js" crossorigin="anonymous"></script>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <style type="text/css">
            h3{
                color: darkblue;
            }
            p{
                color: #036c9e;
                padding: 5px;
            }
            h6{
                padding: 5px;
            }
        </style>
</head>

<body>

    <div class="header">

        <img src="Header_MSN-College_new.png"
            style="width:100%; height: 120px; border-radius: 20px ; outline-width: thin; padding:all;">

    </div>

    <div class="menu_bar">

        <ul>
            <li><a href="about.html">About</a></li>
            <li><a href="administration.php">Administration</a></li>
            <li><a href="#">Academic</a> 
                <div class="sub-menu-1">
                    <ul>
                        <li><a href="department.php">Departments</a></li>
                        <li><a href="dynamic-full-calendar.html">Academic Calender</a></li>
                    </ul>
                </div>
            </li>
            <li><a href="#">Admission</a>
                <div class="sub-menu-1">
                    <ul>
                        <li><a href="courses.php">Courses Offered</a></li>
                        <li><a href="application.php">Take Admission</a></li>
                        <li><a href="rules.php">Rules & Regulations</a></li>
                    </ul>
                </div>
            </li>
            <li><a href="gallery.html">Gallery</a></li>
            <li><a href="contact.html">Contact</a></li>
            <li><a href="#">Login</a>
                <div class="sub-menu-1">
                    <ul>
                        <li><a href="admin_login.php">Admin</a></li>
                        <li><a href="staff_login.php">Staff</a></li>
                        <li><a href="stu_login.php">Student</a></li>
                        <li><a href="aluminae_login.php">Aluminae</a></li>
                    </ul>
                </div>
            </li>
        </ul>

    </div>

    <div class="main">

        <div id="slider">

            <div id="box">
                <img src="a.jpg">
            </div>

            <button class="prew" onclick="prewImage()"><i class="fa-solid fa-angle-left"></i></button>
            <button class="next" onclick="nextImage()"><i class="fa-solid fa-angle-right"></i>
            </button>

        </div>

    </div>

    <script>

        var slider_content = document.getElementById('box');

        // contain images in an array

        var image = ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', '21', '22', '23', '24', '25', '26', '27'];
        var i = image.length;

        // function for next slide

        function nextImage() {
            if (i < image.length) {
                i = i + 1;
            } else {
                i = 1;
            }
            slider_content.innerHTML = "<img src=" + image[i - 1] + ".jpg>";
        }

        // function for prew slide

        function prewImage() {
            if (i < image.length + 1 && i > 1) {
                i = i - 1;
            } else {
                i = image.length;
            }
            slider_content.innerHTML = "<img src=" + image[i - 1] + ".jpg>";
        }

        // script for auto image slider

        setInterval(nextImage, 2000);

    </script>


    <div class="box-box1">

        <div class="box1-1">
            <marquee behavior="scroll" direction="up" height="250px" scrollamount="3"  onmouseover="this. stop();" onmouseout="this.start();">
                    <h2 style="text-align:center;color: red;">Notice Board</h2><br><br> 
                  
                        <?php
                            $sql="select * from notice_board";
                            $result=mysqli_query($con,$sql);
                            if($result){
                                $i=0;
                                while($row=mysqli_fetch_assoc($result)){
                                    $i++;
                                    $id=$row['id'];
                                    $title=$row['title'];
                                    $content=$row['content'];
                                    echo '<ul>
                                          <h3>'.$title.':</h3><br>
                                          <p>'.$content.'</p>
                                          <h6>-----------------------------------------------------------------------------------------------------------------------</h6>
                                          </ul>';
                                }         
                            }
                        ?>
        </marquee>
        </div>

        <div class="box1-1" style="overflow: auto;">
            
                <h2 style="text-align:center;color: red;">Achievements Board</h2><br><br>   
                        <?php
                            $sql="select * from achieved";
                            $result=mysqli_query($con,$sql);
                            if($result){
                                $i=0;
                                while($row=mysqli_fetch_assoc($result)){
                                    $i++;
                                    $id=$row['id'];
                                    $title=$row['title'];
                                    $details=$row['details'];
                                    echo '<ul>
                                          <h3>'.$title.':</h3><br>
                                          <p>'.$details.'</p>
                                          <h6>-----------------------------------------------------------------------------------------------------------------------</h6>
                                          </ul>';
                                }         
                            }
                        ?>
       
        </div>

    </div>

    <div class="box-box2">

        <br>
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3930.8662924482383!2d78.27402521407593!3d9.861583278109697!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b00dd46885ea449%3A0x92ad755d77b32cd6!2sMadurai%20Sivakasi%20Nadar&#39;s%20Pioneer%20Meenakshi%20Women&#39;s%20College!5e0!3m2!1sen!2sin!4v1663851105291!5m2!1sen!2sin"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>


        <div class="tag">
            <h4 style="text-align: left;padding: 10px;box-shadow: 0px 0px 5px 2px #ccc;border-radius: 20px;">Quick Links
            </h4>
        </div>

        <div class="box2-2">

            <div class="box-2-2-1">
                <a href="rules.php">Rules &<br>Regulations</a><br>__________<br><br>
                <a href="about.html">History</a><br>__________<br><br>
                <a href="about_contact.html">Contact MSN</a><br>__________<br><br>
                <a href="gallery.html">Gallery</a><br>__________<br><br>
            </div>

            <div class="box2-2-1">
                <a href="courses.php">Programmes<br>Offered</a><br>___________<br><br>
                <a href="department.php">Departments</a><br>___________<br><br>
                <a href="stu_logged.php#placement">Placement</a><br>___________<br><br>
                <a href="contact.html">Enquiry</a><br>___________<br><br>
            </div>

            <div class="box2-2-1">
                <a href="courses.php#table2">Add-on<br>
                    courses</a><br>____________<br></a><br>
                <a href="ug_application.html">UG Admission</a><br>____________<br><br>
                <a href="pg_application.html">PG Admission</a><br>____________<br><br>
                <a href="dynamic-full-calendar.html">Events Calendar</a><br>____________<br><br>
            </div>

        </div>
       
    </div>

    <div class="menu_bar2">

        <ul>
            <li><a href="about.html">About</a></li>
            <li><a href="courses.php">Academic</a></li>
            <li><a href="administration.php">Administration</a></li>
            <li><a href="application.php">Admission</a></li>
            <li><a href="gallery.html">Gallary</a></li>
            <li><a href="about_contact.html">Contact</a></li>
        </ul>

    </div>

    <div class="footer" style="padding: 25px; overflow: hidden; background-color: #005580;">
        <p style="text-align: center;color: whitesmoke;"><br><b>2023 @ All Rights Reserved to MSN Pioneer Meenakshi
                Women's College (Autonomous),Poovanthi Developed by Sivaranjani Sahadevan & Gayathri V from the
                Department of Computer Science as Final Year Project.<b>
        </p>
            <center align="center">
            <div class="logo">
            <i class="fa fa-twitter-square"></i>
            <i class="fa fa-linkedin-square"></i>
            <i class="fa fa-facebook-official"></i>
            <i class="fa fa-youtube-square"></i> 
            </div>
        </center>
    </div>

     <button onclick="topFunction()" id="myBtn" title="Go to top" style="background: skyblue;"><b>Top</b></button>

<script>
// Get the button
let mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>

</body>

</html>
