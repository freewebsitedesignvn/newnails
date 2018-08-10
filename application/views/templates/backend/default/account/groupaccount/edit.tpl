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
			<li><a href="{if $set@last}#{else}{$set.link}{/if}" class="{if $set@last}active{else}{/if}">{if $set@first}<i class="fa fa-dashboard"></i>{/if}{$set.name}</a></li>
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
				<h3 class="box-title">Edit Group </h3>

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

							<div class="form-group">
								<label for="">Group name:</label>
								<input type="text" class="form-control" id="" placeholder="Group name" name="" required="required">
							</div>
							<div class="form-group">
								<label for="">Description:</label>
								<textarea name="" id="input" class="form-control" rows="3"  placeholder="Description"></textarea>
							</div>
							<div class="radio">
								<label for=""><b>Status: </b></label>
								{html_options name='id' options=$myOptions selected=$mySelect separator=''}
								{* <div class="radio"> *}
								{* <label><input type="radio" name="status" value="1">Active</label> *}
								{* </div> *}
								{* <div class="radio"> *}
								{* <label><input type="radio" name="status" value="0">Disable</label> *}
								{* </div> *}


							</div>


							<button type="submit" class="btn btn-primary">Save</button>
							<a href=""><button  class="btn btn-danger">Cancel</button></a>
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

{* /* End of file list.tpl */
/* Location: ./application/views/templates/backend/default/account/groupaccount/list.tpl */ *}