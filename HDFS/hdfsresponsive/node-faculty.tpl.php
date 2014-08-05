<?php
// $Id: node.tpl.php,v 1.5 2007/10/11 09:51:29 goba Exp $
?>
<div class="row" id="faculty-<?php print $node->nid; ?>" class="personview faculty node<?php if ($sticky) { print ' sticky'; } ?><?php if (!$status) { print ' node-unpublished'; } ?>">
	<div id="profile">
		<div class="col-md-3 col-sm-6 col-xs-6" id="card"><img class="img-responsive faculty_image_landing" src="/<?php echo $field_responsive_photo[0][
				"filepath"];?>">
		
		</div>
				<div class="col-md-9 col-sm-6 col-xs-6">
					
					<h2><?php echo $title; ?></h2>
					<h3 class="faculty_position"><?php echo $field_position[0]["view"]; ?></h3>
					<?php if($field_vitae[0]["view"])echo "\t\t\t<a class=\"visible-xs pdf_vitae\" href=/".$field_vitae[0]["filepath"]."><div class=\"vitae col-md-4\"></div></a>\n"; ?>	
					<div class="col-xs-12 hidden-xs">
					<address><?php echo $field_address[0]["view"]; ?></address>

						<?php
						if($field_email[0]["value"])echo "\t\t\t<a href=\"mailto:".$field_email[0]["value"]."\" title=\"Email ".$title."\"><div class=\"col-md-4 email\">".$field_email[0]["value"]."</div></a>\n";
						
						if($field_phone[0]["value"]) echo "\t\t\t<div class=\"col-md-5 phone\"><span class=\"tel\">".$field_phone[0]["value"]."</span><br/>";
						if($field_fax[0]["value"])	echo "\t\t\t<span class=\"fax\">".$field_fax[0]["value"]."(fax)</span></div>\n";

						?>
						<?php if($field_vitae[0]["view"])echo "\t\t\t<a class=\"hidden-xs pdf_vitae\" href=/".$field_vitae[0]["filepath"]."><div class=\"vitae col-md-3\"></div></a>\n"; ?>
					</div>
				</div>
	
	
		<div class="row">
				<div id="mobileaddress" class="col-xs-12 visible-xs">
				<address><?php echo $field_address[0]["view"]; ?></address>

					<?php
					if($field_email[0]["value"])echo "\t\t\t<a href=\"mailto:".$field_email[0]["value"]."\" title=\"Email ".$title."\"><div class=\"col-md-4 email\">".$field_email[0]["value"]."</div></a>\n";
					
					if($field_phone[0]["value"]) echo "\t\t\t<a href=\"tel:".$field_phone[0]["value"]."\"><div class=\"col-md-4 phone\"><span class=\"tel\">".$field_phone[0]["value"]."</span></a><br/>";
					if($field_fax[0]["value"])	echo "\t\t\t<span class=\"fax\">".$field_fax[0]["value"]."(fax)</span></div>\n";
					?>
				</div>
				<div class="col-md-8 col-sm-12 col-xs-12" id="extendedbio">
					<?php if($field_education[0]["value"]) echo "\t\t<h3 class=\"education\">Education</h3><div class=\"education_content\"\n\t\t<p>".$field_education[0]["value"]."</p></div>\n"; ?>
					<div class="hidden-xs">
					<?php if($field_bio[0]["value"]) echo "\t\t<h3 class=\"hidden-xs bio_title\">Bio</h3>\n\t\t<div class=\"bio_content\">". $field_bio[0]["value"]."\n</div>"; ?>
					</div>
					<div class="visible-xs">
					<?php if($field_bio[0]["value"]) echo "\t\t<h3 class=\"visible-xs bio_title\">Bio</h3>\n\t\t<div class=\"bio_content_summary\">". $field_bio[0]["value"]."\n</div>"; ?>
					</div>
				</div>

				<div class="col-md-3 col-sm-12 col-xs-12" id="extendedinfo">
					<?php if($field_focus[0]["value"]) echo "\t\t<h3 class=\"focus_area\">Focus Area</h3>\n\t\t<div class=\"focus_area_content\"><p>".$field_focus[0]["value"]."</p></div>\n"; ?>
					<?php if($field_interests[0]["value"]) echo "\t\t<h3 class=\"interest\">Areas of Interest</h3>\n\t\t<div class=\"interest_content\"><p>".$field_interests[0]["value"]."</p></div>\n"; ?>
					<?php if($field_website[0]["value"]){
							if(!(strpos($field_website[0]["value"],"http://") === 0)){
								$field_website[0]["value"] = "http://".$field_website[0]["value"];
							}
							echo "\t\t<h3 class=\"website\">Web</h3>\n\t\t<a class=\"website_content\" href=\"".$field_website[0]["value"]."\" rel=\"nofollow\">".$field_website[0]["value"]."</a>\n";
						}
					?>


				<div class="clear"></div>

				<div class="related_section">
					<?php if($field_related_features[0]['view']) echo "\t\t<h3 class=\"related_feature\">Related Features</h3>\n\t\t<div class=\"related_feature_content\"><p>".$field_related_features[0]['view']."</p></div>\n"; ?>
					<?php if($field_related_graduate[0]['view']) echo "\t\t<h3 class=\"related_graduate\">Related Graduate Area of Focus</h3>\n\t\t<div class=\"related_graduate\"><p>".$field_related_graduate[0]['view']."</p></div>\n"; ?>
				</div>
				</div>
		</div>
	</div>
</div>

