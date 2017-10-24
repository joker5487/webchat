<?php
/* Smarty version 3.1.30, created on 2017-07-27 12:07:15
  from "/usr/local/ci/application/views/templates/pages/admin/user_login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5979bb53499730_38933132',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5084da787c07b02252fc2548ded865167d1bf050' => 
    array (
      0 => '/usr/local/ci/application/views/templates/pages/admin/user_login.tpl',
      1 => 1501150033,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../include/header.tpl' => 1,
    'file:../../include/footer.tpl' => 1,
  ),
),false)) {
function content_5979bb53499730_38933132 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../../include/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="content login-con">
    <section class="row">
        <div class="col-sm-4 col-sm-offset-4 col-xs-12">
            <div class="box box-info">
                <div class="box-header header-center">
                    <p class="logo-text">用户登录</p>
                </div>
                <!--main form-->
                <form method="post" action="">
                <div class="box-body">
                    <div class="form-group">
                        <label for="user_name" class="col-sm-2 control-label">Username</label>

                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="user_name" name="user_name"
                                   placeholder="User name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="user_psw" class="col-sm-2 control-label">Password</label>

                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="user_psw" name="user_psw"
                                   placeholder="Password">
                        </div>
                    </div>
                </div>
                <div class="box-footer footer-center">
                    <button type="submit" class="btn btn-primary color-pink" id="sign_in">Sign in</button>
                </div>
                </form>

            </div>

        </div>
    </section>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:../../include/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
