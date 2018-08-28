<!DOCTYPE html>
<html lang="en">
<head>
	<title>Coming Soon</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<! -- Insert Emails Into Database -->
<?php
require('db.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['email'])){
	$email = stripslashes($_REQUEST['email']);
	$email = mysqli_real_escape_string($con,$email);
	$trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `emails` (email, trn_date)
VALUES ('$email', '$trn_date')";
        $result = mysqli_query($con,$query);
 if($result){
            echo "<div class='form'>
<h3>You have been Subscribed Successfully!</h3>
<br/>Click here to <a href='index.php'>Go Back</a></div>";
        }
    }else{
?>	

	<div class="bg-img1 size1 " style="background-image: url('images/purple-background.jpg');">
		<div class="p-b-215 respon1 flex-col-c">
			<div class="wrappic1">
<br>
<br>
<! -- Start Title/Logo -->
<h1 style="color:white;"><b>My</b>Protected<b>Server</b></h1>
<br>
<br>
			</div>
<! -- Start "Coming Soon" -->
			<h3 class="l1-txt1 txt-center">
				Coming Soon
			</h3>
<br>
<br>
<div class="form">
<center>
<form name="registration" action="" method="post">
<input type="email" name="email" placeholder="Email" required />

<input type="submit" name="submit" value="Subscribe" />
</center>
</form>
</div>
<br>
<br>


		<!-- Social Icons -->
		<div class="flex-w flex-c-m p-b-35">
			<a href="#" class="size3 flex-c-m how-social trans-04 m-r-3 m-l-3 m-b-5">
				<i class="fa fa-facebook"></i>
			</a>

			<a href="#" class="size3 flex-c-m how-social trans-04 m-r-3 m-l-3 m-b-5">
				<i class="fa fa-twitter"></i>
			</a>

			<a href="#" class="size3 flex-c-m how-social trans-04 m-r-3 m-l-3 m-b-5">
				<i class="fa fa-youtube-play"></i>
			</a>
		</div>
	</div>

<!-- Vendor JS -->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
		<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
	<?php } ?>
</body>
</html>