<?php 
//ID = Node for News/Features
?>
<div class="row" id="news-<?php print $node->nid; ?>" class="featureview feature node<?php if ($sticky) { print ' sticky'; } ?><?php if (!$status) { print ' node-unpublished'; } ?>">

		
	
		<?php						
			if(!empty($field_related_people[0]["view"])){
				print '<div class="col-md-9 col-sm-9col-xs-12">';
					echo $body;
				print'</div>';
			}
			else {
				print '<div class="col-md-12 col-sm-12 col-xs-12">';
					echo $body;
				print'</div>';
			}
		?>
		<div class="col-md-3 col-sm-3 col-xs-12">
			<?php	
				if(isset($field_related_people[0]["view"])){
					print "<div class='related_people'>";
					print "<h3>Related People</h3>";
					foreach($field_related_people as $id => $people){
							echo $people["view"];
					}
					print "</div>";
				}
			?>
		</div>
	
	
	<div class="row">
		<div class="col-md-5 col-sm-5 col-xs-12">
			<?php
				if($field_videos[0]["value"]){
					foreach($field_videos as $id => $video){
						echo $video["view"];
					}
				}
			?>
		</div>
		<div class="col-md-3 col-sm-3 col-xs-12">
			<?php
				if(isset($field_external_links[0]["value"])){
					 print "<div class='external_links'>";
					 print "<h3>External Resources</h3>";
					 foreach($field_external_links as $id => $links){
						echo $links["view"];
						print "<br/>";
						}
					print "</div>";
				}
			?>
		</div>
		<div class="col-md-4 col-sm-4 col-xs-6">
			<?php	
				if(isset($field_related_graduate[0]["value"])){
					print "<div class='related_focus'>";
					print "<h3>Related Area of Focus</h3>";
					foreach($field_related_graduate as $id => $area){
							echo $area["view"];
					}
					print "</div>";
				}
			?>
		</div>
	</div>
</div>
	
	