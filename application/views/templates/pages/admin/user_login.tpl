{include file="../../include/header.tpl"}

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

{include file="../../include/footer.tpl"}