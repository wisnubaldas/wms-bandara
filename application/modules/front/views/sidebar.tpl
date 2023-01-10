     <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{base_url()}asset/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{ucfirst($user->username)}</p>
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
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        {foreach from=$data item=i key=k}
          <li class="treeview">
          <a href="#">
            <i class="{$i['parent_icon']}"></i> <span>{$i['parent_name']}</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            {foreach from=$i['detail'] item=im key=km}
              <li class=""><a href="{base_url($im['link'])}"><i class="fa fa-circle-o"></i> {$im['name']}</a></li>
            {/foreach}
              
          </ul>
        </li>
        {/foreach}
        <li class="header">LABELS</li>
        <li><a href="javascript:void"><i class="fa fa-circle-o text-red"></i> <span>{$class}</span></a></li>
        <li><a href="javascript:void"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
        <li><a href="javascript:void"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
      </ul>
