<?php
/* Smarty version 3.1.32, created on 2018-07-24 08:26:28
  from 'W:\domains\ci3\nails\application\views\templates\backend\default\account\groupaccount\add.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b56b884bb3d31_15317291',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bf3048d78135d292c22a14e78f02a79fcb8370d2' => 
    array (
      0 => 'W:\\domains\\ci3\\nails\\application\\views\\templates\\backend\\default\\account\\groupaccount\\add.tpl',
      1 => 1532409988,
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
function content_5b56b884bb3d31_15317291 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_157405b56b884b75523_61750928', 'fileHeader');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_97335b56b884b7d223_13121267', 'Page_breadcrumb');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_262025b56b884b987b0_43629761', 'Page_content');
?>

				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_124275b56b884ba81b0_69431293', 'menuLeft');
?>

				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_136725b56b884bac035_65723371', 'menuProfile');
?>

				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_75535b56b884bac033_08723905', 'fileFooter');
?>

				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_36225b56b884bafeb3_58818467', 'JSCodeArea');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'backend/default/common/layout.tpl');
}
/* {block 'fileHeader'} */
class Block_157405b56b884b75523_61750928 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'fileHeader' => 
  array (
    0 => 'Block_157405b56b884b75523_61750928',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_subTemplateRender("file:../../common/files_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'fileHeader'} */
/* {block 'Page_breadcrumb'} */
class Block_97335b56b884b7d223_13121267 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'Page_breadcrumb' => 
  array (
    0 => 'Block_97335b56b884b7d223_13121267',
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
class Block_262025b56b884b987b0_43629761 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'Page_content' => 
  array (
    0 => 'Block_262025b56b884b987b0_43629761',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'W:\\domains\\ci3\\nails\\application\\third_party\\smarty\\libs\\plugins\\function.html_options.php','function'=>'smarty_function_html_options',),));
?>

				<!-- Default box -->
		<div class="box">
			<div class="box-header with-border">
				<h3 class="box-title">Add New <?php echo $_smarty_tpl->tpl_vars['page_name']->value;?>
 </h3>

				<div class="box-tools pull-right">
					<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
						<i class="fa fa-minus"></i></button>
						<button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
							<i class="fa fa-times"></i></button>
						</div>
					</div>
					<div class="box-body">
						<form action="addaction" method="POST" role="form">
							
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
								
								<?php echo smarty_function_html_options(array('name'=>'status','options'=>$_smarty_tpl->tpl_vars['myOptions']->value,'selected'=>$_smarty_tpl->tpl_vars['mySelect']->value),$_smarty_tpl);?>

								
			
							</div>
							
							<button type="submit" class="btn btn-primary" name="btn[_Submit]" value="true">Save</button>
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
class Block_124275b56b884ba81b0_69431293 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menuLeft' => 
  array (
    0 => 'Block_124275b56b884ba81b0_69431293',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../../common/menuleft.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'menuLeft'} */
/* {block 'menuProfile'} */
class Block_136725b56b884bac035_65723371 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menuProfile' => 
  array (
    0 => 'Block_136725b56b884bac035_65723371',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../../common/menuprofile.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'menuProfile'} */
/* {block 'fileFooter'} */
class Block_75535b56b884bac033_08723905 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'fileFooter' => 
  array (
    0 => 'Block_75535b56b884bac033_08723905',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../../common/files_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'fileFooter'} */
/* {block 'JSCodeArea'} */
class Block_36225b56b884bafeb3_58818467 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'JSCodeArea' => 
  array (
    0 => 'Block_36225b56b884bafeb3_58818467',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<?php echo '<script'; ?>
 type="text/javascript">
		// $(document).ready(function() {
		//     $('#example').DataTable();
		// } );
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
