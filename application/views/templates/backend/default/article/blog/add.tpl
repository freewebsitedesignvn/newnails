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
			<h3 class="box-title">Add New {$page_name} </h3>

			<div class="box-tools pull-right">
				<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
					<i class="fa fa-minus"></i></button>
					<button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
						<i class="fa fa-times"></i></button>
			</div>
		</div>
		<div class="box-body">
			<form action="add" method="POST" role="form">
				{* <legend>Form title</legend> *}
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div class="form-group">
							<label for="">Title:</label>
							<input type="text" class="form-control" id="" placeholder="Title" name="title" value="{set_value('title')}" >
							<span class="errors">{form_error('title')}</span>
						</div>
					</div>	
				</div>
				
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div class="form-group">
							<label for="">Description:</label>
							<textarea name="description" id="" class="form-control" rows="3"  placeholder="Description">{set_value('description')}</textarea>
							<span class="errors">{form_error('description')}</span>
						</div>
					</div>	
				</div>

				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div class="form-group">
							<label for="">Content:</label>
							<textarea name="content" id="" class="form-control" rows="5" placeholder="Content" style="" name="description">{set_value('content')}</textarea>
							<span class="errors">{form_error('content')}</span>
						</div>
					</div>	
				</div>
				
			{* 	<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<label for=""><b>Avatar: </b></label>
					  <input type="file" name="avatar" class="" />
					</div>
			
				</div>	 *}	
				<hr>			
				
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div class="form-group">
							<label for="">Meta Desription:</label>
							<textarea name="meta_description" id="" class="form-control" rows="3" placeholder="Meta Description"></textarea>
						</div>
					</div>	
				</div>

				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div class="form-group">
							<label for="">Meta Keywords:</label>
							<textarea name="meta_keywords" id="" class="form-control" rows="3"  placeholder="Meta Keywords"></textarea>
						</div>
					</div>	
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div class="form-group">
								<label for=""><b>Status: </b></label>								
								{html_options name=active options=$Actives selected=$ActiveSelect}
						</div>
					</div>	
				</div>


				<div class="row mar-top-20">
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
						<button type="submit" class="btn btn-primary"  name="btn[_Submit]" value="true">Save</button>
						{* <button class="btn btn-danger" name="btn[_Cancel]" value="true">Cancel</button> *}
						{* <a href="/index"><button  class="btn btn-danger">Cancel</button></a> *}
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
					</div>
			
				</div>				
				
			</form>
		
		</div>
		<!-- /.box-body -->
		<div class="box-footer">
			{* Footer *}
			{* {php} echo validation_errors(); {/php} *}

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
			CKEDITOR.replace('content',{});
		})
	</script>
	{/block}

<!-- /* End of file add.tpl */
/* Location: ./application/views/templates/backend/default/article/blog/add.tpl */ -->