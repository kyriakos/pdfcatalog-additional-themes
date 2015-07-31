<?php if ( $this->options->showCategoryProductCount ) { ?><h4
	style="text-align: right; color:<?php echo $textColor; ?>"><?php echo $this->productCount ?> <?php if ( function_exists( 'icl_t' ) ) {
		echo icl_t( 'PDF Catalog for WooCommerce', 'total products', 'total products.' );
	} else { ?>total products.<?php  } ?></h4><?php } ?>
</div>