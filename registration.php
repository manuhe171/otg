<!DOCTYPE html>
<html>
<?php
include("connection.php");
if(isset($_POST['s'])){

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $u_name=$_POST['name'];
        $u_id=$_POST['email'];
        $u_pass=$_POST['password'];
        $sub=$_POST['subcity'];
        $woreda=$_POST['adress'];
        $id_no=$_POST['id_number'];
        $gen=$_POST['gender'];
        $mob=$_POST['mobile_number'];
       // $password=md5($u_pass);
       $reg="insert into user values('$u_name','$u_id','$u_pass','$sub','$woreda','$id_no','$gen','$mob')";
        mysqli_select_db($con,"on_the_go incident reporter");
        $res=mysqli_query($con,$reg);
        if(!$res)
        {
        $message1 = "User Already Exist";
        echo "<script type='text/javascript'>alert('$message1');</script>";
    }
            else
    {
        $message = "User Registered Successfully";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }
    }
}
?>
  
<script>
     function f1()
        {
            var sta=document.getElementById("name1").value;
            var sta1=document.getElementById("email1").value;
            var sta2=document.getElementById("pass").value;
            var sta3=document.getElementById("addr").value;
            var sta4=document.getElementById("id").value;
            var sta5=document.getElementById("mobno").value;
	   
  var x=sta.trim();
  var x1=sta1.indexOf(' ');
  var x2=sta2.indexOf(' ');
  //var x3=sta3.trim();
  var x3=sta3.indexOf(' ');
  var x4=sta4.indexOf(' ');
	var x5=sta5.indexOf(' ');
	if(sta!="" && x==""){
		document.getElementById("name1").value="";
		document.getElementById("name1").focus();
		  alert("Space Not Allowed");
        }
        
         else if(sta1!="" && x1>=0){
    document.getElementById("email1").value="";
    document.getElementById("email1").focus();
      alert("Space Not Allowed");
        }
        else if(sta2!="" && x2>=0){
    document.getElementById("pass").value="";
    document.getElementById("pass").focus();
      alert("Space Not Allowed");
        }
        else if(sta3!="" && x3==""){
    document.getElementById("addr").value="";
    document.getElementById("addr").focus();
      alert("Space Not Allowed");
        }
        else if(sta4!="" && x4>=0){
    document.getElementById("id").value="";
    document.getElementById("id").focus();
      alert("Space Not Allowed");
        }
        else if(sta5!="" && x5>=0){
    document.getElementById("mobno").value="";
    document.getElementById("mobno").focus();
      alert("Space Not Allowed");
        }
}
</script>    
    
<head>
<title>User Registration</title>

<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
<link href="complainer_page.css" rel="stylesheet" type="text/css" media="all" />

</head>
<body style="background-size: cover;
    background-image: url(pictures/insertpart.jpg);
    background-position: center;">

<nav class="navbar navbar-default navbar-fixed-top" style="background-color:#3b3b3b;">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="home.php"><b>On_The_Go Incident Reporter</b></a>
    </div>
    <div id="navbar" class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="registration.php">Registration</a></li>
       </ul>
    </div>
  </div>
</nav>
	
<div class="video" style="margin-top: 5%"> 
	<div class="center-container">
		 <div class="bg-agile">
			<br><br>
			<div class="login-form">	
				<form action="#" method="post">
					<p style="color:#dfdfdf">Full Name</p><input type="text"  name="name" autocomplete="off"  required="" id="name1" onfocusout="f1()" />
					<p style="color:#dfdfdf">Email-Id</p><input type="email"  name="email"  required="" id="email1" onfocusout="f1()"/>
          <p style="color:#dfdfdf">Password</p><input type="text"  name="password"  placeholder="6 Character minimum" pattern=".{6,}" id="pass" onfocusout="f1()"/>
          
						<p style="color:#dfdfdf">Home Subcity</p>
            <select class="form-control" name="subcity">
							<option>Akaki-Kality</option>
							<option>Addis Ketema</option>
							<option>Arada</option>
              <option>Bole</option>
              <option>Gulele</option>
              <option>Kolfe Keranio</option>
              <option>Lideta</option>
              <option>Nefas Silk-Lafto</option>
              <option>Kirkos</option>
              <option>Yeka</option>
              <option>Lemi Kura</option>
              
						</select>
					
            <p style="color:#dfdfdf">Woreda</p><input type="text"  name="adress"  minlength="2" maxlength="2" required pattern="[0-9]{2}" id="addr" onfocusout="f1()"/>
					<p style="color:#dfdfdf">ID Number</p><input type="text"  name="id_number" minlength="5" maxlength="5" required pattern="[0-9]{5}" id="id" onfocusout="f1()"/>
				
						<p style="color:#dfdfdf">Gender</p><select class="form-control" name="gender">
							<option>Male</option>
							<option>Female</option>
							<option>Others</option>
						</select>
					
				
						<p style="color:#dfdfdf">Mobile</p><input type="text"  name="mobile_number" placeholder="Country code +251" required pattern="[+251][0-9]{}" minlength="13" maxlength="13" id="mobno" onfocusout="f1()"/>
            </div>
					<input type="submit" value="Submit" name="s">
				</form>	
			</div>	
		</div>
	</div>	
</div>	


 <?php

   include('footer.php');
?> 




 <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.js"></script>
 <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>