<?php 
	// print_r($data);
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
			<form action="<?= base_url($info['control']) ?>add" method="POST" role="form"  enctype="multipart/form-data">
				<!-- <legend>Form title</legend> -->
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
						<div class="form-group">
							<label for="">Description:</label>
							<textarea name="description" id="" class="form-control" rows="3"  placeholder="Description"><?= set_value('description') ?></textarea>
							<span class="errors"><?= form_error('description') ?></span>
						</div>
					</div>	
				</div>

				
			 	<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<label for=""><b>Photos: </b></label>
					  <!-- <input type="file" name="photo" class="" /> -->
					  <!-- <span class="errors"><?= form_error('photo') ?></span> -->
					  <div id="fileuploader">Upload</div>
					</div>
			
				</div>		
						
				
				<!-- <div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div class="form-group">
							<label for="">Meta Desription:</label>
							<textarea name="meta_description" id="" class="form-control" rows="3" placeholder="Meta Description"></textarea>
						</div>
					</div>	
				</div>

				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div class="form-group">
							<label for="">Meta Keywords:</label>
							<textarea name="meta_keywords" id="" class="form-control" rows="3"  placeholder="Meta Keywords"></textarea>
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
		$(document).ready(function()
		{
			$("#fileuploader").uploadFile({	
			url:"./upload_file/",
			// url:"./category/upload_file",
			dragDrop: true,
			fileName: "myfile",
			returnType: "json",
			showDelete: true,
			showDownload:false,
			statusBarWidth:600,
			dragdropWidth:600,
			maxFileSize:1024*1024,
			showPreview:true,
			previewHeight: "100px",
			previewWidth: "100px",
			onError: function(files,status,errMsg,pd)
			{
			    //files: list of files
			    //status: error status
			    //errMsg: error message
			    console.log(files);
					console.log(status);
					console.log(errMsg);
					// console.log(pd);
			},
			// onSuccess:function(files,data,xhr)
			// {
			//  console.log(data);
			//  console.log(files);
			//  console.log(xhr);

			// },
			// onLoad:function(obj)
			//    {
			//    	$.ajax({
			// 	    	cache: false,
			// 		    url: "./add_load_file",
			// 	    	dataType: "json",
			// 		    success: function(data) 
			// 		    {
			// 		    	// alert(data);
			// 		    	// console.log(data);
			// 			    for(var i=0;i<data.length;i++)
			//    	    	{ 
			//        			obj.createProgress(data[i]["name"],data[i]["path"],data[i]["size"]);
			//        			// obj.createProgress(data[i]["name"],data[i]["path"]);
			//        		}
			//         }
			// 		});
			//   },
			// deleteCallback: function (data, pd) {
			//     for (var i = 0; i < data.length; i++) {
			//         $.post("./category/delete_file", {op: "delete",name: data[i]},
			//             function (resp,textStatus, jqXHR) {
			//                 //Show Message	
			//                 alert("File Deleted");
			//                 // console.log(resp);

			//             });
			//     }
			//     pd.statusbar.hide(); //You choice.

			// },
			// downloadCallback:function(filename,pd)
			// 	{
			// 		location.href="download.php?filename="+filename;
			// 	}
			});
		});
		</script>
		

<?php

/* End of file add.php */
/* Location: ./application/views/backend/default/service/category/add.php */