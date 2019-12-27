<?php include "filter.php"?>

<?php

if(isset($_POST['valclassX'])){
$temp_array = array();

for ($i = 0; $i < count($response_array) ; $i++) 
{
	$current = $response_array[$i];
	$temp_array[$current['sn']] = $current['classX']; 
}

asort($temp_array);

$key_arr = array_keys($temp_array);

// print_r($key_arr);

$sort_array = array();

for ($j = 0; $j <count($key_arr) ; $j++) 
{
	for ($k = 0; $k <count($response_array) ; $k++) 
	{
		if($key_arr[$j]==$response_array[$k]['sn'])
		{
			array_push($sort_array,$response_array[$k]);
		}
	}
}
}
// print_r($sort_array);
// print_r(count($sort_array));

?>

<?php 

if(isset($_POST['valclassXII'])){
$temp_array = array();

for ($i = 0; $i < count($response_array) ; $i++) 
{
	$current = $response_array[$i];
	$temp_array[$current['sn']] = $current['classXII']; 
}

asort($temp_array);

$key_arr = array_keys($temp_array);

// print_r($key_arr);

$sort_array = array();

for ($j = 0; $j <count($key_arr) ; $j++) 
{
	for ($k = 0; $k <count($response_array) ; $k++) 
	{
		if($key_arr[$j]==$response_array[$k]['sn'])
		{
			array_push($sort_array,$response_array[$k]);
		}
	}
}
}
// print_r($sort_array);
// print_r(count($sort_array));

?>

<?php 

if(isset($_POST['valgraduation'])){
$temp_array = array();

for ($i = 0; $i < count($response_array) ; $i++) 
{
	$current = $response_array[$i];
	$temp_array[$current['sn']] = $current['graduation']; 
}

asort($temp_array);

$key_arr = array_keys($temp_array);

// print_r($key_arr);

$sort_array = array();

for ($j = 0; $j <count($key_arr) ; $j++) 
{
	for ($k = 0; $k <count($response_array) ; $k++) 
	{
		if($key_arr[$j]==$response_array[$k]['sn'])
		{
			array_push($sort_array,$response_array[$k]);
		}
	}
}
}
// print_r($sort_array);
// print_r(count($sort_array));

?>

<?php for($i = 0;$i<count($sort_array);$i++){?>
<div class="card-subcontainer">
	<div class="profile">
		<div>
		<p class="stuid"><?=$sort_array[$i]['studentID']?></p>
		</div>
		<div class="profilePic">
			<img class="avatar" src="https://avatars1.githubusercontent.com/u/8537504?s=400&amp;v=4" alt="Username">
		</div>
	</div>

	<div class="profiledata">

		<div class="checkbox">
			<input type="checkbox" class="btn btn-link" id=<?=$sort_array[$i]['sn']?>>
		</div>

		<div class="profiledata-content">
			<?php echo "<h4>".$sort_array[$i]['cvFullName']."</h4>" ?>
			<?php echo "<h5>".$sort_array[$i]['preferredLocation']."</h5>" ?>
			<?php echo "<h5>".$sort_array[$i]['department']."</h5>" ?>
		</div>

		<div class="profiledata-links">

			<div class="carddrop-container">
				<div class="carddrop-head">
					<button class="button" id = <?php echo "click".$i ?> onclick="carddrop(this)">Click me</button>
				</div>

				<div class="carddrop-content" id = <?php echo "show".$i ?>>
					<ul>
						<li>Preview</li>
						<li>Edit</li>
					</ul>
				</div>
			</div>
			
			<div>
			<button type="button" class="button">Download<i class="fa fa-download aria-hidden="true"></i>
			</button>
			</div>
			
		</div>
	</div>
	<!-- end of profiledata -->
</div> 
<!-- end of card-subcontainer -->
<?php }?>