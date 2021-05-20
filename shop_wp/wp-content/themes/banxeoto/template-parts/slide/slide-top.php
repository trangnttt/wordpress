<div class="block-slider">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner" role="listbox">
      <ol class="carousel-indicators">
        <?php $i = 0 ?>
        <?php $getposts = new WP_query();
        $getposts->query('post_status=publish&showposts=4&post_type=slider'); ?>
        <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
          <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $i ?>" class="<?php $i == 1 ? "active" : "" ?>"></li>
          <?php $i++; ?>
        <?php endwhile;
        wp_reset_postdata(); ?>
      </ol>
      <!-- Get slide News Query -->
      <?php $getposts = new WP_query();
      $getposts->query('post_status=publish&showposts=1&post_type=slider'); ?>
      <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
        <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>
        <div class="carousel-item active">
          <a href=""><img style="width: 100%" class="d-block img-fluid animated zoomIn " src="<?php echo ($featured_img_url); ?>" alt="First slide"></a>
        </div>
      <?php endwhile;
      wp_reset_postdata(); ?>

      <?php $getposts = new WP_query();
      $getposts->query('post_status=publish&showposts=3&post_type=slider&offset=1'); ?>
      <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
        <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>
        <div class="carousel-item">
          <a href=""><img style="width: 100%" class="d-block img-fluid animated zoomIn " src="<?php echo ($featured_img_url); ?>" alt="First slide"></a>
        </div>
      <?php endwhile;
      wp_reset_postdata(); ?>
      <!-- Get post News Query -->
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
</div>