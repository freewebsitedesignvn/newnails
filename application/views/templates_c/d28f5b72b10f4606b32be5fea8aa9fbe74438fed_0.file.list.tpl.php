<?php
/* Smarty version 3.1.32, created on 2018-07-24 07:16:38
  from 'W:\domains\ci3\nails\application\views\templates\backend\default\article\gallery\list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b56a826dbb536_81458393',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd28f5b72b10f4606b32be5fea8aa9fbe74438fed' => 
    array (
      0 => 'W:\\domains\\ci3\\nails\\application\\views\\templates\\backend\\default\\article\\gallery\\list.tpl',
      1 => 1532405798,
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
function content_5b56a826dbb536_81458393 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_32425b56a826d694a8_40109721', 'fileHeader');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_247315b56a826d75024_60638215', 'Page_breadcrumb');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_31285b56a826d905a0_74533172', 'Page_content');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_297135b56a826da7cb1_71210079', 'menuLeft');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_188065b56a826dabb36_00939465', 'menuProfile');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_275115b56a826db3831_53307651', 'fileFooter');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_132845b56a826db76b2_32737215', 'JSCodeArea');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'backend/default/common/layout.tpl');
}
/* {block 'fileHeader'} */
class Block_32425b56a826d694a8_40109721 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'fileHeader' => 
  array (
    0 => 'Block_32425b56a826d694a8_40109721',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php $_smarty_tpl->_subTemplateRender("file:../../common/files_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'fileHeader'} */
/* {block 'Page_breadcrumb'} */
class Block_247315b56a826d75024_60638215 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'Page_breadcrumb' => 
  array (
    0 => 'Block_247315b56a826d75024_60638215',
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
class Block_31285b56a826d905a0_74533172 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'Page_content' => 
  array (
    0 => 'Block_31285b56a826d905a0_74533172',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<!-- Default box -->
		<div class="box">
		  <div class="box-header with-border">
		    <h3 class="box-title"><?php echo $_smarty_tpl->tpl_vars['page_name']->value;?>
 </h3>

		    <div class="box-tools pull-right">
		      <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
		        <i class="fa fa-minus"></i></button>
		      <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
		        <i class="fa fa-times"></i></button>
		    </div>
		  </div>
		  <div class="box-body">
		  	<p><a href="http://nails.tk/<?php echo $_smarty_tpl->tpl_vars['pathControl']->value;?>
add"><button type="button" class="btn btn-primary"><i class="fas fa-plus"></i> Add <?php echo $_smarty_tpl->tpl_vars['page_name']->value;?>
 </button></a></p>
		    <table id="datalist" class="table table-striped table-bordered" style="width:100%">
	        <thead>
            <tr>
              <th width="6%">ID</th>
              <th>Title</th>
              <th>Photo</th>
                            <th width="15%">Action</th>
            </tr>
	        </thead>
	        <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list']->value, 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>	        		
	        	
            <tr>
              <td><?php echo $_smarty_tpl->tpl_vars['item']->value['a_id'];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['item']->value['a_title'];?>
</td>
              <td><img src="http://nails.tk/upload/<?php echo $_smarty_tpl->tpl_vars['item']->value['a_photo'];?>
" class="img-responsive" alt="Image" style="height: 50px;"></td>
                                          <td>
              	              	<a href="http://nails.tk/<?php echo $_smarty_tpl->tpl_vars['pathControl']->value;?>
delete/<?php echo $_smarty_tpl->tpl_vars['item']->value['a_id'];?>
"><span class="fa fa-trash btn btn-danger"></span>	</a>
            	</td>
            </tr>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	        </tbody>
	        <tfoot>
            <tr>
              <th width="6%">ID</th>
              <th>Title</th>
              <th>Photo</th>
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
<?php
}
}
/* {/block 'Page_content'} */
/* {block 'menuLeft'} */
class Block_297135b56a826da7cb1_71210079 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menuLeft' => 
  array (
    0 => 'Block_297135b56a826da7cb1_71210079',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../../common/menuleft.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'menuLeft'} */
/* {block 'menuProfile'} */
class Block_188065b56a826dabb36_00939465 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menuProfile' => 
  array (
    0 => 'Block_188065b56a826dabb36_00939465',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../../common/menuprofile.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'menuProfile'} */
/* {block 'fileFooter'} */
class Block_275115b56a826db3831_53307651 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'fileFooter' => 
  array (
    0 => 'Block_275115b56a826db3831_53307651',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../../common/files_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'fileFooter'} */
/* {block 'JSCodeArea'} */
class Block_132845b56a826db76b2_32737215 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'JSCodeArea' => 
  array (
    0 => 'Block_132845b56a826db76b2_32737215',
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
