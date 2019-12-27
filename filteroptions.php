<?php 
 session_start(); 
 include("filterapi.php");
// $filename = "1001-1563448685-0.json";
$filename = $_SESSION['filename'];


$data = file_get_contents($filename);

$array = json_decode($data,true);

// print_r($array);



//Departments 

$department = array();

for ($i = 0; $i <count($array) ; $i++) 
{
	$current_array = $array[$i];
	$depart = $current_array['department'];
	array_push($department, $depart);
}
$department = array_unique($department);
sort($department);
// print_r($department);


//Batches 
$batch = array();
for ($i = 0; $i <count($array) ; $i++) 
{
	$current_array = $array[$i];
	$current = $current_array['batch'];
	array_push($batch,$current);
}

$batch = array_unique($batch);
sort($batch);

// softSkills
$softSkills = array();

for ($i = 0; $i <count($array) ; $i++) 
{
	$current_array = $array[$i];
	for ($j = 1; $j <6 ; $j++) 
	{
		$skills = $current_array['softSkills'.$j];
		array_push($softSkills, $skills);
	}	
}

$softSkills = array_unique($softSkills);
sort($softSkills);
//print_r($softSkills);



// technicalSkills
$techinalSkills = array();
for ($i = 0; $i <count($array) ; $i++) 
{
	$current_array = $array[$i];
	for ($j = 1; $j <6 ; $j++) 
	{
		$technical = $current_array['technicalSkills'.$j];
		array_push($techinalSkills, $technical);
	}	
}

$techinalSkills = array_unique($techinalSkills);
sort($techinalSkills);
//print_r($techinalSkills);



//language
$language = array();
for ($i = 0; $i <count($array) ; $i++) 
{
	$current_array = $array[$i];
	for ($j = 1; $j <6 ; $j++) 
	{
		$lang = $current_array['language'.$j];
		array_push($language, $lang);
	}	
}

$language = array_unique($language);
sort($language);
//print_r($language);



//prefferedLocation
$prefferedLocation = array();
for ($i = 0; $i <count($array) ; $i++) 
{
	$current_array = $array[$i];
	$location = $current_array['preferredLocation'];
	array_push($prefferedLocation, $location);
}

$prefferedLocation = array_unique($prefferedLocation);
sort($prefferedLocation);
//print_r($prefferedLocation);



//backlog
$backlog = array();
for ($i = 0; $i <count($array) ; $i++) 
{
	$current_array = $array[$i];
	$back = $current_array['backlog'];
	array_push($backlog, $back);
}

$backlog = array_unique($backlog);
sort($backlog);
// print_r($backlog);


$filter_data = array ('prefferedLocation' => $prefferedLocation,'softSkills' => $softSkills,'techinalSkills'=>$techinalSkills,'language'=>$language,'batch'=>$batch,'department'=>$department,'backlog'=>$backlog);

$filter_data = serialize($filter_data);
// print_r($filter_data);

?>