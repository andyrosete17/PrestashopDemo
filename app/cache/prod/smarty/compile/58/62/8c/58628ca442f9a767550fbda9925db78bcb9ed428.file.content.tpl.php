<?php /* Smarty version Smarty-3.1.19, created on 2017-11-03 12:07:59
         compiled from "C:\xampp\htdocs\PrestashopDemo\admin07515qj8c\themes\default\template\controllers\localization\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:171475698959fc4e0f49e979-14577808%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '58628ca442f9a767550fbda9925db78bcb9ed428' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PrestashopDemo\\admin07515qj8c\\themes\\default\\template\\controllers\\localization\\content.tpl',
      1 => 1508764756,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '171475698959fc4e0f49e979-14577808',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'localization_form' => 0,
    'localization_options' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59fc4e0f4f1218_71903108',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59fc4e0f4f1218_71903108')) {function content_59fc4e0f4f1218_71903108($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['localization_form']->value)) {?><?php echo $_smarty_tpl->tpl_vars['localization_form']->value;?>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['localization_options']->value)) {?><?php echo $_smarty_tpl->tpl_vars['localization_options']->value;?>
<?php }?>
<script type="text/javascript">
	$(document).ready(function() {
		$('#PS_CURRENCY_DEFAULT').change(function(e) {
			alert("<?php echo smartyTranslate(array('s'=>'Before changing the default currency, we strongly recommend that you enable maintenance mode. Indeed, any change on the default currency requires a manual adjustment of the price of each product and its combinations.','d'=>'Admin.International.Notification','js'=>1),$_smarty_tpl);?>
");
		});
	});
</script>
<?php }} ?>
