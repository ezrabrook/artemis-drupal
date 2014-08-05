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
              <img src="<?php print $logo ?>" alt="Granger Intranet" title="Granger Intranet" id="logo" />
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
			<div class="login_intranet"> <?php
		// split the username and password so we can put the form links were we want (they are in the "user-login-links" div bellow)
			print drupal_render($form['name']);
			print drupal_render($form['pass']);
			?>
			</div>

			<?php
				// render login button
			print drupal_render($form['form_build_id']);
			print drupal_render($form['form_id']);
			print drupal_render($form['actions']);
			?>

<!-- /user-login-custom-form -->
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