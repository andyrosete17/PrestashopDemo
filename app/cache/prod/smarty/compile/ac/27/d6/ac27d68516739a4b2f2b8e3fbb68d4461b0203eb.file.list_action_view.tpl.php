<?php /* Smarty version Smarty-3.1.19, created on 2017-11-02 18:05:11
         compiled from "C:\xampp\htdocs\PrestashopDemo\admin07515qj8c\themes\default\template\helpers\list\list_action_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:107526699559fb50473cbb23-72647062%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ac27d68516739a4b2f2b8e3fbb68d4461b0203eb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PrestashopDemo\\admin07515qj8c\\themes\\default\\template\\helpers\\list\\list_action_view.tpl',
      1 => 1508764756,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '107526699559fb50473cbb23-72647062',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59fb50473f2e86_03004384',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59fb50473f2e86_03004384')) {function content_59fb50473f2e86_03004384($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['href']->value,'html','UTF-8');?>
" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['action']->value,'html','UTF-8');?>
" >
	<i class="icon-search-plus"></i> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['action']->value,'html','UTF-8');?>

</a>
<?php }} ?>
