<?php 
	// print_r($data);
	// print_r($selectCate);
 ?>
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
			<form action="<?= base_url($info['control']) ?>edit/<?= $data['disc_type_id'] ?>" method="POST" role="form"  enctype="multipart/form-data">
				<!-- <legend>Form title</legend> -->
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div class="form-group">
							<label for="">Name:</label>
							<input type="text" class="form-control" id="" placeholder="Name" name="name" value="<?= set_value('name',$data['disc_type_name']) ?>" >
							<span class="errors"><?= form_error('name') ?></span>
						</div>
					</div>	
				</div>
				
			 	<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<label for=""><b>Photo: </b></label>
						<?php if (!empty($data['cate_photo'])) :?>
							<div class="filehavedata row">
								<?php foreach ( $data['cate_photo'] as $key => $set) :?>
								
									<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 setphoto" style="margin: 0 0 10px 0;" >
										<center style="padding: 5px;background: #f3f3f3;">
											<input type="hidden" name="photo[]" value='<?= $set ?>'>
											<img src="<?= base_url($info['DirPhoto']).$set ?>" style="max-height: 70px;margin-bottom: 5px;" class="img-responsive">
											<button type="button" class="btn btn-danger btnDel" id="btnDel[<?= $key ?>]" class="" >Delete</button>
										</center>
									</div>
								<?php endforeach; ?>
							<!-- <div id="upload"></div> -->
							</div>
						<?php else: ?>

						<?php endif; ?>
							<div id="filenodata">
								<input type="file" name="photo[]" class="" multiple/>
						  	<!-- <span class="errors"><?= form_error('photo') ?></span> -->
							</div>
					</div>
			
				</div>		
						
				
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
		
	   	$(".btnDel").click(function() {
	   		$(this).parent().parent().hide();
	   		$(this).parent().parent().remove();
	   		// console.log($(this).parent().html());

	   	});
	   
		</script>		
	<script type="text/javascript">
		
		

		// $(function() {				    				    
		// 	if(CKEDITOR.instances['content']) {						
		// 		CKEDITOR.remove(CKEDITOR.instances['content']);
		// 	}
		// 	CKEDITOR.replace('content',{});
		// })
	</script>
<?php

/* End of file add.php */
/* Location: ./application/views/backend/default/discount/type/add.php */