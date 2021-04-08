<?php
function connect(){
 $pdo = mysqli_connect("localhost","root","","voorbeeld");
 
 return $pdo;
}
?>