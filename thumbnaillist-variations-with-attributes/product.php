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


      if ($product->product_type == 'variable') {
          $vars = $product->get_available_variations();

          if (count($vars) > 0) { ?>
            <table class="table">
              <thead>
              <tr>
                <th>SKU</th>
                <th>Price</th>
                <th>Stock</th>
                <th>Attributes</th>
              </tr>
              </thead>

                <?php
                foreach ($vars as $var) {

                    ?>
                  <tr>
                    <td>
                        <?php echo $var['sku']; ?>
                    </td>
                    <td>
                        <?= $var['price_html']; ?>

                    </td>
                    <td>
                        <?php echo $var['max_qty']; ?>
                    </td>

                    <td>
                        <?php
                        // OPTION 1:
                        $vp = wc_get_product($var['variation_id']);
                        $atts = $vp->get_formatted_variation_attributes();
                        echo $atts;


                        // OPTION 2:
                        // Alternatively you can use the following if you want to present attributes in a different way.
                        // Uncomment the following code and customize.

                        /*
                        foreach ($var['attributes'] as $k => $attribute) {
                            echo $k . ': ' . $attribute . '<br>';
                        }
                        */

                        ?>
                    </td>
                  </tr>
                    <?php
                }
                ?>
            </table>
              <?php
          }
          ?>

      <?php }

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