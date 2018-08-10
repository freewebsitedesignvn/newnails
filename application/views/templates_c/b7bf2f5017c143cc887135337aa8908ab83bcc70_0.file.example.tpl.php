<?php
/* Smarty version 3.1.32, created on 2018-07-19 10:22:17
  from 'W:\domains\ci3\nails\application\views\templates\example.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b503c292f6683_55216124',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b7bf2f5017c143cc887135337aa8908ab83bcc70' => 
    array (
      0 => 'W:\\domains\\ci3\\nails\\application\\views\\templates\\example.tpl',
      1 => 1464119780,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5b503c292f6683_55216124 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'W:\\domains\\ci3\\nails\\application\\third_party\\smarty\\libs\\plugins\\modifier.capitalize.php','function'=>'smarty_modifier_capitalize',),1=>array('file'=>'W:\\domains\\ci3\\nails\\application\\third_party\\smarty\\libs\\plugins\\function.ci_config.php','function'=>'smarty_function_ci_config',),2=>array('file'=>'W:\\domains\\ci3\\nails\\application\\third_party\\smarty\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),3=>array('file'=>'W:\\domains\\ci3\\nails\\application\\third_party\\smarty\\libs\\plugins\\function.html_select_date.php','function'=>'smarty_function_html_select_date',),4=>array('file'=>'W:\\domains\\ci3\\nails\\application\\third_party\\smarty\\libs\\plugins\\function.html_select_time.php','function'=>'smarty_function_html_select_time',),5=>array('file'=>'W:\\domains\\ci3\\nails\\application\\third_party\\smarty\\libs\\plugins\\function.ci_language.php','function'=>'smarty_function_ci_language',),6=>array('file'=>'W:\\domains\\ci3\\nails\\application\\third_party\\smarty\\libs\\plugins\\function.ci_form_validation.php','function'=>'smarty_function_ci_form_validation',),7=>array('file'=>'W:\\domains\\ci3\\nails\\application\\third_party\\smarty\\libs\\plugins\\function.html_options.php','function'=>'smarty_function_html_options',),));
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Example Smarty Page",'name'=>$_smarty_tpl->tpl_vars['Name']->value), 0, false);
?>

<h1>
<?php if ($_smarty_tpl->tpl_vars['bold']->value) {?><b><?php }?>
Title: <?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['title']->value);?>

<?php if ($_smarty_tpl->tpl_vars['bold']->value) {?></b><?php }?>
</h1>

<?php if ($_smarty_tpl->tpl_vars['error']->value != '') {?><p class="error"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</p><?php }
if ($_smarty_tpl->tpl_vars['message']->value != '') {?><p class="message"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</p><?php }?>

<?php echo smarty_function_ci_config(array('name'=>"base_url"),$_smarty_tpl);?>

<p>The configuration value of base_url is <em><?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
</em></p>

<p>The current date and time is <em><?php echo smarty_modifier_date_format(time(),"%Y-%m-%d %H:%M:%S");?>
</em></p>

<p>The value of global assigned variable $SCRIPT_NAME is <em><?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
</em></p>

<p>The value of server environment variable SERVER_NAME is <em><?php echo $_SERVER['SERVER_NAME'];?>
</em></p>

<p>The value of your IP address is: <em><?php echo $_smarty_tpl->tpl_vars['ip_address']->value;?>
</em></p>

<p>The value of {$Name} is <em><?php echo $_smarty_tpl->tpl_vars['Name']->value;?>
</em></p>

<p>The value of {$Name|upper} is <em><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['Name']->value, 'UTF-8');?>
</em></p>

<h2>An example of a section loop:</h2>
<ul>
<?php
$__section_outer_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['FirstName']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_outer_0_total = $__section_outer_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_outer'] = new Smarty_Variable(array());
if ($__section_outer_0_total !== 0) {
for ($__section_outer_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_outer']->value['index'] = 0; $__section_outer_0_iteration <= $__section_outer_0_total; $__section_outer_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_outer']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_outer']->value['rownum'] = $__section_outer_0_iteration;
if ((1 & (isset($_smarty_tpl->tpl_vars['__smarty_section_outer']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_outer']->value['index'] : null) / 2)) {?>
	<li><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_outer']->value['rownum']) ? $_smarty_tpl->tpl_vars['__smarty_section_outer']->value['rownum'] : null);?>
 . <?php echo $_smarty_tpl->tpl_vars['FirstName']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_outer']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_outer']->value['index'] : null)];?>
 <?php echo $_smarty_tpl->tpl_vars['LastName']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_outer']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_outer']->value['index'] : null)];?>
</li>
<?php } else { ?>
	<li><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_outer']->value['rownum']) ? $_smarty_tpl->tpl_vars['__smarty_section_outer']->value['rownum'] : null);?>
 * <?php echo $_smarty_tpl->tpl_vars['FirstName']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_outer']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_outer']->value['index'] : null)];?>
 <?php echo $_smarty_tpl->tpl_vars['LastName']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_outer']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_outer']->value['index'] : null)];?>
</li>
<?php }
}} else {
 ?>
	<li>none</li>
<?php
}
?>
</ul>

<h2>An example of section looped key values:</h2>
<?php
$__section_sec1_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['contacts']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_sec1_1_total = $__section_sec1_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_sec1'] = new Smarty_Variable(array());
if ($__section_sec1_1_total !== 0) {
for ($__section_sec1_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] = 0; $__section_sec1_1_iteration <= $__section_sec1_1_total; $__section_sec1_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']++){
?></li>
<ul>
	<li>phone: <?php echo $_smarty_tpl->tpl_vars['contacts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['phone'];?>
</li>
	<li>fax: <?php echo $_smarty_tpl->tpl_vars['contacts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['fax'];?>
</li>
	<li>cell: <?php echo $_smarty_tpl->tpl_vars['contacts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['cell'];?>
</li>
</ul>
<?php
}
}
?>

<h2>An example testing strip tags:</h2>
<table border=0><tr><td><a HREF="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
"><font color="red">This is a  test     </font></a></td></tr></table>


<h2>An example of the html_select_date function:</h2>

<form>
<?php echo smarty_function_html_select_date(array('start_year'=>1998,'end_year'=>2010),$_smarty_tpl);?>

</form>

<h2>An example of the html_select_time function:</h2>

<form>
<?php echo smarty_function_html_select_time(array('use_24_hours'=>false),$_smarty_tpl);?>

</form>

<h2>An example using form_validation:</h2>

<?php echo smarty_function_ci_language(array('file'=>"label",'lang'=>((string)$_smarty_tpl->tpl_vars['lang']->value)),$_smarty_tpl);?>

<form action="#" method="post">
<fieldset>
	<label for="username"><?php echo smarty_function_ci_language(array('line'=>"username"),$_smarty_tpl);?>
:</label>
	<input type="text" name="username" id="username" value="<?php echo smarty_function_ci_form_validation(array('field'=>'username'),$_smarty_tpl);?>
" /><br />
	<?php echo smarty_function_ci_form_validation(array('field'=>'username','error'=>'true'),$_smarty_tpl);?>


	<label for="password"><?php echo smarty_function_ci_language(array('line'=>"password"),$_smarty_tpl);?>
:</label>
	<input type="password" name="password" id="password" value="" /><br />
	<?php echo smarty_function_ci_form_validation(array('field'=>'password','error'=>'true'),$_smarty_tpl);?>


	<label for="passconf"><?php echo smarty_function_ci_language(array('line'=>"passconf"),$_smarty_tpl);?>
:</label>
	<input type="password" name="passconf" id="passconf" value="" /><br />
	<?php echo smarty_function_ci_form_validation(array('field'=>'passconf','error'=>'true'),$_smarty_tpl);?>


	<label for="email"><?php echo smarty_function_ci_language(array('line'=>"email"),$_smarty_tpl);?>
:</label>
	<input type="text" name="email" id="email" value="<?php echo smarty_function_ci_form_validation(array('field'=>'email'),$_smarty_tpl);?>
" /><br />
	<?php echo smarty_function_ci_form_validation(array('field'=>'email','error'=>'true'),$_smarty_tpl);?>


	<?php echo smarty_function_ci_form_validation(array('field'=>'state','assign'=>'selected_state'),$_smarty_tpl);?>

	<label for="state"><?php echo smarty_function_ci_language(array('line'=>"state"),$_smarty_tpl);?>
:</label>
	<select name='state'>
	<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['state_options']->value,'selected'=>$_smarty_tpl->tpl_vars['selected_state']->value),$_smarty_tpl);?>

	</select><br />
	<?php echo smarty_function_ci_form_validation(array('field'=>'states','error'=>'true'),$_smarty_tpl);?>


	<input type="submit" name="action" value="submit" />
</form>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
