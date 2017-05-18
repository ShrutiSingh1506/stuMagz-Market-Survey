<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname="mysql";


$nameErr = $collegeErr = $ratingErr = $q1Err = $q2Err =$q3Err =$q4Err = $q5Err = $q6Err = $expErr = " ";

	if (empty($_POST["name"]))
	{
		$nameErr = "Name is required";
	} 
     else 
	{
		$Name = $_POST["name"];
     //check if name only contains letters and whitespace
		if (!preg_match("/^[a-zA-Z ]*$/",$Name)) 
		{
			$nameErr = "Only letters and white space allowed in Name"; 
		}
	}
	

		if (empty($_POST["collegename"])) {
			$collegeErr = "College name is required ";
		}
		 else {
			$Collegename = $_POST["collegename"];
    // check if name only contains letters and whitespace
			if (!preg_match("/^[a-zA-Z ]*$/",$Collegename)) {
				$collegeErr = "Only letters and white space allowed in College name"; 
			}
		}

		if(empty($_POST["rate"]))
		{
		 $ratingErr="Please select one on the List";	
		}
		else {
			$Rating= $_POST["rate"];
		}

		if(empty($_POST["create"])){
			$q1Err= "Please select one on the List";
		}
		else {
			$Q1= $_POST["create"];  
		}


		if(empty($_POST["myboard"])){
			$q2Err= "Please select one on the List";
		}
		else {
			$Q2= $_POST["myboard"];

		}


		if(empty($_POST["follow"])){
			$q3Err= "Please select one on the List";
		}
		else {
			$Q3= $_POST["follow"];

		}


		if(empty($_POST["feed"])) {
			$q4Err= "Please select one on the List";
		}
		else {
			$Q4= $_POST["feed"];

		}


		if(empty($_POST["connect"])){
			$q5Err= "Please select one on the List";
		}
		else {
			$Q5= $_POST["connect"];

		}


		if(empty($_POST["board"])){
			$q6Err= "Please select one on the List";
		}
		else {
			$Q6= $_POST["board"];

		}



		if(empty($_POST["experience"]))
		{
			$expErr= "Please select one on the List";
		}
		else {
			$Experience= $_POST["experience"];

		}


/*$Name= $_POST["name"];
$Collegename= $_POST["collegename"];
$Rating= $_POST["rate"];
$Q1= $_POST["create"];
$Q2= $_POST["myboard"];
$Q3= $_POST["follow"];
$Q4= $_POST["feed"];
$Q5= $_POST["connect"];
$Q6= $_POST["board"];
$Experience= $_POST["experience"];*/
$Suggestions= $_POST["suggestions"];


if($nameErr==" "&& $collegeErr==" "&& $ratingErr==" " && $q1Err==" " && $q2Err==" "&& $q3Err==" "&& $q4Err==" " && $q5Err==" "&& $q6Err==" "&& $expErr==" ") 

{

	$conn = new mysqli($servername, $username,$password,$dbname);

	$stmt = $conn->prepare("INSERT INTO survey(Name,College_Name,Rating,Q1,Q2,Q3,Q4,Q5,Q6,Experience,Suggestions) VALUES (?,?,?,?,?,?,?,?,?,?,?)");
	$stmt->bind_param("sssssssssss", $Name,$Collegename,$Rating,$Q1,$Q2,$Q3,$Q4,$Q5,$Q6,$Experience,$Suggestions);
	$stmt->execute();
	mysqli_close($conn);
?>
<html>
<head>
	<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>success</title>
<link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="css/materialize.min.css" >
<link rel="stylesheet" href="css/styles.css" >

<script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>
</head>
<body style="background: #18bc9c;">
	<div class="container-fluid" style="height:100px;background:#18bc9c;">
		 <a href="https://www.stumagz.com" style="cursor:pointer">
			 <img class="logo pull-left"src="/img/stumagz.svg">
		  </a>
		 <a href="https://www.stumagz.com" class="goto pull-right">Go to stumagz.com</a>
	</div>

	<div class="container">
		<div class="col-xs-12 col-lg-12">
			<div class="flex_content">
				<div class="child">
					<img class="check"src="/img/check_white.svg" style="">
					<h2>Thank You</h2>
			</div>
		</div>
		</div>
	</div>

</body>
<div class="container-fluid hidden-lg" style="background:#18bc9c">
		<div class="row">
				<div class="col-lg-12 col-xs-12">
					<div class="text-center" style="color:#fff;text-align:center;vertical-align:middle;margin-top:55px;font-size:12px;">© 2015 Right Process Infotech Pvt Ltd. All Rights Reserved</div>
				</div>
		</div>
</div>

</html>
<?php 

} 
else {
	
	session_start();
	$_SESSION['nameError']=$nameErr;
	$_SESSION['collegeError']=$collegeErr;
	$_SESSION['ratingError']=$ratingErr;
	$_SESSION['q1Error']=$q1Err;
	$_SESSION['q2Error']=$q2Err;
	$_SESSION['q3Error']=$q3Err;
	$_SESSION['q4Error']=$q4Err;
	$_SESSION['q5Error']=$q5Err;
	$_SESSION['q6Error']=$q6Err;
	$_SESSION['expError']=$expErr;
	header('Location: index?');
	exit;
echo $nameErr;
echo "<br>";
echo $collegeErr;
echo "<br>";
echo $ratingErr;
echo "<br>";
echo $q1Err;
echo "<br>";
echo $q2Err;
echo "<br>";
echo $q3Err;
echo "<br>";
echo $q4Err;
echo "<br>";
echo $q5Err;
echo "<br>";
echo $q6Err;
echo "<br>";
echo $expErr;
}
?>