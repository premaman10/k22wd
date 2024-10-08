<?php
// $a=array("rahul","mohan");
// echo gettype($a);
// echo "<br>";
// $cars = array("Volvo","BMW","Toyota");
// var_dump ($cars);
// echo"<pre>";
// print_r($cars);// it print array's element with there indexes
// echo"</pre>";
// for($x=0;$x<=2;$x++){
//     echo $cars[$x]."<br>";
// }


//Printing multi dimmensional array
// $cars = array (
//     array("Volvo",22,18),
//     array("BMW",15,13),
//     array("Saab",5,2),
//     array("Land Rover",17,15)
// );

// for($x=0;$x<count($cars);$x++){
//     for($i=0;$i<count($cars[$x]);$i++){
//         echo $cars[$x][$i]." ";
        
//     }
//     echo"<br>";
// }


// $user = array("ram ,","shyam ,","sita ,","geeta ,");
// unset($user[2]);//its removes the element whose index is given
// print_r($user);//used to print arrays
// array_push($user,"khushi");//add the element to the array at the last
// print_r($user);
// array_pop($user);
// //used to remove the last element of the array
// echo("<br>");
// echo implode($user);//print array element in contica1nuous way
// echo("<br>");
// $user1 = array("hi","bye","hello","tata");
// print_r(array_merge($user,$user1));


$a1 = array("a"=>"red","b"=>"green","c"=>"blue");
$a2 = array("1"=>"red","2"=>"green","3"=>"blue");
// $result = array_diff($a1,$a2);
// print_r($result);
// $res = array_flip($a1);
// print_r($res);//interchnage the value and keys

// $re = array_intersect($a1,$a2);
// print_r($re); shows common elements

// $r = array_merge($a1,$a2);
// print_r($r);merges teo arrays

array_pop($a1);
print_r($a1);

print_r(array_reverse($a1));


echo array_search("red",$a1);
?>
