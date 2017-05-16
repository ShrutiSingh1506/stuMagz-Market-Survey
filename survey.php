<?php
$nameError="";
$collegeError="";
$ratingError="";
$q1Error="";
$q2Error="";
$q3Error="";
$q4Error="";
$q5Error="";
$q6Error="";
$expError="";
/*$q6Error="";
$expError="";*/
//checking 
session_start();
if(!empty($_SESSION['nameError'])){
$nameError=$_SESSION['nameError'];
unset($_SESSION['nameError']);
}
if(!empty($_SESSION['collegeError'])){
$collegeError=$_SESSION['collegeError'];
unset($_SESSION['collegeError']);
}
if(!empty($_SESSION['ratingError'])){
$ratingError=$_SESSION['ratingError'];
unset($_SESSION['ratingError']);
}
if(!empty($_SESSION['q1Error'])){
$q1Error=$_SESSION['q1Error'];
unset($_SESSION['q1Error']);
}
if(!empty($_SESSION['q2Error'])){
$q2Error=$_SESSION['q2Error'];
unset($_SESSION['q2Error']);
}
if(!empty($_SESSION['q3Error'])){
$q3Error=$_SESSION['q3Error'];
unset($_SESSION['q3Error']);
}
if(!empty($_SESSION['q4Error'])){
$q4Error=$_SESSION['q4Error'];
unset($_SESSION['q4Error']);
}
if(!empty($_SESSION['q5Error'])){
$q5Error=$_SESSION['q5Error'];
unset($_SESSION['q5Error']);
}
if(!empty($_SESSION['q6Error'])){
$q6Error=$_SESSION['q6Error'];
unset($_SESSION['q6Error']);
}
if(!empty($_SESSION['expError'])){
$expError=$_SESSION['expError'];
unset($_SESSION['expError']);
}
?>
<!DOCTYPE html>
<html>
<!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>

<!--
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="css/styles.css">
<link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="css/materialize.min.css" >//-->
<head>
	<title>stuMagz Market Survey form</title>
	<script type="text/javascript">	
	</script>
	<style type="text/css">
	.center {
		text-align:left;
    background-color: white;
    padding-left:50px;
    padding-right:50px;
    padding-top: 50px;

}
.error
{
	color: red;
	font-size: 18px;
	
}
.butbg
{
	background-color:white;
	padding-left:50px;
	padding-right:50px;
	padding-bottom:50px;
}
	.al{
		 padding-left:100px;
	}
	.lab{
		color:black;
    }


</style>
</head>
<body  bgcolor="#18bc9c">

<header id="page-top">
				<!--<div class="container-fluid" style="height:100px;background:#18bc9c;">
					<a href="https://www.stumagz.com" style="cursor:pointer"> <img class="logo pull-left" src="img/stumagz.svg" width="100px" height="100px"> </a>
					 <a class="goto pull-right" href="https://www.stumagz.com" >Go to stumagz.com</a>
				</div>//-->
				<div class="container-fluid" style="height:100px;background:#18bc9c; padding-left:50px; padding-top:5px;"  >
					 <a href="https://www.stumagz.com" style="cursor:pointer"> <img class="logo pull-left"src="/img/stumagz.svg" width="200px" height="200px"> </a>
					 </div>
			
		</header>

		

<!--<div class="container ">
				<div class="col-lg-2 col-md-4 xs-hidden" ></div>
				<div class="col-lg-10 col-md-12 col-xs-12 " style="padding:0px;">
			<div class="col-md-12 col-lg-10 col-xs-12">










	
<!--<img src="stulogo.jpg" width="100" height="100">//-->
<br><br>
<div> <font color="white" size="20" ><center>  stuMagz would like to hear from you and improve our product</center></font></div>
<br>

<div class="container ">
				<!--<div class="col-lg-2 col-md-4 xs-hidden" ></div>//-->
				<div class="col-lg-10 col-md-12 col-xs-12 " style="padding:0px;">
			<div class="col-md-12 col-lg-10 col-xs-12">
<form method="post" name="myForm" action="surveysuccess">
<div class="center">
<font size="5" color="18bc9c">

Name <br><input type="text" name="name"></input>
<span class="error"><?php echo $nameError; ?></span>
<br><br>

College Name <br><input type="text" name="collegename"><span class="error"><?php echo $collegeError; ?></span></input><br><br>
How much would you like to rate the friendliness of the website?</label><br>
 <input class="with-gap" type="radio" name="rate" value="1" id="test1"/><label class="lab" for="test1">1</label>
 <input class="with-gap" type="radio" name="rate" value="2" id="test2"/><label class="lab" for="test2">2</label> 
 <input class="with-gap" type="radio" name="rate" value="3" id="test3"/><label class="lab" for="test3">3</label> 
 <input class="with-gap" type="radio" name="rate" value="4" id="test4"/><label  class="lab" for="test4">4</label>
 <input class="with-gap" type="radio" name="rate" value="5" id="test5"/><label class="lab" for="test5">5</label> <br>
 <span class="error"><?php echo $ratingError; ?></span>
 <br><br>
 Did you know how to create your own story,event or discussion?<br>
 <input class="with-gap" type="radio" name="create" value="yes" id="test6"/><label class="lab" for="test6">Yes</label><br>
 <input class="with-gap" type="radio" name="create" value="no" id="test7"/><label class="lab" for="test7">No</label><br>
 <span class="error"><?php echo $q1Error; ?></span>
 <br><br>
 Where can you find the articles posted only by you?
<br>
 <input class="with-gap" type="radio" name="myboard" value="My feed" id="test8"/><label class="lab"  for="test8">My Feed</label><br>
 <input class="with-gap" type="radio" name="myboard" value="My Board" id="test9"/><label class="lab" for="test9">My Board</label><br>
 <input class="with-gap" type="radio" name="myboard" value="My College" id="test10"/><label class="lab" for="test10">My College</label><br>
 <input class="with-gap" type="radio" name="myboard" value="Don't know" id="test11"/><label class="lab" for="test11">I don't know</label><br>
 <span class="error"><?php echo $q2Error; ?></span>
 <br><br>
 Did you know you can follow other colleges also?<br>
 <input class="with-gap" type="radio" name="follow" value="yes" id="test12"/><label class="lab"  for="test12">Yes</label><br>
 <input class="with-gap" type="radio" name="follow" value="no" id="test13"/><label class="lab" for="test13">No</label><br>
 <span class="error"><?php echo $q3Error; ?></span>
 <br><br>
 If Yes, where can you find the articles related to other college magazine?<br>
<input  class="with-gap" type="radio" name="feed" value="My Board" id="test14"/><label class="lab" for="test14">My Board</label><br>
 <input class="with-gap" type="radio" name="feed" value="My College" id="test15"/><label class="lab" for="test15">My College</label><br>
 <input class="with-gap" type="radio" name="feed" value="My Feed" id="test16"/><label class="lab" for="test16">My Feed</label><br>
 <input class="with-gap" type="radio" name="feed" value="Don't know" id="test17"/><label class="lab" for="test17">I don't know</label><br>
 <span class="error"><?php echo $q4Error; ?></span>
 <br><br>
 Did you know you could connect with other users?<br>
<input class="with-gap" type="radio" name="connect" value="yes" id="test18"/><label class="lab" for="test18" >Yes</label><br>
 <input class="with-gap" type="radio" name="connect" value="no" id="test19"/><label class="lab" for="test19" >No</label><br>
 <span class="error"><?php echo $q5Error; ?></span>
 <br><br>
 Could you differentiate between the Board and rest of the tabs like stories, events, projects?<br>
<input class="with-gap" type="radio" name="board" value="yes" id="test20"/><label class="lab" for="test20">Yes</label><br>
 <input class="with-gap" type="radio" name="board" value="no" id="test21"/><label class="lab" for="test21">No </label><br>
 <span class="error"><?php echo $q6Error; ?></span>
 <br><br>

How was your overall experience?<br>
<input class="with-gap " type="radio" name="experience" value="Awesome"  id="test22" /><label class="lab" for="test22">It's awesome! I'll tell my friends about it</label> 
<br>
<input class="with-gap" type="radio" name="experience" value="Nice and friendly" id="test23"  /><label class="lab" for="test23">Nice and friendly</label><br>
<input class="with-gap" type="radio" name="experience" value="confusing" id="test24"  /><label class="lab" for="test24">It's confusing.Needs improvization</label><br>
 <span class="error"><?php echo $expError; ?></span>
<br><br>
Suggestions
<!--<font size="5px"><input class="with-gap" type="textarea" size="10"  name="suggestions"  id="test25"  /></font>//-->
<textarea cols="50" rows="8" name="suggestions"></textarea>
<br><br><br>
</div>
<div class="butbg">
  <center>  
<button class="btn waves-effect waves-light"  type="submit" value="Submit" name="action">Submit
  </button>
  </center>
  </div>
        
</font>

</form>
</div>
</div>
</div>
<div class="container-fluid">
<font color="white" size="10" ><center>Thank you<br>baieyfgyw8oYGF87OWGFLYQGWFF87wieufg3wfe6FYUEYGY</center></font>
</div>
</body>
</html>
