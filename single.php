<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package pixelrio
 */

get_header();
?>

	<main id="primary" class="Post">
		<div class="container">
			<div class="row">
				<div class="col-md-8 offset-md-2">
					<?php
						while ( have_posts() ) :
							the_post();
							
							get_template_part( 'template-parts/content', get_post_type() );

						endwhile; // End of the loop.
					?>
				</div>
			</div>
		</div>
		<div class="container-fluid Post__related">
			<div class="container">
				<div class="row">
					<?php
						// Get the current post's categories
						$categories = get_the_category();

						// Check if the post has categories
						if ($categories) {
								$category_ids = array(); // Store category IDs

								// Extract category IDs
								foreach ($categories as $category) {
										$category_ids[] = $category->term_id;
								}

								// Custom query to get latest 3 posts from the same category
								$related_posts_args = array(
										'post__not_in' => array(get_the_ID()), // Exclude the current post
										'category__in' => $category_ids,
										'posts_per_page' => 3,
										'orderby' => 'date',
										'order' => 'DESC',
								);

								$related_posts_query = new WP_Query($related_posts_args);

								// Check if there are related posts
								if ($related_posts_query->have_posts()) :
							?>
										<div class="related-posts">
												<h3 class="mb-4">Related Posts</h3>
														<?php
														// Loop through the related posts
														while ($related_posts_query->have_posts()) : $related_posts_query->the_post();
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
																		<?php
																			$posttags = get_the_tags();
																			if ($posttags) {
																				echo '<div class="card-footer mt-4 p-0 pt-2">';
																					foreach($posttags as $tag) {
																						echo "<small>" . $tag->name . "</small>"; 
																					}
																				echo '</div>';
																			}
																		?>
																</div>
															</div>
														<?php endwhile; ?>
										</div>
								<?php
										// Reset the post data to the main loop
										wp_reset_postdata();
								endif;
						}
						?>
				</div>
			</div>
		</div>
	</main><!-- #main -->

<?php
get_footer();
