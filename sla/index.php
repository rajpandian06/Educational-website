<?php

$server = "localhost";
$admin = "root";
$password = "";
$database = "sla";

$connect = mysqli_connect($server, $admin, $password) or die("unable to connect");
mysqli_select_db($connect, $database);


if (isset($_POST['submit_btn'])) {
    $fullname = $_POST['name'];
    $email = $_POST['email'];
    $mobilenumber = $_POST['number'];
    $gender = $_POST['gender'];
    $select = $_POST['select'];
    $comment = $_POST['comment'];


    $query = "insert into user values('$fullname','$email','$mobilenumber','$gender','$select','$comment')";
    $query_run = mysqli_query($connect, $query);
    if ($query_run) {
        echo "<script> alert('u have successfully submitted') </script>";
    } else {
        echo "<script> alert('failed') </script>";
    }
}




?>

<!doctype html>
<html lang="en">

<head>
    <title>sla</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <!-- font awesome icon cdn -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <!-- google font link -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,300&display=swap" rel="stylesheet">

    <!-- internal css  -->
    <style>
        * {
            margin: 0%;
            padding: 0%;
            box-sizing: border-box;
        }

        .header {
            background-color: #3742fa !important;
        }

        .navbar {
            background-color: transparent;
        }

        .navbar-brand {
            font-size: 40px !important;
            color: white !important;
            font-weight: bolder;
            letter-spacing: 2px;
            margin: 20px 30px;
        }

        .navbar-nav {
            margin-right: 30px;
        }

        .nav-link {
            color: white !important;
            font-size: 16px !important;
            margin-left: 5px !important;
        }

        .nav-link:hover {
            border-bottom: 1px solid white;
        }

        .fa-bars {
            color: white !important;
            font-size: 40px;
        }

        .navbar-toggler {
            border: 0 !important;
            outline: none !important;
        }

        .image1 {
            text-align: center;
        }

        .image1 img {
            width: 430px !important;
            max-height: 500px;
        }

        .box {
            margin-top: 10%;
        }

        .box h1 {
            color: white;
            font-weight: bolder;
        }

        .box p {
            color: white;
            margin-top: 30px;
            text-align: justify;
        }

        .box a {
            display: inline-block;
            text-align: center;
            margin-bottom: 20px !important;
            width: 210px;
        }

        .enroll_btn {
            text-align: center;
            text-decoration: none;
            text-transform: capitalize;
            font-size: 20px;
            color: #3742fa;
            background-color: white;
            padding: 10px 15px;
            border-radius: 20px;
            border: 2px solid white;
        }

        .enroll_btn:hover {
            background-color: transparent;
            color: white;
        }

        .course-img {
            text-align: center;
            background-color: white;
        }

        .course-img img {
            height: 100px;
            width: 100px;
        }

        .footer h3 {
            background-color: #3742fa !important;
        }

        .form-group {
            position: relative;
        }

        .form-group i {
            visibility: hidden;
            position: absolute;
            top: 30px;
            right: 15px;
            font-size: 26px;
        }
    </style>

</head>

<body>

    <!-- home start -->
    <section class="header" id="home">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">

                <a class="navbar-brand" href="#"><i class="fas fa-user-graduate me-2"></i>SLA</a>
                <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link active" href="#home"><i class="fas fa-home me-2"></i>Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#course"><i class="fas fa-address-card me-2"></i>Course</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#placement"><i class="far fa-building me-2"></i>Placement</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact"><i class="fas fa-phone me-2"></i>Contact</a>
                        </li>
                    </ul>
                </div>

            </nav>
            <div class="row box">
                <div class="col-lg-6 col-12">
                    <h1>Begin The Course Today To Taste Your Success Tomorrow</h1>
                    <p>Obtain the industry-required skills at SLA as we are extremely committed to serving you through
                        our specialized certified courses, interactive classroom mentorship, and the promising placement
                        assistance.</p>
                    <a href="#" class="enroll_btn">enroll now<i class="fas fa-arrow-alt-circle-right ms-2"></i></a>
                </div>
                <div class="col-lg-6 col-12 image1">
                    <img src="http://idgip.com/wp-content/uploads/2019/12/1.png" alt="homepage pic" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    <!-- home end -->

    <!-- course start -->
    <section class="course" id="course">
        <h1 class="text-primary fw-bolder my-5 text-center text-capitalize">Course</h1>
        <div class="container">
            <div class="row course-start">
                <div class="col-lg-4 col-12 mb-5">
                    <div class="card">
                        <div class="card-header course-img">
                            <img src="https://www.sanjaywebdesigner.com/articles/wp-content/uploads/2014/09/HTML5-courses.png" alt="HTML PIC" class="card-img-top" height="100%">
                        </div>
                        <div class="card-body">
                            <h1 class="card-title">HTML</h1>
                            <span class="badge rounded-pill bg-dark mb-3">WEB DEVELOPMENT</span> <SPan class="badge rounded-pill bg-danger mb-3">HTML5</SPan>
                            <p class="card-text" style="text-align: justify;">The HyperText Markup Language, or HTML is
                                the standard
                                markup
                                language for documents designed to be displayed in a web browser. ... HTML provides a
                                means
                                to create structured documents by denoting structural semantics for text such as
                                headings,
                                paragraphs, lists, links, quotes and other items.</p>
                            <a href="#" style="text-decoration: none;" class="text-white"><button class="btn btn-outline-primary btn-block">Enroll now<i class="fas fa-sign-in-alt ms-2"></i></button></a>
                        </div>
                        <div class="card-footer text-center">
                            <span class="text-muted">Last updated on july1<sup>st</sup></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12 mb-5">
                    <div class="card">
                        <div class="card-header course-img">
                            <img src="http://www.zccindia.com/wp-content/uploads/2013/10/css3-logo.png" alt="css pic" class="card-img-top" height="100%">
                        </div>
                        <div class="card-body">
                            <h1 class="card-title">CSS</h1>
                            <span class="badge rounded-pill bg-dark mb-3">WEB DEVELOPMENT</span> <SPan class="badge rounded-pill bg-primary mb-3">CSS3</SPan>
                            <p class="card-text" style="text-align: justify;">CSS stands for Cascading Style Sheets ·
                                CSS describes how
                                HTML
                                elements are to be displayed on screen, paper, or in other media · CSS saves a lot of
                                work.CSS is the language for describing the presentation of Web pages.It allows one to
                                adapt the presentation to different types of devices.CSS is used for styling the
                                webpage.
                            </p>
                            <a href="#" style="text-decoration: none;" class="text-white"><button class="btn btn-outline-primary btn-block">Enroll now<i class="fas fa-sign-in-alt ms-2"></i></button></a>
                        </div>
                        <div class="card-footer text-center">
                            <span class="text-muted">Last updated on july2<sup>nd</sup></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12 mb-5">
                    <div class="card">
                        <div class="card-header course-img">
                            <img src="https://www.justapplications.co.uk/wp-content/uploads/2019/12/Javascript-shield-1.png" class="card-img-top" height="100%">
                        </div>

                        <div class="card-body">
                            <h1 class="card-title">JAVASCRIPT</h1>
                            <span class="badge rounded-pill bg-dark mb-3">WEB DEVELOPMENT</span> <SPan class="badge rounded-pill bg-warning mb-3">JAVASCRIPT</SPan>
                            <p class="card-text" style="text-align: justify;">JavaScript (often shortened to JS) is a
                                lightweight,
                                interpreted, object-oriented language with first-class functions, and is best known as
                                the
                                scripting language for Web pages, but it's used in many non-browser environments as
                                well.
                                ... JavaScript can function as both a procedural and an object oriented language.</p>
                            <a href="#" style="text-decoration: none;" class="text-white"><button class="btn btn-outline-primary btn-block">Enroll now<i class="fas fa-sign-in-alt ms-2"></i></button></a>
                        </div>
                        <div class="card-footer text-center">
                            <span class="text-muted">Last updated on july3<sup>rd</sup></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- course end -->



    <!-- placement start -->
    <section class="my-5" id="placement">
        <h1 class="text-primary fw-bolder my-5 text-center text-capitalize">Placement</h1>
        <div class="container">
            <h3 class="text-center">Softlogic offers Real-Time Training with 100% Placement
                Support for all Courses</h3>
            <p class="lead mt-3 text-center">Our high-quality training in both basic and advanced courses makes you
                shine in the crowd. We reinforce every candidate who craves to modernize themselves with the
                technology updates. Undoubtedly, Softlogic provides them the right trail to reach their ambition.
            </p>
            <p class="mt-4 lead text-center">Softlogic Systems, is one of the best Online Software Training
                Institute in Chennai with 100% Placement Support, rooted in this adage saying, “Give a man a fish,
                and you feed him for a day; teach a man to fish, and you feed him for a lifetime”, intends to train
                its fellow students in all aspects right from technical expertise to attitudinal molding thereby
                enabling the individual to become Independent so that he / she becomes a potential and a committed
                employee today and a probable entrepreneur tomorrow.</p>
            <ul class="mt-4 fs-5 lead ms-5">
                <li>Rich Corporate Exposure and Expertise since 1995.</li>
                <li>Premium and effective Employability Training.</li>
                <li>Trainers with real time experience in MNCs.</li>
                <li>High end Infrastructural facilities.</li>
                <li>Industry endorsed curriculum (Syllabus is specifically designed for students to become JOB
                    Ready).</li>
                <li>All courses are power packed with multiple projects, so that the student is enabled to create a
                    project portfolio to present during Interviews.</li>
                <li>Real Time Internship provided for interested students.</li>

            </ul>
        </div>

    </section>
    <!-- placement end -->

    <!-- contact start -->

    <section class="my-5" id="contact">
        <div class="container">
            <h1 class="text-center text-capitalize text-primary fw-bolder">Contact</h1>
            <div class="row">
                <div class="col-12 my-3">
                    <div class="card">

                        <div class="card-body">
                            <form action="index.php" method="POST" onsubmit="return validate()">
                                <div class="form-group mb-4">
                                    <label for="name">Full Name</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter your full name">
                                    <i class="fas fa-times-circle wrong" id="wrong1"></i>
                                    <i class="fas fa-check-circle correct" id="correct1"></i>
                                    <small id="msg1"></small>
                                </div>
                                <div class="form-group mb-4">
                                    <label for="emailid">Email-Id</label>

                                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email-Id">
                                    <i class="fas fa-times-circle wrong" id="wrong2"></i>
                                    <i class="fas fa-check-circle correct" id="correct2"></i>
                                    <small id="msg2"></small>
                                </div>
                                <div class="form-group mb-4">
                                    <label for="number">Mobile Number</label>

                                    <input type="number" class="form-control" id="number" name="number" placeholder="Enter your 10 digit mobile number">
                                    <i class="fas fa-times-circle wrong" id="wrong3"></i>
                                    <i class="fas fa-check-circle correct" id="correct3"></i>
                                    <small id="msg3"></small>
                                </div>



                                <div class="form-group mb-4">
                                    <label for="gender" class="me-2">Gender</label>
                                    <input type="radio" id="male" name="gender" class="me-2" value="male">male
                                    <input type="radio" id="female" name="gender" class="me-2" value="female">female
                                    <input type="radio" id="others" name="gender" class="me-2" value="others">others
                                </div>
                                <div class="mb-4">
                                    <label for="select" class="form-label">Select Course</label>
                                    <select class="form-select" name="select" id="select">
                                        <option selected>Select one</option>
                                        <option value="HTML">HTML</option>
                                        <option value="CSS">CSS</option>
                                        <option value="JAVASCRIPT">JAVASCRIPT</option>
                                        <option value="PHP">PHP</option>
                                        <option value="MY SQL">MY SQL</option>
                                        <option value="BOOTSTRAP">BOOTSTRAP</option>
                                        <option value="JQUERY">JQUERY</option>
                                    </select>
                                </div>
                                <div class="form-group mb-4">
                                    <label for="comment">Comment</label>
                                    <textarea name="comment" id="comment" rows="3" class="form-control" placeholder="Enter your comments"></textarea>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" name="check" id="check">I agree
                                    to the
                                    terms and conditions <a href="#" style="text-decoration: none;">read more.</a>
                                </div>
                                <div class="text-center my-5">
                                    <button class="btn btn-secondary btn-lg border border-secondary" type="reset">Reset</button>
                                    <button class="btn btn-success btn-lg border border-success" type="submit" name="submit_btn">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- contact end -->

    <!-- footer start -->

    <section class="mt-5 footer">
        <h3 class="text-capitalize text-center text-white p-3">Copyright © 2021 Softlogic Systems All Rights Reserved
        </h3>
    </section>

    <!-- footer end -->
    <!-- script start -->
    <script>
        function validate() {

            let fullName = document.getElementById("name").value;
            let email = document.getElementById("email").value;
            let mobileNumber = document.getElementById("number").value;
            let male = document.getElementById("male");
            let female = document.getElementById("female");
            let others = document.getElementById("others");
            let course = document.getElementById("select");
            let comment = document.getElementById("comment").value;
            let check = document.getElementById("check");
            let nameCheck = /^[a-zA-Z]{3,25}$/;
            let emailCheck = /^(?=.*[.])([a-zA-Z0-9]+)@([a-zA-Z0-9]+).([a-z]{2,8})$/;
            let numberCheck = /^[7-9]{1}[0-9]{9}$/;

            // fullname
            if (fullName.trim() == null || fullName.trim() == "") {
                document.getElementById("msg1").innerHTML = "**Enter ur name**";
                document.getElementById("msg1").style.color = "red";
                document.getElementById("name").style.border = "2px solid red";
                document.getElementById("wrong1").style.visibility = "visible";
                document.getElementById("wrong1").style.color = "red";
                document.getElementById("correct1").style.visibility = "hidden";
                return false;
            }
            if (nameCheck.test(fullName)) {
                document.getElementById("msg1").innerHTML = "**valid**"
                document.getElementById("msg1").style.color = "green";
                document.getElementById("name").style.border = "2px solid green";
                document.getElementById("correct1").style.visibility = "visible";
                document.getElementById("correct1").style.color = "green";
                document.getElementById("wrong1").style.visibility = "hidden";

            } else {
                document.getElementById("msg1").innerHTML = "**ur name should contain a-zA-Z letters only and minimum 3 letter**"
                document.getElementById("msg1").style.color = "red";
                document.getElementById("name").style.border = "2px solid red";
                document.getElementById("wrong1").style.visibility = "visible";
                document.getElementById("wrong1").style.color = "red";
                document.getElementById("correct1").style.visibility = "hidden";
                return false;
            }

            // email

            if (email.trim() == null || email.trim() == "") {
                document.getElementById("msg2").innerHTML = "**Enter ur email**";
                document.getElementById("msg2").style.color = "red";
                document.getElementById("email").style.border = "2px solid red";
                document.getElementById("wrong2").style.visibility = "visible";
                document.getElementById("wrong2").style.color = "red";
                document.getElementById("correct2").style.visibility = "hidden";
                return false;
            }
            if (emailCheck.test(email)) {
                document.getElementById("msg2").innerHTML = "**valid**"
                document.getElementById("msg2").style.color = "green";
                document.getElementById("email").style.border = "2px solid green";
                document.getElementById("correct2").style.visibility = "visible";
                document.getElementById("correct2").style.color = "green";
                document.getElementById("wrong2").style.visibility = "hidden";
            } else {
                document.getElementById("msg2").innerHTML = "**enter a valid email address**"
                document.getElementById("msg2").style.color = "red";
                document.getElementById("email").style.border = "2px solid red";
                document.getElementById("wrong2").style.visibility = "visible";
                document.getElementById("wrong2").style.color = "red";
                document.getElementById("correct2").style.visibility = "hidden";
                return false;
            }

            // number
            if (mobileNumber.trim() == null || mobileNumber.trim() == "") {
                document.getElementById("msg3").innerHTML = "**Enter ur number**";
                document.getElementById("msg3").style.color = "red";
                document.getElementById("number").style.border = "2px solid red";
                document.getElementById("wrong3").style.visibility = "visible";
                document.getElementById("wrong3").style.color = "red";
                document.getElementById("correct3").style.visibility = "hidden";
                return false;
            }
            if (numberCheck.test(mobileNumber)) {
                document.getElementById("msg3").innerHTML = "**valid**"
                document.getElementById("msg3").style.color = "green";
                document.getElementById("number").style.border = "2px solid green";
                document.getElementById("correct3").style.visibility = "visible";
                document.getElementById("correct3").style.color = "green";
                document.getElementById("wrong3").style.visibility = "hidden";
            } else {
                document.getElementById("msg3").innerHTML = "**Enter a valid number**"
                document.getElementById("msg3").style.color = "red";
                document.getElementById("number").style.border = "2px solid red";
                document.getElementById("wrong3").style.visibility = "visible";
                document.getElementById("wrong3").style.color = "red";
                document.getElementById("correct3").style.visibility = "hidden";
                return false;
            }

            // gender
            if (male.checked == false && female.checked == false && others.checked == false) {
                alert("select ur gender");
                return false;
            }

            // course
            if (select.selectedIndex == 0) {
                alert("select ur course");
                return false;
            }

            // comment
            if (comment.trim() == null || comment.trim() == "") {
                alert("please write ur comments");
                return false;
            }

            // check
            if (check.checked == false) {
                alert("click the checkbox to agree our terms and conditions");
                return false;

            } else {
                alert("u have successfully submitted");
            }







        }
    </script>
    <!-- script end -->











</body>

</html>