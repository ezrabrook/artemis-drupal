<?php
?>


<div id="wrapper">
   <div id="page-container">
	<div id="header">
			<div id="login_link"><?php global $user; 
				if ($user->uid == 0){
					print l(t('Sign in'), 'user');
					}
				else{
				  print l(t('Log out'), 'user/logout');
			} ?></div>
		<?php print render($page['header']); ?>
		<?php if ($logo): ?>
             <a href="/" ><img src="<?php print $logo ?>" alt="Granger Intranet" title="Granger Intranet" id="logo" /></a>
            <?php endif; ?>
	    <div id="header_right">
	       <div id="header_right_associate">
		  <div class="link"><a href="/associate-directory">Associate Directory</a></div>
		  <div class="search"><?php print render($page['header_right_associate']); ?></div>
		  
	       </div>
	       <div id="header_right_facility">
		  <div class="link"><a href="/facilities-directory">Facilities Directory</a></div>
		  <div class="search"><?php print render($page['header_right_facility']); ?></div>
		  
	       </div>
	    </div>
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
				<div class="image_quotation">
					<?php if ($page['featured']):?><?php print render($page['featured']); ?><?php endif;?>
				</div>
				<?php if ($page['primary_right'] || $page['primary_left']) : ?>
				<div id="primary-wrapper"><div id="primary" class="clearfix">
					  <?php print render($page['primary_right']); ?>
					  <?php print render($page['primary_left']); ?>
				</div></div><!-- /#primary, /#primary-wrapper -->
				<?php endif; ?>
			<?php print render($page['content']); ?>
				<?php if ($page['secondary_right'] || $page['secondary_left']) : ?>
				<div id="secondary-wrapper"><div id="secondary" class="clearfix">
				  <?php print render($page['secondary_right']); ?>
				  <?php print render($page['secondary_left']); ?>
				</div></div> <!-- /#secondary, /#secondary-wrapper -->
				<?php endif; ?>
				<?php if ($page['tertiary_right'] || $page['tertiary_left']) : ?>
				<div id="tertiary-wrapper"><div id="tertiary" class="clearfix">
				  <?php print render($page['tertiary_right']); ?>
				  <?php print render($page['tertiary_left']); ?>
				</div></div> <!-- /#tertiary, /#tertiary-wrapper -->
				<?php endif; ?>
				<div id="bottom">
					<?php print render($page['bottom']);?>
				</div>
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
<script type="text/javascript" src="../js/weather.js"></script>
<script src="../weatherplugin/jquery.simpleWeather.min.js"></script>