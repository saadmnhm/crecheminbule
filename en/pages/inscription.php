<?php
// Set custom page title for SEO
$page_title = 'Enrollment - Join Minibulle Nursery Rabat | Simple Registration Process';

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
						<h2 class="page-title">Registration</h2>
					</div><!-- .wrapper -->
				</header>
			</div><!-- #page-site-header -->
			<div class="wrapper page-section">
				<div id="primary" class="content-area">
					<main id="main" class="site-main" role="main">


						<article id="post-20" class="post-20 page type-page status-publish hentry">
							<div class="entry-content">
								<!-- Include the inscription form CSS -->
								<link rel="stylesheet" href="<?php echo $base_path; ?>assets/css/inscription-form.css">
								
								<div class="inscription-section">
									<h2>Online Registration Form<br>
									</h2>
									
									<?php
									// Display success or error messages
									if (isset($_GET['status'])) {
										if ($_GET['status'] == 'success') {
											$email_status = isset($_GET['email_status']) ? $_GET['email_status'] : 'unknown';
											
											if ($email_status == 'email_sent') {
												echo '<div class="alert alert-success">
													<strong>Registration Successful!</strong> Your registration request has been sent successfully. Our team has been notified and will contact you shortly.
												</div>';
											}  else {
												echo '<div class="alert alert-success">
													<strong>Registration Successful!</strong> Your registration request has been sent successfully.
												</div>';
											}
										} elseif ($_GET['status'] == 'error') {
											echo '<div class="alert alert-error">
												<strong>Error!</strong> An error occurred while sending your registration. Please try again.
											</div>';
										}
									}
									?>
									
									<form id="inscription-form" method="POST" action="process_inscription.php">
										<div class="form-container">
											
											<div class="form-header">
												<h3 class="form-title">Registration Request</h3>
												<p class="form-subtitle">Please fill in all required fields (*)</p>
											</div>
											
											<div class="form-section">
												<h3 class="section-title">Parent Information</h3>
												
												<div class="form-grid">
													<div class="form-field">
														<label for="nom_parent">Parent's Last Name *</label>
														<input type="text" id="nom_parent" name="nom_parent" required placeholder="Last name">
													</div>
													
													<div class="form-field">
														<label for="prenom_parent">Parent's First Name *</label>
														<input type="text" id="prenom_parent" name="prenom_parent" required placeholder="First name">
													</div>
												</div>
												
												<div class="form-grid">
													<div class="form-field">
														<label for="telephone">Phone *</label>
														<input type="tel" id="telephone" name="telephone" required placeholder="+212 6 12 34 56 78">
													</div>
													
													<div class="form-field">
														<label for="email_parent">Email *</label>
														<input type="email" id="email_parent" name="email_parent" required placeholder="example@email.com">
													</div>
												</div>
											</div>
											
											<div class="form-section">
												<h3 class="section-title">Child Information</h3>
												
												<div class="form-grid">
													<div class="form-field">
														<label for="nom_enfant">Child's Last Name *</label>
														<input type="text" id="nom_enfant" name="nom_enfant" required placeholder="Last name">
													</div>
													
													<div class="form-field">
														<label for="prenom_enfant">Child's First Name *</label>
														<input type="text" id="prenom_enfant" name="prenom_enfant" required placeholder="First name">
													</div>
												</div>
												
												<div class="form-grid">
													<div class="form-field">
														<label for="age_enfant">Child's Age *</label>
														<select id="age_enfant" name="age_enfant" required>
															<option value="">Select age</option>
															<option value="3 months">3 months</option>
															<option value="6 months">6 months</option>
															<option value="9 months">9 months</option>
															<option value="1 year">1 year</option>
															<option value="18 months">18 months</option>
															<option value="2 years">2 years</option>
															<option value="3 years">3 years</option>
															<option value="4 years">4 years</option>
															<option value="5 years">5 years</option>
															<option value="6 years">6 years</option>
														</select>
													</div>
													
													<div class="form-field">
														<label for="date_naissance">Date of Birth *</label>
														<input type="date" id="date_naissance" name="date_naissance" required>
													</div>
												</div>
											</div>
											
											
											<div class="submit-container">
												<button type="submit" id="submit-btn">
													<span>Submit Registration</span>
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
                                        	showMessage('Please complete all required fields correctly.', 'error');
                                    } else {
                                        // Show loading state
                                        const submitBtn = document.getElementById('submit-btn');
                                        submitBtn.innerHTML = '<span>⏳ Sending...</span>';
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
											<strong>${type === 'error' ? 'Error!' : 'Success!'}</strong> ${message}
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

			</div>
		</div>
<?php
include '../footer.php';
?>