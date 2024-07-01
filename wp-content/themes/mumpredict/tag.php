<?php /* Template Name:Blog Page */ ?>

<?php get_header(); ?>

<section id="blog-div-section">
<div class="fixed-columns">
<div class="center-div">

</div>
<div class="blog-list-items">
        <?php
          $qObject = get_queried_object();
          $isArchiveTag = (($qObject->taxonomy == 'post_tag')?true:false);
        $args = array(
            'post_type'      => 'post',
            'orderby'        => 'date',
            'order'          => 'DESC',
            'posts_per_page' => -1,
            'tag' => (($isArchiveTag)?$qObject->slug:'')  
        );
        $query = new WP_Query($args);
        if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post();
                ?>
                <div class="blog-content-card">
                    <div class="blog-cards">
                        <a href="<?php the_permalink(); ?>">
                         
                        
                            <h4><?php the_title(); ?></h4>
                            <p><?php echo wp_trim_words(get_the_content(), 10); ?></p>

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
<?php get_footer(); ?>