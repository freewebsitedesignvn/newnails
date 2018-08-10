<html>


   <head> 
      <title>Image Upload Example from Scratch</title>
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
      <script src="http://malsup.github.com/jquery.form.js"></script>
   </head>


   <body> 


      <?php echo form_open_multipart('ajax-image-upload/post');?> 
         <input type="file" name="image" size="20" multiple />
         <input type="submit" class="upload-image" value="upload" /> 
         
      </form> 
			<form method="post" action="<?= base_url()?>show-post" id="datasave">
				Filename: <input type="text" value="" name="photo" id="photo" readonlyc style="border:none;">
				<button type="submit">Save</button>
			</form>	

      <div class="preview" style="display: none;">
        <img src="">
      </div>


   </body>


   <script type="text/javascript">
      $("body").on("click",".upload-image",function(e){
       $(this).parents("form").ajaxForm(options);
      });


     var options = { 
       complete: function(response) 
       {
         if($.isEmptyObject(response.responseJSON.error)){
            alert('Image Upload Successfully.');
            $(".preview").css("display","block");
            $(".preview").find("img").attr("src","<?= base_url() ?>upload/"+response.responseJSON.success);
            $("#datasave").find('input').attr("value",response.responseJSON.success);
            // $("div#image").html("<input type='hidden' value='"+response.responseJSON.success+"'>");
            // $("div#image").append($("<input type='hidden' value='"+response.responseJSON.success+"'>"));
         }else{
            alert('Image Upload Error.');
         }
       }
     };


   </script>


</html>
