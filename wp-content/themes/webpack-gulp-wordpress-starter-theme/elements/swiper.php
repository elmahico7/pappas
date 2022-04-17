<?php
$slider = get_field('slider');
?>
<?php if ($slider) : ?>
	<div class="swiper">
		<div class="swiper-wrapper">
			<?php foreach ($slider as $slide) : ?>
				<div class="swiper-slide">
					<div class="swiper-slide__image">
						<img src="<?php echo $slide['image']['url']; ?>" alt="slider_image"/>
					</div>
					<?php if ($slide['title']) : ?>
						<div class="swiper-slide__title">
							<?php echo $slide['title']; ?>
						</div>
					<?php endif; ?>
				</div>
			<?php endforeach; ?>
		</div>
		<?php if (count($slider) > 1) : ?>
			<div class="swiper-button-next">
				<?php echo get_svg('Back-White-Arrow2'); ?>
			</div>
			<div class="swiper-button-prev">
				<?php echo get_svg('Back-White-Arrow2'); ?>
			</div>
		<?php endif; ?>
	</div>
<?php endif; ?>