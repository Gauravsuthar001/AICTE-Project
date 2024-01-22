<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="./styles/faculty_form.css" />
</head>

<body>

    <?php include './nav.php' ?>
    <!-- <nav>
        <div class="logo-part">
            <div class="img1"><a href="./index.php">
                    <img src="./images/logo.png" alt="" />
                </a>
            </div>
            <label class="burger" for="active1" onclick="tog()">
                <input type="checkbox" id="active1">
                <span></span>
                <span></span>
                <span></span>
            </label>
            <div class="nav-items1">
                <div class="drop1">
                    <select name="Hello" id="sel1">
                        <option value="link1">Select Category</option>
                        <option value="link1">link1</option>
                        <option value="link2">link2</option>
                        <option value="link3">link3</option>
                    </select>
                    <form class="formnav" action="submit">
                        <input type="text" placeholder="Search Here...." class="in1" />
                        <button type="button" class="btn1">
                            <i class="fa-solid fa-magnifying-glass fa-lg"></i>
                        </button>
                    </form>
                </div>
                <div class="menu1">
                    <a href="./login.php" class="log1"><i class="fa-solid fa-user"></i><span>LOG IN</span></a>
                    <a href="./registration.php" class="sign1"><i class="fa-solid fa-users"></i><span>SIGN UP</span></a>
                </div>
            </div>
        </div>
    </nav> -->
    <form class="formfac" id="formfac" name="formfacu" action="./faculty_form_submit.php" method="post">
        <div class="part1">
            <h1>Registration Form For Experts</h1>
            <h3>A. PERSONAL DATA</h3>
            <div class="title rowed1">
                <h4>Title <span class="star1">*</span> :</h4>
                <div class="items1">
                    <label for="op1">
                        <input type="radio" id="op1" value="Prof." name="titl1" required />
                        <span>Prof.</span>
                    </label>
                    <label for="op2">
                        <input type="radio" id="op2" value="Dr." name="titl1" /> <span>Dr.</span>
                    </label>
                    <label for="op3">
                        <input type="radio" id="op3" value="Mr." name="titl1" /> <span>Mr.</span>
                    </label>
                    <label for="op4">
                        <input type="radio" id="op4" value="Ms." name="titl1" /> <span>Ms.</span>
                    </label>
                    <label for="op5">
                        <input type="radio" id="op5" value="Mrs." name="titl1" /> <span>Mrs.</span>
                    </label>
                </div>
            </div>
            <div class="name">

                <div class="fname ch1">
                    <h4>First Name<span class="star1">*</span>:</h4>
                    <input type="text" id="fn" name="Fname" required />
                </div>

                <div class="lname ch1">
                    <h4>Last Name<span class="star1">*</span>:</h4>
                    <input type="text" id="ln" name="Lname" required />
                </div>
            </div>

            <div class="gender rowed1">
                <h4>Gender<span class="star1">*</span>:</h4>
                <div class="items1">
                    <label for="opt1">
                        <input type="radio" id="opt1" value="Male" name="gen" required />
                        <span>Male</span>
                    </label>
                    <label for="opt2">
                        <input type="radio" id="opt2" value="Female" name="gen" /> <span>Female</span>
                    </label>
                    <label for="opt3">
                        <input type="radio" id="opt3" value="Other" name="gen" /> <span>Other</span>
                    </label>
                </div>
            </div>

            <div class="nation ch1">
                <h4>Nationality<span class="star1">*</span>:</h4>
                <input type="text" id="natio" name="natio" required />
            </div>

            <div class="pResidence ch1">
                <h4>Place of Residence<span class="star1">*</span>:</h4>
                <input type="text" id="pr" name="Place" required />
            </div>

            <div class="state ch1">
                <h4>State of Residence<span class="star1">*</span>:</h4>
                <input type="text" id="st" name="State" required />
            </div>

            <div class="CONTACT ch1">
                <h4>Contact No.<span class="star1">*</span>:</h4>
                <input type="text" id="cont" name="contact" required />
            </div>

            <div class="email ch1">
                <h4>E-mail address<span class="star1">*</span>:</h4>
                <input type="text" id="email" name="Email" required />
            </div>

            <div class="pin ch1">
                <h4>Pin Code<span class="star1">*</span>:</h4>
                <input type="text" id="pin1" name="Pincode" required />
            </div>

            <div class="cur rowed1">
                <h4>Currently<span class="star1">*</span>:</h4>
                <div class="items1">
                    <label for="i1">
                        <input type="checkbox" value="In-Service" name="current[]" id="i1" />
                        <span> In-Service</span> </label>
                    <label for="i2">
                        <input type="checkbox" value="Superannuated" name="current[]" id="i2" />
                        <span> Superannuated</span>
                    </label>
                </div>
            </div>

            <div class="aff ch1">
                <h4>
                    Affiliation [Present if in service/ Past if Superannuated]:
                </h4>
                <input type="text" id="affi" name="Affilitaion" />
            </div>

            <div class="nature ch1">
                <h4>Nature of engagement<span class="star1">*</span>:</h4>
                <input type="text" id="natu" name="engagement" required />
            </div>
        </div>

        <div class="part2">
            <h3>B. PROFESSIONAL DETAILS</h3>
            <div class="exper rowed1">
                <h4>Work Experience [in years]<span class="star1">*</span>:</h4>
                <div class="items1">
                    <label for="opti1">
                        <input type="radio" value="0-10" id="opti1" name="WorkExperience" required />
                        <span>0-10</span>
                    </label>
                    <label for="opti2">
                        <input type="radio" value="10-20" id="opti2" name="WorkExperience" />
                        <span>10-20</span>
                    </label>
                    <label for="opti3">
                        <input type="radio" value="20-30" id="opti3" name="WorkExperience" />
                        <span>20-30</span>
                    </label>
                    <label for="opti4">
                        <input type="radio" value="more than 30" id="opti4" name="WorkExperience" />
                        <span>more than 30</span>
                    </label>
                </div>
            </div>

            <div class="teach rowed1">
                <h4>Teaching/Industry Experience<span class="star1">*</span>:</h4>
                <div class="items1">
                    <label for="o1">
                        <input type="radio" id="o1" value="0-10 years" name="teach" required />
                        <span>0-10 years</span>
                    </label>
                    <label for="o2">
                        <input type="radio" id="o2" value="10-20 years" name="teach" />
                        <span>10-20 years</span>
                    </label>
                    <label for="o3">
                        <input type="radio" id="o3" value="20-30 years" name="teach" />
                        <span>20-30 years</span>
                    </label>
                    <label for="o4">
                        <input type="radio" id="o4" value="more than 30 years" name="teach" />
                        <span>more than 30 years</span>
                    </label>
                </div>
            </div>

            <div class="curriculam rowed1">
                <h4>
                    Curriculum/Instructional/e-learning material Development [in
                    numbers]<span class="star1">*</span>:
                </h4>
                <div class="items1">
                    <label for="option1">
                        <input type="radio" id="option1" name="cirriculam" value="0-10" required />
                        <span>0-10 </span>
                    </label>
                    <label for="option2">
                        <input type="radio" id="option2" name="cirriculam" value="10-20" /> <span>10-20 </span>
                    </label>
                    <label for="option3">
                        <input type="radio" id="option3" name="cirriculam" value="20-30" /> <span>20-30 </span>
                    </label>
                    <label for="option4">
                        <input type="radio" id="option4" name="cirriculam" value="more than 30" />
                        <span>more than 30 </span>
                    </label>
                </div>
            </div>

            <div class="professional rowed1">
                <h4>
                    Professional/ Certifications/ Licenses/ Courses Completed<span class="star1">*</span>:
                </h4>
                <div class="items1">
                    <label for="option11">
                        <input type="radio" value="0-10" id="option11" name="professional" required />
                        <span>0-10 </span>
                    </label>
                    <label for="option22">
                        <input type="radio" value="10-20" id="option22" name="professional" />
                        <span>10-20 </span>
                    </label>
                    <label for="option33">
                        <input type="radio" value="20-30" id="option33" name="professional" />
                        <span>20-30 </span>
                    </label>
                    <label for="option44">
                        <input type="radio" value="more than 30" id="option44" name="professional" />
                        <span>more than 30 </span>
                    </label>
                </div>
            </div>

            <div class="reserch ch1 rowed1">
                <h4>Research Area<span class="star1">*</span>:</h4>
                <input type="text" id="name1" name="research" />
            </div>
            <div class="kenote1 rowed1">
                <h4>
                    No. of Keynote/Invited talks/Presentations<span class="star1">*</span>:
                </h4>
                <div class="items1">
                    <label for="option111">
                        <input type="radio" id="option111" value="0-10" name="keyn" required />
                        <span>0-10 </span>
                    </label>
                    <label for="option222">
                        <input type="radio" id="option222" value="10-20" name="keyn" />
                        <span>10-20 </span>
                    </label>
                    <label for="option333">
                        <input type="radio" id="option333" value="20-30" name="keyn" />
                        <span>20-30 </span>
                    </label>
                    <label for="option444">
                        <input type="radio" id="option444" value="more than 30" name="keyn" />
                        <span>more than 30 </span>
                    </label>
                </div>
            </div>

            <div class="publications rowed1">
                <h4>
                    No. of Publications[SCI/Scopus/UGC Care]<span class="star1">*</span>:
                </h4>
                <div class="items1">
                    <label for="optio1">
                        <input type="radio" id="optio1" name="publications" value="0-10" required />
                        <span>0-10 </span>
                    </label>
                    <label for="optio2">
                        <input type="radio" id="optio2" value="10-20" name="publications" /> <span>10-20 </span>
                    </label>
                    <label for="optio3">
                        <input type="radio" id="optio3" value="more than 30" name="publications" />
                        <span>more than 30 </span>
                    </label>
                </div>
            </div>

            <div class="consulting rowed1">
                <h4>
                    Consulting Works/Projects carried out<span class="star1">*</span>:
                </h4>
                <div class="items1">
                    <label for="optio22">
                        <input type="radio" id="optio22" name="consul" value="10-20" required />
                        <span>10-20 </span>
                    </label>
                    <label for="optio33">
                        <input type="radio" value="20-30" id="optio33" name="consul" />
                        <span>20-30 </span>
                    </label>
                    <label for="optio44">
                        <input type="radio" value="more than 30" id="optio44" name="consul" />
                        <span>more than 30 </span>
                    </label>
                </div>
            </div>

            <div class="train rowed1">
                <h4>
                    Training and Developing Students/ employees Experience [in
                    years]<span class="star1">*</span>:
                </h4>
                <div class="items1">
                    <label for="optio222">
                        <input type="radio" id="optio222" value="10-20" name="training" required />
                        <span>10-20 </span>
                    </label>
                    <label for="optio333">
                        <input type="radio" id="optio333" value="20-30" name="training" />
                        <span>20-30 </span>
                    </label>
                    <label for="optio444">
                        <input type="radio" id="optio444" value="more than 30" name="training" />
                        <span>more than 30 </span>
                    </label>
                </div>
            </div>

            <div class="industry ch1">
                <h4>Industry Partnerships<span class="star1">*</span>:</h4>
                <p>
                    (Highlight any partnerships with industry partners and the outcomes)
                </p>
                <input type="text" id="name3" name="Partnerships" />
            </div>
        </div>

        <div class="part3">
            <h3>C. EXPERTISE DETAILS/MOTIVATION FOR APPLYING AS EXPERT</h3>

            <div class="expertise">
                <h4>Area Of Expertise<span class="star1">*</span>:</h4>
                <label for="optio1w"><input type="checkbox" id="optio1w" class="c1" value="Students Development"
                        name="expert[]" /><span>
                        Students Development</span></label>
                <ul id="sub1" name="sub2">
                    <li><label for="optio1w1"><input type="checkbox" id="optio1w1"
                                value="Student engagement and retention strategies" name="expert1" /><span>
                                Student engagement and retention strategies</span></label></li>
                    <li><label for="optio1w2"><input type="checkbox" id="optio1w2"
                                value="Enrollment management and admissions processes" name="expert1" /><span>
                                Enrollment management and admissions processes</span></label></li>
                    <li><label for="optio1w3"><input type="checkbox" id="optio1w3" value="Student support services"
                                name="expert1" /><span>
                                Student support services</span></label></li>
                    <li><label for="optio1w4"><input type="checkbox" id="optio1w4"
                                value="Student success and retention initiatives" name="expert1" /><span>
                                Student success and retention initiatives</span></label></li>
                    <li><label for="optio1w1"><input type="checkbox" id="optio1w1"
                                value="Campus life and student activities programming" name="expert1" /><span>
                                Campus life and student activities programming</span></label></li>
                    <li><label for="optio1w1"><input type="checkbox" id="optio1w1"
                                value="Study abroad and international exchange programs" name="expert1" /><span>
                                Study abroad and international exchange programs</span></label></li>
                    <li><label for="optio1w1"><input type="checkbox" id="optio1w1"
                                value="Career exploration and job placement programs" name="expert1" /><span>
                                Career exploration and job placement programs</span></label></li>
                    <li><label for="optio1w1"><input type="checkbox" id="optio1w1"
                                value="Student conduct and discipline policies" name="expert1" /><span>
                                Student conduct and discipline policies</span></label></li>
                    <li><label for="optio1w1"><input type="checkbox" id="optio1w1"
                                value="Student health and counseling services" name="expert1" /><span>
                                Student health and counseling services</span></label></li>
                    <li><label for="optio1w1"><input type="checkbox" id="optio1w1"
                                value="Financial aid and scholarship programs" name="expert1" /><span>
                                Financial aid and scholarship programs</span></label></li>
                    <li><label for="optio1w1"><input type="checkbox" id="optio1w1"
                                value="Academic advising and student support services" name="expert1" /><span>
                                Academic advising and student support services</span></label></li>
                    <li><label for="optio1w1"><input type="checkbox" id="optio1w1"
                                value="Graduate student recruitment and retention" name="expert1" /><span>
                                Graduate student recruitment and retention</span></label></li>
                    <li><label for="optio1w1"><input type="checkbox" id="optio1w1"
                                value="Graduate student funding and support" name="expert1" /><span>
                                Graduate student funding and support</span></label></li>
                    <li><label for="optio1w1"><input type="checkbox" id="optio1w1"
                                value="Transfer student programs and services" name="expert1" /><span>
                                Transfer student programs and services</span></label></li>
                    <li><label for="optio1w1"><input type="checkbox" id="optio1w1"
                                value="International student programs and services" name="expert1" /><span>
                                International student programs and services</span></label></li>
                    <li><label for="optio1w1"><input type="checkbox" id="optio1w1"
                                value="First-year experience and transition programs" name="expert1" /><span>
                                First-year experience and transition programs</span></label></li>
                    <li><label for="optio1w1"><input type="checkbox" id="optio1w1"
                                value="Student leadership development programs" name="expert1" /><span>
                                Student leadership development programs</span></label></li>
                    <li><label for="optio1w1"><input type="checkbox" id="optio1w1"
                                value="Student government and organization support" name="expert1" /><span>
                                Student government and organization support</span></label></li>
                    <li><label for="optio1w1"><input type="checkbox" id="optio1w1"
                                value="Student employment and work-study programs" name="expert1" /><span>
                                Student employment and work-study programs</span></label></li>
                    <li><label for="optio1w1"><input type="checkbox" id="optio1w1"
                                value="Alumni engagement and fundraising initiatives" name="expert1" /><span>
                                Alumni engagement and fundraising initiatives</span></label></li>
                    <li><label for="optio1w1"><input type="checkbox" id="optio1w1" value="Interview preparation"
                                name="expert1" /><span>
                                Interview preparation</span></label></li>
                </ul>
                <label for="optio2w"><input type="checkbox" id="optio2w" class="c1"
                        value="Faculty/Staff Capacity Building" name="expert[]" /><span>
                        Faculty/Staff Releated Initiatives</span></label>
                <ul id="sub1" name="sub2">
                    <li><label for="optio2w1"><input type="checkbox" id="optio2w1"
                                value="Faculty development and support" name="expert2" /><span>
                                Faculty development and support</span></label></li>
                    <li><label for="optio2w2"><input type="checkbox" id="optio2w2"
                                value="Faculty and staff diversity and inclusion training" name="expert2" /><span>
                                Faculty and staff diversity and inclusion training</span></label></li>
                    <li><label for="optio2w3"><input type="checkbox" id="optio2w3"
                                value="Faculty workload and productivity" name="expert2" /><span>
                                Faculty workload and productivity</span></label></li>
                    <li><label for="optio2w4"><input type="checkbox" id="optio2w4"
                                value="Faculty tenure and promotion processes" name="expert2" /><span>
                                Faculty tenure and promotion processes</span></label></li>
                    <li><label for="optio2w5"><input type="checkbox" id="optio2w5"
                                value="Faculty evaluation and feedback mechanisms" name="expert2" /><span>Faculty
                                evaluation and feedback mechanisms
                            </span></label></li>
                    <li><label for="optio2w6"><input type="checkbox" id="optio2w6"
                                value="Grant writing and external funding opportunities" name="expert2" /><span>
                                Grant writing and external funding opportunities</span></label></li>
                    <li><label for="optio2w7"><input type="checkbox" id="optio2w7"
                                value="Government grants and contracts compliance" name="expert2" /><span>
                                Government grants and contracts compliance</span></label></li>
                    <li><label for="optio2w8"><input type="checkbox" id="optio2w8"
                                value="Consulting services for industry and government" name="expert2" /><span>
                                Consulting services for industry and government</span></label></li>
                    <li><label for="optio2w9"><input type="checkbox" id="optio2w9"
                                value="Continuing education for professionals" name="expert2" /><span>
                                Continuing education for professionals</span></label></li>
                    <li><label for="optio2w10"><input type="checkbox" id="optio2w10"
                                value="Certification and credentials" name="expert2" /><span>
                                Certification and credentials</span></label></li>
                    <li><label for="optio2w11"><input type="checkbox" id="optio2w11"
                                value="Mentoring and coaching for faculty and staff" name="expert2" /><span>
                                Mentoring and coaching for faculty and staff</span></label></li>
                    <li><label for="optio2w12"><input type="checkbox" id="optio2w12"
                                value="Engagement for full time, part time, Adjunct Faculty, visiting faculty, Professor by Practice opportunities"
                                name="expert2" /><span>
                                Engagement for full time, part time, Adjunct Faculty, visiting faculty, Professor by
                                Practice opportunities</span></label></li>
                    <li><label for="optio2w13"><input type="checkbox" id="optio2w13" value="Consultancy work"
                                name="expert2" /><span>
                                Consultancy work</span></label></li>
                    <li><label for="optio2w14"><input type="checkbox" id="optio2w14" value="Resource Sharing"
                                name="expert2" /><span>
                                Resource Sharing</span></label></li>
                    <li><label for="optio2w15"><input type="checkbox" id="optio2w15" value="Capacity building"
                                name="expert2" /><span>
                                Capacity building</span></label></li>
                </ul>
                <label for="optio3w"><input type="checkbox" id="optio3w" class="c1" value="Institutional Growth"
                        name="expert[]" /><span>
                        Institutional Growth</span></label>
                <ul name="sub2">
                    <li>
                        <label for="optio3w1"><input type="checkbox" id="optio3w1"
                                value="Fundraising and development strategies" name="expert3" /><span>
                                Fundraising and development strategies</span></label>
                    </li>
                    <li>
                        <label for="optio3w2"><input type="checkbox" id="optio3w2"
                                value="Institutional research and data analysis" name="expert3" /><span>
                                Institutional research and data analysis</span></label>
                    </li>
                    <li>
                        <label for="optio3w3"><input type="checkbox" id="optio3w3"
                                value="Information technology and data management systems" name="expert3" /><span>
                                Information technology and data management systems</span></label>
                    </li>
                    <li>
                        <label for="optio3w4"><input type="checkbox" id="optio3w4"
                                value="Legal and regulatory compliance" name="expert3" /><span>
                                Legal and regulatory compliance</span></label>
                    </li>
                    <li>
                        <label for="optio3w5"><input type="checkbox" id="optio3w5" value="Accreditation and assessment"
                                name="expert3" /><span>
                                Accreditation and assessment</span></label>
                    </li>
                    <li>
                        <label for="optio3w6"><input type="checkbox" id="optio3w6"
                                value="Community outreach and partnerships" name="expert3" /><span>
                                Community outreach and partnerships</span></label>
                    </li>
                    <li>
                        <label for="optio3w7"><input type="checkbox" id="optio3w7"
                                value="Institutional advancement and alumni relations" name="expert3" /><span>
                                Institutional advancement and alumni relations</span></label>
                    </li>
                    <li>
                        <label for="optio3w8"><input type="checkbox" id="optio3w8"
                                value="Career services and professional development initiatives" name="expert3" /><span>
                                Career services and professional development initiatives</span></label>
                    </li>
                    <li>
                        <label for="optio3w9"><input type="checkbox" id="optio3w9"
                                value="Health and wellness initiatives" name="expert3" /><span>
                                Health and wellness initiatives</span></label>
                    </li>
                    <li>
                        <label for="optio3w10"><input type="checkbox" id="optio3w10"
                                value="Library and information services" name="expert3" /><span>
                                Library and information services</span></label>
                    </li>
                    <li>
                        <label for="optio3w11"><input type="checkbox" id="optio3w11"
                                value="Technology infrastructure and support services" name="expert3" /><span>
                                Technology infrastructure and support services</span></label>
                    </li>
                    <li>
                        <label for="optio3w12"><input type="checkbox" id="optio3w12"
                                value="Assessment and evaluation of institutional effectiveness" name="expert3" /><span>
                                Assessment and evaluation of institutional effectiveness</span></label>
                    </li>
                    <li>
                        <label for="optio3w13"><input type="checkbox" id="optio3w13"
                                value="Campus dining and food services" name="expert3" /><span>
                                Campus dining and food services</span></label>
                    </li>
                    <li>
                        <label for="optio3w14"><input type="checkbox" id="optio3w14"
                                value="Campus transportation and parking services" name="expert3" /><span>
                                Campus transportation and parking services</span></label>
                    </li>
                    <li>
                        <label for="optio3w15"><input type="checkbox" id="optio3w15"
                                value="Procurement and contracting policies and procedures" name="expert3" /><span>
                                Procurement and contracting policies and procedures</span></label>
                    </li>
                    <li>
                        <label for="optio3w16"><input type="checkbox" id="optio3w16"
                                value="Internal audit and compliance monitoring" name="expert3" /><span>
                                Internal audit and compliance monitoring</span></label>
                    </li>
                    <li>
                        <label for="optio3w17"><input type="checkbox" id="optio3w17" value="Perception improvement"
                                name="expert3" /><span>
                                Perception improvement</span></label>
                    </li>
                    <li>
                        <label for="optio3w18"><input type="checkbox" id="optio3w18" value="Internationalization"
                                name="expert3" /><span>
                                Internationalization</span></label>
                    </li>

                </ul>
                <label for="optio4w"><input type="checkbox" id="optio4w" class="c1" value="Curriculum Enrichment"
                        name="expert[]" /><span>
                        Curriculum Enrichment</span></label>
                <ul name="sub2">
                    <li>
                        <label for="optio4w1"><input type="checkbox" id="optio4w1"
                                value="Academic program development and review" name="expert4" /><span>
                                Academic program development and review</span></label>
                    </li>
                    <li>
                        <label for="optio4w2"><input type="checkbox" id="optio4w2"
                                value="Curriculum design and assessment" name="expert4" /><span>
                                Curriculum design and assessment</span></label>
                    </li>
                    <li>
                        <label for="optio4w3"><input type="checkbox" id="optio4w3"
                                value="Online and distance education program development" name="expert4" /><span>
                                Online and distance education program development</span></label>
                    </li>
                    <li>
                        <label for="optio4w4"><input type="checkbox" id="optio4w4"
                                value="Athletics and recreation program development" name="expert4" /><span>
                                Athletics and recreation program development</span></label>
                    </li>
                    <li>
                        <label for="optio4w5"><input type="checkbox" id="optio4w5"
                                value="Continuing education and professional development programs"
                                name="expert4" /><span>
                                Continuing education and professional development programs</span></label>
                    </li>
                    <li>
                        <label for="optio4w6"><input type="checkbox" id="optio4w6"
                                value="Distance learning and online course development" name="expert4" /><span>
                                Distance learning and online course development</span></label>
                    </li>
                    <li>
                        <label for="optio4w7"><input type="checkbox" id="optio4w7"
                                value="Course scheduling and planning" name="expert4" /><span>
                                Course scheduling and planning</span></label>
                    </li>
                    <li>
                        <label for="optio4w8"><input type="checkbox" id="optio4w8"
                                value="Course evaluation and feedback mechanisms" name="expert4" /><span>
                                Course evaluation and feedback mechanisms</span></label>
                    </li>
                    <li>
                        <label for="optio4w9"><input type="checkbox" id="optio4w9"
                                value="Assessment of student learning outcomes" name="expert4" /><span>
                                Assessment of student learning outcomes</span></label>
                    </li>
                    <li>
                        <label for="optio4w10"><input type="checkbox" id="optio4w10"
                                value="Graduate program development and review" name="expert4" /><span>
                                Graduate program development and review</span></label>
                    </li>
                    <li>
                        <label for="optio4w11"><input type="checkbox" id="optio4w11"
                                value="Academic program assessment and improvement" name="expert4" /><span>
                                Academic program assessment and improvement</span></label>
                    </li>
                    <li>
                        <label for="optio4w12"><input type="checkbox" id="optio4w12"
                                value="Academic program internationalization and globalization" name="expert4" /><span>
                                Academic program internationalization and globalization</span></label>
                    </li>
                </ul>
                <label for="optio5w"><input type="checkbox" id="optio5w" class="c1" value="NEP Implementation"
                        name="expert[]" /><span>
                        NEP Implementation</span></label>
                <ul name="sub2">
                    <li>
                        <label for="optio5w1"><input type="checkbox" id="optio5w1" value="NEP Implementation"
                                name="expert5" /><span>NEP Implementation</span></label>
                    </li>
                    <li>
                        <label for="optio5w2"><input type="checkbox" id="optio5w2"
                                value="Academic program development and review" name="expert5" /><span>Academic program
                                development and review</span></label>
                    </li>
                </ul>
                <label for="optio6w"><input type="checkbox" id="optio6w" class="c1" value="Accreditation & Ranking"
                        name="expert[]" /><span>
                        Accreditation & Ranking</span></label>
                <ul name="sub2">
                    <li>
                        <label for="optio6w1"><input type="checkbox" id="optio6w1"
                                value="Academic program accreditation and review" name="expert6" /><span>
                                Academic program accreditation and review</span></label>
                    </li>
                </ul>
                <label for="optio7w"><input type="checkbox" id="optio7w" class="c1" value="Event Management"
                        name="expert[]" /><span>
                        Event Management</span></label>
                <ul name="sub2">

                </ul>
                <label for="optio8w"><input type="checkbox" id="optio8w" class="c1" value="Governance Improvement"
                        name="expert[]" /><span>
                        Governance Improvement</span></label>
                <ul name="sub2">
                    <li><label for="optio8w1"><input type="checkbox" id="optio8w1"
                                value="Strategic planning and goal-setting" name="expert8" /><span>Strategic planning
                                and goal-setting</span></label> </li>
                    <li><label for="optio8w2"><input type="checkbox" id="optio8w2"
                                value="Diversity, equity, and inclusion initiatives" name="expert8" /><span>Diversity,
                                equity, and inclusion initiatives</span></label> </li>
                    <li><label for="optio8w3"><input type="checkbox" id="optio8w3"
                                value="Facilities planning and management" name="expert8" /><span>Facilities planning
                                and management</span></label> </li>
                    <li><label for="optio8w4"><input type="checkbox" id="optio8w4"
                                value="Budget and financial management" name="expert8" /><span>Budget and financial
                                management</span></label> </li>
                    <li><label for="optio8w5"><input type="checkbox" id="optio8w5"
                                value="Branding and marketing strategies" name="expert8" /><span>Branding and marketing
                                strategies</span></label> </li>
                    <li><label for="optio8w6"><input type="checkbox" id="optio8w6" value="Campus safety and security"
                                name="expert8" /><span>Campus safety and security</span></label> </li>
                    <li><label for="optio8w7"><input type="checkbox" id="optio8w7"
                                value="Environmental sustainability initiatives" name="expert8" /><span>Environmental
                                sustainability initiatives</span></label> </li>
                    <li><label for="optio8w8"><input type="checkbox" id="optio8w8"
                                value="Risk management and crisis response planning" name="expert8" /><span>Risk
                                management and crisis response planning</span></label> </li>
                    <li><label for="optio8w9"><input type="checkbox" id="optio8w9"
                                value="Governance and leadership development" name="expert8" /><span>Governance and
                                leadership development</span></label> </li>
                    <li><label for="optio8w10"><input type="checkbox" id="optio8w10"
                                value="Public policy and government relations" name="expert8" /><span>Public policy and
                                government relations</span></label> </li>
                    <li><label for="optio8w11"><input type="checkbox" id="optio8w11"
                                value="Community service and volunteerism initiatives" name="expert8" /><span>Community
                                service and volunteerism initiatives</span></label> </li>
                    <li><label for="optio8w12"><input type="checkbox" id="optio8w12"
                                value="Academic integrity and ethics" name="expert8" /><span>Academic integrity and
                                ethics</span></label> </li>
                    <li><label for="optio8w13"><input type="checkbox" id="optio8w13"
                                value="Conflict resolution and mediation services" name="expert8" /><span>Conflict
                                resolution and mediation services</span></label> </li>
                    <li><label for="optio8w14"><input type="checkbox" id="optio8w14"
                                value="Academic and administrative policy development and review"
                                name="expert8" /><span>Academic and administrative policy development and
                                review</span></label> </li>
                    <li><label for="optio8w15"><input type="checkbox" id="optio8w15"
                                value="Residential life and housing services" name="expert8" /><span>Residential life
                                and housing services</span></label> </li>
                    <li><label for="optio8w16"><input type="checkbox" id="optio8w16"
                                value="Campus sustainability and green initiatives" name="expert8" /><span>Campus
                                sustainability and green initiatives</span></label> </li>
                    <li><label for="optio8w17"><input type="checkbox" id="optio8w17"
                                value="Emergency preparedness and response planning" name="expert8" /><span>Emergency
                                preparedness and response planning</span></label> </li>
                    <li><label for="optio8w18"><input type="checkbox" id="optio8w18"
                                value="Emergency medical services and first aid training"
                                name="expert8" /><span>Emergency medical services and first aid training</span></label>
                    </li>
                    <li><label for="optio8w19"><input type="checkbox" id="optio8w19"
                                value="Physical plant and facilities management" name="expert8" /><span>Physical plant
                                and facilities management</span></label> </li>
                    <li><label for="optio8w20"><input type="checkbox" id="optio8w20"
                                value="Energy management and conservation" name="expert8" /><span>Energy management and
                                conservation</span></label> </li>
                    <li><label for="optio8w21"><input type="checkbox" id="optio8w21"
                                value="Construction and renovation project planning" name="expert8" /><span>Construction
                                and renovation project planning</span></label> </li>
                    <li><label for="optio8w22"><input type="checkbox" id="optio8w22"
                                value="Risk assessment and management" name="expert8" /><span>Risk assessment and
                                management</span></label> </li>
                    <li><label for="optio8w23"><input type="checkbox" id="optio8w23"
                                value="Information security and data privacy" name="expert8" /><span>Information
                                security and data privacy</span></label> </li>
                    <li><label for="optio8w24"><input type="checkbox" id="optio8w24"
                                value="Records management and retention policies" name="expert8" /><span>Records
                                management and retention policies</span></label> </li>
                    <li><label for="optio8w25"><input type="checkbox" id="optio8w25"
                                value="Establish procedures for gift acceptance and donor recognition"
                                name="expert8" /><span>Establish procedures for gift acceptance and donor
                                recognition</span></label> </li>
                    <li><label for="optio8w26"><input type="checkbox" id="optio8w26"
                                value="Development of strategic partnerships with other universities and organizations"
                                name="expert8" /><span>Development of strategic partnerships with other universities and
                                organizations</span></label> </li>
                </ul>
                <label for="optio9w"><input type="checkbox" id="optio9w" class="c1" value="IPR Increment"
                        name="expert[]" /><span>
                        IPR Increment</span></label>
                <ul name="sub2">
                    <li><label for="optio9w1"><input type="checkbox" id="optio9w1"
                                value="Intellectual property and patent management" name="expert9" /><span>Intellectual
                                property and patent management</span></label></li>
                    <li><label for="optio9w2"><input type="checkbox" id="optio9w2"
                                value="Intellectual property and copyright law" name="expert9" /><span>Intellectual
                                property and copyright law</span></label></li>
                    <li><label for="optio9w3"><input type="checkbox" id="optio9w3"
                                value="Intellectual property licensing and commercialization"
                                name="expert9" /><span>Intellectual property licensing and
                                commercialization</span></label></li>
                    <li><label for="optio9w4"><input type="checkbox" id="optio9w4"
                                value="Technology transfer and commercialization" name="expert9" /><span>Technology
                                transfer and commercialization</span></label></li>
                    <li><label for="optio9w5"><input type="checkbox" id="optio9w5" value="IPR & Commercialisation"
                                name="expert9" /><span>IPR & Commercialisation</span></label></li>
                </ul>
                <label for="optio10w"><input type="checkbox" id="optio10w" class="c1" value="Research Enhancement"
                        name="expert[]" /><span>
                        Research Enhancement</span></label>
                <ul name="sub2">
                    <li><label for="optio10w1"><input type="checkbox" id="optio10w1"
                                value="Research partnerships and collaborations" name="expert10" /><span>Research
                                partnerships and collaborations</span></label></li>
                    <li><label for="optio10w2"><input type="checkbox" id="optio10w2"
                                value="Undergraduate research opportunities and support"
                                name="expert10" /><span>Undergraduate research opportunities and support</span></label>
                    </li>
                    <li><label for="optio10w3"><input type="checkbox" id="optio10w3"
                                value="Research ethics and compliance" name="expert10" /><span>Research ethics and
                                compliance</span></label></li>
                    <li><label for="optio10w4"><input type="checkbox" id="optio10w4" value="Research proposal writing"
                                name="expert10" /><span>Research proposal writing</span></label></li>
                </ul>
                <label for="optio11w"><input type="checkbox" id="optio11w" class="c1"
                        value="Innovation and Entrepreneurship Ecosystem" name="expert[]" /><span>
                        Innovation and Entrepreneurship Ecosystem</span></label>
                <ul name="sub2">
                    <li><label for="optio11w1"><input type="checkbox" id="optio11w1"
                                value="Entrepreneurship and innovation initiatives"
                                name="expert11" /><span>Entrepreneurship and innovation initiatives</span></label></li>
                    <li><label for="optio11w2"><input type="checkbox" id="optio11w2"
                                value="Education technology and innovation" name="expert11" /><span>Education technology
                                and innovation</span></label></li>
                    <li><label for="optio11w3"><input type="checkbox" id="optio11w3"
                                value="Industry partnerships and collaborations" name="expert11" /><span>Industry
                                partnerships and collaborations</span></label></li>
                    <li><label for="optio11w4"><input type="checkbox" id="optio11w4"
                                value="Business incubation and startup support" name="expert11" /><span>Business
                                incubation and startup support</span></label></li>
                    <li><label for="optio11w5"><input type="checkbox" id="optio11w5"
                                value="Academic program innovation and development" name="expert11" /><span>Academic
                                program innovation and development</span></label></li>
                    <li><label for="optio11w6"><input type="checkbox" id="optio11w6"
                                value="Product design and development" name="expert11" /><span>Product design and
                                development</span></label></li>
                </ul>
            </div>
        </div>

        <div class="part4">
            <h3>D. CV DETAILS AS MENTIONED BELOW:</h3>
            <div class="objective ch1">
                <h4>Your Objective<span class="star1">*</span>:</h4>
                <input type="text" id="name4" name="objective" />
            </div>

            <div class="designation ch1">
                <h4>Designation<span class="star1">*</span>:</h4>
                <input type="text" id="name5" name="Designation" />
            </div>

            <div class="education ch1">
                <h4 class="e1">
                    Educational Qualification, Year of Award of Degree, Name of
                    Organisation<span class="star1">*</span>:
                </h4>
                <input type="text" id="name6" name="Qualification" />
            </div>

            <div class="experience ch1">
                <h4 class="e1">Experience<span class="star1">*</span>:</h4>
                <p>
                    (Add Current or Most Recent Position, Name of Company, City, State,
                    Employment Dates, Roles & Responsibilities)
                </p>
                <input type="text" id="name7" name="Experience" />
            </div>

            <div class="references ch1">
                <h4 class="e1">
                    Professional references (3-5)<span class="star1">*</span>:
                </h4>
                <p>
                    (Add Name, Position/ Designation, Address, Email ID & Contact No.)
                </p>
                <input type="text" id="name8" name="references" />
            </div>

            <div class="programming ch1">
                <h4>
                    Skilled in [Programming Languages]<span class="star1">*</span>:
                </h4>
                <input type="text" id="name9" name="ProgrammingLanguage" />
            </div>

            <div class="skills ch1">
                <h4>
                    Showcase Your skills & experience<span class="star1">*</span>:
                </h4>
                <input type="text" id="name10" name="Skills" />
            </div>

            <div class="webpage ch1">
                <h4>Personal Webpage (if Any):</h4>
                <input type="text" id="name11" name="PWebpage" />
            </div>

            <div class="memberships">
                <h4>Professional Memberships<span class="star1">*</span>:</h4>
                <label for="optio11w">
                    <input type="checkbox" id="optio11w" name="promember[]" value="IETE" />
                    <span>IETE </span>
                </label>
                <label for="optio22w">
                    <input type="checkbox" id="optio22w" name="promember[]" value="IEEE" />
                    <span>IEEE </span>
                </label>
                <label for="optio33w">
                    <input type="checkbox" id="optio33w" name="promember[]" value="CSI" />
                    <span>CSI</span>
                </label>
                <label for="optio44w">
                    <input type="checkbox" id="optio44w" name="promember[]" value="Aeronautical Society of India" />
                    <span>Aeronautical Society of India </span>
                </label>
                <label for="optio55w">
                    <input type="checkbox" id="optio55w" name="promember[]" value="Computer Society of India" />
                    <span>Computer Society of India </span>
                </label>
                <label for="optio66w">
                    <input type="checkbox" id="optio66w" name="promember[]" value="Engineering Council of India" />
                    <span>Engineering Council of India </span>
                </label>
                <label for="optio77w">
                    <input type="checkbox" id="optio77w" name="promember[]" value="Indian Institute of Architects" />
                    <span>Indian Institute of Architects </span>
                </label>
                <label for="optio88w">
                    <input type="checkbox" id="optio88w" name="promember[]"
                        value="Institute of Chartered Accountants of India " />
                    <span>Institute of Chartered Accountants of India </span>
                </label>
                <label for="optio99w">
                    <input type="checkbox" id="optio99w" name="promember[]"
                        value="Institute of Company Secretaries of India " />
                    <span>Institute of Company Secretaries of India </span>
                </label>
                <label for="optio101w">
                    <input type="checkbox" id="optio101w" name="promember[]"
                        value="Institute of Cost Accountants of India" />
                    <span>Institute of Cost Accountants of India </span>
                </label>
                <label for="optio1111w">
                    <input type="checkbox" id="optio1111w" name="promember[]"
                        value="Institution of Mechanical Engineers (India)" />
                    <span>Institution of Mechanical Engineers (India) </span>
                </label>
                <label for="optio1112w">
                    <input type="checkbox"
                        onclick="var input = document.getElementById('optio1112'); if(this.checked){ input.disabled = false; input.focus();}else{input.disabled=true;}"
                        id="optio1112w" value="Other" />
                    <span>Other:</span>
                    <input class="otherin" type="text" id="optio1112" disabled="disabled" name="promember[]" />
                </label>
            </div>

            <div class="commitee">
                <h4>Member of Committees<span class="star1">*</span>:</h4>
                <label for="optio11wq">
                    <input type="checkbox" id="optio11wq" name="commit[]" value="Academic Council" />
                    <span>Academic Council </span>
                </label>
                <label for="optio22wq">
                    <input type="checkbox" id="optio22wq" name="commit[]" value="Research Board" />
                    <span>Research Board </span>
                </label>
                <label for="optio33wq">
                    <input type="checkbox" id="optio33wq" name="commit[]" value="Executive Council" />
                    <span>Executive Council </span>
                </label>
                <label for="optio44wq">
                    <input type="checkbox" id="optio44wq" name="commit[]" value="Finance Committee" />
                    <span>Finance Committee </span>
                </label>
                <label for="optio55wq">
                    <input type="checkbox" id="optio55wq" name="commit[]" value="Board of Governors" />
                    <span>Board of Governors </span>
                </label>
                <label for="optio66wq">
                    <input type="checkbox" id="optio66wq" name="commit[]" value="Board of Management" />
                    <span>Board of Management </span>
                </label>
                <label for="optio77wq">
                    <input type="checkbox" id="optio77wq" name="commit[]" value="Student Affairs" />
                    <span>Student Affairs </span>
                </label>
                <label for="optio88wq">
                    <input type="checkbox" id="optio88wq" name="commit[]" value="Selection Committees" />
                    <span>Selection Committees </span>
                </label>
                <label for="optio99wq">
                    <input type="checkbox" id="optio99wq" name="commit[]" value="Any Other" />
                    <span>Any Other </span>
                </label>
                <label for="optio101wq">
                    <input type="checkbox" id="optio101wq"
                        onclick="var input = document.getElementById('optio101'); if(this.checked){ input.disabled = false; input.focus();}else{input.disabled=true;}" />
                    <span>Other: </span>
                    <input class="otherin" type="text" disabled="disabled" id="optio101" name="commit[]" />
                </label>
            </div>

            <div class="awards ch1">
                <h4>
                    Accomplishments/ Awards/ Recognition<span class="star1">*</span>:
                </h4>
                <input type="text" name="Awards1" />
            </div>
        </div>
        <div class="part5">
            <h3>E. AGREEMENT</h3>

            <div class="argre">
                <label for="agre1">
                    <input type="checkbox" name="agreement" id="agre1" required />
                    <span>
                        I hereby confirm that all the details completed in this form are
                        correct<span class="star1">*</span>
                    </span>
                </label>
            </div>
        </div>

        <div class="btnpart">
            <button type="submit" onclick="validatefacu()">Submit</button>
            <button type="reset">Clear Form</button>
        </div>
    </form>
    <?php
    include("./footer.php");
    ?>
    <script>
    var vali = false;

    function validatefacu() {
        var Fname =
            document.forms.formfacu.Fname.value;
        var email =
            document.forms.formfacu.Email.value;
        var phone =
            document.forms.formfacu.contact.value;
        //Javascript reGex for Email Validation.
        var regEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/g;
        // Javascript reGex for Phone Number validation.
        var regPhone = /^\d{10}$/;
        // Javascript reGex for Name validation
        var regName = /\d+$/g;

        if (Fname == "" || regName.test(Fname)) {
            window.alert("Please enter your name properly.");
            return false;
        } else if (email == "" || !regEmail.test(email)) {
            window.alert("Please enter a valid e-mail address.");
            return false;
        } else if (phone == "" || !regPhone.test(phone)) {
            alert("Please enter valid phone number.");
            return false;
        } else {
            vali = true;
        }
        return true;
    }
    let sub12 = document.getElementsByName('sub2');
    let expert1 = document.getElementsByName('expert[]');
    for (let i = 0; i < expert1.length; i++) {
        expert1[i].addEventListener("change", () => {
            if (expert1[i].checked) {
                sub12[i].classList.add('sublist1');
            } else {
                sub12[i].classList.remove('sublist1');
            }
        });
    }
    </script>
</body>

</html>