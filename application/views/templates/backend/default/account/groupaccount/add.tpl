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
						<form action="addaction" method="POST" role="form">
							{* <legend>Form title</legend> *}

							<div class="form-group">
								<label for="">Group name:</label>
								<input type="text" class="form-control" id="" placeholder="Group name" name="name" required="required">
							</div>
							<div class="form-group">
								<label for="">Description:</label>
								<textarea name="description" id="input" class="form-control" rows="3" placeholder="Description" required></textarea>
							</div>
							<div class="radio">
								<label for=""><b>Status: </b></label>
								
								{html_options name=status options=$myOptions selected=$mySelect}
								
			
							</div>
							
							<button type="submit" class="btn btn-primary" name="btn[_Submit]" value="true">Save</button>
							{* <a href=""><button  class="btn btn-danger">Cancel</button></a> *}
						</form>
						{* <p>Set Phân quyền</p>
						<form action="http://nails.tk/admin/account/groupaccount/add1" method="post">
							<select name="cars[]" multiple size="{$myrole|@count}" style="padding: 0px 10px">							
							  {html_options options=$myrole }
							</select>

							<input type="submit">
							</form> *}
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
		// $(document).ready(function() {
		//     $('#example').DataTable();
		// } );
		$(document).ready(function() {
			$('#datalist').DataTable( {
				paging: true,          
			})
		} );

	</script>
	{/block}

{* /* End of file list.tpl */
/* Location: ./application/views/templates/backend/default/account/groupaccount/list.tpl */ *}