<?php 
	// print_r($data);
	// print_r($selectCate);
 ?>

      <!-- <script src="http://malsup.github.com/jquery.form.js"></script> -->
<link rel="stylesheet" type="text/css" href="<?php echo DOMAIN ?>public/image-picker/image-picker.css">
	     <script type="text/javascript" src="<?php echo DOMAIN ?>public/image-picker/image-picker.js"></script>      
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
								
				</style>
					
	<div class="process">
   <div class="process-row nav nav-tabs">
    <div class="process-step">
		<button type="button" class="btn btn-info btn-circle" data-toggle="tab" href="#menu1"><i class="fa fa-info fa-3x"></i></button>
		<p><small>Fill<br />information</small></p>
    </div>
    <div class="process-step">
		<button type="button" class="btn btn-info btn-circle" data-toggle="tab" href="#menu2"><i class="fa fa-info fa-3x"></i></button>
		<p><small>Fill<br />information2</small></p>
    </div>
    <!-- <div class="process-step">
     <button type="button" class="btn btn-default btn-circle" data-toggle="tab" href="#menu2"><i class="fa fa-file-text-o fa-3x"></i></button>
     <p><small>Fill<br />description</small></p>
    </div> -->
    <div class="process-step">
     	<button type="button" class="btn btn-default btn-circle" data-toggle="tab" href="#menu3"><i class="fa fa-image fa-3x"></i></button>
    	<p><small>Choose<br />image</small></p>
    </div>
    <!-- <div class="process-step">
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
		    <?php include_once 'addpromotion_date.php'; ?>
				<!-- </div> -->
		    <ul class="list-unstyled list-inline pull-right col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<li><button type="button" class="btn btn-info next-step">Next <i class="fa fa-chevron-right"></i></button></li>
		    </ul>
		</div>

		<div id="menu2" class="tab-pane fade">
		    <h3>Save Result</h3>
		    <p>Please click "Done" button to Save</p>
		    <ul class="list-unstyled list-inline pull-left">
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
	  
	   
	   <div id="menu3" class="tab-pane fade">
		    <h3>Choose Image</h3>
		    <?php include_once 'addpromotion_photo.php'; ?>			
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
			   // console.log(e.target);
			   $('.btn-circle.btn-info').removeClass('btn-info').addClass('btn-default');

			   if ( $(e.target).hasClass('next-step') )
			   {
			      var nextTab = $activeTab.next('.tab-pane').attr('id');
			      console.log(nextTab);
			      $('[href="#'+ nextTab +'"]').addClass('btn-info').removeClass('btn-default');
			      $('[href="#'+ nextTab +'"]').tab('show');
			   }
			   else
			   {
			      var prevTab = $activeTab.prev('.tab-pane').attr('id');

			      console.log(prevTab);
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