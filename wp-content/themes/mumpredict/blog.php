<?php /* Template Name:Blog Page */ ?>

<?php get_header(); ?>

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
            'posts_per_page' => -1,
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
    </div>
</div>
</section>

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

</script> -->
<?php get_footer(); ?>