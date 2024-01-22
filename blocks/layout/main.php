<?php

/**
 * Main Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

  $block_name = 'Main';

  // Create id attribute allowing for custom "anchor" value.
  $id = $block_name . '-' . $block['id'];
  $classes = $block['className'];

  if ( !empty( $block['anchor'] ) ) {
      $id = $block['anchor'];
  }
?>

<section class="<?php echo implode(' ', $classes); ?>" id="<?php echo esc_attr($id); ?>">
  <div class="container">
    <div class="row">
      <div class="col-lg-10 offset-lg-1 mt-5 mb-5">
        <InnerBlocks />
      </div>
    </div>
  </div>
</section>

<style type="text/css">
  #<?php echo $id; ?>{
    
  }
</style>

<script>

</script>