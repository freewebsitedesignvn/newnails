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
			<h3 class="box-title">Edit {$page_name} </h3>

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
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div class="form-group">
							<label for="">Title:</label>
							<input type="text" class="form-control" id="" placeholder="Title" name="" required="required">
						</div>
					</div>	
				</div>
				
				{* <div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div class="form-group">
							<label for="">Description:</label>
							<textarea name="" id="" class="form-control" rows="3" required="required" placeholder="Description"></textarea>
						</div>
					</div>	
				</div> *}

			{* 	<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div class="form-group">
							<label for="">Content:</label>
							<textarea name="txt_content" id="" class="form-control" rows="5" required="required" placeholder="Content" style=""></textarea>
						</div>
					</div>	
				</div> *}
				
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<label for=""><b>Avatar: </b></label>
						  <input type="file" name="avatar" class="" />
					</div>
			
				</div>		
				<hr>			
				
				{* <div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div class="form-group">
							<label for="">Meta Desription:</label>
							<textarea name="" id="" class="form-control" rows="3" required="required" placeholder="Meta Description"></textarea>
						</div>
					</div>	
				</div>

				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div class="form-group">
							<label for="">Meta Keywords:</label>
							<textarea name="" id="" class="form-control" rows="3" required="required" placeholder="Meta Keywords"></textarea>
						</div>
					</div>	
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div class="form-group">
								<label for=""><b>Status: </b></label>								
								{html_options name=foo options=$Actives selected=$ActiveSelect}
						</div>
					</div>	
				</div> *}


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

		$(function() {				    				    
			if(CKEDITOR.instances['txt_content']) {						
				CKEDITOR.remove(CKEDITOR.instances['txt_content']);
			}
			// CKEDITOR.config.width = 600;
		    // CKEDITOR.config.height = 150;
			CKEDITOR.replace('txt_content',{});
		})
	</script>
	{/block}

<!-- /* End of file add.tpl */
/* Location: ./application/views/templates/backend/default/article/gallery/add.tpl */ -->