<?php /* Smarty version 3.1.27, created on 2015-10-22 23:18:26
         compiled from "C:\wamp\www\testForPhp.ru\templates\header.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:8778562952a2d400e3_89774835%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ef225aa6b6eae363a4dd41463c6dab5e48fa265a' => 
    array (
      0 => 'C:\\wamp\\www\\testForPhp.ru\\templates\\header.tpl',
      1 => 1434552958,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8778562952a2d400e3_89774835',
  'variables' => 
  array (
    'title' => 0,
    'Name' => 1,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_562952a2d523e9_93590606',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_562952a2d523e9_93590606')) {
function content_562952a2d523e9_93590606 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '8778562952a2d400e3_89774835';
?>
<HTML>
<HEAD>
<TITLE><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['Name']->value;?>
</TITLE>
</HEAD>
<BODY bgcolor="#ffffff">
<?php }
}
?>