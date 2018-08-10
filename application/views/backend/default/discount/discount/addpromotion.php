<?php 
	// print_r($data);
	// print_r($selectCate);
 ?>

      <!-- <script src="http://malsup.github.com/jquery.form.js"></script> -->
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    <?php echo $info['title'] ?> 
    <!-- <small>Description</small> -->
  </h1>
  
  <?php echo $info['breadcrumb'] ?>
  
</section>

<!-- Main content -->
<section class="content">
   <!-- <div class="callout callout-info">
		  <h4>Tip!</h4>

		  <p>Content Tip</p>
		</div>  -->
	<!-- Default box -->
	<div class="box">
		<div class="box-header with-border">
			<h3 class="box-title">Add New <?= $info['page'] ?> </h3>

			<div class="box-tools pull-right">
				<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
					<i class="fa fa-minus"></i></button>
					<button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
						<i class="fa fa-times"></i></button>
			</div>
		</div>
		<div class="box-body">
			<!-- <legend>Form title</legend> -->
			<!-- 	Filename: <input type="text" value="" name="photo" id="photo" readonly style="border:none;"><br>
				<div class="preview" style="display: none;">
	        <img src="">
	      </div> -->

      <!-- <?php echo form_open_multipart('promotion-image-upload/post');?> 
         <input type="file" name="image" size="20"  /><br>
         <input type="submit" class="upload-image" value="Upload" /> 
         
      </form>  -->
			<form action="<?= base_url($info['control']) ?>add" method="POST" role="form"  enctype="multipart/form-data">
				
				<!-- <div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div class="form-group">
							<label for="">Name:</label>
							<input type="text" class="form-control" id="" placeholder="Name" name="name" value="<?= set_value('name') ?>" >
							<span class="errors"><?= form_error('name') ?></span>
						</div>
					</div>	
				</div>
				
			 	<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<label for=""><b>Photo: </b></label>
					  <input type="file" name="photo" class="" />
					  <span class="errors"><?= form_error('photo') ?></span>
					</div>
			
				</div>		 -->
				<!-- <div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div class="form-group">
							<label for="">Description:</label>
							<textarea name="description" id="" class="form-control " rows="3"  placeholder="Description"><?= set_value('description') ?></textarea>
							<span class="errors"><?= form_error('description') ?></span>
						</div>
					</div>	
				</div> -->
	
				
				<!-- <hr>	
				<div class="row mar-top-20">
					<div class="col-xs-2 col-sm-1 col-md-1 col-lg-1">
						<button type="submit" class="btn btn-primary"  name="btn[_Submit]" value="true">Save</button>					
						
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<a href="<?php //echo base_url($this->currentControl.'index') ?>" ><button  class="btn btn-danger" name="btn[_Cancel]" value="true" >Cancel</button> </a>
					</div>
			
				</div>	 -->		
				<!-- <link rel="stylesheet" type="text/css" href="https://github.com/rvera/image-picker/blob/master/image-picker/image-picker.css"> -->
				<!-- <script type="text/javascript" src="https://github.com/rvera/image-picker/blob/master/image-picker/image-picker.js" ></script>
				<script type="text/javascript" src="https://github.com/rvera/image-picker/blob/master/image-picker/image-picker.js" ></script> -->
				<style type="text/css">
					.process-step .btn:focus{outline:none}
.process{display:table;width:100%;position:relative}
.process-row{display:table-row}
.process-step button[disabled]{opacity:1 !important;filter: alpha(opacity=100) !important}
.process-row:before{top:40px;bottom:0;position:absolute;content:" ";width:100%;height:1px;background-color:#ccc;z-order:0}
.process-step{display:table-cell;text-align:center;position:relative}
.process-step p{margin-top:4px}
.btn-circle{width:80px;height:80px;text-align:center;font-size:12px;border-radius:50%}
			/*-----------------*/
			/*ul.thumbnails.image_picker_selector {
  overflow: auto;
  list-style-image: none;
  list-style-position: outside;
  list-style-type: none;
  padding: 0px;
  margin: 0px; }
  ul.thumbnails.image_picker_selector ul {
    overflow: auto;
    list-style-image: none;
    list-style-position: outside;
    list-style-type: none;
    padding: 0px;
    margin: 0px; }
  ul.thumbnails.image_picker_selector li.group {width:100%;} 
  ul.thumbnails.image_picker_selector li.group_title {
    float: none; }
  ul.thumbnails.image_picker_selector li {
    margin: 0px 12px 12px 0px;
    float: left; }
    ul.thumbnails.image_picker_selector li .thumbnail {
      padding: 6px;
      border: 1px solid #dddddd;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none; }
      ul.thumbnails.image_picker_selector li .thumbnail img {
        -webkit-user-drag: none;height: 170px; }
    ul.thumbnails.image_picker_selector li .thumbnail.selected {
      background: #0088cc; }*/
				</style>		
	<div class="process">
   <div class="process-row nav nav-tabs">
    <div class="process-step">
     <button type="button" class="btn btn-info btn-circle" data-toggle="tab" href="#menu1"><i class="fa fa-info fa-3x"></i></button>
     <p><small>Fill<br />information</small></p>
    </div>
    <!-- <div class="process-step">
     <button type="button" class="btn btn-default btn-circle" data-toggle="tab" href="#menu2"><i class="fa fa-file-text-o fa-3x"></i></button>
     <p><small>Fill<br />description</small></p>
    </div> -->
    <div class="process-step">
     <button type="button" class="btn btn-default btn-circle" data-toggle="tab" href="#menu3"><i class="fa fa-image fa-3x"></i></button>
     <p><small>Choose<br />image</small></p>
    </div>
   <!--  <div class="process-step">
     <button type="button" class="btn btn-default btn-circle" data-toggle="tab" href="#menu4"><i class="fa fa-cogs fa-3x"></i></button>
     <p><small>Configure<br />display</small></p>
    </div> -->
    <div class="process-step">
     <button type="button" class="btn btn-default btn-circle" data-toggle="tab" href="#menu5"><i class="fa fa-check fa-3x"></i></button>
     <p><small>Save<br />result</small></p>
    </div>
   </div>
  </div>
  <div class="tab-content">
   <div id="menu1" class="tab-pane fade active in">
    <h3>Fill infomation</h3>
    <div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="form-group">
					<label for="">Name:</label>
					<input type="text" class="form-control" id="" placeholder="Name" name="name" value="<?= set_value('name') ?>" >
					<span class="errors"><?= form_error('name') ?></span>
				</div>
			</div>	
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
				<div class="form-group">
					<label for="">Date From:</label>
					<input type="date" name="date1" id="today-day">
					<!-- <span class="errors"><?= form_error('name') ?></span> -->
				</div>
			</div>	
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
				<div class="form-group">
					<label for="">Date To:</label>
					<input type="date" name="date1" id="today-day">
					<!-- <span class="errors"><?= form_error('name') ?></span> -->
				</div>
			</div>	
		</div>
		<!-- </div> -->
    <ul class="list-unstyled list-inline pull-right col-xs-12 col-sm-12 col-md-12 col-lg-12">
     <li><button type="button" class="btn btn-info next-step">Next <i class="fa fa-chevron-right"></i></button></li>
    </ul>
   </div>
   <!-- <div id="menu2" class="tab-pane fade">
    <h3>Menu 2</h3>
    <p>Some content in menu 2.</p>
    <ul class="list-unstyled list-inline pull-right">
     <li><button type="button" class="btn btn-default prev-step"><i class="fa fa-chevron-left"></i> Back</button></li>
     <li><button type="button" class="btn btn-info next-step">Next <i class="fa fa-chevron-right"></i></button></li>
    </ul>
   </div> -->
   <link rel="stylesheet" type="text/css" href="<?php echo DOMAIN ?>public/image-picker/image-picker.css">
   
   <div id="menu3" class="tab-pane fade">
    <h3>Choose Image</h3>
		<button type="button" class="btn btn-primary selectbtn" id="btn1">Group 1</button>
<button type="button" class="btn btn-primary selectbtn"  id="btn2">Group 2</button>
<button type="button" class="btn btn-primary selectbtn"  id="btn3">Group 3</button>
<br><br><br><br>
<select class="image-picker" name="groupselect" id="group1">
  
    <option data-img-src="https://picsum.photos/200/200/?random" value="5">Group1- 1</option>
    <option data-img-src="https://picsum.photos/230/200/?random" value="6">Group1- 2</option>
    <option data-img-src="https://picsum.photos/150/200/?random" value="7">Group1- 3</option>
    <option data-img-src="https://picsum.photos/270/200/?random" value="8">Group1- 4</option>
</select>
<select class="image-picker" name="groupselect" id="group2"> 
    <option data-img-src="https://picsum.photos/200/200/?random" value="5">Group2- 1</option>
    <option data-img-src="https://picsum.photos/230/200/?random" value="6">Group2- 2</option>
    <option data-img-src="https://picsum.photos/150/200/?random" value="7">Group2- 3</option>
    <option data-img-src="https://picsum.photos/270/200/?random" value="8">Group2- 4</option>
</select>
<select class="image-picker" name="groupselect" id="group3"> 
    <option data-img-src="https://picsum.photos/200/200/?random" value="5">Group3- 1</option>
    <option data-img-src="https://picsum.photos/230/200/?random" value="6">Group3- 2</option>
    <option data-img-src="https://picsum.photos/150/200/?random" value="7">Group3- 3</option>
    <option data-img-src="https://picsum.photos/270/200/?random" value="8">Group3- 4</option>
</select>
<div id="error">
  
</div>
    <!-- <?php if (!empty($selectPhoto)): ?>
   	<select class="image-picker show-labels show-html masonry ">
			<?php foreach ($selectPhoto as $key => $set): ?>
				<option class="col-xs-12 col-sm-6 col-md-4 col-lg-3" data-img-src="<?= base_url().$info['DirPhoto'].$set['photo_promo_filename'] ?>" value="">Cute Kitten 1</option>
			<?php endforeach ?>
		 
		</select>
		<?php endif ?>
		<script type="text/javascript">
    jQuery("select.image-picker").imagepicker({
      // hide_select:  true,
    });

    jQuery("select.image-picker.show-labels").imagepicker({
      hide_select:  false,
      show_label:   false,
    });

    var container = jQuery("select.image-picker.masonry").next("ul.thumbnails");
    container.imagesLoaded(function(){
      container.masonry({
        itemSelector:   "li",
      });
    });

  </script> -->
  <!-- <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script> -->
  <script type="text/javascript" src="<?php echo DOMAIN ?>public/image-picker/image-picker.js"></script>
  <script>
	$(document).ready(function() {
	  $("select.image-picker").hide();
	  $("ul.thumbnails").hide();
	});
	$(".selectbtn").each(function(index, el) {
	// $(".btn").each(function(index, el) {
		// alert("hi");
	  // console.log(el);
	  console.log(index);
	  $(this).click(function(e) {
	    $("#group"+index+1).show();
	     // console.log(index+1);
	    var stt=index+1;
	     $("select.image-picker").hide();
	    $("ul.thumbnails").hide();
	    $("select#group"+stt).show();
	    $("select#group"+stt).next().show();
	  });

	});
	// $("#btn1").click(function(e,el) {
	//   console.log(e);
	//   console.log("clicked btn1");
	//   $("#group1").show();
	//   $("#group1").next().show();
	// });
	$(".image-picker").imagepicker({
	  hide_select : false,
	  limit:2,
	  show_label: true,
	  limit_reached: function(){//call msg when full limit
	    // alert('We are full');
	    console.log('Full Sellect');
	    $("#error").html("<span>Have Error</span>");
	    $("#error span").addClass('error');
	  },
	})
</script>
    <ul class="list-unstyled list-inline pull-left">
     <li><button type="button" class="btn btn-default prev-step"><i class="fa fa-chevron-left"></i> Back</button></li>
     <li><button type="button" class="btn btn-info next-step">Next <i class="fa fa-chevron-right"></i></button></li>
    </ul>
   </div>
  <!--  <div id="menu4" class="tab-pane fade">
    <h3>Menu 4</h3>
    <p>Some content in menu 4.</p>
    <ul class="list-unstyled list-inline pull-right">
     <li><button type="button" class="btn btn-default prev-step"><i class="fa fa-chevron-left"></i> Back</button></li>
     <li><button type="button" class="btn btn-info next-step">Next <i class="fa fa-chevron-right"></i></button></li>
    </ul>
   </div> -->
   <div id="menu5" class="tab-pane fade">
    <h3>Save Result</h3>
    <p>Please click "Done" button to Save</p>
    <ul class="list-unstyled list-inline pull-left">
     <li><button type="button" class="btn btn-default prev-step"><i class="fa fa-chevron-left"></i> Back</button></li>
     <li><button type="button" class="btn btn-success"><i class="fa fa-check"></i> Done!</button></li>
    </ul>
   </div>
  </div>
			</form>
		
		</div>
		<!-- /.box-body -->
		<div class="box-footer">
			<!-- Footer
			{php} echo validation_errors(); {/php} -->

		</div>
		<!-- /.box-footer-->
	</div>
	<!-- /.box -->
	
	<script type="text/javascript">
		// $("select").imagepicker();
		$(function(){
 $('.btn-circle').on('click',function(){
   $('.btn-circle.btn-info').removeClass('btn-info').addClass('btn-default');
   $(this).addClass('btn-info').removeClass('btn-default').blur();
 });

 $('.next-step, .prev-step').on('click', function (e){
   var $activeTab = $('.tab-pane.active');

   $('.btn-circle.btn-info').removeClass('btn-info').addClass('btn-default');

   if ( $(e.target).hasClass('next-step') )
   {
      var nextTab = $activeTab.next('.tab-pane').attr('id');
      $('[href="#'+ nextTab +'"]').addClass('btn-info').removeClass('btn-default');
      $('[href="#'+ nextTab +'"]').tab('show');
   }
   else
   {
      var prevTab = $activeTab.prev('.tab-pane').attr('id');
      $('[href="#'+ prevTab +'"]').addClass('btn-info').removeClass('btn-default');
      $('[href="#'+ prevTab +'"]').tab('show');
   }
 });
});
     //  $("body").on("click",".upload-image",function(e){
     //   $(this).parents("form").ajaxForm(options);
     //  });


     // var options = { 
     //   complete: function(response) 
     //   {
     //     if($.isEmptyObject(response.responseJSON.error)){
     //        alert('Image Upload Successfully.');
     //        $(".preview").css("display","block");
     //        $(".preview").find("img").attr("src","<?php //echo base_url().$DirPhoto ?>"+response.responseJSON.success);
     //        $("#datasave").find('input').attr("value",response.responseJSON.success);
     //        // $("div#image").html("<input type='hidden' value='"+response.responseJSON.success+"'>");
     //        // $("div#image").append($("<input type='hidden' value='"+response.responseJSON.success+"'>"));
     //     }else{
     //        alert('Image Upload Error.');
     //     }
     //   }
     // };


   </script>
	<script type="text/javascript">
		
		

		// $(function() {				    				    
		// 	if(CKEDITOR.instances['description']) {						
		// 		CKEDITOR.remove(CKEDITOR.instances['description']);
		// 	}
		// 	CKEDITOR.replace('description',{});
		// })
	</script>
<?php

/* End of file add.php */
/* Location: ./application/views/backend/default/service/service/add.php */