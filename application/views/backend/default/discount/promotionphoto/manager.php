<!-- <!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="http://hayageek.github.io/jQuery-Upload-File/4.0.11/uploadfile.css" rel="stylesheet">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="http://hayageek.github.io/jQuery-Upload-File/4.0.11/jquery.uploadfile.min.js"></script>
</head>
<body> -->
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
			<h3 class="box-title"><!-- Add New <?= $info['page'] ?> --> </h3>

			<div class="box-tools pull-right">
				<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
					<i class="fa fa-minus"></i></button>
					<button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
						<i class="fa fa-times"></i></button>
			</div>
		</div>
		<div class="box-body">
			<div id="fileuploader">Upload</div>
			<div id="eventsmessage"></div>
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
		
		

		// $(function() {				    				    
		// 	if(CKEDITOR.instances['content']) {						
		// 		CKEDITOR.remove(CKEDITOR.instances['content']);
		// 	}
		// 	CKEDITOR.replace('content',{});
		// })
	</script>
	
	<script>
		$(document).ready(function()
		{
			$("#fileuploader").uploadFile({	
			url:"./promotionphoto/upload_file",
			dragDrop: true,
			multiple:false,

			fileName: "myfile",
			returnType: "json",
			showError:false,
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
			    console.log(pd);
			    $("#eventsmessage").html($("#eventsmessage").html()+"<br/>Error for: "+JSON.stringify(errMsg));
			},
			onLoad:function(obj)
			   {
			   	$.ajax({
				    	cache: false,
					    url: "./promotionphoto/load_file1",
				    	dataType: "json",
					    success: function(data) 
					    {
					    	// alert(data);
					    	// console.log(data);
						    for(var i=0;i<data.length;i++)
			   	    	{ 
			       			obj.createProgress(data[i]["name"],data[i]["path"],data[i]["size"]);
			       		}
			        }
					});
			  },
			deleteCallback: function (data, pd) {
			    for (var i = 0; i < data.length; i++) {
			        $.post("./promotionphoto/delete_file1", {op: "delete",name: data[i]},
			            function (resp,textStatus, jqXHR) {
			                //Show Message	
			                alert("File Deleted");
			                // console.log(resp);

			            });
			    }
			    pd.statusbar.hide(); //You choice.

			},
			downloadCallback:function(filename,pd)
				{
					location.href="download.php?filename="+filename;
				}
			});
		});
		</script>
<!-- </body>
</html> -->