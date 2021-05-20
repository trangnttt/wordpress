<?php

/**
 * Template Name: Product
 */
?>

<?php get_header(); ?>
</div>
<!-- end lh-header -->
<div class="module-product">
	<div class="container">
		<div class="bread-crumb">
			<a href="<?php bloginfo('url') ?>">Trang chủ</a>
			<span class="dot">/</span>
			<span class="name">Sản phẩm</span>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<?php $getposts = new WP_query();
			$getposts->query('post_status=publish&post_type=product&posts_per_page=-1'); ?>
			<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
				<?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>
				<div class="item-product col-lg-4 col-md-6 col-sm-6 col-12">
					<div class="bg">
						<div class="img-height">
							<a class="img" href="<?php the_permalink(); ?>">
								<img class="img-fluid lh2-img" src="<?php echo $featured_img_url; ?>" alt="">
							</a>
						</div>
						<div class="info-product">
							<a class="name" href=""><?php the_title(); ?></a>
							<p class="price"> <b><i class="fas fa-tag"></i>Giá:</b> <span style="font-weight: 600;color: red;"><?php the_field('gia_san_pham'); ?></span> </p>
							<p><b><i class="fab fa-accessible-icon"></i>Số chỗ: </b><?Php the_field('cho_ngoi'); ?> Chổ</p>
							<p><b><i class="fas fa-car"></i>Thương hiệu:</b> <span style="text-transform: uppercase;"><?Php the_field('thuong_hieu'); ?></span></p>
						</div>
					</div>
				</div>
			<?php endwhile;
			wp_reset_postdata(); ?>
			<!-- end item -->
			<?php if(paginate_links() != '') { ?>
			<div class="lh2-pagging col-12">
				<?php if (paginate_links() != '') { ?>
					<ul class="pagination">
						<?php
						global $wp_query;
						$big = 999999999;
						echo paginate_links(array(
							'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
							'format' => '?paged=%#%',
							'prev_text'    => __('«'),
							'next_text'    => __('»'),
							'current' => max(1, get_query_var('paged')),
							'total' => $wp_query->max_num_pages
						));
						?>
					</ul>
				<?php } ?>
			</div>
			<?php } ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>