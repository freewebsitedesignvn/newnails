<?php
/* Smarty version 3.1.32, created on 2018-07-23 14:42:01
  from 'W:\domains\ci3\nails\application\views\templates\backend\default\article\gallery\edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b55bf0930f608_26918275',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e19e53e714b4c47ee8174f6263805dcd87a41aa3' => 
    array (
      0 => 'W:\\domains\\ci3\\nails\\application\\views\\templates\\backend\\default\\article\\gallery\\edit.tpl',
      1 => 1532346116,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../common/files_header.tpl' => 1,
    'file:../../common/menuleft.tpl' => 1,
    'file:../../common/menuprofile.tpl' => 1,
    'file:../../common/files_footer.tpl' => 1,
  ),
),false)) {
function content_5b55bf0930f608_26918275 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_117155b55bf092c90f0_88741897', 'fileHeader');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_56965b55bf092d4c72_92663572', 'Page_breadcrumb');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_106175b55bf092f4081_28481271', 'Page_content');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_140145b55bf092fbd82_05550181', 'menuLeft');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_253755b55bf092ffc03_28909324', 'menuProfile');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_221245b55bf09303a88_12306962', 'fileFooter');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_256535b55bf09307909_97667909', 'JSCodeArea');
?>


<!-- /* End of file add.tpl */
/* Location: ./application/views/templates/backend/default/article/gallery/add.tpl */ --><?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'backend/default/common/layout.tpl');
}
/* {block 'fileHeader'} */
class Block_117155b55bf092c90f0_88741897 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'fileHeader' => 
  array (
    0 => 'Block_117155b55bf092c90f0_88741897',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_subTemplateRender("file:../../common/files_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'fileHeader'} */
/* {block 'Page_breadcrumb'} */
class Block_56965b55bf092d4c72_92663572 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'Page_breadcrumb' => 
  array (
    0 => 'Block_56965b55bf092d4c72_92663572',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<h1>
		<?php echo $_smarty_tpl->tpl_vars['page_name']->value;?>
 Management 
			</h1>
	<ol class="breadcrumb">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['breadcrumb']->value, 'set', true);
$_smarty_tpl->tpl_vars['set']->iteration = 0;
$_smarty_tpl->tpl_vars['set']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['set']->value) {
$_smarty_tpl->tpl_vars['set']->iteration++;
$_smarty_tpl->tpl_vars['set']->index++;
$_smarty_tpl->tpl_vars['set']->first = !$_smarty_tpl->tpl_vars['set']->index;
$_smarty_tpl->tpl_vars['set']->last = $_smarty_tpl->tpl_vars['set']->iteration === $_smarty_tpl->tpl_vars['set']->total;
$__foreach_set_0_saved = $_smarty_tpl->tpl_vars['set'];
?>
		<li><a href="<?php echo $_smarty_tpl->tpl_vars['set']->value['link'];?>
" class="<?php if ($_smarty_tpl->tpl_vars['set']->last) {?>active<?php } else {
}?>"><?php if ($_smarty_tpl->tpl_vars['set']->first) {?><i class="fa fa-dashboard"></i><?php }
echo $_smarty_tpl->tpl_vars['set']->value['name'];?>
</a></li>
	<?php
$_smarty_tpl->tpl_vars['set'] = $__foreach_set_0_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</ol>
<?php
}
}
/* {/block 'Page_breadcrumb'} */
/* {block 'Page_content'} */
class Block_106175b55bf092f4081_28481271 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'Page_content' => 
  array (
    0 => 'Block_106175b55bf092f4081_28481271',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<!-- Default box -->
	<div class="box">
		<div class="box-header with-border">
			<h3 class="box-title">Edit <?php echo $_smarty_tpl->tpl_vars['page_name']->value;?>
 </h3>

			<div class="box-tools pull-right">
				<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
					<i class="fa fa-minus"></i></button>
					<button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
						<i class="fa fa-times"></i></button>
			</div>
		</div>
		<div class="box-body">
			<form action="" method="POST" role="form">
								<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div class="form-group">
							<label for="">Title:</label>
							<input type="text" class="form-control" id="" placeholder="Title" name="" required="required">
						</div>
					</div>	
				</div>
				
				
							
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<label for=""><b>Avatar: </b></label>
						  <input type="file" name="avatar" class="" />
					</div>
			
				</div>		
				<hr>			
				
				

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
					</div>
		<!-- /.box-footer-->
	</div>
	<!-- /.box -->
<?php
}
}
/* {/block 'Page_content'} */
/* {block 'menuLeft'} */
class Block_140145b55bf092fbd82_05550181 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menuLeft' => 
  array (
    0 => 'Block_140145b55bf092fbd82_05550181',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../../common/menuleft.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'menuLeft'} */
/* {block 'menuProfile'} */
class Block_253755b55bf092ffc03_28909324 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menuProfile' => 
  array (
    0 => 'Block_253755b55bf092ffc03_28909324',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../../common/menuprofile.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'menuProfile'} */
/* {block 'fileFooter'} */
class Block_221245b55bf09303a88_12306962 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'fileFooter' => 
  array (
    0 => 'Block_221245b55bf09303a88_12306962',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../../common/files_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'fileFooter'} */
/* {block 'JSCodeArea'} */
class Block_256535b55bf09307909_97667909 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'JSCodeArea' => 
  array (
    0 => 'Block_256535b55bf09307909_97667909',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php echo '<script'; ?>
 type="text/javascript">
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
	<?php echo '</script'; ?>
>
	<?php
}
}
/* {/block 'JSCodeArea'} */
}
