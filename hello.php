<?php
echo '<br/>';
echo '<h2 style="color:Green; text-align:center">Hello world! </h2>';
echo '<br/>';

   
    $firstVar = 'Are you ready ?'; 
    echo $firstVar; 
?> 


<!-- ex2 -->
 <?php
   $myYear      = 1996; 
  $currentYear = date('Y'); 
  $myAge       = $currentYear - $myYear; 
  echo 'My age is: ' . $myAge . ' year old'; 
  ?>

<!-- ex3 -->
<?php   
  $height  = 10; 
  $width   = 5; 
  $area    = $height * $width; 
  echo 'The area of rectangle with height '.$height.' cm and width '.$width.' cm is: ' . 
$area . ' cm'; 
?>
<!-- ex4 -->    
 <?php
 