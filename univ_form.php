<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ECB Form</title>
    <link rel="stylesheet" href="./styles/univ_form.css" />
</head>

<body>
    <?php
    include("./nav.php");
    ?>

    <!-- NAVEND -->

    <form class="form-univ" action="./univ_form_submit.php" method="post">
        <div class="inner">
            <h1 class="form-title">Registration Form for Universities</h1>
            <div class="add">
                <h4>Name<span style="color: red;">*</span>: </h4>
                <input required type="text" name="Name" id="Name">
            </div>

            <div class="add">
                <h4>Address <span style="color: red;">*</span>: </h4>
                <input required type="text" name="Address" id="Address">
            </div>

            <div class="add">
                <h4>Contact Person<span style="color: red;">*</span>: </h4>
                <input inputmode="numeric" required type="text" name="Contact" id="Contact">
            </div>

            <div class="add">
                <h4>Phone<span style="color: red;">*</span>: </h4>
                <input required type="text" name="Phone" id="Phone">
            </div>

            <div class="add">
                <h4>Email<span style="color: red;">*</span>: </h4>
                <input required type="text" name="Email" id="Email">
            </div>

            <div class="in-outer">
                <div class="in-type">
                    <h4>Which type of institution are you?<span style="color: red;">*</span></h4>
                    <div class="item1">
                        <label for="op1">
                            <input required type="radio" id="op1" name="institution" value="University" />
                            <span> University</span>
                        </label>
                        <label for="op2">
                            <input type="radio" id="op2" name="institution" value="College" />
                            <span> College</span>
                        </label>
                        <label for="op3">
                            <input type="radio" id="op3" name="institution" value="Vocational School" />
                            <span> Vocational School</span>
                        </label>
                    </div>
                </div>
            </div>


            <div class="in-outer">
                <div class="in-type">
                    <h4>How many students do you have?<span style="color: red;">*</span></h4>
                    <div class="item1">
                        <label for="opt1">
                            <input required type="radio" name="students" value="1000-5000" id="opt1">
                            <span> 1000-5000</span>
                        </label>

                        <label for="opt2">
                            <input type="radio" name="students" value="5000-10000" id="opt2">
                            <span> 5000-10000</span>
                        </label>

                        <label for="opt3">
                            <input type="radio" name="students" value="10000-15000" id="opt3">
                            <span class="wr"> 10000-15000 </span>
                        </label>
                    </div>
                </div>
            </div>

            <div class="in-outer">
                <div class="in-type">
                    <h4>What is your primary area of focus?<span style="color: red;">*</span></h4>
                    <div class="item1">

                        <label for="opti1">
                            <input required type="radio" name="areaoffocus" value="Science" id="opti1">
                            <span> Science</span>
                        </label>

                        <label for="opti2">
                            <input type="radio" name="areaoffocus" value="Humanities" id="opti2">
                            <span> Humanities</span>
                        </label>

                        <label for="opti3">
                            <input type="radio" name="areaoffocus" value="Business" id="opti3">
                            <span class="wr">Business</span>
                        </label>

                        <label for="opti4">
                            <input type="radio" name="areaoffocus" value="Engineering" id="opti4">
                            <span class="wr">Engineering</span>
                        </label>
                    </div>
                </div>
            </div>

            <div class="fr-chk">
                <h4>What are the major challenges you are facing with regards to providing quality education? </h4>
                <label for="optio11w">
                    <input type="checkbox" id="optio11w" value="Limited Resourses" name="challenge[]" />
                    <span>Limited Resourses</span>
                </label>

                <label for="optio12w">
                    <input type="checkbox" id="optio12w" value="Outdated Curiculum" name="challenge[]" />
                    <span>Outdated Curiculum </span>
                </label>


                <label for="optio13w">
                    <input type="checkbox" id="optio13w" value="Poor Teaching Quality" name="challenge[]" />
                    <span>Poor Teaching Quality</span>
                </label>

                <label for="optio14w">
                    <input type="checkbox" id="optio14w" value="Insufficient learning materials" name="challenge[]" />
                    <span>Insufficient learning materials</span>
                </label>

                <label for="optio15w">
                    <input type="checkbox" id="optio15w" value="Inadequate student support services" name="challenge[]" />
                    <span>Inadequate student support services</span>
                </label>

                <label for="optio16w">
                    <input type="checkbox" id="optio16w" value="Lack of professional development opportunities for faculty and staff" name="challenge[]" />
                    <span>Lack of professional development opportunities for faculty and staff</span>
                </label>

                <label for="optio17w">
                    <input type="checkbox" id="optio17w" value="Limited access to technology and infrastructure" name="challenge[]" />
                    <span>Limited access to technology and infrastructure</span>
                </label>
            </div>

            <div class="fr-chk">
                <h4>What specific areas would you like help in? </h4>

                <label for="optio18w"><input type="checkbox" id="optio18w" value="Students Development" name="help1[]" /><span>
                        Students Development</span></label>
                <label for="optio19w"><input type="checkbox" id="optio19w" value="Faculty/Staff Capacity Building" name="help1[]" /><span>
                        Faculty/Staff Capacity Building</span></label>
                <label for="optio20w"><input type="checkbox" id="optio20w" value="Institutional Growth" name="help1[]" /><span>
                        Institutional Growth</span></label>
                <label for="optio21w"><input type="checkbox" id="optio21w" value="Curriculum Enrichment" name="help1[]" /><span>
                        Curriculum Enrichment</span></label>
                <label for="optio22w"><input type="checkbox" id="optio22w" value="NEP Implementation" name="help1[]" /><span>
                        NEP Implementation</span></label>
                <label for="optio23w"><input type="checkbox" id="optio23w" value="Accreditation & Ranking" name="help1[]" /><span>
                        Accreditation & Ranking</span></label>
                <label for="optio24w"><input type="checkbox" id="optio24w" value="Event Management" name="help1[]" /><span>
                        Event Management</span></label>
                <label for="optio25w"><input type="checkbox" id="optio25w" value="Governance Improvement" name="help1[]" /><span>
                        Governance Improvement</span></label>
                <label for="optio26w"><input type="checkbox" id="optio26w" value="IPR Increment" name="help1[]" /><span>
                        IPR Increment</span></label>
                <label for="optio27w"><input type="checkbox" id="optio27w" value="Research Enhancement" name="help1[]" /><span>
                        Research Enhancement</span></label>
                <label for="optio28w"><input type="checkbox" id="optio28w" value="Innovation and Entrepreneurship Ecosystem" name="help1[]" /><span>
                        Innovation and Entrepreneurship Ecosystem</span></label>
            </div>
            <div class="sho-ans">

                <div class="sh-answ">
                    <h4>What is your current budget for improvement of quality of education at your Institution?<span style="color: red;">*</span>
                    </h4>
                    <input required type="textbox" name="budget" id="">
                </div>

                <div class="sh-answ">
                    <h4>What is your expected timeline for implementation of the improvements?<span style="color: red;">*</span></h4>
                    <input required type="textbox" name="timeline" id="">
                </div>

                <div class="sh-answ">
                    <h4>How did you hear about Edu Clinic?<span style="color: red;">*</span></h4>
                    <input required type="textbox" name="hear" id="">
                </div>

                <div class="sh-answ">
                    <h4>Please provide a brief description of your institution's mission and values/vision<span style="color: red;">*</span></h4>
                    <input required type="textbox" name="mission" id="">
                </div>

                <div class="sh-answ">
                    <h4>How do you measure the effectiveness of your institution's educational programs?<span style="color: red;">*</span></h4>
                    <input required type="textbox" name="educational" id="">
                </div>

                <div class="sh-answ">
                    <h4>What are your institution's current academic offerings?<span style="color: red;">*</span></h4>
                    <input required type="textbox" name="academic" id="">
                </div>

                <div class="sh-answ">
                    <h4>What are your institution's admission requirements?<span style="color: red;">*</span></h4>
                    <input required type="textbox" name="admission" id="">
                </div>

                <div class="sh-answ">
                    <h4>What is the percentage of students from under-represented groups?<span style="color: red;">*</span></h4>
                    <input required type="textbox" name="percentage" id="">
                </div>

                <div class="sh-answ">
                    <h4>What is your institution's retention rate?<span style="color: red;">*</span> </h4>
                    <input required type="textbox" name="retention" id="">
                </div>

                <div class="sh-answ">
                    <h4>What is your institution's graduation rate?<span style="color: red;">*</span> </h4>
                    <input required type="textbox" name="graduation" id="">
                </div>

                <div class="sh-answ">
                    <h4>What is your institution's student-to-faculty ratio?<span style="color: red;">*</span></h4>
                    <input required type="textbox" name="ratio" id="">
                </div>

                <div class="sh-answ">
                    <h4>What is the average class size at your institution?<span style="color: red;">*</span></h4>
                    <input required type="textbox" name="classsize" id="">
                </div>

                <div class="sh-answ">
                    <h4>What percentage of your faculty hold terminal degrees (e.g. Ph.D., MFA, etc.)?<span style="color: red;">*</span></h4>
                    <input required type="textbox" name="degrees" id="">
                </div>

                <div class="sh-answ">
                    <h4>What is the average salary for faculty at your institution?<span style="color: red;">*</span>
                    </h4>
                    <input required type="textbox" name="salary" id="">
                </div>

                <div class="sh-answ">
                    <h4>What percentage of your courses are taught by adjunct faculty?<span style="color: red;">*</span>
                    </h4>
                    <input required type="textbox" name="adjunct" id="">
                </div>

                <div class="sh-answ">
                    <h4>What percentage of your courses are taught in online/ hybrid format?<span style="color: red;">*</span></h4>
                    <input required type="textbox" name="hybrid" id="">
                </div>

                <div class="sh-answ">
                    <h4>What resources do you currently provide to support faculty and staff development?<span style="color: red;">*</span></h4>
                    <input required type="textbox" name="support" id="">
                </div>

                <div class="sh-answ">
                    <h4>What resources do you currently provide to support student learning?<span style="color: red;">*</span></h4>
                    <input required type="textbox" name="learn" id="">
                </div>

                <div class="sh-answ">
                    <h4>What is your institution's policy regarding academic freedom?<span style="color: red;">*</span>
                    </h4>
                    <input required type="textbox" name="freedom" id="">
                </div>

                <div class="sh-answ">
                    <h4>What is your institution's policy regarding diversity, equity, and inclusion?<span style="color: red;">*</span></h4>
                    <input required type="textbox" name="equity" id="">
                </div>

                <div class="sh-answ">
                    <h4>What is your institution's policy regarding student conduct and disciplinary action?<span style="color: red;">*</span></h4>
                    <input required type="textbox" name="disciplinary" id="">
                </div>

                <div class="sh-answ">
                    <h4>What is your institution's policy regarding academic integrity?<span style="color: red;">*</span></h4>
                    <input required type="textbox" name="integrity" id="">
                </div>

                <div class="sh-answ">
                    <h4>What is your institution's policy regarding student privacy and confidentiality?<span style="color: red;">*</span></h4>
                    <input required type="textbox" name="privacy" id="">
                </div>

            </div>
        </div>
        <div class="btnpart">
            <button type="submit">Submit</button>
            <button type="reset">Reset</button>
        </div>

    </form>

    <?php
    include("./footer.php");
    ?>
</body>

</html>