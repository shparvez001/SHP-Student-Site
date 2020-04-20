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
	
<script>
function showIAL() {
    if (str.length == 0) {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("demo").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "/IAL" , true);
        xmlhttp.send();
    }
}
</script>

<script>
function showIGCSE() {
    if (str.length == 0) {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("demo").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "/IGCSE" , true);
        xmlhttp.send();
    }
}
</script>

<script>
function showGED() {
    if (str.length == 0) {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("demo").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "ged.php" , true);
        xmlhttp.send();
    }
}
</script>
	
	
	


<title>SHP's teaching resources</title>

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
			This site is for my students to find study resources. </h2>


</div>
</div>


<div style="background: #A9C6D6; !important"   class="jumbotron"   class="container-fluid"    >


<p style="text-align: center;">
Hello all!!! </p>
<p style="text-align: center;">
This site is for my students to find study resources. Everyone is welcome to this site, even if you are not my student. Here you will find study resources for Edexcel International A level, Edexcel IGCSE, GED and many other resources. I cannot assure you thta other content will not be added, some EEE content may pop up occasionaly ;)....  </p>
<p style="text-align: center;">
Among study materials you may find notes and other related links for studying. Curated and my self made questions for your practise.
</p>
</div>

<div style="background: #dcfba5; !important"     class="container-fluid"    >

<h2  style=" color: RED ;  text-align: center;"> Find your needed level below </h2>

<button onclick="showIAL()">IAL</button>
<button onclick="showIGCSE()">IGCSE</button>
<button onclick="showGED()">GED</button>

<p id="demo"></p>

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