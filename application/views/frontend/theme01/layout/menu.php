
<?php 
  // $this->myclass->indulieu($layout['menu']['service']);
 ?>
<div class="menu">
    <div class="menuimg"></div>
    <ul class="menu_m">   
        <li><a href="<?= base_url('home/index') ?>" class="selected">Home</a></li>
        <?php if (!empty($layout['menu']['service'])): ?>
        	<li><a href="<?= base_url('home/service') ?>">Services</a>
            <ul>
            	<?php foreach ($layout['menu']['service'] as $key => $set): ?>
            		<li><a href="<?= base_url('home/service') ?>#<?= $set['cate_id'] ?>"><?= $set['cate_name'] ?></a></li>
            	<?php endforeach ?>
                
                <!-- <li><a href="services.html#ser1">Nails Enhancement</a></li> -->
            </ul>
        </li>
      	<?php else: ?>
        <?php endif ?>
        
        <!-- <li><a href="packages.html">Packages</a></li> -->
        <li><a href="<?= base_url('home/Gallery') ?>">Gallery</a></li>
        <!-- <li><a href="products.html">Products</a></li> -->
        <!-- <li><a href="deals.html">Deals</a></li> -->
        <!-- <li><a href="egift.html">E-Gift</a></li> -->
        <li class="menupromo"><a href="promotions.html">Promotions</a></li>
        <li><a href="<?= base_url('home/reviews') ?>">Reviews</a></li>
        <li><a href="<?= base_url('home/location') ?>">Location</a></li>
        <li><a href="<?= base_url('home/jobs') ?>">Jobs</a></li>
        <li><a href="<?= base_url('home/contact') ?>">Contact</a></li>
    </ul>
</div>