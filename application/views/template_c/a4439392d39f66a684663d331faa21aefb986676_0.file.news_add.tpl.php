<?php
/* Smarty version 3.1.30, created on 2017-08-05 14:37:48
  from "G:\www\ci\application\views\templates\pages\admin\news_add.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5985bc1c707e86_58896827',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a4439392d39f66a684663d331faa21aefb986676' => 
    array (
      0 => 'G:\\www\\ci\\application\\views\\templates\\pages\\admin\\news_add.tpl',
      1 => 1501936666,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5985bc1c707e86_58896827 (Smarty_Internal_Template $_smarty_tpl) {
?>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['data']->value['admin_css_url'];?>
/news_add.css">

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
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                        <div class="news">
                            <form class="form-horizontal">
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                                    <div class="col-sm-6">
                                        <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.box -->
            </div>
        </div>
    </section>
</div><?php }
}
