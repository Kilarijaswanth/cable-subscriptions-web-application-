<!DOCTYPE html>
<html>
<head>
 <title>table with database</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

table {
  border-collapse: collapse;
  width: 100%;
  opacity: 0.7;
}

th, td {
  text-align: left;
  padding: 8px;
}
table, th, td {
  border: 1px solid black;
}
tr:nth-child(even){background-color: gray}


th {
  background-color: cyan;
  color:red;
 text-align: center;
height: 40px;
}
table {
  border-collapse: collapse;
  width: 100%;
}
table.center {
  margin-left: auto; 
  margin-right: auto;

td {
  text-align: center;
}
</style>
</head>
<body >
<?php

$conn = mysqli_connect('localhost','root','','subscription costs');
$query = "SELECT AIRTEL_DTH_PLAN,AIRTEL_DTH_PLANPRICE,AIRTEL_PLANVALIDITY,AIRTEL_DTH_PLANBENEFITS FROM `airtel dth plans`";
$result = mysqli_query($conn,$query);
echo "<table border='1'>
<tr>
<th>AIRTEL DTH PLANS</th>
<th>AIRTEL DTH PLAN PRICE</th>
<th>AIRTEL DTH PLAN VALIDITY</th>
<th>AIRTEL DTH PLAN BENEFITS</th>
</tr>";
if($result-> num_rows > 0) {
while ($row =  $result-> fetch_assoc()){
 echo "<tr><td>".$row["AIRTEL_DTH_PLAN"]."</td><td>".$row["AIRTEL_DTH_PLANPRICE"]."</td><td>".$row["AIRTEL_PLANVALIDITY"]."</td><td>".$row["AIRTEL_DTH_PLANBENEFITS"]."</td></tr>";
}
}

 echo "</table>";
?>
<a href ="https://www.airtel.in/digital-tv" 
target="_blank">click here to visit Airtel tv!</a>
<br>
<br>
<br>
<br>
<?php

$conn = mysqli_connect('localhost','root','','subscription costs');
$query = "SELECT SUN_DIRECT_DTH_PLANNAME,SUN_DIRECT_DTH_PLANPRICE,SUN_DIRECT_DTH_PLANVALIDITY,SUN_DIRECT_DTH_PLANBENEFITS FROM `sun direct dth plans`";
$result = mysqli_query($conn,$query);
echo "<table border='1'>
<tr>
<th>SUN DIRECT DTH PLANNAME</th>
<th>SUN DIRECT DTH PLANPRICE</th>
<th>SUN DIRECT DTH PLANVALIDITY</th>
<th>SUN DIRECT DTH PLANBENEFITS</th>
</tr>";
if($result-> num_rows > 0) {
while ($row =  $result-> fetch_assoc()){
 echo "<tr><td>".$row["SUN_DIRECT_DTH_PLANNAME"]."</td><td>".$row["SUN_DIRECT_DTH_PLANPRICE"]."</td><td>".$row["SUN_DIRECT_DTH_PLANVALIDITY"]."</td><td>".$row["SUN_DIRECT_DTH_PLANBENEFITS"]."</td></tr>";
}
}

 echo "</table>";
?>

<a href ="https://www.sundirect.in/" 
target="_blank">click here to visit Sun network!</a>
<br>
<br>
<br>
<br>
<?php

$conn = mysqli_connect('localhost','root','','subscription costs');
$query = "SELECT TATASKY_DTH_PLANNAME,TATASKY_DTH_PLANPRICE,TATASKY_DTH_PLANVALIDITY,TATASKY_DTH_PLANBENEFITS FROM `tata sky dth plans`";
$result = mysqli_query($conn,$query);
echo "<table border='1'>
<tr>
<th>TATASKY DTH PLANNAME</th>
<th>TATASKY DTH PLANPRICE</th>
<th>TATASKY DTH PLANVALIDITY</th>
<th>TATASKY DTH PLANBENEFITS</th>
</tr>";
if($result-> num_rows > 0) {
while ($row =  $result-> fetch_assoc()){
 echo "<tr><td>".$row["TATASKY_DTH_PLANNAME"]."</td><td>".$row["TATASKY_DTH_PLANPRICE"]."</td><td>".$row["TATASKY_DTH_PLANVALIDITY"]."</td><td>".$row["TATASKY_DTH_PLANBENEFITS"]."</td></tr>";
}
}

 echo "</table>";
?>
<a href ="https://www.tatasky.com/" 
target="_blank">click here to visit Tatasky!</a>
<br>
<br>
<br>
<br>
<?php

$conn = mysqli_connect('localhost','root','','subscription costs');
$query = "SELECT VIDEOCON_D2H_PLANNAME,VIDEOCON_D2H_PLANPRICE,VIDEOCON_D2H_PLANVALIDITY,VIDEOCON_D2H_PLANBENEFITS FROM `videocon d2h plans`";
$result = mysqli_query($conn,$query);
echo "<table border='1'>
<tr>
<th>VIDEOCON D2H PLANNAME</th>
<th>VIDEOCON D2H PLANPRICE</th>
<th>VIDEOCON D2H PLANVALIDITY</th>
<th>VIDEOCON D2H PLANBENEFITS</th>
</tr>";
if($result-> num_rows > 0) {
while ($row =  $result-> fetch_assoc()){
 echo "<tr><td>".$row["VIDEOCON_D2H_PLANNAME"]."</td><td>".$row["VIDEOCON_D2H_PLANPRICE"]."</td><td>".$row["VIDEOCON_D2H_PLANVALIDITY"]."</td><td>".$row["VIDEOCON_D2H_PLANBENEFITS"]."</td></tr>";
}
}

 echo "</table>";
?>
<a href ="https://www.d2h.com/" 
target="_blank">click here to visit d2h!</a>
<br>
<br>
<br>
<br>
<?php

$conn = mysqli_connect('localhost','root','','subscription costs');
$query = "SELECT ACT_DTH_PLANNAME,ACT_DTH_PLANPRICE,ACT_DTH_PLANVALIDITY,ACT_DTH_PLANBENEFITS FROM `local(act dth plans)`";
$result = mysqli_query($conn,$query);
echo "<table border='1'>
<tr>
<th>ACT DTH PLANNAME</th>
<th>ACT DTH PLANPRICE</th>
<th>ACT DTH PLANVALIDITY</th>
<th>ACT DTH PLANBENEFITS</th>
</tr>";
if($result-> num_rows > 0) {
while ($row =  $result-> fetch_assoc()){
 echo "<tr><td>".$row["ACT_DTH_PLANNAME"]."</td><td>".$row["ACT_DTH_PLANPRICE"]."</td><td>".$row["ACT_DTH_PLANVALIDITY"]."</td><td>".$row["ACT_DTH_PLANBENEFITS"]."</td></tr>";
}
}

 echo "</table>";
?>
<br>

 *This Has To Be Contacted To The Local Cable Operator.
<br>
<br>
</body>
</html>