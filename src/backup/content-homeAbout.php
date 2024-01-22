<?php
  $aboutYear		= get_field('aboutYear');
  $aboutHeading		= get_field('aboutHeading');
  $aboutContent		= get_field('aboutContent');
  $aboutSignatory		= get_field('aboutSignatory');
  $taglineHeading		= get_field('taglineHeading');
  $taglineContent		= get_field('taglineContent');
?>


<section class="section-small" id="About" name="About">
  <div class="container text-center">
    <div class="row">
      <div class="col-lg-8 col-lg-offset-2"  data-aos="fade-up" data-aos-duration="1000">
        <p class="no-pad small">EST.<?php echo $aboutYear; ?></p>
        <h3><?php echo $aboutHeading; ?></h3>
        <?php echo $aboutContent; ?>
        <h2 class="classic"><?php echo $aboutSignatory; ?></h2>
      </div>
    </div>
  </div>
</section>

<section id="Tagline" name="Tagline" class="bg-gray">
  <div class="container" data-aos="fade-up" data-aos-duration="1000">
    <div class="row">
      <div class="col-lg-8 col-lg-offset-2 text-center">
        <h3><?php echo $taglineHeading; ?></h3>
        <?php echo $taglineContent; ?>
      </div>
    </div>
  </div>
</section>