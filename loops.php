<?php
$i =1;
//WHILE LOOP
while($i<=5){
    $i++;
    echo"number".$i."<br>";
}

//DO WHILE LOOP
$p =1;
do{

    $p++;
    echo"number is ".$p."<br>";
}
while($p<=3);

//FOR EACH LOOP
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as  $key=>$x) {
  echo ($x) ;
}
?>
