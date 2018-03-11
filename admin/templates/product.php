<div class="wp-block-gutenblocks-product">
	<?php if ( $product->get_image() ): ?>
		<a href="<?php echo $url; ?>" class="wp-block-gutenblocks-product__image">
			<?php echo $product->get_image(); ?>
		</a>
	<?php endif; ?>
	<div class="wp-block-gutenblocks-product__content">
		<p class="wp-block-gutenblocks-product__title">
			<a href="<?php echo $url; ?>"><?php echo $product->get_name(); ?></a>
		</p>
		<p class="wp-block-gutenblocks-product__price" style="color: <?php echo $attributes['priceColor']; ?>">
			<?php if($product->get_sale_price() == ""): ?>
				<?php echo $cb.$product->get_price().$ca; ?></span>
			<?php else: ?>
		    <?php echo $cb.$product->get_price().$ca; ?>
				<del class="wp-block-gutenblocks-product__sale"><?php echo $cb.$product->get_regular_price().$ca; ?></del>
			<?php endif; ?>
		</p>
		<div class="wp-block-gutenblocks-product__description">
			<?php echo $description; ?>
		</div>
		<p>
			<a class="wp-block-gutenblocks-product__button" href="<?php echo $add_to_cart_url; ?>" style="background-color: <?php echo $attributes['buttonBackgroundColor']; ?>">
				<span class="dashicons dashicons-cart"></span>
				<?php _e(' Add to cart', 'gutenblocks' ); ?>
			</a>
		</p>
	</div>
</div>
