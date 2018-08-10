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
		  	<p><a href="<?= base_url($info['control']) ?>add"><button type="button" class="btn btn-primary"><i class="fas fa-plus"></i> Add <?= $info['page'] ?> </button></a></p>
		  	<?php 
				// print_r($data);
			 ?>
		    <table id="datalist" class="table table-striped table-bordered" style="width:100%">
	        <thead>
            <tr>
              <!-- <th width="6%">ID</th> -->
              <th>Title</th>
              <th>Photo</th>
              <!-- <th width="25%">Date Created</th>  -->
              <th width="15%">Action</th>
            </tr>
	        </thead>
	        <tbody>
	        	<!-- {foreach $list as $key => $item}	        		 -->
	        	<?php if (!empty($data)) :?>
		        	<?php foreach ($data as $key => $set) :?>
	            <tr>
	              <!-- <td><?= $set['a_id'] ?></td> -->
	              <td><?= $set['a_title'] ?></td>
	               <td><img src="<?= base_url() ?>/upload/<?= $set['a_photo'] ?>" class="img-responsive" alt="Image" style="height: 70px;"></td>
	              <!-- <td><?= $set['a_timecreate'] ?></td>  -->
	              <td>
	              	<!-- <a href="<?= base_url($info['control']) ?>edit/<?= $set['a_id'] ?>"><span class="fa fa-pencil-square-o btn btn-primary"></span></a> -->
	              	<a href="<?= base_url($info['control']) ?>delete/<?= $set['a_id'] ?>"><span class="fa fa-trash btn btn-danger"></span>	</a>
	            	</td>
	            </tr>
	            <?php endforeach; ?>
            <?php else: ?>
            	<tr><td colspan="4" class="text-center">No data</td></tr>
            <?php endif; ?>
	        </tbody>
	        <tfoot>
            <tr>
              <!-- <th width="6%">ID</th> -->
              <th>Title</th>
              <th>Photo</th>
              <!-- <th width="25%">Date Created</th>  -->
              <th width="15%">Action</th>
            </tr>
            
	        </tfoot>
	    </table>
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