<?php 
  // $this->myclass->indulieu($data);
  // $this->myclass->indulieu($dirPhoto);
 ?>
<div class="groupcontent">
    <div class="content">
        <h2>Our Services</h2>
        <?php $cate0=$this->cate->getList_byParent(0,0,0,'ASC'); 
            // $this->myclass->indulieu($cate0);
        ?>
        <?php if (!empty($cate0)): ?>
          <?php foreach ($cate0 as $key => $set0): ?>
            <?php $photos=json_decode($set0['cate_photo']); ?>
            <div id="ser3" class="groupservices">
                <a name="pedicure"></a>
                <div class="servicestitle"><?= $set0['cate_name'] ?></div>
                <div class="pedicure_note" style="    min-height: 50px;">
                    <div class="pedicureimg">
                        <?php echo (!empty($photos))?"<img src='".base_url().$dirPhoto.$photos[0]."' alt='Pedicure' style='height: 74px;' /> ":'';  ?>
                    </div>
                    <?= $set0['cate_description'] ?>
                </div>
                <div class="servicesbox">
                    <div class="servicesimg">
                        <img src="<?= base_url()?>public/frontend/imperial/images/services/10.jpg" alt="Pedicure" class="pedi_img" />
                        <img src="<?= base_url()?>public/frontend/imperial/images/services/11.jpg" alt="Pedicure" class="pedi_img" />
                    </div>
                    <div class="title_right">Full set /Fill In</div>
                    <div class="services_l">  
                        <div class="grouprow"> 
                            <?php $serv0=$this->serv->getList_byParent($set0['cate_id'],0,0,'ASC'); 
                            // $this->myclass->indulieu($serv0);
                            ?>
                              <?php if (!empty($serv0)): ?>
                                <?php foreach ($serv0 as $key => $ser0): ?>
                                  <div class="row"><?= $ser0['serv_name'] ?><div class="price"><?= $ser0['serv_pricetext'] ?></div></div>  
                                <?php endforeach ?>    
                                
                                
                              <?php endif ?>  
                            <?php $cate2=$this->cate->getList_byParent($set0['cate_id'],0,0,'ASC'); 
                              // $this->myclass->indulieu($cate2);
                            ?>
                            <?php if (!empty($cate2)): ?>
                              <?php foreach ($cate2 as $key => $set2): ?>
                                <?php $photos=json_decode($set2['cate_photo']); ?>
    
                                <div class="rowtitle"><?= $set2['cate_name'] ?></div>   

                                <?php $serv2=$this->serv->getList_byParent($set2['cate_id'],0,1,'ASC'); 
                                // $this->myclass->indulieu($serv2);
                                ?>
                                <?php if (!empty($serv2)): ?>
                                  <?php foreach ($serv2 as $key => $ser2): ?>
                                    <div class="row"><?= $ser2['serv_name'] ?><div class="price"><?= $ser2['serv_pricetext'] ?></div>
                                        <div class="rownote"><div class="price"><?= $ser2['serv_description'] ?></div>
                                    </div>    
                                  <?php endforeach ?>
                                <?php endif; ?>

                              <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                   </div>
                </div>
                <div style=" overflow:hidden">
                
            </div>  

          <?php endforeach ?>  
        <?php endif ?>
       <!--  <div id="ser3" class="groupservices">
            <a name="pedicure"></a>
            <div class="servicestitle">Pedicure</div>
            <div class="pedicure_note">
                <div class="pedicureimg">
                    <img src="images/services/pedicure.jpg" alt="Pedicure" />
                </div>
                Our pedicure tubs are pipe-less to ensure clean and save water. Medical grate sterilizers ansani-tablet-packaged hospital strength anti-bacterial products are utilized for additional safety precautions
            </div>
            <div class="servicesbox">
                <div class="servicesimg">
                    <img src="images/services/10.jpg" alt="Pedicure" class="pedi_img" />
                    <img src="images/services/11.jpg" alt="Pedicure" class="pedi_img" />
                </div>
                <div class="title_right">Full set /Fill In</div>
                <div class="services_l">  
                    <div class="grouprow"> 
                        <div class="row">Gel Polish extra<div class="price">$20</div></div>  
                        <div class="row">Dip paraffin for feet extra<div class="price">$13</div></div>  
                        <div class="row">Add callus treatment extra<div class="price">$10</div></div>   
                        <div class="row">Design 2 nail extra<div class="price">$7</div></div>  

                        <div class="rowtitle">NATURAL PRODUCTS for PEDICURE</div>   
                        <div class="row">SMOOTH Natural nuskin pedicure<div class="price">$45</div>
                            <div class="rownote">Shapping, cut, clean cuticle, including callus treatment if need, warm cream massage, hot towel, regular polish. Exfoliating with liquid lufia. </div>
                        </div>    
                        
                    </div>
               </div>
            </div>
            <div style=" overflow:hidden">
            
        </div> -->




    </div>
</div>