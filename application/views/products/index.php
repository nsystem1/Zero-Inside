<!-- Start Sidebar -->
<?php $this->load->view('widget/categories'); ?>
<!-- End Sidebar -->

<div class="span9 popular_products">

    <?php echo set_breadcrumb('<span class="divider">/</span>') ?>

    <?php if ($products): ?>
        <?php if ($this->input->get('q')): ?>
            We have found <?php echo count($products); ?> products with keyword '<strong><?php echo $this->input->get('q'); ?></strong>'. <br/><br/>
        <?php endif; ?>
        <h4>Produk dan Jasa</h4><br>
        <ul class="thumbnails">
            <?php foreach ($products as $product): ?>
                <li class="span2">
                    <div class="thumbnail">

                        <?php
                        $media = $this->general->getSingleMedia('product', $product['id']);
                        ?>
                        <?php if (!empty($media['path'])): ?>
                            <a href="<?php echo base_url() ?>index.php/products/detail/<?php echo $product['permalink'] ?>"><img src="<?php echo base_url(); ?>timthumb.php?src=<?php echo base_url() . $media['path'] ?>&h=275&w=220" alt="" title="" border="0"/></a>
                        <?php else: ?>
                            <a href="<?php echo base_url() ?>index.php/products/detail/<?php echo $product['permalink'] ?>"><img alt="" src="http://placehold.it/220x275"></a>
                        <?php endif; ?>
                        <div class="caption">
                            <a href="<?php echo base_url() ?>index.php/products/detail/<?php echo $product['permalink'] ?>"> <h5><?php echo $product['name']; ?></h5></a>  Price: <?php echo number_format($product['net_price']); ?> IDR<br><br>
                        </div>
                    </div>
                </li>
            <?php endforeach; ?>

        </ul>
    <?php endif; ?>
</div>