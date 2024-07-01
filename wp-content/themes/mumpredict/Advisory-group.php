<?php /* Template Name:Advisory Group Page */ ?>

<?php get_header(); ?>
<section id="advisory-group">
    <div class="fixed-columns">
        <div class="center-div">
            <h1>External Advisory Group Members</h1>

            <div class="row">
                <?php
              
                $args = array(
                    'post_type' => 'advisorygroup', 
                    'posts_per_page' => -1, 
                );

                $query = new WP_Query($args);

                // Check if there are posts
                if ($query->have_posts()) {
                    while ($query->have_posts()) : $query->the_post();

                        // Get ACF fields
                        $person_image = get_field('person_image');
                        $title = get_the_title();
                        $designation = get_field('designation');
                ?>
                        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                            <div class="team-cards">
                                <img src="<?php echo esc_url($person_image['url']); ?>" alt="<?php echo esc_attr($person_image['alt']); ?>" />
                                <h3><?php echo esc_html($title); ?></h3>
                                <p><?php echo esc_html($designation); ?></p>
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
    </div>
</section>


<?php get_footer(); ?>