<?php
$servername="localhost";
$username="root";
$password="";
$db_name="rayhan01";
$conn=new mysqli($servername,$username,$password,$db_name);
if($conn->connect_error){
    die("Connecton failed".$conn->connect_error);
}
echo "";

?>
