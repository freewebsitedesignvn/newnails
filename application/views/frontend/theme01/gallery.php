<?php 
  // $this->myclass->indulieu($data);
  // $this->myclass->indulieu($dirPhoto);
 ?>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<div class="groupcontent">
  <div class="content container">
      <h2>Gallery</h2>

      <div class="row">
        <?php if (!empty($data)): ?>
          <?php foreach ($data as $key => $set): ?>
            <figure class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
              <img src="<?= base_url().$dirPhoto.$set['filename'] ?>" alt="" title="" class="img-responsive img-rounded img-thumbnail" />
            </figure>
          <?php endforeach ?>
          
        <?php else: ?>
          <center> <h3>No data</h3> </center>
        <?php endif ?>
        
      </div>
      <!-- <div class="groupgallerytitle">
          <a href="#manicure" class="gallerytitle">Manicure</a>
          <a href="#eyelash-extension" class="gallerytitle">Eyelash Extension (Before &amp; After)</a>
          <a href="#hair-section" class="gallerytitle">Hair Section</a>
          <a href="#Pedicure" class="gallerytitle">Pedicure</a>
          <a href="#make-up" class="gallerytitle">Make Up (Before &amp; After)</a>
      </div>

      <div id="gallery">
          <div class="gallerytitle2">Eye Lash Extension By Julie</div>
          <a href="images/gallery/eyelash_extension/eye_lash_extension_by_julie/8.jpg" rel="shadowbox[1]"><img src="images/thumb/eyelash_extension/eye_lash_extension_by_julie/8a.jpg" alt="img8" title="img8" /></a>
          <a href="images/gallery/eyelash_extension/eye_lash_extension_by_julie/7.jpg" rel="shadowbox[1]"><img src="images/thumb/eyelash_extension/eye_lash_extension_by_julie/7a.jpg" alt="img7" title="img7" /></a>
          

          <div class="gallerytitle2">Eye Lash Extension Kind Of 60</div>
          <a href="images/gallery/eyelash_extension/eye_lash_extension_kind_of_60/4.jpg" rel="shadowbox[1]"><img src="images/thumb/eyelash_extension/eye_lash_extension_kind_of_60/4a.jpg" alt="img4" title="img4" /></a>
          <a href="images/gallery/eyelash_extension/eye_lash_extension_kind_of_60/3.jpg" rel="shadowbox[1]"><img src="images/thumb/eyelash_extension/eye_lash_extension_kind_of_60/3a.jpg" alt="img3" title="img3" /></a>
         

          <div class="gallerytitle2">Eye Lash Extension Kind of 90</div>
          <a href="images/gallery/eyelash_extension/eye_lash_extension_kind_of_90/1.jpg" rel="shadowbox[1]"><img src="images/thumb/eyelash_extension/eye_lash_extension_kind_of_90/1.jpg" alt="img1" title="img1" /></a>
          <a href="images/gallery/eyelash_extension/eye_lash_extension_kind_of_90/2.jpg" rel="shadowbox[1]"><img src="images/thumb/eyelash_extension/eye_lash_extension_kind_of_90/2.jpg" alt="img2" title="img2" /></a>
          <a href="images/gallery/eyelash_extension/eye_lash_extension_kind_of_90/3.jpg" rel="shadowbox[1]"><img src="images/thumb/eyelash_extension/eye_lash_extension_kind_of_90/3.jpg" alt="img3" title="img3" /></a>
          <a href="images/gallery/eyelash_extension/eye_lash_extension_kind_of_90/4.jpg" rel="shadowbox[1]"><img src="images/thumb/eyelash_extension/eye_lash_extension_kind_of_90/4.jpg" alt="img4" title="img4" /></a>
          <a href="images/gallery/eyelash_extension/eye_lash_extension_kind_of_90/5.jpg" rel="shadowbox[1]"><img src="images/thumb/eyelash_extension/eye_lash_extension_kind_of_90/5.jpg" alt="img5" title="img5" /></a>

          <a name="hair-section"></a>
          <div class="gallerytitle2">Hair Section</div>
          <a href="images/gallery/hair_section/01.jpg" rel="shadowbox[1]"><img src="images/thumb/hair_section/01.jpg" alt="img01" title="img01" /></a>
          <a href="images/gallery/hair_section/1.jpg" rel="shadowbox[1]"><img src="images/thumb/hair_section/1.jpg" alt="img1" title="img1" /></a>
          <a href="images/gallery/hair_section/2.jpg" rel="shadowbox[1]"><img src="images/thumb/hair_section/2.jpg" alt="img2" title="img2" /></a>
          <a href="images/gallery/hair_section/3.jpg" rel="shadowbox[1]"><img src="images/thumb/hair_section/3.jpg" alt="img3" title="img3" /></a>
          

          <a name="Pedicure"></a>
          <div class="gallerytitle2">Pedicure</div>
          <a href="images/gallery/pedicure/1.jpg" rel="shadowbox[1]"><img src="images/thumb/pedicure/1a.jpg" alt="img1" title="img1" /></a>
          <a href="images/gallery/pedicure/2.jpg" rel="shadowbox[1]"><img src="images/thumb/pedicure/2a.jpg" alt="img2" title="img2" /></a>
          <a href="images/gallery/pedicure/3.jpg" rel="shadowbox[1]"><img src="images/thumb/pedicure/3a.jpg" alt="img3" title="img3" /></a>
          <a href="images/gallery/pedicure/4.jpg" rel="shadowbox[1]"><img src="images/thumb/pedicure/4a.jpg" alt="img4" title="img4" /></a>
          <a href="images/gallery/pedicure/5.jpg" rel="shadowbox[1]"><img src="images/thumb/pedicure/5a.jpg" alt="img5" title="img5" /></a>
          <a href="images/gallery/pedicure/6.jpg" rel="shadowbox[1]"><img src="images/thumb/pedicure/6a.jpg" alt="img6" title="img6" /></a>
          <a href="images/gallery/pedicure/7.jpg" rel="shadowbox[1]"><img src="images/thumb/pedicure/7a.jpg" alt="img7" title="img7" /></a>
          

          <div class="gallerytitle2">Pink &amp; White Nails by Julie</div>
          <a href="images/gallery/pink_white/1.jpg" rel="shadowbox[1]"><img src="images/thumb/pink_white/1.jpg" alt="img1" title="img1" /></a>
          <a href="images/gallery/pink_white/2.jpg" rel="shadowbox[1]"><img src="images/thumb/pink_white/2.jpg" alt="img2" title="img2" /></a>
          <a href="images/gallery/pink_white/3.jpg" rel="shadowbox[1]"><img src="images/thumb/pink_white/3.jpg" alt="img3" title="img3" /></a>    
                              
          <div class="gallerytitle2">Vip Signature Pedicure</div>
          <a href="images/gallery/pedicure/Vip_Signature_Pedicure/1.jpg" rel="shadowbox[1]"><img src="images/thumb/pedicure/Vip_Signature_Pedicure/1a.jpg" alt="img1" title="img1" /></a>
          <a href="images/gallery/pedicure/Vip_Signature_Pedicure/2.jpg" rel="shadowbox[1]"><img src="images/thumb/pedicure/Vip_Signature_Pedicure/2a.jpg" alt="img2" title="img2" /></a>
          <a href="images/gallery/pedicure/Vip_Signature_Pedicure/3.jpg" rel="shadowbox[1]"><img src="images/thumb/pedicure/Vip_Signature_Pedicure/3a.jpg" alt="img3" title="img3" /></a>
          
          <a name="make-up"></a>
          <div class="gallerytitle2">Make Up (Before &amp; After)</div>
          <a href="images/gallery/make_up/17.jpg" rel="shadowbox[1]"><img src="images/thumb/make_up/17.jpg" alt="img17" title="img17" /></a>
          <a href="images/gallery/make_up/16.jpg" rel="shadowbox[1]"><img src="images/thumb/make_up/16.jpg" alt="img16" title="img16" /></a>
          <a href="images/gallery/make_up/15.jpg" rel="shadowbox[1]"><img src="images/thumb/make_up/15.jpg" alt="img15" title="img15" /></a>
          <a href="images/gallery/make_up/14.jpg" rel="shadowbox[1]"><img src="images/thumb/make_up/14.jpg" alt="img14" title="img14" /></a>
          

          <div class="gallerytitle2">Eyeliner permanent make up by Julie </div>
          <a href="images/gallery/55.jpg" rel="shadowbox[1]"><img src="images/thumb/55.jpg" alt="img55" title="img55" /></a>
          <a href="images/gallery/56.jpg" rel="shadowbox[1]"><img src="images/thumb/56.jpg" alt="img56" title="img56" /></a>
          <a href="images/gallery/57.jpg" rel="shadowbox[1]"><img src="images/thumb/57.jpg" alt="img57" title="img57" /></a>
          <a href="images/gallery/58.jpg" rel="shadowbox[1]"><img src="images/thumb/58.jpg" alt="img58" title="img58" /></a>
          <a href="images/gallery/59.jpg" rel="shadowbox[1]"><img src="images/thumb/59.jpg" alt="img59" title="img59" /></a>
          <a href="images/gallery/60.jpg" rel="shadowbox[1]"><img src="images/thumb/60.jpg" alt="img60" title="img60" /></a>
          <a href="images/gallery/61.jpg" rel="shadowbox[1]"><img src="images/thumb/61.jpg" alt="img61" title="img61" /></a>
          
           <div class="gallerytitle2"> Before and after done eyeliner permanent make up by Julie </div>
          <a href="images\gallery\Before_and_after\photo_1.jpg" rel="shadowbox[1]"><img src="images/thumb/Before_and_after/photo_1.jpg" alt="img55" title="img55" /></a>
          <a href="images\gallery\Before_and_after\photo_2.jpg" rel="shadowbox[1]"><img src="images/thumb/Before_and_after/photo_2.jpg" alt="img56" title="img56" /></a>
          <a href="images\gallery\Before_and_after\photo_3.jpg" rel="shadowbox[1]"><img src="images/thumb/Before_and_after/photo_3.jpg" alt="img56" title="img56" /></a>

          <div class="gallerytitle2">Eyebrow permanent make up</div>
          <a href="images/gallery/eyebrow/1.jpg" rel="shadowbox[1]"><img src="images/thumb/eyebrow/1.jpg" alt="img1" title="img1" /></a>
          <a href="images/gallery/eyebrow/2.jpg" rel="shadowbox[1]"><img src="images/thumb/eyebrow/2.jpg" alt="img2" title="img2" /></a>
          <a href="images/gallery/eyebrow/6.jpg" rel="shadowbox[1]"><img src="images/thumb/eyebrow/6.jpg" alt="img6" title="img6" /></a>
          <a href="images/gallery/eyebrow/7.jpg" rel="shadowbox[1]"><img src="images/thumb/eyebrow/7.jpg" alt="img7" title="img7" /></a>
          

          <div class="gallerytitle2">Eyebrow permanent make up (Before &amp; after)</div>
          <a href="images/gallery/Before_and_after/1.jpg" rel="shadowbox[1]"><img src="images/thumb/Before_and_after/1.jpg" alt="img1" title="img1" /></a>
          <a href="images/gallery/Before_and_after/2.jpg" rel="shadowbox[1]"><img src="images/thumb/Before_and_after/2.jpg" alt="img2" title="img2" /></a>
          <a href="images/gallery/Before_and_after/3.jpg" rel="shadowbox[1]"><img src="images/thumb/Before_and_after/3.jpg" alt="img3" title="img3" /></a>
          <a href="images/gallery/Before_and_after/5.jpg" rel="shadowbox[1]"><img src="images/thumb/Before_and_after/5.jpg" alt="img5" title="img5" /></a>
          
          
          <div class="gallerytitle2"> Permanent For Lip Color </div>
          <a href="images/gallery/lip/01.jpg" rel="shadowbox[1]"><img src="images/thumb/lip/01.jpg" alt="lip img01" title="lip img01" /></a>
          <a href="images/gallery/lip/02.jpg" rel="shadowbox[1]"><img src="images/thumb/lip/02.jpg" alt="lip img02" title="lip img02" /></a>
          <a href="images/gallery/lip/03.jpg" rel="shadowbox[1]"><img src="images/thumb/lip/03.jpg" alt="lip img03" title="lip img03" /></a>
          <a href="images/gallery/lip/04.jpg" rel="shadowbox[1]"><img src="images/thumb/lip/04.jpg" alt="lip img04" title="lip img04" /></a>
          <a href="images/gallery/lip/05.jpg" rel="shadowbox[1]"><img src="images/thumb/lip/05.jpg" alt="lip img03" title="lip img05" /></a>
          <a href="images/gallery/lip/06.jpg" rel="shadowbox[1]"><img src="images/thumb/lip/06.jpg" alt="lip img04" title="lip img06" /></a>

          <div class="gallerytitle2"> Microdebrasion Super Hydrade</div>
          <a href="images\gallery\microdebrasion_super_hydrade\7.jpg" rel="shadowbox[1]"><img src="images/thumb/microdebrasion_super_hydrade/7.jpg" alt="img7" title="img7" /></a>
          <a href="images\gallery\microdebrasion_super_hydrade\8.jpg" rel="shadowbox[1]"><img src="images/thumb/microdebrasion_super_hydrade/8.jpg" alt="img8" title="img8" /></a>
          <a href="images\gallery\microdebrasion_super_hydrade\9.jpg" rel="shadowbox[1]"><img src="images/thumb/microdebrasion_super_hydrade/9.jpg" alt="img9" title="img9" /></a>
          <a href="images\gallery\microdebrasion_super_hydrade\10.jpg" rel="shadowbox[1]"><img src="images/thumb/microdebrasion_super_hydrade/10.jpg" alt="img10" title="img10" /></a>

          

          <div class="gallerytitle2">Facelifting treatment</div>
          <a href="images\gallery\facial\1.jpg" rel="shadowbox[1]"><img src="images/thumb/facial/1.jpg" alt="img1" title="img1" /></a>
          <a href="images\gallery\facial\2.jpg" rel="shadowbox[1]"><img src="images/thumb/facial/2.jpg" alt="img2" title="img2" /></a>
          <a href="images\gallery\facial\3.jpg" rel="shadowbox[1]"><img src="images/thumb/facial/3.jpg" alt="img3" title="img3" /></a>
          <a href="images\gallery\facial\4.jpg" rel="shadowbox[1]"><img src="images/thumb/facial/4.jpg" alt="img4" title="img4" /></a>

          <div class="gallerytitle2">Tinting Waxing Eyebrow</div>
          <a href="images\gallery\waxing\1.jpg" rel="shadowbox[1]"><img src="images/thumb/waxing/1.jpg" alt="img1" title="img1" /></a>
          
          
      </div>   -->
  </div>
</div>