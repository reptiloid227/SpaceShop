<?php
/**
 * @var $products array
 */
?>

<?php if(!empty($products)):?>
    <section class="featured-products">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="section-title"><?__('main_index_meta_features_products')?></h3>
                </div>
                <?php $this->getPart('parts/products_loop', compact('products'));?>
            </div>
        </div>
    </section>
<?php endif?>
