<?php
// $Id: node.tpl.php,v 1.5 2007/10/11 09:51:29 goba Exp $
?>
<div class="row" id="nonfaculty-<?php print $node->nid; ?>" class="personview nonfaculty node<?php if ($sticky) { print ' sticky'; } ?><?php if (!$status) { print ' node-unpublished'; } ?>">
	<div id="profile">
				<?php if($field_responsive_photo[0]["filepath"]) echo "t\t<div class=\"col-md-3 col-sm-6 col-xs-6\" id=\"card\"><img class=\"img-responsive faculty_image_landing\" src=\"". $field_responsive_photo[0]["filepath"]. ">";
					 elseif($field_photo[0]["filepath"]) echo "\t\t<div class=\"col-md-3 col-sm-6 col-xs-6\" id=\"card\"><img class=\"img-responsive faculty_image_landing\" src=\"/". $field_photo[0]["filepath"]. "\">";?>
						
				</div>
				<div class="col-md-9 col-sm-6 col-xs-6">
					
					<h2><?php echo $title; ?></h2>
					<h3 class="faculty_nf_position"><?php echo $field_nf_position[0]["view"]; ?></h3>
					
				</div>
		<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12" id="extendedbio">
					<?php if($field_bio[0]["value"]) echo "\t\t<h3 class=\"hidden-xs bio_title\">Bio</h3>\n\t\t<div class=\"bio_content\">". $field_bio[0]["value"]."\n</div>"; ?>
				</div>
				<div class="visible-xs">
				<?php if($field_bio[0]["value"]) echo "\t\t<h3 class=\"visible-xs bio_title\">Bio</h3>\n\t\t<div class=\"bio_content_summary\">". $field_bio[0]["value"]."\n</div>"; ?>
				</div>	
		</div>
	</div>
</div>

