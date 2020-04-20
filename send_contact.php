<!DOCTYPE html>

<html lang="en">
<head>
<?php include 'include.php'; ?>


<?php include 'head.php'; ?>
<?php include 'menu.php'; ?>

<!-- 
<script src="includes/jquery.sexylightbox.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="includes/sexylightbox.css" type="text/css">
	-->


<title>Conatct me | SHP's teaching resources</title>

</head>



<body >

<br><br><br>


<div class="container-fluid">

<div class="row">


<?php include 'config.php'; ?>


<div class=" col-sm-1 col-md-1 col-lg-1">
</div>

<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
<div class="jumbotron">
<div class="blog-post">

<h2 style="color: blue; text-align: center;" class="blog-post-title">
			This site is for my students to find study resources and I am Shahadat Hussain Parvez (SHP) </h2>


</div>
</div>


<div style="background: #A9C6D6; !important"   class="jumbotron"   class="container-fluid"    >


<p style="text-align: center;">

<?php

// Contact subject
$subject ="$subject";

// Details
$message="$detail";


// Mail of sender
$mail_from="$customer_mail";

// From
$header="from: $name <$mail_from>";


// Enter your email address
$to ='shparvez001@gmail.com';

$send_contact=mail($to,$subject,$message,$header);


// Check, if message sent to your email
// display message "We've recived your information"
if($send_contact){
echo "We've recived your contact information";
}
else {
echo "ERROR";
}
?>

</p>
</div>



</div>

<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 sidebar">

<?php include 'sidebar.php'; ?>
</div>


</div> <!-- row ends-->

<!--
<?php include 'time.php'; ?>
-->
<?php include 'configclose.php'; ?>



<br><br>

<div class="row">
<?php include 'footer.php'; ?>

</div>
</div>
</body>
</html>