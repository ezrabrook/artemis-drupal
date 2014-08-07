<?php 
//ID = Node for News/Features
?>
<div class="row" id="news-<?php print $node->nid; ?>" class="featureview feature node<?php if ($sticky) { print ' sticky'; } ?><?php if (!$status) { print ' node-unpublished'; } ?>">
	
		<?php
		$view = views_get_view('feature_image_rotator');
		
		?>
		
	
		<?php						
			if(isset($field_related_people[0]["view"]) || (isset($field_related_graduate[0]["view"]))){
				print '<div class="col-md-9 col-sm-9 col-xs-12">';
					print $view->execute_display('default', $args);
					echo $body;
				print'</div>';
			}
			else {
				print '<div class="col-md-12 col-sm-12 col-xs-12">';
					print $view->execute_display('default', $args);
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
				if(isset($field_related_graduate[0]["view"])){
					print "<div class='related_focus'>";
					print "<h3>Related Area of Focus</h3>";
					foreach($field_related_graduate as $id => $area){
							echo $area["view"];
					}
					print "</div>";
				}
			?>
		</div>
	<?php 
	$videos = "";
	$links = "";
	$related_graduate = "";
	
	$videos = $field_vidoes[0]["value"];
	$links = $field_external_links[0]["value"];
	$related_graduate = $field_related_graduate[0]["view"];
	?>
	
	
	<div class="row">
		<?php //if only one is included
			if((!empty($videos) && empty($links) && empty($related_graduate)) || (empty($videos) && !empty($links) && empty($related_graduate)) || (empty($videos) && empty($links) && !empty($related_graduate))){
			print '<div class="col-md-6 col-sm-6 col-xs-12">';
				if($field_videos[0]["value"]){
					foreach($field_videos as $id => $video){
						echo $video["view"];
					}
				}
			print  '</div>';
			print  '<div class="col-md-6 col-sm-6 col-xs-12">';
				if(isset($field_external_links[0]["value"])){
					 print "<div class='external_links'>";
					 print "<h3>External Resources</h3>";
					 foreach($field_external_links as $id => $links){
						echo $links["view"];
						print "<br/>";
						}
					print "</div>";
				}
			print '</div>';
		}
		?>
		<?php // if video, links and related graduate field are present
			if(isset($videos) && isset($links) && isset($related_graduate)){
			print '<div class="col-md-5 col-sm-5 col-xs-12">';
					if($field_videos[0]["value"]){
						foreach($field_videos as $id => $video){
							echo $video["view"];
						}
					}
			print  '</div>';
			print  '<div class="col-md-4 col-sm-4 col-xs-12">';
					if(isset($field_external_links[0]["value"])){
						 print "<div class='external_links'>";
						 print "<h3>External Resources</h3>";
						 foreach($field_external_links as $id => $links){
							echo $links["view"];
							print "<br/>";
							}
						print "</div>";
					}
			print '</div>';
			}
		?>
		<?php // if all but related graduate are included
			if(isset($videos) && isset($links) && empty($related_graduate)){
			print '<div class="col-md-6 col-sm-6 col-xs-12">';
				if($field_videos[0]["value"]){
					foreach($field_videos as $id => $video){
						echo $video["view"];
					}
				}
			print  '</div>';
			print  '<div class="col-md-6 col-sm-6 col-xs-12">';
				if(isset($field_external_links[0]["value"])){
					 print "<div class='external_links'>";
					 print "<h3>External Resources</h3>";
					 foreach($field_external_links as $id => $links){
						echo $links["view"];
						print "<br/>";
						}
					print "</div>";
				}
			print '</div>';
			}
		?>
		<?php //if all but links are included
			if(isset($videos) && empty($links) && isset($related_graduate)){
			print '<div class="col-md-6 col-sm-6 col-xs-12">';
				if($field_videos[0]["value"]){
					foreach($field_videos as $id => $video){
						echo $video["view"];
					}
				}
			print  '</div>';
			}
		?>
		<?php //if all but videos are included
			if(empty($videos) && isset($links) && isset($related_graduate)){
			print  '<div class="col-md-6 col-sm-6 col-xs-12">';
				if(isset($field_external_links[0]["value"])){
					 print "<div class='external_links'>";
					 print "<h3>External Resources</h3>";
					 foreach($field_external_links as $id => $links){
						echo $links["view"];
						print "<br/>";
						}
					print "</div>";
				}
			print '</div>';
			print  '<div class="col-md-6 col-sm-6 col-xs-12">';
				if(isset($field_external_links[0]["value"])){
					 print "<div class='external_links'>";
					 print "<h3>External Resources</h3>";
					 foreach($field_external_links as $id => $links){
						echo $links["view"];
						print "<br/>";
						}
					print "</div>";
				}
			print '</div>';
			}
		?>
	
	</div>
</div>
	
	