<div class="box-cate">
  <p class="title-sidebar"><i class="fas fa-bars"></i>Dịch vụ thuê xe</p>
  <div class="box-border">
    <ul class="lh2-ul">
      <?php
      $args = array(
        'post_status' => 'publish', // Chỉ lấy những bài viết được publish
        'post_type' => 'service', // số lượng bài viết
        'posts_per_page' => -1
      );
      ?>
      <?php $getposts = new WP_query($args); ?>
      <?php global $wp_query;
      $wp_query->in_the_loop = true; ?>
      <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
        <li><a href="<?php the_permalink(); ?>"><i class="fas fa-caret-right"></i><?php the_title(); ?></a></li>
      <?php endwhile;
      wp_reset_postdata(); ?>
    </ul>
  </div>
</div>
<div class="box-contact">
  <p class="title-sidebar"><i class="fas fa-bars"></i>Hỗ trợ trực tuyến</p>
  <div class="box-border">
    <ul class="lh2-ul">
      <li>Hotline: 0915 17 12 19</li>
      <li>Email: inb.mycar@gmail.com</li>
    </ul>
  </div>
</div>
<div class="box-hightlight-news">
  <p class="title-sidebar"><i class="fas fa-bars"></i>Tin nổi bật</p>
  <div class="box-border">
    <?php
    $args = array(
      'post_status' => 'publish', // Chỉ lấy những bài viết được publish
      'post_type' => 'post',
      'showposts' => 10, // số lượng bài viết
      'cat' => 7

    );
    ?>
    <?php $getposts = new WP_query($args); ?>
    <?php global $wp_query;
    $wp_query->in_the_loop = true; ?>
    <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
      <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>
      <div class="list-news">
        <a class="img" href=""><img class="img-fluid lh2-img" src="<?php echo $featured_img_url; ?>" alt=""></a>
        <div class="right-list">
          <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
          <div class="lh2-date"><i class="fas fa-calendar-alt"></i> <?php echo get_the_date('d/m/Y'); ?></div>
        </div>
      </div>
    <?php endwhile;
    wp_reset_postdata(); ?>
    <!-- end item -->
  </div>
</div>