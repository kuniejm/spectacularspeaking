<?php
get_header();
?>

<section class="error-page fullscreen-element preserve-3d">
  <div class="container vertical-align">
    <div class="row">
      <div class="col-sm-8">
        <h1 class="text-white">404<br>Not Found</h1>
        <p class="lead text-white">Unfortunately, this link is no longer available.</p>
        <a href="<?= home_url() ?>" class="btn btn-white">Take Me Home</a>
      </div>

      <div class="col-sm-4 text-right">
        <i class="icon pe-7s-way"></i>
        <i class="icon pe-7s-compass"></i>
        <i class="icon pe-7s-attention"></i>
      </div>
    </div><!--end of row-->
  </div><!--end of container-->
</section>

<?php get_footer();
