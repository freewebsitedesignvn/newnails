<?php
/* Smarty version 3.1.32, created on 2018-07-19 16:58:31
  from 'W:\domains\ci3\nails\application\views\templates\backend\default\common\files_footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b5099072275c3_12440893',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a31dd1ee06ce4ef3adb1ace8533cacf219f238b1' => 
    array (
      0 => 'W:\\domains\\ci3\\nails\\application\\views\\templates\\backend\\default\\common\\files_footer.tpl',
      1 => 1532008711,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b5099072275c3_12440893 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Bootstrap 3.3.7 -->
<?php echo '<script'; ?>
 src="<?php echo @constant('PATH_BE_TEMP');?>
/bower_components/bootstrap/dist/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<!-- SlimScroll -->
<?php echo '<script'; ?>
 src="<?php echo @constant('PATH_BE_TEMP');?>
/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"><?php echo '</script'; ?>
>
<!-- FastClick -->
<?php echo '<script'; ?>
 src="<?php echo @constant('PATH_BE_TEMP');?>
/bower_components/fastclick/lib/fastclick.js"><?php echo '</script'; ?>
>
<!-- AdminLTE App -->
<?php echo '<script'; ?>
 src="<?php echo @constant('PATH_BE_TEMP');?>
/dist/js/adminlte.min.js"><?php echo '</script'; ?>
>
<!-- AdminLTE for demo purposes -->
<?php echo '<script'; ?>
 src="<?php echo @constant('PATH_BE_TEMP');?>
/dist/js/demo.js"><?php echo '</script'; ?>
><?php }
}
