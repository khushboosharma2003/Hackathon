<?php
$server="localhost:3307";
$user="root";
$pass="";
$db="techpro";
// $sql="SELECT * FROM `student` WHERE gender='ale'";
$con=mysqli_connect($server, $user, $pass, $db);
if(!$con)
{
   die("Connetion fail ho gya h".mysqli_connect_error());
}
else {
     echo "hogya connect";

}
?>