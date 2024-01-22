<?php

/**
 * Hero Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

  $block_name = 'Hero';

  // Create id attribute allowing for custom "anchor" value.
  $id = $block_name . '-' . $block['id'];
  $classes = $block['className'];

  if ( !empty( $block['anchor'] ) ) {
      $id = $block['anchor'];
  }

  $videoURL = get_field('videoURL');
  $heading = get_field('heading');
  $poster = get_field('poster');

?>

<!-- START: Hero -->
<section class="Hero <?php echo $classes; ?>">
    <div class="container-fluid" id="<?php echo esc_attr($id); ?>">
        <div class="row">
          <div id="Hero" class="d-flex align-items-center">
            <div class="Hero__content col-xl-6 col-lg-12 text-white d-flex align-items-center">
              <h1 class="text-jumbo p-5">
                <?php echo $heading; ?>
              </h1>
            </div>
          </div>
        </div>
    </div>
  </section>
  <!-- END: Hero -->


<style type="text/css">
  #<?php echo $id; ?> #Hero{
    z-index: 2;
  }
  
</style>

<script src="https://cdn.jsdelivr.net/npm/vidim@1.0.2/dist/vidim.min.js"></script>
<script>
  var demo = new vidim( '#<?php echo esc_attr($id); ?>', {
      src: '<?php echo $videoURL; ?>',
      type: 'YouTube',
      wrapperClass: 'h-100',
      overlayClass: '',
      autoplay: true,
      loop: true,
      poster: '<?php echo $poster['url']; ?>',
      showPosterBeforePlay: true,
      showPosterOnEnd: true,
      showPosterOnPause: false,
      zIndex: 1,
      autoResize: true,
      muted: true,
      startAt: 0,
      onReady: false,
      overlay: true,
      overlayColor: '#000',
      overlayAlpha: 0.8
    });
</script>