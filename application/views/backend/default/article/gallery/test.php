

    <script src="<?php echo base_url()?>js/gallery.js"></script>

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
		    <h3 class="box-title"><?= $info['page'] ?> </h3>

		    <div class="box-tools pull-right">
		      <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
		        <i class="fa fa-minus"></i></button>
		      <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
		        <i class="fa fa-times"></i></button>
		    </div>
		  </div>
		  <div class="box-body">
		  	<h1>Upload File</h1>
					 <form method="post" action="" id="upload_file">
					    <label for="title">Title</label>
					    <input type="text" name="title" id="title" value="" /><br>

					    <label for="userfile">File</label>
					    <input type="file" name="userfile" id="userfile" size="20" /><br>

					    <input type="submit" name="submit" id="submit" />
					 </form>
					 <h2>Files</h2>
					 <div id="files"></div>
					 
					 
		  </div>
		  <!-- /.box-body -->
		  <div class="box-footer">
		    <!-- Footer -->
		  </div>
		  <!-- /.box-footer-->
		</div>
		<!-- /.box -->
  
	

</section>
<!-- /.content -->


	<script type="text/javascript">
		
		$(document).ready(function(){
			$('#datalist').DataTable({
				paging: true,          
			})
		});

	
	</script>