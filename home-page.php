<?php 
/*
Template Name: главная

*/
?>
<?php get_header(); ?>
<!-- shop -->
		<div class="container">
			<h1 class="shop__text-main"><?php the_field(title_shop); ?></h1>
			<div class="shop__row-one">
			<?php 
			$args = array(
				'post_type' => 'wash',
				'posts_per_page' => 6,
				);
				$p = get_posts ($args);
				foreach ($p as $post) {
					setup_postdata( $post );
					?>
					
				<div class="shop__cart">
					<img class="shop__cart-ico" src="<?php the_field(img_shop); ?>" alt="">
					<div class="shop__cart-post"><?php the_field(value_shop); ?></div>
					<div class="shop__price">
						<span class="shop__price-text"><?php the_field(argument_shop_1); ?></span>
						<span class="shop__price-value"><?php the_field(price_shop_1); ?></span>
						<br>
						<span class="shop__price-text"><?php the_field(argument_shop_2); ?></span>
						<span class="shop__price-value"><?php the_field(price_shop_2); ?></span>
					</div>
				</div>
				
				<?php } wp_reset_postdata(); ?>

			</div>
			

			</div>
		</div>
		<!-- shop -->
		<?php get_footer(); ?>