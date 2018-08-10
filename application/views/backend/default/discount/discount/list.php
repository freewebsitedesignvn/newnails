<?php 
	// print_r($info);
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
		  	<div class="container">
		  		<div class="row">
		  			<?php if (!empty($data)): ?>
		  				<?php foreach ($data as $key => $set): ?>
		  					 <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
		  					 		<a href="./discount/listpromotion/<?= $set['disc_type_id'] ?>"><button type="button" class="<?= $set['class'] ?> btn-lg btn-block"><?= $set['disc_type_name'] ?></button></a>
		  					 </div>
		  				<?php endforeach ?>
		  			<?php else: ?>
		  				<center><h3>No Data</h3></center>
		  			<?php endif ?>
		  		</div>
		  	</div>
		  	<!-- <p><a href="<?= base_url($info['control']) ?>add"><button type="button" class="btn btn-primary"><i class="fas fa-plus"></i> Add <?= $info['page'] ?> </button></a></p> -->
		  	
		    <!-- <table id="datalist" class="table table-striped table-bordered" style="width:100%">
	        <thead>
            <tr>
              <th>Name</th>
              <th width="auto">Action</th>
            </tr>
	        </thead>
	        <tbody>
	        	<?php //if (!empty($data)) :?>
		        	<?php //foreach ($data as $key => $set) :?>
	            <tr>
	              <td><?php //echo $set['disc_type_name'] ?></td>
	              <td>
	              	<a href="<?= base_url($info['control']) ?>edit/<?php //echo $set['disc_type_id'] ?>"><span class="fa fa-pencil-square-o btn btn-primary"></span></a>
	              	<a href="<?= base_url($info['control']) ?>delete/<?php //echo $set['disc_type_id'] ?>"  title="Delete"><span class="fa fa-trash btn btn-danger"></span>	</a>
	            	</td>
	            </tr>
	            <?php //endforeach; ?>
            <?php //else: ?>
            	<tr><td colspan="4" class="text-center">No data</td></tr>
            <?php //endif; ?>
	        </tbody>
	        <tfoot>
            <tr>
              
              <th>Name</th>
              <th width="auto">Action</th>
            </tr>
            
	        </tfoot>
	    </table> -->
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
				// "columns": 
				// 	[
				// 		{"name": "first", "orderable": "false"},
				// 		// {"name": "second", "orderable": "true"},
				// 		// {"name": "third", "orderable": "true"},
				// 		// {"name": "fourth", "orderable": "true"}
				// 	]
			})
		});

	
	</script>
<?php
/* End of file list.php */
/* Location: ./application/views/backend/default/discount/type/list.php */
