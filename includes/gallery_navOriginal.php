<?php
//defaults
$selected1 = '';
$selected2 = '';
$selected3 = '';
$selected4 = '';
$selected5 = '';
$selected6 = '';

if (isset($_GET['sel']))
{
	$sel = $_GET['sel'];
	switch($sel)
	{
		case 1:
		$selected1 = 'selected="selected"';
		break;
		
		case 2:
		$selected2 = 'selected="selected"';
		break;
		
		case 3:
		$selected3 = 'selected="selected"';
		break;
		
		case 4:
		$selected4 = 'selected="selected"';
		break;
		
		case 5:
		$selected5 = 'selected="selected"';
		break;
		
		case 6:
		$selected6 = 'selected="selected"';
		break;
	}
}
?>

<div class="jumpmenu">
          <form name="form" id="form">

				    <select name="jumpMenu" id="jumpMenu" onchange="MM_jumpMenu('parent',this,0)">

				      <option value="mercer_island_residence.php?sel=1" <?php echo $selected1; ?>>Mercer Island Residence</option>

				      <option value="bellevue_residence.php?sel=2" <?php echo $selected2; ?>>Belllevue Residence</option>

				      <option value="beaver_lake_residence.php?sel=3" <?php echo $selected3; ?>>Beaver Lake Residence</option>

				      <option value="issaquah_residence.php?sel=4" <?php echo $selected4; ?>>Issaquah Residence</option>

				      <option value="redmond_residence.php?sel=5" <?php echo $selected5; ?>>Redmond Residence</option>

				      <option value="other_images.php?sel=6" <?php echo $selected6; ?>>Other Images</option>

			        </select>

			      </form>

          </div>
<div class="logo"></div>
<div id="menu">
		
		<div class="navlinks">
			<ul>
				<li><a href="index.php" class="home">Home</a></li>
				<li><a href="images_of_our_work.php" class="gallery">Images of</a></li>
				<li><a href="who_we_are.php"  class="about">Who We Are</a></li>
				<li><a href="contact.php"  class="contact">Contact Us</a></li>
			</ul>
          
		</div>
        
        <div class="address" style="">PO Box 2447 Issaquah WA 98027     425-883-3099<br />
© Copyright 2009 Ben Leland Construction. <br />
A division of Hochanadel Homes, Inc.</div>
</div>