<?php
// Set custom page title and image for SEO
$page_title = 'Minibulle - Crèche & Maternelle Trilingue Premium à Rabat Maroc';

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
                                    <h2 class="entry-title" style="font-size: 52px;">Bienvenue dans notre crèche Minibulle !</h2>
                                </header>
                                <div class="entry-content">
                                    Minibulle est une crèche avec un concept innovant, reposant sur un programme trilingue et une pédagogie
                                    multiple afin de stimuler les capacités métacognitives et métalinguistiques chez les enfants à bas âge.
                                 </div><!-- .entry-content -->

                                <div class="read-more">
                                    <a href="<?php echo $nav_pages; ?>inscription.php" class="btn btn-primary">Comment inscrire mon enfant
                                        ?</a>

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
                                    <h2 class="entry-title" style="font-size: 52px;">Un programme éducatif qui révèle les talents</h2>
                                </header>
                                <div class="entry-content">
                                    A la crèche MiniBulle chaque bénéficie d’un accompagnement personnalisé pour cultiver
                                    sa curiosité et renforcer sa confiance en lui. Grace à des enseignantes passionnées
                                    et des pratiques pédagogiques modernes, vos enfants développeront non seulement leurs
                                    compétences académiques mais aussi leurs softskills comme la communication et 
                                    l’adaptation. </div><!-- .entry-content -->

                                <div class="read-more">
                                    <a href="<?php echo $nav_pages; ?>contact.php" class="btn btn-primary">Contactez-nous</a>

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
                                    <h2 class="entry-title" style="font-size: 20px;"><a href="#">Trilinguisme</a></h2>
                                </header>
                                <div class="entry-content">
                                    Les enfants développent leur curiosité et ouvrent leur esprit grâce à un
                                    apprentissage trilingue. Cette approche stimule leurs capacités métacognitives et
                                    améliore leur concentration. </div><!-- .entry-content -->
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
                                    <h2 class="entry-title" style="font-size: 20px;"><a href="#">Pédagogie multiple</a>
                                    </h2>
                                </header>
                                <div class="entry-content">
                                    Nous intégrons différentes pédagogies pour répondre aux besoins spécifiques de
                                    chaque enfant. L’objectif est d’adapter l’apprentissage à leur rythme et à leurs
                                    intérêts. </div><!-- .entry-content -->
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
                                    <h2 class="entry-title" style="font-size: 20px;"><a href="#">Psychomotricité</a>
                                    </h2>
                                </header>
                                <div class="entry-content">
                                    L’approche psychomotrice aide les enfants à mieux comprendre leur corps. Elle
                                    favorise la coordination, l’équilibre, la posture, la motricité et l’interaction
                                    avec leur environnement. </div><!-- .entry-content -->
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
                                    <h2 class="entry-title" style="font-size: 20px;"><a href="#">L’Éveil</a></h2>
                                </header>
                                <div class="entry-content">
                                    Les enfants explorent et découvrent le monde à travers des activités variées. Cette
                                    approche stimule leur curiosité naturelle et enrichit leur développement global.
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
                                    <h2 class="entry-title" style="font-size: 20px;"><a href="#">Horaires flexibles</a>
                                    </h2>
                                </header>
                                <div class="entry-content">
                                    Nos programmes s’adaptent aux besoins des parents avec des options disponibles les
                                    mercredis et samedis. Cette flexibilité permet un accueil personnalisé. </div>
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
                                    <h2 class="entry-title" style="font-size: 20px;"><a href="#">Diversité des
                                            activités</a></h2>
                                </header>
                                <div class="entry-content">
                                    Les enfants participent à divers ateliers pédagogiques, artistiques et créatifs. Ils
                                    explorent la danse, la musique et les arts pour un développement enrichissant.
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
                                    <h2 class="entry-title"><a href="contact/index.htm">Mot de la directrice</a></h2>
                                </header>

                                <div class="entry-content">
                                    Nous adoptons le trilinguisme qui ouvre les horizons de vos enfants et leur permet
                                    de s&#039;exprimer dans plusieurs langues. Notre approche bienveillante encourage
                                    l&#039;autonomie, la confiance en soi et le développement de la personnalité unique
                                    de chaque enfant.

                                    Notre équipe est impatiente de vous apporter son soutien et de contribuer à
                                    l&#039;épanouissement pédagogique de votre enfant.

                                    Notre Crèche Minibulle accueille les enfants âgés de 4 mois à 5 ans pour une
                                    première expérience en collectivité réussie. </div><!-- .entry-content -->

                                <div class="read-more">
                                    <a href="contact/index.htm" class="btn btn-primary">Meriem - Directrice
                                        pédagogique</a>
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
                            <h2 class="section-title">Nos Minibulles</h2>
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
                                        <h2 class="entry-title"><a href="#">Nurserie & Pouponnière</a></h2>
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
                                        <h2 class="entry-title"><a href="#">Toute Petite Section</a></h2>
                                    </header>

                                    <div class="entry-content">
                                        Toute petite section ;
                                        Petite section ;
                                        (2-3 ans) </div><!-- .entry-content -->
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
                                        <h2 class="entry-title"><a href="#">Petite Section</a></h2>
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
                                        <h2 class="entry-title"><a href="#">Moyenne Section</a></h2>
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
                        <h2 class="section-title">Prêt à nous rejoindre ?</h2>
                        <p>La Crèche Minibulle est un environnement chaleureux, moderne et adapté aux tout-petits.
                            Notre programme trilingue et nos approches pédagogiques innovantes favorisent l'éveil,
                            l'autonomie et le développement des enfants.</p>
                    </div><!-- .section-header -->

                    <div class="read-more">
                        <a href="<?php echo $nav_pages; ?>inscription.php" class="btn btn-primary">Inscrire mon enfant</a>
                    </div><!-- .read-more -->
                </div><!-- .wrapper -->
            </section>

            <section id="testimonial" class="page-section">
                <div class="wrapper">

                    <div class="section-header">
                        <h2 class="section-title">Avis des Parents</h2>
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
                                    l’entretien avec les enseignants était agréable. Je vous souhaite bonne continuation. </div><!-- .entry-content -->
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
                                    On est satisfait de l’évolution de Ali. Nos enfants sont heureux à l’école c’est le plus important. </div><!-- .entry-content -->
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
                                    Nous sommes très heureux de cette crèche. Nous remarquons que Razan va bien. </div>
                                <!-- .entry-content -->
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
                                    Nous sommes très satisfaits de la qualité de l’établissement. Samy est très bien accueilli. Il a développé un bon vocabulaire ce semestre et aussi ses compétences sociales.</div><!-- .entry-content -->
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
                                    Niveau d’épanouissement est très bien. Niveau d’apprentissage, on constate qu’il apprend de nouvelles choses, nous sommes satisfaits.</div><!-- .entry-content -->
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
                                    Thanks a lot for all what you did for my daughter. I appreciate your effort and
                                    engagement.
                                    We are so proud of you. </div><!-- .entry-content -->
                            </div><!-- .entry-container -->
                        </article><!-- .slick-item -->
                    </div><!-- .testimonial-slider-wrapper -->
                </div>
            </section>
        </div>

<?php
include './footer.php';
?>