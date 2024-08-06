<?php /* Template Name:Home Page */ ?>



<?php get_header(); ?>



<section id="home">

    <div class="fixed-columns">

        <div class="row" id="hero-banner-row">

            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">

                <h1><?php echo get_field ('hero_section_text');?></h1>

                <p><?php echo get_field ('hero_section_description');?></p>

                <div class="hero-cta-button">

                    <a href="mailto:mumpredict@contacts.bham.ac.uk">Contact Us</a>

                </div>

            </div>

            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
            <?php 
$heroimage = get_field('hero_section_image');
if( !empty( $heroimage ) ): ?>
                <img alt="Mum-predict" src="<?php echo esc_url($heroimage['url']); ?>"
              
                    class="mumpredict-heroimage">
                    <?php endif; ?>
            </div>

        </div>

    </div>

</section>

<section id="universities-collaboration">

    <div class="fixed-columns">

        <div class="center-div">

            <h2>List of Universities</h2>

        </div>

        <div class="unviversities-list">
        <?php 
    
    $universitiesImages = get_field('collaboration_universities'); 

    if ($universitiesImages): 
        foreach ($universitiesImages as $universityImage): ?>
            <div class="universities-item">
                <img src="<?php echo esc_url($universityImage['url']); ?>" 
                     alt="<?php echo esc_attr($universityImage['alt']); ?>" 
                     class="university-logos" />
            </div>
        <?php endforeach;
    endif; ?>

          



        </div>

    </div>

</section>

<section id="mumpredict-challenges">

    <div class="fixed-columns">

        <div class="row">

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12">

                <h3><?php echo get_field ('challeges_heading');?></h3>

                <p><?php echo get_field ('challenges_description');?>

                </p>

                <div class="challenges-btn-div">

                    <a href="<?php echo home_url(); ?>/resources/">Read about our researches</a>

                </div>

            </div>

            

        </div>

    </div>

</section>

<section id="the-research">

    <div class="fixed-columns">

        <div class="row">

            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
            <?php 
// Retrieve the YouTube URL from the ACF field
$youtube_url = get_field('youtube_url'); // Replace 'youtube_url' with the actual name of your ACF field

if ($youtube_url):
    // Convert the URL to embed URL format if necessary
    $embed_url = preg_replace('/(?:https?:\/\/)?(?:www\.)?youtube\.com\/watch\?v=([^\s&]+)/', 'https://www.youtube.com/embed/$1', $youtube_url);
    $embed_url = preg_replace('/(?:https?:\/\/)?(?:www\.)?youtu\.be\/([^\s&]+)/', 'https://www.youtube.com/embed/$1', $embed_url);
    ?>

    <iframe class="youtube-video" 
            src="<?php echo esc_url($embed_url); ?>" 
            frameborder="0" 
            allowfullscreen>
    </iframe>
<?php else: ?>
    <p>No YouTube URL provided.</p>
<?php endif; ?>

            </div>

            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 col-order">

                <h3><?php echo get_field ('research_heading');?></h3>

                <p><?php echo get_field ('research_description');?></p>


            </div>



        </div>

    </div>

</section>





<section id="multidisciplinary-team">

    <div class="fixed-columns">

        <div class="row">

            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 col-order">

                <h3><?php echo get_field ('team_heading');?></h3>

                <p><?php echo get_field ('team_description');?></p>

                <div class="team-cta-btn">

                    <a href="<?php echo home_url(); ?>/team/">View our Team</a>

                </div>

            </div>

            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
            <?php 
$teamimage = get_field('team_image');
if( !empty( $teamimage ) ): ?>
                <img src="<?php echo esc_url($teamimage['url']); ?>"

                    class="multidisciplinary-team-img" />
                    <?php endif; ?>
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