<?php 
get_header();

// include '_landing.php'; 
?>

<section class="speakers duplicatable-content">

  <!-- first show all speakers like in indx.php -->
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h1>Speakers</h1>
			</div>
		</div><!--end of row-->
		
		<div class="row">
      <?php
        query_posts(Array(
          'posts_per_page' => -1,
          'post_type' => 'speaker',
          'meta_key' => 'past_speaker',
          'meta_value' => "0"
        ));
        while (have_posts()): the_post();
      ?>
      	<?php include "_index_speaker.php"; ?>
			<?php endwhile; ?>
		</div>
	</div><!--end of container-->

  <!-- then show all past speaker likein index.ph -->
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h1>Past Speakers</h1>
			</div>
		</div><!--end of row-->
			
	  <div class="row">
	    <?php
        query_posts(Array(
          'posts_per_page' => -1,
          'post_type' => 'speaker',
          'meta_key' => 'past_speaker',
          'meta_value' => "1"
        ));
 	      while (have_posts()): the_post();
	    ?>
     	<?php include "_index_speaker.php"; ?>
			<?php endwhile; ?>
		</div>
	</div><!--end of container-->
</section>

<?php get_footer();
