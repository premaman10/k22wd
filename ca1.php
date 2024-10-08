<?php
//question 1
$rows = 5;
for($i=0;$i<=$rows;$i++){
    for($j=0;$j<$i;$j++){
        echo("* ");
    }
    echo"<br>";
}


//question 2

$abc = array(
    "Section A"=>array("name"=>"Manoj","score"=>"7.8","status"=>"pass"),
    "Section B"=>array("name"=>"Aditya","score"=>"8.5","status"=>"pass"),
    "Section C"=>array("name"=>"Anuj","score"=>"4.9","status"=>"fail")
);
foreach($abc as $section => $details){
   
    echo $section."<br>";
    
    echo $details["name"]."<br>";
   
    echo $details["score"]."<br>";
   
    echo $details["status"]."<br><br>";
}
?>