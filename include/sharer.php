<!-- <h4> Share this page</h4> -->

   
   
<?php
function curPageName() {
 return substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
}

//echo "The current page name is ".curPageName();
?>

<style type="text/css">
 
#share-buttons img {
width: 35px;
padding: 5px;
border: 0;
box-shadow: 0;
display: inline;
}
 
</style>

<?php
function curPageURL() {
 $pageURL = 'http';
 if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
 $pageURL .= "://";
 if ($_SERVER["SERVER_PORT"] != "80") {
  $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
 } else {
  $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
 }
 return $pageURL;
}

  echo "You are in   " .curPageURL();
  echo "<br> Share this page" ;  
  
  ?>


<div
  class="fb-like"
  data-share="true"
  data-width="150"
  data-show-faces="true">
</div>


  <div id="share-buttons">
 
<!-- Facebook -->
<a href="http://www.facebook.com/sharer.php?u=<?php  echo curPageURL();?>" target="_blank"><img src="http://driveelectricnoco.org/wp-content/uploads/2014/11/facebook-logo.jpg" alt="Facebook" /></a>
 
<!-- Twitter -->
<a href="http://twitter.com/share?url=<?php  echo curPageURL();?>  " target="_blank"><img src="http://www.identivenfc.com/media/catalog/product/cache/5/image/500x500/9df78eab33525d08d6e5fb8d27136e95/t/w/tweet-nfc-tag-lg.png" alt="Twitter" /></a>
 

<!-- Email -->
<a href="mailto:?Subject=Simple Share Buttons&Body=I%20saw%20this%20and%20thought%20of%20you!%20 <?php  echo curPageURL();?>"><img src="http://www.geekoo.it/wp-content/uploads/2015/02/email-184x184.png" alt="Email" /></a>
 
</div>
   
      