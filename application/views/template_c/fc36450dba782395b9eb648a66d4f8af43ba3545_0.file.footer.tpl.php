<?php
/* Smarty version 3.1.30, created on 2017-07-27 15:22:17
  from "G:\www\ci\application\views\templates\include\footer.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5979e9094f7185_67775779',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fc36450dba782395b9eb648a66d4f8af43ba3545' => 
    array (
      0 => 'G:\\www\\ci\\application\\views\\templates\\include\\footer.tpl',
      1 => 1500467944,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5979e9094f7185_67775779 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['data']->value['public_js_url'];?>
/jquery-3.2.1.min.js"><?php echo '</script'; ?>
>
<!-- jQuery UI 1.11.4 -->
<?php echo '<script'; ?>
 src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"><?php echo '</script'; ?>
>
<!-- Bootstrap 3.3.6 -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['data']->value['public_js_url'];?>
/bootstrap.min.js"><?php echo '</script'; ?>
>
<!-- AdminLTE App -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['data']->value['public_js_url'];?>
/app.min.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
