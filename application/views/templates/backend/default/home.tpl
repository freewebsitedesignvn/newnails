{extends file='backend/default/common/layout.tpl'}
{block name='fileHeader'}
	{include file="./common/files_header.tpl"}
{/block}
{block name='Page_breadcrumb'}
		<h1>
		  Title Page
		  <small>Description</small>
		</h1>
		<ol class="breadcrumb">
		  <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		  <li><a href="#">Link 1</a></li>
		  <li class="active">Link 1.1</li>
		</ol>
{/block}
{block name='Page_content'}
		<div class="callout callout-info">
		  <h4>Tip!</h4>

		  <p>Content Tip</p>
		</div>
		<!-- Default box -->
		<div class="box">
		  <div class="box-header with-border">
		    <h3 class="box-title">Section Title </h3>

		    <div class="box-tools pull-right">
		      <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
		        <i class="fa fa-minus"></i></button>
		      <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
		        <i class="fa fa-times"></i></button>
		    </div>
		  </div>
		  <div class="box-body">
		    Content Section
		  </div>
		  <!-- /.box-body -->
		  <div class="box-footer">
		    Footer
		  </div>
		  <!-- /.box-footer-->
		</div>
		<!-- /.box -->
{/block}
{block name='menuLeft'}{include file="./common/menuleft.tpl"}{/block}
{block name='menuProfile'}{include file="./common/menuprofile.tpl"}{/block}
{block name='fileFooter'}{include file="./common/files_footer.tpl"}{/block}

