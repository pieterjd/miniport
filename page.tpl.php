<?php

/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 * @see html.tpl.php
 *
 * @ingroup themeable
 */
?>

 <!-- Nav -->
			<nav id="nav">
			  <!--
				<ul class="container">
				  <li><a href="#top">Top</a></li>
					<li><a href="#work">Work</a></li>
					<li><a href="#portfolio">Portfolio</a></li>
					<li><a href="#contact">Contact</a></li>
				</ul>
				-->
				<?php print theme('links__system_main_menu', array(
				  'links' => $main_menu,
				  'attributes' => array(
				    'id' => 'main-menu',
				    'class' => array('container')
				  ), 
				  )); ?>
			</nav>

		<!-- Home -->
			<div class="wrapper wrapper-style1 wrapper-first">
				<!--
				<article id="contact" class="container small">
					<header>
						<h2>Title</h2>
						<span>content</span>
					</header>
					
					
				</article>
				-->
				
				<!-- Logo and slogan -->
				<article class="container" id="top">
					<div class="row">
						<div class="8u">
  						<?php if ($logo): ?>
                <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
                  <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
                </a>
              <?php endif; ?>
						</div>
						<div class="4u">
							<header>
								<h1><?php print $site_name; ?></h1>
								<p> <?php print $site_slogan;  ?></p>
								<a href="#work" class="button button-big">Learn</a>
							</header>
						</div>
					</div><!--End header row-->
					<!--Slogan row-->
					<div class="row">
            <div class="4u"></div>
            <div class="8u">
              <p> <?php print $site_slogan;  ?></p>
            </div>
					</div><!--End slogan row-->
				</article>
				<!-- end logo and slogan -->
				<!-- header region-->
				<div class="row">
				  <?php print render($page['header']); ?>
				</div>
				<!--End header region-->
				
				<!--messages-->
				<?php if ($messages): ?>
				  <div class="container">
            <div id="messages" class="row">
              <?php print $messages; ?>
            </div> <!-- /.section, /#messages -->
          </div>
        <?php endif; ?>
				<!--end messages-->
				
				<!--featured-->
				<?php if ($page['featured']): ?>
				  <div class="container">
            <div id="featured" class="row">
             <?php print render($page['featured']); ?>
            </div> <!-- /.section, /#featured -->
          </div>
        <?php endif; ?>
				<!--End featured-->

    
				<!-- content with left sidebar -->
        <div class="row">
          <div class="4u"><!--Left sidebar-->
            <?php print render($page['sidebar_first']); ?>
          </div><!--End left sidebar-->
          <div class="8u"><!--Content-->
            <article>
              <div class="container">
                <?php if ($page['highlighted']): ?>
                  <div id="highlighted">
                    <?php print render($page['highlighted']); ?>
                  </div>
                <?php endif; ?>
                
                <?php print render($title_prefix); ?>
                <?php if ($title): ?>
                  <h1 class="title" id="page-title">
                    <?php print $title; ?>
                  </h1>
                <?php endif; ?>
                <?php print render($title_suffix); ?> 
                
                <?php if ($tabs): ?>
                  <div class="tabs">
                   <?php print render($tabs); ?>
                  </div>
                <?php endif; ?> 
                
                <?php print render($page['help']); ?>
                
                <?php if ($action_links): ?>
                  <ul class="action-links">
                    <?php print render($action_links); ?>
                  </ul>
                <?php endif; ?>
                
                <?php print render($page['content']); ?>
              </div>
            </article>
          </div><!--End content-->
        </div> 
        <!--End of content with left sidebar row-->
        
        <!-- the triptych part -->
        <?php if ($page['triptych_first'] || $page['triptych_middle'] || $page['triptych_last']): ?>
          <div class="row">
            <div class="4u">
              <?php print render($page['triptych_first']); ?>
            </div>
            <div class="4u">
              <?php print render($page['triptych_middle']); ?>
            </div>
            <div class="4u">
              <?php print render($page['triptych_last']); ?>
            </div>
          </div> <!-- /#triptych, /#triptych-wrapper -->
        <?php endif; ?>
        <!--End of triptych row-->
        <!--footer columns-->
        <?php if ($page['footer_firstcolumn'] || $page['footer_secondcolumn'] || $page['footer_thirdcolumn'] || $page['footer_fourthcolumn']): ?>
          <div id="footer-columns" class="row">
            <div class="3u">
              <?php print render($page['footer_firstcolumn']); ?>
            </div>
            <div class="3u">
              <?php print render($page['footer_secondcolumn']); ?>
            </div>
            <div class="3u">
              <?php print render($page['footer_thirdcolumn']); ?>
            </div>
            <div class="3u">
              <?php print render($page['footer_fourthcolumn']); ?>
            </div>
          </div> <!-- /#footer-columns -->
        <?php endif; ?>
        <!--End of footer columns-->
        <!--Footer-->
        <?php if ($page['footer']): ?>
          <div id="footer" class="row">
            <?php print render($page['footer']); ?>
          </div> <!-- /#footer -->
        <?php endif; ?>
        <!--End of footer-->
			</div> <!-- End div of page wrapper element-->

		


			
