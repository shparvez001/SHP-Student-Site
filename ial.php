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


<title>Edexcel IAL [A level] | SHP's teaching resources</title>



</head>



<body >

<br><br><br>


<div class="container-fluid">

<div class="row">


<?php include 'config.php'; ?>


<div class=" col-sm-1 col-md-1 col-lg-1">
</div>

<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">

<div class="blog-post">


<div style="background: #A9C6D6; !important" class="jumbotron">
<h2 style="color: blue; text-align: center;" class="blog-post-title">
			SHP's Edexcel IAL resources.....</h2>


<p style="text-align: center;">
Here you will find all the Edexcel IAL resources I teach mainly Physics and additionally Chemistry and Mathematics[C12, C34, M1, M2]....  </p>
<p style="text-align: center;">
Among study materials you may find notes and other related links for studying. Curated and my self made questions for your practise. And link to question papers.
</p>

</div>


</div>


<!-- 1st column -->
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">


<div style="background: #fdf2c8; !important" class="jumbotron">

<h2 style="color: blue; text-align: center;" class="blog-post-title">
			Physics</h2>
<p style="text-align: center;">
Coming soon
</p>

<h3>Online Class Videos</h3>

 <ul class="nav nav-pills nav-justified">
	 <li class="active" ><a data-toggle="pill" href="#pu1">Unit 1</a></li>
	 <li><a data-toggle="pill" href="#pu2">Unit 2</a></li>
	 <li><a data-toggle="pill" href="#pu4">Unit 4</a></li>
	 <li><a data-toggle="pill" href="#pu5">Unit 5</a></li>
 </ul>
<br>
<div class="tab-content">
	<div id="pu1" class="tab-pane fade in active">
		<?php
			$vids=array();
			foreach ($vids as $id=>$vid)
			{
				echo '<div class="container"><iframe src="https://www.youtube.com/embed/'.$vid.'" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="video"></iframe></div><br>'.PHP_EOL;
			}
		?>
	</div>
	<div id="pu2" class="tab-pane fade in ">
		<?php
			$vids=array("gq5EQUITZnQ","zX8B2iDO0go","uiPpWi9NKnQ","M-wZb0DAJNg","2CYuaWE9Gq0","I6XaWeS38MY");
			foreach ($vids as $id=>$vid)
			{
				echo '<div class="container"><iframe src="https://www.youtube.com/embed/'.$vid.'" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="video"></iframe></div><br>'.PHP_EOL;
			}
		?>
	</div>
		<div id="pu4" class="tab-pane fade in">
			<?php
				$vids=array("ePX171UenE8","","","RCtJMY0lalM","K4tBUAzfPRo","0ydexedKH9o","xf3X4K3KDuc","xAudVm4ylg0");
				foreach ($vids as $id=>$vid)
				{
					echo '<div class="container"><iframe src="https://www.youtube.com/embed/'.$vid.'" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="video"></iframe></div><br>'.PHP_EOL;
				}
			?>
		</div>
		<div id="pu5" class="tab-pane fade in ">
			<?php
				$vids=array("-CmKPoFfLY4","mJmvzPJ5iVg","G1XsJxtOIco","Pc5gog-m5Q8","f040SakzuxM","4XsEleFxnVQ");
				foreach ($vids as $id=>$vid)
				{
					echo '<div class="container"><iframe src="https://www.youtube.com/embed/'.$vid.'" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="video"></iframe></div><br>'.PHP_EOL;
				}
			?>
		</div>

</div>




</div>
</div>

<!-- 2nd column -->
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">



<div style="background: #feffb3; !important" class="jumbotron">

<h2 style="color: blue; text-align: center;" class="blog-post-title">
			Chemistry</h2>

Notes for Chemistry
<p style="text-align: center;">
Coming soon
</p>
<h3>Online Class Videos</h3>

 <ul class="nav nav-pills nav-justified">
	 <li class="active" ><a data-toggle="pill" href="#u4-inorganic">Unit 4 inorganic</a></li>
	 <li><a data-toggle="pill" href="#u5-inroganic">Unit 5 inorganic</a></li>
	 <li><a data-toggle="pill" href="#a2-organic">A2 Organic</a></li>
 </ul>
<br>
<div class="tab-content">
	<div id="u4-inorganic" class="tab-pane fade in active">
		<?php
			$vids=array("_LHoXBMsipQ","R2b7xZknXrQ","fGpIhlZtrK0","EqET2OWBj0Y","tfSA8DUzxyY");
			foreach ($vids as $id=>$vid)
			{
				echo '<div class="container"><iframe src="https://www.youtube.com/embed/'.$vid.'" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="video"></iframe></div><br>'.PHP_EOL;
			}
		?>
	</div>
	<div id="u5-inroganic" class="tab-pane fade in ">
		<?php
			$vids=array();
			foreach ($vids as $id=>$vid)
			{
				echo '<div class="container"><iframe src="https://www.youtube.com/embed/'.$vid.'" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="video"></iframe></div><br>'.PHP_EOL;
			}
		?>
	</div>
	<div id="a2-organic" class="tab-pane fade in ">
		<?php
			$vids=array("kR8X8RIZtGY", "uPBx_X6HHJk" , "i8MI40iAr18", "Pyxsf6eWOc8", "yDjWp3Wnz4U", "orkTFlsUNNY");
			foreach ($vids as $id=>$vid)
			{
				echo '<div class="container"><iframe src="https://www.youtube.com/embed/'.$vid.'" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="video"></iframe></div><br>'.PHP_EOL;
			}
		?>
	</div>

</div>



</div>



</div>


<!-- FInal row -->
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">

<div style="background: #7488bd; !important" class="jumbotron">



<h2 style="color: blue; text-align: center;" class="blog-post-title">
			Mathematics</h2>


<p style="text-align: center;">
Coming soon
</p>

</div>

</div>




</div>

<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 sidebar">

<?php include 'sidebar.php'; ?>
</div>


</div>

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
