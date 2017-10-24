<?php
/* Smarty version 3.1.30, created on 2017-07-26 10:42:17
  from "/usr/local/ci/application/views/templates/layout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_597855e9c0c419_95742116',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3f7246398ea02331bd5771a9c585762251d95516' => 
    array (
      0 => '/usr/local/ci/application/views/templates/layout.tpl',
      1 => 1500474526,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./include/header.tpl' => 1,
    'file:./include/navbar.tpl' => 1,
    'file:./include/aside.tpl' => 1,
    'file:./pages/admin/".((string)$_smarty_tpl->tpl_vars[\'data\']->value[\'page\']).".tpl' => 1,
    'file:./include/footer.tpl' => 1,
  ),
),false)) {
function content_597855e9c0c419_95742116 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./include/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:./include/navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:./include/aside.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:./pages/admin/".((string)$_smarty_tpl->tpl_vars['data']->value['page']).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

<?php $_smarty_tpl->_subTemplateRender("file:./include/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
