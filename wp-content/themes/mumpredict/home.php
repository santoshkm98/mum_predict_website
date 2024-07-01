<?php /* Template Name:Home Page */ ?>

<?php get_header(); ?>

<section id="home">
    <div class="fixed-columns">
        <div class="row" id="hero-banner-row">
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <h1>Research to improve care for pregnant women with 2 or more long-term health conditions.</h1>
                <p>We are a team of experts in Data Science, Obstetrics, Psychological Medicine, Primary Care, and
                    Public Health alongside women with experience of having two or more health conditions that presented
                    before pregnancy. </p>
                <div class="hero-cta-button">
                    <a href="mailto:mumpredict@contacts.bham.ac.uk">Contact Us</a>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <img src="<?php bloginfo('template_directory') ?>/images/mumpredict-hero.webp"
                    class="mumpredict-heroimg">
            </div>
        </div>
    </div>
</section>
<section id="universities-collaboration">
    <div class="fixed-columns">
        <div class="center-div">
            <h2>List Universities collaborated across four countries in the UK</h2>
        </div>
        <div class="unviversities-list">
            <div class="universities-item">
                <img src="<?php bloginfo('template_directory') ?>/images/NHS.png" class="university-logos" />
            </div>
            <div class="universities-item">
                <img src="<?php bloginfo('template_directory') ?>/images/QUB.png" class="university-logos" />
            </div>
            <div class="universities-item">
                <img src="<?php bloginfo('template_directory') ?>/images/Swansea-uni.png" class="university-logos" />
            </div>
            <div class="universities-item">
                <img src="<?php bloginfo('template_directory') ?>/images/Ulster-University.png"
                    class="university-logos" />
            </div>
            <div class="universities-item">
                <img src="<?php bloginfo('template_directory') ?>/images/Uni-of-Aberdeen.png"
                    class="university-logos" />
            </div>
            <div class="universities-item">
                <img src="<?php bloginfo('template_directory') ?>/images/Uni-of-Birmingham.png"
                    class="university-logos" />
            </div>
            <div class="universities-item">
                <img src="<?php bloginfo('template_directory') ?>/images/Uni-of-Keele.png" class="university-logos" />
            </div>
            <div class="universities-item">
                <img src="<?php bloginfo('template_directory') ?>/images/Uni-of-Manchester.png"
                    class="university-logos" />
            </div>
            <div class="universities-item">
                <img src="<?php bloginfo('template_directory') ?>/images/Uni-of-St-Andrews.png"
                    class="university-logos" />
            </div>

        </div>
    </div>
</section>
<section id="mumpredict-challenges">
    <div class="fixed-columns">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 col-12">
                <h3>What challenges are we solving?</h3>
                <p>Some women live with two or more long-term health conditions. They may experience difficulties
                    managing several health conditions and these challenges may increase during pregnancy. <br /> <br />
                    With <b>MuM-PreDiCT</b> we aim to provide deeper understanding of what makes some pregnant women
                    more likely to have two or more long-term health conditions and how this affects them and their
                    children. This will help clinicians improve health services and tailor them to these women's
                    specific needs.
                </p>
                <div class="challenges-btn-div">
                    <a href="<?php echo home_url(); ?>/resources/">Read about our researches</a>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <img src="<?php bloginfo('template_directory') ?>/images/challenges.webp" class="challenges-img" />
            </div>
        </div>
    </div>
</section>
<section id="the-research">
    <div class="fixed-columns">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <iframe class="youtube-video" src="https://www.youtube.com/embed/xGcetoS_WnY">

                </iframe>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 col-order">
                <h3>The Research</h3>
                <p>We're developing research to study and improve maternity care for pregnant women who are managing two
                    or more long-term health conditions.</p>


                <p>We can add some more content here........</p>
            </div>

        </div>
    </div>
</section>


<section id="multidisciplinary-team">
    <div class="fixed-columns">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <img src="<?php bloginfo('template_directory') ?>/images/teamgroup.webp"
                    class="multidisciplinary-team-img" />
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 col-order">
                <h3>Multidisciplinary Team</h3>
                <p>Our team includes experts in Data Science, Obstetrics, Psychological Medicine, Primary Care and
                    Public Health alongside women with experience of having two or more health conditions that presented
                    before pregnancy. We are collaborating with eight academic institutions and NHS partners across all
                    four countries in the UK, and supported by MRC and HDRUK.</p>
                <div class="team-cta-btn">
                    <a href="<?php echo home_url(); ?>/team/">View our Team</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="blog-div-section">
<div class="fixed-columns">
<div class="center-div">
<h1>Read Our Latest Blogs & News</h1>
</div>
<div class="blog-list-items row">
        <?php
        $args = array(
            'post_type'      => 'post',
            'orderby'        => 'date',
            'order'          => 'DESC',
            'posts_per_page' => 3,
        );
        $query = new WP_Query($args);
        if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post();
                ?>
                <div class="blog-content-card col-lg-4 col-md-4 col-sm-12 col-xs-12 col-12">
                    <div class="blog-cards">
                        <a href="<?php the_permalink(); ?>">
                         
                        
                            <h4><?php the_title(); ?></h4>
                            <p class="blog-contents"><?php echo wp_trim_words(get_the_content(), 10); ?></p>

                            <div class="blog-card-contents">
                                <p><?php the_time('F jS, Y'); ?></p>
                                

                            </div>
                            <a href="<?php the_permalink(); ?>" class="read-more-link">Read More</a>
                        </a>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
        <div class="read-more-button">
       <a href="/blog">Read More</a>
        </div>
    </div>
</div>
</section>

<!-- <section id="home-cta">
    <div class="fixed-columns">
<div class="center-div">
<h5>Research <br/> To Improve care for pregnant women with Two or More Health Conditions.  </h5>

<a href="<?php echo home_url(); ?>/experience-about-pregnancy/">Join Now</a>
</div>
</div>
</section> -->

<?php get_footer(); ?>

<script>
    $(".unviversities-list").slick({
        slidesToShow: 3,
        infinite: true,
        slidesToScroll: 3,
        autoplay: true,
        autoplaySpeed: 4000,
        dots: false,
        arrows: true,
        pauseOnHover: true,
        responsive: [

            {

                breakpoint: 1024,

                settings: {

                    slidesToShow: 3,

                    slidesToScroll: 3,

                    infinite: true,

                    dots: false,

                }

            },
            {

                breakpoint: 768,

                settings: {

                    slidesToShow: 2,

                    slidesToScroll: 2,

                    infinite: true,

                    dots: false,
                    arrows: true,

                }

            },
            {

                breakpoint: 460,

                settings: {

                    slidesToShow: 1,

                    slidesToScroll: 1,

                    infinite: true,

                    dots: false,
                    arrows: true

                }

            },
        ]

    });
</script>


<!-- <script>

    $(".blog-list-items").slick({
        slidesToShow: 3,
        infinite: true,
        slidesToScroll: 1,
        autoplay: false,
        autoplaySpeed: 2000,
        dots: true,
        arrows: true,
        pauseOnHover: true,
        responsive: [

{

  breakpoint: 800,

  settings: {

    slidesToShow: 2,

    slidesToScroll: 1,

    infinite: true,

    dots: false,
    arrows: true,

  }

},

{

breakpoint: 600,

settings: {

  slidesToShow: 1,

  slidesToScroll: 1,

  infinite: true,

  dots: false,
  arrows:true

}

},
        ]

    });

</script>    -->