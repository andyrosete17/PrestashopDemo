<?php /* Smarty version Smarty-3.1.19, created on 2017-11-01 18:01:28
         compiled from "C:\xampp\htdocs\PrestashopDemo\admin07515qj8c\themes\default\template\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:170757607559f9fde80ac914-09158758%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5033049423ffbed37a69181b6e372bc659ee061c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PrestashopDemo\\admin07515qj8c\\themes\\default\\template\\content.tpl',
      1 => 1508764756,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '170757607559f9fde80ac914-09158758',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59f9fde80af030_84506236',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f9fde80af030_84506236')) {function content_59f9fde80af030_84506236($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }} ?>
