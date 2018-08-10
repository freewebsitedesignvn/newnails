<?php
/* Smarty version 3.1.32, created on 2018-07-23 05:45:22
  from 'W:\domains\ci3\nails\application\views\templates\backend\default\account\groupaccount\edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b5541422a19a9_40954636',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fbc8ae2d93b8fce2aa51aef6c7298a33c65c2d0a' => 
    array (
      0 => 'W:\\domains\\ci3\\nails\\application\\views\\templates\\backend\\default\\account\\groupaccount\\edit.tpl',
      1 => 1532313922,
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
function content_5b5541422a19a9_40954636 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_63415b554142247c10_09751315', 'fileHeader');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_169225b554142253796_81600562', 'Page_breadcrumb');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_167155b55414227a8a9_78855202', 'Page_content');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_223125b554142291fa9_41089830', 'menuLeft');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_318095b554142295e22_18736334', 'menuProfile');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_260865b554142299ca7_01683336', 'fileFooter');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_100235b55414229db24_75329257', 'JSCodeArea');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'backend/default/common/layout.tpl');
}
/* {block 'fileHeader'} */
class Block_63415b554142247c10_09751315 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'fileHeader' => 
  array (
    0 => 'Block_63415b554142247c10_09751315',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_subTemplateRender("file:../../common/files_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'fileHeader'} */
/* {block 'Page_breadcrumb'} */
class Block_169225b554142253796_81600562 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'Page_breadcrumb' => 
  array (
    0 => 'Block_169225b554142253796_81600562',
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
			<li><a href="<?php if ($_smarty_tpl->tpl_vars['set']->last) {?>#<?php } else {
echo $_smarty_tpl->tpl_vars['set']->value['link'];
}?>" class="<?php if ($_smarty_tpl->tpl_vars['set']->last) {?>active<?php } else {
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
class Block_167155b55414227a8a9_78855202 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'Page_content' => 
  array (
    0 => 'Block_167155b55414227a8a9_78855202',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'W:\\domains\\ci3\\nails\\application\\third_party\\smarty\\libs\\plugins\\function.html_options.php','function'=>'smarty_function_html_options',),));
?>

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
								<?php echo smarty_function_html_options(array('name'=>'id','options'=>$_smarty_tpl->tpl_vars['myOptions']->value,'selected'=>$_smarty_tpl->tpl_vars['mySelect']->value,'separator'=>''),$_smarty_tpl);?>

																																																

							</div>


							<button type="submit" class="btn btn-primary">Save</button>
							<a href=""><button  class="btn btn-danger">Cancel</button></a>
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
class Block_223125b554142291fa9_41089830 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menuLeft' => 
  array (
    0 => 'Block_223125b554142291fa9_41089830',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../../common/menuleft.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'menuLeft'} */
/* {block 'menuProfile'} */
class Block_318095b554142295e22_18736334 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menuProfile' => 
  array (
    0 => 'Block_318095b554142295e22_18736334',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../../common/menuprofile.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'menuProfile'} */
/* {block 'fileFooter'} */
class Block_260865b554142299ca7_01683336 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'fileFooter' => 
  array (
    0 => 'Block_260865b554142299ca7_01683336',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../../common/files_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'fileFooter'} */
/* {block 'JSCodeArea'} */
class Block_100235b55414229db24_75329257 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'JSCodeArea' => 
  array (
    0 => 'Block_100235b55414229db24_75329257',
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

	<?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'JSCodeArea'} */
}
