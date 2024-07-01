<?php /* Template Name:Team Page */ ?>

<?php get_header(); ?>

<section id="our-team">
    <div class="center-div">
        <h2>Our Team</h2>
    </div>
    <div class="fixed-columns">
        <?php
        // Step 1: Retrieve categories associated with posts of type 'team'
        $categories = get_categories(array(
            'taxonomy' => 'team_cat',  // assuming the taxonomy is 'category'
            'hide_empty' => true,      // only get categories with posts
            'post_type' => 'team'      // specify the custom post type
        ));

        // Step 2: Loop through each category to display posts and their ACF fields
        foreach ($categories as $category) {
            $category_name = $category->name;
            $category_id = $category->term_id;

            // Display category name
            echo '<div class="center-div">';
            echo '<h3>' . $category_name . '</h3>';
            echo '</div>';

            // Query posts from this category and post type 'team'
            $team_posts = new WP_Query(array(
                'post_type' => 'team',
                'posts_per_page' => -1,  // -1 to fetch all posts
                'tax_query' => array(
                    array(
                        'taxonomy' => 'team_cat',
                        'field' => 'term_id',
                        'terms' => $category_id
                    )
                )
            ));

            // Display posts for this category
            if ($team_posts->have_posts()) {
                echo '<div class="row" id="team-div-row">';
                while ($team_posts->have_posts()) {
                    $team_posts->the_post();
                    // Get ACF fields
                    $team_member_photo = get_field('team_member_photo');
                    $designation = get_field('designation');
                    $university = get_field('university');
                    // Display individual team member information
                    echo '<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 col-12">';
                    echo '<div class="team-cards">';
                    echo '<img src="' . esc_url($team_member_photo['url']) . '" class="individual-photos" />';
                    echo '<h4>' . get_the_title() . '</h4>';  // Display post title
                    echo '<p>' . esc_html($designation) . '</p>';  // Display ACF designation field
                    if (!empty($university)) {
                        echo '<p>' . esc_html($university) . '</p>';
                    }
                    echo '</div>';
                    echo '</div>';
                }
                echo '</div>'; // Close row
            }

            wp_reset_postdata(); // Reset the post query
        }
        ?>
    </div>
</section>
<?php get_footer(); ?>