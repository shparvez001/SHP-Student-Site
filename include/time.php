  <?php

// Return date/time info of a timestamp; then format the output

date_default_timezone_set("Asia/Dhaka");

$mydate=getdate(date("U"));

//$hours = $mydate[hours]+6;
$hours = $mydate[hours];
if ($hours >24)
{
 $hours= $hours-24;
}
echo  "<h5>Today is ,$mydate[weekday], $mydate[month] $mydate[mday], $mydate[year]. $hours: $mydate[minutes]: $mydate[seconds]</h5>";
?>