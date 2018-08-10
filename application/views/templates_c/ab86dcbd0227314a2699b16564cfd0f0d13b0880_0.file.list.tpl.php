<?php
/* Smarty version 3.1.32, created on 2018-07-28 05:18:53
  from 'W:\domains\ci3\newnails\application\views\templates\backend\default\article\gallery\list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b5bd28da47391_17099091',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ab86dcbd0227314a2699b16564cfd0f0d13b0880' => 
    array (
      0 => 'W:\\domains\\ci3\\newnails\\application\\views\\templates\\backend\\default\\article\\gallery\\list.tpl',
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
function content_5b5bd28da47391_17099091 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_75265b5bd28d974467_35843193', 'fileHeader');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_185995b5bd28d9aedf4_74996745', 'Page_breadcrumb');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3405b5bd28da20297_06989241', 'Page_content');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_227815b5bd28da37995_48715288', 'menuLeft');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_107385b5bd28da3b813_45171079', 'menuProfile');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_184995b5bd28da3f692_69277309', 'fileFooter');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_242565b5bd28da43512_10297426', 'JSCodeArea');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'backend/default/common/layout.tpl');
}
/* {block 'fileHeader'} */
class Block_75265b5bd28d974467_35843193 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'fileHeader' => 
  array (
    0 => 'Block_75265b5bd28d974467_35843193',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php $_smarty_tpl->_subTemplateRender("file:../../common/files_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'fileHeader'} */
/* {block 'Page_breadcrumb'} */
class Block_185995b5bd28d9aedf4_74996745 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'Page_breadcrumb' => 
  array (
    0 => 'Block_185995b5bd28d9aedf4_74996745',
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
class Block_3405b5bd28da20297_06989241 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'Page_content' => 
  array (
    0 => 'Block_3405b5bd28da20297_06989241',
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
class Block_227815b5bd28da37995_48715288 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menuLeft' => 
  array (
    0 => 'Block_227815b5bd28da37995_48715288',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../../common/menuleft.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'menuLeft'} */
/* {block 'menuProfile'} */
class Block_107385b5bd28da3b813_45171079 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menuProfile' => 
  array (
    0 => 'Block_107385b5bd28da3b813_45171079',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../../common/menuprofile.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'menuProfile'} */
/* {block 'fileFooter'} */
class Block_184995b5bd28da3f692_69277309 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'fileFooter' => 
  array (
    0 => 'Block_184995b5bd28da3f692_69277309',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../../common/files_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'fileFooter'} */
/* {block 'JSCodeArea'} */
class Block_242565b5bd28da43512_10297426 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'JSCodeArea' => 
  array (
    0 => 'Block_242565b5bd28da43512_10297426',
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
