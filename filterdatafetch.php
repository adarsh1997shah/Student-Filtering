<?php include "filter.php" ?>

<?php
$count = ceil(count($response_array)/10);
$counter = $_POST['counter'];

$pagelimit = $counter*10;
$start = $pagelimit - 10;


if(!($pagelimit<count($response_array))){
	$pagelimit = count($response_array);
}?>


<?php
for($i = $start;$i<$pagelimit;$i++){
// for($i = 0;$i<count($response_array);$i++){?>
<div class="card-subcontainer">
	<div class="profile">
		<div>
		<p class="stuid"><?=$response_array[$i]['studentID']?></p>
		</div>
		<div class="profilePic">
			<img class="avatar" src="https://avatars1.githubusercontent.com/u/8537504?s=400&amp;v=4" alt="Username">
		</div>
	</div>

	<div class="profiledata">

		<div class="checkbox">
			<input type="checkbox" class="btn btn-link" id=<?=$response_array[$i]['sn']?>>
		</div>

		<div class="profiledata-content">
			<?php echo "<h4>".$response_array[$i]['cvFullName']."</h4>" ?>
			<?php echo "<h5>".$response_array[$i]['preferredLocation']."</h5>" ?>
			<?php echo "<h5>".$response_array[$i]['department']."</h5>" ?>
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

