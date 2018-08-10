<?php
if (isset($files) && count($files))
{
   ?>
      <div class="container-fluid">
         
      
         <ul class="row">
            <?php
            foreach ($files as $file)
            {
               ?>
               <li class="col-xs-6 col-sx-4 col-md-3 col-lg-2">
                  <center>
                     <figure  class="col-xs-12 col-sx-12 col-md-12 col-lg-12"></figure><img src="/files/<?php echo $file->filename?>" style="height: 40px;">
                     <figcaption class="col-xs-12 col-sx-12 col-md-12 col-lg-12"> <strong><?php echo $file->title?></strong></figcaption><br />
                     <a href="#" data-file_id="<?php echo $file->id?>"  class="delete_file_link col-xs-12 col-sx-12 col-md-12 col-lg-12"><button type="button" class="btn btn-danger">Delete</button></a>
                  </center>
               </li>
              <!--  <li class="image_wrap">
                  <a href="#" class="delete_file_link" data-file_id="<?php echo $file->id?>">Delete</a>
                  <strong><?php echo $file->title?></strong>
                  <br />
                  <img src="/files/<?php echo $file->filename?>" style="height: 40px;">
               </li> -->
               <?php
            }
            ?>
         </ul>

      </div>
   </form>
   <?php
}
else
{
   ?>
   <p>No Files Uploaded</p>
   <?php
}
?>