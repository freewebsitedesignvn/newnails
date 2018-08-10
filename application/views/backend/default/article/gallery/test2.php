<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="http://hayageek.github.io/jQuery-Upload-File/4.0.11/uploadfile.css" rel="stylesheet">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="http://hayageek.github.io/jQuery-Upload-File/4.0.11/jquery.uploadfile.min.js"></script>
</head>
<body>
	<div id="fileuploader">Upload</div>
	<script>
		$(document).ready(function()
		{
			$("#fileuploader").uploadFile({	
			url:"./gallery/upload_file1",
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
	
			onLoad:function(obj)
			   {
			   	$.ajax({
				    	cache: false,
					    url: "./gallery/load_file1",
				    	dataType: "json",
					    success: function(data) 
					    {
					    	alert(data);
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
			        $.post("./gallery/delete_file1", {op: "delete",name: data[i]},
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
</body>
</html>