<?php get_header(); ?>

<section id="blog-detail-layout">
<div class="fixed-columns">
<div class="row">
<div class="col-lg-8 col-md-12 col-xs-12 col-sm-12 col-12 blog-details-contents">
<h1><?php the_title(); ?></h1>
<p><?php the_time('F jS, Y'); ?></p>
<?php
// Get the tags associated with the current post
$post_tags = get_the_tags();

if ($post_tags) {
    echo '<div class="post-tags">';
    echo '<span>Tags:</span>';
    foreach ($post_tags as $tag) {
        echo '<a style="    background: transparent !important;
    padding: 0px !important;
    margin: 0px;
    color: #304F79 !important;
    padding-left: 12px !important;" href="' . get_tag_link($tag->term_id) . '">' . $tag->name . '</a>';
    }
    echo '</div>';
}
?>
<?php the_content(); ?>

<div class="nav-for-next-and-prev">
<?php
$next_post = get_next_post();
$prev_post = get_previous_post();
?>

<?php if ($next_post || $prev_post) : ?>
    <div class="navigation">
        <?php if ($prev_post) : ?>
            <div class="nav-previous">
            
                <h6>Previous Post</h6>
                <a style="color:#212529!important; padding:0px!important; text-decoration:underline!important; " class="posts-nav" href="<?php echo get_permalink($prev_post->ID); ?>">
                <i style="font-size:24px; padding-right:25px!important;" class="fa">&#xf053;</i> <?php echo get_the_title($prev_post->ID); ?>
                </a>
            </div>
        <?php endif; ?>

        <?php if ($next_post) : ?>
            <div class="nav-next">
            <h6>Next Post</h6>
                <a style="color:#212529!important;padding:0px!important; text-decoration:underline!important;"  class="posts-nav" href="<?php echo get_permalink($next_post->ID); ?>">
                    <?php echo get_the_title($next_post->ID); ?>
                    <i style="font-size:24px; padding-left:25px!important;" class="fa">&#xf054;</i>
                </a>
            </div>
        <?php endif; ?>
    </div>
<?php endif; ?>
</div>
</div>
<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 col-12">
<div class="recent-posts">
<h3>Recent Posts</h3>
<ul>
      
      <?php $id = get_the_ID();

query_posts( array( 'post_type'=> 'post', 'posts_per_page' => 5, 'orderby' => 'date',  'post__not_in' => array( $id ), 'order' => 'DESC', 'terms'    => array( $id ), ) ); ?>

<?php if( have_posts() ): ?>

<?php while( have_posts() ): the_post();  ?>
          <li><a href="<?php echo get_permalink(); ?>"><?php  $content = get_the_title();

echo strlen($content) <= 40 ?  $content : substr($content, 0, 60)."..."; ?></a></li>
         
         <?php endwhile; endif; ?>
      </ul>
</div>
</div>
</div>
</div>
</section>

<?php get_footer(); ?>