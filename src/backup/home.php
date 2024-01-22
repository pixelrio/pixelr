<?php /* 
This page is used to display the static frontpage. 
*/
 
// Fetch theme header template
get_header(); ?>


<section id="Resources" name="Resources" name="Home__blog">
  <div class="container">
    <div class="clearfix"></div>
    <div class="row grid-pad" data-aos="fade-up" data-aos-duration="1000">
      <?php
        $args = array(
          'post_type' => 'post',
          'orderby'    => 'ID',
          'post_status' => 'publish',
          'order' => 'DESC'
        );
        
        $the_query = new WP_Query( $args );   
        
        if (have_posts()) : while (have_posts()) : the_post();
      ?>
        <div class="col-sm-4 Home__blog--post" data-aos="fade-up" data-aos-duration="1000">
        <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>">
          <!-- <img class="img-responsive center-block" src="img/main/5.jpg" alt=""> -->
          <?php 
            if ( has_post_thumbnail() ) {
              the_post_thumbnail();
            }
          ?>
        </a>
        <div class="meta">
          <?php
            $categories = get_the_category();
            if ( ! empty( $categories ) ) {
                echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
            }
          ?>
        </div>
        <a href="<?php the_permalink() ?>">
          <h4><?php the_title(); ?></h4>
          <?php $content = get_the_content(); echo mb_strimwidth($content, 0, 180, '...'); ?>
        </a>
        <br><br>
        <a class="btn btn-dark" href="<?php the_permalink() ?>">Read more</a>
      </div>
      <?php
        endwhile; endif;
        wp_reset_query();
      ?>
    </div>
  </div>
</section>

<div class="section section-small">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <nav>
          <ul class="pager">
            <li class="previous">
            <?php previous_posts_link('%link', '<i class="fa fa-angle-left"></i> PREVIOUS'); ?>
            </li>
            <li>
              <a href="/blog/">
                <i class="fas fa-th fa-2x"></i>
              </a>
            </li>
            <li class="next">
              <?php next_posts_link('%link', 'NEXT <i class="fa fa-angle-right"></i>'); ?>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
</div>
<?php
get_footer(); ?>