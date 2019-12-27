<?php 

// $conn = mysqli_connect('localhost','root','','CVD') or die(mysqli_error($conn));

// $institute=1001;

?> 

<?php

// Generate Local JSON File 

// $response = array();

// $qry = "SELECT * FROM `instituteadmin-userdata` WHERE `institute` = '$institute'";

// $result =  mysqli_query($conn,$qry) or die(mysqli_error($conn));

// $rows_count=mysqli_num_rows($result);

// if($rows_count==0){
// 	echo "No Data found";
// }
// else
// {	
// 	$i=0;
// 	while($row = mysqli_fetch_assoc($result))
// 	{
// 		$response[$i] = $row;
// 		$i=$i+1;
// 	}

// 	$file_name=time()+1800;
// 	$response = json_encode($response,1000);
// 	$fp = fopen("$file_name".'.json', 'w');
// 	fwrite($fp,$response);
// 	fclose($fp);
// }
?>






<?php
if(!isset($_SESSION)) 
{ 
	session_start(); 
} 
//Read and Filter from JSON file.

// $filename = "1563351274.json";
$filename = $_SESSION['filename'];

$data = file_get_contents($filename);

$array = json_decode($data,true);

// for ($i = 0; $i <count($array) ; $i++){
// print_r($array[$i]['sn']);
// echo "<br>";
// }

$result = array();
$temp = array();

//Batch
if(isset($_POST['batch']))
{	
	for ($i = 0; $i <count($array) ; $i++) 
	{
		$batch = $_POST['batch'];
		for ($b = 0; $b <count($batch) ; $b++) 
		{

			if($array[$i]['batch']==$batch[$b])
			{
				$result[] = $array[$i]['sn'];
			}
		}
	}
}



//Department
if(isset($_POST['department']))
{
	for ($i = 0; $i <count($array) ; $i++) 
	{
		$department = $_POST['department'];
		for ($d = 0; $d <count($department ) ; $d++) 
		{
			if($array[$i]['department']==$department[$d] && in_array($array[$i]['sn'], $result))
			{
				$temp[] = $array[$i]['sn'];
			}		
		}
	}
	$result = $temp;
	$temp = array();
}

	//Gender
if(isset($_POST['gender']))
{
	for ($i = 0; $i <count($array) ; $i++) 
	{
		$gender = $_POST['gender'];
		for ($g = 0; $g <count($gender) ; $g++) 
		{
			if($array[$i]['gender']==$gender[$g] && in_array($array[$i]['sn'], $result))
			{
				$temp[] = $array[$i]['sn'];
			}	
		}
	}
	$result = $temp;
	$temp = array();
}

	//ClassX
if(isset($_POST['classX']))
{
	for ($i = 0; $i <count($array) ; $i++) 
	{
		$classX = $_POST['classX'];
		if($array[$i]['classX']>=$classX && in_array($array[$i]['sn'], $result))
		{
			$temp[] = $array[$i]['sn'];
		}	
	}
	$result = $temp;
	$temp = array();
}

	//ClassXII
if(isset($_POST['classXII']))
{
	for ($i = 0; $i <count($array) ; $i++) 
	{
		$classXII = $_POST['classXII'];
		if($array[$i]['classXII']>=$classXII && in_array($array[$i]['sn'], $result))
		{
			$temp[] = $array[$i]['sn'];
		}	
	}
	$result = $temp;
	$temp = array();
}

	//Graduation
if(isset($_POST['graduation']))
{
	for ($i = 0; $i <count($array) ; $i++) 
	{
		$graduation = $_POST['graduation'];
		if($array[$i]['graduation']>=$graduation && in_array($array[$i]['sn'], $result))
		{
			$temp[] = $array[$i]['sn'];
		}	
	}
	$result = $temp;
	$temp = array();
}

	//preferred location
if(isset($_POST['preferredLocation']))
{
	for ($i = 0; $i <count($array) ; $i++) 
	{
		$preferredLocation  = $_POST['preferredLocation'];
		for ($p = 0; $p <count($preferredLocation) ; $p++) 
		{
			if($array[$i]['preferredLocation']==$preferredLocation[$p] && in_array($array[$i]['sn'], $result))
			{
				$temp[] = $array[$i]['sn'];
			}	
		}
	}
	$result = $temp;
	$temp = array();
}


//backlogs
if(isset($_POST['backlog']))
{
	for ($i = 0; $i <count($array) ; $i++) 
	{
		$backlog  = $_POST['backlog'];
		for ($p = 0; $p <count($backlog) ; $p++) 
		{
			if($array[$i]['backlog']==$backlog[$p] && in_array($array[$i]['sn'], $result))
			{
				$temp[] = $array[$i]['sn'];
			}	
		}
	}
	$result = $temp;
	$temp = array();
}



//softSkills
if(isset($_POST['softSkills']))
{	
	for ($i = 0; $i <count($array) ; $i++) 
	{
		$flag = 0;
		$softSkills = $_POST['softSkills'];
		for ($s = 0; $s <count($softSkills) ; $s++) 
		{
			if(	$array[$i]['softSkills1']==$softSkills[$s] ||
				$array[$i]['softSkills2']==$softSkills[$s] || 
				$array[$i]['softSkills3']==$softSkills[$s] ||
				$array[$i]['softSkills4']==$softSkills[$s] ||
				$array[$i]['softSkills5']==$softSkills[$s] )
			{
				$flag = $flag + 1;
			}
		}
		if($flag==count($softSkills) && in_array($array[$i]['sn'], $result))
		{
			$temp[] = $array[$i]['sn'];
		}
	}
	$result = $temp;
	$temp = array();
}

//technicalSkills
if(isset($_POST['technicalSkills']))
{	
	for ($i = 0; $i <count($array) ; $i++) 
	{
		$flag = 0;
		$technicalSkills = $_POST['technicalSkills'];
		for ($s = 0; $s <count($technicalSkills) ; $s++) 
		{
			if(	$array[$i]['technicalSkills1']==$technicalSkills[$s] ||
				$array[$i]['technicalSkills2']==$technicalSkills[$s] || 
				$array[$i]['technicalSkills3']==$technicalSkills[$s] ||
				$array[$i]['technicalSkills4']==$technicalSkills[$s] ||
				$array[$i]['technicalSkills5']==$technicalSkills[$s] )
			{
				$flag = $flag + 1;
			}
		}
		if($flag==count($technicalSkills) && in_array($array[$i]['sn'], $result))
		{
			$temp[] = $array[$i]['sn'];
		}
	}
	$result = $temp;
	$temp = array();
}


//languges
if(isset($_POST['language']))
{	
	for ($i = 0; $i <count($array) ; $i++) 
	{
		$flag = 0;
		$language = $_POST['language'];
		for ($s = 0; $s <count($language) ; $s++) 
		{
			if(	$array[$i]['language1']==$language[$s] ||
				$array[$i]['language2']==$language[$s] || 
				$array[$i]['language3']==$language[$s] ||
				$array[$i]['language4']==$language[$s] ||
				$array[$i]['language5']==$language[$s] )
			{
				$flag = $flag + 1;
			}
		}
		if($flag==count($language) && in_array($array[$i]['sn'], $result))
		{
			$temp[] = $array[$i]['sn'];
		}
	}
	$result = $temp;
	$temp = array();
}



$response_array = array();
for ($i = 0; $i <count($array) ; $i++) 
{
	if(in_array($array[$i]['sn'], $result))
	{
		$response_array[] = $array[$i];
	}
}


// print_r($response_array);
// echo("<pre>");
// print_r($response_array);

// $myjson = json_encode($response_array);
// echo $myjson;

// print_r($result);
//print_r($_POST);
?>





