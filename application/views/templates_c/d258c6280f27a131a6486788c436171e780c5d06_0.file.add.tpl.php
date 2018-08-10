<?php
/* Smarty version 3.1.32, created on 2018-07-23 05:48:24
  from 'W:\domains\ci3\nails\application\views\templates\backend\default\account\account\add.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b5541f87527e8_43190481',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd258c6280f27a131a6486788c436171e780c5d06' => 
    array (
      0 => 'W:\\domains\\ci3\\nails\\application\\views\\templates\\backend\\default\\account\\account\\add.tpl',
      1 => 1532314104,
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
function content_5b5541f87527e8_43190481 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_98245b5541f8648da4_29394461', 'fileHeader');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_182015b5541f86875b2_41479670', 'Page_breadcrumb');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_50865b5541f86f8a43_47860132', 'Page_content');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_188795b5541f8742dd2_54363875', 'menuLeft');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_185725b5541f874aad8_55114846', 'menuProfile');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_153175b5541f874e962_65847829', 'fileFooter');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_40745b5541f87527e7_91115916', 'JSCodeArea');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'backend/default/common/layout.tpl');
}
/* {block 'fileHeader'} */
class Block_98245b5541f8648da4_29394461 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'fileHeader' => 
  array (
    0 => 'Block_98245b5541f8648da4_29394461',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_subTemplateRender("file:../../common/files_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'fileHeader'} */
/* {block 'Page_breadcrumb'} */
class Block_182015b5541f86875b2_41479670 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'Page_breadcrumb' => 
  array (
    0 => 'Block_182015b5541f86875b2_41479670',
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
class Block_50865b5541f86f8a43_47860132 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'Page_content' => 
  array (
    0 => 'Block_50865b5541f86f8a43_47860132',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'W:\\domains\\ci3\\nails\\application\\third_party\\smarty\\libs\\plugins\\function.html_options.php','function'=>'smarty_function_html_options',),));
?>

		<!-- Default box -->
	<div class="box">
		<div class="box-header with-border">
			<h3 class="box-title">Add New User </h3>

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
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
						<div class="form-group">
							<label for="">First name:</label>
							<input type="text" class="form-control" id="" placeholder="First name" name="" required="required">
						</div>
					</div>						
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
					
						<div class="form-group">
							<label for="">Last name:</label>
							<input type="text" class="form-control" id="" placeholder="Last name" name="" required="required">
						</div>

					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
						<div class="form-group">
							<label for="">Nick name:</label>
							<input type="text" class="form-control" id="" placeholder="Nick name" name="" required="required">
						</div>
					</div>						
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
					
						<div class="form-group">
							<label for="">Email:</label>
							<input type="email" class="form-control" id="" placeholder="Email" name="" required="required">
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
						<div class="form-group">
							<label for="" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">Phone:</label> 
															<?php echo smarty_function_html_options(array('name'=>'codephone','options'=>$_smarty_tpl->tpl_vars['Codephones']->value,'selected'=>$_smarty_tpl->tpl_vars['codephoneSelect']->value,'separator'=>'','class'=>"col-xs-3 col-sm-4 col-md-3 col-lg-3"),$_smarty_tpl);?>

								<input type="number" class="col-xs-9 col-sm-8 col-md-9 col-lg-9" id="" placeholder="Phone" name="numberphone" required="required" style="height: 34px;">
														
						</div>	
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
						<div class="form-group">
							<label for="">Group :</label><br>

							<?php echo smarty_function_html_options(array('name'=>'group','options'=>$_smarty_tpl->tpl_vars['group']->value,'separator'=>'<br>'),$_smarty_tpl);?>

																				</div>	
					</div>
			
				</div>				

				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
						<div class="form-group">
							<label for="">Password :</label>
							<input type="password" class="form-control" id="" placeholder="Password" name="" required="required">
						</div>		
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
						<div class="form-group">
							<label for="">Confirm Password :</label>
							<input type="password" class="form-control" id="" placeholder="Confirm Password" name="" required="required">
						</div>
					</div>
			
				</div>			

				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
						<label for=""><b>Agent or Owner: </b></label>
						<?php echo smarty_function_html_options(array('name'=>'typeaccount','options'=>$_smarty_tpl->tpl_vars['typeAccount']->value,'selected'=>$_smarty_tpl->tpl_vars['typeSelect']->value,'separator'=>''),$_smarty_tpl);?>

					</div>
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
						<label for=""><b>Status: </b></label>
						<?php echo smarty_function_html_options(array('name'=>'status','options'=>$_smarty_tpl->tpl_vars['Actives']->value,'selected'=>$_smarty_tpl->tpl_vars['ActiveSelect']->value,'separator'=>''),$_smarty_tpl);?>

					</div>
			
				</div>				
							
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
class Block_188795b5541f8742dd2_54363875 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menuLeft' => 
  array (
    0 => 'Block_188795b5541f8742dd2_54363875',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../../common/menuleft.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'menuLeft'} */
/* {block 'menuProfile'} */
class Block_185725b5541f874aad8_55114846 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menuProfile' => 
  array (
    0 => 'Block_185725b5541f874aad8_55114846',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../../common/menuprofile.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'menuProfile'} */
/* {block 'fileFooter'} */
class Block_153175b5541f874e962_65847829 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'fileFooter' => 
  array (
    0 => 'Block_153175b5541f874e962_65847829',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../../common/files_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'fileFooter'} */
/* {block 'JSCodeArea'} */
class Block_40745b5541f87527e7_91115916 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'JSCodeArea' => 
  array (
    0 => 'Block_40745b5541f87527e7_91115916',
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
