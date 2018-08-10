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
		  	<p><a href=""><button type="button" class="btn btn-primary"><i class="fas fa-plus"></i> Add Account</button></a></p>
		    <table id="datalist" class="table table-striped table-bordered" style="width:100%">
	        <thead>
            <tr>
              <th>Full name</th>
              <th>Nick name</th>
              <th>Group</th>
              <th>Email</th>
              <th>Phone</th>
              <th>Active</th>
              <th>Action</th>
            </tr>
	        </thead>
	        <tbody>
            <tr>
              <td>Tiger Nixon</td>
              <td>Tiger Manager</td>
              <td>Manager</td>
              <td>mymail@gmail.com</td>
              <td>84888824640</td>
              <td>Active</td>
              <td>
              	<a href=""><span class="fa fa-pencil-square-o btn btn-primary"></span></a>
              	<a href=""><span class="fa fa-trash btn btn-danger"></span>	</a>
            	</td>
            </tr>
	        </tbody>
	        <tfoot>
            <tr>
              <th>Full name</th>
              <th>Nick name</th>
              <th>Group</th>
              <th>Email</th>
              <th>Phone</th>
              <th>Active</th>
              <th>Action</th>
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
/* Location: ./application/views/templates/backend/default/account/account/list.tpl */ *}