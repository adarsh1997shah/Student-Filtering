<?php 
// open a connection to mysql
$conn = mysqli_connect('localhost','root','','CVD') or die(mysqli_error($conn));

//fetching data to php 
$sql = "SELECT * FROM `instituteadmin-userdata` WHERE 1";
$result = mysqli_query($conn , $sql) or die("Error is : ". mysqli_error($conn));
//create an array
$emparray[] = array();
$i=0;
while($row =mysqli_fetch_assoc($result))
{
        $emparray[] = $row;
}

// convert php array to json String and \n
//write to json file
// $fp = fopen('jsonparsetutorial.txt', "w");
// fwrite($fp, json_encode($emparray));
// fclose($fp);

// while($i<408){
// print_r(json_encode($emparray[$i]));
// $i++;
// }
echo "<pre>"; 
print_r($emparray);

?>