<div id="top">
	<div class="wrapper">
		<div class="content-skip"><a href="#content">Skip to Content</a></div>
		<h1><a href="<?php echo $base_path; ?>" class="hidetext" title="<?php echo htmlentities($site_name); ?>"><?php echo htmlentities($site_name); ?></a></h1>
		<div id="utility">
			<a href="http://www.msu.edu/" title="Michigan State Univeristy" class="msulink hidetext">Michigan State University</a>
<?php echo $search_box; ?>
<?php
$secondarylinks = menu_navigation_links("secondary-links");
echo theme("links",$secondarylinks, array("id"=>"topnav"));
?>
<?php
echo theme("links", $primary_links, array("id"=>"primarylinks"));
?>
		</div>
		<div class="clear"></div>
	</div>
</div>