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
			

      <!-- <?php echo form_open_multipart('promotion-image-upload/post');?> 
         <input type="file" name="image" size="20"  /><br>
         <input type="submit" class="upload-image" value="Upload" /> 
         
      </form>  -->
			<form action="<?= base_url($info['control']) ?>add" method="POST" role="form"  enctype="multipart/form-data">
				<!-- <legend>Form title</legend> -->
			<!-- 	Filename: <input type="text" value="" name="photo" id="photo" readonly style="border:none;"><br>
				<div class="preview" style="display: none;">
	        <img src="">
	      </div> -->
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
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<label for=""><b>Photo: </b></label>
					  <input type="file" name="photo" class="" />
					  <!-- <span class="errors"><?= form_error('photo') ?></span> -->
					</div>
			
				</div>		
				<!-- <div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div class="form-group">
							<label for="">Description:</label>
							<textarea name="description" id="" class="form-control " rows="3"  placeholder="Description"><?= set_value('description') ?></textarea>
							<span class="errors"><?= form_error('description') ?></span>
						</div>
					</div>	
				</div> -->
	
				
				<hr>	
				<div class="row mar-top-20">
					<div class="col-xs-2 col-sm-1 col-md-1 col-lg-1">
						<!-- <button type="submit" class="btn btn-primary" >Save</button> -->
						<button type="submit" class="btn btn-primary"  name="btn[_Submit]" value="true">Save</button>					
						
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<a href="<?= base_url($this->currentControl.'index') ?>" ><button  class="btn btn-danger" name="btn[_Cancel]" value="true" >Cancel</button> </a>
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