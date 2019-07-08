<?php
$gname = 'Mercer Island Residence';

if (isset($_GET['gname']))
{
	$gname = $_GET['gname'];
}
?>
<div id="contenttoggle">
<ul>
<li onclick="javascript:location.href='mercer_island_residence.php?gname=Mercer Island Residence';">Mercer Island Residence</li>
<li onclick="javascript:location.href='bellevue_residence.php?gname=Bellevue Residence';">Bellevue Residence</li>
<li onclick="javascript:location.href='beaver_lake_residence.php?gname=Beaver Lake Residence';">Beaver Lake Residence</li>
<li onclick="javascript:location.href='issaquah_residence.php?gname=Issaquah Residence';">Issaquah Residence</li>
<li onclick="javascript:location.href='redmond_residence.php?gname=Redmond Residence';">Redmond Residence</li>
<li onclick="javascript:location.href='other_images.php?gname=Other Images';">Other Images</li>

</ul>
</div>
<div class="jumpmenu">
<?php echo $gname; ?>
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
<script>


$(".jumpmenu").click(function () {
  $("div#contenttoggle").fadeToggle("fast");
});
</script>