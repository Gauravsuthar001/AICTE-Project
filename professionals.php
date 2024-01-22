<?php
include_once("./auth_session.php");
$server1 = "localhost";
$user = "root";
$pass1 = "";
$database1 = "new1";
$connectdb12 = mysqli_connect("$server1", "$user", "$pass1", "$database1");

$query1 = "SELECT * FROM faculty_form";
$query_run = mysqli_query($connectdb12, $query1);
$check_faculty = mysqli_num_rows($query_run) > 0;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Professionals</title>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./bootstrap/js/bootstrap.min.js">
    <link rel="stylesheet" href="./styles/professionals.css">
</head>


<body>
    <?php
    include("./nav.php");
    ?>
    <div class="head-boxx">
        <h1 class="pro-heading">Hire Professionals</h1>
        <div class="filter1">
            <div class="filter">filter <i class="fa-solid fa-angle-down"></i></div>
            <div class="fil-items" id="filt">
                <form class="formser" action="<?= $_SERVER['PHP_SELF']; ?>" method="GET">
                    <select name="sel-pro" class="wor-exp" id="sel-pr">
                        <option value="" selected>Select Category</option>
                        <option value="./studentsrel.php">STUDENTS RELATED INITIATIVES</option>
                        <option value="./faculty.php">FACULTY/STAFF RELATED INITIATIVES</option>
                        <option value="./institutional.php">INSTITUTIONAL INITIATIVES</option>
                        <option value="./curiculam.php">CURRICULUM RELATED INITIATIVES</option>
                        <option value="./nep.php">NEP RELATED INITIATIVES</option>
                        <option value="./accreditation.php">ACCREDITATION RELATED INITIATIVES</option>
                        <option value="./eventmanagement.php">EVENT MANAGEMENT</option>
                        <option value="./governance.php">GOVERNANCE RELATED TASKS</option>
                        <option value="./iprrelated.php">IPR RELATED TASKS</option>
                        <option value="./research.php">RESEARCH RELATED INITIATIVES</option>
                        <option value="./innovation.php">INNOVATION AND ENTREPRENEURSHIP RELATED INITIATIVES</option>
                    </select>
                    <br>
                    <br>
                    <select name="sel-nob" id="sel-nob">
                        <option value="">Select Sub-Category</option>

                        <option value="Student engagement and retention strategies">Student engagement and retention
                            strategies</option>
                        <option value="Enrollment management and admissions processes">Enrollment management and
                            admissions processes</option>
                        <option value="Student support services">Student support services</option>
                        <option value="Student success and retention initiatives">Student success and retention
                            initiatives</option>
                        <option value="Campus life and student activities programming">Campus life and student
                            activities programming</option>
                        <option value="Study abroad and international exchange programs">Study abroad and international
                            exchange programs</option>
                        <option value="Career exploration and job placement programs">Career exploration and job
                            placement programs</option>
                        <option value="Student conduct and discipline policies">Student conduct and discipline policies
                        </option>
                        <option value="Student health and counseling services">Student health and counseling services
                        </option>
                        <option value="Financial aid and scholarship programs">Financial aid and scholarship programs
                        </option>
                        <option value="Academic advising and student support services">Academic advising and student
                            support services</option>
                        <option value="Graduate student recruitment and retention">Graduate student recruitment and
                            retention</option>
                        <option value="Graduate student funding and support">Graduate student funding and support
                        </option>
                        <option value="Transfer student programs and services">Transfer student programs and services
                        </option>
                        <option value="International student programs and services">International student programs and
                            services</option>
                        <option value="First-year experience and transition programs">First-year experience and
                            transition programs</option>
                        <option value="Student leadership development programs">Student leadership development programs
                        </option>
                        <option value="Student government and organization support">Student government and organization
                            support</option>
                        <option value="Student employment and work-study programs">Student employment and work-study
                            programs</option>
                        <option value="Alumni engagement and fundraising initiatives">Alumni engagement and fundraising
                            initiatives</option>
                        <option value="Interview preparation">Interview preparation</option>
                    </select>
                </form>
                <br>
            </div>
        </div>

    </div>
    <div class="main">
        <?php
        if ($check_faculty) {
            if (isset($_GET['submitbtn'])) {
                $Name12 = $_GET['Nam'];
                $PL12 = $_GET['PL'];
                $Expi12 = $_GET['Expi'];
                $Name121 = mysqli_real_escape_string($connectdb12, $Name12);
                $PL121 = mysqli_real_escape_string($connectdb12, $PL12);
                $Expi121 = mysqli_real_escape_string($connectdb12, $Expi12);
                $result = mysqli_query($connectdb12, "SELECT * FROM faculty_form  WHERE FirstName='%" . $Name121 . "%' AND WExperience='%" . $Expi121 . "%' AND Prog_lang='%" . $PL121 . "%'");
                while ($rows = mysqli_fetch_array($result)) {
        ?>
        <div class="boxx">
            <div class="boxx-content">
                <div class="boxx-user-name">
                    <h3 class="boxx-Name">
                        Name:
                        <?php echo ($rows['FirstName'] . " " . $rows['LastName']); ?>
                    </h3>
                    <h3>Professional in
                        <?php
                                    echo ($rows['Prog_lang']);
                                    ?>
                    </h3>
                    <h3>
                        Contact No.:
                        <?php
                                    echo ($rows['Contact']);
                                    ?>
                    </h3>
                    <h3>
                        Email:
                        <?php
                                    echo ($rows['E-mail']);
                                    ?>
                    </h3>
                    <h3>
                        Work Experience:
                        <?php
                                    echo ($rows['WExperience']);
                                    ?>
                    </h3>
                </div>
                <div class="boxx-btn">
                    <a href="#">
                        <input type="button" value="More...">
                    </a>
                </div>
            </div>
        </div>

        <?php

                }
            } else {

                while ($rows = mysqli_fetch_array($query_run)) {
                ?>
        <div class="boxx">
            <div class="boxx-content">
                <div class="boxx-user-name">
                    <h3 class="boxx-Name">
                        Name:
                        <?php echo ($rows['FirstName'] . " " . $rows['LastName']); ?>
                    </h3>
                    <h3>Professional in
                        <?php
                                    echo ($rows['Prog_lang']);
                                    ?>
                    </h3>
                    <h3>
                        Contact No.:
                        <?php
                                    echo ($rows['Contact']);
                                    ?>
                    </h3>
                    <h3>
                        Email:
                        <?php
                                    echo ($rows['E-mail']);
                                    ?>
                    </h3>
                    <h3>
                        Work Experience:
                        <?php
                                    echo ($rows['WExperience']);
                                    ?>
                    </h3>
                </div>
                <div class="boxx-btn">
                    <a href="#">
                        <input type="button" value="More...">
                    </a>
                </div>
            </div>
        </div>
        <?php
                }
            }
        } else {
            echo ("no faculty Found");
        }
        ?>
    </div>

    <?php include("footer.php"); ?>
    <script>
    let boxx = document.querySelector(".boxx-content");
    let nv = " ";
    // let Slmname = document.querySelector(".SName").value;
    // Slmname = Slmname.toLowerCase();
    // let PLin = document.querySelector(".PLin").value;
    // PLin = PLin.toLowerCase();
    // let WExp = document.querySelector(".WExp").value;
    // WExp = WExp.toLowerCase();
    // let y = document.querySelector(".boxx-Name");
    // let j = 0;
    let fil = document.getElementById("filt");
    let fil1 = document.querySelector(".filter");
    fil1.addEventListener("click", function() {
        if (fil.style.display == "block") {
            fil.style.display = "none";
        } else {
            fil.style.display = "block";
        }
    })
    </script>
</body>

</html>