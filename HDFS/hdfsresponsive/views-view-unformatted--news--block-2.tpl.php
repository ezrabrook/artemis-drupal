<?php
// $Id: views-view-unformatted-news-block-2.tpl.php,v 1.6 2008/10/01 20:52:11 merlinofchaos Exp $
/**
 * @file views-view-unformatted.tpl.php
 * Update the Featured page block to show the ids in a row. 
 *
 * @ingroup custom templates
 */
?>
<?php
  $last=count($rows) - 1;
?>
<?php if (!empty($title)): ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>
<?php foreach ($rows as $id => $row): ?>
  <?php if (!($id & 1)): // if this an even row id, open the <div> ?>
    <div class="row clearfix">
  <?php endif; ?>
  <div class="col-md-6">
	<?php if ($classes_array[$id]) { print ' class="' . $classes_array[$id] .'"';  } ?>
		<?php print $row; ?>
  </div>
  <?php if ($id==$last || ($id & 1)): // if this the last or an odd row id, close the <div> ?>
    </div>
  <?php endif; ?>
<?php endforeach; ?>