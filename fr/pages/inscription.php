<?php
// Set custom page title for SEO
$page_title = 'Inscription - Rejoignez la Crèche Minibulle Casablanca | Processus Simple';

include '../header.php';
?>
<body	class="wp-singular page-template-default page page-id-20 wp-custom-logo wp-theme-grand-academy-pro-premium no-sidebar full-width menu-sticky section-title-font-18 header-font-1 body-font-11">
<?php
include '../topbar.php';
?>

		<div id="content" class="site-content">
			<div id="page-site-header"
				style="background-image: url('<?php echo $base_path; ?>assets/images/cropped_cropped.jpg');">
				<div class="overlay"></div>
				<header class='page-header'>
					<div class="wrapper">
						<h2 class="page-title">Inscription</h2>
					</div><!-- .wrapper -->
				</header>
			</div><!-- #page-site-header -->
			<div class="wrapper page-section">
				<div id="primary" class="content-area">
					<main id="main" class="site-main" role="main">


					<div class="container-card-inscription">
						<div class="card">
							<p>Les Jeunes Marcheurs</p>
							<img src="<?php echo $base_path; ?>assets/images/petit3.jpg" alt="Crèche Minibulle Casablanca">
							<div class="zigzag"></div>
							<p>8h15 à 12h00 <br> et <br> 14h00 à 16h30</p>
						</div>
						<div class="card">
							<p>La Maternelle:</p>
							<img src="<?php echo $base_path; ?>assets/images/petit4.jpg" alt="Crèche Minibulle Casablanca">
							<div class="zigzag"></div>
							<p>8h15 à 12h00 <br> et <br> 14h00 à 16h30</p>
						</div>
						<div class="card">
							<p>Les Jeunes Marcheurs</p>
							<img src="<?php echo $base_path; ?>assets/images/25.jpg" alt="Crèche Minibulle Casablanca">
							<div class="zigzag"></div>
							<p>Les mercredis après-midi jusqu'à 16h <br> et <br> Pendant les vacances scolaires</p>
						</div>
					</div>


						<article id="post-20" class="post-20 page type-page status-publish hentry">
							<div class="entry-content">
								<!-- Include the inscription form CSS -->
								<link rel="stylesheet" href="<?php echo $base_path; ?>assets/css/inscription-form.css">
								
								<div class="inscription-section">
									<h2>Formulaire d'Inscription en Ligne<br>
									</h2>
									
									<?php
									// Display success or error messages
									if (isset($_GET['status'])) {
										if ($_GET['status'] == 'success') {
											$email_status = isset($_GET['email_status']) ? $_GET['email_status'] : 'unknown';
											
											if ($email_status == 'email_sent') {
												echo '<div class="alert alert-success">
													<strong>Inscription réussie!</strong> Votre demande d\'inscription a été envoyée avec succès. Notre équipe a été notifiée et vous contactera dans les plus brefs délais.
												</div>';
											}  else {
												echo '<div class="alert alert-success">
													<strong>Inscription réussie!</strong> Votre demande d\'inscription a été envoyée avec succès.
												</div>';
											}
										} elseif ($_GET['status'] == 'error') {
											echo '<div class="alert alert-error">
												<strong>Erreur!</strong> Une erreur s\'est produite lors de l\'envoi de votre inscription. Veuillez réessayer.
											</div>';
										}
									}
									?>
									
									<form id="inscription-form" method="POST" action="process_inscription.php">
										<div class="form-container">
											
											<div class="form-header">
												<h3 class="form-title">Demande d'Inscription</h3>
												<p class="form-subtitle">Veuillez remplir tous les champs obligatoires (*)</p>
											</div>
											
											<div class="form-section">
												<h3 class="section-title">Informations du Parent</h3>
												
												<div class="form-grid">
													<div class="form-field">
														<label for="nom_parent">Nom du Parent *</label>
														<input type="text" id="nom_parent" name="nom_parent" required placeholder="Nom de famille">
													</div>
													
													<div class="form-field">
														<label for="prenom_parent">Prénom du Parent *</label>
														<input type="text" id="prenom_parent" name="prenom_parent" required placeholder="Prénom">
													</div>
												</div>
												
												<div class="form-grid">
													<div class="form-field">
														<label for="telephone">Téléphone *</label>
														<input type="tel" id="telephone" name="telephone" required placeholder="+212 6 12 34 56 78">
													</div>
													
													<div class="form-field">
														<label for="email_parent">Email *</label>
														<input type="email" id="email_parent" name="email_parent" required placeholder="exemple@email.com">
													</div>
												</div>
											</div>
											
											<div class="form-section">
												<h3 class="section-title"> Informations de l'Enfant</h3>
												
												<div class="form-grid">
													<div class="form-field">
														<label for="nom_enfant">Nom de l'Enfant *</label>
														<input type="text" id="nom_enfant" name="nom_enfant" required placeholder="Nom de famille">
													</div>
													
													<div class="form-field">
														<label for="prenom_enfant">Prénom de l'Enfant *</label>
														<input type="text" id="prenom_enfant" name="prenom_enfant" required placeholder="Prénom">
													</div>
												</div>
												
												<div class="form-grid">
													<div class="form-field">
														<label for="age_enfant">Âge de l'Enfant *</label>
														<select id="age_enfant" name="age_enfant" required>
															<option value="">Sélectionnez l'âge</option>
															<option value="3 mois">3 mois</option>
															<option value="6 mois">6 mois</option>
															<option value="9 mois">9 mois</option>
															<option value="1 an">1 an</option>
															<option value="18 mois">18 mois</option>
															<option value="2 ans">2 ans</option>
															<option value="3 ans">3 ans</option>
															<option value="4 ans">4 ans</option>
															<option value="5 ans">5 ans</option>
															<option value="6 ans">6 ans</option>
														</select>
													</div>
													
													<div class="form-field">
														<label for="date_naissance">Date de Naissance *</label>
														<input type="date" id="date_naissance" name="date_naissance" required>
													</div>
												</div>
											</div>
											
											
											<div class="submit-container">
												<button type="submit" id="submit-btn">
													<span>Soumettre l'Inscription</span>
												</button>
											</div>
										</div>
									</form>
								</div>
								

								
								<script>
								// Enhanced form validation and user experience
								document.getElementById('inscription-form').addEventListener('submit', function(e) {
									const requiredFields = this.querySelectorAll('[required]');
									let isValid = true;
									let firstErrorField = null;
									
									// Remove previous error/success classes
									requiredFields.forEach(function(field) {
										field.classList.remove('field-error', 'field-success');
									});
									
									// Validate each required field
									requiredFields.forEach(function(field) {
										if (!field.value.trim()) {
											field.classList.add('field-error');
											isValid = false;
											if (!firstErrorField) {
												firstErrorField = field;
											}
										} else {
											// Additional validation for email
											if (field.type === 'email' && !isValidEmail(field.value)) {
												field.classList.add('field-error');
												isValid = false;
												if (!firstErrorField) {
													firstErrorField = field;
												}
											} else {
												field.classList.add('field-success');
											}
										}
									});
									
									if (!isValid) {
										e.preventDefault();
										
										// Scroll to first error field
										if (firstErrorField) {
											firstErrorField.scrollIntoView({ behavior: 'smooth', block: 'center' });
											firstErrorField.focus();
										}
										
										// Show error message
										showMessage('Veuillez remplir tous les champs obligatoires correctement.', 'error');
									} else {
										// Show loading state
										const submitBtn = document.getElementById('submit-btn');
										submitBtn.innerHTML = '<span>⏳ Envoi en cours...</span>';
										submitBtn.disabled = true;
									}
								});
								
								// Email validation function
								function isValidEmail(email) {
									const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
									return emailRegex.test(email);
								}
								
								// Show message function
								function showMessage(message, type) {
									const alertClass = type === 'error' ? 'alert-error' : 'alert-success';
									const bgColor = type === 'error' ? '#f8d7da' : '#d4edda';
									const textColor = type === 'error' ? '#721c24' : '#155724';
									const borderColor = type === 'error' ? '#f5c6cb' : '#c3e6cb';
									
									const messageDiv = document.createElement('div');
									messageDiv.innerHTML = `
										<div class="alert ${alertClass}" style="background-color: ${bgColor}; color: ${textColor}; padding: 15px; margin: 20px 0; border: 1px solid ${borderColor}; border-radius: 5px;">
											<strong>${type === 'error' ? 'Erreur!' : 'Succès!'}</strong> ${message}
										</div>
									`;
									
									const form = document.getElementById('inscription-form');
									form.parentNode.insertBefore(messageDiv, form);
									
									// Auto-remove message after 5 seconds
									setTimeout(() => {
										messageDiv.remove();
									}, 5000);
								}
								
								// Auto-format phone number
								document.getElementById('telephone').addEventListener('input', function(e) {
									let value = e.target.value.replace(/\D/g, '');
									if (value.startsWith('212')) {
										value = '+' + value;
									} else if (value.startsWith('0')) {
										value = '+212 ' + value.substring(1);
									} else if (!value.startsWith('+')) {
										value = '+212 ' + value;
									}
									e.target.value = value;
								});
								
								// Set max date for birth date (today)
								document.getElementById('date_naissance').max = new Date().toISOString().split('T')[0];
								</script>
							</div><!-- .entry-content -->

						</article><!-- #post-## -->

					</main><!-- #main -->
				</div><!-- #primary -->

				<aside id="secondary" class="widget-area" role="complementary">
					<aside id="block-2" class="widget widget_block widget_search">
						<form role="search" method="get" action="https://crecheminibulle.ma/"
							class="wp-block-search__button-outside wp-block-search__text-button wp-block-search"><label
								class="wp-block-search__label" for="wp-block-search__input-1">Rechercher</label>
							<div class="wp-block-search__inside-wrapper "><input class="wp-block-search__input"
									id="wp-block-search__input-1" placeholder="" value="" type="search" name="s"
									required=""><button aria-label="" class="wp-block-search__button wp-element-button"
									type="submit"></button></div>
						</form>
					</aside>
					<aside id="search-1" class="widget widget_search">
						<form role="search" method="get" class="search-form" action="https://crecheminibulle.ma/">
							<label>
								<span class="screen-reader-text">Search for:</span>
								<input type="search" class="search-field" placeholder="Search ..." value="" name="s"
									title="Search for:">
							</label>
							<button type="submit" class="search-submit" value="Search"><i
									class="fas fa-search"></i></button>
						</form>
					</aside>
					<aside id="recent-posts-1" class="widget widget_recent_entries">
						<h2 class="widget-title">Articles récents</h2>
						<ul>
							<li>
								<a href="../2025/07/21/0xfb7a3601/index.htm">0xfb7a3601</a>
							</li>
							<li>
								<a href="../2025/05/29/0x1c8c5b6a-3/index.htm">0x1c8c5b6a</a>
							</li>
							<li>
								<a href="../2025/05/03/0x1c8c5b6a-2/index.htm">0x1c8c5b6a</a>
							</li>
							<li>
								<a href="../2025/05/03/0x1c8c5b6a/index.htm">0x1c8c5b6a</a>
							</li>
							<li>
								<a href="../2024/04/23/les-bienfaits-dune-creche-trilingue/index.htm">Les Bienfaits
									d’une Crèche Trilingue</a>
							</li>
						</ul>

					</aside>
					<aside id="recent-comments-1" class="widget widget_recent_comments">
						<h2 class="widget-title">Commentaires récents</h2>
						<ul id="recentcomments"></ul>
					</aside>
					<aside id="archives-1" class="widget widget_archive">
						<h2 class="widget-title">Archives</h2>
						<ul>
							<li><a href='../2025/07/index.htm'>juillet 2025</a></li>
							<li><a href='../2025/05/index.htm'>mai 2025</a></li>
							<li><a href='../2024/04/index.htm'>avril 2024</a></li>
							<li><a href='../2021/10/index.htm'>octobre 2021</a></li>
							<li><a href='../2021/09/index.htm'>septembre 2021</a></li>
							<li><a href='../2021/08/index.htm'>août 2021</a></li>
							<li><a href='../2021/07/index.htm'>juillet 2021</a></li>
							<li><a href='../2021/06/index.htm'>juin 2021</a></li>
							<li><a href='../2021/05/index.htm'>mai 2021</a></li>
							<li><a href='../2021/04/index.htm'>avril 2021</a></li>
							<li><a href='../2021/03/index.htm'>mars 2021</a></li>
							<li><a href='../2021/02/index.htm'>février 2021</a></li>
							<li><a href='../2021/01/index.htm'>janvier 2021</a></li>
							<li><a href='../2020/12/index.htm'>décembre 2020</a></li>
							<li><a href='../2020/11/index.htm'>novembre 2020</a></li>
							<li><a href='../2020/10/index.htm'>octobre 2020</a></li>
							<li><a href='../2020/09/index.htm'>septembre 2020</a></li>
							<li><a href='../2020/08/index.htm'>août 2020</a></li>
							<li><a href='../2020/07/index.htm'>juillet 2020</a></li>
							<li><a href='../2020/06/index.htm'>juin 2020</a></li>
							<li><a href='../2020/05/index.htm'>mai 2020</a></li>
							<li><a href='../2020/04/index.htm'>avril 2020</a></li>
						</ul>

					</aside>
					<aside id="categories-2" class="widget widget_categories">
						<h2 class="widget-title">Catégories</h2>
						<ul>
							<li class="cat-item cat-item-20"><a href="../category/learning/index.htm">Learning</a>
							</li>
							<li class="cat-item cat-item-1"><a
									href="../category/uncategorized/index.htm">Uncategorized</a>
							</li>
						</ul>

					</aside>
					<aside id="meta-1" class="widget widget_meta">
						<h2 class="widget-title">Méta</h2>
						<ul>
							<li><a href="../wp-login.php.html">Connexion</a></li>
							<li><a href="../feed/index.htm">Flux des publications</a></li>
							<li><a href="../comments/feed/index.htm">Flux des commentaires</a></li>

							<li><a href="https://fr.wordpress.org/">Site de WordPress-FR</a></li>
						</ul>

					</aside>
				</aside><!-- #secondary -->
			</div>
		</div>
<?php
include '../footer.php';
?>