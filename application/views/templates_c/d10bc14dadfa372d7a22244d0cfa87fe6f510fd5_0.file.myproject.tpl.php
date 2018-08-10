<?php
/* Smarty version 3.1.32, created on 2018-07-19 10:38:58
  from 'W:\domains\ci3\nails\application\views\templates\myproject.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b5040125e5712_06934626',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd10bc14dadfa372d7a22244d0cfa87fe6f510fd5' => 
    array (
      0 => 'W:\\domains\\ci3\\nails\\application\\views\\templates\\myproject.tpl',
      1 => 1531985931,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b5040125e5712_06934626 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_52645b5040125e5714_08035716', 'head');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'head'} */
class Block_52645b5040125e5714_08035716 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_52645b5040125e5714_08035716',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <link href="/css/mypage.css" rel="stylesheet" type="text/css"/>
  <?php echo '<script'; ?>
 src="/js/mypage.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'head'} */
}
