<!-- Get category News Query -->
<?php
$args = array(
	'taxonomy' => 'danh_muc',
	'orderby' => 'name',
	'order'   => 'ASC'
);

$cats = get_categories($args);
foreach ($cats as $cat) {
?>
	<div class="block-product">
		<div class="container">
			<p class="lh2-title"> <span><?php echo $cat->name ?></span></p>
			<div class="row">
				<!-- Get item product News Query -->
				<?php $getposts = new WP_query();
				$getposts->query('post_status=publish&showposts=6&post_type=product&danh_muc='.$cat->name); ?>
				<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
					<?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>
					<div class="item-product col-lg-4 col-md-6 col-sm-6 col-12">
						<div class="bg">
							<div class="img-height">
								<a class="img" href="<?php the_permalink(); ?>">
									<img class="img-fluid lh2-img" src="<?php echo $featured_img_url; ?>" alt="<?php the_title(); ?>">
								</a>
							</div>
							<div class="info-product">
								<a class="name" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								<p class="price"> <b><i class="fas fa-tag"></i>Giá:</b> <?php the_field('gia_san_pham'); ?></p>
								<p><b><i class="fab fa-accessible-icon"></i>Số chỗ: </b><?php the_field('cho_ngoi'); ?> Chổ</p>
								<p><b><i class="fas fa-car"></i>Thương hiệu:</b> <?php the_field('thuong_hieu'); ?></p>
							</div>
						</div>
					</div>
				<?php endwhile;
				wp_reset_postdata(); ?>
				<!-- end item -->
				<!-- end item -->
			</div>
		</div>
	</div>
	<!-- end block-product -->
<?php
}
?>