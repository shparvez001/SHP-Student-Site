<?php

$datetime= $rows['time']; 
 $year= substr($datetime,0,4); 
 $mon= substr($datetime,5,2); 
 $day= substr($datetime,8,2);
 $hour_gmt= substr($datetime,11,2); 
 $hour = $hour_gmt+12;
 $min= substr($datetime,14,2); 
 $sec= substr($datetime,17,2); 
 $orgdate= date("d.M  Y @ G:i ", mktime($hour, $min, $sec,  $mon,  $day, $year));





?>