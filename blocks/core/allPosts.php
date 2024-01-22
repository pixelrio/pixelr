<?php

/**
 * All Posts Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

  $block_name = 'allPosts';

  // Create id attribute allowing for custom "anchor" value.
  $id = $block_name . '-' . $block['id'];
  $classes = $block['className'];

  if ( !empty( $block['anchor'] ) ) {
      $id = $block['anchor'];
  }

  $heading = get_field('heading');
  $cta = get_field('cta');
  $url = get_field('url');

  $args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'orderby' => 'date',
    'order' => 'DESC',
  );
  $posts_query = new WP_Query($args);
  ?>
  
  <div class="container <?php echo $classes; ?>" id="<?php echo esc_attr($id); ?>">
    <div class="row">
      <div class="col mt-5 mb-4">
        <h1><?php echo $heading ;?></h1>
      </div>
      <div class="col mt-5 text-end pt-4">
        <a href="<?php echo get_home_url() . $url ;?>" class="btn btn-tertiary btn-sm"><?php echo $cta ;?></a>
      </div>
    </div>
    <div class="row mb-5">
      <?php
        if ($posts_query->have_posts()) :
          while ($posts_query->have_posts()) : $posts_query->the_post();
        ?>
          <div class="col-xl-4 col-lg-6">
            <div class="card m-2 p-3">
              <a href="<?php the_permalink(); ?>">
                <?php 
                  if (has_post_thumbnail()) {
                    the_post_thumbnail('large'); // You can change 'medium' to other image sizes
                  }
                ?>
              </a>
              <div class="card-body p-0 pt-3">
                <h5 class="card-title" id="<?php echo esc_attr($id); ?>">
                  <a href='<?php the_permalink(); ?>'>
                    <?php the_title(); ?>
                  </a>
                </h5>
                <p class="card-text"><?php the_excerpt(); ?></p>
                <a href="<?php the_permalink(); ?>" class="btn btn-primary btn-sm">Read more!</a>
              </div>
              <div class="card-footer mt-4 p-0 pt-2">
                  <small>
                    <?php the_category(', ') ?>
                  </small>
              </div>
            </div>
          </div>
      <?php
        endwhile;
          wp_reset_postdata(); // Reset the post data to the main loop
        else :
          echo 'No posts found.';
        endif;
      ?>
  </div>
</div>


<style type="text/css">
  #<?php echo $id; ?> .card-title a{
    text-decoration: none;
    color: #000;
  }
  #<?php echo $id; ?> .card-img-top {
    width: 100%;
  }
  #<?php echo $id; ?> .card small{
    margin: 0 5px;
    border-right: 1px solid #000;
    padding-right: 10px;
  }
  #<?php echo $id; ?> .card small:last-child{
    border: none;
  }
  
</style>