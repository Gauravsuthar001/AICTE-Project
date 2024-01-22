<?php
$server1 = "localhost";
$user = "root";
$pass1 = "";
$database1 = "new1";

$connectdb1 = mysqli_connect("$server1", "$user", "$pass1", "$database1");

$Name = $_POST['Name'];
$Address = $_POST["Address"];
$Contact = $_POST["Contact"];
$Phone = $_POST["Phone"];
$Email = $_POST["Email"];
$institution = $_POST["institution"];
$students = $_POST["students"];
$areaoffocus = $_POST["areaoffocus"];
$challenge = serialize($_POST["challenge"]);
$help1 = serialize($_POST['help1']);
$budget = $_POST["budget"];
$timeline = $_POST["timeline"];
$hear = $_POST["hear"];
$mission = $_POST["mission"];
$educational = $_POST["educational"];
$academic = $_POST["academic"];
$admission = $_POST["admission"];
$percentage = $_POST["percentage"];
$retention = $_POST["retention"];
$graduation = $_POST["graduation"];
$ratio = $_POST["ratio"];
$classsize = $_POST["classsize"];
$degrees = $_POST["degrees"];
$salary = $_POST["salary"];
$adjunct = $_POST["adjunct"];
$hybrid = $_POST["hybrid"];
$support = $_POST["support"];
$learn = $_POST["learn"];
$freedom = $_POST["freedom"];
$equity = $_POST["equity"];
$disciplinary = $_POST["disciplinary"];
$integrity = $_POST["integrity"];
$privacy = $_POST["privacy"];



$sql = "INSERT INTO `univ_form` (`Name`, `Address`, `Contact`, `Phone`, `Email`, `t_ins`, `NStudents`, `Afocus`, `mchafac`, `sawtlhi`, `cbiqedu`, `extime`, `haEC`, `desinsmisval`, `meffinseduprog.`, `inscaoff`, `insadreq`, `perstuuregroups`, `insretenrate`, `insgradrate`, `insstufacrat`, `avgclssze`, `perfachterdeg`, `avgsalfac`, `pcoutadjfac`, `percouroh`, `rcrprosupfacustaff`, `rescurprosupstu`, `inspolregacafree`, `inspregardei`, `insprstucondis`, `insprai`, `insprstupriconf`) VALUES ('$Name', '$Address', '$Contact', '$Phone', '$Email', '$institution', '$students', '$areaoffocus', '$challenge', '$help1', '$budget', '$timeline', '$hear', '$mission', '$educational', '$academic', '$admission', '$percentage', '$retention', '$graduation', '$ratio', '$classsize', '$degrees', '$salary', '$adjunct', '$hybrid', '$support', '$learn', '$freedom', '$equity', '$disciplinary', '$integrity', '$privacy')";
$result = mysqli_query($connectdb1, $sql);

echo "<script type='text/JavaScript'>
    location.replace('./univ_form.php');
    alert('Form Submitted Sucessfully');
    </script>";

// $sql1 = "SELECT * FROM univ_form WHERE user_id in (1,12,11)";
// $result1 = mysqli_query($connectdb1, $sql1);
// while ($row = mysqli_fetch_assoc($result1)) {
//     $challenges = unserialize($row['the major challenges They are facing']);
//     foreach ($challenges as $challenge) {
//         echo $challenge . ",";
//     }
//     echo "<br>";
// }