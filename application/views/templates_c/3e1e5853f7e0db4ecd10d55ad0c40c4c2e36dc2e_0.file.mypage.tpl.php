<?php
/* Smarty version 3.1.32, created on 2018-07-19 10:45:52
  from 'W:\domains\ci3\nails\application\views\templates\mypage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b5041b0bc0469_15392892',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3e1e5853f7e0db4ecd10d55ad0c40c4c2e36dc2e' => 
    array (
      0 => 'W:\\domains\\ci3\\nails\\application\\views\\templates\\mypage.tpl',
      1 => 1531986350,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:menu1.tpl' => 1,
  ),
),false)) {
function content_5b5041b0bc0469_15392892 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2905b5041b0bacbe8_14136071', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19715b5041b0bb0a69_57187955', 'head');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3685b5041b0bb0a63_79935102', 'body');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_278815b5041b0bb48e7_71918291', 'nav');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_34385b5041b0bb48e4_15465620', 'banner');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_276635b5041b0bc0462_90927024', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'title'} */
class Block_2905b5041b0bacbe8_14136071 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_2905b5041b0bacbe8_14136071',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
My Page Title<?php
}
}
/* {/block 'title'} */
/* {block 'head'} */
class Block_19715b5041b0bb0a69_57187955 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_19715b5041b0bb0a69_57187955',
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
/* {block 'body'} */
class Block_3685b5041b0bb0a63_79935102 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_3685b5041b0bb0a63_79935102',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
My HTML Page Body goes here<?php
}
}
/* {/block 'body'} */
/* {block 'nav'} */
class Block_278815b5041b0bb48e7_71918291 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'nav' => 
  array (
    0 => 'Block_278815b5041b0bb48e7_71918291',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Nav Here<?php
}
}
/* {/block 'nav'} */
/* {block 'banner'} */
class Block_34385b5041b0bb48e4_15465620 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'banner' => 
  array (
    0 => 'Block_34385b5041b0bb48e4_15465620',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:menu1.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'banner'} */
/* {block 'content'} */
class Block_276635b5041b0bc0462_90927024 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_276635b5041b0bc0462_90927024',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
content Here<?php
}
}
/* {/block 'content'} */
}
