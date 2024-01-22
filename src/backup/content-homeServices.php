<?php
  $servicesHeading		= get_field('servicesHeading');
  $servicesContent		= get_field('servicesContent');
?>

<section id="Services" name="Services">
  <div class="container text-center">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <h3><?php echo $servicesHeading; ?></h3>
        <?php echo $servicesContent; ?>
        <p>
          <br>
        </p>
      </div>
    </div>
    <div class="row grid-pad">
      <?php $loop = new WP_Query( array( 'post_type' => 'services', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>
			  <?php while( $loop->have_posts() ) : $loop->the_post(); ?>
          <div class="col-sm-6 col-md-4" data-aos="fade-up" data-aos-duration="1000">
            <h1><i class="fas fa-2x <?php the_field('servicesIcon'); ?>"></i></h1>
            <h5><?php the_title(); ?></h5>
            <p><?php the_content(); ?></p>
          </div>
        <?php endwhile; wp_reset_query(); ?>
    </div>
  </div>
</section>