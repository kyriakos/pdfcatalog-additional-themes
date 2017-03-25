<!-------------------------------------------------------------------->
<div class="product row">

  <div class="product_image col-xs-3">
    <a href="<?php echo get_permalink($post->ID); ?>"><img src="<?php echo $post->thumbnail; ?>"
                                                           class="img-responsive"></a>
  </div>
  <div class="product_description col-xs-9">
    <h2 class="product_title"><a
              href="<?php echo get_permalink($post->ID); ?>"><?php echo $post->post_title ?></a></h2>

    <p style="color:<?php echo $textColor ?>">
        <?php if ($this->options->showDescription) {
            ?>
            <?php echo $this->prepare($post->post_content); ?>
        <?php } ?>

    </p>
      <?php if ($this->options->showPrice) { ?>
        <div class="price">
            <?php echo $product->get_price_html(); ?>
            <?php if (($this->options->showSKU) && (strlen($product->get_sku()) > 0)) { ?>
              <span class="SKU">(<?php echo $product->get_sku(); ?>)</span>
            <?php } ?>
        </div>
      <?php }
      ?>
      <?php
      $attributes = $product->get_attributes();
      if (count($attributes) > 0) {
          ?>
        <table class="attributes">
            <?php
            foreach ($attributes as $k => $att) {
                if ($att['is_visible']) {
                    ?>
                  <tr>
                    <td><span><?php echo wc_attribute_label($att['name'], $product); ?></span></td>
                    <td><span><?php echo $product->get_attribute($att['name']); ?></span></td>
                  </tr>
                    <?php
                }
            }
            ?>
        </table>

          <?php
      }
      ?>
      <?php if ((get_option('pdfcat_showVariations')) && ($hasVariations)) { ?>


        <ul>
            <?php foreach ($variations as $label => $options) { ?>
              <li><?php echo $label; ?>:<?php echo implode(', ', $options) ?></li>
            <?php } ?>
        </ul>
      <?php } ?>

  </div>
</div>