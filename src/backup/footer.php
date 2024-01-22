<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Pixelr.io_Labs_Inc.
 */

?>

<!-- Footer Section-->
<section class="section-small bg-gray footer">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <h5>About</h5>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laudantium eum, nihil facilis quasi maiores molestiae ab laborum reiciendis. Fugit ratione enim dolore reiciendis, accusantium ut magnam nemo maiores quam iusto?</p>
      </div>
      <div class="col-md-3 col-md-offset-1 footer-menu">
        <h5>Latest project</h5>
        <p><a href="portfolio-single.html"><img class="img-responsive center-block" src="<?php bloginfo('stylesheet_directory'); ?>/img/main/42.jpg" alt=""></a></p>
      </div>
      <div class="col-md-3 col-md-offset-1 footer-menu">
        <h5>Company</h5>
        <h6 class="no-pad"><a href="services.html">Home</a></h6>
        <h6 class="no-pad"><a href="news-single.html">About</a></h6>
        <h6 class="no-pad"><a href="clients.html">Services</a></h6>
        <h6 class="no-pad"><a href="portfolio-masonry-4.html">Resources</a></h6>
        <h6 class="no-pad"><a href="team.html">Blog</a></h6>
        <!-- <h6 class="no-pad"><a href="about.html">Clients</a></h6> -->
        <h6 class="no-pad"><a href="about.html">Contact Us</a></h6>
      </div>
    </div>
    <div class="row">
      <hr>
      <div class="col-md-4">
        <h6> Lorem ipsum dolor sit.
        </h6>
      </div>
      <div class="col-md-3 col-md-offset-1">
        <h6>Template By <a href="http://pixelr.io"><i class="fa fa-heart fa-fw"></i>Pixelr.io</a>
        </h6>
      </div>
      <div class="col-md-3 col-md-offset-1">
        <ul class="list-inline">
          <li><a href="/"><i class="fa fa-twitter fa-fw fa-lg"></i></a></li>
          <li><a href="/"><i class="fa fa-facebook fa-fw fa-lg"></i></a></li>
          <li><a href="/"><i class="fa fa-google-plus fa-fw fa-lg"></i></a></li>
          <li><a href="/"><i class="fa fa-linkedin fa-fw fa-lg"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
</section>
<?php if ( is_front_page() ) { ?>
  <!-- Youtube video background-->
  <style>
    #iframe_bgndVideo{top: -55px !important;}
  </style>
  <a class="player" id="bgndVideo" data-property="{videoURL:'https://www.youtube.com/watch?v=WumfMIF9yW8', containment:'.intro', autoPlay:true, loop:true, mute:true, quality:'default', opacity:1, showControls: false, showYTLogo:false}"></a>
<?php } ?>
<?php wp_footer(); ?>
<script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>

<!-- Modal -->
<div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <div class="row">
          <div class="col-sm-6 col-sm-offset-3">
            <div class="form-group">
              <input type="text" name="searchInput" id="searchInput" placeholder="start typing..." class="form-control" onkeyup="fetchResults()"></input>
            </div>
          </div>
          <div class="col-sm-8 col-sm-offset-2">
            <div id="datafetch">

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


</body>
</html>
