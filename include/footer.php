<div class=" col-sm-1 col-md-1 col-lg-1 sidebar">

</div>
<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 sidebar">


<div style="background: #D9EFFF; !important" class="jumbotron">



<?php include 'disqus.php'; ?>


</div>
</div>

<div class=" col-sm-3 col-md-3 col-lg-3 ">

</div>
<div class=" col-sm-2 col-md-2 col-lg-2">

</div>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">

<div style="background: #fff0f5; !important">




<?php

$mydate=getdate(date("U"));

print "CC @ $mydate[year]  " ; 
?>
<a title="Shahadat Hussain Parvez" href="http://shparvez.net" target="_blank">Shahadat Hussain Parvez</a> 

<a rel="license" href="http://creativecommons.org/licenses/by-sa/4.0/"><img alt="Creative Commons License" style="border-width:0" src="https://i.creativecommons.org/l/by-sa/4.0/88x31.png" /></a><br />This work is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-sa/4.0/">Creative Commons Attribution-ShareAlike 4.0 International License</a>.
<br>
<!-- visitor counter -->
<!--
<?php include 'config.php';


$tbl_name="counter1"; // Table name 

$sql="SELECT * FROM $tbl_name";
$result=mysql_query($sql);

$rows=mysql_fetch_array($result);
$counter=$rows['count'];

// if have no counter value set counter = 1
if(empty($counter)){
$counter=1;
$sql1="INSERT INTO $tbl_name(count) VALUES('$counter')";
$result1=mysql_query($sql1);
}

echo "Total hits since august 2016: ";
echo $counter;

// count more value
$addcounter=$counter+1;
$sql2="update $tbl_name set count='$addcounter'";
$result2=mysql_query($sql2);


include 'configclose.php';
?>

-->

</div>
</div>


<div class=" col-sm-6 col-md-6 col-lg-6 sidebar">

</div>


<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript" src="http://arrow.scrolltotop.com/arrow13.js"></script>
<noscript>Not seeing a <a href="http://www.scrolltotop.com/">Scroll to Top Button</a>? Go to our FAQ page for more info.</noscript>