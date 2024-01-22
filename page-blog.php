<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package pixelrio
 */

get_header();

// Get all categories
$categories = get_categories();

?>

	<main id="primary" class="site-main">
    <section>
      <div class="container">
        <div class="row">
          <div class="col-lg-10">
            <h1 class="mt-5">Blog</h1>
            <p>
              Welcome to our Blog&mdash;a digital space where knowledge meets impact! Dive into the world of Analytics, Data Science, Web Development, and Digital Marketing with our carefully curated content. While our primary focus is on empowering non-profit professionals with valuable insights, our articles occasionally venture into other industries. 
            </p>
            <p>
              Explore the intersection of technology and purpose, as we share tips, trends, and stories aimed at making a difference. Whether you're delving into analytics, exploring the realms of data science, mastering web development, or navigating the dynamic landscape of digital marketing, our blog is your go-to resource. Join us on this journey where information meets inspiration, and let's create positive change together!
            </p>
          </div>
        </div>
        <div class="row">
            <?php
              // Loop through each category
              foreach ($categories as $category) :
                ?>
                    <h2 class="mt-4"><?php echo esc_html($category->name); ?></h2>
                    <p><?php echo esc_html($category->description); ?></p>
                    <?php
                    // Custom query to retrieve 5 posts from the current category
                    $category_posts_args = array(
                        'category__in' => array($category->term_id),
                        'post_status' => 'publish',
                        'posts_per_page' => 6,
                    );
            ?>
            <?php 
                $category_posts_query = new WP_Query($category_posts_args);
                // Check if there are posts
                if ($category_posts_query->have_posts()) :
                    while ($category_posts_query->have_posts()) : $category_posts_query->the_post();
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
                  </div>
                </div>
              <?php 
                    endwhile;
                    wp_reset_postdata(); // Reset the post data to the main loop
                else :
                    echo 'No posts found in this category.';
                endif;
                ?>
                <div class="row">
                  <div class="col text-center">
                    <a href="<?php echo get_home_url() . "/category/" .  $category->slug; ?>" class="mt-5 btn btn-tertiary"><?php echo esc_html($category->name); ?></a>
                    <hr class="mt-5 mb-5">
                  </div>
                </div>
                <?php 
              endforeach; ?>
          </div>
        </div>
    </section>
	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();