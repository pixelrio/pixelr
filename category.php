<?php
/**
* A Simple Category Template
*/
 
get_header(); ?> 
 
<section id="primary" class="site-content">
  <div id="content" role="main">
    <div class="container <?php echo $classes; ?>" id="<?php echo esc_attr($id); ?>">
      <?php if ( have_posts() ) : ?>
        <div class="row">
          <div class="col mt-5 mb-4">
            <h1><?php single_cat_title( '', true ); ?></h1>
            <p>
              <?php echo category_description(); ?> 
            </p>
          </div>
          <div class="col mt-5 text-end pt-4">
            <a href="<?php echo site_url() . "/blog";?>" class="btn btn-tertiary btn-sm">Blog</a>
          </div>
        </div>
        <div class="row mb-5">
          <?php
              while ( have_posts() ) : the_post();
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
          ?>
      </div>
      <?php endif; ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>