<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{$data.public_img_url}/fairytail.jpg" class="img-circle" alt="User Image">
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
        {if $data.aside}
            <ul class="sidebar-menu">
                <li class="header">MAIN NAVIGATION</li>
                {foreach $data.aside as $menu1}
                    <li class=" treeview">
                        <a href="{if $menu1.menuPath != '' && $menu1.menuPath != 'javascript:;'}{$data.base_url}{/if}{$menu1.menuPath}">
                            <i class="fa fa-dashboard"></i> <span>{$menu1.menuName}</span>
                            {if $menu1.subMenu}
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            {/if}
                        </a>
                        {if $menu1.subMenu}
                            <ul class="treeview-menu">
                                {foreach $menu1.subMenu as $menu2}
                                    <li class="active">
                                        <a href="{$data.base_url}{$menu2.menuPath}"><i class="fa fa-circle-o"></i> {$menu2.menuName}</a>
                                    </li>
                                {/foreach}
                            </ul>
                        {/if}
                    </li>
                {/foreach}
            </ul>
        {else}
            <ul class="sidebar-menu">
                <li class=" treeview">
                    <a href="javascript:;">
                        <i class="fa fa-dashboard"></i> <span>No Aside</span>
                    </a>
                </li>
            </ul>
        {/if}
    </section>
    <!-- /.sidebar -->
</aside>