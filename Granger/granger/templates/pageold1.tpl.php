<?php
?>


<div id="wrapper">
   <div id="page-container">
	<div id="header">
		<?php print render($page['header']); ?>
		<?php if ($logo): ?>
              <img src="<?php print $logo ?>" alt="Granger Intranet" title="Granger Intranet" id="logo" />
            <?php endif; ?>
	    <div id="main-menu">
			<?php
			$menu = menu_navigation_links('main-menu');
			print theme('links__main-menu', array('links' => $menu));
			?>
		</div>
		
	</div> <!-- /#header -->

	<div id="main">
	<div class="dots"></div>
		<?php if ($page['highlighted']): ?><div id="highlighted"><?php print render($page['highlighted']); ?></div><?php endif; ?>
		<a id="main-content"></a>
		<?php if ($tabs): ?><div id="tabs-wrapper" class="clearfix"><?php endif; ?>
		<?php if ($tabs): ?><?php print render($tabs); ?></div><?php endif; ?>
		<?php print render($tabs2); ?>
		<?php print $messages; ?>
		<?php print render($page['help']); ?>
		<?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
		<div class="main_content">
			<?php print $breadcrumb; ?>
			<h1><?php print $title ?></h1>
			<?php print render($page['content']); ?>
		</div>
	</div> <!-- /#main -->

	<div id="footer">
	<div class="dots"></div>
		<div class="granger_footer"> 
		16980 WOOD ROAD • LANSING, MICHIGAN 48906-1044 • 1-888-9GRANGER (1-888-947-2643) 
		</div>
		<div class="granger_copyright">
		Copyright © <?php echo date ("Y");?> Granger III and Associates, LLC
		</div>
		<?php print render($page['footer']); ?>
	</div> <!-- /#footer -->
	</div> <!--/#page-container -->
</div> <!-- /#wrapper -->