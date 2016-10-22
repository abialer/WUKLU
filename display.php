<!DOCTYPE html>
<head>
<meta charset="utf-8"/>
<title>My Web Page</title>
<style type="text/css">
body{
	width: 760px; /* how wide to make your web page */
	background-color: teal; /* what color to make the background */
	margin: 0 auto;
	padding: 0;
	font:12px/16px Verdana, sans-serif; /* default font */
}
div#main{
	background-color: #FFF;
	margin: 0;
	padding: 10px;
}
</style>
</head>
<body>
</body>
</html>

<?php
require "database.php";
$stmt = $mysqli->prepare("select firstname, lastname, number, gender, veteran, mental, dob, ethnicity, race from MainInfo order by id");
if(!$stmt){
printf("Query Prep Failed: %s\n", $mysqli->error);
exit;
}

$stmt->execute();

$stmt->bind_result($first, $last, $number, $gender, $veteran, $mental, $dob, $ethnicity, $race);
echo "<div id='main'>";
echo "<table>";
echo "<tr> <th>First Name</th><th>Last Name</th><th>Phone Number</th><th>Gender</th><th>Veteran Status</th><th>Needs Mental Health Care?</th><th>Date of Birth</th><th>Ethnicity</th><th>Race</th> </tr>";
while($stmt->fetch()){
    echo "<tr>";
    echo "<td>".$first."</td>";
    echo "<td>".$last."</td>";
    echo "<td>".$number."</td>";
    echo "<td>".$gender."</td>";
    echo "<td>".$veteran."</td>";
    echo "<td>".$mental."</td>";
    echo "<td>".$dob."</td>";
    echo "<td>".$ethnicity."</td>";
    echo "<td>".$race."</td>";
    echo "</tr>";
}
echo "</table>";
echo "</div>";
$stmt->close();
?>
