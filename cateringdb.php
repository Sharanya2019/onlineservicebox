<?php
$name = $_POST['name'];
$address=$_POST['address'];
$contact=$_POST['num'];
$email=$_POST['email'];
$services=$_POST['services'];
$persons=$_POST['persons'];
$date=$_POST['date'];
$time=$_POST['time'];
$host    = "localhost";
$user    = "root";
$pass    = "";
$db_name = "services";
$date_array = explode("-",$date); // split the array
$var_year = $date_array[0]; //day seqment
$var_month = $date_array[1]; //month segment
$var_day = $date_array[2]; //year segment
$new_date_format = "$var_year $var_month $var_day";

$connection = mysqli_connect($host, $user, $pass, $db_name);

if(mysqli_connect_errno()){
    die("connection failed: "
        . mysqli_connect_error()
        . " (" . mysqli_connect_errno()
        . ")");
}
$query="insert into users values(DEFAULT,7,'$name','$address',$contact,'$email','$services',STR_TO_DATE('$new_date_format','%Y %m %d'),'$time','NA','NA','NA','$persons','NA',0)";
mysqli_query($connection,$query);
header("Location:thank.php");
mysqli_close($connection);
?>
