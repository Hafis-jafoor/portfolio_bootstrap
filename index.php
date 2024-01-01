<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap navigation</title>
    <script src="https://kit.fontawesome.com/55287b7042.js" crossorigin="anonymous"></script>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        body{
            background-color:#212529;
        }
        .card-1{
            transition: all 2s;
        }
        .card-1:hover{
            transform: rotate3d(0, 1, 0, 3.142rad);
        }
        .card-w{
            border-radius: 20px;
            border: 5px solid #0dcaf0;
        }
        a{
            text-decoration: none;
        }
        .whats-app {
            position: fixed;
            width: 60px;
            height: 60px;
            bottom: 40px;
            right: 25px;
            background-color: #25d366;
            color: #FFF;
            border-radius: 50px;
            text-align: center;
            font-size: 50px;
            z-index: 100;
        }
        .my-float {
            position: absolute;
            margin-top: 5px;
            margin-left: -22px;
        }
        .icon1:after {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='white'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
        }
        .icon1:not(.collapsed):after{
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='white'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
        }
        .mark1{
            color: red;
        }
    </style>
</head>
<body>
    
    <a  class="whats-app" href="https://wa.me/9633240773" target="_blank">
        <i class="fa fa-whatsapp my-float"></i>
    </a>
    <div class="container-fluid">
        <div class="row text-white bg-dark">
            <div class="col-md-11">
                <h3 class="ms-3">PORTFOLIO</h3>
            </div>
            <div class="col-md-1 p-2">
                 <!-- Button trigger modal -->
                <button type="button" class="btn btn-dark justify-content-center bg-info" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Hire me
                </button>
  
              <!-- Modal -->
              <div class="modal fade text-dark" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Contact Me</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <?php
                        echo'
                        <form action="#" method="post"  name="forms-1" target="_self" onsubmit="check(event)">
                            <div class="row ">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="name">Name:</label>
                                        <input class="form-control" id="name" name="name1" required type="text" placeholder="Enter The Name">
                                        <div id="namehelp" class="form-text mark1"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="phone">Phone No:</label>
                                        <input class="form-control" id="phone" type="number"required name="phone1" placeholder="Enter The Phone Number">
                                        <div id="phonehelp" class="form-text mark1"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="email">Email:</label><br>
                                        <input class="form-control" id="email" required type="email" name="email1" placeholder="Enter The Email">
                                        <div id="emailHelp" class="form-text">We will never share your email with anyone else.</div>
                                        <div id="emailHelp1" class="form-text mark1"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="message">Message:</label><br>
                                        <textarea  class="form-control" id="message" required name="message1" placeholder="Enter The Message"></textarea>
                                        <div id="messagehelp" class="form-text mark1"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-3 d-grid gap-2">
                                        <button type="submit" class="btn btn-secondary">Connect Me</button>
                                    </div>
                                </div>
                            </div>
                        </form>';
                            $servername = "localhost";
                            $username = "root";
                            $password = "";
                            $dbname = "portfolio";

                            // Create connection
                            $conn = new mysqli($servername, $username, $password, $dbname);

                            // Check connection
                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }

                            // Get data from the form
                            $name = $_POST['name1'];
                            $phone = $_POST['phone1'];
                            $email = $_POST['email1'];
                            $message = $_POST['message1'];
                            // $feedback = $_POST['feedback'];

                            // Insert data into the database
                            $sql = "INSERT INTO contact_me (name, phone_no, email, message) VALUES ('$name', '$phone', '$email','$message')";

                            if ($conn->query($sql) === TRUE) {
                                echo "message submitted successfully";
                            } else {
                                echo "Error: " . $sql . "<br>" . $conn->error;
                            }

                            // Close the database connection
                            $conn->close();
                        ?>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary"  data-bs-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>  
              </div>
            </div>
        </div>
    </div>
    <script>
        function check(event){
            // event.preventDefault();

            var name = document.getElementById('name').value.trim();
            var phone = document.getElementById('phone').value.trim();
            var email = document.getElementById('email').value.trim();
            var message = document.getElementById('message').value.trim();


            // Simple validation: Check if name field not empty
            // if (name === '') {
            //     event.preventDefault();
            //     // alert('Please fill the name field.');
            //     document.getElementById("namehelp").innerHTML='enter the username';
            //     return false;
            // }
    
            // Validate first name: Allow only letters and space
            var NameRegex = /^[A-Za-z\s]+$/;
            if (!NameRegex.test(name)) {
                event.preventDefault();
                // alert('Please enter a valid first name (letters and space only).');
                document.getElementById("namehelp").innerHTML='enter valid username';
                return false;
            }
            else{
                document.getElementById("namehelp").innerHTML="<span style='color: green;'>correct</span>";
            }

            // Simple validation: Check if phone field not empty
            // if (phone === '') {
            //     event.preventDefault();
            //     // alert('Please fill the phone field.');
            //     document.getElementById("phonehelp").innerHTML='enter the phone number';
            //     return false;
            // }

             // Validate phone number: Allow only numeric input
            var phoneNumberRegex = /^\d{10}$/;
            if (!phoneNumberRegex.test(phone)) {
                event.preventDefault();
                // alert('Please enter a valid phone number (numeric characters only and limit 10).');
                document.getElementById("phonehelp").innerHTML='enter valid number';
                return false;
            }
            else{
                document.getElementById("phonehelp").innerHTML="<span style='color: green;'>correct</span>";
            }

            // Simple validation: Check if email field not empty
            // if (email === '') {
            //     event.preventDefault();
            //     // alert('Please fill the email field.');
            //     document.getElementById("emailHelp1").innerHTML='enter the email';
            //     return false;
            // }
            

            // Validate email format
            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) {
                event.preventDefault();
                // alert('Please enter a valid email address.');
                document.getElementById("emailHelp1").innerHTML='enter the valid email';
                return false;
            }
            else{
                document.getElementById("emailHelp1").innerHTML="<span style='color: green;'>correct</span>";
            }
            
            // Simple validation: Check if message field not empty
            // if (message === '') {
            //     event.preventDefault();
            //     // alert('Please fill the message field.');
            //     document.getElementById("messagehelp").innerHTML='enter the message';
            //     return false;
            // }
            

             // If all validations pass, the form will be submitted
             alert('Message Send successfully!');
             document.getElementById("messagehelp").innerHTML='';

        }
    </script>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <img src="images/logo.png" alt="" height="40">
            <!-- <a class="navbar-brand" href="#">Navbar</a> -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end me-5" id="navbarNavDropdown">
                <ul class="navbar-nav">
                <li class="nav-item ms-3">
                    <a class="nav-link active" aria-current="page" href="#home">Home</a>
                </li>
                <li class="nav-item ms-3">
                    <a class="nav-link" href="#about">About Me</a>
                </li>
                <li class="nav-item ms-3">
                    <a class="nav-link" href="#services">Services</a>
                </li>
                <li class="nav-item ms-3">
                    <a class="nav-link" href="#works">Works</a>
                </li>
                <li class="nav-item ms-3">
                    <a class="nav-link" href="#Interests">Interests</a>
                </li>
                <li class="nav-item  ms-3">
                    <a class="nav-link " href="#expertise">
                    Expertise
                    </a>
                </li>
                <li class="nav-item  ms-3">
                    <a class="nav-link " href="#contact">
                    contact Me
                    </a>
                </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid bg-dark">
        <div class="row-fluid text-white vh-100" id="home" style="margin-top: 150px;">
            <div class="col-md-12 text-center ">
                <!-- <div class="center1" style="position: absolute;top: 60%;left: 50%; transform: translate(-50%,-50%);"> -->
                    <h1 style="font-size: 70px;">Full Stack Developer</h1>
                    <h3 style="font-size: 40px;">Hi,I'm <span style="color: aqua;">Hafis Jafoor V</span><br> from India.</h3>
                    <a href="images/HAFIS_JAFOOR_V (5).pdf" download class="btn btn2 bg-info mt-3   ">Download CV</a><br><br>
            </div>
        </div>
        
        <!-- about me -->

        <div class="row text-white">
            <div class="row text-center text-info" id="about">
                <h3 style="font-weight: bolder; font-size: 50px;">About Me</h3>
            </div>
            <div class="row">
                <div class="col-md-6 p-5" >
                    <div class="row ">
                        <h4 class="text-center">Hi everyone, I am Hafis Jafoor V .completed Btech from government engineering college idukki on 2022.Worked as full stack and Odoo python developer at two different companies as a trainee for almost 1 year in two different domains in my industry. From this experience, I am sure that I can easily learn and adjust in my sector as a flexible person and an easy learner.The two achievements have succeded from my hardwork and with my confident.
                        </h4>
                        <div class="col-md-12 mt-5 p-3 bg-light" style="border: 1px solid white;border-radius: 30px;">
                            <div class="row text-center text-dark">
                                <h3 style="font-weight: bolder; font-size: 20px;">My Merits</h3>
                            </div>
                            <div class="row mt-3" >
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                      <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button collapsed  bg-dark text-white icon1" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        Experience
                                        </button>
                                      </h2>
                                      <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body bg-dark text-white">
                                          
                                            <!-- one -->

                                          <div class="accordion mt-3" id="accordionExample5">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingOne5">
                                                <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne5" aria-expanded="false" aria-controls="collapseOne5">
                                                    <strong class="text-info">•2023 Nov - 2023 Dec</strong>&nbsp;&nbsp;Internship under Ezio Solutions Private Limited.<br>
                                                </button>
                                                </h2>
                                                <div id="collapseOne5" class="accordion-collapse collapse" aria-labelledby="headingOne5" data-bs-parent="#accordionExample5">
                                                <div class="accordion-body">
                                                    <div class="container">
                                                    <div class="row">
                                                        <div class="col-md-2"></div>
                                                        <div class="col-md-8 text-center">
                                                            <div class="card bg-dark text-white border-0 ">
                                                                <img src="images/cert.webp" class="card-img-top" alt="...">
                                                                <div class="card-body">
                                                                <h5 class="card-title text-info">Internship certificate</h5>
                                                                <a href="#" class="btn btn-info" download>download</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2"></div>
                                                    </div>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                          
                                            <!-- second -->
                                            
                                            <div class="accordion mt-3" id="accordionExample4">
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="headingOne4">
                                                    <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne4" aria-expanded="false" aria-controls="collapseOne4">
                                                        <strong class="text-info">•2023 Jul - 2023 Nov</strong>&nbsp;&nbsp;Internship under DDU-GKY.<br>
                                                    </button>
                                                    </h2>
                                                    <div id="collapseOne4" class="accordion-collapse collapse" aria-labelledby="headingOne4" data-bs-parent="#accordionExample4">
                                                    <div class="accordion-body">
                                                        <div class="container">
                                                        <div class="row">
                                                            <div class="col-md-2"></div>
                                                            <div class="col-md-8 text-center">
                                                                <div class="card bg-dark text-white border-0 ">
                                                                    <img src="images/cert.webp" class="card-img-top" alt="...">
                                                                    <div class="card-body">
                                                                    <h5 class="card-title text-info">Internship certificate</h5>
                                                                    <a href="#" class="btn btn-info" download>download</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2"></div>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
    
                                        
                                        
                                            <!-- third -->
                                            
                                            <div class="accordion mt-3" id="accordionExample3">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingOne3">
                                                <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne3" aria-expanded="false" aria-controls="collapseOne3">
                                                    <strong class="text-info">•2022 Dec - 2023 May</strong>&nbsp;&nbsp;Odoo Python Developer Trainee at Cybrosys Technology.<br>                                                
                                                </button>
                                                </h2>
                                                <div id="collapseOne3" class="accordion-collapse collapse" aria-labelledby="headingOne3" data-bs-parent="#accordionExample3">
                                                <div class="accordion-body">
                                                    <div class="container">
                                                    <div class="row">
                                                        <div class="col-md-2"></div>
                                                        <div class="col-md-8 text-center">
                                                            <div class="card bg-dark text-white border-0 ">
                                                                <img src="images/cert.webp" class="card-img-top" alt="...">
                                                                <div class="card-body">
                                                                <h5 class="card-title text-info">Internship certificate</h5>
                                                                <a href="#" class="btn btn-info" download>download</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2"></div>
                                                    </div>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                            </div>

                                            <!-- fourth -->

                                            <div class="accordion mt-3" id="accordionExample2">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingOne2">
                                                <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne2" aria-expanded="false" aria-controls="collapseOne2">
                                                    <strong class="text-info">•2022 Jul - 2022 Sep</strong>&nbsp;&nbsp;Full Stack Developer Trainee at Linways Technology.<br>
                                                </button>
                                                </h2>
                                                <div id="collapseOne2" class="accordion-collapse collapse" aria-labelledby="headingOne2" data-bs-parent="#accordionExample2">
                                                <div class="accordion-body">
                                                    <div class="container">
                                                    <div class="row">
                                                        <div class="col-md-2"></div>
                                                        <div class="col-md-8 text-center">
                                                            <div class="card bg-dark text-white border-0 ">
                                                                <img src="images/cert.webp" class="card-img-top" alt="...">
                                                                <div class="card-body">
                                                                <h5 class="card-title text-info">Internship certificate</h5>
                                                                <a href="#" class="btn btn-info" download>download</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2"></div>
                                                    </div>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                            </div>


                                            <!-- fifth -->

                                            <div class="accordion mt-3" id="accordionExample1">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingOne1">
                                                <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne1" aria-expanded="false" aria-controls="collapseOne1">
                                                    <strong class="text-info">•2021 Jul - 2021 Aug</strong>&nbsp;&nbsp;Internship at Sysbreez Technology.<br>
                                                </button>
                                                </h2>
                                                <div id="collapseOne1" class="accordion-collapse collapse" aria-labelledby="headingOne1" data-bs-parent="#accordionExample1">
                                                <div class="accordion-body">
                                                    <div class="container">
                                                    <div class="row">
                                                        <div class="col-md-2"></div>
                                                        <div class="col-md-8 text-center">
                                                            <div class="card bg-dark text-white border-0 ">
                                                                <img src="images/cert.webp" class="card-img-top" alt="...">
                                                                <div class="card-body">
                                                                <h5 class="card-title text-info">Internship certificate</h5>
                                                                <a href="#" class="btn btn-info" download>download</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2"></div>
                                                    </div>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                            </div>
                                          
                                        </div>
                                      </div>
                                    </div>
                                    <div class="accordion-item">
                                      <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed  bg-dark text-white icon1" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Education
                                        </button>
                                      </h2>
                                      <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body bg-dark text-white">
                                    
                                            <ul class="nav nav-tabs nav-fill mb-3" id="ex1" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                  <a
                                                    class="nav-link active"
                                                    id="ex2-tab-1"
                                                    data-bs-toggle="tab"
                                                    href="#ex2-tabs-1"
                                                    role="tab"
                                                    aria-controls="ex2-tabs-1"
                                                    aria-selected="true"
                                                    >Graduation</a
                                                  >
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                  <a
                                                    class="nav-link"
                                                    id="ex2-tab-2"
                                                    data-bs-toggle="tab"
                                                    href="#ex2-tabs-2"
                                                    role="tab"
                                                    aria-controls="ex2-tabs-2"
                                                    aria-selected="false"
                                                    >Higher Education</a
                                                  >
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                  <a
                                                    class="nav-link"
                                                    id="ex2-tab-3"
                                                    data-bs-toggle="tab"
                                                    href="#ex2-tabs-3"
                                                    role="tab"
                                                    aria-controls="ex2-tabs-3"
                                                    aria-selected="false"
                                                    >Lower Education</a
                                                  >
                                                </li>
                                              </ul>
                                              <div class="tab-content text-info" id="ex2-content">
                                                <div
                                                  class="tab-pane fade show active"
                                                  id="ex2-tabs-1"
                                                  role="tabpanel"
                                                  aria-labelledby="ex2-tab-1"
                                                >
                                                <strong class="text-info">•2022</strong> &nbsp;&nbsp;Btech from Government Engineering College Idukki.<br>
                                                </div>
                                                <div class="tab-pane fade" id="ex2-tabs-2" role="tabpanel" aria-labelledby="ex2-tab-2">
                                                  <strong class="text-info">•2018</strong> &nbsp;&nbsp;Higher Education from GHSS Thiruranghadi.<br>
                                                </div>
                                                <div class="tab-pane fade" id="ex2-tabs-3" role="tabpanel" aria-labelledby="ex2-tab-3">
                                                    <strong class="text-info">•2016</strong> &nbsp;&nbsp;Lower Education from Mes Indian School-Doha,Qatar.<br>
                                                </div>
                                              </div>



                                        </div>
                                      </div>
                                    </div>
                                    <div class="accordion-item">
                                      <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed  bg-dark text-white icon1" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                          Strength
                                        </button>
                                      </h2>
                                      <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body bg-dark text-white">

                                            <div class="row">
                                                <div class="col-3">
                                                  <div
                                                    class="nav flex-column nav-tabs text-center"
                                                    id="v-tabs-tab"
                                                    role="tablist"
                                                    aria-orientation="vertical"
                                                  >
                                                    <a
                                                      class="nav-link active"
                                                      id="v-tabs-home-tab"
                                                      data-bs-toggle="tab"
                                                      href="#v-tabs-home"
                                                      role="tab"
                                                      aria-controls="v-tabs-home"
                                                      aria-selected="true"
                                                      >Strength</a
                                                    >
                                                    <a
                                                      class="nav-link"
                                                      id="v-tabs-profile-tab"
                                                      data-bs-toggle="tab"
                                                      href="#v-tabs-profile"
                                                      role="tab"
                                                      aria-controls="v-tabs-profile"
                                                      aria-selected="false"
                                                      >Hobbies</a
                                                    >
                                                    <a
                                                      class="nav-link"
                                                      id="v-tabs-messages-tab"
                                                      data-bs-toggle="tab"
                                                      href="#v-tabs-messages"
                                                      role="tab"
                                                      aria-controls="v-tabs-messages"
                                                      aria-selected="false"
                                                      >Ambiition</a
                                                    >
                                                  </div>
                                                </div>
                                              
                                                <div class="col-9">
                                                  <div class="tab-content" id="v-tabs-tabContent">
                                                    <div
                                                      class="tab-pane fade show active"
                                                      id="v-tabs-home"
                                                      role="tabpanel"
                                                      aria-labelledby="v-tabs-home-tab"
                                                    >
                                                        <strong class="text-info">•Self motivated and hardworking.</strong><br>
                                                        <strong class="text-info">•Good team player.</strong><br>
                                                        <strong class="text-info">•Ability to work under pressure.</strong><br>
                                                        <strong class="text-info">•Quick learner..</strong><br>
                                                        <strong class="text-info">•Good analytical, Interpersonal and</strong><br>
                                                        <strong class="text-info">•communication skills.</strong><br>
                                                        
                                                    </div>
                                                    <div
                                                      class="tab-pane fade"
                                                      id="v-tabs-profile"
                                                      role="tabpanel"
                                                      aria-labelledby="v-tabs-profile-tab"
                                                    >
                                                        <strong class="text-info">•Movies.</strong><br>
                                                        <strong class="text-info">•Football.</strong><br>
                                                    </div>
                                                    <div
                                                      class="tab-pane fade"
                                                      id="v-tabs-messages"
                                                      role="tabpanel"
                                                      aria-labelledby="v-tabs-messages-tab"
                                                    >
                                                     To become an business entrepreneur in it domain with my skills and my experience.
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>

                                            <!-- <strong class="text-info">•Self motivated and hardworking.</strong><br>
                                            <strong class="text-info">•Good team player.</strong><br>
                                            <strong class="text-info">•Ability to work under pressure.</strong><br>
                                            <strong class="text-info">•Quick learner..</strong><br>
                                            <strong class="text-info">•Good analytical, Interpersonal and</strong><br>
                                            <strong class="text-info">•communication skills.</strong><br> -->
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                            </div>
                        </div>
                        <div class="col-md-12 mt-5 text-center">
                            <i class="fa-solid fa-paper-plane ms-0" style="color: gray;font-size: 20px;"></i>&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-info">hafis3052000@gmail.com</span> <br><br>
                            <i class="fa-solid fa-phone me-0" style="color: gray;font-size: 20px;"></i>&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-info">+91-9633240773</span><br><br>
                            <a href="https://github.com/Hafis-jafoor"><i class="fa-brands fa-github "  style = "color:gray;font-size: 35px;"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="https://www.instagram.com/_hafizjafoor_/"><i class="fa-brands fa-instagram" style = "color:gray;font-size: 35px;"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="https://twitter.com/HafisJafoorV"><i class="fa-brands fa-twitter" style = "color:gray;font-size: 35px;"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="https://www.linkedin.com/in/hafis-jafoor-6b971b1ba"><i class="fa-brands fa-linkedin " style = "color:gray;font-size: 35px;"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;<br><br>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 text-center p-5">
                    <img src="images/hafis.png" alt="happy" class="rounded-circle mt-5" height="400" >
                </div>
            </div>
        </div>

        <!-- cards services -->

        <div class="row">
            <div class="row text-center text-info" id="services">
                <h3 style="font-weight: bolder; font-size: 45px;">Services</h3>
            </div>
            <div class="container  mt-5">
                <div class="row">
                    <div class="col-md-4 d-flex align-items-stretch">
                        <div class="card bg-dark text-white border-0 ">
                            <img src="images/work-1.png" class="card-img-top card-1" alt="...">
                            <div class="card-body">
                            <h5 class="card-title text-info">Web/App Design</h5>
                            <p class="card-text">Web design is the art and science of creating visually appealing and functional websites, seamlessly blending creativity with user experience to engage visitors and deliver a compelling online presence.</p>
                            <a href="#" class="btn btn-primary">Learn more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex align-items-stretch">
                        <div class="card bg-dark text-white border-0 " >
                            <img src="images/work-2.png" class="card-img-top card-1" alt="...">
                            <div class="card-body">
                            <h5 class="card-title text-info">UI/UX Design</h5>
                            <p class="card-text">UI/UX design focuses on crafting intuitive user interfaces and delightful user experiences, combining aesthetics and usability to enhance digital interactions and ensure a seamless and satisfying journey for every user.</p>
                            <a href="#" class="btn btn-primary">Learn more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex align-items-stretch">
                        <div class="card bg-dark text-white border-0 ">
                            <img src="images/work-3.png" class="card-img-top card-1" alt="...">
                            <div class="card-body">
                            <h5 class="card-title text-info">Web App Develop.</h5>
                            <p class="card-text">Web application development involves the meticulous process of conceptualizing, planning, and creating the visual and interactive elements of a mobile or web application, with a keen emphasis on user-centric design principles to optimize functionality and user satisfaction.
                            </p>
                            <a href="#" class="btn btn-primary">Learn more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- works -->

        <div class="row vh-100 mt-5">
            <div class="row text-center text-info"  id="works">
                <h3 style="font-weight: bolder; font-size: 45px;">Works</h3>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 p-2 d-flex align-items-stretch">
                        <div class="card bg-dark text-white card-w">
                            <div class="card-body">
                                <h5 class="card-title">Portfolio</h5>
                                <h6 class="card-subtitle mb-2 text-muted">personal website</h6>
                                <p class="card-text">personal website build using html,css and bootstrap having a breif description about me with a good ui/ux interface which attract everyones with its work</p>
                                <a href="#" class="card-link">code link</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 p-2 d-flex align-items-stretch">
                        <div class="card bg-dark text-white card-w">
                            <div class="card-body ">
                                <h5 class="card-title">Campus management website</h5>
                                <h6 class="card-subtitle mb-2 text-muted">institute management</h6>
                                <p class="card-text">admin manages the student,faculty and the courses offered by the institute.web application with fully handled by the admins of the campus.built using full stack development tools.(html,css,JavaScript,bootstrap,python,Xampp,pycharm)</p>
                                <a href="#" class="card-link">code link</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 p-2 d-flex align-items-stretch">
                        <div class="card bg-dark text-white card-w">
                            <div class="card-body ">
                                <h5 class="card-title">E-commerce application</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="card-link">code link</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Interests -->

        <div class="row" style="margin-top: 50px;">
            <div class="row text-center text-info"  id="Interests">
                <h3 style="font-weight: bolder; font-size: 45px;">Interests</h3>
            </div>
            <div class="container mt-5">
                <div class="row mt-3">
                    <div class="col-md-3 col-sm-12 d-flex align-items-stretch">
                        <div class="card bg-dark text-white border-0 ">
                            <img src="images/football.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                            <h5 class="card-title text-center">Football</h5>
                            <!-- <a href="#" class="btn btn-primary">Know more</a> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 d-flex align-items-stretch">
                        <div class="card bg-dark text-white border-0 ">
                            <img src="images/hike.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                            <h5 class="card-title text-center">Movies</h5>
                            <!-- <a href="#" class="btn btn-primary">Know more</a> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 d-flex align-items-stretch">
                        <div class="card bg-dark text-white border-0 ">
                            <img src="images/travel.jpg" class="card-img-top " alt="...">
                            <div class="card-body">
                            <h5 class="card-title text-center">Travelling</h5>
                            <!-- <a href="#" class="btn btn-primary">Know more</a> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 d-flex align-items-stretch">
                        <div class="card bg-dark text-white border-0 ">
                            <img src="images/hike.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                            <h5 class="card-title text-center">Hiking</h5>
                            <!-- <a href="#" class="btn btn-primary">Know more</a> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 d-flex align-items-stretch">
                        <div class="card bg-dark text-white border-0 ">
                            <img src="images/comm.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                            <h5 class="card-title text-center">Communication</h5>
                            <!-- <a href="#" class="btn btn-primary">Know more</a> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 d-flex align-items-stretch">
                        <div class="card bg-dark text-white border-0 ">
                            <img src="images/read.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                            <h5 class="card-title text-center">Reading</h5>
                            <!-- <a href="#" class="btn btn-primary">Know more</a> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 d-flex align-items-stretch">
                        <div class="card bg-dark text-white border-0 ">
                            <img src="images/travel.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                            <h5 class="card-title text-center">Cricket</h5>
                            <!-- <a href="#" class="btn btn-primary">Know more</a> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 d-flex align-items-stretch">
                        <div class="card bg-dark text-white border-0 ">
                            <img src="images/hike.jpg" class="card-img-tops" alt="...">
                            <div class="card-body">
                            <h5 class="card-title text-center">Current Affairs</h5>
                            <!-- <a href="#" class="btn btn-primary">Know more</a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Expertise -->

        <div class="row mt-5">
            <div class="row text-center text-info"  id="expertise">
                <h3 style="font-weight: bolder; font-size: 45px;">Expertise</h3>
            </div>
            <div class="row mt-5">
                <div class="col-md-12">
                    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-md-4 d-flex align-items-stretch p-5">
                                        <div class="card bg-dark text-white border-0 ">
                                            <img src="images/python.png" class="card-img-top w-100 h-100" alt="...">
                                            <div class="card-body">
                                            <h5 class="card-title text-center">Python</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 d-flex align-items-stretch p-5">
                                        <div class="card bg-dark text-white border-0 ">
                                            <img src="images/sql.png" class="card-img-top w-100 h-100" alt="...">
                                            <div class="card-body">
                                            <h5 class="card-title text-center">Sql</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 d-flex align-items-stretch p-5">
                                        <div class="card bg-dark text-white border-0 ">
                                            <img src="images/bt.png" class="card-img-top w-100 h-100" alt="...">
                                            <div class="card-body">
                                            <h5 class="card-title text-center">Bootstrap</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item ">
                                <div class="row">
                                    <div class="col-md-4 d-flex align-items-stretch p-5">
                                        <div class="card bg-dark text-white border-0 ">
                                            <img src="images/HTML.jpg" class="card-img-top w-100 h-100" alt="...">
                                            <div class="card-body">
                                            <h5 class="card-title text-center">HTML-5</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 d-flex align-items-stretch p-5">
                                        <div class="card bg-dark text-white border-0 ">
                                            <img src="images/css.jpg" class="card-img-top w-100 h-100" alt="...">
                                            <div class="card-body">
                                            <h5 class="card-title text-center">CSS</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 d-flex align-items-stretch p-5">
                                        <div class="card bg-dark text-white border-0 ">
                                            <img src="images/java.png" class="card-img-top w-100 h-100" alt="...">
                                            <div class="card-body">
                                            <h5 class="card-title text-center">JavaScript</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item ">
                                <div class="row">
                                    <div class="col-md-4 d-flex align-items-stretch p-5">
                                        <div class="card bg-dark text-white border-0 ">
                                            <img src="images/xamp.png" class="card-img-top w-100 h-100" alt="...">
                                            <div class="card-body">
                                            <h5 class="card-title text-center">Xampp</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 d-flex align-items-stretch p-5">
                                        <div class="card bg-dark text-white border-0 ">
                                            <img src="images/vs.png" class="card-img-top w-100 h-100" alt="...">
                                            <div class="card-body">
                                            <h5 class="card-title text-center">Visual Studio</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 d-flex align-items-stretch p-5">
                                        <div class="card bg-dark text-white border-0 ">
                                            <img src="images/pycharm.png" class="card-img-top w-100 h-100" alt="...">
                                            <div class="card-body">
                                            <h5 class="card-title text-center">pycharm</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><br>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>

    </div>

<!-- Footer -->

<footer class="text-center text-lg-start bg-body-tertiary text-white vh-100 mt-5" id="contact">
    <!-- Section: Social media -->
    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
      <!-- Left -->
      <div class="me-5 d-none d-lg-block">
        <span>Get connected with me on social networks:</span>
      </div>
      <!-- Left -->
  
      <!-- Right -->
      <div>
        <a href="https://twitter.com/HafisJafoorV" class="me-4 text-reset">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="https://www.instagram.com/_hafizjafoor_/" class="me-4 text-reset">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="https://www.linkedin.com/in/hafis-jafoor-6b971b1ba" class="me-4 text-reset">
          <i class="fab fa-linkedin"></i>
        </a>
        <a href="https://github.com/Hafis-jafoor" class="me-4 text-reset">
          <i class="fab fa-github"></i>
        </a>
      </div>
      <!-- Right -->
    </section>
    <!-- Section: Social media -->
  
    <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3  mx-auto mb-4">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold mb-4">
              <i class="fas fa-gem me-3"></i>Hafis Jafoor V
            </h6>
            <p>
                Specialised in frontend and backend development for
                 complex scalable web apps. I like to craft solid and responsive 
                 products with great user experiences.
            </p>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-3  mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Projects
            </h6>
            <p>
              <a href="#works" class="text-reset">personal Portfolio</a>
            </p>
            <p>
              <a href="#works" class="text-reset">Campus management website</a>
            </p>
            <p>
              <a href="#works" class="text-reset">E-commerce application</a>
            </p>
            <p>
              <a href="#works" class="text-reset">Online quiz website</a>
            </p>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-3  mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
               Expertise
            </h6>
            <p>
              <a href="#expertise" class="text-reset">Python</a>
            </p>
            <p>
              <a href="#expertise" class="text-reset">Sql</a>
            </p>
            <p>
              <a href="#expertise" class="text-reset">Html,css,JavaScript</a>
            </p>
            <p>
              <a href="#expertise" class="text-reset">Bootstrap</a>
            </p>
            <p>
                <a href="#expertise" class="text-reset">Visual Studio,Xampp,pycharm</a>
            </p>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-3  mx-auto mb-md-0 mb-4">
            <h6 class="text-uppercase fw-bold mb-4">Contact Me</h6>
            <p><i class="fas fa-home me-3"></i>Kerala,India</p>
            <p>
              <i class="fas fa-envelope me-3"></i>
              hafis3052000@gmail.com
            </p>
            <p><i class="fas fa-phone me-3"></i> + 91-9633240773</p>
          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->
  
    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);margin-top: 180px;">
      © 2021 Copyright:
      <a class="text-reset fw-bold" href="">Hafis Jafoor V</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>