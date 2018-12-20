<?php require APPROOT . '/views/inc/admheader.php'; ?> 

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dasbhboard
      </h1>
      <ol class="breadcrumb">
        <li class="active"><i class="fa fa-dashboard"></i> Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <!-- /.box-header -->
              <div class="box-body ">
                    <h3>Welcome to <?php  echo SITENAME ?> Blog</h3>
                    <p class="lead text-muted">Hello User, Welcome to <?php  echo SITENAME ?> Blog</p>

                    <h4>Get started</h4>
                    <p><a href="<?php   echo URLROOT ?>/admins/newpost" class="btn btn-primary">Write your a new blog post</a> </p>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>
        </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
    <?php require APPROOT . '/views/inc/admfooter.php'; ?>