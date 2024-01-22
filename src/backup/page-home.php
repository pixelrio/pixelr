<?php 
/* 
Template Name: Homepage
*/

get_header(); ?>
    
<!-- About and Tagline Section-->
<?php get_template_part('template-parts/content','homeAbout'); ?>

<!-- Services-->
<?php get_template_part('template-parts/content','homeServices'); ?>


<!-- Why Choose Us Section-->
<?php get_template_part('template-parts/content','homeProcess'); ?>

<!-- Blog section -->
<section id="Resources" name="Resources" name="Home__blog">
  <div class="container">
    <h3 class="pull-left">Resources</h3>
    <div class="pull-right">
      <h5><a href="https://pixelr.io/blog">SEE ALL</a></h5>
    </div>
    <div class="clearfix"></div>
    <div class="row grid-pad" data-aos="fade-up" data-aos-duration="1000">
      <?php
        query_posts( 
          array( 
            'meta_key' => 'post_views_count', 
            'posts_per_page' => 3, 
            'orderby' => 'meta_value_num', 
            'order' => 'DESC' 
            ) 
          );
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
   
<!-- Keep in Touch Section-->
<section class="section-big bg-img5" id="Subscribe" name="Subscribe">
  <div class="overlay"></div>
  <div class="container text-center">
    <div class="row">
      <div class="col-lg-6 col-lg-offset-3">
        <br>
        <h3>KEEP IN TOUCH WITH US</h3>
      </div>
    </div>
  </div>
</section>
  
    
<!-- Contact Section-->
<section class="section-small" id="Contact" name="Contact">
  <div class="container">
    <div class="row">
      <div class="col-md-5">
        <h3>Say hello</h3>
        <!-- Contact Form - Enter your email address on line 17 of the mail/contact_me.php file to make this form work. For more information on how to do this please visit the Docs!-->
        <form id="contactForm" name="sentMessage" novalidate="">
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label class="sr-only control-label" for="name">You Name</label>
              <input class="form-control input-lg" id="name" type="text" placeholder="You Name" required="" data-validation-required-message="Please enter name"><span class="help-block text-danger"></span>
            </div>
          </div>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label class="sr-only control-label" for="email">You Email</label>
              <input class="form-control input-lg" id="email" type="email" placeholder="You Email" required="" data-validation-required-message="Please enter email"><span class="help-block text-danger"></span>
            </div>
          </div>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label class="sr-only control-label" for="phone">You Phone</label>
              <input class="form-control input-lg" id="phone" type="tel" placeholder="You Phone" required="" data-validation-required-message="Please enter phone number"><span class="help-block text-danger"></span>
            </div>
          </div>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label class="sr-only control-label" for="message">Message</label>
              <textarea class="form-control input-lg" id="message" rows="1" placeholder="Message" required="" data-validation-required-message="Please enter a message." aria-invalid="false"></textarea><span class="help-block text-danger"></span>
            </div>
          </div>
          <div id="success"></div>
          <button class="btn btn-dark" type="submit">Send</button>
        </form>
      </div>
      <div class="col-md-5 col-md-offset-2">
        <h2><i class="fa fa-phone fa-fw fa-lg"></i> &#x28;&#x36;&#x34;&#x37;&#x29;&#x20;&#x34;&#x34;&#x39;&#x20;&#x30;&#x33;&#x39;&#x38;
        </h2>
        <p>A business has to be involving, it has to be fun, and it has to exercise your creative instincts. Start where you are. Use what you have. Do what you can.</p>
        <hr>
        <h5><i class="fa fa-map-marker fa-fw fa-lg"></i> 607 Mermaid Cres, Mississauga, ON L5G 0B3
        </h5>
      </div>
    </div>
  </div>
</section>
    
<!-- End of the page CTA -->
<section id="Oncemore" name="Oncemore" class="section-big bg-img5 text-center">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-sm-8 col-sm-offset-2">
        <i class="far fa-3x fa-heart"></i>
        <h2>DON'T BELIEVE IN LOVE AT FIRST SIGHT ??</h2>
        <a class="btn btn-lg btn-violet" href="/about">Start over</a>
    </div>
  </div>
</section>

<?php get_footer(); ?>