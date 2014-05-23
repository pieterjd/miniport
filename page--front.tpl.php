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
				<ul class="container">
					<li><a href="#top">Top</a></li>
					<li><a href="#work">Work</a></li>
					<li><a href="#portfolio">Portfolio</a></li>
					<li><a href="#contact">Contact</a></li>
				</ul>
			</nav>

		<!-- Home -->
			<div class="wrapper wrapper-style1 wrapper-first">
				<article class="container" id="top">
					<div class="row">
						<div class="4u">
							<span class="me image image-full"><img src="images/me.jpg" alt="" /></span>
						</div>
						<div class="8u">
							<header>
								<h1>Hi. I'm <strong>Jane Doe</strong>.</h1>
							</header>
							<p>And this is <strong>Miniport</strong>, a free, fully responsive HTML5 site template designed by <a href="http://n33.co/">AJ</a> for <a href="http://html5up.net/">HTML5 UP</a> &amp; released under the <a href="http://html5up.net/license/">CCA license</a>.</p>
							<a href="#work" class="button button-big">Learn about what I do</a>
						</div>
					</div>
				</article>
			</div>

		<!-- Work -->
			<div class="wrapper wrapper-style2">
				<article id="work">
					<header>
						<h2>I design and build amazing things.</h2>
						<span>Odio turpis amet sed consequat eget posuere consequat.</span>
					</header>
					<div class="container">
						<div class="row">
							<div class="4u">
								<section class="box box-style1">
									<span class="fa featured fa-comments-o"></span>
									<h3>Consequat lorem</h3>
									<p>Ornare nulla proin odio consequat sapien vestibulum ipsum primis sed amet consequat lorem dolore.</p>
								</section>
							</div>
							<div class="4u">
								<section class="box box-style1">
									<span class="fa featured fa-file-o"></span>
									<h3>Lorem dolor tempus</h3>
									<p>Ornare nulla proin odio consequat sapien vestibulum ipsum primis sed amet consequat lorem dolore.</p>
								</section>
							</div>
							<div class="4u">
								<section class="box box-style1">
									<span class="fa featured fa-thumbs-o-up"></span>
									<h3>Feugiat posuere</h3>
									<p>Ornare nulla proin odio consequat sapien vestibulum ipsum primis sed amet consequat lorem dolore.</p>
								</section>
							</div>
						</div>
					</div>
					<footer>
						<p>Lorem ipsum dolor sit sapien vestibulum ipsum primis?</p>
						<a href="#portfolio" class="button button-big">See some of my recent work</a>
					</footer>
				</article>
			</div>

		<!-- Portfolio -->
			<div class="wrapper wrapper-style3">
				<article id="portfolio">
					<header>
						<h2>Awesome work makes happy clients.</h2>
						<span>Proin odio consequat  sapien vestibulum ipsum primis sed amet consequat lorem dolore feugiat lorem ipsum dolore.</span>
					</header>
					<div class="container">
						<div class="row">
							<div class="12u">
							</div>
						</div>
						<div class="row">
							<div class="4u">
								<article class="box box-style2">
									<a href="http://flypixel.com/generic-smartphone/8949517882265310" class="image image-full"><img src="images/portfolio01.jpg" alt="" /></a>
									<h3><a href="http://flypixel.com/generic-smartphone/8949517882265310">Magna feugiat</a></h3>
									<p>Ornare nulla proin odio consequat.</p>
								</article>
							</div>
							<div class="4u">
								<article class="box box-style2">
									<a href="http://flypixel.com/n33" class="image image-full"><img src="images/portfolio02.jpg" alt="" /></a>
									<h3><a href="http://flypixel.com/n33">Veroeros primis</a></h3>
									<p>Ornare nulla proin odio consequat.</p>
								</article>
							</div>
							<div class="4u">
								<article class="box box-style2">
									<a href="http://flypixel.com/wood-ui-kit/3574765984616310" class="image image-full"><img src="images/portfolio03.jpg" alt="" /></a>
									<h3><a href="http://flypixel.com/wood-ui-kit/3574765984616310">Lorem ipsum</a></h3>
									<p>Ornare nulla proin odio consequat.</p>
								</article>
							</div>
						</div>
						<div class="row">
							<div class="4u">
								<article class="box box-style2">
									<a href="http://flypixel.com/n33-pattern-set-1/3522389001865317" class="image image-full"><img src="images/portfolio04.jpg" alt="" /></a>
									<h3><a href="http://flypixel.com/n33-pattern-set-1/3522389001865317">Tempus dolore</a></h3>
									<p>Ornare nulla proin odio consequat.</p>
								</article>
							</div>
							<div class="4u">
								<article class="box box-style2">
									<a href="http://flypixel.com/cityscape/9803996277226316" class="image image-full"><img src="images/portfolio05.jpg" alt="" /></a>
									<h3><a href="http://flypixel.com/cityscape/9803996277226316">Feugiat aliquam</a></h3>
									<p>Ornare nulla proin odio consequat.</p>
								</article>
							</div>
							<div class="4u">
								<article class="box box-style2">
									<a href="http://flypixel.com/n33" class="image image-full"><img src="images/portfolio06.jpg" alt="" /></a>
									<h3><a href="http://flypixel.com/n33">Sed amet ornare</a></h3>
									<p>Ornare nulla proin odio consequat.</p>
								</article>
							</div>
						</div>
					</div>
					<footer>
						<p>Lorem ipsum dolor sit sapien vestibulum ipsum primis?</p>
						<a href="#contact" class="button button-big">Get in touch with me</a>
					</footer>
				</article>
			</div>

		<!-- Contact -->
			<div class="wrapper wrapper-style4">
				<article id="contact" class="container small">
					<header>
						<h2>Want to hire me? Get in touch!</h2>
						<span>Ornare nulla proin odio consequat sapien vestibulum ipsum sed lorem.</span>
					</header>
					<div>
						<div class="row">
							<div class="12u">
								<form method="post" action="#">
									<div>
										<div class="row half">
											<div class="6u">
												<input type="text" name="name" id="name" placeholder="Name" />
											</div>
											<div class="6u">
												<input type="text" name="email" id="email" placeholder="Email" />
											</div>
										</div>
										<div class="row half">
											<div class="12u">
												<input type="text" name="subject" id="subject" placeholder="Subject" />
											</div>
										</div>
										<div class="row half">
											<div class="12u">
												<textarea name="message" id="message" placeholder="Message"></textarea>
											</div>
										</div>
										<div class="row">
											<div class="12u">
												<a href="#" class="button form-button-submit">Send Message</a>
												<a href="#" class="button button-alt form-button-reset">Clear Form</a>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
						<div class="row">
							<div class="12u">
								<hr />
								<h3>Find me on ...</h3>
								<ul class="social">
									<li class="twitter"><a href="http://twitter.com/n33co" class="fa fa-twitter"><span>Twitter</span></a></li>
									<li class="facebook"><a href="#" class="fa fa-facebook"><span>Facebook</span></a></li>
									<li class="dribbble"><a href="http://dribbble.com/n33" class="fa fa-dribbble"><span>Dribbble</span></a></li>
									<li class="linkedin"><a href="#" class="fa fa-linkedin"><span>LinkedIn</span></a></li>
									<li class="tumblr"><a href="#" class="fa fa-tumblr"><span>Tumblr</span></a></li>
									<li class="googleplus"><a href="#" class="fa fa-google-plus"><span>Google+</span></a></li>
									<li class="github"><a href="http://github.com/n33" class="fa fa-github"><span>Github</span></a></li>
									<!--
									<li class="rss"><a href="#" class="fa fa-rss"><span>RSS</span></a></li>
									<li class="instagram"><a href="#" class="fa fa-instagram"><span>Instagram</span></a></li>
									<li class="foursquare"><a href="#" class="fa fa-foursquare"><span>Foursquare</span></a></li>
									<li class="skype"><a href="#" class="fa fa-skype"><span>Skype</span></a></li>
									<li class="soundcloud"><a href="#" class="fa fa-soundcloud"><span>Soundcloud</span></a></li>
									<li class="youtube"><a href="#" class="fa fa-youtube"><span>YouTube</span></a></li>
									<li class="blogger"><a href="#" class="fa fa-blogger"><span>Blogger</span></a></li>
									<li class="flickr"><a href="#" class="fa fa-flickr"><span>Flickr</span></a></li>
									<li class="vimeo"><a href="#" class="fa fa-vimeo"><span>Vimeo</span></a></li>
									-->
								</ul>
								<hr />
							</div>
						</div>
					</div>
					<footer>
						<ul id="copyright">
							<li>&copy; 2013 Jane Doe</li>
							<li>Images: <a href="http://fotogrph.com">fotogrph</a></li>
							<li>Design: <a href="http://html5up.net/">HTML5 UP</a></li>
						</ul>
					</footer>
				</article>
			</div>

