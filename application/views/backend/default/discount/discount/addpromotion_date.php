
<link rel="stylesheet" type="text/css" href="<?= DOMAIN ?>public/datepicker/css/bootstrap-datepicker3.css">
<script type="text/javascript" src="<?= DOMAIN ?>public/datepicker/js/bootstrap-datepicker.js"></script>
<!-- <link rel="stylesheet" type="text/css" href="<?= DOMAIN ?>public/datepicker/js/bootstrap-datepicker.js"> -->

<div class="input-daterange input-group" id="datepicker">
    <input type="text" class="input-sm form-control" name="from" placeholder="From date" />
    <span class="input-group-addon">to</span>
    <input type="text" class="input-sm form-control" name="to" placeholder="To date" />
</div>

<script type='text/javascript'>
$(function(){
	$('.input-daterange').datepicker({
	    autoclose: true
	});
});

</script>

<!-- <div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div class="form-group">
			<label for="">Name:</label>
			<input type="text" class="form-control" id="" placeholder="Name" name="name" value="<?= set_value('name') ?>" >
			<span class="errors"><?= form_error('name') ?></span>
		</div>
	</div>	
</div>
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
		<div class="form-group">
			<label for="">Date From:</label>
			<input type="date" name="date1" id="today-day">
			<span class="errors"><?= form_error('name') ?></span>
		</div>
	</div>	
	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
		<div class="form-group">
			<label for="">Date To:</label>
			<input type="date" name="date1" id="today-day">
			<span class="errors"><?= form_error('name') ?></span>
		</div>
	</div>	
</div> -->