<?php
// Set custom page title for SEO
$page_title = 'Contact Us - Minibulle Nursery Casablanca | Information & Visit';

include '../header.php';
?>
<body class="wp-singular page-template-default page page-id-25 wp-custom-logo wp-theme-grand-academy-pro-premium no-sidebar full-width menu-sticky section-title-font-18 header-font-1 body-font-11">
<?php
include '../topbar.php';
?>

		<div id="content" class="site-content">
			<div id="page-site-header"
				style="background-image: url('<?php echo $base_path; ?>assets/images/cropped_cropped.jpg');">
				<div class="overlay"></div>
				<header class='page-header'>
					<div class="wrapper">
						<h2 class="page-title font-cherry-title">Contact</h2>
					</div><!-- .wrapper -->
				</header>
			</div><!-- #page-site-header -->
			<div class="wrapper page-section">
				<div id="primary" class="content-area">
					<main id="main" class="site-main" role="main">


						<article id="post-25" class="post-25 page type-page status-publish hentry">
							<div class="entry-content">
								<!-- <h2>Discover the world of Minibulle Nursery!</h2>
								<h2>+212 669-439363<br> -->
								</h2>

								<div class="formulair-contact">
									<h2>To schedule your visit, simply fill out the form below.</h2>

									<?php
									// Display success/error messages
									if (isset($_GET['status'])) {
										if ($_GET['status'] == 'success') {
											echo '<div class="alert alert-success" style="background-color: #d4edda; color: #155724; padding: 15px; margin: 20px 0; border: 1px solid #c3e6cb; border-radius: 5px;">';
											echo '<strong>Success!</strong> Your visit request has been submitted successfully. We will contact you soon!';
											if (isset($_GET['email_status']) && $_GET['email_status'] == 'email_sent') {
												echo '<br><em>A confirmation email has been sent to your email address.</em>';
											}
											echo '</div>';
										} elseif ($_GET['status'] == 'error') {
											echo '<div class="alert alert-error" style="background-color: #f8d7da; color: #721c24; padding: 15px; margin: 20px 0; border: 1px solid #f5c6cb; border-radius: 5px;">';
											echo '<strong>Error!</strong> ';
											if (isset($_GET['reason'])) {
												if ($_GET['reason'] == 'validation') {
													echo 'Please fill in all required fields correctly.';
												} elseif ($_GET['reason'] == 'save_failed') {
													echo 'An error occurred while saving your request. Please try again.';
												}
											} else {
												echo 'An error occurred. Please try again.';
											}
											echo '</div>';
										}
									}
									?>

									<div class="visit-container">
										<form class="visit-form" method="POST" action="process_contact.php">
											<label for="nom">Last Name:</label>
											<input type="text" id="nom" name="nom" required>

											<label for="prenom">First Name:</label>
											<input type="text" id="prenom" name="prenom" required>

											<label for="email">Email:</label>
											<input type="email" id="email" name="email" required>

											<label for="tel">Phone:</label>
											<input type="tel" id="tel" name="tel" required>

											<button type="submit">Send</button>
										</form>

										<!-- Right Text -->
										<div class="visit-text">
											<h3 class="text-center">Visit Request:</h3>
											<p>If you have any questions or inquiries, please do not hesitate to contact us.</p>
											<p>You can also visit us at one of our open house days.</p>
											<p>We will be delighted to welcome you to our Bubble.</p>
											<p>Your children will be able to participate in one of our creative workshops while we show you our facilities and introduce you to our educational team.</p>
											<p>Detailed programs for our open house days will be available on our social networks. Subscribe to our pages now!</p>
										</div>
									</div>
								</div>
								
								<div class="list-contact">
									<h2>We invite you to experience an immersion in our nursery and discover:</h2>
								
									<ul>
										<li>Our learning spaces, designed to promote children's autonomy and creativity;</li>
										<li>Our passionate educational team, who ensure the well-being and development of each child;</li>
										<li>Our innovative educational approaches, combining playful learning and soft skills development.</li>
										<li>And that's not all! While you explore our premises, your children can enjoy our play area.</li>
									</ul>

									
								</div>
								<div class="reseau">
									<h2>Follow us on our social networks to stay informed of our news.</h2>
									<strong>We will be delighted to welcome you soon!</strong>
									
									<div class="d-flex">
										<a href="https://www.instagram.com/crecheminibulle/#" target="_blank"><br>
											<svg viewbox="0 0 448 512" xmlns="http://www.w3.org/2000/svg" class="instagram-svg">
												<path
													d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z">
												</path>
											</svg>
										</a>
										<a href="https://web.facebook.com/profile.php?id=61571194665268" target="_blank"><br>
											<svg viewbox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"  class="facebook-svg">
												<path
													d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z">
												</path>
											</svg>
										</a>
									</div>
								</div>
								<div class="maps">
									<h2>Minibulle Nursery, 27 Rue de Guise, Casablanca 20290</h2>
								<iframe loading="lazy"
										src="https://maps.google.com/maps?q=Cr%C3%A8che%20minibulle%2C%2027%20Rue%20de%20Guise%2C%20Casablanca%2020290&t=m&z=16&output=embed&iwloc=near"
										title="Minibulle Nursery, 27 Rue de Guise, Casablanca 20290"
										aria-label="Minibulle Nursery, 27 Rue de Guise, Casablanca 20290"></iframe>
								</div>
								
							</div><!-- .entry-content -->

						</article><!-- #post-## -->

					</main><!-- #main -->
				</div><!-- #primary -->
			</div>
		</div>
<?php
include '../footer.php';
?>