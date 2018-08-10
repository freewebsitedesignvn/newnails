<?php
/* Smarty version 3.1.32, created on 2018-07-28 05:18:53
  from 'W:\domains\ci3\newnails\application\views\templates\backend\default\common\layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b5bd28dac43b9_01737542',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cf23e46d92541f976d22a5f0be8f240cdee65ffb' => 
    array (
      0 => 'W:\\domains\\ci3\\newnails\\application\\views\\templates\\backend\\default\\common\\layout.tpl',
      1 => 1532322477,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b5bd28dac43b9_01737542 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_295025b5bd28daa8e35_40565463', 'title');
?>
</title>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_96315b5bd28daaccb0_20150800', 'fileHeader');
?>

</head>
<!-- ADD THE CLASS fixed TO GET A FIXED HEADER AND SIDEBAR LAYOUT -->
<!-- the fixed layout is not compatible with sidebar-mini -->
<body class="hold-transition skin-blue fixed sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_99645b5bd28dab0b35_28413197', 'content');
?>

  <header class="main-header">
    <!-- Logo -->
    <a href="" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>Data</b> e-global</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Data</b> e-global</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_109335b5bd28dab0b34_66322014', 'menuProfile');
?>

      </header>

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      
      <!-- search form -->
      <!-- <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form> -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13545b5bd28dab49b4_84228258', 'menuLeft');
?>

      
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_319315b5bd28dab8836_47062873', 'Page_breadcrumb');
?>

    </section>

    <!-- Main content -->
    <section class="content">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_178805b5bd28dab8833_39627453', 'Page_content');
?>


    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0.0
    </div>
    <strong>Copyright &copy; 2018 <a href="">Data E-Global</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <!-- <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li> -->
      <!-- <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li> -->
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">        

      </div>
      <!-- /.tab-pane -->
      
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_156655b5bd28dabc6b2_50351851', 'fileFooter');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_112865b5bd28dabc6b9_92728111', 'JSCodeArea');
?>


</body>
</html>
<?php }
/* {block 'title'} */
class Block_295025b5bd28daa8e35_40565463 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_295025b5bd28daa8e35_40565463',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'title'} */
/* {block 'fileHeader'} */
class Block_96315b5bd28daaccb0_20150800 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'fileHeader' => 
  array (
    0 => 'Block_96315b5bd28daaccb0_20150800',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'fileHeader'} */
/* {block 'content'} */
class Block_99645b5bd28dab0b35_28413197 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_99645b5bd28dab0b35_28413197',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'content'} */
/* {block 'menuProfile'} */
class Block_109335b5bd28dab0b34_66322014 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menuProfile' => 
  array (
    0 => 'Block_109335b5bd28dab0b34_66322014',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'menuProfile'} */
/* {block 'menuLeft'} */
class Block_13545b5bd28dab49b4_84228258 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menuLeft' => 
  array (
    0 => 'Block_13545b5bd28dab49b4_84228258',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'menuLeft'} */
/* {block 'Page_breadcrumb'} */
class Block_319315b5bd28dab8836_47062873 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'Page_breadcrumb' => 
  array (
    0 => 'Block_319315b5bd28dab8836_47062873',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'Page_breadcrumb'} */
/* {block 'Page_content'} */
class Block_178805b5bd28dab8833_39627453 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'Page_content' => 
  array (
    0 => 'Block_178805b5bd28dab8833_39627453',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'Page_content'} */
/* {block 'fileFooter'} */
class Block_156655b5bd28dabc6b2_50351851 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'fileFooter' => 
  array (
    0 => 'Block_156655b5bd28dabc6b2_50351851',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'fileFooter'} */
/* {block 'JSCodeArea'} */
class Block_112865b5bd28dabc6b9_92728111 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'JSCodeArea' => 
  array (
    0 => 'Block_112865b5bd28dabc6b9_92728111',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'JSCodeArea'} */
}
