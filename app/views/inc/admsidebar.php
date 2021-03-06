<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo URLROOT ?>/admin/img/user2.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Admin</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li>
          <a href="<?php   echo URLROOT ?>/admins/index">
            <i class="fa fa-home"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pencil"></i>
            <span>Blog</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php   echo URLROOT ?>/admins/post"><i class="fa fa-circle-o"></i> All Posts</a></li>
            <li><a href="<?php   echo URLROOT ?>/admins/newpost"><i class="fa fa-circle-o"></i> Add New</a></li>
          </ul>
        </li>
        <li><a href="<?php   echo URLROOT ?>/admins/categories"><i class="fa fa-folder"></i> <span>Categories</span></a></li>
         <li><a href="<?php   echo URLROOT ?>/admins/messages"><i class="fa fa-envelope"></i> <span>Messages</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
