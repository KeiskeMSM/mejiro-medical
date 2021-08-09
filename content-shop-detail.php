                      <li class="shopList-item">
                        <div class="shop-image">
<?php
$image_id = get_sub_field( 'shop_img' );
echo wp_get_attachment_image( $image_id, 'common' );
?>
                        </div>
                        <div class="shop-body">
                          <p class="shop-title"><?php the_sub_field( 'shop_name' ); ?></p>
                          <p class="shop-caption"><?php the_sub_field( 'shop_strength' ); ?></p>
                        </div>
                      </li>