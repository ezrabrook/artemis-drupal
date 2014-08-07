<?php
// $Id: page.tpl.php,v 1.18.2.1 2009/04/30 00:13:31 goba Exp $
?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">
	<head>
		<?php print $head ?>
		<title><?php print htmlentities($head_title); ?></title>
		<?php print $styles ?>
		<script type="text/javascript" src="//code.jquery.com/jquery-1.11.1.min.js"></script>
		<script>
			var jq111 = jQuery.noConflict();
		</script>
		<script src="/sites/all/themes/hdfsresponsive/js/bootstrap.js"></script>
		<?php print $scripts ?>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
	</head>

	<body<?php print phptemplate_body_class($left, $right); ?>>
		<div class="wrapper">
			<div id="top_bar"></div>
			<div id="top_header">
				<div class="inner_frame">
					<div class="row">
						<div class="col-md-3 col-sm-4 col-xs-9 logo_wrapper">
							<div class="hdfs_logo">
								<a class="text-hide hidden-xs" href="/"><img class="img-responsive" src="/sites/all/themes/hdfsresponsive/css/images/logo.png" width="232" height="45" alt="Human Development and Family Studies" /></a>
								<a class="text-hide visible-xs" href="/"><img class="img-responsive" src="/sites/all/themes/hdfsresponsive/css/images/logo2.png" width="433" height="155" alt="Human Development and Family Studies" /></a>
							</div>
							<div class="search_bar hidden-sm hidden-xs">
								<?php echo $search_box; ?>
							</div>
						</div>
						<div class="col-sm-5 col-xs-2 search_wrapper hidden-xs visible-sm">
							<div class="search_bar">
								<div class="hidden-xs">
									<?php echo $search_box; ?>
								</div>
								<div class="mobile_search_icon visible-xs">
									<button class="search-toggle visible-xs visible-sm" data-target=".mobile_search" type="button" data-toggle="collapse">
										<span class="glyphicon glyphicon-search"></span>
									</button>
								</div>
							</div>
						</div>
						<div class="col-md-9 col-sm-3 col-xs-3 menu_wrapper">
							<div class="main_menu">
								<div class="visible-lg visible-md">
									<?php
									echo theme("links", $primary_links, array("id"=>"primarylinks"));
									?>
								</div>
								<span class="hidden-xs">
									<?php
										global $user;
										if ($user->uid != 0) {
										  // code for the logout button
										  echo '<a class="login_button" href="/logout">Log out</a>';
										}
										else {
										  // code for the login button
										  echo '<a class="login_button" href="/user">Login</a>';
										}
									?>
								</span>
								<button class="navbar-toggle visible-xs visible-sm" data-target=".menu_collapse" type="button" data-toggle="collapse">
									<span class="sr-only">Toggle Navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="mobile_tablet_menu">
				<div class="row">
					<div class="col-sm-12 col-xs-12 no-padding">
					</div>
					<div class="col-sm-12 col-xs-12 no-padding">
						<div class="menu_collapse collapse" role="navigation">
							<div class="mobile_search">
								<?php echo $search_box; ?>
							</div>
							<div class="visible-xs visible-sm">
								<?php
									echo theme("links", $primary_links, array("id"=>"primarylinks"));
								?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="main" class="news-page">
				<div class="inner_frame">
					<div class="row">
						<div class="sub_content_area">
							<div class="col-md-12 col-sm-12 col-xs-12">
								<?php if(($node->type != "faculty") && ($node->type != "area_of_focus")): echo '<h1 id="pagetitle-news">' . $title .'</h1>'; endif; ?>
								<?php if ($tabs): print '<div id="tabs-wrapper">'; endif; ?>
								<?php if ($tabs): print '<ul class="tabs primary">'. $tabs .'</ul></div>'; endif; ?>
								<?php if ($tabs2): print '<ul class="tabs secondary">'. $tabs2 .'</ul>'; endif; ?>
								<?php if ($show_messages && $messages): print $messages; endif; ?>
								<?php print $content ?>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
			</div>
			<div id="footer">
				<div class="inner_frame">
					<div class="row">
						<div class="col-md-3 col-sm-12 copyright_wrapper">
							<div class="copyright_text">
								Human Development and Family Studies<br />
								College of Social Science <br />
								&copy; <?php echo date('Y'); ?> Michigan State University Board of Trustees <br/>
								East Lansing, MI 48824
							</div>
						</div>
						<div class="col-md-5 col-sm-7 footer_links_wrapper hidden-xs">
							<div class="footer_links">
								<a class="donations" href="/about-hdfs/giving-donations">Donations</a>
								<a class="sitemap" href="/sitemap">Sitemap</a>
								<a class="contact" href="/contact">Contact</a>
							</div>
						</div>
						<div class="col-xs-12 visible-xs mobile_footer_links">
							<div class="mobile_link mobile_contact">
								<a class="text-hide" href="/contact">Contact</a>
							</div>
							<div class="mobile_link mobile_sitemap">
								<a class="text-hide" href="/sitemap">Sitemap</a>
							</div>
							<div class="mobile_link mobile_donations">
								<a class="text-hide" href="/about-hdfs/giving-donations">Donations</a>
							</div>
						</div>
						<div class="col-md-1 col-sm-2 col-xs-3 social_science_wrapper">
							<div class="social_science">
								<img width="79" height="61" src="/sites/all/themes/hdfsresponsive/css/images/social_science_logo.png" class="img-responsive" />
							</div>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-6 msu_logo_wrapper">
							<div class="msu_logo">
								<img width="204" height="45" src="/sites/all/themes/hdfsresponsive/css/images/msu_logo.png" class="img-responsive" />
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php print $closure ?>
	</body>
</html>
