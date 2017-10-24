<?php
/* Smarty version 3.1.30, created on 2017-08-05 13:01:33
  from "G:\www\ci\application\views\templates\pages\admin\user_list.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5985a58d5034b2_03438499',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1f454f61abf3a8cfb083ec17ea661c2f96b6f8dd' => 
    array (
      0 => 'G:\\www\\ci\\application\\views\\templates\\pages\\admin\\user_list.tpl',
      1 => 1501060244,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5985a58d5034b2_03438499 (Smarty_Internal_Template $_smarty_tpl) {
?>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['data']->value['admin_css_url'];?>
/user.css">

<div class="content-wrapper" style="min-height: 916px;">
    <section class="content-header">
        <h1>管理员列表</h1>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">管理员列表信息</h3>

                        <div class="box-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                                <div class="input-group-btn">
                                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">
                            <?php if ($_smarty_tpl->tpl_vars['user_list']->value) {?>
                                <tbody>
                                <tr>
                                    <th>ID</th>
                                    <th>userIcon</th>
                                    <th>userName</th>
                                    <th>realName</th>
                                </tr>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['user_list']->value, 'user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
?>
                                    <tr>
                                        <td><?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
</td>
                                        <td><img src="<?php echo $_smarty_tpl->tpl_vars['data']->value['public_img_url'];?>
/user/<?php echo $_smarty_tpl->tpl_vars['user']->value['userIcon'];?>
" onerror="javascript:this.src='<?php echo $_smarty_tpl->tpl_vars['data']->value['public_img_url'];?>
/default-user.jpg'"></td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['user']->value['userName'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['user']->value['realName'];?>
</td>
                                    </tr>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                            <?php }?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer clearfix">
                        <?php echo $_smarty_tpl->tpl_vars['pages']->value;?>

                    </div>
                </div>
                <!-- /.box -->
            </div>
        </div>
    </section>
</div><?php }
}
