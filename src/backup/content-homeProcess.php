<?php
  $processHeading		= get_field('processHeading');
  $processContent		= get_field('processContent');
?>

<section class="bg-img5 text-center" id="Process" name="Process">
  <div class="overlay"></div>
  <div class="container text-center">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
          <h3><?php echo $processHeading; ?></h3>
          <?php echo $processContent; ?>
          <p>
            <br>
          </p>
        </div>
      </div>
      <div class="row wow fadeInUp" data-wow-duration="2s" data-wow-delay=".2s">
        <?php $loop = new WP_Query( array( 'post_type' => 'process', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>
          <?php while( $loop->have_posts() ) : $loop->the_post(); ?>
            <div class="col-lg-3 col-sm-6"  data-aos="fade-up" data-aos-duration="1000">
              <i class="fas fa-4x <?php the_field('processIcon'); ?>"></i>
              <br><br>
              <h4><?php the_title(); ?></h4>
              <p><?php the_content(); ?></p>
            </div>
          <?php endwhile; wp_reset_query(); ?>
      </div>
    </div>
</section>