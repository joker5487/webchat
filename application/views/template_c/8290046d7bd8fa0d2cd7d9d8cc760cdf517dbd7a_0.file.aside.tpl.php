<?php
/* Smarty version 3.1.30, created on 2017-07-27 03:48:10
  from "/usr/local/ci/application/views/templates/include/aside.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5979465ab10fa9_20416075',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8290046d7bd8fa0d2cd7d9d8cc760cdf517dbd7a' => 
    array (
      0 => '/usr/local/ci/application/views/templates/include/aside.tpl',
      1 => 1501120087,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5979465ab10fa9_20416075 (Smarty_Internal_Template $_smarty_tpl) {
?>
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo $_smarty_tpl->tpl_vars['data']->value['public_img_url'];?>
/fairytail.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <?php if ($_smarty_tpl->tpl_vars['data']->value['aside']) {?>
            <ul class="sidebar-menu">
                <li class="header">MAIN NAVIGATION</li>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value['aside'], 'menu1');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['menu1']->value) {
?>
                    <li class=" treeview">
                        <a href="<?php if ($_smarty_tpl->tpl_vars['menu1']->value['menuPath'] != '' && $_smarty_tpl->tpl_vars['menu1']->value['menuPath'] != 'javascript:;') {
echo $_smarty_tpl->tpl_vars['data']->value['base_url'];
}
echo $_smarty_tpl->tpl_vars['menu1']->value['menuPath'];?>
">
                            <i class="fa fa-dashboard"></i> <span><?php echo $_smarty_tpl->tpl_vars['menu1']->value['menuName'];?>
</span>
                            <?php if ($_smarty_tpl->tpl_vars['menu1']->value['subMenu']) {?>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            <?php }?>
                        </a>
                        <?php if ($_smarty_tpl->tpl_vars['menu1']->value['subMenu']) {?>
                            <ul class="treeview-menu">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['menu1']->value['subMenu'], 'menu2');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['menu2']->value) {
?>
                                    <li class="active">
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['data']->value['base_url'];
echo $_smarty_tpl->tpl_vars['menu2']->value['menuPath'];?>
"><i class="fa fa-circle-o"></i> <?php echo $_smarty_tpl->tpl_vars['menu2']->value['menuName'];?>
</a>
                                    </li>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                            </ul>
                        <?php }?>
                    </li>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </ul>
        <?php } else { ?>
            <ul class="sidebar-menu">
                <li class=" treeview">
                    <a href="javascript:;">
                        <i class="fa fa-dashboard"></i> <span>No Aside</span>
                    </a>
                </li>
            </ul>
        <?php }?>
    </section>
    <!-- /.sidebar -->
</aside><?php }
}
