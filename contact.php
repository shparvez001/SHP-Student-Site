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
Use the form below to contact me

<table width="400" border="0" align="center" cellpadding="3" cellspacing="1">
<tr>
<td><strong>Contact Form </strong></td>
</tr>
</table>

<table width="400" border="0" align="center" cellpadding="0" cellspacing="1">
<tr>
<td><form name="form1" method="post" action="send_contact.php">
<table width="100%" border="0" cellspacing="1" cellpadding="3">
<tr>
<td width="16%">Subject</td>
<td width="2%">:</td>
<td width="82%"><input name="subject" type="text" id="subject" size="50"></td>
</tr>
<tr>
<td>Detail</td>
<td>:</td>
<td><textarea name="detail" cols="50" rows="4" id="detail"></textarea></td>
</tr>
<tr>
<td>Name</td>
<td>:</td>
<td><input name="name" type="text" id="name" size="50"></td>
</tr>
<tr>
<td>Email</td>
<td>:</td>
<td><input name="customer_mail" type="text" id="customer_mail" size="50"></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td><input type="submit" name="Submit" value="Submit"> <input type="reset" name="Submit2" value="Reset"></td>
</tr>
</table>
</form>
</td>
</tr>
</table>

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