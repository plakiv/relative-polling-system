<?php

$username=$_POST['username'];
$country=$_POST['country'];
$phone=$_POST['phone'];
$designation=$_POST['designation'];


if (!empty($username) || !empty($country) || !empty($phone) ||   !empty($designation) )
{

$host="localhost";
$dbUsername ="root";
$dbPassword ="";
$dbname="google";

$conn = new mysqli($host , $dbUsername , $dbPassword , $dbname);

if(mysqli_connect_error())
{

die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());

}else
{

$SELECT ="SELECT username From apple where username = ? Limit 1";
$SELECT ="SELECT country From apple where country = ? Limit 1";
$SELECT ="SELECT phone From apple where phone = ? Limit 1";
$SELECT ="SELECT designation From apple where designation = ? Limit 1";

$INSERT ="INSERT Into apple(username,country,phone,designation) values(?,?,?,?)";

$stmt =$conn->prepare($SELECT);
$stmt->bind_param("s",$username);
$stmt->bind_param("s",$country);
$stmt->bind_param("i",$phone);
$stmt->bind_param("s",$designation);
$stmt->execute();
$stmt->bind_result($usernamename);
$stmt->bind_result($country);
$stmt->bind_result($phone);
$stmt->bind_result($designation);
$stmt->store_result();
$rnum =$stmt->num_rows;

if($rnum==0)
{
	$stmt->close();
	$stmt=$conn->prepare($INSERT);
	$stmt->bind_param("ssis",$username,$country,$phone,$designation);
	$stmt->execute();
	include '3.html';
	//echo "Thanks We Will Contact You Shortly";
}else
{

	echo "No Account Found";
}
$stmt->close();
$conn->close();

}

}else
{

echo "All Fields are Required";
die();

}

?>
