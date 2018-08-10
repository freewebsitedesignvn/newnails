<?php
/* Smarty version 3.1.32, created on 2018-07-24 07:21:49
  from 'W:\domains\ci3\nails\application\views\templates\backend\default\common\menuleft.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b56a95d5cb224_99429090',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b77b92d80d238d8bf660130dd621253951b7abae' => 
    array (
      0 => 'W:\\domains\\ci3\\nails\\application\\views\\templates\\backend\\default\\common\\menuleft.tpl',
      1 => 1532406109,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b56a95d5cb224_99429090 (Smarty_Internal_Template $_smarty_tpl) {
?><ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i><span>Dashboard</span>            
          </a>         
        </li>
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Website content</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="http://nails.tk/admin/blog/blog"><i class="fas fa-book-open"></i> Blog</a></li>
            <li><a href="http://nails.tk/admin/gallery/gallery"><i class="fas fa-image"></i> Gallery</a></li>
            <li><a href="http://nails.tk/admin/job/job/"><i class="fas fa-briefcase"></i> Job</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Accounts</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href=""><i class="fa fa-circle-o"></i> Users</a></li>
            <li><a href="http://nails.tk/admin/account/groupaccount/"><i class="fa fa-circle-o"></i> Groups</a></li>
                      </ul>
        </li>
       
      </ul><?php }
}
