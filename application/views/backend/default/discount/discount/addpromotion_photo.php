<?php 
$dataselect=array();
$dataselect[]=array('name'=>'photo1.1','cateid'=>1);
$dataselect[]=array('name'=>'photo1.2','cateid'=>1);
$dataselect[]=array('name'=>'photo1.3','cateid'=>1);
$dataselect[]=array('name'=>'photo2.1','cateid'=>2);
$dataselect[]=array('name'=>'photo2.2','cateid'=>2);
$dataselect[]=array('name'=>'photo2.3','cateid'=>2);
$dataselect[]=array('name'=>'photo2.4','cateid'=>2);
$dataselect[]=array('name'=>'photo3.1','cateid'=>3);
$dataselect[]=array('name'=>'photo3.2','cateid'=>3);
$dataselect[]=array('name'=>'photo3.3','cateid'=>3);
$dataselect[]=array('name'=>'photo3.4','cateid'=>3);
$dataselect[]=array('name'=>'photo3.5','cateid'=>3);
$dataselect[]=array('name'=>'photo3.6','cateid'=>3);

$datacate=array();
$datacate[]=array('catename'=>'Cate 1','cateid' =>1);
$datacate[]=array('catename'=>'Cate 2','cateid' =>2);
$datacate[]=array('catename'=>'Cate 3','cateid' =>3);

 ?>
<?php if (!empty($datacate)): ?>
	<?php foreach ($datacate as $key0 => $set1): ?>
		<button type="button" class="btn btn-primary selectbtn" id="btn<?= $set1['cateid'] ?>"><?= $set1['catename'] ?></button>
	<?php endforeach ?>
<?php endif ?>

<?php if (!empty($datacate)): ?>
	<?php foreach ($datacate as $key1 => $set1): ?>
		<?php if (!empty($dataselect)): ?>
			<select class="image-picker" name="groupselect" id="group<?= $set1['cateid']?>">  
			<?php foreach ($dataselect as $key2 => $set2): ?>
				<?php if ($set1['cateid'] == $set2['cateid']): ?>
					<option data-img-src="https://picsum.photos/200/200/?random" value="5" ><?= $set2['name'] ?></option>
				<?php endif ?>
				
			<?php endforeach ?>
			</select>
		<?php endif ?>
	<?php endforeach ?>
<?php endif ?>

<!-- <script>
		$(document).ready(function() {
		  $("select.image-picker").hide();
		  $("ul.thumbnails").hide();
		});
		$(".selectbtn").each(function(index, el) {
		// $(".btn").each(function(index, el) {
			// alert("hi");
		  // console.log(el);
		  // console.log(index);
		  $(this).click(function(e) {
		    $("#group"+index+1).show();
		     // console.log(index+1);
		    var stt=index+1;
		     $("select.image-picker").hide();
		    $("ul.thumbnails").hide();
		    // $("select#group"+stt).hide();
		    $("select#group"+stt).show();
		    $("select#group"+stt).next().show();
		  });

		});
		
		$(".image-picker").imagepicker({
		  hide_select : false,
		  limit:2,
		  show_label: true,
		  limit_reached: function(){//call msg when full limit
		    // alert('We are full');
		    console.log('Full Sellect');
		    $("#error").html("<span>Have Error</span>");
		    $("#error span").addClass('error');
		  },
		})
</script> -->
<hr>
<!-- ------------------------------------------------v2 -->
<!-- <center><button type="button" class="btn btn-primary selectbtn" id="btn1">Group 1</button>
<button type="button" class="btn btn-primary selectbtn"  id="btn2">Group 2</button>
<button type="button" class="btn btn-primary selectbtn"  id="btn3">Group 3</button>
</center>
<br><br><br><br>

<select class="image-picker" name="groupselect" id="group1">  
    <option data-img-src="https://picsum.photos/200/200/?random" value="5">Group1- 1</option>
    <option data-img-src="https://picsum.photos/230/200/?random" value="6">Group1- 2</option>
    <option data-img-src="https://picsum.photos/150/200/?random" value="7">Group1- 3</option>
    <option data-img-src="https://picsum.photos/270/200/?random" value="8">Group1- 4</option>
</select>
<select class="image-picker" name="groupselect" id="group2"> 
    <option data-img-src="https://picsum.photos/200/200/?random" value="5">Group2- 1</option>
    <option data-img-src="https://picsum.photos/230/200/?random" value="6">Group2- 2</option>
    <option data-img-src="https://picsum.photos/150/200/?random" value="7">Group2- 3</option>
    <option data-img-src="https://picsum.photos/270/200/?random" value="8">Group2- 4</option>
</select>
<select class="image-picker" name="groupselect" id="group3"> 
    <option data-img-src="https://picsum.photos/200/200/?random" value="5">Group3- 1</option>
    <option data-img-src="https://picsum.photos/230/200/?random" value="6">Group3- 2</option>
    <option data-img-src="https://picsum.photos/150/200/?random" value="7">Group3- 3</option>
    <option data-img-src="https://picsum.photos/270/200/?random" value="8">Group3- 4</option>
</select> -->
	<!-- <div id="error">			  
	</div> -->
<!-- <script>
		$(document).ready(function() {
		  $("select.image-picker").hide();
		  $("ul.thumbnails").hide();
		});
		$(".selectbtn").each(function(index, el) {
		// $(".btn").each(function(index, el) {
			// alert("hi");
		  // console.log(el);
		  // console.log(index);
		  $(this).click(function(e) {
		    $("#group"+index+1).show();
		     // console.log(index+1);
		    var stt=index+1;
		     $("select.image-picker").hide();
		    $("ul.thumbnails").hide();
		    $("select#group"+stt).hide();
		    // $("select#group"+stt).show();
		    $("select#group"+stt).next().show();
		  });

		});
		
		$(".image-picker").imagepicker({
		  hide_select : false,
		  limit:2,
		  show_label: true,
		  limit_reached: function(){//call msg when full limit
		    // alert('We are full');
		    console.log('Full Sellect');
		    $("#error").html("<span>Have Error</span>");
		    $("#error span").addClass('error');
		  },
		})
</script> -->
	<!-- ----------------V1 -->
  <!-- <?php if (!empty($selectPhoto)): ?>
 	<select class="image-picker show-labels show-html masonry ">
		<?php foreach ($selectPhoto as $key => $set): ?>
			<option class="col-xs-12 col-sm-6 col-md-4 col-lg-3" data-img-src="<?= base_url().$info['DirPhoto'].$set['photo_promo_filename'] ?>" value="">Cute Kitten 1</option>
		<?php endforeach ?>
	 
	</select>
	<?php endif ?>
	
<!-- <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script> -->
		  
<script>
		$(document).ready(function() {
		  $("select.image-picker").hide();
		  $("ul.thumbnails").hide();
		});
		$(".selectbtn").each(function(index, el) {
		// $(".btn").each(function(index, el) {
			// alert("hi");
		  // console.log(el);
		  console.log(index);
		  $(this).click(function(e) {
		    $("#group"+index+1).show();
		     // console.log(index+1);
		    var stt=index+1;
		     $("select.image-picker").hide();
		    $("ul.thumbnails").hide();
		    // $("select#group"+stt).hide();
		    $("select#group"+stt).show();

		    $("select#group"+stt).next().show();
		    // ---------------------------
		    console.log($("select#group"+stt).next().find("div").hasClass('selected'));
		    $("select#group"+stt).next().find("div.thumbnail").removeClass('selected');
		    $("div.thumbnail").each(function(index, el) {
		    	$(this).click(function(event) {
		    		$("div.thumbnail").removeClass('selected');
		    		$(this).addClass('selected');
		    	});
		    });
		  });

		});
		
		$(".image-picker").imagepicker({
		  // hide_select : true,
		  // limit:2,
		  // show_label: true,
		  // limit_reached: function(){//call msg when full limit
		  //   // alert('We are full');
		  //   console.log('Full Sellect');
		  //   $("#error").html("<span>Have Error</span>");
		  //   $("#error span").addClass('error');
		  // },
		});
</script>