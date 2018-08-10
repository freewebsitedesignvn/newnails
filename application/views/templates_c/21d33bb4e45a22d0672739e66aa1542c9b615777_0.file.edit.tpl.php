<?php
/* Smarty version 3.1.32, created on 2018-07-23 05:49:40
  from 'W:\domains\ci3\nails\application\views\templates\backend\default\account\account\edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b5542449ff7b0_07296204',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '21d33bb4e45a22d0672739e66aa1542c9b615777' => 
    array (
      0 => 'W:\\domains\\ci3\\nails\\application\\views\\templates\\backend\\default\\account\\account\\edit.tpl',
      1 => 1532314180,
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
function content_5b5542449ff7b0_07296204 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_185655b55424498e314_43702956', 'fileHeader');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_58505b55424499dd17_98617330', 'Page_breadcrumb');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_222835b5542449c8ca5_16381740', 'Page_content');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_66325b5542449f3c22_34524595', 'menuLeft');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_266255b5542449f7aa4_95461734', 'menuProfile');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_180865b5542449fb923_34743908', 'fileFooter');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_227595b5542449fb920_33899412', 'JSCodeArea');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'backend/default/common/layout.tpl');
}
/* {block 'fileHeader'} */
class Block_185655b55424498e314_43702956 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'fileHeader' => 
  array (
    0 => 'Block_185655b55424498e314_43702956',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_subTemplateRender("file:../../common/files_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'fileHeader'} */
/* {block 'Page_breadcrumb'} */
class Block_58505b55424499dd17_98617330 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'Page_breadcrumb' => 
  array (
    0 => 'Block_58505b55424499dd17_98617330',
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
class Block_222835b5542449c8ca5_16381740 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'Page_content' => 
  array (
    0 => 'Block_222835b5542449c8ca5_16381740',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'W:\\domains\\ci3\\nails\\application\\third_party\\smarty\\libs\\plugins\\function.html_options.php','function'=>'smarty_function_html_options',),));
?>

		<!-- Default box -->
	<div class="box">
		<div class="box-header with-border">
			<h3 class="box-title">Edit User </h3>

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
class Block_66325b5542449f3c22_34524595 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menuLeft' => 
  array (
    0 => 'Block_66325b5542449f3c22_34524595',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../../common/menuleft.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'menuLeft'} */
/* {block 'menuProfile'} */
class Block_266255b5542449f7aa4_95461734 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menuProfile' => 
  array (
    0 => 'Block_266255b5542449f7aa4_95461734',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../../common/menuprofile.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'menuProfile'} */
/* {block 'fileFooter'} */
class Block_180865b5542449fb923_34743908 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'fileFooter' => 
  array (
    0 => 'Block_180865b5542449fb923_34743908',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../../common/files_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'fileFooter'} */
/* {block 'JSCodeArea'} */
class Block_227595b5542449fb920_33899412 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'JSCodeArea' => 
  array (
    0 => 'Block_227595b5542449fb920_33899412',
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
