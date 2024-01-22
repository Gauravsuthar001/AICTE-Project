<?php

$server1 = "localhost";
$user = "root";
$pass1 = "";
$database1 = "new1";
$connectdb12 = mysqli_connect("$server1", "$user", "$pass1", "$database1");

$title = $_POST['titl1'];
$FirstName = $_POST['Fname'];
$LastName = $_POST['Lname'];
$gender = $_POST['gen'];
$nation = $_POST['natio'];
$Place = $_POST['Place'];
$State = $_POST['State'];
$contact = $_POST['contact'];
$Email = $_POST['Email'];
$Pincode = $_POST['Pincode'];
$Currently = serialize($_POST['current']);
$Currently1 = unserialize($Currently);
$Affilitaion = $_POST['Affilitaion'];
$engagement = $_POST['engagement'];
$WorkExperience = $_POST['WorkExperience'];
$teach = $_POST['teach'];
$cirriculam = $_POST['cirriculam'];
$professional = $_POST['professional'];
$research = $_POST['research'];
$keyn = $_POST['keyn'];
$publications = $_POST['publications'];
$consul = $_POST['consul'];
$training = $_POST['training'];
$Partnerships = $_POST['Partnerships'];
$expert = serialize($_POST['expert']);
$expert1 = unserialize($expert);
$objective = $_POST['objective'];
$Designation = $_POST['Designation'];
$Qualification = $_POST['Qualification'];
$Experience = $_POST['Experience'];
$references = $_POST['references'];
$ProgrammingLanguage = $_POST['ProgrammingLanguage'];
$Skills = $_POST['Skills'];
$PWebpage = $_POST['PWebpage'];
$references = $_POST['references'];
$promember = serialize($_POST['promember']);
$promember1 = unserialize($promember);
$commit = serialize($_POST['commit']);
$commit1 = unserialize($commit);
$Awards1 = $_POST['Awards1'];
$agreement = $_POST['agreement'];

$sql2 = "INSERT INTO `faculty_form` (`Title`, `FirstName`, `LastName`, `Gender`, `Nation`, `PResidence`, `SResidence`, `Contact`, `E-mail`, `PinCode`, `Currently`, `Affiliation`, `engagement`, `WExperience`, `T_Ind_Exp`, `CIemD`, `PCLCC`, `Research`, `KIP`, `Publications`, `CWP`, `TDSeExp`, `Ind_Pa`, `Expertise`, `Objective`, `Designation`, `Qual_YA_Orga`, `Experience`, `references`, `Prog_lang`, `skills_exp`, `PWebpage`, `ProMem`, `MemCom`, `AARecog`) VALUES ('$title', '$FirstName', '$LastName', '$gender', '$nation', '$Place', '$State', '$contact', '$Email', '$Pincode', '$Currently', '$Affilitaion', '$engagement', '$WorkExperience','$teach', '$cirriculam', '$professional','$research', '$keyn', '$publications', '$consul', '$training', '$Partnerships', '$expert', '$objective', '$Designation', '$Qualification', '$Experience', '$references', '$ProgrammingLanguage', '$Skills', '$PWebpage', '$promember', '$commit', '$Awards1')";
mysqli_query($connectdb12, $sql2);
echo "<script type='text/JavaScript'>
     // location.replace('./faculty_form.php');
    alert('Form Submitted Sucessfully');
    </script>";
// $sql1 = "SELECT * FROM faculty_form WHERE user_id in (1,12,11)";
// $result1 = mysqli_query($connectdb1, $sql1);
// while ($row = mysqli_fetch_assoc($result1)) {
// $challenges = unserialize($row['the major challenges They are facing']);
// foreach ($challenges as $challenge) {
// echo $challenge . ",";
// }
// echo "<br>";
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./styles/faculty_form_submit.css">
</head>

<body>
    <?php
    echo "
    <div onclick='window.print();' class='print'>click to print</div>
    <div class='page'>
        <div class='Registration'>
            <h1>Details You Registered</h1>
        </div>
        <div class='page1'>
            <h2>A. PERSONAL DATA</h2>
            <div class='details'>
                <h3>Title : $title</h3>
                <h3>First Name : $FirstName</h3>
                <h3>Last Name : $LastName</h3>
                <h3>Gender : $gender</h3>
                <h3>Nationality: $nation</h3>
                <h3>Place of Residence : $Place</h3>
                <h3>State of Residence : $State</h3>
                <h3>Contact No. : $contact</h3>
                <h3>E-mail address : $Email</h3>
                <h3>Pin Code : $Pincode</h3>
                <h3>Currently :";
    foreach ($Currently1 as $Current) {
        echo $Current . ", ";
    }
    echo "</h3>
                <h3>
                    Affiliation [Present if in service/ Past if Superannuated] : $Affilitaion
                </h3>
                <h3>Nature of engagement : $engagement</h3>
            </div>
        </div>
        <div class='page1'>
            <h2>B. PROFESSIONAL DETAILS</h2>
            <div class='details'>
                <h3>Work Experience[in years] : $WorkExperience</h3>
                <h3>Teaching/Industry Experience : $teach</h3>
                <h3>
                    Curriculum/Instructional/e-learning material Development [innumbers]
                    : $cirriculam
                </h3>
                <h3>
                    Professional/Certifications/Licenses/Courses Completed : $professional
                </h3>
                <h3>Research Area : $research</h3>
                <h3>No. of Keynote/Invited talks/Presentations : $keyn</h3>
                <h3>No. of Publications[SCI/Scopus/UGC Care] : $publications</h3>
                <h3>Consulting Works/Projects carried out : $consul</h3>
                <h3>
                    Training and Developing Students/ employees Experience [in years] : $training
                </h3>
                <h3>Industry Partnerships : $Partnerships</h3>
            </div>
        </div>
        <div class='page1'>
            <h2>C. EXPERTISE DETAILS/MOTIVATION FOR APPLYING AS EXPERT</h2>
            <div class='details1'>
                <h3>Area Of Expertise :";
    foreach ($expert1 as $exp) {
        echo $exp . ", ";
    }
    echo "</h3>
            </div>
        </div>
        <div class='page1'>
            <h2>D. CV DETAILS AS MENTIONED BELOW:</h2>
            <div class='details'>
                <h3>Your Objective : $objective</h3>
                <h3>Designation : $Designation</h3>
                <h3>
                    Educational Qualification, Year of Award of Degree, Name of
                    Organisation : $Qualification
                </h3>
                <h3>Experience : $Experience</h3>
                <h3>Professional references (3-5) : $references</h3>
                <h3>Skilled in [Programming Languages] : $ProgrammingLanguage</h3>
                <h3>Showcase Your skills & experience : $Skills</h3>
                <h3>Personal Webpage(if Any) : $PWebpage</h3>
                <h3>Professional Memberships : 
                "; ?> <?php
                        foreach ($promember1 as $prom) {
                            echo $prom . ", ";
                        }
                        echo "</h3>
                <h3>Member of Committees : ";
                        foreach ($commit1 as $com) {
                            echo $com . ", ";
                        }
                        echo "
                </h3>
                <h3>Accomplishments/ Awards/ Recognition(3-5) : $Awards1</h3>
            </div>
        </div>
    </div>
    "; ?>
</body>

</html>