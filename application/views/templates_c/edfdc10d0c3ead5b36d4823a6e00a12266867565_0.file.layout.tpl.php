<?php
/* Smarty version 3.1.32, created on 2018-07-19 10:42:59
  from 'W:\domains\ci3\nails\application\views\templates\layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b504103d436d3_28815341',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'edfdc10d0c3ead5b36d4823a6e00a12266867565' => 
    array (
      0 => 'W:\\domains\\ci3\\nails\\application\\views\\templates\\layout.tpl',
      1 => 1531986109,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b504103d436d3_28815341 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<html>
<head>
  <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_104335b504103d3b9d9_39154341', 'title');
?>
</title>
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_226305b504103d3b9d7_66312223', 'head');
?>

</head>
<body>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_265355b504103d3b9d9_26066821', 'body');
?>

<ul>
	<li><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_133965b504103d3f854_10046805', 'nav');
?>
</li>
	<li><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_40935b504103d3f857_18221104', 'banner');
?>
</li>
	<li><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_53625b504103d436d9_91160295', 'content');
?>
</li>
</ul>


</body>
</html>
<?php }
/* {block 'title'} */
class Block_104335b504103d3b9d9_39154341 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_104335b504103d3b9d9_39154341',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Default Page Title<?php
}
}
/* {/block 'title'} */
/* {block 'head'} */
class Block_226305b504103d3b9d7_66312223 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_226305b504103d3b9d7_66312223',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'head'} */
/* {block 'body'} */
class Block_265355b504103d3b9d9_26066821 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_265355b504103d3b9d9_26066821',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'body'} */
/* {block 'nav'} */
class Block_133965b504103d3f854_10046805 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'nav' => 
  array (
    0 => 'Block_133965b504103d3f854_10046805',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'nav'} */
/* {block 'banner'} */
class Block_40935b504103d3f857_18221104 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'banner' => 
  array (
    0 => 'Block_40935b504103d3f857_18221104',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'banner'} */
/* {block 'content'} */
class Block_53625b504103d436d9_91160295 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_53625b504103d436d9_91160295',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'content'} */
}
