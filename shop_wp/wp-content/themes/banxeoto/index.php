<?php get_header(); ?>

<?php get_template_part('template-parts/slide/slide', 'top'); ?>
<!-- end block-slider -->
</div>
<!-- end lh-header -->
<?php get_template_part('template-parts/intro/intro'); ?>
<!-- end block-intro -->

<div class="block-contact">
	<div class="container">
		<p class="lh2-title1">dỊCH VỤ CHO Bán xe DU LỊCH</p>
		<p class="caption">Cung cấp dịch vụ cho Bán xe tự lái, du lịch từ 4 đến 45 chỗ</p>
		<p class="bottom">Thủ tục nhanh gọn - Nhận xe nhanh chóng</p>
		<button class="lh3-button" type=""><span>Xem ngay</span></button>
	</div>
</div>

<?php get_template_part('template-parts/product/product', 'top'); ?>
<!-- end block-product -->
<div class="block-partner">
	<div class="container">
		<div class="responsive">
			<div class="col-2 item-partner">
				<div class="bg">
					<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/1.png" alt="">
				</div>
			</div>
			<div class="col-2 item-partner">
				<div class="bg">
					<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/2.png" alt="">
				</div>
			</div>
			<div class="col-2 item-partner">
				<div class="bg">
					<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/3.png" alt="">
				</div>
			</div>
			<div class="col-2 item-partner">
				<div class="bg">
					<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/4.png" alt="">
				</div>
			</div>
			<div class="col-2 item-partner">
				<div class="bg">
					<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/5.png" alt="">
				</div>
			</div>
			<div class="col-2 item-partner">
				<div class="bg">
					<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/6.png" alt="">
				</div>
			</div>
			<div class="col-2 item-partner">
				<div class="bg">
					<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/1.png" alt="">
				</div>
			</div>
		</div>
		<button class="button-slider next"><i class="fas fa-chevron-right"></i></button>
		<button class="button-slider prev"><i class="fas fa-chevron-left"></i></button>
	</div>
</div>
<?php get_footer(); ?>