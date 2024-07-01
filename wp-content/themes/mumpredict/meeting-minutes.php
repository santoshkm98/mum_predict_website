<?php /* Template Name: meeting minutes */ ?>

<?php get_header(); ?>

<section id="meeting-minutes">
    <div class="fixed-columns">
        <div class="center-div">
            <h1>Meeting Minutes</h1>
        </div>
        <div class="row">
        <?php
                
                $args = array(
                    'post_type' => 'meetingminute', 
                    'posts_per_page' => -1, 
                );

                $query = new WP_Query($args);

                // Check if there are posts
                if ($query->have_posts()) {
                    while ($query->have_posts()) : $query->the_post();

                        // Get ACF fields
                        
                        $title = get_the_title();
                        $datetime = get_field('date_and_time');
                        $document_url = get_field('document_url');
                ?>
            <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 col-12">
                <div class="resources-card">
                    <img src="<?php bloginfo('template_directory') ?>/images/document-folde-icon.png" />
                    <h3><?php echo esc_html($title); ?></h3>
                    <a href="<?php echo esc_url($document_url); ?>" target="_blank">Read More</a>
                </div>
            </div>
            <?php
                    endwhile;
                    wp_reset_postdata(); // Restore original post data
                } else {
                    // No posts found
                    echo '<p>No advisory group members found.</p>';
                }
                ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>