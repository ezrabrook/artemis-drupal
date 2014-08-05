<div id="footer">
	<div class="wrapper">
		<a href="http://www.msu.edu/" class="msulink hidetext">Michigan State University</a>
		<a href="http://socialscience.msu.edu/" id="socialscience" class="hidetext">Social Science</a>
<?php echo $footer_legal; ?>
		<div class="clear"></div>
	</div>
</div>

<div id="meta">
	<div class="wrapper">
<?php
$metanav = menu_navigation_links("menu-footer-navigation");
echo theme("links", $metanav, array("id"=>"metanav"));
?>
		<a href="http://www.greenliteweb.com" id="greenlite" class="hidetext" title="Website Development by GreenLite">Website Development by GreenLite</a>
	</div>
</div>