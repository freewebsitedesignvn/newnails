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
		
      
			<!-- <form action="<?= base_url($info['control']) ?>add" method="POST" role="form"  enctype="multipart/form-data"> -->
				<?php include_once 'addpromotionnew_form.php'; ?>
				
			<!-- </form> -->
		
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