<?php
// Set custom page title and image for SEO
$page_title = 'Minibulle - Premium Nursery & Kindergarten in Rabat Morocco';

include './header.php';
?>
<body  class="home wp-singular page-template-default page page-id-2 wp-custom-logo wp-theme-grand-academy-pro-premium no-sidebar full-width menu-sticky our-team-disabled section-title-font-18 header-font-1 body-font-11">
<?php
include './topbar.php';
?>

        <div id="content" class="site-content">
            <section id="featured-slider">
                <div class="featured-slider-wrapper"
                    data-slick='{"slidesToShow": 1, "slidesToScroll": 1, "infinite": true, "speed": 1000, "dots": true, "arrows":true, "autoplay": true, "fade": true }'>
                    <article class="slick-item"
                        style="background-image: url('<?php echo $base_path; ?>assets/images/andrew_ebrahim.jpg');">
                        <div class="overlay" style="opacity: 0.4;"></div>
                        <div class="wrapper">

                            <div class="featured-content-wrapper">
                                <header class="entry-header">
                                    <h2 class="entry-title" style="font-size: 52px;">Welcome to Minibulle Daycare!</h2>
                                </header>
                                <div class="entry-content">
                                    Minibulle Daycare offers an innovative concept built around a trilingual program and a variety of modern teaching methodologies designed to stimulate young children’s metacognitive and metalinguistic abilities.</div><!-- .entry-content -->

                                <div class="read-more">
                                    <a href="<?php echo $nav_pages; ?>inscription.php" class="btn btn-primary">How to enroll my child?</a>

                                </div><!-- .read-more -->
                            </div><!-- .featured-content-wrapper -->
                        </div><!-- .wrapper -->
                    </article><!-- .slick-item -->
                    <article class="slick-item"
                        style="background-image: url('<?php echo $base_path; ?>assets/images/pexels_natalie.jpg');">
                        <div class="overlay" style="opacity: 0.4;"></div>
                        <div class="wrapper">

                            <div class="featured-content-wrapper">
                                <header class="entry-header">
                                    <h2 class="entry-title" style="font-size: 52px;">An Educational Program That Uncovers Every Child’s Potential</h2>
                                </header>
                                <div class="entry-content">
                                    At Minibulle Daycare, each child receives personalized support that nurtures curiosity, creativity, and self-confidence.
                                    <br>
                                    Through playful learning experiences, children develop not only strong academic foundations but also essential life skills — such as communication, collaboration, and adaptability — preparing them for a bright and confident future.
                                </div><!-- .entry-content -->

                                <div class="read-more">
                                    <a href="<?php echo $nav_pages; ?>contact.php" class="btn btn-primary">Contact Us</a>

                                </div><!-- .read-more -->
                            </div><!-- .featured-content-wrapper -->
                        </div><!-- .wrapper -->
                    </article><!-- .slick-item -->
                </div><!-- .featured-slider-wrapper -->
                <img src="<?php echo $base_path; ?>assets/images/cloud-up.png" class="cloud-bg">
            </section>

            <section id="our-services" class="page-section">
                <div class="wrapper">

                    <div class="section-content clear col-3">

                        <article>
                            <div class="service-item-wrapper">
                                <div class="icon-container">
                                    <a href="#" >
                                        <span class="petal"></span>
                                        <span class="petal"></span>
                                        <span class="petal"></span>
                                        <span class="petal"></span>
                                        <span class="petal"></span>
                                        <i class="fas fa-globe" style="font-size: 42px;"></i>
                                    </a>
                                </div><!-- .icon-container -->


                                <header class="entry-header">
                                    <h2 class="entry-title" style="font-size: 20px;"><a href="#">Trilingualism</a></h2>
                                </header>
                                <div class="entry-content">
                                    Children develop their curiosity and open-mindedness through a trilingual learning approach.
                                    This method stimulates their metacognitive abilities and enhances their focus and concentration.
                                    </div><!-- .entry-content -->
                            </div><!-- .service-item-wrapper -->
                        </article>

                        <article>
                            <div class="service-item-wrapper">
                                <div class="icon-container">
                                    <a href="#" >
                                        <span class="petal"></span>
                                        <span class="petal"></span>
                                        <span class="petal"></span>
                                        <span class="petal"></span>
                                        <span class="petal"></span>
                                        <i class="fas fa-lightbulb" style="font-size: 42px;"></i>
                                    </a>
                                </div><!-- .icon-container -->


                                <header class="entry-header">
                                    <h2 class="entry-title" style="font-size: 20px;"><a href="#">Multiple Pedagogies</a>
                                    </h2>
                                </header>
                                <div class="entry-content">
                                   We integrate various teaching approaches to meet each child’s unique needs.
                                    The goal is to tailor learning to their individual pace and personal interests.
                                    </div><!-- .entry-content -->
                            </div><!-- .service-item-wrapper -->
                        </article>

                        <article>
                            <div class="service-item-wrapper">
                                <div class="icon-container">
                                    <a href="#" >
                                        <span class="petal"></span>
                                        <span class="petal"></span>
                                        <span class="petal"></span>
                                        <span class="petal"></span>
                                        <span class="petal"></span>
                                        <i class="fas fa-child" style="font-size: 42px;"></i>
                                    </a>
                                </div><!-- .icon-container -->


                                <header class="entry-header">
                                    <h2 class="entry-title" style="font-size: 20px;"><a href="#">Psychomotricity</a>
                                    </h2>
                                </header>
                                <div class="entry-content">
                                    The psychomotor approach helps children develop a better understanding of their bodies.
                                    It promotes coordination, balance, posture, motor skills, and positive interaction with their environment.
                                    </div><!-- .entry-content -->
                            </div><!-- .service-item-wrapper -->
                        </article>

                        <article>
                            <div class="service-item-wrapper">
                                <div class="icon-container">
                                    <a href="#" >
                                        <span class="petal"></span>
                                        <span class="petal"></span>
                                        <span class="petal"></span>
                                        <span class="petal"></span>
                                        <span class="petal"></span>
                                        <i class="fas fa-seedling" style="font-size: 42px;"></i>
                                    </a>
                                </div><!-- .icon-container -->


                                <header class="entry-header">
                                    <h2 class="entry-title" style="font-size: 20px;"><a href="#">Awakening</a></h2>
                                </header>
                                <div class="entry-content">
                                    Children explore and discover the world through a variety of activities.
                                    This approach stimulates their natural curiosity and enhances their overall development.
                                </div><!-- .entry-content -->
                            </div><!-- .service-item-wrapper -->
                        </article>

                        <article>
                            <div class="service-item-wrapper">
                                <div class="icon-container">
                                    <a href="#" >
                                        <span class="petal"></span>
                                        <span class="petal"></span>
                                        <span class="petal"></span>
                                        <span class="petal"></span>
                                        <span class="petal"></span>
                                        <i class="fas fa-clock" style="font-size: 42px;"></i>
                                    </a>
                                </div><!-- .icon-container -->


                                <header class="entry-header">
                                    <h2 class="entry-title" style="font-size: 20px;"><a href="#">Flexible Hours</a>
                                    </h2>
                                </header>
                                <div class="entry-content">
                                    Our programs adapt to parents’ needs, with options available on Wednesdays and Saturdays.
                                    This flexibility allows for personalized care tailored to each family’s schedule.
                                    </div>
                                <!-- .entry-content -->
                            </div><!-- .service-item-wrapper -->
                        </article>

                        <article>
                            <div class="service-item-wrapper">
                                <div class="icon-container">
                                    <a href="#" >
                                        <span class="petal"></span>
                                        <span class="petal"></span>
                                        <span class="petal"></span>
                                        <span class="petal"></span>
                                        <span class="petal"></span>
                                        <i class="fas fa-palette" style="font-size: 42px;"></i>
                                    </a>
                                </div><!-- .icon-container -->


                                <header class="entry-header">
                                    <h2 class="entry-title" style="font-size: 20px;"><a href="#">Variety of Activities</a></h2>
                                </header>
                                <div class="entry-content">
                                    Children take part in a range of educational, artistic, and creative workshops.
                                    They explore dance, music, and the arts for a truly enriching developmental experience.
                                </div><!-- .entry-content -->
                            </div><!-- .service-item-wrapper -->
                        </article>
                    </div><!-- .section-content -->
                </div>
                <img src="<?php echo $base_path; ?>assets/images/cloud-down.png" class="cloud-bg">
            </section>

            <section id="about-us" class="page-section">
                <div class="wrapper">

                    <div class="section-content">



                        <article>

                            <div class="featured-image"
                                style="background-image: url('<?php echo $base_path; ?>assets/images/creche_jeux.jpeg');">
                                <a href="contact/index.htm" class="post-thumbnail-link"></a>
                            </div><!-- .featured-image -->

                            <div class="entry-container">
                                <header class="entry-header">
                                    <h2 class="entry-title"><a href="contact/index.htm">A Message from the Director</a></h2>
                                </header>

                                <div class="entry-content">
                                    We embrace a trilingual approach that broadens your children's horizons and enables them to express
                                    themselves in multiple languages. Our nurturing methodology fosters independence, self-confidence,
                                    and the development of each child's unique personality. Our team is eager to support you and contribute
                                    to your child's educational growth. Our Minibulle Daycare welcomes children from 3 months to 5 years old, 
                                    ensuring a successful first group experience.
                                 </div><!-- .entry-content -->

                                <div class="read-more">
                                    <a href="contact/index.htm" class="btn btn-primary">Meriem - Educational
                                        Director</a>
                                </div><!-- .read-more -->
                            </div><!-- .entry-container -->
                        </article>
                    </div>
                </div>
            </section>

            <section id="our-courses" class="page-section">
                <img src="<?php echo $base_path; ?>assets/images/cloud-top.png" class="cloud-bg">
                <div class="wrapper">

                    <div class="section-header">
                        <div class="wrapper">
                            <h2 class="section-title">Our Minibulles</h2>
                        </div><!-- .wrapper -->
                    </div><!-- .section-header -->

                    <div class="section-content clear">


                        <article>
                            <div class="featured-course-wrapper" >
                                <div class="featured-image"
                                    style="background-image: url('<?php echo $base_path; ?>assets/images/petit.jpg');">
                                    <a href="#" class="post-thumbnail-link"></a>
                                </div><!-- .featured-image -->

                                <div class="entry-container">
                                    <header class="entry-header">
                                        <h2 class="entry-title"><a href="#">Nursery & Infant Room</a></h2>
                                    </header>

                                    <div class="entry-content">
                                        (3-24 mois) </div><!-- .entry-content -->
                                </div><!-- .entry-container -->
                            </div><!-- .featured-course-wrapper -->
                        </article>


                        <article>
                            <div class="featured-course-wrapper" >
                                <div class="featured-image"
                                    style="background-image: url('<?php echo $base_path; ?>assets/images/petit2.jpg');">
                                    <a href="#" class="post-thumbnail-link"></a>
                                </div><!-- .featured-image -->

                                <div class="entry-container">
                                    <header class="entry-header">
                                        <h2 class="entry-title"><a href="#">Pre-Nursery / Toddler Class</a></h2>
                                    </header>

                                    <div class="entry-content">
                                        Very small section;
                                        Small section;
                                        (2-3 years) </div><!-- .entry-content -->
                                </div><!-- .entry-container -->
                            </div><!-- .featured-course-wrapper -->
                        </article>


                        <article>
                            <div class="featured-course-wrapper" >
                                <div class="featured-image"
                                    style="background-image: url('<?php echo $base_path; ?>assets/images/petit3.jpg');">
                                    <a href="#" class="post-thumbnail-link"></a>
                                </div><!-- .featured-image -->

                                <div class="entry-container">
                                    <header class="entry-header">
                                        <h2 class="entry-title"><a href="#">Preschool</a></h2>
                                    </header>

                                    <div class="entry-content">
                                        (3-4 ans) </div><!-- .entry-content -->
                                </div><!-- .entry-container -->
                            </div><!-- .featured-course-wrapper -->
                        </article>


                        <article>
                            <div class="featured-course-wrapper" >
                                <div class="featured-image"
                                    style="background-image: url('<?php echo $base_path; ?>assets/images/petit4.jpg');">
                                    <a href="#" class="post-thumbnail-link"></a>
                                </div><!-- .featured-image -->

                                <div class="entry-container">
                                    <header class="entry-header">
                                        <h2 class="entry-title"><a href="#">Preschool 2</a></h2>
                                    </header>

                                    <div class="entry-content">
                                        (4-5 ans) </div><!-- .entry-content -->
                                </div><!-- .entry-container -->
                            </div><!-- .featured-course-wrapper -->
                        </article>
                    </div><!-- .section-content -->
                </div>
            </section>




            <section id="video"
                style="background-image: url('<?php echo $base_path; ?>assets/images/bbc_creative.jpg');">

                <div class="overlay" style="opacity: 0.6;"></div>
                <div class="wrapper">
                    <div class="video-button">
                        <a href="" class="popup-youtube">
                            <i class="fas fa-play"></i>
                        </a>
                    </div><!-- .video-button -->

                    <div class="section-header">
                        <h2 class="section-title">Ready to Join Us?</h2>
                        <p>Crèche Minibulle is a warm, modern environment tailored for young children.
                            Our trilingual program and innovative educational approaches stimulate children's
                            awakening, autonomy, and development.</p>
                    </div><!-- .section-header -->

                    <div class="read-more">
                        <a href="<?php echo $nav_pages; ?>inscription.php" class="btn btn-primary">Enroll my child</a>
                    </div><!-- .read-more -->
                </div><!-- .wrapper -->
            </section>

            <section id="testimonial" class="page-section">
                <div class="wrapper">

                    <div class="section-header">
                        <h2 class="section-title">Parent Reviews</h2>
                    </div><!-- .section-header -->

                    <div class="testimonial-slider-wrapper"
                        data-slick='{"slidesToShow": 1, "slidesToScroll": 1, "infinite": true, "speed": 800, "dots": false, "arrows":true, "autoplay": false, "fade": false }'
                        style="background-image: url('<?php echo $base_path; ?>assets/images/testimonial-bg.jpg');">
                        <article class="slick-item">
                            <div class="featured-image">
                                <img src="<?php echo $base_path; ?>assets/images/testimonial.jpg">
                            </div><!-- .featured-image -->

                            <div class="entry-container">
                                <header class="entry-header">
                                    <h2 class="entry-title">Khalid</h2>
                                </header>

                                <div class="entry-content">
                                    The meeting with the teachers was pleasant. I wish you all the best.
                                </div><!-- .entry-content -->
                            </div><!-- .entry-container -->
                        </article><!-- .slick-item -->
                        <article class="slick-item">
                            <div class="featured-image">
                                <img src="<?php echo $base_path; ?>assets/images/testimonial.jpg">
                            </div><!-- .featured-image -->

                            <div class="entry-container">
                                <header class="entry-header">
                                    <h2 class="entry-title">Houda</h2>
                                </header>

                                <div class="entry-content">
                                    We are satisfied with Ali's progress. Our children are happy at school — that's what matters most.
                                </div><!-- .entry-content -->
                            </div><!-- .entry-container -->
                        </article><!-- .slick-item -->
                        <article class="slick-item">
                            <div class="featured-image">
                                <img src="<?php echo $base_path; ?>assets/images/testimonial.jpg">
                            </div><!-- .featured-image -->

                            <div class="entry-container">
                                <header class="entry-header">
                                    <h2 class="entry-title">Yassine</h2>
                                </header>

                                <div class="entry-content">
                                    We are very happy with this nursery. We notice that Razan is doing well.
                                </div><!-- .entry-content -->
                            </div><!-- .entry-container -->
                        </article><!-- .slick-item -->
                        <article class="slick-item">
                            <div class="featured-image">
                                <img src="<?php echo $base_path; ?>assets/images/testimonial.jpg">
                            </div><!-- .featured-image -->

                            <div class="entry-container">
                                <header class="entry-header">
                                    <h2 class="entry-title">Hind</h2>
                                </header>

                                <div class="entry-content">
                                    We are very pleased with the quality of the school. Samy has been warmly welcomed; he developed a good vocabulary this semester and improved his social skills.
                                </div><!-- .entry-content -->
                            </div><!-- .entry-container -->
                        </article><!-- .slick-item -->
                        <article class="slick-item">
                            <div class="featured-image">
                                <img src="<?php echo $base_path; ?>assets/images/testimonial.jpg">
                            </div><!-- .featured-image -->

                            <div class="entry-container">
                                <header class="entry-header">
                                    <h2 class="entry-title">Soufiane</h2>
                                </header>

                                <div class="entry-content">
                                    His overall development is excellent. Regarding learning, we see he is learning new things — we are satisfied.
                                </div><!-- .entry-content -->
                            </div><!-- .entry-container -->
                        </article><!-- .slick-item -->
                        <article class="slick-item">
                            <div class="featured-image">
                                <img src="<?php echo $base_path; ?>assets/images/testimonial.jpg">
                            </div><!-- .featured-image -->

                            <div class="entry-container">
                                <header class="entry-header">
                                    <h2 class="entry-title">Abdeladim</h2>
                                </header>

                                <div class="entry-content">
                                    Thanks a lot for all what youd id for my daughter. I appreciate your effort and engagement. We are so proud of you.
                                </div><!-- .entry-content -->
                            </div><!-- .entry-container -->
                        </article><!-- .slick-item -->
                    </div><!-- .testimonial-slider-wrapper -->
                </div>
            </section>
        </div>

<?php
include './footer.php';
?>