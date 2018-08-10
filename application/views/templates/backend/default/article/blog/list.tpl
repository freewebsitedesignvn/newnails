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
		    <h3 class="box-title">{$page_name} </h3>

		    <div class="box-tools pull-right">
		      <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
		        <i class="fa fa-minus"></i></button>
		      <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
		        <i class="fa fa-times"></i></button>
		    </div>
		  </div>
		  <div class="box-body">
		  	<p><a href="http://nails.tk/admin/blog/blog/add"><button type="button" class="btn btn-primary"><i class="fas fa-plus"></i> Add {$page_name} </button></a></p>
		    <table id="datalist" class="table table-striped table-bordered" style="width:100%">
	        <thead>
            <tr>
              <th width="6%">ID</th>
              <th>Title</th>
              <th>Status</th>
              {* <th width="25%">Date Created</th> *}
              <th width="15%">Action</th>
            </tr>
	        </thead>
	        <tbody>
	        	{foreach $list as $key => $item}	        		
	        	
            <tr>
              <td>{$item.a_id}</td>
              <td>{$item.a_title}</td>
              <td>{if $item.a_active eq 1}Active{else}Disable{/if}</td>
              {* <td>{$item.a_timecreate}</td> *}
              <td>
              	<a href="http://nails.tk/admin/blog/blog/edit/{$item.a_id}"><span class="fa fa-pencil-square-o btn btn-primary"></span></a>
              	<a href="http://nails.tk/admin/blog/blog/delete/{$item.a_id}"><span class="fa fa-trash btn btn-danger"></span>	</a>
            	</td>
            </tr>
            {/foreach}
	        </tbody>
	        <tfoot>
            <tr>
              <th width="6%">ID</th>
              <th>Title</th>
              <th>Status</th>
              {* <th width="25%">Date Created</th> *}
              <th width="15%">Action</th>
            </tr>
            
	        </tfoot>
	    </table>
		  </div>
		  <!-- /.box-body -->
		  <div class="box-footer">
		    Footer
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
/* Location: ./application/views/templates/backend/default/article/blog/list.tpl */ *}