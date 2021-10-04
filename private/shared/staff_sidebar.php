  <div class="sidebar sidebar-style-2">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
      <div class="sidebar-content">
        <div class="user">
          <div class="avatar-sm float-left mr-2">
            <img src="<?php echo url_for('assets/img/mainlogo.jpg'); ?>" alt="..." class="avatar-img rounded-circle">
          </div>
          <div class="info">
            <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
              <span>
                CMB
                <span class="user-level"><?php echo $loggedInAdmin->full_name(); ?></span>
                <span class="caret"></span>
              </span>
            </a>
            <div class="clearfix"></div>

            <div class="collapse in" id="collapseExample">
              <ul class="nav">
                <li>
                  <a href="<?php echo url_for('admin/profiles?id=' . $loggedInAdmin->id); ?>">
                    <span class="link-collapse">My Profile</span>
                  </a>
                </li>
                <li>
                  <a href="#settings">
                    <span class="link-collapse">Settings</span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <ul class="nav nav-primary">
          <li class="nav-item <?php echo $page_title == 'CMB | Dashboard' ? 'active submenu' : ''; ?>">
            <a data-toggle="collapse" href="#dashboard" class="collapsed" aria-expanded="false">
              <i class="fas fa-home"></i>
              <p>Dashboard</p>
              <span class="caret"></span>
            </a>
            <div class="collapse" id="dashboard">
              <ul class="nav nav-collapse">
                <li class="<?php echo $page_title == 'CMB | Dashboard' ? 'active' : ''; ?>">
                  <a href="<?php echo url_for('admin/dashboard'); ?>">
                    <span class="sub-item">Dashboard</span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-section">
            <span class="sidebar-mini-icon">
              <i class="fa fa-ellipsis-h"></i>
            </span>
            <h4 class="text-section">Control Unit</h4>
          </li>
          <li class="nav-item <?php echo $page_title == 'CMB | Categories' ? 'active submenu' : ''; ?>">
            <a data-toggle="collapse" href="#base" aria-expanded="<?php echo $page_title == 'CMB | Categories' ? 'true' : 'false'; ?>">
              <i class="fas fa-layer-group"></i>
              <p>Categories</p>
              <span class="caret"></span>
            </a>
            <div class="collapse <?php echo $page_title == 'CMB | Categories' ? 'show' : ''; ?>" id="base">
              <ul class="nav nav-collapse">
                <li class="<?php echo $page_title == 'CMB | Categories' ? 'active' : ''; ?>">
                  <a href="<?php echo url_for('admin/categories'); ?>">
                    <span class="sub-item">All Categories</span>
                  </a>
                </li>
                <li>
                  <a href="#!">
                    <span class="sub-item">Add Categories</span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item <?php echo $page_title == 'CMB | Products' ? 'active submenu' : ''; ?>">
            <a data-toggle="collapse" href="#tables" aria-expanded="<?php echo $page_title == 'CMB | Products' ? 'true' : 'false'; ?>">
              <i class="fas fa-table"></i>
              <p>Products</p>
              <span class="caret"></span>
            </a>
            <div class="collapse <?php echo $page_title == 'CMB | Products' ? 'show' : ''; ?>" id="tables">
              <ul class="nav nav-collapse">
                <li class="<?php echo $page_title == 'CMB | Products' ? 'active' : ''; ?>">
                  <a href="<?php echo url_for('admin/products'); ?>">
                    <span class="sub-item">All Products</span>
                  </a>
                </li>
                <li>
                  <a href="#!">
                    <span class="sub-item">Add Products</span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item <?php echo $page_title == 'CMB | ACL' ? 'active submenu' : ''; ?>">
            <a href="<?php echo url_for('admin/acl'); ?>">
              <i class="fas fa-desktop"></i>
              <p>ACL</p>
              <span class="badge badge-danger">!</span>
            </a>
          </li>

          <li class="nav-section">
            <span class="sidebar-mini-icon">
              <i class="fa fa-ellipsis-h"></i>
            </span>
            <h4 class="text-section">User Management</h4>
          </li>
          <li class="nav-item <?php echo $page_title == 'CMB | Users' ? 'active submenu' : ''; ?>">
            <a data-toggle="collapse" href="#userManagement" aria-expanded="<?php echo $page_title == 'CMB | Users' ? 'true' : 'false'; ?>">
              <i class="fas fa-users-cog"></i>
              <p>Users</p>
              <span class="caret"></span>
            </a>
            <div class="collapse <?php echo $page_title == 'CMB | Users' ? 'show' : ''; ?>" id="userManagement">
              <ul class="nav nav-collapse">
                <li class="<?php echo $page_title == 'CMB | Users' ? 'active' : ''; ?>">
                  <a href="<?php echo url_for('admin/users'); ?>">
                    <span class="sub-item">All Users</span>
                  </a>
                </li>
                <li>
                  <a href="#!">
                    <span class="sub-item">Add Users</span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>

  <div class="main-panel">