<?php
/* Smarty version 3.1.32, created on 2018-07-19 10:29:11
  from 'W:\domains\ci3\nails\application\views\templates\child.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b503dc73d3d25_56323421',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '70cc6ded6cb78563db24b81325d66ffa748a4097' => 
    array (
      0 => 'W:\\domains\\ci3\\nails\\application\\views\\templates\\child.tpl',
      1 => 1531985323,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b503dc73d3d25_56323421 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_112375b503dc73d3d20_75843542', 'title');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "parent.tpl");
}
/* {block 'title'} */
class Block_112375b503dc73d3d20_75843542 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_112375b503dc73d3d20_75843542',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

Child Title
<?php
}
}
/* {/block 'title'} */
}
