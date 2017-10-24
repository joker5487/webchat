<link rel="stylesheet" href="{$data.admin_css_url}/user.css">

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
                            {if $user_list}
                                <tbody>
                                <tr>
                                    <th>ID</th>
                                    <th>userIcon</th>
                                    <th>userName</th>
                                    <th>realName</th>
                                </tr>
                                {foreach $user_list as $user}
                                    <tr>
                                        <td>{$user.id}</td>
                                        <td><img src="{$data.public_img_url}/user/{$user.userIcon}" onerror="javascript:this.src='{$data.public_img_url}/default-user.jpg'"></td>
                                        <td>{$user.userName}</td>
                                        <td>{$user.realName}</td>
                                    </tr>
                                {/foreach}
                            {/if}
                            </tbody>
                        </table>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer clearfix">
                        {$pages}
                    </div>
                </div>
                <!-- /.box -->
            </div>
        </div>
    </section>
</div>