{extends file='backend/default/common/layout.tpl'}
{block name='fileHeader'}
{include file="../../common/files_header.tpl"}
{/block}
{block name='Page_breadcrumb'}
	<h1>
		{$page_name} Management 
		{* <small>Description</small> *}
	</h1>
	<ol class="breadcrumb">
	{foreach $breadcrumb as $set}
		<li><a href="{$set.link}" class="{if $set@last}active{else}{/if}">{if $set@first}<i class="fa fa-dashboard"></i>{/if}{$set.name}</a></li>
	{/foreach}
	</ol>
{/block}
{block name='Page_content'}
	{* <div class="callout callout-info">
	  <h4>Tip!</h4>

	  <p>Content Tip</p>
	</div> *}
	<!-- Default box -->
	<div class="box">
		<div class="box-header with-border">
			<h3 class="box-title">Add New User </h3>

			<div class="box-tools pull-right">
				<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
					<i class="fa fa-minus"></i></button>
					<button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
						<i class="fa fa-times"></i></button>
			</div>
		</div>
		<div class="box-body">
			<form action="" method="POST" role="form">
				{* <legend>Form title</legend> *}
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
						<div class="form-group">
							<label for="">First name:</label>
							<input type="text" class="form-control" id="" placeholder="First name" name="" required="required">
						</div>
					</div>						
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
					
						<div class="form-group">
							<label for="">Last name:</label>
							<input type="text" class="form-control" id="" placeholder="Last name" name="" required="required">
						</div>

					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
						<div class="form-group">
							<label for="">Nick name:</label>
							<input type="text" class="form-control" id="" placeholder="Nick name" name="" required="required">
						</div>
					</div>						
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
					
						<div class="form-group">
							<label for="">Email:</label>
							<input type="email" class="form-control" id="" placeholder="Email" name="" required="required">
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
						<div class="form-group">
							<label for="" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">Phone:</label> 
							{* <div class="form-row"> *}
								{html_options name=codephone options=$Codephones selected=$codephoneSelect separator='' class="col-xs-3 col-sm-4 col-md-3 col-lg-3"}
								<input type="number" class="col-xs-9 col-sm-8 col-md-9 col-lg-9" id="" placeholder="Phone" name="numberphone" required="required" style="height: 34px;">
							{* </div> *}
							
						</div>	
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
						<div class="form-group">
							<label for="">Group :</label><br>

							{html_options name=group options=$group  separator='<br>'}
							{* {html_options name=group options=$group selected=$groupSelect separator=''} *}
							{* <input type="number" class="form-control" id="" placeholder="Group name" name="" required="required"> *}
						</div>	
					</div>
			
				</div>				

				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
						<div class="form-group">
							<label for="">Password :</label>
							<input type="password" class="form-control" id="" placeholder="Password" name="" required="required">
						</div>		
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
						<div class="form-group">
							<label for="">Confirm Password :</label>
							<input type="password" class="form-control" id="" placeholder="Confirm Password" name="" required="required">
						</div>
					</div>
			
				</div>			

				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
						<label for=""><b>Agent or Owner: </b></label>
						{html_options name=typeaccount options=$typeAccount selected=$typeSelect separator=''}
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
						<label for=""><b>Status: </b></label>
						{html_options name=status options=$Actives selected=$ActiveSelect separator=''}
					</div>
			
				</div>				
				{* <div class="row">
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
						<label for=""><b>Avatar: </b></label>
						<div class="upload-btn-wrapper">
						  <input type="file" name="avatar" class="btnfile" />
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
					</div>
			
				</div>		 *}			
				<div class="row mar-top-20">
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
						<button type="submit" class="btn btn-primary">Save</button>
						<a href=""><button  class="btn btn-danger">Cancel</button></a>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
					</div>
			
				</div>				
				
			</form>
		
		</div>
		<!-- /.box-body -->
		<div class="box-footer">
			{* Footer *}
		</div>
		<!-- /.box-footer-->
	</div>
	<!-- /.box -->
{/block}
{block name='menuLeft'}{include file="../../common/menuleft.tpl"}{/block}
{block name='menuProfile'}{include file="../../common/menuprofile.tpl"}{/block}
{block name='fileFooter'}{include file="../../common/files_footer.tpl"}{/block}
{block name='JSCodeArea'}
	<script type="text/javascript">
		$(document).ready(function() {
			$('#datalist').DataTable( {
				paging: true,          
			})
		} );

	</script>
	{/block}

{* /* End of file add.tpl */
/* Location: ./application/views/templates/backend/default/account/account/add.tpl */ *}