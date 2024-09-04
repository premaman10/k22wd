<?php
function mymessage(){
echo"First Function  <br>";
}
mymessage();
?>

<?php
function setChildren(int $child = 0){
    echo"total number of children are: $child <br>";
}
setChildren(8);
setChildren();
?>