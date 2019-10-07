<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>EXAMIN | KNOWLEDGE ASSESSMENT</title>
<!-- <link  rel="stylesheet" href="css/bootstrap.min.css"/>
 <link  rel="stylesheet" href="css/bootstrap-theme.min.css"/>  -->  
 <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css"> 
 <link rel="stylesheet" href="css/main.css">
 <link  rel="stylesheet" href="css/font.css">
       
  <script src="node_modules/jquery/dist/jquery.slim.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
 <script src="js/jquery.js" type="text/javascript"></script>

  <script src="js/bootstrap.min.js"  type="text/javascript"></script>
 	<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
<?php if($_GET['w'])
{
	echo "<script>
	alert("'.$_GET['w'].'");
	</script>";
}
?>
<script>
function validateForm() {var y = document.forms["form"]["name"].value;	var letters = /^[A-Za-z]+$/;if (y == null || y == "") {alert("Name must be filled out.");return false;}var z =document.forms["form"]["college"].value;if (z == null || z == "") {alert("college must be filled out.");return false;}var x = document.forms["form"]["email"].value;var atpos = x.indexOf("@");
var dotpos = x.lastIndexOf(".");if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {alert("Not a valid e-mail address.");return false;}var a = document.forms["form"]["password"].value;if(a == null || a == ""){alert("Password must be filled out");return false;}if(a.length<5 || a.length>25){alert("Passwords must be 5 to 25 characters long.");return false;}
var b = document.forms["form"]["cpassword"].value;if (a!=b){alert("Passwords must match.");return false;}}
</script>


</head>

<body>
<!-- <div class="header">
<div class="row">
<div class="col-lg-6">
<span class="logo">Test Your Skill</span></div>
<div class="col-md-2 col-md-offset-4">
<a href="#" class="pull-right btn sub1" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>&nbsp;<span class="title1"><b>Signin</b></span></a></div>
 -->
<nav class="navbar navbar-dark navbar-expand-sm fixed-top">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
            <span class="navbar-toggler-icon"></span>
        </button> 
        <a class="navbar-brand mr-5" href="#">Knowledge Assessment</a>
        <div class="collapse navbar-collapse" id="Navbar">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active"><a class="nav-link" href="#">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="https://www.linkedin.com/in/shubham-bhattacharyya-0b1380117/">About Us</a></li>
                <li class="nav-item"><a class="nav-link" href="feedback.php" target="_blank">Send Feedback</a></li>
                <li class="nav-item"><a href="#" class = "nav-link" data-toggle="modal" data-target="#developers"></i>Developers</a></li>
            </ul>    
            <span class="navbar-text" id="LoginButton">
                <a type="button" class="btn btn-dark" data-toggle="modal" data-target="#myModal">
                Login</a>
            </span>
            <span class="navbar-text ml-2" id="SignUpButton">
                <a type="button" class="btn btn-dark" href="#signuppos">
                Sign Up</a>
            </span>
            <span class="navbar-text ml-2" id="AdminLoginButton">
                <a type="button" class="btn btn-dark" data-toggle="modal" data-target="#login">
                Admin Login</a>
            </span>
        </div>        
    </div>
</nav>  



<!--sign in modal start-->
<div class="modal fade" id="myModal">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title title1"><span style="color:white;font-family:'typo'">Log In</span></h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color:white"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" action="login.php?q=index.php" method="POST">
			<fieldset>


<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-3 control-label" for="email"></label>  
			  <div class="col-md-6">
			  <input id="email" name="email" placeholder="Enter your email-id" class="form-control input-md" type="email">
			    
			  </div>
			</div>


			<!-- Password input-->
			<div class="form-group">
			  <label class="col-md-3 control-label" for="password"></label>
			  <div class="col-md-6">
			    <input id="password" name="password" placeholder="Enter your Password" class="form-control input-md" type="password">
			    
			  </div>
			</div>


	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        <button type="submit" class="btn btn-primary">Log in</button>
			</fieldset>
		</form>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!--sign in modal closed-->

</div><!--header row closed-->
</div>


	<div class="row row-content">
            <div class="col">
                <div id="mycarousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">

                        <div class="carousel-item active">
                            <img class="img-fluid"
                                src="image/pen.jpeg" alt="Uthappizza">
                            <div class="carousel-caption d-none d-md-block">
                                <h2>THE PLACE TO TEST YOUR KNOWLEDGE</h2>
                            </div>
                        </div>
                        <div class="carousel-item">
                        	<img class="d-block img-fluid"
                                src="image/book.jpg" alt="buffet">
                            <div class="carousel-caption d-none d-md-block">
                                <h2 class="mt-0">ONE PLACE TO TEST YOUR SKILLS </h2>
                            </div>
                        </div>
                        <div class="carousel-item">
                        	<img class="d-block img-fluid"
                                src="image/laptop.jpg" alt="buffet">
                        	<div class="carousel-caption d-none d-md-block">
                                <h2 class="mt-0">LEARN AND GROW</h2>
		                    </div>
                        </div>
                        <ol class="carousel-indicators">
	                        <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
	                        <li data-target="#mycarousel" data-slide-to="1"></li>
	                        <li data-target="#mycarousel" data-slide-to="2"></li>
	                    </ol>

	                    <a class="carousel-control-prev" href="#mycarousel" role="button" data-slide="prev">
	                        <span class="carousel-control-prev-icon"></span>
	                    </a>
	                    <a class="carousel-control-next" href="#mycarousel" role="button" data-slide="next">
	                        <span class="carousel-control-next-icon"></span>
	                    </a>
                    </div>
                </div>
            </div>
    </div>

<div class="bg1" id="signuppos">
	<div class="row">

<div class="col-md-7"></div>
<div class="col-md-4 panel">
<!-- sign in form begins -->  
  <form class="form-horizontal" name="form" action="sign.php?q=account.php" onSubmit="return validateForm()" method="POST">
<fieldset>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="name"></label>  
  <div class="col-md-12">
  <input id="name" name="name" placeholder="Enter your name" class="form-control input-md" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="gender"></label>
  <div class="col-md-12">
    <select id="gender" name="gender" placeholder="Enter your gender" class="form-control input-md" >
   <option value="Male">Select Gender</option>
  <option value="M">Male</option>
  <option value="F">Female</option> </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="name"></label>  
  <div class="col-md-12">
  <input id="college" name="college" placeholder="Enter your college name" class="form-control input-md" type="text">
    
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label title1" for="email"></label>
  <div class="col-md-12">
    <input id="email" name="email" placeholder="Enter your email-id" class="form-control input-md" type="email">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="mob"></label>  
  <div class="col-md-12">
  <input id="mob" name="mob" placeholder="Enter your mobile number" class="form-control input-md" type="number">
    
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="password"></label>
  <div class="col-md-12">
    <input id="password" name="password" placeholder="Enter your password" class="form-control input-md" type="password">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-12control-label" for="cpassword"></label>
  <div class="col-md-12">
    <input id="cpassword" name="cpassword" placeholder="Conform Password" class="form-control input-md" type="password">
    
  </div>
</div>
<?php if(@$_GET['q7'])
{ echo'<p style="color:red;font-size:15px;">'.@$_GET['q7'];}?>
<!-- Button -->
<div class="form-group">
  <label class="col-md-12 control-label" for=""></label>
  <div class="col-md-12" style = "text-align: center;"> 
    <button  type="submit" class="btn btn-success" value="sign up"/>SIGN UP </div>
  </div>
</div>

</fieldset>
</form>
</div><!--col-md-6 end-->
</div></div>
</div>

<!-- </div>container end -->

<!--Footer start-->
<!-- <div class="row footer">
<div class="col-md-3 box">
<a href="http://www.netcamp.in" target="_blank">About us</a>
</div>
<div class="col-md-3 box">
<a href="#" data-toggle="modal" data-target="#login">Admin Login</a></div>
<div class="col-md-3 box">
<a href="#" data-toggle="modal" data-target="#developers">Developers</a>
</div>
<div class="col-md-3 box">
<a href="feedback.php" target="_blank">Feedback</a></div></div>
 --><!-- Modal For Developers-->
<!-- Modal For Developers-->
<div class="modal fade title1" id="developers">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" >
                <h4 class="modal-title" style="font-family:'typo' ; color:white"><span style="color:white">Developers</span></h4>
        <button type="button" class="close" style="color:white"data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only" style="color:white">Close</span></button>

      </div>
    
      <div class="modal-body">
        <p>
    <div class="row">
    <div class="col-md-4">
     <img src="image/1.jpeg" width=100 height=100 alt="Shubham Bhattacharyya" class="img-rounded">
     </div>
     <div class="col-md-5">
    <a href="https://www.facebook.com/shubham.bhattacharyya.56" style="color:#202020; font-family:'typo' ; font-size:18px" title="Find on Facebook">Shubham Bhattacharyya</a>
    <h4 style="color:#202020; font-family:'typo' ;font-size:16px" class="title1">+91 75070 08911</h4>
    <h4 style="font-family:'typo' ">tutushubham@gmail.com</h4>
    <h4 style="font-family:'typo' ">Atal Bihari Vajpayee Indian Institute of Information Technology and Management, Gwalior</h4></div></div>
    </p>
    <p>
    <div class="row">
    <div class="col-md-4">
     <img src="image/2.png" width=100 height=100 alt="Guna Shekar Proddaturi" class="img-rounded">
     </div>
     <div class="col-md-5">
    <a href="https://www.facebook.com/RVP20.CR7" style="color:#202020; font-family:'typo' ; font-size:18px" title="Find on Facebook">Guna Shekar Proddaturi</a>
    <h4 style="color:#202020; font-family:'typo' ;font-size:16px" class="title1">+91 79955 24941</h4>
    <h4 style="font-family:'typo' ">gunashekherproddatoori@gmail.com</h4>
    <h4 style="font-family:'typo' ">Atal Bihari Vajpayee Indian Institute of Information Technology and Management, Gwalior</h4></div></div>
    </p>
      </div>
    
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!--Modal for admin login-->
	 <div class="modal fade" id="login">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
      	<h4 class="modal-title title1"><span style="color:white;font-family:'typo' ">LOGIN</span></h4>
        <button type="button" class="close" style = "color: white" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
      </div>
      <div class="modal-body title1">
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6">
<form role="form" method="post" action="admin.php?q=index.php">
<div class="form-group">
<input type="text" name="uname" maxlength="20"  placeholder="Admin user id" class="form-control"/> 
</div>
<div class="form-group">
<input type="password" name="password" maxlength="15" placeholder="Password" class="form-control"/>
</div>
<div class="form-group" align="center">
<input type="submit" name="login" value="Login" class="btn btn-primary" />
</div>
</form>
</div><div class="col-md-3"></div></div>
      </div>
      <!--<div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>-->
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!--footer end-->

<script>
	$(document).ready(function(){
    	$("#mycarousel").carousel( { interval: 2000 } );
	})
</script>

</body>
</html>
